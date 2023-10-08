<?php

session_start();

// Conecte-se ao banco de dados
require 'conexao.php';

$_SESSION['overlayActive'] = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validar os dados de entrada
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email',);
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmar_senha'];

    if (empty($nome) || empty($email) || empty($senha) || empty($confirmarSenha)) {
        $_SESSION['error'] = "Todos os campos são obrigatórios!";
        header("Location: index.php?action=cadastro");
        exit();
    }
    
    if ($senha !== $confirmarSenha) {
        $_SESSION['error'] = "As senhas não coincidem!";
        header("Location: index.php?action=cadastro");
        exit();
    }
     // Verificar se o email já está registrado no banco de dados
    $stmtEmail = $PDO->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmtEmail->execute([$email]);
    $userEmail = $stmtEmail->fetch(PDO::FETCH_ASSOC);

    // Verificar se o nome já está registrado no banco de dados
    $stmtNome = $PDO->prepare("SELECT id FROM usuarios WHERE nome = ?");
    $stmtNome->execute([$nome]);
    $userNome = $stmtNome->fetch(PDO::FETCH_ASSOC);

    if ($userEmail) {
        $_SESSION['error'] = "Este email já está registrado!";
        header("Location: index.php?action=cadastro");
        exit();
    } elseif ($userNome) {
        $_SESSION['error'] = "Este nome de usuário já está em uso!";
        header("Location: index.php?action=cadastro");
        exit();
    }
    // Armazene senhas de forma segura
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    try {
        // Inserir dados no banco de dados usando Prepared Statements
        $stmt = $PDO->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->execute([$nome, $email, $senhaHash]);

        // Redireciona para a página de login se for feito com sucesso
        header("Location: index.php?success=1");
        exit();
    } catch (PDOException $e) {
        echo 'Erro no banco de dados: ' . $e->getMessage();
        exit();
    }
}

