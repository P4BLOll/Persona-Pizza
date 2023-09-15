<?php
// Inicia a sessão para persistência de login
session_start();

// Verifica se o usuário não está logado, redirecionando para a página de login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Requer o arquivo de conexão com o banco de dados (substitua pelo seu arquivo)
require 'conexao.php';

// Obtém o ID do usuário da sessão
$userID = $_SESSION['user_id'];

// Prepara e executa uma consulta para obter o nome do usuário
$stmt = $PDO->prepare("SELECT nome FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html  lang="en">

<head>
<meta charset="UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="css/rede_social.css">
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
            <a href="index.html">Home</a>
            <a href="">Conta</a>
            <a href="cardapio.html">Cardápio</a>
            <a href="">Social</a>
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
                <span class="link">Social</span>
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
    <main>
    <section class="overlay"></section>
    <!-- fundo escuro ^ -->
    <sectiom class="media">
    <h1>Rede Social</h1>
    <div class="information">
            <lord-icon
              src="https://cdn.lordicon.com/ncxoarcp.json"
              trigger="loop"
              delay="1000"
              colors="primary:#ffffff"
              state="hover"
              style="width: 30px; height: 30px; position: relative"
              class="icon"
            >
            </lord-icon>
            <p>
                Este é um local a onde você irá interagir com outros usúarios.
            </p>
    </div>
   
    <section class="text">
    

    <!-- Formulário para postar atualizações -->
    <form  class="postar" action="post.php" method="post" enctype="multipart/form-data">
    <p>Olá, <?php echo $user['nome']; ?>! Aqui você pode compartilhar suas atualizações.</p>
        <textarea name="post_content" placeholder="Comente sobre sua pizza..."></textarea>
        <label for="image" class="label-arquivo">Escolha um arquivo</label>
  <input type="file" class="arquivo" name="image" id="image">
        <button type="submit">Publicar</button>
    </form>
    </section>
    
    
    <div class="divisao">
    <p>Últimas Atualizações</p>
    </div>
    <div class="social">
    <?php
   
// Prepara e executa uma consulta para obter as postagens mais recentes
$stmtPosts = $PDO->prepare("SELECT * FROM publicacoes ORDER BY data_publicacao DESC");
$stmtPosts->execute();

// Itera sobre as postagens recuperadas
while ($post = $stmtPosts->fetch(PDO::FETCH_ASSOC)) {
    
    echo "<div class='publicacao'>";
      // Exibe a imagem da postagem, se disponível
       
      if (!empty($post['imagem'])) {
        echo '<section class="img_post">
            <img src="' . $post['imagem'] . '" alt="Imagem da postagem"style="width: 100%;">
        </section>';
    }
             
            

   

    // Verifica se o usuário já curtiu a postagem
    $stmtLiked = $PDO->prepare("SELECT id FROM curtidas WHERE id_usuario = ? AND id_publicacao = ?");
    $stmtLiked->execute([$userID, $post['id']]);
    $liked = $stmtLiked->fetch(PDO::FETCH_ASSOC);
    echo "<span class='data'>{$post['data_publicacao']}</span>";

    // Exibe o status de curtida ou link para curtir a postagem
    echo '<section class="interacoes">';
    echo '<p class="conteudo">' . $post["conteudo"] . '</p>';

    echo "<p class='quemPostou'>{$user['nome']}, postou esta publicação.</p>";

    echo '<div style="display:flex;">';

if ($liked) {
    echo "<span class='material-symbols-rounded'>favorite</span>";
} else {
    echo '<a class="coracao" href="like.php?post_id=' . $post['id'] . '">
        <lord-icon
            src="https://cdn.lordicon.com/pnhskdva.json"
            trigger="click"
            colors="primary:#C33633"
            state="morph"
            style="width:40px;height:40px;  margin:.5rem;"
        ></lord-icon>
    </a>';
}

echo '<lord-icon
    src="https://cdn.lordicon.com/hpivxauj.json"
    trigger="hover"
    colors="primary:#C33633"
    style="width:40px;height:40px; margin:.5rem;">
</lord-icon>';

echo '</div>';


    echo '</section>';
    echo "</div>";
    
}
?>
</section>
</div>
</main>
</body>
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


  //Animação no scrolling
  AOS.init();
  //
</script>
</html>
