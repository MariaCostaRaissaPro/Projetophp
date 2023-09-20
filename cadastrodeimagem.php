
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
  <title>Cadastro de Imagem-SR Alimentos ADM</title>
</head>
<?php include 'menuAdm.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CADASTRO DE IMAGEM</title>
    <style>
	 body {background-image: url("img/logosc.jpg");}
    </style>
</head>
<body>

<form method="POST" action="enviar.php" enctype="multipart/form-data" style=" text-align:center; border: 1px solid black; width: 400px; margin: auto;"> 


    <label for="id">Id Imagem</label>
    <br>
    <input type="text" name="id">
    <br>
    <label for="id">Id Categoria</label>
    <br>
    <input type="text" name="id">
    <br>
    <label for="nome">Nome da Imagem</label>
    <br>
    <input type="text" name="nome">
    <br>
    <label for="descricao">Descrição de Imagem</label>
    <br>
    <input type="text" name="descricao">
    <br>
    <label for="preco">Preço</label>
    <br>
    <input type="text" name="preco">
   <br>
   <label for="conteudo">Enviar imagem:</label>
   
   <input type="file" name="imagem" accept="image/*"> 
  
     <button type="submit">Enviar imagem</button>
</form>


<?php include 'rodape.php'; ?>
    
</body>
</html>
