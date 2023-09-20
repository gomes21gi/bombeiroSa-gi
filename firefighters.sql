-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2023 às 14:15
-- Versão do servidor: 8.0.21
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `firefighters`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anamnesegestacional`
--

CREATE TABLE `anamnesegestacional` (
  `id` int NOT NULL,
  `periodo_gestacao` varchar(255) DEFAULT NULL,
  `faz_uso_medicacao` tinyint DEFAULT NULL,
  `nome_medico` varchar(255) DEFAULT NULL,
  `possibilidade_complicacoes` tinyint DEFAULT NULL,
  `primeiro_filho_sim` tinyint DEFAULT NULL,
  `quantidade_filhos` tinyint DEFAULT NULL,
  `inicio_contracoes` time DEFAULT NULL,
  `duracao_contracoes` time DEFAULT NULL,
  `intervalo_contracoes` time DEFAULT NULL,
  `pressao_evacuar` tinyint DEFAULT NULL,
  `ruptura_bolsa` tinyint DEFAULT NULL,
  `inspecao_visual` tinyint DEFAULT NULL,
  `parto_realizado` tinyint DEFAULT NULL,
  `hora_nascimento` time DEFAULT NULL,
  `sexo_bebe` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `nome_bebe` varchar(255) DEFAULT NULL,
  `id_dados_iniciais` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anamnese_emergencia`
--

