-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2019 às 21:45
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pessoa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `login`, `senha`) VALUES
(1, 'medina', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingresso`
--

CREATE TABLE `ingresso` (
  `id` int(11) UNSIGNED NOT NULL,
  `descricao` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `nomeum` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nomedois` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagemum` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagemdois` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `ingresso`
--

INSERT INTO `ingresso` (`id`, `descricao`, `data`, `hora`, `nomeum`, `nomedois`, `imagemum`, `imagemdois`, `valor`) VALUES
(3, 'sadasdasd', '2018-02-02', '02:01:00', 'Internacional', 'gremio', 'download (1).png', 'internacional-porto-alegre-logo-escudo-4 (1).png', 3),
(4, 'nada', '2019-10-31', '20:58:00', 'Internacional', 'gremio', 'download (1).png', 'download (1).png', 2),
(5, 'Sacode', '2019-10-21', '21:30:00', 'Flamengo', 'Gremio', 'Clube_de_Regatas_do_Flamengo-logo-4F9152B932-seeklogo.com.png', 'download (1).png', 120),
(6, 'nada', '2001-03-12', '23:58:00', 'Bahia', 'Inter', 'e-c-bahia-logo-escudo.png', 'download.png', 100),
(7, 'nada', '2021-11-02', '02:57:00', 'corinthians', 'inter', 'CORINTHIANSlogo.png', 'internacional-porto-alegre-logo-escudo-4 (1).png', 110);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `autor` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `nome`, `descricao`, `imagem`, `data`, `autor`) VALUES
(3, 'Noticia 1', 'Pottker sofre nova lesÃ£o muscular e nÃ£o joga mais pelo Inter em 2019', 'eklhtdbx0aajfnv_APQnlnw.jpg', '2022-03-02', 'Medina'),
(4, 'Noticia 2', ' ZÃ© Ricardo fecha treino para definir substitutos de Lindoso e Pottker', 'img-0820.jpg', '2021-03-29', 'Medina'),
(5, 'Noticia 3', 'D\'Ale fala sobre renovaÃ§Ã£o, amizade com Coudet e cidadania brasileira', 'dale6_tn3xaRv.jpg', '2021-03-28', 'Medina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `endereco`, `telefone`, `email`, `sexo`, `senha`) VALUES
(7, 'medina', 'Livramento', '21231231', 'naosei@gmail.com', 'M', '$2a$07$rasmuslerd............S6jQNtqIuIq7htpvuV5beudsPwKNqYy'),
(8, 'medina', 'Cidade', '123', 'nada@gmail.com', 'M', '$2a$07$rasmuslerd............lsU3bqSRXXzbqIHP2V29SZhRIIbRLHC'),
(10, 'rex', 'Livramento', '123', 'a@gmail.com', 'M', '$2a$07$rasmuslerd............Cj1cPbAc0PU7pGYno1SZgEqq.i0y4ry'),
(11, 'asdasd', 'Livramento', '21231231', 'b@gmail.com', 'M', '$2a$07$rasmuslerd............S6jQNtqIuIq7htpvuV5beudsPwKNqYy'),
(12, 'medina', 'Livramento', '123123', 'c@gmail.com', 'M', '$2a$07$rasmuslerd............EhoXa7h9d0HPrKNo50vW.Z4jrVA0Pfa'),
(13, 'medina', 'dfs', '123123', 'd@gmail.com', 'M', '$2a$07$rasmuslerd............A.LxSorFYUTQaifBRhRbvq3UbPUQUoi');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `ingresso`
--
ALTER TABLE `ingresso`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
