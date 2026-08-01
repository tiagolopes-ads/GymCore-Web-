<?php

class FinanceiroController
{
    public function index(): void
    {
        $titulo = "Financeiro";
        require_once ROOT_PATH . '/app/Views/financeiro/index.php';
    }
}