<?php

namespace App\AbstractFactory\Payment;

class CardPayment implements Payment
{
    public function pay(int $amount): void
    {
        echo "Pay {$amount} by card\n";
    }
}