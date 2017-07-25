<?php namespace Blocker\router\facade;
use \Blocker\router\Router as Router;

abstract class Facade
{

    protected static $app;

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
        $instance = new $name(static::$app);
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

    /**
     * @param $app
     */
    public static function setFacadeApplication($app)
    {
        static::$app = $app;
    }

    /**
     * @return mixed
     */
    public static function getFacadeApplication()
    {
        return static::$app ;
    }
}