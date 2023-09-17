<?php
session_start();

if(isset($_POST['adicionar_carrinho'])) {
    $pizza_id = $_POST['pizza_id'];

    if(isset($_SESSION['carrinho'][$pizza_id])) {
        $_SESSION['carrinho'][$pizza_id]++;
    } else {
        $_SESSION['carrinho'][$pizza_id] = 1;
    }

    header('Location: carrinho.php');
}
?>