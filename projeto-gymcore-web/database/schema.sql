CREATE DATABASE IF NOT EXISTS gymcore_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE gymcore_db;

CREATE TABLE IF NOT EXISTS alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    cpf VARCHAR(14) NOT NULL,
    plano VARCHAR(50) NOT NULL DEFAULT 'Mensal',
    status VARCHAR(20) NOT NULL DEFAULT 'Ativo',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

USE gymcore_db;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    perfil VARCHAR(50) NOT NULL DEFAULT 'funcionario'
);

-- Inserir um usuário administrador padrão (Senha: password hashada)
-- O hash abaixo corresponde à senha 'password' usando password_hash()
INSERT INTO usuarios (nome, email, senha, perfil) 
VALUES ('Administrador', 'admin@gymcore.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin');

INSERT INTO usuarios (nome, email, senha, perfil) 
VALUES ('Maria Funcionaria', 'funcionario@gymcore.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'funcionario');