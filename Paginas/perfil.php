<?php
// Inicia a sessão para manter o login
session_start();


// Verifica se o usuário está logado
if (isset($_SESSION['user_id'])) {
  $isLoggedIn = true;
} else {
  $isLoggedIn = false;
}
// Verifica se o usuário não está logado e sai do script se não estiver
if (!isset($_SESSION['user_id'])) {
  header("Location: index.php?");
    exit();
}

// Requer o arquivo de conexão com o banco de dados
require 'conexao.php';

// Obtém o ID do usuário da sessão
$userID = $_SESSION['user_id'];

// Prepara e executa uma consulta para obter informações do usuário
$stmt = $PDO->prepare("SELECT nome, email, foto_perfil FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Processa o envio de uma nova foto de perfil
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['foto_perfil']['name'])) {
    $photoTmpPath = $_FILES['foto_perfil']['tmp_name'];
    $photoName = $_FILES['foto_perfil']['name'];
    $photoType = $_FILES['foto_perfil']['type'];
    
    // Verifica se o arquivo é uma imagem
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($photoType, $allowedTypes)) {
        echo "Apenas arquivos de imagem são permitidos.";
        exit();
    }
    
    // Define o caminho para a nova foto de perfil
    $newPhotoPath = 'img/' . $photoName;
    
    // Move o arquivo da foto temporária para o novo caminho
    move_uploaded_file($photoTmpPath, $newPhotoPath);
    
    // Atualiza o caminho da foto de perfil no banco de dados
    $stmt = $PDO->prepare("UPDATE usuarios SET foto_perfil = ? WHERE id = ?");
    $stmt->execute([$newPhotoPath, $userID]);
    
    // Atualiza a variável $user com o novo caminho da foto
    $user['foto_perfil'] = $newPhotoPath;
}
// Obtém as pizzas criadas pelo usuário
$stmt_pizzas = $PDO->prepare("SELECT * FROM pizzas_criada WHERE usuario_id = ?");
$stmt_pizzas->execute([$userID]);
$pizzas = $stmt_pizzas->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/perfil.css">
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>

</head>

<body>
    <!-- navbar -->
    <?php include("nav.php") ?>

    <div class="elipse">
        <!-- <img src="img/Ellipse 50.svg" alt=""> -->
    </div>
    <h1 class="name_u">Bem Vindo, <?php echo $user['nome']; ?></h1>
    <?php if (!empty($user['foto_perfil'])) : ?>
    <div class="foto_perfil">
        <div class="moldura">
            <img class="foto" src="<?php echo $user['foto_perfil']; ?>" alt="Foto de Perfil">
            <div class="upload_form">
                <form action="perfil.php" method="POST" enctype="multipart/form-data" id="upload_form">
                <input type="file" name="foto_perfil" id="foto_perfil" accept="image/*">
                    <label for="foto_perfil" class="anexar">
                    <img src="img/pencil-regular-24.png" width="50%">
                    </label>
                    <button type="submit" id="submit_button_hidden" style="display: none;"></button>
                </form>
            </div>
        </div>
    </div>
    <?php else : ?>
    <div class="foto_perfil">
        <div class="moldura">
            <img class="foto" src="img/default_profile.png" alt="Foto de Perfil Padrão">
            <div class="upload_form">
                <form action="perfil.php" method="POST" enctype="multipart/form-data" id="upload_form">
                <input type="file" name="foto_perfil" id="foto_perfil" accept="image/*">
                    <label for="foto_perfil" class="anexar">
                    <img src="img/pencil-regular-24.png" width="50%">

                    </lord-icon>
                    </label>
                    <button type="submit" id="submit_button_hidden" style="display: none;"></button>
                </form>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- Exibe informações do usuário -->
    <div class="container1">
        <p class="Tdados"><strong>Dados Pessoais</strong></p>
    </div>
    <div class="container2">
        <p class="Tdados"><strong>Nome:</strong> <?php echo $user['nome']; ?></p>
        <p class="Tdados"><strong>Email:</strong> <?php echo $user['email']; ?></p>
    </div>
    <?php if (!empty($pizzas)) : ?>
    <div class="container4">
        <h2>Pizzas Criadas</h2>
        <ul class="pizzas-list">
        <?php foreach ($pizzas as $pizza) : ?>
            <li class="pizza-item">
                <h3>Nome: <?php echo $pizza['nome']; ?></h3>
                <p>Tipo de Massa: <?php echo $pizza['tipo_de_massa']; ?></p>
                <p>Ingredientes: <?php echo $pizza['ingredientes']; ?></p>
                <p>Preço: <?php echo $pizza['preco']; ?> R$</p>
                <?php if ($pizza['status'] == 0) : ?>
                    <p>Status: Em Análise</p>
                <?php else : ?>
                    <p>Status: Aprovada</p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="pizza_id" value="<?php echo $pizza['id']; ?>">
                        <input type="hidden" name="pizza_type" value="Criada">
                        <button class="car" type="submit" name="add_to_cart">
                            <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 40px; height: 25px"></lord-icon>
                        </button>
                    </form>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>


    <div class="container3">
        <!-- Formulário para envio de nova foto de perfil -->


        <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('foto_perfil').addEventListener('change', function() {
                document.getElementById('submit_button_hidden')
                    .click(); // Aciona o clique no botão invisível
            });
        });
        </script>


        <!-- Links para sair, página de rede social e página de produto -->
        <button class="botao">
            <p><a href="logout.php">Sair</a></p>
        </button>
    </div>
</body>

</html>