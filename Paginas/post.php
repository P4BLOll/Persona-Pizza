<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    require 'conexao.php'; // Substitua pelo seu arquivo de configuração de banco de dados

    $userID = $_SESSION['user_id'];
    $pizzaID = $_POST['pizza_id']; // Adicione esta linha para obter o ID da pizza
    $postContent = $_POST['post_content'];
    $currentDate = date('Y-m-d H:i:s');
    $imageUploadPath = null;

    // Upload da imagem
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageFileName = $_FILES['image']['name'];
        $imageUploadPath = "img/$imageFileName"; // Defina o caminho correto

        move_uploaded_file($imageTmpPath, $imageUploadPath);
    }

    // Inserir a postagem no banco de dados com ou sem imagem
    $aprovado = false;
    $stmt = $PDO->prepare("INSERT INTO publicacoes (id_usuario, id_pizza, conteudo, imagem, aprovado, data_publicacao) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$userID, $pizzaID, $postContent, $imageUploadPath, $aprovado, $currentDate]);

    header("Location: social_media.php");
    exit();
} else {
    // Caso não seja uma solicitação POST, redirecione para a página de rede social
    header("Location: social_media.php");
    exit();
}
