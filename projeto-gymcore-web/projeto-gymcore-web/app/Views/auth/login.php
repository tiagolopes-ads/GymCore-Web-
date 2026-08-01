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

            <form action="/dashboard" method="GET" class="login-form">
                <div class="input-group">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Senha" required>
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