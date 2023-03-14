-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2020 às 20:57
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativos`
--

CREATE TABLE `brandname_tb_admins` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `national_document` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `job` varchar(20) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrativos`
--

INSERT INTO `brandname_tb_admins` (`id`, `name`, `national_document`, `address`, `phone`, `job`, `login`, `password`) VALUES
(1, 'Maria', '111-111-111-11', 'R. Administração 111', '91111-1111', 'broker', 'maria@gmail.com', 1234);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `brandname_tb_services` (
  `fk_id_broker` int(3) NOT NULL,
  `fk_id_client` int(4) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `brandname_tb_renters` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `national_document` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` int(4) NOT NULL,
  `token` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `brandname_tb_renters` (`id`, `name`, `national_document`, `address`, `phone`, `email`, `login`, `password`, `token`) VALUES
(1, 'RODRIGO', '77777777777', '78901234567', 'RUA DINO, 200', '2222-6666', '', '', 0, ''),
(2, 'CLAUDIA', '88888888888', '89012345678', 'RUA LIMA, 658', '3333-5555', '', '', 0, ''),
(3, 'MARIANA', '99999999999', '90123456789', 'AV, SÃO JOÃO, 56', '8888-9999', '', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `corretores`
--

CREATE TABLE `brandname_tb_brokers` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `national_document` varchar(11) NOT NULL,
  `national_id_broker` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `corretores`
--

INSERT INTO `brandname_tb_brokers` (`id`, `name`, `national_document`, `national_id_broker`, `address`, `phone`, `login`, `password`) VALUES
(1, 'Moacir', '44444444444', '44444444444', '44444444', 'Vila Ana', '99999-4444', 'moacir', 1234);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `brandname_tb_properties` (
  `id` int(4) NOT NULL,
  `fk_id_owner` int(4) NOT NULL,
  `fk_id_client` int(4) NOT NULL,
  `type` varchar(15) NOT NULL,
  `bedroom_numbers` int(2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `brandname_tb_properties` (`id`, `fk_id_owner`, `fk_id_client`, `type`, `bedroom_numbers`, `price`, `address`) VALUES
(1, 1, 1, 'Casa', 3, '800000.00', 'Ponte São João'),
(2, 1, 3, 'Apartamento', 2, '560000.00', 'Vila Progresso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietarios`
--

CREATE TABLE `brandname_tb_owners` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `national_document` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` int(4) NOT NULL,
  `token` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `proprietarios`
--

INSERT INTO `brandname_tb_owners` (`id`, `name`, `national_document`, `address`, `phone`, `login`, `password`) VALUES
(1, 'NICOLAS ARRUDA', '12121212121', '12345678901', 'VILA GRAFF', '1000-0001', '', 0),
(2, 'FILLIPE AUGUSTO', '23232323232', '23456789012', 'CORRUPIRA', '1000-0002', '', 0),
(3, 'JOSÉ ROBERTO', '34343434343', '34567890123', 'VILA PROGRESSO', '1000-0003', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `representacao`
--

CREATE TABLE `brandname_tb_representations` (
  `fk_id_broker` int(3) NOT NULL,
  `fk_id_owner` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrativos`
--
ALTER TABLE `brandname_tb_admins`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `brandname_tb_services`
  ADD PRIMARY KEY (`fk_id_broker`,`fk_id_renter`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `brandname_tb_renters`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `corretores`
--
ALTER TABLE `brandname_tb_brokers`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imoveis`
--
ALTER TABLE `brandname_tb_properties`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `proprietarios`
--
ALTER TABLE `brandname_tb_owners`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `representacao`
--
ALTER TABLE `brandname_tb_representations`
  ADD PRIMARY KEY (`fk_id_broker`,`fk_id_owner`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrativos`
--
ALTER TABLE `brandname_tb_admins`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `brandname_tb_renters`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `corretores`
--
ALTER TABLE `brandname_tb_brokers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `brandname_tb_properties`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `proprietarios`
--
ALTER TABLE `brandname_tb_owners`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
