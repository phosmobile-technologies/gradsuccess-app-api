<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewApplicationAlert extends Mailable
{
    use Queueable, SerializesModels;
    public $first_name;
    /**
     * Create a new message instance.
     *
     * @return void
     * @return void
     */
    public function __construct($package)
    {
        $this->first_name = $first_name;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('new_application_alert');
    }
}
