-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Mar-2024 às 18:00
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `saopaio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotosindex`
--

CREATE TABLE `fotosindex` (
  `id_fotografia` int(11) NOT NULL,
  `nome_fotografia` varchar(100) NOT NULL,
  `legenda_fotografia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotosloja`
--

CREATE TABLE `fotosloja` (
  `id_fotografia` int(11) NOT NULL,
  `nome_fotografia` varchar(100) NOT NULL,
  `legenda_fotografia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotospatrocinios`
--

CREATE TABLE `fotospatrocinios` (
  `id_fotografia` int(11) NOT NULL,
  `nome_fotografia` varchar(100) NOT NULL,
  `legenda_fotografia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotostrofeus`
--

CREATE TABLE `fotostrofeus` (
  `id_fotografia` int(11) NOT NULL,
  `nome_fotografia` varchar(100) NOT NULL,
  `legenda_fotografia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `id_jogador` int(11) NOT NULL,
  `nome_jogador` varchar(100) NOT NULL,
  `naturalidade_jogador` varchar(100) NOT NULL,
  `nascimento_jogador` int(11) NOT NULL,
  `cc_jogador` varchar(100) NOT NULL,
  `altura_jogador` int(11) NOT NULL,
  `numero_jogador` varchar(500) NOT NULL,
  `posicao_jogador` varchar(200) NOT NULL,
  `foto_jogador` varchar(100) NOT NULL,
  `escalao_jogador` char(9) NOT NULL,
  `amarelos` int(11) NOT NULL,
  `vermelhos` int(11) NOT NULL,
  `jogos` int(11) NOT NULL,
  `minutos_jogados` int(11) NOT NULL,
  `minutos_jogo` int(11) NOT NULL,
  `golos_marcados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nome_login` varchar(100) NOT NULL,
  `gmail_login` varchar(500) NOT NULL,
  `senha_login` varchar(200) NOT NULL,
  `genero_login` int(11) NOT NULL,
  `nascimento_login` date NOT NULL,
  `conta_login` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_login`, `nome_login`, `gmail_login`, `senha_login`, `genero_login`, `nascimento_login`, `conta_login`) VALUES
(1, 'Miguel', 'migueljuniorabc40@gmail.com', 'MiguelAlmeida', 2, '0000-00-00', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `multimedia`
--

CREATE TABLE `multimedia` (
  `id_foto` int(11) NOT NULL,
  `nome_foto` varchar(100) NOT NULL,
  `legenda_foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo_noticia` varchar(100) NOT NULL,
  `descricao_noticia` varchar(500) NOT NULL,
  `foto_noticia` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `revista`
--

CREATE TABLE `revista` (
  `id_foto` int(11) NOT NULL,
  `nome_foto` varchar(100) NOT NULL,
  `legenda_foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `socios`
--

CREATE TABLE `socios` (
  `id_socio` int(11) NOT NULL,
  `nome_socio` varchar(100) NOT NULL,
  `morada_socio` varchar(500) NOT NULL,
  `localidade_socio` varchar(200) NOT NULL,
  `cp_socio` int(11) NOT NULL,
  `nascimento_socio` date NOT NULL,
  `tlm_socio` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fotosindex`
--
ALTER TABLE `fotosindex`
  ADD PRIMARY KEY (`id_fotografia`);

--
-- Índices para tabela `fotosloja`
--
ALTER TABLE `fotosloja`
  ADD PRIMARY KEY (`id_fotografia`);

--
-- Índices para tabela `fotospatrocinios`
--
ALTER TABLE `fotospatrocinios`
  ADD PRIMARY KEY (`id_fotografia`);

--
-- Índices para tabela `fotostrofeus`
--
ALTER TABLE `fotostrofeus`
  ADD PRIMARY KEY (`id_fotografia`);

--
-- Índices para tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`id_jogador`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices para tabela `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id_foto`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Índices para tabela `revista`
--
ALTER TABLE `revista`
  ADD PRIMARY KEY (`id_foto`);

--
-- Índices para tabela `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id_socio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
