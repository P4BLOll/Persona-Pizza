<?php
session_start();

// Conecte-se ao banco de dados
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar os dados de entrada
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);
    $foto1 = filter_input(INPUT_POST, 'foto1', FILTER_SANITIZE_STRING);
    $foto2 = filter_input(INPUT_POST, 'foto2', FILTER_SANITIZE_STRING);

    if (!$nome || !$descricao || !$preco || !$foto1 || !$foto2) {
        $_SESSION['error'] = "Preencha todos os campos corretamente!";
    } else {
        // Verificar se o nome já está registrado no banco de dados
        $stmtNome = $PDO->prepare("SELECT id FROM pizzas WHERE nome = ?");
        $stmtNome->execute([$nome]);
        $userNome = $stmtNome->fetch(PDO::FETCH_ASSOC);

        if ($userNome) {
            $_SESSION['error'] = "Este nome de pizza já está em uso!";
        } else {
            try {
                // Inserir dados no banco de dados usando Prepared Statements
                $stmt = $PDO->prepare("INSERT INTO pizzas (nome, descricao, preco, foto1, foto2) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$nome, $descricao, $preco, $foto1, $foto2]);

                // Redirecionar para a página de consulta se for feito com sucesso
                header("Location: consultar.php?success=1");
                exit();
            } catch (PDOException $e) {
                $_SESSION['error'] = 'Erro no banco de dados: ' . $e->getMessage();
            }
        }
    }
}

// Redirecionar de volta para a página de cadastro em caso de erro
header("Location: index.php?action=cadastro");
exit();
?>
