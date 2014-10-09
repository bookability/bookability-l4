<?php namespace Bookability\BookabilityL4;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Bookability;
	
class BookabilityServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('bookability/bookability-l4');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
	{
        $this->app->singleton('bookability_wrapper', function ()
        {
			$instance = new Bookability(Config::get('bookability'));
			return new BookabilityWrapper($instance);
        });
		
		// $this->app->alias('bookability', 'Bookability\Bookability');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('bookability_wrapper');
    }
}