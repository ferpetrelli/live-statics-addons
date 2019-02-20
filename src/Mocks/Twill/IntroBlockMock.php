<?php

namespace Petrelli\LiveStaticsAddons\Mocks\Twill;

use Petrelli\LiveStaticsAddons\Interfaces\Twill\IntroBlockInterface;
use Petrelli\LiveStaticsAddons\Mocks\Twill\BaseBlockMock;


class IntroBlockMock extends BaseBlockMock implements IntroBlockInterface
{


    public static $baseInterface = IntroBlockInterface::class;

    public $type = 'intro';


    public static function define(&$mock)
    {

        $mock->intro = app('faker')->sentence(20, 50);

        return $mock;

    }


}
