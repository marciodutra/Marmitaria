-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Nov-2019 às 14:16
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `marmitaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `nome_admin` varchar(100) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `senha_admin` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nome_admin`, `email_admin`, `senha_admin`) VALUES
(5, 'fi', 'fi@fi.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Joe', 'joe@joe.com', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebida`
--

CREATE TABLE `bebida` (
  `id_bebida` int(11) NOT NULL,
  `nro_bebida` int(11) NOT NULL,
  `nome_bebida` varchar(50) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco_bebida` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bebida`
--

INSERT INTO `bebida` (`id_bebida`, `nro_bebida`, `nome_bebida`, `descricao`, `preco_bebida`) VALUES
(3, 3, 'bebida 3', 'bebida 3', '11.45'),
(4, 4, 'bebida 4', 'bebida 4', '7.00'),
(5, 5, 'bebida 5', 'bebida 5', '9.99'),
(6, 6, 'bebida 6', 'bebida 6', '0.10'),
(7, 7, 'bebida 7', 'bebida 7', '1.50'),
(8, 1, 'teste', 'teste', '9.99'),
(9, 9, 'bebida 9', 'bebida 9', '1.18'),
(10, 10, 'BEBIDA 10', 'BEBIDA 10', '11.30'),
(11, 11, 'BEBIDA 11', 'BEBIDA 11', '1.05'),
(12, 13, 'bebida 13', 'bebida 13', '1.30'),
(13, 2, 'MM', '', '1.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `senha_cliente` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `senha_cliente`) VALUES
(1, 'Lui', 'lui@lui', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dia`
--

CREATE TABLE `dia` (
  `id_dia` int(11) NOT NULL,
  `nome_dia` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dia`
--

INSERT INTO `dia` (`id_dia`, `nome_dia`) VALUES
(2, 'Segunda-feira'),
(5, 'TerÃ§a-feira'),
(6, 'Quarta-feira'),
(11, 'Quinta-feira'),
(12, 'Sexta-feira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prato`
--

CREATE TABLE `prato` (
  `id_prato` int(11) NOT NULL,
  `nome_prato` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prato`
--

INSERT INTO `prato` (`id_prato`, `nome_prato`, `descricao`) VALUES
(9, 'Italiano', 'Espaguete com molho de tomate, farofa de milho temperada, pedaÃ§os de carne cozida, torta de frango, pepino fatiado, ervilhas.'),
(10, 'Feijoada da NonÃ´', 'Arroz branco, feijoada completa, couve refogada, farofa de mandioca temperada, alface, tomate.'),
(11, 'Churrasco', 'Arroz temperado, fraldinha, cupim, linguiÃ§a toscana sem pimenta, pÃ£o de alho, queijo assado, rÃºcula, tomate e queijo branco.'),
(12, 'Caipira', 'Arroz, feijÃ£o, frango (coxa e peito) frito, polenta frita, milho sem espiga, alface, tomate, cebola.'),
(22, 'Especial OPSIW', 'Arroz, feijÃ£o, 2 bifes de contra-filÃ©, 2 ovos fritos, mandioca frita, salada de alface, tomate, cebola.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratododia`
--

CREATE TABLE `pratododia` (
  `id_pratoDia` int(11) NOT NULL,
  `id_dia` int(11) NOT NULL,
  `id_prato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pratododia`
--

INSERT INTO `pratododia` (`id_pratoDia`, `id_dia`, `id_prato`) VALUES
(13, 2, 22),
(14, 5, 12),
(22, 6, 10),
(23, 11, 9),
(24, 12, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobremesa`
--

CREATE TABLE `sobremesa` (
  `id_sobremesa` int(11) NOT NULL,
  `nro_sobremesa` int(11) NOT NULL,
  `nome_sobremesa` varchar(50) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco_sobremesa` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobremesa`
--

INSERT INTO `sobremesa` (`id_sobremesa`, `nro_sobremesa`, `nome_sobremesa`, `descricao`, `preco_sobremesa`) VALUES
(1, 1, 'sobremesa 1 mesmo', 'sobremesa 1 Ã© 1', '1.12'),
(2, 2, 'sobremesa 2', 'sobremesa 2 Ã© 2', '1.65'),
(3, 3, 'sobremesa 3', 'sobremesa 3', '2.01'),
(4, 4, 'sobremesa 4', 'sobremesa 4', '5.90');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices para tabela `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`id_bebida`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_dia`);

--
-- Índices para tabela `prato`
--
ALTER TABLE `prato`
  ADD PRIMARY KEY (`id_prato`);

--
-- Índices para tabela `pratododia`
--
ALTER TABLE `pratododia`
  ADD PRIMARY KEY (`id_pratoDia`),
  ADD KEY `idDia` (`id_dia`),
  ADD KEY `idPrato` (`id_prato`);

--
-- Índices para tabela `sobremesa`
--
ALTER TABLE `sobremesa`
  ADD PRIMARY KEY (`id_sobremesa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `dia`
--
ALTER TABLE `dia`
  MODIFY `id_dia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `prato`
--
ALTER TABLE `prato`
  MODIFY `id_prato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `pratododia`
--
ALTER TABLE `pratododia`
  MODIFY `id_pratoDia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `sobremesa`
--
ALTER TABLE `sobremesa`
  MODIFY `id_sobremesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pratododia`
--
ALTER TABLE `pratododia`
  ADD CONSTRAINT `pratododia_ibfk_1` FOREIGN KEY (`id_prato`) REFERENCES `prato` (`id_prato`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pratododia_ibfk_2` FOREIGN KEY (`id_dia`) REFERENCES `dia` (`id_dia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
