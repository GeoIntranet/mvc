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

$app->bind('test','test');


var_dump($app);

//require __DIR__ . '/../app/routes.php';
$dotenv = new Dotenv\Dotenv(dirname(__DIR__));
$dotenv->load();



class Lol{

}

class Baz{
    /**
     * @var \Lol
     */
    private $lol;

    /**
     * Baz constructor.
     */
    public function __construct(Lol $lol)
    {
        $this->lol = $lol;
    }
}

class Buz {
    private $value;

    /**
     * buz constructor.
     */
    public function __construct(Baz $baz)
    {
        $this->value = $baz;
    }
}






$container = DI\ContainerBuilder::buildDevContainer();
$b = $container->make('Buz');

var_dump($b);


$buzInstance = $container->get('buz');
$buzInstance = $container->get('buz');








