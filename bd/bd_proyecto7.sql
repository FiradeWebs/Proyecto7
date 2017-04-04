-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2017 a las 16:51:08
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
  `cat_padre` int(5) NOT NULL,
  `cat_img` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`cat_id`, `cat_nombre`, `cat_padre`, `cat_img`) VALUES
(5, 'Deporte', 0, '1.jpg'),
(8, 'Tecnologia', 0, '2.jpg'),
(37, 'Ciencia', 0, '3.jpg'),
(38, 'Prueba4', 0, '4.jpg');

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

--
-- Volcado de datos para la tabla `tbl_interes_usuario`
--

INSERT INTO `tbl_interes_usuario` (`int_fecha`, `usu_id`, `cat_id`, `int_tipo`) VALUES
('2017-03-24 09:00:00', 2, 1, 'Si'),
('2017-03-24 10:00:00', 2, 1, 'Si'),
('2017-03-24 10:00:00', 2, 1, 'Si'),
('2017-03-24 10:00:00', 2, 1, 'Si'),
('2017-03-24 18:15:05', 2, 0, 'No'),
('2017-03-24 18:15:58', 2, 0, 'Si'),
('2017-03-24 18:16:06', 2, 0, 'No'),
('2017-03-24 19:22:57', 2, 0, ''),
('2017-03-24 19:23:48', 2, 0, ''),
('2017-03-24 19:25:46', 2, 0, 'No'),
('2017-03-24 19:25:57', 2, 0, 'Si'),
('2017-03-24 19:37:04', 2, 0, 'Si'),
('2017-03-24 19:46:06', 2, 0, 'No'),
('2017-03-24 19:46:21', 2, 0, 'Si'),
('2017-03-24 19:46:32', 2, 0, 'Si'),
('2017-03-24 19:49:30', 2, 0, 'No'),
('2017-03-24 19:49:30', 2, 0, 'Si'),
('2017-03-24 19:49:39', 2, 0, 'Si'),
('2017-03-24 19:51:47', 2, 0, 'Si'),
('2017-03-24 19:51:48', 2, 0, 'Si'),
('2017-03-24 19:51:49', 2, 0, 'No'),
('2017-03-24 19:51:49', 2, 0, 'No'),
('2017-03-24 19:53:28', 2, 0, 'No'),
('2017-03-24 19:53:33', 2, 0, 'Si'),
('2017-03-24 19:53:41', 2, 0, 'Si'),
('2017-03-27 15:37:40', 2, 0, 'No'),
('2017-03-27 15:42:54', 2, 0, 'Si'),
('2017-03-27 15:42:55', 2, 0, 'No'),
('2017-03-27 15:43:31', 2, 0, 'No'),
('2017-03-27 15:43:31', 2, 0, 'No'),
('2017-03-27 15:43:31', 2, 0, 'No'),
('2017-03-27 15:43:32', 2, 0, 'No'),
('2017-03-27 15:43:32', 2, 0, 'No'),
('2017-03-27 15:43:32', 2, 0, 'No'),
('2017-03-27 15:44:23', 2, 0, 'Si'),
('2017-03-27 15:45:51', 2, 0, 'No'),
('2017-03-27 15:45:52', 2, 0, 'No'),
('2017-03-27 15:45:52', 2, 0, 'No'),
('2017-03-27 15:45:53', 2, 0, 'No'),
('2017-03-27 15:45:53', 2, 0, 'No'),
('2017-03-27 15:49:31', 2, 0, 'Si'),
('2017-03-27 15:49:42', 2, 0, 'Si'),
('2017-03-27 15:49:58', 2, 0, 'No'),
('2017-03-27 15:50:08', 2, 0, 'Si'),
('2017-03-27 15:50:09', 2, 0, 'No'),
('2017-03-27 15:50:29', 2, 0, 'No'),
('2017-03-27 15:50:29', 2, 0, 'No'),
('2017-03-27 15:50:30', 2, 0, 'No'),
('2017-03-27 15:50:30', 2, 0, 'No'),
('2017-03-27 15:50:30', 2, 0, 'No'),
('2017-03-27 15:51:12', 2, 0, 'No'),
('2017-03-27 16:04:56', 2, 0, 'No'),
('2017-03-27 16:33:02', 2, 0, 'Si'),
('2017-03-27 16:33:22', 2, 0, 'No'),
('2017-03-27 16:36:12', 2, 0, 'Si'),
('2017-03-27 16:36:13', 2, 0, 'Si'),
('2017-03-27 16:36:13', 2, 0, 'Si'),
('2017-03-27 16:38:57', 2, 0, 'Si'),
('2017-03-28 15:40:51', 2, 0, 'No'),
('2017-03-28 15:48:04', 2, 0, 'Si'),
('2017-03-28 15:48:05', 2, 0, 'Si'),
('2017-03-28 15:48:06', 2, 0, 'Si'),
('2017-03-28 15:50:38', 2, 0, 'No'),
('2017-03-28 15:53:29', 2, 0, 'No'),
('2017-03-28 15:54:55', 2, 0, 'No'),
('2017-03-28 15:54:56', 2, 0, 'No'),
('2017-03-28 16:01:15', 2, 0, 'No'),
('2017-03-28 16:12:03', 2, 0, 'No'),
('2017-03-28 16:33:50', 2, 0, 'No'),
('2017-03-28 16:33:59', 2, 0, 'Si'),
('2017-03-28 16:34:04', 2, 0, 'Si'),
('2017-03-28 16:44:01', 2, 0, 'Si'),
('2017-03-28 16:44:34', 2, 0, 'Si'),
('2017-03-28 16:44:35', 2, 0, 'Si'),
('2017-03-28 16:44:37', 2, 0, 'Si'),
('2017-03-28 16:50:23', 2, 0, 'Si'),
('2017-03-28 16:50:26', 2, 0, 'Si'),
('2017-03-28 16:50:27', 2, 0, 'Si'),
('2017-03-28 17:02:05', 2, 0, 'No'),
('2017-03-28 17:02:11', 2, 0, 'Si'),
('2017-03-28 17:02:18', 2, 0, 'Si'),
('2017-03-28 17:02:20', 2, 0, 'No'),
('2017-03-28 17:02:23', 2, 0, 'No'),
('2017-03-28 17:02:25', 2, 0, 'Si'),
('2017-03-28 17:02:26', 2, 0, 'No'),
('2017-03-28 17:02:27', 2, 0, 'Si'),
('2017-03-28 17:02:28', 2, 0, 'No'),
('2017-03-28 17:02:28', 2, 0, 'Si'),
('2017-03-28 17:03:39', 2, 0, 'Si'),
('2017-03-28 17:04:36', 2, 0, 'No'),
('2017-03-28 17:04:39', 2, 0, 'Si'),
('2017-03-28 17:04:41', 2, 0, 'No'),
('2017-03-28 17:08:08', 2, 0, 'Si'),
('2017-03-28 17:08:28', 2, 0, ''),
('2017-03-28 17:08:30', 2, 0, ''),
('2017-03-28 17:08:46', 2, 0, ''),
('2017-03-28 17:08:59', 2, 0, 'Si'),
('2017-03-28 17:11:25', 2, 0, ''),
('2017-03-28 17:11:32', 2, 0, 'Si'),
('2017-03-28 17:11:55', 2, 0, 'Si'),
('2017-03-28 17:12:00', 2, 0, ''),
('2017-03-28 17:12:03', 2, 0, 'Si'),
('2017-03-28 17:12:34', 2, 0, ''),
('2017-03-28 17:12:37', 2, 0, ''),
('2017-03-28 17:12:39', 2, 0, 'Si'),
('2017-03-28 17:14:12', 2, 0, ''),
('2017-03-28 17:14:21', 2, 0, ''),
('2017-03-28 17:17:36', 2, 0, 'No'),
('2017-03-28 17:17:38', 2, 0, 'No'),
('2017-03-28 17:17:49', 2, 0, 'Si'),
('2017-03-28 17:19:38', 2, 0, 'No'),
('2017-03-28 17:19:40', 2, 0, 'Si'),
('2017-03-28 17:27:12', 2, 0, 'No'),
('2017-03-28 17:27:25', 2, 0, 'Si'),
('2017-03-28 17:27:52', 2, 0, 'Si'),
('2017-03-28 17:27:56', 2, 0, 'No'),
('2017-03-28 17:27:57', 2, 0, 'Si'),
('2017-03-28 17:28:01', 2, 0, 'No'),
('2017-03-28 17:28:05', 2, 0, 'Si'),
('2017-03-28 17:29:00', 2, 0, 'Si'),
('2017-03-28 17:30:02', 2, 37, ''),
('2017-03-28 17:32:09', 2, 37, 'Si'),
('2017-03-28 17:33:34', 2, 37, 'Si'),
('2017-03-28 17:33:49', 2, 8, 'No'),
('2017-03-28 17:35:20', 2, 5, 'No'),
('2017-03-28 17:49:07', 2, 8, 'Si'),
('2017-03-28 17:49:39', 2, 37, 'No'),
('2017-03-28 17:49:46', 2, 8, 'No'),
('2017-03-28 17:50:22', 2, 37, 'Si'),
('2017-03-28 17:50:23', 2, 8, 'No'),
('2017-03-28 17:51:12', 2, 37, 'Si'),
('2017-03-28 17:51:13', 2, 8, 'No'),
('2017-03-28 17:55:45', 2, 37, 'Si'),
('2017-03-28 19:21:44', 2, 37, 'Si'),
('2017-03-28 19:22:11', 2, 8, 'No'),
('2017-03-28 19:30:00', 2, 5, 'No'),
('2017-03-28 19:34:15', 2, 37, 'Si'),
('2017-03-30 17:33:30', 3, 37, 'No'),
('2017-03-30 17:34:03', 3, 8, 'No'),
('2017-03-30 17:34:16', 3, 5, 'Si'),
('2017-03-30 17:35:21', 3, 38, 'Si');

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
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_tipo`, `usu_nombre`, `usu_apellidos`, `usu_sexo`, `usu_direccion`, `usu_correo`, `usu_nickname`, `usu_pass`, `usu_conexion`, `icon_id`) VALUES
(2, 'usuario', 'David', 'Marín', 'Masculino', 'Centre estudis joan 23', 'dcx', 'dmarin', '1234', '0000-00-00 00:00:00', 0),
(3, 'usuario', 'ref', 'Marín', 'Masculino', 'Rambla de la Marina 331', ',k', 'dmarin', '1234', '0000-00-00 00:00:00', 0);

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
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
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
  MODIFY `usu_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
