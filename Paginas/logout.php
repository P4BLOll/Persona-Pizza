<?php
// Inicia a sessão
session_start();

// Encerra a sessão (desloga o usuário)
session_destroy();

// Redireciona para a página home.php
header("Location: home.php");
exit();
?>
