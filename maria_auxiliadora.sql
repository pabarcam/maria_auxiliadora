-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2023 a las 18:49:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maria_auxiliadora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_ingresos`
--

CREATE TABLE `control_ingresos` (
  `ingreso_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `control_ingresos`
--

INSERT INTO `control_ingresos` (`ingreso_id`, `id`, `fecha`, `hora`) VALUES
(1, 1, '2023-10-08', '19:16:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`nombre`, `apellido`, `id`) VALUES
('Juan', 'Peréz', 1),
('Paulo', 'Abarca', 2),
('Felipe', 'Díaz', 5),
('Felipe', 'Díaz', 6),
('Felipe', 'Díaz', 7),
('Felipe', 'Díaz', 8),
('José', 'Tapia', 9),
('Fernando', 'Gonzalez', 11),
('Fernando', 'Gonzalez', 12),
('Javier', 'Barra', 13),
('Javier', 'Barra', 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `control_ingresos`
--
ALTER TABLE `control_ingresos`
  ADD PRIMARY KEY (`ingreso_id`),
  ADD KEY `id_docente` (`id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `control_ingresos`
--
ALTER TABLE `control_ingresos`
  MODIFY `ingreso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `control_ingresos`
--
ALTER TABLE `control_ingresos`
  ADD CONSTRAINT `id_docente` FOREIGN KEY (`id`) REFERENCES `docentes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
