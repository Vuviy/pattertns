<?php

namespace App\FactoryMethod\Service;

use App\FactoryMethod\Sender\EmailSender;
use App\FactoryMethod\Sender\Sender;

class EmailNotificationService extends NotificationService
{
    protected function createSender(): Sender
    {
        return new EmailSender();
    }
}