-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Dez-2023 às 17:54
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

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
-- Índices para tabela `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id_socio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
