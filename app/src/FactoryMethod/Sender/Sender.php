<?php

namespace App\FactoryMethod\Sender;

interface Sender
{
    public function send(string $message): void;
}