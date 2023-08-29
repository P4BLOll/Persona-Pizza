<?php
// Inicia a sessão
session_start();

// Se o usuário não estiver logado, redireciona para a página de login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Requer o arquivo de conexão com o banco de dados
require 'conexao.php';

// Obtém o ID do usuário da sessão
$userID = $_SESSION['user_id'];

// Prepara uma consulta para obter o nome e se o usuário é administrador
$stmt = $PDO->prepare("SELECT nome, is_admin FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Verifica se o usuário é administrador
$isAdmin = $user['is_admin'];

// Verifica se a requisição é do tipo POST e se os parâmetros estão presentes
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_id']) && isset($_POST['edited_content'])) {
    $postID = $_POST['post_id'];
    $editedContent = $_POST['edited_content'];

    // Busca a postagem no banco de dados
    $stmtPost = $PDO->prepare("SELECT * FROM publicacoes WHERE id = ?");
    $stmtPost->execute([$postID]);
    $post = $stmtPost->fetch(PDO::FETCH_ASSOC);

    // Verifica se o usuário é o dono da postagem ou um administrador
    if ($isAdmin || $post['id_usuario'] === $userID) {
        // Atualiza o conteúdo da postagem no banco de dados
        $stmtUpdate = $PDO->prepare("UPDATE publicacoes SET conteudo = ? WHERE id = ?");
        $stmtUpdate->execute([$editedContent, $postID]);
        // Redireciona para manage_posts.php após a edição
        header("Location: manage_posts.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Postagem</title>
</head>
<body>
    <h1>Editar Postagem</h1>
    
    <?php
    // Se a requisição for GET e o ID da postagem estiver presente
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['post_id'])) {
        $postID = $_GET['post_id'];

        // Busca a postagem no banco de dados
        $stmtPost = $PDO->prepare("SELECT * FROM publicacoes WHERE id = ?");
        $stmtPost->execute([$postID]);
        $post = $stmtPost->fetch(PDO::FETCH_ASSOC);

        // Exibe o formulário para edição se o usuário for dono da postagem ou um administrador
        if ($isAdmin || $post['id_usuario'] === $userID) {
            echo "<form method='post'>";
            echo "<input type='hidden' name='post_id' value='{$post['id']}'>";
            echo "<textarea name='edited_content'>{$post['conteudo']}</textarea>";
            echo "<button type='submit'>Salvar Edições</button>";
            echo "</form>";
        } else {
            echo "<p>Você não tem permissão para editar esta postagem.</p>";
        }
    }
    ?>
</body>
</html>
