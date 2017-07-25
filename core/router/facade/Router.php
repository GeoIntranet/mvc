<?php namespace Blocker\router\facade;

class Router extends Facade
{
    /**
     * Router constructor.
     */
    public function __construct()
    {
        $this->path='';
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Blocker\router\Router';
    }

}