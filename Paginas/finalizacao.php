<?php
require 'conexao.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if(isset($_POST['pagar'])){
  $total_valor = $_POST['valor_final'];

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/finalizacao.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.inputmask/5.0.5/jquery.inputmask.min.js"></script>

  </head>
  <body>
    <main>
      <div class="voltar"><a href="cardapio.php"><i class="bx bx-left-arrow-alt"></i></a>
      </div>
      <section class="title">
        <h1>Pagamento</h1>
      </section>
      <section class="pagamento">
        <div class="cep">
          <div class="input_cep">
            <input
              name="cep"
              type="text"
              id="cep"
              class="form-control"
              size="10"
              maxlength="9"
              oninput="consultaCEP(this.value)"
              placeholder="CEP"
            />
            
            <input type="number" placeholder="N°">
          </div>
          <p id="cep-result">
            <span id="logradouro"> </span> <span id="bairro"></span>
            <span id="localidade"></span> <span id="uf"></span>
            <br>
            <lord-icon
    src="https://cdn.lordicon.com/surcxhka.json"
    trigger="loop"
    delay="2000"
    stroke="bold"
    state="hover-jump-roll"
    colors="primary:#ffffff,secondary:#ffffff"
    style="width:20px;height:20px">
</lord-icon>
          </p>
        </div>

        <!-- <section class="divisao"> <p>Forma de Pagamento</p> </section> -->
       <section class="formas">

        <dialog id="custom-dialog">
          <button id="close-button">
            <lord-icon
              src="https://cdn.lordicon.com/zxvuvcnc.json"
              trigger="hover"
              colors="primary:#ffffff"
              style="width:20px;height:20px">
            </lord-icon>
          </button>
        
          <!-- Formulário de Checkout para Cartão de Crédito -->
          <form id="checkout-form" method="post" action="finalizacao.php">
          <div class="form-group">
            <label for="card-number">Número do Cartão</label>
            <input type="text" id="card-number" name="ncartao" class="input" placeholder="0000 0000 0000 0000" required pattern="[0-9]{16}" title="Digite um número de cartão válido (16 dígitos)" />
          </div>
          <div class="form-group">
            <label for="card-name">Nome no Cartão</label>
            <input type="text" id="card-name" name="nome" class="input" placeholder="Seu Nome" required pattern="[A-Za-zÀ-ú\s]+" title="Digite um Nome válido (Letras, espaços e acentos)"/>
          </div>
          <div class="form-group">
            <div class="inline-inputs">
              <div>
                <label for="expiry-date">Data</label>
                <input type="date" id="expiry-date" name="datav" class="input" placeholder="MM/AA" required/>
              </div>
              <div>
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" class="input cvv" placeholder="000" required pattern="[0-9]{3}" title="Digite um CVV válido (3 dígitos)" />
              </div>
            </div>
          </div>
          <input type="hidden" name="valor_total" value="<?= $total_valor ?>">
          <button id="submit-button" name="pagamento" class="enviar">Pagar</button>
        </form>
          <div class="confirmacao">
            <div class="info">
              <p>Certifique-se de que os dados estão preenchidos corretamente</p>
            </div>
          </div>        
        </dialog>

        <dialog id="custom-dialog">
          <button id="close-button">
              <lord-icon
                  src="https://cdn.lordicon.com/zxvuvcnc.json"
                  trigger="hover"
                  colors="primary:#ffffff"
                  style="width:20px;height:20px">
              </lord-icon>
          </button>
      
          <!-- Conteúdo do Modal -->
          <!-- ... Seu conteúdo aqui ... -->
      </dialog>
      
      <dialog id="custom-dialog-2">
        <button id="close-button-2">
            <lord-icon
                src="https://cdn.lordicon.com/zxvuvcnc.json"
                trigger="hover"
                colors="primary:#ffffff"
                style="width:20px;height:20px">
            </lord-icon>
        </button>
    
        <!-- contêiner para o código QR -->
        <div id="qr-code-container">
            <!-- Coloque seu código QR real aqui -->
            
        </div>
    
        <!-- Formulário de Pagamento via PIX -->
        <form id="pix-payment-form">
            <div class="form-group">
                <label for="recipient">Chave PIX do Destinatário</label>
                <input type="text" id="recipient" class="input" placeholder="Chave PIX" />
            </div>
    
            <button id="submit-pix-button" class="enviar">Pagar via PIX</button>
        </form>
    </dialog>
          <div class="btns">
            <button id="show-button">
              <lord-icon
      src="https://cdn.lordicon.com/xuyycdjx.json"
      trigger="boomerang"
      state="morph-card"
      colors="primary:#ffffff"
      style="width:30px;height:30px">
  </lord-icon>
         
            </button>
            <button class="qr-code"  id="show-button-2"><i class='bx bx-qr'></i></button>
          </div>
       
          </button>
       </section>  
      </section>

      <!-- lugar do dados do carrinho -->

      <section class="carrinho-dados">
        <div class="title"><p>Dados do Cartão</p></div>

        <div class="compras">
          <?php

          if(isset($_POST['pagamento'])){
            $total = $_POST['valor_total'];
            $ncartao = $_POST['ncartao'];
            $nome = $_POST['nome'];
            $datav = $_POST['datav'];
            $cvv = $_POST['cvv'];
            ?>
          <div class="dados">
          <div class="info_cartao" id="preco">
          <h3>Preço a ser pago: </h3> <p>R$<?= number_format($total, 2, ',', '.')?></p>
          </div>
          <div class="info_cartao">
          <h3>N° do Cartão: </h3> <p><?= trim(chunk_split(preg_replace('/\D/', '', $ncartao), 4, ' ')); ?></p>
          </div>
          <div class="info_cartao">
          <h3>Nome: </h3> <p> <?= $nome?></p>
          </div>
          <div class="info_cartao">
          <h3>CVV: </h3> <p> <?= $cvv?></p>
          </div>
          <div class="info_cartao">
          <h3>Data de Validade: </h3> <p> <?= $datav?></p>
          </div>
          </div>


          <?php } ?>

        
        </div>
      </section>

      <div id="modal" class="modal">
      <div class="modal-content">
        <h2>Compra Efetuada com Sucesso!</h2>
        <p>Obrigado por sua compra.</p>
        <form method="post" action="add_to_cart.php">
        <button class="fim" id="limpar-carrinho-btn" name="add_to_cart" value="limpar" onclick="fecharModal()">Concluído</button>
        </form>
      </div>
    </div>

      <div class="comprar">
        <button class="comprar-btn" onclick="abrirModal()">
          Confirmar Pedido
          <lord-icon
    src="https://cdn.lordicon.com/gublfzew.json"
    trigger="loop"
    delay="1000"
    colors="primary:#e83a30,secondary:#ffc738"
    style="width:60px;height:60px"
    class="pizza">
