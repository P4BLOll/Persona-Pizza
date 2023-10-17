<?php
require 'conexao.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="css/carrinho.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    
</head>

<body>

    <button class="sair" onclick="goBack()"><i class="fas fa-arrow-left"></i> Voltar</button>

    <div class="container">
        <form method="post" action="atualizar_carrinho.php">
            <div class="carrinho-itens">
                <?php
                $total = 0;

                if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
                    foreach ($_SESSION['carrinho'] as $pizza_id => $quantidade) {
                        $stmt = $PDO->prepare("SELECT * FROM pizzas WHERE id = :id");
                        $stmt->bindParam(':id', $pizza_id, PDO::PARAM_INT);
                        $stmt->execute();

                        $pizza = $stmt->fetch(PDO::FETCH_ASSOC);

                        if ($pizza) {
                ?>
                            <div class="carrinho-item">
                                <h2><?= $pizza['nome'] ?></h2>
                                <p>Preço por unidade: R$<span class="preco-unitario"><?= number_format($pizza['preco'], 2, ',', '.') ?></span></p>
                                <input type="number" class="quantidade" name="quantidade[<?= $pizza['id'] ?>]" value="<?= $quantidade ?>" min="1">
                                <p>Preço total: R$<span class="preco-total"><?= number_format(($pizza['preco'] * $quantidade), 2, ',', '.') ?></span></p>
                                <button type="submit" class="btn-excluir" onclick="removerPizza(<?= $pizza_id ?>)"><lord-icon src="https://cdn.lordicon.com/skkahier.json" trigger="hover" colors="primary:#ffffff" style="width:1.2rem;height:1.2rem">
                                    </lord-icon></i></button>
                            </div>
                <?php
                            $total += $pizza['preco'] * $quantidade;
                        }
                    }
                } else {
                    echo '<p>O carrinho está vazio.</p>';
                }
                ?>
            </div>
            <div class="botoes">
                <button><a class="AB" href="cardapio.php">Continuar Comprando</a></button>
                <button>Finalizar Pedido</button>
            </div>
            <p>Total: R$<span id="preco-total-final">
                    <?= number_format($total, 2, ',', '.') ?>
                </span></p>
        </form>

    </div>
</body>
<script>
    document.addEventListener('change', function(event) {
        if (event.target.classList.contains('quantidade')) {
            var pizzaId = event.target.name.match(/\d+/)[0];
            var novaQuantidade = event.target.value;

            fetch('atualizar_carrinho.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'pizza_id=' + pizzaId + '&nova_quantidade=' + novaQuantidade
            }).then(function() {
                window.location.reload();
            });
        }
    });

    function removerPizza(pizzaId) {
        fetch('remover_pizza_carrinho.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'pizza_id=' + pizzaId
        }).then(function() {
            window.location.reload();
        });
    }

    function goBack() {
        window.history.back();
    }
</script>

</html>