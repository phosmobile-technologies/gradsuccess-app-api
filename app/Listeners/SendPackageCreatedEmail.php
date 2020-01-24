<?php

namespace App\Listeners;

use App\Events\NewPackageCreated;
use App\Mail\NewCoverLetterPackage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendPackageCreatedEmail
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
     * @param  NewPackageCreated  $event
     * @return void
     */
    public function handle(NewPackageCreated $event)
    {
        $user = $event->user;


//        sends email to user who registered for a package
        sleep(3);
        Mail::to($user)->send(new NewCoverLetterPackage($user));

    }
}
