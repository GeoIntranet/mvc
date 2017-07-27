<?php
/**
 * Created by PhpStorm.
 * User: gvalero
 * Date: 27/07/2017
 * Time: 13:36
 */

namespace Blocker\config;

class aliases
{
    public $aliases=[
        'router' => 'Blocker\router\Router'
    ];
    /**
     * aliases constructor.
     */
    public function __construct()
    {
        return $this->aliases;
    }
}