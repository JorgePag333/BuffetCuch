-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-08-2022 a las 22:35:56
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19418098_store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Nombre` varchar(30) NOT NULL,
  `Clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Nombre`, `Clave`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `CodigoCat` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CodigoCat`, `Nombre`, `Descripcion`) VALUES
('01', 'Desayuno o Merienda', 'Elaboración Propia'),
('02', 'Almuerzo o Cena', 'Elaboración Propia'),
('03', 'Snacks', 'Comida Chatarra'),
('04', 'Minutas', 'Elaboración Propia'),
('05', 'Fotocopias', 'Librería'),
('06', 'Art. Librería', 'Librería'),
('07', 'Otros Productos', 'Golosinas, Gaseosas, Galletitas y Chocolates');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `NIT` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `NombreCompleto` varchar(70) NOT NULL,
  `Apellido` varchar(70) NOT NULL,
  `Clave` text NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `tipo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`NIT`, `Nombre`, `NombreCompleto`, `Apellido`, `Clave`, `Direccion`, `Telefono`, `Email`, `tipo`) VALUES
('34107279', 'JorgePa', 'jorge', 'pages', '827ccb0eea8a706c4c34a16891f84e7b', 'fgdfgdfg', 2147483647, 'jorgepages333@gmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentabanco`
--

