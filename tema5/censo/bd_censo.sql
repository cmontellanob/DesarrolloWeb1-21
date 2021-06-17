-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2021 a las 22:57:24
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_censo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departamento` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `departamento`) VALUES
(1, 'CHUQUISACA'),
(2, 'LA PAZ'),
(3, 'COCHABAMBA'),
(4, 'ORURO'),
(5, 'POTOSÍ'),
(6, 'TARIJA'),
(7, 'SANTA CRUZ'),
(8, 'BENI'),
(9, 'PANDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provincia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iddepartamento` bigint(20) UNSIGNED NOT NULL,
  `poblacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `provincia`, `iddepartamento`, `poblacion`) VALUES
(1, 'Oropeza', 1, 330000),
(2, 'Azurduy', 1, 545),
(3, 'Zudáñez', 1, 5454),
(4, 'Tomina', 1, 5),
(5, 'Hernando Siles', 1, 455),
(6, 'Yamparaez', 1, 8),
(7, 'Nor Cinti', 1, 0),
(8, 'Belisario Boeto', 1, 45),
(9, 'Sur Cinti', 1, 6),
(10, 'Luis Calvo', 1, 45),
(11, 'Murillo', 2, 0),
(12, 'Omasuyos', 2, 0),
(13, 'Pacajes', 2, 0),
(14, 'Camacho', 2, 0),
(15, 'Muñecas', 2, 0),
(16, 'Larecaja', 2, 0),
(17, 'Franz Tamayo', 2, 0),
(18, 'Ingavi', 2, 0),
(19, 'Loayza', 2, 0),
(20, 'Inquisivi', 2, 0),
(21, 'Sud Yungas', 2, 0),
(22, 'Los Andes', 2, 0),
(23, 'Aroma', 2, 0),
(24, 'Nor Yungas', 2, 0),
(25, 'Abel Iturralde', 2, 0),
(26, 'Bautista Saavedra', 2, 0),
(27, 'Manco Kapac', 2, 0),
(28, 'Gualberto Villarroel', 2, 0),
(29, 'Gral. Jose Manuel Pando', 2, 0),
(30, 'Caranavi', 2, 0),
(31, 'Cercado', 3, 0),
(32, 'Campero', 3, 0),
(33, 'Ayopaya', 3, 0),
(34, 'Esteban Arze', 3, 0),
(35, 'Arani', 3, 0),
(36, 'Arque', 3, 0),
(37, 'Capinota', 3, 0),
(38, 'German Jordan', 3, 0),
(39, 'Quillacollo', 3, 0),
(40, 'Chapare', 3, 0),
(41, 'Tapacari', 3, 0),
(42, 'Carrasco', 3, 0),
(43, 'Mizque', 3, 0),
(44, 'Punata', 3, 0),
(45, 'Bolivar', 3, 0),
(46, 'Tiraque', 3, 0),
(47, 'Avaroa', 4, 0),
(48, 'Carangas', 4, 0),
(49, 'Sajama', 4, 0),
(50, 'Litoral', 4, 0),
(51, 'Poopo', 4, 0),
(52, 'Pantaleon Dalence', 4, 0),
(53, 'Ladislao Cabrera', 4, 0),
(54, 'Atahuallpa', 4, 0),
(55, 'Saucari', 4, 0),
(56, 'Tomas Barron', 4, 0),
(57, 'Sur Carangas', 4, 0),
(58, 'San Pedro de Totora', 4, 0),
(59, 'Sebastian Pagador', 4, 0),
(60, 'Mejillones', 4, 0),
(61, 'Nor Carangas', 4, 0),
(62, 'Cercado', 4, 0),
(63, 'Tomas Frias', 5, 0),
(64, 'Rafael Bustillo', 5, 0),
(65, 'Cornelio Saavedra', 5, 0),
(66, 'Chayanta', 5, 0),
(67, 'Charcas', 5, 0),
(68, 'Nor Chichas', 5, 0),
(69, 'Alonso de Ibañez', 5, 0),
(70, 'Sud Chichas', 5, 0),
(71, 'Nor Lipez', 5, 0),
(72, 'Sud Lipez', 5, 0),
(73, 'Jose Maria Linares', 5, 0),
(74, 'Antonio Quijarro', 5, 0),
(75, 'Gral. Bernardino Bilbao', 5, 0),
(76, 'Daniel Campos', 5, 0),
(77, 'Modesto Omiste', 5, 0),
(78, 'Enrique Baldivieso', 5, 0),
(79, 'Arce', 6, 0),
(80, 'Gran Chaco', 6, 0),
(81, 'Avilez', 6, 0),
(82, 'Mendez', 6, 0),
(83, 'Burnet O connor', 6, 0),
(84, 'Cercado', 6, 0),
(85, 'Andres Ibañez', 7, 0),
(86, 'Warnes', 7, 0),
(87, 'Velasco', 7, 0),
(88, 'Ichilo', 7, 0),
(89, 'Chiquitos', 7, 0),
(90, 'Sara', 7, 0),
(91, 'Cordillera', 7, 0),
(92, 'Valle Grande', 7, 0),
(93, 'Florida', 7, 0),
(94, 'Obispo Santistéban', 7, 0),
(95, 'Ñuflo de Chavez', 7, 0),
(96, 'Angel Sandoval', 7, 0),
(97, 'Manuel Maria Caballero', 7, 0),
(98, 'German Busch', 7, 0),
(99, 'Guarayos', 7, 0),
(100, 'Vaca Diez', 8, 0),
(101, 'Gral. Jose Ballivian', 8, 0),
(102, 'Yacuma', 8, 0),
(103, 'Moxos', 8, 0),
(104, 'Marban', 8, 0),
(105, 'Mamore', 8, 0),
(106, 'Itenez', 8, 0),
(107, 'Cercado', 8, 0),
(108, 'Nicolas Suarez', 9, 0),
(109, 'Manuripi', 9, 0),
(110, 'Madre de Dios', 9, 0),
(111, 'Abuna', 9, 0),
(112, 'Gral. Federico Roman', 9, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provincias_iddepartamento_foreign` (`iddepartamento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `provincias_iddepartamento_foreign` FOREIGN KEY (`iddepartamento`) REFERENCES `departamentos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
