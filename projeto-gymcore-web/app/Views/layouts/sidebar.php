<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$nomeUsuario = $_SESSION['usuario_nome'] ?? 'Visitante';
$perfilUsuario = (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'admin') ? 'Admin' : 'Funcionário';
?>
<aside class="sidebar">
    <div class="brand">
        <h2>GymCore <span>WEB</span></h2>
    </div>

    <nav class="menu">
        <a href="/dashboard" class="menu-item <?= $_SERVER['REQUEST_URI'] === '/dashboard' ? 'active' : '' ?>">
            <i class="fa-solid fa-chart-line"></i> Dashboard
        </a>
        <a href="/alunos" class="menu-item <?= $_SERVER['REQUEST_URI'] === '/alunos' ? 'active' : '' ?>">
            <i class="fa-solid fa-users"></i> Alunos
        </a>
        <a href="/planos" class="menu-item <?= $_SERVER['REQUEST_URI'] === '/planos' ? 'active' : '' ?>">
            <i class="fa-solid fa-id-card"></i> Planos
        </a>
        <a href="/treinos" class="menu-item <?= $_SERVER['REQUEST_URI'] === '/treinos' ? 'active' : '' ?>">
            <i class="fa-solid fa-dumbbell"></i> Treinos
        </a>
        <a href="/financeiro" class="menu-item <?= $_SERVER['REQUEST_URI'] === '/financeiro' ? 'active' : '' ?>">
            <i class="fa-solid fa-wallet"></i> Financeiro
        </a>
    </nav>

    <div class="sidebar-footer">
        <a href="#" class="menu-item"><i class="fa-solid fa-gear"></i> Configurações</a>
        <a href="/logout" class="menu-item logout"><i class="fa-solid fa-right-from-bracket"></i> Sair</a>
    </div>
</aside>

<main class="main-content">
    <header class="topbar">
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Pesquisar...">
        </div>
        <div class="user-profile">
            <i class="fa-regular fa-bell badge-icon"></i>
            <div class="user-info">
                <strong><?= htmlspecialchars($nomeUsuario) ?></strong>
                <span><?= $perfilUsuario ?></span>
            </div>
            <img src="https://ui-avatars.com/api/?name=<?= urlencode($nomeUsuario) ?>&background=708216&color=fff" alt="Avatar">
        </div>
    </header>
    <div class="page-body">