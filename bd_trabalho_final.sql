-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bd_trabalho_final`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `senha`, `status`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `log_bd`
--

CREATE TABLE IF NOT EXISTS `log_bd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operacao` varchar(255) NOT NULL,
  `tabela` varchar(255) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `log_bd`
--

INSERT INTO `log_bd` (`id`, `operacao`, `tabela`, `data`) VALUES
(2, 'create', 'usuario_objeto', '2023-06-27'),
(3, 'update', 'usuario_objeto', '2023-06-27'),
(4, 'update', 'objeto', '2023-06-27'),
(5, 'create', 'usuario_objeto', '2023-06-27'),
(6, 'update', 'objeto', '2023-06-27'),
(7, 'update', 'usuario_objeto', '2023-06-27'),
(8, 'create', 'objeto', '2023-06-27'),
(9, 'update', 'objeto', '2023-06-27'),
(10, 'create', 'objeto', '2023-06-28'),
(11, 'create', 'objeto', '2023-06-28'),
(12, 'update', 'objeto', '2023-06-28'),
(13, 'create', 'usuario_objeto', '2023-06-28'),
(14, 'update', 'objeto', '2023-06-28'),
(15, 'create', 'usuario_objeto', '2023-06-28'),
(16, 'update', 'objeto', '2023-06-28'),
(17, 'create', 'usuario_objeto', '2023-06-28'),
(18, 'update', 'objeto', '2023-06-28'),
(19, 'create', 'usuario_objeto', '2023-06-28'),
(20, 'update', 'usuario_objeto', '2023-06-28'),
(21, 'update', 'objeto', '2023-06-28'),
(22, 'create', 'objeto', '2023-06-28'),
(23, 'update', 'objeto', '2023-06-28'),
(24, 'create', 'usuario', '2023-06-28'),
(25, 'update', 'usuario', '2023-06-28'),
(26, 'update', 'usuario_objeto', '2023-06-28'),
(27, 'update', 'objeto', '2023-06-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `objeto`
--

CREATE TABLE IF NOT EXISTS `objeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `link_imagem` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `objeto`
--

INSERT INTO `objeto` (`id`, `nome`, `quantidade`, `link_imagem`, `status`) VALUES
(1, 'Arduino Uno', 7, 'https://www.dedcomponentes.com.br/wp-content/uploads/2023/02/arduino_uno_r3_original_da_italia_ded_componentes.png', 1),
(2, 'Arduino Mega', 19, 'https://www.mamuteeletronica.com.br/media/catalog/product/cache/ff61517d26ace703648229d56c081b52/p/l/placa-arduino-mega-atmega2560-r3-ch340-com-cabo-usb-19549-15095_1.jpg', 1),
(3, 'Ponte H', 5, 'https://www.pontodaeletronica.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/o/modl298np.jpg', 1),
(4, 'Arduino Nano', 5, 'https://techsuleletronicos.com.br/wp-content/uploads/2018/11/device20_1000_1.jpg', 1),
(5, 'Protoboard', 16, 'https://http2.mlstatic.com/D_NQ_NP_833584-MLB47835394739_102021-O.webp', 1),
(6, 'LDR', 5, 'https://blogmasterwalkershop.com.br/wp-content/uploads/2018/06/img00_como_usar_com_arduino_fotoresistor_sensor_ldr_5mm_luz_uno_mega_2560_nano_leonardo.png', 1),
(7, 'DHT11', 7, 'https://www.institutodigital.com.br/wp-content/uploads/2020/11/dht11-modulo.jpg', 1),
(8, 'Chassi 2WD', 5, 'https://images.tcdn.com.br/img/img_prod/751846/kit_chassi_2wd_robo_para_arduino_1445_1_20201202141201.jpg', 1),
(9, 'Chassi 4WD', 7, 'https://cdn.awsli.com.br/600x700/468/468162/produto/19414234/kit-chassi-4wd-robo-para-arduino-1ebe2d25.jpg', 1),
(10, 'hc-sr04', 5, 'https://www.usinainfo.com.br/1017422-thickbox_default/sensor-ultrassonico-de-distancia-hc-sr04.jpg', 1),
(12, 'teste', 3, 'https://www.dedcomponentes.com.br/wp-content/uploads/2023/02/arduino_uno_r3_original_da_italia_ded_componentes.png', 1),
(13, 'Sensor Infravermelho', 20, 'https://www.eletrogate.com/sensor-de-obstaculo-reflexivo-infravermelho', 1),
(14, 'Raspberry Pi', 3, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcUFRUXGBcYGSEcGRoXGh0cHBkdHRodHSEcJBwgIiwjGx0pHRoaJDUkKS0vMjIyGiI4PTgxPCwxMi8BCwsLDw4PHBERHTQpIig0MTExMTM6MTExMTIxMzExMTEyMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMf/AABEIAKwBJQMBIgACEQEDEQH/', 1),
(15, 'Display de 7 Segmentos', 10, 'https://cdn.awsli.com.br/600x700/468/468162/produto/29852647/25bb7e4a7b.jpg', 1),
(16, 'Jumper', 0, 'teste', 1);

--
-- Gatilhos `objeto`
--
DROP TRIGGER IF EXISTS `insert_objeto`;
DELIMITER //
CREATE TRIGGER `insert_objeto` AFTER INSERT ON `objeto`
 FOR EACH ROW insert into log_bd values(NULL, "create", "objeto", CURRENT_DATE)
//
DELIMITER ;
DROP TRIGGER IF EXISTS `update_objeto`;
DELIMITER //
CREATE TRIGGER `update_objeto` AFTER UPDATE ON `objeto`
 FOR EACH ROW insert into log_bd values(null, "update", "objeto", current_date)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `status`) VALUES
