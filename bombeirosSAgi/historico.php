<?php
require('conexao.php');
session_start(); 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bombeirosa-gi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT * FROM anamnese_emergencia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Anamnese Emergencia</h2>";
    echo "<table>";
    echo "<tr>
            <th>id_anamnese_emergencia</th>
            <th>oq_aconteceu</th>
            <th>aconteceu_outras_vezes</th>
            <th>quanto_tempo_aconteceu</th>
            <th>possui_problema_saude</th>
            <th>quais_problemas_saude</th>
            <th>faz_uso_medicacao_emergencia</th>
            <th>ultimo_horario_medicacao</th>
            <th>quais_medicacoes</th>
            <th>alergico_alguma_coisa</th>
            <th>especificacao_alergia</th>
            <th>ingeriu_alimento_liquido</th>
            <th>horas_ingeriu</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_anamnese_emergencia"] . "</td>";
        echo "<td>" . $row["oq_aconteceu"] . "</td>";
        echo "<td>" . $row["aconteceu_outras_vezes"] . "</td>";
        echo "<td>" . $row["quanto_tempo_aconteceu"] . "</td>";
        echo "<td>" . $row["possui_problema_saude"] . "</td>";
        echo "<td>" . $row["quais_problemas_saude"] . "</td>";
        echo "<td>" . $row["faz_uso_medicacao_emergencia"] . "</td>";
        echo "<td>" . $row["ultimo_horario_medicacao"] . "</td>";
        echo "<td>" . $row["quais_medicacoes"] . "</td>";
        echo "<td>" . $row["alergico_alguma_coisa"] . "</td>";
        echo "<td>" . $row["especificacao_alergia"] . "</td>";
        echo "<td>" . $row["ingeriu_alimento_liquido"] . "</td>";
        echo "<td>" . $row["horas_ingeriu"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhum registro encontrado para Anamnese Emergencia.</p>";
}

// Display data for Anamnesegestacional
$sql2 = "SELECT * FROM anamnesegestacional";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    echo "<h2>Anamnese Gestacional</h2>";
    echo "<table>";
    echo "<tr>
            <th>id_anamnesegestacional</th>
            <th>periodo_gestacao</th>
            <th>faz_uso_medicacao</th>
            <th>nome_medico</th>
            <th>possibilidade_complicacoes</th>
            <th>primeiro_filho</th>
            <th>quantidade_filhos</th>
            <th>inicio_contracoes</th>
            <th>duracao_contracoes</th>
            <th>intervalo_contracoes</th>
            <th>pressao_evacuar</th>
            <th>ruptura_bolsa</th>
            <th>inspecao_visual</th>
            <th>parto_realizado</th>
            <th>hora_nascimento</th>
            <th>sexo_bebe</th>
            <th>nome_bebe</th>
        </tr>";

    while ($row2 = $result2->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row2["id_anamnesegestacional"] . "</td>";
        echo "<td>" . $row2["periodo_gestacao"] . "</td>";
        echo "<td>" . $row2["faz_uso_medicacao"] . "</td>";
        echo "<td>" . $row2["nome_medico"] . "</td>";
        echo "<td>" . $row2["possibilidade_complicacoes"] . "</td>";
        echo "<td>" . $row2["primeiro_filho"] . "</td>";
        echo "<td>" . $row2["quantidade_filhos"] . "</td>";
        echo "<td>" . $row2["inicio_contracoes"] . "</td>";
        echo "<td>" . $row2["duracao_contracoes"] . "</td>";
        echo "<td>" . $row2["intervalo_contracoes"] . "</td>";
        echo "<td>" . $row2["pressao_evacuar"] . "</td>";
        echo "<td>" . $row2["ruptura_bolsa"] . "</td>";
        echo "<td>" . $row2["inspecao_visual"] . "</td>";
        echo "<td>" . $row2["parto_realizado"] . "</td>";
        echo "<td>" . $row2["hora_nascimento"] . "</td>";
        echo "<td>" . $row2["sexo_bebe"] . "</td>";
        echo "<td>" . $row2["nome_bebe"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhum registro encontrado para Anamnese Gestacional.</p>";
}

$conn->close();
?>