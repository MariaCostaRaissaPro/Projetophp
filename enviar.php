

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
  <title>ENVIAR - Sr Alimentos</title>
  <style>
    body {
      background-image: url("imglogo/logosc.jpg");
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

<?php include 'menuadm2.php'?>
<?php
include "conexao.php";
 if(isset($_FILES['imagem']))
 {
    $ext = strtolower(substr($_FILES['imagem']['name'],-4)); //Pegando extensão do arquivo
		
    $new_name = date("Y.m.d-H.i.s"); 
    $dir = 'img/'; 
    move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name.$ext); 
    
	$id = $_POST["id"];
	$nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria_id"];
	// usar o comando que eu já passei - Inserção - INSERT INTO................
	//insert into produto values ($id,$nome,$preco,$descricao,$new_name,$ext);
	try {
        $sql = "INSERT INTO produto (id, nome,preco, descricao,nome_arq,ext_arq,categoria_id)
        VALUES ('$id', '$nome', '$preco', '$descricao', '$new_name', '$ext','$categoria')";
        // use exec() because no results are returned
        $conn->exec($sql);
        
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;
	
    echo "
    
    <div class='conteudo container'>
    <div class='cadastro'>
    <p id='cadastro'>Novo registro realizado com sucesso!</p>
    </div>
    </div>
    " ;
 } 
?>


</body>

</html>
<?php include 'rodape.php'?>