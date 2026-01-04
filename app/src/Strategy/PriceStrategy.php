<?php

namespace App\Strategy;

interface PriceStrategy
{
    public function calculate(int $price): int;
}