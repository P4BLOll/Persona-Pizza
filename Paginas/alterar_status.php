<?php
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém o ID da pizza e o novo status
    $pizzaID = $_POST['pizza_id'];
    $novoStatus = $_POST['status'];

    // Conexão com o banco de dados
    require 'conexao.php';

    // Atualiza o status da pizza
    $stmt = $PDO->prepare("UPDATE pizzas_criada SET status = ? WHERE id = ?");
    $stmt->execute([$novoStatus, $pizzaID]);

    // Redireciona de volta para a página de administração de pizzas
    header("Location: gerenciar_pizzzas_criadas.php");
    exit();
} else {
    // Se a requisição não for do tipo POST, redireciona para a página de administração de pizzas
    header("Location: gerenciar_pizzzas_criadas.php");
    exit();
}
