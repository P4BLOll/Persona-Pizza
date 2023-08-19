<?php
session_start();

// Conecte-se ao banco de dados
require 'conexao.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formulário enviado
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

    if (empty($email)|| empty($senha)) {
            $_SESSION['error'] = "Todos os campos são obrigatórios!";
            header("Location: index.php?action=login");
    exit();
    }

        // Compara para fazer a procura no banco
        $stmt = $PDO->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($user && password_verify($senha, $user['senha'])) {
            // Senha correta
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['nome'];

            // Redirecionar para a página de perfil ou outra página de sua escolha
            header("Location: perfil.php");
            exit();
            } else {
                // Senha incorreta
                $_SESSION['error'] = "Senha ou email incorretos!";
                header("Location: index.php?action=login");
                exit();
            }
        } 
    }