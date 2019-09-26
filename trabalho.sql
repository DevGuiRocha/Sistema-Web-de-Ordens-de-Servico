-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Set-2019 às 22:07
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `criar`
--

CREATE TABLE `criar` (
  `ID` int(11) NOT NULL,
  `Num_ci` int(11) NOT NULL,
  `Funcao_Setor_D` text NOT NULL,
  `De` text NOT NULL,
  `Funcao_Setor_P` text NOT NULL,
  `Para` text NOT NULL,
  `Data` date NOT NULL,
  `Assunto` text NOT NULL,
  `CI` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `criar`
--

INSERT INTO `criar` (`ID`, `Num_ci`, `Funcao_Setor_D`, `De`, `Funcao_Setor_P`, `Para`, `Data`, `Assunto`, `CI`, `Status`) VALUES
(1, 1, 'Administrador', 'Administrador', 'COESN', 'Joao Guilherme de Oliveira Rocha', '2019-09-06', 'TESTE', '<p>TESTETESTETESTETESTETESTE</p>\r\n\r\n<p>TESTETESTETESTE</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TESTETESTE</p>\r\n', 'Fechada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Senha` varchar(100) NOT NULL,
  `Nome` text NOT NULL,
  `Funcao_Setor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `Login`, `Senha`, `Nome`, `Funcao_Setor`) VALUES
(1, 'admin', 'admin', 'Administrador', 'Administrador'),
(2, 'Guilherme', '1234', 'Joao Guilherme', 'Administrativo'),
(3, 'Adroaldo', '1234', 'Adroaldo Olinda', 'Administrativo'),
(4, 'Klyce', '1234', 'Ana Klyce', 'Administrativo'),
(5, 'Raquel', '1234', 'Ana Raquel', 'Administrativo'),
(6, 'Claudio', '1234', 'Claudio Marcos', 'Administrativo'),
(7, 'Dedson', '1234', 'Dedson Pinheiro', 'Financeiro'),
(8, 'Mardonio', '1234', 'Francisco Mardonio', 'Financeiro'),
(9, 'Maryana', '1234', 'Maryana Correia', 'Financeiro'),
(10, 'Barreto', '1234', 'Jose Barreto', 'Financeiro'),
(11, 'Romeu', '1234', 'Julio Romeu', 'Financeiro'),
(12, 'Wylkerson', '1234', 'David Wylkerson', 'Operacional'),
(13, 'Joelma', '1234', 'Joelma dos Santos', 'Operacional'),
(14, 'Rafael', '1234', 'Rafael Menezes', 'Operacional'),
(15, 'Gardenia', '1234', 'Gardenia Mendes', 'Operacional'),
(16, 'Valter', '1234', 'Joao Valter', 'Operacional');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criar`
--
ALTER TABLE `criar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criar`
--
ALTER TABLE `criar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
