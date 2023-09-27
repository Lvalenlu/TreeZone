-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2023 a las 23:53:15
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `treezone`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `airs`
--

CREATE TABLE `airs` (
  `id` int(11) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `airs`
--

INSERT INTO `airs` (`id`, `level`) VALUES
(4, 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_sectors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectors`
--

CREATE TABLE `sectors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount_trees` int(11) NOT NULL,
  `length` varchar(10) NOT NULL,
  `latlng` varchar(10) NOT NULL,
  `id_airs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sectors`
--

INSERT INTO `sectors` (`id`, `name`, `amount_trees`, `length`, `latlng`, `id_airs`) VALUES
(3, 'Usaquén', 100, '-74.0336', '4.6927', 4),
(4, 'Chapinero', 100, '-74.0616', '4.6371', 4),
(5, 'Santa Fe', 100, '-74.0760', '4.6011', 4),
(6, 'San Cristóbal', 100, '-74.0656', '4.5520', 4),
(7, 'Usme', 100, '-74.1101', '4.4975', 4),
(8, 'Tunjuelito', 100, '-74.1348', '4.5703', 4),
(9, 'Bosa', 100, '-74.2050', '4.6220', 4),
(10, 'Kennedy', 100, '-74.1496', '4.6310', 4),
(11, 'Fontibón', 100, '-74.1410', '4.6736', 4),
(12, 'Engativá', 100, '-74.1180', '4.7016', 4),
(13, 'Suba', 100, '-74.1007', '4.7549', 4),
(14, 'Barrios Unidos', 100, '-74.0754', '4.6706', 4),
(15, 'Teusaquillo', 100, '-74.0884', '4.6461', 4),
(16, 'Los Mártires', 100, '-74.1001', '4.6048', 4),
(17, 'Antonio Nariño', 100, '-74.1007', '4.5936', 4),
(18, 'Puente Aranda', 100, '-74.1117', '4.6162', 4),
(19, 'La Candelaria', 100, '-74.0733', '4.5966', 4),
(20, 'Rafael Uribe Uribe', 100, '-74.1124', '4.5722', 4),
(21, 'Ciudad Bolívar', 100, '-74.1537', '4.5098', 4),
(22, 'Sumapaz', 100, '-74.3643', '4.0177', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `residence` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `email`, `password`, `residence`) VALUES
(1, 'Laura', 'Bustos Henao', 'lvalenlu02@gmail.com', '123', ''),
(15, 'milton', 'gonzalez', 'milton@gmail.com', 'asd', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `airs`
--
ALTER TABLE `airs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_sectors` (`id_sectors`);

--
-- Indices de la tabla `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_airs` (`id_airs`) USING BTREE;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `airs`
--
ALTER TABLE `airs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`id_sectors`) REFERENCES `sectors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
