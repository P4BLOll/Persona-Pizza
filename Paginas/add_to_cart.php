<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    $pizza_id = $_POST['pizza_id'];
    $pizza_type = $_POST['pizza_type']; // Comum, Personalizada ou Criada

    // Verificar se a ação é "limpar"
    if ($_POST['add_to_cart'] === 'limpar') {
        // Limpar o carrinho completamente
        unset($_SESSION['cart']);
    } else {
        // Verificar se o item já existe no carrinho, agrupado por tipo
        if (!isset($_SESSION['cart'][$pizza_type][$pizza_id])) {
            $_SESSION['cart'][$pizza_type][$pizza_id] = [
                'quantity' => 0,
            ];
        }

        // Aumentar a quantidade da pizza no carrinho
        $_SESSION['cart'][$pizza_type][$pizza_id]['quantity']++;
    }

    header('Location: carrinho.php'); // Redirecione para a página de carrinho
    exit();
}
