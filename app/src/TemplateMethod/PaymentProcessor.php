<?php

namespace App\TemplateMethod;

abstract class PaymentProcessor
{
    public function processPayment(int $amount, string $user): void
    {
        $this->validateUser($user);
        $this->checkBalance($amount, $user);
        $this->executePayment($amount, $user);
        $this->sendNotification($user);
    }

    protected function validateUser(string $user): void
    {
        echo "Validating user $user...\n";
    }

    protected function checkBalance(int $amount, string $user): void
    {
        echo "Checking balance for $user: $amount\n";
    }

    abstract protected function executePayment(int $amount, string $user): void;

    protected function sendNotification(string $user): void
    {
        echo "Sending notification to $user\n";
    }
}
