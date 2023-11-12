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
             <img src="img/Pizza de pepperoni, de cima.png" alt="">
            </div>
           <div class="details">

            <div class="content">
                <h2>Pizza de Peperoni<br>
                    <span>(Especial)</span>
                </h2>
                <p>
                A pizza de cogumelo é uma pizza que tem cogumelos como ingrediente principal. 
                Ela geralmente inclui massa de pizza, molho de tomate, cogumelos fatiados, queijo e temperos. 
                É uma opção saborosa para os amantes de cogumelos e pizza.
                </p>
                <div class="preco">
                    <h3>R$ 25,00</h3>
                </div>
             </div>

            
            <div class="botao">
            <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="pizza_id" value="1"> <!-- Coloque aqui o ID correspondente a esta pizza -->
                    <input type="hidden" name="pizza_type" value="Comum">
                    <div class="animacao">
                        <button type="submit" name="add_to_cart">Adicionar ao carrinho</button>
                    </div>
                </form>
                <form action="personalizacao.php" method="post">
                    <div class="animacao">
                        <input type="hidden" name="pizza_perso" value="1">
                        <button type="submit" name="personalizacao">Personalizar</button>
                    </div>
                </form>
            </div>
        </div>  
    </body>
</html>