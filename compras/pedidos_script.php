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
        display:block;
      }
      a{
       padding-left: 5px; 
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Pedido</a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> -->
      </button>
  </nav>
  <div class="mb-3 p-3" id="pedidos">
    <?php
      include "connexion_pedidos.php";
      
      $produto = $_POST['produto'];
      $pessoa = $_POST['pessoa'];

      $sql = "INSERT INTO `pedidos`(`produto`, `pessoa`) VALUES ('$produto', '$pessoa' )";
      if(mysqli_query($con, $sql)){
        echo "$produto cadastrado com sucesso";
      }else{
        echo "$produto não foi cadastrado";
      }
    ?>
    <a href="index.php">voltar</a>
  </div>
</body>
</html>