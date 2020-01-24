<?php

namespace App\Listeners;

use App\Events\NewPackageCreated;
use App\Http\Controllers\User\UserController;
use App\Mail\SendExpertOfNewPackage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class NotifyAssociatesOfNewPackage
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
       $expertController = new UserController();
       $experts = $expertController->fetchAll();

       foreach ($experts as $expert){
           sleep(3);
           Mail::to($expert)->send(new SendExpertOfNewPackage($expert));
       }
    }
}
