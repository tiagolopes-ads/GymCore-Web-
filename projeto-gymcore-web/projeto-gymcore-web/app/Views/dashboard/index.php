<?php require_once ROOT_PATH . '/app/Views/layouts/header.php'; ?>
<?php require_once ROOT_PATH . '/app/Views/layouts/sidebar.php'; ?>

<h1 class="page-title">Dashboard</h1>

<div class="dashboard-grid">
    <!-- Card de Gráfico de Receita -->
    <div class="card card-full">
        <div class="card-header">
            <h3>Receita</h3>
            <span class="badge-filter">Outubro <i class="fa-solid fa-chevron-down"></i></span>
        </div>
        <div class="chart-placeholder">
            <p><i class="fa-solid fa-chart-area fa-3x" style="color: #708216;"></i></p>
            <p>Gráfico de Desempenho de Vendas e Lucros</p>
        </div>
    </div>

    <!-- Métrica 1: Alunos Ativos -->
    <div class="card">
        <h3>Alunos Ativos</h3>
        <div class="stat-highlight">
            <div>
                <h2>148</h2>
                <span>Alunos</span>
            </div>
            <div>
                <h2>27</h2>
                <span>Rematriculas</span>
            </div>
        </div>
    </div>

    <!-- Métrica 2: Mensalidades a Vencer -->
    <div class="card">
        <h3>Mensalidades a Vencer</h3>
        <ul class="stat-list">
            <li><span class="dot green"></span> <strong>92</strong> em dia.</li>
            <li><span class="dot yellow"></span> <strong>34</strong> em 14 dias</li>
            <li><span class="dot orange"></span> <strong>12</strong> em 7 dias</li>
            <li><span class="dot red"></span> <strong>4</strong> vencidas</li>
        </ul>
    </div>

    <!-- Métrica 3: Ações Rápidas & Treinos -->
    <div class="card">
        <h3>Ações Rápidas</h3>
        <div class="actions-group">
            <a href="/alunos" class="btn-primary"><i class="fa-solid fa-user-plus"></i> Nova Matrícula</a>
            <a href="/financeiro" class="btn-secondary"><i class="fa-solid fa-file-invoice-dollar"></i> Registrar Pagamento</a>
        </div>
        <hr style="margin: 15px 0; border: none; border-top: 1px solid #eee;">
        <h3>Total de Treinos</h3>
        <p><strong>83</strong> Fichas Cadastradas | <strong>12</strong> Pendentes</p>
    </div>
</div>

<?php require_once ROOT_PATH . '/app/Views/layouts/footer.php'; ?>