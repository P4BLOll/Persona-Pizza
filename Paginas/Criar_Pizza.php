<?php
session_start();
require 'conexao.php';

// Verifica se o usuário está logado
if (isset($_SESSION['user_id'])) {
  $isLoggedIn = true;
} else {
  $isLoggedIn = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Criar Pizza</title>
  <link rel="stylesheet" href="css/branco.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
</head>

<body>
  <!-- navbaar -->
  <?php include("nav.php") ?>

  <section class="overlay"></section>
  <!-- fundo escuro -->
  <main>
    <section class="person">
      <div class="title">
        <h1>Criar Pizza</h1>
      </div>
      <section>


        <div class="information">
          <lord-icon src="https://cdn.lordicon.com/ncxoarcp.json" trigger="loop" delay="1000" colors="primary:#ffffff" state="hover" style="width: 30px; height: 30px; position: relative" class="icon">
          </lord-icon>
          <p>
            Troque o tipo de sabor no icone "<lord-icon src="https://cdn.lordicon.com/kunpyuuw.json" stroke="bold" trigger="loop" delay="2000" colors="primary:#ffffff,secondary:#fff" style="width: 40px; height: 40px">
            </lord-icon>"  Depois de criada sua pizzas podera ser observada no perfil do usuario.
          </p>

        </div>
      </section>
      <form action="inserir_pizza.php" method="post">
        <div class="options">
          <h5>Selecione a Massa:</h5>
          <select name="massa" class="custom-select">
            <option value="fina">Massa Fina</option>
            <option value="grossa">Massa Grossa</option>
          </select>

          <h5>Escolha os Ingredientes:</h5>
          <div class="container">
            <div class="ingredientes salgados">
              <div class="nome">
                <p>Salgadas</p>
              </div>
              <div class="checkbox-group">
                <!-- Ingredientes anteriores... -->

                <!-- Recheios com divs nomeadas como ind -->
                <div class="ind">
                  <input type="checkbox" name="disponivel[]" class="check" id="tomate" value="Tomate" />
                  <label for="tomate">Tomate</label>
                </div>

                <div class="ind">
                  <input type="checkbox" class="check" name="disponivel[]" id="mucarela" value="Muçarela" />
                  <label for="mucarela">Muçarela</label>
                </div>

                <div class="ind">
                  <input type="checkbox" class="check" name="disponivel[]" id="peperoni" value="Peperoni" />
                  <label for="peperoni">Peperoni</label>
                </div>

                <div class="ind">
                  <input type="checkbox" class="check" name="disponivel[]" id="cebola" value="Cebola" />
                  <label for="cebola">Cebola</label>
                </div>

                <div class="ind">
                  <input type="checkbox" class="check" name="disponivel[]" id="azeitona" value="Azeitona" />
                  <label for="azeitona">Azeitona</label>
                </div>

                <div class="ind">
                  <input type="checkbox" class="check" name="disponivel[]" id="champignon" value="Champignon" />
                  <label for="champignon">Champignon</label>
                </div>

                <div class="ind">
                  <input type="checkbox" class="check" name="disponivel[]" id="parmesao" value="Parmesão" />
                  <label for="parmesao">Parmesão</label>
                </div>

                <div class="ind">
                  <input type="checkbox" class="check" name="disponivel[]" id="catupiry" value="Catupiry" />
                  <label for="catupiry">Catupiry</label>
                </div>

                <div class="ind">
                  <input type="checkbox" class="check" name="disponivel[]" id="brocolis" value="Brócolis" />
                  <label for="brocolis">Brócolis</label>
                </div>
              </div>
            </div>
            <div class="ingredientes doces">
              <div class="nome">
                <p>Doces</p>
              </div>
              <div class="checkbox-group">
                <div class="ind">
                  <input type="checkbox" class="check" id="chocolate" name="disponivel[]" value="chocolate" />
                  <label for="chocolate">Chocolate</label>
                </div>
                <div class="ind">
                  <input type="checkbox" class="check" id="morango" value="morango" name="disponivel[]" />
                  <label for="morango">Morango</label>
                </div>
                <div class="ind">
                  <input type="checkbox" class="check" id="caramelo" value="caramelo" name="disponivel[]" />
                  <label for="caramelo">Caramelo</label>
                </div>
                <div class="ind">
                  <input type="checkbox" id="abacaxi" value="abacaxi" name="disponivel[]" />
                  <label for="abacaxi">Abacaxi</label>
                </div>
                <div class="ind">
                  <input type="checkbox" class="check" id="marshmallow" value="marshmallow" name="disponivel[]" />
                  <label for="marshmallow">Marshmallow</label>
                </div>
                <div class="ind">
                  <input type="checkbox" class="check" id="anana" value="banana" name="disponivel[]" />
                  <label for="chantilly">Banana</label>
                </div>
                <div class="ind">
                  <input type="checkbox" class="check" id="baunilha" value="baunilha" name="disponivel[]" />
                  <label for="baunilha">Baunilha</label>
                </div>
                <div class="ind">
                  <input type="checkbox" class="check" id="cookie" value="cookie" name="disponivel[]" />
                  <label for="cookie">Cookie</label>
                </div>
                <div class="ind">
                  <input type="checkbox" class="check" id="doceLeite" value="doceLeite" name="disponivel[]" />
                  <label for="doceLeite">Doce de Leite</label>
                </div>
                <div class="ind">
                  <input type="checkbox" class="check" id="framboesa" value="framboesa" name="disponivel[]" />
                  <label for="framboesa">Framboesa</label>
                </div>
              </div>
            </div>

            <button class="trocar" onclick="toggleIngredientes(event)">
              <lord-icon src="https://cdn.lordicon.com/kunpyuuw.json" stroke="bold" trigger="hover" colors="primary:#ffffff,secondary:#fff" style="width: 50px; height: 50px">
              </lord-icon>
            </button>
            <div class="nome_pizza">
              <input type="text" name="nome_pizza" placeholder="Nome da Pizza">
            </div>
            <div class="preco-preview">
              <h5>Preço Total:</h5>
              <span id="preco-total">0.00</span> R$
            </div>
          </div>
        </div>
        <div class="btn">
          <button type="submit">Fazer Pedido</button>
        </div>
      </form>
    </section>
  </main>
  <script>
    function enviarPedido() {
      // Aqui você pode adicionar o código para enviar o pedido
      // Por exemplo, você pode usar AJAX ou redirecionar para outra página
      // Dependendo da lógica do seu aplicativo
      alert('Pedido enviado com sucesso!'); // Exemplo de mensagem de sucesso
      window.location.href = 'home.php'; // Redireciona para a página de home
    }

    let totalIngredientesSelecionados = 0;

    function toggleIngredientes(event) {
      event.preventDefault()
      const salgados = document.querySelector(".salgados");
      const doces = document.querySelector(".doces");

      if (salgados.style.opacity === "1") {
        salgados.style.opacity = "0";
        salgados.style.pointerEvents = "none";
        doces.style.opacity = "1";
        doces.style.pointerEvents = "auto";
      } else {
        salgados.style.opacity = "1";
        salgados.style.pointerEvents = "auto";
        doces.style.opacity = "0";
        doces.style.pointerEvents = "none";
      }
    }

    function limitCheckboxSelection(groupName, limit) {
      const checkboxes = document.querySelectorAll(`input[name="${groupName}"]`);

      checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
          const checkedCount = document.querySelectorAll(`input[name="${groupName}"]:checked`).length;

          if (checkedCount > limit) {
            checkbox.checked = false;
          }
        });
      });
    }

    const checkboxSetups = [{
      groupName: "disponivel[]",
      limit: 5
    }, ];

    checkboxSetups.forEach((setup) => {
      limitCheckboxSelection(setup.groupName, setup.limit);
    });

    function updatePrecoTotal() {
      const precoBaseMassaFina = 15.0;
      const precoBaseMassaGrossa = 20.0;
      const precoBaseIngrediente = 4.0;
      const selectMassa = document.querySelector("select[name='massa']");
      const precoTotalElement = document.getElementById("preco-total");
      let precoTotal = 0.0;

      if (selectMassa.value === "fina") {
        precoTotal += precoBaseMassaFina;
      } else if (selectMassa.value === "grossa") {
        precoTotal += precoBaseMassaGrossa;
      }

      const checkboxes = document.querySelectorAll("input[name='disponivel[]']:checked");
      precoTotal += checkboxes.length * precoBaseIngrediente;

      precoTotalElement.textContent = precoTotal.toFixed(2);
    }

    document.addEventListener("DOMContentLoaded", function() {
      const selectMassa = document.querySelector("select[name='massa']");
      selectMassa.addEventListener("change", updatePrecoTotal);

      const checkboxes = document.querySelectorAll("input[name='disponivel[]']");
      checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", updatePrecoTotal);
      });
    });
  </script>
</body>

</html>