-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jul-2023 às 20:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vetclinic`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nomeTutor` char(100) DEFAULT NULL,
  `nomeAnimal` char(100) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `cpf` char(20) DEFAULT NULL,
  `endereco` char(100) DEFAULT NULL,
  `dataNascimento` char(100) DEFAULT NULL,
  `sexoAnimal` char(50) DEFAULT NULL,
  `especie` char(50) DEFAULT NULL,
  `pelagem` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nomeTutor`, `nomeAnimal`, `email`, `cpf`, `endereco`, `dataNascimento`, `sexoAnimal`, `especie`, `pelagem`) VALUES
(2, 'Gleidson Matheus da Silva Barreto', 'Luck', 'gleidsonbarreto77@gmail.com', '085.645.413-33', 'caucaia', '20/03/2003', 'macho', 'cachorro', 'Branco e preto'),
(3, 'matheus', 'Luck', 'gleidsonbarreto77@gmail.com', '085.645.413-55', 'caucaia', '20/03/2003', 'macho', 'cachorro', 'Branco e preto'),
(4, 'MatheusTeste', 'LuckTeste', 'teste@gmail.com', '08564541336', 'caucaia', '20-03-2003', 'macho', 'cachorro', 'branco com preto'),
(5, 'Gleidson Matheus da Silva Barreto', 'Luck', 'matheus@teste.com', '085.123.645-12', 'caucaia', '20/03/2003', 'macho', 'cachorro', 'Branco e preto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `cnpj` char(50) DEFAULT NULL,
  `emailEmpresa` char(100) DEFAULT NULL,
  `emailRepresentante` char(100) DEFAULT NULL,
  `endereco` char(100) DEFAULT NULL,
  `nomeEmpresa` char(100) DEFAULT NULL,
  `nomeRepresentante` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `cnpj`, `emailEmpresa`, `emailRepresentante`, `endereco`, `nomeEmpresa`, `nomeRepresentante`) VALUES
(1, '12.345.678/9000-01', 'teste@gmail.com', 'matheus@gmail.com', 'caucaia', 'IMAC', 'matheus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `id` int(11) NOT NULL,
  `nomeProduto` char(30) DEFAULT NULL,
  `quantidadeProduto` int(11) DEFAULT NULL,
  `dataCadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `fornecedor` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `nomeProduto`, `quantidadeProduto`, `dataCadastro`, `fornecedor`) VALUES
(1, 'teste', 31, '2023-07-19 12:49:34', 'teste'),
(2, 'Remédio', 35, '2023-07-19 13:45:13', 'IMAC'),
(3, 'Remédio', 4, '2023-07-24 12:05:27', 'IMAC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nomeItem` char(30) DEFAULT NULL,
  `descricao` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nomeItem`, `descricao`) VALUES
(1, 'teste', 'teste1'),
(2, 'teste', 'teste'),
(3, 'teste', 'teste1'),
(4, 'Remédio', 'Remédio para cachorro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`) VALUES
(1, 'matheus', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
