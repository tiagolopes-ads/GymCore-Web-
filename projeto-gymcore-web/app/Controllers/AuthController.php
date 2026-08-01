<?php

class AuthController
{
    public function login(): void
    {
        require_once ROOT_PATH . '/app/Views/auth/login.php';
    }

    public function logout(): void
    {
        header('Location: /login');
        exit;
    }
}