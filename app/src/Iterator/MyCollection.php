<?php

namespace App\Iterator;

use Iterator;

class MyCollection implements Iterator
{
    private array $items = [];
    private int $position = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
        $this->position = 0;
    }

    public function current(): mixed
    {
        return $this->items[$this->position];
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }
}