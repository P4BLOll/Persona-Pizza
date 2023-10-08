<?php
// Inicia a sessão para persistência de login
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION['user_id'])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}
// Verifica se o usuário não está logado, redirecionando para a página de login
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Requer o arquivo de conexão com o banco de dados (substitua pelo seu arquivo)
require 'conexao.php';

// Obtém o ID do usuário da sessão
$userID = $_SESSION['user_id'];

// Prepara e executa uma consulta para obter o nome do usuário
$stmt = $PDO->prepare("SELECT nome FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" />
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <link rel="stylesheet" href="css/rede_social.css">
        <title>PersonaPizza</title>
    </head>

<body>
    <!-- navbaar -->
    <?php include("nav.php") ?>

    <main>
        <section class="overlay"></section>
        <!-- fundo escuro ^ -->
        <sectiom class="media">
            <h1>Rede Social</h1>
            <div class="information">
                <lord-icon src="https://cdn.lordicon.com/ncxoarcp.json" trigger="loop" delay="1000" colors="primary:#ffffff" state="hover" style="width: 30px; height: 30px; position: relative" class="icon">
                </lord-icon>
                <p>
                    Este é um local a onde você irá interagir com outros usúarios.
                </p>
            </div>

            <section class="text">


                <!-- Formulário para postar atualizações -->
                <form class="postar" action="post.php" method="post" enctype="multipart/form-data">
                    <p>Olá, <?php echo $user['nome']; ?>! Aqui você pode compartilhar suas atualizações.</p>
                    <textarea name="post_content" placeholder="Comente sobre sua pizza..."></textarea>
                    <label for="image" class="label-arquivo">Escolha um arquivo</label>
                    <input type="file" class="arquivo" name="image" id="image">
                    <button type="submit">Publicar</button>
                </form>
            </section>


            <div class="divisao">
                <p>Últimas Atualizações</p>
            </div>
            <div class="social">
                <?php
                $stmtPosts = $PDO->prepare("SELECT * FROM publicacoes WHERE aprovado = 1 ORDER BY data_publicacao DESC");
                $stmtPosts->execute();

                while ($post = $stmtPosts->fetch(PDO::FETCH_ASSOC)) {
                ?>

                    <div class="publicacao">
                        <?php if (!empty($post['imagem'])) { ?>
                            <section class="img_post">
                                <img src="<?= $post['imagem'] ?>" alt="Imagem da postagem" style="width: 100%;">
                            </section>
                        <?php } ?>

                        <?php
                        $stmtAutor = $PDO->prepare("SELECT nome FROM usuarios WHERE id = ?");
                        $stmtAutor->execute([$post['id_usuario']]);
                        $autor = $stmtAutor->fetch(PDO::FETCH_ASSOC);

                        $stmtLiked = $PDO->prepare("SELECT id FROM curtidas WHERE id_usuario = ? AND id_publicacao = ?");
                        $stmtLiked->execute([$userID, $post['id']]);
                        $liked = $stmtLiked->fetch(PDO::FETCH_ASSOC);
                        ?>

                        <span class='data'><?= $post['data_publicacao'] ?></span>

                        <section class="interacoes">
                            <p class="conteudo"><?= $post["conteudo"] ?></p>
                            <p class='quemPostou'><?= $autor['nome'] ?>, postou esta publicação.</p>

                            <div style="display:flex;">

                                <?php if ($liked) { ?>
                                    <span class='material-symbols-rounded'>favorite</span>
                                <?php } else { ?>
                                    <a class="coracao" href="like.php?post_id=<?= $post['id'] ?>">
                                        <lord-icon src="https://cdn.lordicon.com/pnhskdva.json" trigger="click" colors="primary:#C33633" state="morph" style="width:40px;height:40px; margin:.5rem;">
                                        </lord-icon>
                                    </a>
                                <?php } ?>

                                <lord-icon src="https://cdn.lordicon.com/hpivxauj.json" trigger="hover" colors="primary:#C33633" style="width:40px;height:40px; margin:.5rem;">
                                </lord-icon>

                            </div>
                        </section>

                    </div>

                <?php
                }
                ?>
            </div>
    </main>
</body>

</html>