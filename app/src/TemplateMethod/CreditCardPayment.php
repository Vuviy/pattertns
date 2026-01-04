<?php

namespace App\TemplateMethod;

class CreditCardPayment extends PaymentProcessor
{
    protected function executePayment(int $amount, string $user): void
    {
        echo "Processing credit card payment of $amount for $user\n";
    }
}