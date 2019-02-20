<?php

namespace Petrelli\LiveStaticsAddons\Mocks\Twill;

use Petrelli\LiveStaticsAddons\Interfaces\Twill\HorizontalLineBlockInterface;
use Petrelli\LiveStaticsAddons\Mocks\Twill\BaseBlockMock;


class HorizontalLineBlockMock extends BaseBlockMock implements HorizontalLineBlockInterface
{


    public static $baseInterface = HorizontalLineBlockInterface::class;

    public $type = 'horizontal_line';


}
