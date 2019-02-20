<?php

namespace Petrelli\LiveStaticsAddons\Mocks\Twill;

use Petrelli\LiveStaticsAddons\Interfaces\Twill\TitleBlockInterface;
use Petrelli\LiveStaticsAddons\Mocks\Twill\BaseBlockMock;


class TitleBlockMock extends BaseBlockMock implements TitleBlockInterface
{


    public static $baseInterface = TitleBlockInterface::class;

    public $type = 'title';


    public static function define(&$mock)
    {

        $mock->title = app('faker')->sentence(rand(3, 6));

        return $mock;

    }


}
