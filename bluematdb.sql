-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2019 a las 19:20:13
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bluematdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ceramicos`
--

CREATE TABLE `ceramicos` (
  `id` int(11) NOT NULL,
  `medidaa` varchar(25) NOT NULL,
  `medidab` varchar(25) NOT NULL,
  `medidac` varchar(25) NOT NULL,
  `medidad` varchar(25) NOT NULL,
  `medidae` varchar(25) NOT NULL,
  `medidaf` varchar(25) NOT NULL,
  `codigos` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ceramicos`
--

INSERT INTO `ceramicos` (`id`, `medidaa`, `medidab`, `medidac`, `medidad`, `medidae`, `medidaf`, `codigos`) VALUES
(1, '60CM x 60CMa', '80CM x 80CMa', '1M x 1Ma', '60CM x 120 CMa', '', '', 'IVORY60X60, WHITE60X60, BOTT60X60, BLACK60X60, CARR60X60, MARQ60X60, 1229, 1230, 1202, 07AW1, 07AW1X, SHG-66E0101Q, SHG-66E0401Q, SHG-66E0501Q, JD66130'),
(2, '15CM X 60CM', '15CM X 80CM', '15CM X 90CM', '16,5CM X 101CM', '20CM X 120CM', '23,20CM X 120CM', 'N1501, N1503, L156001, 1242, 15X80CLA, 15X80FR, 15X80OSC, 15X90CLA, 15X90OSC, 15X90FR, 20X120CLA, 20X120OSC, 20X120FR'),
(3, '60CM X 60CM', '30CM X 60CM', '60CM X 120CM', '80CM X 80CM', '', '', 'N1501, N1503, L156001, 1242, 15X80CLA, 15X80FR, 15X80OSC, 15X90CLA, 15X90OSC, 15X90FR, 20X120CLA, 20X120OSC, 20X120FR'),
(4, '60CM X 60CM', '30CM X 60CM', '60CM X 120CM', '', '', '', 'N1501, N1503, L156001, 1242, 15X80CLA, 15X80FR, 15X80OSC, 15X90CLA, 15X90OSC, 15X90FR, 20X120CLA, 20X120OSC, 20X120FR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'fleisman', 'CPANEL@676');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ceramicos`
--
ALTER TABLE `ceramicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ceramicos`
--
ALTER TABLE `ceramicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
