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

    $id_queimaduras = $_POST['id_queimaduras'];
    $id_fichas_queimaduras = $_POST['id_fichas_queimaduras'];
    $localizacao = $_POST['localizacao'];
    $grau_queimadura = $_POST['grau_queimadura'];

    $id_sinais_sintomas = $_POST['id_sinais_sintomas'];
    $id_fichas_sinais_sintomas = $_POST['id_fichas_sinais_sintomas'];
    $abdomem_sensivel = $_POST['abdomem_sensivel'];
    $afundamento_de_cranio = $_POST['afundamento_de_cranio'];
    $agitacao = $_POST['agitacao'];
    $apneia = $_POST['apneia'];
    $bradicardia = $_POST['bradicardia'];
    $bradipneia = $_POST['bradipneia'];
    $bronco_aspirando = $_POST['bronco_aspirando'];
    $cefaleia = $_POST['cefaleia'];
    $cianose_labios = $_POST['cianose_labios'];
    $cianose_extremidade = $_POST['cianose_extremidade'];
    $convulsao = $_POST['convulsao'];
    $decorticacao = $_POST['decorticacao'];
    $deformidade = $_POST['deformidade'];
    $descerebracao = $_POST['descerebracao'];
    $desmaio = $_POST['desmaio'];
    $desvio_de_traqueia = $_POST['desvio_de_traqueia'];
    $dispneia = $_POST['dispneia'];
    $dor_local = $_POST['dor_local'];
    $edma_generalizados = $_POST['edma_generalizados'];
    $edma_localizados = $_POST['edma_localizados'];
    $enfisema_subcutaneo = $_POST['enfisema_subcutaneo'];
    $estase_de_jugular = $_POST['estase_de_jugular'];
    $face_palida = $_POST['face_palida'];
    $hemorragia_interna = $_POST['hemorragia_interna'];
    $hemorragia_externa = $_POST['hemorragia_externa'];
    $hipertensao = $_POST['hipertensao'];
    $hipotensao = $_POST['hipotensao'];
    $nauseas_vomitos = $_POST['nauseas_vomitos'];
    $nasoragia = $_POST['nasoragia'];
    $obito = $_POST['obito'];
    $otorreia = $_POST['otorreia'];
    $ovace = $_POST['ovace'];
    $parada_cardiaca = $_POST['parada_cardiaca'];
    $parada_respiratoria = $_POST['parada_respiratoria'];
    $priaprismo = $_POST['priaprismo'];
    $prurido_na_pele = $_POST['prurido_na_pele'];
    $pupilas_anisocoria = $_POST['pupilas_anisocoria'];
    $pupilas_isocoria = $_POST['pupilas_isocoria'];
    $pupilas_midriase = $_POST['pupilas_midriase'];
    $pupilas_miose = $_POST['pupilas_miose'];
    $pupilas_reagente = $_POST['pupilas_reagente'];
    $pupilas_nao_reagente = $_POST['pupilas_nao_reagente'];
    $sede = $_POST['sede'];
    $sinal_de_battle = $_POST['sinal_de_battle'];
    $sinal_de_guaxinim = $_POST['sinal_de_guaxinim'];
    $sudorese = $_POST['sudorese'];
    $taquipneia = $_POST['taquipneia'];
    $taquicardia = $_POST['taquicardia'];
    $tontura = $_POST['tontura'];
    $outros_sintomas = $_POST['outros_sintomas'];

    $sql_gestacional = "INSERT INTO tabela_nome (id_anamnese_gestacional, id_fichas_gestacional, periodo_gestacao, faz_uso_medicacao, nome_medico, possibilidade_complicacoes, primeiro_filho, quantidade_filhos, inicio_contracoes, duracao_contracoes, intervalo_contracoes, pressao_evacuar, ruptura_bolsa, inspecao_visual, parto_realizado, hora_nascimento, sexo_bebe, nome_bebe) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_gestacional = $conn->prepare($sql_gestacional);
    $stmt_gestacional->bind_param("iissssssssssssssss", $id_anamnese_gestacional, $id_fichas_gestacional, $periodo_gestacao, $faz_uso_medicacao, $nome_medico, $possibilidade_complicacoes, $primeiro_filho, $quantidade_filhos, $inicio_contracoes, $duracao_contracoes, $intervalo_contracoes, $pressao_evacuar, $ruptura_bolsa, $inspecao_visual, $parto_realizado, $hora_nascimento, $sexo_bebe, $nome_bebe);

    $sql_emergencia = "INSERT INTO tabela_nome (id_anamnese_emergencia, id_fichas_emergencia, oq_aconteceu, aconteceu_outras_vezes, quanto_tempo_aconteceu, possui_problema_saude, quais_problemas_saude, faz_uso_medicacao_emergencia, ultimo_horario_medicacao, quais_medicacoes, alergico_alguma_coisa, especificacao_alergia, ingeriu_alimento_liquido, horas_ingeriu) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_emergencia = $conn->prepare($sql_emergencia);
    $stmt_emergencia->bind_param("iissssssssssss", $id_anamnese_emergencia, $id_fichas_emergencia, $oq_aconteceu, $aconteceu_outras_vezes, $quanto_tempo_aconteceu, $possui_problema_saude, $quais_problemas_saude, $faz_uso_medicacao_emergencia, $ultimo_horario_medicacao, $quais_medicacoes, $alergico_alguma_coisa, $especificacao_alergia, $ingeriu_alimento_liquido, $horas_ingeriu);

    $sql_cinematica = "INSERT INTO tabela_cinematica (id_avaliacao_cinematica, id_fichas_cinematica, disturbio_comportamento, encontrado_capacete, encontrado_cinto, para_brisas_avariado, caminhando_cena, painel_avariado, volante_torcido) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_cinematica = $conn->prepare($sql_cinematica);
    $stmt_cinematica->bind_param("iisssssss", $id_avaliacao_cinematica, $id_fichas_cinematica, $disturbio_comportamento, $encontrado_capacete, $encontrado_cinto, $para_brisas_avariado, $caminhando_cena, $painel_avariado, $volante_torcido);

    $sql_glasgow = "INSERT INTO tabela_avaliacao_glasgow (id_avaliacao_glasgow, id_fichas_glasgow, abertura_ocular_maiores_5, abertura_ocular_menores_5, resposta_verbal_orientado, resposta_verbal_conflito, resposta_verbal_inapropriada, resposta_verbal_incompreensivel, resposta_verbal_nenhuma, resposta_motora_obedece_comandos, resposta_motora_localiza_dor, resposta_motora_movimento_retirada, resposta_motora_flexao_anormal, resposta_motora_extensao_anormal, resposta_motora_nenhuma, total_gcs) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_glasgow = $conn->prepare($sql_glasgow);
    $stmt_glasgow->bind_param("iissssssssssssss", $id_avaliacao_glasgow, $id_fichas_glasgow, $abertura_ocular_maiores_5, $abertura_ocular_menores_5, $resposta_verbal_orientado, $resposta_verbal_conflito, $resposta_verbal_inapropriada, $resposta_verbal_incompreensivel, $resposta_verbal_nenhuma, $resposta_motora_obedece_comandos, $resposta_motora_localiza_dor, $resposta_motora_movimento_retirada, $resposta_motora_flexao_anormal, $resposta_motora_extensao_anormal, $resposta_motora_nenhuma, $total_gcs);

    $sql_dados_ambulancia = "INSERT INTO tabela_dados_ambulancia (id_dados_ambulancia, id_fichas_ambulancia, numero_usd, numero_ocorrencia, despacho, km_final, codigo_ir, codigo_ps, hora_chegada, codigo_sia_sus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_dados_ambulancia = $conn->prepare($sql_dados_ambulancia);
    $stmt_dados_ambulancia->bind_param("iissssssss", $id_dados_ambulancia, $id_fichas_ambulancia, $numero_usd, $numero_ocorrencia, $despacho, $km_final, $codigo_ir, $codigo_ps, $hora_chegada, $codigo_sia_sus);

    $sql_dados_iniciais = "INSERT INTO tabela_dados_iniciais (id_dados_iniciais, id_fichas_dados_iniciais, data, sexo, nome_hospital, nome_paciente, idade, fone, cpf, nome_acompanhante, idade_acompanhante, local_ocorrencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_dados_iniciais = $conn->prepare($sql_dados_iniciais);
    $stmt_dados_iniciais->bind_param("iissssssssss", $id_dados_iniciais, $id_fichas_dados_iniciais, $data, $sexo, $nome_hospital, $nome_paciente, $idade, $fone, $cpf, $nome_acompanhante, $idade_acompanhante, $local_ocorrencia);

    $sql_decisao_transporte = "INSERT INTO tabela_decisao_transporte (id_decisao_transporte, id_fichas_decisao_transporte, decisao_transporte) VALUES (?, ?, ?)";
    $stmt_decisao_transporte = $conn->prepare($sql_decisao_transporte);
    $stmt_decisao_transporte->bind_param("iis", $id_decisao_transporte, $id_fichas_decisao_transporte, $decisao_transporte);

    $sql_equipe_atendimento = "INSERT INTO tabela_equipe_atendimento (id_equipe_atendimento, id_fichas_equipe_atendimento, nome_m, nome_s1, nome_s2, nome_s3, demandante, equipe) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt_equipe_atendimento = $conn->prepare($sql_equipe_atendimento);
