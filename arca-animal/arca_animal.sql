-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2025 a las 18:47:20
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
-- Base de datos: `arca_animal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `domicilio` varchar(150) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `domicilio`, `telefono`, `correo`) VALUES
(1, 'ABEL DAVID', 'NAREZ', 'HERNANDEZ', 'Av Carmelo Perez 178', '5563226411', 'abeldavid_narez@hotmail.com'),
(3, 'Valeria', 'Velasco', 'Valdez', 'UTN', '55383839293', 'valera@velasco.gmail.com'),
(4, 'Kenia', 'Chaves ', 'Sosa', 'UTN', '123456789', 'keniachavez@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `rol`, `telefono`, `correo`, `cedula`, `usuario`, `contrasena`) VALUES
(1, 'ABEL DAVID', 'NAREZ', 'HERNANDEZ', 'Veterinario', '5563226411', 'abeldavid_narez@hotmail.com', '32213213', 'DavidN', '$2y$10$XdwaCWxI1jkCYO9K407mkujAWzaz9HnUTShyOIKjorsp5zHauQgh.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_clinico`
--

CREATE TABLE `historial_clinico` (
  `id` int(11) NOT NULL,
  `id_mascota` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `diagnostico` text NOT NULL,
  `tratamiento` text DEFAULT NULL,
  `responsable` varchar(100) NOT NULL,
  `observaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historial_clinico`
--

INSERT INTO `historial_clinico` (`id`, `id_mascota`, `fecha`, `motivo`, `diagnostico`, `tratamiento`, `responsable`, `observaciones`) VALUES
(1, 1, '2025-11-10', 'Consulta general', 'Moquillo', 'Muchas pastillas', 'Dr Abel ', 'tiene mucho moco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` enum('Consulta','Estética','Cirugía','Vacunación','Otro') DEFAULT 'Consulta',
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `duracion_estimada` varchar(50) DEFAULT NULL,
  `disponibilidad` enum('Disponible','No disponible') DEFAULT 'Disponible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `tipo`, `descripcion`, `precio`, `duracion_estimada`, `disponibilidad`) VALUES
(1, 'Corte De Pelaje', '', 'Corte de pelaje para cualquier mascota con pelaje ', 151.00, '1 hora', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
