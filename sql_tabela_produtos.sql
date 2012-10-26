-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2012 at 12:04 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gadocomercial`
--

-- --------------------------------------------------------

--
-- Table structure for table `acesso`
--

CREATE TABLE IF NOT EXISTS `acesso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`,`id_usuario`),
  KEY `fk_acesso_usuarios1` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1526 ;

-- --------------------------------------------------------

--
-- Table structure for table `acesso_clientes`
--

CREATE TABLE IF NOT EXISTS `acesso_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `hora` time DEFAULT NULL,
  `clientes_idclientes` int(11) NOT NULL,
  PRIMARY KEY (`id`,`clientes_idclientes`),
  KEY `fk_acesso_clientes_clientes1` (`clientes_idclientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=349 ;

-- --------------------------------------------------------

--
-- Table structure for table `anuncios`
--

CREATE TABLE IF NOT EXISTS `anuncios` (
  `idanuncios` int(11) NOT NULL AUTO_INCREMENT,
  `aptidao` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `propriedade` varchar(100) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `conteudo` text,
  `status` varchar(50) NOT NULL,
  `qtde_visualizacao` int(11) NOT NULL DEFAULT '0',
  `clientes_idclientes` int(11) NOT NULL,
  `ppp_idppp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idanuncios`,`clientes_idclientes`,`ppp_idppp`),
  UNIQUE KEY `idanuncios_UNIQUE` (`idanuncios`),
  KEY `fk_anuncios_clientes` (`clientes_idclientes`),
  KEY `fk_anuncios_ppp1` (`ppp_idppp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=199 ;

-- --------------------------------------------------------

--
-- Table structure for table `anuncios_imagens`
--

CREATE TABLE IF NOT EXISTS `anuncios_imagens` (
  `idfoto` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(100) DEFAULT NULL,
  `anuncios_idanuncios` int(11) NOT NULL,
  PRIMARY KEY (`idfoto`,`anuncios_idanuncios`),
  KEY `fk_anuncios_imagens_anuncios1` (`anuncios_idanuncios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=160 ;

-- --------------------------------------------------------

--
-- Table structure for table `anuncios_pagtos`
--

CREATE TABLE IF NOT EXISTS `anuncios_pagtos` (
  `id_anuncios_pagtos` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT NULL,
  `notificationCode` varchar(39) DEFAULT NULL,
  `reference` varchar(200) DEFAULT NULL,
  `notificationType` char(1) DEFAULT NULL,
  `statusTransaction` char(1) DEFAULT NULL,
  `data_pagamento` date NOT NULL,
  `data_expiracao` date NOT NULL,
  `typePagamento` char(1) DEFAULT NULL,
  `codePagamento` int(11) DEFAULT NULL,
  `valorBrutoTransacao` decimal(10,2) DEFAULT NULL,
  `valorDesconto` decimal(10,2) DEFAULT NULL,
  `valorTotalTaxasCobrado` decimal(10,2) DEFAULT NULL,
  `valorLiquidoTransacao` decimal(10,2) DEFAULT NULL,
  `valorExtra` decimal(10,2) DEFAULT NULL,
  `numeroParcelas` int(11) DEFAULT NULL,
  `numeroItensTransacao` int(11) DEFAULT NULL,
  `idITem` int(11) DEFAULT NULL,
  `descriptionItem` varchar(200) DEFAULT NULL,
  `valorUnitarioItem` decimal(10,2) DEFAULT NULL,
  `qtdeItem` int(11) DEFAULT NULL,
  `emailComprador` varchar(200) DEFAULT NULL,
  `nomeComprador` varchar(200) DEFAULT NULL,
  `foneComprador` varchar(200) DEFAULT NULL,
  `ddComprador` varchar(200) DEFAULT NULL,
  `telefoneComprador` varchar(200) DEFAULT NULL,
  `anuncios_idanuncios` int(11) NOT NULL,
  PRIMARY KEY (`id_anuncios_pagtos`),
  KEY `fk_anuncios_pagtos1` (`anuncios_idanuncios`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=201 ;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idclientes` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `cpf_cnpj` varchar(45) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `newsletter` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idclientes`),
  UNIQUE KEY `idusuarios_UNIQUE` (`idclientes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=164 ;

-- --------------------------------------------------------

--
-- Table structure for table `parceiros`
--

CREATE TABLE IF NOT EXISTS `parceiros` (
  `id_parceiros` int(11) NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  `nome` text NOT NULL,
  `url` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Ativo',
  PRIMARY KEY (`id_parceiros`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `ppp`
--

CREATE TABLE IF NOT EXISTS `ppp` (
  `idppp` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `orgao_rural` varchar(100) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `pagto_banco` varchar(45) NOT NULL,
  `pagto_agencia` varchar(45) NOT NULL,
  `pagto_conta` varchar(45) NOT NULL,
  `pagto_poupanca` varchar(45) NOT NULL,
  `pagto_titular` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`idppp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `ppp_fechamento_pagamento`
--

CREATE TABLE IF NOT EXISTS `ppp_fechamento_pagamento` (
  `idppp_fech_pag` int(11) NOT NULL AUTO_INCREMENT,
  `ppp_idppp` int(11) NOT NULL,
  `quantidade_anuncios` int(11) NOT NULL,
  `mes_ano` varchar(7) NOT NULL,
  `valor_comissao_paga` double(10,2) NOT NULL,
  `data_fechamento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idppp_fech_pag`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `sorteios`
--

CREATE TABLE IF NOT EXISTS `sorteios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricacao` text NOT NULL,
  `realizado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `sorteio_produtos`
--

CREATE TABLE IF NOT EXISTS `sorteio_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produtos_id` int(11) NOT NULL,
  `clientes_sorteado_id` int(11) NOT NULL,
  `sorteios_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(75) NOT NULL,
  `login` varchar(75) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nivel` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acesso`
--
ALTER TABLE `acesso`
  ADD CONSTRAINT `fk_acesso_usuarios1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `fk_anuncios_clientes` FOREIGN KEY (`clientes_idclientes`) REFERENCES `clientes` (`idclientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;