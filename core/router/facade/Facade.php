<?php namespace Blocker\router\facade;
use \Blocker\router\Router as Router;

abstract class Facade
{


    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        throw new RuntimeException('Facade does not implement getFacadeAccessor method.');
    }

    /**
     * @param $method
     * @param $args
     * @return string
     */
    public static function __callStatic($method, $args)
    {
        $name = static::getFacadeAccessor();
        $instance = new $name();
        var_dump($args);

        switch (count($args))
        {
            case 0:
                return $instance->$method();
            case 1:
                return $instance->$method($args[0]);
            case 2:
                return $instance;
            case 3:
                return $instance;
            case 4:
                return $instance;
            default:
                return $instance;
        }
    }
}