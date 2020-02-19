<?php

namespace App\Listeners;

use App\Events\NewMessage;
use App\Mail\NewMessageMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class NotifyRecipientOfNewMessage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewMessage  $event
     * @return void
     */
    public function handle(NewMessage $event)
    {
        $recipient = $event->recipient;
        $message = $event->message;
        $sender = $event->sender;
        //        sends email to recipient who registered for a package
        sleep(3);
        Mail::to($recipient)->send(new NewMessageMail($recipient, $message,$sender));
    }
}
