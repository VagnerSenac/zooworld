-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Maio-2022 às 03:06
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `zooworld`
--
CREATE DATABASE IF NOT EXISTS `zooworld` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `zooworld`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabanimais`
--

CREATE TABLE `tabanimais` (
  `codAnimais` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `nomeCientifico` varchar(30) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `qtd` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `alimentacao` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabanimais`
--

INSERT INTO `tabanimais` (`codAnimais`, `nome`, `nomeCientifico`, `especie`, `qtd`, `peso`, `alimentacao`) VALUES
(1, 'Zebra', 'Equus zebra', 'Herbívoro', 6, 350, 'plantas herbáceas, folhas e galhos');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabanimais`
--
ALTER TABLE `tabanimais`
  ADD PRIMARY KEY (`codAnimais`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabanimais`
--
ALTER TABLE `tabanimais`
  MODIFY `codAnimais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
