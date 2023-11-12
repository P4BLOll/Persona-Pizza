<?php    
session_start();
                
if (!isset($_SESSION['user_id'])) {
header("Location: index.php"); // Redireciona para a página de login se o usuário não estiver autenticado
exit();
}

// Verifica se o usuário está logado
if (isset($_SESSION['user_id'])) {
    $isLoggedIn = true;
  } else {
    $isLoggedIn = false;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="css/produto.css">
    <script src="js/nav-animacao.js"></script>
</head>

<body>

    <nav class="navbar" id="navbar">
        <?php include("nav.php") ?>
    </nav>

    <div class="container ajuste">
        <div class="imgBx" style="background-image: url('img/Fundo_Pizzaria.jpg');">
           <img src="img/pizza-banana.png" width="100%" height="93%" alt="">
        </div>
        <div class="details">
            <div class="content">
                <h2>Pizza Banana com Canela<br>
                    <span>(Especial)</span>
                </h2>
                <p>
                A pizza de banana com canela é uma sobremesa deliciosa que une o sabor doce e reconfortante
                da banana com o toque quente e aromático da cenela. Uma explosão de sabores que faz dessa pizza
                uma escolha irresistível para os amantes de sobremesas.
                </p>
                <div class="preco">
                    <h3>R$ 19,00</h3>
                </div>
            </div>
            <div class="botao">
            <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="pizza_id" value="12"> <!-- Coloque aqui o ID correspondente a esta pizza -->
                    <input type="hidden" name="pizza_type" value="Comum">
                    <div class="animacao">
                        <button type="submit" name="add_to_cart">Adicionar ao carrinho</button>
                    </div>
                </form>
                <form action="personalizacao.php" method="post">
                    <div class="animacao">
                        <input type="hidden" name="pizza_perso" value="12">
                        <button type="submit" name="personalizacao">Personalizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>