CREATE TABLE `anamnese_emergencia` (
  `id` int NOT NULL,
  `oq_aconteceu` text NOT NULL,
  `aconteceu_outras_vezes` tinyint(1) DEFAULT NULL,
  `quanto_tempo_aconteceu` varchar(50) DEFAULT NULL,
  `possui_problema_saude` tinyint(1) DEFAULT NULL,
  `quais_problemas_saude` text,
  `faz_uso_medicacao` tinyint(1) DEFAULT NULL,
  `ultimo_horario_medicacao` time DEFAULT NULL,
  `quais_medicacoes` text,
  `alergico_alguma_coisa` tinyint(1) DEFAULT NULL,
  `especificacao_alergia` text,
  `ingeriu_alimento_liquido` tinyint(1) DEFAULT NULL,
  `horas_ingeriu` time DEFAULT NULL,
  `id_dados_iniciais` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaocinematica`
--

CREATE TABLE `avaliacaocinematica` (
  `id_avaliacaocinematica` int NOT NULL,
  `disturbio_comportamento` tinyint DEFAULT NULL,
  `encontrado_capacete` tinyint DEFAULT NULL,
  `encontrado_cinto` tinyint DEFAULT NULL,
  `para_brisas_avariado` tinyint DEFAULT NULL,
  `caminhando_cena` tinyint DEFAULT NULL,
  `painel_avariado` tinyint DEFAULT NULL,
  `volante_torcido` tinyint DEFAULT NULL,
  `id_dados_iniciais` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaoglasgow`
--

CREATE TABLE `avaliacaoglasgow` (
  `id_avaliacaoglasgow` int NOT NULL,
  `abertura_ocular_maiores_5` int DEFAULT NULL,
  `abertura_ocular_menores_5` int DEFAULT NULL,
  `resposta_verbal_orientado` int DEFAULT NULL,
  `resposta_verbal_conflito` int DEFAULT NULL,
  `resposta_verbal_inapropriada` int DEFAULT NULL,
  `resposta_verbal_incompreensivel` int DEFAULT NULL,
  `resposta_verbal_nenhuma` int DEFAULT NULL,
  `resposta_motora_obedece_comandos` int DEFAULT NULL,
  `resposta_motora_localiza_dor` int DEFAULT NULL,
  `resposta_motora_movimento_retirada` int DEFAULT NULL,
  `resposta_motora_flexao_anormal` int DEFAULT NULL,
  `resposta_motora_extensao_anormal` int DEFAULT NULL,
  `resposta_motora_nenhuma` int DEFAULT NULL,
  `total_gcs` int DEFAULT NULL,
  `id_dados_iniciais` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosambulancia`
--

CREATE TABLE `dadosambulancia` (
  `id_dadosambulancia` int NOT NULL,
  `numero_usd` varchar(50) DEFAULT NULL,
  `numero_ocorrencia` varchar(50) DEFAULT NULL,
  `despacho` varchar(255) DEFAULT NULL,
  `km_final` varchar(50) DEFAULT NULL,
  `codigo_ir` tinyint(1) DEFAULT NULL,
  `codigo_ps` tinyint(1) DEFAULT NULL,
  `hora_chegada` varchar(50) DEFAULT NULL,
  `codigo_sia_sus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_iniciais`
--

CREATE TABLE `dados_iniciais` (
  `id_dados_iniciais` int NOT NULL,
  `data` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `nome_hospital` varchar(255) DEFAULT NULL,
  `nome_paciente` varchar(255) DEFAULT NULL,
  `idade` int DEFAULT NULL,
  `fone` varchar(10) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `nome_acompanhante` varchar(255) DEFAULT NULL,
  `idade_acompanhante` int DEFAULT NULL,
  `local_ocorrencia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `decisaotransporte`
--

CREATE TABLE `decisaotransporte` (
  `id_decisaotransporte` int NOT NULL,
  `decisao_transporte` tinyint DEFAULT NULL,
  `id_dados_iniciais` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipeatendimento`
--

CREATE TABLE `equipeatendimento` (
  `id` int NOT NULL,
  `nome_m` varchar(255) DEFAULT NULL,
  `nome_s1` varchar(255) DEFAULT NULL,
  `nome_s2` varchar(255) DEFAULT NULL,
  `nome_s3` varchar(255) DEFAULT NULL,
  `demandante` varchar(255) DEFAULT NULL,
  `equipe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ferimentos`
--

CREATE TABLE `ferimentos` (
  `id_ferimentos` int NOT NULL,
  `local` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lado` varchar(10) DEFAULT NULL,
  `face` varchar(10) DEFAULT NULL,
  `tipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_dados_iniciais` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fichas`
--

CREATE TABLE `fichas` (
  `id` int NOT NULL,
  `pessoa_nome` varchar(255) DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `data_criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formaconducao`
--

CREATE TABLE `formaconducao` (
  `id_formaconducao` int NOT NULL,
  `forma_conducao` tinytext,
  `id_dados_iniciais` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historicofichas`
--

CREATE TABLE `historicofichas` (
  `id` int NOT NULL,
  `ficha_id` int DEFAULT NULL,
  `acao` varchar(100) DEFAULT NULL,
  `data_modificacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiaisdeixadoshospital`
--

CREATE TABLE `materiaisdeixadoshospital` (
  `id_materiaisdeixadoshospital` int NOT NULL,
  `base_estabilizacao_qt` int DEFAULT NULL,
  `ttf_qt` tinytext,
  `colar_qt` tinytext,
  `tirante_aranha_qt` int DEFAULT NULL,
  `colar_custom_qt` int DEFAULT NULL,
  `tirante_cabeca_qt` int DEFAULT NULL,
  `coxins_estabilizacao_qt` int DEFAULT NULL,
  `canula_qt` int DEFAULT NULL,
  `ked_qt` tinytext,
  `maca_rigida_qt` int DEFAULT NULL,
  `id_dados_iniciais` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiaisutilizadosdescartavel`
--

CREATE TABLE `materiaisutilizadosdescartavel` (
  `id` int NOT NULL,
  `ataduras_qt` tinyint DEFAULT NULL,
  `manta_aluminizada_qt` int DEFAULT NULL,
  `cateter_tp_oculos_qt` int DEFAULT NULL,
  `pas_dea_qt` int DEFAULT NULL,
  `compressa_comum_qt` int DEFAULT NULL,
  `sonda_aspiracao_qt` int DEFAULT NULL,
  `kits_qt` tinyint DEFAULT NULL,
  `soro_fisiologico_qt` int DEFAULT NULL,
  `luvas_desc_pares_qt` int DEFAULT NULL,
  `talas_pap_qt` tinyint DEFAULT NULL,
  `mascara_desc_qt` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetosrecolhidos`
--

CREATE TABLE `objetosrecolhidos` (
  `id` int NOT NULL,
  `objetos_recolhidos` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `observacoesimportantes`
--

CREATE TABLE `observacoesimportantes` (
  `id` int NOT NULL,
  `observacoes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `problemas_suspeitos`
--

CREATE TABLE `problemas_suspeitos` (
  `id` int NOT NULL,
  `psiquiatrico` tinyint(1) DEFAULT NULL,
  `respiratorio` varchar(50) DEFAULT NULL,
  `diabetes` varchar(50) DEFAULT NULL,
  `obstetrico` varchar(50) DEFAULT NULL,
  `transporte` varchar(50) DEFAULT NULL,
  `outros` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimentosefetuados`
--

CREATE TABLE `procedimentosefetuados` (
  `id` int NOT NULL,
  `aspiracao` tinyint(1) DEFAULT NULL,
  `avaliacao_inicial` tinyint(1) DEFAULT NULL,
  `avaliacao_dirigida` tinyint(1) DEFAULT NULL,
  `avaliacao_continuada` tinyint(1) DEFAULT NULL,
  `chave_rautek` tinyint(1) DEFAULT NULL,
  `canula_guedel` tinyint(1) DEFAULT NULL,
  `desobstrucao_va` tinyint(1) DEFAULT NULL,
  `emprego_dea` tinyint(1) DEFAULT NULL,
  `gerenciamento_riscos` tinyint(1) DEFAULT NULL,
  `limpeza_ferimento` tinyint(1) DEFAULT NULL,
  `curativos` tinyint(1) DEFAULT NULL,
  `compressivo` tinyint(1) DEFAULT NULL,
  `encravamento` tinyint(1) DEFAULT NULL,
  `ocular` tinyint(1) DEFAULT NULL,
  `queimadura` tinyint(1) DEFAULT NULL,
  `simples` tinyint(1) DEFAULT NULL,
  `tres_pontas` tinyint(1) DEFAULT NULL,
  `imobilizacoes` tinyint(1) DEFAULT NULL,
  `membro_inf_dir` tinyint(1) DEFAULT NULL,
  `membro_inf_esq` tinyint(1) DEFAULT NULL,
  `membro_sup_dir` tinyint(1) DEFAULT NULL,
  `membro_sup_esq` tinyint(1) DEFAULT NULL,
  `quadril` tinyint(1) DEFAULT NULL,
  `cervical` tinyint(1) DEFAULT NULL,
  `maca_sobre_rodas` tinyint(1) DEFAULT NULL,
  `maca_rigida` tinyint(1) DEFAULT NULL,
  `ponte` tinyint(1) DEFAULT NULL,
  `retirado_capacete` tinyint(1) DEFAULT NULL,
  `rcp` tinyint(1) DEFAULT NULL,
  `rolamento_90` tinyint(1) DEFAULT NULL,
  `rolamento_180` tinyint(1) DEFAULT NULL,
  `tomada_decisao` tinyint(1) DEFAULT NULL,
  `tratado_choque` tinyint(1) DEFAULT NULL,
  `uso_canula` tinyint(1) DEFAULT NULL,
  `uso_colar` tinyint(1) DEFAULT NULL,
  `tam_colar` varchar(10) DEFAULT NULL,
  `uso_ked` tinyint(1) DEFAULT NULL,
  `uso_ttf` tinyint(1) DEFAULT NULL,
  `ventilacao_suporte` tinyint(1) DEFAULT NULL,
  `oxigenioterapia` varchar(255) DEFAULT NULL,
  `lpm_vent_sup` int DEFAULT NULL,
  `reanimador` varchar(255) DEFAULT NULL,
  `lpm_reanimador` int DEFAULT NULL,
  `meio_auxiliares` tinyint(1) DEFAULT NULL,
  `celesc` tinyint(1) DEFAULT NULL,
  `def_civil` tinyint(1) DEFAULT NULL,
  `policia` tinyint(1) DEFAULT NULL,
  `civil` tinyint(1) DEFAULT NULL,
  `militar` tinyint(1) DEFAULT NULL,
  `pre` tinyint(1) DEFAULT NULL,
  `prf` tinyint(1) DEFAULT NULL,
  `samu` tinyint(1) DEFAULT NULL,
  `usa` tinyint(1) DEFAULT NULL,
  `usb` tinyint(1) DEFAULT NULL,
  `cit` tinyint(1) DEFAULT NULL,
  `outro_procedimento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `queimaduras`
--

CREATE TABLE `queimaduras` (
  `id` int NOT NULL,
  `localizacao` varchar(50) DEFAULT NULL,
  `primeiro_grau` tinyint(1) DEFAULT NULL,
  `segundo_grau` tinyint(1) DEFAULT NULL,
  `terceiro_grau` tinyint(1) DEFAULT NULL,
  `quarto_grau` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinaissintomas`
--

CREATE TABLE `sinaissintomas` (
  `id` int NOT NULL,
  `abdomem_sensivel` tinyint(1) DEFAULT NULL,
  `afundamento_de_cranio` tinyint(1) DEFAULT NULL,
  `agitacao` tinyint(1) DEFAULT NULL,
  `apneia` tinyint(1) DEFAULT NULL,
  `bradicardia` tinyint(1) DEFAULT NULL,
  `bradipneia` tinyint(1) DEFAULT NULL,
  `bronco_aspirando` tinyint(1) DEFAULT NULL,
  `cefaleia` tinyint(1) DEFAULT NULL,
  `cianose_labios` tinyint(1) DEFAULT NULL,
  `cianose_extremidade` tinyint(1) DEFAULT NULL,
  `convulsao` tinyint(1) DEFAULT NULL,
  `decorticacao` tinyint(1) DEFAULT NULL,
  `deformidade` tinyint(1) DEFAULT NULL,
  `descerebracao` tinyint(1) DEFAULT NULL,
  `desmaio` tinyint(1) DEFAULT NULL,
  `desvio_de_traqueia` tinyint(1) DEFAULT NULL,
  `dispneia` tinyint(1) DEFAULT NULL,
  `dor_local` tinyint(1) DEFAULT NULL,
  `edma_generalizados` tinyint(1) DEFAULT NULL,
  `edma_localizados` tinyint(1) DEFAULT NULL,
  `enfisema_subcutaneo` tinyint(1) DEFAULT NULL,
  `estase_de_jugular` tinyint(1) DEFAULT NULL,
  `face_palida` tinyint(1) DEFAULT NULL,
  `hemorragia_interna` tinyint(1) DEFAULT NULL,
  `hemorragia_externa` tinyint(1) DEFAULT NULL,
  `hipertensao` tinyint(1) DEFAULT NULL,
  `hipotensao` tinyint(1) DEFAULT NULL,
  `nauseas_vomitos` tinyint(1) DEFAULT NULL,
  `nasoragia` tinyint(1) DEFAULT NULL,
  `obito` tinyint(1) DEFAULT NULL,
  `otorreia` tinyint(1) DEFAULT NULL,
  `ovace` tinyint(1) DEFAULT NULL,
  `parada_cardiaca` tinyint(1) DEFAULT NULL,
  `parada_respiratoria` tinyint(1) DEFAULT NULL,
  `priaprismo` tinyint(1) DEFAULT NULL,
  `prurido_na_pele` tinyint(1) DEFAULT NULL,
  `pupilas_anisocoria` tinyint(1) DEFAULT NULL,
  `pupilas_isocoria` tinyint(1) DEFAULT NULL,
  `pupilas_midriase` tinyint(1) DEFAULT NULL,
  `pupilas_miose` tinyint(1) DEFAULT NULL,
  `pupilas_reagente` tinyint(1) DEFAULT NULL,
  `pupilas_nao_reagente` tinyint(1) DEFAULT NULL,
  `sede` tinyint(1) DEFAULT NULL,
  `sinal_de_battle` tinyint(1) DEFAULT NULL,
  `sinal_de_guaxinim` tinyint(1) DEFAULT NULL,
  `sudorese` tinyint(1) DEFAULT NULL,
  `taquipneia` tinyint(1) DEFAULT NULL,
  `taquicardia` tinyint(1) DEFAULT NULL,
  `tontura` tinyint(1) DEFAULT NULL,
  `outros_sintomas` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinaisvitais`
--

CREATE TABLE `sinaisvitais` (
  `id` int NOT NULL,
  `pressao_arterial_sistolica` int DEFAULT NULL,
  `pressao_arterial_diastolica` int DEFAULT NULL,
  `pulso` int DEFAULT NULL,
  `respiracao` int DEFAULT NULL,
  `pulsacao_percentual` int DEFAULT NULL,
  `hgt` int DEFAULT NULL,
  `temperatura` decimal(5,2) DEFAULT NULL,
  `perfusao_mais_2seg` tinyint(1) DEFAULT NULL,
  `perfusao_igual_2seg` tinyint(1) DEFAULT NULL,
  `anormal` tinyint(1) DEFAULT NULL,
  `normal` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `termorecusaatendimento`
--

CREATE TABLE `termorecusaatendimento` (
  `id` int NOT NULL,
  `conteudo_termo` text,
  `nome_assinante` varchar(255) DEFAULT NULL,
  `rg_assinante` varchar(20) DEFAULT NULL,
  `cpf_assinante` varchar(20) DEFAULT NULL,
  `nome_testemunha_1` varchar(255) DEFAULT NULL,
  `rg_testemunha_1` varchar(20) DEFAULT NULL,
  `nome_testemunha_2` varchar(255) DEFAULT NULL,
  `rg_testemunha_2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_ocorrencia`
--

CREATE TABLE `tipo_ocorrencia` (
  `id` int NOT NULL,
  `causas` varchar(255) DEFAULT NULL,
  `outros` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `matricula` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vitimaera`
--

CREATE TABLE `vitimaera` (
  `id_vitimaera` int NOT NULL,
  `ciclista` tinyint(1) DEFAULT NULL,
  `condutor_moto` tinyint(1) DEFAULT NULL,
  `gestante` tinyint(1) DEFAULT NULL,
  `pass_ban_frente` tinyint(1) DEFAULT NULL,
  `pass_moto` tinyint(1) DEFAULT NULL,
  `condutor_carro` tinyint(1) DEFAULT NULL,
  `clinico` tinyint(1) DEFAULT NULL,
  `trauma` tinyint(1) DEFAULT NULL,
  `pass_bco_tras` tinyint(1) DEFAULT NULL,
  `pedestre` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anamnesegestacional`
--
ALTER TABLE `anamnesegestacional`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dados_iniciais_anamnesegestacional` (`id_dados_iniciais`);

--
-- Índices para tabela `anamnese_emergencia`
--
ALTER TABLE `anamnese_emergencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dados_iniciais_anamnese_emergencia` (`id_dados_iniciais`);

--
-- Índices para tabela `avaliacaocinematica`
--
ALTER TABLE `avaliacaocinematica`
  ADD PRIMARY KEY (`id_avaliacaocinematica`),
  ADD KEY `id_dados_iniciais_avaliacaocinematica` (`id_dados_iniciais`);

--
-- Índices para tabela `avaliacaoglasgow`
--
ALTER TABLE `avaliacaoglasgow`
  ADD PRIMARY KEY (`id_avaliacaoglasgow`),
  ADD KEY `id_dados_iniciais_avaliacaoglasgow` (`id_dados_iniciais`);

--
-- Índices para tabela `dadosambulancia`
--
ALTER TABLE `dadosambulancia`
  ADD PRIMARY KEY (`id_dadosambulancia`);

--
-- Índices para tabela `dados_iniciais`
--
ALTER TABLE `dados_iniciais`
  ADD PRIMARY KEY (`id_dados_iniciais`);

--
-- Índices para tabela `decisaotransporte`
--
ALTER TABLE `decisaotransporte`
  ADD PRIMARY KEY (`id_decisaotransporte`),
  ADD KEY `id_dados_iniciais_decisaotransporte` (`id_dados_iniciais`);

--
-- Índices para tabela `equipeatendimento`
--
ALTER TABLE `equipeatendimento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ferimentos`
--
ALTER TABLE `ferimentos`
  ADD PRIMARY KEY (`id_ferimentos`),
  ADD KEY `id_dados_iniciais_ferimentos` (`id_dados_iniciais`);

--
-- Índices para tabela `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `formaconducao`
--
ALTER TABLE `formaconducao`
  ADD PRIMARY KEY (`id_formaconducao`),
  ADD KEY `id_dados_iniciais_formaconducao` (`id_dados_iniciais`);

--
-- Índices para tabela `historicofichas`
--
ALTER TABLE `historicofichas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ficha_id` (`ficha_id`);

--
-- Índices para tabela `materiaisdeixadoshospital`
--
ALTER TABLE `materiaisdeixadoshospital`
  ADD PRIMARY KEY (`id_materiaisdeixadoshospital`),
  ADD KEY `id_dados_iniciais_materiaisdeixadoshospital` (`id_dados_iniciais`);

--
-- Índices para tabela `materiaisutilizadosdescartavel`
--
ALTER TABLE `materiaisutilizadosdescartavel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `objetosrecolhidos`
--
ALTER TABLE `objetosrecolhidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `observacoesimportantes`
--
ALTER TABLE `observacoesimportantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `problemas_suspeitos`
--
ALTER TABLE `problemas_suspeitos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `procedimentosefetuados`
--
ALTER TABLE `procedimentosefetuados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `queimaduras`
--
ALTER TABLE `queimaduras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sinaissintomas`
--
ALTER TABLE `sinaissintomas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sinaisvitais`
--
ALTER TABLE `sinaisvitais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `termorecusaatendimento`
--
ALTER TABLE `termorecusaatendimento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vitimaera`
--
ALTER TABLE `vitimaera`
  ADD PRIMARY KEY (`id_vitimaera`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anamnesegestacional`
--
ALTER TABLE `anamnesegestacional`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `anamnese_emergencia`
--
ALTER TABLE `anamnese_emergencia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacaocinematica`
--
ALTER TABLE `avaliacaocinematica`
  MODIFY `id_avaliacaocinematica` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacaoglasgow`
--
ALTER TABLE `avaliacaoglasgow`
  MODIFY `id_avaliacaoglasgow` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dadosambulancia`
--
ALTER TABLE `dadosambulancia`
  MODIFY `id_dadosambulancia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dados_iniciais`
--
ALTER TABLE `dados_iniciais`
  MODIFY `id_dados_iniciais` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `decisaotransporte`
--
ALTER TABLE `decisaotransporte`
  MODIFY `id_decisaotransporte` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipeatendimento`
--
ALTER TABLE `equipeatendimento`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ferimentos`
--
ALTER TABLE `ferimentos`
  MODIFY `id_ferimentos` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `formaconducao`
--
ALTER TABLE `formaconducao`
  MODIFY `id_formaconducao` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historicofichas`
--
ALTER TABLE `historicofichas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `materiaisdeixadoshospital`
--
ALTER TABLE `materiaisdeixadoshospital`
  MODIFY `id_materiaisdeixadoshospital` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `materiaisutilizadosdescartavel`
--
ALTER TABLE `materiaisutilizadosdescartavel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `objetosrecolhidos`
--
ALTER TABLE `objetosrecolhidos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `observacoesimportantes`
--
ALTER TABLE `observacoesimportantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `problemas_suspeitos`
--
ALTER TABLE `problemas_suspeitos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `procedimentosefetuados`
--
ALTER TABLE `procedimentosefetuados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `queimaduras`
--
ALTER TABLE `queimaduras`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sinaissintomas`
--
ALTER TABLE `sinaissintomas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sinaisvitais`
--
ALTER TABLE `sinaisvitais`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `termorecusaatendimento`
--
ALTER TABLE `termorecusaatendimento`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vitimaera`
--
ALTER TABLE `vitimaera`
  MODIFY `id_vitimaera` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `anamnesegestacional`
--
ALTER TABLE `anamnesegestacional`
  ADD CONSTRAINT `id_dados_iniciais_anamnesegestacional` FOREIGN KEY (`id_dados_iniciais`) REFERENCES `dados_iniciais` (`id_dados_iniciais`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `anamnese_emergencia`
--
ALTER TABLE `anamnese_emergencia`
  ADD CONSTRAINT `id_dados_iniciais_anamnese_emergencia` FOREIGN KEY (`id_dados_iniciais`) REFERENCES `dados_iniciais` (`id_dados_iniciais`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `avaliacaocinematica`
--
ALTER TABLE `avaliacaocinematica`
  ADD CONSTRAINT `id_dados_iniciais_avaliacaocinematica` FOREIGN KEY (`id_dados_iniciais`) REFERENCES `dados_iniciais` (`id_dados_iniciais`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `avaliacaoglasgow`
--
ALTER TABLE `avaliacaoglasgow`
  ADD CONSTRAINT `id_dados_iniciais_avaliacaoglasgow` FOREIGN KEY (`id_dados_iniciais`) REFERENCES `dados_iniciais` (`id_dados_iniciais`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `decisaotransporte`
--
ALTER TABLE `decisaotransporte`
  ADD CONSTRAINT `id_dados_iniciais_decisaotransporte` FOREIGN KEY (`id_dados_iniciais`) REFERENCES `dados_iniciais` (`id_dados_iniciais`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `ferimentos`
--
ALTER TABLE `ferimentos`
  ADD CONSTRAINT `id_dados_iniciais_ferimentos` FOREIGN KEY (`id_dados_iniciais`) REFERENCES `dados_iniciais` (`id_dados_iniciais`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `formaconducao`
--
ALTER TABLE `formaconducao`
  ADD CONSTRAINT `id_dados_iniciais_formaconducao` FOREIGN KEY (`id_dados_iniciais`) REFERENCES `dados_iniciais` (`id_dados_iniciais`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `historicofichas`
--
ALTER TABLE `historicofichas`
  ADD CONSTRAINT `historicofichas_ibfk_1` FOREIGN KEY (`ficha_id`) REFERENCES `fichas` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `materiaisdeixadoshospital`
--
ALTER TABLE `materiaisdeixadoshospital`
  ADD CONSTRAINT `id_dados_iniciais_materiaisdeixadoshospital` FOREIGN KEY (`id_dados_iniciais`) REFERENCES `dados_iniciais` (`id_dados_iniciais`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
