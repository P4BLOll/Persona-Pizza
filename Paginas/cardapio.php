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
              <img class="pizza" src="img/Pizza de pepperoni, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <img class="pizza" src="img/Pizza de azeitona, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Azeitona</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_peperoni.php">Comprar</a>
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
              <img class="pizza" src="img/Pizza de cogumelos, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Cogumelos</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_peperoni.php">Comprar</a>
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
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_peperoni.php">Comprar</a>
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
              <img class="pizza" src="img/Pizza vegetais, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Vegetal</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_peperoni.php">Comprar</a>
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
              <img class="pizza" src="img/Pizza de presunto, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Presunto</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_peperoni.php">Comprar</a>
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
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_peperoni.php">Comprar</a>
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
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_peperoni.php">Comprar</a>
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
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_peperoni.php">Comprar</a>
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
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <img class="pizza" src="img/pizza.svg" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Peperoni</h2>
              <p>R$30,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
      </div>
      <section class="criarpizza">
        <a href="">Crie uma do Zero</a>
      </section>
    </div>
  </main>
</body>

</html>