-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 02:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfautoparts`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `precio` int(11) NOT NULL,
  `marca` text COLLATE utf8_bin NOT NULL,
  `anio` int(11) DEFAULT NULL,
  `condicion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `id_categoria`, `nombre`, `precio`, `marca`, `anio`, `condicion`) VALUES
(84, 16, 'Pistones Ford F100', 4320, 'Ford', 1990, 'Nuevos'),
(85, 19, 'Caño de escape', 3000, 'Silens', 2018, 'Nuevo'),
(86, 18, 'Correa', 1200, 'Ford', 2012, 'Nuevo'),
(87, 19, 'Escape completo para torino', 19000, 'Silens', 2017, 'Nuevo');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(16, 'Pistones'),
(18, 'Correas'),
(19, 'Caños de escape');

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` varchar(400) COLLATE utf8_bin NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_articulo`, `id_usuario`, `comentario`, `puntaje`) VALUES
(11, 84, 20, 'Buenardo', 5),
(12, 84, 23, 'muy buenos', 4),
(13, 85, 23, 'mucho cromo, les falta raspada con doña mola', 2),
(14, 87, 23, 'buenos', 3),
(15, 87, 20, 'tremendos', 4),
(16, 87, 20, 'agarre un baden y se rompieron xd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `ruta` varchar(300) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `id_articulo`, `ruta`) VALUES
(70, 85, './imagenes/nuevos/5de0675b1a17a.jpg'),
(71, 86, './imagenes/nuevos/5de06822b7edc.jpg'),
(72, 84, './imagenes/nuevos/5de069240eabe.jpg'),
(73, 87, './imagenes/nuevos/5de06a789e7e9.jpg'),
(75, 84, './imagenes/nuevos/5de074168d5d3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `mail` varchar(300) COLLATE utf8_bin NOT NULL,
  `password` varchar(300) COLLATE utf8_bin NOT NULL,
  `administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `mail`, `password`, `administrador`) VALUES
(17, 'AdminOriginal@gmail.com', '$2y$10$jNdycSK9wcuAymRo4aATY.uoSnEsc9MyWTsqSuXF3Ec/5HXbnoAHq', 1),
(19, 'nico.contreras@gmail.com', '$2y$10$D6gu/LF6jpFlFWhCBF3YFuX9cFw6LKmsqSXbxHpsfCUiTS38pKfXG', 0),
(20, 'fedepinel@gmail.com', '$2y$10$pbsXm1oc4J5ITvHFSVg.F.zV6U3jo/BiA2ZYnw0Mx4HojpqACeNHK', 0),
(21, 'nene@gmail.com', '$2y$10$SD.Qiafjj5X3nkS4fhg7reJjLV2wmgjzsgu/V5fCf.YtkvTv.Mm9q', 0),
(22, 'fedeadmin@gmail.com', '$2y$10$16NYzraNePrqh.22IJiEvOr8H6JnPzLxKIjuHN1T2KQedlEugxZV6', 1),
(23, 'aberamagold@gmail.com', '$2y$10$UAxvzxK2XexR7BvuaT7/Lu2M1aiq0CShSwiiIMMnG8.Ywdpw/XKYC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_categoria_2` (`id_categoria`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE;

--
-- Constraints for table `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
