<?php

class AlunoController
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
        $alunoModel = new AlunoModel();
        $alunos = $alunoModel->listar();
        $titulo = "Gestão de Alunos";
        require_once ROOT_PATH . '/app/Views/alunos/index.php';
    }

    public function criar(): void
    {
        $titulo = "Nova Matrícula";
        require_once ROOT_PATH . '/app/Views/alunos/criar.php';
    }

    public function salvar(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome   = trim($_POST['nome'] ?? '');
            $email  = trim($_POST['email'] ?? '');
            $cpf    = trim($_POST['cpf'] ?? '');
            $plano  = trim($_POST['plano'] ?? 'Mensal');
            $status = trim($_POST['status'] ?? 'Ativo');

            if (empty($nome) || empty($email) || empty($cpf)) {
                $_SESSION['erro'] = "Preencha todos os campos obrigatórios!";
                header('Location: /alunos/novo');
                exit;
            }

            $alunoModel = new AlunoModel();
            if ($alunoModel->inserir($nome, $email, $cpf, $plano, $status)) {
                $_SESSION['sucesso'] = "Aluno cadastrado com sucesso!";
            } else {
                $_SESSION['erro'] = "Erro ao cadastrar aluno.";
            }

            header('Location: /alunos');
            exit;
        }
    }

    public function editar(): void
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: /alunos');
            exit;
        }

        $alunoModel = new AlunoModel();
        $aluno = $alunoModel->buscarPorId((int)$id);

        if (!$aluno) {
            $_SESSION['erro'] = "Aluno não encontrado.";
            header('Location: /alunos');
            exit;
        }

        $titulo = "Editar Aluno";
        require_once ROOT_PATH . '/app/Views/alunos/editar.php';
    }

    public function atualizar(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id     = (int)($_POST['id'] ?? 0);
            $nome   = trim($_POST['nome'] ?? '');
            $email  = trim($_POST['email'] ?? '');
            $cpf    = trim($_POST['cpf'] ?? '');
            $plano  = trim($_POST['plano'] ?? 'Mensal');
            $status = trim($_POST['status'] ?? 'Ativo');

            if (empty($nome) || empty($email) || empty($cpf)) {
                $_SESSION['erro'] = "Preencha todos os campos obrigatórios!";
                header('Location: /alunos/editar?id=' . $id);
                exit;
            }

            $alunoModel = new AlunoModel();
            if ($alunoModel->atualizar($id, $nome, $email, $cpf, $plano, $status)) {
                $_SESSION['sucesso'] = "Dados do aluno atualizados com sucesso!";
            } else {
                $_SESSION['erro'] = "Erro ao atualizar os dados.";
            }

            header('Location: /alunos');
            exit;
        }
    }

    public function excluir(): void
    {
        if (isset($_SESSION['perfil']) && $_SESSION['perfil'] !== 'admin') {
            $_SESSION['erro'] = "Acesso negado: Apenas administradores podem excluir registros.";
            header('Location: /alunos');
            exit();
        }

        $id = $_GET['id'] ?? null;
        if ($id) {
            $alunoModel = new AlunoModel();
            if ($alunoModel->excluir((int)$id)) {
                $_SESSION['sucesso'] = "Aluno excluído com sucesso!";
            } else {
                $_SESSION['erro'] = "Erro ao excluir o aluno.";
            }
        }
        header('Location: /alunos');
        exit;
    }
}