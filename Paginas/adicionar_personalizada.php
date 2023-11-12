<?php
session_start();
require 'conexao.php';

if (isset($_POST['adicionar_carrinhoP'])) {
    $nome = $_POST['nome'];
    $pizza_perso = $_POST['pizza_perso'];
    $valorTotal = $_POST['valor_total'];

    // Recupere os ingredientes personalizados dos arrays
    $nomesIngredientes = $_POST['nome_ingrediente'];
    $quantidades = $_POST['quantidade'];
    $precosIngredientes = $_POST['preco'];

    // Certifique-se de que os arrays tenham o mesmo comprimento
    if (count($nomesIngredientes) === count($quantidades) && count($quantidades) === count($precosIngredientes)) {
        try {
            $PDO->beginTransaction();

            // Insira a pizza personalizada
            $stmt = $PDO->prepare("INSERT INTO pizzas_personalizada (pizza_id, preco, nome) VALUES (?, ?, ?)");
            $stmt->execute([$pizza_perso, $valorTotal, $nome]);

            // Obtenha o ID da pizza personalizada recém-inserida
            $pizza_personalizada_id = $PDO->lastInsertId();

            // Insira cada ingrediente personalizado
            for ($i = 0; $i < count($nomesIngredientes); $i++) {
                $nomeIngrediente = $nomesIngredientes[$i];
                $quantidade = $quantidades[$i];
                $precoIngrediente = $precosIngredientes[$i];

                $stmt = $PDO->prepare("INSERT INTO ingredientes_personalizados (pizza_personalizada_id, nome, quantidade, preco) VALUES (?, ?, ?, ?)");
                $stmt->execute([$pizza_personalizada_id, $nomeIngrediente, $quantidade, $precoIngrediente]);
            }

            $PDO->commit();?>
            <form id="redirectForm" action="add_to_cart.php" method="post">
            <input type="hidden" name="pizza_id" value="<?= $pizza_personalizada_id ?>">
            <input type="hidden" name="pizza_name" value="<?=$nome?>">
            <input type="hidden" name="pizza_price" value="<?=$valorTotal?>">
            <input type="hidden" name="pizza_type" value="Personalizada">
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="add_to_cart" value="1">
            </form>

            <script type="text/javascript">
                document.getElementById("redirectForm").submit();
            </script>

<?php
            exit();
        } catch (PDOException $e) {
            $PDO->rollBack();
            echo 'Erro no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        echo 'Erro: Tamanhos dos arrays não correspondem.';
        exit();
    }
}
?>
