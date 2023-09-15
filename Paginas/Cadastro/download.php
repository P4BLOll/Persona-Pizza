<?php
// Conecte-se ao banco de dados
require 'conexao.php';

if (isset($_GET['id']) && isset($_GET['type'])) {
    $id = $_GET['id'];
    $type = $_GET['type'];

    try {
        $sql = "SELECT $type FROM pizzas WHERE id = :id";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row && !empty($row[$type])) {
            // Define os cabeçalhos apropriados para download
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . $type . '.jpg"');

            // Saída do conteúdo binário da imagem
            echo $row[$type];
        } else {
            echo 'Imagem não encontrada ou vazia.';
        }
    } catch (PDOException $e) {
        echo 'Erro ao executar a consulta: ' . $e->getMessage();
    }
} else {
    echo 'Parâmetros inválidos.';
}
