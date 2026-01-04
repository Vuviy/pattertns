<?php

namespace App\Facade;

class AuthService
{
    public function authenticate(string $login, string $password): bool
    {
        return true;
    }

}