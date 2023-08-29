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
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="css/perfil.css"> <!-- Importa o arquivo de estilo CSS -->
</head>

<body>
    <h1>Perfil do Usuário</h1>
    <?php if (!empty($user['foto_perfil'])) : ?>
        <div class="foto_perfil">
            <img class="foto" src="<?php echo $user['foto_perfil']; ?>" alt="Foto de Perfil">
            <div class="trocar_foto_btn">Trocar Foto de Perfil</div>
        </div>
    <?php else: ?>
        <div class="foto_perfil">
            <img class="foto" src="img/default_profile.png" alt="Foto de Perfil Padrão">
            <div class="trocar_foto_btn">Trocar Foto de Perfil</div>
        </div>
    <?php endif; ?>
    
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
    <p><a href="logout.php">Sair</a></p>
    <p><a href="social_media.php">Rede-Social</a></p>
    <p><a href="produto.php">Pagina-Produto</a></p>
</body>

</html>

