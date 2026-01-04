<?php

namespace App\FactoryMethod\Service;

use App\FactoryMethod\Sender\Sender;

abstract class NotificationService
{
    public function send(string $message): void
    {
        $sender = $this->createSender();
        $sender->send($message);
    }
    abstract protected function createSender(): Sender;

}