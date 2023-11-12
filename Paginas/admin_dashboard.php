<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require 'conexao.php';

$userID = $_SESSION['user_id'];
$stmt = $PDO->prepare("SELECT nome, is_admin FROM usuarios WHERE id = ?");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$isAdmin = $user['is_admin'];

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/adm.css" />
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>

</head>

<body>
    <main>
        <div class="cc">
            <div class="title">
                <div class="icon">
                <lord-icon src="https://cdn.lordicon.com/lecprnjb.json" trigger="in" delay="500" state="in-cog"
                    colors="primary:#ffffff" class="x" style="width:150px;height:150px">
                </lord-icon>
                </div>
                <h1>Bem-vindo Administrador()
                    <?php echo $user['nome']; ?>!
                </h1>
            </div>
        </div>
        <!-- Display options for managing posts or other actions -->
        <?php if ($isAdmin): ?>
            <div class="a">
                <h1>Gerenciar</h1>
                <div class="btn">
                    <li><a href="manage_posts.php">Posts</a></li>
                    <li><a href="gerenciar_cardapio.php">Cardapio</a></li>
                    <li><a href="gerenciar_pizzzas_criadas.php">Pizzas Criadas </a></li>
                </div>

                </form>
            </div>
        <?php else: ?>
            <p>Você não tem permissão para acessar esta página.</p>
        <?php endif; ?>
    </main>
</body>

</html>