<?php

namespace App\Mail;

use App\Models\CoverLetterReview;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewCoverLetterPackage extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var CoverLetterReview
     */
    public $package;
    /**
     * @var User
     */
    public $user;

    /**
     * Create a new message instance.
     * @param  CoverLetterReview $package
     * @param  User $user
     * @return void
     */
    public function __construct( User $user){
        $this->user = $user;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('NewPackage.cover_letter_review');
    }
}
