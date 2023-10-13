<?php
// Conexão com o banco de dados (substitua as informações conforme sua configuração)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "firefighters-gi";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

return $conexao; // Retorna a conexão para ser usada em outros scripts

?>