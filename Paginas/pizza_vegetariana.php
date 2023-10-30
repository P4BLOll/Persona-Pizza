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
           <img src="img/Pizza vegetais, de cima.png" alt="">
        </div>
        <div class="details">
            <div class="content">
                <h2>Pizza Vegetariana<br>
                    <span>(Especial)</span>
                </h2>
                <p>
                A pizza vegetariana é uma pizza sem carne, composta por massa, 
                molho de tomate e uma variedade de vegetais frescos. 
                É uma opção saudável e saborosa para quem prefere refeições à base de plantas.
                </p>
                <div class="preco">
                    <h3>R$ 18,50</h3>
                </div>
            </div>
            <div class="botao">
                <form action="adicionar_ao_carrinho.php" method="post">
                    <input type="hidden" name="pizza_id" value="4"> <!-- Coloque aqui o ID correspondente a esta pizza -->
                    <div class="animacao">
                      <button type="submit" name="adicionar_carrinho">Adicionar ao carrinho</button>
                    </div>
                </form>
                <form action="Personalizacao_Pizza/index.php">
                    <div class="animacao">
                        <button>Personalizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>