<?php
    include('menu.php');
   //include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
        <title>SR ALIMENTOS CLIENTE</title>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
      </head>
      <body style="text-align:center; ">
  <form action="cadastrocliente.php" method="POST" style="border: 1px solid black; width: 200px; margin: auto;">
    <div class="mb-3">
      <label for="codigo" class="form-label">Código</label>
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
    <input type="submit" value="SALVAR">
    </form>
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <footer class="bg-success text-light py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>Informação</h3>
        <p><i class="bi bi-geo-alt"></i>Sobre nós </p>
        <p><i class="bi bi-telephone"></i> (35) 99159-7710</p>
      </div>

      <div class="col-md-4">
        <h3>Minha conta</h3>
        <p><i class="bi bi-geo-alt"></i>Sobre nós </p>
        <p><i class="bi bi-telephone"></i> (35) 99159-7710</p>
      </div>
    
      
      <div class="col-md-4">
        <h3>Siga nos</h3>
        <a href="#" class="bi bi-facebook me-3"></a>
        <a style="color: white" href="https://instagram.com/sralimentos_?igshid=MzRIODBiNWFIZA==" class="bi bi-instagram">@sralimentos_</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>