# This is my package filament-meta

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ichbin/filament-meta.svg?style=flat-square)](https://packagist.org/packages/ichbin/filament-meta)
[![Total Downloads](https://img.shields.io/packagist/dt/ichbin/filament-meta.svg?style=flat-square)](https://packagist.org/packages/ichbin/filament-meta)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ichbin/filament-meta
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-meta-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-meta-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-meta-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage Model

```php

use IchBin\Meta\Concerns\HasMeta;

class Page extends Model
{
    use HasMeta;
    
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [IchBin](https://github.com/boyfromhell)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