CREATE TABLE `cuentabanco` (
  `nombreBanco` text NOT NULL,
  `numeroCuenta` int(17) NOT NULL,
  `nombreBeneficiario` text NOT NULL,
  `tipoCuenta` text NOT NULL,
  `numeroDeposito` int(11) NOT NULL,
  `NIT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuentabanco`
--

INSERT INTO `cuentabanco` (`nombreBanco`, `numeroCuenta`, `nombreBeneficiario`, `tipoCuenta`, `numeroDeposito`, `NIT`) VALUES
('LaPampa', 2147483647, 'Jorge Andres Pages', 'Caja Ahorro', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `NumPedido` int(20) NOT NULL,
  `CodigoProd` varchar(30) NOT NULL,
  `CantidadProductos` int(20) NOT NULL,
  `PrecioProd` int(11) NOT NULL,
  `NombreProd` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`NumPedido`, `CodigoProd`, `CantidadProductos`, `PrecioProd`, `NombreProd`) VALUES
(32, '02', 1, 120, ' Coca-Cola Zero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ListaCarreras`
--

CREATE TABLE `ListaCarreras` (
  `nombreCarrera` int(11) NOT NULL,
  `indiceCarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ListaProfesores`
--

CREATE TABLE `ListaProfesores` (
  `nombreYapellido` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `D.N.I.` int(8) NOT NULL,
  `Telefono` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `importe` double NOT NULL,
  `Fecha` date NOT NULL,
  `IndiceListaProf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PlanillaMate`
--

CREATE TABLE `PlanillaMate` (
  `IndiceMate` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `carrera` int(50) NOT NULL,
  `ano` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombreYapellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `CodigoProd` varchar(30) NOT NULL,
  `NombreProd` varchar(30) NOT NULL,
  `CodigoCat` varchar(30) NOT NULL,
  `Precio` decimal(30,2) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Stock` int(20) NOT NULL,
  `NITProveedor` varchar(30) NOT NULL,
  `Imagen` varchar(150) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`CodigoProd`, `NombreProd`, `CodigoCat`, `Precio`, `Modelo`, `Marca`, `Stock`, `NITProveedor`, `Imagen`, `Nombre`, `Estado`, `Descuento`) VALUES
('01', 'Coca-Cola Zero', '01', 100.00, 'Zero 500ml Lata', 'Coca-cola', 10, '2454567', '01.jpg', 'admin', 'Activo', 0),
('02', 'Coca-Cola Zero', '07', 120.00, 'Zero 500ml Lata', 'Coca-cola', 9, '2454567', '02.jpg', 'admin', 'Activo', 0),
('1', 'Sándwich de miga jamón y queso', '04', 70.00, 'Miga', 'Imperial', 10, '2454567', '1.jpg', 'admin', 'Activo', 0),
('10', 'Alfajor Aguila', '01', 130.00, 'Mini torta coco', 'Arcor', 10, '2454567', '10.jpg', 'admin', 'Activo', 0),
('12', 'Alfajor Chocolate', '01', 130.00, 'Triple Torta Terrabusi x 70 g.', 'Terrabusi', 10, '2454567', '12.jpg', 'admin', 'Activo', 0),
('14', 'Tita x 19 g.', '01', 80.00, 'Rellena s/Limón Baño Chocolate', 'Terrabusi', 10, '2454567', '14.jpg', 'admin', 'Activo', 0),
('15', 'Gallo Snacks Baño Chocolate', '01', 96.00, 'Oblea de Arroz Limón', 'Gallo Snacks', 10, '2454567', '15.png', 'admin', 'Activo', 0),
('16', 'Oblea de Arroz con Maní', '01', 96.00, 'ChocoBar x 20 g', 'Gallo Snacks', 10, '2454567', '16.jpg', 'admin', 'Activo', 0),
('17', 'Mantecol x 26 g', '01', 101.00, 'Postre de Maní', 'Terrabusi', 10, '2454567', '17.png', 'admin', 'Activo', 0),
('18', 'Barra Sabor Chocolinas', '01', 194.00, 'Cofler Extra x 40 g', 'Arcor', 10, '2454567', '18.jpg', 'admin', 'Activo', 0),
('2', 'Galletitas Rellenas', '01', 73.00, 'Tutti Frutti', 'Merengadas', 10, '2454567', '2.jpg', 'admin', 'Activo', 0),
('3', 'Rhodesia Sabor Chocolate x 22g', '01', 80.00, 'Oblea Rellena', 'Terrabusi', 10, '2454567', '3.jpg', 'admin', 'Activo', 0),
('5', 'Bon o bon', '01', 35.00, 'Bombon', 'Arcor', 10, '2454567', '5.jpg', 'admin', 'Activo', 0),
('6', 'Bon o bon', '01', 40.00, 'Bombon blanco', 'Arcor', 10, '2454567', '6.png', 'admin', 'Activo', 0),
('7', 'Fuente de Fibra x 25 g', '01', 40.00, 'Turrón de Maní', 'Arcor', 10, '2454567', '7.jpg', 'admin', 'Activo', 0),
('8', 'Turrón de Maní 25g', '01', 40.00, 'Original', 'Arcor', 10, '2454567', '8.png', 'admin', 'Activo', 0),
('9', 'Turrón de Maní 25g', '01', 40.00, 'chocolate', 'Arcor', 10, '2454567', '9.jpg', 'admin', 'Activo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `NITProveedor` varchar(30) NOT NULL,
  `NombreProveedor` varchar(30) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `PaginaWeb` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`NITProveedor`, `NombreProveedor`, `Direccion`, `Telefono`, `PaginaWeb`) VALUES
('2454567', 'juan pera', 'calle angosta 22', 2147483647, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SubCategorias`
--

CREATE TABLE `SubCategorias` (
  `NombreCat` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `NumCat` int(50) NOT NULL,
  `CodigoCat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoClientes`
--

CREATE TABLE `tipoClientes` (
  `tipo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `indice` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipoClientes`
--

INSERT INTO `tipoClientes` (`tipo`, `indice`) VALUES
('Alumnos', 1),
('Profesores', 2),
('Directivos', 3),
('Otros', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `NumPedido` int(20) NOT NULL,
  `Fecha` varchar(150) NOT NULL,
  `NIT` varchar(30) NOT NULL,
  `Descuento` int(20) NOT NULL,
  `TotalPagar` decimal(30,2) NOT NULL,
  `Estado` varchar(150) NOT NULL,
  `NumeroDeposito` text NOT NULL,
  `TipoEnvio` text NOT NULL,
  `Adjunto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`NumPedido`, `Fecha`, `NIT`, `Descuento`, `TotalPagar`, `Estado`, `NumeroDeposito`, `TipoEnvio`, `Adjunto`) VALUES
(32, '22-08-2022', '34107279', 0, 120.00, 'Pendiente', '26545644646644', 'Recoger Por Tienda', 'Sin archivo adjunto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CodigoCat`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`NIT`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD KEY `NumPedido` (`NumPedido`),
  ADD KEY `CodigoProd` (`CodigoProd`);

--
-- Indices de la tabla `ListaCarreras`
--
ALTER TABLE `ListaCarreras`
  ADD PRIMARY KEY (`indiceCarrera`);

--
-- Indices de la tabla `ListaProfesores`
--
ALTER TABLE `ListaProfesores`
  ADD PRIMARY KEY (`IndiceListaProf`);

--
-- Indices de la tabla `PlanillaMate`
--
ALTER TABLE `PlanillaMate`
  ADD PRIMARY KEY (`IndiceMate`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`CodigoProd`),
  ADD KEY `CodigoCat` (`CodigoCat`),
  ADD KEY `NITProveedor` (`NITProveedor`),
  ADD KEY `Agregado` (`Nombre`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`NITProveedor`);

--
-- Indices de la tabla `SubCategorias`
--
ALTER TABLE `SubCategorias`
  ADD PRIMARY KEY (`NumCat`);

--
-- Indices de la tabla `tipoClientes`
--
ALTER TABLE `tipoClientes`
  ADD PRIMARY KEY (`indice`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`NumPedido`),
  ADD KEY `NIT` (`NIT`),
  ADD KEY `NIT_2` (`NIT`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ListaCarreras`
--
ALTER TABLE `ListaCarreras`
  MODIFY `indiceCarrera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ListaProfesores`
--
ALTER TABLE `ListaProfesores`
  MODIFY `IndiceListaProf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `PlanillaMate`
--
ALTER TABLE `PlanillaMate`
  MODIFY `IndiceMate` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `SubCategorias`
--
ALTER TABLE `SubCategorias`
  MODIFY `NumCat` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoClientes`
--
ALTER TABLE `tipoClientes`
  MODIFY `indice` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `NumPedido` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_8` FOREIGN KEY (`CodigoProd`) REFERENCES `producto` (`CodigoProd`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_ibfk_9` FOREIGN KEY (`NumPedido`) REFERENCES `venta` (`NumPedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_7` FOREIGN KEY (`CodigoCat`) REFERENCES `categoria` (`CodigoCat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_8` FOREIGN KEY (`NITProveedor`) REFERENCES `proveedor` (`NITProveedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_9` FOREIGN KEY (`Nombre`) REFERENCES `administrador` (`Nombre`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`NIT`) REFERENCES `cliente` (`NIT`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
