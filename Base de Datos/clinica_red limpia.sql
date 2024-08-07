-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2024 a las 06:07:07
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
-- Base de datos: `clinica_red`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bitacora`
--

CREATE TABLE `tbl_bitacora` (
  `Id_Bitacora` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Accion` varchar(20) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_bitacora`
--

INSERT INTO `tbl_bitacora` (`Id_Bitacora`, `Fecha`, `Id_Usuario`, `Accion`, `Descripcion`) VALUES
(2, '2024-03-18 05:26:07', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(3, '2024-03-18 05:26:12', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(4, '2024-03-18 05:26:40', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(5, '2024-03-18 05:29:09', 1, 'ElIMINAR USUARIO', 'USUARIO  ELIMINADO'),
(6, '2024-03-18 05:34:16', 1, 'ElIMINAR USUARIO', 'USUARIO  ELIMINADO'),
(7, '2024-03-18 05:38:37', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(8, '2024-03-18 07:22:45', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(9, '2024-03-18 07:24:20', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(10, '2024-03-18 07:24:32', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(11, '2024-03-18 07:25:25', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(12, '2024-03-18 07:25:30', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(13, '2024-03-18 07:26:26', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(14, '2024-03-18 07:26:36', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(15, '2024-03-18 07:31:29', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(16, '2024-03-18 07:31:33', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(17, '2024-03-18 07:31:51', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(18, '2024-03-18 07:59:46', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(19, '2024-03-18 07:59:56', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(20, '2024-03-18 09:29:08', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(21, '2024-03-18 09:29:51', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(22, '2024-03-18 09:32:23', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(23, '2024-03-18 17:05:07', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(24, '2024-03-18 17:22:23', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(25, '2024-03-18 17:22:41', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(26, '2024-03-18 18:24:18', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(27, '2024-03-18 18:24:53', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(28, '2024-03-18 18:30:58', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(29, '2024-03-18 18:31:13', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(30, '2024-03-18 19:39:38', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(31, '2024-03-18 19:40:53', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(32, '2024-03-18 19:44:47', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(33, '2024-03-18 19:46:02', 1, 'AGREGAR USUARIO', 'USUARIO JDUARTE FUE AGREGADO'),
(34, '2024-03-18 20:01:25', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(35, '2024-03-18 20:03:08', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(36, '2024-03-18 20:03:35', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(37, '2024-03-18 20:07:55', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(38, '2024-03-18 20:12:39', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(39, '2024-03-19 05:53:43', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(40, '2024-03-19 06:41:24', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(41, '2024-03-19 06:41:42', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(42, '2024-03-19 06:58:37', 1, 'ElIMINAR USUARIO', 'USUARIO  ELIMINADO'),
(43, '2024-03-19 06:59:11', 1, 'ElIMINAR USUARIO', 'USUARIO  ELIMINADO'),
(44, '2024-03-19 07:02:32', 1, 'ElIMINAR USUARIO', 'USUARIO  ELIMINADO'),
(45, '2024-03-19 07:27:03', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(46, '2024-03-19 07:30:04', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(47, '2024-03-19 07:39:47', 1, 'ElIMINAR USUARIO', 'USUARIO  ELIMINADO'),
(48, '2024-03-19 07:44:14', 1, 'AGREGAR USUARIO', 'USUARIO SACASTRO FUE AGREGADO'),
(49, '2024-03-19 09:00:41', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(50, '2024-03-19 09:00:50', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(51, '2024-03-19 09:28:02', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(52, '2024-03-19 09:28:15', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(53, '2024-03-19 09:37:06', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(54, '2024-03-19 09:37:17', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(55, '2024-03-19 09:37:36', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(56, '2024-03-19 09:39:30', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(57, '2024-03-19 09:41:23', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(58, '2024-03-19 09:42:16', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(59, '2024-03-19 10:21:08', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(60, '2024-03-20 03:49:03', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(61, '2024-03-20 04:49:28', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(62, '2024-03-22 03:48:30', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(63, '2024-03-22 03:52:17', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(64, '2024-03-22 03:52:45', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(65, '2024-03-22 04:33:25', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(66, '2024-03-22 05:52:45', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(67, '2024-03-22 05:52:54', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(68, '2024-03-22 20:30:35', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(69, '2024-03-22 20:30:58', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(70, '2024-03-22 20:35:55', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(71, '2024-03-22 22:43:37', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(72, '2024-03-22 22:46:25', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(73, '2024-03-22 22:51:30', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(74, '2024-03-22 22:51:51', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(75, '2024-03-23 00:00:29', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(76, '2024-03-23 00:04:41', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(77, '2024-03-23 03:27:56', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(78, '2024-03-23 05:11:12', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(79, '2024-03-23 05:23:23', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(80, '2024-03-23 18:01:00', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(81, '2024-03-23 23:31:02', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(82, '2024-03-23 23:31:19', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(83, '2024-03-24 00:25:08', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(84, '2024-03-24 00:26:14', 15, 'INICIO DE SESIÓN', 'AKOJAAM INICIÓ SESIÓN'),
(85, '2024-03-24 00:29:11', 15, 'INICIO DE SESIÓN', 'AKOJAAM INICIÓ SESIÓN'),
(86, '2024-03-24 00:36:51', 15, 'INICIO DE SESIÓN', 'AKOJAAM INICIÓ SESIÓN'),
(87, '2024-03-24 00:38:42', 15, 'CIERRE DE SESIÓN', 'AKOJAAM FINALIZÓ SESIÓN.'),
(88, '2024-03-24 02:53:38', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(89, '2024-03-24 05:23:07', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(90, '2024-03-24 05:24:45', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(91, '2024-03-24 07:36:51', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(92, '2024-03-25 01:15:23', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(93, '2024-03-25 05:53:33', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(94, '2024-03-25 06:08:03', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(95, '2024-03-25 08:06:04', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(96, '2024-03-25 22:49:22', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(97, '2024-03-26 06:02:43', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(98, '2024-03-26 06:16:04', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(99, '2024-03-26 21:54:59', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(100, '2024-03-26 23:22:08', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(101, '2024-03-27 02:47:15', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(102, '2024-03-27 20:14:13', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(103, '2024-03-28 00:25:27', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(104, '2024-03-28 07:21:50', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(105, '2024-03-28 17:20:41', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(106, '2024-03-28 23:51:00', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(107, '2024-03-28 23:51:19', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(108, '2024-03-30 04:21:48', 1, 'ElIMINAR USUARIO', 'USUARIO  ELIMINADO'),
(109, '2024-04-01 04:58:13', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(110, '2024-04-01 05:37:10', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(111, '2024-04-01 06:02:43', 1, 'ElIMINAR PACIENTE', 'PACIENTE 3 ELIMINADO'),
(112, '2024-04-01 06:20:45', 1, 'ElIMINAR PACIENTE', 'PACIENTE 3 ELIMINADO'),
(113, '2024-04-01 06:24:07', 1, 'ElIMINAR PACIENTE', 'PACIENTE 3 ELIMINADO'),
(114, '2024-04-01 18:09:00', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(115, '2024-04-01 18:09:33', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(116, '2024-04-04 00:08:34', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(117, '2024-04-04 05:35:10', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(118, '2024-04-04 05:43:27', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(119, '2024-04-04 05:44:41', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(120, '2024-04-04 06:04:32', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(121, '2024-04-04 06:04:58', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(122, '2024-04-04 06:17:41', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(123, '2024-04-04 06:18:48', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(124, '2024-04-04 06:53:24', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(125, '2024-04-04 06:55:11', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(126, '2024-04-04 06:56:09', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(127, '2024-04-04 06:56:59', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(128, '2024-04-04 06:57:08', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(129, '2024-04-04 06:57:14', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(130, '2024-04-04 07:19:36', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(131, '2024-04-04 07:25:32', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(132, '2024-04-04 07:44:08', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(133, '2024-04-04 07:47:57', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(134, '2024-04-04 07:51:30', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(135, '2024-04-04 07:52:38', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(136, '2024-04-04 07:53:00', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(137, '2024-04-04 07:53:04', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(138, '2024-04-04 07:53:12', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(139, '2024-04-04 21:54:58', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(140, '2024-04-04 21:57:08', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(141, '2024-04-05 03:31:16', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(142, '2024-04-05 03:32:15', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(143, '2024-04-05 03:33:15', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(144, '2024-04-05 03:41:59', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(145, '2024-04-05 03:42:32', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(146, '2024-04-05 05:00:00', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(147, '2024-04-05 05:00:44', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(148, '2024-04-05 05:21:54', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(149, '2024-04-05 05:22:01', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(150, '2024-04-05 21:00:44', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(151, '2024-04-05 21:16:25', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(152, '2024-04-06 00:42:37', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(153, '2024-04-06 01:04:23', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(154, '2024-04-06 02:23:11', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(155, '2024-04-06 02:38:02', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(156, '2024-04-06 02:39:03', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(157, '2024-04-06 02:40:38', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(158, '2024-04-06 02:41:15', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(159, '2024-04-06 02:55:00', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(160, '2024-04-06 02:55:33', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(161, '2024-04-06 08:49:32', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(162, '2024-04-06 17:05:39', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(163, '2024-04-06 18:18:26', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(164, '2024-04-06 21:18:03', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(165, '2024-04-07 04:11:18', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(166, '2024-04-07 04:11:30', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(167, '2024-04-07 23:12:40', 1, 'AGREGAR USUARIO', 'USUARIO SACASTRO FUE AGREGADO'),
(168, '2024-04-08 01:36:47', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(169, '2024-04-08 01:36:57', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(170, '2024-04-08 16:40:23', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(171, '2024-04-08 16:40:51', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(172, '2024-04-08 16:55:39', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(173, '2024-04-08 17:09:46', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(174, '2024-04-09 16:12:25', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(175, '2024-04-10 16:49:47', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(176, '2024-04-11 19:33:33', 1, 'ElIMINAR PACIENTE', 'PACIENTE 6 ELIMINADO'),
(177, '2024-04-11 19:35:15', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(178, '2024-04-11 19:37:28', 2, 'INICIO DE SESIÓN', 'FISIATRA INICIÓ SESIÓN'),
(179, '2024-04-11 22:11:38', 2, 'CIERRE DE SESIÓN', 'FISIATRA FINALIZÓ SESIÓN.'),
(180, '2024-04-13 15:22:01', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(181, '2024-04-13 22:30:42', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(182, '2024-04-13 22:31:02', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(183, '2024-04-13 22:35:48', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(184, '2024-04-13 22:36:00', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(185, '2024-04-14 15:59:31', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(186, '2024-04-14 15:59:43', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(187, '2024-04-14 16:00:01', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(188, '2024-04-14 16:00:10', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(189, '2024-04-14 16:14:36', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(190, '2024-04-14 16:14:52', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(191, '2024-04-14 19:24:36', 1, 'AGENDAR', 'CITA 10 AGENDADA PARA EL 2024-04-14 A LAS 19:24 PARA EL PACIENTE 3'),
(192, '2024-04-14 19:56:50', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(193, '2024-04-14 19:57:04', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(194, '2024-04-14 23:17:17', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(195, '2024-04-15 00:54:46', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(196, '2024-04-15 00:54:56', 2, 'INICIO DE SESIÓN', 'FISIATRA INICIÓ SESIÓN'),
(197, '2024-04-15 01:49:42', 2, 'INICIO DE SESIÓN', 'FISIATRA INICIÓ SESIÓN'),
(198, '2024-04-15 03:26:29', 2, 'CIERRE DE SESIÓN', 'FISIATRA FINALIZÓ SESIÓN.'),
(199, '2024-04-15 03:26:45', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(200, '2024-04-15 19:00:45', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(201, '2024-04-15 19:03:16', 1, 'REGISTRAR', 'PACIENTE 8 HA SIDO REGISTRADO'),
(202, '2024-04-15 19:23:44', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(203, '2024-04-15 20:06:11', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(204, '2024-04-15 20:06:24', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(205, '2024-04-15 20:06:34', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(206, '2024-04-15 20:06:39', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(207, '2024-04-15 20:06:44', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(208, '2024-04-15 20:06:50', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(209, '2024-04-15 21:28:07', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(210, '2024-04-15 21:28:22', 4, 'INICIO DE SESIÓN', 'SACASTRO INICIÓ SESIÓN'),
(211, '2024-04-15 21:39:38', 4, 'CIERRE DE SESIÓN', 'SACASTRO FINALIZÓ SESIÓN.'),
(212, '2024-04-15 21:39:57', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(213, '2024-04-15 22:14:17', 1, 'CIERRE DE SESIÓN', 'ADMIN FINALIZÓ SESIÓN.'),
(214, '2024-04-15 22:15:12', 3, 'INICIO DE SESIÓN', 'TESTING INICIÓ SESIÓN'),
(215, '2024-04-15 22:19:57', 3, 'CIERRE DE SESIÓN', 'TESTING FINALIZÓ SESIÓN.'),
(216, '2024-04-15 22:20:13', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(217, '2024-04-15 23:02:33', 1, 'EDITAR', 'PACIENTE CON EL ID 2 HA SIDO EDITADO '),
(218, '2024-04-15 23:15:22', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(219, '2024-04-16 18:14:30', 1, 'INICIO DE SESIÓN', 'ADMIN INICIÓ SESIÓN'),
(220, '2024-04-16 18:18:12', 1, 'REGISTRAR', 'PACIENTE 9 HA SIDO REGISTRADO'),
(221, '2024-04-16 18:21:56', 1, 'HABILITAR', 'PACIENTE CON ID 9 HA SIDO INHABILITADO'),
(222, '2024-04-16 20:05:00', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(223, '2024-04-16 21:20:16', 1, 'HABILITAR', 'PACIENTE CON ID 1 HA SIDO INHABILITADO'),
(224, '2024-04-16 21:20:23', 1, 'HABILITAR', 'PACIENTE CON ID 2 HA SIDO INHABILITADO'),
(225, '2024-04-16 21:20:34', 1, 'HABILITAR', 'PACIENTE CON EL ID 2 HA SIDO HABILITADO'),
(226, '2024-04-16 21:20:38', 1, 'HABILITAR', 'PACIENTE CON EL ID 9 HA SIDO HABILITADO'),
(227, '2024-04-16 21:20:41', 1, 'HABILITAR', 'PACIENTE CON EL ID 1 HA SIDO HABILITADO'),
(228, '2024-04-16 21:20:44', 1, 'HABILITAR', 'PACIENTE CON EL ID 6 HA SIDO HABILITADO'),
(229, '2024-04-16 21:27:27', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(230, '2024-04-16 21:28:46', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(231, '2024-04-16 21:29:29', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(232, '2024-04-16 21:29:32', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(233, '2024-04-16 21:30:08', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(234, '2024-04-16 21:31:16', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(235, '2024-04-16 21:31:27', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(236, '2024-04-16 21:33:59', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(237, '2024-04-16 21:34:28', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(238, '2024-04-16 21:34:52', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(239, '2024-04-16 21:35:33', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(240, '2024-04-16 21:37:11', 1, 'EDITAR', 'PACIENTE CON EL ID 1 HA SIDO EDITADO '),
(241, '2024-04-16 21:51:50', 2, 'INICIO DE SESIÓN', 'FISIATRA INICIÓ SESIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cita_terapeutica`
--

