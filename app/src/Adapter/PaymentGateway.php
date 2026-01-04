<?php

namespace App\Adapter;

interface PaymentGateway
{
    public function pay(int $amount): void;

}