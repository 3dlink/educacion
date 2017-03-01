-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2016 a las 06:17:45
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tekkoa_xcolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_planificacion_media`
--

CREATE TABLE IF NOT EXISTS `actividades_planificacion_media` (
  `actividades_planificacion_media_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades_planificacion_media`
--

INSERT INTO `actividades_planificacion_media` (`actividades_planificacion_media_id`, `name`) VALUES
(1, 'Afiches'),
(2, 'Algoritmos'),
(3, 'Análisis de casos'),
(4, 'Analogías'),
(5, 'Crucigramas'),
(6, 'Cuestionario'),
(7, 'Diálogos'),
(8, 'Dramatización'),
(9, 'Ejercicios'),
(10, 'Ensayo'),
(11, 'Guía de ejercicios'),
(12, 'Informe'),
(13, 'Instrucción programada'),
(14, 'Interrogatorio'),
(15, 'Investigación en el aula'),
(16, 'Juegos prácticos'),
(17, 'Lectura'),
(18, 'Líneas de tiempo'),
(19, 'Mapa conceptual'),
(20, 'Mapa mental'),
(21, 'Modelos'),
(22, 'Prácticas'),
(23, 'Resúmenes'),
(24, 'Sopa de letras'),
(25, 'Trabajo escrito'),
(26, 'Infografias'),
(27, 'Mandalas'),
(28, 'Microexposiciones'),
(29, 'Expo-Navidad'),
(30, 'Dseño de planificación'),
(31, 'Todas'),
(32, 'Cartogramas'),
(33, 'Rasgos'),
(34, 'Collage Informativo'),
(35, 'Periodico Mural'),
(36, 'Presentación Power Point');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE IF NOT EXISTS `asistencias` (
  `id_asistencia` int(11) NOT NULL COMMENT 'object id',
  `id_estudiante` int(11) NOT NULL COMMENT 'id del estudiante',
  `status` tinyint(1) NOT NULL COMMENT 'status asistio o no',
  `fecha_asistencia` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'fecha en que asistio',
  `fecha_creacion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_actualizacion` timestamp NULL DEFAULT NULL COMMENT 'fecha de actualización del registro',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'registro activo o no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las asistencias diarias de los alumnos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `status`, `student_id`, `date`) VALUES
(1, 1, 23, '2016-04-13'),
(2, 1, 24, '2016-04-13'),
(3, 2, 25, '2016-04-13'),
(4, 1, 23, '2016-04-15'),
(5, 1, 24, '2016-04-15'),
(6, 2, 25, '2016-04-15'),
(7, 0, 23, '2016-04-22'),
(8, 0, 24, '2016-04-22'),
(9, 0, 25, '2016-04-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `cargo_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT 'DOCENTE',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`cargo_id`, `name`, `registro_activo`) VALUES
(1, 'Docente', 1),
(2, 'Docente Especialista 54 Hrs.', 1),
(3, 'Docente de Aula 53,33 Hrs', 1),
(4, 'Docente de Aula  53,33 Hrs', 1),
(5, 'Docente de Aula 53,33 Hrs ', 1),
(6, 'Docente de Aula 53,33Hrs ', 1),
(7, 'Docente de Aula 53,33Hrs', 1),
(8, 'Auxiliar de Preescolar J.C', 1),
(9, 'Docente Especialista 33,33 Hrs', 1),
(10, 'Docente de Aula 33,33Hrs', 1),
(11, 'Docente Especialista NG 33,33 Hrs (Instructor de Música)', 1),
(12, 'Docente de Aula 53,33Hrs (Interino)', 1),
(13, 'Analista Soporte Técnico', 1),
(14, 'Terapeuta Ocupacional A', 1),
(15, 'Terapista de Lenguaje A', 1),
(16, 'Secretaria Ejecutiva A', 1),
(17, 'Analista Administración B', 1),
(18, 'Docente Especialista TSE 33,33 Hrs', 1),
(19, 'Docente Especialista TSE 33,33 Hrs ', 1),
(20, 'Docente Director JC 56,66 Hrs.', 1),
(21, 'Coord.Prog.Terapia de Lenguaje', 1),
(22, 'Psicólogo B', 1),
(23, 'Secretaria', 1),
(24, 'Trabajador Social B', 1),
(25, 'Docente Subdirector de Primaria JC56, 66', 1),
(26, 'Docente Subdirector de Media General JC 56.66', 1),
(27, 'Docente Subdirector de Inicial JC 56.66', 1),
(28, 'Docente Coord Media Gnral JC 56, 66 Hrs', 1),
(29, 'Docente Coord.Eval JC 56.66 Hrs', 1),
(30, 'Docente de Aula 33, 33 Hrs.', 1),
(31, 'Docente de Aula 33, 33 Hrs', 1),
(32, 'Docente PH 36 Hrs', 1),
(33, 'Docente Especialista NG (Instructor de Música)', 1),
(34, 'Docente Especialista NG (Instructor de Folklore)', 1),
(35, 'Docente de Aula 33, 33 Hrs ', 1),
(36, 'Docente de Aula TSE 33, 33 Hrs', 1),
(37, 'Docente de Aula TSE 33, 33 Hrs (Interino)', 1),
(38, 'Docente Especialista TSE 33, 33 Hrs', 1),
(39, 'Docente TC 36 Hrs', 1),
(40, 'Docente PH 40 Hrs', 1),
(41, 'Docente Especialista 30 Hrs', 1),
(42, 'Docente Especialista 28 Hrs', 1),
(43, 'Docente Especialista 33, 33 Hrs.', 1),
(44, 'Docente PH 40 Hrs.', 1),
(45, 'Docente PH 40 Hrs (Interino)', 1),
(46, 'Docente Especialista 36 Hrs ', 1),
(47, 'Docente Especialista 33, 33 Hrs', 1),
(48, 'Docente Especialista 33, 33 Hrs ', 1),
(49, 'Docente PH 20 Hrs ', 1),
(50, 'Docente PH I 16 Hrs ', 1),
(51, 'Docente PH 22 Hrs ', 1),
(52, 'Docente de Aula 33, 33 Hrs (Auxiliar de Preescolar)', 1),
(53, 'Docente de Aula 33, 33 Hrs. (Auxiliar de Preescolar) (Interino)', 1),
(54, 'Docente de Aula 33, 33 Hrs (Auxiliar de Preescolar) INTERINO', 1),
(55, 'Auxiliar de Preescolar', 1),
(56, 'Docente PH 50 Hrs', 1),
(57, 'Docente de Aula 33, 33 Hrs (Auxiliar de Preescolar) ', 1),
(58, 'Docente de Aula 33, 33 (Interino)', 1),
(59, 'Docente de Aula 33, 33 Hrs (Interino)', 1),
(60, 'Administrador Escuelas', 1),
(61, 'Sicólogo B', 1),
(62, 'Analista Administración C', 1),
(63, 'Secretaria Ejecutiva III', 1),
(64, 'Analista Administración A', 1),
(65, 'Supervisor de Cocina', 1),
(66, 'Asistente Administrativo A', 1),
(67, 'Asistente Servicios Generales B', 1),
(68, 'Administrador de Escuelas', 1),
(69, 'Docente Subdirector Primaria JC 56,66 Hrs', 1),
(70, 'Docente Subdirector de Inicial JC 56.66 Hrs', 1),
(71, 'Docente CoordMedGral Seccional JC56,66 Hrs ', 1),
(72, 'Docente Coord CtrlEst JC 56,66 Hrs', 1),
(73, 'Docente de Aula  33,33 Hrs', 1),
(74, 'Docente PH 54 Hrs.', 1),
(75, 'Docente Especialista 44 Hrs.', 1),
(76, 'Docente PH 30 Hrs', 1),
(77, 'Docente PH 41 Hrs', 1),
(78, 'Docente PH 38 Hrs', 1),
(79, 'Docente de Aula 33,33 Hrs', 1),
(80, 'Docente de Aula 33,33 Hrs ', 1),
(81, 'Docente Especialista 36 Hrs', 1),
(82, 'Docente PH 35 Hrs', 1),
(83, 'Docente Especialista 33,33 Hrs ', 1),
(84, 'Docente Especialista 33,33 Hrs.', 1),
(85, 'Docente PH 33 Hrs', 1),
(86, 'Docente PH 30 Hrs ', 1),
(87, 'Docente PH 38 Hrs. ', 1),
(88, 'Docente de Aula 33,33Hrs ', 1),
(89, 'Docente de Aula 33 Hrs (Interino) (30 Hrs Biología y 2 Hrs Gerardin Galindez)', 1),
(90, 'Docente PH 32 Hrs ', 1),
(91, 'Docente Especialista 28 Hrs.', 1),
(92, 'Docente PH 40 Hrs ', 1),
(93, 'Docente PH 25 Hrs (Interino)', 1),
(94, 'Docente PH 21Hrs', 1),
(95, 'Docente PH 8 Hrs', 1),
(96, 'Docente PH 19 Hrs ', 1),
(97, 'Docente PH 16 Hrs', 1),
(98, 'Docente Especialista 33,33 Hrs (Instructor de Folklore)', 1),
(99, 'Docente de Aula 33,33 Hrs (Auxiliar de Preescolar) INTERINA', 1),
(100, 'Docente de Aula 33,33 Hrs (Auxiliar de Preescolar)', 1),
(101, 'Docente de Aula 33,33Hrs (AUXILIAR DE PREESCOLAR) INTERINA', 1),
(102, 'Auxiliar de Biblioteca', 1),
(103, 'Docente de Aula Ng 33,33 Hrs(Interino)', 1),
(104, 'Docente de Aula 33,33 Hrs (Interino)', 1),
(105, 'Docente de Aula 17 Hrs (Interino)', 1),
(106, 'Docente de Aula 21 Hrs (Interino)', 1),
(107, 'Asistente Administrativo D', 1),
(108, 'Secretario II', 1),
(109, 'Asistente Servicios Generales A', 1),
(110, 'Docente Director Noct. 35 Hrs', 1),
(111, 'Docente V Coord.Resd.Noct25Hrs', 1),
(112, 'Docente VI 18H OrIentd.Noct', 1),
(113, 'Docente PH 25 Hrs ', 1),
(114, 'Docente PH 17 Hrs ', 1),
(115, 'Docente PH 16 Hrs ', 1),
(116, 'Docente PH 15 Hrs ', 1),
(117, 'Docente PH 14 Hrs ', 1),
(118, 'Docente PH 12 Hrs ', 1),
(119, 'Docente PH 8 Hrs ', 1),
(120, 'Gerente de Adm. y Servicios', 1),
(121, 'Coord. Programa Alimentario', 1),
(122, 'Coordinador Admin.y Servicios', 1),
(123, 'Mensajero Motorizado', 1),
(124, 'Director De Educación', 1),
(125, 'Consultor Ejecutivo B', 1),
(126, 'Coordinador Gestión Educativa', 1),
(127, 'Coordinador de Eventos', 1),
(128, 'Analista Administración D', 1),
(129, 'Trabajador Social A', 1),
(130, 'Diseñador Gráfico', 1),
(131, 'Secretaria Ejecutiva B', 1),
(132, 'Gerente Programas y Proyectos', 1),
(133, 'Arquitecto C', 1),
(134, 'Coordinador Prg Socioeducativo', 1),
(135, 'Asistente de Planificación', 1),
(136, 'Gerente Gestión Educativa', 1),
(137, 'Coordinador Asuntos Docentes', 1),
(138, 'Planificador C', 1),
(139, 'Nutricionista', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `censo`
--

CREATE TABLE IF NOT EXISTS `censo` (
`id_censo` int(11) NOT NULL,
  `Residente` tinyint(1) DEFAULT '0',
  `GradoACursar` int(11) DEFAULT NULL,
  `ElAlumnoEstudiaActualmente` tinyint(1) DEFAULT '0',
  `ElAlumnoCursoElAnterior` tinyint(1) DEFAULT '0',
  `ElAlumnoRepiteGrado` tinyint(1) DEFAULT NULL,
  `GradoRepetido` varchar(13) DEFAULT NULL,
  `UnidadEducativaDeProcedencia` varchar(20) DEFAULT NULL,
  `NombreDeLaInstitucion` varchar(48) DEFAULT NULL,
  `EstadoInstitucion` int(11) DEFAULT NULL,
  `MunicipioInstitucion` int(11) DEFAULT NULL,
  `MateriaPendiente` varchar(2) DEFAULT NULL,
  `EspecifiqueCualesMateriasEstanPendientes` text,
  `UniDePrefJuanDio` tinyint(1) NOT NULL DEFAULT '0',
  `UniDePrefAndres` tinyint(1) NOT NULL DEFAULT '0',
  `UniDePrefCarlos` tinyint(1) NOT NULL DEFAULT '0',
  `RazonSocioeco` tinyint(1) NOT NULL DEFAULT '0',
  `RazonCambioResi` tinyint(1) NOT NULL DEFAULT '0',
  `RazonNoAdapta` tinyint(1) NOT NULL DEFAULT '0',
  `RazonOtra` tinyint(1) NOT NULL DEFAULT '0',
  `PrimerNombreDelAlumno` varchar(9) DEFAULT NULL,
  `SegundoNombreDelAlumno` varchar(14) DEFAULT NULL,
  `PrimerApellidoDelAlumno` varchar(10) DEFAULT NULL,
  `SegundoApellidoDelAlumno` varchar(10) DEFAULT NULL,
  `CedulaDeIdentidadDelAlumnoOCedulaEscolar` int(11) DEFAULT NULL,
  `FechaDeNacimientoDelAlumno` date DEFAULT NULL,
  `SexoDelAlumno` varchar(9) DEFAULT NULL,
  `NacionalidadDelAlumno` varchar(10) DEFAULT NULL,
  `PaisDeNacimientoDelAlumno` int(11) DEFAULT NULL,
  `EstadoDondeNacioElAlumno` int(11) DEFAULT NULL,
  `MunicipioDondeNacioElAlumno` int(11) DEFAULT NULL,
  `ParroquiaOSectorDondeNacioElAlumno` varchar(26) DEFAULT NULL,
  `EstadoDondeResideElAlumno` int(11) DEFAULT NULL,
  `MunicipioDondeResideElAlumno` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideElAlumno` varchar(43) DEFAULT NULL,
  `CalleOAvenidaDondeResideElAlumno` varchar(28) DEFAULT NULL,
  `CasaOEdificioDondeResideElAlumno` varchar(22) DEFAULT NULL,
  `PisoOPlantaDondeResideElAlumno` varchar(12) DEFAULT NULL,
  `NumeroDeCasaOApartamentoDondeResideElAlumno` int(11) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomicilioDelAlumno` varchar(73) DEFAULT NULL,
  `ParentescoConElAlumno` varchar(5) DEFAULT NULL,
  `OtroParentescoConElAlumno` int(11) DEFAULT NULL,
  `PrimerNombreDelRepresentante` varchar(12) DEFAULT NULL,
  `SegundoNombreDelRepresentante` varchar(9) DEFAULT NULL,
  `PrimerApellidoDelRepresentante` varchar(10) DEFAULT NULL,
  `SegundoApellidoDelRepresentante` varchar(10) DEFAULT NULL,
  `CedulaDeIdentidadDelRepresentante` int(11) DEFAULT NULL,
  `FechaDeNacimientoDelRepresentante` date DEFAULT NULL,
  `NacionalidadDelRepresentante` varchar(10) DEFAULT NULL,
  `EstadoDondeNacioElRepresentante` varchar(16) DEFAULT NULL,
  `MunicipioDondeNacioElRepresentante` varchar(28) DEFAULT NULL,
  `ParroquiaDondeNacioElRepresentante` varchar(23) DEFAULT NULL,
  `PaisDeNacimientoDelRepresentante` int(11) DEFAULT NULL,
  `EstadoCivilDelRepresentante` varchar(11) DEFAULT NULL,
  `RepresentanteMismaDireAlu` tinyint(1) DEFAULT '0',
  `EstadoDondeResideElRepresentante` int(11) DEFAULT NULL,
  `MunicipioDondeResideElRepresentante` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideElRepresentante` varchar(20) DEFAULT NULL,
  `CalleOAvenidaDondeResideElRepresentante` varchar(20) DEFAULT NULL,
  `CasaOEdificioDondeResideElRepresentante` varchar(20) DEFAULT NULL,
  `PisoDondeResideElRepresentante` varchar(20) DEFAULT NULL,
  `NumeroOApartamentoDondeResideElRepresentante` int(11) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomicilioDelRepresentante` varchar(20) DEFAULT NULL,
  `TelefonoDeHabitacionDelRepresentante` varchar(15) DEFAULT NULL,
  `TelefonoCelularDelRepresentante` varchar(15) DEFAULT NULL,
  `CorreoElectronicoDelRepresentante` varchar(250) DEFAULT NULL,
  `UsoDeRedesSociales` varchar(29) DEFAULT NULL,
  `RedSocialRepreFacebook` tinyint(1) DEFAULT '0',
  `RedSocialRepreTwitter` tinyint(1) DEFAULT '0',
  `RedSocialRepreWhatsapp` tinyint(1) DEFAULT '0',
  `RedSocialRepreOtra` tinyint(1) DEFAULT '0',
  `EspecifiqueQueOtrasRedesSocialesUsaElRepresentante` text,
  `TrabajaActualmente` tinyint(1) DEFAULT '0',
  `TrabajaDentroChacao` tinyint(1) DEFAULT '0',
  `TrabajaEnAlcaldia` tinyint(1) DEFAULT '0',
  `ProfesionUOcupacionDelRepresentante` varchar(67) DEFAULT NULL,
  `IngresoMensualDelRepresentante` varchar(21) DEFAULT NULL,
  `EscalaDeIngresoDelRepresentante` varchar(28) DEFAULT NULL,
  `OtrosIngresosDentroDeSuGrupoFamiliar` varchar(21) DEFAULT NULL,
  `EscalaDeIngresosDelGrupoFamiliar` varchar(28) DEFAULT NULL,
  `TipoDeJornadaLaboralDelRepresentante` varchar(15) DEFAULT NULL,
  `NombreDeLaEmpresaUOrganismoDondeTrabajaElRepresentante` varchar(37) DEFAULT NULL,
  `EstadoDondeSeUbicaElTrabajoDelRepresentante` int(11) DEFAULT NULL,
  `MunicipioDondeTrabajaElRepresentante` int(11) DEFAULT NULL,
  `UrbanizaOSectorDondeSeUbicaElTrabajoDelRepresentante` varchar(30) NOT NULL,
  `CalleOAvenidaDondeSeUbicaElTrabajoDelRepresentante` varchar(39) DEFAULT NULL,
  `EdificioOCasaDondeTrabajaElRepresentante` varchar(32) DEFAULT NULL,
  `PisoDondeSeUbicaElTrabajoDelRepresentante` varchar(11) DEFAULT NULL,
  `OficinaNumeroOApartamentoDondeTrabajaElRepresentante` varchar(11) DEFAULT NULL,
  `TelefonoDelTrabajoActualDelRepresentante` varchar(15) DEFAULT NULL,
  `ExtensionTelefonicaParaContactarAlRepresentante` varchar(15) DEFAULT NULL,
  `PersonaContactoEnElTrabajoDelRepresentante` varchar(19) DEFAULT NULL,
  `TelefonoDeLaPersonaContactoDelTrabajoDelRepresentante` varchar(15) DEFAULT NULL,
  `ExtensionDeLaPersonaContactoDelTrabajoDelRepresentante` varchar(15) DEFAULT NULL,
  `ElRepresentanteTieneAlgunaDiversidadFuncional` tinyint(1) DEFAULT '0',
  `RepreDiversidadMotora` tinyint(1) DEFAULT '0',
  `RepreDiversidadVisual` tinyint(1) DEFAULT '0',
  `RepreDiversidadAuditiva` tinyint(1) DEFAULT '0',
  `RepreDiversidadNeurologica` tinyint(1) DEFAULT '0',
  `RepreDiversidadLenguaje` tinyint(1) DEFAULT '0',
  `RepreDiversidadOtra` tinyint(1) DEFAULT '0',
  `EspecificaRepreDiversidadOtra` text,
  `ElRepresentanteTieneOtrosHijosEstudiandoChacao` tinyint(1) DEFAULT '0',
  `HijosEstudianGuanche` tinyint(1) DEFAULT '0',
  `CantidadHijosEstudianGuanche` int(5) DEFAULT NULL,
  `GradosHijosEstudianGuanche` text,
  `HijosEstudianAndresBello` tinyint(1) DEFAULT '0',
  `CantidadHijosEstudianAndresBello` int(5) DEFAULT NULL,
  `GradosHijosEstudianAndresBello` text,
  `HijosEstudianCarlosSoublette` tinyint(1) DEFAULT '0',
  `CantidadHijosEstudianCarlosSoublette` int(5) DEFAULT NULL,
  `GradosHijosEstudianCarlosSoublette` text,
  `LaMadreVive` tinyint(1) NOT NULL DEFAULT '0',
  `NombreDeLaMadre` int(11) DEFAULT NULL,
  `ApellidosDeLaMadre` int(11) DEFAULT NULL,
  `CedulaDeIdentidadDeLaMadre` int(11) DEFAULT NULL,
  `FechaDeNacimientoDeLaMadre` int(11) DEFAULT NULL,
  `NacionalidadMadre` varchar(15) DEFAULT NULL,
  `PaisDeNacimientoDeLaMadre` int(11) DEFAULT NULL,
  `EstadoCivilMadre` varchar(20) DEFAULT NULL,
  `EstadoDondeNacioLaMadre` int(11) DEFAULT NULL,
  `MunicipioDondeNacioLaMadre` int(11) DEFAULT NULL,
  `MadreMismaResiAlu` tinyint(1) DEFAULT '0',
  `EstadoDondeResideLaMadre` int(11) DEFAULT NULL,
  `MunicipioDondeResideLaMadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideLaMadre` varchar(30) DEFAULT NULL,
  `CasaOEdificioDondeResideLaMadre` int(11) DEFAULT NULL,
  `PisoDondeResideLaMadre` int(11) DEFAULT NULL,
  `NumeroOApartamentoDondeResideLaMadre` int(11) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomiclioDeLaMadre` int(11) DEFAULT NULL,
  `TelefonoDeHabitacionDeLaMadre` varchar(15) DEFAULT NULL,
  `TelefonoCelularDeLaMadre` varchar(15) DEFAULT NULL,
  `CorreoElectronicoDeLaMadre` varchar(250) DEFAULT NULL,
  `RedSocialMadreFacebook` tinyint(1) DEFAULT '0',
  `RedSocialMadreTwitter` tinyint(1) DEFAULT '0',
  `RedSocialMadreWhatsapp` tinyint(1) DEFAULT '0',
  `RedSocialMadreOtra` tinyint(1) DEFAULT '0',
  `MadreTrabaja` tinyint(1) DEFAULT '0',
  `ProfesionUOcupacionDeLaMadre` varchar(150) DEFAULT NULL,
  `IngresoMensualMadre` varchar(20) DEFAULT NULL,
  `EscalaDeIngresoMadre` varchar(20) DEFAULT NULL,
  `TipoDeJornadaLaboralMadre` varchar(20) DEFAULT NULL,
  `NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre` varchar(30) DEFAULT NULL,
  `EstadoDondeTrabajaLaMadre` int(11) DEFAULT NULL,
  `MunicipioDondeTrabajaLaMadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeTrabajaLaMadre` int(11) DEFAULT NULL,
  `EdificioOCasaDondeTrabajaLaMadre` varchar(30) DEFAULT NULL,
  `PisoDondeTrabajaLaMadre` varchar(30) DEFAULT NULL,
  `NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre` int(11) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlTrabajoDeLaMadre` varchar(40) DEFAULT NULL,
  `TelefonoDelLugarDelTrabajodeLaMadre` varchar(15) DEFAULT NULL,
  `ExtensionTelefonicaParaContactarALaMadre` varchar(15) DEFAULT NULL,
  `PersonaContactoEnElTrabajoDeLaMadre` varchar(30) DEFAULT NULL,
  `TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre` varchar(15) DEFAULT NULL,
  `ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre` varchar(15) DEFAULT NULL,
  `ElPadreVive` varchar(2) DEFAULT NULL,
  `NombreDelPadre` varchar(17) DEFAULT NULL,
  `ApellidosDelPadre` varchar(16) DEFAULT NULL,
  `CedulaDeIdentidadDelPadre` int(11) DEFAULT NULL,
  `FechaDeNacimientoDelPadre` datetime DEFAULT NULL,
  `NacionalidadDelPadre` varchar(10) DEFAULT NULL,
  `PaisDondeNacioElPadre` int(11) DEFAULT NULL,
  `EstadoCivilDelPadre` varchar(14) DEFAULT NULL,
  `EstadoDondeNacioElPadre` int(11) DEFAULT NULL,
  `MunicipioDondeNacioElPadre` int(11) DEFAULT NULL,
  `ElPadreViveEnElMismoLugarDeResidenciaDelAlumno` tinyint(1) DEFAULT '0',
  `EstadoDondeResideElPadre` int(11) DEFAULT NULL,
  `MunicipioDondeResideElPadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideElPadre` varchar(22) DEFAULT NULL,
  `CalleOAvenidaDondeResideElPadre` varchar(17) DEFAULT NULL,
  `CasaOEdificioDondeResideElPadre` varchar(15) DEFAULT NULL,
  `PisoDondeResideElPadre` varchar(8) DEFAULT NULL,
  `NumeroDeCasaOApartamentoDondeResideElPadre` varchar(3) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomicilioDelPadre` varchar(21) DEFAULT NULL,
  `TelefonoDeHabitacionDelPadre` varchar(15) DEFAULT NULL,
  `TelefonoCelularDelPadre` varchar(15) DEFAULT NULL,
  `CorreoElectronicoDelPadre` varchar(250) DEFAULT NULL,
  `RedSocialPadreFacebook` tinyint(1) DEFAULT '0',
  `RedSocialPadreTwitter` tinyint(1) DEFAULT '0',
  `RedSocialPadreWhatsapp` tinyint(1) DEFAULT '0',
  `RedSocialPadreOtra` tinyint(1) DEFAULT '0',
  `RedesSocialesQueUsaElPadre` varchar(35) DEFAULT NULL,
  `EspecifiqueQueOtrasRedesSocialesUsaElPadre` varchar(9) DEFAULT NULL,
  `ElPadreTrabajaActualmente` tinyint(1) DEFAULT '0',
  `ProfesionUOcupacionDelPadre` varchar(250) DEFAULT NULL,
  `IngresoMensualDelPadre` varchar(21) DEFAULT NULL,
  `EscalaDeIngresosDelPadre` varchar(29) DEFAULT NULL,
  `TipoDeJornadaLaboralDelPadre` varchar(15) DEFAULT NULL,
  `NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre` varchar(33) DEFAULT NULL,
  `EstadoDondeTrabajaElPadre` int(11) DEFAULT NULL,
  `MunicipioDondeTrabajaElPadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeTrabajaElPadre` varchar(25) DEFAULT NULL,
  `CalleOAvenidaDondeTrabajaElPadre` varchar(30) DEFAULT NULL,
  `EdificioOCasaDondeTrabajaElPadre` varchar(28) DEFAULT NULL,
  `PisoDondeTrabajaElPadre` varchar(11) DEFAULT NULL,
  `OficinaCasaOApartamentoDondeTrabajaElPadre` varchar(17) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlTrabajoDelPadre` varchar(54) DEFAULT NULL,
  `TelefonoDelLugarDeTrabajotrabajoDelPadre` varchar(15) DEFAULT NULL,
  `ExtensionTelefonicaDeContactoDelPadre` varchar(15) DEFAULT NULL,
  `PersonaContactoEnElTrabajoDelPadre` varchar(15) DEFAULT NULL,
  `TelefonoDeLaPersonaContactoEnElTrabajoDelPadre` varchar(15) DEFAULT NULL,
  `ExtensionDeLaPersonaContactoEnElTrabajodelPadre` varchar(15) DEFAULT NULL,
  `ElAlumnoViveCon` varchar(14) DEFAULT NULL,
  `ElAlumnoEstaBecado` tinyint(1) DEFAULT '0',
  `EspecifiqueElTipoDeBecaDelAlumno` varchar(50) DEFAULT NULL,
  `MedioDeTrasladoAlPlantel` varchar(19) DEFAULT NULL,
  `EspecifiqueQueOtroMedioDeTransporteUsaElAlumno` varchar(9) DEFAULT NULL,
  `ElAlumnoSeRetiraSoloDelPlantel` tinyint(1) DEFAULT '0',
  `NumeroDeHermanos` int(11) DEFAULT NULL,
  `HermanosEstudianEnUnidadesEducativasMunicipales` varchar(2) DEFAULT NULL,
  `GradosQueCursanLosHermanos` varchar(17) DEFAULT NULL,
  `UnidadEducativaMunicipalDondeEstudianLosHermanos` varchar(22) DEFAULT NULL,
  `DatosDeLaVivienda` varchar(9) DEFAULT NULL,
  `OtraCondicionDeViviendaResideElAlumno` varchar(45) DEFAULT NULL,
  `FactorRh` varchar(1) DEFAULT NULL,
  `Estatura` int(11) DEFAULT NULL,
  `Peso` int(11) DEFAULT NULL,
  `TallaCamisa` int(11) DEFAULT NULL,
  `TallaPantalon` int(11) DEFAULT NULL,
  `TallaCalzado` int(11) DEFAULT NULL,
  `TipoDeParto` varchar(7) DEFAULT NULL,
  `PadeceAlgunaEnfermedad` varchar(2) DEFAULT NULL,
  `TipoDeEnfermedadQuePadeceElAlumno` varchar(18) DEFAULT NULL,
  `ElAlumnoTieneAlgunaDiversidadFuncional` tinyint(1) DEFAULT '0',
  `aluDiversidadMotora` tinyint(1) DEFAULT '0',
  `aluDiversidadVisual` tinyint(1) DEFAULT '0',
  `aluDiversidadAuditiva` tinyint(1) DEFAULT '0',
  `aluDiversidadNeurologica` tinyint(1) DEFAULT '0',
  `aluDiversidadLenguaje` tinyint(1) DEFAULT '0',
  `aluDiversidadOtra` tinyint(1) DEFAULT '0',
  `OtroTipoDiversidad` varchar(45) DEFAULT '0',
  `ElAlumnoHaSidoOperado` tinyint(1) DEFAULT '0',
  `EspecifiqueTipoOperacion` text NOT NULL,
  `ElAlumnoEsAlergico` varchar(2) DEFAULT NULL,
  `TipoDeAlergias` varchar(22) DEFAULT NULL,
  `aluAlergiMedicina` tinyint(1) DEFAULT '0',
  `aluAlergiAlimento` tinyint(1) DEFAULT '0',
  `aluAlergiOtro` tinyint(1) DEFAULT '0',
  `OtroTipoDeAlergiasTieneElAlumno` varchar(59) DEFAULT NULL,
  `RegimenEspecialDeAlimentacionOTratamiento` tinyint(1) DEFAULT '0',
  `RegimenAlimenticio` text,
  `aluVacunaNinguna` tinyint(1) NOT NULL DEFAULT '0',
  `aluVacunaBCG` tinyint(1) DEFAULT '0',
  `aluVacunaTriple` tinyint(1) DEFAULT '0',
  `aluVacunaSarampion` tinyint(1) DEFAULT '0',
  `aluVacunaMeningitis` tinyint(1) DEFAULT '0',
  `aluVacunaAntigripal` tinyint(1) DEFAULT '0',
  `aluVacunaHepatitis` tinyint(1) DEFAULT '0',
  `aluVacunaHepatitisB` tinyint(1) DEFAULT '0',
  `aluVacunaNeumococo` tinyint(1) DEFAULT '0',
  `aluVacunaOtras` tinyint(1) DEFAULT '0',
  `OtrasVacunasCuentaElAlumno` varchar(15) DEFAULT NULL,
  `AluEnfermedadNinguna` tinyint(1) DEFAULT '0',
  `AluEnfermedadSarampion` tinyint(1) DEFAULT '0',
  `AluEnfermedadRubeola` tinyint(1) DEFAULT '0',
  `AluEnfermedadLechina` tinyint(1) DEFAULT '0',
  `AluEnfermedadTosferina` tinyint(1) DEFAULT '0',
  `AluEnfermedadHepatitis` tinyint(1) DEFAULT '0',
  `AluEnfermedadDengue` tinyint(1) DEFAULT '0',
  `OtrasEnfermedades` varchar(7) DEFAULT NULL,
  `ElAlumnoEsCatolico` varchar(2) DEFAULT NULL,
  `HaCumplidoConAlgunoDeLosSiguientesSacramentos` varchar(27) DEFAULT NULL,
  `aluBautizo` tinyint(1) DEFAULT '0',
  `aluComunion` tinyint(1) DEFAULT '0',
  `aluConfirmacion` tinyint(1) DEFAULT '0',
  `RealizaAlgunaActividadEspecial` tinyint(1) DEFAULT '0',
  `ActividadesEspecialesQueRealizaElAlumno` varchar(11) DEFAULT NULL,
  `aluActiDeportiva` tinyint(1) DEFAULT '0',
  `aluActiAcademica` tinyint(1) DEFAULT '0',
  `aluActiCultural` tinyint(1) DEFAULT '0',
  `aluActiOtra` tinyint(1) DEFAULT '0',
  `EspecifiqueQueOtrasActividadesEspecialesRealizaElAlumno` varchar(16) DEFAULT NULL,
  `NombreYApellidoDelContactoDeEmergencia1` varchar(20) DEFAULT NULL,
  `TelefonoDelContactoDeEmergencia1` int(11) DEFAULT NULL,
  `ParentescoDelContactoDeEmergencia1ConElAlumno` varchar(14) DEFAULT NULL,
  `NombreYApellidoDelContactoDeEmergencia2` varchar(26) DEFAULT NULL,
  `TelefonoDelContactoDeEmergencia2` int(11) DEFAULT NULL,
  `ParentescoDelContactoDeEmergencia2ConElAlumno` varchar(14) DEFAULT NULL,
  `Observaciones` varchar(247) DEFAULT NULL,
  `IDEscuelaAsignada` int(2) NOT NULL,
  `FechaAsignacion` date NOT NULL,
  `Puntaje` int(4) NOT NULL DEFAULT '0',
  `MiembrosFamilia` int(11) NOT NULL DEFAULT '0',
  `GrupoSanguineo` varchar(4) DEFAULT NULL,
  `CuposASolicitar` int(11) NOT NULL DEFAULT '1',
  `PartoMultiple` int(11) NOT NULL DEFAULT '0',
  `PosicionParto` int(11) NOT NULL DEFAULT '0',
  `StatusCenso` int(2) NOT NULL DEFAULT '0',
  `FechaSolicitud` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TipoRelacionLaboralRepresentante` varchar(25) DEFAULT NULL,
  `TipoDeRelacionLaboralDeLaMadre` varchar(25) DEFAULT NULL,
  `TipoDeRelacionLaboralDelPadre` varchar(25) DEFAULT NULL,
  `SectorDondeResideElAlumno` int(11) DEFAULT NULL,
  `SectorDondeResideElRepresentante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Disparadores `censo`
--
DELIMITER //
CREATE TRIGGER `preinscribir` AFTER UPDATE ON `censo`
 FOR EACH ROW BEGIN
	IF (NEW.StatusCenso = 3) THEN
		/* INSERTO DIRECCION REPRESENTANTE */
		INSERT INTO direcciones
		(`id_tipo_direccion`, `id_pais`, `id_estado`, `id_municipio`, `id_parroquia`, `calle_avenida`,
		`edificio_casa`, `piso`, `oficina_apartamento`, `punto_referencia`)
		VALUES
		(2, 1, OLD.EstadoDondeResideElRepresentante, OLD.MunicipioDondeResideElRepresentante, 1, OLD.CalleOAvenidaDondeResideElRepresentante,
		OLD.CasaOEdificioDondeResideElRepresentante, OLD.PisoDondeResideElRepresentante, OLD.NumeroOApartamentoDondeResideElRepresentante,
		OLD.PuntoDeReferenciaCercanoAlDomicilioDelRepresentante);
		/* INSERTO REPRESENTANTE EN PERSONAS */
		INSERT INTO personas
		(`id_pais_nacimiento`,`primer_nombre`,`segundo_nombre`,`primer_apellido`,`segundo_apellido`,
		`cedula_identidad`,`fecha_nacimiento`,`id_sexo`,`nacionalidad`, `id_direccion_persona`,`id_telefono_persona`)
		VALUES (
		1, NEW.PrimerNombreDelRepresentante, NEW.SegundoNombreDelRepresentante,NEW.PrimerApellidoDelRepresentante,
		NEW.SegundoApellidoDelRepresentante, NEW.CedulaDeIdentidadDelRepresentante,
		NEW.FechaDeNacimientoDelRepresentante, 1, NEW.NacionalidadDelRepresentante, LAST_INSERT_ID(), 3);
		/* INSERTO REPRESENTANTE EN REPRESENTANTES */
		INSERT INTO representantes
		(`id_parentesco`,`id_persona`)
		VALUES
		(1,  LAST_INSERT_ID());

		SET @IdRepresentante = (SELECT LAST_INSERT_ID());

		IF (NEW.Residente = 1) THEN
			SET @IdEstadoAlumno = 13;
            SET @IdMunicipioAlumno = 183;
		ELSE
			SET @IdEstadoAlumno = OLD.EstadoDondeResideElAlumno;
            SET @IdMunicipioAlumno = OLD.MunicipioDondeResideElAlumno;
		END IF;
        
		/* INSERTO DIRECCION ESTUDIANTE */
		INSERT INTO direcciones
		(`id_tipo_direccion`, `id_pais`, `id_estado`, `id_municipio`, `id_parroquia`, `calle_avenida`,
		`edificio_casa`, `piso`, `oficina_apartamento`, `punto_referencia`)
		VALUES
		(2, 1, @IdEstadoAlumno, @IdMunicipioAlumno, 1, OLD.CalleOAvenidaDondeResideElAlumno,
		OLD.CasaOEdificioDondeResideElAlumno, OLD.PisoOPlantaDondeResideElAlumno, OLD.NumeroDeCasaOApartamentoDondeResideElAlumno,
		OLD.PuntoDeReferenciaCercanoAlDomicilioDelAlumno);

		SET @IdDireccionEstudiante = (SELECT LAST_INSERT_ID());

		/* INSERTO ALUMNO EN PERSONAS */
		INSERT INTO personas
		(`id_pais_nacimiento`,`primer_nombre`,`segundo_nombre`,`primer_apellido`,`segundo_apellido`,
		`cedula_identidad`,`fecha_nacimiento`,`id_sexo`,`nacionalidad`, `id_direccion_persona`,`id_telefono_persona`)
		VALUES (
		1, OLD.PrimerNombreDelAlumno, OLD.SegundoNombreDelAlumno,OLD.PrimerApellidoDelAlumno,
		OLD.SegundoApellidoDelAlumno, OLD.CedulaDeIdentidadDelAlumnoOCedulaEscolar,
		OLD.FechaDeNacimientoDelAlumno, 1, OLD.NacionalidadDelAlumno, LAST_INSERT_ID(), 3);

		-- ASIGNAR ESCUELA
		IF (NEW.UniDePrefAndres = 1) THEN
			SET @IdEscuelaAsignada = 1 ;
		END IF;
		IF (NEW.UniDePrefJuanDio = 1) THEN
			SET @IdEscuelaAsignada = 2 ;
		END IF;
		IF (NEW.UniDePrefCarlos = 1) THEN
			SET @IdEscuelaAsignada = 3 ;
		END IF;
		/* INSERTO ALUMNO EN ESTUDIANTES */
		INSERT INTO estudiantes
		(`id_persona`, `id_grado`, `id_direccion_nacimiento`, `id_direccion_residencia`,
		`id_escuela`,`id_representante`,`cedula_escolar`,`cedula_identidad`,`repite_grado`,`unidad_educativa_procedencia`,
		`grupo_sanguineo`,`factor_rh`,`talla`,`peso`,`observaciones`,`status_inscripcion`)
		VALUES
		(LAST_INSERT_ID(), OLD.GradoACursar, @IdDireccionEstudiante, @IdDireccionEstudiante, @IdEscuelaAsignada,
		@IdRepresentante, OLD.CedulaDeIdentidadDelAlumnoOCedulaEscolar, OLD.CedulaDeIdentidadDelAlumnoOCedulaEscolar,
		OLD.ElAlumnoRepiteGrado, OLD.UnidadEducativaDeProcedencia, OLD.GrupoSanguineo, OLD.FactorRh, OLD.Estatura,
		OLD.Peso, OLD.Observaciones, 0);
	END IF;
END
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `puntaje_censo` AFTER INSERT ON `censo`
 FOR EACH ROW BEGIN
	DECLARE puntosEscolaridad INT(5);
	DECLARE puntosResidencia INT(5);
	DECLARE puntosOrfandad INT(5);
	DECLARE puntosRepresentanteTrabaja INT(5);
	DECLARE puntosJornadaLaboral INT(5);
	DECLARE puntosNivelIngreso INT(5);
	DECLARE puntosMiembrosFamilia INT(5);
	DECLARE puntosVivienda INT(5);
	DECLARE puntosNoResidente INT(5);
    DECLARE puntosTotal INT(5);

	SET puntosEscolaridad = 0;
	SET puntosResidencia = 0;
	SET puntosOrfandad = 0;
	SET puntosRepresentanteTrabaja = 0;
	SET puntosJornadaLaboral = 0;
	SET puntosNivelIngreso = 0;
	SET puntosMiembrosFamilia = 0;
	SET puntosVivienda = 0;
	SET puntosNoResidente = 0;
    SET puntosTotal = 0;
        
	-- ESCOLARIDAD
    CASE NEW.ElAlumnoEstudiaActualmente + NEW.ElAlumnoCursoElAnterior
		WHEN 0 THEN
			SET puntosEscolaridad = 3;
        WHEN 1 THEN
			SET puntosEscolaridad = 2;
		WHEN 2 THEN
			SET puntosEscolaridad = 1;
        ELSE BEGIN END;
	END CASE;
	-- RESIDENCIA
	IF (NEW.Residente = 1) THEN
		SET puntosResidencia = 10;
	ELSE
		SET puntosResidencia = 1;
	END IF;
	-- ORFANDAD
    CASE NEW.LaMadreVive + NEW.ElPadreVive
		WHEN 0 THEN
			SET puntosOrfandad = 5;
        WHEN 1 THEN
			SET puntosEscolaridad = 4;
		WHEN 2 THEN
			SET puntosEscolaridad = 0;
		ELSE BEGIN END;
	END CASE;
    IF (NEW.ElAlumnoViveCon = '') THEN
		SET puntosOrfandad = 3;
	ELSE
		SET puntosOrfandad = 2;
    END IF;
   -- REPRESENTANTE TRABAJA
	IF (NEW.TrabajaActualmente = 1) THEN
		SET puntosRepresentanteTrabaja = 1;
	ELSE
		SET puntosRepresentanteTrabaja = 2;
	END IF;
   -- JORNADA LABORAL REPRESENTANTE
	IF (NEW.TipoDeJornadaLaboralDelRepresentante = 'MEDIOTIEMPO') THEN
		SET puntosJornadaLaboral = 1;
	ELSE
		SET puntosJornadaLaboral = 3;
	END IF;
	-- NIVEL INGRESO REPRESENTANTE
    IF (NEW.IngresoMensualDelRepresentante IS NULL) THEN
		SET puntosNivelIngreso = 0;
    ELSE
		SET puntosNivelIngreso = NEW.IngresoMensualDelRepresentante;
    END IF;

	-- MIEMBROS FAMILIA
	IF (NEW.MiembrosFamilia <= 7) THEN
		SET puntosMiembrosFamilia = NEW.MiembrosFamilia + 1;
	ELSE
		SET puntosMiembrosFamilia = 8;
	END IF;
	-- VIVIENDA
    CASE NEW.DatosDeLaVivienda
		WHEN 'PROPIA' THEN
			SET puntosVivienda = 1;
        WHEN 'PROPIAPAGANDO' THEN
			SET puntosVivienda = 2;
		WHEN 'ALOJADOS' THEN
			SET puntosVivienda = 3;
        WHEN 'OTRA' THEN
			SET puntosVivienda = 4;
		ELSE BEGIN END;
	END CASE;
	-- NO RESIDENTE
	IF (NEW.TrabajaDentroChacao = 1) THEN
		IF (NEW.TrabajaEnAlcaldia = 1) THEN
			SET puntosResidencia = 5;
		ELSE
			SET puntosResidencia = 1;
		END IF;
	END IF;
	IF (NEW.ElRepresentanteTieneOtrosHijosEstudiandoChacao = 1) THEN
		SET puntosResidencia = puntosResidencia + 1;
	END IF;

	INSERT INTO puntaje_censo
	(`id_censo`,`escolaridad`,`residencia`,`orfandad`,`representante_trabaja`,`representante_jornada_laboral`,
    `representante_nivel_ingreso`,`miembros_familia`,`vivienda`,`no_residente`)
	VALUES
	(NEW.id_censo,puntosEscolaridad,puntosResidencia,puntosOrfandad,puntosRepresentanteTrabaja,puntosJornadaLaboral,puntosNivelIngreso,puntosMiembrosFamilia,puntosVivienda,puntosNoResidente);

    SET puntosTotal = puntosEscolaridad + puntosResidencia + puntosOrfandad + puntosRepresentanteTrabaja + puntosJornadaLaboral + puntosNivelIngreso + puntosMiembrosFamilia + puntosVivienda + puntosNoResidente;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `censo_grados`
--

CREATE TABLE IF NOT EXISTS `censo_grados` (
`id_censo_grado` int(11) NOT NULL,
  `grado` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Grados usados en el censo (e.g mostrados en un select).' AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `censo_grados`
--

INSERT INTO `censo_grados` (`id_censo_grado`, `grado`) VALUES
(7, 'Cuarto Grado'),
(12, 'Noveno Grado'),
(11, 'Octavo Grado'),
(4, 'Primer Grado'),
(1, 'Primer Grupo'),
(8, 'Quinto Grado'),
(5, 'Segundo Grado'),
(2, 'Segundo Grupo'),
(10, 'Septimo Grado'),
(9, 'Sexto Grado'),
(6, 'Tercer Grado'),
(3, 'Tercer Grupo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `censo_unidad_educativas`
--

CREATE TABLE IF NOT EXISTS `censo_unidad_educativas` (
`id_censo_unidad_educativa` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `censo_unidad_educativas`
--

INSERT INTO `censo_unidad_educativas` (`id_censo_unidad_educativa`, `tipo`, `nombre`) VALUES
(1, 'Ninguna', NULL),
(2, 'Nacional', NULL),
(3, 'Municipal', NULL),
(4, 'Privada', NULL),
(5, 'Elegida', 'UEM Juan de Dios Guanche'),
(6, 'Elegida', 'UEM Andres Bello'),
(7, 'Elegida', 'UEMI Carlos Soublette');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0c836fe8cbaea0f9593b7376513b9414a5565419', '::1', 1463467324, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436333436373239303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('0f11aeef71051c00c6169824a0d9efdab9a71885', '::1', 1464851950, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343835313934353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('13936f50d7e7e5778b58dbefa6d191e156516f45', '::1', 1463546191, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436333534353839373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('15ce81c07b9bf329881f572f6e7276f0ede5120d', '::1', 1461270904, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313237303930333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('16f294bc00d497f348ee7444d2f751b73b425d7f', '::1', 1463542016, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436333534323031353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('1a3f638ca100256efbc89c030cc80ff4c37d6207', '::1', 1461355103, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313335353036373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('1afec0c4c530f1045656317f294f0f1c970645a7', '::1', 1461356873, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313335363837333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('1d575671c806b77fe6945dfeb7f6a28f005322af', '::1', 1464854881, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343835343838303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('20c325c44201903775db8aee6d931ea5eb6d862f', '::1', 1463545826, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436333534353534323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('24c5b170514297b333caf7f9af0da3cdb4f23997', '::1', 1464055521, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343035353332323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('2bd3389eaedca6d350fc06e4ef991bcbe2d56763', '::1', 1463728565, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436333732383534393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('2d01255aa30f13faf6fe3243e3bcfc10e0319d7b', '::1', 1464854097, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343835343038353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('3437c27f52ac2759e2d494f66fc8d4d2a85dab22', '::1', 1464854882, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343835343838313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('411445de5cac7570f6cafee417d0280c9571be76', '::1', 1464849344, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343834393334323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('4436a3a39fa38073537d215824175813e95047be', '::1', 1464939862, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343933393637343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('444bab351571ad12e171e6a599af348474ed91ba', '::1', 1464054298, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343035333939373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('46497a7623a2a75e96629c1b1ded5598f0609846', '::1', 1463537590, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436333533373438363b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('4ab001877d412b5182f02650749b1e64c3183162', '::1', 1461267211, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236373136323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('4c7643de3e1733bd0b5a3fd26cf6d875f54ccfb8', '::1', 1464053583, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343035333535333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('4fada77e347f1bc278b3d50a420e9ac01e2b1ae5', '::1', 1461260499, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236303338383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('5c01f88d9ed34acbc0c9c3f25eba9a7968920504', '::1', 1464842131, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343834313937313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('6e403732f74a28f38008e71580a869b79a89fcd7', '::1', 1461261988, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236313830393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('6fc7b2d0f2fe50cf64b8616b84a0e65c188d9dbd', '::1', 1464850668, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343835303531323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('75b1dcde415867bac6c3793847a8299f97bbeca2', '::1', 1461356838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313335363533393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('780d4c4e4f1e93c6d8d73c4c59af02e54394b6c1', '::1', 1461357350, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313335373335303b),
('796f26efe5582cb08e919a979f7781005eee12a6', '::1', 1461262763, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236323733383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('7ea9976f2c2bc9c372b35d64a4a91d529182879d', '::1', 1464854885, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343835343838323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('811ed86916e848c4c48afc4a2ac2f09f4abdd805', '::1', 1464940992, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343934303834363b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('87ee3e7c7df6117ec617e48da58983adf052f47f', '::1', 1461265218, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236353039303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('8c1da73491d0a50bc816606a0c3d33f76d53bb63', '::1', 1461266582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236363238383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('901b3615c813afdcee63d7cb64a5e062b7fd7dd8', '::1', 1463730179, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436333733303136343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('9a404941fe09bf76a48f7931393a19c37e8d8f86', '::1', 1463730732, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436333733303732343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('9d4ebcc9a7e05c0cffb817901674df0b1b31b4b9', '::1', 1463545216, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436333534353030353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('a42b670df3408153fbe6fbf7d806a511acafff98', '::1', 1464830850, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343833303739343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('a5c4a4924d68e0c5b0bf67477fdd4a9d8bdcbdd1', '::1', 1461261318, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236313233353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('a9d6ed4b150bf48ab5754d0c3de6edde438ac5cd', '::1', 1461265808, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236353537313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('b2775732b79f6f5f6d360c8979150d23705f6b6c', '::1', 1464842318, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343834323331333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('b8800b00f63e7ca8e33cb4f49e63fafcf8ed9c9a', '::1', 1464849345, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343834393334343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('bc3a272bbde4682ab76dd78abaa0ff43ce635791', '::1', 1461266118, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236353839313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('c3bbf3ba8efb6064b0cf4746a98796cde392d1be', '::1', 1461263959, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236333735343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('c520ede66e078c91b60986305ec3ecafd364c912', '::1', 1464833147, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343833323936373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('c8ec6e605108a56d20039419d59bef5070c446db', '::1', 1464054512, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343035343331303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('cafb7c3a6c02cad9636f33e75e9770455e261eae', '::1', 1465005792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436353030353736313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('cdddc67bc2179ebe427189af429b3bdaf69dfdcb', '::1', 1461264705, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236343730343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('ce97dd1a0e495a98552901e962c1839503baa6e0', '::1', 1461263215, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236333134393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('d146f2105915e87885823e3470169e35057e74b2', '::1', 1464854738, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343835343436353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('d6a183d0059f20ff68bc210059023c44b5fb5e1d', '::1', 1461260771, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236303734343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('d72284fcbf9a56e24745284dd4831432532df12d', '::1', 1464850979, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343835303936353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('d8665422a697d305bceac327a4d9b9576fbe5464', '::1', 1461269948, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236393737343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('e806d9c28e1784d48bc4c11567b2e0ba90814d56', '::1', 1461259530, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313235393234333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('e85148ef8d86e5f65bb9bc10e7a9ea58a73ac41b', '::1', 1463541093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436333534303939323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('e94eeb9b66f12804a1f471d8970be8dc60b3bb84', '::1', 1465011099, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436353031303838333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('eaa1d55ea5152ed61c89762b82c291b831feb1e4', '::1', 1464833710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436343833333438383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('ee83e23167b5aed0601569c53c0c8b3c8b96251f', '::1', 1461266826, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313236363832343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b),
('f4dd16cfe23bb870efbf16a573dd9923853a0559', '::1', 1465011486, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436353031313236363b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c4e3b6368616e67655f70617373776f72647c693a303b);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class`
--

CREATE TABLE IF NOT EXISTS `class` (
`class_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `name_numeric` longtext COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `class`
--

INSERT INTO `class` (`class_id`, `name`, `name_numeric`, `teacher_id`) VALUES
(1, 'Cuarto Grupo', '4to gpo', 1),
(2, '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class_routine`
--

CREATE TABLE IF NOT EXISTS `class_routine` (
`class_routine_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `day` longtext COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL,
  `hour_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `class_routine`
--

INSERT INTO `class_routine` (`class_routine_id`, `class_id`, `subject_id`, `day`, `section_id`, `hour_id`) VALUES
(1, 10, 1, 'Lunes', 10, 1),
(2, 10, 1, 'Martes', 22, 1),
(3, 10, 1, 'Miercoles', 10, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion_vivienda`
--

CREATE TABLE IF NOT EXISTS `condicion_vivienda` (
`id_condicion_vivienda` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las condiciones de vivienda' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `condicion_vivienda`
--

INSERT INTO `condicion_vivienda` (`id_condicion_vivienda`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'PROPIA', '2015-10-20 20:12:39', NULL, 1),
(2, 'ALQUILADA', '2015-10-20 20:12:39', NULL, 1),
(3, 'FAMILIAR', '2015-10-20 20:12:39', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuraciones`
--

CREATE TABLE IF NOT EXISTS `configuraciones` (
`id_configuracion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las configuraciones del sistema' AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `configuraciones`
--

INSERT INTO `configuraciones` (`id_configuracion`, `nombre`, `valor`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'nombre_sistema', 'Sistema Chacao Educativo', '2015-10-30 00:36:01', NULL, 1),
(2, 'titulo_sistema', 'Educación Chacao', '2015-10-30 00:35:55', NULL, 1),
(3, 'direccion', 'Chacao, Distrito Capital', '2015-10-27 22:39:44', NULL, 1),
(4, 'telefono', '+58212', '2015-10-27 22:39:44', NULL, 1),
(5, 'skin_colour', 'blue', '2015-10-27 23:05:02', NULL, 1),
(6, 'correo_sistema', 'educacion@chacao.gob.ve', '2015-10-29 19:05:59', NULL, 1),
(7, 'lenguaje', 'spanish', '2015-10-29 19:09:08', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupos`
--

CREATE TABLE IF NOT EXISTS `cupos` (
  `id_cupo` int(11) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL,
  `cupos` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE IF NOT EXISTS `direcciones` (
`id_direccion` int(11) NOT NULL,
  `id_tipo_direccion` int(11) NOT NULL DEFAULT '1',
  `id_pais` int(11) NOT NULL DEFAULT '1',
  `id_estado` int(11) NOT NULL DEFAULT '1',
  `id_municipio` int(11) NOT NULL DEFAULT '1',
  `id_parroquia` int(11) NOT NULL DEFAULT '1',
  `calle_avenida` varchar(150) DEFAULT NULL,
  `edificio_casa` varchar(150) DEFAULT NULL,
  `piso` varchar(10) DEFAULT NULL,
  `oficina_apartamento` varchar(45) DEFAULT NULL,
  `punto_referencia` varchar(150) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las direcciones por persona.' AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id_direccion`, `id_tipo_direccion`, `id_pais`, `id_estado`, `id_municipio`, `id_parroquia`, `calle_avenida`, `edificio_casa`, `piso`, `oficina_apartamento`, `punto_referencia`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 1, 1, 13, 183, 1, 'FFAA', '1', '1', '1', 'ESCUELA', '2016-01-11 09:10:00', NULL, 1),
(7, 2, 1, 13, 175, 1, '', '', '', '0', '', '2016-01-11 14:16:10', NULL, 1),
(8, 2, 1, 13, 175, 1, 'W CON X', 'W12', '1', '12', '', '2016-01-11 14:16:10', NULL, 1),
(9, 2, 1, 13, 175, 1, '', '', '', '0', '', '2016-01-11 14:29:13', NULL, 1),
(10, 2, 1, 13, 175, 1, 'W CON X', 'W12', '1', '12', '', '2016-01-11 14:29:13', NULL, 1),
(15, 2, 1, 4, 42, 1, '', '', '', '0', '', '2016-01-28 18:09:42', NULL, 1),
(16, 2, 1, 4, 42, 1, 'AS', 'AS', 'AS', '102', '', '2016-01-28 18:09:42', NULL, 1),
(27, 2, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '2016-02-22 19:53:27', NULL, 1),
(28, 2, 1, 1, 1, 1, 'AV CARACAS', 'EDIFICIO MARGARITA', '2', '52', NULL, '2016-02-22 19:53:27', NULL, 1),
(31, 2, 1, 13, 175, 1, 'W CON X', 'W12', '', '1', '', '2016-02-22 21:51:31', NULL, 1),
(32, 2, 1, 13, 183, 1, 'CALLE UNO', 'CASA', 'UNO', '1', '', '2016-02-22 21:51:31', NULL, 1),
(39, 2, 1, 13, 175, 1, 'W CON X', 'W12', '', '12', '', '2016-02-22 22:40:36', NULL, 1),
(40, 2, 1, 13, 183, 1, 'CALLE UNO', 'CASA UNO', 'UNO', '1', '', '2016-02-22 22:40:36', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleos`
--

CREATE TABLE IF NOT EXISTS `empleos` (
`id_empleo` int(11) NOT NULL,
  `id_jornada_laboral` int(11) NOT NULL,
  `nombre_empresa` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `antiguedad` varchar(45) NOT NULL,
  `persona_contacto` varchar(45) DEFAULT NULL,
  `telefono_persona_contacto` varchar(45) DEFAULT NULL,
  `id_direccion_empresa` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene el listado de empleos por representante' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escala_ingresos`
--

CREATE TABLE IF NOT EXISTS `escala_ingresos` (
`id_escala_ingreso` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que indica la escala de ingresos de un empleado' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `escala_ingresos`
--

INSERT INTO `escala_ingresos` (`id_escala_ingreso`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, '0 - 15000', '2015-10-29 19:22:56', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE IF NOT EXISTS `escuelas` (
`id_escuela` int(11) NOT NULL,
  `nombre_escuela` varchar(150) NOT NULL,
  `logo_escuela` mediumblob,
  `id_direccion_escuela` int(11) NOT NULL,
  `id_telefono_escuela` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `id_persona_director` int(11) NOT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `cupos` int(11) NOT NULL DEFAULT '0',
  `director_encargado` tinyint(1) NOT NULL DEFAULT '0',
  `periodo_escolar_actual` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de las escuelas' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`id_escuela`, `nombre_escuela`, `logo_escuela`, `id_direccion_escuela`, `id_telefono_escuela`, `fecha_creacion`, `fecha_actualizacion`, `id_persona_director`, `registro_activo`, `cupos`, `director_encargado`, `periodo_escolar_actual`) VALUES
(1, 'UEM ANDRES BELLO', NULL, 1, 1, '2016-02-16 22:39:12', NULL, 15, 1, 0, 1, '2015 - 2016'),
(2, 'UEM JUAN DE DIOS GUANCHE', NULL, 1, 1, '2016-02-16 22:39:12', NULL, 17, 1, 0, 1, '2015 - 2016'),
(3, 'UEMI CARLOS SOUBLETTE', NULL, 1, 1, '2016-02-16 22:39:12', NULL, 16, 1, 0, 1, '2015 - 2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela_nivel_educativo`
--

CREATE TABLE IF NOT EXISTS `escuela_nivel_educativo` (
`id_escuela_nivel_educativo` int(11) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `id_nivel_educativo` int(11) NOT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `escuela_nivel_educativo`
--

INSERT INTO `escuela_nivel_educativo` (`id_escuela_nivel_educativo`, `id_escuela`, `id_nivel_educativo`, `registro_activo`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 0),
(3, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela_nivel_educativo_grado`
--

CREATE TABLE IF NOT EXISTS `escuela_nivel_educativo_grado` (
`id_escuela_nivel_educativo_grado` int(11) NOT NULL,
  `id_escuela_nivel_educativo` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `escuela_nivel_educativo_grado`
--

INSERT INTO `escuela_nivel_educativo_grado` (`id_escuela_nivel_educativo_grado`, `id_escuela_nivel_educativo`, `id_grado`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 2, 9),
(10, 3, 10),
(11, 3, 11),
(12, 3, 12),
(13, 3, 14),
(14, 3, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
`id_estado` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL DEFAULT '1',
  `nombre` varchar(150) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los estados' AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `id_pais`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 1, 'DTTO. CAPITAL', '2015-10-20 19:53:01', NULL, 1),
(2, 1, 'ANZOATEGUI', '2015-10-20 19:53:01', NULL, 1),
(3, 1, 'APURE', '2015-10-20 19:53:01', NULL, 1),
(4, 1, 'ARAGUA', '2015-10-20 19:53:01', NULL, 1),
(5, 1, 'BARINAS', '2015-10-20 19:53:01', NULL, 1),
(6, 1, 'BOLIVAR', '2015-10-20 19:53:01', NULL, 1),
(7, 1, 'CARABOBO', '2015-10-20 19:53:01', NULL, 1),
(8, 1, 'COJEDES', '2015-10-20 19:53:01', NULL, 1),
(9, 1, 'FALCON', '2015-10-20 19:53:01', NULL, 1),
(10, 1, 'GUARICO', '2015-10-20 19:53:01', NULL, 1),
(11, 1, 'LARA', '2015-10-20 19:53:01', NULL, 1),
(12, 1, 'MERIDA', '2015-10-20 19:53:01', NULL, 1),
(13, 1, 'MIRANDA', '2015-10-20 19:53:01', NULL, 1),
(14, 1, 'MONAGAS', '2015-10-20 19:53:01', NULL, 1),
(15, 1, 'NUEVA ESPARTA', '2015-10-20 19:53:01', NULL, 1),
(16, 1, 'PORTUGUESA', '2015-10-20 19:53:01', NULL, 1),
(17, 1, 'SUCRE', '2015-10-20 19:53:01', NULL, 1),
(18, 1, 'TACHIRA', '2015-10-20 19:53:01', NULL, 1),
(19, 1, 'TRUJILLO', '2015-10-20 19:53:01', NULL, 1),
(20, 1, 'YARACUY', '2015-10-20 19:53:01', NULL, 1),
(21, 1, 'ZULIA', '2015-10-20 19:53:01', NULL, 1),
(22, 1, 'AMAZONAS', '2015-10-20 19:53:01', NULL, 1),
(23, 1, 'DELTA AMACURO', '2015-10-20 19:53:01', NULL, 1),
(24, 1, 'VARGAS', '2015-10-20 19:53:01', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaturas`
--

CREATE TABLE IF NOT EXISTS `estaturas` (
`id_estatura` int(11) NOT NULL,
  `valor` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `estaturas`
--

INSERT INTO `estaturas` (`id_estatura`, `valor`) VALUES
(1, '0,5 mts'),
(2, '0,6 mts'),
(3, '0,7 mts'),
(4, '0,8 mts'),
(5, '0,9 mts'),
(6, '1,0 mts'),
(7, '1,1 mts'),
(8, '1,2 mts'),
(9, '1,3 mts'),
(10, '1,4 mts'),
(11, '1,5 mts'),
(12, '1,6 mts'),
(13, '1,7 mts'),
(14, '1,8 mts'),
(15, '1,9 mts'),
(16, '2,0 mts'),
(17, '2,1 mts'),
(18, '2,2 mts'),
(19, '2,3 mts'),
(20, '2,4 mts'),
(21, '2,5 mts');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
`id_estudiante` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_seccion` int(11) DEFAULT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `id_direccion_nacimiento` int(11) NOT NULL,
  `id_direccion_residencia` int(11) NOT NULL,
  `id_escala_ingreso_familia` int(11) DEFAULT NULL,
  `id_vive_con` int(11) DEFAULT NULL,
  `id_medio_transporte` int(11) NOT NULL DEFAULT '1',
  `id_condicion_vivienda` int(11) NOT NULL DEFAULT '1',
  `id_tipo_parto` int(11) NOT NULL DEFAULT '1',
  `id_persona_emergencia_uno` int(11) DEFAULT NULL,
  `id_persona_emergencia_dos` int(11) DEFAULT NULL,
  `id_escuela` int(11) NOT NULL,
  `id_representante` int(11) NOT NULL,
  `cedula_escolar` varchar(15) DEFAULT NULL,
  `cedula_identidad` varchar(15) DEFAULT NULL,
  `repite_grado` tinyint(1) DEFAULT '0',
  `unidad_educativa_procedencia` varchar(150) DEFAULT NULL,
  `otros_ingresios_familia` decimal(10,2) DEFAULT NULL,
  `becado` tinyint(1) DEFAULT '0',
  `descripcion_beca` varchar(150) DEFAULT NULL,
  `se_retira_solo` tinyint(1) DEFAULT '0',
  `numero_hermanos` int(11) DEFAULT '0',
  `hermanos_estudian_unidades_educativas_municipales` int(11) DEFAULT NULL,
  `grupo_sanguineo` varchar(10) DEFAULT NULL,
  `factor_rh` varchar(5) DEFAULT NULL,
  `talla` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `padece_enfermedad` tinyint(1) DEFAULT '0',
  `nombre_enfermedad` varchar(100) DEFAULT NULL,
  `diversidad_funcional` tinyint(1) DEFAULT '0',
  `operado` tinyint(1) DEFAULT '0',
  `alergico` tinyint(1) DEFAULT '0',
  `alergias` longtext,
  `regimen_alimenticio` tinyint(1) DEFAULT '0',
  `vacunas` longtext,
  `enfermedades_padecidas` longtext,
  `otras_enfermedades` longtext,
  `catolico` tinyint(1) DEFAULT '0',
  `actividad_especial` tinyint(1) DEFAULT '0',
  `actividades_especiales` longtext,
  `observaciones` longtext,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `lugar_entre_hermanos` int(11) DEFAULT '0',
  `status_inscripcion` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los estudiantes' AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `id_persona`, `id_grado`, `id_seccion`, `id_telefono`, `id_direccion_nacimiento`, `id_direccion_residencia`, `id_escala_ingreso_familia`, `id_vive_con`, `id_medio_transporte`, `id_condicion_vivienda`, `id_tipo_parto`, `id_persona_emergencia_uno`, `id_persona_emergencia_dos`, `id_escuela`, `id_representante`, `cedula_escolar`, `cedula_identidad`, `repite_grado`, `unidad_educativa_procedencia`, `otros_ingresios_familia`, `becado`, `descripcion_beca`, `se_retira_solo`, `numero_hermanos`, `hermanos_estudian_unidades_educativas_municipales`, `grupo_sanguineo`, `factor_rh`, `talla`, `peso`, `padece_enfermedad`, `nombre_enfermedad`, `diversidad_funcional`, `operado`, `alergico`, `alergias`, `regimen_alimenticio`, `vacunas`, `enfermedades_padecidas`, `otras_enfermedades`, `catolico`, `actividad_especial`, `actividades_especiales`, `observaciones`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`, `lugar_entre_hermanos`, `status_inscripcion`) VALUES
(20, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 22, '1234567', '1234567', 0, NULL, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '2016-04-14 04:32:14', NULL, 0, 0, 1),
(21, 43, 1, 2, NULL, 40, 40, NULL, NULL, 1, 1, 1, NULL, NULL, 1, 24, '11315544359', '0', 0, 'NULL', NULL, 0, NULL, 0, 0, NULL, 'A', '+', 5, 5, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, '', '2016-02-29 01:50:06', NULL, 0, 0, 1),
(23, 44, 10, 10, NULL, 1, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 1, 25, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '2016-02-29 03:53:13', NULL, 1, 0, 1),
(24, 47, 10, 10, NULL, 1, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 1, 26, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '2016-02-29 03:54:12', NULL, 1, 0, 1),
(25, 49, 10, 10, NULL, 1, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 1, 27, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '2016-02-29 03:54:35', NULL, 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_eva_inst`
--

CREATE TABLE IF NOT EXISTS `est_eva_inst` (
`est_eva_inst_id` int(11) NOT NULL,
  `est_eva_inst_nomb` varchar(100) NOT NULL,
  `est_eva_inst_des` varchar(200) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `est_eva_inst_activo` bit(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `est_eva_inst`
--

INSERT INTO `est_eva_inst` (`est_eva_inst_id`, `est_eva_inst_nomb`, `est_eva_inst_des`, `id_grado`, `est_eva_inst_activo`) VALUES
(1, 'prueba', '', 5, b'1'),
(2, 'dos', '', 5, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_eva_tecnicas`
--

CREATE TABLE IF NOT EXISTS `est_eva_tecnicas` (
  `est_eva_tecnica_id` int(11) NOT NULL,
  `est_eva_tecnica_nomb` varchar(100) DEFAULT NULL,
  `est_eva_tecnica_desc` varchar(500) DEFAULT NULL,
  `id_grado` int(11) DEFAULT NULL,
  `est_eva_tecnica_activo` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `est_eva_tecnicas`
--

INSERT INTO `est_eva_tecnicas` (`est_eva_tecnica_id`, `est_eva_tecnica_nomb`, `est_eva_tecnica_desc`, `id_grado`, `est_eva_tecnica_activo`) VALUES
(1, 'MAPAS DE CONCEPTO', NULL, 4, b'1'),
(2, 'MAPA MENTAL', NULL, 4, b'1'),
(3, 'PRODUCCIONES ORALES', NULL, 4, b'1'),
(4, 'PRODUCCIONES ESCRITAS', NULL, 4, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_planificacion_media`
--

CREATE TABLE IF NOT EXISTS `evaluacion_planificacion_media` (
`evaluacion_planificacion_media_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla `evaluacion_planificacion_media`
--

INSERT INTO `evaluacion_planificacion_media` (`evaluacion_planificacion_media_id`, `name`) VALUES
(1, 'Afiches'),
(2, 'Álbum'),
(3, 'Algoritmos'),
(4, 'Análisis de casos'),
(5, 'Comprobación de lectura'),
(6, 'Crucigrama'),
(7, 'Cuentos'),
(8, 'Cuestionario'),
(9, 'Diálogos'),
(10, 'Diseño de Blogs'),
(11, 'Diseño página Web'),
(12, 'Dramatización'),
(13, 'Ejercicios prácticos'),
(14, 'Elab. de cartelera'),
(15, 'Ensayo'),
(16, 'Exposición'),
(17, 'Guía de ejercicios'),
(18, 'Informe'),
(19, 'Interrogatorio'),
(20, 'Mapa conceptual'),
(21, 'Mapa mental'),
(22, 'Mapas geograf.'),
(23, 'Maqueta'),
(24, 'Modelos'),
(25, 'Portafolio'),
(26, 'Práctica'),
(27, 'Presentación de PowerPoint'),
(28, 'Proyecto'),
(29, 'Prueba pedagógica'),
(30, 'Red semántica'),
(31, 'Registro de rasgos pers.'),
(32, 'Revisión de cuaderno'),
(33, 'Revistas'),
(34, 'Taller escrito'),
(35, 'Tiras cómicas'),
(36, 'Trabajo escrito'),
(37, 'Infografia'),
(38, 'Mandalas'),
(39, 'Microexposiciones'),
(40, 'Diseño de planificación'),
(41, 'todas'),
(42, 'Registro de tareas'),
(43, 'Expo-navidad'),
(44, 'Rasgos'),
(45, 'Collage informativo'),
(46, 'Periódico Mural'),
(47, 'Presentación de PowerPoint');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`exam_id` int(11) NOT NULL,
  `objetivo` longtext CHARACTER SET utf8 NOT NULL,
  `contenido` longtext CHARACTER SET utf8 NOT NULL,
  `id_tecnica` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL,
  `id_recurso` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL,
  `id_instrumento` int(11) NOT NULL,
  `valor_ponderacion` int(11) NOT NULL,
  `fecha_examen` varchar(15) CHARACTER SET utf8 NOT NULL,
  `id_grado` int(11) NOT NULL DEFAULT '1',
  `id_seccion` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `exam`
--

INSERT INTO `exam` (`exam_id`, `objetivo`, `contenido`, `id_tecnica`, `id_actividad`, `id_recurso`, `id_evaluacion`, `id_instrumento`, `valor_ponderacion`, `fecha_examen`, `id_grado`, `id_seccion`) VALUES
(1, 'Examen Uno', 'Como hacer un examen', 1, 4, 9, 4, 3, 3, '03/18/2016', 10, 10),
(2, 'Examen Dos', 'Palmeros de chacao', 1, 3, 8, 2, 5, 3, '02/26/2016', 11, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
`grade_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `grade_point` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mark_from` int(11) NOT NULL,
  `mark_upto` int(11) NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE IF NOT EXISTS `grados` (
`id_grado` int(11) NOT NULL,
  `nombre_grado` varchar(45) DEFAULT NULL,
  `descripcion` varchar(15) DEFAULT NULL,
  `abreviacion_grado` varchar(5) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `teacher_id` int(11) DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los grados' AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id_grado`, `nombre_grado`, `descripcion`, `abreviacion_grado`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`, `teacher_id`) VALUES
(1, 'Primer Grupo', 'Grupo', '1er', '2016-04-01 16:07:22', NULL, 1, 1),
(2, 'Segundo Grupo', 'Grupo', '2do', '2016-04-01 16:07:22', NULL, 1, 1),
(3, 'Tercer Grupo', 'Grupo', '3ro', '2016-04-01 16:07:22', NULL, 1, 1),
(4, 'Primer Grado', 'Grado', '1er', '2016-04-01 16:07:22', NULL, 1, 1),
(5, 'Segundo Grado', 'Grado', '2do', '2016-04-01 16:07:22', NULL, 1, 1),
(6, 'Tercer Grado', 'Grado', '3ro', '2016-04-01 16:07:22', NULL, 1, 1),
(7, 'Cuarto Grado', 'Grado', '4to', '2016-04-01 16:07:22', NULL, 1, 1),
(8, 'Quinto Grado', 'Grado', '5to', '2016-04-01 16:07:22', NULL, 1, 1),
(9, 'Sexto Grado', 'Grado', '6to', '2016-04-01 16:07:22', NULL, 1, 1),
(10, 'Primer Año', 'Año', '1er', '2016-04-01 18:24:11', NULL, 1, 0),
(11, 'Segundo Año', 'Año', '2do', '2016-04-01 18:24:11', NULL, 1, 0),
(12, 'Tercer Año', 'Año', '3er', '2016-04-01 18:24:11', NULL, 1, 0),
(14, 'Cuarto Año', NULL, '4to', '2016-04-14 05:31:46', NULL, 0, 0),
(15, 'Quito Año', NULL, '5to', '2016-04-14 05:31:51', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_escuela`
--

CREATE TABLE IF NOT EXISTS `grado_escuela` (
`id_grado_escuela` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los grados asociados a cada escuela' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `grado_escuela`
--

INSERT INTO `grado_escuela` (`id_grado_escuela`, `id_grado`, `id_escuela`, `id_seccion`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 3, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumento_planificacion_media`
--

CREATE TABLE IF NOT EXISTS `instrumento_planificacion_media` (
`instrumento_planificacion_media_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `instrumento_planificacion_media`
--

INSERT INTO `instrumento_planificacion_media` (`instrumento_planificacion_media_id`, `name`) VALUES
(1, 'Cuestionarios'),
(2, 'Encuestas'),
(3, 'Escala de estimación'),
(4, 'Guías de observación'),
(5, 'Lista de cotejo'),
(6, 'Mapas'),
(7, 'Observación'),
(8, 'Prueba de ensayo'),
(9, 'Prueba mixta'),
(10, 'Prueba objetiva'),
(11, 'Prueba práctica'),
(12, 'Registro descriptivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas`
--

CREATE TABLE IF NOT EXISTS `jornadas` (
`id_jornadas` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las jornadas laborales' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `jornadas`
--

INSERT INTO `jornadas` (`id_jornadas`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'Diurna', '2015-10-29 19:24:12', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_base_datos`
--

CREATE TABLE IF NOT EXISTS `log_base_datos` (
`id_log_base_datos` int(11) NOT NULL,
  `operacion` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `tabla` varchar(45) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los registros de las acciones realizadas ' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE IF NOT EXISTS `maestros` (
`id_maestro` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los maestros por escuela' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro_grado`
--

CREATE TABLE IF NOT EXISTS `maestro_grado` (
`id_maestro_grado` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los maestros por grado' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mark`
--

CREATE TABLE IF NOT EXISTS `mark` (
`mark_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `mark_obtained` int(11) NOT NULL DEFAULT '0',
  `mark_total` int(11) NOT NULL DEFAULT '100',
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `mark`
--

INSERT INTO `mark` (`mark_id`, `student_id`, `subject_id`, `class_id`, `exam_id`, `mark_obtained`, `mark_total`, `comment`, `section_id`) VALUES
(6, 23, 1, 10, 1, 20, 100, '', 10),
(7, 24, 1, 10, 1, 20, 100, '', 10),
(8, 25, 1, 10, 1, 0, 100, '', 10),
(9, 23, 1, 10, 2, 0, 100, '', 10),
(10, 24, 1, 10, 2, 0, 100, '', 10),
(11, 25, 1, 10, 2, 0, 100, '', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medio_transporte`
--

CREATE TABLE IF NOT EXISTS `medio_transporte` (
`id_medio_transporte` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los medios en los que se transporta el al' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `medio_transporte`
--

INSERT INTO `medio_transporte` (`id_medio_transporte`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'Publico', '2015-10-29 19:24:52', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE IF NOT EXISTS `municipios` (
  `id_municipio` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los municipios de un estado';

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `id_estado`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 1, 'LIBERTADOR', '2015-10-20 19:57:00', NULL, 1),
(2, 2, 'ANACO', '2015-10-20 19:57:00', NULL, 1),
(3, 2, 'ARAGUA', '2015-10-20 19:57:00', NULL, 1),
(4, 2, 'BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(5, 2, 'BRUZUAL', '2015-10-20 19:57:00', NULL, 1),
(6, 2, 'CAJIGAL', '2015-10-20 19:57:00', NULL, 1),
(7, 2, 'FREITES', '2015-10-20 19:57:00', NULL, 1),
(8, 2, 'INDEPENDENCIA', '2015-10-20 19:57:00', NULL, 1),
(9, 2, 'LIBERTAD', '2015-10-20 19:57:00', NULL, 1),
(10, 2, 'MIRANDA', '2015-10-20 19:57:00', NULL, 1),
(11, 2, 'MONAGAS', '2015-10-20 19:57:00', NULL, 1),
(12, 2, 'PEÑALVER', '2015-10-20 19:57:00', NULL, 1),
(13, 2, 'SIMON RODRIGUEZ', '2015-10-20 19:57:00', NULL, 1),
(14, 2, 'SOTILLO', '2015-10-20 19:57:00', NULL, 1),
(15, 2, 'GUANIPA', '2015-10-20 19:57:00', NULL, 1),
(16, 2, 'GUANTA', '2015-10-20 19:57:00', NULL, 1),
(17, 2, 'PIRITU', '2015-10-20 19:57:00', NULL, 1),
(18, 2, 'M.L/DIEGO BAUTISTA U', '2015-10-20 19:57:00', NULL, 1),
(19, 2, 'CARVAJAL', '2015-10-20 19:57:00', NULL, 1),
(20, 2, 'SANTA ANA', '2015-10-20 19:57:00', NULL, 1),
(21, 2, 'MC GREGOR', '2015-10-20 19:57:00', NULL, 1),
(22, 2, 'S JUAN CAPISTRANO', '2015-10-20 19:57:00', NULL, 1),
(23, 3, 'ACHAGUAS', '2015-10-20 19:57:00', NULL, 1),
(24, 3, 'MUÑOZ', '2015-10-20 19:57:00', NULL, 1),
(25, 3, 'PAEZ', '2015-10-20 19:57:00', NULL, 1),
(26, 3, 'PEDRO CAMEJO', '2015-10-20 19:57:00', NULL, 1),
(27, 3, 'ROMULO GALLEGOS', '2015-10-20 19:57:00', NULL, 1),
(28, 3, 'SAN FERNANDO', '2015-10-20 19:57:00', NULL, 1),
(29, 3, 'BIRUACA', '2015-10-20 19:57:00', NULL, 1),
(30, 4, 'GIRARDOT', '2015-10-20 19:57:00', NULL, 1),
(31, 4, 'SANTIAGO MARIÑO', '2015-10-20 19:57:00', NULL, 1),
(32, 4, 'JOSE FELIX RIVAS', '2015-10-20 19:57:00', NULL, 1),
(33, 4, 'SAN CASIMIRO', '2015-10-20 19:57:00', NULL, 1),
(34, 4, 'SAN SEBASTIAN', '2015-10-20 19:57:00', NULL, 1),
(35, 4, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(36, 4, 'URDANETA', '2015-10-20 19:57:00', NULL, 1),
(37, 4, 'ZAMORA', '2015-10-20 19:57:00', NULL, 1),
(38, 4, 'LIBERTADOR', '2015-10-20 19:57:00', NULL, 1),
(39, 4, 'JOSE ANGEL LAMAS', '2015-10-20 19:57:00', NULL, 1),
(40, 4, 'BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(41, 4, 'SANTOS MICHELENA', '2015-10-20 19:57:00', NULL, 1),
(42, 4, 'MARIO B IRAGORRY', '2015-10-20 19:57:00', NULL, 1),
(43, 4, 'TOVAR', '2015-10-20 19:57:00', NULL, 1),
(44, 4, 'CAMATAGUA', '2015-10-20 19:57:00', NULL, 1),
(45, 4, 'JOSE R REVENGA', '2015-10-20 19:57:00', NULL, 1),
(46, 4, 'FRANCISCO LINARES A.', '2015-10-20 19:57:00', NULL, 1),
(47, 4, 'M.OCUMARE D LA COSTA', '2015-10-20 19:57:00', NULL, 1),
(48, 5, 'ARISMENDI', '2015-10-20 19:57:00', NULL, 1),
(49, 5, 'BARINAS', '2015-10-20 19:57:00', NULL, 1),
(50, 5, 'BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(51, 5, 'EZEQUIEL ZAMORA', '2015-10-20 19:57:00', NULL, 1),
(52, 5, 'OBISPOS', '2015-10-20 19:57:00', NULL, 1),
(53, 5, 'PEDRAZA', '2015-10-20 19:57:00', NULL, 1),
(54, 5, 'ROJAS', '2015-10-20 19:57:00', NULL, 1),
(55, 5, 'SOSA', '2015-10-20 19:57:00', NULL, 1),
(56, 5, 'ALBERTO ARVELO T', '2015-10-20 19:57:00', NULL, 1),
(57, 5, 'A JOSE DE SUCRE', '2015-10-20 19:57:00', NULL, 1),
(58, 5, 'CRUZ PAREDES', '2015-10-20 19:57:00', NULL, 1),
(59, 5, 'ANDRES E. BLANCO', '2015-10-20 19:57:00', NULL, 1),
(60, 6, 'CARONI', '2015-10-20 19:57:00', NULL, 1),
(61, 6, 'CEDEÑO', '2015-10-20 19:57:00', NULL, 1),
(62, 6, 'HERES', '2015-10-20 19:57:00', NULL, 1),
(63, 6, 'PIAR', '2015-10-20 19:57:00', NULL, 1),
(64, 6, 'ROSCIO', '2015-10-20 19:57:00', NULL, 1),
(65, 6, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(66, 6, 'SIFONTES', '2015-10-20 19:57:00', NULL, 1),
(67, 6, 'RAUL LEONI', '2015-10-20 19:57:00', NULL, 1),
(68, 6, 'GRAN SABANA', '2015-10-20 19:57:00', NULL, 1),
(69, 6, 'EL CALLAO', '2015-10-20 19:57:00', NULL, 1),
(70, 6, 'PADRE PEDRO CHIEN', '2015-10-20 19:57:00', NULL, 1),
(71, 7, 'BEJUMA', '2015-10-20 19:57:00', NULL, 1),
(72, 7, 'CARLOS ARVELO', '2015-10-20 19:57:00', NULL, 1),
(73, 7, 'DIEGO IBARRA', '2015-10-20 19:57:00', NULL, 1),
(74, 7, 'GUACARA', '2015-10-20 19:57:00', NULL, 1),
(75, 7, 'MONTALBAN', '2015-10-20 19:57:00', NULL, 1),
(76, 7, 'JUAN JOSE MORA', '2015-10-20 19:57:00', NULL, 1),
(77, 7, 'PUERTO CABELLO', '2015-10-20 19:57:00', NULL, 1),
(78, 7, 'SAN JOAQUIN', '2015-10-20 19:57:00', NULL, 1),
(79, 7, 'VALENCIA', '2015-10-20 19:57:00', NULL, 1),
(80, 7, 'MIRANDA', '2015-10-20 19:57:00', NULL, 1),
(81, 7, 'LOS GUAYOS', '2015-10-20 19:57:00', NULL, 1),
(82, 7, 'NAGUANAGUA', '2015-10-20 19:57:00', NULL, 1),
(83, 7, 'SAN DIEGO', '2015-10-20 19:57:00', NULL, 1),
(84, 7, 'LIBERTADOR', '2015-10-20 19:57:00', NULL, 1),
(85, 8, 'ANZOATEGUI', '2015-10-20 19:57:00', NULL, 1),
(86, 8, 'FALCON', '2015-10-20 19:57:00', NULL, 1),
(87, 8, 'GIRARDOT', '2015-10-20 19:57:00', NULL, 1),
(88, 8, 'MP PAO SN J BAUTISTA', '2015-10-20 19:57:00', NULL, 1),
(89, 8, 'RICAURTE', '2015-10-20 19:57:00', NULL, 1),
(90, 8, 'SAN CARLOS', '2015-10-20 19:57:00', NULL, 1),
(91, 8, 'TINACO', '2015-10-20 19:57:00', NULL, 1),
(92, 8, 'LIMA BLANCO', '2015-10-20 19:57:00', NULL, 1),
(93, 8, 'ROMULO GALLEGOS', '2015-10-20 19:57:00', NULL, 1),
(94, 9, 'ACOSTA', '2015-10-20 19:57:00', NULL, 1),
(95, 9, 'BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(96, 9, 'BUCHIVACOA', '2015-10-20 19:57:00', NULL, 1),
(97, 9, 'CARIRUBANA', '2015-10-20 19:57:00', NULL, 1),
(98, 9, 'COLINA', '2015-10-20 19:57:00', NULL, 1),
(99, 9, 'DEMOCRACIA', '2015-10-20 19:57:00', NULL, 1),
(100, 9, 'FALCON', '2015-10-20 19:57:00', NULL, 1),
(101, 9, 'FEDERACION', '2015-10-20 19:57:00', NULL, 1),
(102, 9, 'MAUROA', '2015-10-20 19:57:00', NULL, 1),
(103, 9, 'MIRANDA', '2015-10-20 19:57:00', NULL, 1),
(104, 9, 'PETIT', '2015-10-20 19:57:00', NULL, 1),
(105, 9, 'SILVA', '2015-10-20 19:57:00', NULL, 1),
(106, 9, 'ZAMORA', '2015-10-20 19:57:00', NULL, 1),
(107, 9, 'DABAJURO', '2015-10-20 19:57:00', NULL, 1),
(108, 9, 'MONS. ITURRIZA', '2015-10-20 19:57:00', NULL, 1),
(109, 9, 'LOS TAQUES', '2015-10-20 19:57:00', NULL, 1),
(110, 9, 'PIRITU', '2015-10-20 19:57:00', NULL, 1),
(111, 9, 'UNION', '2015-10-20 19:57:00', NULL, 1),
(112, 9, 'SAN FRANCISCO', '2015-10-20 19:57:00', NULL, 1),
(113, 9, 'JACURA', '2015-10-20 19:57:00', NULL, 1),
(114, 9, 'CACIQUE MANAURE', '2015-10-20 19:57:00', NULL, 1),
(115, 9, 'PALMA SOLA', '2015-10-20 19:57:00', NULL, 1),
(116, 9, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(117, 9, 'URUMACO', '2015-10-20 19:57:00', NULL, 1),
(118, 9, 'TOCOPERO', '2015-10-20 19:57:00', NULL, 1),
(119, 10, 'INFANTE', '2015-10-20 19:57:00', NULL, 1),
(120, 10, 'MELLADO', '2015-10-20 19:57:00', NULL, 1),
(121, 10, 'MIRANDA', '2015-10-20 19:57:00', NULL, 1),
(122, 10, 'MONAGAS', '2015-10-20 19:57:00', NULL, 1),
(123, 10, 'RIBAS', '2015-10-20 19:57:00', NULL, 1),
(124, 10, 'ROSCIO', '2015-10-20 19:57:00', NULL, 1),
(125, 10, 'ZARAZA', '2015-10-20 19:57:00', NULL, 1),
(126, 10, 'CAMAGUAN', '2015-10-20 19:57:00', NULL, 1),
(127, 10, 'S JOSE DE GUARIBE', '2015-10-20 19:57:00', NULL, 1),
(128, 10, 'LAS MERCEDES', '2015-10-20 19:57:00', NULL, 1),
(129, 10, 'EL SOCORRO', '2015-10-20 19:57:00', NULL, 1),
(130, 10, 'ORTIZ', '2015-10-20 19:57:00', NULL, 1),
(131, 10, 'S MARIA DE IPIRE', '2015-10-20 19:57:00', NULL, 1),
(132, 10, 'CHAGUARAMAS', '2015-10-20 19:57:00', NULL, 1),
(133, 10, 'SAN GERONIMO DE G', '2015-10-20 19:57:00', NULL, 1),
(134, 11, 'CRESPO', '2015-10-20 19:57:00', NULL, 1),
(135, 11, 'IRIBARREN', '2015-10-20 19:57:00', NULL, 1),
(136, 11, 'JIMENEZ', '2015-10-20 19:57:00', NULL, 1),
(137, 11, 'MORAN', '2015-10-20 19:57:00', NULL, 1),
(138, 11, 'PALAVECINO', '2015-10-20 19:57:00', NULL, 1),
(139, 11, 'TORRES', '2015-10-20 19:57:00', NULL, 1),
(140, 11, 'URDANETA', '2015-10-20 19:57:00', NULL, 1),
(141, 11, 'ANDRES E BLANCO', '2015-10-20 19:57:00', NULL, 1),
(142, 11, 'SIMON PLANAS', '2015-10-20 19:57:00', NULL, 1),
(143, 12, 'ALBERTO ADRIANI', '2015-10-20 19:57:00', NULL, 1),
(144, 12, 'ANDRES BELLO', '2015-10-20 19:57:00', NULL, 1),
(145, 12, 'ARZOBISPO CHACON', '2015-10-20 19:57:00', NULL, 1),
(146, 12, 'CAMPO ELIAS', '2015-10-20 19:57:00', NULL, 1),
(147, 12, 'GUARAQUE', '2015-10-20 19:57:00', NULL, 1),
(148, 12, 'JULIO CESAR SALAS', '2015-10-20 19:57:00', NULL, 1),
(149, 12, 'JUSTO BRICEÑO', '2015-10-20 19:57:00', NULL, 1),
(150, 12, 'LIBERTADOR', '2015-10-20 19:57:00', NULL, 1),
(151, 12, 'SANTOS MARQUINA', '2015-10-20 19:57:00', NULL, 1),
(152, 12, 'MIRANDA', '2015-10-20 19:57:00', NULL, 1),
(153, 12, 'ANTONIO PINTO S.', '2015-10-20 19:57:00', NULL, 1),
(154, 12, 'OB. RAMOS DE LORA', '2015-10-20 19:57:00', NULL, 1),
(155, 12, 'CARACCIOLO PARRA', '2015-10-20 19:57:00', NULL, 1),
(156, 12, 'CARDENAL QUINTERO', '2015-10-20 19:57:00', NULL, 1),
(157, 12, 'PUEBLO LLANO', '2015-10-20 19:57:00', NULL, 1),
(158, 12, 'RANGEL', '2015-10-20 19:57:00', NULL, 1),
(159, 12, 'RIVAS DAVILA', '2015-10-20 19:57:00', NULL, 1),
(160, 12, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(161, 12, 'TOVAR', '2015-10-20 19:57:00', NULL, 1),
(162, 12, 'TULIO F CORDERO', '2015-10-20 19:57:00', NULL, 1),
(163, 12, 'PADRE NOGUERA', '2015-10-20 19:57:00', NULL, 1),
(164, 12, 'ARICAGUA', '2015-10-20 19:57:00', NULL, 1),
(165, 12, 'ZEA', '2015-10-20 19:57:00', NULL, 1),
(166, 13, 'ACEVEDO', '2015-10-20 19:57:00', NULL, 1),
(167, 13, 'BRION', '2015-10-20 19:57:00', NULL, 1),
(168, 13, 'GUAICAIPURO', '2015-10-20 19:57:00', NULL, 1),
(169, 13, 'INDEPENDENCIA', '2015-10-20 19:57:00', NULL, 1),
(170, 13, 'LANDER', '2015-10-20 19:57:00', NULL, 1),
(171, 13, 'PAEZ', '2015-10-20 19:57:00', NULL, 1),
(172, 13, 'PAZ CASTILLO', '2015-10-20 19:57:00', NULL, 1),
(173, 13, 'PLAZA', '2015-10-20 19:57:00', NULL, 1),
(174, 13, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(175, 13, 'URDANETA', '2015-10-20 19:57:00', NULL, 1),
(176, 13, 'ZAMORA', '2015-10-20 19:57:00', NULL, 1),
(177, 13, 'CRISTOBAL ROJAS', '2015-10-20 19:57:00', NULL, 1),
(178, 13, 'LOS SALIAS', '2015-10-20 19:57:00', NULL, 1),
(179, 13, 'ANDRES BELLO', '2015-10-20 19:57:00', NULL, 1),
(180, 13, 'SIMON BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(181, 13, 'BARUTA', '2015-10-20 19:57:00', NULL, 1),
(182, 13, 'CARRIZAL', '2015-10-20 19:57:00', NULL, 1),
(183, 13, 'CHACAO', '2015-10-20 19:57:00', NULL, 1),
(184, 13, 'EL HATILLO', '2015-10-20 19:57:00', NULL, 1),
(185, 13, 'BUROZ', '2015-10-20 19:57:00', NULL, 1),
(186, 13, 'PEDRO GUAL', '2015-10-20 19:57:00', NULL, 1),
(187, 14, 'ACOSTA', '2015-10-20 19:57:00', NULL, 1),
(188, 14, 'BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(189, 14, 'CARIPE', '2015-10-20 19:57:00', NULL, 1),
(190, 14, 'CEDEÑO', '2015-10-20 19:57:00', NULL, 1),
(191, 14, 'EZEQUIEL ZAMORA', '2015-10-20 19:57:00', NULL, 1),
(192, 14, 'LIBERTADOR', '2015-10-20 19:57:00', NULL, 1),
(193, 14, 'MATURIN', '2015-10-20 19:57:00', NULL, 1),
(194, 14, 'PIAR', '2015-10-20 19:57:00', NULL, 1),
(195, 14, 'PUNCERES', '2015-10-20 19:57:00', NULL, 1),
(196, 14, 'SOTILLO', '2015-10-20 19:57:00', NULL, 1),
(197, 14, 'AGUASAY', '2015-10-20 19:57:00', NULL, 1),
(198, 14, 'SANTA BARBARA', '2015-10-20 19:57:00', NULL, 1),
(199, 14, 'URACOA', '2015-10-20 19:57:00', NULL, 1),
(200, 15, 'ARISMENDI', '2015-10-20 19:57:00', NULL, 1),
(201, 15, 'DIAZ', '2015-10-20 19:57:00', NULL, 1),
(202, 15, 'GOMEZ', '2015-10-20 19:57:00', NULL, 1),
(203, 15, 'MANEIRO', '2015-10-20 19:57:00', NULL, 1),
(204, 15, 'MARCANO', '2015-10-20 19:57:00', NULL, 1),
(205, 15, 'MARIÑO', '2015-10-20 19:57:00', NULL, 1),
(206, 15, 'PENIN. DE MACANAO', '2015-10-20 19:57:00', NULL, 1),
(207, 15, 'VILLALBA(I.COCHE)', '2015-10-20 19:57:00', NULL, 1),
(208, 15, 'TUBORES', '2015-10-20 19:57:00', NULL, 1),
(209, 15, 'ANTOLIN DEL CAMPO', '2015-10-20 19:57:00', NULL, 1),
(210, 15, 'GARCIA', '2015-10-20 19:57:00', NULL, 1),
(211, 16, 'ARAURE', '2015-10-20 19:57:00', NULL, 1),
(212, 16, 'ESTELLER', '2015-10-20 19:57:00', NULL, 1),
(213, 16, 'GUANARE', '2015-10-20 19:57:00', NULL, 1),
(214, 16, 'GUANARITO', '2015-10-20 19:57:00', NULL, 1),
(215, 16, 'OSPINO', '2015-10-20 19:57:00', NULL, 1),
(216, 16, 'PAEZ', '2015-10-20 19:57:00', NULL, 1),
(217, 16, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(218, 16, 'TUREN', '2015-10-20 19:57:00', NULL, 1),
(219, 16, 'M.JOSE V DE UNDA', '2015-10-20 19:57:00', NULL, 1),
(220, 16, 'AGUA BLANCA', '2015-10-20 19:57:00', NULL, 1),
(221, 16, 'PAPELON', '2015-10-20 19:57:00', NULL, 1),
(222, 16, 'GENARO BOCONOITO', '2015-10-20 19:57:00', NULL, 1),
(223, 16, 'S RAFAEL DE ONOTO', '2015-10-20 19:57:00', NULL, 1),
(224, 16, 'SANTA ROSALIA', '2015-10-20 19:57:00', NULL, 1),
(225, 17, 'ARISMENDI', '2015-10-20 19:57:00', NULL, 1),
(226, 17, 'BENITEZ', '2015-10-20 19:57:00', NULL, 1),
(227, 17, 'BERMUDEZ', '2015-10-20 19:57:00', NULL, 1),
(228, 17, 'CAJIGAL', '2015-10-20 19:57:00', NULL, 1),
(229, 17, 'MARIÑO', '2015-10-20 19:57:00', NULL, 1),
(230, 17, 'MEJIA', '2015-10-20 19:57:00', NULL, 1),
(231, 17, 'MONTES', '2015-10-20 19:57:00', NULL, 1),
(232, 17, 'RIBERO', '2015-10-20 19:57:00', NULL, 1),
(233, 17, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(234, 17, 'VALDEZ', '2015-10-20 19:57:00', NULL, 1),
(235, 17, 'ANDRES E BLANCO', '2015-10-20 19:57:00', NULL, 1),
(236, 17, 'LIBERTADOR', '2015-10-20 19:57:00', NULL, 1),
(237, 17, 'ANDRES MATA', '2015-10-20 19:57:00', NULL, 1),
(238, 17, 'BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(239, 17, 'CRUZ S ACOSTA', '2015-10-20 19:57:00', NULL, 1),
(240, 18, 'AYACUCHO', '2015-10-20 19:57:00', NULL, 1),
(241, 18, 'BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(242, 18, 'INDEPENDENCIA', '2015-10-20 19:57:00', NULL, 1),
(243, 18, 'CARDENAS', '2015-10-20 19:57:00', NULL, 1),
(244, 18, 'JAUREGUI', '2015-10-20 19:57:00', NULL, 1),
(245, 18, 'JUNIN', '2015-10-20 19:57:00', NULL, 1),
(246, 18, 'LOBATERA', '2015-10-20 19:57:00', NULL, 1),
(247, 18, 'SAN CRISTOBAL', '2015-10-20 19:57:00', NULL, 1),
(248, 18, 'URIBANTE', '2015-10-20 19:57:00', NULL, 1),
(249, 18, 'CORDOBA', '2015-10-20 19:57:00', NULL, 1),
(250, 18, 'GARCIA DE HEVIA', '2015-10-20 19:57:00', NULL, 1),
(251, 18, 'GUASIMOS', '2015-10-20 19:57:00', NULL, 1),
(252, 18, 'MICHELENA', '2015-10-20 19:57:00', NULL, 1),
(253, 18, 'LIBERTADOR', '2015-10-20 19:57:00', NULL, 1),
(254, 18, 'PANAMERICANO', '2015-10-20 19:57:00', NULL, 1),
(255, 18, 'PEDRO MARIA UREÑA', '2015-10-20 19:57:00', NULL, 1),
(256, 18, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(257, 18, 'ANDRES BELLO', '2015-10-20 19:57:00', NULL, 1),
(258, 18, 'FERNANDEZ FEO', '2015-10-20 19:57:00', NULL, 1),
(259, 18, 'LIBERTAD', '2015-10-20 19:57:00', NULL, 1),
(260, 18, 'SAMUEL MALDONADO', '2015-10-20 19:57:00', NULL, 1),
(261, 18, 'SEBORUCO', '2015-10-20 19:57:00', NULL, 1),
(262, 18, 'ANTONIO ROMULO C', '2015-10-20 19:57:00', NULL, 1),
(263, 18, 'FCO DE MIRANDA', '2015-10-20 19:57:00', NULL, 1),
(264, 18, 'JOSE MARIA VARGA', '2015-10-20 19:57:00', NULL, 1),
(265, 18, 'RAFAEL URDANETA', '2015-10-20 19:57:00', NULL, 1),
(266, 18, 'SIMON RODRIGUEZ', '2015-10-20 19:57:00', NULL, 1),
(267, 18, 'TORBES', '2015-10-20 19:57:00', NULL, 1),
(268, 18, 'SAN JUDAS TADEO', '2015-10-20 19:57:00', NULL, 1),
(269, 19, 'RAFAEL RANGEL', '2015-10-20 19:57:00', NULL, 1),
(270, 19, 'BOCONO', '2015-10-20 19:57:00', NULL, 1),
(271, 19, 'CARACHE', '2015-10-20 19:57:00', NULL, 1),
(272, 19, 'ESCUQUE', '2015-10-20 19:57:00', NULL, 1),
(273, 19, 'TRUJILLO', '2015-10-20 19:57:00', NULL, 1),
(274, 19, 'URDANETA', '2015-10-20 19:57:00', NULL, 1),
(275, 19, 'VALERA', '2015-10-20 19:57:00', NULL, 1),
(276, 19, 'CANDELARIA', '2015-10-20 19:57:00', NULL, 1),
(277, 19, 'MIRANDA', '2015-10-20 19:57:00', NULL, 1),
(278, 19, 'MONTE CARMELO', '2015-10-20 19:57:00', NULL, 1),
(279, 19, 'MOTATAN', '2015-10-20 19:57:00', NULL, 1),
(280, 19, 'PAMPAN', '2015-10-20 19:57:00', NULL, 1),
(281, 19, 'S RAFAEL CARVAJAL', '2015-10-20 19:57:00', NULL, 1),
(282, 19, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(283, 19, 'ANDRES BELLO', '2015-10-20 19:57:00', NULL, 1),
(284, 19, 'BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(285, 19, 'JOSE F M CAÑIZAL', '2015-10-20 19:57:00', NULL, 1),
(286, 19, 'JUAN V CAMPO ELI', '2015-10-20 19:57:00', NULL, 1),
(287, 19, 'LA CEIBA', '2015-10-20 19:57:00', NULL, 1),
(288, 19, 'PAMPANITO', '2015-10-20 19:57:00', NULL, 1),
(289, 20, 'BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(290, 20, 'BRUZUAL', '2015-10-20 19:57:00', NULL, 1),
(291, 20, 'NIRGUA', '2015-10-20 19:57:00', NULL, 1),
(292, 20, 'SAN FELIPE', '2015-10-20 19:57:00', NULL, 1),
(293, 20, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(294, 20, 'URACHICHE', '2015-10-20 19:57:00', NULL, 1),
(295, 20, 'PEÑA', '2015-10-20 19:57:00', NULL, 1),
(296, 20, 'JOSE ANTONIO PAEZ', '2015-10-20 19:57:00', NULL, 1),
(297, 20, 'LA TRINIDAD', '2015-10-20 19:57:00', NULL, 1),
(298, 20, 'COCOROTE', '2015-10-20 19:57:00', NULL, 1),
(299, 20, 'INDEPENDENCIA', '2015-10-20 19:57:00', NULL, 1),
(300, 20, 'ARISTIDES BASTID', '2015-10-20 19:57:00', NULL, 1),
(301, 20, 'MANUEL MONGE', '2015-10-20 19:57:00', NULL, 1),
(302, 20, 'VEROES', '2015-10-20 19:57:00', NULL, 1),
(303, 21, 'BARALT', '2015-10-20 19:57:00', NULL, 1),
(304, 21, 'SANTA RITA', '2015-10-20 19:57:00', NULL, 1),
(305, 21, 'COLON', '2015-10-20 19:57:00', NULL, 1),
(306, 21, 'MARA', '2015-10-20 19:57:00', NULL, 1),
(307, 21, 'MARACAIBO', '2015-10-20 19:57:00', NULL, 1),
(308, 21, 'MIRANDA', '2015-10-20 19:57:00', NULL, 1),
(309, 21, 'PAEZ', '2015-10-20 19:57:00', NULL, 1),
(310, 21, 'MACHIQUES DE P', '2015-10-20 19:57:00', NULL, 1),
(311, 21, 'SUCRE', '2015-10-20 19:57:00', NULL, 1),
(312, 21, 'LA CAÑADA DE U.', '2015-10-20 19:57:00', NULL, 1),
(313, 21, 'LAGUNILLAS', '2015-10-20 19:57:00', NULL, 1),
(314, 21, 'CATATUMBO', '2015-10-20 19:57:00', NULL, 1),
(315, 21, 'M/ROSARIO DE PERIJA', '2015-10-20 19:57:00', NULL, 1),
(316, 21, 'CABIMAS', '2015-10-20 19:57:00', NULL, 1),
(317, 21, 'VALMORE RODRIGUEZ', '2015-10-20 19:57:00', NULL, 1),
(318, 21, 'JESUS E LOSSADA', '2015-10-20 19:57:00', NULL, 1),
(319, 21, 'ALMIRANTE P', '2015-10-20 19:57:00', NULL, 1),
(320, 21, 'SAN FRANCISCO', '2015-10-20 19:57:00', NULL, 1),
(321, 21, 'JESUS M SEMPRUN', '2015-10-20 19:57:00', NULL, 1),
(322, 21, 'FRANCISCO J PULG', '2015-10-20 19:57:00', NULL, 1),
(323, 21, 'SIMON BOLIVAR', '2015-10-20 19:57:00', NULL, 1),
(324, 22, 'ATURES', '2015-10-20 19:57:00', NULL, 1),
(325, 22, 'ATABAPO', '2015-10-20 19:57:00', NULL, 1),
(326, 22, 'MAROA', '2015-10-20 19:57:00', NULL, 1),
(327, 22, 'RIO NEGRO', '2015-10-20 19:57:00', NULL, 1),
(328, 22, 'AUTANA', '2015-10-20 19:57:00', NULL, 1),
(329, 22, 'MANAPIARE', '2015-10-20 19:57:00', NULL, 1),
(330, 22, 'ALTO ORINOCO', '2015-10-20 19:57:00', NULL, 1),
(331, 23, 'TUCUPITA', '2015-10-20 19:57:00', NULL, 1),
(332, 23, 'PEDERNALES', '2015-10-20 19:57:00', NULL, 1),
(333, 23, 'ANTONIO DIAZ', '2015-10-20 19:57:00', NULL, 1),
(334, 23, 'CASACOIMA', '2015-10-20 19:57:00', NULL, 1),
(335, 24, 'VARGAS', '2015-10-20 19:57:00', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_educativos`
--

CREATE TABLE IF NOT EXISTS `niveles_educativos` (
`id_niveles_eductivos` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `valor` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `niveles_educativos`
--

INSERT INTO `niveles_educativos` (`id_niveles_eductivos`, `descripcion`, `valor`) VALUES
(1, 'Inicial', 'Eduación Inicial'),
(2, 'Primaria', 'Educación Primaria'),
(3, 'Media', 'Educación Media');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_ingreso_censo`
--

CREATE TABLE IF NOT EXISTS `nivel_ingreso_censo` (
`id_nivel_ingreso_censo` int(11) NOT NULL,
  `valor` varchar(65) NOT NULL,
  `puntaje` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `nivel_ingreso_censo`
--

INSERT INTO `nivel_ingreso_censo` (`id_nivel_ingreso_censo`, `valor`, `puntaje`) VALUES
(1, 'Mayor ó Igual a Bs 9.648,00', '1'),
(2, 'Entre 8.501,00 y 9.647,00 Bs', '2'),
(3, 'Entre 7.501,00 y 8.500,00 Bs', '3'),
(4, 'Entre 6.501,00 y 7.500,00 Bs', '4'),
(5, 'Entre 5.501,00 y 6.500,00 Bs', '5'),
(6, 'Entre 4.501,00 y 5.500,00 Bs', '6'),
(7, 'Menor ó Igual a Bs 4.500,00', '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE IF NOT EXISTS `padres` (
`id_padre` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_redes_sociales` int(11) DEFAULT NULL,
  `id_empleo` int(11) DEFAULT NULL,
  `madre` tinyint(1) NOT NULL DEFAULT '0',
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los padres' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
`id_pais` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los países, en este caso solo contendrá' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id_pais`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'Venezuela', '2015-10-20 19:47:15', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentescos`
--

CREATE TABLE IF NOT EXISTS `parentescos` (
`id_parentesco` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene la lista de parentescos' AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `parentescos`
--

INSERT INTO `parentescos` (`id_parentesco`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'PADRE', '2015-10-20 20:13:28', NULL, 1),
(2, 'MADRE', '2015-10-20 20:13:28', NULL, 1),
(3, 'HERMANO', '2015-10-20 20:13:28', NULL, 1),
(4, 'HERMANA', '2015-10-20 20:13:28', NULL, 1),
(5, 'ABUELO', '2015-10-20 20:13:28', NULL, 1),
(6, 'ABUELA', '2015-10-20 20:13:28', NULL, 1),
(7, 'TIA', '2015-10-20 20:13:28', NULL, 1),
(8, 'TIO', '2015-10-20 20:13:28', NULL, 1),
(9, 'PRIMO', '2015-10-20 20:13:28', NULL, 1),
(10, 'PRIMA', '2015-10-20 20:13:28', NULL, 1),
(11, 'SOBRINO', '2015-10-20 20:13:28', NULL, 1),
(12, 'SOBRINA', '2015-10-20 20:13:28', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquias`
--

CREATE TABLE IF NOT EXISTS `parroquias` (
  `id_parroquia` int(11) NOT NULL COMMENT 'Identificador de la parroquia',
  `id_municipio` int(11) NOT NULL COMMENT 'Identificador del municipio al que pertenece la parroquia',
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre de la parroquia',
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'fecha de creación del registro',
  `fecha_actualizacion` timestamp NULL DEFAULT NULL COMMENT 'fecha de actualización del registro',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'registro activo o no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene informacion sobre parroquias.';

--
-- Volcado de datos para la tabla `parroquias`
--

INSERT INTO `parroquias` (`id_parroquia`, `id_municipio`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 1, 'ALTAGRACIA', '2015-10-20 19:59:36', NULL, 1),
(2, 1, 'CANDELARIA', '2015-10-20 19:59:36', NULL, 1),
(3, 1, 'CATEDRAL', '2015-10-20 19:59:36', NULL, 1),
(4, 1, 'LA PASTORA', '2015-10-20 19:59:36', NULL, 1),
(5, 1, 'SAN AGUSTIN', '2015-10-20 19:59:36', NULL, 1),
(6, 1, 'SAN JOSE', '2015-10-20 19:59:36', NULL, 1),
(7, 1, 'SAN JUAN', '2015-10-20 19:59:36', NULL, 1),
(8, 1, 'SANTA ROSALIA', '2015-10-20 19:59:36', NULL, 1),
(9, 1, 'SANTA TERESA', '2015-10-20 19:59:36', NULL, 1),
(10, 1, 'SUCRE', '2015-10-20 19:59:36', NULL, 1),
(11, 1, '23 DE ENERO', '2015-10-20 19:59:36', NULL, 1),
(12, 1, 'ANTIMANO', '2015-10-20 19:59:36', NULL, 1),
(13, 1, 'EL RECREO', '2015-10-20 19:59:36', NULL, 1),
(14, 1, 'EL VALLE', '2015-10-20 19:59:36', NULL, 1),
(15, 1, 'LA VEGA', '2015-10-20 19:59:36', NULL, 1),
(16, 1, 'MACARAO', '2015-10-20 19:59:36', NULL, 1),
(17, 1, 'CARICUAO', '2015-10-20 19:59:36', NULL, 1),
(18, 1, 'EL JUNQUITO', '2015-10-20 19:59:36', NULL, 1),
(19, 1, 'COCHE', '2015-10-20 19:59:36', NULL, 1),
(20, 1, 'SAN PEDRO', '2015-10-20 19:59:36', NULL, 1),
(21, 1, 'SAN BERNARDINO', '2015-10-20 19:59:36', NULL, 1),
(22, 1, 'EL PARAISO', '2015-10-20 19:59:36', NULL, 1),
(23, 2, 'ANACO', '2015-10-20 19:59:36', NULL, 1),
(24, 2, 'SAN JOAQUIN', '2015-10-20 19:59:36', NULL, 1),
(25, 3, 'CM. ARAGUA DE BARCELONA', '2015-10-20 19:59:36', NULL, 1),
(26, 3, 'CACHIPO', '2015-10-20 19:59:36', NULL, 1),
(27, 4, 'EL CARMEN', '2015-10-20 19:59:36', NULL, 1),
(28, 4, 'SAN CRISTOBAL', '2015-10-20 19:59:36', NULL, 1),
(29, 4, 'BERGANTIN', '2015-10-20 19:59:36', NULL, 1),
(30, 4, 'CAIGUA', '2015-10-20 19:59:36', NULL, 1),
(31, 4, 'EL PILAR', '2015-10-20 19:59:36', NULL, 1),
(32, 4, 'NARICUAL', '2015-10-20 19:59:36', NULL, 1),
(33, 5, 'CM. CLARINES', '2015-10-20 19:59:36', NULL, 1),
(34, 5, 'GUANAPE', '2015-10-20 19:59:36', NULL, 1),
(35, 5, 'SABANA DE UCHIRE', '2015-10-20 19:59:36', NULL, 1),
(36, 6, 'CM. ONOTO', '2015-10-20 19:59:36', NULL, 1),
(37, 6, 'SAN PABLO', '2015-10-20 19:59:36', NULL, 1),
(38, 7, 'CM. CANTAURA', '2015-10-20 19:59:36', NULL, 1),
(39, 7, 'LIBERTADOR', '2015-10-20 19:59:36', NULL, 1),
(40, 7, 'SANTA ROSA', '2015-10-20 19:59:36', NULL, 1),
(41, 7, 'URICA', '2015-10-20 19:59:36', NULL, 1),
(42, 8, 'CM. SOLEDAD', '2015-10-20 19:59:36', NULL, 1),
(43, 8, 'MAMO', '2015-10-20 19:59:36', NULL, 1),
(44, 9, 'CM. SAN MATEO', '2015-10-20 19:59:36', NULL, 1),
(45, 9, 'EL CARITO', '2015-10-20 19:59:36', NULL, 1),
(46, 9, 'SANTA INES', '2015-10-20 19:59:36', NULL, 1),
(47, 10, 'CM. PARIAGUAN', '2015-10-20 19:59:36', NULL, 1),
(48, 10, 'ATAPIRIRE', '2015-10-20 19:59:36', NULL, 1),
(49, 10, 'BOCA DEL PAO', '2015-10-20 19:59:36', NULL, 1),
(50, 10, 'EL PAO', '2015-10-20 19:59:36', NULL, 1),
(51, 11, 'CM. MAPIRE', '2015-10-20 19:59:36', NULL, 1),
(52, 11, 'PIAR', '2015-10-20 19:59:36', NULL, 1),
(53, 11, 'SN DIEGO DE CABRUTICA', '2015-10-20 19:59:36', NULL, 1),
(54, 11, 'SANTA CLARA', '2015-10-20 19:59:36', NULL, 1),
(55, 11, 'UVERITO', '2015-10-20 19:59:36', NULL, 1),
(56, 11, 'ZUATA', '2015-10-20 19:59:36', NULL, 1),
(57, 12, 'CM. PUERTO PIRITU', '2015-10-20 19:59:36', NULL, 1),
(58, 12, 'SAN MIGUEL', '2015-10-20 19:59:36', NULL, 1),
(59, 12, 'SUCRE', '2015-10-20 19:59:36', NULL, 1),
(60, 13, 'CM. EL TIGRE', '2015-10-20 19:59:36', NULL, 1),
(61, 14, 'POZUELOS', '2015-10-20 19:59:36', NULL, 1),
(62, 14, 'CM PTO. LA CRUZ', '2015-10-20 19:59:36', NULL, 1),
(63, 15, 'CM. SAN JOSE DE GUANIPA', '2015-10-20 19:59:36', NULL, 1),
(64, 16, 'GUANTA', '2015-10-20 19:59:36', NULL, 1),
(65, 16, 'CHORRERON', '2015-10-20 19:59:36', NULL, 1),
(66, 17, 'PIRITU', '2015-10-20 19:59:36', NULL, 1),
(67, 17, 'SAN FRANCISCO', '2015-10-20 19:59:36', NULL, 1),
(68, 18, 'LECHERIAS', '2015-10-20 19:59:36', NULL, 1),
(69, 18, 'EL MORRO', '2015-10-20 19:59:36', NULL, 1),
(70, 19, 'VALLE GUANAPE', '2015-10-20 19:59:36', NULL, 1),
(71, 19, 'SANTA BARBARA', '2015-10-20 19:59:36', NULL, 1),
(72, 20, 'SANTA ANA', '2015-10-20 19:59:36', NULL, 1),
(73, 20, 'PUEBLO NUEVO', '2015-10-20 19:59:36', NULL, 1),
(74, 21, 'EL CHAPARRO', '2015-10-20 19:59:36', NULL, 1),
(75, 21, 'TOMAS ALFARO CALATRAVA', '2015-10-20 19:59:36', NULL, 1),
(76, 22, 'BOCA UCHIRE', '2015-10-20 19:59:36', NULL, 1),
(77, 22, 'BOCA DE CHAVEZ', '2015-10-20 19:59:36', NULL, 1),
(78, 23, 'ACHAGUAS', '2015-10-20 19:59:36', NULL, 1),
(79, 23, 'APURITO', '2015-10-20 19:59:36', NULL, 1),
(80, 23, 'EL YAGUAL', '2015-10-20 19:59:36', NULL, 1),
(81, 23, 'GUACHARA', '2015-10-20 19:59:36', NULL, 1),
(82, 23, 'MUCURITAS', '2015-10-20 19:59:36', NULL, 1),
(83, 23, 'QUESERAS DEL MEDIO', '2015-10-20 19:59:36', NULL, 1),
(84, 24, 'BRUZUAL', '2015-10-20 19:59:36', NULL, 1),
(85, 24, 'MANTECAL', '2015-10-20 19:59:36', NULL, 1),
(86, 24, 'QUINTERO', '2015-10-20 19:59:36', NULL, 1),
(87, 24, 'SAN VICENTE', '2015-10-20 19:59:36', NULL, 1),
(88, 24, 'RINCON HONDO', '2015-10-20 19:59:36', NULL, 1),
(89, 25, 'GUASDUALITO', '2015-10-20 19:59:36', NULL, 1),
(90, 25, 'ARAMENDI', '2015-10-20 19:59:36', NULL, 1),
(91, 25, 'EL AMPARO', '2015-10-20 19:59:36', NULL, 1),
(92, 25, 'SAN CAMILO', '2015-10-20 19:59:36', NULL, 1),
(93, 25, 'URDANETA', '2015-10-20 19:59:36', NULL, 1),
(94, 26, 'SAN JUAN DE PAYARA', '2015-10-20 19:59:36', NULL, 1),
(95, 26, 'CODAZZI', '2015-10-20 19:59:36', NULL, 1),
(96, 26, 'CUNAVICHE', '2015-10-20 19:59:36', NULL, 1),
(97, 27, 'ELORZA', '2015-10-20 19:59:36', NULL, 1),
(98, 27, 'LA TRINIDAD', '2015-10-20 19:59:36', NULL, 1),
(99, 28, 'SAN FERNANDO', '2015-10-20 19:59:36', NULL, 1),
(100, 28, 'PEÑALVER', '2015-10-20 19:59:36', NULL, 1),
(101, 28, 'EL RECREO', '2015-10-20 19:59:36', NULL, 1),
(102, 28, 'SN RAFAEL DE ATAMAICA', '2015-10-20 19:59:36', NULL, 1),
(103, 29, 'BIRUACA', '2015-10-20 19:59:36', NULL, 1),
(104, 30, 'CM. LAS DELICIAS', '2015-10-20 19:59:36', NULL, 1),
(105, 30, 'CHORONI', '2015-10-20 19:59:36', NULL, 1),
(106, 30, 'MADRE MA DE SAN JOSE', '2015-10-20 19:59:36', NULL, 1),
(107, 30, 'JOAQUIN CRESPO', '2015-10-20 19:59:36', NULL, 1),
(108, 30, 'PEDRO JOSE OVALLES', '2015-10-20 19:59:36', NULL, 1),
(109, 30, 'JOSE CASANOVA GODOY', '2015-10-20 19:59:36', NULL, 1),
(110, 30, 'ANDRES ELOY BLANCO', '2015-10-20 19:59:36', NULL, 1),
(111, 30, 'LOS TACARIGUAS', '2015-10-20 19:59:36', NULL, 1),
(112, 31, 'CM. TURMERO', '2015-10-20 19:59:36', NULL, 1),
(113, 31, 'SAMAN DE GUERE', '2015-10-20 19:59:36', NULL, 1),
(114, 31, 'ALFREDO PACHECO M', '2015-10-20 19:59:36', NULL, 1),
(115, 31, 'CHUAO', '2015-10-20 19:59:36', NULL, 1),
(116, 31, 'AREVALO APONTE', '2015-10-20 19:59:36', NULL, 1),
(117, 32, 'CM. LA VICTORIA', '2015-10-20 19:59:36', NULL, 1),
(118, 32, 'ZUATA', '2015-10-20 19:59:36', NULL, 1),
(119, 32, 'PAO DE ZARATE', '2015-10-20 19:59:36', NULL, 1),
(120, 32, 'CASTOR NIEVES RIOS', '2015-10-20 19:59:36', NULL, 1),
(121, 32, 'LAS GUACAMAYAS', '2015-10-20 19:59:36', NULL, 1),
(122, 33, 'CM. SAN CASIMIRO', '2015-10-20 19:59:36', NULL, 1),
(123, 33, 'VALLE MORIN', '2015-10-20 19:59:36', NULL, 1),
(124, 33, 'GUIRIPA', '2015-10-20 19:59:36', NULL, 1),
(125, 33, 'OLLAS DE CARAMACATE', '2015-10-20 19:59:36', NULL, 1),
(126, 34, 'CM. SAN SEBASTIAN', '2015-10-20 19:59:36', NULL, 1),
(127, 35, 'CM. CAGUA', '2015-10-20 19:59:36', NULL, 1),
(128, 35, 'BELLA VISTA', '2015-10-20 19:59:36', NULL, 1),
(129, 36, 'CM. BARBACOAS', '2015-10-20 19:59:36', NULL, 1),
(130, 36, 'SAN FRANCISCO DE CARA', '2015-10-20 19:59:36', NULL, 1),
(131, 36, 'TAGUAY', '2015-10-20 19:59:36', NULL, 1),
(132, 36, 'LAS PEÑITAS', '2015-10-20 19:59:36', NULL, 1),
(133, 37, 'CM. VILLA DE CURA', '2015-10-20 19:59:36', NULL, 1),
(134, 37, 'MAGDALENO', '2015-10-20 19:59:36', NULL, 1),
(135, 37, 'SAN FRANCISCO DE ASIS', '2015-10-20 19:59:36', NULL, 1),
(136, 37, 'VALLES DE TUCUTUNEMO', '2015-10-20 19:59:36', NULL, 1),
(137, 37, 'PQ AUGUSTO MIJARES', '2015-10-20 19:59:36', NULL, 1),
(138, 38, 'CM. PALO NEGRO', '2015-10-20 19:59:36', NULL, 1),
(139, 38, 'SAN MARTIN DE PORRES', '2015-10-20 19:59:36', NULL, 1),
(140, 39, 'CM. SANTA CRUZ', '2015-10-20 19:59:36', NULL, 1),
(141, 40, 'CM. SAN MATEO', '2015-10-20 19:59:36', NULL, 1),
(142, 41, 'CM. LAS TEJERIAS', '2015-10-20 19:59:36', NULL, 1),
(143, 41, 'TIARA', '2015-10-20 19:59:36', NULL, 1),
(144, 42, 'CM. EL LIMON', '2015-10-20 19:59:36', NULL, 1),
(145, 42, 'CA A DE AZUCAR', '2015-10-20 19:59:36', NULL, 1),
(146, 43, 'CM. COLONIA TOVAR', '2015-10-20 19:59:36', NULL, 1),
(147, 44, 'CM. CAMATAGUA', '2015-10-20 19:59:36', NULL, 1),
(148, 44, 'CARMEN DE CURA', '2015-10-20 19:59:36', NULL, 1),
(149, 45, 'CM. EL CONSEJO', '2015-10-20 19:59:36', NULL, 1),
(150, 46, 'CM. SANTA RITA', '2015-10-20 19:59:36', NULL, 1),
(151, 46, 'FRANCISCO DE MIRANDA', '2015-10-20 19:59:36', NULL, 1),
(152, 46, 'MONS FELICIANO G', '2015-10-20 19:59:36', NULL, 1),
(153, 47, 'OCUMARE DE LA COSTA', '2015-10-20 19:59:36', NULL, 1),
(154, 48, 'ARISMENDI', '2015-10-20 19:59:36', NULL, 1),
(155, 48, 'GUADARRAMA', '2015-10-20 19:59:36', NULL, 1),
(156, 48, 'LA UNION', '2015-10-20 19:59:36', NULL, 1),
(157, 48, 'SAN ANTONIO', '2015-10-20 19:59:36', NULL, 1),
(158, 49, 'ALFREDO A LARRIVA', '2015-10-20 19:59:36', NULL, 1),
(159, 49, 'BARINAS', '2015-10-20 19:59:36', NULL, 1),
(160, 49, 'SAN SILVESTRE', '2015-10-20 19:59:36', NULL, 1),
(161, 49, 'SANTA INES', '2015-10-20 19:59:36', NULL, 1),
(162, 49, 'SANTA LUCIA', '2015-10-20 19:59:36', NULL, 1),
(163, 49, 'TORUNOS', '2015-10-20 19:59:36', NULL, 1),
(164, 49, 'EL CARMEN', '2015-10-20 19:59:36', NULL, 1),
(165, 49, 'ROMULO BETANCOURT', '2015-10-20 19:59:36', NULL, 1),
(166, 49, 'CORAZON DE JESUS', '2015-10-20 19:59:36', NULL, 1),
(167, 49, 'RAMON I MENDEZ', '2015-10-20 19:59:36', NULL, 1),
(168, 49, 'ALTO BARINAS', '2015-10-20 19:59:36', NULL, 1),
(169, 49, 'MANUEL P FAJARDO', '2015-10-20 19:59:36', NULL, 1),
(170, 49, 'JUAN A RODRIGUEZ D', '2015-10-20 19:59:36', NULL, 1),
(171, 49, 'DOMINGA ORTIZ P', '2015-10-20 19:59:36', NULL, 1),
(172, 50, 'ALTAMIRA', '2015-10-20 19:59:36', NULL, 1),
(173, 50, 'BARINITAS', '2015-10-20 19:59:36', NULL, 1),
(174, 50, 'CALDERAS', '2015-10-20 19:59:36', NULL, 1),
(175, 51, 'SANTA BARBARA', '2015-10-20 19:59:36', NULL, 1),
(176, 51, 'JOSE IGNACIO DEL PUMAR', '2015-10-20 19:59:36', NULL, 1),
(177, 51, 'RAMON IGNACIO MENDEZ', '2015-10-20 19:59:36', NULL, 1),
(178, 51, 'PEDRO BRICEÑO MENDEZ', '2015-10-20 19:59:36', NULL, 1),
(179, 52, 'EL REAL', '2015-10-20 19:59:36', NULL, 1),
(180, 52, 'LA LUZ', '2015-10-20 19:59:36', NULL, 1),
(181, 52, 'OBISPOS', '2015-10-20 19:59:36', NULL, 1),
(182, 52, 'LOS GUASIMITOS', '2015-10-20 19:59:36', NULL, 1),
(183, 53, 'CIUDAD BOLIVIA', '2015-10-20 19:59:36', NULL, 1),
(184, 53, 'IGNACIO BRICEÑO', '2015-10-20 19:59:36', NULL, 1),
(185, 53, 'PAEZ', '2015-10-20 19:59:36', NULL, 1),
(186, 53, 'JOSE FELIX RIBAS', '2015-10-20 19:59:36', NULL, 1),
(187, 54, 'DOLORES', '2015-10-20 19:59:36', NULL, 1),
(188, 54, 'LIBERTAD', '2015-10-20 19:59:36', NULL, 1),
(189, 54, 'PALACIO FAJARDO', '2015-10-20 19:59:36', NULL, 1),
(190, 54, 'SANTA ROSA', '2015-10-20 19:59:36', NULL, 1),
(191, 55, 'CIUDAD DE NUTRIAS', '2015-10-20 19:59:36', NULL, 1),
(192, 55, 'EL REGALO', '2015-10-20 19:59:36', NULL, 1),
(193, 55, 'PUERTO DE NUTRIAS', '2015-10-20 19:59:36', NULL, 1),
(194, 55, 'SANTA CATALINA', '2015-10-20 19:59:36', NULL, 1),
(195, 56, 'RODRIGUEZ DOMINGUEZ', '2015-10-20 19:59:36', NULL, 1),
(196, 56, 'SABANETA', '2015-10-20 19:59:36', NULL, 1),
(197, 57, 'TICOPORO', '2015-10-20 19:59:36', NULL, 1),
(198, 57, 'NICOLAS PULIDO', '2015-10-20 19:59:36', NULL, 1),
(199, 57, 'ANDRES BELLO', '2015-10-20 19:59:36', NULL, 1),
(200, 58, 'BARRANCAS', '2015-10-20 19:59:36', NULL, 1),
(201, 58, 'EL SOCORRO', '2015-10-20 19:59:36', NULL, 1),
(202, 58, 'MASPARRITO', '2015-10-20 19:59:36', NULL, 1),
(203, 59, 'EL CANTON', '2015-10-20 19:59:36', NULL, 1),
(204, 59, 'SANTA CRUZ DE GUACAS', '2015-10-20 19:59:36', NULL, 1),
(205, 59, 'PUERTO VIVAS', '2015-10-20 19:59:36', NULL, 1),
(206, 60, 'SIMON BOLIVAR', '2015-10-20 19:59:36', NULL, 1),
(207, 60, 'ONCE DE ABRIL', '2015-10-20 19:59:36', NULL, 1),
(208, 60, 'VISTA AL SOL', '2015-10-20 19:59:36', NULL, 1),
(209, 60, 'CHIRICA', '2015-10-20 19:59:36', NULL, 1),
(210, 60, 'DALLA COSTA', '2015-10-20 19:59:36', NULL, 1),
(211, 60, 'CACHAMAY', '2015-10-20 19:59:36', NULL, 1),
(212, 60, 'UNIVERSIDAD', '2015-10-20 19:59:36', NULL, 1),
(213, 60, 'UNARE', '2015-10-20 19:59:36', NULL, 1),
(214, 60, 'YOCOIMA', '2015-10-20 19:59:36', NULL, 1),
(215, 60, 'POZO VERDE', '2015-10-20 19:59:36', NULL, 1),
(216, 61, 'CM. CAICARA DEL ORINOCO', '2015-10-20 19:59:36', NULL, 1),
(217, 61, 'ASCENSION FARRERAS', '2015-10-20 19:59:36', NULL, 1),
(218, 61, 'ALTAGRACIA', '2015-10-20 19:59:36', NULL, 1),
(219, 61, 'LA URBANA', '2015-10-20 19:59:36', NULL, 1),
(220, 61, 'GUANIAMO', '2015-10-20 19:59:36', NULL, 1),
(221, 61, 'PIJIGUAOS', '2015-10-20 19:59:36', NULL, 1),
(222, 62, 'CATEDRAL', '2015-10-20 19:59:36', NULL, 1),
(223, 62, 'AGUA SALADA', '2015-10-20 19:59:36', NULL, 1),
(224, 62, 'LA SABANITA', '2015-10-20 19:59:36', NULL, 1),
(225, 62, 'VISTA HERMOSA', '2015-10-20 19:59:36', NULL, 1),
(226, 62, 'MARHUANTA', '2015-10-20 19:59:36', NULL, 1),
(227, 62, 'JOSE ANTONIO PAEZ', '2015-10-20 19:59:36', NULL, 1),
(228, 62, 'ORINOCO', '2015-10-20 19:59:36', NULL, 1),
(229, 62, 'PANAPANA', '2015-10-20 19:59:36', NULL, 1),
(230, 62, 'ZEA', '2015-10-20 19:59:36', NULL, 1),
(231, 63, 'CM. UPATA', '2015-10-20 19:59:36', NULL, 1),
(232, 63, 'ANDRES ELOY BLANCO', '2015-10-20 19:59:36', NULL, 1),
(233, 63, 'PEDRO COVA', '2015-10-20 19:59:36', NULL, 1),
(234, 64, 'CM. GUASIPATI', '2015-10-20 19:59:36', NULL, 1),
(235, 64, 'SALOM', '2015-10-20 19:59:36', NULL, 1),
(236, 65, 'CM. MARIPA', '2015-10-20 19:59:36', NULL, 1),
(237, 65, 'ARIPAO', '2015-10-20 19:59:36', NULL, 1),
(238, 65, 'LAS MAJADAS', '2015-10-20 19:59:36', NULL, 1),
(239, 65, 'MOITACO', '2015-10-20 19:59:36', NULL, 1),
(240, 65, 'GUARATARO', '2015-10-20 19:59:36', NULL, 1),
(241, 66, 'CM. TUMEREMO', '2015-10-20 19:59:36', NULL, 1),
(242, 66, 'DALLA COSTA', '2015-10-20 19:59:36', NULL, 1),
(243, 66, 'SAN ISIDRO', '2015-10-20 19:59:36', NULL, 1),
(244, 67, 'CM. CIUDAD PIAR', '2015-10-20 19:59:36', NULL, 1),
(245, 67, 'SAN FRANCISCO', '2015-10-20 19:59:36', NULL, 1),
(246, 67, 'BARCELONETA', '2015-10-20 19:59:36', NULL, 1),
(247, 67, 'SANTA BARBARA', '2015-10-20 19:59:36', NULL, 1),
(248, 68, 'CM. SANTA ELENA DE UAIREN', '2015-10-20 19:59:36', NULL, 1),
(249, 68, 'IKABARU', '2015-10-20 19:59:36', NULL, 1),
(250, 69, 'CM. EL CALLAO', '2015-10-20 19:59:36', NULL, 1),
(251, 70, 'CM. EL PALMAR', '2015-10-20 19:59:36', NULL, 1),
(252, 71, 'BEJUMA', '2015-10-20 19:59:36', NULL, 1),
(253, 71, 'CANOABO', '2015-10-20 19:59:36', NULL, 1),
(254, 71, 'SIMON BOLIVAR', '2015-10-20 19:59:36', NULL, 1),
(255, 72, 'GUIGUE', '2015-10-20 19:59:36', NULL, 1),
(256, 72, 'BELEN', '2015-10-20 19:59:36', NULL, 1),
(257, 72, 'TACARIGUA', '2015-10-20 19:59:36', NULL, 1),
(258, 73, 'MARIARA', '2015-10-20 19:59:36', NULL, 1),
(259, 73, 'AGUAS CALIENTES', '2015-10-20 19:59:36', NULL, 1),
(260, 74, 'GUACARA', '2015-10-20 19:59:36', NULL, 1),
(261, 74, 'CIUDAD ALIANZA', '2015-10-20 19:59:36', NULL, 1),
(262, 74, 'YAGUA', '2015-10-20 19:59:36', NULL, 1),
(263, 75, 'MONTALBAN', '2015-10-20 19:59:36', NULL, 1),
(264, 76, 'MORON', '2015-10-20 19:59:36', NULL, 1),
(265, 76, 'URAMA', '2015-10-20 19:59:36', NULL, 1),
(266, 77, 'DEMOCRACIA', '2015-10-20 19:59:36', NULL, 1),
(267, 77, 'FRATERNIDAD', '2015-10-20 19:59:36', NULL, 1),
(268, 77, 'GOAIGOAZA', '2015-10-20 19:59:36', NULL, 1),
(269, 77, 'JUAN JOSE FLORES', '2015-10-20 19:59:36', NULL, 1),
(270, 77, 'BARTOLOME SALOM', '2015-10-20 19:59:36', NULL, 1),
(271, 77, 'UNION', '2015-10-20 19:59:36', NULL, 1),
(272, 77, 'BORBURATA', '2015-10-20 19:59:36', NULL, 1),
(273, 77, 'PATANEMO', '2015-10-20 19:59:36', NULL, 1),
(274, 78, 'SAN JOAQUIN', '2015-10-20 19:59:36', NULL, 1),
(275, 79, 'CANDELARIA', '2015-10-20 19:59:36', NULL, 1),
(276, 79, 'CATEDRAL', '2015-10-20 19:59:36', NULL, 1),
(277, 79, 'EL SOCORRO', '2015-10-20 19:59:36', NULL, 1),
(278, 79, 'MIGUEL PEÑA', '2015-10-20 19:59:36', NULL, 1),
(279, 79, 'SAN BLAS', '2015-10-20 19:59:36', NULL, 1),
(280, 79, 'SAN JOSE', '2015-10-20 19:59:36', NULL, 1),
(281, 79, 'SANTA ROSA', '2015-10-20 19:59:36', NULL, 1),
(282, 79, 'RAFAEL URDANETA', '2015-10-20 19:59:36', NULL, 1),
(283, 79, 'NEGRO PRIMERO', '2015-10-20 19:59:36', NULL, 1),
(284, 80, 'MIRANDA', '2015-10-20 19:59:36', NULL, 1),
(285, 81, 'U LOS GUAYOS', '2015-10-20 19:59:36', NULL, 1),
(286, 82, 'NAGUANAGUA', '2015-10-20 19:59:36', NULL, 1),
(287, 83, 'URB SAN DIEGO', '2015-10-20 19:59:36', NULL, 1),
(288, 84, 'U TOCUYITO', '2015-10-20 19:59:36', NULL, 1),
(289, 84, 'U INDEPENDENCIA', '2015-10-20 19:59:36', NULL, 1),
(290, 85, 'COJEDES', '2015-10-20 19:59:36', NULL, 1),
(291, 85, 'JUAN DE MATA SUAREZ', '2015-10-20 19:59:36', NULL, 1),
(292, 86, 'TINAQUILLO', '2015-10-20 19:59:36', NULL, 1),
(293, 87, 'EL BAUL', '2015-10-20 19:59:36', NULL, 1),
(294, 87, 'SUCRE', '2015-10-20 19:59:36', NULL, 1),
(295, 88, 'EL PAO', '2015-10-20 19:59:36', NULL, 1),
(296, 89, 'LIBERTAD DE COJEDES', '2015-10-20 19:59:36', NULL, 1),
(297, 89, 'EL AMPARO', '2015-10-20 19:59:36', NULL, 1),
(298, 90, 'SAN CARLOS DE AUSTRIA', '2015-10-20 19:59:36', NULL, 1),
(299, 90, 'JUAN ANGEL BRAVO', '2015-10-20 19:59:36', NULL, 1),
(300, 90, 'MANUEL MANRIQUE', '2015-10-20 19:59:36', NULL, 1),
(301, 91, 'GRL/JEFE JOSE L SILVA', '2015-10-20 19:59:36', NULL, 1),
(302, 92, 'MACAPO', '2015-10-20 19:59:36', NULL, 1),
(303, 92, 'LA AGUADITA', '2015-10-20 19:59:36', NULL, 1),
(304, 93, 'ROMULO GALLEGOS', '2015-10-20 19:59:36', NULL, 1),
(305, 94, 'SAN JUAN DE LOS CAYOS', '2015-10-20 19:59:36', NULL, 1),
(306, 94, 'CAPADARE', '2015-10-20 19:59:36', NULL, 1),
(307, 94, 'LA PASTORA', '2015-10-20 19:59:36', NULL, 1),
(308, 94, 'LIBERTADOR', '2015-10-20 19:59:36', NULL, 1),
(309, 95, 'SAN LUIS', '2015-10-20 19:59:36', NULL, 1),
(310, 95, 'ARACUA', '2015-10-20 19:59:36', NULL, 1),
(311, 95, 'LA PEÑA', '2015-10-20 19:59:36', NULL, 1),
(312, 96, 'CAPATARIDA', '2015-10-20 19:59:36', NULL, 1),
(313, 96, 'BOROJO', '2015-10-20 19:59:36', NULL, 1),
(314, 96, 'SEQUE', '2015-10-20 19:59:36', NULL, 1),
(315, 96, 'ZAZARIDA', '2015-10-20 19:59:36', NULL, 1),
(316, 96, 'BARIRO', '2015-10-20 19:59:36', NULL, 1),
(317, 96, 'GUAJIRO', '2015-10-20 19:59:36', NULL, 1),
(318, 97, 'NORTE', '2015-10-20 19:59:36', NULL, 1),
(319, 97, 'CARIRUBANA', '2015-10-20 19:59:36', NULL, 1),
(320, 97, 'PUNTA CARDON', '2015-10-20 19:59:36', NULL, 1),
(321, 97, 'SANTA ANA', '2015-10-20 19:59:36', NULL, 1),
(322, 98, 'LA VELA DE CORO', '2015-10-20 19:59:36', NULL, 1),
(323, 98, 'ACURIGUA', '2015-10-20 19:59:36', NULL, 1),
(324, 98, 'GUAIBACOA', '2015-10-20 19:59:36', NULL, 1),
(325, 98, 'MACORUCA', '2015-10-20 19:59:36', NULL, 1),
(326, 98, 'LAS CALDERAS', '2015-10-20 19:59:36', NULL, 1),
(327, 99, 'PEDREGAL', '2015-10-20 19:59:36', NULL, 1),
(328, 99, 'AGUA CLARA', '2015-10-20 19:59:36', NULL, 1),
(329, 99, 'AVARIA', '2015-10-20 19:59:36', NULL, 1),
(330, 99, 'PIEDRA GRANDE', '2015-10-20 19:59:36', NULL, 1),
(331, 99, 'PURURECHE', '2015-10-20 19:59:36', NULL, 1),
(332, 100, 'PUEBLO NUEVO', '2015-10-20 19:59:36', NULL, 1),
(333, 100, 'ADICORA', '2015-10-20 19:59:36', NULL, 1),
(334, 100, 'BARAIVED', '2015-10-20 19:59:36', NULL, 1),
(335, 100, 'BUENA VISTA', '2015-10-20 19:59:36', NULL, 1),
(336, 100, 'JADACAQUIVA', '2015-10-20 19:59:36', NULL, 1),
(337, 100, 'MORUY', '2015-10-20 19:59:36', NULL, 1),
(338, 100, 'EL VINCULO', '2015-10-20 19:59:36', NULL, 1),
(339, 100, 'EL HATO', '2015-10-20 19:59:36', NULL, 1),
(340, 100, 'ADAURE', '2015-10-20 19:59:36', NULL, 1),
(341, 101, 'CHURUGUARA', '2015-10-20 19:59:36', NULL, 1),
(342, 101, 'AGUA LARGA', '2015-10-20 19:59:36', NULL, 1),
(343, 101, 'INDEPENDENCIA', '2015-10-20 19:59:36', NULL, 1),
(344, 101, 'MAPARARI', '2015-10-20 19:59:36', NULL, 1),
(345, 101, 'EL PAUJI', '2015-10-20 19:59:36', NULL, 1),
(346, 102, 'MENE DE MAUROA', '2015-10-20 19:59:36', NULL, 1),
(347, 102, 'CASIGUA', '2015-10-20 19:59:36', NULL, 1),
(348, 102, 'SAN FELIX', '2015-10-20 19:59:36', NULL, 1),
(349, 103, 'SAN ANTONIO', '2015-10-20 19:59:36', NULL, 1),
(350, 103, 'SAN GABRIEL', '2015-10-20 19:59:36', NULL, 1),
(351, 103, 'SANTA ANA', '2015-10-20 19:59:36', NULL, 1),
(352, 103, 'GUZMAN GUILLERMO', '2015-10-20 19:59:36', NULL, 1),
(353, 103, 'MITARE', '2015-10-20 19:59:36', NULL, 1),
(354, 103, 'SABANETA', '2015-10-20 19:59:36', NULL, 1),
(355, 103, 'RIO SECO', '2015-10-20 19:59:36', NULL, 1),
(356, 104, 'CABURE', '2015-10-20 19:59:36', NULL, 1),
(357, 104, 'CURIMAGUA', '2015-10-20 19:59:36', NULL, 1),
(358, 104, 'COLINA', '2015-10-20 19:59:36', NULL, 1),
(359, 105, 'TUCACAS', '2015-10-20 19:59:36', NULL, 1),
(360, 105, 'BOCA DE AROA', '2015-10-20 19:59:36', NULL, 1),
(361, 106, 'PUERTO CUMAREBO', '2015-10-20 19:59:36', NULL, 1),
(362, 106, 'LA CIENAGA', '2015-10-20 19:59:36', NULL, 1),
(363, 106, 'LA SOLEDAD', '2015-10-20 19:59:36', NULL, 1),
(364, 106, 'PUEBLO CUMAREBO', '2015-10-20 19:59:36', NULL, 1),
(365, 106, 'ZAZARIDA', '2015-10-20 19:59:36', NULL, 1),
(366, 107, 'CM. DABAJURO', '2015-10-20 19:59:36', NULL, 1),
(367, 108, 'CHICHIRIVICHE', '2015-10-20 19:59:36', NULL, 1),
(368, 108, 'BOCA DE TOCUYO', '2015-10-20 19:59:36', NULL, 1),
(369, 108, 'TOCUYO DE LA COSTA', '2015-10-20 19:59:36', NULL, 1),
(370, 109, 'LOS TAQUES', '2015-10-20 19:59:36', NULL, 1),
(371, 109, 'JUDIBANA', '2015-10-20 19:59:36', NULL, 1),
(372, 110, 'PIRITU', '2015-10-20 19:59:36', NULL, 1),
(373, 110, 'SAN JOSE DE LA COSTA', '2015-10-20 19:59:36', NULL, 1),
(374, 111, 'STA.CRUZ DE BUCARAL', '2015-10-20 19:59:36', NULL, 1),
(375, 111, 'EL CHARAL', '2015-10-20 19:59:36', NULL, 1),
(376, 111, 'LAS VEGAS DEL TUY', '2015-10-20 19:59:36', NULL, 1),
(377, 112, 'CM. MIRIMIRE', '2015-10-20 19:59:36', NULL, 1),
(378, 113, 'JACURA', '2015-10-20 19:59:36', NULL, 1),
(379, 113, 'AGUA LINDA', '2015-10-20 19:59:36', NULL, 1),
(380, 113, 'ARAURIMA', '2015-10-20 19:59:36', NULL, 1),
(381, 114, 'CM. YARACAL', '2015-10-20 19:59:36', NULL, 1),
(382, 115, 'CM. PALMA SOLA', '2015-10-20 19:59:36', NULL, 1),
(383, 116, 'SUCRE', '2015-10-20 19:59:36', NULL, 1),
(384, 116, 'PECAYA', '2015-10-20 19:59:36', NULL, 1),
(385, 117, 'URUMACO', '2015-10-20 19:59:36', NULL, 1),
(386, 117, 'BRUZUAL', '2015-10-20 19:59:36', NULL, 1),
(387, 118, 'CM. TOCOPERO', '2015-10-20 19:59:36', NULL, 1),
(388, 119, 'VALLE DE LA PASCUA', '2015-10-20 19:59:36', NULL, 1),
(389, 119, 'ESPINO', '2015-10-20 19:59:36', NULL, 1),
(390, 120, 'EL SOMBRERO', '2015-10-20 19:59:36', NULL, 1),
(391, 120, 'SOSA', '2015-10-20 19:59:36', NULL, 1),
(392, 121, 'CALABOZO', '2015-10-20 19:59:36', NULL, 1),
(393, 121, 'EL CALVARIO', '2015-10-20 19:59:36', NULL, 1),
(394, 121, 'EL RASTRO', '2015-10-20 19:59:36', NULL, 1),
(395, 121, 'GUARDATINAJAS', '2015-10-20 19:59:36', NULL, 1),
(396, 122, 'ALTAGRACIA DE ORITUCO', '2015-10-20 19:59:36', NULL, 1),
(397, 122, 'LEZAMA', '2015-10-20 19:59:36', NULL, 1),
(398, 122, 'LIBERTAD DE ORITUCO', '2015-10-20 19:59:36', NULL, 1),
(399, 122, 'SAN FCO DE MACAIRA', '2015-10-20 19:59:36', NULL, 1),
(400, 122, 'SAN RAFAEL DE ORITUCO', '2015-10-20 19:59:36', NULL, 1),
(401, 122, 'SOUBLETTE', '2015-10-20 19:59:36', NULL, 1),
(402, 122, 'PASO REAL DE MACAIRA', '2015-10-20 19:59:36', NULL, 1),
(403, 123, 'TUCUPIDO', '2015-10-20 19:59:36', NULL, 1),
(404, 123, 'SAN RAFAEL DE LAYA', '2015-10-20 19:59:36', NULL, 1),
(405, 124, 'SAN JUAN DE LOS MORROS', '2015-10-20 19:59:36', NULL, 1),
(406, 124, 'PARAPARA', '2015-10-20 19:59:36', NULL, 1),
(407, 124, 'CANTAGALLO', '2015-10-20 19:59:36', NULL, 1),
(408, 125, 'ZARAZA', '2015-10-20 19:59:36', NULL, 1),
(409, 125, 'SAN JOSE DE UNARE', '2015-10-20 19:59:36', NULL, 1),
(410, 126, 'CAMAGUAN', '2015-10-20 19:59:36', NULL, 1),
(411, 126, 'PUERTO MIRANDA', '2015-10-20 19:59:36', NULL, 1),
(412, 126, 'UVERITO', '2015-10-20 19:59:36', NULL, 1),
(413, 127, 'SAN JOSE DE GUARIBE', '2015-10-20 19:59:36', NULL, 1),
(414, 128, 'LAS MERCEDES', '2015-10-20 19:59:36', NULL, 1),
(415, 128, 'STA RITA DE MANAPIRE', '2015-10-20 19:59:36', NULL, 1),
(416, 128, 'CABRUTA', '2015-10-20 19:59:36', NULL, 1),
(417, 129, 'EL SOCORRO', '2015-10-20 19:59:36', NULL, 1),
(418, 130, 'ORTIZ', '2015-10-20 19:59:36', NULL, 1),
(419, 130, 'SAN FCO. DE TIZNADOS', '2015-10-20 19:59:36', NULL, 1),
(420, 130, 'SAN JOSE DE TIZNADOS', '2015-10-20 19:59:36', NULL, 1),
(421, 130, 'S LORENZO DE TIZNADOS', '2015-10-20 19:59:36', NULL, 1),
(422, 131, 'SANTA MARIA DE IPIRE', '2015-10-20 19:59:36', NULL, 1),
(423, 131, 'ALTAMIRA', '2015-10-20 19:59:36', NULL, 1),
(424, 132, 'CHAGUARAMAS', '2015-10-20 19:59:36', NULL, 1),
(425, 133, 'GUAYABAL', '2015-10-20 19:59:36', NULL, 1),
(426, 133, 'CAZORLA', '2015-10-20 19:59:36', NULL, 1),
(427, 134, 'FREITEZ', '2015-10-20 19:59:36', NULL, 1),
(428, 134, 'JOSE MARIA BLANCO', '2015-10-20 19:59:36', NULL, 1),
(429, 135, 'CATEDRAL', '2015-10-20 19:59:36', NULL, 1),
(430, 135, 'LA CONCEPCION', '2015-10-20 19:59:36', NULL, 1),
(431, 135, 'SANTA ROSA', '2015-10-20 19:59:36', NULL, 1),
(432, 135, 'UNION', '2015-10-20 19:59:36', NULL, 1),
(433, 135, 'EL CUJI', '2015-10-20 19:59:36', NULL, 1),
(434, 135, 'TAMACA', '2015-10-20 19:59:36', NULL, 1),
(435, 135, 'JUAN DE VILLEGAS', '2015-10-20 19:59:36', NULL, 1),
(436, 135, 'AGUEDO F. ALVARADO', '2015-10-20 19:59:36', NULL, 1),
(437, 135, 'BUENA VISTA', '2015-10-20 19:59:36', NULL, 1),
(438, 135, 'JUAREZ', '2015-10-20 19:59:36', NULL, 1),
(439, 136, 'JUAN B RODRIGUEZ', '2015-10-20 19:59:36', NULL, 1),
(440, 136, 'DIEGO DE LOZADA', '2015-10-20 19:59:36', NULL, 1),
(441, 136, 'SAN MIGUEL', '2015-10-20 19:59:36', NULL, 1),
(442, 136, 'CUARA', '2015-10-20 19:59:36', NULL, 1),
(443, 136, 'PARAISO DE SAN JOSE', '2015-10-20 19:59:36', NULL, 1),
(444, 136, 'TINTORERO', '2015-10-20 19:59:36', NULL, 1),
(445, 136, 'JOSE BERNARDO DORANTE', '2015-10-20 19:59:36', NULL, 1),
(446, 136, 'CRNEL. MARIANO PERAZA', '2015-10-20 19:59:36', NULL, 1),
(447, 137, 'BOLIVAR', '2015-10-20 19:59:36', NULL, 1),
(448, 137, 'ANZOATEGUI', '2015-10-20 19:59:36', NULL, 1),
(449, 137, 'GUARICO', '2015-10-20 19:59:36', NULL, 1),
(450, 137, 'HUMOCARO ALTO', '2015-10-20 19:59:36', NULL, 1),
(451, 137, 'HUMOCARO BAJO', '2015-10-20 19:59:36', NULL, 1),
(452, 137, 'MORAN', '2015-10-20 19:59:36', NULL, 1),
(453, 137, 'HILARIO LUNA Y LUNA', '2015-10-20 19:59:36', NULL, 1),
(454, 137, 'LA CANDELARIA', '2015-10-20 19:59:36', NULL, 1),
(455, 138, 'CABUDARE', '2015-10-20 19:59:36', NULL, 1),
(456, 138, 'JOSE G. BASTIDAS', '2015-10-20 19:59:36', NULL, 1),
(457, 138, 'AGUA VIVA', '2015-10-20 19:59:36', NULL, 1),
(458, 139, 'TRINIDAD SAMUEL', '2015-10-20 19:59:36', NULL, 1),
(459, 139, 'ANTONIO DIAZ', '2015-10-20 19:59:36', NULL, 1),
(460, 139, 'CAMACARO', '2015-10-20 19:59:36', NULL, 1),
(461, 139, 'CASTAÑEDA', '2015-10-20 19:59:36', NULL, 1),
(462, 139, 'CHIQUINQUIRA', '2015-10-20 19:59:36', NULL, 1),
(463, 139, 'ESPINOZA LOS MONTEROS', '2015-10-20 19:59:36', NULL, 1),
(464, 139, 'LARA', '2015-10-20 19:59:36', NULL, 1),
(465, 139, 'MANUEL MORILLO', '2015-10-20 19:59:36', NULL, 1),
(466, 139, 'MONTES DE OCA', '2015-10-20 19:59:36', NULL, 1),
(467, 139, 'TORRES', '2015-10-20 19:59:36', NULL, 1),
(468, 139, 'EL BLANCO', '2015-10-20 19:59:36', NULL, 1),
(469, 139, 'MONTA A VERDE', '2015-10-20 19:59:36', NULL, 1),
(470, 139, 'HERIBERTO ARROYO', '2015-10-20 19:59:36', NULL, 1),
(471, 139, 'LAS MERCEDES', '2015-10-20 19:59:36', NULL, 1),
(472, 139, 'CECILIO ZUBILLAGA', '2015-10-20 19:59:36', NULL, 1),
(473, 139, 'REYES VARGAS', '2015-10-20 19:59:36', NULL, 1),
(474, 139, 'ALTAGRACIA', '2015-10-20 19:59:36', NULL, 1),
(475, 140, 'SIQUISIQUE', '2015-10-20 19:59:36', NULL, 1),
(476, 140, 'SAN MIGUEL', '2015-10-20 19:59:36', NULL, 1),
(477, 140, 'XAGUAS', '2015-10-20 19:59:36', NULL, 1),
(478, 140, 'MOROTURO', '2015-10-20 19:59:36', NULL, 1),
(479, 141, 'PIO TAMAYO', '2015-10-20 19:59:36', NULL, 1),
(480, 141, 'YACAMBU', '2015-10-20 19:59:36', NULL, 1),
(481, 141, 'QBDA. HONDA DE GUACHE', '2015-10-20 19:59:36', NULL, 1),
(482, 142, 'SARARE', '2015-10-20 19:59:36', NULL, 1),
(483, 142, 'GUSTAVO VEGAS LEON', '2015-10-20 19:59:36', NULL, 1),
(484, 142, 'BURIA', '2015-10-20 19:59:36', NULL, 1),
(485, 143, 'GABRIEL PICON G.', '2015-10-20 19:59:36', NULL, 1),
(486, 143, 'HECTOR AMABLE MORA', '2015-10-20 19:59:36', NULL, 1),
(487, 143, 'JOSE NUCETE SARDI', '2015-10-20 19:59:36', NULL, 1),
(488, 143, 'PULIDO MENDEZ', '2015-10-20 19:59:36', NULL, 1),
(489, 143, 'PTE. ROMULO GALLEGOS', '2015-10-20 19:59:36', NULL, 1),
(490, 143, 'PRESIDENTE BETANCOURT', '2015-10-20 19:59:36', NULL, 1),
(491, 143, 'PRESIDENTE PAEZ', '2015-10-20 19:59:36', NULL, 1),
(492, 144, 'CM. LA AZULITA', '2015-10-20 19:59:36', NULL, 1),
(493, 145, 'CM. CANAGUA', '2015-10-20 19:59:36', NULL, 1),
(494, 145, 'CAPURI', '2015-10-20 19:59:36', NULL, 1),
(495, 145, 'CHACANTA', '2015-10-20 19:59:36', NULL, 1),
(496, 145, 'EL MOLINO', '2015-10-20 19:59:36', NULL, 1),
(497, 145, 'GUAIMARAL', '2015-10-20 19:59:36', NULL, 1),
(498, 145, 'MUCUTUY', '2015-10-20 19:59:36', NULL, 1),
(499, 145, 'MUCUCHACHI', '2015-10-20 19:59:36', NULL, 1),
(500, 146, 'ACEQUIAS', '2015-10-20 19:59:36', NULL, 1),
(501, 146, 'JAJI', '2015-10-20 19:59:36', NULL, 1),
(502, 146, 'LA MESA', '2015-10-20 19:59:36', NULL, 1),
(503, 146, 'SAN JOSE', '2015-10-20 19:59:36', NULL, 1),
(504, 146, 'MONTALBAN', '2015-10-20 19:59:36', NULL, 1),
(505, 146, 'MATRIZ', '2015-10-20 19:59:36', NULL, 1),
(506, 146, 'FERNANDEZ PEÑA', '2015-10-20 19:59:36', NULL, 1),
(507, 147, 'CM. GUARAQUE', '2015-10-20 19:59:36', NULL, 1),
(508, 147, 'MESA DE QUINTERO', '2015-10-20 19:59:36', NULL, 1),
(509, 147, 'RIO NEGRO', '2015-10-20 19:59:36', NULL, 1),
(510, 148, 'CM. ARAPUEY', '2015-10-20 19:59:36', NULL, 1),
(511, 148, 'PALMIRA', '2015-10-20 19:59:36', NULL, 1),
(512, 149, 'CM. TORONDOY', '2015-10-20 19:59:36', NULL, 1),
(513, 149, 'SAN CRISTOBAL DE T', '2015-10-20 19:59:36', NULL, 1),
(514, 150, 'ARIAS', '2015-10-20 19:59:36', NULL, 1),
(515, 150, 'SAGRARIO', '2015-10-20 19:59:36', NULL, 1),
(516, 150, 'MILLA', '2015-10-20 19:59:36', NULL, 1),
(517, 150, 'EL LLANO', '2015-10-20 19:59:36', NULL, 1),
(518, 150, 'JUAN RODRIGUEZ SUAREZ', '2015-10-20 19:59:36', NULL, 1),
(519, 150, 'JACINTO PLAZA', '2015-10-20 19:59:36', NULL, 1),
(520, 150, 'DOMINGO PEÑA', '2015-10-20 19:59:36', NULL, 1),
(521, 150, 'GONZALO PICON FEBRES', '2015-10-20 19:59:36', NULL, 1),
(522, 150, 'OSUNA RODRIGUEZ', '2015-10-20 19:59:36', NULL, 1),
(523, 150, 'LASSO DE LA VEGA', '2015-10-20 19:59:36', NULL, 1),
(524, 150, 'CARACCIOLO PARRA P', '2015-10-20 19:59:36', NULL, 1),
(525, 150, 'MARIANO PICON SALAS', '2015-10-20 19:59:36', NULL, 1),
(526, 150, 'ANTONIO SPINETTI DINI', '2015-10-20 19:59:36', NULL, 1),
(527, 150, 'EL MORRO', '2015-10-20 19:59:36', NULL, 1),
(528, 150, 'LOS NEVADOS', '2015-10-20 19:59:36', NULL, 1),
(529, 151, 'CM. TABAY', '2015-10-20 19:59:36', NULL, 1),
(530, 152, 'CM. TIMOTES', '2015-10-20 19:59:36', NULL, 1),
(531, 152, 'ANDRES ELOY BLANCO', '2015-10-20 19:59:36', NULL, 1),
(532, 152, 'PIÑANGO', '2015-10-20 19:59:36', NULL, 1),
(533, 152, 'LA VENTA', '2015-10-20 19:59:36', NULL, 1),
(534, 153, 'CM. STA CRUZ DE MORA', '2015-10-20 19:59:36', NULL, 1),
(535, 153, 'MESA BOLIVAR', '2015-10-20 19:59:36', NULL, 1),
(536, 153, 'MESA DE LAS PALMAS', '2015-10-20 19:59:36', NULL, 1),
(537, 154, 'CM. STA ELENA DE ARENALES', '2015-10-20 19:59:36', NULL, 1),
(538, 154, 'ELOY PAREDES', '2015-10-20 19:59:36', NULL, 1),
(539, 154, 'PQ R DE ALCAZAR', '2015-10-20 19:59:36', NULL, 1),
(540, 155, 'CM. TUCANI', '2015-10-20 19:59:36', NULL, 1),
(541, 155, 'FLORENCIO RAMIREZ', '2015-10-20 19:59:36', NULL, 1),
(542, 156, 'CM. SANTO DOMINGO', '2015-10-20 19:59:36', NULL, 1),
(543, 156, 'LAS PIEDRAS', '2015-10-20 19:59:36', NULL, 1),
(544, 157, 'CM. PUEBLO LLANO', '2015-10-20 19:59:36', NULL, 1),
(545, 158, 'CM. MUCUCHIES', '2015-10-20 19:59:36', NULL, 1),
(546, 158, 'MUCURUBA', '2015-10-20 19:59:36', NULL, 1),
(547, 158, 'SAN RAFAEL', '2015-10-20 19:59:36', NULL, 1),
(548, 158, 'CACUTE', '2015-10-20 19:59:36', NULL, 1),
(549, 158, 'LA TOMA', '2015-10-20 19:59:36', NULL, 1),
(550, 159, 'CM. BAILADORES', '2015-10-20 19:59:36', NULL, 1),
(551, 159, 'GERONIMO MALDONADO', '2015-10-20 19:59:36', NULL, 1),
(552, 160, 'CM. LAGUNILLAS', '2015-10-20 19:59:36', NULL, 1),
(553, 160, 'CHIGUARA', '2015-10-20 19:59:36', NULL, 1),
(554, 160, 'ESTANQUES', '2015-10-20 19:59:36', NULL, 1),
(555, 160, 'SAN JUAN', '2015-10-20 19:59:36', NULL, 1),
(556, 160, 'PUEBLO NUEVO DEL SUR', '2015-10-20 19:59:36', NULL, 1),
(557, 160, 'LA TRAMPA', '2015-10-20 19:59:36', NULL, 1),
(558, 161, 'EL LLANO', '2015-10-20 19:59:36', NULL, 1),
(559, 161, 'TOVAR', '2015-10-20 19:59:36', NULL, 1),
(560, 161, 'EL AMPARO', '2015-10-20 19:59:36', NULL, 1),
(561, 161, 'SAN FRANCISCO', '2015-10-20 19:59:36', NULL, 1),
(562, 162, 'CM. NUEVA BOLIVIA', '2015-10-20 19:59:36', NULL, 1),
(563, 162, 'INDEPENDENCIA', '2015-10-20 19:59:36', NULL, 1),
(564, 162, 'MARIA C PALACIOS', '2015-10-20 19:59:36', NULL, 1),
(565, 162, 'SANTA APOLONIA', '2015-10-20 19:59:36', NULL, 1),
(566, 163, 'CM. STA MARIA DE CAPARO', '2015-10-20 19:59:36', NULL, 1),
(567, 164, 'CM. ARICAGUA', '2015-10-20 19:59:36', NULL, 1),
(568, 164, 'SAN ANTONIO', '2015-10-20 19:59:36', NULL, 1),
(569, 165, 'CM. ZEA', '2015-10-20 19:59:36', NULL, 1),
(570, 165, 'CAÑO EL TIGRE', '2015-10-20 19:59:36', NULL, 1),
(571, 166, 'CAUCAGUA', '2015-10-20 19:59:36', NULL, 1),
(572, 166, 'ARAGUITA', '2015-10-20 19:59:36', NULL, 1),
(573, 166, 'AREVALO GONZALEZ', '2015-10-20 19:59:36', NULL, 1),
(574, 166, 'CAPAYA', '2015-10-20 19:59:36', NULL, 1),
(575, 166, 'PANAQUIRE', '2015-10-20 19:59:36', NULL, 1),
(576, 166, 'RIBAS', '2015-10-20 19:59:36', NULL, 1),
(577, 166, 'EL CAFE', '2015-10-20 19:59:36', NULL, 1),
(578, 166, 'MARIZAPA', '2015-10-20 19:59:36', NULL, 1),
(579, 167, 'HIGUEROTE', '2015-10-20 19:59:36', NULL, 1),
(580, 167, 'CURIEPE', '2015-10-20 19:59:36', NULL, 1),
(581, 167, 'TACARIGUA', '2015-10-20 19:59:36', NULL, 1),
(582, 168, 'LOS TEQUES', '2015-10-20 19:59:36', NULL, 1),
(583, 168, 'CECILIO ACOSTA', '2015-10-20 19:59:36', NULL, 1),
(584, 168, 'PARACOTOS', '2015-10-20 19:59:36', NULL, 1),
(585, 168, 'SAN PEDRO', '2015-10-20 19:59:36', NULL, 1),
(586, 168, 'TACATA', '2015-10-20 19:59:36', NULL, 1),
(587, 168, 'EL JARILLO', '2015-10-20 19:59:36', NULL, 1),
(588, 168, 'ALTAGRACIA DE LA M', '2015-10-20 19:59:36', NULL, 1),
(589, 169, 'STA TERESA DEL TUY', '2015-10-20 19:59:36', NULL, 1),
(590, 169, 'EL CARTANAL', '2015-10-20 19:59:36', NULL, 1),
(591, 170, 'OCUMARE DEL TUY', '2015-10-20 19:59:36', NULL, 1),
(592, 170, 'LA DEMOCRACIA', '2015-10-20 19:59:36', NULL, 1),
(593, 170, 'SANTA BARBARA', '2015-10-20 19:59:36', NULL, 1),
(594, 171, 'RIO CHICO', '2015-10-20 19:59:36', NULL, 1),
(595, 171, 'EL GUAPO', '2015-10-20 19:59:36', NULL, 1),
(596, 171, 'TACARIGUA DE LA LAGUNA', '2015-10-20 19:59:36', NULL, 1),
(597, 171, 'PAPARO', '2015-10-20 19:59:36', NULL, 1),
(598, 171, 'SN FERNANDO DEL GUAPO', '2015-10-20 19:59:36', NULL, 1),
(599, 172, 'SANTA LUCIA', '2015-10-20 19:59:36', NULL, 1),
(600, 173, 'GUARENAS', '2015-10-20 19:59:36', NULL, 1),
(601, 174, 'PETARE', '2015-10-20 19:59:36', NULL, 1),
(602, 174, 'LEONCIO MARTINEZ', '2015-10-20 19:59:36', NULL, 1),
(603, 174, 'CAUCAGUITA', '2015-10-20 19:59:36', NULL, 1),
(604, 174, 'FILAS DE MARICHES', '2015-10-20 19:59:36', NULL, 1),
(605, 174, 'LA DOLORITA', '2015-10-20 19:59:36', NULL, 1),
(606, 175, 'CUA', '2015-10-20 19:59:36', NULL, 1),
(607, 175, 'NUEVA CUA', '2015-10-20 19:59:36', NULL, 1),
(608, 176, 'GUATIRE', '2015-10-20 19:59:36', NULL, 1),
(609, 176, 'BOLIVAR', '2015-10-20 19:59:36', NULL, 1),
(610, 177, 'CHARALLAVE', '2015-10-20 19:59:36', NULL, 1),
(611, 177, 'LAS BRISAS', '2015-10-20 19:59:36', NULL, 1),
(612, 178, 'SAN ANTONIO LOS ALTOS', '2015-10-20 19:59:36', NULL, 1),
(613, 179, 'SAN JOSE DE BARLOVENTO', '2015-10-20 19:59:36', NULL, 1),
(614, 179, 'CUMBO', '2015-10-20 19:59:36', NULL, 1),
(615, 180, 'SAN FCO DE YARE', '2015-10-20 19:59:36', NULL, 1),
(616, 180, 'S ANTONIO DE YARE', '2015-10-20 19:59:36', NULL, 1),
(617, 181, 'BARUTA', '2015-10-20 19:59:36', NULL, 1),
(618, 181, 'EL CAFETAL', '2015-10-20 19:59:36', NULL, 1),
(619, 181, 'LAS MINAS DE BARUTA', '2015-10-20 19:59:36', NULL, 1),
(620, 182, 'CARRIZAL', '2015-10-20 19:59:36', NULL, 1),
(621, 183, 'CHACAO', '2015-10-20 19:59:36', NULL, 1),
(622, 184, 'EL HATILLO', '2015-10-20 19:59:36', NULL, 1),
(623, 185, 'MAMPORAL', '2015-10-20 19:59:36', NULL, 1),
(624, 186, 'CUPIRA', '2015-10-20 19:59:36', NULL, 1),
(625, 186, 'MACHURUCUTO', '2015-10-20 19:59:36', NULL, 1),
(626, 187, 'CM. SAN ANTONIO', '2015-10-20 19:59:36', NULL, 1),
(627, 187, 'SAN FRANCISCO', '2015-10-20 19:59:36', NULL, 1),
(628, 188, 'CM. CARIPITO', '2015-10-20 19:59:36', NULL, 1),
(629, 189, 'CM. CARIPE', '2015-10-20 19:59:36', NULL, 1),
(630, 189, 'TERESEN', '2015-10-20 19:59:36', NULL, 1),
(631, 189, 'EL GUACHARO', '2015-10-20 19:59:36', NULL, 1),
(632, 189, 'SAN AGUSTIN', '2015-10-20 19:59:36', NULL, 1),
(633, 189, 'LA GUANOTA', '2015-10-20 19:59:36', NULL, 1),
(634, 189, 'SABANA DE PIEDRA', '2015-10-20 19:59:36', NULL, 1),
(635, 190, 'CM. CAICARA', '2015-10-20 19:59:36', NULL, 1),
(636, 190, 'AREO', '2015-10-20 19:59:36', NULL, 1),
(637, 190, 'SAN FELIX', '2015-10-20 19:59:36', NULL, 1),
(638, 190, 'VIENTO FRESCO', '2015-10-20 19:59:36', NULL, 1),
(639, 191, 'CM. PUNTA DE MATA', '2015-10-20 19:59:36', NULL, 1),
(640, 191, 'EL TEJERO', '2015-10-20 19:59:36', NULL, 1),
(641, 192, 'CM. TEMBLADOR', '2015-10-20 19:59:36', NULL, 1),
(642, 192, 'TABASCA', '2015-10-20 19:59:36', NULL, 1),
(643, 192, 'LAS ALHUACAS', '2015-10-20 19:59:36', NULL, 1),
(644, 192, 'CHAGUARAMAS', '2015-10-20 19:59:36', NULL, 1),
(645, 193, 'EL FURRIAL', '2015-10-20 19:59:36', NULL, 1),
(646, 193, 'JUSEPIN', '2015-10-20 19:59:36', NULL, 1),
(647, 193, 'EL COROZO', '2015-10-20 19:59:36', NULL, 1),
(648, 193, 'SAN VICENTE', '2015-10-20 19:59:36', NULL, 1),
(649, 193, 'LA PICA', '2015-10-20 19:59:36', NULL, 1),
(650, 193, 'ALTO DE LOS GODOS', '2015-10-20 19:59:36', NULL, 1),
(651, 193, 'BOQUERON', '2015-10-20 19:59:36', NULL, 1),
(652, 193, 'LAS COCUIZAS', '2015-10-20 19:59:36', NULL, 1),
(653, 193, 'SANTA CRUZ', '2015-10-20 19:59:36', NULL, 1),
(654, 193, 'SAN SIMON', '2015-10-20 19:59:36', NULL, 1),
(655, 194, 'CM. ARAGUA', '2015-10-20 19:59:36', NULL, 1),
(656, 194, 'CHAGUARAMAL', '2015-10-20 19:59:36', NULL, 1),
(657, 194, 'GUANAGUANA', '2015-10-20 19:59:36', NULL, 1),
(658, 194, 'APARICIO', '2015-10-20 19:59:36', NULL, 1),
(659, 194, 'TAGUAYA', '2015-10-20 19:59:36', NULL, 1),
(660, 194, 'EL PINTO', '2015-10-20 19:59:36', NULL, 1),
(661, 194, 'LA TOSCANA', '2015-10-20 19:59:36', NULL, 1),
(662, 195, 'CM. QUIRIQUIRE', '2015-10-20 19:59:36', NULL, 1),
(663, 195, 'CACHIPO', '2015-10-20 19:59:36', NULL, 1),
(664, 196, 'CM. BARRANCAS', '2015-10-20 19:59:36', NULL, 1),
(665, 196, 'LOS BARRANCOS DE FAJARDO', '2015-10-20 19:59:36', NULL, 1),
(666, 197, 'CM. AGUASAY', '2015-10-20 19:59:36', NULL, 1),
(667, 198, 'CM. SANTA BARBARA', '2015-10-20 19:59:36', NULL, 1),
(668, 199, 'CM. URACOA', '2015-10-20 19:59:36', NULL, 1),
(669, 200, 'CM. LA ASUNCION', '2015-10-20 19:59:36', NULL, 1),
(670, 201, 'CM. SAN JUAN BAUTISTA', '2015-10-20 19:59:36', NULL, 1),
(671, 201, 'ZABALA', '2015-10-20 19:59:36', NULL, 1),
(672, 202, 'CM. SANTA ANA', '2015-10-20 19:59:36', NULL, 1),
(673, 202, 'GUEVARA', '2015-10-20 19:59:36', NULL, 1),
(674, 202, 'MATASIETE', '2015-10-20 19:59:36', NULL, 1),
(675, 202, 'BOLIVAR', '2015-10-20 19:59:36', NULL, 1),
(676, 202, 'SUCRE', '2015-10-20 19:59:36', NULL, 1),
(677, 203, 'CM. PAMPATAR', '2015-10-20 19:59:36', NULL, 1),
(678, 203, 'AGUIRRE', '2015-10-20 19:59:36', NULL, 1),
(679, 204, 'CM. JUAN GRIEGO', '2015-10-20 19:59:36', NULL, 1),
(680, 204, 'ADRIAN', '2015-10-20 19:59:36', NULL, 1),
(681, 205, 'CM. PORLAMAR', '2015-10-20 19:59:36', NULL, 1),
(682, 206, 'CM. BOCA DEL RIO', '2015-10-20 19:59:36', NULL, 1),
(683, 206, 'SAN FRANCISCO', '2015-10-20 19:59:36', NULL, 1),
(684, 207, 'CM. SAN PEDRO DE COCHE', '2015-10-20 19:59:36', NULL, 1),
(685, 207, 'VICENTE FUENTES', '2015-10-20 19:59:36', NULL, 1),
(686, 208, 'CM. PUNTA DE PIEDRAS', '2015-10-20 19:59:36', NULL, 1),
(687, 208, 'LOS BARALES', '2015-10-20 19:59:36', NULL, 1),
(688, 209, 'CM.LA PLAZA DE PARAGUACHI', '2015-10-20 19:59:36', NULL, 1),
(689, 210, 'CM. VALLE ESP SANTO', '2015-10-20 19:59:36', NULL, 1),
(690, 210, 'FRANCISCO FAJARDO', '2015-10-20 19:59:36', NULL, 1),
(691, 211, 'CM. ARAURE', '2015-10-20 19:59:36', NULL, 1),
(692, 211, 'RIO ACARIGUA', '2015-10-20 19:59:36', NULL, 1),
(693, 212, 'CM. PIRITU', '2015-10-20 19:59:36', NULL, 1),
(694, 212, 'UVERAL', '2015-10-20 19:59:36', NULL, 1),
(695, 213, 'CM. GUANARE', '2015-10-20 19:59:36', NULL, 1),
(696, 213, 'CORDOBA', '2015-10-20 19:59:36', NULL, 1),
(697, 213, 'SAN JUAN GUANAGUANARE', '2015-10-20 19:59:36', NULL, 1),
(698, 213, 'VIRGEN DE LA COROMOTO', '2015-10-20 19:59:36', NULL, 1),
(699, 213, 'SAN JOSE DE LA MONTAÑA', '2015-10-20 19:59:36', NULL, 1),
(700, 214, 'CM. GUANARITO', '2015-10-20 19:59:36', NULL, 1),
(701, 214, 'TRINIDAD DE LA CAPILLA', '2015-10-20 19:59:36', NULL, 1),
(702, 214, 'DIVINA PASTORA', '2015-10-20 19:59:36', NULL, 1),
(703, 215, 'CM. OSPINO', '2015-10-20 19:59:36', NULL, 1),
(704, 215, 'APARICION', '2015-10-20 19:59:36', NULL, 1),
(705, 215, 'LA ESTACION', '2015-10-20 19:59:36', NULL, 1),
(706, 216, 'CM. ACARIGUA', '2015-10-20 19:59:36', NULL, 1),
(707, 216, 'PAYARA', '2015-10-20 19:59:36', NULL, 1),
(708, 216, 'PIMPINELA', '2015-10-20 19:59:36', NULL, 1),
(709, 216, 'RAMON PERAZA', '2015-10-20 19:59:36', NULL, 1),
(710, 217, 'CM. BISCUCUY', '2015-10-20 19:59:36', NULL, 1),
(711, 217, 'CONCEPCION', '2015-10-20 19:59:36', NULL, 1),
(712, 217, 'SAN RAFAEL PALO ALZADO', '2015-10-20 19:59:36', NULL, 1),
(713, 217, 'UVENCIO A VELASQUEZ', '2015-10-20 19:59:36', NULL, 1),
(714, 217, 'SAN JOSE DE SAGUAZ', '2015-10-20 19:59:36', NULL, 1),
(715, 217, 'VILLA ROSA', '2015-10-20 19:59:36', NULL, 1),
(716, 218, 'CM. VILLA BRUZUAL', '2015-10-20 19:59:36', NULL, 1),
(717, 218, 'CANELONES', '2015-10-20 19:59:36', NULL, 1),
(718, 218, 'SANTA CRUZ', '2015-10-20 19:59:36', NULL, 1),
(719, 218, 'SAN ISIDRO LABRADOR', '2015-10-20 19:59:36', NULL, 1),
(720, 219, 'CM. CHABASQUEN', '2015-10-20 19:59:36', NULL, 1),
(721, 219, 'PEÑA BLANCA', '2015-10-20 19:59:36', NULL, 1),
(722, 220, 'CM. AGUA BLANCA', '2015-10-20 19:59:36', NULL, 1),
(723, 221, 'CM. PAPELON', '2015-10-20 19:59:36', NULL, 1),
(724, 221, 'CAÑO DELGADITO', '2015-10-20 19:59:36', NULL, 1),
(725, 222, 'CM. BOCONOITO', '2015-10-20 19:59:36', NULL, 1),
(726, 222, 'ANTOLIN TOVAR AQUINO', '2015-10-20 19:59:36', NULL, 1),
(727, 223, 'CM. SAN RAFAEL DE ONOTO', '2015-10-20 19:59:36', NULL, 1),
(728, 223, 'SANTA FE', '2015-10-20 19:59:36', NULL, 1),
(729, 223, 'THERMO MORLES', '2015-10-20 19:59:36', NULL, 1),
(730, 224, 'CM. EL PLAYON', '2015-10-20 19:59:36', NULL, 1),
(731, 224, 'FLORIDA', '2015-10-20 19:59:36', NULL, 1),
(732, 225, 'RIO CARIBE', '2015-10-20 19:59:36', NULL, 1),
(733, 225, 'SAN JUAN GALDONAS', '2015-10-20 19:59:36', NULL, 1),
(734, 225, 'PUERTO SANTO', '2015-10-20 19:59:36', NULL, 1),
(735, 225, 'EL MORRO DE PTO SANTO', '2015-10-20 19:59:36', NULL, 1),
(736, 225, 'ANTONIO JOSE DE SUCRE', '2015-10-20 19:59:36', NULL, 1),
(737, 226, 'EL PILAR', '2015-10-20 19:59:36', NULL, 1),
(738, 226, 'EL RINCON', '2015-10-20 19:59:36', NULL, 1),
(739, 226, 'GUARAUNOS', '2015-10-20 19:59:36', NULL, 1),
(740, 226, 'TUNAPUICITO', '2015-10-20 19:59:36', NULL, 1),
(741, 226, 'UNION', '2015-10-20 19:59:36', NULL, 1),
(742, 226, 'GRAL FCO. A VASQUEZ', '2015-10-20 19:59:36', NULL, 1),
(743, 227, 'SANTA CATALINA', '2015-10-20 19:59:36', NULL, 1),
(744, 227, 'SANTA ROSA', '2015-10-20 19:59:36', NULL, 1),
(745, 227, 'SANTA TERESA', '2015-10-20 19:59:36', NULL, 1),
(746, 227, 'BOLIVAR', '2015-10-20 19:59:36', NULL, 1),
(747, 227, 'MACARAPANA', '2015-10-20 19:59:36', NULL, 1),
(748, 228, 'YAGUARAPARO', '2015-10-20 19:59:36', NULL, 1),
(749, 228, 'LIBERTAD', '2015-10-20 19:59:36', NULL, 1),
(750, 228, 'PAUJIL', '2015-10-20 19:59:36', NULL, 1),
(751, 229, 'IRAPA', '2015-10-20 19:59:36', NULL, 1),
(752, 229, 'CAMPO CLARO', '2015-10-20 19:59:36', NULL, 1),
(753, 229, 'SORO', '2015-10-20 19:59:36', NULL, 1),
(754, 229, 'SAN ANTONIO DE IRAPA', '2015-10-20 19:59:36', NULL, 1),
(755, 229, 'MARABAL', '2015-10-20 19:59:36', NULL, 1),
(756, 230, 'CM. SAN ANT DEL GOLFO', '2015-10-20 19:59:36', NULL, 1),
(757, 231, 'CUMANACOA', '2015-10-20 19:59:36', NULL, 1),
(758, 231, 'ARENAS', '2015-10-20 19:59:36', NULL, 1),
(759, 231, 'ARICAGUA', '2015-10-20 19:59:36', NULL, 1),
(760, 231, 'COCOLLAR', '2015-10-20 19:59:36', NULL, 1),
(761, 231, 'SAN FERNANDO', '2015-10-20 19:59:36', NULL, 1),
(762, 231, 'SAN LORENZO', '2015-10-20 19:59:36', NULL, 1),
(763, 232, 'CARIACO', '2015-10-20 19:59:36', NULL, 1),
(764, 232, 'CATUARO', '2015-10-20 19:59:36', NULL, 1),
(765, 232, 'RENDON', '2015-10-20 19:59:36', NULL, 1),
(766, 232, 'SANTA CRUZ', '2015-10-20 19:59:36', NULL, 1),
(767, 232, 'SANTA MARIA', '2015-10-20 19:59:36', NULL, 1),
(768, 233, 'ALTAGRACIA', '2015-10-20 19:59:36', NULL, 1),
(769, 233, 'AYACUCHO', '2015-10-20 19:59:36', NULL, 1),
(770, 233, 'SANTA INES', '2015-10-20 19:59:36', NULL, 1),
(771, 233, 'VALENTIN VALIENTE', '2015-10-20 19:59:36', NULL, 1),
(772, 233, 'SAN JUAN', '2015-10-20 19:59:36', NULL, 1),
(773, 233, 'GRAN MARISCAL', '2015-10-20 19:59:36', NULL, 1),
(774, 233, 'RAUL LEONI', '2015-10-20 19:59:36', NULL, 1),
(775, 234, 'GUIRIA', '2015-10-20 19:59:36', NULL, 1),
(776, 234, 'CRISTOBAL COLON', '2015-10-20 19:59:36', NULL, 1),
(777, 234, 'PUNTA DE PIEDRA', '2015-10-20 19:59:36', NULL, 1),
(778, 234, 'BIDEAU', '2015-10-20 19:59:36', NULL, 1),
(779, 235, 'MARIÑO', '2015-10-20 19:59:36', NULL, 1),
(780, 235, 'ROMULO GALLEGOS', '2015-10-20 19:59:36', NULL, 1),
(781, 236, 'TUNAPUY', '2015-10-20 19:59:36', NULL, 1),
(782, 236, 'CAMPO ELIAS', '2015-10-20 19:59:36', NULL, 1),
(783, 237, 'SAN JOSE DE AREOCUAR', '2015-10-20 19:59:36', NULL, 1),
(784, 237, 'TAVERA ACOSTA', '2015-10-20 19:59:36', NULL, 1),
(785, 238, 'CM. MARIGUITAR', '2015-10-20 19:59:36', NULL, 1),
(786, 239, 'ARAYA', '2015-10-20 19:59:36', NULL, 1),
(787, 239, 'MANICUARE', '2015-10-20 19:59:36', NULL, 1),
(788, 239, 'CHACOPATA', '2015-10-20 19:59:36', NULL, 1),
(789, 240, 'CM. COLON', '2015-10-20 19:59:36', NULL, 1),
(790, 240, 'RIVAS BERTI', '2015-10-20 19:59:36', NULL, 1),
(791, 240, 'SAN PEDRO DEL RIO', '2015-10-20 19:59:36', NULL, 1),
(792, 241, 'CM. SAN ANT DEL TACHIRA', '2015-10-20 19:59:36', NULL, 1),
(793, 241, 'PALOTAL', '2015-10-20 19:59:36', NULL, 1),
(794, 241, 'JUAN VICENTE GOMEZ', '2015-10-20 19:59:36', NULL, 1),
(795, 241, 'ISAIAS MEDINA ANGARIT', '2015-10-20 19:59:36', NULL, 1),
(796, 242, 'CM. CAPACHO NUEVO', '2015-10-20 19:59:36', NULL, 1),
(797, 242, 'JUAN GERMAN ROSCIO', '2015-10-20 19:59:36', NULL, 1),
(798, 242, 'ROMAN CARDENAS', '2015-10-20 19:59:36', NULL, 1),
(799, 243, 'CM. TARIBA', '2015-10-20 19:59:36', NULL, 1),
(800, 243, 'LA FLORIDA', '2015-10-20 19:59:36', NULL, 1),
(801, 243, 'AMENODORO RANGEL LAMU', '2015-10-20 19:59:36', NULL, 1),
(802, 244, 'CM. LA GRITA', '2015-10-20 19:59:36', NULL, 1),
(803, 244, 'EMILIO C. GUERRERO', '2015-10-20 19:59:36', NULL, 1),
(804, 244, 'MONS. MIGUEL A SALAS', '2015-10-20 19:59:36', NULL, 1),
(805, 245, 'CM. RUBIO', '2015-10-20 19:59:36', NULL, 1),
(806, 245, 'BRAMON', '2015-10-20 19:59:36', NULL, 1),
(807, 245, 'LA PETROLEA', '2015-10-20 19:59:36', NULL, 1),
(808, 245, 'QUINIMARI', '2015-10-20 19:59:36', NULL, 1),
(809, 246, 'CM. LOBATERA', '2015-10-20 19:59:36', NULL, 1),
(810, 246, 'CONSTITUCION', '2015-10-20 19:59:36', NULL, 1),
(811, 247, 'LA CONCORDIA', '2015-10-20 19:59:36', NULL, 1),
(812, 247, 'PEDRO MARIA MORANTES', '2015-10-20 19:59:36', NULL, 1),
(813, 247, 'SN JUAN BAUTISTA', '2015-10-20 19:59:36', NULL, 1),
(814, 247, 'SAN SEBASTIAN', '2015-10-20 19:59:36', NULL, 1),
(815, 247, 'DR. FCO. ROMERO LOBO', '2015-10-20 19:59:36', NULL, 1),
(816, 248, 'CM. PREGONERO', '2015-10-20 19:59:36', NULL, 1),
(817, 248, 'CARDENAS', '2015-10-20 19:59:36', NULL, 1),
(818, 248, 'POTOSI', '2015-10-20 19:59:36', NULL, 1),
(819, 248, 'JUAN PABLO PEÑALOZA', '2015-10-20 19:59:36', NULL, 1),
(820, 249, 'CM. STA. ANA  DEL TACHIRA', '2015-10-20 19:59:36', NULL, 1),
(821, 250, 'CM. LA FRIA', '2015-10-20 19:59:36', NULL, 1),
(822, 250, 'BOCA DE GRITA', '2015-10-20 19:59:36', NULL, 1),
(823, 250, 'JOSE ANTONIO PAEZ', '2015-10-20 19:59:36', NULL, 1),
(824, 251, 'CM. PALMIRA', '2015-10-20 19:59:36', NULL, 1),
(825, 252, 'CM. MICHELENA', '2015-10-20 19:59:36', NULL, 1),
(826, 253, 'CM. ABEJALES', '2015-10-20 19:59:36', NULL, 1),
(827, 253, 'SAN JOAQUIN DE NAVAY', '2015-10-20 19:59:36', NULL, 1),
(828, 253, 'DORADAS', '2015-10-20 19:59:36', NULL, 1),
(829, 253, 'EMETERIO OCHOA', '2015-10-20 19:59:36', NULL, 1),
(830, 254, 'CM. COLONCITO', '2015-10-20 19:59:36', NULL, 1),
(831, 254, 'LA PALMITA', '2015-10-20 19:59:36', NULL, 1),
(832, 255, 'CM. UREÑA', '2015-10-20 19:59:36', NULL, 1),
(833, 255, 'NUEVA ARCADIA', '2015-10-20 19:59:36', NULL, 1),
(834, 256, 'CM. QUENIQUEA', '2015-10-20 19:59:36', NULL, 1),
(835, 256, 'SAN PABLO', '2015-10-20 19:59:36', NULL, 1),
(836, 256, 'ELEAZAR LOPEZ CONTRERA', '2015-10-20 19:59:36', NULL, 1),
(837, 257, 'CM. CORDERO', '2015-10-20 19:59:36', NULL, 1),
(838, 258, 'CM.SAN RAFAEL DEL PINAL', '2015-10-20 19:59:36', NULL, 1),
(839, 258, 'SANTO DOMINGO', '2015-10-20 19:59:36', NULL, 1),
(840, 258, 'ALBERTO ADRIANI', '2015-10-20 19:59:36', NULL, 1),
(841, 259, 'CM. CAPACHO VIEJO', '2015-10-20 19:59:36', NULL, 1),
(842, 259, 'CIPRIANO CASTRO', '2015-10-20 19:59:36', NULL, 1),
(843, 259, 'MANUEL FELIPE RUGELES', '2015-10-20 19:59:36', NULL, 1),
(844, 260, 'CM. LA TENDIDA', '2015-10-20 19:59:36', NULL, 1),
(845, 260, 'BOCONO', '2015-10-20 19:59:36', NULL, 1),
(846, 260, 'HERNANDEZ', '2015-10-20 19:59:36', NULL, 1),
(847, 261, 'CM. SEBORUCO', '2015-10-20 19:59:36', NULL, 1),
(848, 262, 'CM. LAS MESAS', '2015-10-20 19:59:36', NULL, 1),
(849, 263, 'CM. SAN JOSE DE BOLIVAR', '2015-10-20 19:59:36', NULL, 1),
(850, 264, 'CM. EL COBRE', '2015-10-20 19:59:36', NULL, 1),
(851, 265, 'CM. DELICIAS', '2015-10-20 19:59:36', NULL, 1),
(852, 266, 'CM. SAN SIMON', '2015-10-20 19:59:36', NULL, 1),
(853, 267, 'CM. SAN JOSECITO', '2015-10-20 19:59:36', NULL, 1),
(854, 268, 'CM. UMUQUENA', '2015-10-20 19:59:36', NULL, 1),
(855, 269, 'BETIJOQUE', '2015-10-20 19:59:36', NULL, 1),
(856, 269, 'JOSE G HERNANDEZ', '2015-10-20 19:59:36', NULL, 1),
(857, 269, 'LA PUEBLITA', '2015-10-20 19:59:36', NULL, 1),
(858, 269, 'EL CEDRO', '2015-10-20 19:59:36', NULL, 1),
(859, 270, 'BOCONO', '2015-10-20 19:59:36', NULL, 1),
(860, 270, 'EL CARMEN', '2015-10-20 19:59:36', NULL, 1),
(861, 270, 'MOSQUEY', '2015-10-20 19:59:36', NULL, 1),
(862, 270, 'AYACUCHO', '2015-10-20 19:59:36', NULL, 1),
(863, 270, 'BURBUSAY', '2015-10-20 19:59:36', NULL, 1),
(864, 270, 'GENERAL RIVAS', '2015-10-20 19:59:36', NULL, 1),
(865, 270, 'MONSEÑOR JAUREGUI', '2015-10-20 19:59:36', NULL, 1),
(866, 270, 'RAFAEL RANGEL', '2015-10-20 19:59:36', NULL, 1),
(867, 270, 'SAN JOSE', '2015-10-20 19:59:36', NULL, 1),
(868, 270, 'SAN MIGUEL', '2015-10-20 19:59:36', NULL, 1),
(869, 270, 'GUARAMACAL', '2015-10-20 19:59:36', NULL, 1),
(870, 270, 'LA VEGA DE GUARAMACAL', '2015-10-20 19:59:36', NULL, 1),
(871, 271, 'CARACHE', '2015-10-20 19:59:36', NULL, 1),
(872, 271, 'LA CONCEPCION', '2015-10-20 19:59:36', NULL, 1),
(873, 271, 'CUICAS', '2015-10-20 19:59:36', NULL, 1);
INSERT INTO `parroquias` (`id_parroquia`, `id_municipio`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(874, 271, 'PANAMERICANA', '2015-10-20 19:59:36', NULL, 1),
(875, 271, 'SANTA CRUZ', '2015-10-20 19:59:36', NULL, 1),
(876, 272, 'ESCUQUE', '2015-10-20 19:59:36', NULL, 1),
(877, 272, 'SABANA LIBRE', '2015-10-20 19:59:36', NULL, 1),
(878, 272, 'LA UNION', '2015-10-20 19:59:36', NULL, 1),
(879, 272, 'SANTA RITA', '2015-10-20 19:59:36', NULL, 1),
(880, 273, 'CRISTOBAL MENDOZA', '2015-10-20 19:59:36', NULL, 1),
(881, 273, 'CHIQUINQUIRA', '2015-10-20 19:59:36', NULL, 1),
(882, 273, 'MATRIZ', '2015-10-20 19:59:36', NULL, 1),
(883, 273, 'MONSEÑOR CARRILLO', '2015-10-20 19:59:36', NULL, 1),
(884, 273, 'CRUZ CARRILLO', '2015-10-20 19:59:36', NULL, 1),
(885, 273, 'ANDRES LINARES', '2015-10-20 19:59:36', NULL, 1),
(886, 273, 'TRES ESQUINAS', '2015-10-20 19:59:36', NULL, 1),
(887, 274, 'LA QUEBRADA', '2015-10-20 19:59:36', NULL, 1),
(888, 274, 'JAJO', '2015-10-20 19:59:36', NULL, 1),
(889, 274, 'LA MESA', '2015-10-20 19:59:36', NULL, 1),
(890, 274, 'SANTIAGO', '2015-10-20 19:59:36', NULL, 1),
(891, 274, 'CABIMBU', '2015-10-20 19:59:36', NULL, 1),
(892, 274, 'TUÑAME', '2015-10-20 19:59:36', NULL, 1),
(893, 275, 'MERCEDES DIAZ', '2015-10-20 19:59:36', NULL, 1),
(894, 275, 'JUAN IGNACIO MONTILLA', '2015-10-20 19:59:36', NULL, 1),
(895, 275, 'LA BEATRIZ', '2015-10-20 19:59:36', NULL, 1),
(896, 275, 'MENDOZA', '2015-10-20 19:59:36', NULL, 1),
(897, 275, 'LA PUERTA', '2015-10-20 19:59:36', NULL, 1),
(898, 275, 'SAN LUIS', '2015-10-20 19:59:36', NULL, 1),
(899, 276, 'CHEJENDE', '2015-10-20 19:59:36', NULL, 1),
(900, 276, 'CARRILLO', '2015-10-20 19:59:36', NULL, 1),
(901, 276, 'CEGARRA', '2015-10-20 19:59:36', NULL, 1),
(902, 276, 'BOLIVIA', '2015-10-20 19:59:36', NULL, 1),
(903, 276, 'MANUEL SALVADOR ULLOA', '2015-10-20 19:59:36', NULL, 1),
(904, 276, 'SAN JOSE', '2015-10-20 19:59:36', NULL, 1),
(905, 276, 'ARNOLDO GABALDON', '2015-10-20 19:59:36', NULL, 1),
(906, 277, 'EL DIVIDIVE', '2015-10-20 19:59:36', NULL, 1),
(907, 277, 'AGUA CALIENTE', '2015-10-20 19:59:36', NULL, 1),
(908, 277, 'EL CENIZO', '2015-10-20 19:59:36', NULL, 1),
(909, 277, 'AGUA SANTA', '2015-10-20 19:59:36', NULL, 1),
(910, 277, 'VALERITA', '2015-10-20 19:59:36', NULL, 1),
(911, 278, 'MONTE CARMELO', '2015-10-20 19:59:36', NULL, 1),
(912, 278, 'BUENA VISTA', '2015-10-20 19:59:36', NULL, 1),
(913, 278, 'STA MARIA DEL HORCON', '2015-10-20 19:59:36', NULL, 1),
(914, 279, 'MOTATAN', '2015-10-20 19:59:36', NULL, 1),
(915, 279, 'EL BAÑO', '2015-10-20 19:59:36', NULL, 1),
(916, 279, 'JALISCO', '2015-10-20 19:59:36', NULL, 1),
(917, 280, 'PAMPAN', '2015-10-20 19:59:36', NULL, 1),
(918, 280, 'SANTA ANA', '2015-10-20 19:59:36', NULL, 1),
(919, 280, 'LA PAZ', '2015-10-20 19:59:36', NULL, 1),
(920, 280, 'FLOR DE PATRIA', '2015-10-20 19:59:36', NULL, 1),
(921, 281, 'CARVAJAL', '2015-10-20 19:59:36', NULL, 1),
(922, 281, 'ANTONIO N BRICEÑO', '2015-10-20 19:59:36', NULL, 1),
(923, 281, 'CAMPO ALEGRE', '2015-10-20 19:59:36', NULL, 1),
(924, 281, 'JOSE LEONARDO SUAREZ', '2015-10-20 19:59:36', NULL, 1),
(925, 282, 'SABANA DE MENDOZA', '2015-10-20 19:59:36', NULL, 1),
(926, 282, 'JUNIN', '2015-10-20 19:59:36', NULL, 1),
(927, 282, 'VALMORE RODRIGUEZ', '2015-10-20 19:59:36', NULL, 1),
(928, 282, 'EL PARAISO', '2015-10-20 19:59:36', NULL, 1),
(929, 283, 'SANTA ISABEL', '2015-10-20 19:59:36', NULL, 1),
(930, 283, 'ARAGUANEY', '2015-10-20 19:59:36', NULL, 1),
(931, 283, 'EL JAGUITO', '2015-10-20 19:59:36', NULL, 1),
(932, 283, 'LA ESPERANZA', '2015-10-20 19:59:36', NULL, 1),
(933, 284, 'SABANA GRANDE', '2015-10-20 19:59:36', NULL, 1),
(934, 284, 'CHEREGUE', '2015-10-20 19:59:36', NULL, 1),
(935, 284, 'GRANADOS', '2015-10-20 19:59:36', NULL, 1),
(936, 285, 'EL SOCORRO', '2015-10-20 19:59:36', NULL, 1),
(937, 285, 'LOS CAPRICHOS', '2015-10-20 19:59:36', NULL, 1),
(938, 285, 'ANTONIO JOSE DE SUCRE', '2015-10-20 19:59:36', NULL, 1),
(939, 286, 'CAMPO ELIAS', '2015-10-20 19:59:36', NULL, 1),
(940, 286, 'ARNOLDO GABALDON', '2015-10-20 19:59:36', NULL, 1),
(941, 287, 'SANTA APOLONIA', '2015-10-20 19:59:36', NULL, 1),
(942, 287, 'LA CEIBA', '2015-10-20 19:59:36', NULL, 1),
(943, 287, 'EL PROGRESO', '2015-10-20 19:59:36', NULL, 1),
(944, 287, 'TRES DE FEBRERO', '2015-10-20 19:59:36', NULL, 1),
(945, 288, 'PAMPANITO', '2015-10-20 19:59:36', NULL, 1),
(946, 288, 'PAMPANITO II', '2015-10-20 19:59:36', NULL, 1),
(947, 288, 'LA CONCEPCION', '2015-10-20 19:59:36', NULL, 1),
(948, 289, 'CM. AROA', '2015-10-20 19:59:36', NULL, 1),
(949, 290, 'CM. CHIVACOA', '2015-10-20 19:59:36', NULL, 1),
(950, 290, 'CAMPO ELIAS', '2015-10-20 19:59:36', NULL, 1),
(951, 291, 'CM. NIRGUA', '2015-10-20 19:59:36', NULL, 1),
(952, 291, 'SALOM', '2015-10-20 19:59:36', NULL, 1),
(953, 291, 'TEMERLA', '2015-10-20 19:59:36', NULL, 1),
(954, 292, 'CM. SAN FELIPE', '2015-10-20 19:59:36', NULL, 1),
(955, 292, 'ALBARICO', '2015-10-20 19:59:36', NULL, 1),
(956, 292, 'SAN JAVIER', '2015-10-20 19:59:36', NULL, 1),
(957, 293, 'CM. GUAMA', '2015-10-20 19:59:36', NULL, 1),
(958, 294, 'CM. URACHICHE', '2015-10-20 19:59:36', NULL, 1),
(959, 295, 'CM. YARITAGUA', '2015-10-20 19:59:36', NULL, 1),
(960, 295, 'SAN ANDRES', '2015-10-20 19:59:36', NULL, 1),
(961, 296, 'CM. SABANA DE PARRA', '2015-10-20 19:59:36', NULL, 1),
(962, 297, 'CM. BORAURE', '2015-10-20 19:59:36', NULL, 1),
(963, 298, 'CM. COCOROTE', '2015-10-20 19:59:36', NULL, 1),
(964, 299, 'CM. INDEPENDENCIA', '2015-10-20 19:59:36', NULL, 1),
(965, 300, 'CM. SAN PABLO', '2015-10-20 19:59:36', NULL, 1),
(966, 301, 'CM. YUMARE', '2015-10-20 19:59:36', NULL, 1),
(967, 302, 'CM. FARRIAR', '2015-10-20 19:59:36', NULL, 1),
(968, 302, 'EL GUAYABO', '2015-10-20 19:59:36', NULL, 1),
(969, 303, 'GENERAL URDANETA', '2015-10-20 19:59:36', NULL, 1),
(970, 303, 'LIBERTADOR', '2015-10-20 19:59:36', NULL, 1),
(971, 303, 'MANUEL GUANIPA MATOS', '2015-10-20 19:59:36', NULL, 1),
(972, 303, 'MARCELINO BRICEÑO', '2015-10-20 19:59:36', NULL, 1),
(973, 303, 'SAN TIMOTEO', '2015-10-20 19:59:36', NULL, 1),
(974, 303, 'PUEBLO NUEVO', '2015-10-20 19:59:36', NULL, 1),
(975, 304, 'PEDRO LUCAS URRIBARRI', '2015-10-20 19:59:36', NULL, 1),
(976, 304, 'SANTA RITA', '2015-10-20 19:59:36', NULL, 1),
(977, 304, 'JOSE CENOVIO URRIBARR', '2015-10-20 19:59:36', NULL, 1),
(978, 304, 'EL MENE', '2015-10-20 19:59:36', NULL, 1),
(979, 305, 'SANTA CRUZ DEL ZULIA', '2015-10-20 19:59:36', NULL, 1),
(980, 305, 'URRIBARRI', '2015-10-20 19:59:36', NULL, 1),
(981, 305, 'MORALITO', '2015-10-20 19:59:36', NULL, 1),
(982, 305, 'SAN CARLOS DEL ZULIA', '2015-10-20 19:59:36', NULL, 1),
(983, 305, 'SANTA BARBARA', '2015-10-20 19:59:36', NULL, 1),
(984, 306, 'LUIS DE VICENTE', '2015-10-20 19:59:36', NULL, 1),
(985, 306, 'RICAURTE', '2015-10-20 19:59:36', NULL, 1),
(986, 306, 'MONS.MARCOS SERGIO G', '2015-10-20 19:59:36', NULL, 1),
(987, 306, 'SAN RAFAEL', '2015-10-20 19:59:36', NULL, 1),
(988, 306, 'LAS PARCELAS', '2015-10-20 19:59:36', NULL, 1),
(989, 306, 'TAMARE', '2015-10-20 19:59:36', NULL, 1),
(990, 306, 'LA SIERRITA', '2015-10-20 19:59:36', NULL, 1),
(991, 307, 'BOLIVAR', '2015-10-20 19:59:36', NULL, 1),
(992, 307, 'COQUIVACOA', '2015-10-20 19:59:36', NULL, 1),
(993, 307, 'CRISTO DE ARANZA', '2015-10-20 19:59:36', NULL, 1),
(994, 307, 'CHIQUINQUIRA', '2015-10-20 19:59:36', NULL, 1),
(995, 307, 'SANTA LUCIA', '2015-10-20 19:59:36', NULL, 1),
(996, 307, 'OLEGARIO VILLALOBOS', '2015-10-20 19:59:36', NULL, 1),
(997, 307, 'JUANA DE AVILA', '2015-10-20 19:59:36', NULL, 1),
(998, 307, 'CARACCIOLO PARRA PEREZ', '2015-10-20 19:59:36', NULL, 1),
(999, 307, 'IDELFONZO VASQUEZ', '2015-10-20 19:59:36', NULL, 1),
(1000, 307, 'CACIQUE MARA', '2015-10-20 19:59:36', NULL, 1),
(1001, 307, 'CECILIO ACOSTA', '2015-10-20 19:59:36', NULL, 1),
(1002, 307, 'RAUL LEONI', '2015-10-20 19:59:36', NULL, 1),
(1003, 307, 'FRANCISCO EUGENIO B', '2015-10-20 19:59:36', NULL, 1),
(1004, 307, 'MANUEL DAGNINO', '2015-10-20 19:59:36', NULL, 1),
(1005, 307, 'LUIS HURTADO HIGUERA', '2015-10-20 19:59:36', NULL, 1),
(1006, 307, 'VENANCIO PULGAR', '2015-10-20 19:59:36', NULL, 1),
(1007, 307, 'ANTONIO BORJAS ROMERO', '2015-10-20 19:59:36', NULL, 1),
(1008, 307, 'SAN ISIDRO', '2015-10-20 19:59:36', NULL, 1),
(1009, 308, 'FARIA', '2015-10-20 19:59:36', NULL, 1),
(1010, 308, 'SAN ANTONIO', '2015-10-20 19:59:36', NULL, 1),
(1011, 308, 'ANA MARIA CAMPOS', '2015-10-20 19:59:36', NULL, 1),
(1012, 308, 'SAN JOSE', '2015-10-20 19:59:36', NULL, 1),
(1013, 308, 'ALTAGRACIA', '2015-10-20 19:59:36', NULL, 1),
(1014, 309, 'GOAJIRA', '2015-10-20 19:59:36', NULL, 1),
(1015, 309, 'ELIAS SANCHEZ RUBIO', '2015-10-20 19:59:36', NULL, 1),
(1016, 309, 'SINAMAICA', '2015-10-20 19:59:36', NULL, 1),
(1017, 309, 'ALTA GUAJIRA', '2015-10-20 19:59:36', NULL, 1),
(1018, 310, 'SAN JOSE DE PERIJA', '2015-10-20 19:59:36', NULL, 1),
(1019, 310, 'BARTOLOME DE LAS CASAS', '2015-10-20 19:59:36', NULL, 1),
(1020, 310, 'LIBERTAD', '2015-10-20 19:59:36', NULL, 1),
(1021, 310, 'RIO NEGRO', '2015-10-20 19:59:36', NULL, 1),
(1022, 311, 'GIBRALTAR', '2015-10-20 19:59:36', NULL, 1),
(1023, 311, 'HERAS', '2015-10-20 19:59:36', NULL, 1),
(1024, 311, 'M.ARTURO CELESTINO A', '2015-10-20 19:59:36', NULL, 1),
(1025, 311, 'ROMULO GALLEGOS', '2015-10-20 19:59:36', NULL, 1),
(1026, 311, 'BOBURES', '2015-10-20 19:59:36', NULL, 1),
(1027, 311, 'EL BATEY', '2015-10-20 19:59:36', NULL, 1),
(1028, 312, 'ANDRES BELLO (KM 48)', '2015-10-20 19:59:36', NULL, 1),
(1029, 312, 'POTRERITOS', '2015-10-20 19:59:36', NULL, 1),
(1030, 312, 'EL CARMELO', '2015-10-20 19:59:36', NULL, 1),
(1031, 312, 'CHIQUINQUIRA', '2015-10-20 19:59:36', NULL, 1),
(1032, 312, 'CONCEPCION', '2015-10-20 19:59:36', NULL, 1),
(1033, 313, 'ELEAZAR LOPEZ C', '2015-10-20 19:59:36', NULL, 1),
(1034, 313, 'ALONSO DE OJEDA', '2015-10-20 19:59:36', NULL, 1),
(1035, 313, 'VENEZUELA', '2015-10-20 19:59:36', NULL, 1),
(1036, 313, 'CAMPO LARA', '2015-10-20 19:59:36', NULL, 1),
(1037, 313, 'LIBERTAD', '2015-10-20 19:59:36', NULL, 1),
(1038, 314, 'UDON PEREZ', '2015-10-20 19:59:36', NULL, 1),
(1039, 314, 'ENCONTRADOS', '2015-10-20 19:59:36', NULL, 1),
(1040, 315, 'DONALDO GARCIA', '2015-10-20 19:59:36', NULL, 1),
(1041, 315, 'SIXTO ZAMBRANO', '2015-10-20 19:59:36', NULL, 1),
(1042, 315, 'EL ROSARIO', '2015-10-20 19:59:36', NULL, 1),
(1043, 316, 'AMBROSIO', '2015-10-20 19:59:36', NULL, 1),
(1044, 316, 'GERMAN RIOS LINARES', '2015-10-20 19:59:36', NULL, 1),
(1045, 316, 'JORGE HERNANDEZ', '2015-10-20 19:59:36', NULL, 1),
(1046, 316, 'LA ROSA', '2015-10-20 19:59:36', NULL, 1),
(1047, 316, 'PUNTA GORDA', '2015-10-20 19:59:36', NULL, 1),
(1048, 316, 'CARMEN HERRERA', '2015-10-20 19:59:36', NULL, 1),
(1049, 316, 'SAN BENITO', '2015-10-20 19:59:36', NULL, 1),
(1050, 316, 'ROMULO BETANCOURT', '2015-10-20 19:59:36', NULL, 1),
(1051, 316, 'ARISTIDES CALVANI', '2015-10-20 19:59:36', NULL, 1),
(1052, 317, 'RAUL CUENCA', '2015-10-20 19:59:36', NULL, 1),
(1053, 317, 'LA VICTORIA', '2015-10-20 19:59:36', NULL, 1),
(1054, 317, 'RAFAEL URDANETA', '2015-10-20 19:59:36', NULL, 1),
(1055, 318, 'JOSE RAMON YEPEZ', '2015-10-20 19:59:36', NULL, 1),
(1056, 318, 'LA CONCEPCION', '2015-10-20 19:59:36', NULL, 1),
(1057, 318, 'SAN JOSE', '2015-10-20 19:59:36', NULL, 1),
(1058, 318, 'MARIANO PARRA LEON', '2015-10-20 19:59:36', NULL, 1),
(1059, 319, 'MONAGAS', '2015-10-20 19:59:36', NULL, 1),
(1060, 319, 'ISLA DE TOAS', '2015-10-20 19:59:36', NULL, 1),
(1061, 320, 'MARCIAL HERNANDEZ', '2015-10-20 19:59:36', NULL, 1),
(1062, 320, 'FRANCISCO OCHOA', '2015-10-20 19:59:36', NULL, 1),
(1063, 320, 'SAN FRANCISCO', '2015-10-20 19:59:36', NULL, 1),
(1064, 320, 'EL BAJO', '2015-10-20 19:59:36', NULL, 1),
(1065, 320, 'DOMITILA FLORES', '2015-10-20 19:59:36', NULL, 1),
(1066, 320, 'LOS CORTIJOS', '2015-10-20 19:59:36', NULL, 1),
(1067, 321, 'BARI', '2015-10-20 19:59:36', NULL, 1),
(1068, 321, 'JESUS M SEMPRUN', '2015-10-20 19:59:36', NULL, 1),
(1069, 322, 'SIMON RODRIGUEZ', '2015-10-20 19:59:36', NULL, 1),
(1070, 322, 'CARLOS QUEVEDO', '2015-10-20 19:59:36', NULL, 1),
(1071, 322, 'FRANCISCO J PULGAR', '2015-10-20 19:59:36', NULL, 1),
(1072, 323, 'RAFAEL MARIA BARALT', '2015-10-20 19:59:36', NULL, 1),
(1073, 323, 'MANUEL MANRIQUE', '2015-10-20 19:59:36', NULL, 1),
(1074, 323, 'RAFAEL URDANETA', '2015-10-20 19:59:36', NULL, 1),
(1075, 324, 'FERNANDO GIRON TOVAR', '2015-10-20 19:59:36', NULL, 1),
(1076, 324, 'LUIS ALBERTO GOMEZ', '2015-10-20 19:59:36', NULL, 1),
(1077, 324, 'PARHUEÑA', '2015-10-20 19:59:36', NULL, 1),
(1078, 324, 'PLATANILLAL', '2015-10-20 19:59:36', NULL, 1),
(1079, 325, 'CM. SAN FERNANDO DE ATABA', '2015-10-20 19:59:36', NULL, 1),
(1080, 325, 'UCATA', '2015-10-20 19:59:36', NULL, 1),
(1081, 325, 'YAPACANA', '2015-10-20 19:59:36', NULL, 1),
(1082, 325, 'CANAME', '2015-10-20 19:59:36', NULL, 1),
(1083, 326, 'CM. MAROA', '2015-10-20 19:59:36', NULL, 1),
(1084, 326, 'VICTORINO', '2015-10-20 19:59:36', NULL, 1),
(1085, 326, 'COMUNIDAD', '2015-10-20 19:59:36', NULL, 1),
(1086, 327, 'CM. SAN CARLOS DE RIO NEG', '2015-10-20 19:59:36', NULL, 1),
(1087, 327, 'SOLANO', '2015-10-20 19:59:36', NULL, 1),
(1088, 327, 'COCUY', '2015-10-20 19:59:36', NULL, 1),
(1089, 328, 'CM. ISLA DE RATON', '2015-10-20 19:59:36', NULL, 1),
(1090, 328, 'SAMARIAPO', '2015-10-20 19:59:36', NULL, 1),
(1091, 328, 'SIPAPO', '2015-10-20 19:59:36', NULL, 1),
(1092, 328, 'MUNDUAPO', '2015-10-20 19:59:36', NULL, 1),
(1093, 328, 'GUAYAPO', '2015-10-20 19:59:36', NULL, 1),
(1094, 329, 'CM. SAN JUAN DE MANAPIARE', '2015-10-20 19:59:36', NULL, 1),
(1095, 329, 'ALTO VENTUARI', '2015-10-20 19:59:36', NULL, 1),
(1096, 329, 'MEDIO VENTUARI', '2015-10-20 19:59:36', NULL, 1),
(1097, 329, 'BAJO VENTUARI', '2015-10-20 19:59:36', NULL, 1),
(1098, 330, 'CM. LA ESMERALDA', '2015-10-20 19:59:36', NULL, 1),
(1099, 330, 'HUACHAMACARE', '2015-10-20 19:59:36', NULL, 1),
(1100, 330, 'MARAWAKA', '2015-10-20 19:59:36', NULL, 1),
(1101, 330, 'MAVACA', '2015-10-20 19:59:36', NULL, 1),
(1102, 330, 'SIERRA PARIMA', '2015-10-20 19:59:36', NULL, 1),
(1103, 331, 'SAN JOSE', '2015-10-20 19:59:36', NULL, 1),
(1104, 331, 'VIRGEN DEL VALLE', '2015-10-20 19:59:36', NULL, 1),
(1105, 331, 'SAN RAFAEL', '2015-10-20 19:59:36', NULL, 1),
(1106, 331, 'JOSE VIDAL MARCANO', '2015-10-20 19:59:36', NULL, 1),
(1107, 331, 'LEONARDO RUIZ PINEDA', '2015-10-20 19:59:36', NULL, 1),
(1108, 331, 'MONS. ARGIMIRO GARCIA', '2015-10-20 19:59:36', NULL, 1),
(1109, 331, 'MCL.ANTONIO J DE SUCRE', '2015-10-20 19:59:36', NULL, 1),
(1110, 331, 'JUAN MILLAN', '2015-10-20 19:59:36', NULL, 1),
(1111, 332, 'PEDERNALES', '2015-10-20 19:59:36', NULL, 1),
(1112, 332, 'LUIS B PRIETO FIGUERO', '2015-10-20 19:59:36', NULL, 1),
(1113, 333, 'CURIAPO', '2015-10-20 19:59:36', NULL, 1),
(1114, 333, 'SANTOS DE ABELGAS', '2015-10-20 19:59:36', NULL, 1),
(1115, 333, 'MANUEL RENAUD', '2015-10-20 19:59:36', NULL, 1),
(1116, 333, 'PADRE BARRAL', '2015-10-20 19:59:36', NULL, 1),
(1117, 333, 'ANICETO LUGO', '2015-10-20 19:59:36', NULL, 1),
(1118, 333, 'ALMIRANTE LUIS BRION', '2015-10-20 19:59:36', NULL, 1),
(1119, 334, 'IMATACA', '2015-10-20 19:59:36', NULL, 1),
(1120, 334, 'ROMULO GALLEGOS', '2015-10-20 19:59:36', NULL, 1),
(1121, 334, 'JUAN BAUTISTA ARISMEN', '2015-10-20 19:59:36', NULL, 1),
(1122, 334, 'MANUEL PIAR', '2015-10-20 19:59:36', NULL, 1),
(1123, 334, '5 DE JULIO', '2015-10-20 19:59:36', NULL, 1),
(1124, 335, 'CARABALLEDA', '2015-10-20 19:59:36', NULL, 1),
(1125, 335, 'CARAYACA', '2015-10-20 19:59:36', NULL, 1),
(1126, 335, 'CARUAO', '2015-10-20 19:59:36', NULL, 1),
(1127, 335, 'CATIA LA MAR', '2015-10-20 19:59:36', NULL, 1),
(1128, 335, 'LA GUAIRA', '2015-10-20 19:59:36', NULL, 1),
(1129, 335, 'MACUTO', '2015-10-20 19:59:36', NULL, 1),
(1130, 335, 'MAIQUETIA', '2015-10-20 19:59:36', NULL, 1),
(1131, 335, 'NAIGUATA', '2015-10-20 19:59:36', NULL, 1),
(1132, 335, 'EL JUNKO', '2015-10-20 19:59:36', NULL, 1),
(1133, 335, 'PQ RAUL LEONI', '2015-10-20 19:59:36', NULL, 1),
(1134, 335, 'PQ CARLOS SOUBLETTE', '2015-10-20 19:59:36', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
`id_perfil` int(11) unsigned NOT NULL,
  `perfil_nomb` varchar(50) NOT NULL,
  `perfil_desc` varchar(50) DEFAULT NULL,
  `perfil_menu_opc_id` int(11) DEFAULT NULL,
  `perfil_act` bit(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `perfil_nomb`, `perfil_desc`, `perfil_menu_opc_id`, `perfil_act`) VALUES
(1, 'ADMIN', 'Administrador del sistema Xcolar', 0, b'1'),
(2, 'CONTROL DE ESTUDIO', 'Perfil para personal de Control de Estudios', 0, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
`id_persona` int(11) NOT NULL,
  `id_pais_nacimiento` int(11) NOT NULL,
  `primer_nombre` varchar(100) NOT NULL,
  `segundo_nombre` varchar(100) DEFAULT NULL,
  `primer_apellido` varchar(100) NOT NULL,
  `segundo_apellido` varchar(100) DEFAULT NULL,
  `cedula_identidad` varchar(20) NOT NULL DEFAULT '0',
  `fecha_nacimiento` date NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `nacionalidad` varchar(100) NOT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `profesion_ocupacion` varchar(100) DEFAULT NULL,
  `id_direccion_persona` int(11) NOT NULL,
  `id_telefono_persona` int(11) NOT NULL,
  `trabaja` tinyint(1) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `director` tinyint(1) NOT NULL DEFAULT '0',
  `personal_escuela` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de las personas' AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `id_pais_nacimiento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `cedula_identidad`, `fecha_nacimiento`, `id_sexo`, `nacionalidad`, `correo_electronico`, `profesion_ocupacion`, `id_direccion_persona`, `id_telefono_persona`, `trabaja`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`, `director`, `personal_escuela`) VALUES
(1, 1, 'DEMO', NULL, 'DEMO', NULL, '12345678', '1982-12-11', 1, 'VENEZOLANO', 'DEMO@DEMO.COM', 'DEMO', 1, 1, 0, '2016-01-28 03:29:45', NULL, 1, 0, 1),
(15, 1, 'AMPARO', NULL, 'AZPIROZ', NULL, '12345678', '2016-11-11', 2, 'VENEZOLANA', NULL, NULL, 1, 1, 1, '2016-01-27 22:20:39', NULL, 1, 1, 1),
(16, 1, 'ADRIANA', NULL, 'RODRIGUEZ', NULL, '111111111', '0000-00-00', 2, 'VENEZOLANA', NULL, NULL, 1, 1, 1, '2016-01-27 22:20:39', NULL, 1, 1, 1),
(17, 1, 'LOURDEZ', NULL, 'PEREZ', NULL, '22222222', '0000-00-00', 2, 'VENEZOLANA', NULL, NULL, 1, 1, 1, '2016-01-27 22:20:39', NULL, 1, 1, 1),
(19, 1, 'TERAPISTA', NULL, 'PSICOLOGA', NULL, '33333333', '0000-00-00', 2, 'VENEZOLANA', NULL, NULL, 1, 1, 1, '2016-02-01 16:59:49', NULL, 1, 0, 1),
(20, 1, 'TERAPISTA', NULL, 'TRABAJO SOCIAL', NULL, '44444444', '0000-00-00', 2, 'VENEZOLANA', NULL, NULL, 1, 1, 1, '2016-02-01 17:01:02', NULL, 1, 0, 1),
(21, 1, 'TERAPISTA', NULL, 'PSICOPEDAGOGA', NULL, '55555555', '0000-00-00', 2, 'VENEZOLANA', NULL, NULL, 1, 1, 1, '2016-02-01 17:01:02', NULL, 1, 0, 0),
(42, 1, 'NORWILL', 'ALFREDO', 'GUTIERREZ', 'FIGUEROA', '15544359', '1982-11-12', 1, 'VENEZOLANA', NULL, NULL, 39, 3, NULL, '2016-02-22 22:40:36', NULL, 1, 0, 0),
(43, 1, 'NORANYEL', 'MARIE', 'VALERA', 'LOPEZ', '0', '2013-01-08', 1, 'VENEZOLANA', NULL, NULL, 40, 3, NULL, '2016-02-22 22:40:36', NULL, 1, 0, 0),
(44, 1, 'DAYANA', 'DEXIREE', 'ROJAS', 'CARRANZA', '10884584226', '0000-00-00', 1, 'VENEZOLANA', '', '', 1, 1, 0, '2016-02-29 03:36:56', NULL, 1, 0, 0),
(46, 1, 'MARTINA', 'ELENA', 'CARRANZA', 'BURGOS', '84584226', '0000-00-00', 1, 'VENEZOLANA', '', '', 1, 1, 0, '2016-02-29 03:37:53', NULL, 1, 0, 0),
(47, 1, 'JAVIER', 'FRANCISCO', 'PEREZ', 'IZARRA', '1099958735', '0000-00-00', 1, 'VENEZOLANA', '', '', 1, 1, 0, '2016-02-29 03:38:56', NULL, 1, 0, 0),
(48, 1, 'MARISOL', '', 'IZARRA', 'MEDINA', '9958735', '0000-00-00', 1, 'VENEZOLANA', '', '', 1, 1, 0, '2016-02-29 03:39:44', NULL, 1, 0, 0),
(49, 1, 'ORLIAGNY', 'NOHEMI', 'LOPEZ', 'RODRIGUEZ', '10715595350', '0000-00-00', 1, 'VENEZOLANA', '', '', 1, 1, 0, '2016-02-29 03:40:58', NULL, 1, 0, 0),
(50, 1, 'YOLANDA', 'MORELA', 'RODRIGUEZ', 'RONDON', '15595350', '0000-00-00', 1, 'VENEZOLANA', '', '', 1, 1, 0, '2016-02-29 03:41:48', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pesos`
--

CREATE TABLE IF NOT EXISTS `pesos` (
`id_peso` int(11) NOT NULL,
  `valor` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=144 ;

--
-- Volcado de datos para la tabla `pesos`
--

INSERT INTO `pesos` (`id_peso`, `valor`) VALUES
(1, '8 Kg'),
(2, '9 Kg'),
(3, '10 Kg'),
(4, '11 Kg'),
(5, '12 Kg'),
(6, '13 Kg'),
(7, '14 Kg'),
(8, '15 Kg'),
(9, '16 Kg'),
(10, '17 Kg'),
(11, '18 Kg'),
(12, '19 Kg'),
(13, '20 Kg'),
(14, '21 Kg'),
(15, '22 Kg'),
(16, '23 Kg'),
(17, '24 Kg'),
(18, '25 Kg'),
(19, '26 Kg'),
(20, '27 Kg'),
(21, '28 Kg'),
(22, '29 Kg'),
(23, '30 Kg'),
(24, '31 Kg'),
(25, '32 Kg'),
(26, '33 Kg'),
(27, '34 Kg'),
(28, '35 Kg'),
(29, '36 Kg'),
(30, '37 Kg'),
(31, '38 Kg'),
(32, '39 Kg'),
(33, '40 Kg'),
(34, '41 Kg'),
(35, '42 Kg'),
(36, '43 Kg'),
(37, '44 Kg'),
(38, '45 Kg'),
(39, '46 Kg'),
(40, '47 Kg'),
(41, '48 Kg'),
(42, '49 Kg'),
(43, '50 Kg'),
(44, '51 Kg'),
(45, '52 Kg'),
(46, '53 Kg'),
(47, '54 Kg'),
(48, '55 Kg'),
(49, '56 Kg'),
(50, '57 Kg'),
(51, '58 Kg'),
(52, '59 Kg'),
(53, '60 Kg'),
(54, '61 Kg'),
(55, '62 Kg'),
(56, '63 Kg'),
(57, '64 Kg'),
(58, '65 Kg'),
(59, '66 Kg'),
(60, '67 Kg'),
(61, '68 Kg'),
(62, '69 Kg'),
(63, '70 Kg'),
(64, '71 Kg'),
(65, '72 Kg'),
(66, '73 Kg'),
(67, '74 Kg'),
(68, '75 Kg'),
(69, '76 Kg'),
(70, '77 Kg'),
(71, '78 Kg'),
(72, '79 Kg'),
(73, '80 Kg'),
(74, '81 Kg'),
(75, '82 Kg'),
(76, '83 Kg'),
(77, '84 Kg'),
(78, '85 Kg'),
(79, '86 Kg'),
(80, '87 Kg'),
(81, '88 Kg'),
(82, '89 Kg'),
(83, '90 Kg'),
(84, '91 Kg'),
(85, '92 Kg'),
(86, '93 Kg'),
(87, '94 Kg'),
(88, '95 Kg'),
(89, '96 Kg'),
(90, '97 Kg'),
(91, '98 Kg'),
(92, '99 Kg'),
(93, '100 Kg'),
(94, '101 Kg'),
(95, '102 Kg'),
(96, '103 Kg'),
(97, '104 Kg'),
(98, '105 Kg'),
(99, '106 Kg'),
(100, '107 Kg'),
(101, '108 Kg'),
(102, '109 Kg'),
(103, '110 Kg'),
(104, '111 Kg'),
(105, '112 Kg'),
(106, '113 Kg'),
(107, '114 Kg'),
(108, '115 Kg'),
(109, '116 Kg'),
(110, '117 Kg'),
(111, '118 Kg'),
(112, '119 Kg'),
(113, '120 Kg'),
(114, '121 Kg'),
(115, '122 Kg'),
(116, '123 Kg'),
(117, '124 Kg'),
(118, '125 Kg'),
(119, '126 Kg'),
(120, '127 Kg'),
(121, '128 Kg'),
(122, '129 Kg'),
(123, '130 Kg'),
(124, '131 Kg'),
(125, '132 Kg'),
(126, '133 Kg'),
(127, '134 Kg'),
(128, '135 Kg'),
(129, '136 Kg'),
(130, '137 Kg'),
(131, '138 Kg'),
(132, '139 Kg'),
(133, '140 Kg'),
(134, '141 Kg'),
(135, '142 Kg'),
(136, '143 Kg'),
(137, '144 Kg'),
(138, '145 Kg'),
(139, '146 Kg'),
(140, '147 Kg'),
(141, '148 Kg'),
(142, '149 Kg'),
(143, '150 Kg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_est_eva_ins`
--

CREATE TABLE IF NOT EXISTS `proyecto_est_eva_ins` (
`proyecto_est_eva_ins_id` int(11) NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `est_eva_ins_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `proyecto_est_eva_ins`
--

INSERT INTO `proyecto_est_eva_ins` (`proyecto_est_eva_ins_id`, `proyecto_id`, `est_eva_ins_id`) VALUES
(1, 1, 0),
(2, 1, 1),
(3, 1, 2),
(4, 1, 3),
(5, 1, 4),
(6, 2, 1),
(7, 1, 1),
(8, 1, 2),
(9, 1, 3),
(10, 1, 4),
(11, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_est_eva_tec`
--

CREATE TABLE IF NOT EXISTS `proyecto_est_eva_tec` (
`proyecto_est_eva_tec_id` int(11) NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `est_eva_tec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_primaria`
--

CREATE TABLE IF NOT EXISTS `proyecto_primaria` (
`proyecto_id` int(11) NOT NULL,
  `proyecto_nombre` varchar(200) DEFAULT NULL,
  `proyecto_tema` varchar(200) DEFAULT NULL,
  `proyecto_tiempo` int(11) DEFAULT NULL,
  `proyecto_tipo_tiempo_id` int(11) DEFAULT NULL,
  `maestro_id` int(11) DEFAULT NULL,
  `grado_id` int(11) DEFAULT NULL,
  `seccion_id` int(11) NOT NULL,
  `proyecto_diagnostico` varchar(400) DEFAULT NULL,
  `proyecto_proposito` varchar(400) DEFAULT NULL,
  `proyecto_actividades_generales` varchar(400) DEFAULT NULL,
  `proyecto_lapso` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `proyecto_primaria`
--

INSERT INTO `proyecto_primaria` (`proyecto_id`, `proyecto_nombre`, `proyecto_tema`, `proyecto_tiempo`, `proyecto_tipo_tiempo_id`, `maestro_id`, `grado_id`, `seccion_id`, `proyecto_diagnostico`, `proyecto_proposito`, `proyecto_actividades_generales`, `proyecto_lapso`) VALUES
(1, 'pruena de nombre', 'tema variado prueba', 5, 1, 1, 4, 0, 'prueba diag', 'proposito', 'mcuhas', 1),
(10, 'pruena de nombre', 'tema variado prueba', 5, 1, 1, 4, 0, 'prueba diag', 'proposito', 'mcuhas', 1),
(11, 'hola', 'tema', 1, 1, 1, 4, 0, 'diagnostico', 'proposito', 'actividas', 0),
(12, '1', '1', 69, 1, 1, 4, 0, 'diagnostico', 'proposito', 'actividades', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntaje_censo`
--

CREATE TABLE IF NOT EXISTS `puntaje_censo` (
`id_puntaje_censo` int(11) NOT NULL,
  `id_censo` int(11) NOT NULL DEFAULT '0',
  `escolaridad` int(11) NOT NULL DEFAULT '0',
  `residencia` int(11) NOT NULL DEFAULT '0',
  `orfandad` int(11) NOT NULL DEFAULT '0',
  `representante_trabaja` int(11) NOT NULL DEFAULT '0',
  `representante_jornada_laboral` int(11) NOT NULL DEFAULT '0',
  `representante_nivel_ingreso` int(11) DEFAULT '0',
  `miembros_familia` int(11) NOT NULL DEFAULT '0',
  `vivienda` int(11) NOT NULL DEFAULT '0',
  `no_residente` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recaudos`
--

CREATE TABLE IF NOT EXISTS `recaudos` (
`id_recaudo` int(11) NOT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'fecha de creación del registro',
  `fecha_actualizacion` timestamp NULL DEFAULT NULL COMMENT 'fecha de actualización del registro',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'registro activo o no'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `recaudos`
--

INSERT INTO `recaudos` (`id_recaudo`, `valor`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'Partida de Nacimiento Original y Copia', '2016-01-11 16:53:50', NULL, 1),
(2, 'Fotocopia Cedula de Identidad del Representan', '2015-11-13 07:20:34', NULL, 1),
(3, '2 Fotos Tamaño Carnet del Representante Legal', '2015-11-13 07:20:34', NULL, 1),
(4, '4 Fotos Tamaño Carnet del Alumno', '2015-11-13 07:20:34', NULL, 1),
(5, 'Constancia de Niño Sano', '2016-01-11 16:53:50', NULL, 1),
(6, 'Boleta de promoción del grupo anterior', '2016-01-11 16:53:50', NULL, 1),
(7, 'Constancia de Residencia del Alumno (a)', '2016-01-11 16:53:50', NULL, 1),
(8, 'Constancia de Residencia del Representante', '2016-01-11 16:53:50', NULL, 1),
(9, 'Constancia de Retiro del Plantel de Procedenc', '2016-01-11 16:53:50', NULL, 1),
(10, 'Copia de Cedula de Identidad del Alumno', '2016-01-11 16:53:50', NULL, 1),
(11, 'Notas certificadas', '2016-01-11 16:53:50', NULL, 1),
(12, 'Certificado de promocion del año anterior', '2016-01-11 17:04:12', NULL, 1),
(13, 'Original y Copia de Certificado de Vacunas', '2016-01-11 16:57:54', NULL, 1),
(14, 'Boleta de promocion del grado anterior', '2016-01-11 16:59:48', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recaudo_estudiante`
--

CREATE TABLE IF NOT EXISTS `recaudo_estudiante` (
`id_recaudo_estudiante` int(11) NOT NULL,
  `id_recaudo` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL COMMENT 'fecha de actualización del registro',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'registro activo o no'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `recaudo_estudiante`
--

INSERT INTO `recaudo_estudiante` (`id_recaudo_estudiante`, `id_recaudo`, `id_estudiante`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 1, 21, '2016-02-22 22:41:16', NULL, 1),
(2, 2, 21, '2016-02-22 22:41:16', NULL, 1),
(3, 3, 21, '2016-02-22 22:41:16', NULL, 1),
(4, 4, 21, '2016-02-22 22:41:16', NULL, 1),
(5, 13, 21, '2016-02-22 22:41:16', NULL, 1),
(6, 5, 21, '2016-02-22 22:41:16', NULL, 1),
(7, 6, 21, '2016-02-22 22:41:16', NULL, 1),
(8, 7, 21, '2016-02-22 22:41:16', NULL, 1),
(9, 8, 21, '2016-02-22 22:41:16', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recaudo_grado`
--

CREATE TABLE IF NOT EXISTS `recaudo_grado` (
`id_recaudo_grado` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_recaudo` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL COMMENT 'fecha de actualización del registro',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'registro activo o no'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=104 ;

--
-- Volcado de datos para la tabla `recaudo_grado`
--

INSERT INTO `recaudo_grado` (`id_recaudo_grado`, `id_grado`, `id_recaudo`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(8, 1, 1, '2016-01-11 17:05:11', NULL, 1),
(9, 2, 1, '2016-01-11 17:05:11', NULL, 1),
(10, 3, 1, '2016-01-11 17:05:11', NULL, 1),
(11, 4, 1, '2016-01-11 17:05:11', NULL, 1),
(12, 5, 1, '2016-01-11 17:05:11', NULL, 1),
(13, 6, 1, '2016-01-11 17:05:11', NULL, 1),
(14, 7, 1, '2016-01-11 17:05:11', NULL, 1),
(15, 8, 1, '2016-01-11 17:05:11', NULL, 1),
(16, 9, 1, '2016-01-11 17:05:11', NULL, 1),
(17, 10, 1, '2016-01-11 17:05:11', NULL, 1),
(18, 11, 1, '2016-01-11 17:05:11', NULL, 1),
(19, 12, 1, '2016-01-11 17:05:11', NULL, 1),
(20, 1, 2, '2016-01-11 17:05:11', NULL, 1),
(21, 2, 2, '2016-01-11 17:05:11', NULL, 1),
(22, 3, 2, '2016-01-11 17:05:11', NULL, 1),
(23, 4, 2, '2016-01-11 17:05:11', NULL, 1),
(24, 5, 2, '2016-01-11 17:05:11', NULL, 1),
(25, 6, 2, '2016-01-11 17:05:11', NULL, 1),
(26, 7, 2, '2016-01-11 17:05:11', NULL, 1),
(27, 8, 2, '2016-01-11 17:05:11', NULL, 1),
(28, 9, 2, '2016-01-11 17:05:11', NULL, 1),
(29, 10, 2, '2016-01-11 17:05:11', NULL, 1),
(30, 11, 2, '2016-01-11 17:05:11', NULL, 1),
(31, 12, 2, '2016-01-11 17:05:11', NULL, 1),
(32, 1, 3, '2016-01-11 17:05:11', NULL, 1),
(33, 2, 3, '2016-01-11 17:05:11', NULL, 1),
(34, 3, 3, '2016-01-11 17:05:11', NULL, 1),
(35, 4, 3, '2016-01-11 17:05:11', NULL, 1),
(36, 5, 3, '2016-01-11 17:05:11', NULL, 1),
(37, 6, 3, '2016-01-11 17:05:11', NULL, 1),
(38, 7, 3, '2016-01-11 17:05:11', NULL, 1),
(39, 8, 3, '2016-01-11 17:05:11', NULL, 1),
(40, 9, 3, '2016-01-11 17:05:11', NULL, 1),
(41, 10, 3, '2016-01-11 17:05:11', NULL, 1),
(42, 11, 3, '2016-01-11 17:05:11', NULL, 1),
(43, 12, 3, '2016-01-11 17:05:11', NULL, 1),
(44, 1, 4, '2016-01-11 17:05:11', NULL, 1),
(45, 2, 4, '2016-01-11 17:05:11', NULL, 1),
(46, 3, 4, '2016-01-11 17:05:11', NULL, 1),
(47, 4, 4, '2016-01-11 17:05:11', NULL, 1),
(48, 5, 4, '2016-01-11 17:05:11', NULL, 1),
(49, 6, 4, '2016-01-11 17:05:11', NULL, 1),
(50, 7, 4, '2016-01-11 17:05:11', NULL, 1),
(51, 8, 4, '2016-01-11 17:05:11', NULL, 1),
(52, 9, 4, '2016-01-11 17:05:11', NULL, 1),
(53, 10, 4, '2016-01-11 17:05:11', NULL, 1),
(54, 11, 4, '2016-01-11 17:05:11', NULL, 1),
(55, 12, 4, '2016-01-11 17:05:11', NULL, 1),
(56, 1, 13, '2016-01-11 17:05:11', NULL, 1),
(57, 2, 13, '2016-01-11 17:05:11', NULL, 1),
(58, 3, 13, '2016-01-11 17:05:11', NULL, 1),
(59, 1, 5, '2016-01-11 17:05:11', NULL, 1),
(60, 2, 5, '2016-01-11 17:05:11', NULL, 1),
(61, 3, 5, '2016-01-11 17:05:11', NULL, 1),
(62, 4, 5, '2016-01-11 17:05:11', NULL, 1),
(63, 5, 5, '2016-01-11 17:05:11', NULL, 1),
(64, 6, 5, '2016-01-11 17:05:11', NULL, 1),
(65, 1, 6, '2016-01-11 17:05:11', NULL, 1),
(66, 2, 6, '2016-01-11 17:05:11', NULL, 1),
(67, 3, 6, '2016-01-11 17:05:11', NULL, 1),
(68, 4, 14, '2016-01-11 17:05:11', NULL, 1),
(69, 5, 14, '2016-01-11 17:05:11', NULL, 1),
(70, 6, 14, '2016-01-11 17:05:11', NULL, 1),
(71, 7, 14, '2016-01-11 17:05:11', NULL, 1),
(72, 8, 14, '2016-01-11 17:05:11', NULL, 1),
(73, 9, 14, '2016-01-11 17:05:11', NULL, 1),
(74, 10, 12, '2016-01-11 17:05:11', NULL, 1),
(75, 11, 12, '2016-01-11 17:05:11', NULL, 1),
(76, 12, 12, '2016-01-11 17:05:11', NULL, 1),
(77, 1, 7, '2016-01-11 17:05:11', NULL, 1),
(78, 2, 7, '2016-01-11 17:05:11', NULL, 1),
(79, 3, 7, '2016-01-11 17:05:11', NULL, 1),
(80, 1, 8, '2016-01-11 17:05:11', NULL, 1),
(81, 2, 8, '2016-01-11 17:05:11', NULL, 1),
(82, 3, 8, '2016-01-11 17:05:11', NULL, 1),
(83, 4, 7, '2016-01-11 17:05:11', NULL, 1),
(84, 5, 7, '2016-01-11 17:05:11', NULL, 1),
(85, 6, 7, '2016-01-11 17:05:11', NULL, 1),
(86, 7, 7, '2016-01-11 17:05:11', NULL, 1),
(87, 8, 7, '2016-01-11 17:05:11', NULL, 1),
(88, 9, 7, '2016-01-11 17:05:11', NULL, 1),
(89, 4, 9, '2016-01-11 17:05:11', NULL, 1),
(90, 5, 9, '2016-01-11 17:05:11', NULL, 1),
(91, 6, 9, '2016-01-11 17:05:11', NULL, 1),
(92, 7, 9, '2016-01-11 17:05:11', NULL, 1),
(93, 8, 9, '2016-01-11 17:05:11', NULL, 1),
(94, 9, 9, '2016-01-11 17:05:11', NULL, 1),
(95, 10, 9, '2016-01-11 17:05:11', NULL, 1),
(96, 11, 9, '2016-01-11 17:05:11', NULL, 1),
(97, 12, 9, '2016-01-11 17:05:11', NULL, 1),
(98, 10, 11, '2016-01-11 17:05:11', NULL, 1),
(99, 11, 11, '2016-01-11 17:05:11', NULL, 1),
(100, 12, 11, '2016-01-11 17:05:11', NULL, 1),
(101, 10, 10, '2016-01-11 17:05:11', NULL, 1),
(102, 11, 10, '2016-01-11 17:05:11', NULL, 1),
(103, 12, 10, '2016-01-11 17:05:11', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos_planificacion_media`
--

CREATE TABLE IF NOT EXISTS `recursos_planificacion_media` (
`recursos_planificacion_media_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `recursos_planificacion_media`
--

INSERT INTO `recursos_planificacion_media` (`recursos_planificacion_media_id`, `name`) VALUES
(1, 'Afiches'),
(2, 'Balones'),
(3, 'Bloc de dibujo'),
(4, 'Calculadora'),
(5, 'Cartel'),
(6, 'Compás'),
(7, 'Computadora'),
(8, 'Cuadernos'),
(9, 'Diapositivas'),
(10, 'Diccionarios'),
(11, 'Enciclopedias'),
(12, 'Guías'),
(13, 'Internet'),
(14, 'Láminas'),
(15, 'Libro de consulta'),
(16, 'Mapas'),
(17, 'Marcadores'),
(18, 'Material audiovisual'),
(19, 'Material de dibujo'),
(20, 'Material impreso'),
(21, 'Materiales de lab'),
(22, 'Modelos'),
(23, 'Papelógrafo'),
(24, 'Periódicos'),
(25, 'Pinturas'),
(26, 'Pizarra electrónica'),
(27, 'Pizarrón'),
(28, 'Regla'),
(29, 'Revistas'),
(30, 'Rotafolio'),
(31, 'Transparencias'),
(32, 'Utilies escolares'),
(33, 'Video Beam');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE IF NOT EXISTS `redes_sociales` (
`id_redes_social` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las redes sociales que pudiese usar un pa' AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `redes_sociales`
--

INSERT INTO `redes_sociales` (`id_redes_social`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'FACEBOOK', '2015-10-20 20:14:12', NULL, 1),
(2, 'TWITTER', '2015-10-20 20:14:12', NULL, 1),
(3, 'WHATSAPP', '2015-10-20 20:14:12', NULL, 1),
(4, 'GOOGLE PLUS', '2015-10-20 20:14:12', NULL, 1),
(5, 'INSTAGRAM', '2015-10-20 20:14:12', NULL, 1),
(6, 'LINKEDIN', '2015-10-20 20:14:12', NULL, 1),
(7, 'PINTEREST', '2015-10-20 20:14:13', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales_usadas`
--

CREATE TABLE IF NOT EXISTS `redes_sociales_usadas` (
`id_ redes_sociales_usadas` int(11) NOT NULL,
  `id_red_social` int(11) NOT NULL,
  `id_padre_representante` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las redes sociales usadas por padre o rep' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representantes`
--

CREATE TABLE IF NOT EXISTS `representantes` (
`id_representante` int(11) NOT NULL,
  `id_parentesco` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_redes_sociales` int(11) DEFAULT NULL,
  `id_empleo` int(11) DEFAULT NULL,
  `id_escala_ingreso` int(11) DEFAULT NULL,
  `id_estado_civil` int(11) DEFAULT NULL,
  `ingreso_mensual` decimal(8,2) DEFAULT NULL,
  `diversidad_funcional` varchar(150) DEFAULT NULL,
  `trabaja` tinyint(1) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `otros_ingresos` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los representantes' AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `representantes`
--

INSERT INTO `representantes` (`id_representante`, `id_parentesco`, `id_persona`, `id_redes_sociales`, `id_empleo`, `id_escala_ingreso`, `id_estado_civil`, `ingreso_mensual`, `diversidad_funcional`, `trabaja`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`, `otros_ingresos`) VALUES
(22, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, '2016-02-22 22:20:13', NULL, 1, NULL),
(24, 1, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-02-22 22:40:36', NULL, 1, NULL),
(25, 2, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-02-29 03:51:04', NULL, 1, NULL),
(26, 2, 48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-02-29 03:51:18', NULL, 1, NULL),
(27, 2, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-02-29 03:51:27', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sacramentos`
--

CREATE TABLE IF NOT EXISTS `sacramentos` (
`id_sacramento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los sacramentos disponibles para los estu' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `sacramentos`
--

INSERT INTO `sacramentos` (`id_sacramento`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'BAUTIZO', '2015-10-20 20:17:59', NULL, 1),
(2, 'PRIMERA COMUNION', '2015-10-20 20:17:59', NULL, 1),
(3, 'CONFIRMACION', '2015-10-20 20:17:59', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sacramentos_recibidos`
--

CREATE TABLE IF NOT EXISTS `sacramentos_recibidos` (
`id_sacramentos_recibidos` int(11) NOT NULL,
  `id_sacramento` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los sacramentos recibidos po' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
`id_seccion` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `nombre_seccion` varchar(45) NOT NULL,
  `abreviacion_seccion` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `teacher_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de las secciones por grado' AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id_seccion`, `id_grado`, `nombre_seccion`, `abreviacion_seccion`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`, `teacher_id`) VALUES
(1, 1, 'Primer Grupo A', '1gpo A', '2016-02-24 18:15:03', NULL, 1, 1),
(2, 2, 'Segundo Grupo A', '2gpo A', '2016-01-11 16:43:15', NULL, 1, 1),
(3, 3, 'Tercer Grupo A', '3gpo A', '2016-01-11 16:43:15', NULL, 1, 1),
(4, 4, 'Primer Grado A', '1gdo A', '2016-01-11 16:43:15', NULL, 1, 1),
(5, 5, 'Segundo Grado A', '2gdo A', '2016-01-11 16:43:15', NULL, 1, 1),
(6, 6, 'Tercer Grado A', '3gdo A', '2016-01-11 16:43:15', NULL, 1, 1),
(7, 7, 'Cuarto Grado A', '4gdo A', '2016-01-11 16:43:15', NULL, 1, 1),
(8, 8, 'Quinto Grado A', '5gdo A', '2016-01-11 16:43:15', NULL, 1, 1),
(9, 9, 'Sexto Grado A', '6gdo A', '2016-01-11 16:43:15', NULL, 1, 1),
(10, 10, 'Primer Año A', '1ro A', '2016-04-05 17:35:12', NULL, 1, 1),
(11, 11, 'Segundo Año A', '2do A', '2016-02-29 03:06:27', NULL, 1, 1),
(12, 12, 'Tercer Año A', '3ero A', '2016-02-29 03:06:27', NULL, 1, 1),
(13, 1, 'Primer Grupo B', '1gpo B', '2016-01-11 16:44:23', NULL, 1, 1),
(14, 2, 'Segundo Grupo B', '2gpo B', '2016-01-11 16:44:23', NULL, 1, 1),
(15, 3, 'Tercer Grupo B', '3gpo B', '2016-01-11 16:44:23', NULL, 1, 1),
(16, 4, 'Primer Grado B', '1gdo B', '2016-01-11 16:44:23', NULL, 1, 1),
(17, 5, 'Segundo Grado B', '2gdo B', '2016-01-11 16:44:23', NULL, 1, 1),
(18, 6, 'Tercer Grado B', '3gdo B', '2016-01-11 16:44:23', NULL, 1, 1),
(19, 7, 'Cuarto Grado B', '4gdo B', '2016-01-11 16:44:23', NULL, 1, 1),
(20, 8, 'Quinto Grado B', '5gdo B', '2016-01-11 16:44:23', NULL, 1, 1),
(21, 9, 'Sexto Grado B', '6gdo B', '2016-01-11 16:44:23', NULL, 1, 1),
(22, 10, 'Primer Año B', '1ero B', '2016-02-29 03:06:27', NULL, 1, 1),
(23, 11, 'Segundo Año B', '2do B', '2016-02-29 03:06:27', NULL, 1, 1),
(24, 12, 'Tercer Año B', '3ero B', '2016-02-29 03:06:27', NULL, 1, 1),
(25, 10, 'Primer Año C', '1ero C', '2016-04-05 17:40:16', NULL, 1, 1),
(26, 11, 'Segundo Año C', '2do C', '2016-04-14 05:36:32', NULL, 1, 1),
(27, 12, 'Tercer Año C', '3ro C', '2016-04-14 05:36:56', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores_chacao`
--

CREATE TABLE IF NOT EXISTS `sectores_chacao` (
`id_sector` int(11) NOT NULL,
  `id_parroquia` int(11) NOT NULL DEFAULT '621',
  `nombre` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `sectores_chacao`
--

INSERT INTO `sectores_chacao` (`id_sector`, `id_parroquia`, `nombre`) VALUES
(1, 621, 'SECTOR  EL PEDREGAL ( LA MANGUERA, FARFÁN, AV. PEDRO MATIAS REYES)\r'),
(2, 621, 'SECTOR  EL PEDREGAL NORTE ( EL TÁRTAGO, CALLE EL PEDREGAL, BARRIO NUEVO)\r'),
(3, 621, 'SECTOR EL BUCARAL\r'),
(4, 621, 'SECTOR PAJARITOS\r'),
(5, 621, 'SECTOR BELLO CAMPO\r'),
(6, 621, 'SECTOR LA CRUZ\r'),
(7, 621, 'SECTOR SAN JOSÉ DE  LA FLORESTA\r'),
(8, 621, 'URBANIZACIÓN  LA FLORESTA\r'),
(9, 621, 'URBANIZACIÓN CAMPO ALEGRE\r'),
(10, 621, 'URBANIZACIÓN EL ROSAL\r'),
(11, 621, 'URBANIZACIÓN LOS PALOS GRANDES\r'),
(12, 621, 'URBANIZACIÓN ALTAMIRA  NORTE \r'),
(13, 621, 'URBANIZACIÓN ALTAMIRA SUR\r'),
(14, 621, 'URBANIZACIÓN EL DORADO\r'),
(15, 621, 'URBANIZACIÓN SAN SOUCI \r'),
(16, 621, 'URBANIZACIÓN EL BOSQUE\r'),
(17, 621, 'URBANIZACIÓN COUNTRY CLUB\r'),
(18, 621, 'URBANIZACIÓN  LA CASTELLANA \r'),
(19, 621, 'URBANIZACIÓN CASCO DE CHACAO\r'),
(20, 621, 'URBANIZACIÓN BOLÍVAR  '),
(21, 621, 'URBANIZACIÓN BELLO CAMPO\r'),
(22, 621, 'URBANIZACIÓN  LA CASTELLANA \r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE IF NOT EXISTS `sesiones` (
  `id_sesion` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_ip` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabla que contiene las sesiones de los usuarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexos`
--

CREATE TABLE IF NOT EXISTS `sexos` (
`id_sexo` int(11) NOT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los tipos de sexo' AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sexos`
--

INSERT INTO `sexos` (`id_sexo`, `sexo`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'MASCULINO', '2015-10-20 20:09:17', NULL, 1),
(2, 'FEMENINO', '2015-10-20 20:09:17', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
`subject_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `class_id`, `teacher_id`) VALUES
(1, 'HISTORIA DE CHACAO', 10, 1),
(2, 'CASTELLANO', 4, 1),
(3, 'MATEMATICA', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_calzados`
--

CREATE TABLE IF NOT EXISTS `talla_calzados` (
`id_talla_calzado` int(11) NOT NULL,
  `valor` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `talla_calzados`
--

INSERT INTO `talla_calzados` (`id_talla_calzado`, `valor`) VALUES
(1, '16'),
(2, '17'),
(3, '18'),
(4, '19'),
(5, '20'),
(6, '21'),
(7, '22'),
(8, '23'),
(9, '24'),
(10, '25'),
(11, '26'),
(12, '27'),
(13, '28'),
(14, '29'),
(15, '30'),
(16, '31'),
(17, '32'),
(18, '33'),
(19, '34'),
(20, '35'),
(21, '36'),
(22, '37'),
(23, '38'),
(24, '39'),
(25, '40'),
(26, '41'),
(27, '42'),
(28, '43'),
(29, '44'),
(30, '45'),
(31, '46'),
(32, '47'),
(33, '48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_camisas`
--

CREATE TABLE IF NOT EXISTS `talla_camisas` (
`id_talla_camisa` int(11) NOT NULL,
  `valor` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `talla_camisas`
--

INSERT INTO `talla_camisas` (`id_talla_camisa`, `valor`) VALUES
(1, '2'),
(2, '3'),
(3, '4'),
(4, '5'),
(5, '6'),
(6, '7'),
(7, '8'),
(8, '9'),
(9, '10'),
(10, '11'),
(11, '12'),
(12, '13'),
(13, '14'),
(14, '15'),
(15, '16'),
(16, 'SS'),
(17, 'S'),
(18, 'M'),
(19, 'L'),
(20, 'XL'),
(21, 'XXL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_pantalones`
--

CREATE TABLE IF NOT EXISTS `talla_pantalones` (
`id_talla_pantalon` int(11) NOT NULL,
  `valor` varchar(15) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `talla_pantalones`
--

INSERT INTO `talla_pantalones` (`id_talla_pantalon`, `valor`) VALUES
(1, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30'),
(31, '31'),
(32, '32'),
(33, '33'),
(34, '34'),
(35, '35'),
(36, '36'),
(37, '37'),
(38, '38'),
(39, '39'),
(40, '40'),
(41, '41'),
(42, '42'),
(43, '43'),
(44, '44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `birthday` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `authentication_key` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user` longtext COLLATE utf8_unicode_ci,
  `mobile_phone` longtext CHARACTER SET utf8,
  `id_cargo` int(11) NOT NULL DEFAULT '0',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `id_escuela` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `birthday`, `sex`, `address`, `phone`, `email`, `password`, `authentication_key`, `user`, `mobile_phone`, `id_cargo`, `registro_activo`, `id_escuela`) VALUES
(1, 'Norwill', '12/11/1982', 'male', 'Caracas', '04168338848', 'gutierreznorwill@gmail.com', '1234', '', 'norwill', NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicas_planificacion_media`
--

CREATE TABLE IF NOT EXISTS `tecnicas_planificacion_media` (
`tecnicas_planificacion_media_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `tecnicas_planificacion_media`
--

INSERT INTO `tecnicas_planificacion_media` (`tecnicas_planificacion_media_id`, `name`) VALUES
(1, 'Análisis de contenido'),
(2, 'Cine foro'),
(3, 'Cuchicheo'),
(4, 'Debate'),
(5, 'Demostración'),
(6, 'Discusión dirigida'),
(7, 'Dramatización'),
(8, 'Estudio dirigido'),
(9, 'Exposición didáctica'),
(10, 'Foros'),
(11, 'Hoja de trabajo'),
(12, 'Lluvias de ideas'),
(13, 'Microclases'),
(14, 'Observación'),
(15, 'Panel'),
(16, 'Portafolio'),
(17, 'Preguntas de expl.'),
(18, 'Preguntas y resp.'),
(19, 'Repetición'),
(20, 'Seminario'),
(21, 'Test(');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE IF NOT EXISTS `telefonos` (
`id_telefono` int(11) NOT NULL,
  `id_tipo_telefono` int(11) NOT NULL DEFAULT '1',
  `telefono` varchar(15) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los teléfonos de las person' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id_telefono`, `id_tipo_telefono`, `telefono`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 1, '02129050000', '2015-10-20 20:21:10', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_direcciones`
--

CREATE TABLE IF NOT EXISTS `tipo_direcciones` (
`id_tipo_direccion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene el listado de tipo de direcciones' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_direcciones`
--

INSERT INTO `tipo_direcciones` (`id_tipo_direccion`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'TRABAJO', '2015-10-20 20:07:33', NULL, 1),
(2, 'CASA', '2015-10-20 20:07:33', NULL, 1),
(3, 'FAMILIAR', '2015-10-20 20:07:33', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_parto`
--

CREATE TABLE IF NOT EXISTS `tipo_parto` (
`id_tipo_parto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene el listado de tipo de partos' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_parto`
--

INSERT INTO `tipo_parto` (`id_tipo_parto`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'NATURAL', '2015-10-20 20:08:48', NULL, 1),
(2, 'CESAREA', '2015-10-20 20:08:48', NULL, 1),
(3, 'FORCEPS', '2015-10-20 20:08:48', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_telefonos`
--

CREATE TABLE IF NOT EXISTS `tipo_telefonos` (
`id_tipo_telefono` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene el listado de tipo de telefonos' AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_telefonos`
--

INSERT INTO `tipo_telefonos` (`id_tipo_telefono`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'TRABAJO', '2015-10-20 20:06:57', NULL, 1),
(2, 'CELULAR', '2015-10-20 20:06:57', NULL, 1),
(3, 'CASA', '2015-10-20 20:06:57', NULL, 1),
(4, 'OTRO', '2015-10-20 20:06:57', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `clave` varchar(80) DEFAULT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `tipo_usuario` varchar(25) NOT NULL DEFAULT 'admin',
  `especialista` varchar(25) NOT NULL DEFAULT 'USUARIO'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los usuarios' AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_persona`, `usuario`, `clave`, `correo_electronico`, `activo`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`, `tipo_usuario`, `especialista`) VALUES
(2, 1, 'admin', '$2y$10$QMNAdUJN8tbXaryl6Fug0OkJsiZ//As/lpLPylLHCaqBwQcN5Iysy', 'admin@chacao.gob.ve', 0, '2016-02-11 04:45:01', NULL, 1, 'admin', 'USUARIO'),
(4, 15, 'aazpiroz', '$2y$10$QMNAdUJN8tbXaryl6Fug0OkJsiZ//As/lpLPylLHCaqBwQcN5Iysy', 'director@chacao.gob.ve', 0, '2016-02-11 04:48:24', NULL, 1, 'director', 'USUARIO'),
(5, 19, 'tpsicologa', '$2y$10$QMNAdUJN8tbXaryl6Fug0OkJsiZ//As/lpLPylLHCaqBwQcN5Iysy', 'psicologo@chacao.gob.ve', 0, '2016-02-11 04:48:25', NULL, 1, 'especialista', 'PSICOLOGO'),
(6, 20, 'tsocial', '$2y$10$QMNAdUJN8tbXaryl6Fug0OkJsiZ//As/lpLPylLHCaqBwQcN5Iysy', 'trabajo_social@chacao.gob.ve', 0, '2016-02-11 04:48:25', NULL, 1, 'especialista', 'PSICOPEDAGOGO'),
(7, 21, 'tpsicopedagoga', '$2y$10$QMNAdUJN8tbXaryl6Fug0OkJsiZ//As/lpLPylLHCaqBwQcN5Iysy', 'psicopedagogo@chacao.gob.ve', 0, '2016-02-11 04:48:25', NULL, 1, 'especialista', 'TRABAJO_SOCIAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valor_puntaje_censo`
--

CREATE TABLE IF NOT EXISTS `valor_puntaje_censo` (
`id_valor_puntaje_censo` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `valor_comparacion` varchar(45) NOT NULL,
  `puntos` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `valor_puntaje_censo`
--

INSERT INTO `valor_puntaje_censo` (`id_valor_puntaje_censo`, `descripcion`, `valor_comparacion`, `puntos`) VALUES
(1, 'Residente', 'Residente', 10),
(2, 'Estudia_EstudioAnterior', 'Estudia_EstudioAnterior', 1),
(3, 'Estudia_NoEstudioAnterior', 'Estudia_NoEstudioAnterior', 2),
(4, 'NoHaEstudiado_NoEstudioAnterior', 'NoHaEstudiado_NoEstudioAnterior', 3),
(5, 'Madre_Padre_Presente', 'Madre_Padre_Presente', 0),
(6, 'MadreOPadre_Ausente', 'MadreOPadre_Ausente', 2),
(7, 'Madre_Padre_Ausente', 'Madre_Padre_Ausente', 3),
(8, 'MadreOPadre_Difuntos', 'MadreOPadre_Difuntos', 4),
(9, 'Madre_Padre_Difuntos', 'Madre_Padre_Difuntos', 5),
(10, 'SiTrabaja', 'SiTrabaja', 1),
(11, 'NoTrabaja', 'NoTrabaja', 2),
(12, 'Jornada_MedioTiempo', 'Jornada_MedioTiempo', 1),
(13, 'Jornada_Completa', 'Jornada_Completa', 3),
(14, 'Nivel1', 'Nivel1', 1),
(15, 'Nivel2', 'Nivel2', 2),
(16, 'Nivel3', 'Nivel3', 3),
(17, 'Nivel4', 'Nivel4', 4),
(18, 'Nivel5', 'Nivel5', 5),
(19, 'Nivel6', 'Nivel6', 6),
(20, 'Nivel7', 'Nivel7', 7),
(21, 'MiembrosFamilia2', 'MiembrosFamilia2', 1),
(22, 'MiembrosFamilia3', 'MiembrosFamilia3', 2),
(23, 'MiembrosFamilia4', 'MiembrosFamilia4', 3),
(24, 'MiembrosFamilia5', 'MiembrosFamilia5', 4),
(25, 'MiembrosFamilia6', 'MiembrosFamilia6', 5),
(26, 'MiembrosFamilia7', 'MiembrosFamilia7', 6),
(27, 'MiembrosFamilia8', 'MiembrosFamilia8', 7),
(28, 'ViviendaPropia', 'ViviendaPropia', 1),
(29, 'ViviendaPropiaPagando', 'ViviendaPropiaPagando', 2),
(30, 'Alojados', 'Alojados', 3),
(31, 'Alquilados', 'Alquilados', 4),
(32, 'FuncionarioAlcaldia', 'FuncionarioAlcaldia', 5),
(33, 'TrabajaMunicipio', 'TrabajaMunicipio', 1),
(34, 'NoResidente', 'NoResidente', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vconstancias`
--
CREATE TABLE IF NOT EXISTS `vconstancias` (
`id_estudiante` int(11)
,`id_persona` int(11)
,`id_escuela` int(11)
,`id_seccion` int(11)
,`id_grado` int(11)
,`primer_nombre_estudiante` varchar(100)
,`segundo_nombre_estudiante` varchar(100)
,`primer_apellido_estudiante` varchar(100)
,`segundo_apellido_estudiante` varchar(100)
,`cedula_escolar` varchar(15)
,`cedula_identidad_estudiante` varchar(15)
,`fecha_nacimiento` date
,`sexo` varchar(45)
,`nombre_grado` varchar(45)
,`abreviacion_grado` varchar(5)
,`nombre_seccion` varchar(45)
,`abreviacion_seccion` varchar(45)
,`nombre_escuela` varchar(150)
,`director_encargado` tinyint(1)
,`primer_nombre_director` varchar(100)
,`segundo_nombre_director` varchar(100)
,`primer_apellido_director` varchar(100)
,`segundo apellido_director` varchar(100)
,`cedula_identidad_director` varchar(20)
,`nacionalidad` varchar(100)
,`correo_electronico` varchar(100)
,`parroquia` varchar(100)
,`municipio` varchar(150)
,`estado` varchar(150)
,`telefono` varchar(15)
,`calle_avenida` varchar(150)
,`edificio_casa` varchar(150)
,`oficina_apartamento` varchar(45)
,`punto_referencia` varchar(150)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vescuelaseccion`
--
CREATE TABLE IF NOT EXISTS `vescuelaseccion` (
`id_escuela` int(11)
,`id_seccion` int(11)
,`id_grado` int(11)
,`nombre_seccion` varchar(45)
,`abreviacion_seccion` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vestudiantesasistencia`
--
CREATE TABLE IF NOT EXISTS `vestudiantesasistencia` (
`id_estudiante` int(11)
,`id_grado` int(11)
,`id_seccion` int(11)
,`primer_nombre` varchar(100)
,`segundo_nombre` varchar(100)
,`primer_apellido` varchar(100)
,`segundo_apellido` varchar(100)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vgradoescuela`
--
CREATE TABLE IF NOT EXISTS `vgradoescuela` (
`id_escuela` int(11)
,`id_grado` int(11)
,`nombre_grado` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vive_con`
--

CREATE TABLE IF NOT EXISTS `vive_con` (
`id_vive_con` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene el listado de las personas con quien pued' AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `vive_con`
--

INSERT INTO `vive_con` (`id_vive_con`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'PADRE', '2015-10-20 20:10:09', NULL, 1),
(2, 'MADRE', '2015-10-20 20:10:09', NULL, 1),
(3, 'TIO', '2015-10-20 20:10:09', NULL, 1),
(4, 'TIA', '2015-10-20 20:10:09', NULL, 1),
(5, 'HERMANO', '2015-10-20 20:10:09', NULL, 1),
(6, 'HERMANA', '2015-10-20 20:10:09', NULL, 1),
(7, 'ABUELO', '2015-10-20 20:10:09', NULL, 1),
(8, 'ABUELA', '2015-10-20 20:10:09', NULL, 1),
(9, 'OTRO', '2015-10-20 20:10:09', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vniveleducativoescuela`
--
CREATE TABLE IF NOT EXISTS `vniveleducativoescuela` (
`id_escuela_nivel_educativo` int(11)
,`id_escuela` int(11)
,`id_nivel_educativo` int(11)
,`valor` varchar(45)
,`registro_activo` tinyint(1)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vniveleducativogrado`
--
CREATE TABLE IF NOT EXISTS `vniveleducativogrado` (
`id_nivel_educativo` int(11)
,`nivel_educativo` varchar(45)
,`id_grado` int(11)
,`nombre_grado` varchar(45)
,`abreviacion_grado` varchar(5)
,`id_escuela` int(11)
,`registro_activo` tinyint(1)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vniveleducativogradoseccion`
--
CREATE TABLE IF NOT EXISTS `vniveleducativogradoseccion` (
`id_nivel_educativo` int(11)
,`nivel_educativo` varchar(45)
,`id_grado` int(11)
,`nombre_grado` varchar(45)
,`abreviacion_grado` varchar(5)
,`id_escuela` int(11)
,`registro_activo` tinyint(1)
,`id_seccion` int(11)
,`nombre_seccion` varchar(45)
,`abreviacion_seccion` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vpuntajecenso`
--
CREATE TABLE IF NOT EXISTS `vpuntajecenso` (
`id_censo` int(11)
,`id_puntaje_censo` int(11)
,`id_escuela` int(2)
,`primer_nombre` varchar(9)
,`segundo_nombre` varchar(14)
,`primer_apellido` varchar(10)
,`segundo_apellido` varchar(10)
,`cedula_identidad` int(11)
,`fecha_nacimiento_alumno` date
,`cedula_identidad_representante` int(11)
,`primer_nombre_representante` varchar(12)
,`segundo_nombre_representante` varchar(9)
,`primer_apellido_representante` varchar(10)
,`segundo_apellido_representante` varchar(10)
,`grado_cursar` int(11)
,`Puntaje` int(4)
,`escolaridad` int(11)
,`residencia` int(11)
,`orfandad` int(11)
,`representante_trabaja` int(11)
,`representante_jornada_laboral` int(11)
,`representante_nivel_ingreso` int(11)
,`miembros_familia` int(11)
,`vivienda` int(11)
,`no_residente` int(11)
,`puntaje_total` bigint(19)
,`Residente` tinyint(1)
,`CuposASolicitar` int(11)
,`ElAlumnoEstudiaActualmente` tinyint(1)
,`ElAlumnoCursoElAnterior` tinyint(1)
,`ElAlumnoRepiteGrado` tinyint(1)
,`UnidadEducativaDeProcedencia` varchar(20)
,`NombreDeLaInstitucion` varchar(48)
,`EstadoInstitucion` int(11)
,`MunicipioInstitucion` int(11)
,`MateriaPendiente` varchar(2)
,`RazonSocioeco` tinyint(1)
,`RazonCambioResi` tinyint(1)
,`RazonNoAdapta` tinyint(1)
,`RazonOtra` tinyint(1)
,`SexoDelAlumno` varchar(9)
,`NacionalidadDelAlumno` varchar(10)
,`EstadoDondeResideElAlumno` int(11)
,`MunicipioDondeResideElAlumno` int(11)
,`UrbanizacionOSectorDondeResideElAlumno` varchar(43)
,`CalleOAvenidaDondeResideElAlumno` varchar(28)
,`CasaOEdificioDondeResideElAlumno` varchar(22)
,`PisoOPlantaDondeResideElAlumno` varchar(12)
,`NumeroDeCasaOApartamentoDondeResideElAlumno` int(11)
,`ParentescoConElAlumno` varchar(5)
,`OtroParentescoConElAlumno` int(11)
,`FechaDeNacimientoDelRepresentante` date
,`NacionalidadDelRepresentante` varchar(10)
,`EstadoCivilDelRepresentante` varchar(11)
,`RepresentanteMismaDireAlu` tinyint(1)
,`TelefonoDeHabitacionDelRepresentante` varchar(15)
,`TelefonoCelularDelRepresentante` varchar(15)
,`CorreoElectronicoDelRepresentante` varchar(250)
,`TrabajaActualmente` tinyint(1)
,`TrabajaDentroChacao` tinyint(1)
,`LaMadreVive` tinyint(1)
,`ElPadreVive` varchar(2)
,`ElAlumnoEstaBecado` tinyint(1)
,`MedioDeTrasladoAlPlantel` varchar(19)
,`ElAlumnoSeRetiraSoloDelPlantel` tinyint(1)
,`HermanosEstudianEnUnidadesEducativasMunicipales` varchar(2)
,`DatosDeLaVivienda` varchar(9)
,`FactorRh` varchar(1)
,`GrupoSanguineo` varchar(4)
,`PartoMultiple` int(11)
,`Estatura` int(11)
,`Peso` int(11)
,`TallaCamisa` int(11)
,`TallaPantalon` int(11)
,`TallaCalzado` int(11)
,`TipoDeParto` varchar(7)
,`PadeceAlgunaEnfermedad` varchar(2)
,`ElAlumnoTieneAlgunaDiversidadFuncional` tinyint(1)
,`ElAlumnoHaSidoOperado` tinyint(1)
,`ElAlumnoEsAlergico` varchar(2)
,`RegimenEspecialDeAlimentacionOTratamiento` tinyint(1)
,`NombreYApellidoDelContactoDeEmergencia1` varchar(20)
,`TelefonoDelContactoDeEmergencia1` int(11)
,`ParentescoDelContactoDeEmergencia1ConElAlumno` varchar(14)
,`NombreYApellidoDelContactoDeEmergencia2` varchar(26)
,`TelefonoDelContactoDeEmergencia2` int(11)
,`ParentescoDelContactoDeEmergencia2ConElAlumno` varchar(14)
,`StatusCenso` int(2)
,`UniDePrefJuanDio` tinyint(1)
,`UniDePrefAndres` tinyint(1)
,`UniDePrefCarlos` tinyint(1)
,`fecha_solicitud` timestamp
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vrecaudosgrado`
--
CREATE TABLE IF NOT EXISTS `vrecaudosgrado` (
`id_grado` int(11)
,`id_recaudo_grado` int(11)
,`id_recaudo` int(11)
,`valor` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vresumendatosescuela`
--
CREATE TABLE IF NOT EXISTS `vresumendatosescuela` (
`id_escuela` int(11)
,`nombre_escuela` varchar(150)
,`director_encargado` tinyint(1)
,`primer_nombre` varchar(100)
,`segundo_nombre` varchar(100)
,`primer_apellido` varchar(100)
,`segundo_apellido` varchar(100)
,`cedula_identidad` varchar(20)
,`nacionalidad` varchar(100)
,`correo_electronico` varchar(100)
,`parroquia` varchar(100)
,`municipio` varchar(150)
,`estado` varchar(150)
,`telefono` varchar(15)
,`calle_avenida` varchar(150)
,`edificio_casa` varchar(150)
,`oficina_apartamento` varchar(45)
,`punto_referencia` varchar(150)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vresumendatosestudiantes`
--
CREATE TABLE IF NOT EXISTS `vresumendatosestudiantes` (
`id_estudiante` int(11)
,`id_persona` int(11)
,`id_seccion` int(11)
,`id_grado` int(11)
,`primer_nombre` varchar(100)
,`segundo_nombre` varchar(100)
,`primer_apellido` varchar(100)
,`segundo_apellido` varchar(100)
,`cedula_escolar` varchar(15)
,`cedula_identidad` varchar(15)
,`fecha_nacimiento` date
,`sexo` varchar(45)
,`nombre_grado` varchar(45)
,`abreviacion_grado` varchar(5)
,`nombre_seccion` varchar(45)
,`abreviacion_seccion` varchar(45)
,`estudiante_activo` tinyint(1)
,`persona_activa` tinyint(1)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vrptresumen_censo`
--
CREATE TABLE IF NOT EXISTS `vrptresumen_censo` (
`vpuntajecenso_id_censo` int(11)
,`fecha_solicitud` timestamp
,`nombre_representante` varchar(47)
,`identificacion_representante` int(11)
,`parentesco` varchar(5)
,`otro_parentesco` int(11)
,`nombre_alumno` varchar(49)
,`edad` bigint(21)
,`sexo` varchar(9)
,`id_grado` int(11)
,`grado` varchar(25)
,`escuela_procedencia` varchar(20)
,`nombre_escuela` varchar(48)
,`estado_escuela` int(11)
,`municipio_escuela` int(11)
,`ponderacion` bigint(19)
,`id_escuela` varchar(1)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vteachers`
--
CREATE TABLE IF NOT EXISTS `vteachers` (
`cargo_id` int(11)
,`teacher_id` int(11)
,`name` longtext
,`birthday` longtext
,`sex` longtext
,`address` longtext
,`phone` longtext
,`email` longtext
,`password` longtext
,`mobile_phone` longtext
,`cargo` varchar(150)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `vconstancias`
--
DROP TABLE IF EXISTS `vconstancias`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vconstancias` AS select `vresumendatosestudiantes`.`id_estudiante` AS `id_estudiante`,`vresumendatosestudiantes`.`id_persona` AS `id_persona`,`vresumendatosescuela`.`id_escuela` AS `id_escuela`,`vresumendatosestudiantes`.`id_seccion` AS `id_seccion`,`vresumendatosestudiantes`.`id_grado` AS `id_grado`,`vresumendatosestudiantes`.`primer_nombre` AS `primer_nombre_estudiante`,`vresumendatosestudiantes`.`segundo_nombre` AS `segundo_nombre_estudiante`,`vresumendatosestudiantes`.`primer_apellido` AS `primer_apellido_estudiante`,`vresumendatosestudiantes`.`segundo_apellido` AS `segundo_apellido_estudiante`,`vresumendatosestudiantes`.`cedula_escolar` AS `cedula_escolar`,`vresumendatosestudiantes`.`cedula_identidad` AS `cedula_identidad_estudiante`,`vresumendatosestudiantes`.`fecha_nacimiento` AS `fecha_nacimiento`,`vresumendatosestudiantes`.`sexo` AS `sexo`,`vresumendatosestudiantes`.`nombre_grado` AS `nombre_grado`,`vresumendatosestudiantes`.`abreviacion_grado` AS `abreviacion_grado`,`vresumendatosestudiantes`.`nombre_seccion` AS `nombre_seccion`,`vresumendatosestudiantes`.`abreviacion_seccion` AS `abreviacion_seccion`,`vresumendatosescuela`.`nombre_escuela` AS `nombre_escuela`,`vresumendatosescuela`.`director_encargado` AS `director_encargado`,`vresumendatosescuela`.`primer_nombre` AS `primer_nombre_director`,`vresumendatosescuela`.`segundo_nombre` AS `segundo_nombre_director`,`vresumendatosescuela`.`primer_apellido` AS `primer_apellido_director`,`vresumendatosescuela`.`segundo_apellido` AS `segundo apellido_director`,`vresumendatosescuela`.`cedula_identidad` AS `cedula_identidad_director`,`vresumendatosescuela`.`nacionalidad` AS `nacionalidad`,`vresumendatosescuela`.`correo_electronico` AS `correo_electronico`,`vresumendatosescuela`.`parroquia` AS `parroquia`,`vresumendatosescuela`.`municipio` AS `municipio`,`vresumendatosescuela`.`estado` AS `estado`,`vresumendatosescuela`.`telefono` AS `telefono`,`vresumendatosescuela`.`calle_avenida` AS `calle_avenida`,`vresumendatosescuela`.`edificio_casa` AS `edificio_casa`,`vresumendatosescuela`.`oficina_apartamento` AS `oficina_apartamento`,`vresumendatosescuela`.`punto_referencia` AS `punto_referencia` from ((`vresumendatosestudiantes` join `estudiantes` on((`vresumendatosestudiantes`.`id_estudiante` = `estudiantes`.`id_estudiante`))) join `vresumendatosescuela` on((`estudiantes`.`id_escuela` = `vresumendatosescuela`.`id_escuela`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vescuelaseccion`
--
DROP TABLE IF EXISTS `vescuelaseccion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vescuelaseccion` AS select `escuelas`.`id_escuela` AS `id_escuela`,`grado_escuela`.`id_seccion` AS `id_seccion`,`grado_escuela`.`id_grado` AS `id_grado`,`secciones`.`nombre_seccion` AS `nombre_seccion`,`secciones`.`abreviacion_seccion` AS `abreviacion_seccion` from ((`escuelas` join `grado_escuela` on((`escuelas`.`id_escuela` = `grado_escuela`.`id_escuela`))) join `secciones` on((`grado_escuela`.`id_seccion` = `secciones`.`id_seccion`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vestudiantesasistencia`
--
DROP TABLE IF EXISTS `vestudiantesasistencia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vestudiantesasistencia` AS select `estudiantes`.`id_estudiante` AS `id_estudiante`,`estudiantes`.`id_grado` AS `id_grado`,`estudiantes`.`id_seccion` AS `id_seccion`,`personas`.`primer_nombre` AS `primer_nombre`,`personas`.`segundo_nombre` AS `segundo_nombre`,`personas`.`primer_apellido` AS `primer_apellido`,`personas`.`segundo_apellido` AS `segundo_apellido` from (`estudiantes` join `personas` on((`estudiantes`.`id_persona` = `personas`.`id_persona`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vgradoescuela`
--
DROP TABLE IF EXISTS `vgradoescuela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vgradoescuela` AS select `escuelas`.`id_escuela` AS `id_escuela`,`grados`.`id_grado` AS `id_grado`,`grados`.`nombre_grado` AS `nombre_grado` from ((`escuelas` join `grado_escuela` on((`escuelas`.`id_escuela` = `grado_escuela`.`id_escuela`))) join `grados` on((`grado_escuela`.`id_grado` = `grados`.`id_grado`))) order by `grados`.`id_grado`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vniveleducativoescuela`
--
DROP TABLE IF EXISTS `vniveleducativoescuela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vniveleducativoescuela` AS select `escuela_nivel_educativo`.`id_escuela_nivel_educativo` AS `id_escuela_nivel_educativo`,`escuela_nivel_educativo`.`id_escuela` AS `id_escuela`,`niveles_educativos`.`id_niveles_eductivos` AS `id_nivel_educativo`,`niveles_educativos`.`valor` AS `valor`,`escuela_nivel_educativo`.`registro_activo` AS `registro_activo` from (`escuela_nivel_educativo` join `niveles_educativos` on((`escuela_nivel_educativo`.`id_nivel_educativo` = `niveles_educativos`.`id_niveles_eductivos`))) where (`escuela_nivel_educativo`.`registro_activo` = 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `vniveleducativogrado`
--
DROP TABLE IF EXISTS `vniveleducativogrado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vniveleducativogrado` AS select `niveles_educativos`.`id_niveles_eductivos` AS `id_nivel_educativo`,`niveles_educativos`.`valor` AS `nivel_educativo`,`escuela_nivel_educativo_grado`.`id_grado` AS `id_grado`,`grados`.`nombre_grado` AS `nombre_grado`,`grados`.`abreviacion_grado` AS `abreviacion_grado`,`escuela_nivel_educativo`.`id_escuela` AS `id_escuela`,`grados`.`registro_activo` AS `registro_activo` from (((`niveles_educativos` join `escuela_nivel_educativo` on((`niveles_educativos`.`id_niveles_eductivos` = `escuela_nivel_educativo`.`id_nivel_educativo`))) join `escuela_nivel_educativo_grado` on((`escuela_nivel_educativo`.`id_escuela_nivel_educativo` = `escuela_nivel_educativo_grado`.`id_escuela_nivel_educativo`))) join `grados` on((`escuela_nivel_educativo_grado`.`id_grado` = `grados`.`id_grado`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vniveleducativogradoseccion`
--
DROP TABLE IF EXISTS `vniveleducativogradoseccion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vniveleducativogradoseccion` AS select `niveles_educativos`.`id_niveles_eductivos` AS `id_nivel_educativo`,`niveles_educativos`.`valor` AS `nivel_educativo`,`escuela_nivel_educativo_grado`.`id_grado` AS `id_grado`,`grados`.`nombre_grado` AS `nombre_grado`,`grados`.`abreviacion_grado` AS `abreviacion_grado`,`escuela_nivel_educativo`.`id_escuela` AS `id_escuela`,`grados`.`registro_activo` AS `registro_activo`,`secciones`.`id_seccion` AS `id_seccion`,`secciones`.`nombre_seccion` AS `nombre_seccion`,`secciones`.`abreviacion_seccion` AS `abreviacion_seccion` from ((((`niveles_educativos` join `escuela_nivel_educativo` on((`niveles_educativos`.`id_niveles_eductivos` = `escuela_nivel_educativo`.`id_nivel_educativo`))) join `escuela_nivel_educativo_grado` on((`escuela_nivel_educativo`.`id_escuela_nivel_educativo` = `escuela_nivel_educativo_grado`.`id_escuela_nivel_educativo`))) join `grados` on((`escuela_nivel_educativo_grado`.`id_grado` = `grados`.`id_grado`))) join `secciones` on((`grados`.`id_grado` = `secciones`.`id_grado`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vpuntajecenso`
--
DROP TABLE IF EXISTS `vpuntajecenso`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpuntajecenso` AS select `puntaje_censo`.`id_censo` AS `id_censo`,`puntaje_censo`.`id_puntaje_censo` AS `id_puntaje_censo`,`censo`.`IDEscuelaAsignada` AS `id_escuela`,`censo`.`PrimerNombreDelAlumno` AS `primer_nombre`,`censo`.`SegundoNombreDelAlumno` AS `segundo_nombre`,`censo`.`PrimerApellidoDelAlumno` AS `primer_apellido`,`censo`.`SegundoApellidoDelAlumno` AS `segundo_apellido`,`censo`.`CedulaDeIdentidadDelAlumnoOCedulaEscolar` AS `cedula_identidad`,`censo`.`FechaDeNacimientoDelAlumno` AS `fecha_nacimiento_alumno`,`censo`.`CedulaDeIdentidadDelRepresentante` AS `cedula_identidad_representante`,`censo`.`PrimerNombreDelRepresentante` AS `primer_nombre_representante`,`censo`.`SegundoNombreDelRepresentante` AS `segundo_nombre_representante`,`censo`.`PrimerApellidoDelRepresentante` AS `primer_apellido_representante`,`censo`.`SegundoApellidoDelRepresentante` AS `segundo_apellido_representante`,`censo`.`GradoACursar` AS `grado_cursar`,`censo`.`Puntaje` AS `Puntaje`,`puntaje_censo`.`escolaridad` AS `escolaridad`,`puntaje_censo`.`residencia` AS `residencia`,`puntaje_censo`.`orfandad` AS `orfandad`,`puntaje_censo`.`representante_trabaja` AS `representante_trabaja`,`puntaje_censo`.`representante_jornada_laboral` AS `representante_jornada_laboral`,`puntaje_censo`.`representante_nivel_ingreso` AS `representante_nivel_ingreso`,`puntaje_censo`.`miembros_familia` AS `miembros_familia`,`puntaje_censo`.`vivienda` AS `vivienda`,`puntaje_censo`.`no_residente` AS `no_residente`,((((((((`puntaje_censo`.`escolaridad` + `puntaje_censo`.`residencia`) + `puntaje_censo`.`orfandad`) + `puntaje_censo`.`representante_trabaja`) + `puntaje_censo`.`representante_jornada_laboral`) + `puntaje_censo`.`representante_nivel_ingreso`) + `puntaje_censo`.`miembros_familia`) + `puntaje_censo`.`vivienda`) + `puntaje_censo`.`no_residente`) AS `puntaje_total`,`censo`.`Residente` AS `Residente`,`censo`.`CuposASolicitar` AS `CuposASolicitar`,`censo`.`ElAlumnoEstudiaActualmente` AS `ElAlumnoEstudiaActualmente`,`censo`.`ElAlumnoCursoElAnterior` AS `ElAlumnoCursoElAnterior`,`censo`.`ElAlumnoRepiteGrado` AS `ElAlumnoRepiteGrado`,`censo`.`UnidadEducativaDeProcedencia` AS `UnidadEducativaDeProcedencia`,`censo`.`NombreDeLaInstitucion` AS `NombreDeLaInstitucion`,`censo`.`EstadoInstitucion` AS `EstadoInstitucion`,`censo`.`MunicipioInstitucion` AS `MunicipioInstitucion`,`censo`.`MateriaPendiente` AS `MateriaPendiente`,`censo`.`RazonSocioeco` AS `RazonSocioeco`,`censo`.`RazonCambioResi` AS `RazonCambioResi`,`censo`.`RazonNoAdapta` AS `RazonNoAdapta`,`censo`.`RazonOtra` AS `RazonOtra`,`censo`.`SexoDelAlumno` AS `SexoDelAlumno`,`censo`.`NacionalidadDelAlumno` AS `NacionalidadDelAlumno`,`censo`.`EstadoDondeResideElAlumno` AS `EstadoDondeResideElAlumno`,`censo`.`MunicipioDondeResideElAlumno` AS `MunicipioDondeResideElAlumno`,`censo`.`UrbanizacionOSectorDondeResideElAlumno` AS `UrbanizacionOSectorDondeResideElAlumno`,`censo`.`CalleOAvenidaDondeResideElAlumno` AS `CalleOAvenidaDondeResideElAlumno`,`censo`.`CasaOEdificioDondeResideElAlumno` AS `CasaOEdificioDondeResideElAlumno`,`censo`.`PisoOPlantaDondeResideElAlumno` AS `PisoOPlantaDondeResideElAlumno`,`censo`.`NumeroDeCasaOApartamentoDondeResideElAlumno` AS `NumeroDeCasaOApartamentoDondeResideElAlumno`,`censo`.`ParentescoConElAlumno` AS `ParentescoConElAlumno`,`censo`.`OtroParentescoConElAlumno` AS `OtroParentescoConElAlumno`,`censo`.`FechaDeNacimientoDelRepresentante` AS `FechaDeNacimientoDelRepresentante`,`censo`.`NacionalidadDelRepresentante` AS `NacionalidadDelRepresentante`,`censo`.`EstadoCivilDelRepresentante` AS `EstadoCivilDelRepresentante`,`censo`.`RepresentanteMismaDireAlu` AS `RepresentanteMismaDireAlu`,`censo`.`TelefonoDeHabitacionDelRepresentante` AS `TelefonoDeHabitacionDelRepresentante`,`censo`.`TelefonoCelularDelRepresentante` AS `TelefonoCelularDelRepresentante`,`censo`.`CorreoElectronicoDelRepresentante` AS `CorreoElectronicoDelRepresentante`,`censo`.`TrabajaActualmente` AS `TrabajaActualmente`,`censo`.`TrabajaDentroChacao` AS `TrabajaDentroChacao`,`censo`.`LaMadreVive` AS `LaMadreVive`,`censo`.`ElPadreVive` AS `ElPadreVive`,`censo`.`ElAlumnoEstaBecado` AS `ElAlumnoEstaBecado`,`censo`.`MedioDeTrasladoAlPlantel` AS `MedioDeTrasladoAlPlantel`,`censo`.`ElAlumnoSeRetiraSoloDelPlantel` AS `ElAlumnoSeRetiraSoloDelPlantel`,`censo`.`HermanosEstudianEnUnidadesEducativasMunicipales` AS `HermanosEstudianEnUnidadesEducativasMunicipales`,`censo`.`DatosDeLaVivienda` AS `DatosDeLaVivienda`,`censo`.`FactorRh` AS `FactorRh`,`censo`.`GrupoSanguineo` AS `GrupoSanguineo`,`censo`.`PartoMultiple` AS `PartoMultiple`,`censo`.`Estatura` AS `Estatura`,`censo`.`Peso` AS `Peso`,`censo`.`TallaCamisa` AS `TallaCamisa`,`censo`.`TallaPantalon` AS `TallaPantalon`,`censo`.`TallaCalzado` AS `TallaCalzado`,`censo`.`TipoDeParto` AS `TipoDeParto`,`censo`.`PadeceAlgunaEnfermedad` AS `PadeceAlgunaEnfermedad`,`censo`.`ElAlumnoTieneAlgunaDiversidadFuncional` AS `ElAlumnoTieneAlgunaDiversidadFuncional`,`censo`.`ElAlumnoHaSidoOperado` AS `ElAlumnoHaSidoOperado`,`censo`.`ElAlumnoEsAlergico` AS `ElAlumnoEsAlergico`,`censo`.`RegimenEspecialDeAlimentacionOTratamiento` AS `RegimenEspecialDeAlimentacionOTratamiento`,`censo`.`NombreYApellidoDelContactoDeEmergencia1` AS `NombreYApellidoDelContactoDeEmergencia1`,`censo`.`TelefonoDelContactoDeEmergencia1` AS `TelefonoDelContactoDeEmergencia1`,`censo`.`ParentescoDelContactoDeEmergencia1ConElAlumno` AS `ParentescoDelContactoDeEmergencia1ConElAlumno`,`censo`.`NombreYApellidoDelContactoDeEmergencia2` AS `NombreYApellidoDelContactoDeEmergencia2`,`censo`.`TelefonoDelContactoDeEmergencia2` AS `TelefonoDelContactoDeEmergencia2`,`censo`.`ParentescoDelContactoDeEmergencia2ConElAlumno` AS `ParentescoDelContactoDeEmergencia2ConElAlumno`,`censo`.`StatusCenso` AS `StatusCenso`,`censo`.`UniDePrefJuanDio` AS `UniDePrefJuanDio`,`censo`.`UniDePrefAndres` AS `UniDePrefAndres`,`censo`.`UniDePrefCarlos` AS `UniDePrefCarlos`,`censo`.`FechaSolicitud` AS `fecha_solicitud` from (`puntaje_censo` join `censo` on((`censo`.`id_censo` = `puntaje_censo`.`id_censo`))) order by `censo`.`FechaSolicitud`,((((((((`puntaje_censo`.`escolaridad` + `puntaje_censo`.`residencia`) + `puntaje_censo`.`orfandad`) + `puntaje_censo`.`representante_trabaja`) + `puntaje_censo`.`representante_jornada_laboral`) + `puntaje_censo`.`representante_nivel_ingreso`) + `puntaje_censo`.`miembros_familia`) + `puntaje_censo`.`vivienda`) + `puntaje_censo`.`no_residente`);

-- --------------------------------------------------------

--
-- Estructura para la vista `vrecaudosgrado`
--
DROP TABLE IF EXISTS `vrecaudosgrado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vrecaudosgrado` AS select `grados`.`id_grado` AS `id_grado`,`recaudo_grado`.`id_recaudo_grado` AS `id_recaudo_grado`,`recaudos`.`id_recaudo` AS `id_recaudo`,`recaudos`.`valor` AS `valor` from ((`grados` join `recaudo_grado` on((`grados`.`id_grado` = `recaudo_grado`.`id_grado`))) join `recaudos` on((`recaudos`.`id_recaudo` = `recaudo_grado`.`id_recaudo`))) where (`recaudos`.`registro_activo` = 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `vresumendatosescuela`
--
DROP TABLE IF EXISTS `vresumendatosescuela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vresumendatosescuela` AS select `escuelas`.`id_escuela` AS `id_escuela`,`escuelas`.`nombre_escuela` AS `nombre_escuela`,`escuelas`.`director_encargado` AS `director_encargado`,`personas`.`primer_nombre` AS `primer_nombre`,`personas`.`segundo_nombre` AS `segundo_nombre`,`personas`.`primer_apellido` AS `primer_apellido`,`personas`.`segundo_apellido` AS `segundo_apellido`,`personas`.`cedula_identidad` AS `cedula_identidad`,`personas`.`nacionalidad` AS `nacionalidad`,`personas`.`correo_electronico` AS `correo_electronico`,`parroquias`.`nombre` AS `parroquia`,`municipios`.`nombre` AS `municipio`,`estados`.`nombre` AS `estado`,`telefonos`.`telefono` AS `telefono`,`direcciones`.`calle_avenida` AS `calle_avenida`,`direcciones`.`edificio_casa` AS `edificio_casa`,`direcciones`.`oficina_apartamento` AS `oficina_apartamento`,`direcciones`.`punto_referencia` AS `punto_referencia` from ((((((`direcciones` join `estados` on((`direcciones`.`id_estado` = `estados`.`id_estado`))) join `municipios` on((`direcciones`.`id_municipio` = `municipios`.`id_municipio`))) join `parroquias` on((`direcciones`.`id_parroquia` = `parroquias`.`id_parroquia`))) join `escuelas` on((`escuelas`.`id_direccion_escuela` = `direcciones`.`id_direccion`))) join `telefonos` on((`escuelas`.`id_telefono_escuela` = `telefonos`.`id_telefono`))) join `personas` on((`escuelas`.`id_persona_director` = `personas`.`id_persona`))) where (`escuelas`.`registro_activo` = 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `vresumendatosestudiantes`
--
DROP TABLE IF EXISTS `vresumendatosestudiantes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vresumendatosestudiantes` AS select `estudiantes`.`id_estudiante` AS `id_estudiante`,`personas`.`id_persona` AS `id_persona`,`secciones`.`id_seccion` AS `id_seccion`,`grados`.`id_grado` AS `id_grado`,`personas`.`primer_nombre` AS `primer_nombre`,`personas`.`segundo_nombre` AS `segundo_nombre`,`personas`.`primer_apellido` AS `primer_apellido`,`personas`.`segundo_apellido` AS `segundo_apellido`,`estudiantes`.`cedula_escolar` AS `cedula_escolar`,`estudiantes`.`cedula_identidad` AS `cedula_identidad`,`personas`.`fecha_nacimiento` AS `fecha_nacimiento`,`sexos`.`sexo` AS `sexo`,`grados`.`nombre_grado` AS `nombre_grado`,`grados`.`abreviacion_grado` AS `abreviacion_grado`,`secciones`.`nombre_seccion` AS `nombre_seccion`,`secciones`.`abreviacion_seccion` AS `abreviacion_seccion`,`estudiantes`.`registro_activo` AS `estudiante_activo`,`personas`.`registro_activo` AS `persona_activa` from ((`secciones` left join (`grados` left join (`estudiantes` join `personas` on((`estudiantes`.`id_persona` = `personas`.`id_persona`))) on((`estudiantes`.`id_grado` = `grados`.`id_grado`))) on((`grados`.`id_grado` = `secciones`.`id_grado`))) join `sexos` on((`personas`.`id_sexo` = `sexos`.`id_sexo`))) where ((`personas`.`registro_activo` = 1) and (`estudiantes`.`registro_activo` = 1));

-- --------------------------------------------------------

--
-- Estructura para la vista `vrptresumen_censo`
--
DROP TABLE IF EXISTS `vrptresumen_censo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vrptresumen_censo` AS select `vpuntajecenso`.`id_censo` AS `vpuntajecenso_id_censo`,`vpuntajecenso`.`fecha_solicitud` AS `fecha_solicitud`,concat(`vpuntajecenso`.`primer_nombre_representante`,'  ',`vpuntajecenso`.`segundo_nombre_representante`,'  ',`vpuntajecenso`.`primer_apellido_representante`,'  ',`vpuntajecenso`.`segundo_apellido_representante`) AS `nombre_representante`,`vpuntajecenso`.`cedula_identidad_representante` AS `identificacion_representante`,`vpuntajecenso`.`ParentescoConElAlumno` AS `parentesco`,`vpuntajecenso`.`OtroParentescoConElAlumno` AS `otro_parentesco`,concat(`vpuntajecenso`.`primer_nombre`,'  ',`vpuntajecenso`.`segundo_nombre`,'  ',`vpuntajecenso`.`primer_apellido`,'  ',`vpuntajecenso`.`segundo_apellido`) AS `nombre_alumno`,if((`vpuntajecenso`.`fecha_nacimiento_alumno` = '0000-00-00'),0,timestampdiff(YEAR,`vpuntajecenso`.`fecha_nacimiento_alumno`,curdate())) AS `edad`,`vpuntajecenso`.`SexoDelAlumno` AS `sexo`,`vpuntajecenso`.`grado_cursar` AS `id_grado`,`censo_grados`.`grado` AS `grado`,`vpuntajecenso`.`UnidadEducativaDeProcedencia` AS `escuela_procedencia`,`vpuntajecenso`.`NombreDeLaInstitucion` AS `nombre_escuela`,`vpuntajecenso`.`EstadoInstitucion` AS `estado_escuela`,`vpuntajecenso`.`MunicipioInstitucion` AS `municipio_escuela`,`vpuntajecenso`.`puntaje_total` AS `ponderacion`,if((`vpuntajecenso`.`UniDePrefAndres` = 1),'1',if((`vpuntajecenso`.`UniDePrefCarlos` = 1),'3',if((`vpuntajecenso`.`UniDePrefJuanDio` = 1),'2',''))) AS `id_escuela` from (`vpuntajecenso` left join `censo_grados` on((`censo_grados`.`id_censo_grado` = `vpuntajecenso`.`grado_cursar`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vteachers`
--
DROP TABLE IF EXISTS `vteachers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vteachers` AS select `cargo`.`cargo_id` AS `cargo_id`,`teacher`.`teacher_id` AS `teacher_id`,`teacher`.`name` AS `name`,`teacher`.`birthday` AS `birthday`,`teacher`.`sex` AS `sex`,`teacher`.`address` AS `address`,`teacher`.`phone` AS `phone`,`teacher`.`email` AS `email`,`teacher`.`password` AS `password`,`teacher`.`mobile_phone` AS `mobile_phone`,`cargo`.`name` AS `cargo` from (`cargo` join `teacher` on((`cargo`.`cargo_id` = `teacher`.`id_cargo`))) where (`teacher`.`registro_activo` = 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `censo`
--
ALTER TABLE `censo`
 ADD PRIMARY KEY (`id_censo`), ADD UNIQUE KEY `id_censo_UNIQUE` (`id_censo`), ADD KEY `GradoACursar` (`GradoACursar`);

--
-- Indices de la tabla `censo_grados`
--
ALTER TABLE `censo_grados`
 ADD PRIMARY KEY (`id_censo_grado`), ADD UNIQUE KEY `grado` (`grado`), ADD KEY `grado_2` (`grado`);

--
-- Indices de la tabla `censo_unidad_educativas`
--
ALTER TABLE `censo_unidad_educativas`
 ADD PRIMARY KEY (`id_censo_unidad_educativa`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indices de la tabla `class`
--
ALTER TABLE `class`
 ADD PRIMARY KEY (`class_id`);

--
-- Indices de la tabla `class_routine`
--
ALTER TABLE `class_routine`
 ADD PRIMARY KEY (`class_routine_id`);

--
-- Indices de la tabla `condicion_vivienda`
--
ALTER TABLE `condicion_vivienda`
 ADD PRIMARY KEY (`id_condicion_vivienda`), ADD UNIQUE KEY `id_vive_con_UNIQUE` (`id_condicion_vivienda`);

--
-- Indices de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
 ADD PRIMARY KEY (`id_configuracion`), ADD UNIQUE KEY `id_configuracion_UNIQUE` (`id_configuracion`);

--
-- Indices de la tabla `cupos`
--
ALTER TABLE `cupos`
 ADD PRIMARY KEY (`id_cupo`), ADD KEY `escuelafk_idx` (`id_escuela`), ADD KEY `seccionfk_idx` (`id_seccion`), ADD KEY `gradosfk_idx` (`id_grado`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
 ADD PRIMARY KEY (`id_direccion`), ADD UNIQUE KEY `id_direccion_UNIQUE` (`id_direccion`), ADD KEY `fk_direcciones_tipo_direcciones1_idx` (`id_tipo_direccion`), ADD KEY `fk_direcciones_paises1_idx` (`id_pais`), ADD KEY `fk_direcciones_estados1_idx` (`id_estado`), ADD KEY `fk_direcciones_municipios1_idx` (`id_municipio`), ADD KEY `fk_direcciones_parroquias1_idx` (`id_parroquia`);

--
-- Indices de la tabla `empleos`
--
ALTER TABLE `empleos`
 ADD PRIMARY KEY (`id_empleo`), ADD UNIQUE KEY `id_empleo_UNIQUE` (`id_empleo`), ADD KEY `fk_empleos_jornadas1_idx` (`id_jornada_laboral`), ADD KEY `fk_empleos_direcciones1_idx` (`id_direccion_empresa`);

--
-- Indices de la tabla `escala_ingresos`
--
ALTER TABLE `escala_ingresos`
 ADD PRIMARY KEY (`id_escala_ingreso`);

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
 ADD PRIMARY KEY (`id_escuela`), ADD UNIQUE KEY `idescuela_UNIQUE` (`id_escuela`), ADD KEY `fk_escuelas_telefonos1_idx` (`id_telefono_escuela`), ADD KEY `fk_escuelas_direcciones1_idx` (`id_direccion_escuela`);

--
-- Indices de la tabla `escuela_nivel_educativo`
--
ALTER TABLE `escuela_nivel_educativo`
 ADD PRIMARY KEY (`id_escuela_nivel_educativo`), ADD KEY `fk_escuela_idx` (`id_escuela`), ADD KEY `fk_nivel_educativo_idx` (`id_nivel_educativo`);

--
-- Indices de la tabla `escuela_nivel_educativo_grado`
--
ALTER TABLE `escuela_nivel_educativo_grado`
 ADD PRIMARY KEY (`id_escuela_nivel_educativo_grado`), ADD KEY `fk_grado_idx` (`id_grado`), ADD KEY `fk_escuela_nivel_educativo_idx` (`id_escuela_nivel_educativo`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
 ADD PRIMARY KEY (`id_estado`), ADD UNIQUE KEY `id_pais_UNIQUE` (`id_estado`), ADD KEY `fk_estados_paises1_idx` (`id_pais`);

--
-- Indices de la tabla `estaturas`
--
ALTER TABLE `estaturas`
 ADD PRIMARY KEY (`id_estatura`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
 ADD PRIMARY KEY (`id_estudiante`), ADD UNIQUE KEY `id_estudiante_UNIQUE` (`id_estudiante`), ADD KEY `fk_estudiantes_condicion_vivienda1_idx` (`id_condicion_vivienda`), ADD KEY `fk_estudiantes_medio_transporte1_idx` (`id_medio_transporte`), ADD KEY `fk_estudiantes_escuelas1_idx` (`id_escuela`), ADD KEY `fk_estudiantes_tipo_parto1_idx` (`id_tipo_parto`), ADD KEY `fk_estudiantes_personas1_idx` (`id_persona`), ADD KEY `fk_estudiantes_grados1_idx` (`id_grado`), ADD KEY `fk_estudiantes_secciones1_idx` (`id_seccion`), ADD KEY `fk_estudiantes_vive_con1_idx` (`id_vive_con`), ADD KEY `fk_estudiantes_telefonos1_idx` (`id_telefono`), ADD KEY `fk_estudiantes_direcciones1_idx` (`id_direccion_nacimiento`), ADD KEY `fk_estudiantes_direcciones2_idx` (`id_direccion_residencia`), ADD KEY `fk_estudiantes_escala_ingresos1_idx` (`id_escala_ingreso_familia`), ADD KEY `fk_estudiantes_personas2_idx` (`id_persona_emergencia_uno`), ADD KEY `fk_estudiantes_personas3_idx` (`id_persona_emergencia_dos`), ADD KEY `fk_estudiantes_representantes1_idx` (`id_representante`);

--
-- Indices de la tabla `est_eva_inst`
--
ALTER TABLE `est_eva_inst`
 ADD PRIMARY KEY (`est_eva_inst_id`);

--
-- Indices de la tabla `est_eva_tecnicas`
--
ALTER TABLE `est_eva_tecnicas`
 ADD PRIMARY KEY (`est_eva_tecnica_id`);

--
-- Indices de la tabla `evaluacion_planificacion_media`
--
ALTER TABLE `evaluacion_planificacion_media`
 ADD PRIMARY KEY (`evaluacion_planificacion_media_id`);

--
-- Indices de la tabla `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`exam_id`);

--
-- Indices de la tabla `grade`
--
ALTER TABLE `grade`
 ADD PRIMARY KEY (`grade_id`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
 ADD PRIMARY KEY (`id_grado`), ADD UNIQUE KEY `id_grado_UNIQUE` (`id_grado`);

--
-- Indices de la tabla `grado_escuela`
--
ALTER TABLE `grado_escuela`
 ADD PRIMARY KEY (`id_grado_escuela`), ADD KEY `fk_grado_escuela_grados1_idx` (`id_grado`), ADD KEY `fk_grado_escuela_escuelas1_idx` (`id_escuela`);

--
-- Indices de la tabla `instrumento_planificacion_media`
--
ALTER TABLE `instrumento_planificacion_media`
 ADD PRIMARY KEY (`instrumento_planificacion_media_id`);

--
-- Indices de la tabla `jornadas`
--
ALTER TABLE `jornadas`
 ADD PRIMARY KEY (`id_jornadas`), ADD UNIQUE KEY `id_tipo_direccion_UNIQUE` (`id_jornadas`);

--
-- Indices de la tabla `log_base_datos`
--
ALTER TABLE `log_base_datos`
 ADD PRIMARY KEY (`id_log_base_datos`), ADD UNIQUE KEY `id_log_base_datos_UNIQUE` (`id_log_base_datos`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
 ADD PRIMARY KEY (`id_maestro`), ADD UNIQUE KEY `idmaestro_UNIQUE` (`id_maestro`), ADD UNIQUE KEY `id_persona_UNIQUE` (`id_persona`), ADD KEY `fk_maestros_escuelas1_idx` (`id_escuela`);

--
-- Indices de la tabla `maestro_grado`
--
ALTER TABLE `maestro_grado`
 ADD PRIMARY KEY (`id_maestro_grado`), ADD UNIQUE KEY `id_maestro_grado_UNIQUE` (`id_maestro_grado`), ADD KEY `fk_maestro_grado_grados1_idx` (`id_grado`), ADD KEY `fk_maestro_grado_maestros1_idx` (`id_maestro`);

--
-- Indices de la tabla `mark`
--
ALTER TABLE `mark`
 ADD PRIMARY KEY (`mark_id`);

--
-- Indices de la tabla `medio_transporte`
--
ALTER TABLE `medio_transporte`
 ADD PRIMARY KEY (`id_medio_transporte`), ADD UNIQUE KEY `id_vive_con_UNIQUE` (`id_medio_transporte`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
 ADD PRIMARY KEY (`id_municipio`), ADD UNIQUE KEY `id_pais_UNIQUE` (`id_municipio`), ADD KEY `fk_municipios_estados1_idx` (`id_estado`);

--
-- Indices de la tabla `niveles_educativos`
--
ALTER TABLE `niveles_educativos`
 ADD PRIMARY KEY (`id_niveles_eductivos`);

--
-- Indices de la tabla `nivel_ingreso_censo`
--
ALTER TABLE `nivel_ingreso_censo`
 ADD PRIMARY KEY (`id_nivel_ingreso_censo`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
 ADD PRIMARY KEY (`id_padre`), ADD UNIQUE KEY `id_padre_UNIQUE` (`id_padre`), ADD UNIQUE KEY `id_persona_UNIQUE` (`id_persona`), ADD KEY `fk_padres_empleos1_idx` (`id_empleo`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
 ADD PRIMARY KEY (`id_pais`), ADD UNIQUE KEY `id_pais_UNIQUE` (`id_pais`);

--
-- Indices de la tabla `parentescos`
--
ALTER TABLE `parentescos`
 ADD PRIMARY KEY (`id_parentesco`), ADD UNIQUE KEY `id_parentesco_UNIQUE` (`id_parentesco`);

--
-- Indices de la tabla `parroquias`
--
ALTER TABLE `parroquias`
 ADD PRIMARY KEY (`id_parroquia`), ADD KEY `fk_parroquia_municipio1` (`id_municipio`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
 ADD PRIMARY KEY (`id_perfil`), ADD UNIQUE KEY `id_perfil` (`id_perfil`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
 ADD PRIMARY KEY (`id_persona`), ADD UNIQUE KEY `id_persona_UNIQUE` (`id_persona`), ADD KEY `fk_personas_direcciones1_idx` (`id_direccion_persona`), ADD KEY `fk_personas_tipo_telefonos1_idx` (`id_telefono_persona`), ADD KEY `fk_personas_sexos1_idx` (`id_sexo`), ADD KEY `fk_personas_paises1_idx` (`id_pais_nacimiento`);

--
-- Indices de la tabla `pesos`
--
ALTER TABLE `pesos`
 ADD PRIMARY KEY (`id_peso`);

--
-- Indices de la tabla `proyecto_est_eva_ins`
--
ALTER TABLE `proyecto_est_eva_ins`
 ADD PRIMARY KEY (`proyecto_est_eva_ins_id`);

--
-- Indices de la tabla `proyecto_est_eva_tec`
--
ALTER TABLE `proyecto_est_eva_tec`
 ADD PRIMARY KEY (`proyecto_est_eva_tec_id`);

--
-- Indices de la tabla `proyecto_primaria`
--
ALTER TABLE `proyecto_primaria`
 ADD PRIMARY KEY (`proyecto_id`);

--
-- Indices de la tabla `puntaje_censo`
--
ALTER TABLE `puntaje_censo`
 ADD PRIMARY KEY (`id_puntaje_censo`), ADD KEY `fk_putaje_censo_idx` (`id_censo`);

--
-- Indices de la tabla `recaudos`
--
ALTER TABLE `recaudos`
 ADD PRIMARY KEY (`id_recaudo`), ADD UNIQUE KEY `id_recaudo_UNIQUE` (`id_recaudo`);

--
-- Indices de la tabla `recaudo_estudiante`
--
ALTER TABLE `recaudo_estudiante`
 ADD PRIMARY KEY (`id_recaudo_estudiante`), ADD KEY `recaudo_estudiante_estudiante_idx` (`id_estudiante`), ADD KEY `recaudo_estudiante_recaudo_idx` (`id_recaudo`);

--
-- Indices de la tabla `recaudo_grado`
--
ALTER TABLE `recaudo_grado`
 ADD PRIMARY KEY (`id_recaudo_grado`), ADD UNIQUE KEY `id_recaudo_grado_UNIQUE` (`id_recaudo_grado`), ADD KEY `fk_recaudos_grado_grados1_idx` (`id_grado`), ADD KEY `fk_recaudos_grado_recaudos1_idx` (`id_recaudo`);

--
-- Indices de la tabla `recursos_planificacion_media`
--
ALTER TABLE `recursos_planificacion_media`
 ADD PRIMARY KEY (`recursos_planificacion_media_id`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
 ADD PRIMARY KEY (`id_redes_social`);

--
-- Indices de la tabla `redes_sociales_usadas`
--
ALTER TABLE `redes_sociales_usadas`
 ADD PRIMARY KEY (`id_ redes_sociales_usadas`), ADD UNIQUE KEY `id_ redes_sociales_usadas_UNIQUE` (`id_ redes_sociales_usadas`), ADD KEY `fk_redes_sociales_usadas_redes_sociales1_idx` (`id_red_social`), ADD KEY `fk_redes_sociales_usadas_padres1_idx` (`id_padre_representante`);

--
-- Indices de la tabla `representantes`
--
ALTER TABLE `representantes`
 ADD PRIMARY KEY (`id_representante`), ADD UNIQUE KEY `id_representante_UNIQUE` (`id_representante`), ADD UNIQUE KEY `id_persona_UNIQUE` (`id_persona`), ADD KEY `fk_representantes_escala_ingresos1_idx` (`id_escala_ingreso`), ADD KEY `fk_representantes_parentescos1_idx` (`id_parentesco`), ADD KEY `fk_representantes_empleos1_idx` (`id_empleo`);

--
-- Indices de la tabla `sacramentos`
--
ALTER TABLE `sacramentos`
 ADD PRIMARY KEY (`id_sacramento`), ADD UNIQUE KEY `id_vive_con_UNIQUE` (`id_sacramento`);

--
-- Indices de la tabla `sacramentos_recibidos`
--
ALTER TABLE `sacramentos_recibidos`
 ADD PRIMARY KEY (`id_sacramentos_recibidos`), ADD UNIQUE KEY `id_vive_con_UNIQUE` (`id_sacramentos_recibidos`), ADD KEY `fk_sacramentos_recibidos_sacramentos1_idx` (`id_sacramento`), ADD KEY `fk_sacramentos_recibidos_estudiantes1_idx` (`id_estudiante`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
 ADD PRIMARY KEY (`id_seccion`), ADD UNIQUE KEY `id_seccion_UNIQUE` (`id_seccion`), ADD KEY `fk_secciones_grados1_idx` (`id_grado`);

--
-- Indices de la tabla `sectores_chacao`
--
ALTER TABLE `sectores_chacao`
 ADD PRIMARY KEY (`id_sector`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
 ADD PRIMARY KEY (`id_sesion`), ADD KEY `fecha_sesiones` (`fecha`);

--
-- Indices de la tabla `sexos`
--
ALTER TABLE `sexos`
 ADD PRIMARY KEY (`id_sexo`), ADD UNIQUE KEY `id_sexo_UNIQUE` (`id_sexo`);

--
-- Indices de la tabla `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`subject_id`);

--
-- Indices de la tabla `talla_calzados`
--
ALTER TABLE `talla_calzados`
 ADD PRIMARY KEY (`id_talla_calzado`);

--
-- Indices de la tabla `talla_camisas`
--
ALTER TABLE `talla_camisas`
 ADD PRIMARY KEY (`id_talla_camisa`);

--
-- Indices de la tabla `talla_pantalones`
--
ALTER TABLE `talla_pantalones`
 ADD PRIMARY KEY (`id_talla_pantalon`);

--
-- Indices de la tabla `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`teacher_id`);

--
-- Indices de la tabla `tecnicas_planificacion_media`
--
ALTER TABLE `tecnicas_planificacion_media`
 ADD PRIMARY KEY (`tecnicas_planificacion_media_id`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
 ADD PRIMARY KEY (`id_telefono`), ADD UNIQUE KEY `id_telefono_UNIQUE` (`id_telefono`), ADD KEY `fk_telefonos_tipo_telefonos1_idx` (`id_tipo_telefono`);

--
-- Indices de la tabla `tipo_direcciones`
--
ALTER TABLE `tipo_direcciones`
 ADD PRIMARY KEY (`id_tipo_direccion`), ADD UNIQUE KEY `id_tipo_direccion_UNIQUE` (`id_tipo_direccion`);

--
-- Indices de la tabla `tipo_parto`
--
ALTER TABLE `tipo_parto`
 ADD PRIMARY KEY (`id_tipo_parto`), ADD UNIQUE KEY `id_vive_con_UNIQUE` (`id_tipo_parto`);

--
-- Indices de la tabla `tipo_telefonos`
--
ALTER TABLE `tipo_telefonos`
 ADD PRIMARY KEY (`id_tipo_telefono`), ADD UNIQUE KEY `id_tipo_telefono_UNIQUE` (`id_tipo_telefono`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`), ADD UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`), ADD UNIQUE KEY `id_persona_UNIQUE` (`id_persona`);

--
-- Indices de la tabla `valor_puntaje_censo`
--
ALTER TABLE `valor_puntaje_censo`
 ADD PRIMARY KEY (`id_valor_puntaje_censo`);

--
-- Indices de la tabla `vive_con`
--
ALTER TABLE `vive_con`
 ADD PRIMARY KEY (`id_vive_con`), ADD UNIQUE KEY `id_vive_con_UNIQUE` (`id_vive_con`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `censo`
--
ALTER TABLE `censo`
MODIFY `id_censo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `censo_grados`
--
ALTER TABLE `censo_grados`
MODIFY `id_censo_grado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `censo_unidad_educativas`
--
ALTER TABLE `censo_unidad_educativas`
MODIFY `id_censo_unidad_educativa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `class`
--
ALTER TABLE `class`
MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `class_routine`
--
ALTER TABLE `class_routine`
MODIFY `class_routine_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `condicion_vivienda`
--
ALTER TABLE `condicion_vivienda`
MODIFY `id_condicion_vivienda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
MODIFY `id_configuracion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `empleos`
--
ALTER TABLE `empleos`
MODIFY `id_empleo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `escala_ingresos`
--
ALTER TABLE `escala_ingresos`
MODIFY `id_escala_ingreso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `escuelas`
--
ALTER TABLE `escuelas`
MODIFY `id_escuela` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `escuela_nivel_educativo`
--
ALTER TABLE `escuela_nivel_educativo`
MODIFY `id_escuela_nivel_educativo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `escuela_nivel_educativo_grado`
--
ALTER TABLE `escuela_nivel_educativo_grado`
MODIFY `id_escuela_nivel_educativo_grado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `estaturas`
--
ALTER TABLE `estaturas`
MODIFY `id_estatura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `est_eva_inst`
--
ALTER TABLE `est_eva_inst`
MODIFY `est_eva_inst_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `evaluacion_planificacion_media`
--
ALTER TABLE `evaluacion_planificacion_media`
MODIFY `evaluacion_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `exam`
--
ALTER TABLE `exam`
MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `grade`
--
ALTER TABLE `grade`
MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `grado_escuela`
--
ALTER TABLE `grado_escuela`
MODIFY `id_grado_escuela` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `instrumento_planificacion_media`
--
ALTER TABLE `instrumento_planificacion_media`
MODIFY `instrumento_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `jornadas`
--
ALTER TABLE `jornadas`
MODIFY `id_jornadas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `log_base_datos`
--
ALTER TABLE `log_base_datos`
MODIFY `id_log_base_datos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `maestro_grado`
--
ALTER TABLE `maestro_grado`
MODIFY `id_maestro_grado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mark`
--
ALTER TABLE `mark`
MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `medio_transporte`
--
ALTER TABLE `medio_transporte`
MODIFY `id_medio_transporte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `niveles_educativos`
--
ALTER TABLE `niveles_educativos`
MODIFY `id_niveles_eductivos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `nivel_ingreso_censo`
--
ALTER TABLE `nivel_ingreso_censo`
MODIFY `id_nivel_ingreso_censo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
MODIFY `id_padre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `parentescos`
--
ALTER TABLE `parentescos`
MODIFY `id_parentesco` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
MODIFY `id_perfil` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `pesos`
--
ALTER TABLE `pesos`
MODIFY `id_peso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT de la tabla `proyecto_est_eva_ins`
--
ALTER TABLE `proyecto_est_eva_ins`
MODIFY `proyecto_est_eva_ins_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `proyecto_est_eva_tec`
--
ALTER TABLE `proyecto_est_eva_tec`
MODIFY `proyecto_est_eva_tec_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyecto_primaria`
--
ALTER TABLE `proyecto_primaria`
MODIFY `proyecto_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `puntaje_censo`
--
ALTER TABLE `puntaje_censo`
MODIFY `id_puntaje_censo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `recaudos`
--
ALTER TABLE `recaudos`
MODIFY `id_recaudo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `recaudo_estudiante`
--
ALTER TABLE `recaudo_estudiante`
MODIFY `id_recaudo_estudiante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `recaudo_grado`
--
ALTER TABLE `recaudo_grado`
MODIFY `id_recaudo_grado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT de la tabla `recursos_planificacion_media`
--
ALTER TABLE `recursos_planificacion_media`
MODIFY `recursos_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
MODIFY `id_redes_social` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `redes_sociales_usadas`
--
ALTER TABLE `redes_sociales_usadas`
MODIFY `id_ redes_sociales_usadas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `representantes`
--
ALTER TABLE `representantes`
MODIFY `id_representante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `sacramentos`
--
ALTER TABLE `sacramentos`
MODIFY `id_sacramento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sacramentos_recibidos`
--
ALTER TABLE `sacramentos_recibidos`
MODIFY `id_sacramentos_recibidos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
MODIFY `id_seccion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `sectores_chacao`
--
ALTER TABLE `sectores_chacao`
MODIFY `id_sector` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `sexos`
--
ALTER TABLE `sexos`
MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `subject`
--
ALTER TABLE `subject`
MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `talla_calzados`
--
ALTER TABLE `talla_calzados`
MODIFY `id_talla_calzado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `talla_camisas`
--
ALTER TABLE `talla_camisas`
MODIFY `id_talla_camisa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `talla_pantalones`
--
ALTER TABLE `talla_pantalones`
MODIFY `id_talla_pantalon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `tecnicas_planificacion_media`
--
ALTER TABLE `tecnicas_planificacion_media`
MODIFY `tecnicas_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_direcciones`
--
ALTER TABLE `tipo_direcciones`
MODIFY `id_tipo_direccion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_parto`
--
ALTER TABLE `tipo_parto`
MODIFY `id_tipo_parto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_telefonos`
--
ALTER TABLE `tipo_telefonos`
MODIFY `id_tipo_telefono` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `valor_puntaje_censo`
--
ALTER TABLE `valor_puntaje_censo`
MODIFY `id_valor_puntaje_censo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `vive_con`
--
ALTER TABLE `vive_con`
MODIFY `id_vive_con` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `censo`
--
ALTER TABLE `censo`
ADD CONSTRAINT `fk_grado_a_cursar` FOREIGN KEY (`GradoACursar`) REFERENCES `censo_grados` (`id_censo_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cupos`
--
ALTER TABLE `cupos`
ADD CONSTRAINT `escuelafk` FOREIGN KEY (`id_escuela`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `gradosfk` FOREIGN KEY (`id_grado`) REFERENCES `grado_escuela` (`id_grado_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `seccionfk` FOREIGN KEY (`id_seccion`) REFERENCES `secciones` (`id_seccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
ADD CONSTRAINT `fk_direcciones_estados1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_direcciones_municipios1` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_direcciones_paises1` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_direcciones_parroquias1` FOREIGN KEY (`id_parroquia`) REFERENCES `parroquias` (`id_parroquia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_direcciones_tipo_direcciones1` FOREIGN KEY (`id_tipo_direccion`) REFERENCES `tipo_direcciones` (`id_tipo_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleos`
--
ALTER TABLE `empleos`
ADD CONSTRAINT `fk_empleos_direcciones1` FOREIGN KEY (`id_direccion_empresa`) REFERENCES `direcciones` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_empleos_jornadas1` FOREIGN KEY (`id_jornada_laboral`) REFERENCES `jornadas` (`id_jornadas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escuelas`
--
ALTER TABLE `escuelas`
ADD CONSTRAINT `fk_escuelas_direcciones1` FOREIGN KEY (`id_direccion_escuela`) REFERENCES `direcciones` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_escuelas_telefonos1` FOREIGN KEY (`id_telefono_escuela`) REFERENCES `telefonos` (`id_telefono`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escuela_nivel_educativo`
--
ALTER TABLE `escuela_nivel_educativo`
ADD CONSTRAINT `fk_escuela` FOREIGN KEY (`id_escuela`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_nivel_educativo` FOREIGN KEY (`id_nivel_educativo`) REFERENCES `niveles_educativos` (`id_niveles_eductivos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escuela_nivel_educativo_grado`
--
ALTER TABLE `escuela_nivel_educativo_grado`
ADD CONSTRAINT `fk_escuela_nivel_educativo` FOREIGN KEY (`id_escuela_nivel_educativo`) REFERENCES `escuela_nivel_educativo` (`id_escuela_nivel_educativo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_grado` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estados`
--
ALTER TABLE `estados`
ADD CONSTRAINT `fk_estados_paises1` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
ADD CONSTRAINT `fk_estudiantes_condicion_vivienda1` FOREIGN KEY (`id_condicion_vivienda`) REFERENCES `condicion_vivienda` (`id_condicion_vivienda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_direcciones1` FOREIGN KEY (`id_direccion_nacimiento`) REFERENCES `direcciones` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_direcciones2` FOREIGN KEY (`id_direccion_residencia`) REFERENCES `direcciones` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_escala_ingresos1` FOREIGN KEY (`id_escala_ingreso_familia`) REFERENCES `escala_ingresos` (`id_escala_ingreso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_escuelas1` FOREIGN KEY (`id_escuela`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_grados1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_medio_transporte1` FOREIGN KEY (`id_medio_transporte`) REFERENCES `medio_transporte` (`id_medio_transporte`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_personas1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_personas2` FOREIGN KEY (`id_persona_emergencia_uno`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_personas3` FOREIGN KEY (`id_persona_emergencia_dos`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_representantes1` FOREIGN KEY (`id_representante`) REFERENCES `representantes` (`id_representante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_secciones1` FOREIGN KEY (`id_seccion`) REFERENCES `secciones` (`id_seccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_telefonos1` FOREIGN KEY (`id_telefono`) REFERENCES `telefonos` (`id_telefono`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_tipo_parto1` FOREIGN KEY (`id_tipo_parto`) REFERENCES `tipo_parto` (`id_tipo_parto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_estudiantes_vive_con1` FOREIGN KEY (`id_vive_con`) REFERENCES `vive_con` (`id_vive_con`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grado_escuela`
--
ALTER TABLE `grado_escuela`
ADD CONSTRAINT `fk_grado_escuela_escuelas1` FOREIGN KEY (`id_escuela`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_grado_escuela_grados1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `maestros`
--
ALTER TABLE `maestros`
ADD CONSTRAINT `fk_maestros_escuelas1` FOREIGN KEY (`id_escuela`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_maestros_personas1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `maestro_grado`
--
ALTER TABLE `maestro_grado`
ADD CONSTRAINT `fk_maestro_grado_grados1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_maestro_grado_maestros1` FOREIGN KEY (`id_maestro`) REFERENCES `maestros` (`id_maestro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
ADD CONSTRAINT `fk_municipios_estados1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
ADD CONSTRAINT `fk_padres_empleos1` FOREIGN KEY (`id_empleo`) REFERENCES `empleos` (`id_empleo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_padres_personas1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parroquias`
--
ALTER TABLE `parroquias`
ADD CONSTRAINT `fk_parroquia_municipio1` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
ADD CONSTRAINT `fk_personas_direcciones1` FOREIGN KEY (`id_direccion_persona`) REFERENCES `direcciones` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_personas_paises1` FOREIGN KEY (`id_pais_nacimiento`) REFERENCES `paises` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_personas_sexos1` FOREIGN KEY (`id_sexo`) REFERENCES `sexos` (`id_sexo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_personas_tipo_telefonos1` FOREIGN KEY (`id_telefono_persona`) REFERENCES `tipo_telefonos` (`id_tipo_telefono`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `puntaje_censo`
--
ALTER TABLE `puntaje_censo`
ADD CONSTRAINT `fk_putaje_censo` FOREIGN KEY (`id_censo`) REFERENCES `censo` (`id_censo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recaudo_estudiante`
--
ALTER TABLE `recaudo_estudiante`
ADD CONSTRAINT `recaudo_estudiante_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `recaudo_estudiante_recaudo` FOREIGN KEY (`id_recaudo`) REFERENCES `recaudos` (`id_recaudo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recaudo_grado`
--
ALTER TABLE `recaudo_grado`
ADD CONSTRAINT `fk_recaudos_grado_grados1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_recaudos_grado_recaudos1` FOREIGN KEY (`id_recaudo`) REFERENCES `recaudos` (`id_recaudo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `redes_sociales_usadas`
--
ALTER TABLE `redes_sociales_usadas`
ADD CONSTRAINT `fk_redes_sociales_usadas_padres1` FOREIGN KEY (`id_padre_representante`) REFERENCES `padres` (`id_padre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_redes_sociales_usadas_redes_sociales1` FOREIGN KEY (`id_red_social`) REFERENCES `redes_sociales` (`id_redes_social`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_redes_sociales_usadas_representantes1` FOREIGN KEY (`id_padre_representante`) REFERENCES `representantes` (`id_representante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `representantes`
--
ALTER TABLE `representantes`
ADD CONSTRAINT `fk_representantes_empleos1` FOREIGN KEY (`id_empleo`) REFERENCES `empleos` (`id_empleo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_representantes_escala_ingresos1` FOREIGN KEY (`id_escala_ingreso`) REFERENCES `escala_ingresos` (`id_escala_ingreso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_representantes_parentescos1` FOREIGN KEY (`id_parentesco`) REFERENCES `parentescos` (`id_parentesco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_representantes_personas1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sacramentos_recibidos`
--
ALTER TABLE `sacramentos_recibidos`
ADD CONSTRAINT `fk_sacramentos_recibidos_estudiantes1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_sacramentos_recibidos_sacramentos1` FOREIGN KEY (`id_sacramento`) REFERENCES `sacramentos` (`id_sacramento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `secciones`
--
ALTER TABLE `secciones`
ADD CONSTRAINT `fk_secciones_grados1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telefonos`
--
ALTER TABLE `telefonos`
ADD CONSTRAINT `fk_telefonos_tipo_telefonos1` FOREIGN KEY (`id_tipo_telefono`) REFERENCES `tipo_telefonos` (`id_tipo_telefono`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `fk_usuarios_personas1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
