<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contain;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contain)
    {
        $this->contain = $contain;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
public function build()
    {
        return $this->view('mails')->with('contain', $this->contain)->markdown('mails');
    }
}
