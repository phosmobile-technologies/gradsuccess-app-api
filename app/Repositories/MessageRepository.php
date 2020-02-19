<?php


namespace App\Repositories;


use App\Contracts\MessageContract;
use App\Models\Messages;

class MessageRepository implements MessageContract
{

    /**
     * @param array $message
     * @return Messages
     */
    public function create(array $message): Messages
    {
        // TODO: Implement create() method.
        return Messages::create($message);
    }
}