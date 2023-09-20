<?php
include('conexao.php');
$diretorio = "img/";


// Fazer uma consulta SQL para obter todos os produtos
$sql = "SELECT id, nome, preco, descricao, nome_arq, ext_arq,categoria_id  FROM produto";
$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $nome = $row['nome'];
    $preco = $row['preco'];
    $descricao = $row['descricao'];
    $nome_arc = $row['nome_arq'];
    $ext_arq = $row['ext_arq'];
    

    $imagemPath = $diretorio . $nome_arc;

        echo '
        <div class="card" style="width: 18rem; display: inline-block;">
            <img src="' . $imagemPath . '" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Título: ' . $nome . '</h5>
                <br>
                <p class="card-text">Descrição: ' . $descricao . '</p>
                <br>
                <p class="card-text">Preço: R$' . $preco . '</p>
                <br>
            </div>
        </div>';
     
}



$stmt->closeCursor();
?>