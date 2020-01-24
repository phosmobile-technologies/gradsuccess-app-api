<?php

namespace App\Listeners;

use App\Events\PackageDeclined;
use App\Mail\AssignSelfAssociateEmail;
use App\Mail\PackageDeclinedAdmin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class AcknowledgeAdminOfPackageDeclination
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
     * @param  PackageDeclined  $event
     * @return void
     */
    public function handle(PackageDeclined $event)
    {
        $user = $event->user;
        $data = $event->data;


//        sends email to user who registered for a package
        sleep(3);
        Mail::to($user)->send(new PackageDeclinedAdmin($user, $data));
    }
}
