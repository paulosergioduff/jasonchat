-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 12-Jun-2017 às 21:13
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasonBD`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `varchar1` varchar(255) NOT NULL,
  `varchar2` varchar(255) NOT NULL,
  `varchar3` varchar(255) NOT NULL,
  `varchar4` varchar(255) NOT NULL,
  `varchar5` varchar(255) NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `data1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bit1` int(1) NOT NULL,
  `bit2` int(1) NOT NULL,
  `bit3` int(1) NOT NULL,
  `bit4` int(1) NOT NULL,
  `bit5` int(1) NOT NULL,
  `texto1` longtext NOT NULL,
  `texto2` longtext NOT NULL,
  `texto3` longtext NOT NULL,
  `texto4` longtext NOT NULL,
  `texto5` longtext NOT NULL,
  `alias` varchar(255) NOT NULL,
  `tabela` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `varchar1`, `varchar2`, `varchar3`, `varchar4`, `varchar5`, `num1`, `num2`, `num3`, `num4`, `num5`, `data1`, `data2`, `data3`, `data4`, `data5`, `bit1`, `bit2`, `bit3`, `bit4`, `bit5`, `texto1`, `texto2`, `texto3`, `texto4`, `texto5`, `alias`, `tabela`) VALUES
(1, '333123456789', '333TestandoNovoDadoInserido', '333novoemail@gmailc.om', '33MAISmais1@mail.com', '33novoValor', 0, 0, 0, 0, 0, '2017-05-26 17:31:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', '33333222usuario2'),
(2, 'kkk6789', 'kkkkandoNovoDadoInserido', 'kkkil@gmailc.om', 'kkkSmais1@mail.com', 'kkkkkalor', 0, 0, 0, 0, 0, '2017-05-26 17:50:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', 'kkk2usuario2'),
(3, 'kkk6789', 'kkkkandoNovoDadoInserido', 'kkkil@gmailc.om', 'kkkSmais1@mail.com', 'kkkkkalor', 0, 0, 0, 0, 0, '2017-05-26 17:51:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', 'kkk2usuario2'),
(4, 'kkk6789', 'kkkkandoNovoDadoInserido', 'kkkil@gmailc.om', 'kkkSmais1@mail.com', 'kkkkkalor', 0, 0, 0, 0, 0, '2017-05-26 18:34:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', 'kkk2usuario2'),
(5, 'kkk6789', 'kkkkandoNovoDadoInserido', 'kkkil@gmailc.om', 'kkkSmais1@mail.com', 'kkkkkalor', 0, 0, 0, 0, 0, '2017-05-26 18:41:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', 'kkk2usuario2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comment_post`
--

