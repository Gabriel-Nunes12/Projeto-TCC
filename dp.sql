-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/09/2025 às 16:51
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_completo` varchar(255) DEFAULT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `tipo_documento` enum('CPF','CNPJ') DEFAULT NULL,
  `documento` varchar(50) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_completo`, `nome_usuario`, `email`, `senha`, `tipo_documento`, `documento`, `municipio`, `telefone`, `cep`) VALUES
(1, 'Gabriel n. s. m', 'gabriel', 'biel@gmail.com', '120', 'CNPJ', '11.111.111/1111-11', 'Angatuba', '(00) 00000-0000', '11111-111');

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id_veiculo` int(11) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `combustivel` varchar(20) DEFAULT NULL,
  `cambio` varchar(20) DEFAULT NULL,
  `direcao_hidraulica` tinyint(1) DEFAULT NULL,
  `trava_eletrica` tinyint(1) DEFAULT NULL,
  `km` int(11) DEFAULT NULL,
  `local` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `veiculos`
--

INSERT INTO `veiculos` (`id_veiculo`, `imagem`, `marca`, `modelo`, `ano`, `combustivel`, `cambio`, `direcao_hidraulica`, `trava_eletrica`, `km`, `local`, `preco`, `usuario_id`) VALUES
(1, 'uploads/1758204195_homem-aranha-3.jpg', 'BMW', 'Série 1', 1000, 'Etanol', 'Manual', 0, 0, 5000, 'Analândia', 50.00, 1),
(2, 'uploads/1758204637_1664e3ced31457e09bf8c79e335ed0be.jpg', 'BMW', 'Série 3', 1111, 'Gasolina', 'Manual', 0, 0, 1111, 'Andradina', 111.00, 1),
(3, 'uploads/1758204796_neymar.jpg', 'Audi', 'A4', 1111, 'Etanol', 'Manual', 0, 0, 1111, 'Andradina', 111.11, 1),
(4, 'uploads/1758204932_1664e3ced31457e09bf8c79e335ed0be.jpg', 'BMW', 'Série 1', 1, 'Etanol', 'Automático', 0, 0, 1111, 'Angatuba', 11.00, 1),
(5, 'uploads/1758205111_1664e3ced31457e09bf8c79e335ed0be.jpg', 'Audi', 'A3', 0, 'Gasolina', 'Manual', 0, 0, 1111, 'Andradina', 22.00, 1),
(6, 'uploads/1758205122_homem-aranha-3.jpg', 'BMW', 'Série 1', 22, 'Gasolina', 'Manual', 0, 0, 1111, 'Andradina', 22.00, 1),
(7, 'uploads/1758205226_homem-aranha-3.jpg', 'BMW', 'Série 1', 1, 'Gasolina', 'Manual', 0, 0, 111, 'Andradina', 111.00, 1),
(8, 'uploads/1758205288_homem-aranha-3.jpg', 'BMW', 'Série 1', 1, 'Gasolina', 'Manual', 0, 0, 111, 'Andradina', 111.00, 1),
(9, 'uploads/1758205492_1664e3ced31457e09bf8c79e335ed0be.jpg', 'Audi', 'A3', 1, 'Gasolina', 'Manual', 0, 0, 1, 'Adolfo', 1.00, 1),
(10, 'uploads/1758205520_castle-in-the-mountains-4381-1920x1200.jpg', 'Chevrolet', 'Onix', 1, 'Gasolina', 'Manual', 0, 0, 1, 'Adolfo', 1.00, 1),
(11, 'uploads/1758205595_1664e3ced31457e09bf8c79e335ed0be.jpg', 'BMW', 'Série 1', 1, 'Gasolina', 'Manual', 0, 0, 1, 'Adolfo', 1.00, 1),
(12, 'uploads/1758205636_homem-aranha-3.jpg', 'Audi', 'A3', 2, 'Gasolina', 'Automático', 0, 0, 2, 'Angatuba', 2.00, 1),
(13, 'uploads/1758206358_1664e3ced31457e09bf8c79e335ed0be.jpg', 'Audi', 'A4', 22, 'Diesel', 'Automático', 0, 0, 1111, 'Anhembi', 11.00, 1),
(14, 'uploads/1758206753_1664e3ced31457e09bf8c79e335ed0be.jpg', 'BMW', 'Série 3', 1, 'Gasolina', 'Manual', 0, 0, 1, 'Angatuba', 1.00, 1),
(15, 'uploads/1758206841_os melhores.jpg', 'Audi', 'A6', 1111, 'Etanol', 'Manual', 0, 0, 11, 'Angatuba', 111.11, 1),
(16, 'uploads/1758206891_1664e3ced31457e09bf8c79e335ed0be.jpg', 'Audi', 'A3', 11, 'Gasolina', 'Manual', 0, 0, 11, 'Andradina', 11.00, 1),
(17, 'uploads/1758206980_1664e3ced31457e09bf8c79e335ed0be.jpg', 'BMW', 'Série 1', 1111, 'Gasolina', 'Automático', 0, 0, 1111, 'Andradina', 50.00, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id_veiculo`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id_veiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `veiculos`
--
ALTER TABLE `veiculos`
  ADD CONSTRAINT `veiculos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
