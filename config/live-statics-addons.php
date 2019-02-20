<?php

return [


    /*
    |--------------------------------------------------------------------------
    | Twill helpers
    |--------------------------------------------------------------------------
    |
    | Support for images and the block builder
    |
    */

    'twill' => [
        'default_width'  => 640,
        'default_height' => 400,

        'blocks' => [
            Petrelli\LiveStaticsAddons\Interfaces\Twill\CarouselBlockInterface::class => [
                Petrelli\LiveStaticsAddons\Mocks\Twill\CarouselBlockMock::class, null
            ],
            Petrelli\LiveStaticsAddons\Interfaces\Twill\DoubleImageBlockInterface::class => [
                Petrelli\LiveStaticsAddons\Mocks\Twill\DoubleImageBlockMock::class, null
            ],
            Petrelli\LiveStaticsAddons\Interfaces\Twill\HorizontalLineBlockInterface::class => [
                Petrelli\LiveStaticsAddons\Mocks\Twill\HorizontalLineBlockMock::class, null
            ],
            Petrelli\LiveStaticsAddons\Interfaces\Twill\ImageBlockInterface::class => [
                Petrelli\LiveStaticsAddons\Mocks\Twill\ImageBlockMock::class, null
            ],
            Petrelli\LiveStaticsAddons\Interfaces\Twill\IntroBlockInterface::class => [
                Petrelli\LiveStaticsAddons\Mocks\Twill\IntroBlockMock::class, null
            ],
            Petrelli\LiveStaticsAddons\Interfaces\Twill\ParagraphBlockInterface::class => [
                Petrelli\LiveStaticsAddons\Mocks\Twill\ParagraphBlockMock::class, null
            ],
            Petrelli\LiveStaticsAddons\Interfaces\Twill\QuoteBlockInterface::class => [
                Petrelli\LiveStaticsAddons\Mocks\Twill\QuoteBlockMock::class, null
            ],
            Petrelli\LiveStaticsAddons\Interfaces\Twill\SubtitleBlockInterface::class => [
                Petrelli\LiveStaticsAddons\Mocks\Twill\SubtitleBlockMock::class, null
            ],
            Petrelli\LiveStaticsAddons\Interfaces\Twill\TitleBlockInterface::class => [
                Petrelli\LiveStaticsAddons\Mocks\Twill\TitleBlockMock::class, null
            ],
            Petrelli\LiveStaticsAddons\Interfaces\Twill\VideoBlockInterface::class => [
                Petrelli\LiveStaticsAddons\Mocks\Twill\VideoBlockMock::class, null
            ]
        ]

    ],


    /*
    |--------------------------------------------------------------------------
    | Interface mapper
    |--------------------------------------------------------------------------
    |
    | This is just a shortcut for when you want to instantiate helpers.
    | A Facade is provided for this task:
    |
    | \InterfaceMapper::resolve('twill.carousel')
    |
    | will return an instance of Petrelli\LiveStaticsAddons\Interfaces\Twill\CarouselBlockInterface::class,
    |
    */

    'mapper' => [
        'twill' => [
            'carousel'       => Petrelli\LiveStaticsAddons\Interfaces\Twill\CarouselBlockInterface::class,
            'doubleImage'    => Petrelli\LiveStaticsAddons\Interfaces\Twill\DoubleImageBlockInterface::class,
            'horizontalLine' => Petrelli\LiveStaticsAddons\Interfaces\Twill\HorizontalLineBlockInterface::class,
            'image'          => Petrelli\LiveStaticsAddons\Interfaces\Twill\ImageBlockInterface::class,
            'intro'          => Petrelli\LiveStaticsAddons\Interfaces\Twill\IntroBlockInterface::class,
            'paragraph'      => Petrelli\LiveStaticsAddons\Interfaces\Twill\ParagraphBlockInterface::class,
            'quote'          => Petrelli\LiveStaticsAddons\Interfaces\Twill\QuoteBlockInterface::class,
            'subtitle'       => Petrelli\LiveStaticsAddons\Interfaces\Twill\SubtitleBlockInterface::class,
            'title'          => Petrelli\LiveStaticsAddons\Interfaces\Twill\TitleBlockInterface::class,
            'video'          => Petrelli\LiveStaticsAddons\Interfaces\Twill\VideoBlockInterface::class,
        ]
    ],



];
