<?php include 'menu.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VERDURAS - Sr Alimentos</title>
    <style>
     img {
      width: 400px;
      height: 300px;
      transition: transform 0.2s;
     }

     img.hover-effect:hover {
      transform: scale(1.1);
     }

     body {
      background-image: url("img/logosc.jpg");
     }
     .product-card {
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
     }

     .quantity-input {
      display: flex;
      align-items: center;
     }

     .quantity-input button {
      padding: 5px 10px;
      border: none;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
     }

     .quantity-input input {
      padding: 5px;
      border: 1px solid #007bff;
      text-align: center;
     }
    </style>
</head>

<?php
include('conexao.php');
$diretorio = "img/";

// Fazer uma consulta SQL para obter todos os produtos
$sql = "SELECT id, nome, preco, descricao, nome_arq, ext_arq, estoque FROM produto WHERE categoria_id=1";
$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $nome = $row['nome'];
    $preco = $row['preco'];
    $descricao = $row['descricao'];
    $nome_arc = $row['nome_arq'];
    $ext_arq = $row['ext_arq'];
    $estoque = $row['estoque'];

    $imagemPath = $diretorio . $nome_arc . $ext_arq;

    echo '
    <div class="card product-card" style="width: 321px; display: inline-block;">
        <img src="' . $imagemPath . '" class="card-img-top hover-effect" alt="">
        <div class="card-body">
            <h5 class="card-title">' . $nome . '</h5>
            <p class="card-text">Preço: R$' . $preco . '</p>
            <p class="card-text">Estoque: ' . $estoque . '</p>
            <div class="quantity-input" style="display:flex; align-items:center; justify-content:center;">
                <button  onclick="decrementQuantity(' . $id .')">-</button>
                <input type="number" id="quantity-' . $id . '" value="1" min="1" max="' . $estoque . '">
                <button onclick="incrementQuantity(' . $id . ',' . $estoque . ')">+</button>
            </div>
            <br>
            <a href="carrinho.php?add_to_cart=' . $id . '&quantity=" class="btn btn-primary">COMPRAR</a>
        </div>
    </div>
    ';
}

$stmt->closeCursor();
?>

<script>
function incrementQuantity(productId, maxQuantity) {
    var quantityInput = document.getElementById('quantity-' + productId);
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity < maxQuantity) {
        quantityInput.value = currentQuantity + 1;
    }
}

function decrementQuantity(productId) {
    var quantityInput = document.getElementById('quantity-' + productId);
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
    }
}
</script>

</html>
<?php include 'rodape.php'; ?>















