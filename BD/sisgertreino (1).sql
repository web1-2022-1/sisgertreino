-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 30/06/2022 às 12:28
-- Versão do servidor: 8.0.29-0ubuntu0.20.04.3
-- Versão do PHP: 7.3.33-2+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sisgertreino`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE `aluno` (
  `cpf_aluno` int NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`cpf_aluno`, `nome`, `dt_nascimento`) VALUES
(15151515, 'Murilo Viana', '2022-06-14');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` bigint UNSIGNED NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `cpf_aluno` int DEFAULT NULL,
  `cpf_instrutor` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `telefone`, `email`, `cpf_aluno`, `cpf_instrutor`) VALUES
(2, '77991390956', 'Macena@gmail.com', NULL, 1111111),
(12, '78787878', 'murilo@gmail.com', 15151515, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `dado_fisicos`
--

CREATE TABLE `dado_fisicos` (
  `id_dados_fisicos` bigint UNSIGNED NOT NULL,
  `peso` double DEFAULT NULL,
  `altura` double DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `observacao_aluno` text,
  `cpf_aluno` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `id_exercicio` int UNSIGNED NOT NULL,
  `nome` varchar(75) DEFAULT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fichaExercicio`
--

CREATE TABLE `fichaExercicio` (
  `id_fichaExercicio` bigint UNSIGNED NOT NULL,
  `num_serie` int DEFAULT NULL,
  `repeticoes` int DEFAULT NULL,
  `carga` int DEFAULT NULL,
  `tempo_descanso` varchar(36) DEFAULT NULL,
  `fk_exercicio` int UNSIGNED NOT NULL,
  `fk_treino` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `historico`
--

CREATE TABLE `historico` (
  `id_historico` bigint UNSIGNED NOT NULL,
  `dt_treino` date DEFAULT NULL,
  `fk_treino` int DEFAULT NULL,
  `cpf_aluno` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `instrutor`
--

CREATE TABLE `instrutor` (
  `cpf_instrutor` int NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `fk_login` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `instrutor`
--

INSERT INTO `instrutor` (`cpf_instrutor`, `nome`, `dt_nascimento`, `fk_login`) VALUES
(1111111, 'Lucas Santiago', '2000-06-01', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id_login` bigint UNSIGNED NOT NULL,
  `usuario` varchar(69) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`id_login`, `usuario`, `senha`) VALUES
(3, 'admin', '123'),
(8, 'a', '1515');

-- --------------------------------------------------------

--
-- Estrutura para tabela `treino`
--

CREATE TABLE `treino` (
  `id_treino` int NOT NULL,
  `nome_treino` varchar(60) DEFAULT NULL,
  `dt_treino` date DEFAULT NULL,
  `fk_fichaExercicio` bigint UNSIGNED NOT NULL,
  `cpf_aluno` int DEFAULT NULL,
  `cpf_instrutor` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`cpf_aluno`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`),
  ADD UNIQUE KEY `id_contato` (`id_contato`),
  ADD KEY `cpf_aluno` (`cpf_aluno`),
  ADD KEY `cpf_instrutor` (`cpf_instrutor`);

--
-- Índices de tabela `dado_fisicos`
--
ALTER TABLE `dado_fisicos`
  ADD PRIMARY KEY (`id_dados_fisicos`),
  ADD UNIQUE KEY `id_dados_fisicos` (`id_dados_fisicos`),
  ADD KEY `cpf_aluno` (`cpf_aluno`);

--
-- Índices de tabela `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`id_exercicio`),
  ADD UNIQUE KEY `id_exercicio` (`id_exercicio`);

--
-- Índices de tabela `fichaExercicio`
--
ALTER TABLE `fichaExercicio`
  ADD PRIMARY KEY (`id_fichaExercicio`),
  ADD UNIQUE KEY `id_fichaExercicio` (`id_fichaExercicio`),
  ADD KEY `fk_exercicio` (`fk_exercicio`),
  ADD KEY `fk_treino` (`fk_treino`);

--
-- Índices de tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id_historico`),
  ADD UNIQUE KEY `id_historico` (`id_historico`),
  ADD KEY `cpf_aluno` (`cpf_aluno`),
  ADD KEY `fk_treino` (`fk_treino`);

--
-- Índices de tabela `instrutor`
--
ALTER TABLE `instrutor`
  ADD PRIMARY KEY (`cpf_instrutor`),
  ADD UNIQUE KEY `fk_login` (`fk_login`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD UNIQUE KEY `id_login` (`id_login`);

--
-- Índices de tabela `treino`
--
ALTER TABLE `treino`
  ADD PRIMARY KEY (`id_treino`),
  ADD UNIQUE KEY `fk_fichaExercicio` (`fk_fichaExercicio`),
  ADD KEY `cpf_aluno` (`cpf_aluno`),
  ADD KEY `cpf_instrutor` (`cpf_instrutor`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `dado_fisicos`
--
ALTER TABLE `dado_fisicos`
  MODIFY `id_dados_fisicos` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `id_exercicio` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fichaExercicio`
--
ALTER TABLE `fichaExercicio`
  MODIFY `id_fichaExercicio` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `id_historico` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `instrutor`
--
ALTER TABLE `instrutor`
  MODIFY `fk_login` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_login` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `treino`
--
ALTER TABLE `treino`
  MODIFY `fk_fichaExercicio` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `contato_ibfk_1` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`),
  ADD CONSTRAINT `contato_ibfk_2` FOREIGN KEY (`cpf_instrutor`) REFERENCES `instrutor` (`cpf_instrutor`),
  ADD CONSTRAINT `contato_ibfk_3` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`),
  ADD CONSTRAINT `contato_ibfk_4` FOREIGN KEY (`cpf_instrutor`) REFERENCES `instrutor` (`cpf_instrutor`);

--
-- Restrições para tabelas `dado_fisicos`
--
ALTER TABLE `dado_fisicos`
  ADD CONSTRAINT `dado_fisicos_ibfk_1` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`),
  ADD CONSTRAINT `dado_fisicos_ibfk_2` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`);

--
-- Restrições para tabelas `fichaExercicio`
--
ALTER TABLE `fichaExercicio`
  ADD CONSTRAINT `fichaExercicio_ibfk_1` FOREIGN KEY (`fk_exercicio`) REFERENCES `exercicio` (`id_exercicio`),
  ADD CONSTRAINT `fichaExercicio_ibfk_2` FOREIGN KEY (`fk_treino`) REFERENCES `treino` (`id_treino`);

--
-- Restrições para tabelas `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `historico_ibfk_1` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`),
  ADD CONSTRAINT `historico_ibfk_2` FOREIGN KEY (`fk_treino`) REFERENCES `treino` (`id_treino`),
  ADD CONSTRAINT `historico_ibfk_3` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`),
  ADD CONSTRAINT `historico_ibfk_4` FOREIGN KEY (`fk_treino`) REFERENCES `treino` (`id_treino`);

--
-- Restrições para tabelas `instrutor`
--
ALTER TABLE `instrutor`
  ADD CONSTRAINT `instrutor_ibfk_1` FOREIGN KEY (`fk_login`) REFERENCES `login` (`id_login`),
  ADD CONSTRAINT `instrutor_ibfk_2` FOREIGN KEY (`fk_login`) REFERENCES `login` (`id_login`);

--
-- Restrições para tabelas `treino`
--
ALTER TABLE `treino`
  ADD CONSTRAINT `treino_ibfk_1` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`),
  ADD CONSTRAINT `treino_ibfk_2` FOREIGN KEY (`cpf_instrutor`) REFERENCES `instrutor` (`cpf_instrutor`),
  ADD CONSTRAINT `treino_ibfk_3` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`),
  ADD CONSTRAINT `treino_ibfk_4` FOREIGN KEY (`cpf_instrutor`) REFERENCES `instrutor` (`cpf_instrutor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