$stmt_equipe_atendimento->bind_param("iissssss", $id_equipe_atendimento, $id_fichas_equipe_atendimento, $nome_m, $nome_s1, $nome_s2, $nome_s3, $demandante, $equipe);

$sql_ferimentos = "INSERT INTO tabela_ferimentos (id_ferimentos, id_fichas_ferimentos, local, lado, face, tipo) VALUES (?, ?, ?, ?, ?, ?)";
$stmt_ferimentos = $conn->prepare($sql_ferimentos);
$stmt_ferimentos->bind_param("iissss", $id_ferimentos, $id_fichas_ferimentos, $local, $lado, $face, $tipo);

$sql_pessoa = "INSERT INTO tabela_pessoa (id_pessoa, id_fichas_pessoa, pessoa_nome, matricula, data_criacao) VALUES (?, ?, ?, ?, ?)";
$stmt_pessoa = $conn->prepare($sql_pessoa);
$stmt_pessoa->bind_param("iisss", $id_pessoa, $id_fichas_pessoa, $pessoa_nome, $matricula, $data_criacao);

$sql_forma_conducao = "INSERT INTO tabela_forma_conducao (id_forma_conducao, id_fichas_forma_conducao, forma_conducao) VALUES (?, ?, ?)";
$stmt_forma_conducao = $conn->prepare($sql_forma_conducao);
$stmt_forma_conducao->bind_param("iis", $id_forma_conducao, $id_fichas_forma_conducao, $forma_conducao);

