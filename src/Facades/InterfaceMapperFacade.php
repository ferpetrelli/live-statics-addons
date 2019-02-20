<?php

namespace Petrelli\LiveStaticsAddons\Facades;

use Illuminate\Support\Facades\Facade;


class InterfaceMapperFacade extends Facade
{


    protected static function getFacadeAccessor()
    {

        return 'live-statics-addons.interface-mapper';

    }


}
