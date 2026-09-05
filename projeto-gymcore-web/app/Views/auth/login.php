<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymCore Web - Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="login-body">
    <div class="login-wrapper">
        <div class="login-form-container">
            <div class="login-header">
                <h1>GymCore <span>WEB</span></h1>
                <p>Login com E-mail</p>
            </div>

            <!-- Exibição de Erro de Autenticação -->
            <?php 
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (isset($_SESSION['erro'])): 
            ?>
                <div style="padding: 10px; background-color: #f8d7da; color: #721c24; border-radius: 5px; margin-bottom: 15px; font-size: 0.9em;">
                    <?= $_SESSION['erro']; unset($_SESSION['erro']); ?>
                </div>
            <?php endif; ?>

            <form action="/auth/autenticar" method="POST" class="login-form">
                <div class="input-group">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>

                <div class="forgot-pass">
                    <a href="#">Esqueceu sua senha?</a>
                </div>

                <button type="submit" class="btn-primary btn-block">ENTRAR</button>
            </form>

            <div class="divider"><span>OU</span></div>

            <div class="social-login">
                <button class="social-btn"><i class="fa-brands fa-google" style="color: #ea4335;"></i></button>
                <button class="social-btn"><i class="fa-brands fa-instagram" style="color: #e4405f;"></i></button>
                <button class="social-btn"><i class="fa-brands fa-apple"></i></button>
            </div>

            <p class="register-text">Não possui uma conta? <a href="#">Registre-se Agora</a></p>
        </div>

        <div class="login-banner">
            <!-- Imagem de fundo estilizada via CSS -->
        </div>
    </div>
</body>
</html>