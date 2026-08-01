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

    '/treinos'          => ['TreinoController', 'index'],
    '/planos'           => ['PlanoController', 'index'],
    '/financeiro'       => ['FinanceiroController', 'index'],
];