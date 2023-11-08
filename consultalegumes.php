<?php include 'menu.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LEGUMES - Sr Alimentos</title>
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
$sql = "SELECT id, nome, preco, descricao, nome_arq, ext_arq FROM produto WHERE categoria_id=3";
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
                <a href="carrinho.php?add_to_cart=' . $id . '" class="btn btn-primary">COMPRAR</a>
            </div>
        </div>';
}

$stmt->closeCursor();
?>

</html>
<?php include 'rodape.php'; ?>
