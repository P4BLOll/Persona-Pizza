<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require 'conexao.php';

$userID = $_SESSION['user_id'];
$stmt = $PDO->prepare("SELECT nome, is_admin FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$isAdmin = $user['is_admin'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo ao Dashboard, <?php echo $user['nome']; ?>!</h1>

    <!-- Display options for managing posts or other actions -->
    <?php if ($isAdmin): ?>
        <ul>
            <li><a href="manage_posts.php">Gerenciar Posts</a></li>
            <li><a href="other_actions.php">Outras Ações</a></li>
        </ul>
    <?php else: ?>
        <p>Você não tem permissão para acessar esta página.</p>
    <?php endif; ?>

</body>
</html>

