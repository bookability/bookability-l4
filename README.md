# Bookability L4 API support for Laravel

----

The package supports use with the [Laravel framework][2] (v4) providing a `BookabilityWrapper` facade.

----

###Setup:

In order to install add the following to your `composer.json` file within the `require` block:

	"require": {
		…
		"bookability/bookabilityl4": "1.0.*",
		…	
	}

Within Laravel, locate the file `..app/config/app.php` *.

Add the following to the `providers` array:

	'providers' => array(
		…
		'bookability\bookabilityl4\bookabilityServiceProvider',
		…
	),

Furthermore, add the following the the `aliases` array:

	'aliases' => array(
		…
		'bookabilityWrapper'       => 'bookability\bookabilityl4\Facades\bookabilityWrapper',
		…
	),
	
Publish the configuration

	$ php artisan config:publish bookability/bookabilityl4

Lastly, run the command `composer update`.

_\* The subsequent steps should be repeated for any file `app.php` created for additionals environments._

----