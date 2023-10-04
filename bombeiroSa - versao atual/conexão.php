<?php

$host = "localhost"; // Geralmente é "localhost" se o banco de dados estiver no mesmo servidor web.
$usuario = "root"; // O nome de usuário do banco de dados.
$senha = "root"; // A senha do banco de dados.
$banco = "firefighters-gi"; // O nome do banco de dados que você deseja conectar.

// Cria a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
