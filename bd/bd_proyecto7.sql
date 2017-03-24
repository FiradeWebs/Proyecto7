-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2017 a las 18:27:14
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_proyecto7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `cat_id` int(3) NOT NULL,
  `cat_nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `cat_padre` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `tbl_categoria`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_icono`
--

CREATE TABLE `tbl_icono` (
  `icon_id` int(11) NOT NULL,
  `icon_ruta` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `tbl_icono`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_interes_usuario`
--

CREATE TABLE `tbl_interes_usuario` (
  `int_fecha` datetime NOT NULL,
  `usu_id` int(5) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `int_tipo` enum('Si','No','NSNC','') COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `tbl_interes_usuario`:
--   `cat_id`
--       `tbl_categoria` -> `cat_id`
--   `usu_id`
--       `tbl_usuario` -> `usu_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_respuesta`
--

CREATE TABLE `tbl_respuesta` (
  `resp_id` int(5) NOT NULL,
  `resp_texto` text COLLATE utf8_spanish2_ci NOT NULL,
  `resp_fecha` datetime NOT NULL,
  `tema_id` int(5) NOT NULL,
  `usu_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `tbl_respuesta`:
--   `tema_id`
--       `tbl_tema` -> `tema_id`
--   `usu_id`
--       `tbl_usuario` -> `usu_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tema`
--

CREATE TABLE `tbl_tema` (
  `tema_id` int(5) NOT NULL,
  `tema_nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `tema_fecha` datetime NOT NULL,
  `tema_texto` text COLLATE utf8_spanish2_ci NOT NULL,
  `usu_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `tbl_tema`:
--   `usu_id`
--       `tbl_usuario` -> `usu_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu_id` int(5) NOT NULL,
  `usu_tipo` enum('usuario','administrador') COLLATE utf8_spanish2_ci NOT NULL,
  `usu_nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_apellidos` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_sexo` enum('Masculino','Femenino','Otro') COLLATE utf8_spanish2_ci NOT NULL,
  `usu_direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_nickname` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_pass` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_conexion` datetime NOT NULL,
  `icon_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `tbl_usuario`:
--   `icon_id`
--       `tbl_icono` -> `icon_id`
--

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_tipo`, `usu_nombre`, `usu_apellidos`, `usu_sexo`, `usu_direccion`, `usu_correo`, `usu_nickname`, `usu_pass`, `usu_conexion`, `icon_id`) VALUES
(2, 'usuario', 'David', 'Marín', 'Masculino', 'Titus Carpa Badalona', 'dcx', 'dmarin', '1234', '0000-00-00 00:00:00', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `tbl_icono`
--
ALTER TABLE `tbl_icono`
  ADD PRIMARY KEY (`icon_id`);

--
-- Indices de la tabla `tbl_respuesta`
--
ALTER TABLE `tbl_respuesta`
  ADD PRIMARY KEY (`resp_id`);

--
-- Indices de la tabla `tbl_tema`
--
ALTER TABLE `tbl_tema`
  ADD PRIMARY KEY (`tema_id`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_icono`
--
ALTER TABLE `tbl_icono`
  MODIFY `icon_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_respuesta`
--
ALTER TABLE `tbl_respuesta`
  MODIFY `resp_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tema`
--
ALTER TABLE `tbl_tema`
  MODIFY `tema_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para tbl_categoria
--

--
-- Metadatos para tbl_icono
--

--
-- Metadatos para tbl_interes_usuario
--

--
-- Metadatos para tbl_respuesta
--

--
-- Metadatos para tbl_tema
--

--
-- Metadatos para tbl_usuario
--

--
-- Metadatos para bd_proyecto7
--

--
-- Volcado de datos para la tabla `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('bd_proyecto7', 'tbl_interes_usuario', 'cat_id', 'bd_proyecto7', 'tbl_categoria', 'cat_id'),
('bd_proyecto7', 'tbl_interes_usuario', 'usu_id', 'bd_proyecto7', 'tbl_usuario', 'usu_id'),
('bd_proyecto7', 'tbl_respuesta', 'tema_id', 'bd_proyecto7', 'tbl_tema', 'tema_id'),
('bd_proyecto7', 'tbl_respuesta', 'usu_id', 'bd_proyecto7', 'tbl_usuario', 'usu_id'),
('bd_proyecto7', 'tbl_tema', 'usu_id', 'bd_proyecto7', 'tbl_usuario', 'usu_id'),
('bd_proyecto7', 'tbl_usuario', 'icon_id', 'bd_proyecto7', 'tbl_icono', 'icon_id');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
