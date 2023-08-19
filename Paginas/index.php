<!DOCTYPE html>
<html lang="en"> 
<?php
session_start();
// Verifique se há uma mensagem de erro na sessão
$errorMsg = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']); // Limpe a mensagem de erro da sessão

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8defcfd92c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;400;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/login_container.css">
    <link rel="stylesheet" href="./css/form_container.css">
    <link rel="stylesheet" href="./css/formulario.css">
    <link rel="stylesheet" href="./css/form_title.css">
    <link rel="stylesheet" href="./css/colors.css">
    <link rel="stylesheet" href="./css/form_redes.css">
    <link rel="stylesheet" href="./css/redes_icon.css">
    <link rel="stylesheet" href="./css/form_input_container.css">
    <link rel="stylesheet" href="./css/form_input.css">
    <link rel="stylesheet" href="./css/form_button.css">
    <link rel="stylesheet" href="./css/overlay_container.css">
    <link rel="stylesheet" href="./css/overlay.css">
    <script src="./js/login.js" defer></script>
    <title>Document</title>
</head>

<body>
    <main>
        <div class="login_container" id="login_container">
            <div class="form_container">
                <form class="formulario form-login" method="post" action="login.php">
                    <img class="imagem" src="img/Component 2 (1).svg" alt="">
                    <h2 class="form_title">Entrar</h2>
                    <p class="form_text">Não tem uma conta? <a href="#" class="form_link"
                            id="abrir-cadastro">Cadastre-se</a></p>
                    <div class="form_input_container">
                        <input type="email" class="form_input" placeholder="Email" name="email" id="">
                        <input type="password" class="form_input" placeholder="Senha" name="senha" id="">
                        <?php if (!empty($errorMsg) && isset($_GET['action']) && $_GET['action'] === 'login'): ?>
                            <p class="error-message"><?php echo $errorMsg; ?></p>
                        <?php endif; ?>
                    </div>
                    <button class="form_button" type="submit">Entrar</button>
                    <a href="#" class="form_link">Esqueceu a Senha?</a>
                    <div class="form_redes">
                        <a class="redes_icon" href="#">
                            <i class="fa-brands fa-google"></i>
                        </a>
                        <a class="redes_icon" href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a class="redes_icon" href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </form>
                <form class="formulario form-cadastro" method="post" action="cadastrar.php">
                    <img class="imagem" src="img/Component 2 (1).svg" alt="">
                    <h2 class="form_title">Cadastre-se</h2>
                    <p class="form_text">Já tem uma conta? <a href="#" class="form_link" id="abrir-login">Entrar</a></p>
                    <div class="form_input_container">
                        <input type="text" class="form_input" placeholder="Nome" name="nome">
                        <input type="email" class="form_input" placeholder="Email" name="email">
                        <input type="password" class="form_input" placeholder="Senha" name="senha">
                        <input type="password" class="form_input" placeholder="Confirmar Senha" name="confirmar_senha">
                         <!-- Mensagem de erro -->
                         <?php if (!empty($errorMsg) && isset($_GET['action']) && $_GET['action'] === 'cadastro'): ?>
                            <p class="error-message"><?php echo $errorMsg; ?></p>
                        <?php endif; ?>
                    </div>
                    <button class="form_button" type="submit">Cadastrar</button>
                    <div class="form_redes">
                        <a class="redes_icon" href="#">
                            <i class="fa-brands fa-google"></i>
                        </a>
                        <a class="redes_icon" href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a class="redes_icon" href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </form>
            </div>
            <div class="overlay_container">
                <div class="overlay">
                    <img src="img/tablet-login-not-css 1.svg" alt="">
                </div>
            </div>
        </div>
    </main>
</body>

</html>