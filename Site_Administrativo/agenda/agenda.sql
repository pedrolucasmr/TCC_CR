-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Set-2018 às 17:16
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(200) NOT NULL,
  `dtevento` varchar(10) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hora` varchar(5) NOT NULL,
  `conteudo` text NOT NULL,
  `local` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `evento`, `dtevento`, `autor`, `data`, `hora`, `conteudo`, `local`) VALUES
(1, 'Prova P1', '12-9-2018', '2018-09-05 14:54:54', '2018-09-05 17:54:54', '10:00', 'Prova dfgsdfgs', 'ColÃ©gio Realengo'),
(2, 'Teste', '10-9-2018', '2018-09-05 15:20:39', '2018-09-05 18:20:39', '10:20', 'Teste dfgsgsgsg', 'ColÃ©gio Realengo'),
(4, 'Teste', '9-9-2018', 'Edson', '2018-09-05 19:40:16', '10:00', 'khlhl', 'ColÃ©gio Realengo'),
(5, 'Teste', '9-9-2018', 'Edson', '2018-09-05 19:55:56', '10:00', 'khlhl', 'ColÃ©gio Realengo'),
(6, 'Teste', '9-9-2018', 'Edson', '2018-09-05 19:56:15', '10:00', 'khlhl', 'ColÃ©gio Realengo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
