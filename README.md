# This is my package filament-meta

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ichbin/filament-meta.svg?style=flat-square)](https://packagist.org/packages/ichbin/filament-meta)
[![Total Downloads](https://img.shields.io/packagist/dt/ichbin/filament-meta.svg?style=flat-square)](https://packagist.org/packages/ichbin/filament-meta)



Simple meta for filament.
Need to install [Spatie Media library](https://spatie.be/docs/laravel-medialibrary/v10/introduction) to work.

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

## Usage Model

```php

use IchBin\Meta\Concerns\HasMeta;

class Page extends Model
{
    use HasMeta;
    
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
