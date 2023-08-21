<?php
 if(isset($_FILES['imagem']))
 {
    $ext = strtolower(substr($_FILES['imagem']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = './img/'; //Diretório para uploads 
    move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo("Imagen enviada com sucesso!");
 } 
?>