<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['index'])) {
        // Receber dados do formulário de login
        $email = $_POST['email'];
        $senha = $_POST['Senha'];

        // Consultar o banco de dados para verificar o login
        $query = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
        $result = $mysqli->query($query);

        if ($result->num_rows == 1) {
            // Login bem-sucedido, criar uma sessão
            $_SESSION['email'] = $email;

            // Redirecionar para a página protegida (ficha.html)
            header("Location: perfil.html");
        } else {
            // Login falhou, redirecionar para a página de login novamente
            header("Location: index.html");
        }
    } elseif (isset($_POST['cadastro'])) {
        // Receber dados do formulário de cadastro
        $email = $_POST['Email'];
        $senha = $_POST['Senha'];

        // Inserir os dados na tabela de usuários
        $query = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
        
        if ($mysqli->query($query) === TRUE) {
            // Cadastro bem-sucedido, criar uma sessão
            $_SESSION['email'] = $email;

            header("Location: login.html");
        } else {
            // Erro no cadastro, redirecionar para a página de cadastro novamente
            header("Location: index.html");
        }
    }
}


// Fechar a conexão com o banco de dados
$mysqli->close();
?>
