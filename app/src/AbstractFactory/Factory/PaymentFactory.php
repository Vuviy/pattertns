<?php

namespace App\AbstractFactory\Factory;

use App\AbstractFactory\Calculator\CommissionCalculator;
use App\AbstractFactory\Payment\Payment;

interface PaymentFactory
{
    public function createPayment(): Payment;
    public function createCommissionCalculator(): CommissionCalculator;
}