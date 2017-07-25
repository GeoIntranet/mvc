<?php namespace Blocker\router;

use Blocker\Application;

class Router
{

    /**
     * Router constructor.
     */
    public function __construct(Application $app)
    {
        $this->routes=[];
        $this->app=$app;
        $this->version = '5.4';
    }

    public function define($val = null)
    {
        if( ! isset($this->app->container[__CLASS__])){
            $this->app->container[__CLASS__] = $this ;
        }
        $this->app->container[__CLASS__]->routes[]=$val;

        return 'JE DEFINIE une ROUTE';
    }

    public function getRouter()
    {
        return $this;
    }
}