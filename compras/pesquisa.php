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

</head>
<body>
    <?php
    if (isset($_POST['busca'])) {
        $pesquisa = $_POST['busca'];
    }else{
        $pesquisa = "";
    }

    include "connexion.php";

    $sql = "SELECT * FROM clientes WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($connect, $sql);

    while($linha = mysqli_fetch_assoc($dados)){
        foreach($linha as $key => $value){
            echo "$key: $value<br>";
        }
    }
    ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Pesquisa Clientes</a>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </ul>
        <form class="d-flex" action="pesquisa.php" method="POST">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Larry </td>
    </tr>
  </tbody>
</table>
</body>  