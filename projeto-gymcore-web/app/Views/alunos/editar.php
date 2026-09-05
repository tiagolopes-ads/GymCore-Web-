<?php require_once ROOT_PATH . '/app/Views/layouts/header.php'; ?>
<?php require_once ROOT_PATH . '/app/Views/layouts/sidebar.php'; ?>

<div class="section-header">
    <div>
        <h1 class="page-title">Editar Aluno</h1>
        <p class="subtitle">Atualize os dados cadastrais do aluno.</p>
    </div>
    <a href="/alunos" class="btn-secondary"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
</div>

<?php if (isset($_SESSION['erro'])): ?>
    <div style="padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 20px;">
        <?= $_SESSION['erro']; unset($_SESSION['erro']); ?>
    </div>
<?php endif; ?>

<div class="card">
    <form action="/alunos/atualizar" method="POST" style="display: flex; flex-direction: column; gap: 15px; max-width: 600px;">
        <!-- ID Oculto para identificar quem será atualizado -->
        <input type="hidden" name="id" value="<?= htmlspecialchars($aluno['id']) ?>">

        <div>
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Nome Completo:</label>
            <input type="text" name="nome" value="<?= htmlspecialchars($aluno['nome']) ?>" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div>
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">E-mail:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($aluno['email']) ?>" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div>
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">CPF:</label>
            <input type="text" name="cpf" value="<?= htmlspecialchars($aluno['cpf']) ?>" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="display: flex; gap: 15px;">
            <div style="flex: 1;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Plano:</label>
                <select name="plano" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="Mensal" <?= $aluno['plano'] === 'Mensal' ? 'selected' : '' ?>>Mensal</option>
                    <option value="Trimestral" <?= $aluno['plano'] === 'Trimestral' ? 'selected' : '' ?>>Trimestral</option>
                    <option value="Anual" <?= $aluno['plano'] === 'Anual' ? 'selected' : '' ?>>Anual</option>
                </select>
            </div>

            <div style="flex: 1;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Status:</label>
                <select name="status" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="Ativo" <?= $aluno['status'] === 'Ativo' ? 'selected' : '' ?>>Ativo</option>
                    <option value="Pendente" <?= $aluno['status'] === 'Pendente' ? 'selected' : '' ?>>Pendente</option>
                    <option value="Inativo" <?= $aluno['status'] === 'Inativo' ? 'selected' : '' ?>>Inativo</option>
                </select>
            </div>
        </div>

        <div style="margin-top: 10px;">
            <button type="submit" class="btn-primary" style="border: none; cursor: pointer; padding: 12px 20px;">
                <i class="fa-solid fa-save"></i> Salvar Alterações
            </button>
        </div>
    </form>
</div>

<?php require_once ROOT_PATH . '/app/Views/layouts/footer.php'; ?>