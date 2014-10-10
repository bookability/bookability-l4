[![Latest Stable Version](https://poser.pugx.org/bookability/bookability-l4/v/stable.svg)](https://packagist.org/packages/bookability/bookability-l4) [![Total Downloads](https://poser.pugx.org/bookability/bookability-l4/downloads.svg)](https://packagist.org/packages/bookability/bookability-l4) [![Latest Unstable Version](https://poser.pugx.org/bookability/bookability-l4/v/unstable.svg)](https://packagist.org/packages/bookability/bookability-l4) [![License](https://poser.pugx.org/bookability/bookability-l4/license.svg)](https://packagist.org/packages/bookability/bookability-l4)

# Bookability L4 API support for Laravel

The package supports use with the [Laravel Framework 4.*](https://github.com/laravel/laravel) providing a `Bookability` facade. If you are looking for our PHP 5.3+ compatible package, please take a look at https://github.com/bookability/bookability-php.

## Installation

### Requirements

- Any flavour of PHP 5.3+ should do
- [optional] PHPUnit to execute the test suite

### With Composer

The easiest way to install Bookability is via composer.

In order to install add the following to your `composer.json` file within the `require` block:

	"require": {
		…
		"bookability/bookability-l4": "1.*",
		…	
	}

Within Laravel, locate the file `..app/config/app.php` *.

Add the following to the `providers` array:

	'providers' => array(
		…
		'Bookability\BookabilityL4\BookabilityServiceProvider',
		…
	),

Furthermore, add the following the the `aliases` array:

	'aliases' => array(
		…
		'BookabilityWrapper' => 'Bookability\BookabilityL4\Facades\BookabilityWrapper',
		…
	),
	
Publish the configuration

	$ php artisan config:publish bookability/bookability-l4

Lastly, run the command `php composer.phar install` command to install it.