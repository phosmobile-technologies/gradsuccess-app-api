<?php

namespace App\Listeners;

use App\Events\AssignAssociatePackage;
use App\Mail\PackageApprovedAssociate;
use App\Mail\PackageAssignedAssociate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class NotifyAssociatePackageAssignment
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
     * @param  AssignAssociatePackage  $event
     * @return void
     */
    public function handle(AssignAssociatePackage $event)
    {
        $user = $event->user;
        $data = $event->data;
        $associate = $event->associate;
        sleep(3);
        Mail::to($associate)->send(new PackageAssignedAssociate($user, $data, $associate));

    }
}
