-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2021 a las 18:51:47
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `onfeet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`) VALUES
(1, 'adidas'),
(2, 'nike'),
(3, 'marshoe'),
(4, 'var_marshoe'),
(5, 'jordan'),
(6, 'Yeezy'),
(7, 'Balenciaga'),
(8, 'Louis Vuitton');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `IdPed` int(11) NOT NULL,
  `IdUsu` int(11) NOT NULL,
  `IdPro` int(11) NOT NULL,
  `DateOr` datetime NOT NULL,
  `DirOr` varchar(100) NOT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`IdPed`, `IdUsu`, `IdPro`, `DateOr`, `DirOr`, `Status`) VALUES
(6, 5, 27, '2021-12-05 12:50:06', '', 1),
(7, 5, 30, '2021-12-05 12:50:08', '', 1),
(8, 5, 29, '2021-12-05 12:50:09', '', 1),
(9, 5, 31, '2021-12-05 12:50:10', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdPro` int(11) NOT NULL,
  `NomPro` varchar(50) NOT NULL,
  `id_mar` int(11) DEFAULT NULL,
  `TiPro` varchar(50) DEFAULT NULL,
  `PriPro` int(11) NOT NULL,
  `Img` varchar(255) DEFAULT NULL,
  `StatusP` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IdPro`, `NomPro`, `id_mar`, `TiPro`, `PriPro`, `Img`, `StatusP`) VALUES
