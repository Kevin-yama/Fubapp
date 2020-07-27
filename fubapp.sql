-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2020 a las 08:36:43
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fubapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `celular` bigint(11) NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Nombre`, `email`, `celular`, `usuario`, `pass`) VALUES
('juan lozano', 'kevinyama@gmail.com', 3152245159, '123', '7110eda4d0'),
('juan lozano', 'kevinyama@gmail.com', 3152245159, 'kevin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
('kevin yahir yama cai', 'jjnkjnk', 3152245159, 'kyam', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f'),
('kevin yahir yama cai', 'jjnkjnk', 3152245159, 'kyama', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('kevin', 'jjnkjnk', 31522451591, 'yy', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('kevin', 'jjnkjnk', 31522451591, 'yyy', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('kevin', 'jjnkjnk', 31522451591, 'yyyy', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancha`
--

CREATE TABLE `cancha` (
  `Id_cancha` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL DEFAULT 'disponible',
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cancha`
--

INSERT INTO `cancha` (`Id_cancha`, `estado`, `img`) VALUES
(40, 'OCUPADO', '../../fotos/images.jpg'),
(42, 'OCUPADO', '../../fotos/cancha-futbol-foco-borroso_9083-2219.jpg'),
(43, 'OCUPADO', '../../fotos/1312668037_740215_0000000001_noticia_grande.jpg'),
(44, 'OCUPADO', '../../fotos/Fútbol_Césped_Artificial-e1523267359676.jpg'),
(45, 'DISPONIBLE', '../../fotos/28474882_5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `goles`
--

CREATE TABLE `goles` (
  `Id_gol` varchar(20) NOT NULL,
  `Jugador` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `minuto` int(11) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `equipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `celular` bigint(11) NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `foto` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom_equipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`nombre`, `celular`, `usuario`, `password`, `foto`, `nom_equipo`) VALUES
('Jhon Doe', 3152245159, 'ky', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '../../fotos/cristiano-ronaldo.jpg', 'qwer'),
('kevin yahir yama cai', 3152245159, 'kyama', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '../../fotos/KVKTQSFU7VGSTCHIDQU4YCLTEE.jpg', 'hhh'),
('kevin yahir yama cai', 3152245159, 'kyamaa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '../../fotos/equipo-de-futbol.jpg', 'qwert');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `id_partidos` varchar(20) NOT NULL,
  `local` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `visitante` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `goles-local` varchar(20) NOT NULL,
  `goles-visitante` varchar(20) NOT NULL,
  `turno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id_turno` int(11) NOT NULL,
  `cancha` int(11) NOT NULL,
  `hora` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `cancha`, `hora`, `fecha`) VALUES
(11, 44, 12, '2020-07-09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `cancha`
--
ALTER TABLE `cancha`
  ADD PRIMARY KEY (`Id_cancha`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `goles`
--
ALTER TABLE `goles`
  ADD PRIMARY KEY (`Id_gol`),
  ADD UNIQUE KEY `equipo_2` (`equipo`),
  ADD UNIQUE KEY `Jugador_2` (`Jugador`),
  ADD KEY `Jugador` (`Jugador`),
  ADD KEY `equipo` (`equipo`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `celular` (`celular`),
  ADD KEY `equipo` (`nom_equipo`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `nom_equipo` (`nom_equipo`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id_partidos`),
  ADD KEY `local` (`local`),
  ADD KEY `visitante` (`visitante`),
  ADD KEY `goles-local` (`goles-local`),
  ADD KEY `goles-visitante` (`goles-visitante`),
  ADD KEY `turno` (`turno`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id_turno`),
  ADD KEY `cancha` (`cancha`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cancha`
--
ALTER TABLE `cancha`
  MODIFY `Id_cancha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD CONSTRAINT `partidos_ibfk_1` FOREIGN KEY (`goles-local`) REFERENCES `goles` (`Id_gol`),
  ADD CONSTRAINT `partidos_ibfk_2` FOREIGN KEY (`goles-visitante`) REFERENCES `goles` (`Id_gol`),
  ADD CONSTRAINT `partidos_ibfk_3` FOREIGN KEY (`local`) REFERENCES `equipos` (`id_equipo`),
  ADD CONSTRAINT `partidos_ibfk_4` FOREIGN KEY (`visitante`) REFERENCES `equipos` (`id_equipo`),
  ADD CONSTRAINT `partidos_ibfk_5` FOREIGN KEY (`turno`) REFERENCES `turnos` (`id_turno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
