<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="css/teste_carrinho.css">
</head>
<body>
<?php
session_start();
require 'conexao.php';

// Inicialize o carrinho de compras na sessão, se ainda não estiver definido
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Variável para armazenar o preço total
$totalPrice = 0;

// Exiba o carrinho de compras
if (!empty($_SESSION['cart'])) { ?>
<main>
<a class="voltarin" href="cardapio.php"><img src="img/seta-esquerda.png" alt=""><div class="textbtn">Voltar</div></a>
<div class="titulo">
    <h2>Carrinho de Compras</h2>
</div>

    <?php foreach ($_SESSION['cart'] as $type => $pizzas) { ?>
        <h3 class="type"><?php echo $type; ?></h3>
        <div class="table-container">
        <table>
            <tr><th id="primeiro">Nome da Pizza</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th id="ultimo">Total</th>

            <?php $total = 0;
            foreach ($pizzas as $pizza_id => $item) {
                $pizza_name = buscarNomeDaPizza($pizza_id, $type);
                $pizza_price = buscarPrecoDaPizza($pizza_id, $type);

                $subtotal = $pizza_price * $item['quantity'];
                $total += $subtotal;
                $totalPrice += $subtotal; ?>
                <tr>
                    <td><?php echo $pizza_name; ?></td>
                    <td>R$<?php echo $pizza_price; ?></td>
                    <td id="buttons">
                        <form method="post" action="update_cart.php">
                            <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                            <input type="hidden" name="pizza_type" value="<?php echo $type; ?>">
                            <input type="hidden" name="quantity" value="<?php echo $item['quantity']; ?>">
                            <div class="actions">
                            <button type="submit" name="action" value="remove">-</button>
                                <p><?php echo $item['quantity']; ?></p>
                                <button type="submit" name="action" value="add">+</button>
                            </div>
                        </form>
                        <form method="post" action="remover_do_carrinho.php">
                            <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                            <input type="hidden" name="pizza_type" value="<?php echo $type; ?>">
                            <button type="submit" id="lixeira" name="remove_from_cart" value="" alt=""><img id="lixeira" src="img/lixeira-de-reciclagem (1).png" alt=""></button>
                        </form>
                    </td>
                    <td>R$<?php echo $subtotal; ?></td>
                </tr>
            <?php } ?>

            <tr id="total"><td colspan="4">Total: R$<?php echo $total; ?></td></tr>
        </table>
        </div>
    <?php } ?>
<div class="preco">
    <h3 id="preco">Preço Total: R$<?php echo $totalPrice; ?></h3>
    <form method="post" action="finalizacao.php">
        <input type="hidden" name="valor_final" value="<?php echo $totalPrice; ?>">
        <button type="submit" name="pagar" id="pagar" >Ir para Pagamento</button>
    </form>
    </div>
<?php } else {?>
    <div class="vazio">
    <div class="info">
    <h3>O Carrinho Está Vazio</h3>
    </div>
    <img class="carro_vazio" src="img/vazio.png" alt="">
    <p>Ops! Parece que o carrinho está vazio! <br><br>
        Volte para o cardápio e adicione pizzas, todas aparecerão aqui.
    </p>
    <div class="botao_voltar">
    <a class="voltar" href="cardapio.php"><img src="img/seta-esquerda.png" alt=""><div class="textbtn">Voltar</div></a>
    </div>
    </div>

<?php }

// Função para buscar o nome da pizza no banco de dados
function buscarNomeDaPizza($pizza_id, $pizza_type) {
    global $PDO;
    $sql = "SELECT nome FROM pizzas_$pizza_type WHERE id = :pizza_id";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result !== false) {
        return $result['nome'];
    } else {
        return 'Pizza não encontrada'; // Ou outra mensagem de erro apropriada
    }
}

// Função para buscar o preço da pizza no banco de dados
function buscarPrecoDaPizza($pizza_id, $pizza_type) {
    global $PDO;
    $sql = "SELECT preco FROM pizzas_$pizza_type WHERE id = :pizza_id";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result !== false) {
        return $result['preco'];
    } else {
        return 0.00; // Ou outro valor padrão apropriado
    }
}
?>
</main>
</body>
</html>
