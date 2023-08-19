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
$stmt = $PDO->prepare("SELECT nome, email, endereco FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perfil do Usuário</title>
</head>
<body>
    <h1>Perfil do Usuário</h1>
    <p><strong>Nome:</strong> <?php echo $user['nome']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <p><strong>Endereço:</strong> <?php echo $user['endereco']; ?></p>
    <p><a href="logout.php">Sair</a></p>
    <p><a href="social_media.php">Rede-Social</a></p>
    <p><a href="produto.php">Pagina-Produto</a></p>
</body>
</html>
