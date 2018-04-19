-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-04-2018 a las 19:31:47
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clinicamedica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `nombre`) VALUES
(1, 'Doctor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE IF NOT EXISTS `consulta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motivo` text,
  `historial_enf` text,
  `p_a` varchar(40) DEFAULT NULL,
  `fc` varchar(40) DEFAULT NULL,
  `pulso` varchar(45) DEFAULT NULL,
  `t` varchar(45) DEFAULT NULL,
  `w` varchar(45) DEFAULT NULL,
  `frec_resp` varchar(45) DEFAULT NULL,
  `detalle` varchar(300) NOT NULL,
  `diagnostico` text,
  `tratamiento1` text,
  `tratamiento2` text,
  `rgb` varchar(40) DEFAULT NULL,
  `plt` varchar(40) DEFAULT NULL,
  `hto` varchar(45) DEFAULT NULL,
  `vse` varchar(45) DEFAULT NULL,
  `seg` varchar(45) DEFAULT NULL,
  `lint` varchar(45) DEFAULT NULL,
  `mon` varchar(45) DEFAULT NULL,
  `eos` varchar(45) DEFAULT NULL,
  `tp` varchar(45) DEFAULT NULL,
  `tpt` varchar(45) DEFAULT NULL,
  `fr` varchar(45) DEFAULT NULL,
  `aso` varchar(45) DEFAULT NULL,
  `pcr` varchar(45) DEFAULT NULL,
  `ag_prostatico` varchar(45) DEFAULT NULL,
  `glucosa` double DEFAULT NULL,
  `glucosa_post` double DEFAULT NULL,
  `nitrogeno` double DEFAULT NULL,
  `creatinina` varchar(45) DEFAULT NULL,
  `bilirrubina_t` double DEFAULT NULL,
  `bilirrubina_d` int(11) NOT NULL,
  `bilirrubina_i` double DEFAULT NULL,
  `proteina` double DEFAULT NULL,
  `albumina` double DEFAULT NULL,
  `globulina` double DEFAULT NULL,
  `relacion` double DEFAULT NULL,
  `acido` double DEFAULT NULL,
  `ldh` double DEFAULT NULL,
  `transaminasa_o` double DEFAULT NULL,
  `transaminasa_p` double DEFAULT NULL,
  `fosfata` double DEFAULT NULL,
  `colesterol_t` double DEFAULT NULL,
  `colesterol_h` double DEFAULT NULL,
  `colesterol_l` double DEFAULT NULL,
  `trigliceridos` double DEFAULT NULL,
  `lipasa` double DEFAULT NULL,
  `amilasa` double DEFAULT NULL,
  `ck_t` double DEFAULT NULL,
  `ck_mb` double DEFAULT NULL,
  `otros` text,
  `paciente_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_consulta_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medic`
--

CREATE TABLE IF NOT EXISTS `medic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(45) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `genero` varchar(3) DEFAULT NULL,
  `fecha_de_nac` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medico_categoria1_idx` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `medic`
--

INSERT INTO `medic` (`id`, `no`, `nombre`, `apellido`, `genero`, `fecha_de_nac`, `email`, `direccion`, `telefono`, `is_active`, `category_id`, `created_at`) VALUES
(2, NULL, 'Adan', 'Barrios', NULL, NULL, 'adan@gmail.com', 'Xela', '32329382938', 1, 1, '2017-11-03 01:07:29'),
(3, NULL, 'Gladys', 'Rivera', NULL, NULL, 'gr@gmail.com', 'San Pedro', '9328293829', 1, NULL, '2017-11-03 01:08:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacient`
--

CREATE TABLE IF NOT EXISTS `pacient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `nombre_esp` varchar(50) DEFAULT NULL,
  `quirurgicos` text,
  `traumaticos` text,
  `alergico` text,
  `monarquia` varchar(45) DEFAULT NULL,
  `ciclos` varchar(50) DEFAULT NULL,
  `gestas` int(11) DEFAULT NULL,
  `partos` int(11) DEFAULT NULL,
  `cesareas` int(11) DEFAULT NULL,
  `abortos` int(11) DEFAULT NULL,
  `fur` date DEFAULT NULL,
  `fpp` varchar(45) DEFAULT NULL,
  `control_prenatal` varchar(50) DEFAULT NULL,
  `anti` text,
  `genero` varchar(6) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `es_favorito` tinyint(1) NOT NULL DEFAULT '1',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `medico` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `pacient`
--

INSERT INTO `pacient` (`id`, `nombre`, `apellido`, `edad`, `telefono`, `direccion`, `nombre_esp`, `quirurgicos`, `traumaticos`, `alergico`, `monarquia`, `ciclos`, `gestas`, `partos`, `cesareas`, `abortos`, `fur`, `fpp`, `control_prenatal`, `anti`, `genero`, `imagen`, `es_favorito`, `is_active`, `medico`, `created_at`) VALUES
(15, 'Alex jose', 'Morales', '2017-11-04', 2147483647, 'Xela', 'no', '', '', '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', '', 'm', '', 0, 0, '', NULL),
(16, 'luis', 'juarez', '2017-11-10', 7667, 'san marcos', 'no', '', '', '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', '', 'h', '', 0, 0, '', NULL),
(17, 'alis marce', 'merida', '2017-11-06', 764322, 'san marcos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0, 0, '', NULL),
(21, 'Josefina', 'Sosa', '2017-11-13', 83293274, 'Xela', 'Miguel Diaz', 'no', 'no', 'al sol', 'no', '2', 2, 2, 1, 0, '2017-11-09', '1', 'no', 'T de cobre', 'm', '', 1, 1, 'Rogelio Moran', '2017-11-03 00:11:36'),
(22, 'Maria', 'Joachin', '2017-11-04', 2147483647, 'Huehuetenango', 'Hugo Lopez', 'no', 'no', 'no', 'no', '1', 0, 0, 0, 0, '2017-11-17', '0', 'no', 'no', 'm', '', 1, 1, 'no', '2017-11-03 02:50:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `payment`
--

INSERT INTO `payment` (`id`, `nombre`) VALUES
(1, 'Pendiente'),
(2, 'Pagado'),
(3, 'Anulado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE IF NOT EXISTS `reservacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  `nota` text,
  `mensaje` text,
  `dia` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `sintomas` text,
  `enfermedad` text,
  `medicamentos` text,
  `reservacioncol` varchar(45) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `is_web` tinyint(1) DEFAULT NULL,
  `medic_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pacient_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reservacion_medico_idx` (`medic_id`),
  KEY `fk_reservacion_pago1_idx` (`payment_id`),
  KEY `fk_reservacion_usuario1_idx` (`user_id`),
  KEY `fk_reservacion_paciente1_idx` (`pacient_id`),
  KEY `fk_reservacion_estado1_idx` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`id`, `descripcion`, `nota`, `mensaje`, `dia`, `hora`, `created_at`, `sintomas`, `enfermedad`, `medicamentos`, `reservacioncol`, `precio`, `is_web`, `medic_id`, `payment_id`, `user_id`, `pacient_id`, `status_id`) VALUES
(1, 'dolor', 'revisar', 'revisar', '13', '5:00', '2017-10-10 00:00:00', 'dolor', 'dolor', 'ninguno', 'no', 100, 2, 1, 1, 1, 1, 1),
(13, 'Entrega de notas primera unidad', 'Entregar notas de los estudiantes', NULL, '2018-04-27', '10:00', '2018-04-13 09:35:34', NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, 0, 0),
(14, 'Entrega de notas', '1er grado basico', NULL, '2018-12-01', '01:59', '2018-04-16 12:27:25', NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `nombre`) VALUES
(1, 'Pendiente'),
(2, 'Aplicada'),
(3, 'No Asistio'),
(4, 'Cancelada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `lastname`, `email`, `password`, `is_active`, `is_admin`, `created_at`) VALUES
(1, 'admin', 'administrador', 'administrador', 'admin@admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 1, 1, NULL),
(2, 'marce', 'marce', 'ochoa', 'marce@gmail.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 1, 1, NULL),
(3, 'admin2', 'admin2', 'administrator', 'admin24', 'e4df782e9185732c1bb3efcf052a21d4c11c605f', 1, 1, '2017-11-01 00:00:00'),
(10, 'mynor', 'Mynor Rene', 'Berduo', 'mynor@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350', 1, 1, '2017-11-01 13:35:28'),
(11, 'adonias', 'Adonias Antonio', 'Antonio', 'adonias@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350', 1, 1, '2017-11-01 13:36:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
