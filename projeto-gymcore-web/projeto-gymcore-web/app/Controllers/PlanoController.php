<?php

class PlanoController
{
    public function index(): void
    {
        $titulo = "Planos e Assinaturas";
        require_once ROOT_PATH . '/app/Views/planos/index.php';
    }
}