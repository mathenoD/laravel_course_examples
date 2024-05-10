<?php

namespace App\Providers;

use App\Events\PostCreated;
use App\Listeners\HandlePostCreated;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Register your event and listener here
        PostCreated::class => [
            HandlePostCreated::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
