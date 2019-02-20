<?php

namespace Petrelli\LiveStaticsAddons\Mocks\Twill;

use Petrelli\LiveStaticsAddons\Interfaces\Twill\ImageBlockInterface;
use Petrelli\LiveStaticsAddons\Mocks\Twill\BaseBlockMock;


class ImageBlockMock extends BaseBlockMock implements ImageBlockInterface
{


    public static $baseInterface = ImageBlockInterface::class;

    public $type      = 'image';

    // Posible variation:
    // * full
    // * fullBleed
    // * fullGrid
    // * rightCaption
    public $variation = 'full';


    public function __construct($mock)
    {

        $this->mockedObject = $mock;

        // Save a random number per instance
        // This will allow us to call to Image on this block multiple times and
        // always get the same image
        $this->random   = rand(1,1000);
        $mock->title    = app('faker')->sentence();
        $mock->alt_text = app('faker')->sentence();
        $mock->caption  = app('faker')->sentence();

    }


    public function setVariation($variation)
    {

      $this->variation = $variation;

      return $this;

    }


    public static function define(&$mock)
    {

        $mock->caption = app('faker')->sentence();

        return $mock;

    }


    public function imageObject($role, $crop = 'default')
    {

        return $this;

    }


}
