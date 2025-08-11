<?php

namespace XMultibyte\BladeFormatter\Providers;

use XMultibyte\BladeFormatter\Events;

class EventServiceProvider extends \Illuminate\Foundation\Support\Providers\EventServiceProvider
{
    protected $listen = [
        Events\InstallationCompleted::class => [

        ],
    ];


    public function register(): void
    {

    }

    public function boot(): void
    {
    }
}
