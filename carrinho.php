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
  <title>MINHAS COMPRAS  - Sr Alimentos</title>
</head>
<?php include 'menuCli.php'; ?>
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

	 
    </style>
</head>
<?php include 'conexao.php'; ?>
<?php


if (!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])) {
    echo "Seu carrinho está vazio.";
} else {
    echo "<h1>Seu Carrinho de Compras</h1>";
    echo "<ul>";
    $total = 0;

    foreach ($_SESSION['carrinho'] as $produto) {
        
        if (isset($produto['nome'])) {
            echo "<li>{$produto['nome']} - R$" . number_format($produto['preco'], 2) . "</li>";
            $total += $produto['preco'];
        } else {
            echo "<li>Produto sem nome</li>";
        }
    }

    echo "</ul>";
    echo "<p>Total: R$" . number_format($total, 2) . "</p>";
    echo '<a href="finalizar.php">Finalizar Compra</a><br>';
    
    echo '<a href="limpar_carrinho.php">Limpar Carrinho</a><br>';
    echo '<a href="INDEX1.php">Voltar as Compras</a>';
}
?>

<?php include 'rodape.php'; ?>
