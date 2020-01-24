<?php

namespace App\Listeners;

use App\Events\AssignSelfPackage;
use App\Mail\AssignSelfAssociateEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class AcknowledgeRequestToAssignSelfAPackage
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
     * @param  AssignSelfPackage  $event
     * @return void
     */
    public function handle(AssignSelfPackage $event)
    {
        $user = $event->user;
        $data = $event->data;


//        sends email to user who registered for a package
        sleep(3);
        Mail::to($user)->send(new AssignSelfAssociateEmail($user, $data));
    }
}
