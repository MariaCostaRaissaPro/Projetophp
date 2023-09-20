
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
  <title>Ajuda - SR Alimentos</title>
  <style>
    
	 body {background-image: url("img/logosc.jpg");}
   
   }
    </style>
</head>


<?php include 'menu.php'; ?>
<h1>Tire aqui suas dúvidas</h1>

<body style="text-align:center; "background-image: url("img/logosc.jpg"); ">
  <form action="cadastrocliente.php" method="POST" style="border: 1px solid black; width: 200px; margin: auto;">

    
    <label for="coment" class="form-label">COMENTÁRIO</label>
      <input type="text" name="coment" id="coment" >
    </div>
    &nbsp;
    &nbsp;
    <input type="submit" value="ENVIAR"><br>
    &nbsp;
    </form>
    &nbsp;
    &nbsp;
    

<?php include 'rodape.php'; ?>
