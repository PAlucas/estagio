<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link href="/compras/css/bootstrap.min.css" rel="stylesheet">
    <script src="/compras/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        body{
            height: 100vh;
        }
        #buttons{
            display: flex;
            align-items:center;
            justify-content: space-around;
            padding: 5px;
            height: 90%;
        }
        #buttons {
            justify-self:center;
            
        }
    </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">CRUD</a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> -->
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pesquisa_clientes.php">Procurar Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pesquisa_produtos.php">Procurar Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pesquisa_pedidos.php">Procurar Pedidos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="buttons">
    <a type="button" class="btn btn-primary btn-lg" href="cadastrar_clientes.php">Cadastrar Clientes</a>
    <a type="button" class="btn btn-primary btn-lg" href="cadastrar_produtos.php">Cadastrar Produtos</a>
    <a type="button" class="btn btn-primary btn-lg" href="cadastrar_pedidos.php">Cadastrar Pedidos</a>
  </div>
</body>
</html>