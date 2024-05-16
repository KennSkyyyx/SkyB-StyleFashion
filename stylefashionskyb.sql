-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2024 a las 05:33:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stylefashionskyb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajero`
--

CREATE TABLE `cajero` (
  `Caje_id` int(11) NOT NULL COMMENT 'id del cajero',
  `Caje_Dni` varchar(255) DEFAULT NULL COMMENT 'Dni del cajero actual',
  `Caje_Usuario` varchar(255) DEFAULT NULL COMMENT 'Usuario del cajero',
  `Caje_Direccion` varchar(255) DEFAULT NULL COMMENT 'Direccion del cajero, por si se necesita',
  `Caje_Correo` varchar(255) DEFAULT NULL COMMENT 'Direccion del correo eletronico del cajero',
  `Caje_PedidosRealizados` int(11) DEFAULT NULL COMMENT 'Cajero visualiza los pedidos realizados',
  `Caje_PreciodePedidos` decimal(10,2) DEFAULT NULL COMMENT 'cajero registra los precios de los productos',
  `Caje_Contraseña` varchar(255) DEFAULT NULL COMMENT 'Contraseña del cajero'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cajero`
--

INSERT INTO `cajero` (`Caje_id`, `Caje_Dni`, `Caje_Usuario`, `Caje_Direccion`, `Caje_Correo`, `Caje_PedidosRealizados`, `Caje_PreciodePedidos`, `Caje_Contraseña`) VALUES
(1, '8234782784', 'Sky', 'calle 157', 'ferrerskaynet@gmail.com', NULL, NULL, '123'),
(2, '8234782784', 'Alex Flores', 'calle 157', 'floresalx@gmail.com', NULL, NULL, '123'),
(3, '86855234245', 'Gian Carlos', 'Cl 100 KR 30-10', 'gianjsadjk1@gmail.com', NULL, NULL, '444'),
(4, '8934582345', 'Camila Morales', 'Cl 55 kr30-10', 'camilahdu@gmail.com', NULL, NULL, '563'),
(5, '903894221', 'Adriana Martinez', 'Kr 15 cl 145-10', 'adriana834dd@gmail.com', NULL, NULL, '8565'),
(6, '4575734523', 'Juan Reina', 'Cl 99 kr 45-55', 'reinajag@gmail.com', NULL, NULL, '5875'),
(7, '4585352342', 'Luis Bernal', 'kr 2 cl 12-10', 'bernal13123lis@gmail.com', NULL, NULL, '3634');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajero_producto`
--

CREATE TABLE `cajero_producto` (
  `Caje_id` int(11) NOT NULL,
  `id_Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Client_id` int(11) NOT NULL COMMENT 'id del cliente',
  `Client_Usuario` varchar(255) DEFAULT NULL COMMENT 'Usuario de los cliente',
  `Client_Dni` varchar(255) DEFAULT NULL COMMENT 'Dni de los clientes',
  `Client_Direccion` varchar(255) DEFAULT NULL COMMENT 'Direccion de los clientes',
  `Client_Correo` varchar(255) DEFAULT NULL COMMENT 'Direccion del correo electronico de los clientes',
  `Client_Numero` varchar(255) DEFAULT NULL COMMENT 'Numero telefonico de los clientes',
  `Caje_id` int(11) DEFAULT NULL COMMENT 'id del cajero'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Client_id`, `Client_Usuario`, `Client_Dni`, `Client_Direccion`, `Client_Correo`, `Client_Numero`, `Caje_id`) VALUES
