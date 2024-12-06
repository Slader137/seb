-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2024 a las 21:13:29
-- Versión del servidor: 8.0.40
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int NOT NULL,
  `id_producto` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `contraseña`, `apellido`, `correo`) VALUES
(1, 'asadasd', 'asdads', '', 'asdasd.exe@gmail.com'),
(2, 'Franco', '1234', '', 'franco.exe@gmail.com'),
(3, 'Franco', '1234', '', 'franco.exe@gmail.com'),
(4, 'Franco', '1234', '', 'franco.exe@gmail.com'),
(5, 'Francoasd', '1234', 'Benitezasd', ''),
(6, 'Francoasd', '1234', 'Benitezasd', 'franco.exe@gmsail.com'),
(7, '', '', '', ''),
(8, 'asdasd', 'asdasd', 'asdasd', 'asd.exe@asdasd.com'),
(9, 'asdasd', 'asdd', 'Silva', 'asd.exe@asdasd.com'),
(10, 'Sebastian', 'asdd', 'Silva', 'aSSSd.exe@asdasd.com'),
(11, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(12, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(13, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(14, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(15, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(16, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(17, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(18, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(19, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(20, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(21, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(22, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(23, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(24, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(25, 'Sebastian', 'moneda', 'Silva', 'cinc.exe@gmail.com'),
(26, '', '', 'Benitez', ''),
(27, 'Jose', 'moneda', 'Hortiga', 'jose.exe@gmail.com'),
(28, 'Jose', 'moneda', 'Hortiga', 'jose.exe@gmail.com'),
(29, 'Jose', 'moneda', 'Hortiga', 'jose.exe@gmail.com'),
(30, 'Jose', 'moneda', 'Hortiga', 'jose.exe@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int NOT NULL,
  `categoria` varchar(25) DEFAULT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `categoria`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'entradas', 'Empanadas', '(unidad) De carne, pollo, jamón y queso, o espinaca.', 500),
(2, 'entradas', 'Vithel toné', 'Carne de peceto con salsa de atún, alcaparras y mayonesa casera.', 2500),
(3, 'entradas', 'Matambre arrollado con rusa', 'Matambre relleno con verduras, huevo y especias acompañado de ensalada rusa', 2800),
(4, 'sopas', 'Locro', 'Clásico guiso criollo con maíz blanco, zapallo, carne de cerdo y vaca, embutidos y especias.', 2500),
(5, 'sopas', 'Sopa de humita cremosa:', 'Crema de maíz fresco con un toque de queso criollo.', 3000),
(6, 'sopas', 'Sopa de lentejas y panceta', 'Lentejas cocidas lentamente con panceta ahumada, chorizo colorado y especias', 3500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;