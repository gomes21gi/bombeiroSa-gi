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
        $senha = $_POST["password"];

        // Evite injeção SQL usando instruções preparadas
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Usuário autenticado com sucesso, redireciona para a página de perfil
            header("Location: perfil.html");
            exit();
        } else {
            // Exibe uma mensagem de erro
            echo "Credenciais inválidas.";
        }

        $stmt->close();
        $conn->close();
    }
?>
