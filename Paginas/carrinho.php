
<?php    
session_start();
                
                if (!isset($_SESSION['user_id'])) {
                    header("Location: index.php"); // Redireciona para a página de login se o usuário não estiver autenticado
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
</head>

<body>
    <div class="container">
        <form method="post" action="atualizar_carrinho.php" id="form-carrinho">
            <div class="carrinho-itens">
                <?php

                require 'conexao.php';
                $total = 0;

                if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
                    foreach ($_SESSION['carrinho'] as $pizza_id => $quantidade) {
                        $stmt = $PDO->prepare("SELECT * FROM pizzas WHERE id = :id");
                        $stmt->bindParam(':id', $pizza_id, PDO::PARAM_INT);
                        $stmt->execute();

                        $pizza = $stmt->fetch(PDO::FETCH_ASSOC);

                        if ($pizza) {
                            echo '<div class="carrinho-item">';
                            echo '  <h2>' . $pizza['nome'] . '</h2>';
                            echo '  <p>Preço por unidade: R$<span class="preco-unitario">' . $pizza['preco'] . '</span></p>';
                            echo '  <input type="number" class="quantidade" name="quantidade[' . $pizza_id . ']" value="' . $quantidade . '" min="1">'; // Input para alterar a quantidade
                            echo '  <p>Preço total: R$<span class="preco-total">' . ($pizza['preco'] * $quantidade) . '</span></p>'; // Mostra o preço total
                            echo '  <button class="btn-excluir" type="button" data-pizza-id="' . $pizza_id . '">Excluir</button>'; // Botão de exclusão
                        echo '</div>';

                            $total += $pizza['preco'] * $quantidade; // Atualiza o total
                        }
                    }
                } else {
                    echo '<p>O carrinho está vazio.</p>';
                }
                ?>
            </div>
            <div class="botoes">
                <button type="submit" id="btn-atualizar">Atualizar Carrinho</button>
                <button><a href="cardapio.php">Continuar Comprando</a></button>
                <button>Finalizar Pedido</button>
            </div>
            <p>Total: R$<span id="preco-total-final">
                    <?php
                    echo $total; // Mostra o valor total
                    ?>
                </span></p>
        </form>
    </div>

    <script>
        document.getElementById('btn-atualizar').addEventListener('click', function(event) {
            event.preventDefault(); // Previne o comportamento padrão do botão

            var total = 0;

            var quantidades = document.querySelectorAll('.quantidade');
            var precosUnitarios = document.querySelectorAll('.preco-unitario');
            var precosTotais = document.querySelectorAll('.preco-total');

            for (var i = 0; i < quantidades.length; i++) {
                var quantidade = parseInt(quantidades[i].value);
                var precoUnitario = parseFloat(precosUnitarios[i].innerText);
                precosTotais[i].innerText = (quantidade * precoUnitario).toFixed(2);
                total += quantidade * precoUnitario;
            }

            document.getElementById('preco-total-final').textContent = total.toFixed(2);
        });

        var botoesExcluir = document.querySelectorAll('.btn-excluir');
        botoesExcluir.forEach(function(botao) {
            botao.addEventListener('click', function(event) {
                var pizzaId = this.getAttribute('data-pizza-id');

                // Remover a pizza do carrinho na sessão
                fetch('remover_pizza_carrinho.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'pizza_id=' + pizzaId
                }).then(function() {
                    // Após remover, recarregar a página para refletir as mudanças no carrinho
                    window.location.reload();
                });
            });
        });
    </script>
</body>

</html>
