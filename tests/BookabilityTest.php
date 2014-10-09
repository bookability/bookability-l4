<?php namespace Orchestra\Testbench\TestCase;

class BookabilityTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Define environment setup.
     *
     * @param  Illuminate\Foundation\Application    $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
		$app['config']->set('bookability.dsn', 'http://richard.davey@twosuperior:cf22642dab4e7942a9b9dd3f654042ad7ff9f7b8@api.bookability.test:80/v1');
    }

    /**
     * Get package providers.  At a minimum this is the package being tested, but also
     * would include packages upon which our package depends, e.g. Cartalyst/Sentry
     * In a normal app environment these would be added to the 'providers' array in
     * the config/app.php file.
     *
     * @return array
     */
    protected function getPackageProviders()
    {
        return array(
            'Bookability\BookabilityL4\BookabilityServiceProvider',
        );
    }

    /**
     * Get package aliases.  In a normal app environment these would be added to
     * the 'aliases' array in the config/app.php file.  If your package exposes an
     * aliased facade, you should add the alias here, along with aliases for
     * facades upon which your package depends, e.g. Cartalyst/Sentry
     *
     * @return array
     */
    protected function getPackageAliases()
    {
        return array(
            'Bookability' => 'Bookability\BookabilityL4\Facades\BookabilityWrapper',
        );
    }

    /**
     * Test running migration.
     *
     * @test
     */
    public function testEventsFind()
    {
		//echo 'ok1';
		// get events
		$events = \Bookability::events()->find();
		
		//echo 'ok2';
		//print_r($events);
		exit;
        //$users = \DB::table('users')->where('id', '=', 1)->first();

        //$this->assertEquals('hello@orchestraplatform.com', $users->email);
        //$this->assertTrue(\Hash::check('123', $users->password));
    }
}
