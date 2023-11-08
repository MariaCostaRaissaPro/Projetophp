<?php
session_start();

if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];

    // obtenção do produto do banco de dados com base no ID
    include 'conexao.php';
    $diretorio = "img/";

    
    $produtos = array(); 
    
    $sql = "SELECT * FROM produto where id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $produto_id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
           echo 'entrou aqui'; 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produto = array(
                $id = $row['id'],
    $nome = $row['nome'],
    $preco = $row['preco'],
    $descricao = $row['descricao'],
    $nome_arc = $row['nome_arq'],
    $ext_arq = $row['ext_arq'],
    $estoque = $row['estoque'],

    $imagemPath = $diretorio . $nome_arc . $ext_arq
            );
            // Adicione o produto individualmente ao carrinho
            if (!isset($_SESSION['carrinho'])) {
               
                $_SESSION['carrinho'] = array();
                echo "<script>alert('carrinho vazio')</script>";
                
            }
            
            $_SESSION['carrinho'][] = $produto;
         
            echo "<script>alert('algoi foi')</script>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    

   // Redirecione para a página index.php com um parâmetro de consulta
 // header("Location: carrinho.php");
} else {
    echo "ID de produto inválido.";
}
