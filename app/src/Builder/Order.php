<?php

namespace App\Builder;

class Order
{
    public string $customer;
    public array $items = [];
    public ?string $deliveryAddress = null;
    public bool $isGift = false;
    public ?string $promoCode = null;
    public ?string $comment = null;
}