<?php
session_start();
require 'conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrinho</title>
</head>
<body>
    <h1>Seu Carrinho</h1>
    <ul>
        <?php
        $total = 0;

        $qtdProduto1 = $_POST['produto1'];
        $qtdProduto2 = $_POST['produto2'];
        $qtdProduto3 = $_POST['produto3'];

        if ($qtdProduto1 > 0) {
            $total += $qtdProduto1 * 10;
            echo "<li>Produto 1 - $qtdProduto1 unidades</li>";
        }
        if ($qtdProduto2 > 0) {
            $total += $qtdProduto2 * 20;
            echo "<li>Produto 2 - $qtdProduto2 unidades</li>";
        }
        if ($qtdProduto3 > 0) {
            $total += $qtdProduto3 * 30;
            echo "<li>Produto 3 - $qtdProduto3 unidades</li>";
        }

        echo "<li>Total: $" . $total . "</li>";
        ?>
    </ul>
</body>
</html>