$sql_historico_fichas = "INSERT INTO tabela_historico_fichas (id_historico_fichas, id_fichas_historico_fichas, acao, data_modificacao) VALUES (?, ?, ?, ?)";
$stmt_historico_fichas = $conn->prepare($sql_historico_fichas);
$stmt_historico_fichas->bind_param("iiss", $id_historico_fichas, $id_fichas_historico_fichas, $acao, $data_modificacao);

    $sql_materiais_deixados_hospital = "INSERT INTO tabela_materiais_deixados_hospital (id_materiais_deixados_hospital, id_fichas_materiais_deixados_hospital, base_estabilizacao_qt, ttf_qt, colar_qt, tirante_aranha_qt, colar_custom_qt, tirante_cabeca_qt, coxins_estabilizacao_qt, canula_qt, ked_qt, maca_rigida_qt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt_materiais_deixados_hospital = $conn->prepare($sql_materiais_deixados_hospital);
$stmt_materiais_deixados_hospital->bind_param("iisiiiiiiiii", $id_materiais_deixados_hospital, $id_fichas_materiais_deixados_hospital, $base_estabilizacao_qt, $ttf_qt, $colar_qt, $tirante_aranha_qt, $colar_custom_qt, $tirante_cabeca_qt, $coxins_estabilizacao_qt, $canula_qt, $ked_qt, $maca_rigida_qt);

$sql_materiais_utilizados_descartaveis = "INSERT INTO tabela_materiais_utilizados_descartaveis (id_materiais_utilizados_descartaveis, id_fichas_materiais_utilizados_descartaveis, ataduras_qt, manta_aluminizada_qt, cateter_tp_oculos_qt, pas_dea_qt, compressa_comum_qt, sonda_aspiracao_qt, kits_qt, soro_fisiologico_qt, luvas_desc_pares_qt, talas_pap_qt, mascara_desc_qt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt_materiais_utilizados_descartaveis = $conn->prepare($sql_materiais_utilizados_descartaveis);
$stmt_materiais_utilizados_descartaveis->bind_param("iisiiiiiiiiii", $id_materiais_utilizados_descartaveis, $id_fichas_materiais_utilizados_descartaveis, $ataduras_qt, $manta_aluminizada_qt, $cateter_tp_oculos_qt, $pas_dea_qt, $compressa_comum_qt, $sonda_aspiracao_qt, $kits_qt, $soro_fisiologico_qt, $luvas_desc_pares_qt, $talas_pap_qt, $mascara_desc_qt);

    $sql_objetos_recolhidos = "INSERT INTO tabela_objetos_recolhidos (id_objetos_recolhidos, id_fichas_objetos_recolhidos, objetos_recolhidos) VALUES (?, ?, ?)";
