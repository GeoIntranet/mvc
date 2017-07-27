<?php
namespace Blocker;

use Blocker\container\Container;
use DI\ContainerBuilder;

class Application extends ContainerBuilder
{
    public $container;


    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->container = self::buildDevContainer();

        $this->container->set('Blocker\Application',$this);

        $this->container->set('app',$this);

        $this->container->set('container','DI\ContainerBuilder');

        $this->container->set('aliases', new config\Aliases());
    }

    /**
     * Run application
     */
    public static function Run()
    {
        echo "Run the applciation";
    }

    /**
     * Get Instance in container
     * @param $parameter
     * @return mixed
     */
    public function get($parameter)
    {
        return $this->container->get($parameter);
    }

    /**
     * auto resolve Class
     * @param $name
     * @param array $parameters
     * @return mixed
     */
    public function make($name, array $parameters = [])
    {
        return $this->container->make($name, $parameters = []);
    }

    /**
     * Set new entry in container
     * @param $name
     * @param $value
     */
    public function set($name, $value)
    {
        return $this->container->set($name, $value);
    }

    public function allAliases()
    {
        return $this->get('aliases');
    }



}