<?php namespace Bookability\BookabilityL4;

use Mailchimp;

class BookabilityWrapper
{

    /**
     * Field is instance of class Bookability
     *
     * @var ba
     */
    protected $ba;

    /**
     * Constructor
     *
     * @param Bookability $ba
     * @return void
     */
    public function __construct(Bookability $ba)
    {
        $this->ba = $ba;
    }

    //Accessors for public member objects beyond this point

    public function projects()
    {
        return $this->mc->projects;
    }

    public function users()
    {
        return $this->mc->users;
    }

    public function resources()
    {
        return $this->mc->resources;
    }

    public function events()
    {
        return $this->mc->events;
    }

    public function customers()
    {
        return $this->mc->customers;
    }

    public function rules()
    {
        return $this->mc->rules;
    }

    public function availabilities()
    {
        return $this->mc->availabilities;
    }

}
