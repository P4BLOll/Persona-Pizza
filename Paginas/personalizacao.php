<?php
session_start();
require 'conexao.php';

// Verifica se o usuário está logado
if (isset($_SESSION['user_id'])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}

if (isset($_POST['personalizacao'])) {
    $pizza_perso = $_POST['pizza_perso'];
    // Execute uma consulta SQL para obter os detalhes da pizza com base no $pizza_id
    $stmt = $PDO->prepare("SELECT * FROM pizzas_comum WHERE id = :id");
    $stmt->bindParam(':id', $pizza_perso , PDO::PARAM_INT);
    $stmt->execute();

    $pizza = $stmt->fetch(PDO::FETCH_ASSOC);

    // Execute uma consulta SQL para obter todos os ingredientes da pizza
    $ingredientes_stmt = $PDO->prepare("SELECT nome, quantidade FROM ingredientes WHERE pizza_id = :pizza_id");
    $ingredientes_stmt->bindParam(':pizza_id', $pizza_perso, PDO::PARAM_INT);
    $ingredientes_stmt->execute();
} else {
    echo "Erro: Nenhum ID de pizza foi fornecido.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/personalizacao.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <title>Personalize sua Pizza</title>
</head>
<body>
    <?php include("nav.php"); ?>
    <main>
        <div class="personalizar">
            <section>
                <div class="information">
                    <lord-icon src="https://cdn.lordicon.com/ncxoarcp.json" trigger="loop" delay="1000" colors="primary:#ffffff" state="hover" style="width: 30px; height: 30px; position: relative" class="icon"></lord-icon>
                    <p>
                        Após selecionar a pizza, poderá personalizá-la de acordo com seus
                        gostos e preferências.
                    </p>
                </div>
            </section>
            <div class="options">
                <?php
                if (isset($pizza['nome'])) {?>
                    <h1 class="nomePizza"><?= $pizza['nome'] ?></h1>
                <?php } else {
                    echo "Erro: Não foi possível encontrar os detalhes da pizza.";
                }
                ?>
                <form action="confirmacao.php" method="post">
                    <table>
                    <?php
                    while ($ingrediente = $ingredientes_stmt->fetch(PDO::FETCH_ASSOC)) {
                        $nomeIngrediente = $ingrediente['nome'];
                        $inputName = "quantidade_$nomeIngrediente";
                        ?>
                        <tr>
                        <td>
                        <p for="<?= $nomeIngrediente ?>"><?= $nomeIngrediente ?>:</p>
                        </td>
                        <td class="botoes">
                        <button class="quantidade" type="button" onclick='changeQuantity("<?= $nomeIngrediente ?>", "subtract")'>-</button>
                        <p class="quantidade" id='<?= $nomeIngrediente ?>-quantidade'>1</p>
                        <button class="quantidade" type="button" onclick='changeQuantity("<?= $nomeIngrediente ?>", "add")'>+</button>
                        <input type='hidden' name='<?= $inputName ?>' id='input-<?= $nomeIngrediente ?>' value='1'><br>
                        </td>
                        </tr>
                        <?php
                    }
                    ?>

                            <!-- Adicione os radio buttons aqui -->
                        <tr class="pedacos" >
                            <td class="botoess" colspan="2">
                            <h2>Escolha a quantidade de pedaços:</h2>
                            <div class="radio-container">
                                <div class="column">
                                    <div class="radio">
                                        <input id="radio-1" name="pizza-quantidade" type="radio" value="1"  checked>
                                        <label for="radio-1" class="radio-label"><p>1</p></label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-2" name="pizza-quantidade" type="radio" value="2">
                                        <label for="radio-2" class="radio-label"><p>2</p></label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-3" name="pizza-quantidade" type="radio" value="3">
                                        <label for="radio-3" class="radio-label"><p>3</p></label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-4" name="pizza-quantidade" type="radio" value="4">
                                        <label for="radio-4" class="radio-label"><p>4</p></label>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="radio">
                                        <input id="radio-5" name="pizza-quantidade" type="radio" value="5">
                                        <label for="radio-5" class="radio-label"><p>5</p></label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-6" name="pizza-quantidade" type="radio" value="6">
                                        <label for="radio-6" class="radio-label"><p>6</p></label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-7" name="pizza-quantidade" type="radio" value="7">
                                        <label for="radio-7" class="radio-label"><p>7</p></label>
                                    </div>
                                    <div class="radio">
                                        <input id="radio-8" name="pizza-quantidade" type="radio" value="8">
                                        <label for="radio-8" class="radio-label"><p>8</p></label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        </tr>
                    </table>
                    <input type="hidden" name="pizza_perso" value="<?= $pizza_perso ?>">
                    <input type="hidden" name="pedacos" value="<?= $pedacos ?>">
                    <button class="adicionar" type="submit" name="confirmacao">Adicionar ao carrinho</button>
                </form>
                <form action="personalizacao.php" method="post">
                    <div class="animacao">
                        <input type="hidden" name="pizza_perso" value="<?= $pizza_perso ?>">
                        <button class="adicionar" type="submit" name="personalizacao">Personalizar</button>
                    </div>
                </form>
                <script>
                    function changeQuantity(ingredient, action) {
                        var hiddenInput = document.getElementById('input-' + ingredient);
                        var currentQuantity = parseInt(hiddenInput.value);

                        if (action === 'add' && currentQuantity < 5) {
                            currentQuantity++;
                        } else if (action === 'subtract' && currentQuantity > 0) {
                            currentQuantity--;
                        }

                        hiddenInput.value = currentQuantity;
                        var quantityElement = document.getElementById(ingredient + '-quantidade');
                        quantityElement.innerHTML = currentQuantity;
                    }
                </script>
            </div>
        </div>
    </main>
</body>
</html>
