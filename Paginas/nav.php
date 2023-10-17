
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <title>navBar</title>
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
            <a href="social_media.php">Social</a>
            <a href="carrinho.php">Carrinho</a>
          </li>
          <div>
          <?php if (!$isLoggedIn) { ?>
    <a href="index.php" class="nav-link">
        <i class="bx bx-log-in icon"></i>
        <span class="link">Entrar</span>
    </a>
<?php } ?>
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
              <a href="carrinho.php" class="nav-link">
                <i class="bx bx-cart icon"></i>
                <span class="link">Carrinho</span>
              </a>
            </li>
            <li class="list">
              <a href="social_media.php" class="nav-link">
                <i class="bx bx-message-square-dots icon"></i>
                <span class="link">Social</span>
              </a>
            </li>
            <div class="bottom-cotent">
            <?php if (!$isLoggedIn) { ?>
    <a href="index.php" class="nav-link">
        <i class="bx bx-log-in icon"></i>
        <span class="link">Entrar</span>
    </a>
    
<?php } ?>

      </div>
          </div>
        </div>
      </div>
    </nav>
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


  // //Animação no scrolling
  // AOS.init();
  // //
</script>

