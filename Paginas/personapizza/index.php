<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"rel="stylesheet"/>
    <title>Sistema de Produtos</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
<div class="container">
    <div class="col">
        <div class="row">
      <!-- Navbar -->
        <nav>
      <div class="logo">
         <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">PersonaPizza</span>
        <ul>
          <li>
            <a href="index.html">Home</a>
            <a href="">Conta</a>
            <a href="cardapio.html">Cardápio</a>
            <a href="">Blog</a>
            <a href="">Carrinho</a>
          </li>
          <div>
            <a href="#" class="nav-link">
              <i class="bx bx-log-in icon"></i>
              <span class="link">Entrar</span>
            </a>
          </div>
        </ul>  
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-arrow-back menu-icon"></i>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="index.html" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Home</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-user icon"></i>
                <span class="link">Conta</span>
              </a>
            </li>
            <li class="list">
              <a href="cardapio.html" class="nav-link">
                <i class="bx bx-category icon"></i>
                <span class="link">Cardápio</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-cart icon"></i>
                <span class="link">Carrinho</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-message-square-dots icon"></i>
                <span class="link">Blog</span>
              </a>
            </li>
          </ul>

          <div class="bottom-cotent">
            <li class="list sair">
              <a href="#" class="nav-link sair-a">
                <i class="bx bx-log-in icon"></i>
                <span class="link">Entrar</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- fim do navbar-->
 <header>
    <!-- card para os produtos e também um form-->
    <div class="card">
        <div class="ajuste">
    <h1>Produtos Disponíveis</h1>
    <div class="li12">
    <ul>
        <li>Produto 1 - $10</li>
        <li>Produto 2 - $20</li>
        <li>Produto 3 - $30</li>
    </ul>
    </div>
        </div>
        <!-- Carrinho-->
    <div class="ajuste">
    <h2>Carrinho</h2>
    <form method="post" action="carrinho.php">
    <label for="produto1">Produto 1 </label>
    <input class="seletor" type="text" id="produto1" name="produto1" value="0" maxlength="3" pattern="\d*" oninput="limitarTamanhoInput(this, 3)">
    <br>
    <label for="produto2">Produto 2 </label>
    <input class="seletor" type="text" id="produto2" name="produto2" value="0" maxlength="3" pattern="\d*" oninput="limitarTamanhoInput(this, 3)">
    <br>
    <label for="produto3">Produto 3 </label>
    <input class="seletor" type="text" id="produto3" name="produto3" value="0" maxlength="3" pattern="\d*" oninput="limitarTamanhoInput(this, 3)">
    <br>

      <script>
      function limitarTamanhoInput(input, maxLength) {
          let inputValue = input.value;
          if (inputValue.length > maxLength) {
              input.value = inputValue.slice(0, maxLength);
          }
          // Remove caracteres não numéricos usando uma expressão regular
          input.value = input.value.replace(/\D/g, '');
      }
      </script>
        <!-- Fim Carrinho-->

<br>
<section class="botaopizza button-container">
    <a href="criarpizza/index.html" id="botao">Adicionar ao carrinho</a>
    <a href="criarpizza/index.html" id="botao">Comprar</a>
</section>
        
    </form>
    </div>
    <!-- fim do card e do form -->
    </header>

      <footer>

      </footer>

        </div>
    </div>
</div>

</body>
</html>