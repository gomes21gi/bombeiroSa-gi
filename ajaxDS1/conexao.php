<?php

date_default_timezone_set('America/Sao_Paulo');
$conn = new mysqli("localhost", "root", "root", "ajaxds1");

if ($conn->connect_error) {
    die("ERRO NA CONEXÃO: " . $conn->connect_error);
}

?>