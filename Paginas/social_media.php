<?php
// Inicia a sessão para persistência de login
session_start();
require 'conexao.php';

if (isset($_SESSION['user_id'])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}


$stmt = $PDO->prepare("SELECT nome FROM usuarios WHERE id = ?");
$stmt->execute(['user_id']);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$user_id = $_SESSION['user_id'];
$userID = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
        <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" />
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
                <form class="postar" action="post.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                <p>
                    Escolha uma pizza criada: <br>
                    <strong>*somente pizzas aprovadas podem ser postadas*</strong>
                </p>
                    <select name="pizza_id" class="seletor-de-pizza">
                        <?php
                        $stmtPizzas = $PDO->prepare("SELECT id, nome FROM pizzas_criada WHERE usuario_id = ? AND status = 1");
                        $stmtPizzas->execute([$user_id]);

                        while ($pizza = $stmtPizzas->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='{$pizza['id']}'>{$pizza['nome']}</option>";
                        }
                        ?>
                    </select>
                    <textarea name="post_content" placeholder="Comente sobre sua pizza..."></textarea>
                    <label for="image" class="label-arquivo">Escolha uma foto</label>
                    <input type="file" class="arquivo" name="image" id="image" onchange="updateFileName(this)">
                    <div id="file-name"></div> <!-- Elemento para mostrar o nome do arquivo -->
                    <button type="submit">Publicar</button>
                </form>

                <div class="divisao">
    <p>Últimas Atualizações</p>
</div>
<div class="social">
    <?php
    $stmtPosts = $PDO->prepare("SELECT p.*, pc.* FROM publicacoes p
                                JOIN pizzas_criada pc ON p.id_pizza = pc.id
                                WHERE p.aprovado = 1 ORDER BY p.data_publicacao DESC");
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

                </div>
                <h3><?= $post['nome'] ?></h3>
                <p>Tipo de Massa: <?= $post['tipo_de_massa'] ?></p>
                <p>Ingredientes: <?= $post['ingredientes'] ?></p>
                <p>Preço: <?= $post['preco'] ?></p>
                <form action="add_to_cart.php" method="post">
    <input type="hidden" name="pizza_id" value="<?= $post["id_pizza"] ?>">
    <input type="hidden" name="pizza_type" value="Criada">
    <button class="car" type="submit" name="add_to_cart">
    <lord-icon
    src="https://cdn.lordicon.com/mfmkufkr.json"
    trigger="hover"
    colors="primary:#black"
    style="width:100px;height:35px">
</lord-icon>
    </button>
</form>

                    </form>
                <!-- Adicione outros campos da pizza conforme necessário -->
            </section>

            <!-- Exibindo as informações da pizza -->
          
        </div>


                    <?php
                    }
                    ?>
                </div>
    </main>
</body>
<script>
    function updateFileName(input) {
        var fileName = input.files[0].name;
        document.getElementById('file-name').innerText = 'Foto selecionado: ' + fileName;
    }

    function validateForm() {
        var pizza_id = document.getElementsByName("pizza_id")[0].value;

        if (pizza_id === "") {
            alert("Por favor, selecione uma pizza.");
            return false;
        }

        return true;
    }
</script>

</html>