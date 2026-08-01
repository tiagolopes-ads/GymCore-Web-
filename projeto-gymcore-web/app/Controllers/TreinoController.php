<?php

class TreinoController
{
    public function index(): void
    {
        $titulo = "Gestão de Treinos";
        require_once ROOT_PATH . '/app/Views/treinos/index.php';
    }
}