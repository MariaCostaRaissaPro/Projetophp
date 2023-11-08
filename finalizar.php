<?php
session_start();

if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
    // Aqui você pode realizar ações adicionais, como salvar o pedido no banco de dados, gerar um recibo, etc.
    
    // Limpe o carrinho
    unset($_SESSION['carrinho']);
    
    echo "Compra concluída com sucesso!";
} else {
    echo "Seu carrinho está vazio.";
}
