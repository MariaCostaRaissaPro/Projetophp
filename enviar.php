
<?php
 if(isset($_FILES['imagem']))
 {
    $ext = strtolower(substr($_FILES['imagem']['name'],-4)); //Pegando extensão do arquivo
		
    $new_name = date("Y.m.d-H.i.s"); 
    $dir = 'img/'; 
    move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name.".".$ext); 
    
	$id = $_POST["id"];
	$nome = $_POST["nome"];
    $preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
   
    include 'conexao.php';
	// usar o comando que eu já passei - Inserção - INSERT INTO................
	//insert into produto values ($id,$nome,$preco,$descricao,$new_name,$ext);
	try {
        $sql = "INSERT INTO produto (id, nome,preco, descricao,nome_arq,ext_arq)
        VALUES ('$id', '$nome', '$preco', '$descricao', '$new_name', '$ext')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Novo registro criado com sucesso";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;
	
	echo("Imagem enviada com sucesso!");
 } 
?>