<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendExpertOfNewPackage extends Mailable
{
    use Queueable, SerializesModels;
    public $expert;

    /**
     * Create a new message instance.
     * @param $expert
     * @return void
     */
    public function __construct($expert)
    {
        //
        $this->expert = $expert;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('NewPackage.notify_experts');
    }
}
