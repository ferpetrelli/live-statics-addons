<?php

namespace Petrelli\LiveStaticsAddons\Helpers;


/**
 *
 * This manager will be exported as a Facade
 *
 */

class InterfaceMapper
{

    public function resolve($name)
    {

        $klass = config("live-statics-addons.mapper.{$name}");

        if (interface_exists($klass)) {
            return app($klass);
        } else {
            throw new \InvalidArgumentException(sprintf('InterfaceMapper cant resolve "%s" into an interface to be binded. Please add it to live-statics-addons.mapper configuration file', $klass));
        }

    }

}