(1, 'SHOE3', 4, 'sneaker', 990000, 'https://stockx.imgix.net/Balenciaga-Triple-S-Neon-Green-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1555966108&w=500', 0),
(2, 'SHOE2', 3, 'sneaker', 990000, 'https://stockx.imgix.net/Balenciaga-Triple-S-Neon-Green-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1555966108&w=500', 0),
(11, 'Nike Air Huarache Run Ultra White 2017', 2, 'Sneakers', 180000, 'https://stockx-360.imgix.net//Nike-Air-Huarache-Run-Ultra-White-2017/Images/Nike-Air-Huarache-Run-Ultra-White-2017/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1538080256&w=500', 1),
(12, 'Jordan 14 Retro White Hyper Royal', 5, 'Sneakers', 221000, 'https://stockx-360.imgix.net//Air-Jordan-14-Retro-White-Hyper-Royal/Images/Air-Jordan-14-Retro-White-Hyper-Royal/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1600880039&w=500', 1),
(13, 'Jordan 5 Retro SE Oregon', 5, 'Sneakers', 255000, 'https://stockx-360.imgix.net//Air-Jordan-5-Retro-SE-Oregon/Images/Air-Jordan-5-Retro-SE-Oregon/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1600360516&w=500', 1),
(14, 'Jordan 1 Retro High Tokyo Bio Hack', 5, 'Sneakers', 212000, 'https://stockx-360.imgix.net//Air-Jordan-1-Retro-High-Bio-Hack/Images/Air-Jordan-1-Retro-High-Bio-Hack/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1599068019&w=500', 1),
(15, 'Jordan 12 Retro Black University Gold', 5, 'Sneakers', 230000, 'https://stockx-360.imgix.net//Air-Jordan-12-Retro-Black-University-Gold/Images/Air-Jordan-12-Retro-Black-University-Gold/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1597154086&w=500', 1),
(16, 'Jordan 1 Mid Light Smoke Grey', 5, 'Sneakers', 150000, 'https://stockx-360.imgix.net//Air-Jordan-1-Mid-Light-Smoke-Grey/Images/Air-Jordan-1-Mid-Light-Smoke-Grey/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1596134320&w=500', 1),
(17, 'Nike Air Rubber Dunk Off-White UNC', 2, 'Sneakers', 300000, 'https://stockx.imgix.net/Nike-Air-Rubber-Dunk-Off-White-UNC.png?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1601017093&w=500', 1),
(18, 'Nike Dunk High Michigan (2020)', 2, 'Sneakers', 210000, 'https://stockx-360.imgix.net//Nike-Dunk-High-Michigan-2020/Images/Nike-Dunk-High-Michigan-2020/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1600885279&w=500', 1),
(19, 'Nike Blazer Mid 77 Vintage White Black', 2, 'Sneakers', 88000, 'https://stockx-360.imgix.net//Nike-Blazer-Mid-77-Vintage-White-Black/Images/Nike-Blazer-Mid-77-Vintage-White-Black/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1555968287&w=500', 1),
(20, 'Nike Air Force 1 Low Supreme White', 2, 'Sneakers', 220000, 'https://stockx-360.imgix.net//Nike-Air-Force-1-Low-Supreme-Box-Logo-White/Images/Nike-Air-Force-1-Low-Supreme-Box-Logo-White/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1583951149&w=500', 1),
(21, 'Nike Dunk Low Co.JP Samba (2020)', 2, 'Sneakers', 209000, 'https://stockx-360.imgix.net//Nike-Dunk-Low-Samba-2020/Images/Nike-Dunk-Low-Samba-2020/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1596822662&w=500', 1),
(22, 'adidas Yeezy Boost 350 V2 Carbon', 6, 'Sneakers', 264000, 'https://stockx.imgix.net/adidas-Yeezy-Boost-350-V2-Carbon.png?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1601318552&w=500', 1),
(23, 'adidas Yeezy Boost 700 Wave Runner Solid Grey', 6, 'Sneakers', 230000, 'https://stockx-360.imgix.net//Adidas-Yeezy-Wave-Runner-700-Solid-Grey/Images/Adidas-Yeezy-Wave-Runner-700-Solid-Grey/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1538080256&w=500', 1),
(24, 'adidas Yeezy Powerphase Calabasas Core Black', 6, 'Sneakers', 38000, 'https://stockx-360.imgix.net//Adidas-Yeezy-Powerphase-Calabasas-Core-Black/Images/Adidas-Yeezy-Powerphase-Calabasas-Core-Black/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1538080256&w=500', 1),
(25, 'adidas Yeezy 500 Soft Vision', 6, 'Sneakers', 324000, 'https://stockx-360.imgix.net//adidas-Yeezy-500-Soft-Vision/Images/adidas-Yeezy-500-Soft-Vision/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1572553513&w=500', 1),
(26, 'adidas Yeezy QNTM Barium', 6, 'Sneakers', 179000, 'https://stockx-360.imgix.net//adidas-YZY-QNTM-Barium/Images/adidas-YZY-QNTM-Barium/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1594237009&w=500', 1),
(27, 'adidas Ultra Boost 1.0 Triple Black', 1, 'Sneakers', 179000, 'https://stockx-360.imgix.net//adidas-ultra-boost-triple-black_TruView/Images/adidas-ultra-boost-triple-black_TruView/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1538080256&w=500', 1),
(28, 'adidas Superstar Jonah Hill', 1, 'Sneakers', 73000, 'https://stockx-360.imgix.net//adidas-Superstar-Jonah-Hill/Images/adidas-Superstar-Jonah-Hill/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1598649249&w=500', 1),
(29, 'adidas ZX 5000 UNDFTD x Bape \"Camo\"', 1, 'Sneakers', 250000, 'https://stockx.imgix.net/Adidas-ZX-5000-Undftd-Bape-camo.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1538080256&w=500', 1),
(30, 'adidas Continental 80 White Scarlet Navy', 1, 'Sneakers', 51000, 'https://stockx-360.imgix.net//adidas-Continental-80-White-Scarlet-Navy/Images/adidas-Continental-80-White-Scarlet-Navy/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1569007101&w=500', 1),
(31, 'adidas Ozweego Cloud White', 1, 'Sneakers', 73000, 'https://stockx-360.imgix.net//adidas-Ozweego-Cloud-White/Images/adidas-Ozweego-Cloud-White/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1576006585&w=500', 1),
(32, 'Balenciaga Track Negro', 7, 'sneakers', 732000, 'https://stockx-360.imgix.net//Balenciaga-Track-Black/Images/Balenciaga-Track-Black/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1540240571&w=500', 1),
(33, 'Balenciaga Speed ??Knit High Negro (2019)', 7, 'sneakers', 571000, 'https://stockx-360.imgix.net//Balenciaga-Speed-Knit-High-Black-2019/Images/Balenciaga-Speed-Knit-High-Black-2019/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1598649249&w=500', 1),
(34, 'Suela Balenciaga Triple S Verde Neón Transparente', 7, 'sneakers', 995000, 'https://stockx.imgix.net/Balenciaga-Triple-S-Neon-Green-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1555966108&w=500', 1),
(35, 'Balenciaga Arena High Blanco', 7, 'sneakers', 406000, 'https://stockx.imgix.net/Balenciaga-Arena-High-White.png?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1564423891&w=500', 1),
(36, 'Balenciaga Triple S Triple Black (Reedición 2018) ', 7, 'sneakers', 883000, 'https://stockx-360.imgix.net//Balenciaga-Triple-S-Triple-Black-2018-Reissue/Images/Balenciaga-Triple-S-Triple-Black-2018-Reissue/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1565985428&w=500', 1),
(37, 'Monograma Run Away de Louis Vuitton', 8, 'sneakers', 1134000, 'https://stockx.imgix.net/Louis-Vuitton-Run-Away-Monogram.png?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1592329754&w=500', 1),
(38, 'Zapatillas Louis Vuitton Trainer Denim Monogram', 8, 'sneakers', 1134000, 'https://stockx.imgix.net/Louis-Vuitton-Trainer-Sneaker-Denim-Monogram.png?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1584468277&w=500', 1),
(39, 'Zapatillas Louis Vuitton LV Negro', 8, 'sneakers', 1941000, 'https://stockx.imgix.net/Louis-Vuitton-LV-Trainer-Black.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1600446976&w=500', 1),
(40, 'Zapatilla Louis Vuitton Eclipse', 8, 'sneakers', 1253000, 'https://stockx.imgix.net/Louis-Vuitton-Trainer-Eclipse.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1595351157&w=500', 1),
(41, 'Monograma blanco supremo de Louis Vuitton Sport', 8, 'sneakers', 1121000, 'https://stockx-360.imgix.net//louis-vuitton-sport-supreme-white-monogram_TruView/Images/louis-vuitton-sport-supreme-white-monogram_TruView/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1598647625&w=500', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Id` int(100) NOT NULL,
  `NomRol` varchar(50) NOT NULL,
  `Descri` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Id`, `NomRol`, `Descri`) VALUES
