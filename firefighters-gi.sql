-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/10/2023 às 23:36
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `firefighters-gi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `anamnese`
--

CREATE TABLE `anamnese` (
  `id` int(11) NOT NULL,
  `oq_aconteceu` text DEFAULT NULL,
  `aconteceu_outras_vezes` enum('Sim','Não') DEFAULT NULL,
  `tempo_aconteceu` varchar(255) DEFAULT NULL,
  `problema_saude` enum('Sim','Não') DEFAULT NULL,
  `quais_doencas` text DEFAULT NULL,
  `faz_uso_medicacao` enum('Sim','Não') DEFAULT NULL,
  `horario_ultima_medicacao` time DEFAULT NULL,
  `quais_medicacoes` text DEFAULT NULL,
  `alergico` enum('Sim','Não') DEFAULT NULL,
  `especificacao_alergia` text DEFAULT NULL,
  `ingeriu_alimento_liquido` enum('Sim','Não') DEFAULT NULL,
  `horas_ingeriu` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `anamnese_gestacional`
--

CREATE TABLE `anamnese_gestacional` (
  `id` int(11) NOT NULL,
  `periodo_gestacao` varchar(255) DEFAULT NULL,
  `uso_medicacao` enum('Sim','Não') DEFAULT NULL,
  `nome_medico` varchar(255) DEFAULT NULL,
  `complicacoes` enum('Sim','Não') DEFAULT NULL,
  `primeiro_filho` enum('Sim','Não') DEFAULT NULL,
  `numero_filhos` int(11) DEFAULT NULL,
  `inicio_contracoes` time DEFAULT NULL,
  `duracao_contracoes` time DEFAULT NULL,
  `intervalo_contracoes` time DEFAULT NULL,
  `pressao_quadril` enum('Sim','Não') DEFAULT NULL,
  `ruptura_bolsa` enum('Sim','Não') DEFAULT NULL,
  `inspecao_visual` enum('Sim','Não') DEFAULT NULL,
  `parto_realizado` enum('Sim','Não') DEFAULT NULL,
  `hora_nascimento` time DEFAULT NULL,
  `sexo_bebe` enum('Fem','Mas') DEFAULT NULL,
  `nome_bebe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacaocinematica`
--

CREATE TABLE `avaliacaocinematica` (
  `id` int(11) NOT NULL,
  `disturbioComportamento` enum('Sim','Não') DEFAULT NULL,
  `encontradoCapacete` enum('Sim','Não') DEFAULT NULL,
  `encontradoCinto` enum('Sim','Não') DEFAULT NULL,
  `paraBrisasAvariado` enum('Sim','Não') DEFAULT NULL,
  `caminhandoNaCena` enum('Sim','Não') DEFAULT NULL,
  `painelAvariado` enum('Sim','Não') DEFAULT NULL,
  `volanteTorcido` enum('Sim','Não') DEFAULT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao_glasgow_maiores_5_anos`
--

