<?php

namespace App\AbstractFactory\Factory;

use App\AbstractFactory\Calculator\CardCommissionCalculator;
use App\AbstractFactory\Calculator\CommissionCalculator;
use App\AbstractFactory\Payment\CardPayment;
use App\AbstractFactory\Payment\Payment;

class CardPaymentFactory implements PaymentFactory
{
    public function createPayment(): Payment
    {
        return new CardPayment();
    }

    public function createCommissionCalculator(): CommissionCalculator
    {
        return new CardCommissionCalculator();
    }
}