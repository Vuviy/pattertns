<?php

namespace App\Prototype;

class PrototypeRegistry
{
    private array $prototypes = [];

    public function add(string $key, object $prototype): void
    {
        $this->prototypes[$key] = $prototype;
    }

    public function get(string $key): object
    {
        return clone $this->prototypes[$key];
    }
}