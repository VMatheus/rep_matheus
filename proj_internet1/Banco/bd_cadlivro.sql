-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Maio-2015 às 21:30
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_cadlivro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista`
--

CREATE TABLE IF NOT EXISTS `lista` (
  `id` int(11) NOT NULL,
  `aluno` varchar(200) NOT NULL,
  `matricula` varchar(200) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `livro` varchar(200) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `dt_emprestimo` varchar(200) NOT NULL,
  `dt_devolucao` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lista`
--

INSERT INTO `lista` (`id`, `aluno`, `matricula`, `curso`, `livro`, `autor`, `dt_emprestimo`, `dt_devolucao`) VALUES
(6, 'Matheus Brito', '1401901', 'Sistemas de InformaÃ§ao', 'Php e Mysql', 'Eder Campos', '30/05/2015', '06/06/2015'),
(4, 'Pedro Henrrique Robadel', '1205796', 'Engenharia ElÃ©trica', 'Fundamentos de Engenharia ElÃ©trica', 'Giorgio Rizzoni', '25/05/2015', '02/06/2015'),
(8, 'Guilherme Pereira ', '1521746', 'Engenharia CivÃ­l', 'Engenharia civil_01', 'Flavio Rodrigues ', '08/05/2015', '12/05/2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
