<?php namespace Blocker\router;

class Router
{

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $this->routes=[];
        $this->version = '5.4';
    }

    public function define($val = null)
    {
        var_dump($val);
        $this->routes[]=$val;
        return 'JE DEFINIE une ROUTE';
    }

    public function getRouter()
    {
        return $this;
    }
}