CREATE TABLE `comment_post` (
  `id` int(11) NOT NULL,
  `varchar1` varchar(255) NOT NULL,
  `varchar2` varchar(255) NOT NULL,
  `varchar3` varchar(255) NOT NULL,
  `varchar4` varchar(255) NOT NULL,
  `varchar5` varchar(255) NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `data1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bit1` int(1) NOT NULL,
  `bit2` int(1) NOT NULL,
  `bit3` int(1) NOT NULL,
  `bit4` int(1) NOT NULL,
  `bit5` int(1) NOT NULL,
  `texto1` longtext NOT NULL,
  `texto2` longtext NOT NULL,
  `texto3` longtext NOT NULL,
  `texto4` longtext NOT NULL,
  `texto5` longtext NOT NULL,
  `alias` varchar(255) NOT NULL,
  `tabela` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `varchar1` varchar(255) NOT NULL,
  `varchar2` varchar(255) NOT NULL,
  `varchar3` varchar(255) NOT NULL,
  `varchar4` varchar(255) NOT NULL,
  `varchar5` varchar(255) NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `data1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bit1` int(1) NOT NULL,
  `bit2` int(1) NOT NULL,
  `bit3` int(1) NOT NULL,
  `bit4` int(1) NOT NULL,
  `bit5` int(1) NOT NULL,
  `texto1` longtext NOT NULL,
  `texto2` longtext NOT NULL,
  `texto3` longtext NOT NULL,
  `texto4` longtext NOT NULL,
  `texto5` longtext NOT NULL,
  `alias` varchar(255) NOT NULL,
  `tabela` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE `membros` (
  `id` int(11) NOT NULL,
  `login` varchar(12) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `permissao` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`id`, `login`, `senha`, `permissao`) VALUES
(1, 'root', '1234', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menssage`
--

CREATE TABLE `menssage` (
  `id` int(11) NOT NULL,
  `varchar1` varchar(255) NOT NULL,
  `varchar2` varchar(255) NOT NULL,
  `varchar3` varchar(255) NOT NULL,
  `varchar4` varchar(255) NOT NULL,
  `varchar5` varchar(255) NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `data1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bit1` int(1) NOT NULL,
  `bit2` int(1) NOT NULL,
  `bit3` int(1) NOT NULL,
  `bit4` int(1) NOT NULL,
  `bit5` int(1) NOT NULL,
  `texto1` longtext NOT NULL,
  `texto2` longtext NOT NULL,
  `texto3` longtext NOT NULL,
  `texto4` longtext NOT NULL,
  `texto5` longtext NOT NULL,
  `alias` varchar(255) NOT NULL,
  `tabela` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nome` varchar(16) NOT NULL,
  `link` varchar(255) NOT NULL,
  `hover` varchar(11) NOT NULL,
  `class` varchar(16) NOT NULL,
  `tagInicio` varchar(32) NOT NULL,
  `tagFim` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `nome`, `link`, `hover`, `class`, `tagInicio`, `tagFim`) VALUES
(1, 'Menu1', '', '', '', '<ul>', ''),
(2, 'opcao1', '', '', '', '<li>', '</li>'),
(3, 'opcao2', '', '', '', '<li>', '</li>'),
(4, 'opcao3', '', '', '', '<li>', '</li></ul>'),
(5, 'menu2', '', '', '', '<ul>', ''),
(6, 'opcao1', '', '', '', '<li>', '</li>'),
(7, 'opcao2', '', '', '', '<li>', '</li>'),
(8, 'opcao3', '', '', '', '<li>', '</li>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `id` int(11) NOT NULL,
  `varchar1` varchar(255) NOT NULL,
  `varchar2` varchar(255) NOT NULL,
  `varchar3` varchar(255) NOT NULL,
  `varchar4` varchar(255) NOT NULL,
  `varchar5` varchar(255) NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `data1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bit1` int(1) NOT NULL,
  `bit2` int(1) NOT NULL,
  `bit3` int(1) NOT NULL,
  `bit4` int(1) NOT NULL,
  `bit5` int(1) NOT NULL,
  `texto1` longtext NOT NULL,
  `texto2` longtext NOT NULL,
  `texto3` longtext NOT NULL,
  `texto4` longtext NOT NULL,
  `texto5` longtext NOT NULL,
  `alias` varchar(255) NOT NULL,
  `tabela` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `opcoes`
--

CREATE TABLE `opcoes` (
  `id` int(11) NOT NULL,
  `opcao` varchar(16) NOT NULL,
  `link` varchar(255) NOT NULL,
  `hover` varchar(11) NOT NULL,
  `class` varchar(16) NOT NULL,
  `menu` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `opcoes`
--

INSERT INTO `opcoes` (`id`, `opcao`, `link`, `hover`, `class`, `menu`) VALUES
(0, 'yahoo', 'www.yahoo.com.br', '', '', '1'),
(1, 'google', 'www.google.com', '', '', '1'),
(3, 'microsoft', '', '', '', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `varchar1` varchar(255) NOT NULL,
  `varchar2` varchar(255) NOT NULL,
  `varchar3` varchar(255) NOT NULL,
  `varchar4` varchar(255) NOT NULL,
  `varchar5` varchar(255) NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `data1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bit1` int(1) NOT NULL,
  `bit2` int(1) NOT NULL,
  `bit3` int(1) NOT NULL,
  `bit4` int(1) NOT NULL,
  `bit5` int(1) NOT NULL,
  `texto1` longtext NOT NULL,
  `texto2` longtext NOT NULL,
  `texto3` longtext NOT NULL,
  `texto4` longtext NOT NULL,
  `texto5` longtext NOT NULL,
  `alias` varchar(255) NOT NULL,
  `tabela` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela`
--

CREATE TABLE `tabela` (
  `id` int(11) NOT NULL,
  `varchar1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar5` varchar(255) CHARACTER SET utf8 NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `data1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bit1` int(1) NOT NULL,
  `bit2` int(1) NOT NULL,
  `bit3` int(1) NOT NULL,
  `bit4` int(1) NOT NULL,
  `bit5` int(1) NOT NULL,
  `texto1` longtext CHARACTER SET utf8 NOT NULL,
  `texto2` longtext CHARACTER SET utf8 NOT NULL,
  `texto3` longtext CHARACTER SET utf8 NOT NULL,
  `texto4` longtext CHARACTER SET utf8 NOT NULL,
  `texto5` longtext CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tabela` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela`
--

INSERT INTO `tabela` (`id`, `varchar1`, `varchar2`, `varchar3`, `varchar4`, `varchar5`, `num1`, `num2`, `num3`, `num4`, `num5`, `data1`, `data2`, `data3`, `data4`, `data5`, `bit1`, `bit2`, `bit3`, `bit4`, `bit5`, `texto1`, `texto2`, `texto3`, `texto4`, `texto5`, `alias`, `tabela`) VALUES
(5, 'Pedro Henrique', 'maria@email.com', 'novasenha', '', '', 0, 0, 0, 0, 0, '2017-03-25 02:19:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', ''),
(7, 'Carlos Manuel', 'carlos@hotmail.com', 'abc1234', '', '', 0, 0, 0, 0, 0, '2017-03-25 02:26:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', ''),
(8, 'Carlos Manuel2', 'carlos@hotmail.com', 'abc1234', '', '', 0, 0, 0, 0, 0, '2017-03-25 02:27:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', ''),
(9, 'Novo Manuel', 'carlos@hotmail.com', 'abc123', '', '', 0, 0, 0, 0, 0, '2017-03-25 03:02:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', ''),
(10, 'hackeado', 'carlos@hotmail.com', 'abc123', '', '', 0, 0, 0, 0, 0, '2017-03-25 03:08:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', 'login', 'cadastrados'),
(11, 'kkk6789', 'filtro5', 'kkkil@gmailc.om', 'kkkSmais1@mail.com', 'kkkkkalor', 0, 0, 0, 0, 0, '2017-06-12 15:48:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', 'filtro'),
(12, 'kkk6789', 'filtro5', 'kkkil@gmailc.om', 'kkkSmais1@mail.com', 'kkkkkalor', 0, 0, 0, 0, 0, '2017-06-12 15:49:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', 'filtro'),
(13, 'kkk6789', 'filtro5', 'kkkil@gmailc.om', 'kkkSmais1@mail.com', 'kkkkkalor', 0, 0, 0, 0, 0, '2017-06-12 15:49:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', 'filtro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_post`
--
ALTER TABLE `comment_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menssage`
--
ALTER TABLE `menssage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opcoes`
--
ALTER TABLE `opcoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabela`
--
ALTER TABLE `tabela`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment_post`
--
ALTER TABLE `comment_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `membros`
--
ALTER TABLE `membros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menssage`
--
ALTER TABLE `menssage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opcoes`
--
ALTER TABLE `opcoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabela`
--
ALTER TABLE `tabela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
