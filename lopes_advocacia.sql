-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Generation Time: 26-Set-2018 às 21:34
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lopes_advocacia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admnistrador`
--

DROP TABLE IF EXISTS `admnistrador`;
CREATE TABLE IF NOT EXISTS `admnistrador` (
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cpf` varchar(14) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `nivel_de_acesso` int(11) DEFAULT '1',
  PRIMARY KEY (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `admnistrador`
--

INSERT INTO `admnistrador` (`nome`, `cpf`, `email`, `senha`, `telefone`, `nivel_de_acesso`) VALUES
('Vanessa Prevot', '123.234.234-28', 'prevot@gmail.com', '12345', '21-94545-9999', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `advogado`
--

DROP TABLE IF EXISTS `advogado`;
CREATE TABLE IF NOT EXISTS `advogado` (
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cpf_adv` varchar(14) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `ID_adv` int(11) NOT NULL AUTO_INCREMENT,
  `nivel_de_acesso` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`cpf_adv`),
  UNIQUE KEY `cpf_adv` (`cpf_adv`),
  UNIQUE KEY `ID_adv` (`ID_adv`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `advogado`
--

INSERT INTO `advogado` (`nome`, `cpf_adv`, `email`, `telefone`, `senha`, `ID_adv`, `nivel_de_acesso`) VALUES
('Edson Arantes', '111.111.122-12', 'bodybuilder@outlook.com', '21-90983-3456', '1234', 16, 2),
('RogÃ©rio de SÃ¡', '123.567.123-09', 'rogerinho@yahoo.com', '21-90983-7487', '123', 15, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adv` varchar(200) NOT NULL,
  `dtevento` varchar(10) NOT NULL,
  `hora` varchar(5) NOT NULL,
  `conteudo` text NOT NULL,
  `local` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `adv`, `dtevento`, `hora`, `conteudo`, `local`) VALUES
(13, 'Edson', '27-9-2018', '12:00', 'Registro de documentaÃ§Ã£o', 'CartÃ³rio de bangu, Bangu'),
(12, 'Edson', '27-9-2018', '12:00', 'Registro de documentaÃ§Ã£o', 'CartÃ³rio de bangu, Bangu'),
(11, 'Edson', '16-12-2018', '14:20', 'Registro do Caso 23', 'CartÃ³rio de bangu, Bangu'),
(10, 'RogÃ©rio SÃ¡', '19-10-2018', '07:40', 'ApresentaÃ§Ã£o do Projeto Final', 'AuditÃ³rio das faculdades SÃ£o JosÃ©, Realengo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cpf_cli` varchar(14) COLLATE latin1_general_ci NOT NULL,
  `endereco` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `ID_cli` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cpf_cli`),
  UNIQUE KEY `unique` (`ID_cli`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome`, `cpf_cli`, `endereco`, `email`, `telefone`, `ID_cli`) VALUES
('Victor Ennes', '123.666.123-22', 'Rua da morte', 'alreadyfeel@gmail.com', '21-98330-9444', 11),
('Igor Vieira', '123.678.432-65', 'Rio Branco, Acre', 'gado@gmail.com', '21-98330-9333', 10),
('Ana JÃºlia', '123.657.123-29', 'Rua da paz, RJ', 'anajulia@hotmail.com', '21-98765-9089', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cpf_func` varchar(14) COLLATE latin1_general_ci NOT NULL,
  `cargo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `salario` float NOT NULL,
  UNIQUE KEY `unique` (`cpf_func`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`nome`, `cpf_func`, `cargo`, `email`, `telefone`, `salario`) VALUES
('Orlando', '123456783', 'limpeza', 'oi@vivo.com', '123', 1234),
('Kellen Beatriz', '213.546.213-28', 'limpeza', 'kellkell@uol.com.br', '21-99929-0930', 954);

-- --------------------------------------------------------

--
-- Estrutura da tabela `processado`
--

DROP TABLE IF EXISTS `processado`;
CREATE TABLE IF NOT EXISTS `processado` (
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `empresa` tinyint(1) NOT NULL,
  `pessoa fisica` tinyint(1) NOT NULL,
  `cpf` char(14) COLLATE latin1_general_ci DEFAULT NULL,
  `cnpj` char(18) COLLATE latin1_general_ci DEFAULT NULL,
  `ID_processado` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_processado`),
  UNIQUE KEY `unique` (`cpf`),
  UNIQUE KEY `unique2` (`cnpj`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `processado`
--

INSERT INTO `processado` (`nome`, `empresa`, `pessoa fisica`, `cpf`, `cnpj`, `ID_processado`) VALUES
('NathÃ£n Jaber', 0, 1, '123.123.123-21', '11.111.111/1111-11', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

DROP TABLE IF EXISTS `processo`;
CREATE TABLE IF NOT EXISTS `processo` (
  `numero_processo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `area_processo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `data_inicio` date NOT NULL,
  `data_termino` date NOT NULL,
  `custo` float NOT NULL,
  `descricao` text COLLATE latin1_general_ci NOT NULL,
  `objetivo` text COLLATE latin1_general_ci NOT NULL,
  `ID_adv` int(11) NOT NULL,
  `ID_cli` int(11) NOT NULL,
  `ID_processado` int(11) NOT NULL,
  `ID_processo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_processo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `processo`
--

INSERT INTO `processo` (`numero_processo`, `area_processo`, `data_inicio`, `data_termino`, `custo`, `descricao`, `objetivo`, `ID_adv`, `ID_cli`, `ID_processado`, `ID_processo`) VALUES
('123', 'criminal', '2018-09-21', '2018-12-31', 50000, 'HomicÃ­dio', 'Provar a inocÃªncia do rÃ©u', 1, 2, 3, 6),
('123456', 'direito do consumidor', '2018-09-08', '2018-09-28', 1599, 'Produto veio com defeito e a empresa se recusa Ã¡ trocar', 'IndenizaÃ§Ã£o por danos morais e pelo valor do produto', 1, 1, 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reunion`
--

DROP TABLE IF EXISTS `reunion`;
CREATE TABLE IF NOT EXISTS `reunion` (
  `data_reuniao` date NOT NULL,
  `advogado` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cliente` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `ID_reunion` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_reunion`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `reunion`
--

INSERT INTO `reunion` (`data_reuniao`, `advogado`, `cliente`, `ID_reunion`) VALUES
('2018-09-30', 'RogÃ©rio de SÃ¡', 'Ana JÃºlia', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaria`
--

DROP TABLE IF EXISTS `secretaria`;
CREATE TABLE IF NOT EXISTS `secretaria` (
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cpf` varchar(14) COLLATE latin1_general_ci NOT NULL,
  `cargo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `salario` float NOT NULL,
  `senha` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `nivel_de_acesso` int(11) NOT NULL DEFAULT '3',
  UNIQUE KEY `unique` (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `secretaria`
--

INSERT INTO `secretaria` (`nome`, `cpf`, `cargo`, `email`, `telefone`, `salario`, `senha`, `nivel_de_acesso`) VALUES
('Fabiana Linhares', '213.456.712-12', 'secretaria', 'fabi@gmail.com', '21-21473-423', 1000, '123', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
