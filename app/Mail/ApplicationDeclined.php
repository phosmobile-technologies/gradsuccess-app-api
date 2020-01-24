<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplicationDeclined extends Mailable
{
    use Queueable, SerializesModels;
    public $expert;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($expert)
    {
        $this->expert = $expert ;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('declined_application');
    }
}
