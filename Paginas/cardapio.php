<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <title>PersonaPizza</title>
  </head>

  <body>
    <!-- SideBar -->
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">PersonaPizza</span>
        <ul>
          <li>
            <a href="home.php">Home</a>
            <a href="perfil.php">Conta</a>
            <a href="cardapio.php">Cardápio</a>
            <a href="">Social</a>
            <a href="">Carrinho</a>
          </li>
          <div>
            <a href="index.php" class="nav-link">
              <i class="bx bx-log-in icon"></i>
              <span class="link">Entrar</span>
            </a>
          </div>
        </ul>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-arrow-back menu-icon"></i>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="home.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Home</span>
              </a>
            </li>
            <li class="list">
              <a href="perfil.php" class="nav-link">
                <i class="bx bx-user icon"></i>
                <span class="link">Conta</span>
              </a>
            </li>
            <li class="list">
              <a href="cardapio.php" class="nav-link">
                <i class="bx bx-category icon"></i>
                <span class="link">Cardápio</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-cart icon"></i>
                <span class="link">Carrinho</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-message-square-dots icon"></i>
                <span class="link">Blog</span>
              </a>
            </li>
          </ul>

          <div class="bottom-cotent">
            <li class="list sair">
              <a href="index.php" class="nav-link sair-a">
                <i class="bx bx-log-in icon"></i>
                <span class="link">Entrar</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <section class="overlay"></section>
    <!-- fundo escuro -->
    <main>
      <div class="Cardapio">
        <section>
          <div class="information">
            <lord-icon
              src="https://cdn.lordicon.com/ncxoarcp.json"
              trigger="loop"
              delay="1000"
              colors="primary:#ffffff"
              state="hover"
              style="width: 30px; height: 30px; position: relative"
              class="icon"
            >
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
                <h2>Muçarela</h2>
                <p>R$30,00</p>
                <div class="estrelas">
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza1"
                    name="fb_pizza1"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza1"
                    name="fb_pizza1"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza1"
                    name="fb_pizza1"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza1"
                    name="fb_pizza1"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza1"
                    name="fb_pizza1"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza2"
                    name="fb_pizza2"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza2"
                    name="fb_pizza2"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza2"
                    name="fb_pizza2"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza2"
                    name="fb_pizza2"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza2"
                    name="fb_pizza2"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza3"
                    name="fb_pizza3"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza3"
                    name="fb_pizza3"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza3"
                    name="fb_pizza3"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza3"
                    name="fb_pizza3"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza3"
                    name="fb_pizza3"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza4"
                    name="fb_pizza4"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza4"
                    name="fb_pizza4"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza4"
                    name="fb_pizza4"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza4"
                    name="fb_pizza4"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza4"
                    name="fb_pizza4"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza5"
                    name="fb_pizza5"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza5"
                    name="fb_pizza5"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza5"
                    name="fb_pizza5"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza5"
                    name="fb_pizza5"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza5"
                    name="fb_pizza5"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza6"
                    name="fb_pizza6"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_piza6"
                    name="fb_pizza6"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_piza6"
                    name="fb_pizza6"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_piza6"
                    name="fb_pizza6"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_piza6"
                    name="fb_pizza6"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza7"
                    name="fb_pizza7"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza7"
                    name="fb_pizza7"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza7"
                    name="fb_pizza7"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza7"
                    name="fb_pizza7"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza7"
                    name="fb_pizza7"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza8"
                    name="fb_pizza8"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza8"
                    name="fb_pizza8"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza8"
                    name="fb_pizza8"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza8"
                    name="fb_pizza8"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza8"
                    name="fb_pizza8"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza1"
                    name="fb_pizza1"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza1"
                    name="fb_pizza1"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza1"
                    name="fb_pizza1"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza1"
                    name="fb_pizza1"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza1"
                    name="fb_pizza1"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza2"
                    name="fb_pizza2"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza2"
                    name="fb_pizza2"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza2"
                    name="fb_pizza2"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza2"
                    name="fb_pizza2"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza2"
                    name="fb_pizza2"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza3"
                    name="fb_pizza3"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza3"
                    name="fb_pizza3"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza3"
                    name="fb_pizza3"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza3"
                    name="fb_pizza3"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza3"
                    name="fb_pizza3"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza4"
                    name="fb_pizza4"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza4"
                    name="fb_pizza4"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza4"
                    name="fb_pizza4"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza4"
                    name="fb_pizza4"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza4"
                    name="fb_pizza4"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza5"
                    name="fb_pizza5"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza5"
                    name="fb_pizza5"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza5"
                    name="fb_pizza5"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza5"
                    name="fb_pizza5"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza5"
                    name="fb_pizza5"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza6"
                    name="fb_pizza6"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_piza6"
                    name="fb_pizza6"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_piza6"
                    name="fb_pizza6"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_piza6"
                    name="fb_pizza6"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_piza6"
                    name="fb_pizza6"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza7"
                    name="fb_pizza7"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza7"
                    name="fb_pizza7"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza7"
                    name="fb_pizza7"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza7"
                    name="fb_pizza7"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza7"
                    name="fb_pizza7"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
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
                  <input
                    type="radio"
                    id="cm_star-empty"
                    name="fb"
                    value=""
                    checked
                  />
                  <label for="cm_star-1"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-1_pizza8"
                    name="fb_pizza8"
                    value="1"
                  />
                  <label for="cm_star-2"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-2_pizza8"
                    name="fb_pizza8"
                    value="2"
                  />
                  <label for="cm_star-3"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-3_pizza8"
                    name="fb_pizza8"
                    value="3"
                  />
                  <label for="cm_star-4"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-4_pizza8"
                    name="fb_pizza8"
                    value="4"
                  />
                  <label for="cm_star-5"><i class="fa"></i></label>
                  <input
                    type="radio"
                    id="cm_star-5_pizza8"
                    name="fb_pizza8"
                    value="5"
                  />
                </div>
                <div class="btns">
                  <a href="">Comprar</a>
                  <button class="car">
                    <lord-icon
                      src="https://cdn.lordicon.com/udbbfuld.json"
                      trigger="hover"
                      colors="primary:#ffffff"
                      style="width: 25px; height: 25px"
                    >
                    </lord-icon>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // -->
        <section class="criarpizza">
          <a href="criarpizza/index.html">Crie uma do Zero</a>
        </section>
      </div>
    </main>
  </body>
</html>
<!-- Seu código HTML -->

<script>
  const navBar = document.querySelector("nav"),
    menuBtns = document.querySelectorAll(".menu-icon"),
    overlay = document.querySelector(".overlay");

  menuBtns.forEach((menuBtn) => {
    menuBtn.addEventListener("click", () => {
      navBar.classList.toggle("open");
    });
  });

  overlay.addEventListener("click", () => {
    navBar.classList.remove("open");
  });

  AOS.init();
</script>