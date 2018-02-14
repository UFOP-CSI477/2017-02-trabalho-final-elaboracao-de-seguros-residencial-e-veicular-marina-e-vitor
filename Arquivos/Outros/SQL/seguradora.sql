-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Fev-2018 às 21:28
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seguradora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulariocarro`
--

CREATE TABLE `formulariocarro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cpf` varchar(255) CHARACTER SET utf8 NOT NULL,
  `genero` varchar(255) CHARACTER SET utf8 NOT NULL,
  `salario` varchar(255) CHARACTER SET utf8 NOT NULL,
  `estadoCivil` varchar(255) CHARACTER SET utf8 NOT NULL,
  `filhoHabilitado` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alcool` varchar(255) CHARACTER SET utf8 NOT NULL,
  `entorpecente` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nascimento` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fabricante` varchar(255) CHARACTER SET utf8 NOT NULL,
  `anoVeiculo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `distancia` varchar(255) CHARACTER SET utf8 NOT NULL,
  `classe` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cambio` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cor` varchar(255) CHARACTER SET utf8 NOT NULL,
  `combustivel` varchar(255) CHARACTER SET utf8 NOT NULL,
  `garagemCasa` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ambiental` varchar(255) CHARACTER SET utf8 NOT NULL,
  `furto` varchar(255) CHARACTER SET utf8 NOT NULL,
  `acidente` varchar(255) CHARACTER SET utf8 NOT NULL,
  `concorda` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `formulariocarro`
--

