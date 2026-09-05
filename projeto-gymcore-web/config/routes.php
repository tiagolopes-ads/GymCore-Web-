<?php

return [
    '/'                 => ['DashboardController', 'index'],
    '/dashboard'        => ['DashboardController', 'index'],
    '/login'            => ['AuthController', 'login'],
    '/logout'           => ['AuthController', 'logout'],
    
    // Rotas do CRUD de Alunos
    '/alunos'           => ['AlunoController', 'index'],  // Read (Listagem)
    '/alunos/novo'      => ['AlunoController', 'criar'],  // Form de Cadastro
    '/alunos/salvar'    => ['AlunoController', 'salvar'], // Create (Ação)
    '/alunos/editar'    => ['AlunoController', 'editar'], // Formulário de edição
    '/alunos/atualizar' => ['AlunoController', 'atualizar'], // Update (Ação)
    '/alunos/excluir'   => ['AlunoController', 'excluir'], // Delete (Ação)

    '/treinos'          => ['TreinoController', 'index'],
    '/planos'           => ['PlanoController', 'index'],
    '/financeiro'       => ['FinanceiroController', 'index'],
];