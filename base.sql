-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2016 a las 01:09:35
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `id_docente` varchar(10) NOT NULL DEFAULT '',
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `estado` varchar(5) NOT NULL,
  `fecha_registro` date NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`id_docente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `nombre`, `apellido`, `direccion`, `telefono`, `dui`, `cargo`, `email`, `estado`, `fecha_registro`, `password`) VALUES
('11', 'jkbjb', 'bjhbjh', '', 'bjh', 'hbhjb', '', 'ejemplo@gmail.com', '', '0000-00-00', ''),
('12', 'nkjnk', 'kjnkj', '', 'njkn', 'jnkjnk', '', 'ejemplo@gmail.com', '', '0000-00-00', ''),
('12345', 'Victor Manuel ', 'Garcia', 'Usulutan', '78945612', '123456789', '1', 'victor@gmail.com', '1', '0000-00-00', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
('5452154515', 'Willian Elixander', 'ArÃ©valo Torres', 'Colonia Santa Teresa polÃ­gono b casa  ', '70616232', '455455455', '2', 'willian@gmail.com', '1', '2016-06-03', '7890ab2d43d7ada3ae07b1c31cb5966f687b82a1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(60) NOT NULL,
  `estado` varchar(12) NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`, `estado`) VALUES
(1, 'Lenguaje y Literatura', 'Activado'),
(2, 'Matematica', 'Activado'),
(3, 'Ciencia y Salud y Medio Ambiente', 'Activado'),
(4, 'Estudios Sociales', 'Activado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE IF NOT EXISTS `salones` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `id_docente` varchar(10) NOT NULL,
  `nombre_salon` varchar(30) NOT NULL,
  `seccion` varchar(5) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `estado_salon` varchar(15) NOT NULL,
  PRIMARY KEY (`id_salon`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `salones`
--

INSERT INTO `salones` (`id_salon`, `id_docente`, `nombre_salon`, `seccion`, `turno`, `estado_salon`) VALUES
(31, '5452154515', 'Noveno', 'A', 'Matutino', 'Activado');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `salones`
--
ALTER TABLE `salones`
  ADD CONSTRAINT `salones_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
