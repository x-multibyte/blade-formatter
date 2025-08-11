<?php

namespace XMultibyte\BladeFormatter;

use Illuminate\Support\ServiceProvider;

class BladeFormatterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(
            abstract: 'blade-formatter',
            concrete: fn($app): BladeFormatter => new BladeFormatter());
    }

    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-formatter.php', 'blade-formatter');

        $this->commands([
            Console\Commands\InstallCommand::class,
            Console\Commands\BladeFormatterCommand::class,
        ]);

        $this->publishes([__DIR__ . '/../config/blade-formatter.php' => config_path('blade-formatter.php')], 'blade-formatter-config');
        $this->publishes([__DIR__ . '/../database/migrations/' => database_path('migrations')], 'blade-formatter-migrations');
        $this->publishes([__DIR__ . '/../resources/views/' => resource_path('views/vendor/blade-formatter')], 'blade-formatter-views');
        $this->publishes([__DIR__ . '/../resources/assets' => public_path('vendor/blade-formatter')], 'blade-formatter-assets');
        $this->publishes([__DIR__ . '/../resources/lang' => lang_path('vendor/blade-formatter')], 'blade-formatter-langs');
    }
}
