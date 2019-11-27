-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 07:24:07
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Correo` varchar(70) NOT NULL,
  `Mensaje` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`Nombre`, `Apellido`, `Correo`, `Mensaje`) VALUES
('Gabriel', 'Joseph', 'gabrieljosepe@gmail.com', 'hola q ace'),
('Gabriel', 'Joseph', 'gabrieljosepe@gmail.com', 'hola q ace'),
('Gabriel', 'Joseph', 'gabrieljosepe@gmail.com', 'hola q ace'),
('Gabriel', 'Joseph', 'gabrieljosepe@gmail.com', 'hola q ace'),
('Alex', 'Perez', 'alexp@gmail.com', 'como tamo'),
('Gabriel', 'Perez', 'a@a', 'aaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Usuario` varchar(15) NOT NULL,
  `Nombre` text NOT NULL,
  `Clave` varchar(45) NOT NULL,
  `RepClave` varchar(45) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Sexo` text NOT NULL,
  `Cedula` varchar(12) NOT NULL,
  `FechaNacimiento` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Nombre`, `Clave`, `RepClave`, `Correo`, `Sexo`, `Cedula`, `FechaNacimiento`) VALUES
('gabrielito', 'Gabriel', '81dc9bdb52d04dc20036dbd8313ed055', '', 'gabrieljosepe@gmail.com', 'Masculino', '12-6546783-0', '05/03/2001'),
('yolo2.0', 'Yazmin', '2b680d31527cc1968dc9f7ba3c1db39b', '', 'friquitaquiyaz@gmail.com', 'Otro', '0000000001', '27/05/2002');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
