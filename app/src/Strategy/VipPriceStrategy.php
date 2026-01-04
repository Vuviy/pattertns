<?php

namespace App\Strategy;

class VipPriceStrategy implements PriceStrategy
{

    public function calculate(int $price): int
    {
        return (int) ($price * 0.9);
    }
}