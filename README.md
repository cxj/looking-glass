# Monitor and display multi-application status and health

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cxj/looking-glass.svg?style=flat-square)](https://packagist.org/packages/cxj/looking-glass)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/cxj/looking-glass/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/cxj/looking-glass/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/cxj/looking-glass/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/cxj/looking-glass/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cxj/looking-glass.svg?style=flat-square)](https://packagist.org/packages/cxj/looking-glass)

Looking Glass is a Laravel-based application to provide a quick overview of
status and health data from multiple applications. It provides simple dashboard
listing all configured application checks and their current status. Any
application capable of calling an HTTP webhook can communicate its status
data to Looking Glass for presentation.

## Installation

You can install the package via composer:

```bash
composer require cxj/looking-glass
```

You can run the migrations with:

```bash
php artisan migrate
```

This is the contents of the published file:

```php
return [
];
```

## Usage


## Testing

```bash
./vendor/bin/pest
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed
recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report
security vulnerabilities.

## Credits

- [Chris Johnson](https://github.com/cxj)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more
information.
