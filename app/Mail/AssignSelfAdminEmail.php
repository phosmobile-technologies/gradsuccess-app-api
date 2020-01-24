<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AssignSelfAdminEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $data;

    /**
     * Create a new message instance.
     *
     * @param $user
     * @param $data
     */
    public function __construct($user, $data)
    {
        //
        $this->user = $user;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('NewPackage.assign_self_admin');
    }
}