(1, 'Kenner', '1080650749', 'Carrera 8 ', 'cecilferrer12@gmail.com', '3224197138', NULL),
(2, 'Brayan Bernal', '1082345099', 'Carrera 1 ', 'brayan1231gmail.com', '3212312138', NULL),
(5, 'Daniel Felipe', '4734523527', 'calle 189 cl54-2', 'danielfeli@mgial.com', '3224185639', NULL),
(6, 'Luciana Pérez', '6348289489', 'Carrera 5B #131-11', 'perezluci2@gmail.com', '3127588992', NULL),
(7, 'Fernando Becerra', '1252462346', 'cl 159 #65-1', 'becerrajahsd@gmail.com', '3204947145', NULL),
(8, 'Ivan Flores', '8936898925', 'cl 200 #30-2', 'ivan131the23@gmail.com', '3196481932', NULL),
(9, 'Lana Dustinn', '8234899111', 'Cl 10 #2-55', 'dusttinn7131@gmail.com', '3226584911', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id_Factura` int(11) NOT NULL COMMENT 'id de la factura',
  `Fac_MetodoPago` varchar(255) DEFAULT NULL COMMENT 'Metodo en la que se realiza el pago',
  `Fac_DetallesClient` varchar(255) DEFAULT NULL COMMENT 'Una breve descripción del cliente',
  `Fac_ProductoVendido` varchar(255) DEFAULT NULL COMMENT 'Nick del producto vendido',
  `Fac_Precio` decimal(10,2) DEFAULT NULL COMMENT 'Precio del producto en la factura',
  `Fac_Fecha` date DEFAULT NULL COMMENT 'Fecha en la que se realizó la factura',
  `Caje_id` int(11) DEFAULT NULL COMMENT 'id del cajero'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_Factura`, `Fac_MetodoPago`, `Fac_DetallesClient`, `Fac_ProductoVendido`, `Fac_Precio`, `Fac_Fecha`, `Caje_id`) VALUES
