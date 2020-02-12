-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Fev-2020 às 19:09
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(240) NOT NULL,
  `data` date NOT NULL,
  `mensagem` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `data1` date NOT NULL,
  `data2` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `data`, `mensagem`, `data1`, `data2`) VALUES
(1, '2020-02-06', 'mensagem 1', '0000-00-00', '0000-00-00 00:00:00.000000'),
(2, '2020-02-06', 'mensagem 2', '0000-00-00', '0000-00-00 00:00:00.000000'),
(3, '2020-02-06', 'mensagem 3', '0000-00-00', '0000-00-00 00:00:00.000000'),
(8, '2020-02-06', 'mensagem 4', '0000-00-00', '0000-00-00 00:00:00.000000'),
(10, '2020-02-07', 'mensagem 5', '0000-00-00', '0000-00-00 00:00:00.000000'),
(12, '2020-02-07', 'mensagem 6', '0000-00-00', '0000-00-00 00:00:00.000000'),
(14, '2020-02-07', 'mensagem 7', '0000-00-00', '0000-00-00 00:00:00.000000'),
(15, '2020-02-07', 'mensagem 12', '0000-00-00', '0000-00-00 00:00:00.000000'),
(16, '2020-02-10', 'mensagem 13', '0000-00-00', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`) USING HASH,
  ADD UNIQUE KEY `mensagem` (`mensagem`(240));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
