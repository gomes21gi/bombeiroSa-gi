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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (isset($_POST["enviar"])) { // Verifique se o botão "enviar" foi pressionado
        $stmt = $conn->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
        $stmt->bind_param('ss', $email, $senha);
        $stmt->execute();
    }

    if (isset($_POST["excluir"])) { // Verifique se o botão "excluir" foi pressionado
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
    }

    // Recupere a lista de usuários após as operações
    $usuarios = [];

    $consulta = $conn->query("SELECT email, senha FROM usuarios");

    while ($row = $consulta->fetch_assoc()) {
        $usuarios[] = $row;
    }

    // Converta a lista de usuários em JSON
    $json_texto = json_encode(["usuarios" => $usuarios]);

    // Envie o JSON de volta para o JavaScript
    echo $json_texto;
}
?>
