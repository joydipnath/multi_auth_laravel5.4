<?php

namespace App\Mail;

use App\Employer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeEmployer extends Mailable
{
    use Queueable, SerializesModels;

    public $user;   // Property of mailable class is anything define public is available to views

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Employer $user)
    {
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.verificationEmployer');  // $user is available here as it is public
    }
}
