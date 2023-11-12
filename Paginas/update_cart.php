<?php
session_start();

// Atualizar a quantidade de uma pizza no carrinho
if (isset($_POST['action'])) {
    $pizza_id = $_POST['pizza_id'];
    $pizza_type = $_POST['pizza_type'];
    $quantity = $_POST['quantity'];

    if ($_POST['action'] === 'add') {
        // Aumentar a quantidade da pizza
        $_SESSION['cart'][$pizza_type][$pizza_id]['quantity']++;
    } elseif ($_POST['action'] === 'remove') {
        // Verificar se a quantidade é maior que 1 antes de diminuir
        if ($_SESSION['cart'][$pizza_type][$pizza_id]['quantity'] > 1) {
            $_SESSION['cart'][$pizza_type][$pizza_id]['quantity']--;
        }
    }

    header('Location: carrinho.php'); // Redirecione para a página de carrinho
    exit;
    
}


?>