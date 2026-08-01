<?php require_once ROOT_PATH . '/app/Views/layouts/header.php'; ?>
<?php require_once ROOT_PATH . '/app/Views/layouts/sidebar.php'; ?>

<div class="section-header">
    <div>
        <h1 class="page-title">Gestão de Alunos</h1>
        <p class="subtitle">Gerencie todos os alunos em um só lugar. Controle o acesso e monitore as atividades.</p>
    </div>
    <a href="/alunos/novo" class="btn-primary"><i class="fa-solid fa-plus"></i> Nova Matrícula</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Completo</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Plano</th>
                    <th>Status</th>
                    <th>Data Cadastro</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($alunos)): ?>
                    <?php foreach ($alunos as $aluno): ?>
                        <tr>
                            <td>#<?= htmlspecialchars($aluno['id']) ?></td>
                            <td><strong><?= htmlspecialchars($aluno['nome']) ?></strong></td>
                            <td><?= htmlspecialchars($aluno['email']) ?></td>
                            <td><?= htmlspecialchars($aluno['cpf']) ?></td>
                            <td><?= htmlspecialchars($aluno['plano']) ?></td>
                            <td>
                                <span class="badge status-<?= strtolower($aluno['status']) ?>">
                                    <?= htmlspecialchars($aluno['status']) ?>
                                </span>
                            </td>
                            <td><?= date('d/m/Y', strtotime($aluno['created_at'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" style="text-align: center; padding: 20px;">Nenhum aluno cadastrado no momento.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once ROOT_PATH . '/app/Views/layouts/footer.php'; ?>