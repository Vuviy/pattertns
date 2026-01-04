<?php

namespace App\TemplateMethod;

class PaypalPayment extends PaymentProcessor
{
    protected function executePayment(int $amount, string $user): void
    {
        echo "Processing paypal payment of $amount for $user\n";
    }
}