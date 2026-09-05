# 🏋️‍♂️ GymCore Web - Guia Rápido de Execução

Passo a passo simples para criar o banco de dados, rodar a aplicação e testar o cadastro de alunos.

---

## 1️⃣ Criar o Banco de Dados (MySQL)

1. Abra o **MySQL Workbench** (ou phpMyAdmin).
2. Abra uma nova aba de Query (`Ctrl + T`) e execute o script abaixo (o script também pode ser encontrado na pasta do projeto em "projeto-gymcore-web\database\schema.sql"):

```sql
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

## 2️⃣ Executar a Aplicação

1. Abra o **terminal** na pasta raiz do projeto (`projeto-gymcore-web`).
2. Inicie o servidor interno do PHP:

```bash
php -S localhost:8000 -t public

```

---

## 3️⃣ Testar no Navegador

1. Acesse o formulário para matricular um aluno:
👉 **http://localhost:8000/alunos/novo**
2. Preencha os dados e clique em **Cadastrar Aluno**.
3. Você será redirecionado para a lista completa:
👉 **http://localhost:8000/alunos**

---

## 4️⃣ Testar no Banco de Dados (SELECT)

Para confirmar se o aluno foi realmente gravado na tabela, execute no **MySQL Workbench**:

```sql
USE gymcore_db;

SELECT * FROM alunos;

```

```

```