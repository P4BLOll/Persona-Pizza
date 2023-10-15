-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Out-2023 às 23:20
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
-- Banco de dados: `media`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_publicacao` int(11) NOT NULL,
  `texto_comentario` text NOT NULL,
  `data_comentario` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Estrutura da tabela `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pizzas`
--

INSERT INTO `pizzas` (`id`, `nome`, `preco`) VALUES
(1, 'Peperoni', '30.00'),
(4, 'Pizza de Azeitona', '30.00'),
(5, 'Pizza de Cogumelo', '30.00'),
(6, 'Pizza de Queijo', '30.00'),
(7, 'Pizza Vegetariana', '30.00'),
(8, 'Pizza de presunto', '30.00');

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
  `aprovado` tinyint(1) DEFAULT 0
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
(9, 'Adm_Default', 'Adm_Deafult@gmail.com', '$2y$10$F1ui9NVyBKAvGw8N1dVJFu25OV0lI2maPkQr/e3sC8RBCTCrNmVIO', 0, NULL, 1),
(16, 'a', 'a@gmail.com', '$2y$10$0.CagdMoZmrE1bMSR4xFmuH5ycPUZAfgmmO63OYMjkUZ1IjFhjf8O', 0, 0x696d672f466f746f5f50657266696c2e6a7067, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_publicacao` (`id_publicacao`);

--
-- Índices para tabela `curtidas`
--
ALTER TABLE `curtidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_publicacao` (`id_publicacao`);

--
-- Índices para tabela `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curtidas`
--
ALTER TABLE `curtidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_publicacao`) REFERENCES `publicacoes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `curtidas`
--
ALTER TABLE `curtidas`
  ADD CONSTRAINT `curtidas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `curtidas_ibfk_2` FOREIGN KEY (`id_publicacao`) REFERENCES `publicacoes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD CONSTRAINT `publicacoes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
