<?php
// Inicia a sessão para manter o login
session_start();

// Verifica se o usuário não está logado e sai do script se não estiver
if (!isset($_SESSION['user_id'])) {
  header("Location: index.php?");
    exit();
}

// Requer o arquivo de conexão com o banco de dados
require 'conexao.php';

// Obtém o ID do usuário da sessão
$userID = $_SESSION['user_id'];

// Prepara e executa uma consulta para obter informações do usuário
$stmt = $PDO->prepare("SELECT nome, email, foto_perfil FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Processa o envio de uma nova foto de perfil
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['foto_perfil']['name'])) {
    $photoTmpPath = $_FILES['foto_perfil']['tmp_name'];
    $photoName = $_FILES['foto_perfil']['name'];
    
    // Define o caminho para a nova foto de perfil
    $newPhotoPath = 'img/' . $photoName;
    
    // Move o arquivo da foto temporária para o novo caminho
    move_uploaded_file($photoTmpPath, $newPhotoPath);
    
    // Atualiza o caminho da foto de perfil no banco de dados
    $stmt = $PDO->prepare("UPDATE usuarios SET foto_perfil = ? WHERE id = ?");
    $stmt->execute([$newPhotoPath, $userID]);
    
    // Atualiza a variável $user com o novo caminho da foto
    $user['foto_perfil'] = $newPhotoPath;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/fonthttps://unpkg.com/aos@next/dist/aos.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/perfil.css">
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
              <a href="social_media.php" class="nav-link">
                <i class="bx bx-message-square-dots icon"></i>
                <span class="link">Social</span>
              </a>
            </li>
          </ul>

          <div class="bottom-cotent">
            <li class="list sair">
              <a href="index.php" class="nav-link sair-a">
                <i class="bx bx-log-in icon"></i>
                <span class="link">Entrar</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <div class="elipse">
    <img src="img/Ellipse 50.svg" alt="">
    </div>
    <h1 class="name_u">Bem Vindo, <?php echo $user['nome']; ?></h1>
    <?php if (!empty($user['foto_perfil'])) : ?>
    <div class="foto_perfil">
        <div class="moldura">
            <img class="foto" src="<?php echo $user['foto_perfil']; ?>" alt="Foto de Perfil">
        </div>
    </div>
<?php else : ?>
    <div class="foto_perfil">
        <div class="moldura">
            <img class="foto" src="img/default_profile.png" alt="Foto de Perfil Padrão">
        </div>
    </div>
<?php endif; ?>
<button id="trocar_foto_btn">Trocar Foto de Perfil</button>
    <!-- Exibe informações do usuário -->
    <p><strong>Nome:</strong> <?php echo $user['nome']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    
    
    <!-- Formulário para envio de nova foto de perfil -->
    <div id="upload_form">
        <form action="perfil.php" method="POST" enctype="multipart/form-data">
            <label for="foto_perfil">Escolha uma foto de perfil:</label>
            <input type="file" name="foto_perfil" id="foto_perfil">
            <input type="submit" value="Enviar Foto">
        </form>
    </div>
    
    <!-- Script para alternar a exibição do formulário de upload de foto -->
    <script>
        const trocarFotoBtn = document.getElementById('trocar_foto_btn');
        const uploadForm = document.getElementById('upload_form');
        let isFormVisible = false;
        
        trocarFotoBtn.addEventListener('click', () => {
            if (isFormVisible) {
                uploadForm.style.display = 'none';
            } else {
                uploadForm.style.display = 'block';
            }
            isFormVisible = !isFormVisible;
        });
    </script>
    
    <!-- Links para sair, página de rede social e página de produto -->
    <p><a href="logout.php">Sair</a></p>
    <p><a href="social_media.php">Rede-Social</a></p>
    <p><a href="produto.php">Pagina-Produto</a></p>
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


  //Animação no scrolling
  AOS.init();
  //
</script>


