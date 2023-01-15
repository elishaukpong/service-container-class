<?php

namespace ServiceContainer\Services;

use ServiceContainer\IoC\Container;

class Woman
{
    private Person $person;
    private Container $container;

    public function __construct()
    {
        $this->container = new Container();
        $this->person = $this->container->retrieve(Person::class);
    }

    public function speak()
    {
        $this->person->greet();
    }
}