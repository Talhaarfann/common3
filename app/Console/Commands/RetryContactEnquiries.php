<?php

namespace App\Console\Commands;

use App\Models\ContactEnquiry;
use App\Services\SendContactEnquiry;
use Illuminate\Console\Command;

class RetryContactEnquiries extends Command
{
    protected $signature = 'contact:retry {--id= : Retry one enquiry}';

    protected $description = 'Send pending or failed Common3 enquiry notifications after SMTP is configured';

    public function handle(SendContactEnquiry $sender): int
    {
        $failed = false;
        ContactEnquiry::whereIn('notification_status', ['pending', 'failed'])
            ->when($this->option('id'), fn ($query) => $query->whereKey($this->option('id')))
            ->chunkById(50, function ($enquiries) use ($sender, &$failed) {
                foreach ($enquiries as $enquiry) {
                    $sent = $sender->send($enquiry);
                    $failed = $failed || ! $sent;
                    $this->line('Enquiry #'.$enquiry->id.': '.($sent ? 'sent' : 'failed'));
                }
            });

        return $failed ? self::FAILURE : self::SUCCESS;
    }
}
