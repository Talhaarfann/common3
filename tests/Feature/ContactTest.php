<?php

namespace Tests\Feature;

use App\Mail\ContactEnquiryMail;
use App\Models\ContactEnquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function createApplication()
    {
        $app = parent::createApplication();
        // Never run contact tests against the user's configured MySQL database.
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite.database', ':memory:');
        $app['config']->set('mail.mailers.common3.password', 'test-only');

        return $app;
    }

    private function payload(): array
    {
        return ['name' => 'Test Visitor', 'email' => 'visitor@example.com', 'message' => 'I would like help with social content.'];
    }

    public function test_contact_page_uses_the_theme_and_common3_details(): void
    {
        $this->get(route('contact'))->assertOk()->assertSee('data-laravel-contact', false)
            ->assertSee('info@common3.com')->assertSee('common.3')->assertSee('Talhaarfann')
            ->assertSee('teamTogether.png')->assertDontSee('Welcome to our office')
            ->assertDontSee('support@mixdesign.dev');
        $this->get('/contact.html')->assertRedirect('/contact');
        $this->get('/')->assertOk()->assertSee(route('contact'));
    }

    public function test_valid_enquiry_is_saved_and_emailed_to_common3(): void
    {
        Mail::fake();
        $this->post(route('contact.store'), $this->payload())->assertRedirect(route('contact.thank-you'))
            ->assertSessionHasNoErrors();

        $this->assertDatabaseHas('contact_enquiries', ['email' => 'visitor@example.com', 'notification_status' => 'sent']);
        $this->assertNotNull(ContactEnquiry::first()->emailed_at);
        Mail::assertSent(ContactEnquiryMail::class, function ($mail) {
            return $mail->hasTo('info@common3.com') && $mail->envelope()->replyTo[0]->address === 'visitor@example.com';
        });
    }

    public function test_validation_and_honeypot_prevent_storage_and_mail(): void
    {
        Mail::fake();
        $this->post(route('contact.store'), ['name' => 'Test', 'email' => 'invalid', 'message' => 'short'])
            ->assertSessionHasErrors(['email', 'message']);
        $this->post(route('contact.store'), [...$this->payload(), 'website' => 'spam'])
            ->assertSessionHasErrors('website');
        $this->assertDatabaseCount('contact_enquiries', 0);
        Mail::assertNothingSent();
    }

    public function test_confirmation_page_matches_the_shared_theme(): void
    {
        $this->get(route('contact.thank-you'))->assertOk()->assertSee('received.')
            ->assertSee('will contact you soon')->assertSee('Back to Home')
            ->assertSee('common3-gradient-text')->assertSee('id="mxd-footer"', false);
    }

    public function test_missing_credentials_preserve_enquiry_without_claiming_success(): void
    {
        config(['mail.mailers.common3.password' => null]);
        Mail::fake();
        $this->post(route('contact.store'), $this->payload())->assertRedirect(route('contact').'#contact-feedback')->assertSessionHasErrors('delivery')
            ->assertSessionMissing('contact_success');
        $this->assertDatabaseHas('contact_enquiries', ['notification_status' => 'failed']);
        Mail::assertNothingSent();
    }

    public function test_transport_failure_preserves_the_enquiry_for_retry(): void
    {
        Mail::shouldReceive('mailer')->once()->with('common3')->andReturnSelf();
        Mail::shouldReceive('to')->once()->with('info@common3.com')->andReturnSelf();
        Mail::shouldReceive('send')->once()->andThrow(new \RuntimeException('Transport unavailable'));
        $this->post(route('contact.store'), $this->payload())->assertSessionHasErrors('delivery');
        $this->assertDatabaseHas('contact_enquiries', ['notification_status' => 'failed', 'emailed_at' => null]);
    }

    public function test_saved_notifications_can_be_retried_without_resending_sent_records(): void
    {
        Mail::fake();
        $enquiry = ContactEnquiry::create($this->payload());
        $this->artisan('contact:retry', ['--id' => $enquiry->id])->assertSuccessful();
        $this->artisan('contact:retry', ['--id' => $enquiry->id])->assertSuccessful();
        Mail::assertSent(ContactEnquiryMail::class, 1);
        $this->assertEquals('sent', $enquiry->fresh()->notification_status);
    }

    public function test_enquiry_content_is_escaped_in_the_email(): void
    {
        $enquiry = new ContactEnquiry([...$this->payload(), 'message' => '<script>alert("test")</script>']);
        $html = (new ContactEnquiryMail($enquiry))->render();
        $this->assertStringNotContainsString('<script>', $html);
        $this->assertStringContainsString('&lt;script&gt;', $html);
    }

    public function test_contact_submission_is_rate_limited(): void
    {
        Mail::fake();
        for ($attempt = 0; $attempt < 5; $attempt++) {
            $this->post(route('contact.store'), [])->assertStatus(302);
        }
        $this->post(route('contact.store'), [])->assertStatus(429);
        Mail::assertNothingSent();
    }
}
