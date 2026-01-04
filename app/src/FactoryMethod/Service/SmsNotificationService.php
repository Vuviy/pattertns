<?php

namespace App\FactoryMethod\Service;

use App\FactoryMethod\Sender\Sender;
use App\FactoryMethod\Sender\SmsSender;

class SmsNotificationService extends NotificationService
{
    protected function createSender(): Sender
    {
        return new SmsSender();
    }
}