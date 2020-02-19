<?php

namespace App\Events;

use App\Models\Messages;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewMessage
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var
     */
    public $message;
    /**
     * @var User
     */
    public $recipient;
    /**
     * @var User
     */
    public $sender;

    /**
     * Create a new event instance.
     *
     * @param User $recipient
     * @param Messages $message
     * @param User $sender
     */
    public function __construct(User $recipient, Messages $message, User $sender)
    {
        $this->message = $message;
        $this->recipient = $recipient;
        $this->sender = $sender;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
