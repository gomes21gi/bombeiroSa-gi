<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['oq-aconteceu']) && isset($_POST['tempo-aconteceu']) && isset($_POST['p-quais']) && isset($_POST['m-quais']) && isset($_POST['ss-alergia']) && isset($_POST['i-horas'])) {
        $oq_aconteceu = $_POST['oq-aconteceu'];
        $tempo_aconteceu = $_POST['tempo-aconteceu'];
        $p_quais = $_POST['p-quais'];
        $m_quais = $_POST['m-quais'];
        $ss_alergia = $_POST['ss-alergia'];
        $i_horas = $_POST['i-horas'];

        echo "<p>O que aconteceu: $oq_aconteceu</p>";
        echo "<p>A quanto tempo aconteceu: $tempo_aconteceu</p>";
        echo "<p>Possui algum problema de saúde: $p_quais</p>";
        echo "<p>Faz uso de medicação: $m_quais</p>";
        echo "<p>Alérgico a alguma coisa: $ss_alergia</p>";
        echo "<p>Horário da última medicação: $i_horas</p>";
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Data: " . $_POST['data'] . "</p>";
    echo "<p>Sexo: " . $_POST['sexo'] . "</p>";
    echo "<p>Nome do Hospital: " . $_POST['nome-hospital'] . "</p>";
    echo "<p>Nome do Paciente: " . $_POST['nome-paciente'] . "</p>";
    echo "<p>Idade: " . $_POST['idade'] . "</p>";
    echo "<p>Fone: " . $_POST['fone'] . "</p>";
    echo "<p>RG/CPF do Paciente: " . $_POST['cpf'] . "</p>";
    echo "<p>Acompanhante: " . $_POST['nome-acompanhante'] . "</p>";
    echo "<p>Idade do Acompanhante: " . $_POST['idade-acompanhante'] . "</p>";
    echo "<p>Local da Ocorrência: " . $_POST['local-ocorrencia'] . "</p>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Período da gestação: " . $_POST['nome-hospital'] . "</p>";
    echo "<p>Faz uso de medicação: " . $_POST['maredes-group-7'] . "</p>";
    echo "<p>Nome do médico: " . $_POST['nome-hospital'] . "</p>";
    echo "<p>Existe possibilidade de complicações: " . $_POST['maredes-group-8'] . "</p>";
    echo "<p>É o primeiro filho: " . $_POST['maredes-group-9'] . "</p>";
    echo "<p>Quantos: " . $_POST['nome-hospital'] . "</p>";
    echo "<p>Que horas iniciaram as contrações: " . $_POST['h-contracoes'] . "</p>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['tipo-ocorrencia'])) {
        echo "<p>Tipo de Ocorrência:</p>";
        echo "<ul>";
        foreach($_POST['tipo-ocorrencia'] as $tipo){
            echo "<li>" . $tipo . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum tipo de ocorrência selecionado.</p>";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Pressão Arterial: " . $_POST['pressao-arteral'] . " X " . $_POST['pressao-arteral'] . " mmHg</p>";
    echo "<p>Pulso: " . $_POST['pulso'] . " B.C.P.M.</p>";
    echo "<p>Respiração: " . $_POST['respiração'] . " M.R.M.</p>";
    echo "<p>Pulsação: " . $_POST['pulsacao'] . "% / HGT: " . $_POST['pulsacao'] . "</p>";
    echo "<p>Temperatura: " . $_POST['temperatura'] . "°C</p>";
    echo "<p>Perfusão: ";
    if(isset($_POST['maredes-group-15'])) {
        echo $_POST['maredes-group-15'] == "on" ? ">2 seg." : "+=2 seg.";
    }
    echo "</p>";
    echo "<p>Estado da Perfusão: ";
    if(isset($_POST['maredes-group-16'])) {
        echo $_POST['maredes-group-16'] == "on" ? "Anormal" : "Normal";
    }
    echo "</p>";
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['psiquiatrico'])) {
        echo "<p>Psiquiátrico</p>";
    }

    if (isset($_POST['respiratório']) && $_POST['respiratório'] != 'respiratório') {
        echo "<p>Respiratório: " . $_POST['respiratório'] . "</p>";
    }

    if (isset($_POST['diabetes']) && $_POST['diabetes'] != 'diabetes') {
        echo "<p>Diabetes: " . $_POST['diabetes'] . "</p>";
    }

    if (isset($_POST['obstetrico']) && $_POST['obstetrico'] != 'obstetrico') {
        echo "<p>Obstétrico: " . $_POST['obstetrico'] . "</p>";
    }

    if (isset($_POST['transporte']) && $_POST['transporte'] != 'transporte') {
        echo "<p>Transporte: " . $_POST['transporte'] . "</p>";
    }

    if (isset($_POST['prob-outros']) && $_POST['prob-outros'] != '') {
        echo "<p>Outros: " . $_POST['prob-outros'] . "</p>";
    }
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['localizacao-frente']) && $_POST['localizacao-frente'] != '') {
        echo "<p>Localização da frente: " . $_POST['localizacao-frente'] . "</p>";
    }

    if (isset($_POST['localizacao-verso']) && $_POST['localizacao-verso'] != '') {
        echo "<p>Localização do verso: " . $_POST['localizacao-verso'] . "</p>";
    }
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 1; $i <= 3; $i++) {
        $local = $_POST['local' . $i];
        $lado = $_POST['lado' . $i];
        $face = $_POST['face' . $i];
        $tipo = $_POST['tipo' . $i];

        if ($local != '' && $lado != 'ferimentos' && $face != 'ferimentos' && $tipo != 'ferimentos') {
            echo "<p>Ferimento $i: Local: $local, Lado: $lado, Face: $face, Tipo: $tipo</p>";
        }
    }
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $queimaduras = [
        "Cabeça" => [$_POST["f-cabeca-1"], $_POST["f-cabeca-2"], $_POST["f-cabeca-3"], $_POST["f-cabeca-4"]],
        "Pescoço" => [$_POST["f-pescoco-1"], $_POST["f-pescoco-2"], $_POST["f-pescoco-3"], $_POST["f-pescoco-4"]],
        "Tórax anterior" => [$_POST["f-tant-1"], $_POST["f-tant-2"], $_POST["f-tant-3"], $_POST["f-tant-4"]],
        "Tórax posterior" => [$_POST["t-tpos-1"], $_POST["t-tpos-2"], $_POST["t-tpos-3"], $_POST["t-tpos-4"]],
        "Genital" => [$_POST["f-genital-1"], $_POST["f-genital-2"], $_POST["f-genital-3"], $_POST["f-genital-4"]],
        "Membro inferior direito" => [$_POST["f-mid-1"], $_POST["f-mid-2"], $_POST["f-mid-3"], $_POST["f-mid-4"]],
        "Membro inferior esquerdo" => [$_POST["f-mie-1"], $_POST["f-mie-2"], $_POST["f-mie-3"], $_POST["f-mie-4"]],
        "Membro superior direito" => [$_POST["f-msd-1"], $_POST["f-msd-2"], $_POST["f-msd-3"], $_POST["f-msd-4"]],
        "Membro superior esquerdo" => [$_POST["f-mse-1"], $_POST["f-mse-2"], $_POST["f-mse-3"], $_POST["f-mse-4"]]
    ];

    foreach ($queimaduras as $parte_corpo => $graus) {
        echo "<p><strong>$parte_corpo:</strong> 1° grau: $graus[0], 2° grau: $graus[1], 3° grau: $graus[2], 4° grau: $graus[3]</p>";
    }
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $objetos_recolhidos = $_POST["objetos-recolhidos"];
    echo "<p>Objetos Recolhidos: $objetos_recolhidos</p>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['sinais-sintomas'])) {
        $sinais_sintomas = $_POST['sinais-sintomas'];
        echo "<h2>Sinais e Sintomas Selecionados:</h2>";
        echo "<ul>";
        foreach ($sinais_sintomas as $sinal) {
            echo "<li>" . $sinal . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum sinal ou sintoma foi selecionado.";
    }
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['vitima-era'])) {
        $vitima_era = $_POST['vitima-era'];
        echo "<h2>Tipos de Vítimas Identificados:</h2>";
        echo "<ul>";
        foreach ($vitima_era as $tipo) {
            echo "<li>" . $tipo . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum tipo de vítima foi selecionado.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['forma-conducao'])) {
        $formas_conducao = $_POST['forma-conducao'];
        echo "<h2>Formas de Condução Identificadas:</h2>";
        echo "<ul>";
        foreach ($formas_conducao as $forma) {
            echo "<li>" . $forma . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhuma forma de condução foi selecionada.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['d-transporte'])) {
        $decisoes_transporte = $_POST['d-transporte'];
        echo "<h2>Decisões de Transporte Identificadas:</h2>";
        echo "<ul>";
        foreach ($decisoes_transporte as $decisao) {
            echo "<li>" . $decisao . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhuma decisão de transporte foi selecionada.";
    }
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['p-efetuados'])) {
        $procedimentos_efetuados = $_POST['p-efetuados'];
        echo "<h2>Procedimentos Efetuados:</h2>";
        echo "<ul>";
        foreach ($procedimentos_efetuados as $procedimento) {
            echo "<li>" . $procedimento . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum procedimento efetuado foi selecionado.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Materiais Utilizados Descartáveis:</h2>";
    echo "<ul>";
    
    foreach ($_POST as $key => $value) {
        if (isset($_POST[$key]) && !empty($value) && is_numeric($value)) {
            $material = htmlspecialchars($key);
            $quantidade = htmlspecialchars($value);
            echo "<li>$quantidade de $material</li>";
        }
    }
    
    echo "</ul>";
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Materiais Deixados no Hospital:</h2>";
    echo "<ul>";
    
    foreach ($_POST as $key => $value) {
        if (isset($_POST[$key]) && !empty($value) && is_numeric($value)) {
            $material = htmlspecialchars($key);
            $quantidade = htmlspecialchars($value);
            echo "<li>$quantidade de $material</li>";
        }
    }
    
    echo "</ul>";
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Termo de Recusa de Atendimento e/ou Transporte:</h2>";
    echo "<p>Eu, " . htmlspecialchars($_POST['nome-acompanhante']) . ", portador da carteira de identidade RG N° " . htmlspecialchars($_POST['identidade']) . " e inscrito no CPF sob N° " . htmlspecialchars($_POST['cpf']) . ", na qualidade de vítima/paciente, usando dos direitos que a lei me garante, me recuso neste ato o atendimento e/ou transporte oferecido pelos bombeiros voluntários de Guaramirim/SC, e assumo, individualmente a responsabilidade pelas consequências que possam ocorrer por razão da minha recusa. Declaro que fui devidamente informado sobre o procedimento pelo qual eu deveria me submeter e alertado sobre riscos à saúde da sua não realização.</p>";
    echo "<p>Assinatura: " . htmlspecialchars($_POST['ass']) . "</p>";
    echo "<p>Testemunhas:</p>";
    echo "<p>1. " . htmlspecialchars($_POST['nome-testemunha1']) . ", CPF: " . htmlspecialchars($_POST['doc-testemunha1']) . "</p>";
    echo "<p>2. " . htmlspecialchars($_POST['nome-testemunha2']) . ", CPF: " . htmlspecialchars($_POST['doc-testemunha2']) . "</p>";
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Resultados da Avaliação da Cinemática:</h2>";
    echo "<p>Distúrbio de Comportamento: " . htmlspecialchars($_POST['maredes-group-17']) . "</p>";
    echo "<p>Encontrado de Capacete: " . htmlspecialchars($_POST['maredes-group-18']) . "</p>";
    echo "<p>Encontrado de Cinto: " . htmlspecialchars($_POST['maredes-group-19']) . "</p>";
    echo "<p>Para-brisas Avariado: " . htmlspecialchars($_POST['maredes-group-20']) . "</p>";
    echo "<p>Caminhando na cena: " . htmlspecialchars($_POST['maredes-group-21']) . "</p>";
    echo "<p>Painel Avariado: " . htmlspecialchars($_POST['maredes-group-22']) . "</p>";
    echo "<p>Volante Torcido: " . htmlspecialchars($_POST['maredes-group-23']) . "</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Dados da Ambulância:</h2>";
    echo "<p>N° Usd.: " . htmlspecialchars($_POST['n-usd']) . "</p>";
    echo "<p>N° Ocorr.: " . htmlspecialchars($_POST['n-ocorr']) . "</p>";
    echo "<p>Desp: " . htmlspecialchars($_POST['desp']) . "</p>";
    echo "<p>Km Final: " . htmlspecialchars($_POST['km-final']) . "</p>";
    echo "<p>Cód. Ir: " . (isset($_POST['cod-ir']) ? "Sim" : "Não") . "</p>";
    echo "<p>Cód. Ps: " . (isset($_POST['cod-ps']) ? "Sim" : "Não") . "</p>";
    echo "<p>H. Ch.: " . htmlspecialchars($_POST['h-ch']) . "</p>";
    echo "<p>Cód. SIA/SUS: " . htmlspecialchars($_POST['cod-sia-sus']) . "</p>";

    echo "<h2>Equipe de Atendimento:</h2>";
    echo "<p>M: " . htmlspecialchars($_POST['nome-acompanhante']) . "</p>";
    echo "<p>S1: " . htmlspecialchars($_POST['nome-acompanhante']) . "</p>";
    echo "<p>S2: " . htmlspecialchars($_POST['nome-acompanhante']) . "</p>";
    echo "<p>S3: " . htmlspecialchars($_POST['nome-acompanhante']) . "</p>";
    echo "<p>Demandante: " . htmlspecialchars($_POST['nome-acompanhante']) . "</p>";
    echo "<p>Equipe: " . htmlspecialchars($_POST['nome-acompanhante']) . "</p>";
} else {
    echo "Ocorreu um erro no envio do formulário.";
}
?>