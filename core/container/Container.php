<?php
/**
 * Created by PhpStorm.
 * User: gvalero
 * Date: 25/07/2017
 * Time: 12:25
 */

namespace Blocker\container;

class Container
{
    public $container;

    /**
     * Bind an object in the container
     * @param $name
     * @param $object
     */
    public function bind($name,$object)
    {
        $this->container[$name] = $object;
    }

}