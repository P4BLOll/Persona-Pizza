<?php
session_start();
require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/adm.css">
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
    <title>PersonaPizza</title>
</head>

<body>
    <main>
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
        <div class="Cardapio">

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
                            <form action="editar_pizza.php" method="post">
                                <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                <label for="estoque">Estoque:</label>
                                <select class="InputADM" name="estoque">
                                    <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                    <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                </select>
                                <br>
                                <label for="preco">Preço:</label>
                                <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                <br>
                                <input class="InputADM" type="submit">
                            </form>
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
                            <form action="editar_pizza.php" method="post">
                                <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                <label for="estoque">Estoque:</label>
                                <select class="InputADM" name="estoque">
                                    <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                    <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                </select>
                                <br>
                                <label for="preco">Preço:</label>
                                <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                <br>
                                <input class="InputADM" type="submit">
                            </form>
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
                            <form action="editar_pizza.php" method="post">
                                <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                <label for="estoque">Estoque:</label>
                                <select class="InputADM" name="estoque">
                                    <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                    <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                </select>
                                <br>
                                <label for="preco">Preço:</label>
                                <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                <br>
                                <input class="InputADM" type="submit">
                            </form>
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
                            <form action="editar_pizza.php" method="post">
                                <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                <label for="estoque">Estoque:</label>
                                <select class="InputADM" name="estoque">
                                    <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                    <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                </select>
                                <br>
                                <label for="preco">Preço:</label>
                                <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                <br>
                                <input class="InputADM" type="submit">
                            </form>
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
                            <form action="editar_pizza.php" method="post">
                                <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                <label for="estoque">Estoque:</label>
                                <select class="InputADM" name="estoque">
                                    <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                    <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                </select>
                                <br>
                                <label for="preco">Preço:</label>
                                <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                <br>
                                <input class="InputADM" type="submit">
                            </form>
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
                            <form action="editar_pizza.php" method="post">
                                <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                <label for="estoque">Estoque:</label>
                                <select class="InputADM" name="estoque">
                                    <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                    <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                </select>
                                <br>
                                <label for="preco">Preço:</label>
                                <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                <br>
                                <input class="InputADM" type="submit">
                            </form>
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
                            <form action="editar_pizza.php" method="post">
                                <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                <label for="estoque">Estoque:</label>
                                <select class="InputADM" name="estoque">
                                    <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                    <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                </select>
                                <br>
                                <label for="preco">Preço:</label>
                                <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                <br>
                                <input class="InputADM" type="submit">
                            </form>
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
                            <form action="editar_pizza.php" method="post">
                                <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                <label for="estoque">Estoque:</label>
                                <select class="InputADM" name="estoque">
                                    <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                    <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                </select>
                                <br>
                                <label for="preco">Preço:</label>
                                <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                <br>
                                <input class="InputADM" type="submit">
                            </form>
                        </div>
                    </div>
                </div>

                <!-- // -->
                <div class="doces">
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
                                <form action="editar_pizza.php" method="post">
                                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                    <label for="estoque">Estoque:</label>
                                    <select class="InputADM" name="estoque">
                                        <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                        <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                    </select>
                                    <br>
                                    <label for="preco">Preço:</label>
                                    <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                    <br>
                                    <input class="InputADM" type="submit">
                                </form>
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
                                <form action="editar_pizza.php" method="post">
                                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                    <label for="estoque">Estoque:</label>
                                    <select class="InputADM" name="estoque">
                                        <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                        <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                    </select>
                                    <br>
                                    <label for="preco">Preço:</label>
                                    <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                    <br>
                                    <input class="InputADM" type="submit">
                                </form>
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
                                <form action="editar_pizza.php" method="post">
                                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                    <label for="estoque">Estoque:</label>
                                    <select class="InputADM" name="estoque">
                                        <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                        <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                    </select>
                                    <br>
                                    <label for="preco">Preço:</label>
                                    <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                    <br>
                                    <input class="InputADM" type="submit">
                                </form>
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
                                <form action="editar_pizza.php" method="post">
                                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                    <label for="estoque">Estoque:</label>
                                    <select class="InputADM" name="estoque">
                                        <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                        <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                    </select>
                                    <br>
                                    <label for="preco">Preço:</label>
                                    <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                    <br>
                                    <input class="InputADM" type="submit">
                                </form>
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
                                <form action="editar_pizza.php" method="post">
                                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                    <label for="estoque">Estoque:</label>
                                    <select class="InputADM" name="estoque">
                                        <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                        <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                    </select>
                                    <br>
                                    <label for="preco">Preço:</label>
                                    <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                    <br>
                                    <input class="InputADM" type="submit">
                                </form>
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
                                <form action="editar_pizza.php" method="post">
                                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                    <label for="estoque">Estoque:</label>
                                    <select class="InputADM" name="estoque">
                                        <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                        <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                    </select>
                                    <br>
                                    <label for="preco">Preço:</label>
                                    <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                    <br>
                                    <input class="InputADM" type="submit">
                                </form>
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
                                <form action="editar_pizza.php" method="post">
                                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                    <label for="estoque">Estoque:</label>
                                    <select class="InputADM" name="estoque">
                                        <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                        <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                    </select>
                                    <br>
                                    <label for="preco">Preço:</label>
                                    <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                    <br>
                                    <input class="InputADM" type="submit">
                                </form>
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
                                <form action="editar_pizza.php" method="post">
                                    <input type="hidden" name="pizza_id" value="<?php echo $pizza_id; ?>">
                                    <label for="estoque">Estoque:</label>
                                    <select class="InputADM" name="estoque">
                                        <option class="InputADM" value="1" <?php if ($em_estoque == 1) echo "selected"; ?>>Tem</option>
                                        <option class="InputADM" value="0" <?php if ($em_estoque == 0) echo "selected"; ?>>Não Tem</option>
                                    </select>
                                    <br>
                                    <label for="preco">Preço:</label>
                                    <input class="InputADM" type="number" step="0.01" name="preco" value="<?php echo $preco; ?>">
                                    <br>
                                    <input class="InputADM" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>