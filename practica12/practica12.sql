-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-06-2018 a las 22:52:25
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
  `id_tienda` int(11) NOT NULL,
  PRIMARY KEY (`id_categoria`),
  KEY `id_tienda` (`id_tienda`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `descripcion`, `fecha_agregado`, `id_tienda`) VALUES
(27, 'Celulares', 'Disp. mÃ³viles', '2018-06-10', 1),
(28, 'LÃ­nea Blanca', 'ArtÃ­culos de lÃ­nea blanca', '2018-06-10', 2),
(29, 'Interiores', 'ArtÃ­culos para interiores', '2018-06-10', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_venta`
--

DROP TABLE IF EXISTS `detalles_venta`;
CREATE TABLE IF NOT EXISTS `detalles_venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_producto` (`id_producto`),
  KEY `id_venta` (`id_venta`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalles_venta`
--

INSERT INTO `detalles_venta` (`id`, `id_producto`, `id_venta`, `nombre`, `cantidad`, `precio`) VALUES
(8, 20, 6, 'Librero', 2, 4064),
(3, 21, 2, 'Moto G6+', 1, 0),
(5, 21, 3, 'Moto G6+', 1, 0),
(9, 19, 6, 'Refrigerador MABE', 1, 7800),
(10, 20, 7, 'Librero', 1, 4064);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

DROP TABLE IF EXISTS `historial`;
CREATE TABLE IF NOT EXISTS `historial` (
  `id_historial` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nota` varchar(255) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_historial`),
  KEY `id_producto` (`id_producto`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_tienda` (`id_tienda`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `id_producto`, `id_usuario`, `id_tienda`, `fecha`, `nota`, `referencia`, `cantidad`) VALUES
(14, 16, 19, 1, '2018-06-10', 'Agregar salida', 'kdhw290', 3),
(15, 21, 15, 1, '2018-06-10', 'Agregar entrada', 'fwgeg443', 5),
(16, 16, 15, 1, '2018-06-10', 'Agregar entrada', 'p200002', 7);

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
  `id_tienda` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_categoria` (`id_categoria`),
  KEY `id_tienda` (`id_tienda`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo_producto`, `nombre`, `fecha_agregado`, `precio`, `stock`, `id_categoria`, `foto`, `id_tienda`) VALUES
(16, '000001', 'Moto G4+', '2018-06-10', 4500, 7, 27, 'views/tools/img/angie.png', 1),
(20, '000005', 'Librero', '2018-06-10', 4064, 1, 29, 'views/tools/img/angie.png', 2),
(19, '000004', 'Refrigerador MABE', '2018-06-10', 7800, 5, 28, 'views/tools/img/start.png', 2),
(21, '000002', 'Moto G6+', '2018-06-10', 6000, 10, 27, 'views/tools/img/motorola-moto-g4-.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

DROP TABLE IF EXISTS `tienda`;
CREATE TABLE IF NOT EXISTS `tienda` (
  `id_tienda` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_tienda`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id_tienda`, `nombre`, `direccion`, `fecha`) VALUES
(1, 'Sucursal Centro', 'Av. Centro 476', '2018-06-10'),
(2, 'Sucursal Noreste', 'Av.  Noreste 123', '2018-06-10');

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
  `tipo_usuario` varchar(100) NOT NULL,
  `id_tienda` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_tienda` (`id_tienda`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `nombre_usuario`, `contra`, `email`, `fecha_agregado`, `foto`, `tipo_usuario`, `id_tienda`) VALUES
(13, 'Administrador', 'AD', 'admin', 'admin', 'admin@admin.com', '2018-06-09', 'views/tools/img/angie2.png', 'admin', NULL),
(15, 'Angela', 'Carrizales', 'Angie', 'angie123', 'angie@angie.com', '2018-06-10', 'views/tools/img/angie.png', 'normal', 1),
(16, 'Brian', 'Becerra', 'Brian', 'brian123', 'brian@brian.com', '2018-06-10', 'views/tools/img/angie.png', 'normal', 2),
(19, 'Mario', 'RodrÃ­guez', 'Mario', 'mario', 'mario@mario.com', '2018-06-10', 'views/tools/img/angie.png', 'normal', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `total` double NOT NULL,
  `id_tienda` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tienda` (`id_tienda`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `total`, `id_tienda`) VALUES
(6, '2018-06-10', 15928, 2),
(7, '2018-06-10', 4064, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
