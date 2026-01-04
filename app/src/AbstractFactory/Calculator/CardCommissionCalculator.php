<?php

namespace App\AbstractFactory\Calculator;

class CardCommissionCalculator implements CommissionCalculator
{
    public function calculate(int $amount): int
    {
        return (int) ($amount * 0.02);
    }
}