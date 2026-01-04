<?php

namespace App\FactoryMethod\Sender;

class SmsSender implements Sender
{

    public function send(string $message): void
    {
        echo "SMS: $message\n";
    }
}