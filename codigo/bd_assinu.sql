-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Nov-2022 às 22:59
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_assinu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `painel_documentos`
--

DROP TABLE IF EXISTS `painel_documentos`;
CREATE TABLE IF NOT EXISTS `painel_documentos` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_cpf` varchar(100) NOT NULL,
  `usr_ip` varchar(100) NOT NULL,
  `usr_responsavel` varchar(200) NOT NULL,
  `usr_email` varchar(200) NOT NULL,
  `usr_nomerepresentado` varchar(200) NOT NULL,
  `usr_emailrepresentado` varchar(200) NOT NULL,
  `usr_documento` varchar(200) NOT NULL,
  `usr_tipodocumento` varchar(200) NOT NULL,
  `usr_data` date NOT NULL,
  `usr_status` varchar(100) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `painel_documentos_rel`
--

DROP TABLE IF EXISTS `painel_documentos_rel`;
CREATE TABLE IF NOT EXISTS `painel_documentos_rel` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_idreferencia` int(11) NOT NULL,
  `usr_cpfresponsavel` varchar(200) NOT NULL,
  `usr_emailresponsavel` varchar(200) NOT NULL,
  `usr_emailrepresentado` varchar(200) NOT NULL,
  `usr_ipprepresentado` varchar(200) NOT NULL,
  `usr_data` date NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `painel_usuarios`
--

DROP TABLE IF EXISTS `painel_usuarios`;
CREATE TABLE IF NOT EXISTS `painel_usuarios` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_nome` varchar(300) NOT NULL,
  `usr_email` varchar(300) NOT NULL,
  `usr_senha` varchar(300) NOT NULL,
  `usr_cpf` varchar(300) NOT NULL,
  `usr_status` varchar(100) NOT NULL,
  `usr_assinatura` varchar(100) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `painel_usuarios`
--

INSERT INTO `painel_usuarios` (`usr_id`, `usr_nome`, `usr_email`, `usr_senha`, `usr_cpf`, `usr_status`, `usr_assinatura`) VALUES
(1, 'Davi Perrier', 'davi@assinu.tk', '200820e3227815ed1756a6b531e7e0d2', '143.528.276-06', 'ativo', 'decc1eab6d0751fcb2d8e41a2ffeb55a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `painel_usuarios_rel`
--

DROP TABLE IF EXISTS `painel_usuarios_rel`;
CREATE TABLE IF NOT EXISTS `painel_usuarios_rel` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_cpf` varchar(100) NOT NULL,
  `usr_pessoajuridica` varchar(20) NOT NULL,
  `usr_nomeempresa` varchar(200) NOT NULL,
  `usr_ramoempresa` varchar(200) NOT NULL,
  `usr_tamanhoempresa` varchar(200) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `painel_usuarios_rel`
--

INSERT INTO `painel_usuarios_rel` (`usr_id`, `usr_cpf`, `usr_pessoajuridica`, `usr_nomeempresa`, `usr_ramoempresa`, `usr_tamanhoempresa`) VALUES
(1, '14352827606', 'sim', 'Fidelizar', 'Marketing', 'Pequeno');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
