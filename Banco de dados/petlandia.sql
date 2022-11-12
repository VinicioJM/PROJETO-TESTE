-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Abr-2020 às 16:49
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petlandia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `codAge` int(10) NOT NULL,
  `dataAge` datetime NOT NULL,
  `horaAge` time NOT NULL,
  `codUs` int(10) NOT NULL,
  `codAni` int(10) NOT NULL,
  `codOng` int(10) NOT NULL,
  `nomeUs` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`codAge`, `dataAge`, `horaAge`, `codUs`, `codAni`, `codOng`, `nomeUs`) VALUES
(49, '2020-04-04 23:06:00', '23:06:00', 6, 92, 34, 'Lilica'),
(50, '2020-06-30 04:06:00', '04:06:00', 22, 96, 36, 'test2'),
(51, '2020-06-20 05:22:00', '05:22:00', 6, 93, 31, 'Lilica'),
(52, '2020-04-30 06:00:00', '06:00:00', 6, 93, 31, 'Lilica'),
(53, '2020-04-29 06:59:00', '06:59:00', 22, 93, 31, 'test2'),
(54, '2020-04-22 20:20:00', '20:20:00', 23, 100, 40, 'tes4'),
(55, '2020-06-04 20:00:00', '20:00:00', 22, 101, 39, 'test2'),
(56, '2020-04-22 04:40:00', '04:40:00', 6, 94, 35, 'Lilica'),
(57, '2020-06-01 04:05:00', '04:05:00', 6, 94, 35, 'Vilson'),
(58, '2020-05-19 00:00:00', '00:00:00', 24, 104, 41, 'medda'),
(59, '2020-05-29 12:00:00', '12:00:00', 24, 104, 41, 'medda'),
(60, '0000-00-00 00:00:00', '00:00:00', 6, 103, 31, 'Vilson'),
(61, '2020-04-22 20:20:00', '20:20:00', 6, 103, 31, 'Vilson'),
(62, '0000-00-00 00:00:00', '00:00:00', 0, 0, 0, ''),
(63, '2020-04-22 05:44:00', '05:44:00', 6, 100, 40, 'Vilson'),
(64, '2020-04-22 20:20:00', '20:20:00', 6, 105, 42, 'Vilson');

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `codAni` int(10) NOT NULL,
  `nomeAni` varchar(100) COLLATE utf8_bin NOT NULL,
  `racaAni` varchar(50) COLLATE utf8_bin NOT NULL,
  `tipoAni` varchar(50) COLLATE utf8_bin NOT NULL,
  `idadeAni` int(10) NOT NULL,
  `descricaoAni` varchar(100) COLLATE utf8_bin NOT NULL,
  `fotoAni` varchar(200) COLLATE utf8_bin NOT NULL,
  `cod_Ong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`codAni`, `nomeAni`, `racaAni`, `tipoAni`, `idadeAni`, `descricaoAni`, `fotoAni`, `cod_Ong`) VALUES
(92, 'Lilica', 'Pitbul', 'Cachorro', 12, 'Ã‰ um amor', '9473ce82361d43b95be48ecadf643f50.png', 34),
(93, 'test', 'Pastror alemÃ£o', 'Cachorro', 12, 'sdmkldafjjxdjodofij', '0279b27aa8c6562a6296476c0e592a92.png', 31),
(96, 'Rex', 'Pitbul', 'Cachorro', 15, 'Ele Ã© muito perigoso ', 'e3cd3e0fe9c1525d19049a167c7fa1e5.jpeg', 36),
(97, 'tor', 'Pitbul', 'Cachorro', 12, 'bravo', '35687a331ea00d39bb5c1299f50c9d6e.png', 37),
(98, 'abc', 'abc', 'Cachorro', 22, 'grande bravo e raivoso', 'a557aeea3c483ae9d9c512b608e868dc.png', 38),
(100, 'tes5', 'Poodle', 'Cachorro', 12, 'Ã‰ um amor', '57d7768076f2236882aa01852e2b935b.png', 40),
(103, 'Lilica', 'Poodle', 'Cachorro', 12, 'Ã‰ um amor', 'd8a7b1179edf23e0d61275ced27c8678.png', 31),
(104, 'tor', 'Pastror alemÃ£o', 'Cachorro', 15, 'bravo e legal', '4302fbd4395f3e0b45b58ee7e778207d.png', 41),
(105, 'Rex', 'Pastror alemÃ£o', 'Cachorro', 12, 'Ele Ã© muito perigoso ', '4ca66ad052f970f08dfdbf680ebc6e78.png', 42);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ong`
--

