<?php

namespace App\Adapter;

class StripeAdapter implements PaymentGateway
{
    public function __construct(private StripeApi $stripe)
    {
    }

    public function pay(int $amount): void
    {
        $this->stripe->makePayment($amount / 100, 'USD');
    }
}