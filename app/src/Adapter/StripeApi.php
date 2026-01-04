<?php

namespace App\Adapter;

class StripeApi
{
    public function makePayment(float $sum, string $currency): void
    {
        echo "Stripe payment: $sum $currency\n";
    }
}