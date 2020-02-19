<?php

namespace App\Listeners;

use App\Events\AssignAssociatePackage;
use App\Mail\PackageAssignedAdmin;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class AcknowledgeAdminOfPackageAssignment
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

        $admin =   User::where('account_type', "Admin")->get();
        $user = $event->user;
        $data = $event->data;
        $associate = $event->associate;

        sleep(3);
        Mail::to($admin)->send(new PackageAssignedAdmin($user, $data, $associate));
    }
}
