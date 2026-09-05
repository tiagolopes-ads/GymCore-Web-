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

    // BUSCAR POR ID: Recupera os dados de um aluno específico para edição
    public function buscarPorId(int $id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM alunos WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    // UPDATE: Atualiza os dados de um aluno existente
    public function atualizar(int $id, string $nome, string $email, string $cpf, string $plano, string $status): bool
    {
        $sql = "UPDATE alunos SET nome = :nome, email = :email, cpf = :cpf, plano = :plano, status = :status WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        
        return $stmt->execute([
            ':nome'   => $nome,
            ':email'  => $email,
            ':cpf'    => $cpf,
            ':plano'  => $plano,
            ':status' => $status,
            ':id'     => $id
        ]);
    }

    // DELETE: Remove um aluno do banco de dados
    public function excluir(int $id): bool
    {
        $stmt = $this->pdo->prepare("DELETE FROM alunos WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}