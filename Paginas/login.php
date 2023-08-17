<?php
session_start();

// Conecte-se ao banco de dados
require 'conexao.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formulário enviado
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

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
                header("Location: login.php?error=3");
                exit();
            }
        } else {
            // Usuário não encontrado
            header("Location: login.php?error=4");
            exit();
        }
    }
