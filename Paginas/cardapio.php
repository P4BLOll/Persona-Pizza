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
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <title>PersonaPizza</title>
</head>

<body>
  <!-- navbaar -->
  <?php include("nav.php") ?>

  <section class="overlay"></section>
  <!-- fundo escuro -->
  <main>
    <div class="Cardapio">
      <section>
        <div class="information">
          <lord-icon src="https://cdn.lordicon.com/ncxoarcp.json" trigger="loop" delay="1000" colors="primary:#ffffff" state="hover" style="width: 30px; height: 30px; position: relative" class="icon">
          </lord-icon>
          <p>
            Após selecionar a pizza, poderá personalizá-la de acordo com seus
            gostos e preferências.
          </p>
        </div>
      </section>
      <div class="salgados">
        <!-- card -->
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza1" name="fb_pizza1" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza1" name="fb_pizza1" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza1" name="fb_pizza1" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza1" name="fb_pizza1" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza1" name="fb_pizza1" value="5" />
              </div>
              <div class="btns">
                <a href="pizza_peperoni.php">Comprar</a>
                <form action="adicionar_ao_carrinho.php" method="post">
                  <input type="hidden" name="pizza_id" value="1"> <!-- Coloque aqui o ID correspondente a esta pizza -->
                  <button class="car" type="submit" name="adicionar_carrinho">
                    <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                    </lord-icon>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/Pizza vegetais, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Vegetariana</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza2" name="fb_pizza2" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza2" name="fb_pizza2" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza2" name="fb_pizza2" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza2" name="fb_pizza2" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza2" name="fb_pizza2" value="5" />
              </div>
              <div class="btns">
                <a href="pizza_vegetariana.php">Comprar</a>
                <form action="adicionar_ao_carrinho.php" method="post">
                  <input type="hidden" name="pizza_id" value="7"> <!-- Coloque aqui o ID correspondente a esta pizza -->
                  <button class="car" type="submit" name="adicionar_carrinho">
                    <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                    </lord-icon>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/Pizza de cogumelos, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Cogumelo</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza3" name="fb_pizza3" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza3" name="fb_pizza3" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza3" name="fb_pizza3" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza3" name="fb_pizza3" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza3" name="fb_pizza3" value="5" />
              </div>
              <div class="btns">
                <a href="pizza_cogumelos.php">Comprar</a>
                <form action="adicionar_ao_carrinho.php" method="post">
                  <input type="hidden" name="pizza_id" value="5"> <!-- Coloque aqui o ID correspondente a esta pizza -->
                  <button class="car" type="submit" name="adicionar_carrinho">
                    <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                    </lord-icon>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/Pizza de queijo, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Queijo</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza4" name="fb_pizza4" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza4" name="fb_pizza4" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza4" name="fb_pizza4" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza4" name="fb_pizza4" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza4" name="fb_pizza4" value="5" />
              </div>
              <div class="btns">
                <a href="pizza_queijo.php">Comprar</a>
                <form action="adicionar_ao_carrinho.php" method="post">
                  <input type="hidden" name="pizza_id" value="6"> <!-- Coloque aqui o ID correspondente a esta pizza -->
                  <button class="car" type="submit" name="adicionar_carrinho">
                    <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                    </lord-icon>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/Pizza de presunto, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>presunto</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza5" name="fb_pizza5" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza5" name="fb_pizza5" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza5" name="fb_pizza5" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza5" name="fb_pizza5" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza5" name="fb_pizza5" value="5" />
              </div>
              <div class="btns">
                <a href="pizza-presunto.php">Comprar</a>
                <form action="adicionar_ao_carrinho.php" method="post">
                  <input type="hidden" name="pizza_id" value="8"> <!-- Coloque aqui o ID correspondente a esta pizza -->
                  <button class="car" type="submit" name="adicionar_carrinho">
                    <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                    </lord-icon>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/Pizza de azeitona, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Azeitona</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza6" name="fb_pizza6" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_piza6" name="fb_pizza6" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_piza6" name="fb_pizza6" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_piza6" name="fb_pizza6" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_piza6" name="fb_pizza6" value="5" />
              </div>
              <div class="btns">
                <a href="pizza_azeitona.php">Comprar</a>
                <form action="adicionar_ao_carrinho.php" method="post">
                  <input type="hidden" name="pizza_id" value="4"> <!-- Coloque aqui o ID correspondente a esta pizza -->
                  <button class="car" type="submit" name="adicionar_carrinho">
                    <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                    </lord-icon>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Muçarela</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza7" name="fb_pizza7" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza7" name="fb_pizza7" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza7" name="fb_pizza7" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza7" name="fb_pizza7" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza7" name="fb_pizza7" value="5" />
              </div>
              <div class="btns">
                <a href="">Comprar</a>
                <button class="car">
                  <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                  </lord-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Muçarela</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza8" name="fb_pizza8" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza8" name="fb_pizza8" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza8" name="fb_pizza8" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza8" name="fb_pizza8" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza8" name="fb_pizza8" value="5" />
              </div>
              <div class="btns">
                <a href="">Comprar</a>
                <button class="car">
                  <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                  </lord-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- // -->
      <div class="doces">
        <span>ou</span>
        <!-- card -->
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Muçarela</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza1" name="fb_pizza1" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza1" name="fb_pizza1" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza1" name="fb_pizza1" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza1" name="fb_pizza1" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza1" name="fb_pizza1" value="5" />
              </div>
              <div class="btns">
                <a href="">Comprar</a>
                <button class="car">
                  <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                  </lord-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Muçarela</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza2" name="fb_pizza2" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza2" name="fb_pizza2" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza2" name="fb_pizza2" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza2" name="fb_pizza2" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza2" name="fb_pizza2" value="5" />
              </div>
              <div class="btns">
                <a href="">Comprar</a>
                <button class="car">
                  <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                  </lord-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Muçarela</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza3" name="fb_pizza3" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza3" name="fb_pizza3" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza3" name="fb_pizza3" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza3" name="fb_pizza3" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza3" name="fb_pizza3" value="5" />
              </div>
              <div class="btns">
                <a href="">Comprar</a>
                <button class="car">
                  <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                  </lord-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Muçarela</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza4" name="fb_pizza4" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza4" name="fb_pizza4" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza4" name="fb_pizza4" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza4" name="fb_pizza4" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza4" name="fb_pizza4" value="5" />
              </div>
              <div class="btns">
                <a href="">Comprar</a>
                <button class="car">
                  <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                  </lord-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Muçarela</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza5" name="fb_pizza5" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza5" name="fb_pizza5" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza5" name="fb_pizza5" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza5" name="fb_pizza5" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza5" name="fb_pizza5" value="5" />
              </div>
              <div class="btns">
                <a href="">Comprar</a>
                <button class="car">
                  <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                  </lord-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Muçarela</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza6" name="fb_pizza6" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_piza6" name="fb_pizza6" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_piza6" name="fb_pizza6" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_piza6" name="fb_pizza6" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_piza6" name="fb_pizza6" value="5" />
              </div>
              <div class="btns">
                <a href="">Comprar</a>
                <button class="car">
                  <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                  </lord-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Muçarela</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza7" name="fb_pizza7" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza7" name="fb_pizza7" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza7" name="fb_pizza7" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza7" name="fb_pizza7" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza7" name="fb_pizza7" value="5" />
              </div>
              <div class="btns">
                <a href="">Comprar</a>
                <button class="car">
                  <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                  </lord-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="img">
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Muçarela</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1_pizza8" name="fb_pizza8" value="1" />
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2_pizza8" name="fb_pizza8" value="2" />
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3_pizza8" name="fb_pizza8" value="3" />
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4_pizza8" name="fb_pizza8" value="4" />
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5_pizza8" name="fb_pizza8" value="5" />
              </div>
              <div class="btns">
                <a href="">Comprar</a>
                <button class="car">
                  <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                  </lord-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="criarpizza">
        <a href="">Crie uma do Zero</a>
      </section>
    </div>
  </main>
</body>

</html>