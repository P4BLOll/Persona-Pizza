<?php
session_start();

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

// Processo de aprovação ou rejeição de postagem
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_id'])) {
    $postID = $_POST['post_id'];
    $statusAprovacao = isset($_POST['aprovar']) ? 1 : 0; // Se "aprovar" foi enviado, define como aprovado (1), senão, define como rejeitado (0)

    $stmtAtualizarStatus = $PDO->prepare("UPDATE publicacoes SET aprovado = ? WHERE id = ?");
    $stmtAtualizarStatus->execute([$statusAprovacao, $postID]);
}

// Listar postagens pendentes de aprovação
$stmtPostsPendentes = $PDO->prepare("SELECT * FROM publicacoes WHERE aprovado = 0 ORDER BY data_publicacao DESC");
$stmtPostsPendentes->execute();
$postsPendentes = $stmtPostsPendentes->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gerenciar Posts</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adm.css">
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>

</head>

<body>
    <main>
        <div class="title">
            <div class="icon">
                <lord-icon src="https://cdn.lordicon.com/lecprnjb.json" trigger="in" delay="500" state="in-cog"
                    colors="primary:#ffffff" class="x" style="width:150px;height:150px">
                </lord-icon>
            </div>
            <h1>Bem-vindo Administrador(a)
                <?php echo $user['nome']; ?>!
            </h1>
        </div>
        <div class="post">
        <?php foreach ($postsPendentes as $postPendente): ?>
           
                <p>
                    <?= $postPendente['conteudo'] ?> - Publicado em
                    <?= $postPendente['data_publicacao'] ?>
                </p>
                
                <!-- Exibir a imagem, se disponível -->
                <?php if (!empty($postPendente['imagem'])): ?>
                    <img src="<?= $postPendente['imagem'] ?>" alt="Imagem da postagem" style="max-width: 300px;">
                <?php endif; ?>

                <!-- Adicionar botões para aprovar ou rejeitar a postagem -->
                <form method="post" style="display: inline-block;">
                    <input type="hidden" name="post_id" value="<?= $postPendente['id'] ?>">
                    <input type="submit" name="aprovar" value="Aprovar">
                </form>
            </div>
        <?php endforeach; ?>
        <div class="voltar">
            <a href="admin_dashboard.php">
            <lord-icon
    src="https://cdn.lordicon.com/vduvxizq.json"
    trigger="hover"
    colors="primary:#ffffff"
    style="width:30px;height:30px">
</lord-icon>
            </a>
        </div>
    </main>
</body>

</html>