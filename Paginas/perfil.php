<?php
// Inicia a sessão para manter o login
session_start();


// Verifica se o usuário está logado
if (isset($_SESSION['user_id'])) {
  $isLoggedIn = true;
} else {
  $isLoggedIn = false;
}
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
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/perfil.css">
</head>

<body>
     <!-- navbaar -->
   <?php include("nav.php") ?>

   <div class="elipse">
    <!-- <img src="img/Ellipse 50.svg" alt=""> -->
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
    <!-- Exibe informações do usuário -->
    <div class="container1">
    <p class="Tdados"><strong>Dados Pessoais</strong></p>
    </div>
    <div class="container2">
    <p class="Tdados"><strong>Nome:</strong> <?php echo $user['nome']; ?></p>
    <p class="Tdados"><strong>Email:</strong> <?php echo $user['email']; ?></p>
    </div>
    

    <div class="container3">
    <button id="trocar_foto_btn">Trocar Foto de Perfil</button>
    <!-- Formulário para envio de nova foto de perfil -->
    <div id="upload_form">
        <form action="perfil.php" method="POST" enctype="multipart/form-data">
            <label for="foto_perfil">Escolha uma foto de perfil:</label>
            <input type="file" name="foto_perfil" id="foto_perfil">
            <input type="submit" id="enviar" value="Enviar Foto">
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
    <button class="botao"><p ><a href="logout.php">Sair</a></p></button>
    </div>
</body>
</html>


