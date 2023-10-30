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
           <img src="img/pizza-negresco.png" alt="">
        </div>
        <div class="details">
            <div class="content">
                <h2>Pizza Negresco<br>
                    <span>(Especial)</span>
                </h2>
                <p>
                A pizza Negresco é uma sobremesa que faz a alegria dos amantes de chocolate.
                 Com uma base de pizza crocante e cobertura de Negresco esfarelado, 
                é uma explosão de sabor e textura. O contraste entre a massa crocante e o delicioso chocolate Negresco 
                torna essa pizza uma tentação irresistível para os apaixonados por doces e chocolate. Um verdadeiro deleite!
                </p>
                <div class="preco">
                    <h3>R$ 32,00</h3>
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