CREATE TABLE `avaliacao_glasgow_maiores_5_anos` (
  `id` int(11) NOT NULL,
  `nivel_consciencia` int(11) DEFAULT NULL,
  `abertura_ocular` int(11) DEFAULT NULL,
  `resposta_verbal` int(11) DEFAULT NULL,
  `resposta_motora` int(11) DEFAULT NULL,
  `total_gcs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao_glasgow_menores_5_anos`
--

CREATE TABLE `avaliacao_glasgow_menores_5_anos` (
  `id` int(11) NOT NULL,
  `nivel_consciencia` int(11) DEFAULT NULL,
  `abertura_ocular` int(11) DEFAULT NULL,
  `resposta_verbal` int(11) DEFAULT NULL,
  `resposta_motora` int(11) DEFAULT NULL,
  `total_gcs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `dadosambulancia`
--

CREATE TABLE `dadosambulancia` (
  `id` int(11) NOT NULL,
  `numeroUnidadeServico` int(11) DEFAULT NULL,
  `numeroOcorrencia` int(11) DEFAULT NULL,
  `despacho` varchar(255) DEFAULT NULL,
  `kmFinal` int(11) DEFAULT NULL,
  `codigoIR` enum('ir','') DEFAULT NULL,
  `codigoPS` enum('ps','') DEFAULT NULL,
  `horaChegada` varchar(10) DEFAULT NULL,
  `codigoSIASUS` varchar(255) DEFAULT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_iniciais`
--

CREATE TABLE `dados_iniciais` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `sexo` enum('F','M') DEFAULT NULL,
  `nome_hospital` varchar(255) DEFAULT NULL,
  `nome_paciente` varchar(255) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `fone` varchar(10) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `nome_acompanhante` varchar(255) DEFAULT NULL,
  `idade_acompanhante` int(11) DEFAULT NULL,
  `local_ocorrencia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `decisaotransporte`
--

CREATE TABLE `decisaotransporte` (
  `id` int(11) NOT NULL,
  `critico` tinyint(1) DEFAULT NULL,
  `instavel` tinyint(1) DEFAULT NULL,
  `potencialmenteInstavel` tinyint(1) DEFAULT NULL,
  `deitada` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipeatendimento`
--

CREATE TABLE `equipeatendimento` (
  `id` int(11) NOT NULL,
  `medicoResponsavel` varchar(255) DEFAULT NULL,
  `socorrista1` varchar(255) DEFAULT NULL,
  `socorrista2` varchar(255) DEFAULT NULL,
  `socorrista3` varchar(255) DEFAULT NULL,
  `demandante` varchar(255) DEFAULT NULL,
  `equipe` varchar(255) DEFAULT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ferimentos`
--

CREATE TABLE `ferimentos` (
  `id` int(11) NOT NULL,
  `local` varchar(255) NOT NULL,
  `lado` enum('direito','esquerdo') NOT NULL,
  `face` enum('frontal','posterior') NOT NULL,
  `tipo` enum('ferimento','fraturas','entorses','luxacao','contusao') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `formaconducao`
--

CREATE TABLE `formaconducao` (
  `id` int(11) NOT NULL,
  `deitada` tinyint(1) DEFAULT NULL,
  `semiDeitada` tinyint(1) DEFAULT NULL,
  `sentada` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `locais_trauma`
--

CREATE TABLE `locais_trauma` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `imagem_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `materiaisdescartaveis`
--

CREATE TABLE `materiaisdescartaveis` (
  `id` int(11) NOT NULL,
  `ataduras` int(11) DEFAULT NULL,
  `mantaAluminizada` int(11) DEFAULT NULL,
  `cateterTPOculos` int(11) DEFAULT NULL,
  `pasDEA` int(11) DEFAULT NULL,
  `compressaComum` int(11) DEFAULT NULL,
  `sondaAspiracao` int(11) DEFAULT NULL,
  `kitsH` int(11) DEFAULT NULL,
  `kitsP` int(11) DEFAULT NULL,
  `kitsQ` int(11) DEFAULT NULL,
  `soroFisiologico` int(11) DEFAULT NULL,
  `luvasDescPares` int(11) DEFAULT NULL,
  `talasPapP` int(11) DEFAULT NULL,
  `talasPapG` int(11) DEFAULT NULL,
  `mascaraDesc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `materiaisutilizadosdescartaveis`
--

CREATE TABLE `materiaisutilizadosdescartaveis` (
  `id` int(11) NOT NULL,
  `ataduras` int(11) DEFAULT NULL,
  `mantaAluminizada` int(11) DEFAULT NULL,
  `cateterTPOculos` int(11) DEFAULT NULL,
  `pasDEA` int(11) DEFAULT NULL,
  `compressaComum` int(11) DEFAULT NULL,
  `sondaAspiracao` int(11) DEFAULT NULL,
  `kitsH` int(11) DEFAULT NULL,
  `kitsP` int(11) DEFAULT NULL,
  `kitsQ` int(11) DEFAULT NULL,
  `soroFisiologico` int(11) DEFAULT NULL,
  `luvasDescPares` int(11) DEFAULT NULL,
  `talasPapP` int(11) DEFAULT NULL,
  `talasPapG` int(11) DEFAULT NULL,
  `mascaraDesc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `objetosrecolhidos`
--

CREATE TABLE `objetosrecolhidos` (
  `id` int(11) NOT NULL,
  `objetosRecolhidos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `observacoesimportantes`
--

CREATE TABLE `observacoesimportantes` (
  `id` int(11) NOT NULL,
  `objetosRecolhidos` text NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `id_nome` int(11) DEFAULT NULL,
  `id_ficha` int(11) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `matricula` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `problemas_suspeitos`
--

CREATE TABLE `problemas_suspeitos` (
  `id` int(11) NOT NULL,
  `psiquiatrico` tinyint(4) DEFAULT NULL,
  `respiratorio` varchar(50) DEFAULT NULL,
  `diabetes` varchar(50) DEFAULT NULL,
  `obstetrico` varchar(50) DEFAULT NULL,
  `transporte` varchar(50) DEFAULT NULL,
  `outros` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `procedimentosefetuados`
--

CREATE TABLE `procedimentosefetuados` (
  `id` int(11) NOT NULL,
  `aspiracao` tinyint(1) DEFAULT NULL,
  `avaliacaoInicial` tinyint(1) DEFAULT NULL,
  `avaliacaoDirigida` tinyint(1) DEFAULT NULL,
  `avaliacaoContinuada` tinyint(1) DEFAULT NULL,
  `chaveRautek` tinyint(1) DEFAULT NULL,
  `canulaGuedel` tinyint(1) DEFAULT NULL,
  `desobstrucaoVA` tinyint(1) DEFAULT NULL,
  `empregoDEA` tinyint(1) DEFAULT NULL,
  `gerenciamentoRiscos` tinyint(1) DEFAULT NULL,
  `limpezaFerimento` tinyint(1) DEFAULT NULL,
  `curativos` tinyint(1) DEFAULT NULL,
  `compressivo` tinyint(1) DEFAULT NULL,
  `encravamento` tinyint(1) DEFAULT NULL,
  `ocular` tinyint(1) DEFAULT NULL,
  `queimadura` tinyint(1) DEFAULT NULL,
  `simples` tinyint(1) DEFAULT NULL,
  `tresPontas` tinyint(1) DEFAULT NULL,
  `imobilizacoes` tinyint(1) DEFAULT NULL,
  `membroInfDir` tinyint(1) DEFAULT NULL,
  `membroInfEsq` tinyint(1) DEFAULT NULL,
  `membroSupDir` tinyint(1) DEFAULT NULL,
  `membroSupEsq` tinyint(1) DEFAULT NULL,
  `quadril` tinyint(1) DEFAULT NULL,
  `cervical` tinyint(1) DEFAULT NULL,
  `macaSobreRodas` tinyint(1) DEFAULT NULL,
  `macaRigida` tinyint(1) DEFAULT NULL,
  `ponte` tinyint(1) DEFAULT NULL,
  `retiradoCapacete` tinyint(1) DEFAULT NULL,
  `rcp` tinyint(1) DEFAULT NULL,
  `rolamento90` tinyint(1) DEFAULT NULL,
  `rolamento180` tinyint(1) DEFAULT NULL,
  `tomadaDecisao` tinyint(1) DEFAULT NULL,
  `tratadoChoque` tinyint(1) DEFAULT NULL,
  `usoCanula` tinyint(1) DEFAULT NULL,
  `usoColar` tinyint(1) DEFAULT NULL,
  `tamanhoColar` varchar(255) DEFAULT NULL,
  `usoKed` tinyint(1) DEFAULT NULL,
  `usoTtf` tinyint(1) DEFAULT NULL,
  `ventSuporte` tinyint(1) DEFAULT NULL,
  `oxigenioterapia` tinyint(1) DEFAULT NULL,
  `lpmOxigenioterapia` varchar(255) DEFAULT NULL,
  `reanimador` tinyint(1) DEFAULT NULL,
  `lpmReanimador` varchar(255) DEFAULT NULL,
  `meioAuxiliares` tinyint(1) DEFAULT NULL,
  `celesc` tinyint(1) DEFAULT NULL,
  `defCivilPolícia` tinyint(1) DEFAULT NULL,
  `defCivilCivil` tinyint(1) DEFAULT NULL,
  `defCivilMilitar` tinyint(1) DEFAULT NULL,
  `defCivilPRE` tinyint(1) DEFAULT NULL,
  `defCivilPRF` tinyint(1) DEFAULT NULL,
  `samu` tinyint(1) DEFAULT NULL,
  `usa` tinyint(1) DEFAULT NULL,
  `usb` tinyint(1) DEFAULT NULL,
  `cit` tinyint(1) DEFAULT NULL,
  `outrosProcedimentos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `queimaduras`
--

CREATE TABLE `queimaduras` (
  `id` int(11) NOT NULL,
  `cabeca_1_grau` tinyint(1) DEFAULT NULL,
  `cabeca_2_grau` tinyint(1) DEFAULT NULL,
  `cabeca_3_grau` tinyint(1) DEFAULT NULL,
  `cabeca_4_grau` tinyint(1) DEFAULT NULL,
  `pescoco_1_grau` tinyint(1) DEFAULT NULL,
  `pescoco_2_grau` tinyint(1) DEFAULT NULL,
  `pescoco_3_grau` tinyint(1) DEFAULT NULL,
  `pescoco_4_grau` tinyint(1) DEFAULT NULL,
  `tant_1_grau` tinyint(1) DEFAULT NULL,
  `tant_2_grau` tinyint(1) DEFAULT NULL,
  `tant_3_grau` tinyint(1) DEFAULT NULL,
  `tant_4_grau` tinyint(1) DEFAULT NULL,
  `tpos_1_grau` tinyint(1) DEFAULT NULL,
  `tpos_2_grau` tinyint(1) DEFAULT NULL,
  `tpos_3_grau` tinyint(1) DEFAULT NULL,
  `tpos_4_grau` tinyint(1) DEFAULT NULL,
  `genital_1_grau` tinyint(1) DEFAULT NULL,
  `genital_2_grau` tinyint(1) DEFAULT NULL,
  `genital_3_grau` tinyint(1) DEFAULT NULL,
  `genital_4_grau` tinyint(1) DEFAULT NULL,
  `mid_1_grau` tinyint(1) DEFAULT NULL,
  `mid_2_grau` tinyint(1) DEFAULT NULL,
  `mid_3_grau` tinyint(1) DEFAULT NULL,
  `mid_4_grau` tinyint(1) DEFAULT NULL,
  `mie_1_grau` tinyint(1) DEFAULT NULL,
  `mie_2_grau` tinyint(1) DEFAULT NULL,
  `mie_3_grau` tinyint(1) DEFAULT NULL,
  `mie_4_grau` tinyint(1) DEFAULT NULL,
  `msd_1_grau` tinyint(1) DEFAULT NULL,
  `msd_2_grau` tinyint(1) DEFAULT NULL,
  `msd_3_grau` tinyint(1) DEFAULT NULL,
  `msd_4_grau` tinyint(1) DEFAULT NULL,
  `mse_1_grau` tinyint(1) DEFAULT NULL,
  `mse_2_grau` tinyint(1) DEFAULT NULL,
  `mse_3_grau` tinyint(1) DEFAULT NULL,
  `mse_4_grau` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sinaissintomas`
--

CREATE TABLE `sinaissintomas` (
  `id` int(11) NOT NULL,
  `abdomenSensivelRigido` tinyint(1) DEFAULT NULL,
  `afundamentoCrânio` tinyint(1) DEFAULT NULL,
  `agitação` tinyint(1) DEFAULT NULL,
  `apneia` tinyint(1) DEFAULT NULL,
  `bradicardia` tinyint(1) DEFAULT NULL,
  `bradipneia` tinyint(1) DEFAULT NULL,
  `broncoAspiração` tinyint(1) DEFAULT NULL,
  `cefaleia` tinyint(1) DEFAULT NULL,
  `cianoseLabios` tinyint(1) DEFAULT NULL,
  `cianoseExtremidade` tinyint(1) DEFAULT NULL,
  `convulsão` tinyint(1) DEFAULT NULL,
  `decorticação` tinyint(1) DEFAULT NULL,
  `deformidade` tinyint(1) DEFAULT NULL,
  `descerebração` tinyint(1) DEFAULT NULL,
  `desmaio` tinyint(1) DEFAULT NULL,
  `desvioTraqueia` tinyint(1) DEFAULT NULL,
  `dispneia` tinyint(1) DEFAULT NULL,
  `dorLocal` tinyint(1) DEFAULT NULL,
  `edemaGeneralizado` tinyint(1) DEFAULT NULL,
  `edemaLocalizado` tinyint(1) DEFAULT NULL,
  `enfisemaSubcutâneo` tinyint(1) DEFAULT NULL,
  `estaseJugular` tinyint(1) DEFAULT NULL,
  `facePálida` tinyint(1) DEFAULT NULL,
  `hemorragiaInterna` tinyint(1) DEFAULT NULL,
  `hemorragiaExterna` tinyint(1) DEFAULT NULL,
  `hipertensão` tinyint(1) DEFAULT NULL,
  `hipotensão` tinyint(1) DEFAULT NULL,
  `náuseasVômitos` tinyint(1) DEFAULT NULL,
  `nasorragia` tinyint(1) DEFAULT NULL,
  `óbito` tinyint(1) DEFAULT NULL,
  `otorreia` tinyint(1) DEFAULT NULL,
  `ovace` tinyint(1) DEFAULT NULL,
  `paradaCardíaca` tinyint(1) DEFAULT NULL,
  `paradaRespiratória` tinyint(1) DEFAULT NULL,
  `priaprismo` tinyint(1) DEFAULT NULL,
  `pruridoPele` tinyint(1) DEFAULT NULL,
  `pupilasAnisocoria` tinyint(1) DEFAULT NULL,
  `pupilasIsocoria` tinyint(1) DEFAULT NULL,
  `pupilasMidriase` tinyint(1) DEFAULT NULL,
  `pupilasMiose` tinyint(1) DEFAULT NULL,
  `pupilasReagente` tinyint(1) DEFAULT NULL,
  `pupilasNãoReagente` tinyint(1) DEFAULT NULL,
  `sede` tinyint(1) DEFAULT NULL,
  `sinalBattle` tinyint(1) DEFAULT NULL,
  `sinalGuaxinim` tinyint(1) DEFAULT NULL,
  `sudorese` tinyint(1) DEFAULT NULL,
  `taquipneia` tinyint(1) DEFAULT NULL,
  `taquicardia` tinyint(1) DEFAULT NULL,
  `tontura` tinyint(1) DEFAULT NULL,
  `outros` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sinais_vitais`
--

CREATE TABLE `sinais_vitais` (
  `id` int(11) NOT NULL,
  `pressao_arterial_sistolica` int(11) DEFAULT NULL,
  `pressao_arterial_diastolica` int(11) DEFAULT NULL,
  `pulso` int(11) DEFAULT NULL,
  `respiracao` int(11) DEFAULT NULL,
  `pulsacao` int(11) DEFAULT NULL,
  `hgt` int(11) DEFAULT NULL,
  `temperatura` decimal(5,2) DEFAULT NULL,
  `perfusao` varchar(10) DEFAULT NULL,
  `condicao` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `termosrecusaatendimentotransporte`
--

CREATE TABLE `termosrecusaatendimentotransporte` (
  `id` int(11) NOT NULL,
  `nomePaciente` varchar(255) NOT NULL,
  `rgPaciente` varchar(20) NOT NULL,
  `cpfPaciente` varchar(20) NOT NULL,
  `recusaTexto` text NOT NULL,
  `assinaturaTestemunha1` varchar(255) NOT NULL,
  `nomeTestemunha1` varchar(255) NOT NULL,
  `docTestemunha1` varchar(20) NOT NULL,
  `nomeTestemunha2` varchar(255) NOT NULL,
  `docTestemunha2` varchar(20) NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_ocorrencia`
--

CREATE TABLE `tipo_ocorrencia` (
  `id` int(11) NOT NULL,
  `causado_animais` tinyint(1) DEFAULT NULL,
  `meio_transporte` tinyint(1) DEFAULT NULL,
  `desmoronamento_deslizamento` tinyint(1) DEFAULT NULL,
  `emergencia_medica` tinyint(1) DEFAULT NULL,
  `queda_altura_2m` tinyint(1) DEFAULT NULL,
  `tentativa_suicidio` tinyint(1) DEFAULT NULL,
  `queda_propria_altura` tinyint(1) DEFAULT NULL,
  `afogamento` tinyint(1) DEFAULT NULL,
  `agressao` tinyint(1) DEFAULT NULL,
  `atropelamento` tinyint(1) DEFAULT NULL,
  `choque_eletrico` tinyint(1) DEFAULT NULL,
  `desabamento` tinyint(1) DEFAULT NULL,
  `domestico` tinyint(1) DEFAULT NULL,
  `esportivo` tinyint(1) DEFAULT NULL,
  `intoxicacao` tinyint(1) DEFAULT NULL,
  `queda_bicicleta` tinyint(1) DEFAULT NULL,
  `queda_moto` tinyint(1) DEFAULT NULL,
  `queda_nivel_2m` tinyint(1) DEFAULT NULL,
  `trabalho` tinyint(1) DEFAULT NULL,
  `transferencia` tinyint(1) DEFAULT NULL,
  `outros` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vitimaera`
--

CREATE TABLE `vitimaera` (
  `id` int(11) NOT NULL,
  `ciclista` tinyint(1) DEFAULT NULL,
  `condutorMoto` tinyint(1) DEFAULT NULL,
  `gestante` tinyint(1) DEFAULT NULL,
  `passageiroBanFrente` tinyint(1) DEFAULT NULL,
  `passageiroMoto` tinyint(1) DEFAULT NULL,
  `condutorCarro` tinyint(1) DEFAULT NULL,
  `clinico` tinyint(1) DEFAULT NULL,
  `trauma` tinyint(1) DEFAULT NULL,
  `passageiroBcoTras` tinyint(1) DEFAULT NULL,
  `pedestre` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `anamnese`
--
ALTER TABLE `anamnese`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anamnese_gestacional`
--
ALTER TABLE `anamnese_gestacional`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `avaliacaocinematica`
--
ALTER TABLE `avaliacaocinematica`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `avaliacao_glasgow_maiores_5_anos`
--
ALTER TABLE `avaliacao_glasgow_maiores_5_anos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `avaliacao_glasgow_menores_5_anos`
--
ALTER TABLE `avaliacao_glasgow_menores_5_anos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `dadosambulancia`
--
ALTER TABLE `dadosambulancia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `dados_iniciais`
--
ALTER TABLE `dados_iniciais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `decisaotransporte`
--
ALTER TABLE `decisaotransporte`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipeatendimento`
--
ALTER TABLE `equipeatendimento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ferimentos`
--
ALTER TABLE `ferimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `formaconducao`
--
ALTER TABLE `formaconducao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `locais_trauma`
--
ALTER TABLE `locais_trauma`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `materiaisdescartaveis`
--
ALTER TABLE `materiaisdescartaveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `materiaisutilizadosdescartaveis`
--
ALTER TABLE `materiaisutilizadosdescartaveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `objetosrecolhidos`
--
ALTER TABLE `objetosrecolhidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `observacoesimportantes`
--
ALTER TABLE `observacoesimportantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `problemas_suspeitos`
--
ALTER TABLE `problemas_suspeitos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `procedimentosefetuados`
--
ALTER TABLE `procedimentosefetuados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `queimaduras`
--
ALTER TABLE `queimaduras`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sinaissintomas`
--
ALTER TABLE `sinaissintomas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sinais_vitais`
--
ALTER TABLE `sinais_vitais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `termosrecusaatendimentotransporte`
--
ALTER TABLE `termosrecusaatendimentotransporte`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vitimaera`
--
ALTER TABLE `vitimaera`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anamnese`
--
ALTER TABLE `anamnese`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `anamnese_gestacional`
--
ALTER TABLE `anamnese_gestacional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacaocinematica`
--
ALTER TABLE `avaliacaocinematica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacao_glasgow_maiores_5_anos`
--
ALTER TABLE `avaliacao_glasgow_maiores_5_anos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacao_glasgow_menores_5_anos`
--
ALTER TABLE `avaliacao_glasgow_menores_5_anos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dadosambulancia`
--
ALTER TABLE `dadosambulancia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dados_iniciais`
--
ALTER TABLE `dados_iniciais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `decisaotransporte`
--
ALTER TABLE `decisaotransporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipeatendimento`
--
ALTER TABLE `equipeatendimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ferimentos`
--
ALTER TABLE `ferimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `formaconducao`
--
ALTER TABLE `formaconducao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `locais_trauma`
--
ALTER TABLE `locais_trauma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `materiaisdescartaveis`
--
ALTER TABLE `materiaisdescartaveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `materiaisutilizadosdescartaveis`
--
ALTER TABLE `materiaisutilizadosdescartaveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `objetosrecolhidos`
--
ALTER TABLE `objetosrecolhidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `observacoesimportantes`
--
ALTER TABLE `observacoesimportantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `problemas_suspeitos`
--
ALTER TABLE `problemas_suspeitos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `procedimentosefetuados`
--
ALTER TABLE `procedimentosefetuados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `queimaduras`
--
ALTER TABLE `queimaduras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sinaissintomas`
--
ALTER TABLE `sinaissintomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sinais_vitais`
--
ALTER TABLE `sinais_vitais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `termosrecusaatendimentotransporte`
--
ALTER TABLE `termosrecusaatendimentotransporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vitimaera`
--
ALTER TABLE `vitimaera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
