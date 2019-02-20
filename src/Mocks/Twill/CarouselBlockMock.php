<?php

namespace Petrelli\LiveStaticsAddons\Mocks\Twill;

use Petrelli\LiveStaticsAddons\Interfaces\Twill\CarouselBlockInterface;
use Petrelli\LiveStaticsAddons\Interfaces\Twill\ImageBlockInterface;
use Petrelli\LiveStaticsAddons\Mocks\Twill\BaseBlockMock;


class CarouselBlockMock extends BaseBlockMock implements CarouselBlockInterface
{


    public static $baseInterface = CarouselBlockInterface::class;

    public $type = 'carousel';


    public static function define(&$mock)
    {

        /**
         * Emulates the repeater that contains image blocks
         */
        $mock->childs = collect([
            app(ImageBlockInterface::class),
            app(ImageBlockInterface::class),
            app(ImageBlockInterface::class),
            app(ImageBlockInterface::class),
            app(ImageBlockInterface::class),
        ]);

        return $mock;

    }


}
