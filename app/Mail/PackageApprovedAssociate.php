<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PackageApprovedAssociate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var User
     */
    public $user;
    public $data;
    public $associate;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param $data
     * @param $associate
     */
    public function __construct(User $user, $data, $associate)
    {
        //
        $this->user = $user;
        $this->data = $data;
        $this->associate = $associate;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('NewPackage.package_approved_associate');
    }
}
