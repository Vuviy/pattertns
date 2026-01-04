<?php

namespace App\Strategy;

class RegularPriceStrategy implements PriceStrategy
{

    public function calculate(int $price): int
    {
        return $price;
    }
}