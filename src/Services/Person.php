<?php

namespace ServiceContainer\Services;

use ServiceContainer\IoC\Container;
use ServiceContainer\Services\Actions\Greet;
use ServiceContainer\Services\Actions\Sleep;
use ServiceContainer\Services\Actions\Walk;

class Person
{
    const RIGHT = 'right';
    const STEPS = 70;
    const SLEEP_HOURS = 34;

    public function __construct(protected Container $container)
    {}

    public function sleep(): void
    {
        echo $this->container
            ->retrieve(Sleep::class)
            ->hours(self::SLEEP_HOURS);
    }

    public function greet(): void
    {
        echo $this->container
            ->retrieve(Greet::class)
            ->afternoon();
    }

    public function walk(): void
    {
        $walk = $this->container
            ->retrieve(Walk::class);

        $walk->steps(self::STEPS);
        $walk->direction(self::RIGHT);

        echo $walk->handle();
    }
}