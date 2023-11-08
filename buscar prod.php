


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <title>BUSCAR PRODUTO - Sr Alimentos</title>
  <style>
    body {
      background-image: url("imglogo/logosc.jpg");
      background-size: cover;
    }

    .conteudo
    {
      min-height : calc(100vh - 180px);
    }

    footer
    {
      height: 180px;
    }


  </style>
</head>

<body style="text-align:center; ">

<?php include 'menuCli.php'; ?>
<?php include 'conexao.php'; ?>

  

<div class="conteudo container">
  <div class="row">
    <div class="col-sm-8 mx-auto p-3 border border-success mt-3 rounded">
    <h1 style='color:#1c8454;'>PROCURE SEU PRODUTO AQUI</h1>
    
  <form method="post" action="consultafiltroCli.php" >

    <div class="mb-3">
      <label for="nome" class="form-label" style='font-weight: bold';>NOME DO PRODUTO</label>
      <input type="text" name="nome" id="nome"  class="form-control">
    </div>
    <div class="mb-3">
      <input type="submit" value="PROCURAR"  class="btn btn-success">
    </div>
    
  </form>

  </div>
  </div>
  
</div>


</body>

</html>
<?php include 'rodape.php'?>


