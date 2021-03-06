<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/
use Blocker\Application;

require __DIR__ . '/../vendor/autoload.php';

$app = new Application;
$app::Run();
$app->set('test','test');



$dotenv = new Dotenv\Dotenv(dirname(__DIR__));
$dotenv->load();

abstract class Face{
    static $app;

    public  static function setApp($app) {
        static::$app = $app;
    }

    public  static function getApp() {
        return static::$app;
    }
}

 Face::setApp($app);

require __DIR__ . '/../app/routes.php';
//$b = $app->make('Blocker\router\Router');



 // Route::define('xx');
 // $app->get('router')->define('xxx');











