<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\NewPackageCreated' => [
            'App\Listeners\NotifyAssociatesOfNewPackage',
            'App\Listeners\SendPackageCreatedEmail',
        ],
        'App\Events\AssignSelfPackage' => [
            'App\Listeners\NotifyAdminOfRequestToAssignSelfPackage',
            'App\Listeners\AcknowledgeRequestToAssignSelfAPackage',
        ],
        'App\Events\PackageApproved' => [
            'App\Listeners\AcknowledgeAdminOfPackageApproval',
            'App\Listeners\NotifyAssociateRequestApproval',
            'App\Listeners\NotifyUserPackageIsAssigned',

        ],
        'App\Events\PackageDeclined' => [
            'App\Listeners\AcknowledgeAdminOfPackageDeclination',
            'App\Listeners\NotifyAssociateRequestDeclination',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
