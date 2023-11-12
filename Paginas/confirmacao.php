<?php
session_start();
require 'conexao.php';

if (isset($_SESSION['user_id'])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}

if (isset($_POST['confirmacao'])) {
    $pizza_perso = $_POST['pizza_perso'];
    $pedacos = (int) $_POST['pizza-quantidade'];
    $divisao = 8;

    // Execute uma consulta SQL para obter os detalhes da pizza com base no $pizza_id
    $stmt = $PDO->prepare("SELECT * FROM pizzas_comum WHERE id = :id");
    $stmt->bindParam(':id', $pizza_perso, PDO::PARAM_INT);
    $stmt->execute();

    $pizza = $stmt->fetch(PDO::FETCH_ASSOC);

    // Preço base da pizza
    $precoBase = $pizza['preco'];

    // Inicializa o valor das edições como zero
    $valorEdicoes = 0;

    $ingredientesPersonalizados = [];

    $totalIngredientes = 0; // Inicializa o total de ingredientes

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $valorTotal = $precoBase; // Inicializa o valor total
            // Verifique se a quantidade selecionada está dentro do intervalo válido (de 1 a 8)

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/confirmacao.css">
            <title>Confirmação do Pedido</title>
        </head>
        <body>
            <main>
            <div class="informacoes">
        <h1>Confirmação do Pedido</h1>
        <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Pedaços</th>
                    <th>Ingrediente</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($_POST as $key => $value) {
                if (strpos($key, 'quantidade_') === 0) {
                    $quantity = intval($value);
                    $ingredientName = substr($key, strlen('quantidade_'));

                    if ($quantity != 1) {
                        if ($quantity > 1) {
                            $quantity -= 1;
                            $precoIngrediente = 3; // Preço de cada unidade de ingrediente (ajuste conforme necessário)
                            $precoEdicoesIngrediente = $quantity * $precoIngrediente;
                            ?>
                            <tr>
                                <td><?= $pedacos ?></td>
                                <td><?= $ingredientName ?></td>
                                <td><?= $quantity ?></td>
                                <td>R$ <?= number_format($precoEdicoesIngrediente, 2) ?></td>
                            </tr>
                            <?php

                            // Adiciona o preço deste ingrediente ao valor total
                            $valorTotal += $precoEdicoesIngrediente;
                        }else{
                            if ($quantity < 1) {
                                $precoEdicoesIngrediente = 0;
                                ?>
                                <tr>
                                    <td><?= $ingredientName ?></td>
                                    <td><?= $quantity ?></td>
                                    <td>Desconto de R$ 3,00</td>
                                </tr>
                                <?php
                           $valorTotal -= $precoEdicoesIngrediente;
                            }
                    }
                        // Adiciona o ingrediente personalizado ao array
                        $ingredientesPersonalizados[] = [
                            'nome' => $ingredientName,
                            'quantidade' => $quantity,
                            'preco' => $precoEdicoesIngrediente,
                        ];


                        $_SESSION['carrinho'][$pizza_perso] = [
                            'pizza_id' => $pizza_perso,
                            'ingredientes_personalizados' => $ingredientesPersonalizados,
                            'preco' => $valorTotal,
                        ];

                    }

                }
            }
            $valorTotal = ($valorTotal / 8) * $pedacos;
            $_SESSION['confirmacao_bem_sucedida'] = true;
            ?>
            </tbody>
        </table>
        </div>
        <p class="preco-total">Preço Total: R$ <?= number_format($valorTotal, 2) ?></p>
<div class="botoes">
        <form action="adicionar_personalizada.php" method="post">
            <input type="hidden" name="nome" value ="<?= $pizza['nome']?>">
            <input type="hidden" name="pizza_perso" value="<?= $pizza_perso ?>">
            <input type="hidden" name="valor_total" value="<?= $valorTotal ?>">
            <?php
            foreach ($ingredientesPersonalizados as $index => $ingrediente) {
                ?>
                <input type="hidden" name="nome_ingrediente[]" value="<?= isset($ingrediente['nome']) ? $ingrediente['nome'] : '' ?>">
                <input type="hidden" name="quantidade[]" value="<?= isset($ingrediente['quantidade']) ? $ingrediente['quantidade'] : '' ?>">
                <input type="hidden" name="preco[]" value="<?= isset($ingrediente['preco']) ? $ingrediente['preco'] : '' ?>">
                <?php
            }
            ?>
            <button type="submit" name="adicionar_carrinhoP">Confirmar Pedido</button>
        </form>
        <form action="personalizacao.php" method="post">
                    <div class="animacao">
                        <input type="hidden" name="pizza_perso" value="<?= $pizza_perso ?>">
                        <button type="submit" name="personalizacao">Voltar</button>
                    </div>
                </form>
                </div>
        </div>
        </main>
        </body>
        </html>
        <?php
            }
    }
?>
