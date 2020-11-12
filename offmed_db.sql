-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Out-2019 às 05:06
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `offmed_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adms`
--

CREATE TABLE `adms` (
  `id` int(6) UNSIGNED NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `adms`
--

INSERT INTO `adms` (`id`, `cpf`, `nome`, `email`, `senha`, `endereco`, `telefone`) VALUES
(1, '123', 'admin', 'admin@admin', '123456', 'admin', '123456789');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `id` int(6) UNSIGNED NOT NULL,
  `paciente` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `medico` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `especialidade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `crm` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prontuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`id`, `paciente`, `cpf`, `medico`, `especialidade`, `crm`, `dat`, `hora`, `descricao`, `prontuario`) VALUES
(5, 'Lucas', '11', '', 'Ginecologista', '101010', '2019-10-16', '05:40', 'Teste de Descrição', 'Tudo OK');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exames`
--

CREATE TABLE `exames` (
  `id` int(6) UNSIGNED NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `laboratorio` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `exame` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `resultado` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `exames`
--

INSERT INTO `exames` (`id`, `cpf`, `laboratorio`, `exame`, `cnpj`, `dat`, `hora`, `resultado`) VALUES
(6, '11', 'laboratorio', 'Colesterol', '77777', '2019-10-19', '00:00', 'Positivo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(6) UNSIGNED NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `laboratorios`
--

CREATE TABLE `laboratorios` (
  `id` int(6) UNSIGNED NOT NULL,
  `cnpj` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `especialidade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `laboratorios`
--

INSERT INTO `laboratorios` (`id`, `cnpj`, `nome`, `email`, `senha`, `endereco`, `especialidade`, `telefone`) VALUES
(1, '77777', 'MedPlan', 'medmed@plan.com', '77777', 'Rua 24 de Maio', 'Toxicologia', '77777'),
(3, '101010', 'TesteLab', 'testelab@test.com', '101010', 'Rua Lab 123', 'Parasitologia', '101010');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE `medicos` (
  `id` int(6) UNSIGNED NOT NULL,
  `crm` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `especialidade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`id`, `crm`, `nome`, `sexo`, `email`, `senha`, `endereco`, `especialidade`, `telefone`) VALUES
(1, '101010', 'Joao', 'masculino', 'joao@joao.com', '101010', 'Rua 22', 'Ginecologista', '2222'),
(2, '404040', 'Maria', 'feminino', 'maria@asas.com', '404040', 'Rua Maria 123', 'Cardiologista', '4040404040'),
(3, '505050', 'Jorge', 'masculino', 'jorge@jorge.com', '505050', 'Rua Teste', 'Cardiologista', '505050'),
(4, '222222', 'Alberto', 'masculino', 'alberto@alberto.com', '222222', 'Rua Teste', 'Cardiologista', '222222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(6) UNSIGNED NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `cpf`, `nome`, `sexo`, `email`, `senha`, `endereco`, `telefone`) VALUES
(1, '11', 'Lucas', 'masculino', 'lucas@lucas.com', '11', 'Rua FURG', '11111'),
(2, '22', 'Jose', 'masculino', 'jose@jose.mpu', '22', 'Rua Teste', '121212'),
(10, '404040', 'Matheus', 'masculino', 'matheus@matheus.com', '404040', 'Rua Testando 123', '404040'),
(11, '111111', 'Maria', 'feminino', 'maria@maria.furg', '111111', 'Rua Maria', '11111');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adms`
--
ALTER TABLE `adms`
  ADD PRIMARY KEY (`id`,`cpf`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices para tabela `exames`
--
ALTER TABLE `exames`
  ADD PRIMARY KEY (`id`,`cnpj`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`,`cpf`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `laboratorios`
--
ALTER TABLE `laboratorios`
  ADD PRIMARY KEY (`id`,`cnpj`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Índices para tabela `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`,`crm`),
  ADD UNIQUE KEY `crm` (`crm`);

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`,`cpf`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adms`
--
ALTER TABLE `adms`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `exames`
--
ALTER TABLE `exames`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `laboratorios`
--
ALTER TABLE `laboratorios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
