<?php

namespace sedaaydin360drc\greetings2\Providers;

use Illuminate\Support\ServiceProvider;
use sedaaydin360drc\greetings2\Controller\PackageController;

class ApexServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make(PackageController::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './routes.php');
        $this->loadViewsFrom(__DIR__ . './views', 'sedaaydin');
    }
}
