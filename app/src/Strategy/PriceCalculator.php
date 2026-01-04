<?php

namespace App\Strategy;

class PriceCalculator
{
    public function __construct(private PriceStrategy $strategy) {}

    public function calculate(int $price): int
    {
        return $this->strategy->calculate($price);
    }

}