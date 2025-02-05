-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Fev-2025 às 14:50
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

DROP TABLE IF EXISTS `agendamento`;
CREATE TABLE IF NOT EXISTS `agendamento` (
  `id_agendamento` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `id_servico` int DEFAULT NULL,
  `id_funcionario` int DEFAULT NULL,
  `id_veiculo` int DEFAULT NULL,
  `dia_agendamento` date NOT NULL,
  `horario_agendamento` int DEFAULT NULL,
  `data_criacao` datetime NOT NULL,
  `data_alteracao` datetime DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_agendamento`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_veiculo` (`id_veiculo`),
  KEY `id_servico` (`id_servico`),
  KEY `id_funcionario` (`id_funcionario`)
) ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `autenticacao`
--

DROP TABLE IF EXISTS `autenticacao`;
CREATE TABLE IF NOT EXISTS `autenticacao` (
  `id_autenticacao` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(512) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `data_notificacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id_autenticacao`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `sigla_estado` char(2) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `telefone`, `email`, `senha`, `cep`, `sigla_estado`, `cidade`, `pais`, `rua`, `numero`, `bairro`, `complemento`) VALUES
(1, 'Cleidison', '6299999999', 'gmail@gmail.com', '1234', '74000000', 'GO', 'Goiania', 'Brasil', 'Rua 74', '10', 'Centro', 'proximo ao'),
(2, 'joão', '6299999999', 'joao@gmail.com', '12347', '74000000', 'GO', 'Goiania', 'Brasil', 'Rua 75', '10', 'Centro', 'sem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cnpj` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome`, `cnpj`, `telefone`, `email`, `endereco`) VALUES
(1, 'GrizorteCar', '12345678000123', '6299999999', 'grizortecar@gmail.com', 'Rua 75');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_funcionario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `matricula` varchar(255) DEFAULT NULL,
  `funcao` varchar(255) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome`, `cpf`, `telefone`, `email`, `senha`, `matricula`, `funcao`, `status`) VALUES
(1, 'Andre', '12345678912', '62999999', 'gmail@gmail.com', '123', '259999', 'gerente', 'ativo'),
(2, 'Cleidison', '92345678912', '62999999', 'cleidison@gmail.com', '123', '259999', 'mecanico', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

DROP TABLE IF EXISTS `notificacao`;
CREATE TABLE IF NOT EXISTS `notificacao` (
  `id_notificacao` int NOT NULL AUTO_INCREMENT,
  `texto` varchar(255) DEFAULT NULL,
  `forma_envio` varchar(255) DEFAULT NULL,
  `ativo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_notificacao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

DROP TABLE IF EXISTS `servico`;
CREATE TABLE IF NOT EXISTS `servico` (
  `id_servico` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  `duracao` int NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_servico`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `nome`, `descricao`, `preco`, `duracao`, `status`) VALUES
(1, 'Suspensão e Freio', 'manutencao', '150.00', 1, 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

DROP TABLE IF EXISTS `veiculo`;
CREATE TABLE IF NOT EXISTS `veiculo` (
  `id_veiculo` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `chassi` varchar(50) DEFAULT NULL,
  `placa` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `cor` varchar(30) NOT NULL,
  `ano_fabricao` varchar(10) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_veiculo`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`id_veiculo`, `id_cliente`, `chassi`, `placa`, `marca`, `modelo`, `cor`, `ano_fabricao`, `descricao`) VALUES
(1, 1, '192546', 'OGQ2525', 'Hyundai', 'HB20', 'Vermelho', '2025', 'novo'),
(2, 1, '1q192546', 'OGQ1199', 'Mitsubishi', 'L200 Triton', 'preto', '2024', 'restaurado');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