INSERT INTO `formulariocarro` (`id`, `nome`, `cpf`, `genero`, `salario`, `estadoCivil`, `filhoHabilitado`, `alcool`, `entorpecente`, `nascimento`, `fabricante`, `anoVeiculo`, `distancia`, `classe`, `cambio`, `cor`, `combustivel`, `garagemCasa`, `ambiental`, `furto`, `acidente`, `concorda`, `created_at`) VALUES
(31, 'Juan Miguel', '543.234.123-00', 'Masculino', '1 a 5', 'Solteiro', 'Nao', 'Nao', 'Sim', '1965-01-09', 'Chevrolet', '2010', '1000', 'Medio', 'Hidraulico', 'Amarelo', 'Etanol', 'Nao', 'Sim', 'Sim', 'Sim', 'Sim', '2018-02-13 19:39:24'),
(32, 'Lara Silva', '589.986.888-00', 'Feminino', '1 a 5', 'Solteiro', 'Nao', 'Sim', 'Nao', '1997-11-10', 'Honda', '2005', '800', 'Compacto', 'Hidraulico', 'Verde', 'Gasolina', 'Sim', 'Nao', 'Sim', 'Sim', 'Sim', '2018-02-13 19:41:49'),
(33, 'Maria Laura Malu', '537.736.000-00', 'Feminino', '5 a 10', 'Solteiro', 'Nao', 'Sim', 'Sim', '1994-02-13', 'Suzuki', '2007', '1200', 'Compacto', 'Eletrico', 'Prata', 'Gasolina', 'Sim', 'Nao', 'Sim', 'Sim', 'Sim', '2018-02-13 19:50:14'),
(34, 'Lavinia Antonella', '321.321.456-87', 'Feminino', '10 a 15', 'Viuvo', 'Sim', 'Nao', 'Nao', '1927-04-14', 'Hyundai', '2007', '20000', 'Minivan', 'Hidraulico', 'Branco', 'Diesel', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '2018-02-13 19:52:39'),
(35, 'AniÂ­bal Arnaldo', '780.098.888-00', 'Masculino', '5 a 10', 'Divorciado', 'Nao', 'Sim', 'Nao', '1984-10-04', 'Hyundai', '2008', '120000', 'Medio', 'Mecanico', 'Prata', 'Gasolina', 'Sim', 'Nao', 'Sim', 'Nao', 'Sim', '2018-02-13 19:57:48'),
(36, 'Airton Clarice', '888.888.999-99', 'Masculino', '20+', 'Viuvo', 'Sim', 'Nao', 'Nao', '1903-06-01', 'Chevrolet', '2005', '120000', 'Medio', 'Eletrico', 'Cinza', 'Etanol', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', '2018-02-13 19:59:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulariocontato`
--

CREATE TABLE `formulariocontato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formulariocontato`
--

INSERT INTO `formulariocontato` (`id`, `nome`, `email`, `telefone`, `assunto`, `mensagem`, `created_at`) VALUES
(7, 'Anselmo Alcides', 'alalcides@gmail.com', '5555555555', 'Atraso na resposta.', 'OlÃ¡, boa noite, vim atravÃ©s deste perguntar o porque de minha resposta sobre o seguro ainda nÃ£o ter chegado. Desde jÃ¡ agradeÃ§o!', '2018-02-13 20:04:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formularioresidencia`
--

CREATE TABLE `formularioresidencia` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `nascimento` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `salario` varchar(255) NOT NULL,
  `estadoCivil` varchar(255) NOT NULL,
  `pessoasMorando` varchar(255) NOT NULL,
  `localizacao` varchar(255) NOT NULL,
  `tipoDomicilio` varchar(255) NOT NULL,
  `tipoMoradia` varchar(255) NOT NULL,
  `ambiental` varchar(255) NOT NULL,
  `furto` varchar(255) NOT NULL,
  `incendio` varchar(255) NOT NULL,
  `concorda` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formularioresidencia`
--

INSERT INTO `formularioresidencia` (`id`, `nome`, `cpf`, `nascimento`, `genero`, `salario`, `estadoCivil`, `pessoasMorando`, `localizacao`, `tipoDomicilio`, `tipoMoradia`, `ambiental`, `furto`, `incendio`, `concorda`, `created_at`) VALUES
(2, 'Austin Santos', '129.000.000-22', '1991-06-15', 'Masculino', '5 a 10', 'Solteiro', '4', 'Zona Rural', 'Casa de 3 andares', 'Propria', 'Nao', 'Sim', 'Sim', 'Sim', '2018-02-13 19:10:38'),
(3, 'Hypnos Diamond', '123.222.123-45', '1968-11-09', 'Masculino', '10 a 15', 'Divorciado', '2', 'Centro', 'Casa de 2 andares', 'Propria', 'Nao', 'Sim', 'Nao', 'Sim', '2018-02-13 19:12:13'),
(4, 'JÃºpiter Saturnino', '098.657.876-45', '1931-12-19', 'Masculino', '10 a 15', 'ViÃºvo', '8', 'Zona Industrial', 'Casa', 'Propria', 'Sim', 'Nao', 'Nao', 'Sim', '2018-02-13 19:14:54'),
(5, 'Maluma Manuel', '645.765.343-34', '1983-03-10', 'NÃ£o BinÃ¡rio', '1 a 5', 'Solteiro', '1', 'Centro', 'Kitnet', 'Alugada', 'Nao', 'Sim', 'Nao', 'Sim', '2018-02-13 19:19:04'),
(6, 'Turiza den Adel', '123.654.876-00', '1989-06-05', 'Feminino', '10 a 15', 'Solteiro', '2', 'Centro', 'Apartamento', 'Propria', 'Nao', 'Sim', 'Sim', 'Sim', '2018-02-13 19:21:43'),
(7, 'Simone Simons', '453.726.736-55', '1977-10-16', 'Feminino', '1 a 5', 'ViÃºvo', '6', 'Suburbio', 'Apartamento', 'Parente/Amigo', 'Sim', 'Sim', 'Sim', 'Sim', '2018-02-13 19:23:02'),
(8, 'Thanatos Nyx', '630.726.888-00', '1903-04-15', 'Masculino', '10 a 15', 'ViÃºvo', '6', 'Zona Rural', 'Casa de 3 andares', 'Propria', 'Sim', 'Sim', 'Sim', 'Sim', '2018-02-13 19:25:12'),
(9, 'Nady Natini Natyly', '987.876.987-66', '1988-05-09', 'NÃ£o BinÃ¡rio', '5 a 10', 'Separado', '4', 'Suburbio', 'Kitnet', 'Alugada', 'Nao', 'Sim', 'Nao', 'Sim', '2018-02-13 19:29:28'),
(10, 'Jacinto Aquino Oliveira', '759.822.657-12', '1990-12-31', 'NÃ£o BinÃ¡rio', '5 a 10', 'ViÃºvo', '4', 'Zona Industrial', 'Casa', 'Parente/Amigo', 'Nao', 'Nao', 'Sim', 'Sim', '2018-02-13 19:35:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `usuario`, `senha`) VALUES
(3, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulariocarro`
--
ALTER TABLE `formulariocarro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulariocontato`
--
ALTER TABLE `formulariocontato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formularioresidencia`
--
ALTER TABLE `formularioresidencia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulariocarro`
--
ALTER TABLE `formulariocarro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `formulariocontato`
--
ALTER TABLE `formulariocontato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `formularioresidencia`
--
ALTER TABLE `formularioresidencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
