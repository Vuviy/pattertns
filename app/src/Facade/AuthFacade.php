<?php

namespace App\Facade;

use RuntimeException;

class AuthFacade
{
    public function __construct(
        private AuthService $authService,
        private UserRepository $userRepository,
        private SessionManager $sessionManager
    ) {}

    public function login(string $login, string $password): void
    {
        if (!$this->authService->authenticate($login, $password)) {
            throw new RuntimeException('Invalid credentials');
        }

        $user = $this->userRepository->findByLogin($login);
        $this->sessionManager->start($user);
    }

}