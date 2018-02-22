-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2018 a las 10:54:34
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `codigoAutor` int(11) NOT NULL,
  `nombreAutor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`codigoAutor`, `nombreAutor`, `foto`) VALUES
(1, 'Martin Scorsese', 'scorsese.png'),
(2, 'Zack Snyder', 'snyder.png'),
(3, 'Tim Burton', 'burton.png'),
(4, 'Steven Spielberg', 'spielberg.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `codigoObra` int(11) NOT NULL,
  `nombreObra` text COLLATE utf8_spanish_ci NOT NULL,
  `duracion` int(10) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `codigoAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`codigoObra`, `nombreObra`, `duracion`, `imagen`, `codigoAutor`) VALUES
(1, '300', 117, '300.png', 2),
(2, 'El lobo de wall street', 180, 'lobo.png', 1),
(3, 'Jurassic Park', 120, 'jurassic.png', 4),
(4, 'Indiana Jones', 115, 'indiana.png', 4),
(5, 'Charlie y la fabrica de chocolate', 150, 'charlie.png', 3),
(6, 'Sombras tenebrosas', 120, 'sombras.png', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `descripcion` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`login`, `password`, `nombre`, `admin`, `descripcion`) VALUES
('adrian', '$2y$10$V.FpK7thOsqfK3Tp2H.gK.duxYlQNQBqwq39BlP68oILQIBnv.cga', 'adrian lobato', 1, 'ADMIN'),
('diego', '$2y$10$c5mStPp0FshL3PQHaCtzS.NbEW8epEre7lSx/glGrZgvo47edDP/q', '', 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`codigoAutor`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`codigoObra`),
  ADD KEY `codigoAutor` (`codigoAutor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `fk_autor` FOREIGN KEY (`codigoAutor`) REFERENCES `autor` (`codigoAutor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
