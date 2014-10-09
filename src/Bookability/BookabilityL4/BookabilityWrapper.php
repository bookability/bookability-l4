<?php namespace Bookability\BookabilityL4;

use Bookability;

class BookabilityWrapper {

	/**
	 * Field is instance of class Bookability
	 *
	 * @var mc
	 */
	protected $instance;

	/**
	 * Constructor
	 *
	 * @param Bookability $instance
	 * @return void
	 */
	public function __construct(Bookability $instance)
	{
		$this->instance = $instance;
	}

	/**
	 * Proxies call to the underlying Bookability API
	 *
	 * @param $method
	 * @param array $args
	 * @return mixed
	 */
	public function __call($method, array $args)
	{
		// If it's a method, call it
		if(method_exists($this->instance, $method))
		{
			return call_user_func_array(array($this->instance, $method), $args);
		}

		//Otherwise, treat it as a property
		return $this->instance->{$method};
	}

}
