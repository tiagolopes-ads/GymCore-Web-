<?php require_once ROOT_PATH . '/app/Views/layouts/header.php'; ?>
<?php require_once ROOT_PATH . '/app/Views/layouts/sidebar.php'; ?>

<div class="section-header">
    <div>
        <h1 class="page-title">Nova Matrícula</h1>
        <p class="subtitle">Preencha os dados do aluno para cadastrá-lo no sistema.</p>
    </div>
    <a href="/alunos" class="btn-secondary"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
</div>

<div class="card">
    <form action="/alunos/salvar" method="POST" style="display: flex; flex-direction: column; gap: 15px; max-width: 600px;">
        <div>
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Nome Completo:</label>
            <input type="text" name="nome" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div>
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">E-mail:</label>
            <input type="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div>
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">CPF:</label>
            <input type="text" name="cpf" placeholder="000.000.000-00" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="display: flex; gap: 15px;">
            <div style="flex: 1;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Plano:</label>
                <select name="plano" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="Mensal">Mensal</option>
                    <option value="Trimestral">Trimestral</option>
                    <option value="Anual">Anual</option>
                </select>
            </div>

            <div style="flex: 1;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Status:</label>
                <select name="status" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="Ativo">Ativo</option>
                    <option value="Pendente">Pendente</option>
                    <option value="Inativo">Inativo</option>
                </select>
            </div>
        </div>

        <div style="margin-top: 10px;">
            <button type="submit" class="btn-primary" style="border: none; cursor: pointer; padding: 12px 20px;">
                <i class="fa-solid fa-check"></i> Cadastrar Aluno
            </button>
        </div>
    </form>
</div>

<?php require_once ROOT_PATH . '/app/Views/layouts/footer.php'; ?>