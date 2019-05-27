-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2019 a las 06:14:50
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `market`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `item` bigint(20) UNSIGNED NOT NULL,
  `codprod` varchar(8) COLLATE utf8_bin NOT NULL,
  `nomprod` varchar(60) COLLATE utf8_bin NOT NULL,
  `cantprod` smallint(6) DEFAULT '0',
  `pcosto` double DEFAULT NULL,
  `imagen` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`item`, `codprod`, `nomprod`, `cantprod`, `pcosto`, `imagen`) VALUES
(8, '10230015', 'VARILLA CORRUGADA 11 MM X 6 M DIACO', 50, 12920, ''),
(9, '10230016', 'CHIPA 1/4 DIACO', 200, 2750, ''),
(10, '10230017', 'TEJA PVC ADRI N 8 MARFIL 2.44 M', 20, 27727, ''),
(11, '10230018', 'TEJA PVC ADRI N 10 MARFIL 3.05 M', 20, 34748, ''),
(12, '10230019', 'TEJA PVC ADRI N 12 MARFIL 3.65 M', 20, 41650, ''),
(13, '10230020', 'TEJA AJONIT AJOVER N 10 CRISTAL 3.05 M', 20, 49266, ''),
(14, '10230021', 'TEJA AJONIT AJOVER N 8 CRISTAL 2.44 M', 20, 39508, ''),
(15, '10230022', 'CEMENTO GRIS X 50 KG TEQUENDAMA', 100, 22200, ''),
(16, '10230023', 'CHIPA 3/8 DIACO', 200, 2750, ''),
(19, '10230026', 'TEJA TECHOLIT N 8 ETERNIT 2.44 M', 20, 17850, ''),
(21, '10230028', 'TEJA RURALITA TRAPEZOIDAL ROJA N 10', 9, 39700, ''),
(22, '10230029', 'TEJA MARCOLITA TIPO ZINC N 12 GERFOR 3.66 M', 12, 38630, ''),
(23, '10230030', 'TEJA MARCOLITA TIPO ZINC N 10 GERFOR 3.06 M', 10, 33902, ''),
(24, '10230031', 'TEJA MARCOLITA TIPO ZINC N 8 GERFOR 2.44 M', 9, 25827, ''),
(25, '10230032', 'ALAMBRE CENTELSA N 14 X 100 M', 6, 73000, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(30) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(30) COLLATE utf8_bin NOT NULL,
  `nit` int(15) NOT NULL,
  `gender` varchar(1) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `photo` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `firstname`, `lastname`, `nit`, `gender`, `email`, `password`, `photo`) VALUES
(10, 'santiago', 'rosero', 123, '', 'santiago_12@hotmail.com', '$2y$10$JdKzqYX1I9vMO01wsjUjsuJXSOFvjZVH09.rNMglrxz', 'images/'),
(11, 'santaigo42012', '123123', 1231231, '', 'frhy@yyhqweqweee', '$2y$10$aHLI3PU4nL/sCadScErgXu41YYI.5Kc.N6O8HmoZXBm', 'images/dbz.png'),
(12, 'hyhyhyhy', 'hyhyhyhyhyhy', 12333323, '', 'frhy@yyhhhdhdhd', '$2y$10$nH.VHxmGOisrZ6yEv7BK8eYx571T6b/SFTZrYCrsWJl', 'images/dbz.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`item`),
  ADD UNIQUE KEY `codprod` (`codprod`),
  ADD UNIQUE KEY `nomprod` (`nomprod`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `item` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