CREATE TABLE `tbl_cita_terapeutica` (
  `id_Cita_Terapia` int(11) NOT NULL,
  `Descripcion_Cita` varchar(80) NOT NULL,
  `Fecha_Registro` datetime NOT NULL,
  `Fecha_Cita` date NOT NULL,
  `Hora_Cita` time NOT NULL,
  `Id_Paciente` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Tipo_Cita` int(11) NOT NULL,
  `Id_Especialista` int(11) NOT NULL,
  `Id_Estado_Cita` int(3) NOT NULL,
  `Id_Expediente` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_cita_terapeutica`
--

INSERT INTO `tbl_cita_terapeutica` (`id_Cita_Terapia`, `Descripcion_Cita`, `Fecha_Registro`, `Fecha_Cita`, `Hora_Cita`, `Id_Paciente`, `Id_Usuario`, `Id_Tipo_Cita`, `Id_Especialista`, `Id_Estado_Cita`, `Id_Expediente`) VALUES
(2, 'MOTIVO X', '2024-03-27 05:45:00', '2024-03-28', '14:00:00', 1, 1, 1, 1, 4, 1),
(3, 'DESGARRE DE TOBILLO', '2024-04-06 16:51:10', '2024-04-07', '15:00:00', 2, 1, 1, 1, 3, 2),
(4, 'DISPARO EN EL PIE', '2024-04-06 17:14:27', '2024-04-07', '08:00:00', 3, 1, 1, 1, 3, 3),
(5, 'FRACTURA', '2024-04-08 00:34:52', '2024-04-08', '00:34:00', 5, 1, 1, 1, 3, 7),
(6, 'FRACTURA', '2024-04-08 17:32:30', '2024-04-08', '17:32:00', 3, 1, 1, 1, 3, 3),
(7, 'FRACTURA', '2024-04-10 23:54:12', '2024-04-10', '23:54:00', 6, 1, 2, 1, 4, 8),
(8, 'FRACTURA', '2024-04-10 23:59:49', '2024-04-10', '23:59:00', 6, 1, 2, 1, 4, 8),
(9, 'FRACTURA', '2024-04-11 19:35:01', '2024-04-11', '17:00:00', 7, 1, 1, 2, 4, 9),
(10, 'FRACTURA', '2024-04-14 19:24:36', '2024-04-14', '19:24:00', 3, 1, 1, 2, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contacto_paciente`
--

CREATE TABLE `tbl_contacto_paciente` (
  `Id_Contacto_Paciente` int(11) NOT NULL,
  `Contacto_Paciente` varchar(50) NOT NULL,
  `Id_Paciente` int(11) NOT NULL,
  `Id_Tipo_Contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contacto_usuario`
--

CREATE TABLE `tbl_contacto_usuario` (
  `Id_Contacto_Usuario` int(11) NOT NULL,
  `Contacto_Usuario` varchar(50) DEFAULT NULL,
  `Id_Tipo_Contacto` int(11) DEFAULT NULL,
  `Id_Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_expediente`
--

CREATE TABLE `tbl_detalle_expediente` (
  `Id_Detalle_Expediente` int(11) NOT NULL,
  `Fecha_Evaluacion` datetime NOT NULL,
  `Lateralidad` varchar(50) NOT NULL,
  `Referido` varchar(50) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Cita_Terapia` int(11) NOT NULL,
  `Id_Expediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_detalle_expediente`
--

INSERT INTO `tbl_detalle_expediente` (`Id_Detalle_Expediente`, `Fecha_Evaluacion`, `Lateralidad`, `Referido`, `Id_Usuario`, `Id_Cita_Terapia`, `Id_Expediente`) VALUES
(29, '2024-04-08 23:42:22', 'No se ingresó campo', 'No se ingresó campo', 1, 6, 3),
(30, '2024-04-08 23:53:40', 'No se ingresó campo', 'No se ingresó campo', 1, 6, 3),
(31, '2024-04-09 00:04:29', 'No se ingresó campo', 'No se ingresó campo', 1, 6, 3),
(32, '2024-04-09 00:19:14', '0', '0', 1, 6, 3),
(33, '2024-04-09 00:20:13', 'No se ingresó campo', 'No se ingresó campo', 1, 6, 3),
(34, '2024-04-09 00:25:09', '', '', 1, 6, 3),
(35, '2024-04-10 23:48:56', '0', '0', 1, 2, 1),
(36, '2024-04-10 23:54:20', '0', '0', 1, 7, 8),
(37, '2024-04-10 23:59:55', '0', '0', 1, 8, 8),
(38, '2024-04-11 19:41:21', '0', '0', 2, 9, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_terapia`
--

CREATE TABLE `tbl_detalle_terapia` (
  `Id_Detalle_Terapia` int(11) NOT NULL,
  `Numero_Sesiones` varchar(20) NOT NULL,
  `Fecha_Terapia` datetime NOT NULL,
  `Id_Cita_Terapia` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Expediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_terapia_tratamiento`
--

CREATE TABLE `tbl_detalle_terapia_tratamiento` (
  `IdDetalleTerapiaTratamiento` int(11) NOT NULL,
  `Id_Detalle_Terapia` int(11) NOT NULL,
  `Id_Tipo_Terapia` int(11) NOT NULL,
  `Resultado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_detalle_terapia_tratamiento`
--

INSERT INTO `tbl_detalle_terapia_tratamiento` (`IdDetalleTerapiaTratamiento`, `Id_Detalle_Terapia`, `Id_Tipo_Terapia`, `Resultado`) VALUES
(1, 1, 2, '3'),
(2, 1, 1, 'hea v'),
(3, 1, 2, 'fog v'),
(4, 1, 3, 'app v'),
(5, 1, 1, 'hea v'),
(6, 1, 2, 'fog v'),
(7, 1, 3, 'app v'),
(8, 1, 42, 'julio'),
(9, 1, 43, 'hz'),
(10, 1, 44, 'min'),
(11, 1, 45, 'ptos'),
(12, 1, 46, 'obs'),
(13, 1, 42, 'just'),
(14, 1, 43, 'hz'),
(15, 1, 44, 'mmin'),
(16, 1, 45, 'pto'),
(17, 1, 46, 'obs'),
(18, 1, 1, 'area'),
(19, 1, 2, 'time'),
(20, 1, 3, 'protocolo'),
(21, 1, 1, 'area'),
(22, 1, 2, 'time'),
(23, 1, 3, 'protocolo'),
(24, 1, 1, 'area'),
(25, 1, 2, 'time'),
(26, 1, 3, 'protocolo'),
(27, 1, 1, 'hea v'),
(28, 1, 2, 'fog v'),
(29, 1, 3, 'app v'),
(30, 1, 1, 'hea v'),
(31, 1, 2, 'fog v'),
(32, 1, 3, 'app v'),
(33, 1, 1, 'hea v'),
(34, 1, 2, 'fog v'),
(35, 1, 3, 'app v'),
(36, 1, 1, 'hea v'),
(37, 1, 2, 'fog v'),
(38, 1, 3, 'app v'),
(39, 1, 1, 'hea v'),
(40, 1, 2, 'fog v'),
(41, 1, 3, 'app v'),
(42, 1, 1, '1'),
(43, 1, 2, '2'),
(44, 1, 1, 'area'),
(45, 1, 2, 'tiempo'),
(46, 1, 3, 'protocolo'),
(47, 1, 0, 'ANTHONI AVILA'),
(48, 1, 0, '22'),
(49, 1, 0, 'CLÍNICA RED'),
(50, 1, 0, 'DESGARRE DE TOBILLO'),
(51, 1, 0, '5 veces a la semana'),
(52, 1, 0, '3'),
(53, 1, 0, '2'),
(54, 1, 0, '1'),
(55, 16, 1, 'q'),
(56, 16, 2, 'w'),
(57, 16, 3, 'e'),
(58, 16, 165, 't'),
(59, 17, 1, 'dulce'),
(60, 17, 2, 'dulce'),
(61, 17, 3, 'dulce'),
(62, 17, 42, 'dulce'),
(63, 17, 43, 'dulce'),
(64, 17, 44, 'dulce'),
(65, 17, 45, 'dulce'),
(66, 17, 46, 'dulce'),
(67, 17, 165, 'dulce'),
(68, 18, 1, 'area 5'),
(69, 18, 2, 'tiempo 5'),
(70, 18, 3, 'protocolo 5'),
(71, 18, 42, 'julios 5'),
(72, 18, 43, 'hz 5'),
(73, 18, 44, 'min pto 5'),
(74, 18, 45, 'ptos 5'),
(75, 18, 46, 'obs 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dia_feriado`
--

CREATE TABLE `tbl_dia_feriado` (
  `Id_Dia_Feriado` int(11) NOT NULL,
  `Dia_Feriado` date NOT NULL,
  `Creado_Por` varchar(45) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Modificado_Por` varchar(15) NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_cita`
--

CREATE TABLE `tbl_estado_cita` (
  `Id_Estado_Cita` int(11) NOT NULL,
  `Estado_Cita` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_estado_cita`
--

INSERT INTO `tbl_estado_cita` (`Id_Estado_Cita`, `Estado_Cita`) VALUES
(1, 'PENDIENTE'),
(2, 'EN ESPERA'),
(3, 'EN ATENCIÓN'),
(4, 'FINALIZADO'),
(5, 'CANCELADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_usuario`
--

CREATE TABLE `tbl_estado_usuario` (
  `Id_Estado` int(11) NOT NULL,
  `Descripcion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_estado_usuario`
--

INSERT INTO `tbl_estado_usuario` (`Id_Estado`, `Descripcion`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO'),
(3, 'BLOQUEADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_evaluacion`
--

CREATE TABLE `tbl_evaluacion` (
  `Id_Evaluacion` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_evaluacion`
--

INSERT INTO `tbl_evaluacion` (`Id_Evaluacion`, `Descripcion`) VALUES
(1, 'HISTORIAL CLÍNICO'),
(2, 'EXÁMEN FÍSICO'),
(3, 'DIAGNÓSTICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_expediente`
--

CREATE TABLE `tbl_expediente` (
  `id_Expediente` int(11) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `id_Usuario` int(11) NOT NULL,
  `Id_Paciente` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_genero`
--

CREATE TABLE `tbl_genero` (
  `IdGenero` int(11) NOT NULL,
  `Descripcion` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_genero`
--

INSERT INTO `tbl_genero` (`IdGenero`, `Descripcion`) VALUES
(1, 'MASCULINO'),
(2, 'FEMENINO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horario`
--

CREATE TABLE `tbl_horario` (
  `Id_Horario` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Hora_Entrada` time NOT NULL,
  `Hora_Salida` time NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `Creado_Por` varchar(15) NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL,
  `Modificado_Por` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ms_hist_contrasena`
--

CREATE TABLE `tbl_ms_hist_contrasena` (
  `Id_Hist` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_ms_hist_contrasena`
--

INSERT INTO `tbl_ms_hist_contrasena` (`Id_Hist`, `Id_Usuario`, `Contrasena`, `Fecha_Modificacion`) VALUES
(1, 1, 'd2a1e5441f59e167f290d9cd79796ebc', '2024-03-11 00:09:15'),
(2, 1, '8e40ebff592b5911262aece74c7a1d3b', '2024-03-11 00:12:04'),
(3, 1, 'd2a1e5441f59e167f290d9cd79796ebc', '2024-03-11 01:12:14'),
(4, 1, '8e40ebff592b5911262aece74c7a1d3b', '2024-03-11 02:04:35'),
(5, 1, 'd2a1e5441f59e167f290d9cd79796ebc', '2024-03-11 02:24:44'),
(6, 1, '7130920ce9513f54979d543bc3022e20', '2024-03-11 02:35:23'),
(7, 1, 'd2a1e5441f59e167f290d9cd79796ebc', '2024-03-21 23:52:16'),
(8, 1, '8e40ebff592b5911262aece74c7a1d3b', '2024-03-22 11:22:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ms_objetos`
--

CREATE TABLE `tbl_ms_objetos` (
  `Id_Objetos` int(11) NOT NULL,
  `Objeto` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Tipo_Objeto` varchar(15) NOT NULL,
  `Creado_Por` varchar(15) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `Modificado_Por` varchar(15) NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_ms_objetos`
--

INSERT INTO `tbl_ms_objetos` (`Id_Objetos`, `Objeto`, `Descripcion`, `Tipo_Objeto`, `Creado_Por`, `Fecha_Creacion`, `Modificado_Por`, `Fecha_Modificacion`) VALUES
(1, 'V_Paciente', 'Vista para agregar, eliminar y editar pacientes', 'Agregar Pacient', 'Administrador', '2024-03-31 07:19:51', '', '2024-03-31 07:19:51'),
(2, 'V_modal_cita', 'Vista que permite agendar citas a los pacientes', 'Agendar Citas', 'Administrador', '2024-03-31 07:19:51', '', '2024-03-31 07:19:51'),
(3, 'V_modal_expediente', 'Objeto que permite ver los expedientes y crear nuevos expedientes para los pacientes', 'Gestion Expedie', 'Administrador', '2024-03-31 07:50:46', '', '2024-03-31 07:50:46'),
(4, 'V_modal_historial_cita', 'Permite ver el historial de las citas de un expediente', 'Administrador', 'Administrador', '2024-03-31 07:50:46', '', '2024-03-31 07:50:46'),
(5, 'V_usuario', 'Vista para agregar, eliminar y editar Usuarios', 'Crear usuarios', 'Administrador', '2024-03-31 07:53:51', '', '2024-03-31 07:53:51'),
(6, 'V_roles', 'Objeto para crear y eliminar roles', 'Secretaria', 'Administrador', '2024-03-31 07:53:51', '', '2024-03-31 07:53:51'),
(7, 'V_permisos', 'Permite asignar permisos a los roles.', 'Fisiatra', 'Fisiatra', '2024-03-31 07:55:44', '', '2024-03-31 07:55:44'),
(8, 'Bitacora.php', 'Objeto que registra la bitacora del sistema', 'Fisiatra', 'Administrador', '2024-03-31 07:55:44', '', '2024-03-31 07:55:44'),
(9, 'V_modal_parametros', 'Objeto para gestionar parámetros del sistema', 'Administrador', 'Administrador', '2024-03-31 07:58:24', '', '2024-03-31 07:58:24'),
(10, 'V_modal_evaluacion', 'Mantenimiento de Expediente Clinico', 'Administrador', 'Administrador', '2024-03-31 07:58:24', '', '2024-03-31 07:58:24'),
(11, 'V_modal_terapeutico', 'Mantenimiento del expediente Terapeutico', '', 'Administrador', '2024-04-14 22:19:12', '', '2024-04-14 22:19:12'),
(12, 'V_modal_identidad', 'Mantenimiento de los tipos de documentos', '13', 'Administrador', '2024-04-14 22:19:12', '', '2024-04-14 22:19:12'),
(13, 'Main', 'Vista principal del main', '', 'Administrador', '2024-04-15 10:22:02', '', '2024-04-15 10:22:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ms_parametros`
--

CREATE TABLE `tbl_ms_parametros` (
  `Id_Parametro` int(11) NOT NULL,
  `Parametro` varchar(50) NOT NULL,
  `Valor` varchar(100) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `Modificado_Por` int(11) NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_ms_parametros`
--

INSERT INTO `tbl_ms_parametros` (`Id_Parametro`, `Parametro`, `Valor`, `Id_Usuario`, `Fecha_Creacion`, `Modificado_Por`, `Fecha_Modificacion`) VALUES
(1, 'CANT_MIN_CLAVE', '10', 1, '2024-03-01 05:08:58', 15, '2024-03-26 21:13:58'),
(2, 'CANT_MAX_CLAVE', '35', 1, '2024-03-01 05:08:58', 15, '2024-03-18 03:26:05'),
(3, 'Servidor_SMTP', 'smtp.gmail.com', 1, '2024-03-14 06:24:31', 15, '2024-03-18 13:41:34'),
(4, 'Correo_SMTP', 'redelectrodiagnostico@gmail.com', 1, '2024-03-14 06:24:31', 1, '2024-03-14 06:24:31'),
(5, 'Clave_SMTP', 'avvg ofcb bqzm wbrv', 1, '2024-03-14 06:24:31', 1, '2024-03-14 06:24:31'),
(6, 'Cifrado_SMTP', 'SSL', 1, '2024-03-14 06:24:31', 1, '2024-03-14 06:24:31'),
(7, 'Puerto_SMTP', '587', 1, '2024-03-14 06:24:31', 1, '2024-03-14 06:24:31'),
(8, 'Nombre_Sistema', 'Clinica Red', 1, '2024-04-12 06:36:54', 1, '2024-04-12 06:36:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ms_permisos`
--

CREATE TABLE `tbl_ms_permisos` (
  `Id_Permisos` int(3) NOT NULL,
  `Id_Rol` int(11) NOT NULL,
  `Id_Objeto` int(11) NOT NULL,
  `Permiso_Insercion` int(1) NOT NULL,
  `Permiso_Eliminacion` int(1) NOT NULL,
  `Permiso_Actualizacion` int(1) NOT NULL,
  `Permiso_Consultar` int(1) NOT NULL,
  `Permiso_Reportes` int(1) NOT NULL,
  `Permiso_Terapeutico` int(3) NOT NULL,
  `Permiso_Clinico` int(1) NOT NULL,
  `Creado_Por` varchar(15) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `Modificado_Por` varchar(15) NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_ms_permisos`
--

INSERT INTO `tbl_ms_permisos` (`Id_Permisos`, `Id_Rol`, `Id_Objeto`, `Permiso_Insercion`, `Permiso_Eliminacion`, `Permiso_Actualizacion`, `Permiso_Consultar`, `Permiso_Reportes`, `Permiso_Terapeutico`, `Permiso_Clinico`, `Creado_Por`, `Fecha_Creacion`, `Modificado_Por`, `Fecha_Modificacion`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-03-31 09:08:39', '', '2024-03-31 09:08:39'),
(2, 1, 2, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-03-31 09:08:39', '', '2024-03-31 09:08:39'),
(3, 1, 3, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-04-14 22:40:05', '', '2024-04-14 22:40:05'),
(4, 1, 4, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-04-14 22:40:05', '', '2024-04-14 22:40:05'),
(5, 1, 5, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-03-31 09:11:42', '', '2024-03-31 09:11:42'),
(6, 1, 6, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-03-31 09:11:42', '', '2024-03-31 09:11:42'),
(7, 1, 7, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-03-31 09:17:23', '', '2024-03-31 09:17:23'),
(8, 1, 8, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-04-01 02:38:44', '', '2024-04-01 02:38:44'),
(9, 1, 9, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-04-01 02:38:44', '', '2024-04-01 02:38:44'),
(10, 1, 10, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-04-01 02:44:39', '', '2024-04-01 02:44:39'),
(11, 1, 11, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-04-01 02:44:39', '', '2024-04-01 02:44:39'),
(12, 1, 12, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '2024-04-01 02:45:57', '', '2024-04-01 02:45:57'),
(13, 2, 1, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:45:57', '', '2024-04-01 02:45:57'),
(14, 2, 3, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:48:45', '', '2024-04-01 02:48:45'),
(15, 2, 4, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:48:45', '', '2024-04-01 02:48:45'),
(16, 2, 5, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:50:34', '', '2024-04-01 02:50:34'),
(17, 2, 6, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:50:34', '', '2024-04-01 02:50:34'),
(18, 2, 7, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:52:13', '', '2024-04-01 02:52:13'),
(19, 2, 8, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:52:13', '', '2024-04-01 02:52:13'),
(20, 2, 9, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '2024-04-01 02:55:41'),
(21, 2, 10, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:55:41', '', '2024-04-01 02:55:41'),
(22, 2, 11, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:56:31', '', '2024-04-01 02:56:31'),
(23, 2, 12, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:56:31', '', '2024-04-01 02:56:31'),
(24, 2, 2, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:58:53', '', '2024-04-01 02:58:53'),
(25, 3, 1, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:58:53', '', '2024-04-01 02:58:53'),
(26, 3, 2, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:59:47', '', '2024-04-01 02:59:47'),
(27, 3, 3, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 02:59:48', '', '2024-04-01 02:59:48'),
(28, 3, 4, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 03:15:59', '', '2024-04-01 03:15:59'),
(29, 3, 5, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 03:15:59', '', '2024-04-01 03:15:59'),
(30, 3, 6, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 03:17:26', '', '2024-04-01 03:17:26'),
(31, 3, 7, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 03:17:26', '', '2024-04-01 03:17:26'),
(32, 3, 8, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 03:20:33', '', '2024-04-01 03:20:33'),
(33, 3, 9, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 03:20:33', '', '2024-04-01 03:20:33'),
(34, 3, 7, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 03:25:57', '', '2024-04-01 03:25:57'),
(35, 3, 10, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 03:25:57', '', '2024-04-01 03:25:57'),
(36, 3, 11, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 03:33:45', '', '2024-04-01 03:33:45'),
(37, 3, 12, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '2024-04-01 03:33:45', '', '2024-04-01 03:33:45'),
(38, 4, 1, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '2024-04-01 03:46:28', '', '2024-04-01 03:46:28'),
(39, 4, 2, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '2024-04-01 03:46:28', '', '2024-04-01 03:46:28'),
(40, 4, 3, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '2024-04-01 03:49:43', '', '2024-04-01 03:49:43'),
(41, 4, 4, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '2024-03-31 09:07:32', '', '2024-03-31 09:07:32'),
(42, 4, 5, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '2024-04-01 03:51:21', '', '2024-04-01 03:51:21'),
(43, 4, 6, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '2024-04-01 03:51:21', '', '2024-04-01 03:51:21'),
(44, 4, 7, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '2024-04-01 03:56:35', '', '2024-04-01 03:56:35'),
(45, 4, 8, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(46, 4, 9, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(47, 4, 10, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(48, 4, 11, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(49, 4, 12, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(50, 5, 1, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(51, 5, 2, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(52, 5, 3, 1, 1, 1, 1, 1, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(53, 5, 4, 1, 1, 1, 0, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(54, 5, 5, 1, 1, 1, 0, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(55, 5, 6, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(56, 5, 7, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(57, 5, 8, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(58, 5, 9, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(59, 5, 10, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(60, 5, 11, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(61, 5, 12, 0, 0, 0, 0, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(62, 6, 1, 1, 1, 1, 0, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(63, 6, 2, 1, 1, 1, 0, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(64, 6, 3, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(65, 6, 4, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(66, 6, 5, 1, 1, 1, 0, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(67, 6, 6, 1, 1, 1, 0, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(68, 6, 7, 1, 1, 1, 0, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(69, 6, 8, 1, 1, 1, 0, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(70, 6, 9, 1, 1, 1, 0, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(71, 6, 10, 0, 0, 1, 0, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(72, 6, 11, 0, 0, 1, 0, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(73, 6, 12, 0, 0, 1, 0, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(74, 7, 1, 0, 0, 0, 0, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(75, 7, 2, 0, 0, 0, 0, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(76, 7, 3, 0, 0, 0, 1, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(77, 7, 4, 0, 0, 0, 1, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(78, 7, 5, 0, 0, 0, 0, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(79, 7, 6, 0, 0, 0, 0, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(80, 7, 7, 0, 0, 0, 0, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(81, 7, 8, 0, 0, 0, 0, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(82, 7, 9, 0, 0, 0, 0, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(83, 7, 10, 0, 0, 0, 0, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(84, 7, 11, 0, 0, 0, 0, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(85, 7, 12, 0, 0, 0, 0, 0, 1, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(86, 1, 13, 1, 1, 1, 1, 1, 1, 1, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(87, 2, 13, 0, 0, 0, 1, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(88, 3, 13, 0, 0, 0, 1, 0, 0, 0, 'Administrador', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(89, 4, 13, 1, 1, 1, 1, 1, 0, 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(90, 5, 13, 0, 0, 0, 1, 0, 0, 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(91, 6, 13, 0, 0, 0, 1, 0, 0, 1, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(92, 7, 13, 0, 0, 0, 1, 0, 1, 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ms_roles`
--

CREATE TABLE `tbl_ms_roles` (
  `Id_Rol` int(11) NOT NULL,
  `Rol` varchar(30) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Creado_Por` varchar(15) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `Modificado_Por` varchar(15) NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_ms_roles`
--

INSERT INTO `tbl_ms_roles` (`Id_Rol`, `Rol`, `Descripcion`, `Creado_Por`, `Fecha_Creacion`, `Modificado_Por`, `Fecha_Modificacion`) VALUES
(1, 'SUPERADMINISTRADOR', 'TIENE ACCESO A TODO EL SISTEMA', '1', '2024-02-13 05:01:09', '1', '2024-02-13 05:01:09'),
(2, 'DEFECTO', 'ROL ESPECÍFICO PARA EL AUTOREGISTRO', '1', '2024-03-04 00:38:03', '1', '2024-03-04 00:38:03'),
(3, 'USUARIO', 'CAMBIA DE DEFECTO A USUARIO PARA VISUALIZAR EL MAIN', '1', '2024-03-04 21:39:12', '1', '2024-03-04 21:39:12'),
(4, 'ADMINISTRADOR', 'ADMINISTRACION GENERAL DEL SISTEMA', '1', '2024-03-14 05:16:59', '1', '2024-03-14 05:16:59'),
(5, 'SECRETARIA', 'ACCESO A GESTION DE CITAS', '1', '2024-03-14 05:16:59', '1', '2024-03-14 05:16:59'),
(6, 'FISIATRA', 'ACCESO A AGENDA Y EXPEDIENTES', '1', '2024-03-27 22:30:54', '1', '2024-03-27 22:30:54'),
(7, 'TERAPEUTA', 'SOLO VISUALIZAR EXPEDIENTES', '1', '2024-03-27 22:30:54', '1', '2024-03-27 22:30:54'),
(8, 'PRUEBA', 'PRUEBA', '', '2024-04-15 21:27:08', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ms_usuario`
--

CREATE TABLE `tbl_ms_usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `DNI` varchar(13) DEFAULT NULL,
  `Usuario` varchar(15) DEFAULT NULL,
  `Correo` varchar(40) DEFAULT NULL,
  `Nombre` varchar(80) DEFAULT NULL,
  `Direccion` varchar(80) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `FechaContratacion` datetime DEFAULT NULL,
  `Estado_Usuario` int(11) DEFAULT NULL,
  `Contrasena` varchar(35) DEFAULT NULL,
  `IdRol` int(11) DEFAULT NULL,
  `IdGenero` int(11) DEFAULT NULL,
  `primer_ingreso` int(11) NOT NULL DEFAULT 0,
  `Fecha_Ultima_Conexion` datetime DEFAULT NULL,
  `Primer_Inicio_Sesion` datetime DEFAULT NULL,
  `Fecha_Vencimiento` date DEFAULT NULL,
  `Creado_Por` varchar(15) DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `Numero_Inicio_Sesion` int(11) DEFAULT NULL,
  `CodigoOTP` int(6) NOT NULL,
  `FechaExpiracionOTP` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_ms_usuario`
--

INSERT INTO `tbl_ms_usuario` (`Id_Usuario`, `DNI`, `Usuario`, `Correo`, `Nombre`, `Direccion`, `FechaNacimiento`, `FechaContratacion`, `Estado_Usuario`, `Contrasena`, `IdRol`, `IdGenero`, `primer_ingreso`, `Fecha_Ultima_Conexion`, `Primer_Inicio_Sesion`, `Fecha_Vencimiento`, `Creado_Por`, `Fecha_Creacion`, `Numero_Inicio_Sesion`, `CodigoOTP`, `FechaExpiracionOTP`) VALUES
(1, '0802200289432', 'ADMIN', 'redelectrodiagnostico@gmail.com', 'CLÍNICA RED', 'SPS', '2024-03-02', '2024-03-04 22:25:36', 1, 'd2a1e5441f59e167f290d9cd79796ebc', 1, 1, 1, '2024-03-04 22:25:06', '2024-03-10 20:22:09', NULL, NULL, NULL, NULL, 537844, '2024-04-12 15:09:39'),
(2, '420943439432', 'FISIATRA', 'fisiatra@gmail.com', 'FISIATRA', 'SPS', '1996-04-02', '2024-04-01 23:54:35', 1, 'd2a1e5441f59e167f290d9cd79796ebc', 6, 1, 1, NULL, '2024-04-11 19:37:28', NULL, NULL, NULL, NULL, 0, NULL),
(3, '0802199812345', 'TESTING', 'terapeuta@gmail.com', 'TERAPEUTA', 'TESTING', '1998-10-10', '2024-04-02 00:00:00', 1, 'd2a1e5441f59e167f290d9cd79796ebc', 7, 1, 1, NULL, '2024-04-15 22:15:12', NULL, NULL, '2024-04-05 21:01:27', NULL, 0, NULL),
(4, '801199908838', 'SECRETARIA', 'secretaria@gmail.com', 'SECRETARIA', 'COL 21 DE OCTUBRE', '0000-00-00', '2024-04-09 00:00:00', 1, 'd2a1e5441f59e167f290d9cd79796ebc', 5, 1, 1, NULL, '2024-04-15 21:28:22', NULL, NULL, '2024-04-10 00:00:00', NULL, 0, NULL);

--
-- Disparadores `tbl_ms_usuario`
--
DELIMITER $$
CREATE TRIGGER `guardar_contrasena_anterior` BEFORE UPDATE ON `tbl_ms_usuario` FOR EACH ROW BEGIN
    IF OLD.Contrasena <> NEW.Contrasena THEN
        INSERT INTO tbl_ms_hist_contrasena (Id_Usuario, Contrasena, Fecha_Modificacion)
        VALUES (OLD.Id_Usuario, OLD.Contrasena, NOW());
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_observacion_fisioterapeuta`
--

CREATE TABLE `tbl_observacion_fisioterapeuta` (
  `Id_Obs_Fisioterapeuta` int(11) NOT NULL,
  `Observaciones` varchar(100) DEFAULT NULL,
  `Otro` varchar(100) DEFAULT NULL,
  `id_Expediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_paciente`
--

CREATE TABLE `tbl_paciente` (
  `Id_Paciente` int(11) NOT NULL,
  `Numero_Documento` varchar(15) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `Direccion` varchar(80) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `IdGenero` int(11) NOT NULL,
  `Id_Tipo_Documento` int(11) NOT NULL,
  `Ocupacion` varchar(50) NOT NULL,
  `Estado_Paciente` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pin`
--

CREATE TABLE `tbl_pin` (
  `Id_Pin` int(11) NOT NULL,
  `Pin` int(11) DEFAULT NULL,
  `Id_Usuario` int(11) DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `Creado_Por` varchar(15) DEFAULT NULL,
  `Modificado_Por` varchar(15) DEFAULT NULL,
  `Fecha_Modificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_pin`
--

INSERT INTO `tbl_pin` (`Id_Pin`, `Pin`, `Id_Usuario`, `Fecha_Creacion`, `Creado_Por`, `Modificado_Por`, `Fecha_Modificacion`) VALUES
(1, 12345, NULL, '2024-02-12 23:20:16', NULL, NULL, NULL),
(2, 12345, NULL, '2024-02-13 22:54:03', NULL, NULL, NULL),
(3, 12345, NULL, '2024-02-14 16:20:34', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_resultado_evaluacion`
--

CREATE TABLE `tbl_resultado_evaluacion` (
  `Id_Resultado_Evaluacion` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Id_Evaluacion` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_resultado_evaluacion`
--

INSERT INTO `tbl_resultado_evaluacion` (`Id_Resultado_Evaluacion`, `Descripcion`, `Id_Evaluacion`) VALUES
(1, 'HEA', 1),
(2, 'FOG', 1),
(3, 'APP', 1),
(4, 'AHxDxQx', 1),
(5, 'AIA', 1),
(6, 'AVD', 1),
(7, 'PA', 2),
(8, 'FC', 2),
(9, 'SatO2', 2),
(10, 'PESO', 2),
(11, 'IDx', 3),
(12, 'INDICACIONES MÉDICAS', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_resultado_expediente`
--

CREATE TABLE `tbl_resultado_expediente` (
  `Id_Resultado_Expediente` int(11) NOT NULL,
  `Id_Resultado_Evaluacion` int(11) NOT NULL,
  `Id_Detalle_Expediente` int(11) NOT NULL,
  `Resultado` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_terapia_expediente`
--

CREATE TABLE `tbl_terapia_expediente` (
  `Id_Terapia` int(11) NOT NULL,
  `Numero_Sesiones` int(11) NOT NULL,
  `Id_Expediente` int(11) NOT NULL,
  `Id_Tipo_Tratamiento` int(11) NOT NULL,
  `Id_Tipo_Distribucion` int(11) NOT NULL,
  `Observacion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_terapia_expediente`
--

INSERT INTO `tbl_terapia_expediente` (`Id_Terapia`, `Numero_Sesiones`, `Id_Expediente`, `Id_Tipo_Tratamiento`, `Id_Tipo_Distribucion`, `Observacion`) VALUES
(1, 4, 1, 1, 1, 'OPCIONAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_cita`
--

CREATE TABLE `tbl_tipo_cita` (
  `Id_Tipo_Cita` int(11) NOT NULL,
  `Descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_cita`
--

INSERT INTO `tbl_tipo_cita` (`Id_Tipo_Cita`, `Descripcion`) VALUES
(1, 'DIAGNÓSTICO'),
(2, 'TERAPIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_contacto`
--

CREATE TABLE `tbl_tipo_contacto` (
  `Id_Tipo_Contacto` int(11) NOT NULL,
  `Descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_distribucion`
--

CREATE TABLE `tbl_tipo_distribucion` (
  `Id_Tipo_Distribucion` int(11) NOT NULL,
  `Descripcion` varchar(10) NOT NULL,
  `Frecuencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_distribucion`
--

INSERT INTO `tbl_tipo_distribucion` (`Id_Tipo_Distribucion`, `Descripcion`, `Frecuencia`) VALUES
(1, 'SEMANAL', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_documento`
--

CREATE TABLE `tbl_tipo_documento` (
  `Id_Tipo_Documento` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_documento`
--

INSERT INTO `tbl_tipo_documento` (`Id_Tipo_Documento`, `Descripcion`) VALUES
(1, 'IDENTIDAD'),
(2, 'PASAPORTE'),
(3, 'IDENTIDAD EXTRANJERA'),
(6, 'RTN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_terapia`
--

CREATE TABLE `tbl_tipo_terapia` (
  `idTipoTerapia` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Id_Tipo_Tratamiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_terapia`
--

INSERT INTO `tbl_tipo_terapia` (`idTipoTerapia`, `Nombre`, `Id_Tipo_Tratamiento`) VALUES
(1, 'ÁREA', 1),
(2, 'TIEMPO', 1),
(3, 'PROTOCOLO/DOSIS', 1),
(4, 'COMPRESA CALIENTE', 2),
(5, 'COMPRESA FRÍA', 2),
(6, 'CONTRASTE', 2),
(7, 'PARAFINA', 2),
(8, 'TINA MANO/PIE', 2),
(9, 'ÁREA', 2),
(10, 'TIEMPO', 2),
(11, 'OBSERVACIÓN', 2),
(12, 'RELAJANTE', 3),
(13, 'ESTIMULANTE', 3),
(14, 'LIBERAR ADHERENCIAS', 3),
(15, 'DESCARGA', 3),
(16, 'DRENAJE LINFÁTICO', 3),
(17, 'ÁREA', 3),
(18, 'OBSERVACIÓN', 3),
(19, 'TENS', 4),
(20, 'ALTO VOLT', 4),
(21, 'IF', 4),
(22, 'Bi', 4),
(23, 'Te', 4),
(24, 'VMS', 4),
(25, 'RUSAS', 4),
(26, 'GALVÁNICA', 4),
(27, 'PUNTERO', 4),
(28, 'MICROCORRIENTE', 4),
(29, 'COMPEX', 4),
(30, 'DOSIS', 4),
(31, 'TIEMPO', 4),
(32, 'ÁREA', 4),
(33, 'OBSERVACIÓN', 4),
(34, 'COMBINADO', 5),
(35, 'PULSÁTIL%', 5),
(36, 'CONTINUO', 5),
(37, 'WATTS', 5),
(38, 'Mhz', 5),
(39, 'TIEMPO', 5),
(40, 'ÁREA', 5),
(41, 'OBSERVACIÓN', 5),
(42, 'JULIOS', 6),
(43, 'Hz', 6),
(44, 'MIN/Pto', 6),
(45, 'Ptos', 6),
(46, 'OBSERVACIÓN', 6),
(47, 'PASIVA', 7),
(48, 'A-A', 7),
(49, 'A-L', 7),
(50, 'GENTIL', 7),
(51, 'FORZADA', 7),
(52, 'ÁREA', 7),
(53, 'OBSERVACIÓN', 7),
(54, 'CERVICAL', 8),
(55, 'PÉLVICA', 8),
(56, 'INTERMITENTE', 8),
(57, 'CONTINUA', 8),
(58, 'MANTENER', 8),
(59, 'seg/Descanso', 8),
(60, 'PESO Min', 8),
(61, 'LB/MAX', 8),
(62, 'TIEMPO', 8),
(63, 'AUMENTO GRADUAL', 8),
(64, 'OBSERVACIÓN', 8),
(65, 'RUEDA DE HOMBRO', 9),
(66, 'ESCALERILLA', 9),
(67, 'PATÍN', 9),
(68, 'ESTABILIZACIÓN ESCAPULAR', 9),
(69, 'POLEA S/PESO', 9),
(70, 'POLEA C/PESO', 9),
(71, 'ESCALERA BILATERAL', 9),
(72, 'OBSERVACIÓN', 9),
(73, 'D', 10),
(74, 'I', 10),
(75, 'BILAT', 10),
(76, 'MANGA', 10),
(77, 'BOTA', 10),
(78, '(A) DESCARGA MUSCULAR', 10),
(79, '(B) MASAJE', 10),
(80, '(C) VASCULAR/LINFÁTICO', 10),
(81, 'PRESIÓN mmHg', 10),
(82, 'TIEMPO', 10),
(83, 'OBSERVACIÓN', 10),
(84, 'ÁREA', 11),
(85, 'TIEMPO', 11),
(86, 'PROTOCOLO/DOSIS', 11),
(87, 'APLICADOR', 11),
(88, 'GUANTE', 11),
(89, 'OBSERVACIÓN', 11),
(90, 'ESTIRAMIENTO', 12),
(91, 'MÚSCULOS', 12),
(92, 'FOAM ROLLER', 12),
(93, 'MÍMICA FACIAL', 12),
(94, 'FORTALECIMIENTO ISOMÉTRICO', 12),
(95, 'A-L', 12),
(96, 'PROGRESIVO RESISTIDO MANUAL', 12),
(97, 'PROGRESIVO RESISTIVO', 12),
(98, 'BANDAS', 12),
(99, 'PESAS', 12),
(100, 'EXCÉNTRICOS', 12),
(101, 'MÚSCULOS', 12),
(102, 'No. SETS', 12),
(103, 'REPETICIONES', 12),
(104, 'FORTALECIMIENTO LUMBOPÉLVICO', 12),
(105, 'REEDUCACIÓN MUSCULAR', 12),
(106, 'OBSERVACIÓN', 12),
(107, 'CAMINADORA', 13),
(108, 'ELÍPTICA', 13),
(109, 'BICI ESTAC', 13),
(110, 'BICI', 13),
(111, 'TIEMPO', 13),
(112, 'RESISTENCIA', 3),
(113, 'PESO', 13),
(114, 'BALANCÍN', 13),
(115, 'BOZU', 13),
(116, 'CINTURÓN RUSO', 13),
(117, 'MINI TRAMPOLÍN', 13),
(118, 'REED GESTO', 13),
(119, 'Bi', 13),
(120, 'MONO', 13),
(121, 'SETS', 13),
(122, 'REPETICIONES', 13),
(123, 'OBSERVACIÓN', 13),
(124, 'BIPEDESTACIÓN', 14),
(125, 'DESCARGA DE PESO %', 14),
(126, 'EQUILIBRIO Y COORDINACIÓN', 14),
(127, 'MARCHA', 14),
(128, 'ADITAMENTO', 14),
(129, 'REEDUCAR', 14),
(130, 'DIFERENTES TERRENOS', 14),
(131, 'GRADAS', 14),
(132, 'RAMPA', 14),
(133, 'PUNTAS-TALONES', 14),
(134, 'PROPIOCEPCIÓN Bi', 14),
(135, 'MONO', 14),
(136, 'PERTURBACIÓN', 14),
(137, 'OBSERVACIÓN', 14),
(138, 'GIROS', 15),
(139, 'EQUILIBRIO DE CUELLO Y TRONCO', 15),
(140, 'CONTROL POSTURAL', 15),
(141, 'DESCARGA DE PESO MS', 15),
(142, 'VASCULACIÓN PÉLVICA', 15),
(143, '4 PUNTOS', 15),
(144, 'ABDOMINALES', 15),
(145, 'SEDESTACIÓN', 15),
(146, 'TRANSFERENCIAS', 15),
(147, 'NEUROFACILITACIÓN', 15),
(148, 'OBSERVACIÓN', 15),
(149, 'MOTOR FINO', 16),
(150, 'COORDINACIÓN OJO-MANO', 16),
(151, 'PINZAS', 16),
(152, 'OPONENCIA', 16),
(153, 'PUÑO', 16),
(154, 'DIGITOEXTEND', 16),
(155, 'MEJORAR', 16),
(156, 'AVD', 16),
(157, 'OBSERVACIÓN', 16),
(158, 'PRUEBA 2', 0),
(160, 'PRUEBA2', 0),
(161, 'PRUEBA2', 0),
(162, 'PRUEBA2', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_tratamiento`
--

CREATE TABLE `tbl_tipo_tratamiento` (
  `Id_Tipo_Tratamiento` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_tratamiento`
--

INSERT INTO `tbl_tipo_tratamiento` (`Id_Tipo_Tratamiento`, `Nombre`) VALUES
(1, 'MAGNETOTERAPIA'),
(2, 'MEDIOS FÍSICOS'),
(3, 'MASOTERAPIA'),
(4, 'ELECTROTERAPIA'),
(5, 'ULTRASONIDO'),
(6, 'LÁSER'),
(7, 'MOVILIDAD ARTICULAR'),
(8, 'TRACCIÓN'),
(9, 'TERAPIA OCUPACIONAL'),
(10, 'PRESOTERAPIA'),
(11, 'OSCILACIÓN PROFUNDA'),
(12, 'EJERCICIO'),
(13, 'EN GIMNASIO'),
(14, 'EN BARRAS'),
(15, 'EN CAMASTRÓN'),
(16, 'DESTREZAS MANUALES');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bitacora`
--
ALTER TABLE `tbl_bitacora`
  ADD PRIMARY KEY (`Id_Bitacora`),
  ADD KEY `FK_Bitacora_Usuario_idx` (`Id_Usuario`);

--
-- Indices de la tabla `tbl_cita_terapeutica`
--
ALTER TABLE `tbl_cita_terapeutica`
  ADD PRIMARY KEY (`id_Cita_Terapia`),
  ADD KEY `FK_CitaTerapeutica_Paciente_idx` (`Id_Paciente`),
  ADD KEY `FK_CitaTerapeutica_Empleado_idx` (`Id_Usuario`),
  ADD KEY `fk_TBL_CITA_TERAPEUTICA_TBL_TIPO_CITA1_idx` (`Id_Tipo_Cita`),
  ADD KEY `FK_CitaTerapeutica_Usuario_idx` (`Id_Especialista`),
  ADD KEY `Id_Expediente` (`Id_Expediente`),
  ADD KEY `Id_Estado_Cita` (`Id_Estado_Cita`);

--
-- Indices de la tabla `tbl_contacto_paciente`
--
ALTER TABLE `tbl_contacto_paciente`
  ADD PRIMARY KEY (`Id_Contacto_Paciente`),
  ADD KEY `FK_ContactoPaciente_Paciente_idx` (`Id_Paciente`),
  ADD KEY `FK_ContactoPaciente_TipoContacto_idx` (`Id_Tipo_Contacto`);

--
-- Indices de la tabla `tbl_contacto_usuario`
--
ALTER TABLE `tbl_contacto_usuario`
  ADD PRIMARY KEY (`Id_Contacto_Usuario`),
  ADD KEY `FK_Telefono_TipoTelefono_idx` (`Id_Tipo_Contacto`),
  ADD KEY `FK_ContactoUsuario_Usuario_idx` (`Id_Usuario`);

--
-- Indices de la tabla `tbl_detalle_expediente`
--
ALTER TABLE `tbl_detalle_expediente`
  ADD PRIMARY KEY (`Id_Detalle_Expediente`),
  ADD KEY `FK_DetalleExpediente_Expediente_idx` (`Id_Expediente`),
  ADD KEY `Id_Usuario` (`Id_Usuario`,`Id_Cita_Terapia`),
  ADD KEY `FK_DetalleExpediente_CitaTerapeutica` (`Id_Cita_Terapia`);

--
-- Indices de la tabla `tbl_detalle_terapia`
--
ALTER TABLE `tbl_detalle_terapia`
  ADD PRIMARY KEY (`Id_Detalle_Terapia`),
  ADD KEY `FK_DetalleTerapia_CitaTerapeutica` (`Id_Cita_Terapia`),
  ADD KEY `FK_DetalleTerapia_Usuario` (`Id_Usuario`),
  ADD KEY `FK_DetalleTerapia_Expediente` (`Id_Expediente`);

--
-- Indices de la tabla `tbl_detalle_terapia_tratamiento`
--
ALTER TABLE `tbl_detalle_terapia_tratamiento`
  ADD PRIMARY KEY (`IdDetalleTerapiaTratamiento`),
  ADD KEY `FK_TBL_DETALLE_TERAPIA_TRATAMIENTO_TBL_DETALLE_TERAPIA_idx` (`Id_Detalle_Terapia`),
  ADD KEY `FK_DetalleTerapiaTratamiento_TipoTerapia` (`Id_Tipo_Terapia`) USING BTREE;

--
-- Indices de la tabla `tbl_dia_feriado`
--
ALTER TABLE `tbl_dia_feriado`
  ADD PRIMARY KEY (`Id_Dia_Feriado`),
  ADD KEY `FK_DiaFeriado_Usuario_idx` (`Id_Usuario`);

--
-- Indices de la tabla `tbl_estado_cita`
--
ALTER TABLE `tbl_estado_cita`
  ADD PRIMARY KEY (`Id_Estado_Cita`);

--
-- Indices de la tabla `tbl_estado_usuario`
--
ALTER TABLE `tbl_estado_usuario`
  ADD PRIMARY KEY (`Id_Estado`);

--
-- Indices de la tabla `tbl_evaluacion`
--
ALTER TABLE `tbl_evaluacion`
  ADD PRIMARY KEY (`Id_Evaluacion`);

--
-- Indices de la tabla `tbl_expediente`
--
ALTER TABLE `tbl_expediente`
  ADD PRIMARY KEY (`id_Expediente`),
  ADD UNIQUE KEY `Id_Paciente_2` (`Id_Paciente`),
  ADD KEY `fk_TBL_EXPEDIENTE_TBL_MS_USUARIO1_idx` (`id_Usuario`),
  ADD KEY `Id_Paciente` (`Id_Paciente`);

--
-- Indices de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
  ADD PRIMARY KEY (`IdGenero`);

--
-- Indices de la tabla `tbl_horario`
--
ALTER TABLE `tbl_horario`
  ADD PRIMARY KEY (`Id_Horario`),
  ADD KEY `FK_Horario_Usuario_idx` (`Id_Usuario`);

--
-- Indices de la tabla `tbl_ms_hist_contrasena`
--
ALTER TABLE `tbl_ms_hist_contrasena`
  ADD PRIMARY KEY (`Id_Hist`),
  ADD KEY `FK_Contrasena_Usuario_idx` (`Id_Usuario`);

--
-- Indices de la tabla `tbl_ms_objetos`
--
ALTER TABLE `tbl_ms_objetos`
  ADD PRIMARY KEY (`Id_Objetos`);

--
-- Indices de la tabla `tbl_ms_parametros`
--
ALTER TABLE `tbl_ms_parametros`
  ADD PRIMARY KEY (`Id_Parametro`),
  ADD KEY `FK_Parametros_Usuario_idx` (`Id_Usuario`);

--
-- Indices de la tabla `tbl_ms_permisos`
--
ALTER TABLE `tbl_ms_permisos`
  ADD PRIMARY KEY (`Id_Permisos`),
  ADD KEY `FK_Permisos_Roles_idx` (`Id_Rol`),
  ADD KEY `FK_Permisos_Objetos_idx` (`Id_Objeto`);

--
-- Indices de la tabla `tbl_ms_roles`
--
ALTER TABLE `tbl_ms_roles`
  ADD PRIMARY KEY (`Id_Rol`);

--
-- Indices de la tabla `tbl_ms_usuario`
--
ALTER TABLE `tbl_ms_usuario`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD KEY `FK_Empleado_Genero_idx` (`IdGenero`),
  ADD KEY `FK_Usuario_Rol_idx` (`IdRol`),
  ADD KEY `Estado_Usuario` (`Estado_Usuario`);

--
-- Indices de la tabla `tbl_observacion_fisioterapeuta`
--
ALTER TABLE `tbl_observacion_fisioterapeuta`
  ADD PRIMARY KEY (`Id_Obs_Fisioterapeuta`),
  ADD KEY `fk_TBL_OBSERVACION_FISIOTERAPEUTA_TBL_EXPEDIENTE1_idx` (`id_Expediente`);

--
-- Indices de la tabla `tbl_paciente`
--
ALTER TABLE `tbl_paciente`
  ADD PRIMARY KEY (`Id_Paciente`),
  ADD KEY `FK_Paciente_Genero_idx` (`IdGenero`),
  ADD KEY `FK_Paciente_TipoDocumento_idx` (`Id_Tipo_Documento`);

--
-- Indices de la tabla `tbl_pin`
--
ALTER TABLE `tbl_pin`
  ADD PRIMARY KEY (`Id_Pin`),
  ADD KEY `FK_PreguntasUsuario_Usuario_idx` (`Id_Usuario`);

--
-- Indices de la tabla `tbl_resultado_evaluacion`
--
ALTER TABLE `tbl_resultado_evaluacion`
  ADD PRIMARY KEY (`Id_Resultado_Evaluacion`),
  ADD KEY `fk_TBL_RESULTADO_EVALUACION_TBL_EVALUACION` (`Id_Evaluacion`);

--
-- Indices de la tabla `tbl_resultado_expediente`
--
ALTER TABLE `tbl_resultado_expediente`
  ADD PRIMARY KEY (`Id_Resultado_Expediente`),
  ADD KEY `FK_ResultadoExpediente_ResultadoEvaluacion_idx` (`Id_Resultado_Evaluacion`),
  ADD KEY `FK_ResultadoExpediente_DetalleExpediente_idx` (`Id_Detalle_Expediente`);

--
-- Indices de la tabla `tbl_terapia_expediente`
--
ALTER TABLE `tbl_terapia_expediente`
  ADD PRIMARY KEY (`Id_Terapia`),
  ADD KEY `FK_Terapia_TipoTerapia_idx` (`Id_Tipo_Tratamiento`),
  ADD KEY `FK_Terapia_Expediente_idx` (`Id_Expediente`),
  ADD KEY `fk_TBL_TERAPIA_TBL_TIPO_DISTRIBUCION1_idx` (`Id_Tipo_Distribucion`);

--
-- Indices de la tabla `tbl_tipo_cita`
--
ALTER TABLE `tbl_tipo_cita`
  ADD PRIMARY KEY (`Id_Tipo_Cita`);

--
-- Indices de la tabla `tbl_tipo_contacto`
--
ALTER TABLE `tbl_tipo_contacto`
  ADD PRIMARY KEY (`Id_Tipo_Contacto`);

--
-- Indices de la tabla `tbl_tipo_distribucion`
--
ALTER TABLE `tbl_tipo_distribucion`
  ADD PRIMARY KEY (`Id_Tipo_Distribucion`);

--
-- Indices de la tabla `tbl_tipo_documento`
--
ALTER TABLE `tbl_tipo_documento`
  ADD PRIMARY KEY (`Id_Tipo_Documento`);

--
-- Indices de la tabla `tbl_tipo_terapia`
--
ALTER TABLE `tbl_tipo_terapia`
  ADD PRIMARY KEY (`idTipoTerapia`),
  ADD KEY `FK_TipoTerapia_TipoTratamiento_idx` (`Id_Tipo_Tratamiento`);

--
-- Indices de la tabla `tbl_tipo_tratamiento`
--
ALTER TABLE `tbl_tipo_tratamiento`
  ADD PRIMARY KEY (`Id_Tipo_Tratamiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bitacora`
--
ALTER TABLE `tbl_bitacora`
  MODIFY `Id_Bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT de la tabla `tbl_cita_terapeutica`
--
ALTER TABLE `tbl_cita_terapeutica`
  MODIFY `id_Cita_Terapia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_contacto_paciente`
--
ALTER TABLE `tbl_contacto_paciente`
  MODIFY `Id_Contacto_Paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_contacto_usuario`
--
ALTER TABLE `tbl_contacto_usuario`
  MODIFY `Id_Contacto_Usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_detalle_expediente`
--
ALTER TABLE `tbl_detalle_expediente`
  MODIFY `Id_Detalle_Expediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `tbl_detalle_terapia`
--
ALTER TABLE `tbl_detalle_terapia`
  MODIFY `Id_Detalle_Terapia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_detalle_terapia_tratamiento`
--
ALTER TABLE `tbl_detalle_terapia_tratamiento`
  MODIFY `IdDetalleTerapiaTratamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `tbl_dia_feriado`
--
ALTER TABLE `tbl_dia_feriado`
  MODIFY `Id_Dia_Feriado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_estado_cita`
--
ALTER TABLE `tbl_estado_cita`
  MODIFY `Id_Estado_Cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_estado_usuario`
--
ALTER TABLE `tbl_estado_usuario`
  MODIFY `Id_Estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_evaluacion`
--
ALTER TABLE `tbl_evaluacion`
  MODIFY `Id_Evaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_expediente`
--
ALTER TABLE `tbl_expediente`
  MODIFY `id_Expediente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
  MODIFY `IdGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_horario`
--
ALTER TABLE `tbl_horario`
  MODIFY `Id_Horario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_ms_hist_contrasena`
--
ALTER TABLE `tbl_ms_hist_contrasena`
  MODIFY `Id_Hist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_ms_objetos`
--
ALTER TABLE `tbl_ms_objetos`
  MODIFY `Id_Objetos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tbl_ms_parametros`
--
ALTER TABLE `tbl_ms_parametros`
  MODIFY `Id_Parametro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_ms_permisos`
--
ALTER TABLE `tbl_ms_permisos`
  MODIFY `Id_Permisos` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `tbl_ms_roles`
--
ALTER TABLE `tbl_ms_roles`
  MODIFY `Id_Rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_ms_usuario`
--
ALTER TABLE `tbl_ms_usuario`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_paciente`
--
ALTER TABLE `tbl_paciente`
  MODIFY `Id_Paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_pin`
--
ALTER TABLE `tbl_pin`
  MODIFY `Id_Pin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_resultado_evaluacion`
--
ALTER TABLE `tbl_resultado_evaluacion`
  MODIFY `Id_Resultado_Evaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tbl_resultado_expediente`
--
ALTER TABLE `tbl_resultado_expediente`
  MODIFY `Id_Resultado_Expediente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_terapia_expediente`
--
ALTER TABLE `tbl_terapia_expediente`
  MODIFY `Id_Terapia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_cita`
--
ALTER TABLE `tbl_tipo_cita`
  MODIFY `Id_Tipo_Cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_contacto`
--
ALTER TABLE `tbl_tipo_contacto`
  MODIFY `Id_Tipo_Contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_distribucion`
--
ALTER TABLE `tbl_tipo_distribucion`
  MODIFY `Id_Tipo_Distribucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_documento`
--
ALTER TABLE `tbl_tipo_documento`
  MODIFY `Id_Tipo_Documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_terapia`
--
ALTER TABLE `tbl_tipo_terapia`
  MODIFY `idTipoTerapia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_tratamiento`
--
ALTER TABLE `tbl_tipo_tratamiento`
  MODIFY `Id_Tipo_Tratamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_detalle_expediente`
--
ALTER TABLE `tbl_detalle_expediente`
  ADD CONSTRAINT `FK_DetalleExpediente_CitaTerapeutica` FOREIGN KEY (`Id_Cita_Terapia`) REFERENCES `tbl_cita_terapeutica` (`id_Cita_Terapia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_DetalleExpediente_Expediente` FOREIGN KEY (`Id_Expediente`) REFERENCES `tbl_expediente` (`id_Expediente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_DetalleExpediente_Usuario` FOREIGN KEY (`Id_Usuario`) REFERENCES `tbl_ms_usuario` (`Id_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_detalle_terapia`
--
ALTER TABLE `tbl_detalle_terapia`
  ADD CONSTRAINT `FK_DetalleTerapia_CitaTerapeutica` FOREIGN KEY (`Id_Cita_Terapia`) REFERENCES `tbl_cita_terapeutica` (`id_Cita_Terapia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_DetalleTerapia_Expediente` FOREIGN KEY (`Id_Expediente`) REFERENCES `tbl_expediente` (`id_Expediente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_DetalleTerapia_Usuario` FOREIGN KEY (`Id_Usuario`) REFERENCES `tbl_ms_usuario` (`Id_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_expediente`
--
ALTER TABLE `tbl_expediente`
  ADD CONSTRAINT `FK_Expediente_Paciente` FOREIGN KEY (`Id_Paciente`) REFERENCES `tbl_paciente` (`Id_Paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Expediente_Usuario` FOREIGN KEY (`id_Usuario`) REFERENCES `tbl_ms_usuario` (`Id_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_ms_permisos`
--
ALTER TABLE `tbl_ms_permisos`
  ADD CONSTRAINT `FK_Permisos_Objetos` FOREIGN KEY (`Id_Objeto`) REFERENCES `tbl_ms_objetos` (`Id_Objetos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Permisos_Roles` FOREIGN KEY (`Id_Rol`) REFERENCES `tbl_ms_roles` (`Id_Rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_paciente`
--
ALTER TABLE `tbl_paciente`
  ADD CONSTRAINT `FK_TBL_DOCUMENTO_TBL_PACIENTE` FOREIGN KEY (`Id_Tipo_Documento`) REFERENCES `tbl_tipo_documento` (`Id_Tipo_Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TBL_GENERO_TBL_PACIENTE` FOREIGN KEY (`IdGenero`) REFERENCES `tbl_genero` (`IdGenero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_resultado_evaluacion`
--
ALTER TABLE `tbl_resultado_evaluacion`
  ADD CONSTRAINT `fk_RESULTADO_EVALUACION_EVALUACION` FOREIGN KEY (`Id_Evaluacion`) REFERENCES `tbl_evaluacion` (`Id_Evaluacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
