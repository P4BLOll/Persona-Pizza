<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// Verifique se há uma mensagem de erro na sessão
$errorMsg = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']); // Limpe a mensagem de erro da sessão

?>

<head>
    <!-- Metadados do documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Inclusão do kit de ícones FontAwesome -->
    <script src="https://kit.fontawesome.com/8defcfd92c.js" crossorigin="anonymous"></script>

    <!-- Links para as fontes Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;400;700;900&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
        
    <!-- Inclusão de folhas de estilo -->
    <!-- Reset CSS para padrões de estilo consistentes -->
    <link rel="stylesheet" href="./css/reset.css">
    <!-- Outros arquivos de estilo -->
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

    <!-- Inclusão de script JavaScript -->
    <script src="./js/login.js" defer></script>

    <!-- Título da página -->
    <title>Document</title>
</head>


<body>
    <main>
        <div class="login_container" id="login_container">
            <!-- Container principal para o formulário de login -->
            <div class="form_container">
                <!-- Formulário de login -->
                <form class="formulario form-login" method="post" action="login.php">
                    <!-- Imagem associada ao formulário de login -->
                    <img class="imagem" src="img/Component 2 (1).svg" alt="">
                    <!-- Título do formulário de login -->
                    <h2 class="form_title">Entrar</h2>
                    <!-- Texto com link para alternar para o formulário de cadastro -->
                    <p class="form_text">Não tem uma conta? <a href="#" class="form_link"
                            id="abrir-cadastro">Cadastre-se</a></p>
                    <!-- Container para campos de entrada de email e senha -->
                    <div class="form_input_container">
                        <!-- Campo de entrada para o email -->
                        <input type="email" class="form_input" placeholder="Email" name="email" id="Lemail">
                        <!-- Campo de entrada para a senha -->
                        <input type="password" class="form_input" placeholder="Senha" name="senha" id="LSenha">
                        <!-- Exibe mensagem de erro específica para o formulário de login -->
                        <?php if (!empty($errorMsg) && isset($_GET['action']) && $_GET['action'] === 'login'): ?>
                        <p class="error-message"><?php echo $errorMsg; ?></p>
                        <?php endif; ?>
                    </div>
                    <!-- Botão de envio do formulário de login -->
                    <button class="form_button" type="submit">Entrar</button>
                    <!-- Link para redefinir a senha -->
                    <!-- Container para ícones de redes sociais -->
                </form>

                </form>
                <!-- Formulário de cadastro -->
                <form class="formulario form-cadastro" method="post" action="cadastrar.php">
                    <!-- Imagem associada ao formulário de cadastro -->
                    <img class="imagem" src="img/Component 2 (1).svg" alt="">
                    <!-- Título do formulário de cadastro -->
                    <h2 class="form_title">Cadastre-se</h2>
                    <!-- Texto com link para alternar para o formulário de login -->
                    <p class="form_text">Já tem uma conta? <a href="#" class="form_link" id="abrir-login">Entrar</a></p>
                    <!-- Container para campos de entrada de nome, email, senha e confirmação de senha -->
                    <div class="form_input_container">
                        <!-- Campo de entrada para o nome -->
                        <input type="text" class="form_input" placeholder="Nome" name="nome" id="nome">
                        <!-- Campo de entrada para o email -->
                        <input type="email" class="form_input" placeholder="Email" name="email" id="email">
                        <!-- Campo de entrada para a senha -->
                        <input type="password" class="form_input" placeholder="Senha" name="senha" id="senha">
                        <!-- Campo de entrada para a confirmação de senha -->
                        <input type="password" class="form_input" placeholder="Confirmar Senha" name="confirmar_senha" id="confsenha">
                        <!-- Exibe mensagem de erro específica para o formulário de cadastro -->
                        <?php if (!empty($errorMsg) && isset($_GET['action']) && $_GET['action'] === 'cadastro'): ?>
                        <p class="error-message"><?php echo $errorMsg; ?></p>
                        <?php endif; ?>
                    </div>
                    <!-- Botão de envio do formulário de cadastro -->
                    <button class="form_button" type="submit">Cadastrar</button>
                </form>
            </div>
            <div class="overlay_container">
                <div class="overlay">
                    <!-- Imagem de sobreposição -->
                    <img src="img/tablet-login-not-css 1.svg" alt="">
                </div>
            </div>
        </div>
    </main>
</body>

</html>
