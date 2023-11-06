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
  <meta name=viewport content="width=device-width, initial-scale=1">
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
              <p>R$25,00</p>
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
              <p>R$20,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <img class="pizza" src="img/Pizza de cogumelos, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Cogumelos</h2>
              <p>R$26,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <p>R$28,50</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <img class="pizza" src="img/Pizza vegetais, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Vegetal</h2>
              <p>R$18,50</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
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
              <img class="pizza" src="img/Pizza de presunto, de cima.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Presunto</h2>
              <p>R$22,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza-presunto.php">Comprar</a>
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
              <img class="pizza" src="img/pizza_Marguerutti.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Marguerutti</h2>
              <p>R$20,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_marguerutti.php">Comprar</a>
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
              <img class="pizza" src="img/Pizza_havaina.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Havaiana</h2>
              <p>R$21,50</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_havaiana.php">Comprar</a>
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
              <img class="pizza" src="img/Pizza-chocolate.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Chocolate</h2>
              <p>R$20,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza-chocolate.php">Comprar</a>
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
              <img class="pizza" src="img/pizza-romeuEjulieta.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Romeu e Julieta</h2>
              <p>R$23,50</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_Romeu-julieta.php">Comprar</a>
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
            <div class="img" style="font-size: 170px;">
              <img class="pizza" src="img/pizza-banana.png" style="width: 150px; margin: 18px;" alt="" />
            </div>
            <div class="text">
              <h2>Banana com Canela</h2>
              <p>R$19,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_banana-canela.php">Comprar</a>
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
              <img class="pizza" src="img/pizza-chocolate-branco2.png" style="width: 150px;  margin: 10px;" alt="" />
            </div>
            <div class="text">
              <h2>Chocolate Branco</h2>
              <p>R$28,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_chocolate-branco.php">Comprar</a>
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
            <div class="img" style="font-size: 154px;">
              <img class="pizza" src="img/pizza-charge.png" style="width: 150px;  margin: 18px;" alt="" />
            </div>
            <div class="text">
              <h2>Doce de leite com Banana</h2>
              <p>R$24,50</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_doce-leite_banana.php">Comprar</a>
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
              <img class="pizza" src="img/pizza-cheesecake.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Cheesecake</h2>
              <p>R$35,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_cheesecake.php">Comprar</a>
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
              <img class="pizza" src="img/pizza-marshmallow.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Marshmallow</h2>
              <p>R$32,50</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_marshmallow.php">Comprar</a>
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
              <img class="pizza" src="img/pizza-negresco.png" width="100%" alt="" />
            </div>
            <div class="text">
              <h2>Negresco</h2>
              <p>R$32,00</p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <a href="pizza_negresco.php">Comprar</a>
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