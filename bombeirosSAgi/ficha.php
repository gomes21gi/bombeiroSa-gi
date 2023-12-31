<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_anamnesegestacional = isset($_POST['id_anamnesegestacional']) ? $_POST['id_anamnesegestacional'] : null;
    $periodo_gestacao = isset($_POST['periodo_gestacao']) ? $_POST['periodo_gestacao'] : "";
    $faz_uso_medicacao = isset($_POST['faz_uso_medicacao']) ? 1 : 0;
    $nome_medico = isset($_POST['nome_medico']) ? $_POST['nome_medico'] : "";
    $possibilidade_complicacoes = isset($_POST['possibilidade_complicacoes']) ? 1 : 0;
    $primeiro_filho = isset($_POST['primeiro_filho']) ? 1 : 0;
    $quantidade_filhos = isset($_POST['quantidade_filhos']) ? $_POST['quantidade_filhos'] : 0;
    $inicio_contracoes = isset($_POST['inicio_contracoes']) ? $_POST['inicio_contracoes'] : "";
    $duracao_contracoes = isset($_POST['duracao_contracoes']) ? $_POST['duracao_contracoes'] : "";
    $intervalo_contracoes = isset($_POST['intervalo_contracoes']) ? $_POST['intervalo_contracoes'] : "";
    $pressao_evacuar = isset($_POST['pressao_evacuar']) ? 1 : 0;
    $ruptura_bolsa = isset($_POST['ruptura_bolsa']) ? 1 : 0;
    $inspecao_visual = isset($_POST['inspecao_visual']) ? 1 : 0;
    $parto_realizado = isset($_POST['parto_realizado']) ? 1 : 0;
    $hora_nascimento = isset($_POST['hora_nascimento']) ? $_POST['hora_nascimento'] : "";
    $sexo_bebe = isset($_POST['sexo_bebe']) ? $_POST['sexo_bebe'] : "";
    $nome_bebe = isset($_POST['nome_bebe']) ? $_POST['nome_bebe'] : "";
    $sql_anamnesegestacional = "INSERT INTO anamnesegestacional (id_anamnesegestacional, periodo_gestacao, faz_uso_medicacao, nome_medico, possibilidade_complicacoes, primeiro_filho, quantidade_filhos, inicio_contracoes, duracao_contracoes, intervalo_contracoes, pressao_evacuar, ruptura_bolsa, inspecao_visual, parto_realizado, hora_nascimento, sexo_bebe, nome_bebe) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_anamnesegestacional = $conn->prepare($sql_anamnesegestacional);
    $stmt_anamnesegestacional->bind_param("issssssssssssssss", $id_anamnesegestacional, $periodo_gestacao, $faz_uso_medicacao, $nome_medico, $possibilidade_complicacoes, $primeiro_filho, $quantidade_filhos, $inicio_contracoes, $duracao_contracoes, $intervalo_contracoes, $pressao_evacuar, $ruptura_bolsa, $inspecao_visual, $parto_realizado, $hora_nascimento, $sexo_bebe, $nome_bebe);
    if ($stmt_anamnesegestacional->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_anamnesegestacional->error;
    }

    $id_anamnese_emergencia = isset($_POST['id_anamnese_emergencia']) ? $_POST['id_anamnese_emergencia'] : null;
    $oq_aconteceu = isset($_POST['oq_aconteceu']) ? $_POST['oq_aconteceu'] : "";
    $aconteceu_outras_vezes = isset($_POST['aconteceu_outras_vezes']) ? 1 : 0;
    $quanto_tempo_aconteceu = isset($_POST['quanto_tempo_aconteceu']) ? $_POST['quanto_tempo_aconteceu'] : "";
    $faz_uso_medicacao = isset($_POST['faz_uso_medicacao']) ? 1 : 0;
    $possui_problema_saude = isset($_POST['possui_problema_saude']) ? 1 : 0;
    $quais_problemas_saude = isset($_POST['quais_problemas_saude']) ? $_POST['quais_problemas_saude'] : "";
    $quais_medicacoes = isset($_POST['quais_medicacoes']) ? $_POST['quais_medicacoes'] : "";
    $alergico_alguma_coisa = isset($_POST['alergico_alguma_coisa']) ? 1 : 0;
    $especificacao_alergia = isset($_POST['especificacao_alergia']) ? $_POST['especificacao_alergia'] : "";
    $ingeriu_alimento_liquido = isset($_POST['ingeriu_alimento_liquido']) ? 1 : 0;
    $horas_ingeriu = isset($_POST['horas_ingeriu']) ? $_POST['horas_ingeriu'] : "";
    $sql_anamnese_emergencia = "INSERT INTO anamnese_emergencia (id_anamnese_emergencia, oq_aconteceu, aconteceu_outras_vezes, quanto_tempo_aconteceu, faz_uso_medicacao, possui_problema_saude, quais_problemas_saude, alergico_alguma_coisa, especificacao_alergia, ingeriu_alimento_liquido, horas_ingeriu) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_anamnese_emergencia = $conn->prepare($sql_anamnese_emergencia);
    $stmt_anamnese_emergencia->bind_param("ssisiississ", $id_anamnese_emergencia, $oq_aconteceu, $aconteceu_outras_vezes, $quanto_tempo_aconteceu, $faz_uso_medicacao, $possui_problema_saude, $quais_problemas_saude, $alergico_alguma_coisa, $especificacao_alergia, $ingeriu_alimento_liquido, $horas_ingeriu);
    if ($stmt_anamnese_emergencia->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_anamnese_emergencia->error;
    }

    $id_avaliacaocinematica = isset($_POST['id_avaliacaocinematica']) ? $_POST['id_avaliacaocinematica'] : null;
    $disturbio_comportamento = isset($_POST['disturbio_comportamento']) ? 1 : 0;
    $encontrado_capacete = isset($_POST['encontrado_capacete']) ? 1 : 0;
    $encontrado_cinto = isset($_POST['encontrado_cinto']) ? 1 : 0;
    $para_brisas_avariado = isset($_POST['para_brisas_avariado']) ? 1 : 0;
    $caminhando_cena = isset($_POST['caminhando_cena']) ? 1 : 0;
    $painel_avariado = isset($_POST['painel_avariado']) ? 1 : 0;
    $volante_torcido = isset($_POST['volante_torcido']) ? 1 : 0;
    $sql_avaliacaocinematica = "INSERT INTO avaliacaocinematica (id_avaliacaocinematica, disturbio_comportamento, encontrado_capacete, encontrado_cinto, para_brisas_avariado, caminhando_cena, painel_avariado, volante_torcido) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_avaliacaocinematica = $conn->prepare($sql_avaliacaocinematica);
    $stmt_avaliacaocinematica->bind_param("isssssss", $id_avaliacaocinematica, $disturbio_comportamento, $encontrado_capacete, $encontrado_cinto, $para_brisas_avariado, $caminhando_cena, $painel_avariado, $volante_torcido);
    if ($stmt_avaliacaocinematica->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_avaliacaocinematica->error;
    }

     $id_avaliacaoglasgow = isset($_POST['id_avaliacaoglasgow']) ? $_POST['id_avaliacaoglasgow'] : null;
     $abertura_ocular_maiores_5 = isset($_POST['abertura_ocular_maiores_5']) ? 1 : 0;
     $abertura_ocular_menores_5 = isset($_POST['abertura_ocular_menores_5']) ? 1 : 0;
     $resposta_verbal_orientado = isset($_POST['resposta_verbal_orientado']) ? 1 : 0;
     $resposta_verbal_conflito = isset($_POST['resposta_verbal_conflito']) ? 1 : 0;
     $resposta_verbal_inapropriada = isset($_POST['resposta_verbal_inapropriada']) ? 1 : 0;
     $resposta_verbal_incompreensivel = isset($_POST['resposta_verbal_incompreensivel']) ? 1 : 0;
     $resposta_verbal_nenhuma = isset($_POST['resposta_verbal_nenhuma']) ? 1 : 0;
     $resposta_motora_obedece_comandos = isset($_POST['resposta_motora_obedece_comandos']) ? 1 : 0;
     $resposta_motora_localiza_dor = isset($_POST['resposta_motora_localiza_dor']) ? 1 : 0;
     $resposta_motora_movimento_retirada = isset($_POST['resposta_motora_movimento_retirada']) ? 1 : 0;
     $resposta_motora_flexao_anormal = isset($_POST['resposta_motora_flexao_anormal']) ? 1 : 0;
     $resposta_motora_extensao_anormal = isset($_POST['resposta_motora_extensao_anormal']) ? 1 : 0;
     $resposta_motora_nenhuma = isset($_POST['resposta_motora_nenhuma']) ? 1 : 0;
     $total_gcs = isset($_POST['total_gcs']) ? $_POST['total_gcs'] : 0;
     $sql_avaliacaoglasgow = "INSERT INTO avaliacaoglasgow (id_avaliacaoglasgow, abertura_ocular_maiores_5, abertura_ocular_menores_5, resposta_verbal_orientado, resposta_verbal_conflito, resposta_verbal_inapropriada, resposta_verbal_incompreensivel, resposta_verbal_nenhuma, resposta_motora_obedece_comandos, resposta_motora_localiza_dor, resposta_motora_movimento_retirada, resposta_motora_flexao_anormal, resposta_motora_extensao_anormal, resposta_motora_nenhuma, total_gcs) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt_avaliacaoglasgow = $conn->prepare($sql_avaliacaoglasgow);
     $stmt_avaliacaoglasgow->bind_param("issssssssssssss", $id_avaliacaoglasgow, $abertura_ocular_maiores_5, $abertura_ocular_menores_5, $resposta_verbal_orientado, $resposta_verbal_conflito, $resposta_verbal_inapropriada, $resposta_verbal_incompreensivel, $resposta_verbal_nenhuma, $resposta_motora_obedece_comandos, $resposta_motora_localiza_dor, $resposta_motora_movimento_retirada, $resposta_motora_flexao_anormal, $resposta_motora_extensao_anormal, $resposta_motora_nenhuma, $total_gcs);
     if ($stmt_avaliacaoglasgow->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_avaliacaoglasgow->error;
    }

     $id_dadosambulancia = isset($_POST['id_dadosambulancia']) ? $_POST['id_dadosambulancia'] : null;
     $numero_usd = isset($_POST['numero_usd']) ? $_POST['numero_usd'] : "";
     $numero_ocorrencia = isset($_POST['numero_ocorrencia']) ? $_POST['numero_ocorrencia'] : "";
     $despacho = isset($_POST['despacho']) ? $_POST['despacho'] : "";
     $km_final = isset($_POST['km_final']) ? $_POST['km_final'] : "";
     $codigo_ir = isset($_POST['codigo_ir']) ? 1 : 0;
     $codigo_ps = isset($_POST['codigo_ps']) ? 1 : 0;
     $hora_chegada = isset($_POST['hora_chegada']) ? $_POST['hora_chegada'] : "";
     $codigo_sia_sus = isset($_POST['codigo_sia_sus']) ? $_POST['codigo_sia_sus'] : "";
     $sql_dadosambulancia = "INSERT INTO dadosambulancia (id_dadosambulancia, numero_usd, numero_ocorrencia, despacho, km_final, codigo_ir, codigo_ps, hora_chegada, codigo_sia_sus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt_dadosambulancia = $conn->prepare($sql_dadosambulancia);
     $stmt_dadosambulancia->bind_param("issssssss", $id_dadosambulancia, $numero_usd, $numero_ocorrencia, $despacho, $km_final, $codigo_ir, $codigo_ps, $hora_chegada, $codigo_sia_sus);
     if ($stmt_dadosambulancia->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_dadosambulancia->error;
    }

    $id_dados_iniciais = isset($_POST['id_dados_iniciais']) ? $_POST['id_dados_iniciais'] : null;
    $data = isset($_POST['data']) ? $_POST['data'] : "--/--/----";
    $sexo = isset($_POST['sexo']) ? isset($_POST['sexo']) : null;
    $nome_hospital = isset($_POST['nome_hospital']) ? $_POST['nome_hospital'] : "";
    $nome_paciente = isset($_POST['nome_paciente']) ? $_POST['nome_paciente'] : "";
    $idade = isset($_POST['idade']) ? $_POST['idade'] : 0;
    $fone = isset($_POST['fone']) ? $_POST['fone'] : "";
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
    $nome_acompanhante = isset($_POST['nome_acompanhante']) ? $_POST['nome_acompanhante'] : "";
    $idade_acompanhante = isset($_POST['idade_acompanhante']) ? $_POST['idade_acompanhante'] : "";
    $local_ocorrencia = isset($_POST['local_ocorrencia']) ? $_POST['local_ocorrencia'] : "";
    $sql_dados_iniciais = "INSERT INTO dados_iniciais (id_dados_iniciais, ddi_data, sexo, nome_hospital, nome_paciente, idade, fone, cpf, nome_acompanhante, idade_acompanhante, local_ocorrencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_dados_iniciais = $conn->prepare($sql_dados_iniciais);
    $stmt_dados_iniciais->bind_param("issssssssss", $id_dados_iniciais, $data, $sexo, $nome_hospital, $nome_paciente, $idade, $fone, $cpf, $nome_acompanhante, $idade_acompanhante, $local_ocorrencia);
    if ($stmt_dados_iniciais->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_dados_iniciais->error;
    }

     $id_decisaotransporte = isset($_POST['id_decisaotransporte']) ? $_POST['id_decisaotransporte'] : null;
     $decisao_transporte = isset($_POST['decisao_transporte']) ? 1 : 0;
     $sql_decisaotransporte = "INSERT INTO decisaotransporte (id_decisaotransporte, id_fichas, decisao_transporte) VALUES (?, ?, ?)";
     $stmt_decisaotransporte = $conn->prepare($sql_decisaotransporte);
     $stmt_decisaotransporte->bind_param("iis", $id_decisaotransporte, $id_fichas_decisaotransporte, $decisao_transporte);
     if ($stmt_decisaotransporte->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_decisaotransporte->error;
    }

     $id_equipeatendimento = isset($_POST['id_equipeatendimento']) ? $_POST['id_equipeatendimento'] : null;
     $nome_m = isset($_POST['nome_m']) ? $_POST['nome_m'] : "";
     $nome_s1 = isset($_POST['nome_s1']) ? $_POST['nome_s1'] : "";
     $nome_s2 = isset($_POST['nome_s2']) ? $_POST['nome_s2'] : "";
     $nome_s3 = isset($_POST['nome_s3']) ? $_POST['nome_s3'] : "";
     $demandante = isset($_POST['demandante']) ? $_POST['demandante'] : "";
     $equipe = isset($_POST['equipe']) ? $_POST['equipe'] : "";
     $sql_equipeatendimento = "INSERT INTO equipeatendimento (id_equipeatendimento, id_fichas, nome_m, nome_s1, nome_s2, nome_s3, demandante, equipe) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt_equipeatendimento = $conn->prepare($sql_equipeatendimento);
     $stmt_equipeatendimento->bind_param("iissssss", $id_equipeatendimento, $id_fichas_equipeatendimento, $nome_m, $nome_s1, $nome_s2, $nome_s3, $demandante, $equipe);
     if ($stmt_equipeatendimento->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_equipeatendimento->error;
    }

     $id_ferimentos = isset($_POST['id_ferimentos']) ? $_POST['id_ferimentos'] : null;
     $local = isset($_POST['local']) ? $_POST['local'] : "";
     $lado = isset($_POST['lado']) ? 1 : 0;
     $face = isset($_POST['face']) ? 1 : 0;
     $tipo = isset($_POST['tipo']) ? 1 : 0;
     $sql_ferimentos = "INSERT INTO ferimentos (id_ferimentos, id_fichas, local, lado, face, tipo) VALUES (?, ?, ?, ?, ?, ?)";
     $stmt_ferimentos = $conn->prepare($sql_ferimentos);
     $stmt_ferimentos->bind_param("iissss", $id_ferimentos, $id_fichas_ferimentos, $local, $lado, $face, $tipo);
     if ($stmt_ferimentos->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_ferimentos->error;
    }

     $id_formaconducao = isset($_POST['id_formaconducao']) ? $_POST['id_formaconducao'] : null;
     $forma_conducao = isset($_POST['forma_conducao']) ? 1 : 0;
     $sql_formaconducao = "INSERT INTO formaconducao (id_formaconducao, id_fichas, forma_conducao) VALUES (?, ?, ?)";
     $stmt_formaconducao = $conn->prepare($sql_formaconducao);
     $stmt_formaconducao->bind_param("iis", $id_formaconducao, $id_fichas_formaconducao, $forma_conducao);
     if ($stmt_formaconducao->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_formaconducao->error;
    }

     $id_materiaisdeixadoshospital = isset($_POST['id_materiaisdeixadoshospital']) ? $_POST['id_materiaisdeixadoshospital'] : null;
     $base_estabilizacao_qt = isset($_POST['base_estabilizacao_qt']) ? 1 : 0;
     $ttf_qt = isset($_POST['ttf_qt']) ? 1 : 0;
     $colar_qt = isset($_POST['colar_qt']) ? 1 : 0;
     $tirante_aranha_qt = isset($_POST['tirante_aranha_qt']) ? 1 : 0;
     $colar_custom_qt = isset($_POST['colar_custom_qt']) ? 1 : 0;
     $tirante_cabeca_qt = isset($_POST['tirante_cabeca_qt']) ? 1 : 0;
     $coxins_estabilizacao_qt = isset($_POST['coxins_estabilizacao_qt']) ? 1 : 0;
     $canula_qt = isset($_POST['canula_qt']) ? 1 : 0;
     $ked_qt = isset($_POST['ked_qt']) ? 1 : 0;
     $maca_rigida_qt = isset($_POST['maca_rigida_qt']) ? 1 : 0;
     $digite_mdh = isset($_POST['digite_mdh']) ? $_POST['digite_mdh'] : "";
     $quantidade_mdh = isset($_POST['quantidade_mdh']) ? $_POST['quantidade_mdh'] : "";
     $sql_materiaisdeixadoshospital = "INSERT INTO materiaisdeixadoshospital (id_materiaisdeixadoshospital, id_fichas, base_estabilizacao_qt, ttf_qt, colar_qt, tirante_aranha_qt, colar_custom_qt, tirante_cabeca_qt, coxins_estabilizacao_qt, canula_qt, ked_qt, maca_rigida_qt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt_materiaisdeixadoshospital = $conn->prepare($sql_materiaisdeixadoshospital);
     $stmt_materiaisdeixadoshospital->bind_param("iisiiiiiiiii", $id_materiaisdeixadoshospital, $id_fichas_materiaisdeixadoshospital, $base_estabilizacao_qt, $ttf_qt, $colar_qt, $tirante_aranha_qt, $colar_custom_qt, $tirante_cabeca_qt, $coxins_estabilizacao_qt, $canula_qt, $ked_qt, $maca_rigida_qt);
     if ($stmt_materiaisdeixadoshospital->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_materiaisdeixadoshospital->error;
    }

     $id_materiaisutilizadosdescartaveis = isset($_POST['id_materiaisutilizadosdescartaveis']) ? $_POST['id_materiaisutilizadosdescartaveis'] : null;
     $ataduras_qt = isset($_POST['ataduras_qt']) ? 1 : 0;
     $manta_aluminizada_qt = isset($_POST['manta_aluminizada_qt']) ? 1 : 0;
     $cateter_tp_oculos_qt = isset($_POST['cateter_tp_oculos_qt']) ? 1 : 0;
     $pas_dea_qt = isset($_POST['pas_dea_qt']) ? 1 : 0;
     $compressa_comum_qt = isset($_POST['compressa_comum_qt']) ? 1 : 0;
     $sonda_aspiracao_qt = isset($_POST['sonda_aspiracao_qt']) ? 1 : 0;
     $kits_qt = isset($_POST['kits_qt']) ? 1 : 0;
    $soro_fisiologico_qt = isset($_POST['soro_fisiologico_qt']) ? 1 : 0;
     $luvas_desc_pares_qt = isset($_POST['luvas_desc_pares_qt']) ? 1 : 0;
     $talas_pap_qt = isset($_POST['talas_pap_qt']) ? 1 : 0;
     $mascara_desc_qt = isset($_POST['mascara_desc_qt']) ? 1 : 0;
     $digite_mud = isset($_POST['digite_mud']) ? $_POST['digite_mud'] : "";
     $quantidade_mud = isset($_POST['quantidade_mud']) ? $_POST['quantidade_mud'] : "";
     $sql_materiaisutilizadosdescartaveis = "INSERT INTO materiaisutilizadosdescartavel (id_materiaisutilizadosdescartaveis, id_fichas, ataduras_qt, manta_aluminizada_qt, cateter_tp_oculos_qt, pas_dea_qt, compressa_comum_qt, sonda_aspiracao_qt, kits_qt, soro_fisiologico_qt, luvas_desc_pares_qt, talas_pap_qt, mascara_desc_qt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt_materiais_utilizadosdescartaveis = $conn->prepare($sql_materiaisutilizadosdescartaveis);
     $stmt_materiais_utilizadosdescartaveis->bind_param("iisiiiiiiiiii", $id_materiaisutilizadosdescartaveis, $id_fichas_materiaisutilizadosdescartaveis, $ataduras_qt, $manta_aluminizada_qt, $cateter_tp_oculos_qt, $pas_dea_qt, $compressa_comum_qt, $sonda_aspiracao_qt, $kits_qt, $soro_fisiologico_qt, $luvas_desc_pares_qt, $talas_pap_qt, $mascara_desc_qt);
     if ($stmt_materiais_utilizadosdescartaveis->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_materiais_utilizadosdescartaveis->error;
    }

     $id_objetosrecolhidos = isset($_POST['id_objetosrecolhidos']) ? $_POST['id_objetosrecolhidos'] : null;
     $objetos_recolhidos = isset($_POST['objetos_recolhidos']) ? $_POST['objetos_recolhidos'] : "";
     $sql_objetosrecolhidos = "INSERT INTO objetosrecolhidos (id_objetosrecolhidos, id_fichas, objetos_recolhidos) VALUES (?, ?, ?)";
     $stmt_objetosrecolhidos = $conn->prepare($sql_objetosrecolhidos);
     $stmt_objetosrecolhidos->bind_param("iis", $id_objetosrecolhidos, $id_fichas_objetosrecolhidos, $objetos_recolhidos);
     if ($stmt_objetosrecolhidos->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_objetosrecolhidos->error;
    }

     $id_observacoesimportantes = isset($_POST['id_observacoesimportantes']) ? $_POST['id_observacoesimportantes'] : null;
     $observacoes = isset($_POST['observacoes']) ? $_POST['observacoes'] : "";
     $sql_observacoesimportantes = "INSERT INTO observacoesimportantes (id_observacoesimportantes, id_fichas, observacoes) VALUES (?, ?, ?)";
     $stmt_observacoesimportantes = $conn->prepare($sql_observacoesimportantes);
     $stmt_observacoesimportantes->bind_param("iis", $id_observacoesimportantes, $id_fichas_observacoesimportantes, $observacoes);
     if ($stmt_observacoesimportantes->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_observacoesimportantes->error;
    }

     $id_problemas_suspeitos = isset($_POST['id_problemas_suspeitos']) ? $_POST['id_problemas_suspeitos'] : null;
     $psiquiatrico = isset($_POST['psiquiatrico']) ? 1 : 0;
     $respiratorio = isset($_POST['respiratorio']) ? 2 : 0;
     $diabetes = isset($_POST['diabetes']) ? 2 : 0;
     $obstetrico = isset($_POST['obstetrico']) ? 2 : 0;
     $transporte = isset($_POST['transporte']) ? 2 : 0;
     $outros = isset($_POST['outros']) ? $_POST['outros'] : "";
     $sql_problemas_suspeitos = "INSERT INTO problemas_suspeitos (id_problemas_suspeitos, id_fichas, psiquiatrico, respiratorio, diabetes, obstetrico, transporte, outros) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt_problemas_suspeitos = $conn->prepare($sql_problemas_suspeitos);
     $stmt_problemas_suspeitos->bind_param("iissssss", $id_problemas_suspeitos, $id_fichas_problemas_suspeitos, $psiquiatrico, $respiratorio, $diabetes, $obstetrico, $transporte, $outros);
     if ($stmt_problemas_suspeitos->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_problemas_suspeitos->error;
    }

     $id_procedimentosefetuados = isset($_POST['id_procedimentosefetuados']) ? $_POST['id_procedimentosefetuados'] : null;
    $id_fichas_procedimentosefetuados = isset($_POST['id_fichas']) ? $_POST['id_fichas'] : null;
     $aspiracao = isset($_POST['aspiracao']) ? 1 : 0;
     $avaliacao_inicial = isset($_POST['avaliacao_inicial']) ? 1 : 0;
     $avaliacao_dirigida = isset($_POST['avaliacao_dirigida']) ? 1 : 0;
     $avaliacao_continuada = isset($_POST['avaliacao_continuada']) ? 1 : 0;
     $chave_rautek = isset($_POST['chave_rautek']) ? 1 : 0;
     $canula_guedel = isset($_POST['canula_guedel']) ? 1 : 0;
     $desobstrucao_va = isset($_POST['desobstrucao_va']) ? 1 : 0;
     $emprego_dea = isset($_POST['emprego_dea']) ? 1 : 0;
     $gerenciamento_riscos = isset($_POST['gerenciamento_riscos']) ? 1 : 0;
     $limpeza_ferimento = isset($_POST['limpeza_ferimento']) ? 1 : 0;
     $curativos = isset($_POST['curativos']) ? 1 : 0;
     $compressivo = isset($_POST['compressivo']) ? 1 : 0;
     $encravamento = isset($_POST['encravamento']) ? 1 : 0;
     $ocular = isset($_POST['ocular']) ? 1 : 0;
     $queimadura = isset($_POST['queimadura']) ? 1 : 0;
     $simples = isset($_POST['simples']) ? 1 : 0;
     $tres_pontas = isset($_POST['tres_pontas']) ? 1 : 0;
     $imobilizacoes = isset($_POST['imobilizacoes']) ? 1 : 0;
     $mid = isset($_POST['mid']) ? 1 : 0;
     $mie = isset($_POST['mie']) ? 1 : 0;
     $msd = isset($_POST['msd']) ? 1 : 0;
     $mse = isset($_POST['mse']) ? 1 : 0;
     $quadril = isset($_POST['quadril']) ? 1 : 0;
     $cervical = isset($_POST['cervical']) ? 1 : 0;
     $maca_sobre_rodas = isset($_POST['maca_sobre_rodas']) ? 1 : 0;
     $maca_rigida = isset($_POST['maca_rigida']) ? 1 : 0;
     $ponte = isset($_POST['ponte']) ? 1 : 0;
     $retirado_capacete = isset($_POST['retirado_capacete']) ? 1 : 0;
     $rcp = isset($_POST['rcp']) ? 1 : 0;
     $rolamento_90 = isset($_POST['rolamento_90']) ? 1 : 0;
     $rolamento_180 = isset($_POST['rolamento_180']) ? 1 : 0;
     $tomada_decisao = isset($_POST['tomada_decisao']) ? 1 : 0;
     $tratado_choque = isset($_POST['tratado_choque']) ? 1 : 0;
     $uso_canula = isset($_POST['uso_canula']) ? 1 : 0;
     $uso_colar = isset($_POST['uso_colar']) ? 1 : 0;
     $tam_colar = isset($_POST['tam_colar']) ? $_POST['tam_colar'] : "0";
     $uso_ked = isset($_POST['uso_ked']) ? 1 : 0;
     $uso_ttf = isset($_POST['uso_ttf']) ? 1 : 0;
     $ventilacao_suporte = isset($_POST['ventilacao_suporte']) ? 1 : 0;
     $oxigenioterapia = isset($_POST['oxigenioterapia']) ? 1 : 0;
     $lpm_vent_sup = isset($_POST['lpm_vent_sup']) ? 1 : 0;
     $reanimador = isset($_POST['reanimador']) ? 1 : 0;
     $lpm_reanimador = isset($_POST['lpm_reanimador']) ? 1 : 0;
     $meio_auxiliares = isset($_POST['meio_auxiliares']) ? 5 : 0;
     $outro_procedimento = isset($_POST['outro_procedimento']) ? $_POST['outro_procedimento'] : "0";
    $sql_procedimentosefetuados = "INSERT INTO procedimentosefetuados (id_procedimentosefetuados, id_fichas, aspiracao, avaliacao_inicial, avaliacao_dirigida, avaliacao_continuada, chave_rautek, canula_guedel, desobstrucao_va, emprego_dea, gerenciamento_riscos, limpeza_ferimento, curativos, compressivo, encravamento, ocular, queimadura, simples, tres_pontas, imobilizacoes, quadril, cervical, maca_sobre_rodas, maca_rigida, ponte, retirado_capacete, rcp, rolamento, tomada_decisao, tratado_choque, uso_canula, uso_colar, tam_colar, uso_ked, uso_ttf, ventilacao_suporte, oxigenioterapia, lpm_vent_sup, reanimador, lpm_reanimador, meio_auxiliares, outro_procedimento)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_procedimentosefetuados = $conn->prepare($sql_procedimentosefetuados);
    $stmt_procedimentosefetuados->bind_param("iissssssssssssssssssssssssssssssssssssssss",
        $id_procedimentosefetuados,
        $id_fichas_procedimentosefetuados,
        $aspiracao,
        $avaliacao_inicial,
        $avaliacao_dirigida,
        $avaliacao_continuada,
        $chave_rautek,
        $canula_guedel,
        $desobstrucao_va,
        $emprego_dea,
        $gerenciamento_riscos,
        $limpeza_ferimento,
        $curativos,
        $compressivo,
        $encravamento,
        $ocular,
        $queimadura,
        $simples,
        $tres_pontas,
        $imobilizacoes,
        $quadril,
        $cervical,
        $maca_sobre_rodas,
        $maca_rigida,
        $ponte,
        $retirado_capacete,
        $rcp,
        $rolamento,
        $tomada_decisao,
        $tratado_choque,
        $uso_canula,
        $uso_colar,
        $tam_colar,
        $uso_ked,
        $uso_ttf,
        $ventilacao_suporte,
        $oxigenioterapia,
        $lpm_vent_sup,
        $reanimador,
        $lpm_reanimador,
        $meio_auxiliares,
        $outro_procedimento);
     if ($stmt_procedimentosefetuados->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_procedimentosefetuados->error;
    }

     $id_queimaduras = isset($_POST['id_queimaduras']) ? $_POST['id_queimaduras'] : null;
     $localizacao = isset($_POST['localizacao']) ? 1 : 0;
     $grau_queimadura = isset($_POST['grau_queimadura']) ? 1 : 0;
     $sql_queimaduras = "INSERT INTO queimaduras (id_queimaduras, id_fichas, localizacao, grau_queimadura) VALUES (?, ?, ?, ?)";
     $stmt_queimaduras = $conn->prepare($sql_queimaduras);
     $stmt_queimaduras->bind_param("isss", $id_queimaduras, $id_fichas_queimaduras, $localizacao, $grau_queimadura);
     if ($stmt_queimaduras->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_queimaduras->error;
    }

     $id_sinaissintomas = isset($_POST['id_sinaissintomas']) ? $_POST['id_sinaissintomas'] : null;
     $abdomem = isset($_POST['abdomem']) ? 1 : 0;
     $abdomem_rigido = isset($_POST['abdomem_rigido']) ? 1 : 0;
     $afundamento_de_cranio = isset($_POST['afundamento_de_cranio']) ? 1 : 0;
     $agitacao = isset($_POST['agitacao']) ? 1 : 0;
     $apneia = isset($_POST['apneia']) ? 1 : 0;
     $bradicardia = isset($_POST['bradicardia']) ? 1 : 0;
     $bradipneia = isset($_POST['bradipneia']) ? 1 : 0;
     $bronco_aspirando = isset($_POST['bronco_aspirando']) ? 1 : 0;
     $cefaleia = isset($_POST['cefaleia']) ? 1 : 0;
     $cianose = isset($_POST['cianose']) ? 1 : 0;
     $cianose_labios = isset($_POST['cianose_labios']) ? 1 : 0;
     $cianose_extremidade = isset($_POST['cianose_extremidade']) ? 1 : 0;
     $convulsao = isset($_POST['convulsao']) ? 1 : 0;
     $decorticacao = isset($_POST['decorticacao']) ? 1 : 0;
     $deformidade = isset($_POST['deformidade']) ? 1 : 0;
     $descerebracao = isset($_POST['descerebracao']) ? 1 : 0;
     $desmaio = isset($_POST['desmaio']) ? 1 : 0;
     $desvio_de_traqueia = isset($_POST['desvio_de_traqueia']) ? 1 : 0;
     $dispneia = isset($_POST['dispneia']) ? 1 : 0;
     $dor_local = isset($_POST['dor_local']) ? 1 : 0;
     $edma = isset($_POST['edma']) ? 1 : 0;
     $edma_generalizados = isset($_POST['edma_generalizados']) ? 1 : 0;
     $edma_localizados = isset($_POST['edma_localizados']) ? 1 : 0;
     $enfisema_subcutaneo = isset($_POST['enfisema_subcutaneo']) ? 1 : 0;
     $estase_de_jugular = isset($_POST['estase_de_jugular']) ? 1 : 0;
     $face_palida = isset($_POST['face_palida']) ? 1 : 0;
     $hemorragia = isset($_POST['hemorragia']) ? 1 : 0;
     $hemorragia_interna = isset($_POST['hemorragia_interna']) ? 1 : 0;
     $hemorragia_externa = isset($_POST['hemorragia_externa']) ? 1 : 0;
     $hipertensao = isset($_POST['hipertensao']) ? 1 : 0;
     $hipotensao = isset($_POST['hipotensao']) ? 1 : 0;
     $nauseas_vomitos = isset($_POST['nauseas_vomitos']) ? 1 : 0;
     $nasoragia = isset($_POST['nasoragia']) ? 1 : 0;
     $obito = isset($_POST['obito']) ? 1 : 0;
     $otorreia = isset($_POST['otorreia']) ? 1 : 0;
     $ovace = isset($_POST['ovace']) ? 1 : 0;
     $parada = isset($_POST['parada']) ? 1 : 0;
     $parada_cardiaca = isset($_POST['parada_cardiaca']) ? 1 : 0;
     $parada_respiratoria = isset($_POST['parada_respiratoria']) ? 1 : 0;
     $priaprismo = isset($_POST['priaprismo']) ? 1 : 0;
     $prurido_na_pele = isset($_POST['prurido_na_pele']) ? 1 : 0;
     $pupilas = isset($_POST['pupilas']) ? 1 : 0;
     $pupilas_anisocoria = isset($_POST['pupilas_anisocoria']) ? 1 : 0;
     $pupilas_isocoria = isset($_POST['pupilas_isocoria']) ? 1 : 0;
     $pupilas_midriase = isset($_POST['pupilas_midriase']) ? 1 : 0;
     $pupilas_miose = isset($_POST['pupilas_miose']) ? 1 : 0;
     $pupilas_reagente = isset($_POST['pupilas_reagente']) ? 1 : 0;
     $pupilas_nao_reagente = isset($_POST['pupilas_nao_reagente']) ? 1 : 0;
     $sede = isset($_POST['sede']) ? 1 : 0;
     $sinal_de_battle = isset($_POST['sinal_de_battle']) ? 1 : 0;
     $sinal_de_guaxinim = isset($_POST['sinal_de_guaxinim']) ? 1 : 0;
     $sudorese = isset($_POST['sudorese']) ? 1 : 0;
     $taquipneia = isset($_POST['taquipneia']) ? 1 : 0;
     $taquicardia = isset($_POST['taquicardia']) ? 1 : 0;
     $tontura = isset($_POST['tontura']) ? 1 : 0;
     $outros_sintomas = isset($_POST['outros_sintomas']) ? $_POST['outros_sintomas'] : "0";
     $sql_sinaissintomas = "INSERT INTO sinaissintomas (id_sinaissintomas, id_fichas, abdomem_sensivel, afundamento_de_cranio, agitacao, apneia, bradicardia, bradipneia, bronco_aspirando, cefaleia, cianose_labios, cianose_extremidade, convulsao, decorticacao, deformidade, descerebracao, desmaio, desvio_de_traqueia, dispneia, dor_local, edma_generalizados, edma_localizados, enfisema_subcutaneo, estase_de_jugular, face_palida, hemorragia_interna, hemorragia_externa, hipertensao, hipotensao, nauseas_vomitos, nasoragia, obito, otorreia, ovace, parada_cardiaca, parada_respiratoria, priaprismo, prurido_na_pele, pupilas_anisocoria, pupilas_isocoria, pupilas_midriase, pupilas_miose, pupilas_reagente, pupilas_nao_reagente, sede, sinal_de_battle, sinal_de_guaxinim, sudorese, taquipneia, taquicardia, tontura, outros_sintomas) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt_sinaissintomas = $conn->prepare($sql_sinaissintomas);
     $stmt_sinaissintomas->bind_param("iissssssssssssssssssssssssssssssssssssssssssssssssss", $id_sinaissintomas, $id_fichas_sinaissintomas, $abdomem, $afundamento_de_cranio, $agitacao, $apneia, $bradicardia, $bradipneia, $bronco_aspirando, $cefaleia, $cianose_labios, $cianose_extremidade, $convulsao, $decorticacao, $deformidade, $descerebracao, $desmaio, $desvio_de_traqueia, $dispneia, $dor_local, $edma_generalizados, $edma_localizados, $enfisema_subcutaneo, $estase_de_jugular, $face_palida, $hemorragia_interna, $hemorragia_externa, $hipertensao, $hipotensao, $nauseas_vomitos, $nasoragia, $obito, $otorreia, $ovace, $parada_cardiaca, $parada_respiratoria, $priaprismo, $prurido_na_pele, $pupilas_anisocoria, $pupilas_isocoria, $pupilas_midriase, $pupilas_miose, $pupilas_reagente, $pupilas_nao_reagente, $sede, $sinal_de_battle, $sinal_de_guaxinim, $sudorese, $taquipneia, $taquicardia, $tontura, $outros_sintomas);
     if ($stmt_sinaissintomas->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_sinaissintomas->error;
    }

     $id_sinaisvitais = isset($_POST['id_sinaisvitais']) ? $_POST['id_sinaisvitais'] : null;
     $id_pressao_arterial = isset($_POST['id_pressao_arterial'])? $_POST['id_pressao_arterial'] : "";
     $pulso = isset($_POST['pulso']) ? $_POST['pulso'] : "";
     $id_respiracao = isset($_POST['id_respiracao'])? $_POST['id_respiracao'] : "";
     $id_pulsacao_percentual = isset($_POST['id_pulsacao_percentual'])? $_POST['id_pulsacao_percentual'] : "";
     $id_hgt = isset($_POST['id_hgt']) ? $_POST['id_hgt'] : "";
     $id_temperatura = isset($_POST['id_temperatura'])? $_POST['id_temperatura'] : "";
     $id_perfusao = isset($_POST['id_perfusão']) ? '>2 seg' : '+=2 seg';
     $id_sinais = isset($_POST['id_sinais']) ? 'Anormal' : 'Normal';
     $sql_sinaisvitais = "INSERT INTO sinaisvitais (id_sinaisvitais, id_fichas, pressao_arterial, pulso, respiracao, pulsacao_percentual, hgt, temperatura, perfusao, sinais) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt_sinaisvitais = $conn->prepare($sql_sinaisvitais);
     $stmt_sinaisvitais->bind_param("iissssssss", $id_sinaisvitais, $id_fichas_sinaisvitais, $id_pressao_arterial, $pulso, $id_respiracao, $id_pulsacao_percentual, $id_hgt, $id_temperatura, $id_perfusao, $id_sinais);
     if ($stmt_sinaisvitais->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_sinaisvitais->error;
    }

     $id_termorecusaatendimento = isset($_POST['id_termorecusaatendimento']) ? $_POST['id_termorecusaatendimento'] : null;
     $id_nome_paciente = isset($_POST['id_nome_paciente']) ? $_POST['id_nome_paciente'] : "";
     $id_rg_paciente = isset($_POST['id_rg_paciente']) ? $_POST['id_rg_paciente'] : "";
     $id_cpf_paciente = isset($_POST['id_cpf_paciente']) ? $_POST['id_cpf_paciente'] : "";
     $id_ass = isset($_POST['id_ass']) ? $_POST['id_ass'] : "";
     $id_nome_testemunha_1 = isset($_POST['id_nome_testemunha_1']) ? $_POST['id_nome_testemunha_1'] : "";
     $id_rg_testemunha_1 = isset($_POST['id_rg_testemunha_1']) ? $_POST['id_rg_testemunha_1'] : "";
     $id_nome_testemunha_2 = isset($_POST['id_nome_testemunha_2']) ? $_POST['id_nome_testemunha_2'] : "";
     $id_rg_testemunha_2 = isset($_POST['id_rg_testemunha_2']) ? $_POST['id_rg_testemunha_2'] : "";
     $sql_termorecusaatendimento = "INSERT INTO termorecusaatendimento (id_termorecusaatendimento, id_fichas, nome_paciente, rg_paciente, cpf_paciente, nome_testemunha_1, rg_testemunha_1, nome_testemunha_2, rg_testemunha_2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt_termorecusaatendimento = $conn->prepare($sql_termorecusaatendimento);
     $stmt_termorecusaatendimento->bind_param("iisssssss", $id_termorecusaatendimento, $id_ficha_termorecusaatendimento, $id_nome_paciente, $id_rg_paciente, $id_cpf_paciente, $id_nome_testemunha_1, $id_rg_testemunha_1, $id_nome_testemunha_2, $id_rg_testemunha_2);
     if ($stmt_termorecusaatendimento->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_termorecusaatendimento->error;
    }

     $id_trauma = isset($_POST['id_trauma']) ? $_POST['id_trauma'] : null;
     $id_tipo_paciente = isset($_POST['id_tipo_paciente']) ? 'Adulto' : 'Criança';
     $id_parte_corpo = isset($_POST['id_parte_corpo']) ? 1 : 0;
     $id_localizacao_frente = isset($_POST['id_localizacao_frente']) ? 1 : 0;
     $id_localizacao_verso = isset($_POST['id_localizacao_verso']) ? 1 : 0;
     $sql_trauma = "INSERT INTO trauma (id_trauma, tipo_paciente, parte_corpo, localizacao_frente, localizacao_verso) VALUES (?, ?, ?, ?, ?)";
     $stmt_trauma = $conn->prepare($sql_trauma);
     $stmt_trauma->bind_param("iisss", $id_trauma,$id_tipo_paciente, $id_parte_corpo, $id_localizacao_frente, $id_localizacao_verso);
     if ($stmt_trauma->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_trauma->error;
    }

     $id_vitimaera = isset($_POST['id_vitimaera']) ? $_POST['id_vitimaera'] : null;
     $id_ciclista = isset($_POST['id_ciclista']) ? 1 : 0;
     $id_condutor_moto = isset($_POST['id_condutor_moto']) ? 1 : 0;
     $id_gestante = isset($_POST['id_gestante']) ? 1 : 0;
     $id_pass_ban_frente = isset($_POST['id_pass_ban_frente']) ? 1 : 0;
     $id_pass_moto = isset($_POST['id_pass_moto']) ? 1 : 0;
     $id_condutor_carro = isset($_POST['id_condutor_carro']) ? 1 : 0;
     $id_clinico = isset($_POST['id_clinico']) ? 1 : 0;
     $id_trauma = isset($_POST['id_trauma']) ? 1 : 0;
     $id_pass_bco_tras = isset($_POST['id_pass_bco_tras']) ? 1 : 0;
     $id_pedestre = isset($_POST['id_pedestre']) ? 1 : 0;
     $sql_vitimaera = "INSERT INTO vitimaera (id_vitimaera, ciclista, condutor_moto, gestante, pass_ban_frente, pass_moto, condutor_carro, clinico, pass_bco_tras, pedestre) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt_vitimaera = $conn->prepare($sql_vitimaera);
     $stmt_vitimaera->bind_param("isssssssss", $id_vitimaera, $id_ciclista, $id_condutor_moto, $id_gestante, $id_pass_ban_frente, $id_pass_moto, $id_condutor_carro, $id_clinico, $id_pass_bco_tras, $id_pedestre);
     if ($stmt_vitimaera->execute()) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro: " . $stmt_vitimaera->error;
    }
    }

// Inserção bem-sucedida
echo "<script type='text/javascript'>
    alert('Inserção bem-sucedida no banco de dados.');
    window.location.href = 'ficha.html';
</script>";
?>