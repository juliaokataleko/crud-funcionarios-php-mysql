-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Fev-2022 às 12:27
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `funcionarios_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `salario` varchar(20) DEFAULT NULL,
  `cargo` varchar(200) DEFAULT NULL,
  `data_registo` datetime NOT NULL DEFAULT current_timestamp(),
  `data_actualizacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `email`, `endereco`, `telefone`, `genero`, `salario`, `cargo`, `data_registo`, `data_actualizacao`) VALUES
(4, 'Illum proident rem', 'keceboqub@mailinator.com', 'Sit qui in nihil exc', 'Voluptas voluptatum ', 'Femenino', '0', 'Maxime id esse ulla', '2022-02-18 11:12:26', NULL),
(9, 'Ipsa consequatur d', 'kyxulujy@mailinator.com', 'Qui non recusandae ', 'At impedit dolor ex', 'Masculino', '0', 'In sed rerum aliquip', '2022-02-18 11:12:48', NULL),
(10, 'Omnis labore in quis', 'lajifajoh@mailinator.com', 'Eiusmod corrupti id', 'Porro voluptate vita', 'Femenino', '0', 'Reprehenderit proide', '2022-02-18 11:12:55', NULL),
(11, 'Ad vitae quis quo si', 'qyxu@mailinator.com', 'Cillum veniam facil', 'Consequat Consectet', 'Femenino', '0', 'Deserunt dignissimos', '2022-02-18 11:12:59', NULL),
(12, 'Labore dicta pariatu', 'pyronot@mailinator.com', 'Ullamco cum ad aliqu', 'Modi voluptatibus do', 'Masculino', '0', 'Sed nobis pariatur ', '2022-02-18 11:13:05', NULL),
(14, 'Aspernatur repudiand', 'bujox@mailinator.com', 'Earum sed cupidatat ', 'Debitis et doloremqu', 'Masculino', '0', 'Doloremque do evenie', '2022-02-18 11:26:00', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
