<?php

namespace App\Strategy;

class SuperVipPriceStrategy implements PriceStrategy
{

    public function calculate(int $price): int
    {
        return (int) ($price * 0.8);
    }
}