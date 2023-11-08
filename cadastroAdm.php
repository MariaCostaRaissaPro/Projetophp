


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
  <title>CADASTRAR ADM - Sr Alimentos</title>
  <style>
    body {
      background-image: url("img/logosc.jpg");
      background-size: cover;
    }

    .conteudo
    {
      min-height : calc(100vh - 180px);
    }

    footer
    {
      height: 180px;
    }

    #cadastro {
        text-align: center;
        border: 4px solid white ;
        color: white;
        font-size: 100px;
        font-weight: bold;
        
    }
    .cadastro {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
    }




  </style>
</head>

<?php include 'menu.php'?>
<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter os dados do formulário

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// Inserir os dados no banco de dados
$sql = "INSERT INTO adm (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if  ($conn->query($sql) === TRUE) {
    echo "
    
    <div class='conteudo container'>
    <div class='cadastro'>
    <p id='cadastro'>Cadastro realizado com sucesso!</p>
    </div>
    </div>
    " ;
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}
$conn->close();
?>

<?php include 'rodape.php'?>
</body>

</html>
<?php include 'rodape.php'?>