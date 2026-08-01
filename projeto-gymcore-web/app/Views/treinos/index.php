<?php require_once ROOT_PATH . '/app/Views/layouts/header.php'; ?>
<?php require_once ROOT_PATH . '/app/Views/layouts/sidebar.php'; ?>

<h1 class="page-title">Gestão de Treinos</h1>
<p class="subtitle">Crie, edite e acompanhe as fichas de treino dos alunos.</p>

<div class="card mb-20">
    <table class="data-table">
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>Treino do Dia</th>
                <th>Instrutor</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>João Silva</strong></td>
                <td>A - Peito e Tríceps</td>
                <td>Prof. Pedro Henrique</td>
                <td><span class="badge status-ativo">Ativo</span></td>
                <td><button class="btn-sm"><i class="fa-solid fa-eye"></i> Visualizar</button></td>
            </tr>
            <tr>
                <td><strong>Isabela Clara</strong></td>
                <td>D - Ombro e Trapézio</td>
                <td>Prof. Pedro Henrique</td>
                <td><span class="badge status-ativo">Ativo</span></td>
                <td><button class="btn-sm"><i class="fa-solid fa-eye"></i> Visualizar</button></td>
            </tr>
        </tbody>
    </table>
</div>

<h2 class="section-subtitle">Ficha Treino - João Silva</h2>
<div class="workout-card card">
    <div class="workout-header">
        <h3>TREINO - A</h3>
    </div>
    <table class="data-table">
        <thead>
            <tr>
                <th>Peito</th>
                <th>Séries</th>
                <th>Repetições</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>Supino Inclinado c/ Barra</td><td>4x</td><td>10 a 20</td></tr>
            <tr><td>Crucifixo Reto</td><td>3x</td><td>10 a 20</td></tr>
            <tr><td>Supino Reto c/ Barra</td><td>3x</td><td>10 a 20</td></tr>
            <tr><td>Voador</td><td>3x</td><td>10 a 20</td></tr>
        </tbody>
    </table>
    <table class="data-table style-alt">
        <thead>
            <tr>
                <th>Tríceps</th>
                <th>Séries</th>
                <th>Repetições</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>Francês Deitado c/ Halter</td><td>3x</td><td>10 a 20</td></tr>
            <tr><td>Corda Cross</td><td>3x</td><td>10 a 20</td></tr>
            <tr><td>Tríceps Testa</td><td>4x</td><td>10 a 20</td></tr>
        </tbody>
    </table>
</div>

<?php require_once ROOT_PATH . '/app/Views/layouts/footer.php'; ?>