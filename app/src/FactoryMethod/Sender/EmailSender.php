<?php

namespace App\FactoryMethod\Sender;

class EmailSender implements Sender
{

    public function send(string $message): void
    {
        echo "Email: $message\n";
    }
}