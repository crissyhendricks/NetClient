-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2020 a las 15:17:02
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `netclient`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_pwd` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_pwd`, `client_phone`) VALUES
(1, 'ALFA_SA', '1234', 789654123),
(2, 'BETA_SA', '4321', 545312123),
(3, 'GAMMA_SA', '4231', 582147639);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contract`
--

CREATE TABLE `contract` (
  `contract_id` int(11) NOT NULL,
  `contract_sap_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `contract_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_start_date` date NOT NULL,
  `contract_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contract`
--

INSERT INTO `contract` (`contract_id`, `contract_sap_id`, `client_id`, `contract_description`, `contract_start_date`, `contract_end_date`) VALUES
(1, 90001, 1, 'Logística 029312312', '2020-07-02', '2020-07-31'),
(2, 90002, 1, 'Compra-Venta 927365313', '2020-07-29', '2020-07-31'),
(3, 90003, 2, 'Tareas 21323232', '2020-07-16', '2020-10-16'),
(4, 90004, 2, 'contrato de prestación de servicios profesionales', '2020-10-09', '2020-10-16'),
(5, 90004, 1, '30% contrato a subcontratas', '2020-08-22', '2020-09-19'),
(6, 90005, 3, 'Contrato nº2312312321 ', '2020-07-16', '2020-07-30'),
(7, 90006, 3, 'Contrato Alta 23123312', '2020-07-30', '2020-08-27'),
(8, 90007, 2, 'Contrato Alta 73736521312', '2020-07-24', '2020-07-24'),
(9, 90008, 3, 'SA. Contrato externo A12', '2020-07-31', '2020-08-20'),
(10, 90009, 3, 'SA. Contrato externo A12', '2020-07-17', '2020-08-28'),
(11, 90010, 1, 'Contrato Standard ALFA_SA', '2020-07-15', '2020-07-30'),
(12, 90011, 2, 'Contrato Standard BETA_SA', '2020-07-30', '2020-07-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pwd`) VALUES
(1, 'audax', '4GRxphEiPBd0HzBwmAouag==');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indices de la tabla `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contract`
--
ALTER TABLE `contract`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
