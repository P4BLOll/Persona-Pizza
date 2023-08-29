<?php

include_once('conexao.php');

$id = $_GET['id'];


    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);


    $sqlDelete = "DELETE FROM usuarios WHERE id= :id";
    $stmtDelete = $PDO->prepare($sqlDelete);
    $stmtDelete->bindValue(':id', $id);
    $resultDelete = $stmtDelete->execute();
    
    if ($resultDelete !== false) {

        header("Location: consultar.php");
        exit();
    } else {

        echo "Erro ao excluir os dados.";
    }
?>