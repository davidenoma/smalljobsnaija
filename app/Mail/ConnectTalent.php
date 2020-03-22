<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConnectTalent extends Mailable
{
    use Queueable, SerializesModels;
    public $welcomeAddress;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($welcomeAddress)
    {
        //
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.connecttalent');
    }
}
