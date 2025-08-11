<?php

namespace XMultibyte\LaravelPackage;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(
            abstract: 'package',
            concrete: fn($app): Package => new Package());
    }

    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/package.php', 'package');

        $this->commands([
            Console\Commands\InstallCommand::class,
        ]);

        $this->publishes([__DIR__ . '/../config/package.php', config_path('package.php')], 'package-config');
        $this->publishes([__DIR__ . '/../database/migrations/' => database_path('migrations')], 'package-migrations');
        $this->publishes([__DIR__ . '/../resources/views/' => resource_path('views/vendor/package')], 'package-views');
        $this->publishes([__DIR__ . '/../resources/assets' => public_path('vendor/package')], 'package-assets');
        $this->publishes([__DIR__ . '/../resources/lang' => lang_path('vendor/package')], 'package-langs');
    }
}
