<?php

namespace App\AbstractFactory\Calculator;

class PaypalCommissionCalculator implements CommissionCalculator
{
    public function calculate(int $amount): int
    {
        return (int) ($amount * 0.03);
    }
}