-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2018 a las 07:10:55
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foodrinks`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsa`
--

CREATE TABLE `bolsa` (
  `idBolsa` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `productoBolsa` varchar(50) NOT NULL,
  `precioBolsa` double NOT NULL,
  `imgBolsa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bolsa`
--

INSERT INTO `bolsa` (`idBolsa`, `user`, `productoBolsa`, `precioBolsa`, `imgBolsa`) VALUES
(1, '1', 'Piña mediana', 5.5, 'img/articulos/piña.png'),
(2, '1', 'Vino Tinto', 250, 'img/articulos/vinotrump.png'),
(4, '2', 'Leche Alpura', 23.5, 'img/articulos/lecherosa.png'),
(5, '2', 'Corn Flakes', 20, 'img/articulos/cornflakes.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idCompra` int(11) NOT NULL,
  `direccionComprador` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoComprador` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `codigoComprador` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombreComprador` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`idCompra`, `direccionComprador`, `telefonoComprador`, `codigoComprador`, `nombreComprador`) VALUES
(1, 'hbhj', 'poh', '8954', '1'),
(2, 'hbhj', 'poh', '8954', '1'),
(3, '324324', 'r324324', '3324', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `producto`, `precio`, `img`) VALUES
(1, 'Mango manila', 5.5, 'img/articulos/mango.png'),
(2, 'Piña mediana', 5.5, 'img/articulos/piña.png'),
(3, 'Leche Alpura', 23.5, 'img/articulos/lecherosa.png'),
(4, 'Queso Panela', 15.5, 'img/articulos/quesopa.png'),
(5, 'Corn Flakes', 20, 'img/articulos/cornflakes.png'),
(6, 'Harina de Trigo', 32.25, 'img/articulos/harinat.jpg'),
(7, 'Jugo Bida', 9, 'img/articulos/jugobida.png'),
(8, 'Agua Ciel', 6, 'img/articulos/ciel600.png'),
(9, 'Jabón Dove', 20.5, 'img/articulos/dove.jpg'),
(10, 'Shampoo ', 60, 'img/articulos/tresseme.png'),
(11, 'Heineken', 200, 'img/articulos/heinekensix.png'),
(12, 'Vino Tinto', 250, 'img/articulos/vinotrump.png'),
(13, 'USB Kingston', 85, 'img/articulos/sandisk.png'),
(14, 'Estufa', 4500, 'img/articulos/acrosses.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoUsuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `userUsuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correoUsuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `passUsuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `apellidoUsuario`, `userUsuario`, `correoUsuario`, `passUsuario`) VALUES
(1, 'prueba', 'prueba', 'prueba', 'prueba', 'prueba'),
(2, 'Fernanda ', 'Juárez Tirado', 'ferchis', 'fernanda@gmail.com', 'ferchis');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bolsa`
--
ALTER TABLE `bolsa`
  ADD PRIMARY KEY (`idBolsa`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bolsa`
--
ALTER TABLE `bolsa`
  MODIFY `idBolsa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
