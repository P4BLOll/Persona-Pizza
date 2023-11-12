<?php
session_start();
require 'conexao.php';

$preco_base_massa_fina = 15.0;
$preco_base_massa_grossa = 20.0;
$preco_base_ingrediente = 4.0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_pizza = $_POST['nome_pizza'];
    $tipo_de_massa = $_POST['massa'];
    $usuario_id = $_SESSION['user_id'];
    $ingredientes_selecionados = isset($_POST['disponivel']) ? $_POST['disponivel'] : array();
    $ingredientes_str = implode(", ", $ingredientes_selecionados);

    $preco_base = ($tipo_de_massa == 'fina') ? $preco_base_massa_fina : $preco_base_massa_grossa;
    $preco_ingredientes = count($ingredientes_selecionados) * $preco_base_ingrediente;
    $preco_total = $preco_base + $preco_ingredientes;

    try {
        $stmt = $PDO->prepare("INSERT INTO pizzas_criada (nome, tipo_de_massa, ingredientes, preco, usuario_id, status) VALUES (?, ?, ?, ?, ?, 0)");
        $stmt->execute([$nome_pizza, $tipo_de_massa, $ingredientes_str, $preco_total, $usuario_id]);

        // Envie o aviso de sucesso
        $_SESSION['mensagem'] = "Seu pedido foi enviado para análise do administrador. Aguarde a confirmação.";

        header("Location: home.php"); 
        exit();
    } catch (PDOException $e) {
        echo "Erro ao adicionar a pizza: " . $e->getMessage();
    }
}
?>
