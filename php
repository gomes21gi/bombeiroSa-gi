<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Obtenha os valores do formulário
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

// Inserir os valores no banco de dados
$sql = "INSERT INTO usuarios (nome, matricula, senha) VALUES ('$nome', '$matricula', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
?>
