-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-06-2018 a las 05:48:55
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica12`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `fecha_agregado` date NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `descripcion`, `fecha_agregado`) VALUES
(1, 'LÃ­nea Blanca', 'CategorÃ­a de lÃ­nea blanca :)', '2018-06-05'),
(3, 'Celulares', 'CategorÃ­as de telÃ©fonos mÃ³vil', '2018-06-05'),
(5, 'ElectrodomÃ©sticos', 'CategorÃ­a electrodomÃ©sticos ', '2018-06-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

DROP TABLE IF EXISTS `historial`;
CREATE TABLE IF NOT EXISTS `historial` (
  `id_historial` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nota` varchar(255) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_historial`),
  KEY `id_producto` (`id_producto`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `id_producto`, `id_usuario`, `fecha`, `nota`, `referencia`, `cantidad`) VALUES
(1, 1, 5, '2018-06-05', 'Agregar stock', 'p100001', 3),
(3, 2, 5, '2018-06-05', 'Agregar entrada', 'p200002', 6),
(4, 2, 5, '2018-06-05', 'Agregar salida', 'p2000021', 4),
(5, 4, 5, '2018-06-05', 'Agregar salida', 'p300031', 2),
(6, 1, 5, '2018-06-05', 'Agregar salida', 'p100023', 3),
(7, 1, 5, '2018-06-06', 'Agregar entrada', '7394h', 10),
(8, 6, 12, '2018-06-06', 'Agregar salida', '008829', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_producto` char(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_agregado` date NOT NULL,
  `precio` double(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `foto` varchar(300) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo_producto`, `nombre`, `fecha_agregado`, `precio`, `stock`, `id_categoria`, `foto`) VALUES
(2, '000002', 'Samsung Galaxy s9', '2018-06-05', 12500, 5, 3, 'views/tools/img/product.png'),
(5, '000003', 'Refrigerador MABE', '2018-06-06', 8363, 7, 1, 'views/tools/img/product.png'),
(6, '000001', 'Moto G4+', '2018-06-06', 4500, 7, 3, 'views/tools/img/product.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nombre_usuario` varchar(70) NOT NULL,
  `contra` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `fecha_agregado` date NOT NULL,
  `foto` varchar(300) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `nombre_usuario`, `contra`, `email`, `fecha_agregado`, `foto`) VALUES
(5, 'Angela', 'Carrizales', 'angie', 'angie123', 'angie@angie.com', '2018-06-05', 'views/tools/img/avatar2.png'),
(6, 'Brian', 'Becerra', 'eli', 'brian123', 'brian@brian.com', '2018-06-05', 'views/tools/img/avatar04.png'),
(11, 'ejemplo', 'ejemplo1xd', 'ejem', 'ejemplo', 'ejemplo@ejemplo.com', '2018-06-06', 'views/tools/img/avatar.png'),
(12, 'Mario', 'RodrÃ­guez', 'mario', 'mario', 'mario@mario.com', '2018-06-06', 'views/tools/img/user2-160x160.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
