<?php

class TreinoController
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
        $titulo = "Gestão de Treinos";
        require_once ROOT_PATH . '/app/Views/treinos/index.php';
    }
}