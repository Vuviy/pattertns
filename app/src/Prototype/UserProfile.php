<?php

namespace App\Prototype;

use DateTime;

class UserProfile
{
    public function __construct(
        public string $name,
        public array $permissions,
        public array $settings,
        public DateTime $createdAt
    ) {}

    public function __clone()
    {
        $this->createdAt = clone $this->createdAt;
    }
}