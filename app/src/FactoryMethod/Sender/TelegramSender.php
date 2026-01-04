<?php

namespace App\FactoryMethod\Sender;

class TelegramSender implements Sender
{

    public function send(string $message): void
    {
        echo "Telegram: $message\n";
    }
}