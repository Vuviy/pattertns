<?php

namespace App\AbstractFactory\Calculator;

interface CommissionCalculator
{
    public function calculate(int $amount): int;

}