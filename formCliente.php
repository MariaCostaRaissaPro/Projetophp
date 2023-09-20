
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
  <title>Quem Somos?</title>
  <style>
	 body {background-image: url("img/logosc.jpg");}
    </style>
</head>
<?php include 'menu.php'; ?>
 <h1>Cadastre-se ou entre na sua conta!</h1>
      <body style="text-align:center; ">
  <form action="cadastrocliente.php" method="POST" style="border: 1px solid black; width: 200px; margin: auto;">
    <div class="mb-3">
      <label for="codigo" class="form-label">Codigo</label>
      <input type="text" name="codigo" id="codigo" >
    </div>
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" name="nome" id="nome" >
    </div>
    <label for="endereco" class="form-label">Endereco</label>
      <input type="text" name="endereco" id="endereco" >
    </div><br>
    <label for="cpf" class="form-label">CPF</label>
      <input type="text" name="cpf" id="cpf" >
    </div><br>
    <label for="rg" class="form-label">RG</label>
      <input type="text"  name="rg" id="rg" >
    </div><br>
    &nbsp;
    <input type="submit" value="SALVAR">
    </form>
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <?php include 'rodape.php'; ?>
</body>
</html>