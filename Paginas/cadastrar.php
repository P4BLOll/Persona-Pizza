<?php

session_start();

// Conecte-se ao banco de dados
require 'conexao.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validar os dados de entrada
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email',);
    $endereco = filter_input(INPUT_POST, 'endereco');
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmar_senha'];

    if (empty($nome) || empty($email) || empty($endereco) || empty($senha) || empty($confirmarSenha)) {
        // Erro caso algum campo esteja vazio
        header("Location: index.php?error=1");
        exit();
    }

    if ($senha !== $confirmarSenha) {
        // Erro caso as senhas não estejam iguais
        header("Location: index.php?error=2");
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
        // Email já registrado, redirecionar de volta para o formulário de registro com mensagem de erro
        header("Location: index.php?error=3");
        exit();
    } elseif ($userNome) {
        // Nome já registrado, redirecionar de volta para o formulário de registro com mensagem de erro
        header("Location: index.php?error=4");
        exit();
    }
    // Armazene senhas de forma segura
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    try {
        // Inserir dados no banco de dados usando Prepared Statements
        $stmt = $PDO->prepare("INSERT INTO usuarios (nome, email, endereco, senha) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $endereco, $senhaHash]);

        // Redireciona para a página de login se for feito com sucesso
        header("Location: index.php?success=1");
        exit();
    } catch (PDOException $e) {
        echo 'Erro no banco de dados: ' . $e->getMessage();
        exit();
    }
}
