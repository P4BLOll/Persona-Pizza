<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require 'conexao.php'; // Substitua pelo seu arquivo de configuração de banco de dados

$userID = $_SESSION['user_id'];
$postID = $_GET['post_id'];

// Verificar se o usuário já curtiu a postagem
$stmtLiked = $PDO->prepare("SELECT id FROM curtidas WHERE id_usuario = ? AND id_publicacao = ?");
$stmtLiked->execute([$userID, $postID]);
$liked = $stmtLiked->fetch(PDO::FETCH_ASSOC);

if (!$liked) {
    // Inserir a curtida no banco de dados
    $stmtLike = $PDO->prepare("INSERT INTO curtidas (id_usuario, id_publicacao) VALUES (?, ?)");
    $stmtLike->execute([$userID, $postID]);
}

header("Location: social_media.php");
exit();