-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Set-2021 às 03:18
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `etecdados1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `planta`
--

CREATE TABLE IF NOT EXISTS `planta` (
  `id_planta` int(11) NOT NULL AUTO_INCREMENT,
  `nome_planta` varchar(100) NOT NULL,
  `tipo_planta` varchar(255) NOT NULL,
  `desc_planta` varchar(200) NOT NULL,
  `data_plantio` date NOT NULL,
  PRIMARY KEY (`id_planta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `planta`
--

INSERT INTO `planta` (`id_planta`, `nome_planta`, `tipo_planta`, `desc_planta`, `data_plantio`) VALUES
(12, 'Pepino', 'Japones', 'Gostoso', '2021-09-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE IF NOT EXISTS `setor` (
  `id_setor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_setor` varchar(100) NOT NULL,
  `id_planta` int(11) NOT NULL,
  PRIMARY KEY (`id_setor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id_setor`, `nome_setor`, `id_planta`) VALUES
(2, '1', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `senha` decimal(8,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `telefone`, `endereco`, `senha`) VALUES
(0, 'Guilherme', 'gui@gmail.com', '12121212', 'endereço', '1234'),
(0, '', 'Gui@gmail.com', '', '', '0'),
(0, '', 'guilherme.dias92@etec.sp.gov.br', '', '', '0'),
(0, '', 'sdfsdgd', '', '', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
