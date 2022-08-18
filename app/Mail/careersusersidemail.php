<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class careersusersidemail extends Mailable
{
    use Queueable, SerializesModels;
    public $contain2;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contain2)
    {
        $this->contain2 = $contain2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('careersusermail')->subject('Apply for  '  . $this->contain2['applied_position'])->with('contain', $this->contain2)->markdown('careersusermail');
    }
}
