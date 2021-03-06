<?php

namespace Bookability\BookabilityL4\Facades;

use Illuminate\Support\Facades\Facade;

class BookabilityWrapper extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
	protected static function getFacadeAccessor() { return 'bookability_wrapper'; }
}
