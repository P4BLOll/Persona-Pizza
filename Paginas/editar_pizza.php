<?php
session_start();
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pizza_id = $_POST["pizza_id"];
  $novo_preco = $_POST["preco"];
  $novo_em_estoque = isset($_POST["estoque"]) ? $_POST["estoque"] : 0;

  try {
    $stmt = $PDO->prepare("UPDATE pizzas_comum SET preco = :novo_preco, em_estoque = :novo_em_estoque WHERE id = :pizza_id");
    $stmt->bindParam(':novo_preco', $novo_preco);
    $stmt->bindParam(':novo_em_estoque', $novo_em_estoque);
    $stmt->bindParam(':pizza_id', $pizza_id);
    $stmt->execute();

    header("Location: gerenciar_cardapio.php?success=1");
    exit();
  } catch (PDOException $e) {
    echo 'Erro ao executar a atualização: ' . $e->getMessage();
  }
}
?>
