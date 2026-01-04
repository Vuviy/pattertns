<?php

namespace App\AbstractFactory\Payment;

interface Payment
{
    public function pay(int $amount): void;

}