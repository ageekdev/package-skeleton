<?php

namespace Ageekdev\:package_namespace;

use Illuminate\Support\ServiceProvider;

class PackageNameServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/:package_name.php', ':package_name');

        $this->app->singleton(':package_name', function () {
            return new :package_name();
        });
    }

    /**
     * Bootstrap the application services
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/:package_name.php' => config_path(':package_name.php'),
        ], 'config');
    }
}
