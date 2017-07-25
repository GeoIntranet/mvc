<?php namespace Blocker\router\facade;

class Router extends Facade
{

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