<?php

namespace App\Builder;

class OrderBuilder
{
    private Order $order;

    public function __construct()
    {
        $this->order = new Order();
    }

    public function setCustomer(string $customer): self
    {
        $this->order->customer = $customer;
        return $this;
    }

    public function addItem(string $item): self
    {
        $this->order->items[] = $item;
        return $this;
    }

    public function addComment(string $comment): self
    {
        $this->order->comment = $comment;
        return $this;
    }

    public function setDeliveryAddress(string $address): self
    {
        $this->order->deliveryAddress = $address;
        return $this;
    }

    public function asGift(): self
    {
        $this->order->isGift = true;
        return $this;
    }

    public function applyPromoCode(string $code): self
    {
        $this->order->promoCode = $code;
        return $this;
    }

    public function build(): Order
    {
        return $this->order;
    }
}