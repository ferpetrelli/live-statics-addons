<?php

namespace Petrelli\LiveStaticsAddons\Mocks\Twill;

use Petrelli\LiveStaticsAddons\Interfaces\Twill\QuoteBlockInterface;
use Petrelli\LiveStaticsAddons\Mocks\Twill\BaseBlockMock;


class QuoteBlockMock extends BaseBlockMock implements QuoteBlockInterface
{


    public static $baseInterface = QuoteBlockInterface::class;

    public $type = 'quote';


    public static function define(&$mock)
    {

        $mock->quote = app('faker')->dynamic('Block: Quote')->sentence(20, 50);

        return $mock;

    }


}
