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
  <title>Ajuda - SR Alimentos</title>
</head>
<body>
<?php include 'menu.php'; ?>
<img src="img/logo2.png" >

<body style="text-align:center; ">
  <form action="cadastrocliente.php" method="POST">

    <div class="mb-3">
      <label for="nome" class="form-label">Nome*</label>
      <input type="text" name="nome" id="nome" >
    </div>
    &nbsp;
    <label for="email" class="form-label">Email*</label>
      <input type="text" name="email" id="email" >
    </div>
    &nbsp;
    <label for="telefome" class="form-label">Telefone</label>
      <input type="text" name="telefone" id="telefone" >
    </div>
    &nbsp;
    <label for="coment" class="form-label">Comentário</label>
      <input type="text" name="coment" id="coment" >
    </div>
    &nbsp;
    
    <input type="submit" value="ENVIAR"><br>
    &nbsp;
    </form>
    &nbsp;
    &nbsp;
    &nbsp;







<?php include 'rodape.php'; ?>
