<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalização</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/botao.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/checkbox-radio.css">
    <link rel="stylesheet" href="css/titulos.css">
</head>

<body>
    <?php
    include('navbar.php')
        ?>
    <div class="container">
        <form method="POST" action="">
            <div class="accordion_item">
                <div class="titulo">Personalize sua Pizza</div>
                <div class="linha"></div>
                <div class="accordion_header">
                    <div class="title">Massa</div>
                    <div class="icon">
                        +
                    </div>
                </div>
                <div class="linha"></div>
                <div class="accordion_content">
                    <div class="vertical-line"></div>
                    <div class="panel" id="accordion1">
                        <div class="alinhamento">
                            <div class="checkbox-group">
                                <label class="label" for="massa1">Tradicional</label>
                                <input type="checkbox" id="massa1" name="massa">
                            </div>
                            <div class="checkbox-group">
                                <label class="label" for="massa2">Napolitana</label>
                                <input type="checkbox" id="massa2" name="massa">
                            </div>
                            <div class="checkbox-group">
                                <label class="label" for="massa3">Nova-iorquina</label>
                                <input type="checkbox" id="massa3" name="massa">
                            </div>
                        </div>
                        <div class="alinhamento">
                            <div class="checkbox-group">
                                <label class="label" for="massa4">Toscana</label>
                                <input type="checkbox" id="massa4" name="massa">
                            </div>
                            <div class="checkbox-group">
                                <label class="label" for="massa5">Siciliana</label>
                                <input type="checkbox" id="massa5" name="massa">
                            </div>
                            <div class="checkbox-group">
                                <label class="label" for="massa6">Chicagoana</label>
                                <input type="checkbox" id="massa6" name="massa">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="accordion_item">
                <div class="linha"></div>
                <div class="accordion_header">
                    <div class="title">Molho</div>
                    <div class="icon">
                        +
                    </div>
                </div>
                <div class="linha"></div>
                <div class="accordion_content">
                    <div class="vertical-line"></div>
                    <div class="panel" id="accordion2">
                        <div class="alinhamento">
                            <div class="radio-group">
                                <label class="label" for="molho1">Molho de Tomate</label>
                                <input type="radio" id="molho1" name="molho">
                            </div>
                            <div class="radio-group">
                                <label class="label" for="molho2">Molho Gorgonzola</label>
                                <input type="radio" id="molho2" name="molho">
                            </div>
                            <div class="radio-group">
                                <label class="label" for="molho3">Molho Parisiense</label>
                                <input type="radio" id="molho3" name="molho">
                            </div>
                        </div>
                        <div class="alinhamento">
                            <div class="radio-group">
                                <label class="label" for="molho4">Molho de strogonoff</label>
                                <input type="radio" id="molho4" name="molho">
                            </div>
                            <div class="radio-group">
                                <label class="label" for="molho5">Molho picante</label>
                                <input type="radio" id="molho5" name="molho">
                            </div>
                            <div class="radio-group">
                                <label class="label" for="molho6">Molho Alfredo</label>
                                <input type="radio" id="molho6" name="molho">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="accordion_item">
                <div class="linha"></div>
                <div class="accordion_header">
                    <div class="title">Recheio</div>
                    <div class="icon">
                        +
                    </div>
                </div>
                <div class="linha"></div>
                <div class="accordion_content">
                    <div class="vertical-line"></div>
                    <div class="panel" id="accordion3">
                        <div class="recheio-container">
                            <div class="recheio-option">
                                <label class="label" for="recheio1">Mussarela</label>
                                <input type="checkbox" id="recheio1" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio2">Escarola</label>
                                <input type="checkbox" id="recheio2" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio3">Palmito</label>
                                <input type="checkbox" id="recheio3" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio4">Atum</label>
                                <input type="checkbox" id="recheio4" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio5">Camarão</label>
                                <input type="checkbox" id="recheio5" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio6">Calabresa</label>
                                <input type="checkbox" id="recheio6" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio7">Toscana</label>
                                <input type="checkbox" id="recheio7" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio8">Brócolis</label>
                                <input type="checkbox" id="recheio8" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio9">Pepperoni</label>
                                <input type="checkbox" id="recheio9" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio11">Lombinho</label>
                                <input type="checkbox" id="recheio11" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio13">Frango</label>
                                <input type="checkbox" id="recheio13" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio14">Bolonhesa</label>
                                <input type="checkbox" id="recheio14" name="recheio">
                            </div>
                            <div class="recheio-option">
                                <label class="label" for="recheio12">Frango com Catupiry</label>
                                <input type="checkbox" id="recheio12" name="recheio">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="accordion_item">
                <div class="linha"></div>
                <div class="accordion_header">
                    <div class="title">Borda</div>
                    <div class="icon">
                        +
                    </div>
                </div>
                <div class="linha"></div>
                <div class="accordion_content">
                    <div class="vertical-line"></div>
                    <div class="panel" id="accordion4">
                        <div class="borda-container">
                            <div class="borda-option">
                                <label class="label" for="borda1">Sem Recheio</label>
                                <input type="radio" id="borda1" name="Borda">
                            </div>
                            <div class="borda-option">
                                <label class="label" for="borda2">Cheddar</label>
                                <input type="radio" id="borda2" name="Borda">
                            </div>
                            <div class="borda-option">
                                <label class="label" for="borda3">Catupiry</label>
                                <input type="radio" id="borda3" name="Borda">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <button class="btn">
        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
        </svg>
        <span>Personalizar</span>
    </button>
    <script src="script.js"></script>
</body>

</html>