<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Factory\PaymentFactory;

class PaymentService
{
    public function __construct(private PaymentFactory $factory) {}

    public function pay(int $amount): void
    {
        $payment = $this->factory->createPayment();
        $commission = $this->factory->createCommissionCalculator();

        $total = $amount + $commission->calculate($amount);
        $payment->pay($total);
    }
}