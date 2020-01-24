<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AssignApplicationToExpert extends Mailable
{
    use Queueable, SerializesModels;
    public $expert;
    public $applicationRequesttoAssign;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($expert, $applicationRequesttoAssign)
    {
        $this->expert = $expert;
        $this->applicationRequesttoAssign = $applicationRequesttoAssign ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('assign_expert');
    }
}
