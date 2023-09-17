<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="css/produto.css">
</head>

<body>
    <div class="container">
        <div class="imgBx">
            <img src="#" alt="Pizza de Cogumelo">
        </div>
        <div class="details">
            <div class="content">
                <h2>Pizza de Cogumelo<br>
                    <span>(Tradicional)</span>
                </h2>
                <p>
                    Aenean consequat elit libero, sed tincidunt mauris sodales ac. Nulla pulvinar sed odio a vulputate.
                    Maecenas ac purus interdum, venenatis purus sed, sollicitudin massa.
                </p>
                <div class="preco">
                    <h3>R$ 30,00</h3>
                </div>
            </div>
            <div class="botao">
                <form action="adicionar_ao_carrinho.php" method="post">
                    <input type="hidden" name="pizza_id" value="5"> <!-- Coloque aqui o ID correspondente a esta pizza -->
                    <button type="submit" name="adicionar_carrinho">Adicionar ao carrinho</button>
                </form>
                <button>Personalizar</button>
            </div>
        </div>
    </div>
</body>

</html>
