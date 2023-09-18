<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/title.css">
  <link rel="stylesheet" href="../css/endingButton.css">
  <link rel="stylesheet" href="../personalizar/ingredientes.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
  <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <title>PersonaPizza</title>
</head>
<body>
    <?php
        include('../navbar.php')
    ?>
    <main>
    <h2 class="titulo">Personalização</h2>
    <div class="information">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
        <path d="M20 0C8.972 0 0 8.972 0 20C0 31.028 8.972 40 20 40C31.028 40 40 31.028 40 20C40 8.972 31.028 0 20 0ZM22 30H18V18H22V30ZM22 14H18V10H22V14Z" fill="#E0E0E0"/>
      </svg>
      <p>Remova ou acrescente a quantidade de ingredientes presentes na receita.</p>
    </div>

    <form method="" action="index.php">
        <h2>Escolha seus ingredientes:</h2>
        <ul>
            <li>
                <label>
                    <input type="checkbox" name="ingredientEnabled[]" value="Tomate" checked>
                    Tomate
                </label>
                <button type="button" onclick="decreaseQuantity('tomate')" id="decreaseTomate">-</button>
                <p id="tomateQuantity">1</p>
                <button type="button" onclick="increaseQuantity('tomate')" id="increaseTomate">+</button>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="ingredientEnabled[]" value="Alface" checked>
                    Alface
                </label>
                <button type="button" onclick="decreaseQuantity('alface')" id="decreaseAlface">-</button>
                <p id="alfaceQuantity">1</p>
                <button type="button" onclick="increaseQuantity('alface')" id="increaseAlface">+</button>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="ingredientEnabled[]" value="Queijo" checked>
                    Queijo
                </label>
                <button type="button" onclick="decreaseQuantity('queijo')" id="decreaseQueijo">-</button>
                <p id="queijoQuantity">1</p>
                <button type="button" onclick="increaseQuantity('queijo')" id="increaseQueijo">+</button>
            </li>
        </ul>
        <button class="botao" type="submit">Finalizar</button>
    </form>

    <script>
        function updateIngredientState(ingredient) {
            var checkbox = document.querySelector('input[name="ingredientEnabled[]"][value="' + ingredient + '"]');
            var decreaseButton = document.getElementById('decrease' + ingredient);
            var increaseButton = document.getElementById('increase' + ingredient);
            var quantityP = document.getElementById(ingredient + 'Quantity');

            decreaseButton.disabled = !checkbox.checked;
            increaseButton.disabled = !checkbox.checked;
            quantityP.style.color = checkbox.checked ? 'black' : 'gray';

            // Se o checkbox estiver desativado, zere a quantidade
            if (!checkbox.checked) {
                quantityP.textContent = '0';
            }
        }

        function increaseQuantity(ingredient) {
            var quantityP = document.getElementById(ingredient + 'Quantity');
            var currentQuantity = parseInt(quantityP.textContent);
            quantityP.textContent = currentQuantity + 1;
        }

        function decreaseQuantity(ingredient) {
            var quantityP = document.getElementById(ingredient + 'Quantity');
            var currentQuantity = parseInt(quantityP.textContent);
            if (currentQuantity > 1) {
                quantityP.textContent = currentQuantity - 1;
            }
        }

        // Adicione um listener de alteração para cada checkbox
        var checkboxes = document.querySelectorAll('input[name="ingredientEnabled[]"]');
        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                var ingredient = this.value;
                updateIngredientState(ingredient);
            });
        });
    </script>

    </main>
</body>
</html>
