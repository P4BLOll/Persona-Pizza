<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require 'conexao.php'; // Substitua pelo seu arquivo de configuração de banco de dados

$userID = $_SESSION['user_id'];
$stmt = $PDO->prepare("SELECT nome, is_admin FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$isAdmin = $user['is_admin'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_id'])) {
    $postID = $_POST['post_id'];

    // Fetch the post from the database
    $stmtPost = $PDO->prepare("SELECT * FROM publicacoes WHERE id = ?");
    $stmtPost->execute([$postID]);
    $post = $stmtPost->fetch(PDO::FETCH_ASSOC);

    // Check if the user is the owner of the post or an admin
    if ($isAdmin || $post['id_usuario'] === $userID) {
        // Delete the post from the database
        $stmtDelete = $PDO->prepare("DELETE FROM publicacoes WHERE id = ?");
        $stmtDelete->execute([$postID]);
        // Redirect to dashboard after deletion
        header("Location: dashboard.php");
        exit();
    }
}

// Redirect if the user is not allowed to delete
header("Location: dashboard.php");
exit();
?>
