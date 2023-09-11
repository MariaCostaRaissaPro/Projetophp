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
  <title>Legumes - SR Alimentos</title>
</head>
<body>
<?php include 'menu.php'; ?>
    <h2  style="text-align:center" >Cadastro de Usuário</h2>
    <form method="post" action="cadastrar.php"   style="text-align:center" >
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
    <?php include 'rodape.php'; ?>
</body>

</html>

