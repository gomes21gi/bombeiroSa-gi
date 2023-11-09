<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_anamnesegestacional = $_POST['id_anamnesegestacional'];
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

    $id_avaliacaocinematica = $_POST['id_avaliacaocinematica'];
    $id_fichas_avaliacaocinematica = $_POST['id_fichas_avaliacaocinematica'];
    $disturbio_comportamento = $_POST['disturbio_comportamento'];
    $encontrado_capacete = $_POST['encontrado_capacete'];
    $encontrado_cinto = $_POST['encontrado_cinto'];
    $para_brisas_avariado = $_POST['para_brisas_avariado'];
    $caminhando_cena = $_POST['caminhando_cena'];
    $painel_avariado = $_POST['painel_avariado'];
    $volante_torcido = $_POST['volante_torcido'];

    $id_avaliacaoglasgow = $_POST['id_avaliacaoglasgow'];
    $id_fichas_avaliacaoglasgow = $_POST['id_fichas_avaliacaoglasgow'];
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

    $id_dadosambulancia = $_POST['id_dadosambulancia'];
    $id_fichas_dadosambulancia = $_POST['id_fichas_dadosambulancia'];
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

    $id_decisaotransporte = $_POST['id_decisaotransporte'];
    $id_fichas_decisaotransporte = $_POST['id_fichas_decisaotransporte'];
    $decisao_transporte = $_POST['decisao_transporte'];

    $id_equipeatendimento = $_POST['id_equipeatendimento'];
    $id_fichas_equipeatendimento = $_POST['id_fichasequipe_atendimento'];
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

    $id_fichas = $_POST['id_fichas'];
    $pessoa_nome = $_POST['pessoa_nome'];
    $matricula = $_POST['matricula'];
    $data_criacao = $_POST['data_criacao'];

    $id_formaconducao = $_POST['id_formaconducao'];
    $id_fichas_formaconducao = $_POST['id_fichasforma_conducao'];
    $forma_conducao = $_POST['forma_conducao'];

    $id_historicofichas = $_POST['id_historicofichas'];
    $id_fichas_historicofichas = $_POST['id_fichashistorico_fichas'];
    $acao = $_POST['acao'];
    $data_modificacao = $_POST['data_modificacao'];

    $id_materiaisdeixadoshospital = $_POST['id_materiaisdeixadoshospital'];
    $id_fichas_materiaisdeixadoshospital = $_POST['id_fichas_materiaisdeixadoshospital'];
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

    $id_materiaisutilizadosdescartaveis = $_POST['id_materiaisutilizadosdescartaveis'];
    $id_fichas_materiaisutilizadosdescartaveis = $_POST['id_fichas_materiaisutilizadosdescartaveis'];
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

    $id_objetosrecolhidos = $_POST['id_objetosrecolhidos'];
    $id_fichas_objetosrecolhidos = $_POST['id_fichasobjetosrecolhidos'];
    $objetos_recolhidos = $_POST['objetos_recolhidos'];

    $id_observacoesimportantes = $_POST['id_observacoesimportantes'];
    $id_fichas_observacoesimportantes = $_POST['id_fichas_observacoesimportantes'];
    $observacoes = $_POST['observacoes'];

    $id_problemas_suspeitos = $_POST['id_problemas_suspeitos'];
    $id_fichas_problemas_suspeitos = $_POST['id_fichas_problemas_suspeitos'];
    $psiquiatrico = $_POST['psiquiatrico'];
    $respiratorio = $_POST['respiratorio'];
    $diabetes = $_POST['diabetes'];
    $obstetrico = $_POST['obstetrico'];
    $transporte = $_POST['transporte'];
    $outros = $_POST['outros'];

    $id_procedimentosefetuados = $_POST['id_procedimentosefetuados'];
    $id_fichas_procedimentosefetuados = $_POST['id_fichas_procedimentosefetuados'];
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

    $id_sinaissintomas = $_POST['id_sinaissintomas'];
    $id_fichas_sinaissintomas = $_POST['id_fichas_sinaissintomas'];
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

    $id_sinaisvitais = $_POST['id_sinaisvitais'];
    $id_ficha_sinaisvitais = $_POST['id_fichas_sinaisvitais'];
    $id_pressao_arterial = $_POST['id_pressao_arterial'];
    $id_pulso = $_POST['id_pulso'];
    $id_respiracao = $_POST['id_respiracao'];
    $id_pulsacao_percentual = $_POST['id_pulsacao_percentual'];
    $id_hgt = $_POST['id_hgt'];
    $id_temperatura = $_POST['id_temperatura'];
    $id_perfusao = isset($_POST['id_perfusão']) ? '>2 seg' : '+=2 seg';
    $id_sinais = $_POST['id_sinais'];

    $id_termorecusaatendimento = $_POST['id_termorecusaatendimento'];
    $id_ficha_termorecusaatendimento = $_POST['id_fichas_termorecusaatendimento'];
    $id_nome_paciente = $_POST['id_nome_paciente'];
    $id_rg_paciente = $_POST['id_rg_paciente'];
    $id_cpf_paciente = $_POST['id_cpf_paciente'];
    $id_nome_testemunha_1 = $_POST['id_nome_testemunha_1'];
    $id_rg_testemunha_1 = $_POST['id_rg_testemunha_1'];
    $id_nome_testemunha_2 = $_POST['id_nome_testemunha_2'];
    $id_rg_testemunha_2 = $_POST['id_rg_testemunha_2'];

    $id_tipo_ocorrencia = $_POST['id_tipo_ocorrencia'];
    $id_ficha_tipo_ocorrencia = $_POST['id_fichas_tipo_ocorrencia'];
    $id_causas = $_POST['id_causas'];
    $id_outros = $_POST['id_outros'];

    $id_trauma = $_POST['id_trauma'];
    $id_ficha_trauma = $_POST['id_fichas_trauma'];
    $id_tipo_paciente = $_POST['id_tipo_paciente'];
    $id_parte_corpo = $_POST['id_parte_corpo'];
    $id_localizacao_frente = $_POST['id_localizacao_frente'];
    $id_localizacao_verso = $_POST['id_localizacao_verso'];

    $id_vitimaera = $_POST['id_vitimaera'];
    $id_fichas_vitimaera = $_POST['id_fichass_vitimaera'];
    $id_ciclista = $_POST['id_ciclista'];
    $id_condutor_moto = $_POST['id_condutor_moto'];
    $id_gestante = $_POST['id_gestante'];
    $id_pass_ban_frente = $_POST['id_pass_ban_frente'];
    $id_pass_moto = $_POST['id_pass_moto'];
    $id_condutor_carro = $_POST['id_condutor_carro'];
    $id_clinico = $_POST['id_clinico'];
    $id_trauma = $_POST['id_trauma'];
    $id_pass_bco_tras = $_POST['id_pass_bco_tras'];
    $id_pedestre = $_POST['id_pedestre'];

    $sql_anamnesegestacional = "INSERT INTO anamnesegestacional (id_anamnesegestacional, id_fichas_gestacional, periodo_gestacao, faz_uso_medicacao, nome_medico, possibilidade_complicacoes, primeiro_filho, quantidade_filhos, inicio_contracoes, duracao_contracoes, intervalo_contracoes, pressao_evacuar, ruptura_bolsa, inspecao_visual, parto_realizado, hora_nascimento, sexo_bebe, nome_bebe) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_anamnesegestacional = $conn->prepare($sql_gestacional);
    $stmtl_anamnesegestacional->bind_param("iissssssssssssssss", $id_anamnesegestacional, $id_fichas_gestacional, $periodo_gestacao, $faz_uso_medicacao, $nome_medico, $possibilidade_complicacoes, $primeiro_filho, $quantidade_filhos, $inicio_contracoes, $duracao_contracoes, $intervalo_contracoes, $pressao_evacuar, $ruptura_bolsa, $inspecao_visual, $parto_realizado, $hora_nascimento, $sexo_bebe, $nome_bebe);

    $sql_anamnese_emergencia = "INSERT INTO anamnese_emergencia (id_anamnese_emergencia, id_fichas_emergencia, oq_aconteceu, aconteceu_outras_vezes, quanto_tempo_aconteceu, possui_problema_saude, quais_problemas_saude, faz_uso_medicacao_emergencia, ultimo_horario_medicacao, quais_medicacoes, alergico_alguma_coisa, especificacao_alergia, ingeriu_alimento_liquido, horas_ingeriu) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_anamnese_emergencia = $conn->prepare($sql_emergencia);
    $stmt_anamnese_emergencia->bind_param("iissssssssssss", $id_anamnese_emergencia, $id_fichas_emergencia, $oq_aconteceu, $aconteceu_outras_vezes, $quanto_tempo_aconteceu, $possui_problema_saude, $quais_problemas_saude, $faz_uso_medicacao_emergencia, $ultimo_horario_medicacao, $quais_medicacoes, $alergico_alguma_coisa, $especificacao_alergia, $ingeriu_alimento_liquido, $horas_ingeriu);

    $sql_avaliacaocinematica = "INSERT INTO avaliacaocinematica (id_avaliacaocinematica, id_fichas_cinematica, disturbio_comportamento, encontrado_capacete, encontrado_cinto, para_brisas_avariado, caminhando_cena, painel_avariado, volante_torcido) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_avaliacaocinematica = $conn->prepare($sql_cinematica);
    $stmt_avaliacaocinematica->bind_param("iisssssss", $id_avaliacaocinematica, $id_fichas_cinematica, $disturbio_comportamento, $encontrado_capacete, $encontrado_cinto, $para_brisas_avariado, $caminhando_cena, $painel_avariado, $volante_torcido);

    $sql_avaliacaoglasgow = "INSERT INTO avaliacaoglasgow (id_avaliacaoglasgow, id_fichas_glasgow, abertura_ocular_maiores_5, abertura_ocular_menores_5, resposta_verbal_orientado, resposta_verbal_conflito, resposta_verbal_inapropriada, resposta_verbal_incompreensivel, resposta_verbal_nenhuma, resposta_motora_obedece_comandos, resposta_motora_localiza_dor, resposta_motora_movimento_retirada, resposta_motora_flexao_anormal, resposta_motora_extensao_anormal, resposta_motora_nenhuma, total_gcs) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_avaliacaoglasgow = $conn->prepare($sql_glasgow);
    $stmt_avaliacaoglasgow->bind_param("iissssssssssssss", $id_avaliacaoglasgow, $id_fichas_glasgow, $abertura_ocular_maiores_5, $abertura_ocular_menores_5, $resposta_verbal_orientado, $resposta_verbal_conflito, $resposta_verbal_inapropriada, $resposta_verbal_incompreensivel, $resposta_verbal_nenhuma, $resposta_motora_obedece_comandos, $resposta_motora_localiza_dor, $resposta_motora_movimento_retirada, $resposta_motora_flexao_anormal, $resposta_motora_extensao_anormal, $resposta_motora_nenhuma, $total_gcs);

    $sql_dadosambulancia = "INSERT INTO dadosambulancia (id_dadosambulancia, id_fichas_ambulancia, numero_usd, numero_ocorrencia, despacho, km_final, codigo_ir, codigo_ps, hora_chegada, codigo_sia_sus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_dadosambulancia = $conn->prepare($sql_dadosambulancia);
    $stmt_dadosambulancia->bind_param("iissssssss", $id_dadosambulancia, $id_fichas_ambulancia, $numero_usd, $numero_ocorrencia, $despacho, $km_final, $codigo_ir, $codigo_ps, $hora_chegada, $codigo_sia_sus);

    $sql_dados_iniciais = "INSERT INTO dados_iniciais (id_dados_iniciais, id_fichas_dados_iniciais, data, sexo, nome_hospital, nome_paciente, idade, fone, cpf, nome_acompanhante, idade_acompanhante, local_ocorrencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_dados_iniciais = $conn->prepare($sql_dados_iniciais);
    $stmt_dados_iniciais->bind_param("iissssssssss", $id_dados_iniciais, $id_fichas_dados_iniciais, $data, $sexo, $nome_hospital, $nome_paciente, $idade, $fone, $cpf, $nome_acompanhante, $idade_acompanhante, $local_ocorrencia);

    $sql_decisaotransporte = "INSERT INTO decisaotransporte (id_decisaotransporte, id_fichas_decisaotransporte, decisao_transporte) VALUES (?, ?, ?)";
    $stmt_decisaotransporte = $conn->prepare($sql_decisaotransporte);
    $stmt_decisaotransporte->bind_param("iis", $id_decisaotransporte, $id_fichas_decisaotransporte, $decisao_transporte);

    $sql_equipeatendimento = "INSERT INTO equipeatendimento (id_equipeatendimento, id_fichas_equipeatendimento, nome_m, nome_s1, nome_s2, nome_s3, demandante, equipe) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_equipeatendimento = $conn->prepare($sql_equipeatendimento);
    $stmt_equipeatendimento->bind_param("iissssss", $id_equipeatendimento, $id_fichas_equipeatendimento, $nome_m, $nome_s1, $nome_s2, $nome_s3, $demandante, $equipe);

    $sql_ferimentos = "INSERT INTO ferimentos (id_ferimentos, id_fichas_ferimentos, local, lado, face, tipo) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt_ferimentos = $conn->prepare($sql_ferimentos);
    $stmt_ferimentos->bind_param("iissss", $id_ferimentos, $id_fichas_ferimentos, $local, $lado, $face, $tipo);

    $sql_fichas = "INSERT INTO fichas (id_fichas, pessoa_nome, matricula, data_criacao) VALUES (?, ?, ?, ?, ?)";
    $stmt_fichas = $conn->prepare($sql_pessoa);
    $stmt_fichas->bind_param("iisss", $id_fichas_pessoa, $pessoa_nome, $matricula, $data_criacao);

    $sql_formaconducao = "INSERT INTO formaconducao (id_formaconducao, id_fichas_formaconducao, forma_conducao) VALUES (?, ?, ?)";
    $stmt_formaconducao = $conn->prepare($sql_formaconducao);
    $stmt_formaconducao->bind_param("iis", $id_formaconducao, $id_fichas_formaconducao, $forma_conducao);

    $sql_materiaisdeixadoshospital = "INSERT INTO materiaisdeixadoshospital (id_materiaisdeixadoshospital, id_fichas_materiaisdeixadoshospital, base_estabilizacao_qt, ttf_qt, colar_qt, tirante_aranha_qt, colar_custom_qt, tirante_cabeca_qt, coxins_estabilizacao_qt, canula_qt, ked_qt, maca_rigida_qt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_materiaisdeixadoshospital = $conn->prepare($sql_materiaisdeixadoshospital);
    $stmt_materiaisdeixadoshospital->bind_param("iisiiiiiiiii", $id_materiaisdeixadoshospital, $id_fichas_materiaisdeixadoshospital, $base_estabilizacao_qt, $ttf_qt, $colar_qt, $tirante_aranha_qt, $colar_custom_qt, $tirante_cabeca_qt, $coxins_estabilizacao_qt, $canula_qt, $ked_qt, $maca_rigida_qt);

    $sql_materiaisutilizadosdescartaveis = "INSERT INTO materiaisutilizadosdescartaveis (id_materiaisutilizadosdescartaveis, id_fichas_materiaisutilizadosdescartaveis, ataduras_qt, manta_aluminizada_qt, cateter_tp_oculos_qt, pas_dea_qt, compressa_comum_qt, sonda_aspiracao_qt, kits_qt, soro_fisiologico_qt, luvas_desc_pares_qt, talas_pap_qt, mascara_desc_qt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_materiais_utilizadosdescartaveis = $conn->prepare($sql_materiaisutilizadosdescartaveis);
    $stmt_materiaisutilizadosdescartaveis->bind_param("iisiiiiiiiiii", $id_materiaisutilizadosdescartaveis, $id_fichas_materiaisutilizadosdescartaveis, $ataduras_qt, $manta_aluminizada_qt, $cateter_tp_oculos_qt, $pas_dea_qt, $compressa_comum_qt, $sonda_aspiracao_qt, $kits_qt, $soro_fisiologico_qt, $luvas_desc_pares_qt, $talas_pap_qt, $mascara_desc_qt);

    $sql_objetosrecolhidos = "INSERT INTO objetosrecolhidos (id_objetosrecolhidos, id_fichas_objetosrecolhidos, objetos_recolhidos) VALUES (?, ?, ?)";
    $stmt_objetosrecolhidos = $conn->prepare($sql_objetosrecolhidos);
    $stmt_objetosrecolhidos->bind_param("iis", $id_objetosrecolhidos, $id_fichas_objetosrecolhidos, $objetos_recolhidos);

    $sql_observacoesimportantes = "INSERT INTO observacoesimportantes (id_observacoesimportantes, id_fichas_observacoesimportantes, observacoes) VALUES (?, ?, ?)";
    $stmt_observacoesimportantes = $conn->prepare($sql_observacoes_importantes);
    $stmt_observacoesimportantes->bind_param("iis", $id_observacoesimportantes, $id_fichas_observacoesimportantes, $observacoes);

    $sql_problemas_suspeitos = "INSERT INTO problemas_suspeitos (id_problemas_suspeitos, id_fichas_problemas_suspeitos, psiquiatrico, respiratorio, diabetes, obstetrico, transporte, outros) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_problemas_suspeitos = $conn->prepare($sql_problemas_suspeitos);
    $stmt_problemas_suspeitos->bind_param("iissssss", $id_problemas_suspeitos, $id_fichas_problemas_suspeitos, $psiquiatrico, $respiratorio, $diabetes, $obstetrico, $transporte, $outros);

    $sql_procedimentosefetuados = "INSERT INTO procedimentosefetuados (id_procedimentosefetuados, id_fichas_procedimentosefetuados, aspiracao, avaliacao_inicial, avaliacao_dirigida, avaliacao_continuada, chave_rautek, canula_guedel, desobstrucao_va, emprego_dea, gerenciamento_riscos, limpeza_ferimento, curativos_compressivo, encravamento_ocular, queimadura_simples, tres_pontas, imobilizacoes_membros, quadril, cervical, maca_sobre_rodas, maca_rigida, ponte, retirado_capacete, rcp, rolamento, tomada_decisao, tratado_choque, uso_canula, uso_colar, tam_colar, uso_ked, uso_ttf, ventilacao_suporte, oxigenioterapia, lpm_vent_sup, reanimador, lpm_reanimador, meio_auxiliares, outro_procedimento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_procedimentosefetuados = $conn->prepare($sql_procedimentosefetuados);
    $stmt_procedimentosefetuados->bind_param("iissssssssssssssssssssssssssssssssss", $id_procedimentosefetuados, $id_fichas_procedimentosefetuados, $aspiracao, $avaliacao_inicial, $avaliacao_dirigida, $avaliacao_continuada, $chave_rautek, $canula_guedel, $desobstrucao_va, $emprego_dea, $gerenciamento_riscos, $limpeza_ferimento, $curativos_compressivo, $encravamento_ocular, $queimadura_simples, $tres_pontas, $imobilizacoes_membros, $quadril, $cervical, $maca_sobre_rodas, $maca_rigida, $ponte, $retirado_capacete, $rcp, $rolamento, $tomada_decisao, $tratado_choque, $uso_canula, $uso_colar, $tam_colar, $uso_ked, $uso_ttf, $ventilacao_suporte, $oxigenioterapia, $lpm_vent_sup, $reanimador, $lpm_reanimador, $meio_auxiliares, $outro_procedimento);

    $sql_queimaduras = "INSERT INTO queimaduras (id_queimaduras, id_fichas_queimaduras, localizacao, grau_queimadura) VALUES (?, ?, ?, ?)";
    $stmt_queimaduras = $conn->prepare($sql_queimaduras);
    $stmt_queimaduras->bind_param("iiss", $id_queimaduras, $id_fichas_queimaduras, $localizacao, $grau_queimadura);

    $sql_sinaissintomas = "INSERT INTO sinaissintomas (id_sinaissintomas, id_fichas_sinaissintomas, abdomem_sensivel, afundamento_de_cranio, agitacao, apneia, bradicardia, bradipneia, bronco_aspirando, cefaleia, cianose_labios, cianose_extremidade, convulsao, decorticacao, deformidade, descerebracao, desmaio, desvio_de_traqueia, dispneia, dor_local, edma_generalizados, edma_localizados, enfisema_subcutaneo, estase_de_jugular, face_palida, hemorragia_interna, hemorragia_externa, hipertensao, hipotensao, nauseas_vomitos, nasoragia, obito, otorreia, ovace, parada_cardiaca, parada_respiratoria, priaprismo, prurido_na_pele, pupilas_anisocoria, pupilas_isocoria, pupilas_midriase, pupilas_miose, pupilas_reagente, pupilas_nao_reagente, sede, sinal_de_battle, sinal_de_guaxinim, sudorese, taquipneia, taquicardia, tontura, outros_sintomas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_sinaissintomas = $conn->prepare($sql_sinaissintomas);
    $stmt_sinaissintomas->bind_param("iisssssssssssssssssssssssssssssssssssssssssssssssssssssssss", $id_sinaissintomas, $id_fichas_sinaissintomas, $abdomem_sensivel, $afundamento_de_cranio, $agitacao, $apneia, $bradicardia, $bradipneia, $bronco_aspirando, $cefaleia, $cianose_labios, $cianose_extremidade, $convulsao, $decorticacao, $deformidade, $descerebracao, $desmaio, $desvio_de_traqueia, $dispneia, $dor_local, $edma_generalizados, $edma_localizados, $enfisema_subcutaneo, $estase_de_jugular, $face_palida, $hemorragia_interna, $hemorragia_externa, $hipertensao, $hipotensao, $nauseas_vomitos, $nasoragia, $obito, $otorreia, $ovace, $parada_cardiaca, $parada_respiratoria, $priaprismo, $prurido_na_pele, $pupilas_anisocoria, $pupilas_isocoria, $pupilas_midriase, $pupilas_miose, $pupilas_reagente, $pupilas_nao_reagente, $sede, $sinal_de_battle, $sinal_de_guaxinim, $sudorese, $taquipneia, $taquicardia, $tontura, $outros_sintomas);

    $sql_sinaisvitais = "INSERT INTO sinaisvitais (id_sinaisvitais, id_ficha_sinaisvitais, id_pressao_arterial, id_pulso, id_respiracao, id_pulsacao_percentual, id_hgt, id_temperatura, id_perfusao, id_sinais) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_sinaisvitais = $conn->prepare($sql_sinaisvitais);
    $stmt_sinaisvitais->bind_param("iiiiiiiiii", $id_sinaisvitais, $id_ficha_sinaisvitais, $id_pressao_arterial, $id_pulso, $id_respiracao, $id_pulsacao_percentual, $id_hgt, $id_temperatura, $id_perfusao, $id_sinais);

    $sql_termorecusaatendimento = "INSERT INTO termorecusaatendimento (id_termorecusaatendimento, id_ficha_termorecusaatendimento, id_nome_paciente, id_rg_paciente, id_cpf_paciente, id_nome_testemunha_1, id_rg_testemunha_1, id_nome_testemunha_2, id_rg_testemunha_2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_termorecusaatendimento = $conn->prepare($sql_termorecusaatendimento);
    $stmt_termorecusaatendimento->bind_param("iiiiiiiii", $id_termorecusaatendimento, $id_ficha_termorecusaatendimento, $id_nome_paciente, $id_rg_paciente, $id_cpf_paciente, $id_nome_testemunha_1, $id_rg_testemunha_1, $id_nome_testemunha_2, $id_rg_testemunha_2);

    $sql_tipo_ocorrencia = "INSERT INTO tipo_ocorrencia (id_tipo_ocorrencia, id_ficha_tipo_ocorrencia, id_causas, id_outros) VALUES (?, ?, ?, ?)";
    $stmt_tipo_ocorrencia = $conn->prepare($sql_tipo_ocorrencia);
    $stmt_tipo_ocorrencia->bind_param("iiis", $id_tipo_ocorrencia, $id_ficha_tipo_ocorrencia, $id_causas, $id_outros);

    $sql_trauma = "INSERT INTO trauma (id_trauma, id_ficha_trauma, id_tipo_paciente, id_parte_corpo, id_localizacao_frente, id_localizacao_verso) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt_trauma = $conn->prepare($sql_trauma);
    $stmt_trauma->bind_param("iiiiii", $id_trauma, $id_ficha_trauma, $id_tipo_paciente, $id_parte_corpo, $id_localizacao_frente, $id_localizacao_verso);

    $sql_vitimaera = "INSERT INTO vitimaera (id_vitimaera, id_fichas_vitimaera, id_ciclista, id_condutor_moto, id_gestante, id_pass_ban_frente, id_pass_moto, id_condutor_carro, id_clinico, id_trauma, id_pass_bco_tras, id_pedestre) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_vitimaera = $conn->prepare($sql_vitimaera);
    $stmt_vitimaera->bind_param("iiiiiiiiiiii", $id_vitimaera, $id_fichas_vitimaera, $id_ciclista, $id_condutor_moto, $id_gestante, $id_pass_ban_frente, $id_pass_moto, $id_condutor_carro, $id_clinico, $id_trauma, $id_pass_bco_tras, $id_pedestre);

    if (
        $stmt_anamnesegestacional->execute() ===
        TRUE && $stmt_anamnese_emergencia->execute() ===
        TRUE && $stmt_avaliacaocinematica->execute() ===
        TRUE && $stmt_avaliacaoglasgow->execute() ===
        TRUE && $stmt_dadosambulancia->execute() ===
        TRUE && $stmt_dados_iniciais->execute() ===
        TRUE && $stmt_decisaotransporte->execute() ===
        TRUE && $stmt_equipeatendimento->execute() ===
        TRUE && $stmt_ferimentos->execute() ===
        TRUE && $stmt_fichas->execute() ===
        TRUE && $stmt_formaconducao->execute() ===
        TRUE && $stmt_materiaisdeixadoshospital->execute() ===
        TRUE && $stmt_materiaisutilizadosdescartaveis->execute() ===
        TRUE && $stmt_objetosrecolhidos->execute() ===
        TRUE && $stmt_observacoesimportantes->execute() ===
        TRUE && $stmt_problemas_suspeitos->execute() ===
        TRUE && $stmt_procedimentosefetuados->execute() ===
        TRUE && $stmt_queimaduras->execute() ===
        TRUE && $stmt_sinaissintomas->execute() ===
        TRUE && $stmt_sinaisvitais->execute() ===
        TRUE && $stmt_termorecusaatendimento->execute() ===
        TRUE && $stmt_tipo_ocorrencia->execute() ===
        TRUE && $stmt_trauma->execute() ===
        TRUE && $stmt_vitimaera->execute() === TRUE
    ) {
        echo "Ficha realizada com sucesso! <a href='perfil.html'>Voltar para o perfil</a>";
    } else {
        echo "Erro: " . $sql_anamnesegestacional . "<br>" . $conn->error;
        echo "Erro: " . $sql_anamnese_emergencia . "<br>" . $conn->error;
        echo "Erro: " . $sql_avaliacaocinematica . "<br>" . $conn->error;
        echo "Erro: " . $sql_avaliacaoglasgow . "<br>" . $conn->error;
        echo "Erro: " . $sql_dadosambulancia . "<br>" . $conn->error;
        echo "Erro: " . $sql_dados_iniciais . "<br>" . $conn->error;
        echo "Erro: " . $sql_decisaotransporte . "<br>" . $conn->error;
        echo "Erro: " . $sql_equipeatendimento . "<br>" . $conn->error;
        echo "Erro: " . $sql_ferimentos . "<br>" . $conn->error;
        echo "Erro: " . $sql_fichas . "<br>" . $conn->error;
        echo "Erro: " . $sql_formaconducao . "<br>" . $conn->error;
        echo "Erro: " . $sql_materiaisdeixadoshospital . "<br>" . $conn->error;
        echo "Erro: " . $sql_materiaisutilizadosdescartaveis . "<br>" . $conn->error;
        echo "Erro: " . $sql_objetosrecolhidos . "<br>" . $conn->error;
        echo "Erro: " . $sql_observacoesimportantes . "<br>" . $conn->error;
        echo "Erro: " . $sql_problemas_suspeitos . "<br>" . $conn->error;
        echo "Erro: " . $sql_procedimentosefetuados . "<br>" . $conn->error;
        echo "Erro: " . $sql_queimaduras . "<br>" . $conn->error;
        echo "Erro: " . $sql_sinaissintomas . "<br>" . $conn->error;
        echo "Erro: " . $sql_sinaisvitais . "<br>" . $conn->error;
        echo "Erro: " . $sql_termorecusaatendimento . "<br>" . $conn->error;
        echo "Erro: " . $sql_tipo_ocorrencia . "<br>" . $conn->error;
        echo "Erro: " . $sql_trauma . "<br>" . $conn->error;
        echo "Erro: " . $sql_vitimaera . "<br>" . $conn->error;

    }

    $stmt_anamnesegestacional->close();
    $stmt_anamnese_emergencia->close();
    $stmt_avaliacaocinematica->close();
    $stmt_avaliacaoglasgow->close();
    $stmt_dadosambulancia->close();
    $stmt_dados_iniciais->close();
    $stmt_decisaotransporte->close();
    $stmt_equipeatendimento->close();
    $stmt_ferimentos->close();
    $stmt_fichas->close();
    $stmt_formaconducao->close();
    $stmt_materiaisdeixadoshospital->close();
    $stmt_materiaisutilizadosdescartaveis->close();
    $stmt_objetosrecolhidos->close();
    $stmt_observacoesimportantes->close();
    $stmt_problemas_suspeitos->close();
    $stmt_procedimentosefetuados->close();
    $stmt_queimaduras->close();
    $stmt_sinaissintomas->close();
    $stmt_sinaisvitais->close();
    $stmt_termorecusaatendimento->close();
    $stmt_tipo_ocorrencia->close();
    $stmt_trauma->close();
    $stmt_vitimaera->close();
}
$conn->close();
?>