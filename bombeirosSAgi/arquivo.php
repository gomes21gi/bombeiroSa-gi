<?php
require('conexao.php');
session_start(); // Inicialize a sessão para usar as variáveis ​​de sessão

// Faça a conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bombeirosa-gi";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão com o banco de dados
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['index'])) {
        // Receba dados do formulário de login
        $email = $_POST['email'];
        $senha = $_POST['Senha'];

        // Consulta o banco de dados para verificar o login de forma segura usando prepared statements
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email=? AND senha=?");
        $stmt->bind_param('ss', $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Login bem-sucedido, crie uma sessão
            $_SESSION['email'] = $email;

            // Redirecione para a página protegida (perfil.html)
            header("Location: perfil.html");
        } else {
            // Login falhou, redirecione para a página de login novamente
            header("Location: index.html");
        }
    } elseif (isset($_POST['cadastro'])) {
        // Receba dados do formulário de cadastro
        $email = $_POST['Email'];
        $senha = $_POST['Senha'];

        // Insira os dados na tabela de usuários de forma segura usando prepared statements
        $stmt = $conn->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
        $stmt->bind_param('ss', $email, $senha);

        if ($stmt->execute()) {
            // Cadastro bem-sucedido, crie uma sessão
            $_SESSION['email'] = $email;

            header("Location: login.html");
        } else {
            // Erro no cadastro, redirecione para a página de cadastro novamente
            header("Location: index.html");
        }
    }
}

// Feche a conexão com o banco de dados
$conn->close();
?>