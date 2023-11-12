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
            <?php

            $pizza_id = 1; // ID da pizza que você deseja exibir

            try {
              $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
              $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
              $stmt->execute();

              $row = $stmt->fetch();

              if ($row) {
                $nome = $row["nome"];
                $preco = $row["preco"];
                $url_imagem = $row["url_imagem"];
                $em_estoque = $row["em_estoque"];
              } else {
                echo "Pizza não encontrada";
              }
            } catch (PDOException $e) {
              echo 'Erro ao executar a consulta: ' . $e->getMessage();
            }

            ?>

            <div class="img">
              <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
            </div>
            <div class="text">
              <h2><?php echo $nome; ?></h2>
              <p>R$<?php echo $preco; ?></p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <?php if ($em_estoque) : ?>
                  <a href="pizza_peperoni.php">Comprar</a>
                  <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                    <input type="hidden" name="pizza_type" value="Comum">
                    <button class="car" type="submit" name="add_to_cart">
                      <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                      </lord-icon>
                    </button>
                  </form>
                <?php else : ?>
                  <button disabled>Esgotada</button>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>



        <div class="cards">
          <div class="card">
            <?php

            $pizza_id = 4; // ID da pizza que você deseja exibir

            try {
              $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
              $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
              $stmt->execute();

              $row = $stmt->fetch();

              if ($row) {
                $nome = $row["nome"];
                $preco = $row["preco"];
                $url_imagem = $row["url_imagem"];
                $em_estoque = $row["em_estoque"];
              } else {
                echo "Pizza não encontrada";
              }
            } catch (PDOException $e) {
              echo 'Erro ao executar a consulta: ' . $e->getMessage();
            }

            ?>

            <div class="img">
              <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
            </div>
            <div class="text">
              <h2><?php echo $nome; ?></h2>
              <p>R$<?php echo $preco; ?></p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <?php if ($em_estoque) : ?>
                  <a href="pizza_azeitona.php">Comprar</a>
                  <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                    <input type="hidden" name="pizza_type" value="Comum">
                    <button class="car" type="submit" name="add_to_cart">
                      <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                      </lord-icon>
                    </button>
                  </form>
                <?php else : ?>
                  <button disabled>Esgotada</button>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <?php

            $pizza_id = 5; // ID da pizza que você deseja exibir

            try {
              $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
              $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
              $stmt->execute();

              $row = $stmt->fetch();

              if ($row) {
                $nome = $row["nome"];
                $preco = $row["preco"];
                $url_imagem = $row["url_imagem"];
                $em_estoque = $row["em_estoque"];
              } else {
                echo "Pizza não encontrada";
              }
            } catch (PDOException $e) {
              echo 'Erro ao executar a consulta: ' . $e->getMessage();
            }

            ?>

            <div class="img">
              <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
            </div>
            <div class="text">
              <h2><?php echo $nome; ?></h2>
              <p>R$<?php echo $preco; ?></p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <?php if ($em_estoque) : ?>
                  <a href="pizza_cogumelos.php">Comprar</a>
                  <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                    <input type="hidden" name="pizza_type" value="Comum">
                    <button class="car" type="submit" name="add_to_cart">
                      <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                      </lord-icon>
                    </button>
                  </form>
                <?php else : ?>
                  <button disabled>Esgotada</button>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="cards">
          <div class="card">
            <?php

            $pizza_id = 6; // ID da pizza que você deseja exibir

            try {
              $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
              $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
              $stmt->execute();

              $row = $stmt->fetch();

              if ($row) {
                $nome = $row["nome"];
                $preco = $row["preco"];
                $url_imagem = $row["url_imagem"];
                $em_estoque = $row["em_estoque"];
              } else {
                echo "Pizza não encontrada";
              }
            } catch (PDOException $e) {
              echo 'Erro ao executar a consulta: ' . $e->getMessage();
            }

            ?>

            <div class="img">
              <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
            </div>
            <div class="text">
              <h2><?php echo $nome; ?></h2>
              <p>R$<?php echo $preco; ?></p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <?php if ($em_estoque) : ?>
                  <a href="pizza_queijo.php">Comprar</a>
                  <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                    <input type="hidden" name="pizza_type" value="Comum">
                    <button class="car" type="submit" name="add_to_cart">
                      <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                      </lord-icon>
                    </button>
                  </form>
                <?php else : ?>
                  <button disabled>Esgotada</button>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="cards">
          <div class="card">
            <?php

            $pizza_id = 7; // ID da pizza que você deseja exibir

            try {
              $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
              $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
              $stmt->execute();

              $row = $stmt->fetch();

              if ($row) {
                $nome = $row["nome"];
                $preco = $row["preco"];
                $url_imagem = $row["url_imagem"];
                $em_estoque = $row["em_estoque"];
              } else {
                echo "Pizza não encontrada";
              }
            } catch (PDOException $e) {
              echo 'Erro ao executar a consulta: ' . $e->getMessage();
            }

            ?>

            <div class="img">
              <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
            </div>
            <div class="text">
              <h2><?php echo $nome; ?></h2>
              <p>R$<?php echo $preco; ?></p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <?php if ($em_estoque) : ?>
                  <a href="pizza_vegetariana.php">Comprar</a>
                  <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                    <input type="hidden" name="pizza_type" value="Comum">
                    <button class="car" type="submit" name="add_to_cart">
                      <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                      </lord-icon>
                    </button>
                  </form>
                <?php else : ?>
                  <button disabled>Esgotada</button>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="cards">
          <div class="card">
            <?php

            $pizza_id = 8; // ID da pizza que você deseja exibir

            try {
              $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
              $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
              $stmt->execute();

              $row = $stmt->fetch();

              if ($row) {
                $nome = $row["nome"];
                $preco = $row["preco"];
                $url_imagem = $row["url_imagem"];
                $em_estoque = $row["em_estoque"];
              } else {
                echo "Pizza não encontrada";
              }
            } catch (PDOException $e) {
              echo 'Erro ao executar a consulta: ' . $e->getMessage();
            }

            ?>

            <div class="img">
              <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
            </div>
            <div class="text">
              <h2><?php echo $nome; ?></h2>
              <p>R$<?php echo $preco; ?></p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <?php if ($em_estoque) : ?>
                  <a href="pizza-presunto.php">Comprar</a>
                  <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                    <input type="hidden" name="pizza_type" value="Comum">
                    <button class="car" type="submit" name="add_to_cart">
                      <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                      </lord-icon>
                    </button>
                  </form>
                <?php else : ?>
                  <button disabled>Esgotada</button>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="cards">
          <div class="card">
            <?php

            $pizza_id = 9; // ID da pizza que você deseja exibir

            try {
              $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
              $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
              $stmt->execute();

              $row = $stmt->fetch();

              if ($row) {
                $nome = $row["nome"];
                $preco = $row["preco"];
                $url_imagem = $row["url_imagem"];
                $em_estoque = $row["em_estoque"];
              } else {
                echo "Pizza não encontrada";
              }
            } catch (PDOException $e) {
              echo 'Erro ao executar a consulta: ' . $e->getMessage();
            }

            ?>

            <div class="img">
              <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
            </div>
            <div class="text">
              <h2><?php echo $nome; ?></h2>
              <p>R$<?php echo $preco; ?></p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <?php if ($em_estoque) : ?>
                  <a href="pizza_marguerutti.php">Comprar</a>
                  <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                    <input type="hidden" name="pizza_type" value="Comum">
                    <button class="car" type="submit" name="add_to_cart">
                      <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                      </lord-icon>
                    </button>
                  </form>
                <?php else : ?>
                  <button disabled>Esgotada</button>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="cards">
          <div class="card">
            <?php

            $pizza_id = 23; // ID da pizza que você deseja exibir

            try {
              $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
              $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
              $stmt->execute();

              $row = $stmt->fetch();

              if ($row) {
                $nome = $row["nome"];
                $preco = $row["preco"];
                $url_imagem = $row["url_imagem"];
                $em_estoque = $row["em_estoque"];
              } else {
                echo "Pizza não encontrada";
              }
            } catch (PDOException $e) {
              echo 'Erro ao executar a consulta: ' . $e->getMessage();
            }

            ?>

            <div class="img">
              <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
            </div>
            <div class="text">
              <h2><?php echo $nome; ?></h2>
              <p>R$<?php echo $preco; ?></p>
              <div class="estrelas">
                <i class='bx bxs-star'></i>
                <p>5</p>
              </div>
              <div class="btns">
                <?php if ($em_estoque) : ?>
                  <a href="pizza_havaiana.php">Comprar</a>
                  <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                    <input type="hidden" name="pizza_type" value="Comum">
                    <button class="car" type="submit" name="add_to_cart">
                      <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                      </lord-icon>
                    </button>
                  </form>
                <?php else : ?>
                  <button disabled>Esgotada</button>
                <?php endif; ?>
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
              <?php

              $pizza_id = 10; // ID da pizza que você deseja exibir

              try {
                $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
                $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
                $stmt->execute();

                $row = $stmt->fetch();

                if ($row) {
                  $nome = $row["nome"];
                  $preco = $row["preco"];
                  $url_imagem = $row["url_imagem"];
                  $em_estoque = $row["em_estoque"];
                } else {
                  echo "Pizza não encontrada";
                }
              } catch (PDOException $e) {
                echo 'Erro ao executar a consulta: ' . $e->getMessage();
              }

              ?>

              <div class="img">
                <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
              </div>
              <div class="text">
                <h2><?php echo $nome; ?></h2>
                <p>R$<?php echo $preco; ?></p>
                <div class="estrelas">
                  <i class='bx bxs-star'></i>
                  <p>5</p>
                </div>
                <div class="btns">
                  <?php if ($em_estoque) : ?>
                    <a href="pizza-chocolate.php">Comprar</a>
                    <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                      <input type="hidden" name="pizza_type" value="Comum">
                      <button class="car" type="submit" name="add_to_cart">
                        <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                        </lord-icon>
                      </button>
                    </form>
                  <?php else : ?>
                    <button disabled>Esgotada</button>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>


          <div class="cards">
            <div class="card">
              <?php

              $pizza_id = 11; // ID da pizza que você deseja exibir

              try {
                $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
                $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
                $stmt->execute();

                $row = $stmt->fetch();

                if ($row) {
                  $nome = $row["nome"];
                  $preco = $row["preco"];
                  $url_imagem = $row["url_imagem"];
                  $em_estoque = $row["em_estoque"];
                } else {
                  echo "Pizza não encontrada";
                }
              } catch (PDOException $e) {
                echo 'Erro ao executar a consulta: ' . $e->getMessage();
              }

              ?>

              <div class="img">
                <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
              </div>
              <div class="text">
                <h2><?php echo $nome; ?></h2>
                <p>R$<?php echo $preco; ?></p>
                <div class="estrelas">
                  <i class='bx bxs-star'></i>
                  <p>5</p>
                </div>
                <div class="btns">
                  <?php if ($em_estoque) : ?>
                    <a href="pizza_Romeu-julieta.php">Comprar</a>
                    <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                      <input type="hidden" name="pizza_type" value="Comum">
                      <button class="car" type="submit" name="add_to_cart">
                        <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                        </lord-icon>
                      </button>
                    </form>
                  <?php else : ?>
                    <button disabled>Esgotada</button>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="cards">
            <div class="card">
              <?php

              $pizza_id = 12; // ID da pizza que você deseja exibir

              try {
                $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
                $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
                $stmt->execute();

                $row = $stmt->fetch();

                if ($row) {
                  $nome = $row["nome"];
                  $preco = $row["preco"];
                  $url_imagem = $row["url_imagem"];
                  $em_estoque = $row["em_estoque"];
                } else {
                  echo "Pizza não encontrada";
                }
              } catch (PDOException $e) {
                echo 'Erro ao executar a consulta: ' . $e->getMessage();
              }

              ?>

              <div class="img">
                <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
              </div>
              <div class="text">
                <h2><?php echo $nome; ?></h2>
                <p>R$<?php echo $preco; ?></p>
                <div class="estrelas">
                  <i class='bx bxs-star'></i>
                  <p>5</p>
                </div>
                <div class="btns">
                  <?php if ($em_estoque) : ?>
                    <a href="pizza_banana-canela.php">Comprar</a>
                    <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                      <input type="hidden" name="pizza_type" value="Comum">
                      <button class="car" type="submit" name="add_to_cart">
                        <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                        </lord-icon>
                      </button>
                    </form>
                  <?php else : ?>
                    <button disabled>Esgotada</button>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="cards">
            <div class="card">
              <?php

              $pizza_id = 13; // ID da pizza que você deseja exibir

              try {
                $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
                $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
                $stmt->execute();

                $row = $stmt->fetch();

                if ($row) {
                  $nome = $row["nome"];
                  $preco = $row["preco"];
                  $url_imagem = $row["url_imagem"];
                  $em_estoque = $row["em_estoque"];
                } else {
                  echo "Pizza não encontrada";
                }
              } catch (PDOException $e) {
                echo 'Erro ao executar a consulta: ' . $e->getMessage();
              }

              ?>

              <div class="img">
                <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
              </div>
              <div class="text">
                <h2><?php echo $nome; ?></h2>
                <p>R$<?php echo $preco; ?></p>
                <div class="estrelas">
                  <i class='bx bxs-star'></i>
                  <p>5</p>
                </div>
                <div class="btns">
                  <?php if ($em_estoque) : ?>
                    <a href="pizza_chocolate-branco.php">Comprar</a>
                    <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                      <input type="hidden" name="pizza_type" value="Comum">
                      <button class="car" type="submit" name="add_to_cart">
                        <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                        </lord-icon>
                      </button>
                    </form>
                  <?php else : ?>
                    <button disabled>Esgotada</button>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="cards">
            <div class="card">
              <?php

              $pizza_id = 14; // ID da pizza que você deseja exibir

              try {
                $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
                $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
                $stmt->execute();

                $row = $stmt->fetch();

                if ($row) {
                  $nome = $row["nome"];
                  $preco = $row["preco"];
                  $url_imagem = $row["url_imagem"];
                  $em_estoque = $row["em_estoque"];
                } else {
                  echo "Pizza não encontrada";
                }
              } catch (PDOException $e) {
                echo 'Erro ao executar a consulta: ' . $e->getMessage();
              }

              ?>

              <div class="img">
                <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
              </div>
              <div class="text">
                <h2><?php echo $nome; ?></h2>
                <p>R$<?php echo $preco; ?></p>
                <div class="estrelas">
                  <i class='bx bxs-star'></i>
                  <p>5</p>
                </div>
                <div class="btns">
                  <?php if ($em_estoque) : ?>
                    <a href="pizza_doce-leite_banana.php">Comprar</a>
                    <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                      <input type="hidden" name="pizza_type" value="Comum">
                      <button class="car" type="submit" name="add_to_cart">
                        <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                        </lord-icon>
                      </button>
                    </form>
                  <?php else : ?>
                    <button disabled>Esgotada</button>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="cards">
            <div class="card">
              <?php

              $pizza_id = 16; // ID da pizza que você deseja exibir

              try {
                $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
                $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
                $stmt->execute();

                $row = $stmt->fetch();

                if ($row) {
                  $nome = $row["nome"];
                  $preco = $row["preco"];
                  $url_imagem = $row["url_imagem"];
                  $em_estoque = $row["em_estoque"];
                } else {
                  echo "Pizza não encontrada";
                }
              } catch (PDOException $e) {
                echo 'Erro ao executar a consulta: ' . $e->getMessage();
              }

              ?>

              <div class="img">
                <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
              </div>
              <div class="text">
                <h2><?php echo $nome; ?></h2>
                <p>R$<?php echo $preco; ?></p>
                <div class="estrelas">
                  <i class='bx bxs-star'></i>
                  <p>5</p>
                </div>
                <div class="btns">
                  <?php if ($em_estoque) : ?>
                    <a href="pizza_cheesecake.php">Comprar</a>
                    <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                      <input type="hidden" name="pizza_type" value="Comum">
                      <button class="car" type="submit" name="add_to_cart">
                        <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                        </lord-icon>
                      </button>
                    </form>
                  <?php else : ?>
                    <button disabled>Esgotada</button>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="cards">
            <div class="card">
              <?php

              $pizza_id = 17; // ID da pizza que você deseja exibir

              try {
                $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
                $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
                $stmt->execute();

                $row = $stmt->fetch();

                if ($row) {
                  $nome = $row["nome"];
                  $preco = $row["preco"];
                  $url_imagem = $row["url_imagem"];
                  $em_estoque = $row["em_estoque"];
                } else {
                  echo "Pizza não encontrada";
                }
              } catch (PDOException $e) {
                echo 'Erro ao executar a consulta: ' . $e->getMessage();
              }

              ?>

              <div class="img">
                <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
              </div>
              <div class="text">
                <h2><?php echo $nome; ?></h2>
                <p>R$<?php echo $preco; ?></p>
                <div class="estrelas">
                  <i class='bx bxs-star'></i>
                  <p>5</p>
                </div>
                <div class="btns">
                  <?php if ($em_estoque) : ?>
                    <a href="pizza_marshmallow.php">Comprar</a>
                    <form action="add_to_cart.php" method="post">
                      <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                      <input type="hidden" name="pizza_type" value="Comum">
                      <button class="car" type="submit" name="add_to_cart">
                        <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                        </lord-icon>
                      </button>
                    </form>
                  <?php else : ?>
                    <button disabled>Esgotada</button>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="cards">
            <div class="card">
              <?php

              $pizza_id = 18; // ID da pizza que você deseja exibir

              try {
                $stmt = $PDO->prepare("SELECT nome, preco, url_imagem, em_estoque FROM pizzas_comum WHERE id = :pizza_id");
                $stmt->bindParam(':pizza_id', $pizza_id, PDO::PARAM_INT);
                $stmt->execute();

                $row = $stmt->fetch();

                if ($row) {
                  $nome = $row["nome"];
                  $preco = $row["preco"];
                  $url_imagem = $row["url_imagem"];
                  $em_estoque = $row["em_estoque"];
                } else {
                  echo "Pizza não encontrada";
                }
              } catch (PDOException $e) {
                echo 'Erro ao executar a consulta: ' . $e->getMessage();
              }

              ?>

              <div class="img">
                <img class="pizza" src="<?php echo $url_imagem; ?>" width="100%" alt="" />
              </div>
              <div class="text">
                <h2><?php echo $nome; ?></h2>
                <p>R$<?php echo $preco; ?></p>
                <div class="estrelas">
                  <i class='bx bxs-star'></i>
                  <p>5</p>
                </div>
                <div class="btns">
                  <?php if ($em_estoque) : ?>
                    <a href="pizza_negresco.php">Comprar</a>
                    <form action="adicionar_ao_carrinho.php" method="post">
                      <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                      <input type="hidden" name="pizza_type" value="Comum">
                      <button class="car" type="submit" name="add_to_cart">
                        <lord-icon src="https://cdn.lordicon.com/udbbfuld.json" trigger="hover" colors="primary:#ffffff" style="width: 25px; height: 25px">
                        </lord-icon>
                      </button>
                    </form>
                  <?php else : ?>
                    <button disabled>Esgotada</button>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

        </div>
        <section class="criarpizza">
          <a href="Criar_Pizza.php">Crie uma do Zero</a>
        </section>
      </div>
  </main>
</body>

</html>