(1, 'user', '123', 1),
(2, 'juliano', '123', 1),
(3, 'marcelo', '123', 1),
(4, 'junior', '123', 1),
(5, 'schaurich', '123', 1),
(7, 'teste', '123', 1),
(8, 'asd', '123', 1),
(9, 'exemplo', '123', 0);

--
-- Gatilhos `usuario`
--
DROP TRIGGER IF EXISTS `insert_usuario`;
DELIMITER //
CREATE TRIGGER `insert_usuario` AFTER INSERT ON `usuario`
 FOR EACH ROW insert into log_bd values(null, "create", "usuario", current_date)
//
DELIMITER ;
DROP TRIGGER IF EXISTS `update_usuario`;
DELIMITER //
CREATE TRIGGER `update_usuario` AFTER UPDATE ON `usuario`
 FOR EACH ROW insert into log_bd values(null, "update", "usuario", current_date)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_objeto`
--

CREATE TABLE IF NOT EXISTS `usuario_objeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_objeto` int(11) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `quantidade_objeto` int(11) NOT NULL,
  `data_reserva` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `usuario_objeto`
--

INSERT INTO `usuario_objeto` (`id`, `id_objeto`, `nome_usuario`, `quantidade_objeto`, `data_reserva`) VALUES
(13, 7, 'user', 0, '2023-06-23'),
(14, 1, 'user', 0, '2023-06-23'),
(15, 9, 'user', 0, '2023-06-23'),
(16, 8, 'user', 0, '2023-06-23'),
(17, 7, 'user', 0, '2023-06-23'),
(18, 2, 'user', 0, '2023-06-23'),
(19, 1, 'user', 0, '2023-06-23'),
(20, 2, 'user', 0, '2023-06-23'),
(21, 2, 'juliano', 0, '2023-06-25'),
(22, 1, 'user', 0, '2023-06-26'),
(23, 5, 'user', 0, '2023-06-27'),
(24, 1, 'user', 10, '2023-06-27'),
(25, 1, 'user', 3, '2023-06-28'),
(26, 2, 'user', 1, '2023-06-28'),
(27, 7, 'user', 0, '2023-06-28'),
(28, 5, 'user', 0, '2023-06-28');

--
-- Gatilhos `usuario_objeto`
--
DROP TRIGGER IF EXISTS `insert_usuario_objeto`;
DELIMITER //
CREATE TRIGGER `insert_usuario_objeto` AFTER INSERT ON `usuario_objeto`
 FOR EACH ROW insert into log_bd values(null, "create", "usuario_objeto", current_date)
//
DELIMITER ;
DROP TRIGGER IF EXISTS `update_usuario_objeto`;
DELIMITER //
CREATE TRIGGER `update_usuario_objeto` AFTER UPDATE ON `usuario_objeto`
 FOR EACH ROW insert into log_bd values(null, "update", "usuario_objeto", current_date)
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
