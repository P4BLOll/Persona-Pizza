<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Formulário</title>
</head>
<body>
    <div class="container" id="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary, fundo" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active disabled" aria-current="page" href="#">Cadastrar</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="consultar.php">Consultar</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="itens">
      <form  method="POST" action="cadastrar.php">
                  <h2>Cadastrar - Agendamento de Potencias Clientes</h2>
                  <p>Sistema utilizado para agendamento de serviços.</p>
                  <div class="mb-3">
                      <label for="nome" class="form-label">Nome:</label>
                      <input type="text" class="form-control" name="nome" id="nome" required>
                  </div>
                  <div class="mb-3">
                      <label for="descricao" class="form-label">Descrição:</label>
                      <input type="text" class="form-control" name="descricao" id="descricao" required>
                  </div>
                  <div class="mb-3">
                      <label for="preco" class="form-label">Preço:</label>
                      <input type="text" class="form-control" name="preco" id="preco" required>
                  </div>
                  <div class="mb-3">
                      <label for="foto1" class="form-label">Foto 1:</label>
                      <input type="file" class="form-control" name="foto1" id="foto1" required>
                  </div>
                  <div class="mb-3">
                      <label for="foto2" class="form-label">Foto 2:</label>
                      <input type="file" class="form-control" name="foto2" id="foto2" required>
                  </div>
                  <div class="mb-3">
                      <input  class="btn btn-primary" type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
                  </div>
      </form>        
      </div>  
    </div>
</body>
</html>
