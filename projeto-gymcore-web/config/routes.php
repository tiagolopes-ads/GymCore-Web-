<?php

return [
    '/'          => ['AuthController', 'login'],
    '/login'     => ['AuthController', 'login'],
    '/logout'    => ['AuthController', 'logout'],
    '/dashboard' => ['DashboardController', 'index'],
    '/alunos'    => ['AlunoController', 'index'],
    '/planos'    => ['PlanoController', 'index'],
    '/treinos'   => ['TreinoController', 'index'],
    '/financeiro' => ['FinanceiroController', 'index'],
];