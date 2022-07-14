-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14/07/2022 às 13:14
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
  `cpf_aluno` varchar(14) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`cpf_aluno`, `nome`, `dt_nascimento`) VALUES
('151.515.151-51', 'iuri', '2022-07-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` bigint UNSIGNED NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `cpf_aluno` varchar(14) DEFAULT NULL,
  `cpf_instrutor` varchar(14) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `telefone`, `email`, `cpf_aluno`, `cpf_instrutor`) VALUES
(23, '(99) 9999-9999', 'admin@gmail.com', NULL, '222.666.677-77'),
(24, '(99) 9999-9999', 'iuri@email.com', '151.515.151-51', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `id_exercicio` int UNSIGNED NOT NULL,
  `nome` varchar(75) DEFAULT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `exercicio`
--

INSERT INTO `exercicio` (`id_exercicio`, `nome`, `descricao`) VALUES
(1, 'Abdominal Puxada de Pernas TRX', 'Apoie as mãos no solo e mantenha o corpo suspenso pelas fitas apoiadas nos pés. Mantenha\r\nas pernas esticadas.\r\nPuxe as pernas em direção aos glúteos sem deixar que os joelhos toquem o chão.\r\nVolte para a posição inicial e repita o movimento.'),
(2, 'Abdominal Alternado', 'Deite-se com os pés apoiados no solo e os joelhos flexionados.\r\nLevante a parte superior das costas e faça o movimento rotacional do tronco, levando um\r\ncotovelo em direção ao joelho oposto.\r\nVolte para a posição inicial e repita o movimento do outro lado do corpo.'),
(3, 'Abdominal Meio Canivete', 'Deite-se no solo com as pernas esticadas e os braços sobre a cabeça.\r\nLevante o tronco e flexione as pernas ao mesmo valor até que somente os glúteos fiquem\r\napoiados no solo.\r\nVolte a posição inicial e repita o movimento.'),
(4, 'Agachamento lateral', 'Fique em pé e mantenha os pés levemente afastados e os braços ao lado do corpo.\r\nCom os pés levemente afastados, faça o movimento de agachamento flexionando as pernas.\r\nAo mesmo tempo, toque em um dos pés com a mão do lado oposto do corpo.\r\nVolte a posição inicial e repita o movimento alternando as mãos.'),
(5, 'Agachamento toca o pé', 'Fique em pé e mantenha os pés levemente afastados e os braços ao lado do corpo.\r\nCom os pés levemente afastados, faça o movimento de agachamento flexionando as pernas.\r\nAo mesmo tempo, toque em um dos pés com a mão do lado oposto do corpo.\r\nVolte á posição inicial e repita o movimento alternando as mãos.'),
(6, 'Agachamento afundo com TRX', 'Deixe um dos pés suspensos na fita e dê um passo largo á frente com o outro pé.\r\nAbaixe o corpo flexionando o joelho da perna de apoio.\r\nVolte para a posição inicial e repita o movimento.'),
(7, 'Puxada de tríceps', 'Fique em pé em frente a uma máquina de polia alta, flexione levemente os joelhos e incline\r\no tronco para frente. Segure o cabo preso à polia com as palmas das mãos viradas para\r\nbaixo, mantendo os cotovelos ao lado do corpo.\r\nPuxe o cabo, flexionando os antebraços para baixo.\r\nVolte para a posição inicial e repita o movimento.'),
(8, 'Puxada de tríceps com corda', 'Fique em pé em frente a uma máquina de polia alta e segure a corda presa à polia com as\r\npalmas das mãos viradas para dentro. Mantenha os cotovelos ao lado do corpo.\r\nPuxe a corda flexionando os antebraços para baixo.\r\nVolte para a posição inicial e repita o movimento'),
(9, 'Puxada de tríceps em supinação', 'Fique em pé em frente a uma máquina de polia alta, segure a barra presa à polia com uma\r\npegada supinada e fixe os cotovelos ao lado do corpo.\r\nPuxe a barra para baixo até que seus braços fiquem esticados, movendo somente os\r\ncotovelos.\r\nVolte a barra à posição inicial e repita o movimento.'),
(10, 'Remada com barra', 'Fique em pé com os pés alinhados com os ombros. Flexione os joelhos levemente, e incline\r\no tronco para frente. Mantenha a barra suspensa em frente ao corpo, com os braços\r\nlevemente flexionados.\r\nContraia as costas, flexione os braços e levante a barra em direção ao tórax.\r\nVolte para a posição inicial e repita o movimento.'),
(11, 'Remada na máquina sentada', 'Sente-se na máquina, e segure os pegadores na altura do abdômen com os braços esticados.\r\nPuxe o pegador em direção ao abdômen projetando os ombros para trás e o peito para a\r\nfrente. Mantenha as costas estáticas, evitando balanços.\r\nVolte para a posição inicial até que os braços fiquem quase esticados. Deixe os ombros\r\nsejam ligeiramente projetados para frente e repita o movimento.'),
(12, 'Rosca martelo em pé', 'Fique em pé com os pés ligeiramente afastados, joelhos levemente flexionados e abdômen\r\ncontraído. Segure os halteres com as palmas das mãos viradas para dentro, em uma pegada\r\nneutra. Mantenha os halteres ao lado da suas coxas.\r\nMova um dos halteres na direção dos seus ombros. 2- Volte com o haltere para a posição\r\ninicial e repita o movimento com o outro braço.'),
(13, 'Encolhimento com halteres', 'Fique em pé e segure os halteres ao lado do corpo com as palmas das mãos viradas para dentro, em uma pegada neutra. Com os braços estendidos, leve os ombros para cima o mais alto possível.'),
(14, 'Extensão de panturrilha com pirâmide', 'Deite-se no solo apoie o peso do corpo com os braços e a ponta dos pés. Mantenha os braços quase esticados e os pés juntos. Levante o quadril de modo a formar um triângulo com o corpo. Fique na ponta dos pés e impulsione o corpo para cima. Voltar à posição inicial e repita o movimento.'),
(15, 'Flexão', ' Deite-se e apoie as mãos e os pés no solo. Alinhe os braços com o seu peitoral. Levante o peso do seu corpo até que os cotovelos estejam quase esticados. Desça o corpo até que seu peitoral esteja a uma distância de dois dedos do chão. Repita o movimento.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fichaExercicio`
--

CREATE TABLE `fichaExercicio` (
  `id_fichaExercicio` bigint UNSIGNED NOT NULL,
  `nome_ficha` varchar(100) NOT NULL,
  `num_serie` int DEFAULT NULL,
  `repeticoes` int DEFAULT NULL,
  `carga` int DEFAULT NULL,
  `tempo_descanso` int DEFAULT NULL,
  `fk_exercicio` int UNSIGNED NOT NULL,
  `fk_treino` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `fichaExercicio`
--

INSERT INTO `fichaExercicio` (`id_fichaExercicio`, `nome_ficha`, `num_serie`, `repeticoes`, `carga`, `tempo_descanso`, `fk_exercicio`, `fk_treino`) VALUES
(86, 'avves', 8, 19, 19, 19, 2, 93);

-- --------------------------------------------------------

--
-- Estrutura para tabela `instrutor`
--

CREATE TABLE `instrutor` (
  `cpf_instrutor` varchar(14) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `fk_login` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `instrutor`
--

INSERT INTO `instrutor` (`cpf_instrutor`, `nome`, `dt_nascimento`, `fk_login`) VALUES
('222.666.677-77', 'admin', '2022-07-05', 31);

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
(31, 'admin', '000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `treino`
--

CREATE TABLE `treino` (
  `id_treino` int NOT NULL,
  `nome_treino` varchar(60) DEFAULT NULL,
  `dt_treino` date DEFAULT NULL,
  `cpf_aluno` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `treino`
--

INSERT INTO `treino` (`id_treino`, `nome_treino`, `dt_treino`, `cpf_aluno`) VALUES
(93, 'affeg', '2022-07-04', '151.515.151-51');

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
  ADD KEY `cpf_aluno` (`cpf_aluno`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `id_exercicio` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `fichaExercicio`
--
ALTER TABLE `fichaExercicio`
  MODIFY `id_fichaExercicio` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de tabela `instrutor`
--
ALTER TABLE `instrutor`
  MODIFY `fk_login` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_login` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `treino`
--
ALTER TABLE `treino`
  MODIFY `id_treino` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `contato_ibfk_1` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contato_ibfk_2` FOREIGN KEY (`cpf_instrutor`) REFERENCES `instrutor` (`cpf_instrutor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contato_ibfk_3` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contato_ibfk_4` FOREIGN KEY (`cpf_instrutor`) REFERENCES `instrutor` (`cpf_instrutor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `fichaExercicio`
--
ALTER TABLE `fichaExercicio`
  ADD CONSTRAINT `fichaExercicio_ibfk_1` FOREIGN KEY (`fk_exercicio`) REFERENCES `exercicio` (`id_exercicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fichaExercicio_ibfk_2` FOREIGN KEY (`fk_treino`) REFERENCES `treino` (`id_treino`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `instrutor`
--
ALTER TABLE `instrutor`
  ADD CONSTRAINT `instrutor_ibfk_1` FOREIGN KEY (`fk_login`) REFERENCES `login` (`id_login`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `instrutor_ibfk_2` FOREIGN KEY (`fk_login`) REFERENCES `login` (`id_login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `treino`
--
ALTER TABLE `treino`
  ADD CONSTRAINT `treino_ibfk_1` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf_aluno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
