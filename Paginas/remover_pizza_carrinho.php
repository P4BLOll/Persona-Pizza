<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pizzaId = $_POST['pizza_id'];

    if (isset($_SESSION['carrinho'][$pizzaId])) {
        unset($_SESSION['carrinho'][$pizzaId]);
    }
}
?>
