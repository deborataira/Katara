-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 13-Nov-2021 às 07:25
-- Versão do servidor: 8.0.27-0ubuntu0.20.04.1
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `etecdados1`
--
CREATE DATABASE IF NOT EXISTS `etecdados1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `etecdados1`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planta`
--

CREATE TABLE `planta` (
  `id_planta` int NOT NULL,
  `nome_planta` varchar(100) NOT NULL,
  `desc_planta` varchar(200) NOT NULL,
  `data_plantio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tabela antes do insert `planta`
--

TRUNCATE TABLE `planta`;
--
-- Extraindo dados da tabela `planta`
--

INSERT INTO `planta` (`id_planta`, `nome_planta`, `desc_planta`, `data_plantio`) VALUES
(13, 'Morango', 'Planta frágil, tomar cuidado com vento', '2222-02-05'),
(15, 'Tomate', 'Frágil', '5666-06-10'),
(16, 'Limão ', 'Tem que ser colhido quando maduro somente ', '2023-11-15'),
(17, 'Espinafre', 'Ruim', '2322-02-10'),
(18, 'Coentro', 'Gilsão ficou bravo dms', '2021-11-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `id_setor` int NOT NULL,
  `nome_setor` varchar(100) NOT NULL,
  `id_planta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tabela antes do insert `setor`
--

TRUNCATE TABLE `setor`;
--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id_setor`, `nome_setor`, `id_planta`) VALUES
(5, 'Setor do Morango', 'Morango'),
(6, 'Setor do alface', 'Alface');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int NOT NULL,
  `nome_tipo` varchar(55) NOT NULL,
  `umidade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Truncar tabela antes do insert `tipo`
--

TRUNCATE TABLE `tipo`;
--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `nome_tipo`, `umidade`) VALUES
(1, 'Seco', 10),
(2, 'Molhado', 90);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `senha` decimal(8,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tabela antes do insert `usuario`
--

TRUNCATE TABLE `usuario`;
--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `telefone`, `endereco`, `senha`) VALUES
(0, 'Guilherme', 'gui@gmail.com', '12121212', 'endereço', '1234'),
(0, '', 'Gui@gmail.com', '', '', '0'),
(0, '', 'guilherme.dias92@etec.sp.gov.br', '', '', '0'),
(0, '', 'sdfsdgd', '', '', '0');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `planta`
--
ALTER TABLE `planta`
  ADD PRIMARY KEY (`id_planta`);

--
-- Índices para tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id_setor`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `planta`
--
ALTER TABLE `planta`
  MODIFY `id_planta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `id_setor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
