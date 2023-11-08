<?php include 'menuCli.php'; ?>
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
    <title>FRUTAS - Sr Alimentos</title>
    <style>
     img {
      width: 400px;
      height: 300px;
      transition: transform 0.2s;
     }

     img.hover-effect:hover {
      transform: scale(1.1);
     }
    </style>
</head>

<?php
include('conexao.php');
$diretorio = "img/";

// Fazer uma consulta SQL para obter todos os produtos
$sql = "SELECT id, nome, preco, descricao, nome_arq, ext_arq FROM produto WHERE categoria_id=2";
$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $nome = $row['nome'];
    $preco = $row['preco'];
    $descricao = $row['descricao'];
    $nome_arc = $row['nome_arq'];
    $ext_arq = $row['ext_arq'];

    $imagemPath = $diretorio . $nome_arc;

    echo '
    <div class="card" style="width: 260px; display: inline-block; text-align:center;">
        <img src="' . $imagemPath . '" class="card-img-top hover-effect" alt="">
        <div class="card-body">
            <h5 class="card-title">' . $nome . '</h5>
            <p class="card-text">Preço: R$' . $preco . '</p>
          
            <a href="adicionar.php?id=' . $id . '" class="btn btn-primary">Adicionar ao Carrinho</a>
        </div>
    </div>';
}

$stmt->closeCursor();
?>

</body>
</html>
<?php include 'rodape.php'; ?>
