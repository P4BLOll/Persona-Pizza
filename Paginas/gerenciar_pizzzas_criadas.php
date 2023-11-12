<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzas Criadas - Admin</title>
    <link rel="stylesheet" href="css/gerenciar_pizza_criado.css"> <!-- Adapte o caminho conforme necessário -->
    <html lang="pt-BR">
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
<body>
<div class="voltar">
            <a href="admin_dashboard.php">
            <lord-icon
    src="https://cdn.lordicon.com/vduvxizq.json"
    trigger="hover"
    colors="primary:#ffffff"
    style="width:30px;height:30px">
    </lord-icon>
            </a>
        </div>
    <div class="container">
        <h2>Pizzas Criadas - Admin</h2>
        <?php
        // Conexão com o banco de dados e obtenção das pizzas
        require 'conexao.php';

        $stmt = $PDO->prepare("SELECT pizzas_criada.*, usuarios.nome AS nome_usuario FROM pizzas_criada JOIN usuarios ON pizzas_criada.usuario_id = usuarios.id");
        $stmt->execute();
        $pizzas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <?php if (!empty($pizzas)) : ?>
            <ul class="pizzas-list">
                <?php foreach ($pizzas as $pizza) : ?>
                    <li class="pizza-item">
                        <h3><?php echo $pizza['nome']; ?></h3>
                        <p>Criada por: <?php echo $pizza['nome_usuario']; ?></p>
                        <p>Id do usuario: <?php echo $pizza['usuario_id']; ?></p>
                        <p>Tipo de Massa: <?php echo $pizza['tipo_de_massa']; ?></p>
                        <p>Ingredientes: <?php echo $pizza['ingredientes']; ?></p>
                        <p>Preço: <?php echo $pizza['preco']; ?> R$</p>
                        <p>Status: <?php echo ($pizza['status'] == 0) ? 'Em Análise' : 'Aprovada'; ?></p>
                        <form action="alterar_status.php" method="post">
                            <input type="hidden" name="pizza_id" value="<?php echo $pizza['id']; ?>">
                            <label for="status">Alterar Status:</label>
                            <select name="status" id="status">
                                <option value="0">Em Análise</option>
                                <option value="1">Aprovada</option>
                            </select>
                            <button type="submit">Salvar</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>Nenhuma pizza criada.</p>
        <?php endif; ?>
    </div>


    <!-- Inclua o rodapé aqui se houver um -->

</body>

</html>