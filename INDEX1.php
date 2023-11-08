<!DOCTYPE html>
<html>
<head>
    <title>Carrinho de Compras</title>
    <style>
        img {
            width: 200px; /* Largura desejada */
            height: 150px; /* Altura desejada */
        }
    </style>
</head>
<body>
    <h1>Produtos Disponíveis</h1>
    <ul>
        <?php
        //só vai funcionar se ele adicionou algo no carrinho
        if (isset($_GET['produto_adicionado']) && $_GET['produto_adicionado'] == 'true') {
            echo '<script>alert("Produto adicionado ao carrinho!");</script>';
        }

        include 'conexao.php';
        //o Array será usado para adicionar os produtos do banco
        $produtos = array(); 
        
        $sql = "SELECT * FROM produto";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

            if ($stmt->rowCount() > 0) {
                
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $produto = array(
                        "id" => $row['id'],
                        "nome" => $row['nome'],
                        "preco" => $row['preco'],
                        "imagem" => $row['imagem']
                    );
                     // Adicione o produto ao array de produtos
                     $produtos[] = $produto;
                }
            } else {
                echo "Nenhum resultado encontrado.";
            }

        // exibindo os produtos que estão no array
       
        foreach ($produtos as $produto) {
            echo '<img src="'. $produto['imagem'].'">';
            echo '<li>' . $produto['nome'] . ' - R$' . $produto['preco']. ' <a href="adicionar.php?id=' . $produto['id'] . '">Adicionar ao Carrinho</a></li>';
        }
        ?>
    </ul>
    <a href="carrinho.php">Ver Carrinho</a>
</body>
</html>
<?php include 'rodape.php'?>