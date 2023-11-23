-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2021 às 14:28
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`codigo`, `nome`, `morada`, `telefone`) VALUES
(1, 'Gui', 'Funchal', 909090909),
(2, 'Gustavo', 'CL', 919191919),
(3, 'Chana', 'Lisboa', 929292929),
(4, 'Tomas', 'Funchal', 939393939),
(5, 'Lucas', 'Funchal', 949494949),
(6, 'Henrique', 'Caniço', 959595959),
(7, 'Nikita', 'Russia', 989898989),
(8, 'Swasi', 'Lisboa', 123),
(9, 'asdasd', 'ad', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
