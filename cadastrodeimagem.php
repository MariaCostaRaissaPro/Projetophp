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
  <title>CADASTRO DE IMAGEM  - Sr Alimentos</title>
</head>
<?php include 'menuadm2.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta Imagenms</title>
    <style>
     img{
      width: 300px;
       height: 200px;"
     }

	 body {background-image: url("imglogo/logosc.jpg");
    background-size: cover;}
    </style>
</head>


<?php include 'conexao.php'; ?>
<body>

<form method="POST" action="enviar.php" enctype="multipart/form-data" style=" text-align:center;  width: 800px; margin: auto;"> 

<h1 style='color:#1c8454;'>CADASTRE A IMAGEM </h1>

<div class="conteudo container">
  <div class="row">
    <div class="col-sm-8 mx-auto p-3 border border-success mt-3 rounded">
    
  <form method="post" action="cadastrarclli.php" >

    <div class="mb-3">
      <label for="id" class="form-label" style='font-weight: bold';>ID IMAGEM</label>
      <input type="text" name="id"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="categoria_id" class="form-label" style='font-weight: bold';> CATEGORIA</label>
    <!-- Substitua o campo de texto por um select -->
    <select id="categoria" name="categoria_id" class="form-control">
    <option value="">   </option>
        <option value="1"  style='text-align:center';>1 - VERDURAS </option>
        <option value="2" style='text-align:center';>2 - FRUTAS</option>
        <option value="3" style='text-align:center';>3 - LEGUMES</option>
       
    </select>
    </div>

    <div class="mb-3">
    <label for="nome" class="form-label" style='font-weight: bold';>NOME PRODUTO</label>
    <input type="text" name="nome" i  class="form-control">
    </div>

    <div class="mb-3">
    <label for="descricao" class="form-label" style='font-weight: bold';>DESCRIÇÃO PRODUTO</label>
    <input type="text" name="descricao"   class="form-control">
    </div><br>

    <div class="mb-3">
    <label for="preco" class="form-label" style='font-weight: bold';>PREÇO</label>
    <input type="text" name="preco"   class="form-control">
    </div><br> 

    <div class="mb-3">
    <label for="conteudo" class="form-label" style='font-weight: bold';>ENVIAR IMAGEM</label>
    <input type="file" name="imagem" accept="image/*"> 
    </div><br> 

    <div class="mb-3">
      <input type="submit" value="ENVIAR IMAGEM"  class="btn btn-success">
    </div>
    
  </form>

  </div>
  </div>
  
</div>
</body>



</html>
<?php include 'rodape.php'; ?>