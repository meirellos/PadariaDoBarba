-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mai 04, 2022 as 03:05 AM
-- Versão do Servidor: 1.0.424
-- Versão do PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `barba`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `perecivel` varchar(1) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `perecivel`, `valor`, `tipo`, `imagem`) VALUES
(1, 'Coxinha', 'S', ' 8', 'Frito', 'https://pubimg.band.uol.com.br/files/2c0933a3fb3b6946e074.png'),
(2, 'Pão', 'S', '5.50', 'Assado', 'http://conteudo.imguol.com.br/c/entretenimento/45/2020/10/19/pao-frances---dona-deola-1603113166267_v2_1920x1920.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

DROP TABLE IF EXISTS `tipo_produto`;
CREATE TABLE IF NOT EXISTS `tipo_produto` (
  `id` int(20) NOT NULL,
  `nome_tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_produto`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `chave` varchar(20) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `usuario`
--

