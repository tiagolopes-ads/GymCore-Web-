<?php

class AlunoController
{
    // READ: Exibe a lista de alunos
    public function index(): void
    {
        $alunoModel = new AlunoModel();
        $alunos = $alunoModel->listar();

        $titulo = "Gestão de Alunos";
        require_once ROOT_PATH . '/app/Views/alunos/index.php';
    }

    // Formulário de Cadastro
    public function criar(): void
    {
        $titulo = "Nova Matrícula";
        require_once ROOT_PATH . '/app/Views/alunos/criar.php';
    }

    // CREATE: Salva os dados enviados pelo formulário
    public function salvar(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome   = trim($_POST['nome'] ?? '');
            $email  = trim($_POST['email'] ?? '');
            $cpf    = trim($_POST['cpf'] ?? '');
            $plano  = trim($_POST['plano'] ?? 'Mensal');
            $status = trim($_POST['status'] ?? 'Ativo');

            if (!empty($nome) && !empty($email)) {
                $alunoModel = new AlunoModel();
                $alunoModel->inserir($nome, $email, $cpf, $plano, $status);
            }

            header('Location: /alunos');
            exit;
        }
    }
}