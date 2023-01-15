<?php

namespace ServiceContainer\IoC;

class Container
{
    private array $classes = [];

    public function bind(string $identifier, callable $concreteClassClosure): void
    {
        $this->classes[$identifier] = $concreteClassClosure($this);
    }

    public function retrieve(string $identifier)
    {
        return $this->classes[$identifier];
    }
}