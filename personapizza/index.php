<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Carrinho</title>
</head>
<body>
    <h1>Produtos Disponíveis</h1>
    <ul>
        <li>Produto 1 - $10</li>
        <li>Produto 2 - $20</li>
        <li>Produto 3 - $30</li>
    </ul>
    
    <h2>Carrinho</h2>
    <form method="post" action="carrinho.php">
        <label for="produto1">Produto 1</label>
        <input type="number" id="produto1" name="produto1" value="0" min="0">
        <br>
        <label for="produto2">Produto 2</label>
        <input type="number" id="produto2" name="produto2" value="0" min="0">
        <br>
        <label for="produto3">Produto 3</label>
        <input type="number" id="produto3" name="produto3" value="0" min="0">
        <br>
        <input type="submit" value="Adicionar ao Carrinho">
    </form>
</body>
</html>
