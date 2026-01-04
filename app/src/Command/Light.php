<?php

namespace App\Command;

class Light
{
    public function turnOn(): void
    {
        echo "Light is ON\n";
    }

    public function turnOff(): void
    {
        echo "Light is OFF\n";
    }
}