$stmt_objetos_recolhidos = $conn->prepare($sql_objetos_recolhidos);
$stmt_objetos_recolhidos->bind_param("iis", $id_objetos_recolhidos, $id_fichas_objetos_recolhidos, $objetos_recolhidos);

$sql_observacoes_importantes = "INSERT INTO tabela_observacoes_importantes (id_observacoes_importantes, id_fichas_observacoes_importantes, observacoes) VALUES (?, ?, ?)";
$stmt_observacoes_importantes = $conn->prepare($sql_observacoes_importantes);
$stmt_observacoes_importantes->bind_param("iis", $id_observacoes_importantes, $id_fichas_observacoes_importantes, $observacoes);

$sql_problemas_suspeitos = "INSERT INTO tabela_problemas_suspeitos (id_problemas_suspeitos, id_fichas_problemas_suspeitos, psiquiatrico, respiratorio, diabetes, obstetrico, transporte, outros) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt_problemas_suspeitos = $conn->prepare($sql_problemas_suspeitos);
$stmt_problemas_suspeitos->bind_param("iissssss", $id_problemas_suspeitos, $id_fichas_problemas_suspeitos, $psiquiatrico, $respiratorio, $diabetes, $obstetrico, $transporte, $outros);

    $sql_procedimentos_efetuados = "INSERT INTO tabela_procedimentos_efetuados (id_procedimentos_efetuados, id_fichas_procedimentos_efetuados, aspiracao, avaliacao_inicial, avaliacao_dirigida, avaliacao_continuada, chave_rautek, canula_guedel, desobstrucao_va, emprego_dea, gerenciamento_riscos, limpeza_ferimento, curativos_compressivo, encravamento_ocular, queimadura_simples, tres_pontas, imobilizacoes_membros, quadril, cervical, maca_sobre_rodas, maca_rigida, ponte, retirado_capacete, rcp, rolamento, tomada_decisao, tratado_choque, uso_canula, uso_colar, tam_colar, uso_ked, uso_ttf, ventilacao_suporte, oxigenioterapia, lpm_vent_sup, reanimador, lpm_reanimador, meio_auxiliares, outro_procedimento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt_procedimentos_efetuados = $conn->prepare($sql_procedimentos_efetuados);
$stmt_procedimentos_efetuados->bind_param("iissssssssssssssssssssssssssssssssss", $id_procedimentos_efetuados, $id_fichas_procedimentos_efetuados, $aspiracao, $avaliacao_inicial, $avaliacao_dirigida, $avaliacao_continuada, $chave_rautek, $canula_guedel, $desobstrucao_va, $emprego_dea, $gerenciamento_riscos, $limpeza_ferimento, $curativos_compressivo, $encravamento_ocular, $queimadura_simples, $tres_pontas, $imobilizacoes_membros, $quadril, $cervical, $maca_sobre_rodas, $maca_rigida, $ponte, $retirado_capacete, $rcp, $rolamento, $tomada_decisao, $tratado_choque, $uso_canula, $uso_colar, $tam_colar, $uso_ked, $uso_ttf, $ventilacao_suporte, $oxigenioterapia, $lpm_vent_sup, $reanimador, $lpm_reanimador, $meio_auxiliares, $outro_procedimento);

    $sql_queimaduras = "INSERT INTO tabela_queimaduras (id_queimaduras, id_fichas_queimaduras, localizacao, grau_queimadura) VALUES (?, ?, ?, ?)";
$stmt_queimaduras = $conn->prepare($sql_queimaduras);
$stmt_queimaduras->bind_param("iiss", $id_queimaduras, $id_fichas_queimaduras, $localizacao, $grau_queimadura);

    $sql_sinais_sintomas = "INSERT INTO tabela_sinais_sintomas (id_sinais_sintomas, id_fichas_sinais_sintomas, abdomem_sensivel, afundamento_de_cranio, agitacao, apneia, bradicardia, bradipneia, bronco_aspirando, cefaleia, cianose_labios, cianose_extremidade, convulsao, decorticacao, deformidade, descerebracao, desmaio, desvio_de_traqueia, dispneia, dor_local, edma_generalizados, edma_localizados, enfisema_subcutaneo, estase_de_jugular, face_palida, hemorragia_interna, hemorragia_externa, hipertensao, hipotensao, nauseas_vomitos, nasoragia, obito, otorreia, ovace, parada_cardiaca, parada_respiratoria, priaprismo, prurido_na_pele, pupilas_anisocoria, pupilas_isocoria, pupilas_midriase, pupilas_miose, pupilas_reagente, pupilas_nao_reagente, sede, sinal_de_battle, sinal_de_guaxinim, sudorese, taquipneia, taquicardia, tontura, outros_sintomas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt_sinais_sintomas = $conn->prepare($sql_sinais_sintomas);
