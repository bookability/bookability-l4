<?php namespace Bookability\BookabilityL4;

use Bookability;

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
        return $this->ba->projects;
    }

    public function users()
    {
        return $this->ba->users;
    }

    public function resources()
    {
        return $this->ba->resources;
    }

    public function events()
    {
        return $this->ba->events;
    }

    public function customers()
    {
        return $this->ba->customers;
    }

    public function rules()
    {
        return $this->ba->rules;
    }

    public function availabilities()
    {
        return $this->ba->availabilities;
    }

}
