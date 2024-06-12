-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2023 a las 16:53:11
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
-- Base de datos: `tecnijuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `rol` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `usuario`, `contrasena`, `rol`, `estado`) VALUES
(1, 'david gonzalez', 'davidgd', '1234567', 1, 'activo'),
(2, 'samuel', 'sgp', '2859660', 2, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(1, 'JUEGOS'),
(2, 'PC'),
(3, 'Portatiles'),
(4, 'Consolas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `correo`, `contraseña`) VALUES
(1, 'David', 'davidgonzalezdiaz23@gmail.com', 'david23'),
(3, 'Samuel', 'samuel@gmail.com', 'spp'),
(5, 'JUAnes', 'juanes@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `texto` text DEFAULT NULL,
  `fecha_comentario` date DEFAULT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_cliente`, `nombre`, `texto`, `fecha_comentario`, `correo`) VALUES
(6, NULL, 'david', 'si', '2023-05-23', 'davidgonzalezdiaz2305@gmail.co'),
(7, NULL, 'juan', 'no tengo nequi', '2023-11-02', 'juan@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `fecha_compra` date DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `fecha_compra`, `cantidad`, `total`) VALUES
(1, NULL, NULL, '100.00'),
(2, NULL, NULL, '200.00'),
(3, NULL, NULL, '300.00'),
(4, NULL, NULL, '235.00'),
(5, NULL, NULL, '335.00'),
(6, NULL, NULL, '335.00'),
(7, NULL, NULL, '335.00'),
(8, NULL, NULL, '335.00'),
(9, NULL, NULL, '335.00'),
(10, NULL, NULL, '435.00'),
(11, NULL, NULL, '300.00'),
(12, NULL, NULL, '300.00'),
(13, NULL, NULL, '300.00'),
(14, NULL, NULL, '300.00'),
(15, NULL, NULL, '300.00'),
(16, NULL, NULL, '150.00'),
(17, NULL, NULL, '150.00'),
(18, NULL, NULL, '150.00'),
(19, NULL, NULL, '150.00'),
(20, NULL, NULL, '150.00'),
(21, NULL, NULL, '150.00'),
(22, NULL, NULL, '150.00'),
(23, NULL, NULL, '250.00'),
(24, NULL, NULL, '100.00'),
(25, NULL, NULL, '200000'),
(26, NULL, NULL, '100000'),
(27, NULL, NULL, '470000'),
(28, NULL, NULL, '555000'),
(29, NULL, NULL, '555000'),
(30, NULL, NULL, '555000'),
(31, NULL, NULL, '555000'),
(32, NULL, NULL, '150'),
(33, NULL, NULL, '150'),
(34, NULL, NULL, '150'),
(35, NULL, NULL, '150'),
(36, NULL, NULL, '15000'),
(37, NULL, NULL, '250000'),
(38, NULL, NULL, '250000'),
(39, NULL, NULL, '100000'),
(40, NULL, NULL, '200000'),
(41, NULL, NULL, '300000'),
(42, NULL, NULL, '15000'),
(43, NULL, NULL, '100000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_detalles`
--

CREATE TABLE `compras_detalles` (
  `id_compra_detalle` int(11) NOT NULL,
  `id_compra` int(11) DEFAULT NULL,
  `id_detalle` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `producto` varchar(30) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras_detalles`
--

INSERT INTO `compras_detalles` (`id_compra_detalle`, `id_compra`, `id_detalle`, `id_cliente`, `producto`, `total`) VALUES
(1, NULL, NULL, NULL, '', 0),
(2, NULL, NULL, NULL, '', 0),
(3, NULL, NULL, NULL, '', 0),
(4, NULL, NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_pedido`
--

CREATE TABLE `detalles_pedido` (
  `id_detalle` int(11) NOT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `precio_producto` int(11) NOT NULL,
  `fecha_pedido` date DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` int(12) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `foto`, `id_categoria`) VALUES
(22, 'Forza Horizon MotorSport', 'Construye mejor que la competencia en una carrera profesional totalmente nueva. Compite con tus amigos en multijugador. Compite con más de 500 coches en circuitos de fama mundial con una IA de vanguardia y una física avanzada.', 150000, '20231102171425.jpg', 1),
(23, 'Read Dead Redemption 2', 'Red Dead Redemption 2 es un videojuego de acción-aventura de temática western ambientado en un entorno de mundo abierto y jugado desde una perspectiva en tercera persona (con posibilidad de primera persona e incluso eliminar el HUD), con componentes para un jugador y multijugador en línea.', 100000, '20231102171624.jpg', 1),
(25, 'Fifa 23', 'FIFA 23 presenta cierto grado de jugabilidad en línea multiplataforma. Está disponible en FIFA Ultimate Team (FUT) Division Rivals (excluyendo cooperativo), FUT Champions, FUT Ultimate Online Draft, FUT Online Friendlies (excluyendo Co-Op), FUT Play a Friend, Online Friendlies, Online Seasons (excluyendo Co-Op), FUT Play a Friend, Online Friendlies, Online Seasons (excluyendo -Op Seasons) y la Bundesliga Virtual', 100000, '20231102172317.jpg', 1),
(29, 'nnnnnnnnnnn', 'nnnnn', 444444, '20231102180317.jpg', NULL),
(30, 'fffffffffff', 'ffffffffffffffffff', 2147483647, '20231108191914.jpg', NULL),
(31, 'nba', 'llll', 2147483647, '20231108203746.jpg', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `compras_detalles`
--
ALTER TABLE `compras_detalles`
  ADD PRIMARY KEY (`id_compra_detalle`),
  ADD KEY `id_compra` (`id_compra`),
  ADD KEY `id_detalle` (`id_detalle`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `compras_detalles`
--
ALTER TABLE `compras_detalles`
  MODIFY `id_compra_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `compras_detalles`
--
ALTER TABLE `compras_detalles`
  ADD CONSTRAINT `compras_detalles_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id_compra`),
  ADD CONSTRAINT `compras_detalles_ibfk_2` FOREIGN KEY (`id_detalle`) REFERENCES `detalles_pedido` (`id_detalle`),
  ADD CONSTRAINT `compras_detalles_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  ADD CONSTRAINT `detalles_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`),
  ADD CONSTRAINT `detalles_pedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `detalles_pedido_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