</lord-icon>
        </button>
        
      </div>
    </main>

<script>





document.getElementById('limpar-carrinho-btn').addEventListener('click', function() {
    // Envia uma solicitação para o script PHP que esvazia o carrinho
    fetch('limpar_carrinho.php')
      .then(response => response.json())
      .then(data => {
        // Exibe uma mensagem ou executa ações adicionais após limpar o carrinho
        alert('Carrinho esvaziado com sucesso!');
        // Redireciona para a página do cardápio
        window.location.href = 'caminho_para_cardapio.php';
      })
      .catch(error => console.error('Erro ao esvaziar o carrinho:', error));
  });
 
  const confirmarPedidoBtn = document.getElementById('confirmarPedidoBtn');
  confirmarPedidoBtn.addEventListener('click', abrirModal);

  // Funções para abrir e fechar a modal
  function abrirModal() {
    document.getElementById('modal').style.display = 'block';
  }

  function fecharModal() {
    document.getElementById('modal').style.display = 'none';
  }
</script>
  </body>
</html>
<script>
  function consultaCEP(cep) {
    const removeNaoNumeros = /\D/g;
    cep = cep.replace(removeNaoNumeros, "");

    if (cep.length === 8) {
      fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then((response) => response.json())
        .then((data) => {
          const result = document.getElementById("cep-result");
          result.style.opacity = "1";
          result.classList.add("fade-in");

          document.getElementById("logradouro").textContent = data.logradouro;
          document.getElementById("bairro").textContent = data.bairro;
          document.getElementById("localidade").textContent = data.localidade;
          document.getElementById("uf").textContent = data.uf;
        })
        .catch((error) => {
          console.log(`Erro: ${error}`);
        });
    } else {
      const result = document.getElementById("cep-result");
      result.style.opacity = "0";
      result.style.transition = "all .2s ease-in-out";
    }
  }

  const dialog = document.getElementById('custom-dialog');
