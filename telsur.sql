-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2017 a las 18:33:04
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `telsur`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes`
--

CREATE TABLE IF NOT EXISTS `antecedentes` (
`idantecedentes` int(11) NOT NULL,
  `iddatos_estudiantes` int(11) NOT NULL,
  `tipo_embarazo` varchar(100) NOT NULL,
  `tipo_parto` varchar(100) NOT NULL,
  `desarrollo_psicomotor` varchar(100) NOT NULL,
  `desarrollo_lenguaje` varchar(100) NOT NULL,
  `primeras_palabras` varchar(100) NOT NULL,
  `edad_primeraspalabras` int(11) NOT NULL,
  `antecedentes_saludge` varchar(100) NOT NULL,
  `antecedentes_saluds` varchar(100) NOT NULL,
  `personalidad` varchar(100) NOT NULL,
  `quejas` varchar(100) NOT NULL,
  `condicion` tinyint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `antecedentes`
--

INSERT INTO `antecedentes` (`idantecedentes`, `iddatos_estudiantes`, `tipo_embarazo`, `tipo_parto`, `desarrollo_psicomotor`, `desarrollo_lenguaje`, `primeras_palabras`, `edad_primeraspalabras`, `antecedentes_saludge`, `antecedentes_saluds`, `personalidad`, `quejas`, `condicion`) VALUES
(1, 1, 'Normal', 'Cesaria', 'Bien', 'Bien2', 'Mama', 10, 'Bien3', 'Bien4', 'Buena Persona', 'Ninguna', 1),
(2, 2, 'Complicada', 'Normal', 'Normal', 'Normal', 'Papa', 10, 'No', 'No', 'Cool', 'Ninguna', 1),
(3, 3, 'Planeado', 'Normal', 'Normal', 'Normal', 'Papa', 9, 'No', 'No', 'Carismatico', 'Ninguna', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE IF NOT EXISTS `asistencia` (
`idasistencia` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `hora_entrada` varchar(20) DEFAULT NULL,
  `hora_salida` varchar(20) DEFAULT NULL,
  `suplente` varchar(100) NOT NULL,
  `observacion` varchar(100) DEFAULT NULL,
  `retardo` varchar(45) DEFAULT NULL,
  `permiso_personal` varchar(45) DEFAULT NULL,
  `permiso_justificado` varchar(45) DEFAULT NULL,
  `condicion` tinyint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`idasistencia`, `idempleado`, `hora_entrada`, `hora_salida`, `suplente`, `observacion`, `retardo`, `permiso_personal`, `permiso_justificado`, `condicion`) VALUES
(1, 1, '7:00am', '12:00pm', 'No', 'Ninguna', 'No', 'No', 'No', 1),
(2, 2, '7:00am', '12:00am', 'No', 'Ninguna', 'No', 'No', 'No', 1),
(3, 3, '8:00am', '12:10pm', 'No', 'Ninguna', 'No', 'Si', 'Si', 0),
(4, 3, '8:00am', '12:10pm', 'No', 'Ninguna', 'No', 'No', 'No', 0),
(5, 5, '7:00am', '10:00am', 'No', 'Ninguna', 'Si', 'No', 'Si', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_estudiantes`
--

