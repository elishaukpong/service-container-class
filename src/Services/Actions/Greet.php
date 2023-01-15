<?php

namespace ServiceContainer\Services\Actions;

class Greet
{
    public function morning(): string
    {
        return "Good Morning to you";
    }

    public function afternoon(): string
    {
        return "Good Afternoon to you";
    }

    public function evening(): string
    {
        return "Good Evening to you";
    }
}