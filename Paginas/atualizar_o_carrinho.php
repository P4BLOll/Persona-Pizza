<?php
session_start();

if (isset($_POST['pizza_id']) && isset($_POST['pizza_type']) && isset($_POST['action'])) {
    $pizza_id = $_POST['pizza_id'];
    $pizza_type = $_POST['pizza_type'];
    $action = $_POST['action'];

    // Verifique se o carrinho de compras na sessão existe
    if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$pizza_type]) && isset($_SESSION['cart'][$pizza_type][$pizza_id])) {
        if ($action === 'add') {
            // Aumentar a quantidade
            $_SESSION['cart'][$pizza_type][$pizza_id]['quantity']++;
        } elseif ($action === 'remove') {
            // Diminuir a quantidade, desde que seja maior que 1
            if ($_SESSION['cart'][$pizza_type][$pizza_id]['quantity'] > 1) {
                $_SESSION['cart'][$pizza_type][$pizza_id]['quantity']--;
            }
        }
    }
}

// Redirecione de volta para a página do carrinho de compras
header('Location: carrinho.php');
exit();
?>
