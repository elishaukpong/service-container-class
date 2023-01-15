<?php

namespace ServiceContainer\Services\Actions;

class Walk
{
    private float $steps;
    private string $direction;

    public function direction($direction): void
    {
        $this->direction = $direction;
    }

    public function steps($steps): void
    {
        $this->steps = $steps;
    }

    public function handle(): string
    {
        return "I am walking in the $this->direction direction for $this->steps steps";
    }
}