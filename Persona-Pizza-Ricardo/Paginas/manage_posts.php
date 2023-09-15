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
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gerenciar Posts</title>
</head>
<body>
    <h1>Gerenciar Posts, <?php echo $user['nome']; ?>!</h1>

    <!-- Exibe postagens existentes com opções de edição e exclusão -->
    <?php
    // Prepara uma consulta para obter todas as postagens, ordenadas pela data de publicação
    $stmtPosts = $PDO->prepare("SELECT * FROM publicacoes ORDER BY data_publicacao DESC");
    $stmtPosts->execute();
    $posts = $stmtPosts->fetchAll(PDO::FETCH_ASSOC);

    foreach ($posts as $post) {
        echo "<div>";
        echo "<p>{$post['conteudo']} - Publicado em {$post['data_publicacao']}</p>";

        // Exibe a imagem da postagem, se estiver disponível
        if (!empty($post['imagem'])) {
            echo "<img src='{$post['imagem']}' alt='Imagem da postagem' style='max-width: 300px;'>";
        }

        // Verifica se o usuário é administrador ou dono da postagem para exibir opções de edição e exclusão
        if ($isAdmin || $post['id_usuario'] === $userID) {
            echo "<p><a href='edit_post.php?post_id={$post['id']}'>Editar</a>
                  <a href='delete_post.php?post_id={$post['id']}'>Deletar</a> | 
                  <form method='post' style='display: inline-block;'>";

            // Aqui, você poderia incluir um botão de "Salvar" para salvar as edições na postagem, se necessário
        }

        echo "</div>";
    }
    ?>

</body>
</html>
