<?php


namespace App\Services;


use App\Events\NewMessage;
use App\Http\Controllers\User\UserController;
use App\Repositories\MessageRepository;

class MessageService
{
    /**
     * @var MessageRepository
     */
    private $messageRepository;

    /**
     * MessageService constructor.
     * @param MessageRepository $messageRepository
     */
    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    /**
     * @param array $message
     * @return mixed
     */
    public function create(array  $message)
    {
        $message_data = $this->messageRepository->create($message);
        $user_cont = New UserController();
        $recipient = $user_cont->getUserById($message["recipient_id"]);
        $sender = $user_cont->getUserById($message["sender_id"]);

        event(new NewMessage($recipient, $message_data, $sender));

        return $message_data;
    }
}