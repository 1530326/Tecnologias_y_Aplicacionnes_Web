-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-06-2018 a las 01:50:43
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examenu2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnas`
--

DROP TABLE IF EXISTS `alumnas`;
CREATE TABLE IF NOT EXISTS `alumnas` (
  `id_alumna` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_alumna`),
  KEY `id_grupo` (`id_grupo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnas`
--

INSERT INTO `alumnas` (`id_alumna`, `nombre`, `apellido`, `fecha_nacimiento`, `id_grupo`) VALUES
(5, 'Aremy', 'Martinez', '2012-10-28', 6),
(4, 'Sofia', 'Martinez', '2011-08-30', 4),
(6, 'Aimee', 'Carrizales', '2013-04-29', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `nombre`) VALUES
(6, '1B'),
(4, '1A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

DROP TABLE IF EXISTS `pagos`;
CREATE TABLE IF NOT EXISTS `pagos` (
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumna` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `nombre_mama` varchar(200) NOT NULL,
  `fecha_pago` date NOT NULL,
  `fecha_envio` datetime NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `folio` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pago`),
  KEY `id_alumna` (`id_alumna`),
  KEY `id_grupo` (`id_grupo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `id_alumna`, `id_grupo`, `nombre_mama`, `fecha_pago`, `fecha_envio`, `imagen`, `folio`) VALUES
(1, 4, 4, 'Nayeli Carrizales', '2018-06-20', '2018-06-22 06:28:58', 'Captura de pantalla (11).png', '1012'),
(2, 6, 6, 'Liliana PÃ©rez', '2018-06-21', '2018-06-22 06:31:32', 'views/img/Captura de pantalla (7).png', '1011');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `contra` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contra`) VALUES
(1, 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
