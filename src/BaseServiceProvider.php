<?php

namespace Petrelli\LiveStaticsAddons;

use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // Register command to publish the configuration file
        $this->publishConfig();

    }


    public function publishConfig()
    {

        $this->publishes([
            __DIR__.'/../config/live-statics-addons.php' => config_path('live-statics-addons.php'),
        ]);

    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }


    private function mergeConfigs()
    {

        $this->mergeConfigFrom(__DIR__ . '/../config/live-statics-addons.php', 'live-statics-addons');

    }


}

