<?php

class AuthController
{
    private function iniciarSessao(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function login(): void
    {
        $this->iniciarSessao();
        
        if (isset($_SESSION['usuario_id'])) {
            header('Location: /dashboard');
            exit();
        }

        $titulo = "Login - GymCore";
        require_once ROOT_PATH . '/app/Views/auth/login.php';
    }

    public function autenticar(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $senha = trim($_POST['senha'] ?? '');

            $this->iniciarSessao();

            if (empty($email) || empty($senha)) {
                $_SESSION['erro'] = "Preencha todos os campos.";
                header('Location: /login');
                exit();
            }

            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->buscarPorEmail($email);

            if ($usuario && password_verify($senha, $usuario['senha'])) {
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                $_SESSION['perfil'] = $usuario['perfil'];

                header('Location: /dashboard');
                exit();
            } else {
                $_SESSION['erro'] = "E-mail ou senha incorretos.";
                header('Location: /login');
                exit();
            }
        }
    }

    public function logout(): void
    {
        $this->iniciarSessao();
        session_destroy();
        header('Location: /login');
        exit();
    }
}