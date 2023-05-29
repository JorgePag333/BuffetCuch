-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2022 a las 00:16:53
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19439533_store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acompanamento`
--

CREATE TABLE `acompanamento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CodigoCat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `precio` double(3,2) DEFAULT NULL,
  `subCat` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `acompanamento`
--

INSERT INTO `acompanamento` (`id`, `nombre`, `CodigoCat`, `precio`, `subCat`) VALUES
(1, 'Pure', '04', NULL, 12),
(2, 'Ensalada', '04', NULL, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adereso`
--

CREATE TABLE `adereso` (
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CodigoCat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CodigoSubcat` int(10) NOT NULL,
  `indice` int(11) NOT NULL,
  `precioCat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `adereso`
--

INSERT INTO `adereso` (`tipo`, `CodigoCat`, `CodigoSubcat`, `indice`, `precioCat`) VALUES
('Mayonesa', '04', 12, 1, 0),
('Savora', '04', 12, 2, 0),
('kechup', '04', 12, 22, 1),
('Mayonesa', '04', 11, 23, 0),
('kechup', '04', 11, 24, 0),
('Mostaza', '04', 11, 25, 0),
('Salsa Golf', '04', 11, 26, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adicionales`
--

CREATE TABLE `adicionales` (
  `indi` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `CodigoSubcat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CodigoCat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `precioAd` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `adicionales`
--

INSERT INTO `adicionales` (`indi`, `nombre`, `CodigoSubcat`, `CodigoCat`, `precioAd`) VALUES
(1, 'Lechuga', '07', '04', 50),
(2, 'Tomate', '07', '04', 50),
(3, 'Cebolla', '07', '04', 50),
(4, 'Zanahoria', '07', '04', 50),
(5, 'Huevo', '07', '04', 50),
(6, 'Repollo', '07', '04', 50),
(7, 'Remolacha', '07', '04', 50),
(8, 'Choclo', '07', '04', 50),
(9, 'Arvejas', '07', '04', 50),
(10, 'Lentejas', '07', '04', 50),
(11, 'Acelga', '07', '04', 50),
(12, 'Papa', '07', '04', 50),
(13, 'Zapallo', '07', '04', 50),
(14, 'Batata', '07', '04', 50),
(15, 'Jamón', '07', '04', 50),
(16, 'Queso', '07', '04', 50),
(17, 'Pollo', '07', '04', 50),
(18, 'Atun', '07', '04', 50),
(19, 'Arroz', '07', '04', 50),
(20, 'Medallones', '0', '04', 50),
(22, 'Lechuga', '11', '04', 50),
(23, 'Tomate', '11', '04', 50),
(24, 'Cebolla', '11', '04', 50),
(25, 'Zanahoria', '11', '04', 50),
(26, 'Huevo', '11', '04', 50),
(27, 'Jamon', '11', '04', 50),
(28, 'Queso', '11', '04', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `Nombre`, `Clave`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `CodigoCat` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL,
  `IsActive` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CodigoCat`, `Nombre`, `Descripcion`, `IsActive`) VALUES
('01', 'Bebidas', 'Elaboración Propia', 'true'),
('02', 'Galletitas', 'Elaboración Propia', 'true'),
('03', 'Snacks', 'Comida Chatarra', 'true'),
('04', 'Menu', 'Elaboración Propia', 'true'),
('05', 'Golosinas', 'Golosinas marcas Variadas', 'true'),
('07', 'Productos regionales', 'Productos chivilcoy', 'true'),
('09', 'Fotocopias', 'Librería', 'true'),
('10', 'Art. Librería', 'Librería', 'true');

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
  `tipo` varchar(150) NOT NULL,
  `Carrera` varchar(150) DEFAULT NULL,
  `año` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`NIT`, `Nombre`, `NombreCompleto`, `Apellido`, `Clave`, `Direccion`, `Telefono`, `Email`, `tipo`, `Carrera`, `año`) VALUES
('34107279', 'JorgePa', 'jorge', 'pages', '827ccb0eea8a706c4c34a16891f84e7b', 'fgdfgdfg', 2147483647, 'jorgepages333@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `NIT` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Detalles` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `CodigoProd` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `NombreProd` varchar(150) NOT NULL,
  `Detalles` varchar(300) NOT NULL,
  `hora` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`NumPedido`, `CodigoProd`, `CantidadProductos`, `PrecioProd`, `NombreProd`, `Detalles`, `hora`) VALUES
