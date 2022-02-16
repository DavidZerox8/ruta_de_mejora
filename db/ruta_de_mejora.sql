-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2017 a las 01:41:01
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ruta_de_mejora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1a`
--

CREATE TABLE `1a` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1b`
--

CREATE TABLE `1b` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2a`
--

CREATE TABLE `2a` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2b`
--

CREATE TABLE `2b` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3a`
--

CREATE TABLE `3a` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3b`
--

CREATE TABLE `3b` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4a`
--

CREATE TABLE `4a` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estructura de tabla para la tabla `4b`
--

CREATE TABLE `4b` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estructura de tabla para la tabla `5a`
--

CREATE TABLE `5a` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `5b`
--

CREATE TABLE `5b` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `5c`
--

CREATE TABLE `5c` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `6a`
--

CREATE TABLE `6a` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `6b`
--

CREATE TABLE `6b` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `6c`
--

CREATE TABLE `6c` (
  `id` int(100) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `asistencia` int(10) NOT NULL,
  `participacion` int(10) NOT NULL,
  `desempeno` int(10) NOT NULL,
  `lectura` int(10) NOT NULL,
  `c_matematica` int(10) NOT NULL,
  `convivencia` int(10) NOT NULL,
  `escritura` int(10) NOT NULL,
  `riesgo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `grupo` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cargo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `grupo`, `user`, `clave`, `cargo`) VALUES
(19, 'David Mart&iacute;nez L&oacute;pez', 'XD', 'root', 'f9538345ef14f01f74faeb475e5e35bb', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `1a`
--
ALTER TABLE `1a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `1b`
--
ALTER TABLE `1b`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2a`
--
ALTER TABLE `2a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2b`
--
ALTER TABLE `2b`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `3a`
--
ALTER TABLE `3a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `3b`
--
ALTER TABLE `3b`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `4a`
--
ALTER TABLE `4a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `4b`
--
ALTER TABLE `4b`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `5a`
--
ALTER TABLE `5a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `5b`
--
ALTER TABLE `5b`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `5c`
--
ALTER TABLE `5c`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `6a`
--
ALTER TABLE `6a`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `6b`
--
ALTER TABLE `6b`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `6c`
--
ALTER TABLE `6c`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `1a`
--
ALTER TABLE `1a`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `1b`
--
ALTER TABLE `1b`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `2a`
--
ALTER TABLE `2a`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `2b`
--
ALTER TABLE `2b`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `3a`
--
ALTER TABLE `3a`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `3b`
--
ALTER TABLE `3b`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `4a`
--
ALTER TABLE `4a`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `4b`
--
ALTER TABLE `4b`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `5a`
--
ALTER TABLE `5a`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `5b`
--
ALTER TABLE `5b`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `5c`
--
ALTER TABLE `5c`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `6a`
--
ALTER TABLE `6a`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `6b`
--
ALTER TABLE `6b`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `6c`
--
ALTER TABLE `6c`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
