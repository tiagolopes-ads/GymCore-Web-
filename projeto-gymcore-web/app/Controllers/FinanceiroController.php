<?php

class FinanceiroController
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: /login');
            exit();
        }
    }

    public function index(): void
    {
        $titulo = "Financeiro";
        require_once ROOT_PATH . '/app/Views/financeiro/index.php';
    }
}