(1, 'Administrador', 'Administrador'),
(2, 'Cliente', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsu` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `id_Rol` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsu`, `Fname`, `Lname`, `Email`, `Pass`, `id_Rol`) VALUES
(5, 'DAV', 'RUI', 'example2@hotmail.com', '$2y$12$ParrS0FIRc1Xd2D5nfu6lOX/YOkaA3991geo78JgGJ/G.OosrjtcG', 1),
(8, 'ERG', 'ZPD', 'Example2@server.com', '$2y$12$qyXtCJRoU7kwl52WKFqIgefltnSxPaxemRz1/r7K1yume71ZCu8sa', 2),
(9, 'WEMP', 'ERT', 'example@hotmail.com', '$2y$12$WPxl/sSejIpAX5ETDjNYgOuvcHU9jBtJkZtisb8tzckq1RTOp220a', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`IdPed`),
  ADD KEY `IdPro` (`IdPro`),
  ADD KEY `IdUsu` (`IdUsu`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdPro`),
  ADD KEY `id_mar` (`id_mar`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsu`),
  ADD KEY `id_Rol` (`id_Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `IdPed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IdPro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`IdPro`) REFERENCES `productos` (`IdPro`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`IdUsu`) REFERENCES `usuarios` (`IdUsu`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_mar`) REFERENCES `marcas` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_Rol`) REFERENCES `roles` (`Id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
