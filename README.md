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

## Requirements

A PHP 8.1+ host with access to a reasonable SQL database, preferably MySQL or equivalent.

## Installation

Install the package via composer:

```bash
composer require cxj/looking-glass
```

Run the migrations with:

```bash
php artisan migrate
```

## Usage

This is early beta software.  More functionality and documentation to come.

* User accounts are by default open registration to all at the `/register` URL path.  You will probably want to
implement some sort of restrictions on potential users.
* Create a user account and log in to see the current status dashboard.
* The Laravel schedule worker (e.g. `artisan schedule:work`) needs to be run regularly via cron or similar mechanism

* Makes use of the Spatie Laravel Health package, see Spatie's fine documentation for more details.
* Makes use of the Spatie Webhook Client package, see Spatie's project for more details.  One can easily send webhook
calls to Looking Glass using the Spatie Webhook Server package.  The JSON payload is simple as is the bearer token
authentication.  Just about any software should be able to successfully call the Looking Glass webhook to deliver
status payloads.

Example JSON payload:
```json
{
	"name": "Test-app",
	"label": "Test-label",
	"result": {
		"meta": [],
		"ended_at": "",
		"status": "ok",
		"notificationMessage": "notification-message",
		"shortSummary": "short-summary"
	}
}
```


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

The GNU Affero General Public License Version 3. Please see
[License File](LICENSE.md) for more information.
