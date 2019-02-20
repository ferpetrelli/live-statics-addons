<?php

namespace Petrelli\LiveStaticsAddons;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Petrelli\LiveStaticsAddons\Helpers\InterfaceMapper;
use Petrelli\LiveStaticsAddons\Facades\InterfaceMapperFacade;

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

        // Bind extra elements
        $this->bindElements(config('live-statics.enabled'), config('live-statics.version'));

    }


    public function register()
    {

        // Bind Class Resolver
        $this->app->singleton('live-statics-addons.interface-mapper', function($app) {
            return new InterfaceMapper();
        });

        // Bind Facade
        AliasLoader::getInstance()->alias('InterfaceMapper', InterfaceMapperFacade::class);

    }


    public function publishConfig()
    {

        $this->publishes([
            __DIR__.'/../config/live-statics-addons.php' => config_path('live-statics-addons.php'),
        ]);

    }


    private function mergeConfigs()
    {

        $this->mergeConfigFrom(__DIR__ . '/../config/live-statics-addons.php', 'live-statics-addons');

    }


    protected function bindElements($enabled = false, $version = 0)
    {


        if (is_array(config('live-statics-addons.twill.blocks'))) {

            foreach (config('live-statics-addons.twill.blocks') as $interface => $items) {

                // TODO: Improve how these configuration values are managed
                $classes = collect($items);
                $mocked  = $classes->first();
                $real    = $classes->last();

                if ($enabled || (!$enabled && $real)) {
                    $this->bindVersionedClass($enabled, $version, $interface, $mocked, $real);
                }

            }

        }

    }


    protected function bindVersionedClass($enabled, $version, $interface, $mocked, $real)
    {

        $this->app->bind($interface, function () use ($enabled, $version, $mocked, $real) {
            if ($enabled) {

                if ($version) {
                    $versionedEntity = $mocked . $version;

                    if (class_exists($versionedEntity)) {
                        $mocked = $versionedEntity;
                    }
                }

                return $mocked::create();
            } else {
                return app($real);
            }
        });

    }


}

