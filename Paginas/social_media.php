<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require 'conexao.php'; // Substitua pelo seu arquivo de configuração de banco de dados

$userID = $_SESSION['user_id'];
$stmt = $PDO->prepare("SELECT nome FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Rede Social</title>
</head>

<body>
    <h1>Bem-vindo à Rede Social!</h1>
    <p>Olá, <?php echo $user['nome']; ?>! Aqui você pode compartilhar suas atualizações.</p>
    <form action="post.php" method="post" enctype="multipart/form-data">
        <textarea name="post_content" placeholder="Compartilhe algo..."></textarea>
        <input type="file" name="image">
        <button type="submit">Publicar</button>
    </form>
    <h2>Últimas Atualizações</h2>
    <?php
$stmtPosts = $PDO->prepare("SELECT * FROM publicacoes ORDER BY data_publicacao DESC");
$stmtPosts->execute();

while ($post = $stmtPosts->fetch(PDO::FETCH_ASSOC)) {
    echo "<div>";
    echo "<p>{$post['conteudo']} - Publicado em {$post['data_publicacao']}</p>";

    if (!empty($post['imagem'])) {
        echo "<img src='{$post['imagem']}' alt='Imagem da postagem' style='max-width: 300px;'>";
    }

    // Verificar se o usuário já curtiu a postagem
    $stmtLiked = $PDO->prepare("SELECT id FROM curtidas WHERE id_usuario = ? AND id_publicacao = ?");
    $stmtLiked->execute([$userID, $post['id']]);
    $liked = $stmtLiked->fetch(PDO::FETCH_ASSOC);

    if ($liked) {
        echo "<p>Curtido!</p>";
    } else {
        echo "<p><a href='like.php?post_id={$post['id']}'>Curtir</a></p>";
    }

    echo "</div>";
}
?>

</body>

</html>