<?php

namespace App\AbstractFactory\Payment;

class PaypalPayment implements Payment
{
    public function pay(int $amount): void
    {
        echo "Pay {$amount} by PayPal\n";
    }
}