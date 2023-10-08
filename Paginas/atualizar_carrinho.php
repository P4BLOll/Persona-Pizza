<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pizza_id = $_POST['pizza_id'];
    $nova_quantidade = intval($_POST['nova_quantidade']);

    if ($nova_quantidade > 0) {
        $_SESSION['carrinho'][$pizza_id] = $nova_quantidade;
    } elseif ($nova_quantidade <= 0) {
        unset($_SESSION['carrinho'][$pizza_id]);
    }

    header("Location: carrinho.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
