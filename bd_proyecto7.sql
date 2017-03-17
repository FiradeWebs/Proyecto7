-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2017 a las 16:49:55
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_icono`
--

CREATE TABLE `tbl_icono` (
  `icon_id` int(11) NOT NULL,
  `icon_ruta` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
  MODIFY `usu_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