(74, '21', 1, 200, ' Coca-Cola Zero', 'Lechuga, Tomate, Cebolla, Zana', '2022-09-09T21:01'),
(74, '01', 1, 200, ' Coca-Cola Zero', 'Lechuga, Tomate, Cebolla, Zana', '2022-09-09T21:01'),
(75, '22', 1, 350, ' Hamburguesas', 'Lechuga, Tomate, Cebolla, Zana', '2022-09-19T21:40'),
(76, '22', 1, 350, ' Hamburguesas', 'Lechuga, Tomate, Cebolla, Zana', '2022-09-26T18:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listacarreras`
--

CREATE TABLE `listacarreras` (
  `nombreCarrera` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `indiceCarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `listacarreras`
--

INSERT INTO `listacarreras` (`nombreCarrera`, `indiceCarrera`) VALUES
('Lic. en Psicologia(UNLP)', 1),
('Tec. Universitaria en acompañamiento Terapeutico(UNLP)', 2),
('Profesorado en Psicologia(UNLP)', 3),
('Instructora de Oficios(UNLP)', 4),
('Lic. en comunicacion Social(UNLP)', 5),
('Tec. Universitaria de Diseño Industrial(UNNOBA)', 6),
('Tec. Universitaria de Diseño indumentaria & Textil(UNNOBA)', 7),
('Tramo de formacion Pedagogico(UNLZ)', 8),
('Tec. Universitaria en Construcciones(UNLZ)', 9),
('Diplomatura en Gestion de Entidades deportivas(UNLZ)', 10),
('Diplomatura en Mecanizacion de la produccion agropecuaria(UNLZ)', 11),
('Tecnicatura Universitaria en Programacion(UTN)', 12),
('Tecnicatura Universitaria en Programacion(UNLZ)', 13),
('Tecnicatura Universitaria en industrias Alimentarias(UTN)', 14),
('Tecnicatura Universitaria en Higiene & seguridad laboral(UTN)', 15),
('Tecnicatura Universitaria en Bromatologia & medio ambiente(UTN)', 16),
('Tecnicatura Universitaria en Mantenimiento Industrial(UTN)', 17),
('Diplomatura Universitaria en Marketing Digital(UTN)', 18),
('Diplomatura Universitaria en Energias Renovables(UTN-CUCH)', 19),
('Diplomatura Universitaria en Jardineria y espacios verdes(UTN-CUCH)', 20),
('Lic. en Administracion rural(UTN)', 21),
('Tec. en Administracion rural(UTN)', 22),
('Lic. en Organizacion Industrial(UTN)', 23),
('Diplomatura Universitaria en Direccion de Instituciones Educativas(UNTREF)', 24),
('Diplomatura Universitaria en Organizacion de eventos(UNTREF)', 25),
('Diplomatura en Diceño de Interiores(CUCH)', 26),
('CBC(UBA)', 27),
('Nutricion(UNSAM)', 28),
('Diplomatura en Genero(UNTREF)', 29),
('Enfermeria(CUCH)', 30),
('Trabajo Social(CUCH)', 31),
('Tecnicatura en RRHH(CUCH', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaprofesores`
--

CREATE TABLE `listaprofesores` (
  `nombreYapellido` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `D.N.I.` int(8) NOT NULL,
  `Telefono` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `importe` double NOT NULL,
  `Fecha` date NOT NULL,
  `IndiceListaProf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planillamate`
--

CREATE TABLE `planillamate` (
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
  `Descuento` int(11) NOT NULL,
  `subCat` varchar(50) NOT NULL,
  `esComida` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`CodigoProd`, `NombreProd`, `CodigoCat`, `Precio`, `Modelo`, `Marca`, `Stock`, `NITProveedor`, `Imagen`, `Nombre`, `Estado`, `Descuento`, `subCat`, `esComida`) VALUES
('01', 'Coca-Cola Zero', '01', '100.00', 'Zero 500ml Lata', 'Coca-cola', 9, '2454567', '01.jpg', 'admin', 'Activo', 0, '01', 0),
('02', 'Coca-Cola Zero', '01', '120.00', 'Zero 500ml Lata', 'Coca-cola', 9, '2454567', '02.jpg', 'admin', 'Activo', 0, '01', 0),
('1', 'Sándwich de miga jamón y queso', '04', '70.00', 'Miga', 'Imperial', 10, '2454567', '1.jpg', 'admin', 'Activo', 0, '', 0),
('10', 'Alfajor Aguila', '05', '130.00', 'Mini torta coco', 'Arcor', 10, '2454567', '10.jpg', 'admin', 'Activo', 0, '08', 0),
('12', 'Alfajor Chocolate', '05', '130.00', 'Triple Torta Terrabusi x 70 g.', 'Terrabusi', 10, '2454567', '12.jpg', 'admin', 'Activo', 0, '04', 0),
('14', 'Tita x 19 g.', '01', '80.00', 'Rellena s/Limón Baño Chocolate', 'Terrabusi', 10, '2454567', '14.jpg', 'admin', 'Activo', 0, '', 0),
('15', 'Gallo Snacks Baño Chocolate', '01', '96.00', 'Oblea de Arroz Limón', 'Gallo Snacks', 10, '2454567', '15.png', 'admin', 'Activo', 0, '', 0),
('16', 'Oblea de Arroz con Maní', '01', '96.00', 'ChocoBar x 20 g', 'Gallo Snacks', 10, '2454567', '16.jpg', 'admin', 'Activo', 0, '', 0),
('17', 'Mantecol x 26 g', '01', '101.00', 'Postre de Maní', 'Terrabusi', 10, '2454567', '17.png', 'admin', 'Activo', 0, '', 0),
('18', 'Barra Sabor Chocolinas', '01', '194.00', 'Cofler Extra x 40 g', 'Arcor', 10, '2454567', '18.jpg', 'admin', 'Activo', 0, '', 0),
('19', 'Bizcochitos don satur', '02', '0.00', 'Varios', 'don satur', 1, '2454567', '19.jpg', 'admin', 'Activo', 0, '04', 0),
('2', 'Galletitas Rellenas', '01', '73.00', 'Tutti Frutti', 'Merengadas', 10, '2454567', '2.jpg', 'admin', 'Activo', 0, '', 0),
('20', 'Picada', '04', '800.00', 'de la casa', 'Casera', 10, '12121212121', '20.png', 'admin', 'Activo', 0, '12', 0),
('21', 'Ensaladas', '04', '0.00', 'Apto Vegano y sintacc', 'Elaboración Propia', 8, '12121212121', '21.jpg', 'admin', 'Activo', 0, '07', 1),
('22', 'Hamburguesas', '04', '0.00', 'De la Casa', 'Elaboración Propia', 8, '12121212121', '22.jpg', 'admin', 'Activo', 0, '11', 1),
('3', 'Rhodesia Sabor Chocolate x 22g', '01', '80.00', 'Oblea Rellena', 'Terrabusi', 10, '2454567', '3.jpg', 'admin', 'Activo', 0, '11', 0),
('5', 'Bon o bon', '01', '35.00', 'Bombon', 'Arcor', 10, '2454567', '5.jpg', 'admin', 'Activo', 0, '', 0),
('6', 'Bon o bon', '01', '40.00', 'Bombon blanco', 'Arcor', 10, '2454567', '6.png', 'admin', 'Activo', 0, '', 0),
('7', 'Fuente de Fibra x 25 g', '01', '40.00', 'Turrón de Maní', 'Arcor', 10, '2454567', '7.jpg', 'admin', 'Activo', 0, '', 0),
('8', 'Turrón de Maní 25g', '01', '40.00', 'Original', 'Arcor', 10, '2454567', '8.png', 'admin', 'Activo', 0, '', 0),
('9', 'Turrón de Maní 25g', '05', '40.00', 'chocolate sin tacc', 'Arcor', 9, '2454567', '9.jpg', 'admin', 'Activo', 0, '01', 0);

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
('12121212121', 'Buffete del CUCh', 'Calixto Calderon 404', 2346, 'https://buffetdelcuch.000webho'),
('2454567', 'Arcor', 'calle angosta 22', 2147483647, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `NombreCat` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `NumCat` int(50) NOT NULL,
  `CodigoCat` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`NombreCat`, `NumCat`, `CodigoCat`) VALUES
('Aguas', 1, '01'),
('Calienttes', 2, '01'),
('Energizantes', 3, '01'),
('Gaseosas', 4, '01'),
('Jugos', 5, '01'),
('Leche Chocolatada', 6, '01'),
('Ensaladas', 7, '04'),
('Tartas', 8, '04'),
('Empanadas', 9, '04'),
('Pastas', 10, '04'),
('Sándwiches', 11, '04'),
('Otros', 12, '04'),
('Alfajores', 13, '05'),
('Barra de Cereales y Turrones', 15, '05'),
('Caramelos, gomitas, y chupetines\r\n', 16, '05'),
('Chicles y pastillas\r\n', 17, '05'),
('Chocolates\r\n', 18, '05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subproductos`
--

CREATE TABLE `subproductos` (
  `CodigoSub` varchar(30) CHARACTER SET latin1 NOT NULL,
  `NombreSub` varchar(30) CHARACTER SET latin1 NOT NULL,
  `CodigoProd` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Precio` decimal(30,2) NOT NULL,
  `Marca` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Modelo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Stock` int(20) NOT NULL,
  `Descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `subproductos`
--

INSERT INTO `subproductos` (`CodigoSub`, `NombreSub`, `CodigoProd`, `Precio`, `Marca`, `Modelo`, `Stock`, `Descuento`) VALUES
('01', 'Coca-Cola Zero', '01', '100.00', 'Coca-cola', 'Zero 500ml Lata', 5, 0),
('02', 'Dulces', '19', '100.00', 'don satur', 'Dulces', 10, 0),
('03', 'Salados', '19', '100.00', 'don satur', 'salado', 10, 0),
('04', 'Agridulce', '19', '100.00', 'don satur', 'Agridulce', 10, 0),
('05', 'Hamburguesas', '22', '0.00', 'Elaboración Propia', 'Carne', 10, 0),
('06', 'Hamburguesas', '22', '0.00', 'Elaboración Propia', 'Pollo', 10, 0),
('07', 'Hamburguesas', '22', '0.00', 'Elaboración Propia', 'Soja', 10, 0),
('08', 'Hamburguesas', '22', '0.00', 'Elaboración Propia', 'Espinaca y Pimientos', 10, 0),
('09', 'Hamburguesas', '22', '0.00', 'Elaboración Propia', 'Arveja y Brócoli', 10, 0),
('10', 'Hamburguesas', '22', '0.00', 'Elaboración Propia', 'Lenteja y zanahoria', 10, 0),
('11', 'Hamburguesas', '22', '0.00', 'Elaboración Propia', 'Calabaza y choclo', 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoclientes`
--

CREATE TABLE `tipoclientes` (
  `tipo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `indice` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipoclientes`
--

INSERT INTO `tipoclientes` (`tipo`, `indice`) VALUES
('Alumnos', 1),
('Profesores', 2),
('Personal del C.U.Ch.', 3),
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
(74, '10-09-2022', '34107279', 0, '100.00', 'Pendiente', '000011100011010001', 'Recoger Por Tienda', 'Sin archivo adjunto'),
(75, '20-09-2022', '34107279', 0, '0.00', 'Pendiente', '26545644644565', 'Recoger Por Tienda', 'Sin archivo adjunto'),
(76, '26-09-2022', '34107279', 0, '0.00', 'Pendiente', '01212151221512151215155121', 'Recoger Por Tienda', 'Sin archivo adjunto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acompanamento`
--
ALTER TABLE `acompanamento`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `adereso`
--
ALTER TABLE `adereso`
  ADD PRIMARY KEY (`indice`);

--
-- Indices de la tabla `adicionales`
--
ALTER TABLE `adicionales`
  ADD PRIMARY KEY (`indi`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Nombre`),
  ADD KEY `id` (`id`);

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
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIT` (`NIT`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD KEY `NumPedido` (`NumPedido`),
  ADD KEY `CodigoProd` (`CodigoProd`);

--
-- Indices de la tabla `listacarreras`
--
ALTER TABLE `listacarreras`
  ADD PRIMARY KEY (`indiceCarrera`);

--
-- Indices de la tabla `listaprofesores`
--
ALTER TABLE `listaprofesores`
  ADD PRIMARY KEY (`IndiceListaProf`);

--
-- Indices de la tabla `planillamate`
--
ALTER TABLE `planillamate`
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
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`NumCat`);

--
-- Indices de la tabla `subproductos`
--
ALTER TABLE `subproductos`
  ADD PRIMARY KEY (`CodigoSub`);

--
-- Indices de la tabla `tipoclientes`
--
ALTER TABLE `tipoclientes`
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
-- AUTO_INCREMENT de la tabla `acompanamento`
--
ALTER TABLE `acompanamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `adereso`
--
ALTER TABLE `adereso`
  MODIFY `indice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `adicionales`
--
ALTER TABLE `adicionales`
  MODIFY `indi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `listacarreras`
--
ALTER TABLE `listacarreras`
  MODIFY `indiceCarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `listaprofesores`
--
ALTER TABLE `listaprofesores`
  MODIFY `IndiceListaProf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planillamate`
--
ALTER TABLE `planillamate`
  MODIFY `IndiceMate` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `NumCat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tipoclientes`
--
ALTER TABLE `tipoclientes`
  MODIFY `indice` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `NumPedido` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

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
