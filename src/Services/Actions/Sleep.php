<?php

namespace ServiceContainer\Services\Actions;

class Sleep
{
    public function hours($hours): string
    {
        return "I am sleeping for $hours hours";
    }
}