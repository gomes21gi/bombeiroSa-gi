<?php
include 'conexão.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_anamnese_gestacional = $_POST['id_anamnese_gestacional'];
    $id_fichas_gestacional = $_POST['id_fichas_gestacional'];
    $periodo_gestacao = $_POST['periodo_gestacao'];
    $faz_uso_medicacao = $_POST['faz_uso_medicacao'];
    $nome_medico = $_POST['nome_medico'];
    $possibilidade_complicacoes = $_POST['possibilidade_complicacoes'];
    $primeiro_filho = $_POST['primeiro_filho'];
    $quantidade_filhos = $_POST['quantidade_filhos'];
    $inicio_contracoes = $_POST['inicio_contracoes'];
    $duracao_contracoes = $_POST['duracao_contracoes'];
    $intervalo_contracoes = $_POST['intervalo_contracoes'];
    $pressao_evacuar = $_POST['pressao_evacuar'];
    $ruptura_bolsa = $_POST['ruptura_bolsa'];
    $inspecao_visual = $_POST['inspecao_visual'];
    $parto_realizado = $_POST['parto_realizado'];
    $hora_nascimento = $_POST['hora_nascimento'];
    $sexo_bebe = $_POST['sexo_bebe'];
    $nome_bebe = $_POST['nome_bebe'];

    $id_anamnese_emergencia = $_POST['id_anamnese_emergencia'];
    $id_fichas_emergencia = $_POST['id_fichas_emergencia'];
    $oq_aconteceu = $_POST['oq_aconteceu'];
    $aconteceu_outras_vezes = $_POST['aconteceu_outras_vezes'];
    $quanto_tempo_aconteceu = $_POST['quanto_tempo_aconteceu'];
    $possui_problema_saude = $_POST['possui_problema_saude'];
    $quais_problemas_saude = $_POST['quais_problemas_saude'];
    $faz_uso_medicacao_emergencia = $_POST['faz_uso_medicacao_emergencia'];
    $ultimo_horario_medicacao = $_POST['ultimo_horario_medicacao'];
    $quais_medicacoes = $_POST['quais_medicacoes'];
    $alergico_alguma_coisa = $_POST['alergico_alguma_coisa'];
    $especificacao_alergia = $_POST['especificacao_alergia'];
    $ingeriu_alimento_liquido = $_POST['ingeriu_alimento_liquido'];
    $horas_ingeriu = $_POST['horas_ingeriu'];

    $id_avaliacao_cinematica = $_POST['id_avaliacao_cinematica'];
    $id_fichas_cinematica = $_POST['id_fichas_cinematica'];
    $disturbio_comportamento = $_POST['disturbio_comportamento'];
    $encontrado_capacete = $_POST['encontrado_capacete'];
    $encontrado_cinto = $_POST['encontrado_cinto'];
    $para_brisas_avariado = $_POST['para_brisas_avariado'];
    $caminhando_cena = $_POST['caminhando_cena'];
    $painel_avariado = $_POST['painel_avariado'];
    $volante_torcido = $_POST['volante_torcido'];

    $id_avaliacao_glasgow = $_POST['id_avaliacao_glasgow'];
    $id_fichas_glasgow = $_POST['id_fichas_glasgow'];
    $abertura_ocular_maiores_5 = $_POST['abertura_ocular_maiores_5'];
    $abertura_ocular_menores_5 = $_POST['abertura_ocular_menores_5'];
    $resposta_verbal_orientado = $_POST['resposta_verbal_orientado'];
    $resposta_verbal_conflito = $_POST['resposta_verbal_conflito'];
    $resposta_verbal_inapropriada = $_POST['resposta_verbal_inapropriada'];
    $resposta_verbal_incompreensivel = $_POST['resposta_verbal_incompreensivel'];
    $resposta_verbal_nenhuma = $_POST['resposta_verbal_nenhuma'];
    $resposta_motora_obedece_comandos = $_POST['resposta_motora_obedece_comandos'];
    $resposta_motora_localiza_dor = $_POST['resposta_motora_localiza_dor'];
    $resposta_motora_movimento_retirada = $_POST['resposta_motora_movimento_retirada'];
    $resposta_motora_flexao_anormal = $_POST['resposta_motora_flexao_anormal'];
    $resposta_motora_extensao_anormal = $_POST['resposta_motora_extensao_anormal'];
    $resposta_motora_nenhuma = $_POST['resposta_motora_nenhuma'];
    $total_gcs = $_POST['total_gcs'];

    $id_dados_ambulancia = $_POST['id_dados_ambulancia'];
    $id_fichas_ambulancia = $_POST['id_fichas_ambulancia'];
    $numero_usd = $_POST['numero_usd'];
    $numero_ocorrencia = $_POST['numero_ocorrencia'];
    $despacho = $_POST['despacho'];
    $km_final = $_POST['km_final'];
    $codigo_ir = $_POST['codigo_ir'];
    $codigo_ps = $_POST['codigo_ps'];
    $hora_chegada = $_POST['hora_chegada'];
    $codigo_sia_sus = $_POST['codigo_sia_sus'];

    $id_dados_iniciais = $_POST['id_dados_iniciais'];
    $id_fichas_dados_iniciais = $_POST['id_fichas_dados_iniciais'];
    $data = $_POST['data'];
    $sexo = $_POST['sexo'];
    $nome_hospital = $_POST['nome_hospital'];
    $nome_paciente = $_POST['nome_paciente'];
    $idade = $_POST['idade'];
    $fone = $_POST['fone'];
    $cpf = $_POST['cpf'];
    $nome_acompanhante = $_POST['nome_acompanhante'];
    $idade_acompanhante = $_POST['idade_acompanhante'];
    $local_ocorrencia = $_POST['local_ocorrencia'];

    $id_decisao_transporte = $_POST['id_decisao_transporte'];
    $id_fichas_decisao_transporte = $_POST['id_fichas_decisao_transporte'];
    $decisao_transporte = $_POST['decisao_transporte'];

    $id_equipe_atendimento = $_POST['id_equipe_atendimento'];
    $id_fichas_equipe_atendimento = $_POST['id_fichas_equipe_atendimento'];
    $nome_m = $_POST['nome_m'];
    $nome_s1 = $_POST['nome_s1'];
    $nome_s2 = $_POST['nome_s2'];
    $nome_s3 = $_POST['nome_s3'];
    $demandante = $_POST['demandante'];
    $equipe = $_POST['equipe'];

    $id_ferimentos = $_POST['id_ferimentos'];
    $id_fichas_ferimentos = $_POST['id_fichas_ferimentos'];
    $local = $_POST['local'];
    $lado = $_POST['lado'];
    $face = $_POST['face'];
    $tipo = $_POST['tipo'];

    $id_pessoa = $_POST['id_pessoa'];
    $id_fichas_pessoa = $_POST['id_fichas_pessoa'];
    $pessoa_nome = $_POST['pessoa_nome'];
    $matricula = $_POST['matricula'];
    $data_criacao = $_POST['data_criacao'];

    $id_forma_conducao = $_POST['id_forma_conducao'];
    $id_fichas_forma_conducao = $_POST['id_fichas_forma_conducao'];
    $forma_conducao = $_POST['forma_conducao'];

    $id_historico_fichas = $_POST['id_historico_fichas'];
    $id_fichas_historico_fichas = $_POST['id_fichas_historico_fichas'];
    $acao = $_POST['acao'];
    $data_modificacao = $_POST['data_modificacao'];

    $id_materiais_deixados_hospital = $_POST['id_materiais_deixados_hospital'];
    $id_fichas_materiais_deixados_hospital = $_POST['id_fichas_materiais_deixados_hospital'];
    $base_estabilizacao_qt = $_POST['base_estabilizacao_qt'];
    $ttf_qt = $_POST['ttf_qt'];
    $colar_qt = $_POST['colar_qt'];
    $tirante_aranha_qt = $_POST['tirante_aranha_qt'];
    $colar_custom_qt = $_POST['colar_custom_qt'];
    $tirante_cabeca_qt = $_POST['tirante_cabeca_qt'];
    $coxins_estabilizacao_qt = $_POST['coxins_estabilizacao_qt'];
    $canula_qt = $_POST['canula_qt'];
    $ked_qt = $_POST['ked_qt'];
    $maca_rigida_qt = $_POST['maca_rigida_qt'];

    $id_materiais_utilizados_descartaveis = $_POST['id_materiais_utilizados_descartaveis'];
    $id_fichas_materiais_utilizados_descartaveis = $_POST['id_fichas_materiais_utilizados_descartaveis'];
    $ataduras_qt = $_POST['ataduras_qt'];
    $manta_aluminizada_qt = $_POST['manta_aluminizada_qt'];
    $cateter_tp_oculos_qt = $_POST['cateter_tp_oculos_qt'];
    $pas_dea_qt = $_POST['pas_dea_qt'];
    $compressa_comum_qt = $_POST['compressa_comum_qt'];
    $sonda_aspiracao_qt = $_POST['sonda_aspiracao_qt'];
    $kits_qt = $_POST['kits_qt'];
    $soro_fisiologico_qt = $_POST['soro_fisiologico_qt'];
    $luvas_desc_pares_qt = $_POST['luvas_desc_pares_qt'];
    $talas_pap_qt = $_POST['talas_pap_qt'];
    $mascara_desc_qt = $_POST['mascara_desc_qt'];

    $id_objetos_recolhidos = $_POST['id_objetos_recolhidos'];
    $id_fichas_objetos_recolhidos = $_POST['id_fichas_objetos_recolhidos'];
    $objetos_recolhidos = $_POST['objetos_recolhidos'];

    $id_observacoes_importantes = $_POST['id_observacoes_importantes'];
    $id_fichas_observacoes_importantes = $_POST['id_fichas_observacoes_importantes'];
    $observacoes = $_POST['observacoes'];

    $id_problemas_suspeitos = $_POST['id_problemas_suspeitos'];
    $id_fichas_problemas_suspeitos = $_POST['id_fichas_problemas_suspeitos'];
    $psiquiatrico = $_POST['psiquiatrico'];
    $respiratorio = $_POST['respiratorio'];
    $diabetes = $_POST['diabetes'];
    $obstetrico = $_POST['obstetrico'];
    $transporte = $_POST['transporte'];
    $outros = $_POST['outros'];

    $id_procedimentos_efetuados = $_POST['id_procedimentos_efetuados'];
    $id_fichas_procedimentos_efetuados = $_POST['id_fichas_procedimentos_efetuados'];
    $aspiracao = $_POST['aspiracao'];
    $avaliacao_inicial = $_POST['avaliacao_inicial'];
    $avaliacao_dirigida = $_POST['avaliacao_dirigida'];
    $avaliacao_continuada = $_POST['avaliacao_continuada'];
    $chave_rautek = $_POST['chave_rautek'];
    $canula_guedel = $_POST['canula_guedel'];
    $desobstrucao_va = $_POST['desobstrucao_va'];
    $emprego_dea = $_POST['emprego_dea'];
    $gerenciamento_riscos = $_POST['gerenciamento_riscos'];
    $limpeza_ferimento = $_POST['limpeza_ferimento'];
    $curativos_compressivo = $_POST['curativos_compressivo'];
    $encravamento_ocular = $_POST['encravamento_ocular'];
    $queimadura_simples = $_POST['queimadura_simples'];
    $tres_pontas = $_POST['tres_pontas'];
    $imobilizacoes_membros = $_POST['imobilizacoes_membros'];
    $quadril = $_POST['quadril'];
    $cervical = $_POST['cervical'];
    $maca_sobre_rodas = $_POST['maca_sobre_rodas'];
    $maca_rigida = $_POST['maca_rigida'];
    $ponte = $_POST['ponte'];
    $retirado_capacete = $_POST['retirado_capacete'];
    $rcp = $_POST['rcp'];
    $rolamento = $_POST['rolamento'];
    $tomada_decisao = $_POST['tomada_decisao'];
    $tratado_choque = $_POST['tratado_choque'];
    $uso_canula = $_POST['uso_canula'];
    $uso_colar = $_POST['uso_colar'];
    $tam_colar = $_POST['tam_colar'];
    $uso_ked = $_POST['uso_ked'];
    $uso_ttf = $_POST['uso_ttf'];
    $ventilacao_suporte = $_POST['ventilacao_suporte'];
    $oxigenioterapia = $_POST['oxigenioterapia'];
    $lpm_vent_sup = $_POST['lpm_vent_sup'];
    $reanimador = $_POST['reanimador'];
    $lpm_reanimador = $_POST['lpm_reanimador'];
    $meio_auxiliares = $_POST['meio_auxiliares'];
    $outro_procedimento = $_POST['outro_procedimento'];

    

    $sql_gestacional = "INSERT INTO tabela_nome (id_anamnese_gestacional, id_fichas_gestacional, periodo_gestacao, faz_uso_medicacao, nome_medico, possibilidade_complicacoes, primeiro_filho, quantidade_filhos, inicio_contracoes, duracao_contracoes, intervalo_contracoes, pressao_evacuar, ruptura_bolsa, inspecao_visual, parto_realizado, hora_nascimento, sexo_bebe, nome_bebe) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_gestacional = $conn->prepare($sql_gestacional);
    $stmt_gestacional->bind_param("iissssssssssssssss", $id_anamnese_gestacional, $id_fichas_gestacional, $periodo_gestacao, $faz_uso_medicacao, $nome_medico, $possibilidade_complicacoes, $primeiro_filho, $quantidade_filhos, $inicio_contracoes, $duracao_contracoes, $intervalo_contracoes, $pressao_evacuar, $ruptura_bolsa, $inspecao_visual, $parto_realizado, $hora_nascimento, $sexo_bebe, $nome_bebe);

    $sql_emergencia = "INSERT INTO tabela_nome (id_anamnese_emergencia, id_fichas_emergencia, oq_aconteceu, aconteceu_outras_vezes, quanto_tempo_aconteceu, possui_problema_saude, quais_problemas_saude, faz_uso_medicacao_emergencia, ultimo_horario_medicacao, quais_medicacoes, alergico_alguma_coisa, especificacao_alergia, ingeriu_alimento_liquido, horas_ingeriu) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_emergencia = $conn->prepare($sql_emergencia);
    $stmt_emergencia->bind_param("iissssssssssss", $id_anamnese_emergencia, $id_fichas_emergencia, $oq_aconteceu, $aconteceu_outras_vezes, $quanto_tempo_aconteceu, $possui_problema_saude, $quais_problemas_saude, $faz_uso_medicacao_emergencia, $ultimo_horario_medicacao, $quais_medicacoes, $alergico_alguma_coisa, $especificacao_alergia, $ingeriu_alimento_liquido, $horas_ingeriu);

    if ($stmt_gestacional->execute() === TRUE && $stmt_emergencia->execute() === TRUE) {
        echo "Cadastro realizado com sucesso! <a href='index.html'>Voltar para o login</a>";
    } else {
        echo "Erro: " . $sql_gestacional . "<br>" . $conn->error;
        echo "Erro: " . $sql_emergencia . "<br>" . $conn->error;
    }

    $stmt_gestacional->close();
    $stmt_emergencia->close();
}
$conn->close();
?>
