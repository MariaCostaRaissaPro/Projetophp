
 <?php
 include('menu.php');
 include('conexao.php');
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <title>CONSULTA CLIENTE - Sr Alimentos</title>
    <style>
        body {
            background-image: url("img/logosc.jpg");
            style="text-align:center ; "
        }
    </style>
 </head>
   <body >
 <h1 style="font:lato">Consulte um cliente!</h1>
 <form action="formCliente.php" method="POST" style="border: 1px solid black; width: 200px";
 <?php
 include('conexao.php');
 $diretorio = "img/";

 // Fazer uma consulta SQL para obter todos os produtos
 $sql = "SELECT idcli, nome, CPF, email, senha FROM cliente ";
 $stmt = $conn->prepare($sql);
 $stmt->execute();

 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['idcli'];
    $nome = $row['nome'];
    $cpf = $row['cpf'];
    $email = $row['email'];
    $senha = $row['senha'];

        echo '
        <div class="card" style="width: 18rem; display: inline-block;">
            <div class="card-body">
            <h5 class="card-title">ID Usuário ' . $id . '</h5>
                <h5 class="card-title">Nome ' . $nome . '</h5>
                <p class="card-text">Email: ' . $email. '</p>
                <p class="card-text">Senha' . $senha . '</p>
            </div>
        </div>';
 }

 $stmt->closeCursor();
 ?>
<?php include 'rodape.php'; ?>
