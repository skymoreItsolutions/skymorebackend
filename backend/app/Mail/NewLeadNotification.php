<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewLeadNotification extends Mailable
{
    use Queueable, SerializesModels;

       public $lead;

    public function __construct($lead)
    {
        $this->lead = $lead;
    }

    public function build()
    {
        return $this->subject('🎉 New Lead Notification')
                    ->view('emails.new-lead');
    }
}
