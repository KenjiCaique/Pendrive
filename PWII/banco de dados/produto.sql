-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2024 às 02:22
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
-- Banco de dados: `produto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Placas de Vídeo'),
(2, 'Processadores'),
(3, 'Placas-Mães'),
(5, 'HD'),
(6, 'HD'),
(7, 'SSD'),
(8, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Assunto` varchar(100) DEFAULT NULL,
  `Mensagem` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`ID`, `Nome`, `Email`, `Assunto`, `Mensagem`) VALUES
(1, 'João Silva', 'joao.silva@email.com', 'Consulta', 'Gostaria de saber mais sobre seus serviços.'),
(2, 'Maria Oliveira', 'maria.oliveira@email.com', 'Reclamação', 'Tive um problema com o produto.'),
(3, 'Pedro Santos', 'pedro.santos@email.com', 'Feedback', 'Muito satisfeito com o atendimento!'),
(4, 'Ana Costa', 'ana.costa@email.com', 'Dúvida', 'Preciso de ajuda com a minha conta.'),
(5, 'Lucas Almeida', 'lucas.almeida@email.com', 'Sugestão', 'Sugiro melhorar a navegação do site.'),
(6, 'Messias', 'Messias@email.com', 'assunto importante', 'Cuidado é importante');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade_em_estoque` int(11) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `categoria_id`, `descricao`, `preco`, `quantidade_em_estoque`, `data_cadastro`) VALUES
(1, 'NVIDIA GeForce RTX 4090', 1, 'Placa de vídeo NVIDIA GeForce RTX 4090, 24GB GDDR6X', '11999.00', 10, '2024-09-12'),
(2, 'AMD Radeon RX 7900 XT', 1, 'Placa de vídeo AMD Radeon RX 7900 XT, 20GB GDDR6', '8499.00', 8, '2024-09-12'),
(3, 'NVIDIA GeForce RTX 4070 Ti', 1, 'Placa de vídeo NVIDIA GeForce RTX 4070 Ti, 12GB GDDR6X', '4999.00', 20, '2024-09-12'),
(4, 'Intel Core i9-13900K', 2, 'Processador Intel Core i9-13900K, 24 núcleos, 32 threads', '3999.00', 12, '2024-09-12'),
(5, 'AMD Ryzen 9 7950X', 2, 'Processador AMD Ryzen 9 7950X, 16 núcleos, 32 threads', '3499.00', 18, '2024-09-12'),
(6, 'AMD Ryzen 7 7800X', 2, 'Processador AMD Ryzen 7 7800X, 8 núcleos, 16 threads', '2399.00', 25, '2024-09-12'),
(7, 'MSI MAG B650 TOMAHAWK', 3, 'Placa-mãe MSI MAG B650 TOMAHAWK, ATX, suporta DDR5', '1899.00', 15, '2024-09-12'),
(8, 'Gigabyte B550 AORUS PRO', 3, 'Placa-mãe Gigabyte B550 AORUS PRO, ATX, suporta DDR4', '1299.00', 20, '2024-09-12'),
(9, 'Gigabyte Z790 AORUS XTREME', 3, 'Placa-mãe Gigabyte Z790 AORUS XTREME, E-ATX, suporta DDR5', '3299.00', 5, '2024-09-12'),
(10, 'NVIDIA GeForce RTX 4090', 1, 'Placa de Vídeo', '5200.00', 15, '2024-05-07'),
(11, 'teste', 2, 'teste2', '82163.00', 15, '2024-05-09');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
