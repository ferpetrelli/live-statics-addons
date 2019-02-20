<?php

namespace Petrelli\LiveStaticsAddons\Mocks\Twill;

use \Petrelli\LiveStaticsAddons\Interfaces\Twill\SubtitleBlockInterface;
use Petrelli\LiveStaticsAddons\Mocks\Twill\BaseBlockMock;


class SubtitleBlockMock extends BaseBlockMock implements SubtitleBlockInterface
{


    public static $baseInterface = SubtitleBlockInterface::class;

    public $type = 'subtitle';


    public static function define(&$mock)
    {

        $mock->title = app('faker')->sentence(rand(3, 6));

        return $mock;

    }


}
