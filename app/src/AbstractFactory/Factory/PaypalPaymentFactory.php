<?php

namespace App\AbstractFactory\Factory;

use App\AbstractFactory\Calculator\CommissionCalculator;
use App\AbstractFactory\Calculator\PaypalCommissionCalculator;
use App\AbstractFactory\Payment\Payment;
use App\AbstractFactory\Payment\PaypalPayment;

class PaypalPaymentFactory implements PaymentFactory
{
    public function createPayment(): Payment
    {
        return new PaypalPayment();
    }

    public function createCommissionCalculator(): CommissionCalculator
    {
        return new PaypalCommissionCalculator();
    }
}