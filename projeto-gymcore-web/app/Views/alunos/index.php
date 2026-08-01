<?php require_once ROOT_PATH . '/app/Views/layouts/header.php'; ?>
<?php require_once ROOT_PATH . '/app/Views/layouts/sidebar.php'; ?>

<div class="section-header">
    <div>
        <h1 class="page-title">Gestão de Alunos</h1>
        <p class="subtitle">Gerencie todos os alunos em um só lugar. Controle o acesso e monitore as atividades.</p>
    </div>
    <a href="#" class="btn-primary"><i class="fa-solid fa-plus"></i> Nova Matrícula</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Plano</th>
                    <th>Matrícula</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>João Silva</strong></td>
                    <td>joao.silva@gmail.com</td>
                    <td>joao77</td>
                    <td><span class="badge status-ativo">Ativo</span></td>
                    <td>Mensal</td>
                    <td>12/04/2024</td>
                    <td class="table-actions"><i class="fa-solid fa-pen"></i> <i class="fa-solid fa-trash"></i></td>
                </tr>
                <tr>
                    <td><strong>Beatriz Oliveira</strong></td>
                    <td>beatriz.oliveira@gmail.com</td>
                    <td>bia659</td>
                    <td><span class="badge status-inativo">Inativo</span></td>
                    <td>Anual</td>
                    <td>27/06/2022</td>
                    <td class="table-actions"><i class="fa-solid fa-pen"></i> <i class="fa-solid fa-trash"></i></td>
                </tr>
                <tr>
                    <td><strong>Daniel Martins</strong></td>
                    <td>daniel.martins3@gmail.com</td>
                    <td>dmartins3</td>
                    <td><span class="badge status-banido">Banido</span></td>
                    <td>Anual</td>
                    <td>08/01/2024</td>
                    <td class="table-actions"><i class="fa-solid fa-pen"></i> <i class="fa-solid fa-trash"></i></td>
                </tr>
                <tr>
                    <td><strong>Cláudia Helena</strong></td>
                    <td>claudiahhye@gmail.com</td>
                    <td>claudiahh</td>
                    <td><span class="badge status-pendente">Pendente</span></td>
                    <td>Diário</td>
                    <td>05/10/2021</td>
                    <td class="table-actions"><i class="fa-solid fa-pen"></i> <i class="fa-solid fa-trash"></i></td>
                </tr>
                <tr>
                    <td><strong>Marcos Ribeiro</strong></td>
                    <td>marcosrib777@gmail.com</td>
                    <td>marcos7</td>
                    <td><span class="badge status-suspenso">Suspenso</span></td>
                    <td>Mensal</td>
                    <td>19/02/2023</td>
                    <td class="table-actions"><i class="fa-solid fa-pen"></i> <i class="fa-solid fa-trash"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php require_once ROOT_PATH . '/app/Views/layouts/footer.php'; ?>