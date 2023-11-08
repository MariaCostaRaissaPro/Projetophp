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
  <title>RESULTADO BUSCAR PRODUTO - SR Alimentos</title>
 
  <style>
     img{
      width:400px;
       height: 300px;
     }

    </style>

</head>
<?php include('menuCli.php'); ?>
<body>
  <?php


// Conexão com o banco de dados (substitua as credenciais conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";

$diretorio = '/tcc/img/';
              
// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os valores dos filtros do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';

// Query SQL base
$sql = "SELECT * FROM produto WHERE 1";

// Adiciona condições aos filtros
if (!empty($nome)) {
  $sql .= " AND nome LIKE '%$nome%'";
}

// Executa a consulta
$result = $conn->query($sql);

// Verifica se houve erro na execução da consulta
if (!$result) {
  die("Erro na consulta: " . $conn->error);
}

// Exibe os resultados
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $nome_produto = $row['nome'];
    $id = $row['id'];
    $nome_arq = $row['nome_arq'];
    $ext_arq = $row['ext_arq'];
    $preco = $row['preco'];
    $imagemPath = $diretorio . $nome_arq . $ext_arq;

    echo '
    <div class="card" style="width: 350px; display: inline-block; text-align:center;" >
      <img src="' . $imagemPath . '" class="card-img-top" alt="' . $nome_produto . '">
      <div class="card-body">
        <h5 class="card-title">' . $nome_produto . '</h5>
        <p class="card-text" >Preço: R$' . $preco . '</p>
        <a href="adicionar.php?id=$id" class="btn btn-primary">Comprar</a>
      </div>
    </div>';
  }
} else {
  echo "Nenhum resultado encontrado.";
}

// Fecha a conexão
$conn->close();

?>

</body>
</html>
<?php include 'rodape.php'; ?>