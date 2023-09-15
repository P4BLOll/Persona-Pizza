<?php
// Inicia a sessão para manter o login
session_start();

// Verifica se o usuário não está logado e sai do script se não estiver
if (!isset($_SESSION['user_id'])) {
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
    <link rel="stylesheet" href="css/style.css">
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
    <main>
  <div class="capa">
    <h1>Perfil do Usuário</h1>
    <?php if (!empty($user['foto_perfil'])) : ?>
        <div class="foto_perfil">
            <img class="foto" src="<?php echo $user['foto_perfil']; ?>" width="100px" alt="Foto de Perfil">
            <div class="trocar_foto_btn">Trocar Foto de Perfil</div>
        </div>
    <?php else: ?>
        <div class="foto_perfil">
            <img class="foto" src="img/default_profile.png"  width="100px" alt="Foto de Perfil Padrão">
            <div class="trocar_foto_btn">Trocar Foto de Perfil</div>
        </div>
    <?php endif; ?>
  </div>

    <!-- Exibe informações do usuário -->
    <div class="dados">
      <p><strong>Nome:</strong> <?php echo $user['nome']; ?></p>
      <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    </div>
    
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
        const fotoPerfil = document.querySelector('.foto_perfil');
        const uploadForm = document.getElementById('upload_form');
        let isFormVisible = false;
        
        fotoPerfil.addEventListener('click', () => {
            if (isFormVisible) {
                uploadForm.style.display = 'none';
            } else {
                uploadForm.style.display = 'block';
            }
            isFormVisible = !isFormVisible;
        });
    </script>
    
    <!-- Links para sair, página de rede social e página de produto -->
    <div class="opcoes">
      <p><a href="logout.php">Sair</a></p>
      <p><a href="social_media.php">Rede-Social</a></p>
      <p><a href="produto.php">Pagina-Produto</a></p>
    </div>
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


  //Animação no scrolling
  AOS.init();
  //
</script>