<?php
session_start();

if (isset($_SESSION['carrinho'])) {
    unset($_SESSION['carrinho']); // Remove o carrinho da sessão
}

header("Location: carrinho.php"); // Redireciona de volta para a página do carrinho