CREATE TABLE IF NOT EXISTS `datos_estudiantes` (
`iddatos_estudiantes` int(11) NOT NULL,
  `idtipo_inscripcion` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` int(11) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `fecha_nacimiento` timestamp NULL DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `anos_calificacion` int(11) DEFAULT NULL,
  `carnet` varchar(2) DEFAULT NULL,
  `becado` varchar(2) DEFAULT NULL,
  `tipo_organismo` varchar(200) DEFAULT NULL,
  `posee_canaima` varchar(2) DEFAULT NULL,
  `lateralidad` varchar(45) DEFAULT NULL,
  `orden_nacimiento` int(11) DEFAULT NULL,
  `esterilizado` varchar(2) DEFAULT NULL,
  `hijos` varchar(2) DEFAULT NULL,
  `dieta` varchar(2) DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_estudiantes`
--

INSERT INTO `datos_estudiantes` (`iddatos_estudiantes`, `idtipo_inscripcion`, `nombres`, `apellidos`, `cedula`, `genero`, `fecha_nacimiento`, `edad`, `anos_calificacion`, `carnet`, `becado`, `tipo_organismo`, `posee_canaima`, `lateralidad`, `orden_nacimiento`, `esterilizado`, `hijos`, `dieta`, `condicion`) VALUES
(1, 1, 'Miguel Moises', 'Linarez Flores', 23445325, 'M', '2017-06-25 20:39:52', 20, 2, 'No', 'Si', 'Ninguna', 'Si', 'Izquierdo', 6, 'No', 'Si', 'No', 1),
(2, 2, 'Luna Maria', 'Jupiter Estrella', 23453213, 'F', '1990-06-01 08:30:00', 27, 5, 'Si', 'No', 'Ninguna', 'Si', 'Derecha', 9, 'Si', 'Si', 'No', 1),
(3, 2, 'Juan Miguel', 'Magan Guerra', 14273553, 'M', '2017-06-25 21:08:32', 19, 7, 'Si', 'Si', 'Ninguna', 'No', 'Derecho', 9, 'Si', 'No', 'No', 1),
(4, 1, 'Jaime Federico', 'Paz Paez', 18734521, 'M', '2017-06-25 23:01:11', 7, 9, 'No', 'No', 'Ninguna', 'No', 'Derecho', 9, 'No', 'No', 'No', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
`iddireccion` int(11) NOT NULL,
  `iddatos_estudiantes` int(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `pais_nacimiento` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `nacionalidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidad`
--

CREATE TABLE IF NOT EXISTS `discapacidad` (
`iddiscapacidad` int(11) NOT NULL,
  `iddatos_estudiantes` int(11) NOT NULL,
  `discapacidad_nombre` varchar(100) NOT NULL,
  `convulsiona` varchar(2) NOT NULL,
  `alergico` varchar(2) NOT NULL,
  `toma_medicamento` varchar(2) NOT NULL,
  `condicion` tinyint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `discapacidad`
--

INSERT INTO `discapacidad` (`iddiscapacidad`, `iddatos_estudiantes`, `discapacidad_nombre`, `convulsiona`, `alergico`, `toma_medicamento`, `condicion`) VALUES
(1, 2, 'Paralitico', 'No', 'No', 'No', 1),
(2, 2, 'Paralitico', 'No', 'Si', 'No', 1),
(3, 3, 'Mental', 'Si', 'Si', 'Si', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
`idempleado` int(11) NOT NULL,
  `empleado_nombre` varchar(100) NOT NULL,
  `empleado_apellido` varchar(100) NOT NULL,
  `empleado_cedula` int(11) NOT NULL,
  `empleado_horario` varchar(100) NOT NULL,
  `empleado_estatus` varchar(100) NOT NULL,
  `empleado_cargo` varchar(100) NOT NULL,
  `condicion` tinyint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `empleado_nombre`, `empleado_apellido`, `empleado_cedula`, `empleado_horario`, `empleado_estatus`, `empleado_cargo`, `condicion`) VALUES
(1, 'Daniel', 'Arciles', 22615827, '600am_1200pm', 'Activo', 'Obrero', 1),
(2, 'Yerry Antonio', 'Nunez Azuaje', 24290052, '600am_1200pm', 'Activo', 'Obrero', 1),
(3, 'Yubiry Betsabe', 'Sequera Reyes', 24818201, '700am_1200pm', 'Activo', 'Administrativo', 1),
(4, 'Yonny Alexander', 'Hernandez Montesinos', 23663611, '700am_1200pm', 'Activo', 'Obrero', 1),
(5, 'Jose Miguel', 'Rojas Rojas', 13627534, '600am_1200pm', 'Inactivo', 'Administrativo', 1),
(6, 'Jose Alfredo', 'Jimenez Jimenez', 15672436, '700am_1200pm', 'Inactivo', 'Administrativo', 1),
(7, 'Jose Maria', 'Lopez Diaz', 22876928, '7:00am_12:00pm', 'Inactivo', 'Administrativo', 1),
(8, 'Maria Daniela', 'Diaz Juarez', 9653998, '700am_1200pm', 'Activo', 'Administrativo', 1),
(9, 'Jesus Miranda', 'Juarez Juarez', 7629222, '7:00am_12:00pm', 'Activo', 'Docente', 1),
(10, 'Omar Miguel', 'MartinezMartienez', 15276395, '7:00am_12:00pm', 'Activo', 'Obrero', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_familiar`
--

CREATE TABLE IF NOT EXISTS `grupo_familiar` (
`idgrupo_familiar` int(11) NOT NULL,
  `iddatos_estudiantes` int(11) NOT NULL,
  `estado_padres` varchar(100) NOT NULL,
  `servicios_basicos` varchar(2) NOT NULL,
  `hermano_nombre` varchar(100) NOT NULL,
  `hermano_apellido` varchar(100) NOT NULL,
  `hermano_edad` int(11) NOT NULL,
  `hermano_estudios` varchar(100) NOT NULL,
  `hermano_trabajo` varchar(100) NOT NULL,
  `otros_familiares` varchar(100) NOT NULL,
  `relacion_familiar` varchar(100) NOT NULL,
  `relacion_hermanos` varchar(100) NOT NULL,
  `condicion` tinyint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo_familiar`
--

INSERT INTO `grupo_familiar` (`idgrupo_familiar`, `iddatos_estudiantes`, `estado_padres`, `servicios_basicos`, `hermano_nombre`, `hermano_apellido`, `hermano_edad`, `hermano_estudios`, `hermano_trabajo`, `otros_familiares`, `relacion_familiar`, `relacion_hermanos`, `condicion`) VALUES
(1, 1, 'Casados', 'Si', 'Juan', 'Perez', 18, 'Universitarios', 'No', 'Ninguno', 'Buena', 'Buena', 1),
(2, 2, 'Casados', 'Si', 'Juana', 'Perez', 3, 'Ninguno', 'Ninguno', 'No', 'Buena', 'Excelente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_asistencia`
--

CREATE TABLE IF NOT EXISTS `informe_asistencia` (
`idinforme_asistencia` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `dias_laborados` varchar(45) NOT NULL,
  `permisos_justificados` varchar(45) NOT NULL,
  `permisos_personales` varchar(45) NOT NULL,
  `total_asistencia` varchar(45) NOT NULL,
  `observaciones` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(10) NOT NULL,
  `clave` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `clave`) VALUES
('admin', 'direc'),
('perins', 'unico'),
('secre', 'telsur');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_06_26_060056_rollback', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representantes`
--

CREATE TABLE IF NOT EXISTS `representantes` (
`idrepresentantes` int(11) NOT NULL,
  `iddatos_estudiantes` int(11) NOT NULL,
  `representantes_nombre` varchar(100) NOT NULL,
  `representantes_apellido` varchar(100) NOT NULL,
  `representantes_cedula` int(11) NOT NULL,
  `representantes_edad` int(11) NOT NULL,
  `representantes_fechanacimiento` timestamp NULL DEFAULT NULL,
  `representantes_paisnacimiento` varchar(100) NOT NULL,
  `representantes_nacionalidad` varchar(100) NOT NULL,
  `representantes_direccion` varchar(100) NOT NULL,
  `representantes_parentesco` varchar(100) NOT NULL,
  `representantes_ocupacion` varchar(100) NOT NULL,
  `representantes_direcionlaboral` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE IF NOT EXISTS `tallas` (
`idtallas` int(11) NOT NULL,
  `iddatos_estudiantes` int(11) NOT NULL,
  `talla_pantalon` varchar(45) DEFAULT NULL,
  `talla_camisa` varchar(45) DEFAULT NULL,
  `talla_zapato` varchar(45) DEFAULT NULL,
  `condicion` tinyint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`idtallas`, `iddatos_estudiantes`, `talla_pantalon`, `talla_camisa`, `talla_zapato`, `condicion`) VALUES
(1, 1, '18', 'S', '38', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE IF NOT EXISTS `telefono` (
`idtelefono` int(11) NOT NULL,
  `idrepresentantes` int(11) NOT NULL,
  `telefono_uno` varchar(15) NOT NULL,
  `telefono_dos` varchar(15) NOT NULL,
  `telefono_local` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_inscripcion`
--

CREATE TABLE IF NOT EXISTS `tipo_inscripcion` (
`idtipo_inscripcion` int(11) NOT NULL,
  `tipo_inscripcion` varchar(100) NOT NULL,
  `condicion` tinyint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_inscripcion`
--

INSERT INTO `tipo_inscripcion` (`idtipo_inscripcion`, `tipo_inscripcion`, `condicion`) VALUES
(1, 'Nuevo Ingreso', 1),
(2, 'De Procedencia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

CREATE TABLE IF NOT EXISTS `transporte` (
`idtransporte` int(11) NOT NULL,
  `iddatos_estudiantes` int(11) NOT NULL,
  `transporte_nombre` varchar(100) NOT NULL,
  `transporte_cedula` int(11) NOT NULL,
  `transporte_telefono` varchar(11) NOT NULL,
  `transporte_vehiculo` varchar(200) NOT NULL,
  `condicion` tinyint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transporte`
--

INSERT INTO `transporte` (`idtransporte`, `iddatos_estudiantes`, `transporte_nombre`, `transporte_cedula`, `transporte_telefono`, `transporte_vehiculo`, `condicion`) VALUES
(1, 1, 'Jaime', 11435788, '02446527766', 'Optra Verde', 1),
(2, 2, 'Maria Jimenez', 17652348, '04249872266', 'Caliber', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '1',
  `secretaria` int(11) NOT NULL DEFAULT '1',
  `personalins` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `secretaria`, `personalins`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'administrador@telsur.com', '$2y$10$mdXPhOjHmGfMEVco5pQmSe1ssHopRTTpODYafXllkxz9AcqvZobjO', 1, 1, 1, 'u8xAyNfnjochN13aH6KjHm28SlkCtlyChEGmdq1MVabSsAAyVcFpKkExsCvG', '2017-06-26 11:30:06', '2017-06-26 16:24:19'),
(2, 'Secretaria', 'secretariatelsur@telsur.com', '$2y$10$7xhLrqaMDkisUr1FZoZ/QuC2edpgiTxxKUwd5I9cp8VdgBL6Ys6KO', 0, 1, 0, '0TnXphMBJeZ8TBc9tTTrq6Uh1CjSAzAkLe4q75jUOAb3RF1hYmDfVpUS7whz', '2017-06-26 11:31:51', '2017-06-26 16:25:50'),
(3, 'Personal Inscripcion', 'inscripcion@telsur.com', '$2y$10$Vn6ey9BL2ZvDIiTzmH7BW.xKafl40BKPfhFB1.EqMa/58vxgzXsmi', 0, 0, 1, 'RMVmHyHlkH5f6r2d4wRcMmnzm4wLZtMyLZL7wnI9PKVIvaD3qwObRCpjzGy1', '2017-06-26 11:34:11', '2017-06-26 16:30:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE IF NOT EXISTS `vivienda` (
`idvivienda` int(11) NOT NULL,
  `idrepresentantes` int(11) NOT NULL,
  `vivienda_tipo` varchar(100) NOT NULL,
  `vivienda_condicion` varchar(100) NOT NULL,
  `vivienda_condicioninfraestructura` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
 ADD PRIMARY KEY (`idantecedentes`), ADD KEY `fk_antecedentes_datos_estudiantes_idx` (`iddatos_estudiantes`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
 ADD PRIMARY KEY (`idasistencia`), ADD KEY `fk_asistencia_empleado_idx` (`idempleado`);

--
-- Indices de la tabla `datos_estudiantes`
--
ALTER TABLE `datos_estudiantes`
 ADD PRIMARY KEY (`iddatos_estudiantes`), ADD KEY `fk_datos_estudiantes_tipo_inscripcion_idx` (`idtipo_inscripcion`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
 ADD PRIMARY KEY (`iddireccion`), ADD KEY `fk_dirrecion_datos_estudiantes_idx` (`iddatos_estudiantes`);

--
-- Indices de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
 ADD PRIMARY KEY (`iddiscapacidad`), ADD KEY `fk_discapacidad_datos_estudiantes_idx` (`iddatos_estudiantes`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
 ADD PRIMARY KEY (`idempleado`);

--
-- Indices de la tabla `grupo_familiar`
--
ALTER TABLE `grupo_familiar`
 ADD PRIMARY KEY (`idgrupo_familiar`), ADD KEY `fk_grupo_familiar_datos_estudiantes_idx` (`iddatos_estudiantes`);

--
-- Indices de la tabla `informe_asistencia`
--
ALTER TABLE `informe_asistencia`
 ADD PRIMARY KEY (`idinforme_asistencia`), ADD KEY `fk__idx` (`idempleado`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `representantes`
--
ALTER TABLE `representantes`
 ADD PRIMARY KEY (`idrepresentantes`), ADD KEY `fk_representantes_datos_estudiantes_idx` (`iddatos_estudiantes`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
 ADD PRIMARY KEY (`idtallas`), ADD KEY `fk_tallas_datos_estudiantes_idx` (`iddatos_estudiantes`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
 ADD PRIMARY KEY (`idtelefono`), ADD KEY `fk_telefono_representantes_idx` (`idrepresentantes`);

--
-- Indices de la tabla `tipo_inscripcion`
--
ALTER TABLE `tipo_inscripcion`
 ADD PRIMARY KEY (`idtipo_inscripcion`);

--
-- Indices de la tabla `transporte`
--
ALTER TABLE `transporte`
 ADD PRIMARY KEY (`idtransporte`), ADD KEY `fk_transporte_datos_estudiantes_idx` (`iddatos_estudiantes`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
 ADD PRIMARY KEY (`idvivienda`), ADD KEY `fk_vivienda_representantes_idx` (`idrepresentantes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
MODIFY `idantecedentes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
MODIFY `idasistencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `datos_estudiantes`
--
ALTER TABLE `datos_estudiantes`
MODIFY `iddatos_estudiantes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
MODIFY `iddireccion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
MODIFY `iddiscapacidad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `grupo_familiar`
--
ALTER TABLE `grupo_familiar`
MODIFY `idgrupo_familiar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `informe_asistencia`
--
ALTER TABLE `informe_asistencia`
MODIFY `idinforme_asistencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `representantes`
--
ALTER TABLE `representantes`
MODIFY `idrepresentantes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
MODIFY `idtallas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
MODIFY `idtelefono` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_inscripcion`
--
ALTER TABLE `tipo_inscripcion`
MODIFY `idtipo_inscripcion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `transporte`
--
ALTER TABLE `transporte`
MODIFY `idtransporte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
MODIFY `idvivienda` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
ADD CONSTRAINT `fk_antecedentes_datos_estudiantes` FOREIGN KEY (`iddatos_estudiantes`) REFERENCES `datos_estudiantes` (`iddatos_estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
ADD CONSTRAINT `fk_asistencia_empleado` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datos_estudiantes`
--
ALTER TABLE `datos_estudiantes`
ADD CONSTRAINT `fk_datos_estudiantes_tipo_inscripcion` FOREIGN KEY (`idtipo_inscripcion`) REFERENCES `tipo_inscripcion` (`idtipo_inscripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
ADD CONSTRAINT `fk_dirrecion_datos_estudiantes` FOREIGN KEY (`iddatos_estudiantes`) REFERENCES `datos_estudiantes` (`iddatos_estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
ADD CONSTRAINT `fk_discapacidad_datos_estudiantes` FOREIGN KEY (`iddatos_estudiantes`) REFERENCES `datos_estudiantes` (`iddatos_estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupo_familiar`
--
ALTER TABLE `grupo_familiar`
ADD CONSTRAINT `fk_grupo_familiar_datos_estudiantes` FOREIGN KEY (`iddatos_estudiantes`) REFERENCES `datos_estudiantes` (`iddatos_estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `informe_asistencia`
--
ALTER TABLE `informe_asistencia`
ADD CONSTRAINT `fk_informe_asistencia_empleado` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `representantes`
--
ALTER TABLE `representantes`
ADD CONSTRAINT `fk_representantes_datos_estudiantes` FOREIGN KEY (`iddatos_estudiantes`) REFERENCES `datos_estudiantes` (`iddatos_estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tallas`
--
ALTER TABLE `tallas`
ADD CONSTRAINT `fk_tallas_datos_estudiantes` FOREIGN KEY (`iddatos_estudiantes`) REFERENCES `datos_estudiantes` (`iddatos_estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
ADD CONSTRAINT `fk_telefono_representantes` FOREIGN KEY (`idrepresentantes`) REFERENCES `representantes` (`idrepresentantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `transporte`
--
ALTER TABLE `transporte`
ADD CONSTRAINT `fk_transporte_datos_estudiantes` FOREIGN KEY (`iddatos_estudiantes`) REFERENCES `datos_estudiantes` (`iddatos_estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vivienda`
--
ALTER TABLE `vivienda`
ADD CONSTRAINT `fk_vivienda_representantes` FOREIGN KEY (`idrepresentantes`) REFERENCES `representantes` (`idrepresentantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
