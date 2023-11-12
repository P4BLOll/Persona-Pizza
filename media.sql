-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2023 às 23:48
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `media`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

CREATE TABLE `curtidas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_publicacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_ingrediente` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `pizza_id` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`id_ingrediente`, `nome`, `quantidade`, `pizza_id`) VALUES
(2, 'Tomate', 1, 1),
(3, 'Muçarela', 1, 1),
(4, 'Peperoni', 1, 1),
(5, 'Cebola', 1, 1),
(6, 'Tomate', 1, 4),
(7, 'Muçarela', 1, 4),
(8, 'Azeitona', 1, 4),
(9, 'Cebola', 1, 4),
(10, 'Tomate', 1, 5),
(11, 'Muçarela', 1, 5),
(12, 'champignon', 1, 5),
(13, 'Cebola', 1, 5),
(14, 'Tomate', 1, 6),
(15, 'Muçarela', 1, 6),
(16, 'Parmesão', 1, 6),
(17, 'Catupiry', 1, 6),
(18, 'Tomate', 1, 7),
(19, 'Muçarela', 1, 7),
(20, 'Brocolis', 1, 7),
(21, 'Azeitona', 1, 7),
(22, 'Tomate', 1, 8),
(23, 'Muçarela', 1, 8),
(24, 'Presunto', 1, 8),
(25, 'Cebola', 1, 8),
(26, 'Muçarela', 1, 9),
(27, 'Tomate', 1, 9),
(28, 'Chocolate', 1, 10),
(29, 'Muçarela', 1, 11),
(30, 'Goiabada', 1, 11),
(31, 'Banana', 1, 12),
(32, 'Canela', 1, 12),
(33, 'Chocolate Branco', 1, 13),
(34, 'Doce de Leite', 1, 14),
(35, 'Banana', 1, 14),
(36, 'Cheesecake', 1, 16),
(37, 'Marshmallow', 1, 17),
(38, 'Negresco', 1, 18),
(39, 'Presunto', 1, 23),
(40, 'Abacaxi ', 1, 23),
(41, 'Muçarela', 1, 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes_personalizados`
--

CREATE TABLE `ingredientes_personalizados` (
  `id` int(11) NOT NULL,
  `pizza_personalizada_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ingredientes_personalizados`
--

INSERT INTO `ingredientes_personalizados` (`id`, `pizza_personalizada_id`, `nome`, `quantidade`, `preco`) VALUES
(17, 26, 'Azeitona', 0, 3.00),
(19, 29, 'Tomate', 2, 6.00),
(20, 29, 'Muçarela', 0, 3.00),
(21, 29, 'Peperoni', 2, 6.00),
(22, 30, 'Tomate', 2, 6.00),
(23, 30, 'Muçarela', 0, 0.00),
(24, 30, 'Peperoni', 2, 6.00),
(25, 31, 'Cheesecake', 4, 12.00),
(26, 32, 'Muçarela', 1, 3.00),
(27, 32, 'Peperoni', 1, 3.00),
(28, 32, 'Cebola', 1, 3.00),
(29, 33, 'Tomate', 1, 3.00),
(30, 33, 'Muçarela', 1, 3.00),
(31, 33, 'Peperoni', 1, 3.00),
(32, 34, 'Presunto', 4, 12.00),
(33, 34, 'Abacaxi_', 4, 12.00),
(34, 34, 'Muçarela', 0, 0.00),
(35, 35, 'Muçarela', 2, 6.00),
(36, 35, 'Goiabada', 0, 0.00),
(37, 36, 'Muçarela', 2, 6.00),
(38, 36, 'Goiabada', 0, 0.00),
(39, 37, 'Tomate', 2, 6.00),
(40, 37, 'Muçarela', 0, 0.00),
(41, 38, 'Muçarela', 2, 6.00),
(42, 38, 'Goiabada', 0, 0.00),
(43, 39, 'Peperoni', 2, 6.00),
(44, 39, 'Cebola', 0, 0.00),
(45, 40, 'Muçarela', 2, 6.00),
(46, 40, 'Goiabada', 0, 0.00),
(47, 41, 'Chocolate', 1, 3.00),
(48, 42, 'Banana', 2, 6.00),
(49, 42, 'Canela', 0, 0.00),
(50, 43, 'Banana', 4, 12.00),
(51, 43, 'Canela', 0, 0.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizzas_comum`
--

CREATE TABLE `pizzas_comum` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `url_imagem` varchar(255) DEFAULT NULL,
  `em_estoque` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pizzas_comum`
--

INSERT INTO `pizzas_comum` (`id`, `nome`, `preco`, `url_imagem`, `em_estoque`) VALUES
(1, 'Peperoni', 25.00, 'https://i.imgur.com/GGniMtr.png', 1),
(4, 'Azeitona', 20.00, 'https://imgur.com/EJ2iwhn.png', 1),
(5, 'Cogumelo', 26.00, 'https://imgur.com/KRU7nJp.png', 1),
(6, 'Queijo', 28.00, 'https://imgur.com/kyaU5zD.png', 1),
(7, 'Vegetariana', 18.50, 'https://imgur.com/o8UJd3I.png', 1),
(8, 'presunto', 22.00, 'https://imgur.com/vtIdxEW.png', 1),
(9, 'Margherita', 20.00, 'https://imgur.com/bmJwEar.png', 1),
(10, 'Chocolate', 20.00, 'https://imgur.com/aaz7D4o.png', 1),
(11, 'Romeu e Julieta', 23.50, 'https://imgur.com/B4rUwrv.png', 1),
(12, 'Banana e Canela', 19.00, 'https://imgur.com/lKCHIJN.png', 1),
(13, '\r\nChocolate Branco', 28.00, 'https://imgur.com/X3j2phe.png', 1),
(14, 'Doce e Banana', 24.50, 'https://imgur.com/TRR8IyG.png\r\n', 1),
(16, 'Cheesecake', 35.00, 'https://imgur.com/KthGyMR.png', 1),
(17, '\r\nMarshmallow', 32.50, 'https://imgur.com/jj3dVeq.png', 1),
(18, '\r\nNegresco', 32.00, 'https://imgur.com/O7pkdoW.png', 1),
(23, 'Havaiana', 21.50, 'https://imgur.com/d7sJed5.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizzas_criada`
--

CREATE TABLE `pizzas_criada` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo_de_massa` varchar(50) NOT NULL,
  `ingredientes` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizzas_personalizada`
--

CREATE TABLE `pizzas_personalizada` (
  `id` int(11) NOT NULL,
  `pizza_id` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `nome` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pizzas_personalizada`
--

INSERT INTO `pizzas_personalizada` (`id`, `pizza_id`, `preco`, `nome`) VALUES
(26, 7, 36.00, 'Pizza Vegetariana'),
(28, 1, 36.00, 'Peperoni'),
(29, 1, 39.00, 'Peperoni'),
(30, 1, 42.00, 'Peperoni'),
(31, 16, 47.00, 'Cheesecake'),
(32, 1, 34.00, 'Peperoni'),
(33, 1, 8.50, 'Peperoni'),
(34, 23, 45.50, 'Havaiana'),
(35, 11, 29.50, 'Romeu e Julieta'),
(36, 11, 29.50, 'Romeu e Julieta'),
(37, 4, 26.00, 'Azeitona'),
(38, 11, 29.50, 'Romeu e Julieta'),
(39, 1, 11.63, 'Peperoni'),
(40, 11, 29.50, 'Romeu e Julieta'),
(41, 10, 23.00, 'Chocolate'),
(42, 12, 25.00, 'Banana e Canela'),
(43, 12, 31.00, 'Banana e Canela');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

CREATE TABLE `publicacoes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `conteudo` text NOT NULL,
  `data_publicacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `imagem` blob DEFAULT NULL,
  `aprovado` tinyint(1) DEFAULT 0,
  `id_pizza` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `pontos_pizza` int(11) DEFAULT 0,
  `foto_perfil` blob DEFAULT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `pontos_pizza`, `foto_perfil`, `is_admin`) VALUES
(21, 'Julia Silva', 'Ju@gmail.com', '$2y$10$K8vVsbbavqcViz2Flor8se9bbPn/e3xIV8jNUy/T.znCYxqRPRvA.', 0, 0x696d672f70656e63696c2d726567756c61722d32342e706e67, 0),
(23, 'Adm_Default', 'Adm_Deafult@gmail.com', '$2y$10$FfD5CnZeeTujZtKfjtdlOeCLsFtQcQbGIH4ASEZy.BOOxo2mnij/6', 0, NULL, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `curtidas`
--
ALTER TABLE `curtidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_publicacao` (`id_publicacao`);

--
-- Índices para tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingrediente`),
  ADD KEY `fk_ingredientes_pizzas` (`pizza_id`) USING BTREE;

--
-- Índices para tabela `ingredientes_personalizados`
--
ALTER TABLE `ingredientes_personalizados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizza_personalizada_id` (`pizza_personalizada_id`),
  ADD KEY `pizza_personalizada_id_2` (`pizza_personalizada_id`);

--
-- Índices para tabela `pizzas_comum`
--
ALTER TABLE `pizzas_comum`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pizzas_criada`
--
ALTER TABLE `pizzas_criada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_id` (`usuario_id`);

--
-- Índices para tabela `pizzas_personalizada`
--
ALTER TABLE `pizzas_personalizada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizza_id` (`pizza_id`);

--
-- Índices para tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_pizza` (`id_pizza`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `curtidas`
--
ALTER TABLE `curtidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `ingredientes_personalizados`
--
ALTER TABLE `ingredientes_personalizados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `pizzas_comum`
--
ALTER TABLE `pizzas_comum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `pizzas_criada`
--
ALTER TABLE `pizzas_criada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `pizzas_personalizada`
--
ALTER TABLE `pizzas_personalizada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `curtidas`
--
ALTER TABLE `curtidas`
  ADD CONSTRAINT `curtidas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `curtidas_ibfk_2` FOREIGN KEY (`id_publicacao`) REFERENCES `publicacoes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD CONSTRAINT `fk_ingredientes_pizzas` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas_comum` (`id`);

--
-- Limitadores para a tabela `ingredientes_personalizados`
--
ALTER TABLE `ingredientes_personalizados`
  ADD CONSTRAINT `ingredientes_personalizados_ibfk_1` FOREIGN KEY (`pizza_personalizada_id`) REFERENCES `pizzas_personalizada` (`id`);

--
-- Limitadores para a tabela `pizzas_criada`
--
ALTER TABLE `pizzas_criada`
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `pizzas_personalizada`
--
ALTER TABLE `pizzas_personalizada`
  ADD CONSTRAINT `pizzas_personalizada_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas_comum` (`id`);

--
-- Limitadores para a tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD CONSTRAINT `publicacoes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `publicacoes_ibfk_2` FOREIGN KEY (`id_pizza`) REFERENCES `pizzas_criada` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
