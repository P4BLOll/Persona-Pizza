<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    exit();
}

// Conecte-se ao banco de dados
require 'conexao.php'; 

// Recupere os dados do usuário
$userID = $_SESSION['user_id'];
$stmt = $PDO->prepare("SELECT nome, email, foto_perfil FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['foto_perfil']['name'])) {
    $photoTmpPath = $_FILES['foto_perfil']['tmp_name'];
    $photoName = $_FILES['foto_perfil']['name'];
    
    $newPhotoPath = 'img/' . $photoName;
    move_uploaded_file($photoTmpPath, $newPhotoPath);
    
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
    <link rel="stylesheet" href="css/perfil.css">
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
    <p><strong>Nome:</strong> <?php echo $user['nome']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <div id="upload_form">
        <form action="perfil.php" method="POST" enctype="multipart/form-data">
            <label for="foto_perfil">Escolha uma foto de perfil:</label>
            <input type="file" name="foto_perfil" id="foto_perfil">
            <input type="submit" value="Enviar Foto">
        </form>
    </div>
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
    <p><a href="logout.php">Sair</a></p>
    <p><a href="social_media.php">Rede-Social</a></p>
    <p><a href="produto.php">Pagina-Produto</a></p>
</body>


</html>

</html>