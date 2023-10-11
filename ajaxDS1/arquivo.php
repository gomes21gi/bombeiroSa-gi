<?php

include("conexao.php");
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$acao = $_POST["acao"];

if($acao == "enviar"){
    $stmt = $conn->prepare("INSERT INTO empregado(nome_empregado, idade_empregado, sexo_empregado) VALUES (?,?,?)");
    $stmt->bind_param('sss', $nome, $idade, $sexo);
    $stmt->execute();
}

if ($acao == "excluir"){
    $stmt = $conn->prepare("DELETE FROM empregado WHERE nome_empregado = ?");
    $stmt->bind_param('s', $nome);
    $stmt->execute();
}

$empregados = [];

$consulta = $conn->query("SELECT nome_empregado, idade_empregado, sexo_empregado FROM empregado");

while($row = $consulta->fetch_assoc()){
    $empregados[] = $row;
}

$json_texto = json_encode(["empregados" => $empregados]);
echo($json_texto);

?>