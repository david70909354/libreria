-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2024 a las 17:38:56
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
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios2`
--

CREATE TABLE `usuarios2` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios2`
--

INSERT INTO `usuarios2` (`id`, `email`, `PASSWORD`) VALUES
(1, 'rormoren3@gmail.com', '$2y$10$VpTQ2UnFtMw5fZqRqyc1B.cgDdnsaOWI/EAys8W31mLQ/v60mphdS'),
(2, 'rormoreno2@gmail.com', '$2y$10$1kEiNbmNTUCnn0/4Mal/YuuUhQYvqSQR.9QNw9pEOMT.khPlWXuZ.'),
(3, 'rormoreno3@gmail.com', '$2y$10$Wx1HXIoxw7EF9zfc7SEdC.PTdp64C/8aX8j85/1wG5rPQB5X5KiuG'),
(4, 'jualgo@gmail.com', '$2y$10$tE/1crOAoUbDECWEyu26MOhrK09L5B6GQUU.GJDgxq9pCW4O85OWO'),
(5, 'nora@gmail.com', '$2y$10$3OIj7sMakZRyVatkJG3NAudMW4yXKX8BFyCEPcU1TDwSz3vAcxamC'),
(6, 'economo@gmail.com', '$2y$10$fw2KQMTYv8ONOj.zYC9l9.DFgIjRZZFgsm8sQSg1OwWpGB5ABIBMW'),
(7, 'maria@gmail.com', '$2y$10$RdFrQ1o5bb3gROOFFEFGH.ADSNgxc.xOnkUE4Wh6jvJIoLCVO/7be'),
(8, 'ana2@gmail.com', '$2y$10$s7rZX/31yVmGnkHGpne4IeU6hSLLL3eYb48HdwjYp06KZTjqeoytG'),
(9, 'rormoreno2@gmail.com', '$2y$10$.UnDFIeAF49uEtMAeU3.wecBhaX3oi1WI68xNzFosH8Ac.ndG94YC'),
(10, 'lola@gmail.com', '$2y$10$m6dcL3a.a.kCCNCt1yxrfeZMZUA8GIoaW962rFA.sR7rrDH1nGocm'),
(11, 'rormoreno2@gmail.com', '$2y$10$M4IsexvNdUaEs2wRO66EBOIHHhdGMYjwWGpEYLKXrehwCIFi8gpX2'),
(12, 'rormoreno3@gmail.com', '$2y$10$TC3.qa7h4BY4cHy.373ZZe0DVuOUu7Cylc70.d7UIftfRqeStKLHW'),
(13, 'ana@gmail.com', '$2y$10$ZGovEVuGj5/FZrDYAliv8ugz9rgRbHkFc2uec5/Z4bdH9Fx84CB8.'),
(14, 'ana3@gmail.com', '$2y$10$uRetx36x4YhQhIHjY4A9TuVUvEAZuprm0YODDPfgCa.YcI.EB7y5m'),
(15, 'sara@gmail.com', '$2y$10$yjFdivgCPuSp6n3LhAT7FOTfIlXWs6IWtVRoolSkJ6R0N7YKgKbt2'),
(16, 'roman@gmail.com', '$2y$10$r6mhSRwOcAtJnkL5hrg6F.wXPJIxi8DmS5EYIkdCqGkkX5NQlPOIy'),
(17, 'juan@gmail.com', '$2y$10$5xwus9GOQSbTevhAsoy.6Ob5u1A3y4INeK6OeWxbi4LJzT..Npt/O'),
(18, 'roman@gmail.com', '$2y$10$J0oxSbpLcOOCi2UQKGN6keXRcHZssTivQEsubghgLvXzZfJ.tvRei'),
(19, 'ronaldo@gmail.com', '$2y$10$kw/Hw8w3vZT60U2mAE0ZyOZardwMLoK4t6iNAou/ZD66A..SqlmiS'),
(20, 'carlos@gmail.com', '$2y$10$7GU9Q9rt7s0xsInSci7AE.5wdkLsOpCXeqc8IJt1WoRR3Pcu5PYvi'),
(21, 'fabiola@gmail.com', '$2y$10$.wI1SKsL35fpf0bhs19y..SBYmMnbnVfSslK7pR0ywP1AVN6VJR4a'),
(22, 'jualgo4@gmail.com', '$2y$10$hW8AO0snsOWct3whUmUr4utk1FWATTRwnhXiStj8pyx0GhXFURAhK'),
(23, 'david@gmail.com', '$2y$10$hwIrkTUp67J9g4fxz98acuRjO/UgxpElXUnopqwdvpwzFzL6iG6dC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios2`
--
ALTER TABLE `usuarios2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios2`
--
ALTER TABLE `usuarios2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