CREATE TABLE `ong` (
  `codOng` int(10) NOT NULL,
  `nomeOng` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cnpjcpfOng` varchar(50) CHARACTER SET latin1 NOT NULL,
  `telefoneOng` varchar(20) CHARACTER SET latin1 NOT NULL,
  `logradouroOng` varchar(100) CHARACTER SET latin1 NOT NULL,
  `bairroOng` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cidadeOng` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cepOng` varchar(20) CHARACTER SET latin1 NOT NULL,
  `emailOng` varchar(100) CHARACTER SET latin1 NOT NULL,
  `usuarioOng` varchar(20) CHARACTER SET latin1 NOT NULL,
  `senhaOng` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `ong`
--

INSERT INTO `ong` (`codOng`, `nomeOng`, `cnpjcpfOng`, `telefoneOng`, `logradouroOng`, `bairroOng`, `cidadeOng`, `cepOng`, `emailOng`, `usuarioOng`, `senhaOng`) VALUES
(31, 'Vinicio Justino Molina', '4865656+232', '(15)5656554656', 'Rua bobo', 'Ciddaa', 'Cerquilho', '18520-000', 'vinicio_jm_@hotmail.com', 'VIni', '123'),
(32, 'Vinicio Justino Molina', '4865656+232', '(15)5656554656', 'Rua bobo', 'Ciddaa', 'vv', '18520-000', 'med.oliveira@hotmail.com', 'VIni', '1'),
(33, 'Montagem e manutenÃ§Ã£o de Computadores', '4865656+232', '(15)5656554656', 'Rua bobo', 'Ciddaa', 'Cerquilho', '18520-000', 'med.oliveira@hotmail.com', 'VIni', '123'),
(34, 'ANIMAIS EM DIA', '4865656+232', '(15)5656554656', 'Rua AFonso 3', 'Ciddaad', 'Cerquilho', '18520-000', 'dia@gmail.com', 'dia', '123'),
(35, 'meddalyn', '998989989', '1599787898', 'Rua vime', 'colinas', 'Cerquilho', '18520000', 'meddalyn.oliveira16@gmail.com', 'medvini', '4321'),
(36, 'AnimaisDoDia', '45626554588', '(15)665626333', 'Rua A Fonso 3', 'jardim Alianca', 'Cerquilho', '18520-000', 'animaisdodia@gmail.com', 'dia', '998084180'),
(37, 'pet dog and cat', '9897878988', '1123456789', 'rua luis globo n878', 'vitoria', 'sao paulo', '12345999', 'pet@gmail.com', 'Pet', 'pet123'),
(38, 'hfhkf', '23456789', '123456789', 'wedfvc ', 'sxc v', 'xcv ', '1234567', 'abc@gmail.com', 'abc', 'abc'),
(39, 'test1', '4865656+232', '(15)5656554656', 'Rua bobo', 'Ciddaa', 'Cerquilho', 'vv', 'test1@hotmail.com', 'VIni', '123'),
(40, 'test3', '4865656+232', '(15)5656554656', 'Rua bobo', 'Ciddaa', 'Cerquilho', '18520-000', 'test3@hotmail.com', 'VIni', '123'),
(41, 'medd', '1234567890', '1111111111', 'roque rodrigues', 'jardim Alianca', 'sao paulo', '12345999', 'med.oliveira2@hotmail.com', 'med', 'med'),
(42, 'SOL', '4865656+232', '(15)998235656', 'Rua Pedro de Nadai', 'Cidade JArdim ', 'Cerquilho', '18520-000', 'vini@gmail.com', 'VIni', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codUs` int(10) NOT NULL,
  `nomeUs` varchar(100) CHARACTER SET latin1 NOT NULL,
  `telefoneUs` varchar(20) CHARACTER SET latin1 NOT NULL,
  `emailUs` varchar(100) CHARACTER SET latin1 NOT NULL,
  `usuarioUs` varchar(20) CHARACTER SET latin1 NOT NULL,
  `senhaUs` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codUs`, `nomeUs`, `telefoneUs`, `emailUs`, `usuarioUs`, `senhaUs`) VALUES
(6, 'Vilson', '(15)5656554656', 'med.oliveira@hotmail.com', 'v', 'm'),
(7, 'Montagem e manutenÃ§Ã£o de Computadores', 'vv', 'viniciomolina1999@gmail.com', 'VIni', '123'),
(8, 'Vinicio Justino Molina', '(15)5656554656', 'viniciomolina1999@gmail.com', 'vv', '123'),
(9, 'Vinicio Justino Molina', '(15)5656554656', 'vinicio_jm_@hotmail.com', 'VIni', '123'),
(10, 'Vinicio Justino Molina', '(15)5656554656', 'vinicio_jm_@hotmail.com', 'VIni', '123'),
(11, 'Vinicio Justino Molina', '(15)5656554656', 'vinicio_jm_@hotmail.com', 'VIni', '123'),
(12, 'Vinicio Justino Molina', '(15)5656554656', 'vinicio_jm_@hotmail.com', 'VIni', '223'),
(13, 'Vinicio Justino Molina', '(15)5656554656', 'vinicio_jm_@hotmail.com', 'VIni', '123'),
(14, 'Curso de JAVA', 'cc', 'vinicio_jm_@hotmail.com', 'cc', '123'),
(15, 'Vinicio Justino Molina', '(15)5656554656', 'vinicio_jm_@hotmail.com', 'VIni', '123'),
(16, 'Sssssd', 'sdsds', 'diaaaaa@gmail.com', 'dsdsd', '111'),
(17, 'meddalyn', '15996044045', 'meddalyn.oliveira15@gmail.com', 'meddalyn', '1234'),
(18, 'Mario Bros', '(15)65655322', 'mariobros@gmail.com', 'Bros', '12588'),
(19, 'Curso de JAVA', '(15)5656554656', 'vinicio_jm_@hotmail.com', 'VIni', 'mmmmmmmm'),
(20, 'dey', '23456789', 'dey@gmail.com', 'dey', 'dey123'),
(21, 'Lilica', '(15)5656554656', 'abcd@gmail.com', 'VIni', 'abcd'),
(22, 'test2', '(15)5656554656', 'test2@hotmail.com', 'aaaaa', '123'),
(23, 'tes4', '(15)5656554656', 'test4@hotmail.com', 'VIni', '123'),
(24, 'medda', '1599652555', 'med.oliveira3@hotmail.com', 'medda', 'medda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`codAge`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`codAni`);

--
-- Indexes for table `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`codOng`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `codAge` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `codAni` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `ong`
--
ALTER TABLE `ong`
  MODIFY `codOng` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
