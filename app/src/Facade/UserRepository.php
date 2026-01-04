<?php

namespace App\Facade;

class UserRepository
{
    public function findByLogin(string $login): User
    {
        return new User();
    }

}