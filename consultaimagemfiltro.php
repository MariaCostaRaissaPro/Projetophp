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
  <title>Consulta Imagem Filtrada - Sr Alimentos</title>
 
</head>
<body>
<?php include 'menu.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta Imagem</title>
    <style>
     img{
      width: 300px;
       height: 200px;"
     }
	 body {background-image: url("img/logosc.jpg");}
   h1{text-align:center;
   }
    </style>
</head>
&nbsp;
<h1>Procure os produtos</h1>
<body >

<div style="background-image: logo.jpg">

<form action="cadastrocliente.php" method="POST" style="border: 1px solid black; width: 200px; margin: auto;">
    
    <div class="mb-3" style="text-align:center;">
      <label for="nome" class="form-label" style="text-align:center;">Nome</label>
      <input type="text" name="nome" id="nome" >
    </div>
   
    <input type="submit" value="PROCURAR" style="text-align:center;">
    </form>

    &nbsp;
<?php include 'rodape.php'; ?>
</body>
</html>