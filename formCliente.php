<?php
    include('menu.html');
   //include('conexao.php');
?>
<form action="cadastrocliente.php" method="POST">

<H1>CADASTRO CLIENTE</H1>
<form action="insercao.php" method="post">
<div class="mb-3">
  <label for="codigo" class="form-label">Codigo</label>
  <input type="text" name="codigo" id="codigo" placeholder="Código">
</div>
<div class="mb-3">
  <label for="nome" class="form-label">Nome</label>
  <input type="text" name="nome" id="nome" placeholder="Nome">
</div>
<label for="endereco" class="form-label">Endereco</label>
  <input type="text" name="endereco" id="endereco" placeholder="Endereço">
</div><br>
<label for="cpf" class="form-label">CPF</label>
  <input type="text" name="cpf" id="cpf" placeholder="CPF">
</div><br>
<label for="rg" class="form-label">RG</label>
  <input type="text"  name="rg" id="rg" placeholder="RG">
</div><br>
<input type="submit" value="SALVAR">
</form>