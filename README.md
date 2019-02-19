# About Live-Statics Addons

Live-Statics is an open source Laravel package that will help you quickly build prototypes and static pages facilitating data injection into real views. Because all mocked objects will behave as the real ones you won't have to spend any time with integration tasks.

This package provides new Classes, Traits, Faker providers and Modules for you to use.


# Install

1. Include the package

You can run the command:

```bash
composer require petrelli/live-statics-addons
```

Or directly add it to your composer.json

```json
"petrelli/live-statics-addons": "^0.0.1"
```

And run `composer update`.


2. Publish configuration files and the Service Provider

```
php artisan vendor:publish --provider="Petrelli\LiveStaticsAddons\BaseServiceProvider"
```


# Usage


## Classes


```php
use \Petrelli\LiveStaticsAddons\BaseMock;

class BookMock extends BaseMock implements BookInterface
{
    #...
}
```

## Only Traits


Let's include the `HasImages` to emulate images from `Twill` as an example.


```php
use \Petrelli\LiveStatics\BaseMock;
use \Petrelli\LiveStaticsAddons\Traits\Twill\HasImages;

class BookMock extends BaseMock implements BookInterface
{
    use HasImages;

    #...
}
```


# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
