-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2018 a las 18:41:25
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica8`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `matricula` char(7) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `carrera` int(11) NOT NULL,
  `tutor` char(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`matricula`, `nombre`, `carrera`, `tutor`) VALUES
('1530326', 'Angela Judith', 1, '0000001'),
('1530150', 'Brian', 1, '0000001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_tutoria`
--

CREATE TABLE `alumno_tutoria` (
  `id` int(11) NOT NULL,
  `id_tutoria` int(11) NOT NULL,
  `alumno` char(7) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno_tutoria`
--

INSERT INTO `alumno_tutoria` (`id`, `id_tutoria`, `alumno`, `tipo`) VALUES
(1, 6, '1530326', 'Grupal'),
(2, 6, '1530150', 'Grupal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `nombre`) VALUES
(1, 'IngenierÃ­a en TecnologÃ­as de la InformaciÃ³n'),
(2, 'IngenierÃ­a en MecatrÃ³nica'),
(3, 'IngenierÃ­a en Sistemas Automotrices'),
(4, 'IngenierÃ­a en TecnologÃ­as de la Manufactura'),
(5, 'Licenciatura en PequeÃ±as y Medianas Empresas'),
(6, 'MaestrÃ­a en EnergÃ­as Renovables'),
(7, 'MaestrÃ­a en IngenierÃ­a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `num_empleado` char(7) NOT NULL,
  `carrera` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contra` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`num_empleado`, `carrera`, `nombre`, `email`, `contra`) VALUES
('0000001', 1, 'Mario Humberto', 'mario@mario.com', 'mario123'),
('0000002', 2, 'Yahir', 'yahir@yahir.com', 'yahir123'),
('000000', 1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE `tutoria` (
  `id` int(11) NOT NULL,
  `tutor` char(7) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `temas` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tutoria`
--

INSERT INTO `tutoria` (`id`, `tutor`, `fecha`, `hora`, `temas`) VALUES
(6, '0000001', '2018-05-31', '10:00:00', 'PruebaActualizar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `carrera` (`carrera`),
  ADD KEY `tutor` (`tutor`);

--
-- Indices de la tabla `alumno_tutoria`
--
ALTER TABLE `alumno_tutoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tutoria` (`id_tutoria`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`num_empleado`),
  ADD KEY `carrera` (`carrera`);

--
-- Indices de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutor` (`tutor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno_tutoria`
--
ALTER TABLE `alumno_tutoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