(1, 'Efectivo ', 'Hombre ', 'Pantalon Negro Jean', 75.00, '2024-04-17', 1),
(2, 'Efectivo ', 'Mujer', 'Blusa Azul Women', 50.00, '2024-04-21', 2),
(3, 'Efectivo ', 'Hombre ', 'Jogger Beige', 80.00, '2024-04-10', 3),
(4, 'Efectivo ', 'Hombre', 'Chaqueta Men', 190.00, '2024-04-27', 4),
(5, 'Efectivo ', 'Mujer', 'Vestido Black Women', 150.00, '2024-04-18', 5),
(6, 'Efectivo ', 'Hombre ', 'Camisa Negra Oversize', 40.00, '2024-04-17', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL COMMENT 'Id del pedido',
  `id_Client` int(11) DEFAULT NULL COMMENT 'id del cliente que hizo el pedido',
  `Ped_FechaEntrega` date DEFAULT NULL COMMENT 'Fecha en la que se entrega el pedido',
  `Ped_DireccionEntrega` varchar(255) DEFAULT NULL COMMENT 'Direccion en la que se entrega el pedido',
  `Ped_Total` int(14) DEFAULT NULL COMMENT 'El total del pedido',
  `Ped_Estado` varchar(255) DEFAULT NULL COMMENT 'Estado actual del pedido',
  `Ped_Metodo` varchar(255) DEFAULT NULL COMMENT 'Metodo del pedido',
  `id_Producto` int(11) NOT NULL COMMENT 'ID del producto relacionado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_Client`, `Ped_FechaEntrega`, `Ped_DireccionEntrega`, `Ped_Total`, `Ped_Estado`, `Ped_Metodo`, `id_Producto`) VALUES
(3, 1, '2024-04-10', 'Carrera 8B #157-10', 3, NULL, 'Débito', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_Producto` int(11) NOT NULL COMMENT 'id del producto ',
  `Product_Nombre` varchar(255) DEFAULT NULL COMMENT 'Nombre del producto seleccionado',
  `Product_CantidadStock` int(11) DEFAULT NULL COMMENT 'Cantidad del stock que hay en el momento de los productos',
  `Product_Precio` decimal(10,2) DEFAULT NULL COMMENT 'Precios de los productos registrados',
  `Product_Categoria` varchar(255) DEFAULT NULL COMMENT 'Categoría de los productos ',
  `Product_CodigoBarra` varchar(255) DEFAULT NULL COMMENT 'Codigo de barra que contiene cada producto',
  `Product_Descripcion` text DEFAULT NULL COMMENT 'Una breve descripcion del producto',
  `Product_Proveedor` varchar(255) DEFAULT NULL COMMENT 'Nick del proveedor',
  `Caje_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_Producto`, `Product_Nombre`, `Product_CantidadStock`, `Product_Precio`, `Product_Categoria`, `Product_CodigoBarra`, `Product_Descripcion`, `Product_Proveedor`, `Caje_id`) VALUES
(1, 'Pantalon Negro Jean', 1000, 75.00, 'Ropa Hombre', '81923812849', 'Pantalon Negro', 'A111', 1),
(2, 'Blusa Azul Women', 100, 50.00, 'Ropa Mujer', '87378535', 'Blusa Azul', 'A11', 1),
(3, 'Jogger Beige', 100, 80.00, 'Ropa Hombre', '7237823', 'Sudadera Beigs', 'B2', 1),
(4, 'Chaqueta Men', 100, 190.00, 'Ropa Hombre', '5784463', 'Chaquera cuero', 'A2', 1),
(5, 'Vestido Black Women', 100, 150.00, 'Ropa Mujer', '87378535', 'Vestido Negro', 'A1', 1),
(6, 'Camisa Negra Oversize', 100, 40.00, 'Ropa Hombre', '93895892', 'Camisa Negra', 'B1', 1),
(7, 'Vestido Women H&M', 25, 150.00, 'Ropa Mujer', '8348953489', 'Vestido amarillo para mujer', 'A2', 1),
(8, 'Sudadera Black', 50, 30.00, 'Ropa mixta', '78247821', 'Sudadera Negra', 'A2', 1),
(9, 'Camisa Azul H&M', 122, 80.00, 'Ropa Hombre', '78178311', 'Camisa azul', 'A1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id_Valoracion` int(11) NOT NULL COMMENT 'id de la valoracion',
  `id_Client` int(11) DEFAULT NULL COMMENT 'id del cliente que hizo la valoracion',
  `id_Producto` int(11) DEFAULT NULL COMMENT 'id del producto',
  `Val_Puntuacion` int(11) DEFAULT NULL COMMENT 'Puntuacion de la valoracion',
  `Val_Comentario` text DEFAULT NULL COMMENT 'Comentarios de la valoracion',
  `Val_Fecha` date DEFAULT NULL COMMENT 'Fecha en la que se hizo la valoracion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id_Valoracion`, `id_Client`, `id_Producto`, `Val_Puntuacion`, `Val_Comentario`, `Val_Fecha`) VALUES
(9, 1, 5, 3, 'muy buena calidad', '2024-04-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion_producto`
--

CREATE TABLE `valoracion_producto` (
  `id_Valoracion` int(11) NOT NULL COMMENT 'ID de la valoración',
  `id_Producto` int(11) NOT NULL COMMENT 'ID del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cajero`
--
ALTER TABLE `cajero`
  ADD PRIMARY KEY (`Caje_id`);

--
-- Indices de la tabla `cajero_producto`
--
ALTER TABLE `cajero_producto`
  ADD PRIMARY KEY (`Caje_id`,`id_Producto`),
  ADD KEY `id_Producto` (`id_Producto`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Client_id`),
  ADD KEY `Caje_id` (`Caje_id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_Factura`),
  ADD KEY `Caje_id` (`Caje_id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_Client` (`id_Client`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_Producto`),
  ADD KEY `Caje_id` (`Caje_id`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id_Valoracion`),
  ADD KEY `id_Client` (`id_Client`),
  ADD KEY `id_Producto` (`id_Producto`);

--
-- Indices de la tabla `valoracion_producto`
--
ALTER TABLE `valoracion_producto`
  ADD PRIMARY KEY (`id_Valoracion`,`id_Producto`),
  ADD KEY `id_Producto` (`id_Producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cajero`
--
ALTER TABLE `cajero`
  MODIFY `Caje_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del cajero', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cajero_producto`
--
ALTER TABLE `cajero_producto`
  MODIFY `Caje_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Client_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del cliente', AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_Factura` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de la factura', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del pedido', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_Producto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del producto ', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id_Valoracion` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de la valoracion', AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cajero_producto`
--
ALTER TABLE `cajero_producto`
  ADD CONSTRAINT `cajero_producto_ibfk_1` FOREIGN KEY (`Caje_id`) REFERENCES `cajero` (`Caje_id`),
  ADD CONSTRAINT `cajero_producto_ibfk_2` FOREIGN KEY (`id_Producto`) REFERENCES `producto` (`id_Producto`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`Caje_id`) REFERENCES `cajero` (`Caje_id`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`Caje_id`) REFERENCES `cajero` (`Caje_id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_Client`) REFERENCES `clientes` (`Client_id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Caje_id`) REFERENCES `cajero` (`Caje_id`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`id_Client`) REFERENCES `clientes` (`Client_id`),
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`id_Producto`) REFERENCES `producto` (`id_Producto`);

--
-- Filtros para la tabla `valoracion_producto`
--
ALTER TABLE `valoracion_producto`
  ADD CONSTRAINT `valoracion_producto_ibfk_1` FOREIGN KEY (`id_Valoracion`) REFERENCES `valoracion` (`id_Valoracion`),
  ADD CONSTRAINT `valoracion_producto_ibfk_2` FOREIGN KEY (`id_Producto`) REFERENCES `producto` (`id_Producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