const showButton = document.getElementById('show-button');
const closeButton = document.getElementById('close-button');

showButton.addEventListener('click', () => {
    dialog.style.display = 'block';
    setTimeout(() => {
        dialog.classList.add('show');
        dialog.showModal();
    }, 50);
});

closeButton.addEventListener('click', () => {
    dialog.classList.remove('show');
    setTimeout(() => {
        dialog.close();
        dialog.style.display = 'none';
    }, 500);
});

// Adicione o JavaScript para o segundo modal
// Event listener para abrir o modal PIX
const showButton2 = document.getElementById('show-button-2');
const dialog2 = document.getElementById('custom-dialog-2');
const closeButton2 = document.getElementById('close-button-2');
const pixPaymentForm = document.getElementById('pix-payment-form');

showButton2.addEventListener('click', () => {
    dialog2.style.display = 'block';
    setTimeout(() => {
        dialog2.classList.add('show');
        dialog2.showModal();
    }, 50);
});

closeButton2.addEventListener('click', () => {
    dialog2.classList.remove('show');
    setTimeout(() => {
        dialog2.close();
        dialog2.style.display = 'none';
    }, 500);
});

// Event listener para enviar o pagamento via PIX
const submitPixButton = document.getElementById('submit-pix-button');

submitPixButton.addEventListener('click', () => {
    // Aqui você pode adicionar a lógica para processar o pagamento via PIX
    // Obtenha os valores dos campos do formulário e envie a transação
    const recipient = document.getElementById('recipient').value;
    const amount = document.getElementById('amount').value;
    const description = document.getElementById('description').value;

    // Adicione sua lógica aqui para enviar o pagamento via PIX
    // Por exemplo, você pode fazer uma requisição para o sistema de pagamento
    // e lidar com a resposta.
    
    // Após o processamento do pagamento, você pode fechar o modal
    dialog2.classList.remove('show');
    setTimeout(() => {
        dialog2.close();
        dialog2.style.display = 'none';
    }, 500);
});



const creditCard = document.querySelector('.credit-card');
const flipButton = document.querySelector('#flip-button');

flipButton.addEventListener('click', () => {
  creditCard.classList.toggle('show-cvv');
});


document.querySelector('#mais-button').addEventListener('click', function() {
  const quantidadeInput = document.querySelector('#quantidade-input');
  let quantidade = parseInt(quantidadeInput.value);
  
  if (quantidade < 10) {
    quantidade++;
    quantidadeInput.value = quantidade;
  }
});

// Event listener para o botão "Menos"
document.querySelector('#menos-button').addEventListener('click', function() {
  const quantidadeInput = document.querySelector('#quantidade-input');
  let quantidade = parseInt(quantidadeInput.value);
  
  if (quantidade > 1) {
    quantidade--;
    quantidadeInput.value = quantidade;
  }
});





</script>
