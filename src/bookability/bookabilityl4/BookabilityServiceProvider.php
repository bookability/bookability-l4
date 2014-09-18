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
        $this->package('Bookability/BookabilityL4');
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
            $mc = new Bookability(Config::get('bookability::dsn'));

            return new BookabilityWrapper($mc);
        });
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
