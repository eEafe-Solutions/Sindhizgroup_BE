<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class careersmail extends Mailable
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
        return $this->view('careersmail')->subject('Apply for  '  . $this->contain['applied_position'])->with('contain', $this->contain)->markdown('careersmail');
    }
}