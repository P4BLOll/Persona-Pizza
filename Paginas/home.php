<?php
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION['user_id'])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}
?>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <title>PersonaPizza</title>
  </head>

  <body>
    <!-- SideBar -->
    <nav>
      <div class="logo">
         <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">PersonaPizza</span>
        <ul>
          <li>
            <a href="home.php">Home</a>
            <a href="perfil.php">Conta</a>
            <a href="cardapio.php">Cardápio</a>
            <a href="">Blog</a>
            <a href="">Carrinho</a>
          </li>
          <div>
            <a href="index.php" class="nav-link">
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
              <a href="home.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Home</span>
              </a>
            </li>
            <li class="list">
              <a href="perfil.php" class="nav-link">
                <i class="bx bx-user icon"></i>
                <span class="link">Conta</span>
              </a>
            </li>
            <li class="list">
              <a href="cardapio.php" class="nav-link">
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
                <span class="link">social</span>
              </a>
            </li>
            <div class="bottom-cotent">
          <a href="index.php" class="nav-link">
            <i class="bx bx-log-in icon"></i>
            <span class="link">Entrar</span>
          </a>
      </div>
          </div>
        </div>
      </div>
    </nav>
    <section class="overlay"></section>
    <!-- fundo escuro -->
    <main>
      <div class="capa">
        <div class="arrow">
          <p>Saber Mais</p>
          <lord-icon
    src="https://cdn.lordicon.com/rxufjlal.json"
    trigger="loop"
    delay="1500"
    colors="primary:#D9D9D9"
    state="hover-1"
    style="width:20px;height:20px">
</lord-icon>
        </div>
        <span
          ><video
            src="img/pizza_-_80139 (1080p).mp4"
            width="100%"
            autoplay
            muted
            loop
           
          ></video
        ></span>
        <span class="divisão"></span>
        <div class="text">
          <div class="img" style="text-align: center; overflow: hidden">
            <img
              src="img/logo.svg"
              alt=""
              
            />
          </div>
          <div class="element">
            <h1 >PersonaPizza</h1>
            <p >
              Personalize suas Pizzas
            </p>
            <a  href="login"
              >Começar</a
            >
          </div>
        </div>
      </div>
    </div>
    
      <section class="sobre">
        <div>
          <img src="img/pizza-sharing-not-css 1.svg" alt="" width="100%" >
        </div>
        <div>
          <h1 class="titles">Sobre nós</h1>
          <p >
            A Pizzaria foi estrategicamente concebida para proporcionar aos seus clientes uma experiência única no mundo das pizzas. Nosso principal objetivo é dar a você, cliente, o poder de criar e personalizar suas próprias pizzas, oferecendo uma variedade incrível de ingredientes frescos e deliciosos. Essa abordagem não apenas garante a satisfação de seu paladar, mas também cria um ambiente de competição saudável entre os usuários, proporcionando a oportunidade de ganhar valiosos bônus e recompensas. Afinal, na Pizzaria, não apenas servimos pizzas; cultivamos uma comunidade apaixonada pela culinária, onde cada criação é uma obra-prima e cada mordida é uma experiência inigualável.          </p>
        </div>
      </section>
      
      <section class="funcionalidades">
        <span><img src="img/entregador.svg" alt=""></span>
        <span><img src="img/Buildings.svg" alt=""></span>
       <h1 class="titles">Funcionamentos</h1>
        <div class="icons">
          <div>
            <lord-icon
              src="https://cdn.lordicon.com/hqrgkqvs.json"
              trigger="loop"
              delay="1500"
              colors="outline:#000000,primary:#e83a30,secondary:#ebe6ef"
              style="width: 150px; height: 150px"
            >
            </lord-icon>
            <p>Pedido Para Suas Necessidades</p>
          </div>
          <div>
            <lord-icon
              src="https://cdn.lordicon.com/swvqwdea.json"
              trigger="loop"
              delay="1500"
              colors="outline:#181730,primary:#e83a30,secondary:#ffc738"
              style="width: 150px; height: 150px"
            >
            </lord-icon>
            <p>Melhores Formas de Pagamento</p>
          </div>
          <div>
            <lord-icon
              src="https://cdn.lordicon.com/kejpvrvr.json"
              trigger="loop"
              delay="1500"
              colors="primary:#121331,secondary:#ffc738,tertiary:#e83a30,quaternary:#ffffff,quinary:#000000"
              style="width: 150px; height: 150px"
            >
            </lord-icon>
            <p>Participe de um Ranking de Pizzas</p>
          </div>
          <div>
            <lord-icon
              src="https://cdn.lordicon.com/fihkmkwt.json"
              trigger="loop"
              delay="1500"
              colors="primary:#000000,secondary:#e83a30"
              style="width: 150px; height: 150px"
            >
            
            </lord-icon>
            <p>Entregas Rápidas e Seguras</p>
          </div>
        </div>
      </section>
      
    </main> 
  </body>
</html>
<script>
  const navBar = document.querySelector("nav"),
menuBtns = document.querySelectorAll(".menu-icon"),
overlay = document.querySelector(".overlay");

menuBtns.forEach((menuBtn) => {
menuBtn.addEventListener("click", () => {
  navBar.classList.toggle("open");
});
});

overlay.addEventListener("click", () => {
navBar.classList.remove("open");
});


  // //Animação no scrolling
  // AOS.init();
  // //
</script>
