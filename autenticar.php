<?php
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter os dados do formulário
$email = $_POST["email"];
$senha = $_POST["senha"];

// Consultar o banco de dados para verificar as credenciais
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row["senha"])) {
        $_SESSION["usuario_id"] = $row["id"];
        $_SESSION["usuario_nome"] = $row["nome"];
        header("Location: index.php"); // Redirecionar para a página de dashboard
    } else {
        echo "Senha incorreta";
    }
} else {
    echo "Usuário não encontrado";
}

$conn->close();
?>
