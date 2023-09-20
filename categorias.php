

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
  <title>Categorias - SR Alimentos</title>
 
</head>
<body style="background-image: url(img/logosc.jpg");>
<?php include 'menu.php'; ?>
<?php
include 'conexao.php';

$data = $conn->query("SELECT * FROM produto")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
    echo("Nome produto:");
    echo $row['nome']."<br />\n";
    echo("Preço produto:");
    echo $row['preco']."<br />\n";
    echo("Descrição produto:");
    echo $row['descricao']."<br />\n";
   
    echo "<img src='img/".$row['nome_arq'].".".$row['ext_arq']."'>";
}
?>
</body>
<?php include 'rodape.php'; ?>
