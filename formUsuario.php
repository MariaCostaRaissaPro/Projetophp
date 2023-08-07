<?php

include ('menu.html');
//include ('conexao.php');
?>
<form action="cadastroUsuario.php" method="POST">

  <br>
<H1>CADASTRO USUÁRIO</H1>
<div class="mb-3">
    <label for="idUsuario" class="form-label">ID Usuário</label>
    <input type="text" id="idUsuario" name="idUsuario" placeholder="ID Usuário" required>
  </div>  
<div class="mb-3">
    <label for="login" class="form-label">Login</label>
    <input type="text" id="login" name="login" placeholder="Login" required>
  </div>
  <div class="mb-3">
    <label for="senha" class="form-label">Senha</label>
    <input type="text" id="senha" name="senha" placeholder="Senha" required>
  </div>
  <label for="idCliente">ID Cliente:</label>
  <select name="idCliente" required>
    
    <?php
      $sql ="SELECT idCliente, nome FROM cliente";
      $result = $conn->query($sql);

      if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
          echo '<option value="'.$row['idCliente'].'">'.$row['nome'].'</option>';
        }
      }
    ?>
  </select>
  <input type="submit" value="SALVAR">
</form>
