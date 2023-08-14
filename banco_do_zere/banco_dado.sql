-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Ago-2023 às 11:40
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_dado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_pes`
--

DROP TABLE IF EXISTS `tabela_pes`;
CREATE TABLE IF NOT EXISTS `tabela_pes` (
  `id_pes` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `cpf` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `idade` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pes`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tabela_pes`
--

INSERT INTO `tabela_pes` (`id_pes`, `nome`, `email`, `senha`, `cpf`, `idade`) VALUES
(1, 'vital', 'matheusvital029@gmail.com', '4456642', '123.425.463-57', '34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
