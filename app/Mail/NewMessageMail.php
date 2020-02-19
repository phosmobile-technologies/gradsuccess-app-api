<?php

namespace App\Mail;

use App\Models\Messages;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewMessageMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var User
     */
    public $recipient;
    /**
     * @var User
     */
    public $sender;
    /**
     * @var Messages
     */
    public $messages;

    /**
     * Create a new message instance.
     *
     * @param User $recipient
     * @param Messages $messages
     * @param User $sender
     */
    public function __construct(User $recipient, Messages $messages, User $sender)
    {
        //
        $this->recipient = $recipient;
        $this->sender = $sender;
        $this->messages = $messages;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('message.new_message');
    }
}
