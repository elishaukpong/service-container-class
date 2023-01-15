<?php
include "vendor/autoload.php";

use ServiceContainer\IoC\Container;
use ServiceContainer\Services\Actions\Greet;
use ServiceContainer\Services\Actions\Sleep;
use ServiceContainer\Services\Actions\Walk;
use ServiceContainer\Services\Person;
use ServiceContainer\Services\Woman;

echo "Welcome to our IoC Container \n \n";

$container = new Container();

$container->bind(Person::class, function($container){
    return new Person($container);
});
$container->bind(Greet::class, function($container){
    return new Greet();
});
$container->bind(Sleep::class, function($container){
    return new Sleep();
});
$container->bind(Walk::class, function($container){
    return new Walk();
});

$person = $container->retrieve(Person::class);

$person->sleep();
echo "\n\n";
$person->greet();
echo "\n\n";
$person->walk();
echo "\n\n";

$woman = new Woman();

$woman->speak();