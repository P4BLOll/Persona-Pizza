<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/title.css">
  <link rel="stylesheet" href="../css/endingButton.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
  <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <title>PersonaPizza</title>
</head>
<body>
<?php
  include('../navbar.php');
?>
  <main>
  <h2 class="titulo">Crie Sua Pizza</h2>
    <div class="information">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
        <path d="M20 0C8.972 0 0 8.972 0 20C0 31.028 8.972 40 20 40C31.028 40 40 31.028 40 20C40 8.972 31.028 0 20 0ZM22 30H18V18H22V30ZM22 14H18V10H22V14Z" fill="#E0E0E0"/>
      </svg>
      <p>Crie uma pizza do zero de acordo com suas preferências e necessidades.</p>
    </div>
    <div class="center">
      <!-- Massas -->
      <div class="collapsible">
        <input type="checkbox" id="toggle" />
        <label for="toggle" class="head">MASSAS</label>
        <div class="content-group">
          <div class="checkbox-group">
            <!-- Linha 1 -->
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox1">
              <label class="checkbox-label" for="checkbox1">Opção 1</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox2">
              <label class="checkbox-label" for="checkbox2">Opção 2</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox3">
              <label class="checkbox-label" for="checkbox3">Opção 3</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox4">
              <label class="checkbox-label" for="checkbox4">Opção 4</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox5">
              <label class="checkbox-label" for="checkbox5">Opção 5</label>
            </div>
          
            <!-- Linha 2 -->
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox6">
              <label class="checkbox-label" for="checkbox6">Opção 6</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox7">
              <label class="checkbox-label" for="checkbox7">Opção 7</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox8">
              <label class="checkbox-label" for="checkbox8">Opção 8</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox9">
              <label class="checkbox-label" for="checkbox9">Opção 9</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox10">
              <label class="checkbox-label" for="checkbox10">Opção 10</label>
            </div>
          </div>
        </div>
      </div>
      <!-- Molhos -->
      <div class="collapsible">
        <input type="checkbox" id="toggle2" />
        <label for="toggle2" class="head">MOLHOS</label>
        <div class="content-group">
          <div class="checkbox-group">
            <!-- Linha 1 -->
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox1">
              <label class="checkbox-label" for="checkbox1">Opção 1</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox2">
              <label class="checkbox-label" for="checkbox2">Opção 2</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox3">
              <label class="checkbox-label" for="checkbox3">Opção 3</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox4">
              <label class="checkbox-label" for="checkbox4">Opção 4</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox5">
              <label class="checkbox-label" for="checkbox5">Opção 5</label>
            </div>
          
            <!-- Linha 2 -->
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox6">
              <label class="checkbox-label" for="checkbox6">Opção 6</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox7">
              <label class="checkbox-label" for="checkbox7">Opção 7</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox8">
              <label class="checkbox-label" for="checkbox8">Opção 8</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox9">
              <label class="checkbox-label" for="checkbox9">Opção 9</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox10">
              <label class="checkbox-label" for="checkbox10">Opção 10</label>
            </div>
          </div>
        </div>
      </div>
      <!-- Outros grupos de checkboxes podem ser adicionados aqui -->
      <div class="collapsible">
        <input type="checkbox" id="toggle3" />
        <label for="toggle3" class="head">RECHEIOS</label>
        <div class="content-group">
          <div class="checkbox-group">
            <!-- Linha 1 -->
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox1">
              <label class="checkbox-label" for="checkbox1">Opção 1</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox2">
              <label class="checkbox-label" for="checkbox2">Opção 2</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox3">
              <label class="checkbox-label" for="checkbox3">Opção 3</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox4">
              <label class="checkbox-label" for="checkbox4">Opção 4</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox5">
              <label class="checkbox-label" for="checkbox5">Opção 5</label>
            </div>
          
            <!-- Linha 2 -->
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox6">
              <label class="checkbox-label" for="checkbox6">Opção 6</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox7">
              <label class="checkbox-label" for="checkbox7">Opção 7</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox8">
              <label class="checkbox-label" for="checkbox8">Opção 8</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox9">
              <label class="checkbox-label" for="checkbox9">Opção 9</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="checkbox10">
              <label class="checkbox-label" for="checkbox10">Opção 10</label>
            </div>
          </div>
        </div>
      </div>
      <div class="finalizar">
      <button class="botao" type="submit">Finalizar</button>
      </div>
    </div>
  </main>
</body>

</html>
