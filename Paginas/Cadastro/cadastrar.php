<?php

session_start();

// Conecte-se ao banco de dados
require 'conexao.php';

$_SESSION['overlayActive'] = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validar os dados de entrada
    $nome = filter_input(INPUT_POST, 'nome');
    $descricao = filter_input(INPUT_POST, 'descricao');
    $preco = filter_input(INPUT_POST, 'preco');
    $foto1 = filter_input(INPUT_POST, 'foto1');
    $foto2 = filter_input(INPUT_POST, 'foto2');

    // Verificar se o nome já está registrado no banco de dados
    $stmtNome = $PDO->prepare("SELECT id FROM pizzas WHERE nome = ?");
    $stmtNome->execute([$nome]);
    $userNome = $stmtNome->fetch(PDO::FETCH_ASSOC);

    if ($userNome) {
        $_SESSION['error'] = "Este nome de pizza já está em uso!";
        header("Location: index.php?action=cadastro");
        exit();
    }

    try {
        // Inserir dados no banco de dados usando Prepared Statements
        $stmt = $PDO->prepare("INSERT INTO pizzas (nome, descricao, preco, foto1, foto2) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nome, $descricao, $preco, $foto1, $foto2]);

        // Redireciona para a página de consulta se for feito com sucesso
        header("Location: consultar.php?success=1");
        exit();
    } catch (PDOException $e) {
        $_SESSION['error'] = 'Erro no banco de dados: ' . $e->getMessage();
        header("Location: index.php?action=cadastro");
        exit();
    }
}
