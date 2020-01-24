<?php

namespace App\Listeners;

use App\Events\PackageApproved;
use App\Mail\AssignSelfAssociateEmail;
use App\Mail\PackageApprovedAdmin;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class AcknowledgeAdminOfPackageApproval
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

        $admin =   User::where('account_type', "Admin")->get();

//        sends email to user who registered for a package
        sleep(3);
        Mail::to($admin)->send(new PackageApprovedAdmin($user, $data, $associate));
    }
}
