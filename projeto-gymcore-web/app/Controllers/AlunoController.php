<?php

class AlunoController
{
    public function index(): void
    {
        $titulo = "Gestão de Alunos";
        require_once ROOT_PATH . '/app/Views/alunos/index.php';
    }
}