<?php

namespace App\Services;

use App\Mail\ContactEnquiryMail;
use App\Models\ContactEnquiry;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use RuntimeException;
use Throwable;

class SendContactEnquiry
{
    public function send(ContactEnquiry $enquiry): bool
    {
        try {
            $mailer = config('contact.mailer');
            if (! config("mail.mailers.{$mailer}.username") || ! config("mail.mailers.{$mailer}.password")) {
                throw new RuntimeException('Common3 contact SMTP credentials are not configured.');
            }

            Mail::mailer($mailer)->to(config('contact.recipient'))->send(new ContactEnquiryMail($enquiry));
        } catch (Throwable $exception) {
            $enquiry->forceFill(['notification_status' => 'failed'])->save();
            // Keep visitor details and SMTP credentials out of diagnostic messages.
            Log::warning('Common3 enquiry notification failed.', ['enquiry_id' => $enquiry->id]);

            return false;
        }

        $enquiry->forceFill(['notification_status' => 'sent', 'emailed_at' => now()])->save();

        return true;
    }
}
