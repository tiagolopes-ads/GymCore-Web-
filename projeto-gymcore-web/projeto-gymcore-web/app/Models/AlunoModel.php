<?php

class AlunoModel
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::connect();
    }

    // READ: Busca todos os alunos cadastrados
    public function listar(): array
    {
        $sql = "SELECT * FROM alunos ORDER BY id DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    // CREATE: Insere um novo aluno no banco
    public function inserir(string $nome, string $email, string $cpf, string $plano, string $status): bool
    {
        $sql = "INSERT INTO alunos (nome, email, cpf, plano, status) VALUES (:nome, :email, :cpf, :plano, :status)";
        $stmt = $this->pdo->prepare($sql);
        
        return $stmt->execute([
            ':nome'   => $nome,
            ':email'  => $email,
            ':cpf'    => $cpf,
            ':plano'  => $plano,
            ':status' => $status,
        ]);
    }
}