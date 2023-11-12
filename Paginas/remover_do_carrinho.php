<?php
session_start();

if (isset($_POST['pizza_id']) && isset($_POST['pizza_type'])) {
    $pizza_id = $_POST['pizza_id'];
    $pizza_type = $_POST['pizza_type'];

    // Verifique se o carrinho de compras na sessão existe
    if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$pizza_type]) && isset($_SESSION['cart'][$pizza_type][$pizza_id])) {
        // Remova a pizza do carrinho
        unset($_SESSION['cart'][$pizza_type][$pizza_id]);

        // Se o tipo de pizza não tiver mais itens no carrinho, remova o tipo do carrinho
        if (empty($_SESSION['cart'][$pizza_type])) {
            unset($_SESSION['cart'][$pizza_type]);
        }
    }
}

// Redirecione de volta para a página do carrinho de compras
header('Location: carrinho.php');
exit();
?>
