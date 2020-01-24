<?php

namespace App\Listeners;

use App\Events\PackageApproved;
use App\Mail\AssignSelfAssociateEmail;
use App\Mail\PackageApprovedUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class NotifyUserPackageIsAssigned
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
     * @param  PackageApproved  $event
     * @return void
     */
    public function handle(PackageApproved $event)
    {
        $user = $event->user;
        $data = $event->data;
        $associate = $event->associate;


//        sends email to user who registered for a package
        sleep(3);
        Mail::to($user)->send(new PackageApprovedUser($user, $data,$associate));
    }
}
