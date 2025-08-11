<?php

namespace XMultibyte\LaravelPackage\Providers;

use XMultibyte\LaravelPackage\Events;

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
