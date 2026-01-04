<?php

namespace App\FactoryMethod\Service;

use App\FactoryMethod\Sender\Sender;
use App\FactoryMethod\Sender\TelegramSender;

class TelegramNotificationService extends NotificationService
{
    protected function createSender(): Sender
    {
        return new TelegramSender();
    }
}