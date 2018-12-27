<?php

namespace App\Mail;

use App\Models\leads;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LeadCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $leads;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(leads $leads)
    {
        $this->leads = $leads;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.lead');
    }
}
