-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Nov-2023 às 22:12
-- Versão do servidor: 8.0.35
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE IF NOT EXISTS `adm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'adm', 'adm@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Verduras'),
(2, 'Frutas'),
(3, 'Legumes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idcli` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `CPF` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`idcli`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcli`, `nome`, `CPF`, `email`, `senha`) VALUES
(15, 'Maria Thereza', '11111111111', 'therezinha@gmail.com', '123'),
(14, 'Maria Thereza', '11111111111', 'therezinha@gmail.com', '123'),
(13, 'Maria Thereza', '11111111111', 'therezinha@gmail', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `nome_arq` varchar(100) NOT NULL,
  `ext_arq` varchar(5) NOT NULL,
  `categoria_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produto_categoria` (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `preco`, `descricao`, `nome_arq`, `ext_arq`, `categoria_id`) VALUES
(1, 'ALFACE CRESPA', 4.49, 'HORTALIÇA', '2023.11.03-18.38.41', '.jpg', 1),
(2, 'ALFACE LISA', 4.49, 'HORTALIÇA', '2023.11.03-18.44.09', '.jpg', 1),
(3, 'ALFACE AMERICANA', 4.49, 'HORTALIÇA', '2023.11.03-18.46.13', '.jpg', 1),
(4, 'RUCULA', 3.49, 'HORTALIÇA', '2023.11.03-18.51.48', '.jpg', 1),
(5, 'AGRIAO', 3.49, 'HORTALIÇA', '2023.11.03-19.01.02', '.png', 1),
(6, 'CHEIRO VERDE', 2.99, 'HORTALIÇA', '2023.11.03-19.01.38', '.png', 1),
(7, 'CHICORIA', 4.49, 'HORTALIÇA', '2023.11.03-19.10.07', '.jpg', 1),
(8, 'ALMEIRAO', 4.49, 'HORTALIÇA', '2023.11.03-19.12.43', '.jpg', 1),
(9, 'AMEIXA', 12.2, 'FRUTAS', '2023.11.03-19.38.02', '.jpg', 2),
(10, 'BANANA PRATA', 5.59, 'FRUTAS', '2023.11.03-19.44.27', '.jpg', 2),
(11, 'BANANA NANICA', 5.59, 'FRUTAS', '2023.11.03-19.41.40', '.jpg', 2),
(12, 'MACA FUJI', 13.45, 'FRUTAS', '2023.11.03-19.48.38', '.jpg', 2),
(13, 'MELANCIA', 3.39, 'FRUTAS', '2023.11.03-19.50.36', '.jpg', 2),
(14, 'UVA ', 14.99, 'FRUTAS', '2023.11.03-20.08.41', '.jpg', 2),
(15, 'KIWI', 19.28, 'FRUTAS', '2023.11.03-20.10.33', '.jpg', 2),
(16, 'LARANJA ', 3.39, 'FRUTAS', '2023.11.03-20.04.59', '.jpg', 2),
(17, 'MORANGO', 6.99, 'FRUTAS', '2023.11.03-20.12.57', '.jpg', 2),
(18, 'LIMAO', 6.99, 'FRUTAS', '2023.11.03-20.15.08', '.jpg', 2),
(19, 'TOMATE DEBORA G', 6.79, 'LEGUMES', '2023.11.03-20.31.33', '.jpg', 3),
(20, 'QUIABO', 4.49, 'LEGUMES', '2023.11.03-20.37.37', '.jpg', 3),
(21, 'CHUCHU', 4.49, 'LEGUMES', '2023.11.03-20.41.12', '.jpg', 3),
(23, 'PIMENTAO AMARELO', 14.54, 'LEGUMES', '2023.11.03-20.42.54', '.jpg', 3),
(24, 'PIMENTAO VERDE', 14.55, 'LEGUMES', '2023.11.03-20.44.47', '.jpg', 3),
(25, 'INHAME', 6.59, 'LEGUMES', '2023.11.03-20.50.55', '.jpg', 3),
(26, 'MILHO VERDE', 6.49, 'LEGUMES', '2023.11.03-20.53.13', '.jpg', 3),
(27, 'BATATA DOCE', 4.59, 'LEGUMES', '2023.11.03-21.53.12', '.jpg', 3),
(28, 'BATATA INGLESA', 5.48, 'LEGUMES', '2023.11.03-21.57.19', '.jpg', 3),
(29, 'BATATA INGLESA', 5.48, 'LEGUMES', '2023.11.03-21.58.18', '.jpg', 3),
(30, 'BETERRABA', 2.98, 'LEGUMES', '2023.11.03-22.02.30', '.jpg', 3),
(31, 'ABOBRINHA ITALIANA', 3.58, 'LEGUMES', '2023.11.03-22.04.02', '.jpg', 3);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
