<?php
session_start();

// Conecte-se ao banco de dados
require 'conexao.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formulário enviado
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if (empty($email) || empty($senha)) {
            $_SESSION['error'] = "Todos os campos são obrigatórios!";
            header("Location: index.php?action=login");
            exit();
        }

        // Compara para fazer a procura no banco
        $stmt = $PDO->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha, $user['senha'])) {
            if ($user['is_admin'] == 1) {
                // User is an admin
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_nome'] = $user['nome'];
                // Redirect to admin dashboard
                header("Location: admin_dashboard.php");
                exit();
            } else {
                // User is a regular user
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_nome'] = $user['nome'];
                // Redirect to user profile
                header("Location: perfil.php");
                exit();
            }
        } else {
            // Senha incorreta
            $_SESSION['error'] = "Senha ou email incorretos!";
            header("Location: index.php?action=login");
            exit();
        }
    } 
}
?>