$stmt_sinais_sintomas->bind        _param("iisssssssssssssssssssssssssssssssssssssssssssssssssssssssss", $id_sinais_sintomas, $id_fichas_sinais_sintomas, $abdomem_sensivel, $afundamento_de_cranio, $agitacao, $apneia, $bradicardia, $bradipneia, $bronco_aspirando, $cefaleia, $cianose_labios, $cianose_extremidade, $convulsao, $decorticacao, $deformidade, $descerebracao, $desmaio, $desvio_de_traqueia, $dispneia, $dor_local, $edma_generalizados, $edma_localizados, $enfisema_subcutaneo, $estase_de_jugular, $face_palida, $hemorragia_interna, $hemorragia_externa, $hipertensao, $hipotensao, $nauseas_vomitos, $nasoragia, $obito, $otorreia, $ovace, $parada_cardiaca, $parada_respiratoria, $priaprismo, $prurido_na_pele, $pupilas_anisocoria, $pupilas_isocoria, $pupilas_midriase, $pupilas_miose, $pupilas_reagente, $pupilas_nao_reagente, $sede, $sinal_de_battle, $sinal_de_guaxinim, $sudorese, $taquipneia, $taquicardia, $tontura, $outros_sintomas);

    if ($stmt_gestacional->execute() === TRUE && $stmt_emergencia->execute() === TRUE && $stmt_cinematica->execute() === TRUE && $stmt_glasgow->execute() === TRUE && $stmt_dados_ambulancia->execute() === TRUE && $stmt_dados_iniciais->execute() === TRUE && $stmt_decisao_transporte->execute() === TRUE && $stmt_equipe_atendimento->execute() === TRUE && $stmt_ferimentos->execute() === TRUE && $stmt_pessoa->execute() === TRUE && $stmt_forma_conducao->execute() === TRUE && $stmt_historico_fichas->execute() === TRUE && $stmt_materiais_deixados_hospital->execute() === TRUE && $stmt_materiais_utilizados_descartaveis->execute() === TRUE && $stmt_objetos_recolhidos->execute() === TRUE && $stmt_observacoes_importantes->execute() === TRUE && $stmt_problemas_suspeitos->execute() === TRUE && $stmt_procedimentos_efetuados->execute() === TRUE && $stmt_queimaduras->execute() === TRUE && $stmt_sinais_sintomas->execute() === TRUE) {
    echo "Cadastro realizado com sucesso! <a href='index.html'>Voltar para o login</a>";
} else {
    echo "Erro: " . $sql_gestacional . "<br>" . $conn->error;
    echo "Erro: " . $sql_emergencia . "<br>" . $conn->error;
    echo "Erro: " . $sql_cinematica . "<br>";
        echo "Erro: " . $sql_glasgow . "<br>" . $conn->error;
    echo "Erro: " . $sql_ambulancia . "<br>" . $conn->error;
    echo "Erro: " . $sql_dados_iniciais . "<br>";
        echo "Erro: " . $sql_decisao_transporte . "<br>" . $conn->error;
    echo "Erro: " . $sql_ . "<br>" . $conn->error;
    echo "Erro: " . $sql_cinematica . "<br>";
        echo "Erro: " . $sql_gestacional . "<br>" . $conn->error;
    echo "Erro: " . $sql_emergencia . "<br>" . $conn->error;
    echo "Erro: " . $sql_cinematica . "<br>";
    
}
    
    $stmt_gestacional->close();
    $stmt_emergencia->close();
    $stmt_cinematica->close();
    $stmt_glasgow->close();
    $stmt_ambulancia->close();
    $stmt_dados_iniciais->close();
    $stmt_decisao_transporte->close();
    $stmt_equipe_atendimento->close();
    $stmt_ferimentos->close();
    $stmt_pessoa->close();
    $stmt_forma_conducao->close();
    $stmt_historico_fichas->close();
    $stmt_materiais_deixados_hospital->close();
    $stmt_materiais_utilizados_descartaveis->close();
    $stmt_objetos_recolhidos->close();
    $stmt_observacoes_importantes->close();
    $stmt_problemas_suspeitos->close();
    $stmt_procedimentos_efetuados->close();
    $stmt_queimaduras->close();
    $stmt_sinais_sintomas->close();
    $stmt_sinais_vitais->close();
    $stmt_termo_recusa_atendimento->close();
    $stmt_tipo_ocorrencia->close();
    $stmt_trauma->close();
    $stmt_vitima_era->close();
}
$conn->close();
?>
