-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2016 at 01:33 AM
-- Server version: 5.6.26-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tekkoa_xcolar`
--
CREATE DATABASE IF NOT EXISTS `tekkoa_xcolar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tekkoa_xcolar`;

-- --------------------------------------------------------

--
-- Table structure for table `actividades_planificacion_media`
--

DROP TABLE IF EXISTS `actividades_planificacion_media`;
CREATE TABLE IF NOT EXISTS `actividades_planificacion_media` (
  `actividades_planificacion_media_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actividades_planificacion_media`
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
-- Table structure for table `anamnesis_ts`
--

DROP TABLE IF EXISTS `anamnesis_ts`;
CREATE TABLE IF NOT EXISTS `anamnesis_ts` (
  `id_anamnesis_ts` int(11) NOT NULL AUTO_INCREMENT,
  `AmbienteVivienda` varchar(150) DEFAULT NULL,
  `AmbienteParedes` varchar(150) DEFAULT NULL,
  `AmbientePiso` varchar(150) DEFAULT NULL,
  `AmbienteTecho` varchar(150) DEFAULT NULL,
  `AmbienteHabitaciones` varchar(150) DEFAULT NULL,
  `AmbienteBanos` varchar(150) DEFAULT NULL,
  `AmbienteCocinaSalaComedor` varchar(150) DEFAULT NULL,
  `AmbienteSalaComedor` varchar(150) DEFAULT NULL,
  `AmbienteEnseresNevera` varchar(150) DEFAULT NULL,
  `AmbienteEnseresTV` varchar(150) DEFAULT NULL,
  `AmbienteEnseresBluray` varchar(150) DEFAULT NULL,
  `AmbienteEnseresCocina` varchar(150) DEFAULT NULL,
  `AmbienteEnseresHornoMicroondas` varchar(150) DEFAULT NULL,
  `SueldoFijoMensualRep` varchar(150) DEFAULT NULL,
  `AyudaEconomica` varchar(150) DEFAULT NULL,
  `Beca` varchar(150) DEFAULT NULL,
  `Subsidios` varchar(150) DEFAULT NULL,
  `OtrosIngresos` varchar(150) DEFAULT NULL,
  `Alimentos` varchar(150) DEFAULT NULL,
  `Vivienda` varchar(150) DEFAULT NULL,
  `Educacion` varchar(150) DEFAULT NULL,
  `Servicios` varchar(150) DEFAULT NULL,
  `OtrosEgresos` varchar(150) DEFAULT NULL,
  `ObservacionesSocioeconomicas` varchar(150) DEFAULT NULL,
  `CursoEducacionInicial` varchar(150) DEFAULT NULL,
  `CuantosNivelesInicial` varchar(150) DEFAULT NULL,
  `PorqueNivelesInicial` varchar(150) DEFAULT NULL,
  `ProblemasAdaptacionEscolar` varchar(150) DEFAULT NULL,
  `CambiosColegio` varchar(150) DEFAULT NULL,
  `PorqueCambiosColegio` varchar(150) DEFAULT NULL,
  `DificultadAprendizaje` varchar(150) DEFAULT NULL,
  `AreaDificultadAprendizaje` varchar(150) DEFAULT NULL,
  `AsisteControlPediatrico` varchar(150) DEFAULT NULL,
  `NombreApellidoPediatra` varchar(150) DEFAULT NULL,
  `UsaLentesCorrectivos` varchar(150) DEFAULT NULL,
  `ExpliqueLentesCorrectivos` varchar(150) DEFAULT NULL,
  `ProblemasOrtopedicos` varchar(150) DEFAULT NULL,
  `EspecifiqueProblemaOrtopedico` varchar(150) DEFAULT NULL,
  `AsisteControlOdontologico` varchar(150) DEFAULT NULL,
  `ObservacionesSalud` varchar(150) DEFAULT NULL,
  `DatosDeLaVivienda` varchar(150) DEFAULT NULL,
  `Estatura` varchar(150) DEFAULT NULL,
  `Peso` varchar(150) DEFAULT NULL,
  `TallaCamisa` varchar(150) DEFAULT NULL,
  `TallaPantalon` varchar(150) DEFAULT NULL,
  `TallaCalzado` varchar(150) DEFAULT NULL,
  `PadeceAlgunaEnfermedad` varchar(150) DEFAULT NULL,
  `TipoDeEnfermedadQuePadeceElAlumno` varchar(150) DEFAULT NULL,
  `ElAlumnoTieneAlgunaDiversidadFuncional` varchar(150) DEFAULT NULL,
  `RedSocialPadreWhatsapp` varchar(150) DEFAULT NULL,
  `aluDiversidadVisual` varchar(150) DEFAULT NULL,
  `aluDiversidadAuditiva` varchar(150) DEFAULT NULL,
  `aluDiversidadNeurologica` varchar(150) DEFAULT NULL,
  `aluDiversidadLenguaje` varchar(150) DEFAULT NULL,
  `aluDiversidadOtra` varchar(150) DEFAULT NULL,
  `OtroTipoDiversidad` varchar(150) DEFAULT NULL,
  `ElAlumnoHaSidoOperado` varchar(150) DEFAULT NULL,
  `EspecifiqueTipoOperacion` varchar(150) DEFAULT NULL,
  `ElAlumnoEsAlergico` varchar(150) DEFAULT NULL,
  `aluAlergiMedicina` varchar(150) DEFAULT NULL,
  `aluAlergiAlimento` varchar(150) DEFAULT NULL,
  `aluAlergiOtro` varchar(150) DEFAULT NULL,
  `OtroTipoDeAlergiasTieneElAlumno` varchar(150) DEFAULT NULL,
  `RegimenEspecialDeAlimentacionOTratamiento` varchar(150) DEFAULT NULL,
  `RegimenAlimenticio` varchar(150) DEFAULT NULL,
  `aluVacunaNinguna` varchar(150) DEFAULT NULL,
  `aluVacunaBCG` varchar(150) DEFAULT NULL,
  `aluVacunaTriple` varchar(150) DEFAULT NULL,
  `aluVacunaSarampion` varchar(150) DEFAULT NULL,
  `aluVacunaMeningitis` varchar(150) DEFAULT NULL,
  `aluVacunaAntigripal` varchar(150) DEFAULT NULL,
  `aluVacunaHepatitis` varchar(150) DEFAULT NULL,
  `aluVacunaHepatitisB` varchar(150) DEFAULT NULL,
  `aluVacunaNeumococo` varchar(150) DEFAULT NULL,
  `aluVacunaOtras` varchar(150) DEFAULT NULL,
  `OtrasVacunasCuentaElAlumno` varchar(150) DEFAULT NULL,
  `AluEnfermedadNinguna` varchar(150) DEFAULT NULL,
  `AluEnfermedadSarampion` varchar(150) DEFAULT NULL,
  `AluEnfermedadRubeola` varchar(150) DEFAULT NULL,
  `AluEnfermedadLechina` varchar(150) DEFAULT NULL,
  `AluEnfermedadTosferina` varchar(150) DEFAULT NULL,
  `AluEnfermedadHepatitis` varchar(150) DEFAULT NULL,
  `AluEnfermedadDengue` varchar(150) DEFAULT NULL,
  `AluEnfermedadAsma` varchar(150) DEFAULT NULL,
  `AluEnfermedadConvulsiones` varchar(150) DEFAULT NULL,
  `OtrasEnfermedades` varchar(150) DEFAULT NULL,
  `id_censo` int(11) DEFAULT '0',
  PRIMARY KEY (`id_anamnesis_ts`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `asistencias`
--

DROP TABLE IF EXISTS `asistencias`;
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
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
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
-- Table structure for table `becas`
--

DROP TABLE IF EXISTS `becas`;
CREATE TABLE IF NOT EXISTS `becas` (
  `id_beca` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_beca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `cargo_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT 'DOCENTE',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cargo`
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
-- Table structure for table `censo`
--

DROP TABLE IF EXISTS `censo`;
CREATE TABLE IF NOT EXISTS `censo` (
  `id_censo` int(11) NOT NULL AUTO_INCREMENT,
  `Residente` tinyint(1) DEFAULT '0',
  `GradoACursar` int(11) DEFAULT NULL,
  `ElAlumnoEstudiaActualmente` tinyint(1) DEFAULT '0',
  `ElAlumnoCursoElAnterior` tinyint(1) DEFAULT '0',
  `ElAlumnoRepiteGrado` tinyint(1) DEFAULT NULL,
  `GradoRepetido` varchar(150) DEFAULT NULL,
  `UnidadEducativaDeProcedencia` varchar(250) DEFAULT NULL,
  `NombreDeLaInstitucion` varchar(250) DEFAULT NULL,
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
  `PrimerNombreDelAlumno` varchar(150) DEFAULT NULL,
  `SegundoNombreDelAlumno` varchar(150) DEFAULT NULL,
  `PrimerApellidoDelAlumno` varchar(150) DEFAULT NULL,
  `SegundoApellidoDelAlumno` varchar(150) DEFAULT NULL,
  `CedulaDeIdentidadDelAlumnoOCedulaEscolar` int(11) DEFAULT NULL,
  `FechaDeNacimientoDelAlumno` date DEFAULT NULL,
  `SexoDelAlumno` varchar(9) DEFAULT NULL,
  `NacionalidadDelAlumno` varchar(25) DEFAULT NULL,
  `PaisDeNacimientoDelAlumno` varchar(250) DEFAULT NULL,
  `EstadoDondeNacioElAlumno` int(11) DEFAULT NULL,
  `MunicipioDondeNacioElAlumno` int(11) DEFAULT NULL,
  `ParroquiaOSectorDondeNacioElAlumno` varchar(250) DEFAULT NULL,
  `EstadoDondeResideElAlumno` int(11) DEFAULT NULL,
  `MunicipioDondeResideElAlumno` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideElAlumno` varchar(250) DEFAULT NULL,
  `CalleOAvenidaDondeResideElAlumno` varchar(250) DEFAULT NULL,
  `CasaOEdificioDondeResideElAlumno` varchar(250) DEFAULT NULL,
  `PisoOPlantaDondeResideElAlumno` varchar(50) DEFAULT NULL,
  `NumeroDeCasaOApartamentoDondeResideElAlumno` varchar(5) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomicilioDelAlumno` varchar(250) DEFAULT NULL,
  `ParentescoConElAlumno` varchar(15) DEFAULT NULL,
  `OtroParentescoConElAlumno` varchar(15) DEFAULT NULL,
  `PrimerNombreDelRepresentante` varchar(150) DEFAULT NULL,
  `SegundoNombreDelRepresentante` varchar(150) DEFAULT NULL,
  `PrimerApellidoDelRepresentante` varchar(150) DEFAULT NULL,
  `SegundoApellidoDelRepresentante` varchar(150) DEFAULT NULL,
  `CedulaDeIdentidadDelRepresentante` int(11) DEFAULT NULL,
  `FechaDeNacimientoDelRepresentante` date DEFAULT NULL,
  `NacionalidadDelRepresentante` varchar(15) DEFAULT NULL,
  `EstadoDondeNacioElRepresentante` varchar(16) DEFAULT NULL,
  `MunicipioDondeNacioElRepresentante` varchar(28) DEFAULT NULL,
  `ParroquiaDondeNacioElRepresentante` varchar(150) DEFAULT NULL,
  `PaisDeNacimientoDelRepresentante` varchar(250) DEFAULT NULL,
  `EstadoCivilDelRepresentante` varchar(11) DEFAULT NULL,
  `RepresentanteMismaDireAlu` tinyint(1) DEFAULT '0',
  `EstadoDondeResideElRepresentante` int(11) DEFAULT NULL,
  `MunicipioDondeResideElRepresentante` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideElRepresentante` varchar(250) DEFAULT NULL,
  `CalleOAvenidaDondeResideElRepresentante` varchar(250) DEFAULT NULL,
  `CasaOEdificioDondeResideElRepresentante` varchar(250) DEFAULT NULL,
  `PisoDondeResideElRepresentante` varchar(250) DEFAULT NULL,
  `NumeroOApartamentoDondeResideElRepresentante` varchar(250) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomicilioDelRepresentante` varchar(250) DEFAULT NULL,
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
  `ProfesionUOcupacionDelRepresentante` varchar(250) DEFAULT NULL,
  `IngresoMensualDelRepresentante` varchar(100) DEFAULT '0',
  `EscalaDeIngresoDelRepresentante` varchar(250) DEFAULT NULL,
  `OtrosIngresosDentroDeSuGrupoFamiliar` varchar(250) DEFAULT NULL,
  `EscalaDeIngresosDelGrupoFamiliar` varchar(250) DEFAULT NULL,
  `TipoDeJornadaLaboralDelRepresentante` varchar(25) DEFAULT NULL,
  `NombreDeLaEmpresaUOrganismoDondeTrabajaElRepresentante` varchar(250) DEFAULT NULL,
  `EstadoDondeSeUbicaElTrabajoDelRepresentante` int(11) DEFAULT NULL,
  `MunicipioDondeTrabajaElRepresentante` int(11) DEFAULT NULL,
  `UrbanizaOSectorDondeSeUbicaElTrabajoDelRepresentante` varchar(250) NOT NULL,
  `CalleOAvenidaDondeSeUbicaElTrabajoDelRepresentante` varchar(250) DEFAULT NULL,
  `EdificioOCasaDondeTrabajaElRepresentante` varchar(250) DEFAULT NULL,
  `PisoDondeSeUbicaElTrabajoDelRepresentante` varchar(250) DEFAULT NULL,
  `OficinaNumeroOApartamentoDondeTrabajaElRepresentante` varchar(250) DEFAULT NULL,
  `TelefonoDelTrabajoActualDelRepresentante` varchar(250) DEFAULT NULL,
  `ExtensionTelefonicaParaContactarAlRepresentante` varchar(15) DEFAULT NULL,
  `PersonaContactoEnElTrabajoDelRepresentante` varchar(250) DEFAULT NULL,
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
  `NombreDeLaMadre` varchar(150) DEFAULT NULL,
  `ApellidosDeLaMadre` varchar(150) DEFAULT NULL,
  `CedulaDeIdentidadDeLaMadre` int(11) DEFAULT NULL,
  `FechaDeNacimientoDeLaMadre` datetime DEFAULT NULL,
  `NacionalidadMadre` varchar(150) DEFAULT NULL,
  `PaisDeNacimientoDeLaMadre` varchar(150) DEFAULT NULL,
  `EstadoCivilMadre` varchar(20) DEFAULT NULL,
  `EstadoDondeNacioLaMadre` int(11) DEFAULT NULL,
  `MunicipioDondeNacioLaMadre` int(11) DEFAULT NULL,
  `MadreMismaResiAlu` tinyint(1) DEFAULT '0',
  `EstadoDondeResideLaMadre` int(11) DEFAULT NULL,
  `MunicipioDondeResideLaMadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideLaMadre` varchar(250) DEFAULT NULL,
  `CasaOEdificioDondeResideLaMadre` varchar(10) DEFAULT NULL,
  `PisoDondeResideLaMadre` varchar(10) DEFAULT NULL,
  `NumeroOApartamentoDondeResideLaMadre` varchar(10) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomiclioDeLaMadre` varchar(150) DEFAULT NULL,
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
  `NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre` varchar(250) DEFAULT NULL,
  `EstadoDondeTrabajaLaMadre` int(11) DEFAULT NULL,
  `MunicipioDondeTrabajaLaMadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeTrabajaLaMadre` varchar(150) DEFAULT NULL,
  `EdificioOCasaDondeTrabajaLaMadre` varchar(250) DEFAULT NULL,
  `PisoDondeTrabajaLaMadre` varchar(250) DEFAULT NULL,
  `NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre` varchar(10) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlTrabajoDeLaMadre` varchar(250) DEFAULT NULL,
  `TelefonoDelLugarDelTrabajodeLaMadre` varchar(15) DEFAULT NULL,
  `ExtensionTelefonicaParaContactarALaMadre` varchar(15) DEFAULT NULL,
  `PersonaContactoEnElTrabajoDeLaMadre` varchar(250) DEFAULT NULL,
  `TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre` varchar(15) DEFAULT NULL,
  `ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre` varchar(15) DEFAULT NULL,
  `ElPadreVive` varchar(2) DEFAULT NULL,
  `NombreDelPadre` varchar(250) DEFAULT NULL,
  `ApellidosDelPadre` varchar(250) DEFAULT NULL,
  `CedulaDeIdentidadDelPadre` int(11) DEFAULT NULL,
  `FechaDeNacimientoDelPadre` datetime DEFAULT NULL,
  `NacionalidadDelPadre` varchar(10) DEFAULT NULL,
  `PaisDondeNacioElPadre` varchar(150) DEFAULT NULL,
  `EstadoCivilDelPadre` varchar(14) DEFAULT NULL,
  `EstadoDondeNacioElPadre` int(11) DEFAULT NULL,
  `MunicipioDondeNacioElPadre` int(11) DEFAULT NULL,
  `ElPadreViveEnElMismoLugarDeResidenciaDelAlumno` tinyint(1) DEFAULT '0',
  `EstadoDondeResideElPadre` int(11) DEFAULT NULL,
  `MunicipioDondeResideElPadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideElPadre` varchar(250) DEFAULT NULL,
  `CalleOAvenidaDondeResideElPadre` varchar(250) DEFAULT NULL,
  `CasaOEdificioDondeResideElPadre` varchar(250) DEFAULT NULL,
  `PisoDondeResideElPadre` varchar(8) DEFAULT NULL,
  `NumeroDeCasaOApartamentoDondeResideElPadre` varchar(3) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomicilioDelPadre` varchar(250) DEFAULT NULL,
  `TelefonoDeHabitacionDelPadre` varchar(15) DEFAULT NULL,
  `TelefonoCelularDelPadre` varchar(15) DEFAULT NULL,
  `CorreoElectronicoDelPadre` varchar(250) DEFAULT NULL,
  `RedSocialPadreFacebook` tinyint(1) DEFAULT '0',
  `RedSocialPadreTwitter` tinyint(1) DEFAULT '0',
  `RedSocialPadreWhatsapp` tinyint(1) DEFAULT '0',
  `RedSocialPadreOtra` tinyint(1) DEFAULT '0',
  `RedesSocialesQueUsaElPadre` varchar(150) DEFAULT NULL,
  `EspecifiqueQueOtrasRedesSocialesUsaElPadre` varchar(150) DEFAULT NULL,
  `ElPadreTrabajaActualmente` tinyint(1) DEFAULT '0',
  `ProfesionUOcupacionDelPadre` varchar(250) DEFAULT NULL,
  `IngresoMensualDelPadre` varchar(21) DEFAULT '0',
  `EscalaDeIngresosDelPadre` varchar(29) DEFAULT NULL,
  `TipoDeJornadaLaboralDelPadre` varchar(15) DEFAULT NULL,
  `NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre` varchar(250) DEFAULT NULL,
  `EstadoDondeTrabajaElPadre` int(11) DEFAULT NULL,
  `MunicipioDondeTrabajaElPadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeTrabajaElPadre` varchar(250) DEFAULT NULL,
  `CalleOAvenidaDondeTrabajaElPadre` varchar(250) DEFAULT NULL,
  `EdificioOCasaDondeTrabajaElPadre` varchar(250) DEFAULT NULL,
  `PisoDondeTrabajaElPadre` varchar(11) DEFAULT NULL,
  `OficinaCasaOApartamentoDondeTrabajaElPadre` varchar(250) DEFAULT NULL,
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
  `GradosQueCursanLosHermanos` varchar(250) DEFAULT NULL,
  `UnidadEducativaMunicipalDondeEstudianLosHermanos` varchar(22) DEFAULT NULL,
  `DatosDeLaVivienda` varchar(25) DEFAULT NULL,
  `OtraCondicionDeViviendaResideElAlumno` varchar(45) DEFAULT NULL,
  `FactorRh` varchar(1) DEFAULT NULL,
  `Estatura` int(11) DEFAULT NULL,
  `Peso` int(11) DEFAULT NULL,
  `TallaCamisa` int(11) DEFAULT NULL,
  `TallaPantalon` int(11) DEFAULT NULL,
  `TallaCalzado` int(11) DEFAULT NULL,
  `TipoDeParto` varchar(7) DEFAULT NULL,
  `PadeceAlgunaEnfermedad` varchar(2) DEFAULT NULL,
  `TipoDeEnfermedadQuePadeceElAlumno` varchar(250) DEFAULT NULL,
  `ElAlumnoTieneAlgunaDiversidadFuncional` tinyint(1) DEFAULT '0',
  `aluDiversidadMotora` tinyint(1) DEFAULT '0',
  `aluDiversidadVisual` tinyint(1) DEFAULT '0',
  `aluDiversidadAuditiva` tinyint(1) DEFAULT '0',
  `aluDiversidadNeurologica` tinyint(1) DEFAULT '0',
  `aluDiversidadLenguaje` tinyint(1) DEFAULT '0',
  `aluDiversidadOtra` tinyint(1) DEFAULT '0',
  `OtroTipoDiversidad` varchar(250) DEFAULT '0',
  `ElAlumnoHaSidoOperado` tinyint(1) DEFAULT '0',
  `EspecifiqueTipoOperacion` text NOT NULL,
  `ElAlumnoEsAlergico` varchar(2) DEFAULT NULL,
  `TipoDeAlergias` varchar(250) DEFAULT NULL,
  `aluAlergiMedicina` tinyint(1) DEFAULT '0',
  `aluAlergiAlimento` tinyint(1) DEFAULT '0',
  `aluAlergiOtro` tinyint(1) DEFAULT '0',
  `OtroTipoDeAlergiasTieneElAlumno` varchar(250) DEFAULT NULL,
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
  `OtrasVacunasCuentaElAlumno` varchar(250) DEFAULT NULL,
  `AluEnfermedadNinguna` tinyint(1) DEFAULT '0',
  `AluEnfermedadSarampion` tinyint(1) DEFAULT '0',
  `AluEnfermedadRubeola` tinyint(1) DEFAULT '0',
  `AluEnfermedadLechina` tinyint(1) DEFAULT '0',
  `AluEnfermedadTosferina` tinyint(1) DEFAULT '0',
  `AluEnfermedadHepatitis` tinyint(1) DEFAULT '0',
  `AluEnfermedadDengue` tinyint(1) DEFAULT '0',
  `OtrasEnfermedades` varchar(250) DEFAULT NULL,
  `ElAlumnoEsCatolico` varchar(250) DEFAULT NULL,
  `HaCumplidoConAlgunoDeLosSiguientesSacramentos` varchar(250) DEFAULT NULL,
  `aluBautizo` tinyint(1) DEFAULT '0',
  `aluComunion` tinyint(1) DEFAULT '0',
  `aluConfirmacion` tinyint(1) DEFAULT '0',
  `RealizaAlgunaActividadEspecial` tinyint(1) DEFAULT '0',
  `ActividadesEspecialesQueRealizaElAlumno` varchar(11) DEFAULT NULL,
  `aluActiDeportiva` tinyint(1) DEFAULT '0',
  `aluActiAcademica` tinyint(1) DEFAULT '0',
  `aluActiCultural` tinyint(1) DEFAULT '0',
  `aluActiOtra` tinyint(1) DEFAULT '0',
  `EspecifiqueQueOtrasActividadesEspecialesRealizaElAlumno` varchar(250) DEFAULT NULL,
  `NombreYApellidoDelContactoDeEmergencia1` varchar(250) DEFAULT NULL,
  `TelefonoDelContactoDeEmergencia1` varchar(15) DEFAULT NULL,
  `ParentescoDelContactoDeEmergencia1ConElAlumno` varchar(250) DEFAULT NULL,
  `NombreYApellidoDelContactoDeEmergencia2` varchar(250) DEFAULT NULL,
  `TelefonoDelContactoDeEmergencia2` varchar(15) DEFAULT NULL,
  `ParentescoDelContactoDeEmergencia2ConElAlumno` varchar(250) DEFAULT NULL,
  `Observaciones` varchar(250) DEFAULT NULL,
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
  `SectorDondeResideElRepresentante` int(11) DEFAULT NULL,
  `aluSacramentoNinguno` tinyint(1) NOT NULL DEFAULT '0',
  `aluActiDeportivaNinguna` tinyint(1) NOT NULL DEFAULT '0',
  `id_especialista` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_censo`),
  UNIQUE KEY `id_censo_UNIQUE` (`id_censo`),
  KEY `GradoACursar` (`GradoACursar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Triggers `censo`
--
DROP TRIGGER IF EXISTS `preinscribir`;
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
DROP TRIGGER IF EXISTS `puntaje_censo`;
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
-- Table structure for table `censo_grados`
--

DROP TABLE IF EXISTS `censo_grados`;
CREATE TABLE IF NOT EXISTS `censo_grados` (
  `id_censo_grado` int(11) NOT NULL AUTO_INCREMENT,
  `grado` varchar(25) NOT NULL,
  PRIMARY KEY (`id_censo_grado`),
  UNIQUE KEY `grado` (`grado`),
  KEY `grado_2` (`grado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Grados usados en el censo (e.g mostrados en un select).' AUTO_INCREMENT=13 ;

--
-- Dumping data for table `censo_grados`
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
-- Table structure for table `censo_unidad_educativas`
--

DROP TABLE IF EXISTS `censo_unidad_educativas`;
CREATE TABLE IF NOT EXISTS `censo_unidad_educativas` (
  `id_censo_unidad_educativa` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_censo_unidad_educativa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `censo_unidad_educativas`
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
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0005ec8d1d8a915e1528460c327ac5f45a3d9b6f', '200.62.9.66', 1468252167, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235313935343b),
('0052602a47c55902bccc1e955239344bf4fc899b', '190.216.238.141', 1467915234, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931353132393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('016a20854da4803a4bfb292636a94636bb31c3c6', '190.216.238.141', 1467917337, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931373333303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('01bbb3c4dbb5c6a31934005f86ae3c39a65da2a3', '190.216.238.141', 1467925963, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373932353936333b),
('02f7d1795bc4a7f5e0ef23b7e4498cd47a7a4b8b', '190.216.238.141', 1467316566, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331363435383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('0786450c3c3c658ec70afc0272d5a1fef2e76e5b', '190.75.48.228', 1468385901, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383338353333373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('0ba8cc84c477c8a38e6794edb2f5cf89715144f3', '200.62.9.66', 1468249544, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234393534323b),
('0d215d679d7a130ffc43989a20bc6dffe0701b03', '200.62.9.66', 1468256528, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235343732353b),
('0da234a529189912845b05c023e3068bfaca1c33', '201.234.230.210', 1468329736, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393733363b),
('0e0c259577865b9cf49de08808127e22402c3699', '190.216.238.141', 1467920423, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373932303432333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('0e4ac12e97cab0bd1619b5fccb53a62471d63639', '190.216.238.141', 1468265308, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383236353330373b),
('0f4b7fc9fed5d383fd514632a4cd324d880329fe', '190.216.238.141', 1468252028, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235313535333b),
('11de8b562f2b247ed953c150f81e8387168a2629', '190.75.48.228', 1468385990, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383338353938343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('14af08c153aadc2888baf91687be6f1c6c92cf64', '190.216.238.141', 1468252351, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235323037353b),
('15f6908fcadc94c8c55f8cac266803664cf30747', '186.185.73.24', 1468329313, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393331323b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('17a454e3ac99cb6a0c721c872878254b064b820b', '190.216.238.141', 1468250898, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303839383b),
('194d775f5231b39c149cbedf683e36c2be59849f', '190.216.238.141', 1468250397, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303339373b),
('1b33f9870c512505c7eaa26467321338d8260379', '200.62.9.66', 1468251929, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383235313232333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('1b8d138c0ab0eb76220f17905a4485ecc3c2e571', '190.216.238.141', 1468252031, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235323033313b),
('1f46d693da55b2f27dba2b1d2c2f6ba91a4b770d', '190.216.238.141', 1468251516, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303734343b),
('200839215b314478a3ebebcacbbf14619f651dff', '200.74.202.10', 1467925975, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373932353831383b),
('202252d3a20e2b1d0b1cec99e7874c5c9b87c1b8', '201.234.230.210', 1468329727, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393732373b),
('20a3c5f4e8fddd4161638561520d5c25bfeef8f1', '200.62.9.66', 1468270804, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383237303830333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('22fb42fc6f8db98410afe61830996fa6f1536d11', '190.75.48.228', 1468343960, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383334333936303b),
('249171c640f8115fa380675540ec096015f786fc', '190.216.238.141', 1468252031, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235323033303b),
('2590193dd69221bcabbe484c479257afdec031c5', '201.242.211.102', 1468332134, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333323133343b),
('25c5d7e579b91a394805eb5c35ddb5c8d82be562', '190.39.31.135', 1467832813, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373833323738393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b),
('25fd5fe8ac137e9cb211df4dac84b0fbe4c04830', '186.185.73.24', 1468329784, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393636353b),
('270e7dbab4c2cc9739563ae38b1d5afaac20969f', '190.216.238.141', 1468250229, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303232383b),
('28c7793941e4ad22a916a2b347610dcdcd4ede4e', '201.242.211.102', 1468332055, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333323035353b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('2a68fb3ad4920e1f85da5cd4fa7d92bbd0c96477', '186.185.73.24', 1468329880, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393731373b),
('2ad1ab52c74f39ba2eda376064267a6a1d00d7f2', '200.62.9.66', 1468335219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333353231383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('2ae557db34e815237937fcd82a56344017c9d288', '200.62.9.66', 1468270692, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383237303636333b),
('2c9a574cef0a588b3001892be41b271815048ab8', '201.242.211.102', 1468332258, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333323138393b),
('2d90a671ade50f23c89688528e91ae5379949d88', '157.55.39.89', 1468057443, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383035373434333b),
('2ff06dd9456a95cd08729497c444f73aab42f651', '201.242.211.102', 1468332151, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333323134393b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('3262a1b685d822f8a08d956deffe3b05f2327585', '190.216.238.141', 1467318756, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331383734353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('3292fffefb4a49c89f49d1b53c927e275bdb9580', '201.242.211.102', 1467901866, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373930313634373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('338a064b32b5cbf167eec087f78948b2e595786b', '190.36.123.140', 1467313933, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331333635383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('33efffdca84310aec7e2e4d3fc1676efc5ed4962', '201.242.211.102', 1468334651, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333343632343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('35ea60368f3687747f5a0706660e3395055c97fc', '201.234.230.210', 1468329736, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393733363b),
('36d724e14d5a1027c41066a94e8f4ffd4f7d4cfc', '186.185.73.24', 1468329715, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393731353b),
('36f152f9d3e4c01d260e6d61c59273fa145895c4', '190.39.31.135', 1467833817, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373833333831373b),
('37a384c34d19e8f1b45bfbcad57b62ebcb1949f7', '201.242.211.102', 1468328091, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332383038373b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('37db97885a3256931603a75e17179e038da4633e', '201.242.211.102', 1468332249, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333323234393b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('38a6c89b39a8fa5dbbf9a266ca3cd3254188a075', '190.216.238.141', 1468249323, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234363832303b),
('38cbf924c6567a69c68130d66a18804fa8cca397', '200.62.9.66', 1468270664, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383237303636323b),
('399c63dafd803d5e53ea59a5f2466f69ca2d1be5', '157.55.39.89', 1467949081, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373934393038313b),
('3b310dfcbf41a9c52098aaffeeb4302cca2e3f18', '200.62.9.66', 1468247495, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383234363535323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('3b6de6008a664ad184e54e38fb9d128f4f869844', '200.62.9.66', 1468251955, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235313935343b),
('3c910fda5163cb024358b500308daa4f5b273203', '157.55.39.89', 1468136566, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383133363536363b),
('3e866d4fce6f692e1cea1d82f0c7b8fee69a3903', '190.39.31.135', 1467831709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373833313633353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b),
('3f0f74e5c7456fb9f43f7fbd2b0d8cb33b4993b2', '200.62.9.66', 1468249536, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234373339303b),
('3f3b38f1bd6060934ee65fe813fcbecce142aa56', '190.216.238.141', 1468251553, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235313535333b),
('409c173215caf36986e879da3ffc6cec7c10ad24', '190.216.238.141', 1468250398, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303339373b),
('41f140c13fd2d3bb2b3d361b5d1c73451ac5e326', '190.216.238.141', 1467320266, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373332303235313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('4614f45c88556d9dcb22a3c1f092971b165b7b42', '190.75.48.228', 1468299299, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383239393239363b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('4622834c298b06d67e296aa94ca1a3d8ec08d087', '200.62.9.66', 1468250368, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303336373b),
('47cb35517c29bf302eb96820aa0fb7c0d5bf883e', '186.185.73.24', 1468329069, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393036373b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('48be71ac06c2dc1953803cab60e829deb323266b', '201.242.211.102', 1468327244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383332363939333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('4965ee2409916719dff11ceb41d58adf5b74407e', '190.216.238.141', 1468251523, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235313532333b),
('4d8d482a805511cb9f4bfc000ff00e29fb080722', '190.216.238.141', 1467918155, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931383034303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('4f7455d4f8ad2998dd8a3d93089404559f9ef4a7', '200.62.9.66', 1468352037, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383335313731363b),
('4fad3d35cb7d6967a90351ccb529453eec93867e', '200.62.9.66', 1468357192, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383335373138393b),
('4fcb8df6ca2156a257edcc99a1c3774944ff6b60', '200.93.116.46', 1467876199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373837353938333b),
('51f64165b9679d49c3ee53e437bd33681ae3a400', '200.62.9.66', 1468270216, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383236393039393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('5271a2cea916379591dbbf8f99021c95c0778e02', '190.216.238.141', 1468250223, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234363334303b),
('5459d838165f9dc9305634669c7bcf65cd4f4d0c', '190.39.31.135', 1467832923, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373833323932333b),
('554497b96cacec4b0a327009146aff0a9eccc9b3', '200.62.9.66', 1468272162, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383237313833383b),
('56de2eb1e2140260811291310e2048a0f7fb28bf', '201.242.211.102', 1468329466, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393239353b),
('5711c3687b4c1c49eaadd05375e0aa59f9fd9cdf', '190.216.238.141', 1468250892, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303232393b),
('581aa75febd75bd0836cde062bb46daf499c0d7a', '200.62.9.66', 1468251932, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383235313933323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('5a62774583b95ad7accca9d78c73a79e323cee63', '201.242.211.102', 1468336092, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333363038323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('5ec69d2a75c291a2743efe54062b3b0faa2aed3d', '201.242.211.102', 1468330147, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333303134363b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('5ed1c2d243f69340eda5ecb50a699f7f90417377', '190.75.48.228', 1468298908, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383239383735333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('61175f07913b3203743c7d0e901c8edc8df9fe1e', '190.75.48.228', 1468341759, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383334313733353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('622c2e9bd994f0b64d2c571983e516de7895d7ea', '200.62.9.66', 1468270862, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383237303836323b),
('64987b51ea8b705f1e3ef0bf12896bc83986598d', '190.216.238.141', 1467318645, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331383432343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('64dc8c52cd8be25c3ec69279f9c49a1e83516f24', '200.62.9.66', 1468272526, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383237323532363b),
('654a8fbe285cd84f9db6ccb3a423d00b098a1405', '200.62.9.66', 1468269099, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383236393039383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('6560335047aba94516b4300c7c219a43aad95e56', '201.242.211.102', 1468330163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333303136323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('6a0cf498f8dab6113635a7ac2c32e6cd2a1de3d2', '201.242.211.102', 1468332221, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333323232303b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('6a4cf27d263c2d43aac9585d472789d54120b743', '190.216.238.141', 1468262202, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383236323139303b),
('6be68cbfa16931d3a2d7504c84043f5165cff7cc', '190.216.238.141', 1467995632, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373939353631373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('6c92a97bfd18427b48c40c72ec9492ea31b18893', '200.93.116.46', 1467874855, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a303b5f5f63695f6c6173745f726567656e65726174657c693a313436373837343830353b),
('72358c7b1625f965fd5c352a0b97948d995c8f0e', '200.62.9.66', 1468250338, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234393931373b),
('75027d56ead44a30ffb765ff9d146a887b9fda59', '200.62.9.66', 1468254301, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235343330303b),
('75189fb9dfbbd1cdc9dc3a999d1540c97f25318c', '190.216.238.141', 1468265308, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383236353330383b),
('7639a31f34cbb5c70edceca820c2aba88abc8611', '200.93.116.46', 1467874391, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a303b5f5f63695f6c6173745f726567656e65726174657c693a313436373837343132303b),
('784f0dcc4709a8474e2dec4ca27a0b278e8a8ddd', '190.216.238.141', 1467927486, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373932373335353b),
('798021c366660e635a5e4aec93cbfac81ce4c135', '190.36.123.140', 1467312254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331313935383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('79f4862ba6eeb6645a1703083cb34416c3cba93c', '190.216.238.141', 1468261823, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383236313732323b),
('7a36ff386aca7c8a275c0befcc7918a92840865b', '200.62.9.66', 1468270219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383237303231393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('7a6b94c1e39871c49742c89efa19b14999242e72', '200.62.9.66', 1468261514, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383236313436303b),
('7c5d8936caa7fcf33c01891c099dd49ede134799', '201.242.211.102', 1468330160, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383332393132373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b),
('7e208935652a6433a89892235029d7dce95a2692', '200.62.9.66', 1468251995, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383235313933323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('7ea35603e2f4d124c6f471a6ee596f24330e3d2a', '200.62.9.66', 1468250340, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303334303b),
('81ffdcb09da7cabcc2a83da4f0425c35317d67da', '190.216.238.141', 1467929643, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373932393631333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('8455800965992fb7a7e0867d6987ff344e49ba06', '201.242.211.102', 1468332264, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333323236303b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('867191edf1521202952bf6f646586d1fb192d507', '200.62.9.66', 1468249544, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234393534343b),
('8a8d045b28f7c142c742a52638ceeb7a43c65d24', '200.93.116.46', 1467873519, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a303b5f5f63695f6c6173745f726567656e65726174657c693a313436373837333237313b),
('8b56e4444ae31810791e56a822d076773f3e1c11', '190.216.238.141', 1468250389, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234393731383b),
('8bbd590eec6a0031edea405bf25a8ba1dd985f95', '200.62.9.66', 1468357185, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383335323033393b),
('9242d96a5107e4cfd95227ac9c9262547a63f001', '200.62.9.66', 1468246124, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383234363037333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('967941de3fe1306e600409d3f2b843fa5c732e76', '190.216.238.141', 1468249530, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234393333303b),
('9c86dc29d76f222467e1ca5d4b7d2895b40a6df0', '190.216.238.141', 1467316135, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331353936353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b);
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('9d0f496cd63f6029f480228283192e8ccaafd0aa', '201.242.211.102', 1468330157, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333303135363b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('9db73297fbc54f1b2ff91f63d5f1d6cf3f8ebe44', '200.62.9.66', 1468271282, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383237313030393b),
('9e0025d908eb718e879463fe26d8a35568510745', '201.242.211.102', 1468330147, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333303134373b),
('9ed0209aeb1aa2dc08f1c73f8851df8c1d12006f', '190.216.238.141', 1467318276, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331363936363b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('a0f6f3af850bae5624b8bf9c6f1e79e4e513ee69', '201.242.211.102', 1468330145, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333303134353b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('a2b98f05f2851a61e87ffbbe7ad1d6af02c45f67', '200.62.9.66', 1468357582, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383335373538323b),
('a50ef837a5d50b496a4d052ae3f337a8114fafe8', '190.36.123.140', 1468336128, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333363132373b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('a712ff45161a288ae35ed612d69551f109214753', '190.39.31.135', 1467833321, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373833333330343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b),
('ab7e888016cdcc10275f3018d8df9b039bbed916', '200.74.202.10', 1468277871, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383237373733303b),
('abe522211ec030a7262704d7d81864ed778ea1fe', '200.74.202.10', 1467926505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373932363530353b),
('ac34ce7734dd23e1b69094cce05e72d93556b2f2', '200.62.9.66', 1468248334, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234383333323b),
('ad845323f52a39e6aaefb98f6661f718e7a7b170', '200.62.9.66', 1468248934, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383234373530323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('af475a40eb5ec45fcae691194ecd68a56158a7fa', '190.36.123.140', 1468334864, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333343830343b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('afe69266dd37f66bd589d166fbf16c7a62e58810', '200.62.9.66', 1468335214, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333313532323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('b0e16da83623028803811d702e753c56b406bc8d', '190.75.48.228', 1468385982, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383338353935393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('b10b8123681428bc459a63af1507209c88a237b2', '200.62.9.66', 1468269681, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383236383339303b),
('b2b4275b2e4d96f91e8b8113cb18d56988fdcc05', '190.75.48.228', 1468342741, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383334323734313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b),
('b3210b8a09ddd10e116d989cd38a96a47d74b0ff', '201.242.211.102', 1468328525, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383332383532353b),
('b38d32a147e9a9dd973986e765fa9e45bd5ac2e0', '200.62.9.66', 1468335218, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333353231383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('b38ef68a6d51b624f55f6a9cd6222a943b202ee4', '190.75.48.228', 1468339613, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333393631333b),
('b49d9245cc5642641c41f40c563dd4b5e94ec785', '190.216.238.141', 1467916664, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931363633333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('b775cb938ead8b2a81946575544473aca5604d6d', '186.185.73.24', 1468329497, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393331363b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('b83a15eeb4d08af92ce4627f1fbbfaff3eaa0af3', '190.36.123.140', 1467313209, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331323938363b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('bad081c8436e05f083750b1887ac7ae3cfaf8274', '190.216.238.141', 1467915240, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931353132393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('bb1d6698c92ab274adfce3268f366b2712d63734', '200.62.9.66', 1468272523, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383237323136363b),
('bd478800705667b26b7772b0e11c410bc3b75ad1', '200.62.9.66', 1468254504, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235343238373b),
('bd905bcce134129d51a4f022ad4c3423c733c542', '190.216.238.141', 1467921995, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373932313939353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('bdebe27376423b11f501c957f14b6b641c4b55ab', '200.93.116.46', 1467874519, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a303b5f5f63695f6c6173745f726567656e65726174657c693a313436373837343436383b),
('be4a3d970fda4bca003397e5511d29bd5b1c4792', '201.242.211.102', 1467901287, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373930313036353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('bfac664fdaf9d2ffcda4df201b42ea7d1ae06f8a', '200.62.9.66', 1468256553, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235363535323b),
('bfc5cdf5567550c510102c7a416001f08bec84f8', '201.242.211.102', 1468330128, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333303131313b),
('c15eab85fd01a0d35ef2e3b4890cda7dacb187ea', '200.93.116.46', 1467875724, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373837353536343b),
('c1c9fc2e1cc6c6be743dfcb0679abcafde1cae05', '200.62.9.66', 1468254280, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235323331313b),
('c28d5e699a793c51582090df35fcbda70cbb77e3', '190.216.238.141', 1467916842, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931363639333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('c316d561924034efe474798b567cdc151ec28c4d', '201.234.230.210', 1468329310, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393330393b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('c3c61e130588c431942ed8e7110043ab42d939c6', '200.62.9.66', 1468335220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333353232303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('c5cefb9eb067c5d9776155efc18c26dfc0317135', '200.93.116.46', 1467871689, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373837313638393b),
('c9638d606b248230e4ee6c34c37c570f91e62fa5', '201.242.211.102', 1467916825, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931363730313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('c99d180e1e8f10497b17d0e627644c2f482e6c75', '190.216.238.141', 1468263667, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383236333536363b),
('ca70efaf0c0d36a609dfa983f4c0cba7992d56b3', '200.62.9.66', 1468335219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333353231393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('cdd8cfab7a5c481437826074c0575fac6556b759', '200.62.9.66', 1468247502, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383234373530313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('cdfdbda9fb20ebcaabbe4b94204715b4a30ce5ee', '201.242.211.102', 1468330161, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333303037363b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b),
('cf2ae3d307eb148026d2b85fe7efa23218d456b2', '200.93.116.46', 1467873972, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a303b5f5f63695f6c6173745f726567656e65726174657c693a313436373837333639393b),
('d0243e3f8885221f7d5194dc617a9eaa54a2eb88', '190.216.238.141', 1468251523, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235313532323b),
('d087fef14ac3f0faf08b4db0e9b588e2495b402d', '200.62.9.66', 1468351186, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383335313138353b),
('d0a7c980718d48bd1c8ff465735b19a179c062ec', '190.75.48.228', 1468341590, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383334303739363b),
('d359958b13123096decbd347894b521a9ee40264', '200.62.9.66', 1468250364, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234383333333b),
('d481f2d74af36c93452fa888d244f4e05250807a', '201.242.211.102', 1468328622, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332383632313b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('d6bd949b6480576ef6f86256861c37050d084fb3', '201.242.211.102', 1467901008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373930303731333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('d7090c698929c2cf508892e49afb5894e3a10af0', '201.242.211.102', 1468336297, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333363239373b),
('d77b034becc547a6dadfb849aae8b0e7ca31295f', '190.75.48.228', 1468384737, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383338343530333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('d7d805168bfe515f9e09e8cb06b86cd5e254a746', '190.216.238.141', 1468265304, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383236303338383b),
('d7f2b37394e09cbb4672e74d5479c803e9b98c75', '190.216.238.141', 1467916693, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931363639333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('da7e4b0aa3e469c7e563a0a4a6bfe6da5232dd83', '200.62.9.66', 1468251852, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303336373b),
('dbbea1fe293035503bb9970c369d237dd52e5e3a', '200.62.9.66', 1468248321, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383234363130393b),
('dc05ca2d7b3132c169583a84cba48ef7b48846de', '201.242.211.102', 1468330153, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333303132383b),
('dc185e4400113bacbecf4a11212a8d586b24f87c', '190.216.238.141', 1467916686, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931353934323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('dc3beb517003fee652a70ce41c8af294bd4c2aa7', '190.216.238.141', 1467918447, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931383338333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('dc97e9aeaaab3e51bbbbbff46468b07e351b5314', '190.36.123.140', 1467312330, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331323236333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('dd9ed63327a143fdb00cdd2519da53e39a5860de', '201.242.211.102', 1468336540, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333363533393b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('dda424f4b00df8158c3c440ecddb37a15220f384', '200.62.9.66', 1468335319, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333353232323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('de7452c9ce6493cc45b8bd09b85af02705f7a39f', '201.242.211.102', 1468327360, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383332373334353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('df1b34030e7af9602705569f333b6253c0cffc59', '200.74.202.10', 1467926555, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373932363535353b),
('e506e49cda87a212265a74b9f9cbaa865a58d314', '200.62.9.66', 1468270801, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383237303231393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('e53dfb8c8c0c06f3b7129665bf416533877aac77', '190.216.238.141', 1468252377, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235323337373b),
('e6ce7d7238d64ec2a5eb621c9de15d8c0f2cfbc9', '190.216.238.141', 1468000871, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383030303837313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('ea4ca3a4c79f45923f36003855962bbd0c9b8523', '190.216.238.141', 1467917142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373931363936313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('ea93bb8de59168f0ed9dfb071e32aae674768376', '201.242.211.102', 1467902261, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373930323234303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('ec2052cdf58ee56cb298e53636588f5c80893003', '190.216.238.141', 1468264373, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383236343336373b),
('ed24a1ecf216f03303c0425714bce4780e257e10', '200.93.116.46', 1467876972, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373837363837363b),
('ed88df2fcc0ae044dea074626d4624e12544295a', '190.216.238.141', 1467320779, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373332303737393b),
('edbe012e5587a03d10e4619ecfa2ad0c57ea30cf', '201.242.211.102', 1468332194, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333323134343b),
('edd6b39ee2b1ffb2a1f33e6b02e7485cd74b1121', '190.36.123.140', 1467313638, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331333335343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('ee5a1734c22f3feb3463eb36c97ab8ef01e82e38', '200.62.9.66', 1468250340, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303334303b),
('f1737711ff9da7849ff6e31e6dc54c45f7502350', '200.62.9.66', 1468270660, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383236393638353b),
('f3720cfef3253a35da20b5c4ea99fdabaae747dc', '200.62.9.66', 1468269095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383236353935343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('f4af189eb6646290d2b5f08d22d9e77b237467f2', '147.75.208.233', 1468332117, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333323131373b),
('f6271db0a21cd635eef8a97db0b5b99118b5f66d', '201.234.230.210', 1468329716, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383332393731363b),
('f6a7147cd22c9d76bb616468857623abcaed8d1d', '200.74.202.10', 1467928529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373932383532393b),
('f6c6862e5aacc4b822dba369c0112eb66bb78785', '190.216.238.141', 1468251551, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235303839383b),
('fa2f5cb7a30dba18ed813eb2a43e615001489b90', '200.62.9.66', 1468256571, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235363533343b),
('fae79f95cbf8703e551b9ff33a1ad96f413546f6', '190.75.48.228', 1468385984, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383338353938323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a31313a2261646d696e2d62656c6c6f223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b),
('fc01ce97fd861646a0db16652b29175fed3b477e', '200.93.116.46', 1467870308, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373837303330383b),
('fc1372f23a673ea9c5681be65a961e5137af4dfd', '201.242.211.102', 1468332152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436383333323135323b),
('fc2ae34940e552b19f0f02512d7435a6ea69386e', '190.36.123.140', 1468335084, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383333343931343b),
('fd554e74a8274108bb751dee91726f8a125818a8', '190.216.238.141', 1467315747, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373331353733383b),
('fe697ea886a6a92a2dfb166b23c114b6d5d7b78a', '200.93.116.46', 1467872386, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373837323337333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2232223b6c6f67696e5f757365725f69647c733a313a2232223b6e616d657c733a353a2261646d696e223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2231223b6368616e67655f70617373776f72647c693a313b666c6173685f6d6573736167657c733a32373a22446562652063616d6269617220737520636f6e7472617365c3b161223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226e6577223b7d),
('fecba20b4c9f44dfd3cdd94017691495c4c3cd68', '200.62.9.66', 1468251197, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223435223b6c6f67696e5f757365725f69647c733a323a223435223b6e616d657c733a31353a2261646d696e2d736f75626c65747465223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2233223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383235313138363b),
('feec27055a428749ef4799840a70691045f08cd6', '200.62.9.66', 1468357204, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383335373139313b),
('ffc95ea1c3e17f2f8015ff7a5026f2599928419a', '200.62.9.66', 1468269686, 0x61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a323a223434223b6c6f67696e5f757365725f69647c733a323a223434223b6e616d657c733a31333a2261646d696e2d6775616e636865223b6c6f67696e5f747970657c733a353a2261646d696e223b657370656369616c6973747c733a373a225553554152494f223b69645f7363686f6f6c7c733a313a2232223b6368616e67655f70617373776f72647c693a313b5f5f63695f6c6173745f726567656e65726174657c693a313436383236393638363b);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `name_numeric` longtext COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `name`, `name_numeric`, `teacher_id`) VALUES
(1, 'Cuarto Grupo', '4to gpo', 1),
(2, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

DROP TABLE IF EXISTS `class_routine`;
CREATE TABLE IF NOT EXISTS `class_routine` (
  `class_routine_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `day` longtext COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL,
  `hour_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`class_routine_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `class_routine`
--

INSERT INTO `class_routine` (`class_routine_id`, `class_id`, `subject_id`, `day`, `section_id`, `hour_id`) VALUES
(1, 10, 1, 'Lunes', 10, 1),
(2, 10, 1, 'Martes', 22, 1),
(3, 10, 1, 'Miercoles', 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `condicion_vivienda`
--

DROP TABLE IF EXISTS `condicion_vivienda`;
CREATE TABLE IF NOT EXISTS `condicion_vivienda` (
  `id_condicion_vivienda` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_condicion_vivienda`),
  UNIQUE KEY `id_vive_con_UNIQUE` (`id_condicion_vivienda`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las condiciones de vivienda' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `condicion_vivienda`
--

INSERT INTO `condicion_vivienda` (`id_condicion_vivienda`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'PROPIA', '2015-10-20 20:12:39', NULL, 1),
(2, 'ALQUILADA', '2015-10-20 20:12:39', NULL, 1),
(3, 'FAMILIAR', '2015-10-20 20:12:39', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `configuraciones`
--

DROP TABLE IF EXISTS `configuraciones`;
CREATE TABLE IF NOT EXISTS `configuraciones` (
  `id_configuracion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_configuracion`),
  UNIQUE KEY `id_configuracion_UNIQUE` (`id_configuracion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las configuraciones del sistema' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `configuraciones`
--

INSERT INTO `configuraciones` (`id_configuracion`, `nombre`, `valor`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'nombre_sistema', 'Sistema Chacao Educativo', '2015-10-30 00:36:01', NULL, 1),
(2, 'titulo_sistema', 'Educación Chacao', '2015-10-30 00:35:55', NULL, 1),
(3, 'direccion', 'Chacao, Distrito Capital', '2015-10-27 22:39:44', NULL, 1),
(4, 'telefono', '+58212', '2015-10-27 22:39:44', NULL, 1),
(5, 'skin_colour', 'blue', '2015-10-27 23:05:02', NULL, 1),
(6, 'correo_sistema', 'educacion@chacao.gob.ve', '2015-10-29 19:05:59', NULL, 1),
(7, 'lenguaje', 'spanish', '2015-10-29 19:09:08', NULL, 1),
(8, 'running_year', '2016-2017', '2016-06-13 01:50:20', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cupos`
--

DROP TABLE IF EXISTS `cupos`;
CREATE TABLE IF NOT EXISTS `cupos` (
  `id_cupo` int(11) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL,
  `cupos` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_cupo`),
  KEY `escuelafk_idx` (`id_escuela`),
  KEY `seccionfk_idx` (`id_seccion`),
  KEY `gradosfk_idx` (`id_grado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

DROP TABLE IF EXISTS `direcciones`;
CREATE TABLE IF NOT EXISTS `direcciones` (
  `id_direccion` int(11) NOT NULL AUTO_INCREMENT,
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
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_direccion`),
  UNIQUE KEY `id_direccion_UNIQUE` (`id_direccion`),
  KEY `fk_direcciones_tipo_direcciones1_idx` (`id_tipo_direccion`),
  KEY `fk_direcciones_paises1_idx` (`id_pais`),
  KEY `fk_direcciones_estados1_idx` (`id_estado`),
  KEY `fk_direcciones_municipios1_idx` (`id_municipio`),
  KEY `fk_direcciones_parroquias1_idx` (`id_parroquia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las direcciones por persona.' AUTO_INCREMENT=41 ;

--
-- Dumping data for table `direcciones`
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
-- Table structure for table `empleos`
--

DROP TABLE IF EXISTS `empleos`;
CREATE TABLE IF NOT EXISTS `empleos` (
  `id_empleo` int(11) NOT NULL AUTO_INCREMENT,
  `id_jornada_laboral` int(11) NOT NULL,
  `nombre_empresa` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `antiguedad` varchar(45) NOT NULL,
  `persona_contacto` varchar(45) DEFAULT NULL,
  `telefono_persona_contacto` varchar(45) DEFAULT NULL,
  `id_direccion_empresa` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_empleo`),
  UNIQUE KEY `id_empleo_UNIQUE` (`id_empleo`),
  KEY `fk_empleos_jornadas1_idx` (`id_jornada_laboral`),
  KEY `fk_empleos_direcciones1_idx` (`id_direccion_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene el listado de empleos por representante' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `entrevista_censo`
--

DROP TABLE IF EXISTS `entrevista_censo`;
CREATE TABLE IF NOT EXISTS `entrevista_censo` (
  `id_entrevista` int(11) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `id_censo_asignado` int(11) DEFAULT NULL,
  `fecha_asistencia` date NOT NULL,
  `hora_asistencia` time NOT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `escala_ingresos`
--

DROP TABLE IF EXISTS `escala_ingresos`;
CREATE TABLE IF NOT EXISTS `escala_ingresos` (
  `id_escala_ingreso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_escala_ingreso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que indica la escala de ingresos de un empleado' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `escala_ingresos`
--

INSERT INTO `escala_ingresos` (`id_escala_ingreso`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, '0 - 15000', '2015-10-29 19:22:56', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `escuelas`
--

DROP TABLE IF EXISTS `escuelas`;
CREATE TABLE IF NOT EXISTS `escuelas` (
  `id_escuela` int(11) NOT NULL AUTO_INCREMENT,
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
  `periodo_escolar_actual` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_escuela`),
  UNIQUE KEY `idescuela_UNIQUE` (`id_escuela`),
  KEY `fk_escuelas_telefonos1_idx` (`id_telefono_escuela`),
  KEY `fk_escuelas_direcciones1_idx` (`id_direccion_escuela`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de las escuelas' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `escuelas`
--

INSERT INTO `escuelas` (`id_escuela`, `nombre_escuela`, `logo_escuela`, `id_direccion_escuela`, `id_telefono_escuela`, `fecha_creacion`, `fecha_actualizacion`, `id_persona_director`, `registro_activo`, `cupos`, `director_encargado`, `periodo_escolar_actual`) VALUES
(1, 'UEM ANDRES BELLO', NULL, 1, 1, '2016-02-16 22:39:12', NULL, 15, 1, 0, 1, '2015 - 2016'),
(2, 'UEM JUAN DE DIOS GUANCHE', NULL, 1, 1, '2016-02-16 22:39:12', NULL, 17, 1, 0, 1, '2015 - 2016'),
(3, 'UEMI CARLOS SOUBLETTE', NULL, 1, 1, '2016-02-16 22:39:12', NULL, 16, 1, 0, 1, '2015 - 2016');

-- --------------------------------------------------------

--
-- Table structure for table `escuela_nivel_educativo`
--

DROP TABLE IF EXISTS `escuela_nivel_educativo`;
CREATE TABLE IF NOT EXISTS `escuela_nivel_educativo` (
  `id_escuela_nivel_educativo` int(11) NOT NULL AUTO_INCREMENT,
  `id_escuela` int(11) NOT NULL,
  `id_nivel_educativo` int(11) NOT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_escuela_nivel_educativo`),
  KEY `fk_escuela_idx` (`id_escuela`),
  KEY `fk_nivel_educativo_idx` (`id_nivel_educativo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `escuela_nivel_educativo`
--

INSERT INTO `escuela_nivel_educativo` (`id_escuela_nivel_educativo`, `id_escuela`, `id_nivel_educativo`, `registro_activo`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `escuela_nivel_educativo_grado`
--

DROP TABLE IF EXISTS `escuela_nivel_educativo_grado`;
CREATE TABLE IF NOT EXISTS `escuela_nivel_educativo_grado` (
  `id_escuela_nivel_educativo_grado` int(11) NOT NULL AUTO_INCREMENT,
  `id_escuela_nivel_educativo` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  PRIMARY KEY (`id_escuela_nivel_educativo_grado`),
  KEY `fk_grado_idx` (`id_grado`),
  KEY `fk_escuela_nivel_educativo_idx` (`id_escuela_nivel_educativo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `escuela_nivel_educativo_grado`
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
(12, 3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `escuela_seccion`
--

DROP TABLE IF EXISTS `escuela_seccion`;
CREATE TABLE IF NOT EXISTS `escuela_seccion` (
  `idescuela_seccion` int(11) NOT NULL AUTO_INCREMENT,
  `id_escuela` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL,
  PRIMARY KEY (`idescuela_seccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `escuela_seccion`
--

INSERT INTO `escuela_seccion` (`idescuela_seccion`, `id_escuela`, `id_seccion`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(5, 1, 6),
(6, 1, 7),
(7, 1, 8),
(8, 1, 9),
(9, 1, 10),
(10, 1, 11),
(11, 1, 12),
(12, 1, 14),
(13, 1, 15),
(14, 1, 16),
(15, 1, 17),
(16, 1, 18),
(17, 1, 19),
(18, 1, 20),
(19, 1, 21),
(20, 1, 22),
(21, 1, 23),
(22, 1, 24),
(23, 1, 25),
(24, 1, 26),
(25, 1, 27),
(26, 2, 28),
(27, 2, 29),
(28, 2, 3),
(29, 2, 4),
(30, 2, 5),
(31, 2, 6),
(32, 2, 7),
(33, 2, 8),
(34, 2, 9),
(35, 2, 10),
(36, 2, 11),
(37, 2, 12),
(38, 2, 15),
(39, 2, 16),
(40, 2, 17),
(41, 2, 18),
(42, 2, 19),
(43, 2, 20),
(44, 2, 21),
(45, 2, 22),
(46, 2, 23),
(47, 2, 24),
(48, 3, 28),
(49, 3, 29),
(50, 3, 30),
(51, 3, 31),
(52, 3, 32),
(53, 3, 33),
(54, 3, 34),
(55, 3, 35),
(56, 3, 36);

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `id_pais` int(11) NOT NULL DEFAULT '1',
  `nombre` varchar(150) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_estado`),
  UNIQUE KEY `id_pais_UNIQUE` (`id_estado`),
  KEY `fk_estados_paises1_idx` (`id_pais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los estados' AUTO_INCREMENT=25 ;

--
-- Dumping data for table `estados`
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
-- Table structure for table `estaturas`
--

DROP TABLE IF EXISTS `estaturas`;
CREATE TABLE IF NOT EXISTS `estaturas` (
  `id_estatura` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(15) NOT NULL,
  PRIMARY KEY (`id_estatura`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `estaturas`
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
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_inscripcion` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `id_estudiante_UNIQUE` (`id_estudiante`),
  KEY `fk_estudiantes_condicion_vivienda1_idx` (`id_condicion_vivienda`),
  KEY `fk_estudiantes_medio_transporte1_idx` (`id_medio_transporte`),
  KEY `fk_estudiantes_escuelas1_idx` (`id_escuela`),
  KEY `fk_estudiantes_tipo_parto1_idx` (`id_tipo_parto`),
  KEY `fk_estudiantes_personas1_idx` (`id_persona`),
  KEY `fk_estudiantes_grados1_idx` (`id_grado`),
  KEY `fk_estudiantes_secciones1_idx` (`id_seccion`),
  KEY `fk_estudiantes_vive_con1_idx` (`id_vive_con`),
  KEY `fk_estudiantes_telefonos1_idx` (`id_telefono`),
  KEY `fk_estudiantes_direcciones1_idx` (`id_direccion_nacimiento`),
  KEY `fk_estudiantes_direcciones2_idx` (`id_direccion_residencia`),
  KEY `fk_estudiantes_escala_ingresos1_idx` (`id_escala_ingreso_familia`),
  KEY `fk_estudiantes_personas2_idx` (`id_persona_emergencia_uno`),
  KEY `fk_estudiantes_personas3_idx` (`id_persona_emergencia_dos`),
  KEY `fk_estudiantes_representantes1_idx` (`id_representante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los estudiantes' AUTO_INCREMENT=26 ;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `id_persona`, `id_grado`, `id_seccion`, `id_telefono`, `id_direccion_nacimiento`, `id_direccion_residencia`, `id_escala_ingreso_familia`, `id_vive_con`, `id_medio_transporte`, `id_condicion_vivienda`, `id_tipo_parto`, `id_persona_emergencia_uno`, `id_persona_emergencia_dos`, `id_escuela`, `id_representante`, `cedula_escolar`, `cedula_identidad`, `repite_grado`, `unidad_educativa_procedencia`, `otros_ingresios_familia`, `becado`, `descripcion_beca`, `se_retira_solo`, `numero_hermanos`, `hermanos_estudian_unidades_educativas_municipales`, `grupo_sanguineo`, `factor_rh`, `talla`, `peso`, `padece_enfermedad`, `nombre_enfermedad`, `diversidad_funcional`, `operado`, `alergico`, `alergias`, `regimen_alimenticio`, `vacunas`, `enfermedades_padecidas`, `otras_enfermedades`, `catolico`, `actividad_especial`, `actividades_especiales`, `observaciones`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`, `lugar_entre_hermanos`, `status_inscripcion`) VALUES
(20, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 22, '1234567', '1234567', 0, NULL, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '2016-04-14 04:32:14', NULL, 0, 0, 1),
(21, 43, 1, 2, NULL, 40, 40, NULL, NULL, 1, 1, 1, NULL, NULL, 1, 24, '11315544359', '0', 0, 'NULL', NULL, 0, NULL, 0, 0, NULL, 'A', '+', 5, 5, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, '', '2016-02-29 01:50:06', NULL, 0, 0, 1),
(23, 44, 10, 10, NULL, 1, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 1, 25, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '2016-02-29 03:53:13', NULL, 1, 0, 1),
(24, 47, 10, 10, NULL, 1, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 1, 26, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '2016-02-29 03:54:12', NULL, 1, 0, 1),
(25, 49, 10, 10, NULL, 1, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 1, 27, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, '2016-02-29 03:54:35', NULL, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `est_eva_inst`
--

DROP TABLE IF EXISTS `est_eva_inst`;
CREATE TABLE IF NOT EXISTS `est_eva_inst` (
  `est_eva_inst_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_eva_inst_nomb` varchar(100) NOT NULL,
  `est_eva_inst_des` varchar(200) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `est_eva_inst_activo` bit(1) NOT NULL,
  PRIMARY KEY (`est_eva_inst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `est_eva_inst`
--

INSERT INTO `est_eva_inst` (`est_eva_inst_id`, `est_eva_inst_nomb`, `est_eva_inst_des`, `id_grado`, `est_eva_inst_activo`) VALUES
(1, 'prueba', '', 5, b'1'),
(2, 'dos', '', 5, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `est_eva_tecnicas`
--

DROP TABLE IF EXISTS `est_eva_tecnicas`;
CREATE TABLE IF NOT EXISTS `est_eva_tecnicas` (
  `est_eva_tecnica_id` int(11) NOT NULL,
  `est_eva_tecnica_nomb` varchar(100) DEFAULT NULL,
  `est_eva_tecnica_desc` varchar(500) DEFAULT NULL,
  `id_grado` int(11) DEFAULT NULL,
  `est_eva_tecnica_activo` bit(1) DEFAULT NULL,
  PRIMARY KEY (`est_eva_tecnica_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `est_eva_tecnicas`
--

INSERT INTO `est_eva_tecnicas` (`est_eva_tecnica_id`, `est_eva_tecnica_nomb`, `est_eva_tecnica_desc`, `id_grado`, `est_eva_tecnica_activo`) VALUES
(1, 'MAPAS DE CONCEPTO', NULL, 4, b'1'),
(2, 'MAPA MENTAL', NULL, 4, b'1'),
(3, 'PRODUCCIONES ORALES', NULL, 4, b'1'),
(4, 'PRODUCCIONES ESCRITAS', NULL, 4, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `evaluacion_planificacion_media`
--

DROP TABLE IF EXISTS `evaluacion_planificacion_media`;
CREATE TABLE IF NOT EXISTS `evaluacion_planificacion_media` (
  `evaluacion_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`evaluacion_planificacion_media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `evaluacion_planificacion_media`
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
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_seccion` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `objetivo`, `contenido`, `id_tecnica`, `id_actividad`, `id_recurso`, `id_evaluacion`, `id_instrumento`, `valor_ponderacion`, `fecha_examen`, `id_grado`, `id_seccion`) VALUES
(1, 'Examen Uno', 'Como hacer un examen', 1, 4, 9, 4, 3, 3, '03/18/2016', 10, 10),
(2, 'Examen Dos', 'Palmeros de chacao', 1, 3, 8, 2, 5, 3, '02/26/2016', 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `grade_point` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mark_from` int(11) NOT NULL,
  `mark_upto` int(11) NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grados`
--

DROP TABLE IF EXISTS `grados`;
CREATE TABLE IF NOT EXISTS `grados` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grado` varchar(45) DEFAULT NULL,
  `descripcion` varchar(15) DEFAULT NULL,
  `abreviacion_grado` varchar(5) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `teacher_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id_grado`),
  UNIQUE KEY `id_grado_UNIQUE` (`id_grado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los grados' AUTO_INCREMENT=13 ;

--
-- Dumping data for table `grados`
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
(12, 'Tercer Año', 'Año', '3er', '2016-04-01 18:24:11', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `grado_escuela`
--

DROP TABLE IF EXISTS `grado_escuela`;
CREATE TABLE IF NOT EXISTS `grado_escuela` (
  `id_grado_escuela` int(11) NOT NULL AUTO_INCREMENT,
  `id_grado` int(11) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL,
  PRIMARY KEY (`id_grado_escuela`),
  KEY `fk_grado_escuela_grados1_idx` (`id_grado`),
  KEY `fk_grado_escuela_escuelas1_idx` (`id_escuela`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los grados asociados a cada escuela' AUTO_INCREMENT=67 ;

--
-- Dumping data for table `grado_escuela`
--

INSERT INTO `grado_escuela` (`id_grado_escuela`, `id_grado`, `id_escuela`, `id_seccion`) VALUES
(1, 2, 1, 2),
(2, 3, 1, 3),
(3, 3, 1, 3),
(4, 4, 1, 4),
(5, 5, 1, 5),
(6, 6, 1, 6),
(7, 7, 1, 7),
(8, 8, 1, 8),
(9, 9, 1, 9),
(10, 10, 1, 10),
(11, 11, 1, 11),
(12, 12, 1, 12),
(13, 2, 1, 14),
(14, 3, 1, 15),
(15, 4, 1, 16),
(16, 5, 1, 17),
(17, 6, 1, 18),
(18, 7, 1, 19),
(19, 8, 1, 20),
(20, 9, 1, 21),
(21, 10, 1, 22),
(22, 11, 1, 23),
(23, 12, 1, 24),
(24, 10, 1, 25),
(25, 11, 1, 26),
(26, 12, 1, 27),
(27, 1, 2, 28),
(28, 2, 2, 29),
(29, 3, 2, 3),
(30, 4, 2, 4),
(31, 5, 2, 5),
(32, 6, 2, 6),
(33, 7, 2, 7),
(34, 8, 2, 8),
(35, 9, 2, 9),
(36, 10, 2, 10),
(37, 11, 2, 11),
(38, 12, 2, 12),
(39, 3, 2, 15),
(40, 4, 2, 16),
(41, 5, 2, 17),
(42, 6, 2, 18),
(43, 7, 2, 19),
(44, 8, 2, 20),
(45, 9, 2, 21),
(46, 10, 2, 22),
(47, 11, 2, 23),
(48, 12, 2, 24),
(58, 1, 3, 28),
(59, 2, 3, 29),
(60, 3, 3, 30),
(61, 4, 3, 31),
(62, 5, 3, 32),
(63, 6, 3, 33),
(64, 7, 3, 34),
(65, 8, 3, 35),
(66, 9, 3, 36);

-- --------------------------------------------------------

--
-- Table structure for table `inscripcion`
--

DROP TABLE IF EXISTS `inscripcion`;
CREATE TABLE IF NOT EXISTS `inscripcion` (
  `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `Residente` tinyint(1) DEFAULT '0',
  `GradoACursar` int(11) DEFAULT NULL,
  `GradoActual` int(11) DEFAULT NULL,
  `SeccionACursar` int(11) DEFAULT NULL,
  `TurnoACursar` int(11) DEFAULT NULL,
  `DocenteAsignado` int(11) DEFAULT NULL,
  `ElAlumnoEstudiaActualmente` tinyint(1) DEFAULT '0',
  `ElAlumnoCursoElAnterior` tinyint(1) DEFAULT '0',
  `ElAlumnoRepiteGrado` tinyint(1) DEFAULT NULL,
  `GradoRepetido` varchar(150) DEFAULT NULL,
  `UnidadEducativaDeProcedencia` varchar(250) DEFAULT NULL,
  `NombreDeLaInstitucion` varchar(250) DEFAULT NULL,
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
  `PrimerNombreDelAlumno` varchar(150) DEFAULT NULL,
  `SegundoNombreDelAlumno` varchar(150) DEFAULT NULL,
  `PrimerApellidoDelAlumno` varchar(150) DEFAULT NULL,
  `SegundoApellidoDelAlumno` varchar(150) DEFAULT NULL,
  `CedulaDeIdentidadDelAlumnoOCedulaEscolar` varchar(25) DEFAULT NULL,
  `FechaDeNacimientoDelAlumno` date DEFAULT NULL,
  `SexoDelAlumno` varchar(9) DEFAULT NULL,
  `NacionalidadDelAlumno` varchar(25) DEFAULT NULL,
  `PaisDeNacimientoDelAlumno` varchar(250) DEFAULT NULL,
  `EstadoDondeNacioElAlumno` int(11) DEFAULT NULL,
  `MunicipioDondeNacioElAlumno` int(11) DEFAULT NULL,
  `ParroquiaOSectorDondeNacioElAlumno` varchar(250) DEFAULT NULL,
  `EstadoDondeResideElAlumno` int(11) DEFAULT NULL,
  `MunicipioDondeResideElAlumno` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideElAlumno` varchar(250) DEFAULT NULL,
  `CalleOAvenidaDondeResideElAlumno` varchar(250) DEFAULT NULL,
  `CasaOEdificioDondeResideElAlumno` varchar(250) DEFAULT NULL,
  `PisoOPlantaDondeResideElAlumno` varchar(50) DEFAULT NULL,
  `NumeroDeCasaOApartamentoDondeResideElAlumno` varchar(5) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomicilioDelAlumno` varchar(250) DEFAULT NULL,
  `ParentescoConElAlumno` varchar(15) DEFAULT NULL,
  `OtroParentescoConElAlumno` varchar(15) DEFAULT NULL,
  `PrimerNombreDelRepresentante` varchar(150) DEFAULT NULL,
  `SegundoNombreDelRepresentante` varchar(150) DEFAULT NULL,
  `PrimerApellidoDelRepresentante` varchar(150) DEFAULT NULL,
  `SegundoApellidoDelRepresentante` varchar(150) DEFAULT NULL,
  `CedulaDeIdentidadDelRepresentante` int(11) DEFAULT NULL,
  `FechaDeNacimientoDelRepresentante` date DEFAULT NULL,
  `NacionalidadDelRepresentante` varchar(15) DEFAULT NULL,
  `EstadoDondeNacioElRepresentante` varchar(16) DEFAULT NULL,
  `MunicipioDondeNacioElRepresentante` varchar(28) DEFAULT NULL,
  `ParroquiaDondeNacioElRepresentante` varchar(150) DEFAULT NULL,
  `PaisDeNacimientoDelRepresentante` varchar(250) DEFAULT NULL,
  `EstadoCivilDelRepresentante` varchar(11) DEFAULT NULL,
  `RepresentanteMismaDireAlu` tinyint(1) DEFAULT '0',
  `EstadoDondeResideElRepresentante` int(11) DEFAULT NULL,
  `MunicipioDondeResideElRepresentante` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideElRepresentante` varchar(250) DEFAULT NULL,
  `CalleOAvenidaDondeResideElRepresentante` varchar(250) DEFAULT NULL,
  `CasaOEdificioDondeResideElRepresentante` varchar(250) DEFAULT NULL,
  `PisoDondeResideElRepresentante` varchar(250) DEFAULT NULL,
  `NumeroOApartamentoDondeResideElRepresentante` varchar(250) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomicilioDelRepresentante` varchar(250) DEFAULT NULL,
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
  `ProfesionUOcupacionDelRepresentante` varchar(250) DEFAULT NULL,
  `IngresoMensualDelRepresentante` varchar(100) DEFAULT '0',
  `EscalaDeIngresoDelRepresentante` varchar(250) DEFAULT NULL,
  `OtrosIngresosDentroDeSuGrupoFamiliar` varchar(250) DEFAULT NULL,
  `EscalaDeIngresosDelGrupoFamiliar` varchar(250) DEFAULT NULL,
  `TipoDeJornadaLaboralDelRepresentante` varchar(25) DEFAULT NULL,
  `NombreDeLaEmpresaUOrganismoDondeTrabajaElRepresentante` varchar(250) DEFAULT NULL,
  `EstadoDondeSeUbicaElTrabajoDelRepresentante` int(11) DEFAULT NULL,
  `MunicipioDondeTrabajaElRepresentante` int(11) DEFAULT NULL,
  `UrbanizaOSectorDondeSeUbicaElTrabajoDelRepresentante` varchar(250) NOT NULL,
  `CalleOAvenidaDondeSeUbicaElTrabajoDelRepresentante` varchar(250) DEFAULT NULL,
  `EdificioOCasaDondeTrabajaElRepresentante` varchar(250) DEFAULT NULL,
  `PisoDondeSeUbicaElTrabajoDelRepresentante` varchar(250) DEFAULT NULL,
  `OficinaNumeroOApartamentoDondeTrabajaElRepresentante` varchar(250) DEFAULT NULL,
  `TelefonoDelTrabajoActualDelRepresentante` varchar(250) DEFAULT NULL,
  `ExtensionTelefonicaParaContactarAlRepresentante` varchar(15) DEFAULT NULL,
  `PersonaContactoEnElTrabajoDelRepresentante` varchar(250) DEFAULT NULL,
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
  `NombreDeLaMadre` varchar(150) DEFAULT NULL,
  `ApellidosDeLaMadre` varchar(150) DEFAULT NULL,
  `CedulaDeIdentidadDeLaMadre` int(11) DEFAULT NULL,
  `FechaDeNacimientoDeLaMadre` datetime DEFAULT NULL,
  `NacionalidadMadre` varchar(150) DEFAULT NULL,
  `PaisDeNacimientoDeLaMadre` varchar(150) DEFAULT NULL,
  `EstadoCivilMadre` varchar(20) DEFAULT NULL,
  `EstadoDondeNacioLaMadre` int(11) DEFAULT NULL,
  `MunicipioDondeNacioLaMadre` int(11) DEFAULT NULL,
  `MadreMismaResiAlu` tinyint(1) DEFAULT '0',
  `EstadoDondeResideLaMadre` int(11) DEFAULT NULL,
  `MunicipioDondeResideLaMadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideLaMadre` varchar(250) DEFAULT NULL,
  `CasaOEdificioDondeResideLaMadre` varchar(10) DEFAULT NULL,
  `PisoDondeResideLaMadre` varchar(10) DEFAULT NULL,
  `NumeroOApartamentoDondeResideLaMadre` varchar(10) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomiclioDeLaMadre` varchar(150) DEFAULT NULL,
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
  `NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre` varchar(250) DEFAULT NULL,
  `EstadoDondeTrabajaLaMadre` int(11) DEFAULT NULL,
  `MunicipioDondeTrabajaLaMadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeTrabajaLaMadre` varchar(150) DEFAULT NULL,
  `EdificioOCasaDondeTrabajaLaMadre` varchar(250) DEFAULT NULL,
  `PisoDondeTrabajaLaMadre` varchar(250) DEFAULT NULL,
  `NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre` varchar(10) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlTrabajoDeLaMadre` varchar(250) DEFAULT NULL,
  `TelefonoDelLugarDelTrabajodeLaMadre` varchar(15) DEFAULT NULL,
  `ExtensionTelefonicaParaContactarALaMadre` varchar(15) DEFAULT NULL,
  `PersonaContactoEnElTrabajoDeLaMadre` varchar(250) DEFAULT NULL,
  `TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre` varchar(15) DEFAULT NULL,
  `ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre` varchar(15) DEFAULT NULL,
  `ElPadreVive` varchar(2) DEFAULT NULL,
  `NombreDelPadre` varchar(250) DEFAULT NULL,
  `ApellidosDelPadre` varchar(250) DEFAULT NULL,
  `CedulaDeIdentidadDelPadre` int(11) DEFAULT NULL,
  `FechaDeNacimientoDelPadre` datetime DEFAULT NULL,
  `NacionalidadDelPadre` varchar(10) DEFAULT NULL,
  `PaisDondeNacioElPadre` varchar(150) DEFAULT NULL,
  `EstadoCivilDelPadre` varchar(14) DEFAULT NULL,
  `EstadoDondeNacioElPadre` int(11) DEFAULT NULL,
  `MunicipioDondeNacioElPadre` int(11) DEFAULT NULL,
  `ElPadreViveEnElMismoLugarDeResidenciaDelAlumno` tinyint(1) DEFAULT '0',
  `EstadoDondeResideElPadre` int(11) DEFAULT NULL,
  `MunicipioDondeResideElPadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeResideElPadre` varchar(250) DEFAULT NULL,
  `CalleOAvenidaDondeResideElPadre` varchar(250) DEFAULT NULL,
  `CasaOEdificioDondeResideElPadre` varchar(250) DEFAULT NULL,
  `PisoDondeResideElPadre` varchar(8) DEFAULT NULL,
  `NumeroDeCasaOApartamentoDondeResideElPadre` varchar(3) DEFAULT NULL,
  `PuntoDeReferenciaCercanoAlDomicilioDelPadre` varchar(250) DEFAULT NULL,
  `TelefonoDeHabitacionDelPadre` varchar(15) DEFAULT NULL,
  `TelefonoCelularDelPadre` varchar(15) DEFAULT NULL,
  `CorreoElectronicoDelPadre` varchar(250) DEFAULT NULL,
  `RedSocialPadreFacebook` tinyint(1) DEFAULT '0',
  `RedSocialPadreTwitter` tinyint(1) DEFAULT '0',
  `RedSocialPadreWhatsapp` tinyint(1) DEFAULT '0',
  `RedSocialPadreOtra` tinyint(1) DEFAULT '0',
  `RedesSocialesQueUsaElPadre` varchar(150) DEFAULT NULL,
  `EspecifiqueQueOtrasRedesSocialesUsaElPadre` varchar(150) DEFAULT NULL,
  `ElPadreTrabajaActualmente` tinyint(1) DEFAULT '0',
  `ProfesionUOcupacionDelPadre` varchar(250) DEFAULT NULL,
  `IngresoMensualDelPadre` varchar(21) DEFAULT '0',
  `EscalaDeIngresosDelPadre` varchar(29) DEFAULT NULL,
  `TipoDeJornadaLaboralDelPadre` varchar(15) DEFAULT NULL,
  `NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre` varchar(250) DEFAULT NULL,
  `EstadoDondeTrabajaElPadre` int(11) DEFAULT NULL,
  `MunicipioDondeTrabajaElPadre` int(11) DEFAULT NULL,
  `UrbanizacionOSectorDondeTrabajaElPadre` varchar(250) DEFAULT NULL,
  `CalleOAvenidaDondeTrabajaElPadre` varchar(250) DEFAULT NULL,
  `EdificioOCasaDondeTrabajaElPadre` varchar(250) DEFAULT NULL,
  `PisoDondeTrabajaElPadre` varchar(11) DEFAULT NULL,
  `OficinaCasaOApartamentoDondeTrabajaElPadre` varchar(250) DEFAULT NULL,
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
  `GradosQueCursanLosHermanos` varchar(250) DEFAULT NULL,
  `UnidadEducativaMunicipalDondeEstudianLosHermanos` varchar(22) DEFAULT NULL,
  `DatosDeLaVivienda` varchar(25) DEFAULT NULL,
  `OtraCondicionDeViviendaResideElAlumno` varchar(45) DEFAULT NULL,
  `FactorRh` varchar(1) DEFAULT NULL,
  `Estatura` int(11) DEFAULT NULL,
  `Peso` int(11) DEFAULT NULL,
  `TallaCamisa` int(11) DEFAULT NULL,
  `TallaPantalon` int(11) DEFAULT NULL,
  `TallaCalzado` int(11) DEFAULT NULL,
  `TipoDeParto` varchar(7) DEFAULT NULL,
  `PadeceAlgunaEnfermedad` varchar(2) DEFAULT NULL,
  `TipoDeEnfermedadQuePadeceElAlumno` varchar(250) DEFAULT NULL,
  `ElAlumnoTieneAlgunaDiversidadFuncional` tinyint(1) DEFAULT '0',
  `aluDiversidadMotora` tinyint(1) DEFAULT '0',
  `aluDiversidadVisual` tinyint(1) DEFAULT '0',
  `aluDiversidadAuditiva` tinyint(1) DEFAULT '0',
  `aluDiversidadNeurologica` tinyint(1) DEFAULT '0',
  `aluDiversidadLenguaje` tinyint(1) DEFAULT '0',
  `aluDiversidadOtra` tinyint(1) DEFAULT '0',
  `OtroTipoDiversidad` varchar(250) DEFAULT '0',
  `ElAlumnoHaSidoOperado` tinyint(1) DEFAULT '0',
  `EspecifiqueTipoOperacion` text NOT NULL,
  `ElAlumnoEsAlergico` varchar(2) DEFAULT NULL,
  `TipoDeAlergias` varchar(250) DEFAULT NULL,
  `aluAlergiMedicina` tinyint(1) DEFAULT '0',
  `aluAlergiAlimento` tinyint(1) DEFAULT '0',
  `aluAlergiOtro` tinyint(1) DEFAULT '0',
  `OtroTipoDeAlergiasTieneElAlumno` varchar(250) DEFAULT NULL,
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
  `OtrasVacunasCuentaElAlumno` varchar(250) DEFAULT NULL,
  `AluEnfermedadNinguna` tinyint(1) DEFAULT '0',
  `AluEnfermedadSarampion` tinyint(1) DEFAULT '0',
  `AluEnfermedadRubeola` tinyint(1) DEFAULT '0',
  `AluEnfermedadLechina` tinyint(1) DEFAULT '0',
  `AluEnfermedadTosferina` tinyint(1) DEFAULT '0',
  `AluEnfermedadHepatitis` tinyint(1) DEFAULT '0',
  `AluEnfermedadDengue` tinyint(1) DEFAULT '0',
  `OtrasEnfermedades` varchar(250) DEFAULT NULL,
  `ElAlumnoEsCatolico` varchar(250) DEFAULT NULL,
  `HaCumplidoConAlgunoDeLosSiguientesSacramentos` varchar(250) DEFAULT NULL,
  `aluBautizo` tinyint(1) DEFAULT '0',
  `aluComunion` tinyint(1) DEFAULT '0',
  `aluConfirmacion` tinyint(1) DEFAULT '0',
  `RealizaAlgunaActividadEspecial` tinyint(1) DEFAULT '0',
  `ActividadesEspecialesQueRealizaElAlumno` varchar(11) DEFAULT NULL,
  `aluActiDeportiva` tinyint(1) DEFAULT '0',
  `aluActiAcademica` tinyint(1) DEFAULT '0',
  `aluActiCultural` tinyint(1) DEFAULT '0',
  `aluActiOtra` tinyint(1) DEFAULT '0',
  `EspecifiqueQueOtrasActividadesEspecialesRealizaElAlumno` varchar(250) DEFAULT NULL,
  `NombreYApellidoDelContactoDeEmergencia1` varchar(250) DEFAULT NULL,
  `TelefonoDelContactoDeEmergencia1` varchar(15) DEFAULT NULL,
  `ParentescoDelContactoDeEmergencia1ConElAlumno` varchar(250) DEFAULT NULL,
  `NombreYApellidoDelContactoDeEmergencia2` varchar(250) DEFAULT NULL,
  `TelefonoDelContactoDeEmergencia2` varchar(15) DEFAULT NULL,
  `ParentescoDelContactoDeEmergencia2ConElAlumno` varchar(250) DEFAULT NULL,
  `Observaciones` varchar(250) DEFAULT NULL,
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
  `SectorDondeResideElRepresentante` int(11) DEFAULT NULL,
  `aluSacramentoNinguno` tinyint(1) NOT NULL DEFAULT '0',
  `aluActiDeportivaNinguna` tinyint(1) NOT NULL DEFAULT '0',
  `id_especialista` int(11) NOT NULL DEFAULT '0',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `id_escuela` tinyint(1) NOT NULL DEFAULT '1',
  `estatura_metros` varchar(5) DEFAULT '0',
  `peso_kilos` varchar(5) DEFAULT '0',
  `estatura_centimetros` varchar(5) DEFAULT '0',
  `peso_gramos` varchar(5) DEFAULT '0',
  `DependenciaAlcaldia` int(11) DEFAULT '1',
  `repreNombreFoto` varchar(250) DEFAULT NULL,
  `aluNombreFoto` varchar(250) DEFAULT NULL,
  `usuarioInscribe` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_inscripcion`),
  UNIQUE KEY `id_inscripcion_UNIQUE` (`id_inscripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `inscripcion`
--

INSERT INTO `inscripcion` (`id_inscripcion`, `Residente`, `GradoACursar`, `GradoActual`, `SeccionACursar`, `TurnoACursar`, `DocenteAsignado`, `ElAlumnoEstudiaActualmente`, `ElAlumnoCursoElAnterior`, `ElAlumnoRepiteGrado`, `GradoRepetido`, `UnidadEducativaDeProcedencia`, `NombreDeLaInstitucion`, `EstadoInstitucion`, `MunicipioInstitucion`, `MateriaPendiente`, `EspecifiqueCualesMateriasEstanPendientes`, `UniDePrefJuanDio`, `UniDePrefAndres`, `UniDePrefCarlos`, `RazonSocioeco`, `RazonCambioResi`, `RazonNoAdapta`, `RazonOtra`, `PrimerNombreDelAlumno`, `SegundoNombreDelAlumno`, `PrimerApellidoDelAlumno`, `SegundoApellidoDelAlumno`, `CedulaDeIdentidadDelAlumnoOCedulaEscolar`, `FechaDeNacimientoDelAlumno`, `SexoDelAlumno`, `NacionalidadDelAlumno`, `PaisDeNacimientoDelAlumno`, `EstadoDondeNacioElAlumno`, `MunicipioDondeNacioElAlumno`, `ParroquiaOSectorDondeNacioElAlumno`, `EstadoDondeResideElAlumno`, `MunicipioDondeResideElAlumno`, `UrbanizacionOSectorDondeResideElAlumno`, `CalleOAvenidaDondeResideElAlumno`, `CasaOEdificioDondeResideElAlumno`, `PisoOPlantaDondeResideElAlumno`, `NumeroDeCasaOApartamentoDondeResideElAlumno`, `PuntoDeReferenciaCercanoAlDomicilioDelAlumno`, `ParentescoConElAlumno`, `OtroParentescoConElAlumno`, `PrimerNombreDelRepresentante`, `SegundoNombreDelRepresentante`, `PrimerApellidoDelRepresentante`, `SegundoApellidoDelRepresentante`, `CedulaDeIdentidadDelRepresentante`, `FechaDeNacimientoDelRepresentante`, `NacionalidadDelRepresentante`, `EstadoDondeNacioElRepresentante`, `MunicipioDondeNacioElRepresentante`, `ParroquiaDondeNacioElRepresentante`, `PaisDeNacimientoDelRepresentante`, `EstadoCivilDelRepresentante`, `RepresentanteMismaDireAlu`, `EstadoDondeResideElRepresentante`, `MunicipioDondeResideElRepresentante`, `UrbanizacionOSectorDondeResideElRepresentante`, `CalleOAvenidaDondeResideElRepresentante`, `CasaOEdificioDondeResideElRepresentante`, `PisoDondeResideElRepresentante`, `NumeroOApartamentoDondeResideElRepresentante`, `PuntoDeReferenciaCercanoAlDomicilioDelRepresentante`, `TelefonoDeHabitacionDelRepresentante`, `TelefonoCelularDelRepresentante`, `CorreoElectronicoDelRepresentante`, `UsoDeRedesSociales`, `RedSocialRepreFacebook`, `RedSocialRepreTwitter`, `RedSocialRepreWhatsapp`, `RedSocialRepreOtra`, `EspecifiqueQueOtrasRedesSocialesUsaElRepresentante`, `TrabajaActualmente`, `TrabajaDentroChacao`, `TrabajaEnAlcaldia`, `ProfesionUOcupacionDelRepresentante`, `IngresoMensualDelRepresentante`, `EscalaDeIngresoDelRepresentante`, `OtrosIngresosDentroDeSuGrupoFamiliar`, `EscalaDeIngresosDelGrupoFamiliar`, `TipoDeJornadaLaboralDelRepresentante`, `NombreDeLaEmpresaUOrganismoDondeTrabajaElRepresentante`, `EstadoDondeSeUbicaElTrabajoDelRepresentante`, `MunicipioDondeTrabajaElRepresentante`, `UrbanizaOSectorDondeSeUbicaElTrabajoDelRepresentante`, `CalleOAvenidaDondeSeUbicaElTrabajoDelRepresentante`, `EdificioOCasaDondeTrabajaElRepresentante`, `PisoDondeSeUbicaElTrabajoDelRepresentante`, `OficinaNumeroOApartamentoDondeTrabajaElRepresentante`, `TelefonoDelTrabajoActualDelRepresentante`, `ExtensionTelefonicaParaContactarAlRepresentante`, `PersonaContactoEnElTrabajoDelRepresentante`, `TelefonoDeLaPersonaContactoDelTrabajoDelRepresentante`, `ExtensionDeLaPersonaContactoDelTrabajoDelRepresentante`, `ElRepresentanteTieneAlgunaDiversidadFuncional`, `RepreDiversidadMotora`, `RepreDiversidadVisual`, `RepreDiversidadAuditiva`, `RepreDiversidadNeurologica`, `RepreDiversidadLenguaje`, `RepreDiversidadOtra`, `EspecificaRepreDiversidadOtra`, `ElRepresentanteTieneOtrosHijosEstudiandoChacao`, `HijosEstudianGuanche`, `CantidadHijosEstudianGuanche`, `GradosHijosEstudianGuanche`, `HijosEstudianAndresBello`, `CantidadHijosEstudianAndresBello`, `GradosHijosEstudianAndresBello`, `HijosEstudianCarlosSoublette`, `CantidadHijosEstudianCarlosSoublette`, `GradosHijosEstudianCarlosSoublette`, `LaMadreVive`, `NombreDeLaMadre`, `ApellidosDeLaMadre`, `CedulaDeIdentidadDeLaMadre`, `FechaDeNacimientoDeLaMadre`, `NacionalidadMadre`, `PaisDeNacimientoDeLaMadre`, `EstadoCivilMadre`, `EstadoDondeNacioLaMadre`, `MunicipioDondeNacioLaMadre`, `MadreMismaResiAlu`, `EstadoDondeResideLaMadre`, `MunicipioDondeResideLaMadre`, `UrbanizacionOSectorDondeResideLaMadre`, `CasaOEdificioDondeResideLaMadre`, `PisoDondeResideLaMadre`, `NumeroOApartamentoDondeResideLaMadre`, `PuntoDeReferenciaCercanoAlDomiclioDeLaMadre`, `TelefonoDeHabitacionDeLaMadre`, `TelefonoCelularDeLaMadre`, `CorreoElectronicoDeLaMadre`, `RedSocialMadreFacebook`, `RedSocialMadreTwitter`, `RedSocialMadreWhatsapp`, `RedSocialMadreOtra`, `MadreTrabaja`, `ProfesionUOcupacionDeLaMadre`, `IngresoMensualMadre`, `EscalaDeIngresoMadre`, `TipoDeJornadaLaboralMadre`, `NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre`, `EstadoDondeTrabajaLaMadre`, `MunicipioDondeTrabajaLaMadre`, `UrbanizacionOSectorDondeTrabajaLaMadre`, `EdificioOCasaDondeTrabajaLaMadre`, `PisoDondeTrabajaLaMadre`, `NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre`, `PuntoDeReferenciaCercanoAlTrabajoDeLaMadre`, `TelefonoDelLugarDelTrabajodeLaMadre`, `ExtensionTelefonicaParaContactarALaMadre`, `PersonaContactoEnElTrabajoDeLaMadre`, `TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre`, `ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre`, `ElPadreVive`, `NombreDelPadre`, `ApellidosDelPadre`, `CedulaDeIdentidadDelPadre`, `FechaDeNacimientoDelPadre`, `NacionalidadDelPadre`, `PaisDondeNacioElPadre`, `EstadoCivilDelPadre`, `EstadoDondeNacioElPadre`, `MunicipioDondeNacioElPadre`, `ElPadreViveEnElMismoLugarDeResidenciaDelAlumno`, `EstadoDondeResideElPadre`, `MunicipioDondeResideElPadre`, `UrbanizacionOSectorDondeResideElPadre`, `CalleOAvenidaDondeResideElPadre`, `CasaOEdificioDondeResideElPadre`, `PisoDondeResideElPadre`, `NumeroDeCasaOApartamentoDondeResideElPadre`, `PuntoDeReferenciaCercanoAlDomicilioDelPadre`, `TelefonoDeHabitacionDelPadre`, `TelefonoCelularDelPadre`, `CorreoElectronicoDelPadre`, `RedSocialPadreFacebook`, `RedSocialPadreTwitter`, `RedSocialPadreWhatsapp`, `RedSocialPadreOtra`, `RedesSocialesQueUsaElPadre`, `EspecifiqueQueOtrasRedesSocialesUsaElPadre`, `ElPadreTrabajaActualmente`, `ProfesionUOcupacionDelPadre`, `IngresoMensualDelPadre`, `EscalaDeIngresosDelPadre`, `TipoDeJornadaLaboralDelPadre`, `NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre`, `EstadoDondeTrabajaElPadre`, `MunicipioDondeTrabajaElPadre`, `UrbanizacionOSectorDondeTrabajaElPadre`, `CalleOAvenidaDondeTrabajaElPadre`, `EdificioOCasaDondeTrabajaElPadre`, `PisoDondeTrabajaElPadre`, `OficinaCasaOApartamentoDondeTrabajaElPadre`, `PuntoDeReferenciaCercanoAlTrabajoDelPadre`, `TelefonoDelLugarDeTrabajotrabajoDelPadre`, `ExtensionTelefonicaDeContactoDelPadre`, `PersonaContactoEnElTrabajoDelPadre`, `TelefonoDeLaPersonaContactoEnElTrabajoDelPadre`, `ExtensionDeLaPersonaContactoEnElTrabajodelPadre`, `ElAlumnoViveCon`, `ElAlumnoEstaBecado`, `EspecifiqueElTipoDeBecaDelAlumno`, `MedioDeTrasladoAlPlantel`, `EspecifiqueQueOtroMedioDeTransporteUsaElAlumno`, `ElAlumnoSeRetiraSoloDelPlantel`, `NumeroDeHermanos`, `HermanosEstudianEnUnidadesEducativasMunicipales`, `GradosQueCursanLosHermanos`, `UnidadEducativaMunicipalDondeEstudianLosHermanos`, `DatosDeLaVivienda`, `OtraCondicionDeViviendaResideElAlumno`, `FactorRh`, `Estatura`, `Peso`, `TallaCamisa`, `TallaPantalon`, `TallaCalzado`, `TipoDeParto`, `PadeceAlgunaEnfermedad`, `TipoDeEnfermedadQuePadeceElAlumno`, `ElAlumnoTieneAlgunaDiversidadFuncional`, `aluDiversidadMotora`, `aluDiversidadVisual`, `aluDiversidadAuditiva`, `aluDiversidadNeurologica`, `aluDiversidadLenguaje`, `aluDiversidadOtra`, `OtroTipoDiversidad`, `ElAlumnoHaSidoOperado`, `EspecifiqueTipoOperacion`, `ElAlumnoEsAlergico`, `TipoDeAlergias`, `aluAlergiMedicina`, `aluAlergiAlimento`, `aluAlergiOtro`, `OtroTipoDeAlergiasTieneElAlumno`, `RegimenEspecialDeAlimentacionOTratamiento`, `RegimenAlimenticio`, `aluVacunaNinguna`, `aluVacunaBCG`, `aluVacunaTriple`, `aluVacunaSarampion`, `aluVacunaMeningitis`, `aluVacunaAntigripal`, `aluVacunaHepatitis`, `aluVacunaHepatitisB`, `aluVacunaNeumococo`, `aluVacunaOtras`, `OtrasVacunasCuentaElAlumno`, `AluEnfermedadNinguna`, `AluEnfermedadSarampion`, `AluEnfermedadRubeola`, `AluEnfermedadLechina`, `AluEnfermedadTosferina`, `AluEnfermedadHepatitis`, `AluEnfermedadDengue`, `OtrasEnfermedades`, `ElAlumnoEsCatolico`, `HaCumplidoConAlgunoDeLosSiguientesSacramentos`, `aluBautizo`, `aluComunion`, `aluConfirmacion`, `RealizaAlgunaActividadEspecial`, `ActividadesEspecialesQueRealizaElAlumno`, `aluActiDeportiva`, `aluActiAcademica`, `aluActiCultural`, `aluActiOtra`, `EspecifiqueQueOtrasActividadesEspecialesRealizaElAlumno`, `NombreYApellidoDelContactoDeEmergencia1`, `TelefonoDelContactoDeEmergencia1`, `ParentescoDelContactoDeEmergencia1ConElAlumno`, `NombreYApellidoDelContactoDeEmergencia2`, `TelefonoDelContactoDeEmergencia2`, `ParentescoDelContactoDeEmergencia2ConElAlumno`, `Observaciones`, `IDEscuelaAsignada`, `FechaAsignacion`, `Puntaje`, `MiembrosFamilia`, `GrupoSanguineo`, `CuposASolicitar`, `PartoMultiple`, `PosicionParto`, `StatusCenso`, `FechaSolicitud`, `TipoRelacionLaboralRepresentante`, `TipoDeRelacionLaboralDeLaMadre`, `TipoDeRelacionLaboralDelPadre`, `SectorDondeResideElAlumno`, `SectorDondeResideElRepresentante`, `aluSacramentoNinguno`, `aluActiDeportivaNinguna`, `id_especialista`, `registro_activo`, `id_escuela`, `estatura_metros`, `peso_kilos`, `estatura_centimetros`, `peso_gramos`, `DependenciaAlcaldia`, `repreNombreFoto`, `aluNombreFoto`, `usuarioInscribe`) VALUES
(2, 1, 2, 1, 1, 2, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'NO', 'NO', 'NO', 'NO', '0', '2013-12-11', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'NO', 'NO', 'NO', '1', 'MERCAL', 'MADRE', NULL, 'NO', 'NO', 'NO', 'NO', 15151515, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'NO', 'NO', 'NO', '1', 'NO', '1111-1111111', '1111-1111111', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 1, 0, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', 1, 2, 3, 17, 16, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'WE', '2323-2323323', 'EW', 'WE', '3443-2423423', 'WE', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-14 07:11:50', NULL, NULL, NULL, 17, 17, 0, 0, 0, 1, 1, '0', '0', '0', '0', NULL, NULL, NULL, 1),
(3, 1, 2, 1, 1, 2, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'NO', 'NO', 'NO', 'NO', '0', '0000-00-00', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', 13, 183, '', 'NO', 'NO', 'NO', '1', 'MERCAL', 'MADRE', NULL, 'NO', 'NO', 'NO', 'EW', 15151515, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, 13, 183, '', 'NO', 'NO', 'NO', '1', 'NO', '1111-1111111', '1111-1111111', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 1, 0, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', 1, 2, 3, 17, 16, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'WE', '2323-2323323', 'ASS', 'WE', '3443-2423423', 'WE', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-14 07:28:14', NULL, NULL, NULL, 17, NULL, 0, 0, 0, 1, 1, '0', '0', '0', '0', NULL, NULL, NULL, 1),
(4, 1, 2, 1, 1, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'NORWILL', '', 'GUTIERREZ', '', '0', '2012-12-11', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'W CON X', 'W-12', '1', '12', 'MERCAL', 'MADRE', NULL, 'NORMA', '', 'FIGUEROA', '', 6473210, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'W CON X', 'W-12', '1', '12', 'CIUDAD PERDIDA', '0239-2123331', '0416-8338848', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 1, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 1, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', 1, 2, 3, 17, 16, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'WE', '2323-2323323', 'ASS', 'WE', '3443-2423423', 'WE', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-14 07:39:26', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, '0', '0', '0', '0', NULL, NULL, NULL, 1),
(5, 1, 2, 1, 1, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'NORWILL', '', 'GUTIERREZ', '', '0', '2012-12-11', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'W CON X', 'W-12', '1', '12', 'MERCAL', 'MADRE', NULL, 'NORMA', '', 'FIGUEROA', '', 6473210, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'W CON X', 'W-12', '1', '12', 'CIUDAD PERDIDA', '0239-2123331', '0416-8338848', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 1, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 1, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', 1, 2, 3, 17, 16, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'WE', '2323-2323323', 'ASS', 'WE', '3443-2423423', 'WE', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-14 07:45:34', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, '0', '0', '0', '0', NULL, NULL, NULL, 1),
(6, 1, 2, 1, 1, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'NORWILL', '', 'GUTIERREZ', '', '0', '2012-12-11', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'W CON X', 'W-12', '1', '12', 'MERCAL', 'MADRE', NULL, 'NORMA', '', 'FIGUEROA', '', 6473210, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'W CON X', 'W-12', '1', '12', 'CIUDAD PERDIDA', '0239-2123331', '0416-8338848', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 1, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 1, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', 1, 2, 3, 17, 16, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'WE', '2323-2323323', 'ASS', 'WE', '3443-2423423', 'WE', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-14 07:48:24', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, '0', '0', '0', '0', NULL, NULL, NULL, 1),
(7, 1, 2, 1, 1, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'NORWILL', '', 'GUTIERREZ', '', '0', '2012-12-11', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'W CON X', 'W-12', '1', '12', 'MERCAL', 'MADRE', NULL, 'NORMA', '', 'FIGUEROA', '', 6473210, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'W CON X', 'W-12', '1', '12', 'CIUDAD PERDIDA', '0239-2123331', '0416-8338848', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 1, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 1, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', 1, 2, 3, 17, 16, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'WE', '2323-2323323', 'ASS', 'WE', '3443-2423423', 'WE', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-14 08:14:16', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, '0', '0', '0', '0', NULL, NULL, NULL, 1),
(8, 1, 2, 1, 1, 1, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'QWE', '', 'QWE', '', '0', '2013-12-11', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'ADS', 'SAD', 'SAD', 'SAD', '', 'MADRE', NULL, 'QWQ', '', 'QWQ', '', 15155151, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'ADS', 'SAD', 'SAD', 'SAD', '', '2313-2313123', '1231-2312312', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'ALOJADOS', '', 'P', 2, 2, 4, 13, 11, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'WQE', '1232-3123123', 'QWE', 'SD', '2313-1232131', 'WQE', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-14 08:23:10', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, '0', '0', '0', '0', NULL, NULL, NULL, 1),
(9, 1, 4, 4, 1, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'BICHITO', '', 'CONEJO', '', '2147483647', '2010-06-01', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'UNO', 'UNO', 'UNO', 'UNO', '', 'PADRE', NULL, 'NORWILL', '', 'GUTIERREZ', '', 15544359, '1982-12-11', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'UNO', 'UNO', 'UNO', 'UNO', '', '0212-6161661', '0414-1166616', 'CORREO@MAIL.COM', NULL, 0, 0, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PUBLICO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', 1, 1, 1, 1, 1, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'EMERGENCIA UNO', '0211-1111111', 'NADA', 'EMERGENCIA DOS', '1111-1111111', 'NADA', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-21 02:36:15', NULL, NULL, NULL, 6, 6, 0, 0, 0, 1, 1, '0', '0', '0', '0', NULL, NULL, NULL, 1),
(10, 1, 5, 4, 1, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'JOHN', '', 'GUTIERREZ', '', '2147483647', '2010-12-11', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'CALLE UNO', 'UNO', '1', '1', '', 'PADRE', NULL, 'NORWILL', '', 'GUTIERREZ', '', 15544359, '1982-12-11', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'CALLE UNO', 'UNO', '1', '1', 'GIMNASIO VERTICAL', '0212-7059000', '0416-8338848', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 1, 1, 1, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MARIA LOPEZ', '0212-6555555', 'VECINA', 'JOSE LOPEZ', '0212-5888888', 'VECINO', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-30 03:18:20', NULL, NULL, NULL, 5, 5, 0, 0, 0, 1, 1, '1', '50', '0', '0', NULL, NULL, NULL, 1),
(11, 1, 7, 6, 1, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'LUIS', '', 'LOPEZ', '', '10615544359', '2006-12-11', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', 13, 183, '', 'UNO', 'UNO', 'UNO', '1', '', 'PADRE', NULL, 'NORWILL', '', 'GUTIERREZ', '', 15544359, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, 13, 183, '', 'UNO', 'UNO', 'UNO', '1', '', '0222-2222222', '0414-1111111', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 1, 1, 1, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MARIA LOPEZ', '0212-1212121', 'TIA', 'VICTOR LOPEZ', '0414-1414141', 'PRIMO', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-30 03:42:17', NULL, NULL, NULL, 5, NULL, 0, 0, 0, 1, 1, '1', '88', '0', '200', NULL, NULL, NULL, 1),
(12, 1, 5, 4, 1, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'LUIGI', '', 'BROSS', '', '11015544359', '2010-12-11', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', 13, 183, '', 'UNO', 'UNO', 'UNO', '1', '', 'PADRE', NULL, 'NORWILL', '', 'GUTIERREZ', '', 15544359, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, 13, 183, '', 'UNO', 'UNO', 'UNO', 'UNO', '', '0212-1212121', '0414-1414141', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 9, 10, 15, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'PRIMO LUIS', '1321-1331213', 'PRIMO', 'TIA CARMEN', '6464-3131123', 'TIA', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-30 04:01:15', NULL, NULL, NULL, 1, NULL, 0, 0, 0, 1, 1, '1', '60', '10', '210', NULL, NULL, NULL, 1),
(13, 1, 3, 2, 3, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'NORANYEL', '', 'GUTIERREZ', '', '11316578793', '2013-01-01', 'FEMENINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'UNO', 'UNO', 'UNO', 'UNO', '', 'MADRE', NULL, 'ZULMA', '', 'VALERA', '', 16578793, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'UNO', 'UNO', 'UNO', 'UNO', '', '0225-5555555', '2222-5252525', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 5, 8, 11, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'TIO', '1312-3132123', 'TIO', 'TIA', '5654-6546546', 'TIA', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-30 07:26:26', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, '1', '30', '0', '0', 1, NULL, NULL, 1),
(14, 1, 3, 2, 3, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'CARLOS', '', 'SOUBLETTE', '', '', '2013-12-11', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'UNO', 'UNO', 'UNO', 'UNO', '', 'PADRE', NULL, 'PRUEBA', '', 'ESCUELA', '', 12345678, '1980-12-11', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'UNO', 'UNO', 'UNO', 'UNO', '', '0212-1111111', '0414-1111111', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 9, 10, 1, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'TIO', '2121-1212121', 'TIO', 'PRIMO', '2112-1212121', 'PRIMO', '', 0, '0000-00-00', 0, 0, 'A', 1, 1, 1, 0, '2016-06-30 13:13:39', NULL, NULL, NULL, 3, 3, 0, 0, 0, 1, 1, '0', '35', '90', '120', 1, NULL, NULL, 1),
(15, 1, 5, 5, 5, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'LUCIANO', 'EMILIO', 'IBARRA', 'MORALES', '', '2013-12-12', 'MASCULINO', 'VENEZOLANA', '', 1, 1, 'EL RECREO', NULL, NULL, '', 'CALLE LA MANGUERA', 'CASA 11-12', 'PB', '01', 'AUTOMERCADO LUZ EL PEDREGAL', 'MADRE', NULL, 'MEILYN', 'DAYANA ', 'MORALES', 'BLANCO', 17079080, '1986-12-31', 'VENEZOLANA', '1', '1', '', '', 'SOLTERO', 0, NULL, NULL, '', 'CALLE LA MANGUERA', 'CASA 11-12', 'PB', '01', 'SUPERMERCADO LUZ EL  PEDREGAL', '0212-2638672', '0412-0155941', 'POCHACCO213@HOTMAIL.COM', NULL, 1, 0, 1, 0, '', 1, 1, 1, 'ANALISTA ADMINISTRIVO', '1', NULL, '1', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'ADRIANA RODRÌGUEZ', '02122637710', '02122637710', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'WILLIAM MAURICIO', 'IBARRA ', 17671998, '1986-12-31 00:00:00', 'VENEZOLANA', '', 'SOLTERO', 1, 1, 0, 13, 183, '', NULL, 'CASA 11-12', 'PB', '01', 'AUTOMERCADO LUZ PEDREGAL', '02122638672', '04120155941', 'POCHACCO213@HOTMAIL.COM', 1, 0, 1, 0, NULL, NULL, 1, 'PROMOTOR SOCIAL', 'MINIMO', NULL, 'TIEMPOCOMPLETO', 'GOBERNACIÒN DEL ESTADO MIRANDA', 13, 182, 'LOS TEQUES', NULL, 'GOBERNACIÒN DE MIRANDA', 'PISO 1', '01', '', '', '', 'LUIS', '', '', 'AMBOS', 0, NULL, 'OTRO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 3, 4, 7, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '1', NULL, 0, 0, 0, 'POLVO PINTURA', 0, '', 0, 1, 1, 1, 0, 0, 0, 0, 1, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '1', NULL, 1, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MEILYN MORALES', '0412-0155941', 'MADRE', 'WILLIAM IBARRA', '0412-0155941', 'PADRE', 'ABUELA EMMA 02122638672', 0, '0000-00-00', 0, 2, 'O', 1, 0, 0, 0, '2016-06-30 14:34:55', NULL, NULL, 'TRABAJADORDEPENDIENTE', 1, 1, 0, 0, 0, 1, 1, '1', '12', '28', '0', 16, NULL, NULL, 1),
(16, 1, 5, 5, 5, 2, 1, 0, 0, 1, '5', NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'ASHLEY', 'VALENTINA', 'MAITA ', 'ARAQUE', '', '2006-07-11', 'FEMENINO', 'VENEZOLANA', '', 1, 1, '', NULL, NULL, '', 'FINAL AV LIBERTADOR', 'CASA 17-24', 'PB', '02122', '', 'MADRE', NULL, 'ASHLEY', 'VALENTINA', 'MAITA ', 'ARAQUE', 27246378, '0000-00-00', 'VENEZOLANA', '1', '1', 'LIBERTADOR', '', 'SOLTERO', 0, NULL, NULL, '', 'FINAL AV LIBERTADOR', 'CASA 17-24', 'PB', '02122848684', 'FINAL DE LA PLAZA ARUFLO', '0212-848684', '0414-1217097', 'SHIRLEYARAQUE@HOTMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 1, 'SECRETARIA', '3', NULL, '6', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 1, NULL, 'PUBLICO', '', 0, 1, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 11, 14, 22, 'CESAREA', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 1, 'ADENOIDES Y ADMINDALAS', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, 0, 0, 0, 0, 0, 1, '', '1', NULL, 1, 1, 0, 0, NULL, 0, 0, 0, 0, '', 'JOSE HOMERO ARAQUE', '0414-1071793', 'ABUELO', 'LEDYS GONZALEZ', '0414-2825121', 'ABUELA', '', 0, '0000-00-00', 0, 4, 'A', 1, 0, 0, 0, '2016-06-30 14:38:00', NULL, NULL, NULL, 7, 7, 0, 0, 0, 1, 1, '1', '33', '35', '7', 16, NULL, NULL, 1),
(17, 0, 3, 2, 3, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'CARLOS', '', 'ANTONY', '', '', '2000-12-12', 'MASCULINO', 'VENEZOLANA', '', 2, 5, '', 1, 148, 'CATIA', 'CALLE CATIA', 'CASA NUMERO CINCO', 'CASA', 'NUMER', '', 'MADRE', NULL, 'CARMEN ', 'SOFIA', 'PEREZ', 'PEREZ', 12546887, '1999-02-15', 'EXTRANJERA', NULL, NULL, '', 'ECUADOR', 'SOLTERO', 0, 1, 1, 'CATIA', 'CALLE CATIA', 'CASA NUMERO CINCO', 'CASA', 'NUMERO CINCO', 'CERCA DEL METRO', '0212-8554695', '0424-8756289', 'CARMENB@HOTMIAL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 1, 'SECRETARIA', '2', NULL, '1', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'SEVILLA MARTINEZ', '04147526981', '112', 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, '', 1, 0, 'PRIMERO, SEGUNDO Y TERCERO', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'MARC', 'ANTONY', 12548775, '1999-02-15 00:00:00', 'VENEZOLANA', '', 'SOLTERO', 2, 5, 0, 1, 1, 'CATIA', NULL, 'CATIA', 'SIN PISO', '03/', 'CERCA DEL METRO', '02125486655', '04165487592', 'MARCAN@HOTMAIL.COM', 1, 1, 1, 0, NULL, NULL, 1, 'CANTANTE', 'MAYORMINIMO', NULL, 'NOCTURNA', '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 5, 8, 1, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, '', 1, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'KARLA ANGOLA', '0212-2254856', 'MADRINA', 'MARIA CARDE', '0212-4587454', 'MADRINA', '', 0, '0000-00-00', 0, 0, 'A', 1, 1, 1, 0, '2016-06-30 14:41:04', NULL, NULL, 'TRABAJADORINDEPENEDIENTE', NULL, NULL, 0, 0, 0, 1, 1, '1', '10', '1', '1', 1, NULL, NULL, 1),
(18, 1, 5, 4, 17, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'PEPITO', '', 'GARCIA', '', '', '2000-08-22', 'MASCULINO', 'VENEZOLANA', '', 13, 183, 'SAN JOSE DE CHACAO', NULL, NULL, '', '556', 'QTA POCHITA', '1', '22', '', 'OTRO', 'TIA', 'JULIA', '', 'TORRES', '', 51515151, '0000-00-00', 'VENEZOLANA', '1', '1', '', '', 'SOLTERO', 0, NULL, NULL, '', '556', 'QTA POCHITA', '1', '22', '', '2222-2222222', '2222-2222222', 'MAR_TORR@YAHOO.COM', NULL, 1, 1, 1, 1, '', 1, 1, 1, 'TS', '1', NULL, '1', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'CARLOS', '92929292929', '66745', 1, 1, 0, 0, 0, 0, 0, 'CHUECA', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'REPRESENTANTE', 1, NULL, 'PRIVADO', '', 0, 33, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 11, 12, 19, 'CESAREA', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 0, 1, 0, 0, 0, 0, 0, '', '1', NULL, 1, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'HHHHHHH', '1234-5567722', 'TIA', 'HAHAHAHAHA HAHHAHA', '1233-4566788', 'TIA', '', 0, '0000-00-00', 0, 333, 'A', 1, 0, 0, 0, '2016-06-30 14:41:10', NULL, NULL, NULL, 6, 6, 0, 0, 0, 1, 1, '1', '60', '50', '100', 16, NULL, NULL, 1),
(19, 1, 5, 4, 5, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'JOSE', '', 'SALAZAR', '', '', '2012-11-19', 'MASCULINO', 'VENEZOLANA', '', 13, 168, 'BARUTA', NULL, NULL, '', 'LOS CAOBOS', 'LA CUADRA', '3', '3D', '', 'MADRE', NULL, 'JHON', '', 'SANCHEZ', '', 9098657, '0000-00-00', 'VENEZOLANA', '13', '178', 'LOS TEQUES', '', 'SOLTERO', 0, NULL, NULL, '', 'LOS CAOBOS', 'LA CUADRA', '3', '3D', 'PARQUE SAN JOSE', '0212-456777', '0416-555555', 'YYYY@CANTV.NET', NULL, 1, 1, 1, 0, '', 1, 1, 0, 'CONSULTROR', '6', NULL, NULL, NULL, 'TIEMPO-COMPLETO', 'IPCA', 13, 173, 'CHACAO', 'DOS', 'SAN JOSE', '1', '01', '00000000000', '2222', 'MARISOL ROJAS', '21233333333', '22222', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 0, NULL, 'PUBLICO', '', 0, 2, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 13, 28, 24, 'CESAREA', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '', 0, 1, 0, 1, 0, 0, 0, '', '1', NULL, 1, 1, 0, 1, NULL, 1, 1, 0, 0, '', 'MARIA GOMEZ', '0212-1111111', 'ABUELA', 'LIZ GONZALEZ', '0212-999999', 'TIA', '', 0, '0000-00-00', 0, 2, 'O', 1, 0, 0, 0, '2016-06-30 14:41:30', NULL, NULL, NULL, 8, NULL, 0, 0, 0, 1, 1, '1', '50', '5', '0', 1, NULL, NULL, 1),
(20, 1, 5, 5, 5, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'MARIA ', 'JOSE', 'PERAZA', '', '', '2010-05-12', 'FEMENINO', 'VENEZOLANA', '', 1, 1, 'SAN JUAN', NULL, NULL, '', 'FARFAN', 'CASA', 'PB', '01', '', 'MADRE', NULL, 'CARMEN', 'MARIA', 'PERAZA', '', 12325968, '0000-00-00', 'VENEZOLANA', '1', '1', 'MUNICIPIO SUCRE', '', 'SOLTERO', 0, NULL, NULL, '', 'FARFAN', 'CASA', 'PB', '01', '', '0212-2653535', '0146-2208596', 'PPPP@GMAIL.COM', NULL, 0, 0, 1, 0, '', 1, 1, 0, 'SECRETARIA', '2', NULL, '1', NULL, 'TIEMPO-COMPLETO', 'PROGRAMA TECHO', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 0, 'PEDRO Y MARIA', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'REPRESENTANTE', 0, NULL, 'RUTACHACAO', '', 0, 2, NULL, NULL, NULL, 'ALOJADOS', '', 'P', NULL, NULL, 7, 10, 16, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '1', NULL, 1, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MARIA', '0212-2653535', 'MADRE', 'PEDRO', '0212-2653939', 'PADRE', '', 0, '0000-00-00', 0, 5, 'O', 1, 0, 0, 0, '2016-06-30 14:42:58', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, '1', '27', '1', '0', 1, NULL, NULL, 1),
(21, 1, 5, 4, 5, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'MARIA', '', 'PEREZ', 'COBA', '', '2011-10-02', 'FEMENINO', 'VENEZOLANA', '', 17, 236, '', NULL, NULL, '', 'PEDRO MATIA REYES', 'CASA ', '', '32', '', 'OTRO', 'ABUELO', 'LIGIA', 'MAARGARITA', 'TORO', 'CHIRINO', 14122173, '0000-00-00', 'VENEZOLANA', '13', '181', '', '', 'SOLTERO', 0, NULL, NULL, '', 'PEDRO MATIA REYES', 'CASA ', '', '32', 'SUPERMERCADO LUZ', '0751-8427212', '0424-96982', 'LIGIATORO@HOTMAIL.COM', NULL, 0, 0, 0, 1, '', 1, 1, 1, '', '1', NULL, '7', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, '', 1, 2, '2B', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'REPRESENTANTE', 1, NULL, 'RUTACHACAO', '', 0, 1, NULL, NULL, NULL, 'PROPIA-PAGANDO', '', 'P', NULL, NULL, 3, 6, 7, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 1, NULL, 1, 0, 0, 0, '', 'CARLA ', '0212-7500000', 'TIO', 'JOSE', '0216-8000000', 'PRIMO', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-06-30 14:43:46', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, '1', '20', '50', '200', 16, NULL, NULL, 1),
(22, 1, 5, 4, 5, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'KIANA', 'ANDREINA', 'LOPEZ', 'MARRUFFO', '', '2006-12-12', 'FEMENINO', 'VENEZOLANA', '', 13, 183, 'CHACAO', NULL, NULL, '', 'AV JOSE FELIX SOSA', 'CASA 12013', '0', ' 0', '', 'OTRO', 'TIA', 'CARMEN', 'VERONICA', 'MARRUFFO', 'RODRIGUEZ', 11381125, '0000-00-00', 'VENEZOLANA', '17', '233', 'VALENTIN VALIENTE', '', 'CASADO', 0, NULL, NULL, '', 'AV JOSE FELIX SOSA', 'CASA 12013', '', ' 0', 'FRENTE A LA IGLESIA EL BUEN PASTOR', '0212-2662453', '0426-3822645', 'CARMENMARRUFFO@HOTMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 0, 'DOCENTE', '1', NULL, NULL, NULL, 'TIEMPO-COMPLETO', 'DIRECCION DE EDUCACION', 13, 183, 'CHACAO', 'AV MOHEDANO', '', '', '', '02122644464', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'REPRESENTANTE', 0, NULL, 'RUTACHACAO', '', 1, 0, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 15, 16, 23, 'CESAREA', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, 0, 0, 1, 0, 0, 1, '', '1', NULL, 1, 1, 0, 1, NULL, 1, 0, 0, 0, 'VOLEIBOL', 'LETICIA RODRIGUEZ', '0212-2654277', 'TIA', 'CARMEN FERNANDEZ', '0212-5864369', 'TIA', '', 0, '0000-00-00', 0, 0, 'O', 1, 0, 0, 0, '2016-06-30 14:44:50', NULL, NULL, NULL, 5, 5, 0, 0, 0, 1, 1, '1', '45', '60', '200', 1, NULL, NULL, 1),
(23, 0, 5, 4, 5, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'ANIS', 'ROEA', 'ESQUEDA', 'ROMER', '', '2000-10-23', 'MASCULINO', 'VENEZOLANA', '', 1, 1, 'CATIA', 13, 183, 'CATIA', 'LA RUA', 'CELTA', '3', '3', '', 'MADRE', NULL, 'GERSON', 'JOSE', 'ESQUEDA', 'ROMER', 23433333, '0000-00-00', 'VENEZOLANA', '1', '1', 'SUCRE', '', 'SOLTERO', 0, 13, 183, 'CATIA', 'LA RUA', 'CELTA', '3', '3', 'LA BODEGA', '0212-345678', '0424-1592534', 'AZPIROZA@GMAIL', NULL, 0, 0, 1, 0, 'CORREO', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 0, NULL, 'PUBLICO', '', 1, 4, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 9, 11, 15, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '1', NULL, 1, 1, 1, 0, NULL, 0, 0, 0, 0, '', '02124326543', '0424-1654323', 'MADRE', 'PADRE', '0212-321435', 'TIO', '', 0, '0000-00-00', 0, 2, 'A', 1, 0, 0, 0, '2016-06-30 14:51:11', NULL, NULL, NULL, 6, 6, 0, 0, 0, 1, 1, '1', '24', '34', '56', 1, NULL, NULL, 1),
(24, 1, 5, 4, 32, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'JOHAN', 'ALEXANDER', 'PLAZA', 'CALDERON', '', '1986-09-13', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'EL NAZARENO  PETARE', 'CASA', 'PISO 2', '235', '', 'MADRE', NULL, 'YURAIMA ', 'FOSEFINA', 'PLAZA', 'CALDERON', 6811278, '1962-09-20', 'VENEZOLANA', '1', '1', 'CARACAS', '', 'SOLTERO', 0, NULL, NULL, '', 'EL NAZARENO  PETARE', 'CASA', 'PISO 2', '235', '', '0212-8848072', '0426-4867973', 'YURAPLAZA@GMAIL.COM', NULL, 1, 0, 0, 0, '', 1, 1, 1, 'SECRETARIA', '1', NULL, '1', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'ADRIANA RODRIGUEZ', '04125435533', '', 0, 0, 0, 0, 0, 0, 0, '', 1, 1, 3, '', 1, 2, '2º Y 3º', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'OSCAR MONTEVERDE', 'OSCAR JOSE', 6812333, '1962-09-20 00:00:00', 'VENEZOLANA', '', 'SOLTERO', 1, NULL, 0, 1, 1, 'EL NAZARENO PETARE', NULL, 'CASA Nº 2', 'PISO 2', '03', '', '02128848072', '04264867973', 'YURA@GMAIL.COM', 1, 0, 0, 0, NULL, NULL, 1, '', 'MINIMO', NULL, 'TIEMPOCOMPLETO', 'TALLER MONACO', 13, 174, 'BOLEITA SUR', NULL, 'CASA', 'P.B', '04264867973', '', '02122350417', '04264867973', '04264867973', '02122350717', '02122350717', 'REPRESENTANTE', 0, NULL, 'RUTACHACAO', '', 0, 2147483647, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 7, 16, 15, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '1', NULL, 0, 1, 0, 1, NULL, 0, 0, 0, 0, '', 'CARMEN PLAZA', '0426-4867973', 'TIA', 'CARMEN PLAZA', '0426-4867973', '8848072', '', 0, '0000-00-00', 0, 4, 'A', 1, 0, 0, 0, '2016-06-30 14:55:29', NULL, NULL, NULL, 5, NULL, 1, 1, 0, 1, 1, '1', '11', '1', '2', 16, NULL, NULL, 1),
(25, 1, 5, 4, 5, 1, 1, 0, 0, 1, '5', NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'LUIS ', '', 'PEREZ', '', '', '2010-12-10', 'MASCULINO', 'VENEZOLANA', '', 13, 183, 'CHACAO', NULL, NULL, '', 'AVILA', 'SOUBLETTE', 'VENEZUELA', '26', 'CENTRO COMERCIAL', 'MADRE', NULL, 'MARIA', '', 'PEREZ', '', 5332555, '1952-10-12', 'VENEZOLANA', '1', '1', 'SAN JUAN', '', 'CASADO', 0, NULL, NULL, '', 'AVILA', 'SOUBLETTE', 'VENEZUELA', '26', 'CENTRO COMERCIAL', '0212-5742432', '0424-563629', 'ANGELADELCARMENC@GMAIL.COM', NULL, 1, 1, 1, 0, 'INSTAGRAN', 1, 1, 1, 'ARQUITECTO', '6', NULL, '6', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'JUAN', '02122553420', '7006', 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, '', 1, 3, '3-4-5', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'ROBERT', 'PEREZ', 3456982, '1952-10-12 00:00:00', 'VENEZOLANA', '', 'CASADO', 1, 1, 0, 1, 1, 'CHACAO', NULL, 'SOUBLETTE', 'VENEZUEL', '56', 'CENTRO COMERCIAL BELLO CAMPO', '02125732015', '04166333562', 'ANGELADELCARMEN@GMAIL.COM', 1, 1, 1, 0, NULL, NULL, 1, '', 'MAYORMINIMO', NULL, 'TIEMPOCOMPLETO', 'CHACAO', 13, 183, 'BELLO CAMPO', NULL, 'SOUBLETTE', 'VENEZUELA', '10', 'CENTRO COMERCIAL', '02125745520', '7046', 'LUIS MARQUEZ', '2745633', '7040', 'AMBOS', 0, NULL, 'RUTACHACAO', '', 0, 3, NULL, NULL, NULL, 'ALQUILADA', '', 'N', NULL, NULL, 9, 12, 17, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '1', NULL, 0, 0, 0, 'HONGOS Y ANTIBIOTICOS', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '1', NULL, 1, 0, 0, 1, NULL, 1, 1, 1, 0, '', 'LUIS PEREZ', '0212-9880322', 'TIO', 'MARTA SANCHEZ', '0212-5785620', 'TIA', '', 0, '0000-00-00', 0, 5, 'A', 1, 0, 0, 0, '2016-06-30 14:55:58', NULL, NULL, 'TRABAJADORINDEPENEDIENTE', 5, 5, 0, 0, 0, 1, 1, '1', '20', '5', '5', 4, NULL, NULL, 1);
INSERT INTO `inscripcion` (`id_inscripcion`, `Residente`, `GradoACursar`, `GradoActual`, `SeccionACursar`, `TurnoACursar`, `DocenteAsignado`, `ElAlumnoEstudiaActualmente`, `ElAlumnoCursoElAnterior`, `ElAlumnoRepiteGrado`, `GradoRepetido`, `UnidadEducativaDeProcedencia`, `NombreDeLaInstitucion`, `EstadoInstitucion`, `MunicipioInstitucion`, `MateriaPendiente`, `EspecifiqueCualesMateriasEstanPendientes`, `UniDePrefJuanDio`, `UniDePrefAndres`, `UniDePrefCarlos`, `RazonSocioeco`, `RazonCambioResi`, `RazonNoAdapta`, `RazonOtra`, `PrimerNombreDelAlumno`, `SegundoNombreDelAlumno`, `PrimerApellidoDelAlumno`, `SegundoApellidoDelAlumno`, `CedulaDeIdentidadDelAlumnoOCedulaEscolar`, `FechaDeNacimientoDelAlumno`, `SexoDelAlumno`, `NacionalidadDelAlumno`, `PaisDeNacimientoDelAlumno`, `EstadoDondeNacioElAlumno`, `MunicipioDondeNacioElAlumno`, `ParroquiaOSectorDondeNacioElAlumno`, `EstadoDondeResideElAlumno`, `MunicipioDondeResideElAlumno`, `UrbanizacionOSectorDondeResideElAlumno`, `CalleOAvenidaDondeResideElAlumno`, `CasaOEdificioDondeResideElAlumno`, `PisoOPlantaDondeResideElAlumno`, `NumeroDeCasaOApartamentoDondeResideElAlumno`, `PuntoDeReferenciaCercanoAlDomicilioDelAlumno`, `ParentescoConElAlumno`, `OtroParentescoConElAlumno`, `PrimerNombreDelRepresentante`, `SegundoNombreDelRepresentante`, `PrimerApellidoDelRepresentante`, `SegundoApellidoDelRepresentante`, `CedulaDeIdentidadDelRepresentante`, `FechaDeNacimientoDelRepresentante`, `NacionalidadDelRepresentante`, `EstadoDondeNacioElRepresentante`, `MunicipioDondeNacioElRepresentante`, `ParroquiaDondeNacioElRepresentante`, `PaisDeNacimientoDelRepresentante`, `EstadoCivilDelRepresentante`, `RepresentanteMismaDireAlu`, `EstadoDondeResideElRepresentante`, `MunicipioDondeResideElRepresentante`, `UrbanizacionOSectorDondeResideElRepresentante`, `CalleOAvenidaDondeResideElRepresentante`, `CasaOEdificioDondeResideElRepresentante`, `PisoDondeResideElRepresentante`, `NumeroOApartamentoDondeResideElRepresentante`, `PuntoDeReferenciaCercanoAlDomicilioDelRepresentante`, `TelefonoDeHabitacionDelRepresentante`, `TelefonoCelularDelRepresentante`, `CorreoElectronicoDelRepresentante`, `UsoDeRedesSociales`, `RedSocialRepreFacebook`, `RedSocialRepreTwitter`, `RedSocialRepreWhatsapp`, `RedSocialRepreOtra`, `EspecifiqueQueOtrasRedesSocialesUsaElRepresentante`, `TrabajaActualmente`, `TrabajaDentroChacao`, `TrabajaEnAlcaldia`, `ProfesionUOcupacionDelRepresentante`, `IngresoMensualDelRepresentante`, `EscalaDeIngresoDelRepresentante`, `OtrosIngresosDentroDeSuGrupoFamiliar`, `EscalaDeIngresosDelGrupoFamiliar`, `TipoDeJornadaLaboralDelRepresentante`, `NombreDeLaEmpresaUOrganismoDondeTrabajaElRepresentante`, `EstadoDondeSeUbicaElTrabajoDelRepresentante`, `MunicipioDondeTrabajaElRepresentante`, `UrbanizaOSectorDondeSeUbicaElTrabajoDelRepresentante`, `CalleOAvenidaDondeSeUbicaElTrabajoDelRepresentante`, `EdificioOCasaDondeTrabajaElRepresentante`, `PisoDondeSeUbicaElTrabajoDelRepresentante`, `OficinaNumeroOApartamentoDondeTrabajaElRepresentante`, `TelefonoDelTrabajoActualDelRepresentante`, `ExtensionTelefonicaParaContactarAlRepresentante`, `PersonaContactoEnElTrabajoDelRepresentante`, `TelefonoDeLaPersonaContactoDelTrabajoDelRepresentante`, `ExtensionDeLaPersonaContactoDelTrabajoDelRepresentante`, `ElRepresentanteTieneAlgunaDiversidadFuncional`, `RepreDiversidadMotora`, `RepreDiversidadVisual`, `RepreDiversidadAuditiva`, `RepreDiversidadNeurologica`, `RepreDiversidadLenguaje`, `RepreDiversidadOtra`, `EspecificaRepreDiversidadOtra`, `ElRepresentanteTieneOtrosHijosEstudiandoChacao`, `HijosEstudianGuanche`, `CantidadHijosEstudianGuanche`, `GradosHijosEstudianGuanche`, `HijosEstudianAndresBello`, `CantidadHijosEstudianAndresBello`, `GradosHijosEstudianAndresBello`, `HijosEstudianCarlosSoublette`, `CantidadHijosEstudianCarlosSoublette`, `GradosHijosEstudianCarlosSoublette`, `LaMadreVive`, `NombreDeLaMadre`, `ApellidosDeLaMadre`, `CedulaDeIdentidadDeLaMadre`, `FechaDeNacimientoDeLaMadre`, `NacionalidadMadre`, `PaisDeNacimientoDeLaMadre`, `EstadoCivilMadre`, `EstadoDondeNacioLaMadre`, `MunicipioDondeNacioLaMadre`, `MadreMismaResiAlu`, `EstadoDondeResideLaMadre`, `MunicipioDondeResideLaMadre`, `UrbanizacionOSectorDondeResideLaMadre`, `CasaOEdificioDondeResideLaMadre`, `PisoDondeResideLaMadre`, `NumeroOApartamentoDondeResideLaMadre`, `PuntoDeReferenciaCercanoAlDomiclioDeLaMadre`, `TelefonoDeHabitacionDeLaMadre`, `TelefonoCelularDeLaMadre`, `CorreoElectronicoDeLaMadre`, `RedSocialMadreFacebook`, `RedSocialMadreTwitter`, `RedSocialMadreWhatsapp`, `RedSocialMadreOtra`, `MadreTrabaja`, `ProfesionUOcupacionDeLaMadre`, `IngresoMensualMadre`, `EscalaDeIngresoMadre`, `TipoDeJornadaLaboralMadre`, `NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre`, `EstadoDondeTrabajaLaMadre`, `MunicipioDondeTrabajaLaMadre`, `UrbanizacionOSectorDondeTrabajaLaMadre`, `EdificioOCasaDondeTrabajaLaMadre`, `PisoDondeTrabajaLaMadre`, `NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre`, `PuntoDeReferenciaCercanoAlTrabajoDeLaMadre`, `TelefonoDelLugarDelTrabajodeLaMadre`, `ExtensionTelefonicaParaContactarALaMadre`, `PersonaContactoEnElTrabajoDeLaMadre`, `TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre`, `ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre`, `ElPadreVive`, `NombreDelPadre`, `ApellidosDelPadre`, `CedulaDeIdentidadDelPadre`, `FechaDeNacimientoDelPadre`, `NacionalidadDelPadre`, `PaisDondeNacioElPadre`, `EstadoCivilDelPadre`, `EstadoDondeNacioElPadre`, `MunicipioDondeNacioElPadre`, `ElPadreViveEnElMismoLugarDeResidenciaDelAlumno`, `EstadoDondeResideElPadre`, `MunicipioDondeResideElPadre`, `UrbanizacionOSectorDondeResideElPadre`, `CalleOAvenidaDondeResideElPadre`, `CasaOEdificioDondeResideElPadre`, `PisoDondeResideElPadre`, `NumeroDeCasaOApartamentoDondeResideElPadre`, `PuntoDeReferenciaCercanoAlDomicilioDelPadre`, `TelefonoDeHabitacionDelPadre`, `TelefonoCelularDelPadre`, `CorreoElectronicoDelPadre`, `RedSocialPadreFacebook`, `RedSocialPadreTwitter`, `RedSocialPadreWhatsapp`, `RedSocialPadreOtra`, `RedesSocialesQueUsaElPadre`, `EspecifiqueQueOtrasRedesSocialesUsaElPadre`, `ElPadreTrabajaActualmente`, `ProfesionUOcupacionDelPadre`, `IngresoMensualDelPadre`, `EscalaDeIngresosDelPadre`, `TipoDeJornadaLaboralDelPadre`, `NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre`, `EstadoDondeTrabajaElPadre`, `MunicipioDondeTrabajaElPadre`, `UrbanizacionOSectorDondeTrabajaElPadre`, `CalleOAvenidaDondeTrabajaElPadre`, `EdificioOCasaDondeTrabajaElPadre`, `PisoDondeTrabajaElPadre`, `OficinaCasaOApartamentoDondeTrabajaElPadre`, `PuntoDeReferenciaCercanoAlTrabajoDelPadre`, `TelefonoDelLugarDeTrabajotrabajoDelPadre`, `ExtensionTelefonicaDeContactoDelPadre`, `PersonaContactoEnElTrabajoDelPadre`, `TelefonoDeLaPersonaContactoEnElTrabajoDelPadre`, `ExtensionDeLaPersonaContactoEnElTrabajodelPadre`, `ElAlumnoViveCon`, `ElAlumnoEstaBecado`, `EspecifiqueElTipoDeBecaDelAlumno`, `MedioDeTrasladoAlPlantel`, `EspecifiqueQueOtroMedioDeTransporteUsaElAlumno`, `ElAlumnoSeRetiraSoloDelPlantel`, `NumeroDeHermanos`, `HermanosEstudianEnUnidadesEducativasMunicipales`, `GradosQueCursanLosHermanos`, `UnidadEducativaMunicipalDondeEstudianLosHermanos`, `DatosDeLaVivienda`, `OtraCondicionDeViviendaResideElAlumno`, `FactorRh`, `Estatura`, `Peso`, `TallaCamisa`, `TallaPantalon`, `TallaCalzado`, `TipoDeParto`, `PadeceAlgunaEnfermedad`, `TipoDeEnfermedadQuePadeceElAlumno`, `ElAlumnoTieneAlgunaDiversidadFuncional`, `aluDiversidadMotora`, `aluDiversidadVisual`, `aluDiversidadAuditiva`, `aluDiversidadNeurologica`, `aluDiversidadLenguaje`, `aluDiversidadOtra`, `OtroTipoDiversidad`, `ElAlumnoHaSidoOperado`, `EspecifiqueTipoOperacion`, `ElAlumnoEsAlergico`, `TipoDeAlergias`, `aluAlergiMedicina`, `aluAlergiAlimento`, `aluAlergiOtro`, `OtroTipoDeAlergiasTieneElAlumno`, `RegimenEspecialDeAlimentacionOTratamiento`, `RegimenAlimenticio`, `aluVacunaNinguna`, `aluVacunaBCG`, `aluVacunaTriple`, `aluVacunaSarampion`, `aluVacunaMeningitis`, `aluVacunaAntigripal`, `aluVacunaHepatitis`, `aluVacunaHepatitisB`, `aluVacunaNeumococo`, `aluVacunaOtras`, `OtrasVacunasCuentaElAlumno`, `AluEnfermedadNinguna`, `AluEnfermedadSarampion`, `AluEnfermedadRubeola`, `AluEnfermedadLechina`, `AluEnfermedadTosferina`, `AluEnfermedadHepatitis`, `AluEnfermedadDengue`, `OtrasEnfermedades`, `ElAlumnoEsCatolico`, `HaCumplidoConAlgunoDeLosSiguientesSacramentos`, `aluBautizo`, `aluComunion`, `aluConfirmacion`, `RealizaAlgunaActividadEspecial`, `ActividadesEspecialesQueRealizaElAlumno`, `aluActiDeportiva`, `aluActiAcademica`, `aluActiCultural`, `aluActiOtra`, `EspecifiqueQueOtrasActividadesEspecialesRealizaElAlumno`, `NombreYApellidoDelContactoDeEmergencia1`, `TelefonoDelContactoDeEmergencia1`, `ParentescoDelContactoDeEmergencia1ConElAlumno`, `NombreYApellidoDelContactoDeEmergencia2`, `TelefonoDelContactoDeEmergencia2`, `ParentescoDelContactoDeEmergencia2ConElAlumno`, `Observaciones`, `IDEscuelaAsignada`, `FechaAsignacion`, `Puntaje`, `MiembrosFamilia`, `GrupoSanguineo`, `CuposASolicitar`, `PartoMultiple`, `PosicionParto`, `StatusCenso`, `FechaSolicitud`, `TipoRelacionLaboralRepresentante`, `TipoDeRelacionLaboralDeLaMadre`, `TipoDeRelacionLaboralDelPadre`, `SectorDondeResideElAlumno`, `SectorDondeResideElRepresentante`, `aluSacramentoNinguno`, `aluActiDeportivaNinguna`, `id_especialista`, `registro_activo`, `id_escuela`, `estatura_metros`, `peso_kilos`, `estatura_centimetros`, `peso_gramos`, `DependenciaAlcaldia`, `repreNombreFoto`, `aluNombreFoto`, `usuarioInscribe`) VALUES
(26, 1, 4, 3, 16, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'CARLOS ', 'JOSE', 'GARCIA', 'GUDIÑO ', '10814446334', '2008-12-12', 'MASCULINO', 'VENEZOLANA', '', 13, 183, 'CHACAO', NULL, NULL, '', 'PEDRO MATIAS REYES ', 'TOÑA', '301', '301', '', 'PADRE', NULL, 'CARLOS', 'LUIS', 'GARCIA', 'POVEA', 14446334, '1979-08-06', 'VENEZOLANA', '1', '1', 'SAN JUAN ', '', 'SOLTERO', 0, NULL, NULL, '', 'PEDRO MATIAS REYES ', 'TOÑA', '301', '301', 'AL FRENTE DE LA PANADERÍA ', '0212-2635248', '0424-1268442', 'POVEA.CARLOS@GMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 1, 'ADMINISTRADOR', '4', NULL, '3', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'ANA MARISELA TORRES', '02122638874', '7123', 1, 0, 0, 0, 0, 0, 1, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PUBLICO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 8, 12, 13, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '1', NULL, 1, 1, 1, 0, NULL, 0, 0, 0, 0, '', 'LUISA GUDIÑO', '0212-2635874', 'TIA', 'ISABEL YANEZ', '0212-2635842', 'HERMANA', '', 0, '0000-00-00', 0, 0, 'A', 1, 1, 1, 0, '2016-07-07 18:38:06', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, '1', '12', '4', '5', 16, NULL, NULL, 1),
(27, 0, 8, 7, 8, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'ELIER ', 'GABRIEL', 'PAREDES', 'ROMAN', '10616996191', '2006-04-13', 'MASCULINO', 'VENEZOLANA', '', 1, 1, 'EL VALLE', 1, 1, 'CARLOS DELGADO CHALBAUD', 'EL MANGO', 'EL BUCARAL ', '4', '4C', '', 'MADRE', NULL, 'PRUEBA', 'DESIREE', 'ESPARRAGOZA', 'ROMAN', 16996191, '0000-00-00', 'VENEZOLANA', '17', '231', 'CUMANACOA', '', 'SOLTERO', 0, 1, 1, 'CARLOS DELGADO CHALBAUD', 'EL MANGO', 'EL BUCARAL ', '4', '4C', '', '0212-4825462', '0414-9301164', 'FRANCIS.ESPARRAGOZA@GMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 1, 'PROFESORA', '1', NULL, '1', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'ORIANA GUSTUTI', '04142653645', '7000', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'REPRESENTANTE', 0, NULL, 'PRIVADO', '', 0, 2, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 11, 12, 22, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, 1, 1, 1, 0, 0, 1, '', '1', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MAIRELIS BOLIVAR', '0424-3187935', 'TIA', 'FRANFLIN ESPARRAGOZA', '0414-9253642', 'TIO', '', 0, '0000-00-00', 0, 4, 'A', 1, 0, 0, 0, '2016-07-11 14:31:35', NULL, NULL, NULL, 1, 1, 1, 0, 0, 1, 1, '1', '36', '30', '0', 16, NULL, NULL, 1),
(28, 1, 5, 4, 5, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'RODOLFO ', '', 'PEREZ ', '', '11011231666', '2010-09-14', 'MASCULINO', 'VENEZOLANA', '', 1, 1, '', NULL, NULL, '', '5TA AVENIDA ', 'VULCANICA ', '1', '550', '', 'MADRE', NULL, 'PRUEBA ORIANA ', '', 'GUSTUTI ', '', 11231666, '1974-09-14', 'VENEZOLANA', '13', NULL, 'CHACAO', '', 'CASADO', 0, NULL, NULL, '', '5TA AVENIDA ', 'VULCANICA ', '', '550', '', '0212-4145262', '0414-2800397', 'ORIANAGUSTUTI@GMAIL.COM', NULL, 1, 1, 1, 1, '', 1, 1, 1, 'DOCENTE ', '3', NULL, '1', NULL, 'MEDIO-TIEMPO', '', NULL, NULL, '', '', '', '', '', '', '', 'ANA MARIA ', '02122845050', '7054', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'PEDRO ', 'PEREZ ', 12583000, '1974-09-14 00:00:00', 'VENEZOLANA', '', 'CASADO', 22, 330, 0, 13, 183, '', NULL, 'ESMERALDA ', '5', '58', '', '02122866666', '04128546262', 'PEDROPEREZ@HOTMAI.COM', 1, 1, 1, 1, NULL, NULL, 1, 'HERRERO ', 'MINIMO', NULL, 'TIEMPOCOMPLETO', 'FERRETERIA MACARACUAY ', 1, 1, '', NULL, '', '3 ', '35', '', '02125585962', '47', 'KARLA ', '02125567447', '48', 'AMBOS', 0, NULL, 'PUBLICO', '', 1, 2, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 7, 8, 15, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 1, 'AMIGDALITIS ', '1', NULL, 0, 0, 0, 'DESLER ', 1, 'SIN GLUTEN ', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, 1, 0, 0, '', '1', NULL, 1, 0, 0, 1, NULL, 1, 0, 0, 0, '', 'MARIA DELCARMEN PEREZ ', '0212-4852442', 'TIA ', 'SUSANA CARMEN ', '0414-2255665', 'PRIMA ', '', 0, '0000-00-00', 0, 5, 'A', 1, 1, 1, 0, '2016-07-11 14:45:21', NULL, NULL, NULL, 11, 11, 0, 0, 0, 1, 2, '1', '27', '0', '0', 16, NULL, NULL, 1),
(29, 1, 10, 9, 22, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'PEDRITO', 'RICHAR', 'RODRIGUEZ', 'GARCIA', '1043225618', '2004-08-26', 'MASCULINO', 'VENEZOLANA', '', 1, 1, 'SUCRE', NULL, NULL, '', 'AVENIDA PRINCIPAL LA CASTELLANA', 'CASA 36', 'PISO1', 'SN', '', 'MADRE', NULL, 'PETRA', 'CLEOTILDE', 'GARCIA', 'MERCADO', 3225618, '1978-03-30', 'VENEZOLANA', '1', '1', 'EL RECREO', '', 'CASADO', 0, NULL, NULL, '', 'AVENIDA PRINCIPAL LA CASTELLANA', 'CASA 36', 'PISO1', 'SN', 'MERCADO LUVEBRAS', '0212-7538763', '0416-6375655', 'PETRACLEO@GMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 0, 0, 'COSTURERA', '1', NULL, '6', NULL, 'TIEMPO-COMPLETO', 'TRILAX', 1, 1, 'BELLO MONTE', 'AVENIDA PRINCIPAL', 'EDIFICIO TRILAX', 'PISO3', '76', '02124876318', '126', 'FIDEL CASTRO', '02123712643', '456', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'PEDRO ', 'RODRIGUEZ', 4815999, '1978-03-30 00:00:00', 'VENEZOLANA', '', 'CASADO', 7, 71, 0, 1, 1, 'LA FLORIDA', NULL, 'EDIFICIO PALERMO', '6', '67', 'AL LADO DEL PARQUE LA FLORIDA', '02126935590', '04166286109', 'PDRORO@GMAIL.COM', 1, 1, 1, 0, NULL, NULL, 1, 'CARPINTERO', 'MINIMO', NULL, 'TIEMPOCOMPLETO', 'CARPINTERIA SEMECA', 1, 1, 'CATIA', NULL, 'EDIFIO SEMECO', 'PB', '27', 'MERCADO CATIA', '02129932861', '243', 'LAUREANO MARQUE', '02129539927', '789', 'AMBOS', 1, NULL, 'RUTACHACAO', '', 0, 3, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 9, 12, 19, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, 1, 0, 0, 0, 0, 1, '', '1', NULL, 1, 1, 0, 0, NULL, 0, 0, 0, 0, '', 'CASIMIRA GARCIA', '0212-2345567', 'TIA', 'TEOFILO RODRIGUES', '0212-6548907', 'TIO', '', 0, '0000-00-00', 0, 0, 'O', 1, 0, 0, 0, '2016-07-11 15:05:36', NULL, NULL, 'TRABAJADORDEPENDIENTE', 3, 3, 0, 0, 0, 1, 2, '1', '33', '40', '5', 1, NULL, NULL, 1),
(30, 1, 8, 7, 8, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'CAMILA', '', 'GONZALEZ', 'ANGULO', '1076821351', '2007-05-17', 'FEMENINO', 'VENEZOLANA', '', 1, 1, '', NULL, NULL, '', 'CALLE LOS NISPERO', 'LA FE', '10', '1-55', '', 'MADRE', NULL, 'PRUEBA', 'NAYI', 'ANGULO', 'SANCHEZ', 6821351, '1979-04-03', 'VENEZOLANA', '1', '1', 'EL RECREO', '', 'CASADO', 0, NULL, NULL, '', 'CALLE LOS NISPERO', 'LA FE', '10', '1-55', '', '0212-5891567', '0416-3075898', 'JUAR@HOTMAIL.COM', NULL, 1, 0, 0, 0, '', 1, 1, 0, '', '1', NULL, '4', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'RICARDO', 'GONZALEZ', 13584140, '1979-04-03 00:00:00', 'VENEZOLANA', '', 'CASADO', 1, 1, 0, 1, 1, '', NULL, 'LA FE', '15', '1-5', '', '02125842206', '', 'RICAR@GMAIL.COM', 1, 0, 0, 0, NULL, NULL, 1, '', 'MAYORMINIMO', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 1, NULL, 'PUBLICO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 6, 12, 19, 'CESAREA', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, 1, 0, 1, 0, 0, 0, '', '1', NULL, 1, 0, 0, 1, NULL, 0, 0, 1, 0, '', 'AMBAR PEREZ', '0212-5876025', 'TIA ', 'MANUEL PEREZ', '0212-5896471', 'TIO', '', 0, '0000-00-00', 0, 0, 'O', 1, 0, 0, 0, '2016-07-11 15:17:03', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 3, '1', '25', '38', '0', 1, NULL, NULL, 1),
(31, 1, 4, 3, 4, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'PRUEBA ', 'CARLOS', 'GARCIA ', 'POVEA', '11314446334', '2013-08-06', 'MASCULINO', 'VENEZOLANA', '', 1, NULL, 'SAN JUAN ', NULL, NULL, '', 'PEDRO MATIAS REYRES ', 'TOÑA', '', '15', '', 'PADRE', NULL, 'PRUEBA ', 'CARLOS LUIS ', 'FGARCIA ', 'POVEA', 14446334, '1979-08-06', 'VENEZOLANA', '1', '1', 'SAN JUAN', '', 'SOLTERO', 0, NULL, NULL, '', 'PEDRO MATIAS REYRES ', 'TOÑA', '', '15', '', '0212-9057047', '0424-1268442', 'CONTACTOEDUCACIONCHACAO@GMAIL.COM', NULL, 1, 0, 1, 0, '', 1, 1, 1, 'ADMINISTRADOR ', '3', NULL, '3', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'MARCELA YANEZ', '02129057123', '7123', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'N', NULL, NULL, 8, 10, 8, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '1', NULL, 1, 1, 0, 0, NULL, 0, 0, 0, 0, '', 'PEDRO MENDEZ', '0212-9057123', 'TIO ', 'PEDRO MENDEZ', '0212-9057123', 'TIO ', '', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-07-11 15:18:58', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 3, '1', '12', '4', '5', 16, NULL, NULL, 1),
(32, 0, 5, 4, 17, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'EDUARDO ', '', 'CALCAÑO ', '', '11012448552', '2010-09-15', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', 13, 182, 'LOS ALTOS ', 'AVILA ', 'SANTA CLARA ', '', '555', '', 'MADRE', NULL, 'PRUEBA ORIANA ', '', 'CALCAÑO ', '', 12448552, '0000-00-00', 'VENEZOLANA', '22', '330', '', '', 'SOLTERO', 0, 13, 182, 'LOS ALTOS ', 'AVILA ', 'SANTA CLARA ', '', '555', '', '0212-4457676', '0414-2805555', 'JOSEFINACALCANO@GMAIL.COMN', NULL, 1, 1, 1, 1, '', 1, 0, 0, 'COSTURERA ', '6', NULL, NULL, NULL, 'TIEMPO-COMPLETO', 'ALTIBAJO ', 1, 1, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'MADRE', 0, NULL, 'PUBLICO', '', 1, 0, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 7, 8, 5, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, '', 0, 0, 0, 0, 0, 0, 1, '', '1', NULL, 1, 0, 0, 1, NULL, 1, 0, 1, 0, 'FUTBOL', 'RAFAEL LOPEZ ', '0212-5544885', 'TIO ', 'DARIO AZUAJE ', '0412-5589662', 'PRIMO ', '', 0, '0000-00-00', 0, 2, 'A', 1, 0, 0, 0, '2016-07-11 15:19:24', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 2, '1', '28', '35', '0', 1, NULL, NULL, 1),
(33, 1, 11, 10, 11, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'DIEGO', 'ALEJANDRO', 'BLANCO', 'REYES', '1024766512', '2002-10-19', 'MASCULINO', 'VENEZOLANA', '', 13, 174, 'PETARE', NULL, NULL, '', 'CALLEJON POLEO', 'NR0 04', 'PLANTA BAJA', '04', 'CERCA DE LA ESCUELA', 'MADRE', NULL, 'MARIA', 'JOSEFINA', 'CORNIVELL', 'JUSTO', 4766512, '0000-00-00', 'VENEZOLANA', '1', '1', 'LA CANDELARIA', '', 'CONCUBINATO', 0, NULL, NULL, '', 'CALLEJON POLEO', 'NR0 04', 'PLANTA BAJA', '04', 'CERCA DE LA ESCUELA', '0212-2670606', '0412-7036191', 'FCORNIVELL@GMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 0, 'OBRERA', '1', NULL, '1', NULL, 'TIEMPO-COMPLETO', 'XEROX', 13, 183, 'BELLO CAMPO', 'LIBERTADOR', 'XEROX', '6', '06', '02122650798', '', 'FREDDY CORNIVELL', '04127036191', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'MADRE', 0, NULL, 'PUBLICO', '', 1, 1, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 19, 32, 26, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'PEDRO BLANCO', '0212-2663333', 'TIO', 'CARLOS GARCIA', '0212-2670600', 'VECINO', '', 0, '0000-00-00', 0, 2, 'B', 1, 0, 0, 0, '2016-07-11 15:19:49', NULL, NULL, NULL, 2, 2, 0, 0, 0, 1, 2, '1', '70', '81', '0', 1, NULL, NULL, 1),
(34, 1, 5, 4, 5, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'NORA', '', 'BUSTILLO', '', '1785689741', '1978-07-18', 'FEMENINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'CALLE LA ALAMEDA', 'EDIF TRUEQUE', '', '5-B', '', 'PADRE', NULL, 'PRUEBA', 'RICARDO', 'PONCE', 'VILLARROEL', 5689741, '1975-07-15', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, NULL, NULL, '', 'CALLE LA ALAMEDA', 'EDIF TRUEQUE', '', '5-B', '', '0212-8569745', '0416-8523697', 'NAYI.ANGULO@GMAIL.COM', NULL, 1, 0, 0, 0, '', 1, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'MADRE', 0, NULL, 'PUBLICO', '', 0, 0, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 7, 8, 19, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, '', 0, 1, 0, 0, 0, 0, 0, '', '1', NULL, 1, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'ANGELICA RUIZ', '0212-5896314', 'ABUELA', 'PEDRO BELLO', '0416-8754123', 'TIO', '', 0, '0000-00-00', 0, 0, 'O', 1, 0, 0, 0, '2016-07-11 15:28:12', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 3, '1', '29', '35', '0', 1, NULL, NULL, 1),
(35, 0, 11, 11, 27, 1, 1, 0, 0, 1, '11', NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'WILKEIVER', 'JOSE', 'CORNIVELL', 'JUSTO', '1024766512', '2002-07-19', 'MASCULINO', 'VENEZOLANA', '', 1, NULL, 'LA CANDELARIA', 1, 1, 'LAS ACACIAS', 'MINERVA', 'LAS 3 ROSAS', '2', '06', 'AL LADO DE LA UCV', 'PADRE', NULL, 'FREDDY', 'ALCIDES', 'CORNIVELL', 'FLORES', 4766512, '1955-11-26', 'VENEZOLANA', '1', '1', 'LA CANDELARIA', '', 'SOLTERO', 0, 1, 1, 'LAS ACACIAS', 'MINERVA', 'LAS 3 ROSAS', '2', '06', 'AL LADO DE LA UCV', '0212-6939150', '0412-7036191', 'FCORNIVELL@GMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 1, 'DOCENTE', '1', NULL, '1', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'CARLOS GARCIA', '02129057123', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 1, 'MARY JANNETE', 'JUSTO MANZANO', 10115226, '1968-10-25 00:00:00', 'VENEZOLANA', '', 'SOLTERO', 1, 1, 0, 1, 1, 'EL CAFETAL', 'NRO 04', 'PLANTA BAJ', '01', '', '02124221638', '04127358618', 'FCORNIVELL@GMAIL.COM', 1, 1, 1, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PUBLICO', '', 1, 1, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 17, 16, 22, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, '', 0, 1, 1, 1, 0, 0, 0, '', '0', NULL, 0, 0, 0, 1, NULL, 1, 0, 0, 0, '', 'JOSE CORNIVELL', '0414-6585555', 'TIO', 'PEDRO GUARATE', '0212-2678888', 'VECINO', '', 0, '0000-00-00', 0, 3, 'B', 1, 0, 0, 0, '2016-07-11 15:38:36', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 2, '1', '48', '60', '0', 16, NULL, NULL, 1),
(36, 0, 3, 2, 3, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'ADOLFO', '', 'GUDIÑO', '', '11198654789', '2011-10-28', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', 1, 1, 'URBANIZACION EL ROSAL', 'CALLE  URQUIA', 'CASA 18', '', '18', '', 'PADRE', NULL, 'EDGAR', '', 'ROMERO', '', 98654789, '1979-11-30', 'VENEZOLANA', NULL, NULL, '', '', 'SOLTERO', 0, 1, 1, 'URBANIZACION EL ROSAL', 'CALLE  URQUIA', 'CASA 18', '', '18', '', '0212-5896314', '0424-5871596', 'NAYI.ANGULO@GMAIL.COM', NULL, 0, 1, 0, 0, '', 1, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 1, NULL, 'RUTACHACAO', '', 0, 0, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 9, 10, 21, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 1, 'ADENOIDES', '1', NULL, 0, 0, 0, '', 1, 'ANTIALERGICO', 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, '', 0, 0, 0, 1, 0, 0, 0, '', '1', NULL, 1, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'LUISA BELLO', '0212-5896413', 'TIO', 'MARGARITA VILLA', '0416-8795234', 'ABUELA ', '', 0, '0000-00-00', 0, 0, 'O', 1, 0, 0, 0, '2016-07-11 15:39:11', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 3, '1', '31', '45', '0', 1, NULL, NULL, 1),
(37, 1, 6, 5, 6, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'JOSE AUGUSTO ', '', 'MELERO ', '', '1088145555', '2008-05-25', 'MASCULINO', 'VENEZOLANA', '', 7, 73, '', NULL, NULL, '', 'LA VEREDA ', 'LA ROSA ', 'PB ', '25', '', 'PADRE', NULL, 'LEONARDO ', '', 'MELERO ', '', 8145555, '1972-04-14', 'VENEZOLANA', '10', '126', '', '', 'DIVORCIADO', 0, NULL, NULL, '', 'LA VEREDA ', 'LA ROSA ', '', '25', '', '0212-5584558', '0414-6652882', 'LEONARDOMELERO@GMAIL.COM', NULL, 1, 1, 1, 1, '', 1, 0, 0, 'CARPINTERO ', '1', NULL, NULL, NULL, 'TIEMPO-COMPLETO', 'LOS MEJORES MUEBLES ', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 1, 'JOSEFINA ', 'PUENTE ', 5584949, '1970-01-31 00:00:00', 'VENEZOLANA', '', 'DIVORCIADO', NULL, NULL, 0, 7, 71, '', 'LAS FLORES', '', '87', '', '02126658585', '', 'JOSEFINAPUENTE@HOTMAIL.COM', 0, 1, 1, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 1, 0, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 8, 9, 3, 'NATURAL', '0', '', 1, 0, 0, 0, 0, 1, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 1, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MARIA JUAREZ ', '0212-5548585', 'CUÑADA ', 'JOSE JUAREZ ', '0414-6652525', 'SOBRINO ', '', 0, '0000-00-00', 0, 3, 'B', 1, 0, 0, 0, '2016-07-11 15:44:12', NULL, NULL, NULL, 4, 4, 0, 0, 0, 1, 2, '1', '30', '50', '0', 1, NULL, NULL, 1),
(38, 1, 8, 7, 20, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'FRANCIS', 'DESIREE', 'LOPEZ', '', '10618796253', '2006-05-12', 'FEMENINO', 'VENEZOLANA', '', 13, 183, 'CHACAO', NULL, NULL, '', 'EL MANGO', 'EL PEDREGAL', '3', '3C', '', 'MADRE', NULL, 'PRUEBA', 'LUCIA', 'PEREZ', 'LOPEZ', 18796253, '0000-00-00', 'VENEZOLANA', '1', '1', 'EL VALLE', '', 'SOLTERO', 0, NULL, NULL, '', 'EL MANGO', 'EL PEDREGAL', '3', '3C', '', '0212-4510870', '0414-2589633', 'LUCIAPEREZ@HOTMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 1, 'DOCTORA', '1', NULL, '1', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'LUIS MENESES', '02124516932', '7125', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'MADRE', 0, NULL, 'PRIVADO', '', 0, 2, NULL, NULL, NULL, 'PROPIA', '', 'N', NULL, NULL, 9, 10, 21, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, 1, 1, 1, 1, 1, 1, '', '1', NULL, 1, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'FRANKLIN MENESES', '0212-4515896', 'PRIMO', 'MARIA ESPARRAGOZA', '0414-9632645', 'TIA', '', 0, '0000-00-00', 0, 3, 'A', 1, 0, 0, 0, '2016-07-11 15:45:29', NULL, NULL, NULL, 1, 1, 0, 0, 0, 1, 1, '1', '33', '30', '0', 31, NULL, NULL, 1),
(39, 0, 7, 6, 7, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'PEDRO', '', 'HURTADO', '', '1655548632', '1965-11-10', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', 1, 274, 'SECTOR EL TUBAZO', 'CALLE LA MISERIA', 'EDIF MENESTERES', '', '7-C', '', 'MADRE', NULL, 'PRUEBA', '', 'CENTENO', '', 5548632, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'DIVORCIADO', 0, 1, 1, 'SECTOR EL TUBAZO', 'CALLE LA MISERIA', 'EDIF MENESTERES', '', '7-C', '', '0212-6587412', '0416-9853214', 'NAYI.ANGULO@GMAIL.COM', NULL, 0, 1, 0, 0, '', 1, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'MADRE', 1, NULL, 'RUTACHACAO', '', 1, 0, NULL, NULL, NULL, 'PROPIA', '', 'N', NULL, NULL, 9, 10, 21, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'LILI ACEVEDO', '0212-5698741', 'ABUELA', 'ROBERT CASANOVA', '0414-8743596', 'ABUELO', '', 0, '0000-00-00', 0, 0, 'O', 1, 0, 0, 0, '2016-07-11 15:47:08', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 3, '1', '34', '46', '0', 1, NULL, NULL, 1),
(40, 1, 7, 6, 7, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'FEDERICO ', '', 'OTERO ', '', '10712558965', '2007-09-05', 'MASCULINO', 'VENEZOLANA', '', 13, 183, '', NULL, NULL, '', 'LOS JARDINES ', 'EDIFICIO LOS JARDINES ', '', '3-B', '', 'MADRE', NULL, 'PRUEBA ORIANA ', '', 'GUSTUTI ', '', 12558965, '1974-09-19', 'VENEZOLANA', NULL, NULL, '', '', 'CASADO', 0, NULL, NULL, '', 'LOS JARDINES ', 'EDIFICIO LOS JARDINES ', '', '3-B', '', '0212-7542828', '0414-8859665', 'OGUSTUTI@GMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 0, 0, 'ADMINISTRADORA ', '1', NULL, NULL, NULL, 'TIEMPO-COMPLETO', 'ADMINISTRADORA LOS ARCOS ', 1, 1, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, '', 1, 0, '5TO', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'ANDRES ', 'OTERO ', 11474852, '1974-09-19 00:00:00', 'VENEZOLANA', '', 'CASADO', 1, 1, 0, 13, 183, 'CALLE LOS JARDINES ', NULL, 'EDIFICIO LOS JARDINES ', '3', '3-B', '', '02120212754', '04146689554', 'ANDRESOT@GMAIL.COM', 1, 1, 0, 0, NULL, NULL, 1, 'ADMINISTRADOR ', 'MAYORMINIMO', NULL, 'TIEMPOCOMPLETO', 'LOS ANDES ', 1, 1, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 1, NULL, 'PUBLICO', '', 1, 0, NULL, NULL, NULL, 'PROPIA', '', 'N', NULL, NULL, 9, 13, 13, 'CESAREA', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, '', 0, 0, 1, 1, 0, 0, 0, '', NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'ANA MARIA ', '0212-7545555', 'PRIMA ', 'LUISA FLORES ', '0414-5586662', 'PRIMO ', '', 0, '0000-00-00', 0, 0, 'B', 1, 0, 0, 0, '2016-07-11 16:24:40', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 2, '1', '33', '20', '0', 1, NULL, NULL, 1),
(41, 1, 7, 6, 7, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'CRISTIAN ', '', 'SANTOS ', '', '1065584545', '2006-10-12', 'MASCULINO', 'VENEZOLANA', '', 13, NULL, '', NULL, NULL, '', 'LAS PERLAS ', 'ARAURA ', 'PB ', '24', '', 'MADRE', NULL, 'PRUEBA ORIANA ', '', 'GUSTUTI ', '', 5584545, '0000-00-00', 'VENEZOLANA', '3', '24', '', '', 'VIUDO', 0, NULL, NULL, '', 'LAS PERLAS ', 'ARAURA ', '', '24', '', '0212-6655598', '0414-6659596', 'OGUSTUTI@GMAIL.COM', NULL, 1, 1, 1, 1, '', 1, 1, 0, '', '2', NULL, NULL, NULL, 'TIEMPO-COMPLETO', '', 1, 1, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'REPRESENTANTE', 1, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 9, 10, 13, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 1, 0, 0, 0, '', '1', NULL, 1, 0, 1, 1, NULL, 1, 0, 0, 0, 'NATACIÓN ', 'LILI RODRIGUEZ ', '0212-7486555', 'TIA ', 'CLAUDIA RODRIGUEZ ', '0414-6665885', 'PRIMA ', '', 0, '0000-00-00', 0, 2, 'AB', 1, 0, 0, 0, '2016-07-11 17:02:08', NULL, NULL, NULL, 7, 7, 0, 0, 0, 1, 2, '1', '34', '25', '0', 1, NULL, NULL, 1),
(42, 0, 9, 8, 9, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'MARIELBA', '', 'ESPARRAGOZA', '', '10425699987', '2004-11-03', 'FEMENINO', 'EXTRANJERA', '', NULL, NULL, '', 1, 1, 'LAS PALMAS', 'CALLE SUR 24', 'EDIF PLAN', 'PISO 7', '7-8', '', 'OTRO', 'ABUELA', 'PRUEBA', 'LOURDES', 'MENDOZA', '', 25699987, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'VIUDO', 0, 1, 1, 'LAS PALMAS', 'CALLE SUR 24', 'EDIF PLAN', '', '7-8', '', '0212-5896314', '0424-5897412', 'NAYI.ANGULO@GMAIL.COM', NULL, 0, 0, 1, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 1, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'REPRESENTANTE', 0, NULL, 'PUBLICO', '', 1, 0, NULL, NULL, NULL, 'ALOJADOS', '', 'P', NULL, NULL, 11, 12, 22, 'FORCEPS', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, 0, 1, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'EVANGELINA FLORES', '0212-4896521', 'MADRINA', 'HUMBERTO GARCIA', '0426-8952147', 'TIO', '', 0, '0000-00-00', 0, 0, 'O', 1, 0, 0, 0, '2016-07-11 18:04:10', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 3, '1', '45', '44', '0', 1, NULL, NULL, 1),
(43, 0, 2, 1, 2, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'PRUEBA', '', 'MORALES', '', '1069874587', '2006-10-10', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', 1, 1, 'LA FLORIDA', 'CALLE EL CARMEN', 'EDIFICIO DAIVER', '', '12-A', '', 'PADRE', NULL, 'PRUEBA', 'MANUEL', 'SANCHEZ', '', 9874587, '1956-07-09', 'EXTRANJERA', NULL, NULL, '', '', 'CONCUBINATO', 0, 1, 1, 'LA FLORIDA', 'CALLE EL CARMEN', 'EDIFICIO DAIVER', '', '12-A', '', '0212-5479652', '0416-874596', 'NAYI.ANGULO@GMAIL.COM', NULL, 1, 0, 0, 0, '', 1, 1, 1, '', '1', NULL, NULL, NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 1, 'CARMEN', 'MORALES', 6589654, '1962-04-02 00:00:00', 'VENEZOLANA', '', 'CASADO', NULL, NULL, 0, 1, 1, '', 'EDIFICIO D', '', '12-A', '', '02125698457', '', 'NAYI.ANGULO@GMAIL.COM', 0, 1, 0, 0, 1, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 0, NULL, 'PUBLICO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 5, 5, 19, 'PREMATU', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, '', 0, 1, 0, 1, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'FANNY YANEZ', '0212-5695412', 'MADRINA', 'FREDDY MUÑOZ', '0416-8745632', 'PADRINO', '', 0, '0000-00-00', 0, 0, 'O', 1, 0, 0, 0, '2016-07-11 19:28:24', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 3, '1', '45', '41', '0', 16, NULL, NULL, 1),
(44, 1, 4, 3, 4, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'JOSE', 'MANUEL', 'POLLO', '', '11015254856', '2010-05-21', 'MASCULINO', 'VENEZOLANA', '', 13, 183, 'CHACAO', NULL, NULL, '', 'LOS NIÑOS', 'LOS LIMONES', '12', '12B', '', 'MADRE', NULL, 'PRUEBA ', 'MARIA', 'POLLO', '', 15254856, '0000-00-00', 'VENEZOLANA', '1', '1', 'MONTALBAN', '', 'SOLTERO', 0, NULL, NULL, '', 'LOS NIÑOS', 'LOS LIMONES', '12', '12B', '', '0212-9378526', '0414-2567896', 'MARIA@HOTMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 1, 'ADMINISTRADORA', '1', NULL, '1', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'LUIS LOPEZ', '02124689632', '7000', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '0', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'MADRE', 0, NULL, 'PRIVADO', '', 0, 2, NULL, NULL, NULL, 'ALQUILADA', '', 'P', NULL, NULL, 7, 8, 15, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, 1, 1, 1, 1, 1, 1, '', '1', NULL, 1, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MAIRELIS BALVIDIESO', '0212-4561231', 'TIA', 'MANUEL POLLO', '0414-7896542', 'TIO', '', 0, '0000-00-00', 0, 4, 'O', 1, 0, 0, 0, '2016-07-11 19:39:10', NULL, NULL, NULL, 3, 3, 0, 0, 0, 1, 1, '1', '25', '10', '0', 8, NULL, NULL, 1),
(45, 0, 4, 3, 16, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'MARCOS ', '', 'GONZÁLEZ', '', '11015258963', '2010-01-25', 'MASCULINO', 'VENEZOLANA', '', 15, 205, 'LOPEZ', 1, 1, 'EL TORO', 'LAS BONITAS', 'EDIFICIO BELLO', '10', '10-1', '', 'PADRE', NULL, 'PRUEBA', 'MANUEL', 'GONZÁLEZ', '', 15258963, '1975-01-18', 'VENEZOLANA', '23', '331', 'TUCUPITA', '', 'CASADO', 0, 1, 1, 'EL TORO', 'LAS BONITAS', 'EDIFICIO BELLO', '10', '10-1', '', '0212-4569636', '0414-7896325', 'MANUEL_GONZALEZ@GMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 1, 'CONTADOR ', '1', NULL, '1', NULL, 'MEDIO-TIEMPO', '', NULL, NULL, '', '', '', '', '', '', '', 'PEDRO PEREZ ', '04146352514', '4125', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 0, NULL, 'PUBLICO', '', 0, 3, NULL, NULL, NULL, 'PROPIA-PAGANDO', '', 'P', NULL, NULL, 7, 8, 15, 'FORCEPS', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, 1, 1, 1, 1, 1, 1, '', '1', NULL, 1, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MANUEL MUNÑOZ', '0212-4567895', 'PRIMO', 'LUISA GONZALEZ ', '0414-5239652', 'TIA', '', 0, '0000-00-00', 0, 4, 'AB', 1, 0, 0, 0, '2016-07-11 20:31:35', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, '1', '25', '20', '0', 1, NULL, NULL, 1),
(46, 1, 8, 7, 8, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'DANIEL ', '', 'AMPARO ', '', '20511231666', '2005-09-12', 'MASCULINO', 'VENEZOLANA', '', 23, 333, '', NULL, NULL, '', 'PARROQUIA ', 'LOS ROSALES ', '', '001', '', 'MADRE', NULL, 'PRUEBA ORIANA ', '', 'GUSTUTI ', '', 11231666, '1969-09-14', 'VENEZOLANA', '1', '1', '', '', 'CASADO', 0, NULL, NULL, '', 'PARROQUIA ', 'LOS ROSALES ', '', '001', '', '0212-7633333', '0424-5966336', 'OGUSTUTI@GMAIL.COM', NULL, 1, 1, 1, 1, '', 1, 0, 0, 'INGENIERA ', '4', NULL, NULL, NULL, 'TIEMPO-COMPLETO', 'GOBERNACION ', 13, 174, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, '', 0, 0, '', 1, 0, '3ERO', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'RODOLFO ', 'AMPARO ', 6963258, '1969-09-14 00:00:00', 'VENEZOLANA', '', 'CASADO', 16, 213, 0, 13, 183, 'CHACAO ', NULL, 'LOS ROSALES ', '001', '001', '', '02122611586', '04245896336', 'RODOLFOAMPARO@GMAIL.COM', 1, 1, 1, 1, NULL, NULL, 1, 'OBRERO ', 'MAYORMINIMO', NULL, 'TIEMPOCOMPLETO', 'CONSTRUCTORA LA MEJOR ', 1, 1, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 1, NULL, 'PRIVADO', '', 0, 2, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 9, 12, 17, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '', 0, 0, 0, 1, 0, 1, 0, '', NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MARIANGELICA  TORRES ', '0212-5582569', 'TIA ', 'ROBERTO  AZPURUA ', '0414-5582536', 'ABUELO ', '', 0, '0000-00-00', 0, 3, 'B', 1, 1, 2, 0, '2016-07-11 20:41:21', NULL, NULL, 'TRABAJADORINDEPENEDIENTE', NULL, NULL, 0, 0, 0, 1, 2, '1', '27', '30', '0', 1, NULL, NULL, 1),
(47, 0, 5, 4, 5, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'MANUEL', 'JOSE', 'LOPEZ', 'NUÑEZ', '10914256425', '2009-05-12', 'MASCULINO', 'VENEZOLANA', '', 1, 1, 'MONTALBAN', 1, 1, 'EL BALNEARIO', 'LOS CATUCHES', 'EL LAUREL', '9', '9-C', '', 'MADRE', NULL, 'PRUEBA', 'FRANCELIS', 'NUÑEZ', '', 14256425, '1974-06-27', 'VENEZOLANA', '10', '132', 'EL BOSQUE', '', 'SOLTERO', 0, 1, 1, 'EL BALNEARIO', 'LOS CATUCHES', 'EL LAUREL', '9', '9-C', '', '0212-9567845', '0414-5897896', 'FRANCELIS25@GMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 1, '', '1', NULL, '1', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'MARIA BONILLA', '02124567896', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'MARCOS', 'LOPEZ', 15896123, '1974-06-27 00:00:00', 'VENEZOLANA', '', 'CASADO', 17, 237, 0, 1, 1, 'LOS MAMONES ', NULL, 'EL MAMON', '9', '9-C', '', '02124518963', '04142568596', 'MARCOS.LOPEZ@GMAIL.COM', 1, 1, 1, 0, NULL, NULL, 1, 'PROFESOR', 'MAYORMINIMO', NULL, 'MEDIOTIEMPO', 'UEM EL LIBERTADOR', 13, 183, 'CHACAO', NULL, 'EL LIBERTADOR', '01', '', '', '02124515896', '1020', 'MANUEL PEREZ', '', '', 'AMBOS', 0, NULL, 'PUBLICO', '', 0, 2, NULL, NULL, NULL, 'ALOJADOS', '', 'N', NULL, NULL, 8, 9, 16, 'CESAREA', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, 1, 1, 1, 1, 1, 1, '', '1', NULL, 1, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MARBELLA LOPEZ', '0414-3187935', 'TIA PATERNA', 'MIRIAN NUÑEZ ', '0414-5872636', 'TIA MATERNA', '', 0, '0000-00-00', 0, 4, 'AB', 1, 0, 0, 0, '2016-07-11 20:50:16', NULL, NULL, 'TRABAJADORDEPENDIENTE', NULL, NULL, 0, 0, 0, 1, 1, '1', '32', '25', '0', 3, NULL, NULL, 1),
(48, 0, 7, 7, 8, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'JOSE AUGUSTO ', '', 'BOLAÑO ', '', '1059654333', '2005-09-01', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', 1, 1, 'FLORALEJA ', 'FLORAL ', 'FLORAL 1 ', 'FLORAL 1 ', '000', '', 'OTRO', 'ABUELA', 'PRUEBA ORIANA ', '', 'GUSTUTI ', '', 9654333, '0000-00-00', 'VENEZOLANA', NULL, NULL, '', '', 'VIUDO', 0, 1, 1, 'FLORALEJA ', 'FLORAL ', 'FLORAL 1 ', '', '000', '', '0212-7543336', '0414-2366632', 'OGUSTUTI@GMAIL.COM', NULL, 1, 1, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'REPRESENTANTE', 0, NULL, 'PUBLICO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 10, 11, 11, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 1, 'RODILLA ', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 1, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'ROSAURA DIAZ', '0212-5584545', 'TIA ', 'AZUAJE DÍAZ ', '0416-8559666', 'PRIMO', '', 0, '0000-00-00', 0, 2, 'AB', 1, 0, 0, 0, '2016-07-11 20:57:40', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 2, '1', '28', '35', '0', 1, NULL, NULL, 1);
INSERT INTO `inscripcion` (`id_inscripcion`, `Residente`, `GradoACursar`, `GradoActual`, `SeccionACursar`, `TurnoACursar`, `DocenteAsignado`, `ElAlumnoEstudiaActualmente`, `ElAlumnoCursoElAnterior`, `ElAlumnoRepiteGrado`, `GradoRepetido`, `UnidadEducativaDeProcedencia`, `NombreDeLaInstitucion`, `EstadoInstitucion`, `MunicipioInstitucion`, `MateriaPendiente`, `EspecifiqueCualesMateriasEstanPendientes`, `UniDePrefJuanDio`, `UniDePrefAndres`, `UniDePrefCarlos`, `RazonSocioeco`, `RazonCambioResi`, `RazonNoAdapta`, `RazonOtra`, `PrimerNombreDelAlumno`, `SegundoNombreDelAlumno`, `PrimerApellidoDelAlumno`, `SegundoApellidoDelAlumno`, `CedulaDeIdentidadDelAlumnoOCedulaEscolar`, `FechaDeNacimientoDelAlumno`, `SexoDelAlumno`, `NacionalidadDelAlumno`, `PaisDeNacimientoDelAlumno`, `EstadoDondeNacioElAlumno`, `MunicipioDondeNacioElAlumno`, `ParroquiaOSectorDondeNacioElAlumno`, `EstadoDondeResideElAlumno`, `MunicipioDondeResideElAlumno`, `UrbanizacionOSectorDondeResideElAlumno`, `CalleOAvenidaDondeResideElAlumno`, `CasaOEdificioDondeResideElAlumno`, `PisoOPlantaDondeResideElAlumno`, `NumeroDeCasaOApartamentoDondeResideElAlumno`, `PuntoDeReferenciaCercanoAlDomicilioDelAlumno`, `ParentescoConElAlumno`, `OtroParentescoConElAlumno`, `PrimerNombreDelRepresentante`, `SegundoNombreDelRepresentante`, `PrimerApellidoDelRepresentante`, `SegundoApellidoDelRepresentante`, `CedulaDeIdentidadDelRepresentante`, `FechaDeNacimientoDelRepresentante`, `NacionalidadDelRepresentante`, `EstadoDondeNacioElRepresentante`, `MunicipioDondeNacioElRepresentante`, `ParroquiaDondeNacioElRepresentante`, `PaisDeNacimientoDelRepresentante`, `EstadoCivilDelRepresentante`, `RepresentanteMismaDireAlu`, `EstadoDondeResideElRepresentante`, `MunicipioDondeResideElRepresentante`, `UrbanizacionOSectorDondeResideElRepresentante`, `CalleOAvenidaDondeResideElRepresentante`, `CasaOEdificioDondeResideElRepresentante`, `PisoDondeResideElRepresentante`, `NumeroOApartamentoDondeResideElRepresentante`, `PuntoDeReferenciaCercanoAlDomicilioDelRepresentante`, `TelefonoDeHabitacionDelRepresentante`, `TelefonoCelularDelRepresentante`, `CorreoElectronicoDelRepresentante`, `UsoDeRedesSociales`, `RedSocialRepreFacebook`, `RedSocialRepreTwitter`, `RedSocialRepreWhatsapp`, `RedSocialRepreOtra`, `EspecifiqueQueOtrasRedesSocialesUsaElRepresentante`, `TrabajaActualmente`, `TrabajaDentroChacao`, `TrabajaEnAlcaldia`, `ProfesionUOcupacionDelRepresentante`, `IngresoMensualDelRepresentante`, `EscalaDeIngresoDelRepresentante`, `OtrosIngresosDentroDeSuGrupoFamiliar`, `EscalaDeIngresosDelGrupoFamiliar`, `TipoDeJornadaLaboralDelRepresentante`, `NombreDeLaEmpresaUOrganismoDondeTrabajaElRepresentante`, `EstadoDondeSeUbicaElTrabajoDelRepresentante`, `MunicipioDondeTrabajaElRepresentante`, `UrbanizaOSectorDondeSeUbicaElTrabajoDelRepresentante`, `CalleOAvenidaDondeSeUbicaElTrabajoDelRepresentante`, `EdificioOCasaDondeTrabajaElRepresentante`, `PisoDondeSeUbicaElTrabajoDelRepresentante`, `OficinaNumeroOApartamentoDondeTrabajaElRepresentante`, `TelefonoDelTrabajoActualDelRepresentante`, `ExtensionTelefonicaParaContactarAlRepresentante`, `PersonaContactoEnElTrabajoDelRepresentante`, `TelefonoDeLaPersonaContactoDelTrabajoDelRepresentante`, `ExtensionDeLaPersonaContactoDelTrabajoDelRepresentante`, `ElRepresentanteTieneAlgunaDiversidadFuncional`, `RepreDiversidadMotora`, `RepreDiversidadVisual`, `RepreDiversidadAuditiva`, `RepreDiversidadNeurologica`, `RepreDiversidadLenguaje`, `RepreDiversidadOtra`, `EspecificaRepreDiversidadOtra`, `ElRepresentanteTieneOtrosHijosEstudiandoChacao`, `HijosEstudianGuanche`, `CantidadHijosEstudianGuanche`, `GradosHijosEstudianGuanche`, `HijosEstudianAndresBello`, `CantidadHijosEstudianAndresBello`, `GradosHijosEstudianAndresBello`, `HijosEstudianCarlosSoublette`, `CantidadHijosEstudianCarlosSoublette`, `GradosHijosEstudianCarlosSoublette`, `LaMadreVive`, `NombreDeLaMadre`, `ApellidosDeLaMadre`, `CedulaDeIdentidadDeLaMadre`, `FechaDeNacimientoDeLaMadre`, `NacionalidadMadre`, `PaisDeNacimientoDeLaMadre`, `EstadoCivilMadre`, `EstadoDondeNacioLaMadre`, `MunicipioDondeNacioLaMadre`, `MadreMismaResiAlu`, `EstadoDondeResideLaMadre`, `MunicipioDondeResideLaMadre`, `UrbanizacionOSectorDondeResideLaMadre`, `CasaOEdificioDondeResideLaMadre`, `PisoDondeResideLaMadre`, `NumeroOApartamentoDondeResideLaMadre`, `PuntoDeReferenciaCercanoAlDomiclioDeLaMadre`, `TelefonoDeHabitacionDeLaMadre`, `TelefonoCelularDeLaMadre`, `CorreoElectronicoDeLaMadre`, `RedSocialMadreFacebook`, `RedSocialMadreTwitter`, `RedSocialMadreWhatsapp`, `RedSocialMadreOtra`, `MadreTrabaja`, `ProfesionUOcupacionDeLaMadre`, `IngresoMensualMadre`, `EscalaDeIngresoMadre`, `TipoDeJornadaLaboralMadre`, `NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre`, `EstadoDondeTrabajaLaMadre`, `MunicipioDondeTrabajaLaMadre`, `UrbanizacionOSectorDondeTrabajaLaMadre`, `EdificioOCasaDondeTrabajaLaMadre`, `PisoDondeTrabajaLaMadre`, `NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre`, `PuntoDeReferenciaCercanoAlTrabajoDeLaMadre`, `TelefonoDelLugarDelTrabajodeLaMadre`, `ExtensionTelefonicaParaContactarALaMadre`, `PersonaContactoEnElTrabajoDeLaMadre`, `TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre`, `ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre`, `ElPadreVive`, `NombreDelPadre`, `ApellidosDelPadre`, `CedulaDeIdentidadDelPadre`, `FechaDeNacimientoDelPadre`, `NacionalidadDelPadre`, `PaisDondeNacioElPadre`, `EstadoCivilDelPadre`, `EstadoDondeNacioElPadre`, `MunicipioDondeNacioElPadre`, `ElPadreViveEnElMismoLugarDeResidenciaDelAlumno`, `EstadoDondeResideElPadre`, `MunicipioDondeResideElPadre`, `UrbanizacionOSectorDondeResideElPadre`, `CalleOAvenidaDondeResideElPadre`, `CasaOEdificioDondeResideElPadre`, `PisoDondeResideElPadre`, `NumeroDeCasaOApartamentoDondeResideElPadre`, `PuntoDeReferenciaCercanoAlDomicilioDelPadre`, `TelefonoDeHabitacionDelPadre`, `TelefonoCelularDelPadre`, `CorreoElectronicoDelPadre`, `RedSocialPadreFacebook`, `RedSocialPadreTwitter`, `RedSocialPadreWhatsapp`, `RedSocialPadreOtra`, `RedesSocialesQueUsaElPadre`, `EspecifiqueQueOtrasRedesSocialesUsaElPadre`, `ElPadreTrabajaActualmente`, `ProfesionUOcupacionDelPadre`, `IngresoMensualDelPadre`, `EscalaDeIngresosDelPadre`, `TipoDeJornadaLaboralDelPadre`, `NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre`, `EstadoDondeTrabajaElPadre`, `MunicipioDondeTrabajaElPadre`, `UrbanizacionOSectorDondeTrabajaElPadre`, `CalleOAvenidaDondeTrabajaElPadre`, `EdificioOCasaDondeTrabajaElPadre`, `PisoDondeTrabajaElPadre`, `OficinaCasaOApartamentoDondeTrabajaElPadre`, `PuntoDeReferenciaCercanoAlTrabajoDelPadre`, `TelefonoDelLugarDeTrabajotrabajoDelPadre`, `ExtensionTelefonicaDeContactoDelPadre`, `PersonaContactoEnElTrabajoDelPadre`, `TelefonoDeLaPersonaContactoEnElTrabajoDelPadre`, `ExtensionDeLaPersonaContactoEnElTrabajodelPadre`, `ElAlumnoViveCon`, `ElAlumnoEstaBecado`, `EspecifiqueElTipoDeBecaDelAlumno`, `MedioDeTrasladoAlPlantel`, `EspecifiqueQueOtroMedioDeTransporteUsaElAlumno`, `ElAlumnoSeRetiraSoloDelPlantel`, `NumeroDeHermanos`, `HermanosEstudianEnUnidadesEducativasMunicipales`, `GradosQueCursanLosHermanos`, `UnidadEducativaMunicipalDondeEstudianLosHermanos`, `DatosDeLaVivienda`, `OtraCondicionDeViviendaResideElAlumno`, `FactorRh`, `Estatura`, `Peso`, `TallaCamisa`, `TallaPantalon`, `TallaCalzado`, `TipoDeParto`, `PadeceAlgunaEnfermedad`, `TipoDeEnfermedadQuePadeceElAlumno`, `ElAlumnoTieneAlgunaDiversidadFuncional`, `aluDiversidadMotora`, `aluDiversidadVisual`, `aluDiversidadAuditiva`, `aluDiversidadNeurologica`, `aluDiversidadLenguaje`, `aluDiversidadOtra`, `OtroTipoDiversidad`, `ElAlumnoHaSidoOperado`, `EspecifiqueTipoOperacion`, `ElAlumnoEsAlergico`, `TipoDeAlergias`, `aluAlergiMedicina`, `aluAlergiAlimento`, `aluAlergiOtro`, `OtroTipoDeAlergiasTieneElAlumno`, `RegimenEspecialDeAlimentacionOTratamiento`, `RegimenAlimenticio`, `aluVacunaNinguna`, `aluVacunaBCG`, `aluVacunaTriple`, `aluVacunaSarampion`, `aluVacunaMeningitis`, `aluVacunaAntigripal`, `aluVacunaHepatitis`, `aluVacunaHepatitisB`, `aluVacunaNeumococo`, `aluVacunaOtras`, `OtrasVacunasCuentaElAlumno`, `AluEnfermedadNinguna`, `AluEnfermedadSarampion`, `AluEnfermedadRubeola`, `AluEnfermedadLechina`, `AluEnfermedadTosferina`, `AluEnfermedadHepatitis`, `AluEnfermedadDengue`, `OtrasEnfermedades`, `ElAlumnoEsCatolico`, `HaCumplidoConAlgunoDeLosSiguientesSacramentos`, `aluBautizo`, `aluComunion`, `aluConfirmacion`, `RealizaAlgunaActividadEspecial`, `ActividadesEspecialesQueRealizaElAlumno`, `aluActiDeportiva`, `aluActiAcademica`, `aluActiCultural`, `aluActiOtra`, `EspecifiqueQueOtrasActividadesEspecialesRealizaElAlumno`, `NombreYApellidoDelContactoDeEmergencia1`, `TelefonoDelContactoDeEmergencia1`, `ParentescoDelContactoDeEmergencia1ConElAlumno`, `NombreYApellidoDelContactoDeEmergencia2`, `TelefonoDelContactoDeEmergencia2`, `ParentescoDelContactoDeEmergencia2ConElAlumno`, `Observaciones`, `IDEscuelaAsignada`, `FechaAsignacion`, `Puntaje`, `MiembrosFamilia`, `GrupoSanguineo`, `CuposASolicitar`, `PartoMultiple`, `PosicionParto`, `StatusCenso`, `FechaSolicitud`, `TipoRelacionLaboralRepresentante`, `TipoDeRelacionLaboralDeLaMadre`, `TipoDeRelacionLaboralDelPadre`, `SectorDondeResideElAlumno`, `SectorDondeResideElRepresentante`, `aluSacramentoNinguno`, `aluActiDeportivaNinguna`, `id_especialista`, `registro_activo`, `id_escuela`, `estatura_metros`, `peso_kilos`, `estatura_centimetros`, `peso_gramos`, `DependenciaAlcaldia`, `repreNombreFoto`, `aluNombreFoto`, `usuarioInscribe`) VALUES
(49, 1, 5, 4, 17, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'MANUEL ', 'JOSUE', 'GONZALEZ ', '', '10916897562', '2009-05-27', 'MASCULINO', 'VENEZOLANA', '', 13, 183, 'CHACAO', NULL, NULL, '', 'LAS FLORES', 'EDIFICIO LAS FLORECITAS', '3', '3-G', '', 'MADRE', NULL, 'PRUEBA', 'FABIANA', 'MENDEZ', 'LOPEZ', 16897562, '1981-03-10', 'VENEZOLANA', '17', '225', 'ARISMENDI', '', 'CASADO', 0, NULL, NULL, '', 'LAS FLORES', 'EDIFICIO LAS FLORECITAS', '3', '3-G', '', '0212-4685236', '0426-5897585', 'FABIANA212525@HOTMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 1, 1, 'ARQUITECTO', '1', NULL, '1', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'MARIO RODRIGUEZ', '02124512563', '7252', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'MANUEL', 'GONZALEZ', 12456256, '1981-03-10 00:00:00', 'VENEZOLANA', '', 'CASADO', 14, 193, 0, 13, 183, '', NULL, 'EDIFICIO LAS FLORECITAS ', '3', '3-G', '', '02124518652', '04243694252', 'MANUEL123545@HOTMAIL.COM', 1, 1, 1, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 0, NULL, 'RUTACHACAO', '', 0, 2, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 8, 9, 15, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, 1, 1, 1, 1, 1, 1, '', '1', NULL, 1, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'MARCOS PEREZ', '0212-1234568', 'AMIGO', 'LUISA ARANGUREN', '0212-1234567', 'VECINA', '', 0, '0000-00-00', 0, 4, 'B', 1, 0, 0, 0, '2016-07-11 21:00:01', NULL, NULL, NULL, 8, 8, 0, 0, 0, 1, 1, '1', '30', '30', '0', 7, NULL, NULL, 1),
(50, 0, 8, 7, 8, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'PABLO', '', 'CARRASCO', '', '19926989232', '1999-11-19', 'MASCULINO', 'VENEZOLANA', '', 1, 1, '', 13, 181, 'LOS SAMANES', 'AV DOS', 'LA CUADRA', '3', '3-B', 'PARQUE LAS ROCAS', 'MADRE', NULL, 'FERNANDO', '', 'CARRASCO', '', 26989232, '0000-00-00', 'VENEZOLANA', '1', '1', 'LAS ACACIAS', '', 'SOLTERO', 0, 13, 181, 'LOS SAMANES', 'AV DOS', 'LA CUADRA', '3', '3-B', 'PARQUE LAS ROCAS', '0212-9413863', '0416-5326369', 'GYYYYTIAT@CANTV.NET', NULL, 1, 0, 1, 0, '', 1, 1, 1, 'LIC ADMINISTRACION', '7', NULL, '7', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', 'CARLOS GARCIA', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '2', '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 1, NULL, 'PUBLICO', '', 1, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 18, 16, 14, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, 0, 1, 1, 0, 0, 0, '', '1', NULL, 1, 1, 0, 0, NULL, 0, 0, 0, 0, '', 'OLIVA SALAS', '2124-810969', '212-4810969', 'FERNANDO CABRERA', '0424-888888', 'ABUELO', '', 0, '0000-00-00', 0, 3, 'O', 1, 0, 0, 0, '2016-07-12 14:53:34', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, '1', '60', '62', '0', 15, NULL, NULL, 1),
(51, 1, 9, 8, 9, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'JOSE ', '', 'QUINTO ', '', '20511231666', '2005-10-24', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'VEREDA ', 'CAMPOS ', 'PB', 'PB', '', 'MADRE', NULL, 'PRUEBA ORIANA ', '', 'GUSTUTI ', '', 11231666, '1970-07-12', 'VENEZOLANA', '1', '1', '', '', 'CASADO', 0, NULL, NULL, '', 'VEREDA ', 'CAMPOS ', 'PB', 'PB', '', '0212-7448558', '0414-2558585', 'OGUSTUTI@GMAIL.COM', NULL, 1, 1, 1, 0, '', 1, 0, 0, 'DENTISTA ', '1', NULL, '4', NULL, 'TIEMPO-COMPLETO', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '1', 'DARWIN ', 'QUINTO ', 14456685, '1970-07-12 00:00:00', 'VENEZOLANA', '', 'CASADO', 3, 24, 0, 13, 183, '', NULL, 'CAMPOS PB ', 'PB ', 'CAM', '', '02125584545', '', 'DARWINQUINTO@GMAIL.COM', 1, 1, 1, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'AMBOS', 1, NULL, 'PUBLICO', '', 0, 2, NULL, NULL, NULL, 'ALQUILADA', '', 'N', NULL, NULL, 11, 14, 15, 'NATURAL', '0', '', 1, 0, 0, 1, 0, 0, 0, '', 1, 'APENDICITIS ', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '1', NULL, 1, 1, 0, 1, NULL, 1, 0, 0, 0, 'FÚTBOL ', 'LUISA ', '0212-586666', 'TÍO ', 'CAROLINA JIMENEZ ', '0414-6653669', 'PRIMA ', '', 0, '0000-00-00', 0, 3, 'A', 1, 1, 2, 0, '2016-07-12 20:59:45', NULL, NULL, NULL, 3, 3, 0, 0, 0, 1, 2, '1', '39', '40', '0', 1, NULL, NULL, 1),
(52, 1, 3, 2, 3, 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 'NORWILL', '', 'GUTIERREZ', '', '11112345678', '2011-07-13', 'MASCULINO', 'VENEZOLANA', '', NULL, NULL, '', NULL, NULL, '', 'UNO', 'UNO', 'UNO', '1', '', 'PADRE', NULL, 'TEKKOA', '', 'GROUP', '', 12345678, '1982-07-11', 'VENEZOLANA', NULL, NULL, '', '', 'CASADO', 0, NULL, NULL, '', 'UNO', 'UNO', 'UNO', '1', '', '0212-7059000', '0416-8338848', 'GUTIERREZNORWILL@GMAIL.COM', NULL, 0, 0, 0, 0, '', 0, 0, 0, '', '0', NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, '', 2, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', '', 0, '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '', NULL, '', '', '', '', '', '', '', 0, 0, 0, 0, NULL, NULL, 0, '', '0', NULL, NULL, '', NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'PADRE', 0, NULL, 'PRIVADO', '', 0, 0, NULL, NULL, NULL, 'PROPIA', '', 'P', NULL, NULL, 9, 10, 11, 'NATURAL', '0', '', 0, 0, 0, 0, 0, 0, 0, '', 0, '', '0', NULL, 0, 0, 0, '', 0, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 0, 0, 0, 0, 0, 0, '', '0', NULL, 0, 0, 0, 0, NULL, 0, 0, 0, 0, '', 'CARLOS SEQUERA', '0412-1212121', 'VECINO', 'ALEJANDRO MARTINEZ', '0414-1414141', 'EL OTRO VECINO', 'PRUEBA DE TEKKOA', 0, '0000-00-00', 0, 0, 'A', 1, 0, 0, 0, '2016-07-13 04:58:21', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, '0', '53', '80', '0', 1, 'logo_tekkoa_flat.jpg', 'NorwillTekkoa.jpg', 0);

--
-- Triggers `inscripcion`
--
DROP TRIGGER IF EXISTS `generar_cedula_escolar`;
DELIMITER //
CREATE TRIGGER `generar_cedula_escolar` BEFORE INSERT ON `inscripcion`
 FOR EACH ROW BEGIN

    DECLARE posicion_parto varchar(2);
    DECLARE ano_nacimiento varchar(2);
    DECLARE ceros varchar(8);
    DECLARE cedula_representante varchar(8);
    DECLARE cedula_escolar varchar(12);
    SET ceros = '00000000';

    IF NEW.PosicionParto = 0 THEN
        SET posicion_parto = 1;
    ELSE
        SET posicion_parto = NEW.PosicionParto;
    END IF;

    SET ano_nacimiento = SUBSTR(EXTRACT(YEAR FROM NEW.FechaDeNacimientoDelAlumno),3,4);
    SET cedula_representante = CONCAT(SUBSTR(ceros, 0, LENGTH(NEW.CedulaDeIdentidadDelRepresentante)),NEW.CedulaDeIdentidadDelRepresentante);
    SET NEW.CedulaDeIdentidadDelAlumnoOCedulaEscolar = CONCAT(posicion_parto, ano_nacimiento, cedula_representante);

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `instrumento_planificacion_media`
--

DROP TABLE IF EXISTS `instrumento_planificacion_media`;
CREATE TABLE IF NOT EXISTS `instrumento_planificacion_media` (
  `instrumento_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`instrumento_planificacion_media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `instrumento_planificacion_media`
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
-- Table structure for table `jornadas`
--

DROP TABLE IF EXISTS `jornadas`;
CREATE TABLE IF NOT EXISTS `jornadas` (
  `id_jornadas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_jornadas`),
  UNIQUE KEY `id_tipo_direccion_UNIQUE` (`id_jornadas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las jornadas laborales' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jornadas`
--

INSERT INTO `jornadas` (`id_jornadas`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'Diurna', '2015-10-29 19:24:12', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_base_datos`
--

DROP TABLE IF EXISTS `log_base_datos`;
CREATE TABLE IF NOT EXISTS `log_base_datos` (
  `id_log_base_datos` int(11) NOT NULL AUTO_INCREMENT,
  `operacion` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `tabla` varchar(45) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id_log_base_datos`),
  UNIQUE KEY `id_log_base_datos_UNIQUE` (`id_log_base_datos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los registros de las acciones realizadas ' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maestros`
--

DROP TABLE IF EXISTS `maestros`;
CREATE TABLE IF NOT EXISTS `maestros` (
  `id_maestro` int(11) NOT NULL AUTO_INCREMENT,
  `id_cargo` int(11) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_maestro`),
  UNIQUE KEY `idmaestro_UNIQUE` (`id_maestro`),
  UNIQUE KEY `id_persona_UNIQUE` (`id_persona`),
  KEY `fk_maestros_escuelas1_idx` (`id_escuela`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los maestros por escuela' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maestro_grado`
--

DROP TABLE IF EXISTS `maestro_grado`;
CREATE TABLE IF NOT EXISTS `maestro_grado` (
  `id_maestro_grado` int(11) NOT NULL AUTO_INCREMENT,
  `id_grado` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  PRIMARY KEY (`id_maestro_grado`),
  UNIQUE KEY `id_maestro_grado_UNIQUE` (`id_maestro_grado`),
  KEY `fk_maestro_grado_grados1_idx` (`id_grado`),
  KEY `fk_maestro_grado_maestros1_idx` (`id_maestro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los maestros por grado' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS `mark`;
CREATE TABLE IF NOT EXISTS `mark` (
  `mark_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `mark_obtained` int(11) NOT NULL DEFAULT '0',
  `mark_total` int(11) NOT NULL DEFAULT '100',
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`mark_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mark`
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
-- Table structure for table `medio_transporte`
--

DROP TABLE IF EXISTS `medio_transporte`;
CREATE TABLE IF NOT EXISTS `medio_transporte` (
  `id_medio_transporte` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_medio_transporte`),
  UNIQUE KEY `id_vive_con_UNIQUE` (`id_medio_transporte`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los medios en los que se transporta el al' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `medio_transporte`
--

INSERT INTO `medio_transporte` (`id_medio_transporte`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'Publico', '2015-10-29 19:24:52', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `municipios`
--

DROP TABLE IF EXISTS `municipios`;
CREATE TABLE IF NOT EXISTS `municipios` (
  `id_municipio` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_municipio`),
  UNIQUE KEY `id_pais_UNIQUE` (`id_municipio`),
  KEY `fk_municipios_estados1_idx` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los municipios de un estado';

--
-- Dumping data for table `municipios`
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
-- Table structure for table `niveles_educativos`
--

DROP TABLE IF EXISTS `niveles_educativos`;
CREATE TABLE IF NOT EXISTS `niveles_educativos` (
  `id_niveles_eductivos` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `valor` varchar(45) NOT NULL,
  PRIMARY KEY (`id_niveles_eductivos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `niveles_educativos`
--

INSERT INTO `niveles_educativos` (`id_niveles_eductivos`, `descripcion`, `valor`) VALUES
(1, 'Inicial', 'Eduación Inicial'),
(2, 'Primaria', 'Educación Primaria'),
(3, 'Media', 'Educación Media');

-- --------------------------------------------------------

--
-- Table structure for table `nivel_ingreso_censo`
--

DROP TABLE IF EXISTS `nivel_ingreso_censo`;
CREATE TABLE IF NOT EXISTS `nivel_ingreso_censo` (
  `id_nivel_ingreso_censo` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(65) NOT NULL,
  `puntaje` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_nivel_ingreso_censo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `nivel_ingreso_censo`
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
-- Table structure for table `padres`
--

DROP TABLE IF EXISTS `padres`;
CREATE TABLE IF NOT EXISTS `padres` (
  `id_padre` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `id_redes_sociales` int(11) DEFAULT NULL,
  `id_empleo` int(11) DEFAULT NULL,
  `madre` tinyint(1) NOT NULL DEFAULT '0',
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_padre`),
  UNIQUE KEY `id_padre_UNIQUE` (`id_padre`),
  UNIQUE KEY `id_persona_UNIQUE` (`id_persona`),
  KEY `fk_padres_empleos1_idx` (`id_empleo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los padres' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
CREATE TABLE IF NOT EXISTS `paises` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_pais`),
  UNIQUE KEY `id_pais_UNIQUE` (`id_pais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los países, en este caso solo contendrá' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `paises`
--

INSERT INTO `paises` (`id_pais`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'Venezuela', '2015-10-20 19:47:15', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `parentescos`
--

DROP TABLE IF EXISTS `parentescos`;
CREATE TABLE IF NOT EXISTS `parentescos` (
  `id_parentesco` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_parentesco`),
  UNIQUE KEY `id_parentesco_UNIQUE` (`id_parentesco`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene la lista de parentescos' AUTO_INCREMENT=13 ;

--
-- Dumping data for table `parentescos`
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
-- Table structure for table `parroquias`
--

DROP TABLE IF EXISTS `parroquias`;
CREATE TABLE IF NOT EXISTS `parroquias` (
  `id_parroquia` int(11) NOT NULL COMMENT 'Identificador de la parroquia',
  `id_municipio` int(11) NOT NULL COMMENT 'Identificador del municipio al que pertenece la parroquia',
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre de la parroquia',
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'fecha de creación del registro',
  `fecha_actualizacion` timestamp NULL DEFAULT NULL COMMENT 'fecha de actualización del registro',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'registro activo o no',
  PRIMARY KEY (`id_parroquia`),
  KEY `fk_parroquia_municipio1` (`id_municipio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene informacion sobre parroquias.';

--
-- Dumping data for table `parroquias`
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
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `perfil_nomb` varchar(50) NOT NULL,
  `perfil_desc` varchar(50) DEFAULT NULL,
  `perfil_menu_opc_id` int(11) DEFAULT NULL,
  `perfil_act` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_perfil`),
  UNIQUE KEY `id_perfil` (`id_perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `perfil_nomb`, `perfil_desc`, `perfil_menu_opc_id`, `perfil_act`) VALUES
(1, 'ADMIN', 'Administrador del sistema Xcolar', 0, b'1'),
(2, 'CONTROL DE ESTUDIO', 'Perfil para personal de Control de Estudios', 0, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `id_pais_nacimiento` int(11) NOT NULL DEFAULT '1',
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
  `id_direccion_persona` int(11) NOT NULL DEFAULT '1',
  `id_telefono_persona` int(11) NOT NULL DEFAULT '1',
  `trabaja` tinyint(1) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `director` tinyint(1) NOT NULL DEFAULT '0',
  `personal_escuela` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_persona`),
  UNIQUE KEY `id_persona_UNIQUE` (`id_persona`),
  KEY `fk_personas_direcciones1_idx` (`id_direccion_persona`),
  KEY `fk_personas_tipo_telefonos1_idx` (`id_telefono_persona`),
  KEY `fk_personas_sexos1_idx` (`id_sexo`),
  KEY `fk_personas_paises1_idx` (`id_pais_nacimiento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de las personas' AUTO_INCREMENT=87 ;

--
-- Dumping data for table `personas`
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
(50, 1, 'YOLANDA', 'MORELA', 'RODRIGUEZ', 'RONDON', '15595350', '0000-00-00', 1, 'VENEZOLANA', '', '', 1, 1, 0, '2016-02-29 03:41:48', NULL, 1, 0, 0),
(51, 1, 'KETTY', NULL, 'MENDOZA', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 1, 0),
(52, 1, 'ENRICA', NULL, 'LAROSA', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 0),
(53, 1, 'FREDDY', NULL, 'CORNIVEL', NULL, '12345678', '1899-12-31', 2, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 0),
(54, 1, 'MARINES', NULL, 'MONSALVE', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 0),
(55, 1, 'ANGELICA', NULL, 'PONCE', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 0),
(56, 1, 'MARISELA', NULL, 'TORRES', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 0),
(57, 1, 'CARLOS', NULL, 'GARCIA', NULL, '12345678', '1899-12-31', 2, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 0),
(58, 1, 'YASENKA', NULL, 'SALAS', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 0),
(59, 1, 'AMPARO AZPIROZ ', NULL, 'AZPIROZ', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 1, 1),
(60, 1, 'BETY AROCHA ', NULL, 'AROCHA', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(61, 1, 'YELITZA CASTILLO', NULL, 'CASTILLO', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(62, 1, 'CARMEN MARRUFO', NULL, 'MARRUFO', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(63, 1, 'ODALIS PARABAVIDES', NULL, 'PARABAVIDES', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(64, 1, 'Molina Angulo,Neida T.', NULL, 'ANGULO', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(65, 1, 'Fernández de Nascimento,Zita María', NULL, 'FERNANDEZ', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(66, 1, 'Loreto Arizaleta,María Josefina', NULL, 'LORETO', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(67, 1, 'Anzola García,Carlos Alberto', NULL, 'ANZOLA', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(68, 1, 'LERY KEY ', NULL, 'KEY', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(69, 1, 'LOURDES PEREZ', NULL, 'PEREZ', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 1, 1),
(70, 1, 'LIGIA TORO ', NULL, 'TORO', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(71, 1, 'MIRLA ROJAS', NULL, 'ROJAS', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(72, 1, 'OENIS HERNANDEZ ', NULL, 'HERNANDEZ', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(73, 1, 'BETZAIDA RODRIGUEZ', NULL, 'RODRIGUEZ', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(74, 1, 'DAMARIS APONTE ', NULL, 'APONTE', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(75, 1, 'Torres Yeissika', NULL, 'TORRES', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(76, 1, 'Fernandes Judith', NULL, 'FERNANDEZ', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(77, 1, 'Lozada Marielba', NULL, 'LOZADA', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(78, 1, 'Machado Aileen', NULL, 'MACHADO', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(79, 1, 'LIA FARACHE ', NULL, 'FARACHE', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:10', NULL, 1, 0, 1),
(80, 1, 'THAIS RONDON ', NULL, 'RONDON', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:11', NULL, 1, 0, 1),
(81, 1, 'FRANKLIN NIETO ', NULL, 'NIETO', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:11', NULL, 1, 0, 1),
(82, 1, 'ADRIANA RODRGUEZ ', NULL, 'RODRIGUEZ', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:11', NULL, 1, 1, 1),
(83, 1, 'GLADYS VIERA ', NULL, 'VIERA', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:11', NULL, 1, 0, 1),
(84, 1, 'De Jesus Morillo,Scarlee Del Valle', NULL, 'DE JESUS', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:11', NULL, 1, 0, 1),
(85, 1, 'Campos Jemina', NULL, 'CAMPOS', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:11', NULL, 1, 0, 1),
(86, 1, 'CARLOS CAMARGO ', NULL, 'CAMARGO', NULL, '12345678', '1899-12-31', 1, 'VENEZOLANA', NULL, 'DOCENTE', 1, 1, NULL, '2016-04-12 06:15:11', NULL, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesos`
--

DROP TABLE IF EXISTS `pesos`;
CREATE TABLE IF NOT EXISTS `pesos` (
  `id_peso` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(15) NOT NULL,
  PRIMARY KEY (`id_peso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=144 ;

--
-- Dumping data for table `pesos`
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
-- Table structure for table `proyecto_est_eva_ins`
--

DROP TABLE IF EXISTS `proyecto_est_eva_ins`;
CREATE TABLE IF NOT EXISTS `proyecto_est_eva_ins` (
  `proyecto_est_eva_ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id` int(11) NOT NULL,
  `est_eva_ins_id` int(11) NOT NULL,
  PRIMARY KEY (`proyecto_est_eva_ins_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `proyecto_est_eva_ins`
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
-- Table structure for table `proyecto_est_eva_tec`
--

DROP TABLE IF EXISTS `proyecto_est_eva_tec`;
CREATE TABLE IF NOT EXISTS `proyecto_est_eva_tec` (
  `proyecto_est_eva_tec_id` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id` int(11) NOT NULL,
  `est_eva_tec_id` int(11) NOT NULL,
  PRIMARY KEY (`proyecto_est_eva_tec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `proyecto_primaria`
--

DROP TABLE IF EXISTS `proyecto_primaria`;
CREATE TABLE IF NOT EXISTS `proyecto_primaria` (
  `proyecto_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `proyecto_lapso` int(11) DEFAULT NULL,
  PRIMARY KEY (`proyecto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `proyecto_primaria`
--

INSERT INTO `proyecto_primaria` (`proyecto_id`, `proyecto_nombre`, `proyecto_tema`, `proyecto_tiempo`, `proyecto_tipo_tiempo_id`, `maestro_id`, `grado_id`, `seccion_id`, `proyecto_diagnostico`, `proyecto_proposito`, `proyecto_actividades_generales`, `proyecto_lapso`) VALUES
(1, 'pruena de nombre', 'tema variado prueba', 5, 1, 1, 4, 0, 'prueba diag', 'proposito', 'mcuhas', 1),
(10, 'pruena de nombre', 'tema variado prueba', 5, 1, 1, 4, 0, 'prueba diag', 'proposito', 'mcuhas', 1),
(11, 'hola', 'tema', 1, 1, 1, 4, 0, 'diagnostico', 'proposito', 'actividas', 0),
(12, '1', '1', 69, 1, 1, 4, 0, 'diagnostico', 'proposito', 'actividades', 0);

-- --------------------------------------------------------

--
-- Table structure for table `puntaje_censo`
--

DROP TABLE IF EXISTS `puntaje_censo`;
CREATE TABLE IF NOT EXISTS `puntaje_censo` (
  `id_puntaje_censo` int(11) NOT NULL AUTO_INCREMENT,
  `id_censo` int(11) NOT NULL DEFAULT '0',
  `escolaridad` int(11) NOT NULL DEFAULT '0',
  `residencia` int(11) NOT NULL DEFAULT '0',
  `orfandad` int(11) NOT NULL DEFAULT '0',
  `representante_trabaja` int(11) NOT NULL DEFAULT '0',
  `representante_jornada_laboral` int(11) NOT NULL DEFAULT '0',
  `representante_nivel_ingreso` int(11) DEFAULT '0',
  `miembros_familia` int(11) NOT NULL DEFAULT '0',
  `vivienda` int(11) NOT NULL DEFAULT '0',
  `hijos_escuela_chacao` int(11) NOT NULL DEFAULT '0',
  `trabaja_municipio_alcaldia` int(11) NOT NULL DEFAULT '0',
  `no_residente` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_puntaje_censo`),
  KEY `fk_putaje_censo_idx` (`id_censo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recaudos`
--

DROP TABLE IF EXISTS `recaudos`;
CREATE TABLE IF NOT EXISTS `recaudos` (
  `id_recaudo` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(45) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'fecha de creación del registro',
  `fecha_actualizacion` timestamp NULL DEFAULT NULL COMMENT 'fecha de actualización del registro',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'registro activo o no',
  PRIMARY KEY (`id_recaudo`),
  UNIQUE KEY `id_recaudo_UNIQUE` (`id_recaudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `recaudos`
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
-- Table structure for table `recaudo_estudiante`
--

DROP TABLE IF EXISTS `recaudo_estudiante`;
CREATE TABLE IF NOT EXISTS `recaudo_estudiante` (
  `id_recaudo_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `id_recaudo` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL COMMENT 'fecha de actualización del registro',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'registro activo o no',
  PRIMARY KEY (`id_recaudo_estudiante`),
  KEY `recaudo_estudiante_estudiante_idx` (`id_estudiante`),
  KEY `recaudo_estudiante_recaudo_idx` (`id_recaudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `recaudo_estudiante`
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
-- Table structure for table `recaudo_grado`
--

DROP TABLE IF EXISTS `recaudo_grado`;
CREATE TABLE IF NOT EXISTS `recaudo_grado` (
  `id_recaudo_grado` int(11) NOT NULL AUTO_INCREMENT,
  `id_grado` int(11) NOT NULL,
  `id_recaudo` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL COMMENT 'fecha de actualización del registro',
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'registro activo o no',
  PRIMARY KEY (`id_recaudo_grado`),
  UNIQUE KEY `id_recaudo_grado_UNIQUE` (`id_recaudo_grado`),
  KEY `fk_recaudos_grado_grados1_idx` (`id_grado`),
  KEY `fk_recaudos_grado_recaudos1_idx` (`id_recaudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `recaudo_grado`
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
-- Table structure for table `recursos_planificacion_media`
--

DROP TABLE IF EXISTS `recursos_planificacion_media`;
CREATE TABLE IF NOT EXISTS `recursos_planificacion_media` (
  `recursos_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`recursos_planificacion_media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `recursos_planificacion_media`
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
-- Table structure for table `redes_sociales`
--

DROP TABLE IF EXISTS `redes_sociales`;
CREATE TABLE IF NOT EXISTS `redes_sociales` (
  `id_redes_social` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_redes_social`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las redes sociales que pudiese usar un pa' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `redes_sociales`
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
-- Table structure for table `redes_sociales_usadas`
--

DROP TABLE IF EXISTS `redes_sociales_usadas`;
CREATE TABLE IF NOT EXISTS `redes_sociales_usadas` (
  `id_ redes_sociales_usadas` int(11) NOT NULL AUTO_INCREMENT,
  `id_red_social` int(11) NOT NULL,
  `id_padre_representante` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_ redes_sociales_usadas`),
  UNIQUE KEY `id_ redes_sociales_usadas_UNIQUE` (`id_ redes_sociales_usadas`),
  KEY `fk_redes_sociales_usadas_redes_sociales1_idx` (`id_red_social`),
  KEY `fk_redes_sociales_usadas_padres1_idx` (`id_padre_representante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene las redes sociales usadas por padre o rep' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `representantes`
--

DROP TABLE IF EXISTS `representantes`;
CREATE TABLE IF NOT EXISTS `representantes` (
  `id_representante` int(11) NOT NULL AUTO_INCREMENT,
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
  `otros_ingresos` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id_representante`),
  UNIQUE KEY `id_representante_UNIQUE` (`id_representante`),
  UNIQUE KEY `id_persona_UNIQUE` (`id_persona`),
  KEY `fk_representantes_escala_ingresos1_idx` (`id_escala_ingreso`),
  KEY `fk_representantes_parentescos1_idx` (`id_parentesco`),
  KEY `fk_representantes_empleos1_idx` (`id_empleo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los representantes' AUTO_INCREMENT=28 ;

--
-- Dumping data for table `representantes`
--

INSERT INTO `representantes` (`id_representante`, `id_parentesco`, `id_persona`, `id_redes_sociales`, `id_empleo`, `id_escala_ingreso`, `id_estado_civil`, `ingreso_mensual`, `diversidad_funcional`, `trabaja`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`, `otros_ingresos`) VALUES
(22, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, '2016-02-22 22:20:13', NULL, 1, NULL),
(24, 1, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-02-22 22:40:36', NULL, 1, NULL),
(25, 2, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-02-29 03:51:04', NULL, 1, NULL),
(26, 2, 48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-02-29 03:51:18', NULL, 1, NULL),
(27, 2, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-02-29 03:51:27', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sacramentos`
--

DROP TABLE IF EXISTS `sacramentos`;
CREATE TABLE IF NOT EXISTS `sacramentos` (
  `id_sacramento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_sacramento`),
  UNIQUE KEY `id_vive_con_UNIQUE` (`id_sacramento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los sacramentos disponibles para los estu' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sacramentos`
--

INSERT INTO `sacramentos` (`id_sacramento`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'BAUTIZO', '2015-10-20 20:17:59', NULL, 1),
(2, 'PRIMERA COMUNION', '2015-10-20 20:17:59', NULL, 1),
(3, 'CONFIRMACION', '2015-10-20 20:17:59', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sacramentos_recibidos`
--

DROP TABLE IF EXISTS `sacramentos_recibidos`;
CREATE TABLE IF NOT EXISTS `sacramentos_recibidos` (
  `id_sacramentos_recibidos` int(11) NOT NULL AUTO_INCREMENT,
  `id_sacramento` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_sacramentos_recibidos`),
  UNIQUE KEY `id_vive_con_UNIQUE` (`id_sacramentos_recibidos`),
  KEY `fk_sacramentos_recibidos_sacramentos1_idx` (`id_sacramento`),
  KEY `fk_sacramentos_recibidos_estudiantes1_idx` (`id_estudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los sacramentos recibidos po' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `secciones`
--

DROP TABLE IF EXISTS `secciones`;
CREATE TABLE IF NOT EXISTS `secciones` (
  `id_seccion` int(11) NOT NULL AUTO_INCREMENT,
  `id_grado` int(11) NOT NULL,
  `nombre_seccion` varchar(45) NOT NULL,
  `abreviacion_seccion` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `teacher_id` int(11) NOT NULL DEFAULT '1',
  `letra_seccion` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id_seccion`),
  UNIQUE KEY `id_seccion_UNIQUE` (`id_seccion`),
  KEY `fk_secciones_grados1_idx` (`id_grado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de las secciones por grado' AUTO_INCREMENT=37 ;

--
-- Dumping data for table `secciones`
--

INSERT INTO `secciones` (`id_seccion`, `id_grado`, `nombre_seccion`, `abreviacion_seccion`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`, `teacher_id`, `letra_seccion`) VALUES
(1, 1, 'Primer Grupo A', '1gpo A', '2016-02-24 18:15:03', NULL, 1, 1, 'A'),
(2, 2, 'Segundo Grupo A', '2gpo A', '2016-01-11 16:43:15', NULL, 1, 1, 'A'),
(3, 3, 'Tercer Grupo A', '3gpo A', '2016-01-11 16:43:15', NULL, 1, 1, 'A'),
(4, 4, 'Primer Grado A', '1gdo A', '2016-01-11 16:43:15', NULL, 1, 1, 'A'),
(5, 5, 'Segundo Grado A', '2gdo A', '2016-01-11 16:43:15', NULL, 1, 1, 'A'),
(6, 6, 'Tercer Grado A', '3gdo A', '2016-01-11 16:43:15', NULL, 1, 1, 'A'),
(7, 7, 'Cuarto Grado A', '4gdo A', '2016-01-11 16:43:15', NULL, 1, 1, 'A'),
(8, 8, 'Quinto Grado A', '5gdo A', '2016-01-11 16:43:15', NULL, 1, 1, 'A'),
(9, 9, 'Sexto Grado A', '6gdo A', '2016-01-11 16:43:15', NULL, 1, 1, 'A'),
(10, 10, 'Primer Año A', '1ro A', '2016-04-05 17:35:12', NULL, 1, 1, 'A'),
(11, 11, 'Segundo Año A', '2do A', '2016-02-29 03:06:27', NULL, 1, 1, 'A'),
(12, 12, 'Tercer Año A', '3ero A', '2016-02-29 03:06:27', NULL, 1, 1, 'A'),
(13, 1, 'Primer Grupo B', '1gpo B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(14, 2, 'Segundo Grupo B', '2gpo B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(15, 3, 'Tercer Grupo B', '3gpo B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(16, 4, 'Primer Grado B', '1gdo B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(17, 5, 'Segundo Grado B', '2gdo B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(18, 6, 'Tercer Grado B', '3gdo B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(19, 7, 'Cuarto Grado B', '4gdo B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(20, 8, 'Quinto Grado B', '5gdo B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(21, 9, 'Sexto Grado B', '6gdo B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(22, 10, 'Primer Año B', '1ero B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(23, 11, 'Segundo Año B', '2do B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(24, 12, 'Tercer Año B', '3ero B', '2016-07-07 05:59:54', NULL, 1, 1, 'B'),
(25, 10, 'Primer Año C', '1ero C', '2016-07-07 05:59:54', NULL, 1, 1, 'C'),
(26, 11, 'Segundo Año C', '2do C', '2016-07-07 05:59:54', NULL, 1, 1, 'C'),
(27, 12, 'Tercer Año C', '3ro C', '2016-07-07 05:59:54', NULL, 1, 0, 'C'),
(28, 1, 'Primer Grupo U', '1gpo U', '2016-07-07 05:59:54', NULL, 1, 1, 'C'),
(29, 2, 'Segundo Grupo U', '2gpo U', '2016-07-07 05:59:54', NULL, 1, 1, 'C'),
(30, 3, 'Tercer Grupo U', '3gpo U', '2016-07-07 05:59:54', NULL, 1, 1, 'C'),
(31, 4, 'Primer Grado U', '1gdo U', '2016-07-07 05:59:54', NULL, 1, 1, 'C'),
(32, 5, 'Segundo Grado U', '2gdo U', '2016-07-07 05:59:54', NULL, 1, 1, 'C'),
(33, 6, 'Tercer Grado U', '3gdo U', '2016-07-07 05:59:54', NULL, 1, 1, 'C'),
(34, 7, 'Cuarto Grado U', '4gdo U', '2016-07-07 05:59:54', NULL, 1, 1, 'C'),
(35, 8, 'Quinto Grado U', '5gdo U', '2016-07-07 05:59:54', NULL, 1, 1, 'C'),
(36, 9, 'Sexto Grado U', '6gdo U', '2016-07-07 05:59:54', NULL, 1, 1, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `sectores_chacao`
--

DROP TABLE IF EXISTS `sectores_chacao`;
CREATE TABLE IF NOT EXISTS `sectores_chacao` (
  `id_sector` int(11) NOT NULL AUTO_INCREMENT,
  `id_parroquia` int(11) NOT NULL DEFAULT '621',
  `nombre` text NOT NULL,
  PRIMARY KEY (`id_sector`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sectores_chacao`
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
-- Table structure for table `sesiones`
--

DROP TABLE IF EXISTS `sesiones`;
CREATE TABLE IF NOT EXISTS `sesiones` (
  `id_sesion` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_ip` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id_sesion`),
  KEY `fecha_sesiones` (`fecha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabla que contiene las sesiones de los usuarios';

-- --------------------------------------------------------

--
-- Table structure for table `sexos`
--

DROP TABLE IF EXISTS `sexos`;
CREATE TABLE IF NOT EXISTS `sexos` (
  `id_sexo` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(45) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_sexo`),
  UNIQUE KEY `id_sexo_UNIQUE` (`id_sexo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los tipos de sexo' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sexos`
--

INSERT INTO `sexos` (`id_sexo`, `sexo`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'MASCULINO', '2015-10-20 20:09:17', NULL, 1),
(2, 'FEMENINO', '2015-10-20 20:09:17', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `class_id`, `teacher_id`) VALUES
(1, 'HISTORIA DE CHACAO', 10, 1),
(2, 'CASTELLANO', 4, 1),
(3, 'MATEMATICA', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `talla_calzados`
--

DROP TABLE IF EXISTS `talla_calzados`;
CREATE TABLE IF NOT EXISTS `talla_calzados` (
  `id_talla_calzado` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(15) NOT NULL,
  PRIMARY KEY (`id_talla_calzado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `talla_calzados`
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
-- Table structure for table `talla_camisas`
--

DROP TABLE IF EXISTS `talla_camisas`;
CREATE TABLE IF NOT EXISTS `talla_camisas` (
  `id_talla_camisa` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(15) NOT NULL,
  PRIMARY KEY (`id_talla_camisa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `talla_camisas`
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
-- Table structure for table `talla_pantalones`
--

DROP TABLE IF EXISTS `talla_pantalones`;
CREATE TABLE IF NOT EXISTS `talla_pantalones` (
  `id_talla_pantalon` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_talla_pantalon`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `talla_pantalones`
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
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
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
  `id_escuela` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `birthday`, `sex`, `address`, `phone`, `email`, `password`, `authentication_key`, `user`, `mobile_phone`, `id_cargo`, `registro_activo`, `id_escuela`) VALUES
(1, 'Norwill', '12/11/1982', 'male', 'Caracas', '04168338848', 'gutierreznorwill@gmail.com', '1234', '', 'norwill', NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tecnicas_planificacion_media`
--

DROP TABLE IF EXISTS `tecnicas_planificacion_media`;
CREATE TABLE IF NOT EXISTS `tecnicas_planificacion_media` (
  `tecnicas_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`tecnicas_planificacion_media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tecnicas_planificacion_media`
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
-- Table structure for table `telefonos`
--

DROP TABLE IF EXISTS `telefonos`;
CREATE TABLE IF NOT EXISTS `telefonos` (
  `id_telefono` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_telefono` int(11) NOT NULL DEFAULT '1',
  `telefono` varchar(15) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_telefono`),
  UNIQUE KEY `id_telefono_UNIQUE` (`id_telefono`),
  KEY `fk_telefonos_tipo_telefonos1_idx` (`id_tipo_telefono`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los teléfonos de las person' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `telefonos`
--

INSERT INTO `telefonos` (`id_telefono`, `id_tipo_telefono`, `telefono`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 1, '02129050000', '2015-10-20 20:21:10', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_direcciones`
--

DROP TABLE IF EXISTS `tipo_direcciones`;
CREATE TABLE IF NOT EXISTS `tipo_direcciones` (
  `id_tipo_direccion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_tipo_direccion`),
  UNIQUE KEY `id_tipo_direccion_UNIQUE` (`id_tipo_direccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene el listado de tipo de direcciones' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipo_direcciones`
--

INSERT INTO `tipo_direcciones` (`id_tipo_direccion`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'TRABAJO', '2015-10-20 20:07:33', NULL, 1),
(2, 'CASA', '2015-10-20 20:07:33', NULL, 1),
(3, 'FAMILIAR', '2015-10-20 20:07:33', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_parto`
--

DROP TABLE IF EXISTS `tipo_parto`;
CREATE TABLE IF NOT EXISTS `tipo_parto` (
  `id_tipo_parto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_tipo_parto`),
  UNIQUE KEY `id_vive_con_UNIQUE` (`id_tipo_parto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene el listado de tipo de partos' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipo_parto`
--

INSERT INTO `tipo_parto` (`id_tipo_parto`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'NATURAL', '2015-10-20 20:08:48', NULL, 1),
(2, 'CESAREA', '2015-10-20 20:08:48', NULL, 1),
(3, 'FORCEPS', '2015-10-20 20:08:48', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_telefonos`
--

DROP TABLE IF EXISTS `tipo_telefonos`;
CREATE TABLE IF NOT EXISTS `tipo_telefonos` (
  `id_tipo_telefono` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_tipo_telefono`),
  UNIQUE KEY `id_tipo_telefono_UNIQUE` (`id_tipo_telefono`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene el listado de tipo de telefonos' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tipo_telefonos`
--

INSERT INTO `tipo_telefonos` (`id_tipo_telefono`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`) VALUES
(1, 'TRABAJO', '2015-10-20 20:06:57', NULL, 1),
(2, 'CELULAR', '2015-10-20 20:06:57', NULL, 1),
(3, 'CASA', '2015-10-20 20:06:57', NULL, 1),
(4, 'OTRO', '2015-10-20 20:06:57', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `clave` varchar(80) DEFAULT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  `tipo_usuario` varchar(25) NOT NULL DEFAULT 'admin',
  `especialista` varchar(25) NOT NULL DEFAULT 'USUARIO',
  `id_escuela` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`),
  UNIQUE KEY `id_persona_UNIQUE` (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene los datos de los usuarios' AUTO_INCREMENT=46 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_persona`, `usuario`, `clave`, `correo_electronico`, `activo`, `fecha_creacion`, `fecha_actualizacion`, `registro_activo`, `tipo_usuario`, `especialista`, `id_escuela`) VALUES
(2, 1, 'admin-bello', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'admin@chacao.gob.ve', 0, '2016-07-07 21:19:14', NULL, 1, 'admin', 'USUARIO', 1),
(8, 51, 'KMENDOZA', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'KMENDOZA@chacao.gob.ve', 0, '2016-04-12 06:15:56', NULL, 1, 'admin', 'USUARIO', 0),
(9, 52, 'ELAROSA', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'ELAROSA@chacao.gob.ve', 0, '2016-04-12 06:15:56', NULL, 1, 'admin', 'USUARIO', 0),
(10, 53, 'FCORNIVELL', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'FCORNIVELL@chacao.gob.ve', 0, '2016-04-12 06:15:56', NULL, 1, 'admin', 'USUARIO', 0),
(11, 54, 'MMONSALVE', '$2y$10$CMVk/IUlQx16zlcPSKa/3O1wHoe/mK0dWonuR54/d8WZGYnA9Qf1y', 'MMONSALVE@chacao.gob.ve', 0, '2016-04-15 16:39:23', NULL, 1, 'admin', 'USUARIO', 0),
(12, 55, 'APONCE', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'APONCE@chacao.gob.ve', 0, '2016-04-12 06:15:56', NULL, 1, 'admin', 'USUARIO', 0),
(13, 56, 'MTORRES', '$2y$10$0yDpY9dxDuiHmYTOUtry2OPQZ6/GYc/e1zt/dmy/gK1hxyiuaCcpW', 'MTORRES@chacao.gob.ve', 0, '2016-05-03 13:26:42', NULL, 1, 'admin', 'USUARIO', 0),
(14, 57, 'CGARCIA', '$2y$10$N0SttQgTSQhSYGubIjl6ZuhyCeaAqSUMhRqRt6kfwdLfGAxI9BVmm', 'CGARCIA@chacao.gob.ve', 0, '2016-04-22 15:01:19', NULL, 1, 'admin', 'USUARIO', 0),
(15, 58, 'YSALAS', '$2y$10$FZ9Z3Eyf9G7Ja3SpKOrB/u5VyJYNkE1QWV/J/mkaKhRnoWZyWxAVi', 'YSALAS@chacao.gob.ve', 0, '2016-05-02 20:19:22', NULL, 1, 'admin', 'USUARIO', 0),
(16, 59, 'AAZPIROZ', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'AAZPIROZ@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 1),
(17, 60, 'BAROCHA', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'BAROCHA@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 1),
(18, 61, 'YCASTILLO', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'YCASTILLO@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 1),
(19, 62, 'CMARRUFO', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'CMARRUFO@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 1),
(20, 63, 'OPARABAVIDES', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'OPARABAVIDES@chacao.gob.ve', 0, '2016-04-12 06:17:18', NULL, 1, 'especialista', 'TRABAJO_SOCIAL', 1),
(21, 64, 'MANGULO', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'MANGULO@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 1),
(22, 65, 'FZITA', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'FZITA@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 1),
(23, 66, 'MLORETO', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'MLORETO@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 1),
(24, 67, 'CANZOLA', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'CANZOLA@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 1),
(25, 68, 'LKEY', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'LKEY@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 1),
(26, 69, 'LPEREZ', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'LPEREZ@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(27, 70, 'LTORO', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'LTORO@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(28, 71, 'MROJAS', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'MROJAS@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(29, 72, 'OHERNANDEZ', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'OHERNANDEZ@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(30, 73, 'BRODRIGUEZ', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'BRODRIGUEZ@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(31, 74, 'DAPONTE', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'DAPONTE@chacao.gob.ve', 0, '2016-04-12 06:18:04', NULL, 1, 'especialista', 'TRABAJO_SOCIAL', 2),
(32, 75, 'YTORRES', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'YTORRES@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(33, 76, 'JFERNANDEZ', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'JFERNANDEZ@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(34, 77, 'MLOZADA', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'MLOZADA@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(35, 78, 'AMACHADO', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'AMACHADO@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(36, 79, 'FLIA', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'FLIA@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(37, 80, 'RTHAIS', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'RTHAIS@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(38, 81, 'NFRANKLIN ', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'NFRANKLIN @chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 2),
(39, 82, 'ARODRIGUEZ ', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'ARODRIGUEZ @chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 3),
(40, 83, 'GVIERA', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'GVIERA@chacao.gob.ve', 0, '2016-04-12 06:18:57', NULL, 1, 'especialista', 'TRABAJO_SOCIAL', 3),
(41, 84, 'SDEJESUS', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'SDEJESUS@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 3),
(42, 85, 'JCAMPOS', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'JCAMPOS@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 3),
(43, 86, 'CCAMARGO', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'CCAMARGO@chacao.gob.ve', 0, '2016-04-12 06:15:57', NULL, 1, 'admin', 'USUARIO', 3),
(44, 15, 'admin-guanche', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'admin@chacao.gob.ve', 0, '2016-07-07 11:29:07', NULL, 1, 'admin', 'USUARIO', 2),
(45, 16, 'admin-soublette', '$2y$10$aArOl8DesZu7SQFaoA6AwOR1D2F8.46Jh1.N1/nJxPOL8miZnQDEW', 'admin@chacao.gob.ve', 0, '2016-07-07 11:29:17', NULL, 1, 'admin', 'USUARIO', 3);

-- --------------------------------------------------------

--
-- Table structure for table `valor_puntaje_censo`
--

DROP TABLE IF EXISTS `valor_puntaje_censo`;
CREATE TABLE IF NOT EXISTS `valor_puntaje_censo` (
  `id_valor_puntaje_censo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `valor_comparacion` varchar(45) NOT NULL,
  `puntos` int(11) NOT NULL,
  PRIMARY KEY (`id_valor_puntaje_censo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `valor_puntaje_censo`
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
-- Stand-in structure for view `vconstancias`
--
DROP VIEW IF EXISTS `vconstancias`;
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
-- Stand-in structure for view `vescuelaseccion`
--
DROP VIEW IF EXISTS `vescuelaseccion`;
CREATE TABLE IF NOT EXISTS `vescuelaseccion` (
`id_escuela` int(11)
,`id_seccion` int(11)
,`id_grado` int(11)
,`nombre_seccion` varchar(45)
,`abreviacion_seccion` varchar(45)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vescuela_seccion`
--
DROP VIEW IF EXISTS `vescuela_seccion`;
CREATE TABLE IF NOT EXISTS `vescuela_seccion` (
`id_seccion` int(11)
,`id_grado` int(11)
,`nombre_seccion` varchar(45)
,`abreviacion_seccion` varchar(45)
,`fecha_creacion` timestamp
,`fecha_actualizacion` timestamp
,`registro_activo` tinyint(1)
,`teacher_id` int(11)
,`letra_seccion` varchar(1)
,`id_escuela` int(11)
,`idescuela_seccion` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vestudiantesasistencia`
--
DROP VIEW IF EXISTS `vestudiantesasistencia`;
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
-- Stand-in structure for view `vgradoescuela`
--
DROP VIEW IF EXISTS `vgradoescuela`;
CREATE TABLE IF NOT EXISTS `vgradoescuela` (
`id_escuela` int(11)
,`id_grado` int(11)
,`nombre_grado` varchar(45)
);
-- --------------------------------------------------------

--
-- Table structure for table `vive_con`
--

DROP TABLE IF EXISTS `vive_con`;
CREATE TABLE IF NOT EXISTS `vive_con` (
  `id_vive_con` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `registro_activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_vive_con`),
  UNIQUE KEY `id_vive_con_UNIQUE` (`id_vive_con`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tabla que contiene el listado de las personas con quien pued' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `vive_con`
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
-- Stand-in structure for view `vniveleducativoescuela`
--
DROP VIEW IF EXISTS `vniveleducativoescuela`;
CREATE TABLE IF NOT EXISTS `vniveleducativoescuela` (
`id_escuela_nivel_educativo` int(11)
,`id_escuela` int(11)
,`id_nivel_educativo` int(11)
,`valor` varchar(45)
,`registro_Activo` tinyint(1)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vniveleducativogrado`
--
DROP VIEW IF EXISTS `vniveleducativogrado`;
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
-- Stand-in structure for view `vniveleducativogradoseccion`
--
DROP VIEW IF EXISTS `vniveleducativogradoseccion`;
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
-- Stand-in structure for view `vpuntajecenso`
--
DROP VIEW IF EXISTS `vpuntajecenso`;
CREATE TABLE IF NOT EXISTS `vpuntajecenso` (
`id_censo` int(11)
,`id_puntaje_censo` int(11)
,`id_escuela` int(2)
,`primer_nombre` varchar(150)
,`segundo_nombre` varchar(150)
,`primer_apellido` varchar(150)
,`segundo_apellido` varchar(150)
,`cedula_identidad` int(11)
,`fecha_nacimiento_alumno` date
,`cedula_identidad_representante` int(11)
,`primer_nombre_representante` varchar(150)
,`segundo_nombre_representante` varchar(150)
,`primer_apellido_representante` varchar(150)
,`segundo_apellido_representante` varchar(150)
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
,`hijos_escuela_municipio` int(11)
,`trabaja_mun_alcaldia` int(11)
,`puntaje_total` bigint(21)
,`Residente` tinyint(1)
,`CuposASolicitar` int(11)
,`ElAlumnoEstudiaActualmente` tinyint(1)
,`ElAlumnoCursoElAnterior` tinyint(1)
,`ElAlumnoRepiteGrado` tinyint(1)
,`UnidadEducativaDeProcedencia` varchar(250)
,`NombreDeLaInstitucion` varchar(250)
,`EstadoInstitucion` int(11)
,`MunicipioInstitucion` int(11)
,`MateriaPendiente` varchar(2)
,`RazonSocioeco` tinyint(1)
,`RazonCambioResi` tinyint(1)
,`RazonNoAdapta` tinyint(1)
,`RazonOtra` tinyint(1)
,`SexoDelAlumno` varchar(9)
,`NacionalidadDelAlumno` varchar(25)
,`EstadoDondeResideElAlumno` int(11)
,`MunicipioDondeResideElAlumno` int(11)
,`UrbanizacionOSectorDondeResideElAlumno` varchar(250)
,`CalleOAvenidaDondeResideElAlumno` varchar(250)
,`CasaOEdificioDondeResideElAlumno` varchar(250)
,`PisoOPlantaDondeResideElAlumno` varchar(50)
,`NumeroDeCasaOApartamentoDondeResideElAlumno` varchar(5)
,`ParentescoConElAlumno` varchar(15)
,`OtroParentescoConElAlumno` varchar(15)
,`FechaDeNacimientoDelRepresentante` date
,`NacionalidadDelRepresentante` varchar(15)
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
,`DatosDeLaVivienda` varchar(25)
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
,`NombreYApellidoDelContactoDeEmergencia1` varchar(250)
,`TelefonoDelContactoDeEmergencia1` varchar(15)
,`ParentescoDelContactoDeEmergencia1ConElAlumno` varchar(250)
,`NombreYApellidoDelContactoDeEmergencia2` varchar(250)
,`TelefonoDelContactoDeEmergencia2` varchar(15)
,`ParentescoDelContactoDeEmergencia2ConElAlumno` varchar(250)
,`StatusCenso` int(2)
,`UniDePrefJuanDio` tinyint(1)
,`UniDePrefAndres` tinyint(1)
,`UniDePrefCarlos` tinyint(1)
,`fecha_solicitud` timestamp
,`hijos_escuela_chacao` int(11)
,`trabaja_municipio_alcaldia` int(11)
,`id_especialista` int(11)
,`PuntoDeReferenciaCercanoAlDomicilioDelAlumno` varchar(250)
,`fecha_asistencia` date
,`hora_asistencia` time
,`disponible` tinyint(1)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vrecaudosgrado`
--
DROP VIEW IF EXISTS `vrecaudosgrado`;
CREATE TABLE IF NOT EXISTS `vrecaudosgrado` (
`id_grado` int(11)
,`id_recaudo_grado` int(11)
,`id_recaudo` int(11)
,`valor` varchar(45)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vresumencensogrado`
--
DROP VIEW IF EXISTS `vresumencensogrado`;
CREATE TABLE IF NOT EXISTS `vresumencensogrado` (
`UniDePrefAndres` decimal(25,0)
,`UniDePrefCarlos` decimal(25,0)
,`UniDePrefJuanDio` decimal(25,0)
,`Residente` bigint(21)
,`NoResidente` bigint(21)
,`GradoACursar` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vresumendatosescuela`
--
DROP VIEW IF EXISTS `vresumendatosescuela`;
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
-- Stand-in structure for view `vresumendatosestudiantes`
--
DROP VIEW IF EXISTS `vresumendatosestudiantes`;
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
-- Stand-in structure for view `vresumenescuela`
--
DROP VIEW IF EXISTS `vresumenescuela`;
CREATE TABLE IF NOT EXISTS `vresumenescuela` (
`residente` bigint(21)
,`no_residente` bigint(21)
,`pendiente` bigint(21)
,`validado` bigint(21)
,`asignado` bigint(21)
,`aprobado` bigint(21)
,`anulado` bigint(21)
,`escuela` varchar(24)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vrpresumencenso`
--
DROP VIEW IF EXISTS `vrpresumencenso`;
CREATE TABLE IF NOT EXISTS `vrpresumencenso` (
`vpuntajecenso_id_censo` int(11)
,`fecha_solicitud` timestamp
,`nombre_representante` text
,`identificacion_representante` int(11)
,`parentesco` varchar(15)
,`otro_parentesco` varchar(15)
,`nombre_alumno` text
,`edad` bigint(21)
,`sexo` varchar(9)
,`id_grado` int(11)
,`grado` varchar(25)
,`escuela_procedencia` varchar(250)
,`nombre_escuela` varchar(250)
,`estado_escuela` int(11)
,`municipio_escuela` int(11)
,`ponderacion` bigint(21)
,`id_escuela` varchar(1)
,`fecha_nacimiento_alumno` date
,`Residente` tinyint(1)
,`trabaja_mun_alcaldia` int(11)
,`id_especialista` int(11)
,`EstadoDondeResideElAlumno` int(11)
,`MunicipioDondeResideElAlumno` int(11)
,`UrbanizacionOSectorDondeResideElAlumno` varchar(250)
,`CalleOAvenidaDondeResideElAlumno` varchar(250)
,`CasaOEdificioDondeResideElAlumno` varchar(250)
,`PisoOPlantaDondeResideElAlumno` varchar(50)
,`NumeroDeCasaOApartamentoDondeResideElAlumno` varchar(5)
,`TelefonoDeHabitacionDelRepresentante` varchar(15)
,`TelefonoCelularDelRepresentante` varchar(15)
,`StatusCenso` int(2)
,`PuntoDeReferenciaCercanoAlDomicilioDelAlumno` varchar(250)
,`fecha_asistencia` date
,`hora_asistencia` time
,`estado` varchar(150)
,`municipio` varchar(150)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vrptresumen_censo`
--
DROP VIEW IF EXISTS `vrptresumen_censo`;
CREATE TABLE IF NOT EXISTS `vrptresumen_censo` (
`vpuntajecenso_id_censo` int(11)
,`fecha_solicitud` timestamp
,`nombre_representante` text
,`identificacion_representante` int(11)
,`parentesco` varchar(15)
,`otro_parentesco` varchar(15)
,`nombre_alumno` text
,`edad` bigint(21)
,`sexo` varchar(9)
,`id_grado` int(11)
,`grado` varchar(25)
,`escuela_procedencia` varchar(250)
,`nombre_escuela` varchar(250)
,`estado_escuela` int(11)
,`municipio_escuela` int(11)
,`ponderacion` bigint(21)
,`id_escuela` varchar(1)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vteachers`
--
DROP VIEW IF EXISTS `vteachers`;
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
-- Structure for view `vconstancias`
--
DROP TABLE IF EXISTS `vconstancias`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vconstancias` AS select `vresumendatosestudiantes`.`id_estudiante` AS `id_estudiante`,`vresumendatosestudiantes`.`id_persona` AS `id_persona`,`vresumendatosescuela`.`id_escuela` AS `id_escuela`,`vresumendatosestudiantes`.`id_seccion` AS `id_seccion`,`vresumendatosestudiantes`.`id_grado` AS `id_grado`,`vresumendatosestudiantes`.`primer_nombre` AS `primer_nombre_estudiante`,`vresumendatosestudiantes`.`segundo_nombre` AS `segundo_nombre_estudiante`,`vresumendatosestudiantes`.`primer_apellido` AS `primer_apellido_estudiante`,`vresumendatosestudiantes`.`segundo_apellido` AS `segundo_apellido_estudiante`,`vresumendatosestudiantes`.`cedula_escolar` AS `cedula_escolar`,`vresumendatosestudiantes`.`cedula_identidad` AS `cedula_identidad_estudiante`,`vresumendatosestudiantes`.`fecha_nacimiento` AS `fecha_nacimiento`,`vresumendatosestudiantes`.`sexo` AS `sexo`,`vresumendatosestudiantes`.`nombre_grado` AS `nombre_grado`,`vresumendatosestudiantes`.`abreviacion_grado` AS `abreviacion_grado`,`vresumendatosestudiantes`.`nombre_seccion` AS `nombre_seccion`,`vresumendatosestudiantes`.`abreviacion_seccion` AS `abreviacion_seccion`,`vresumendatosescuela`.`nombre_escuela` AS `nombre_escuela`,`vresumendatosescuela`.`director_encargado` AS `director_encargado`,`vresumendatosescuela`.`primer_nombre` AS `primer_nombre_director`,`vresumendatosescuela`.`segundo_nombre` AS `segundo_nombre_director`,`vresumendatosescuela`.`primer_apellido` AS `primer_apellido_director`,`vresumendatosescuela`.`segundo_apellido` AS `segundo apellido_director`,`vresumendatosescuela`.`cedula_identidad` AS `cedula_identidad_director`,`vresumendatosescuela`.`nacionalidad` AS `nacionalidad`,`vresumendatosescuela`.`correo_electronico` AS `correo_electronico`,`vresumendatosescuela`.`parroquia` AS `parroquia`,`vresumendatosescuela`.`municipio` AS `municipio`,`vresumendatosescuela`.`estado` AS `estado`,`vresumendatosescuela`.`telefono` AS `telefono`,`vresumendatosescuela`.`calle_avenida` AS `calle_avenida`,`vresumendatosescuela`.`edificio_casa` AS `edificio_casa`,`vresumendatosescuela`.`oficina_apartamento` AS `oficina_apartamento`,`vresumendatosescuela`.`punto_referencia` AS `punto_referencia` from ((`vresumendatosestudiantes` join `estudiantes` on((`vresumendatosestudiantes`.`id_estudiante` = `estudiantes`.`id_estudiante`))) join `vresumendatosescuela` on((`estudiantes`.`id_escuela` = `vresumendatosescuela`.`id_escuela`)));

-- --------------------------------------------------------

--
-- Structure for view `vescuelaseccion`
--
DROP TABLE IF EXISTS `vescuelaseccion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vescuelaseccion` AS select `escuelas`.`id_escuela` AS `id_escuela`,`grado_escuela`.`id_seccion` AS `id_seccion`,`grado_escuela`.`id_grado` AS `id_grado`,`secciones`.`nombre_seccion` AS `nombre_seccion`,`secciones`.`abreviacion_seccion` AS `abreviacion_seccion` from ((`escuelas` join `grado_escuela` on((`escuelas`.`id_escuela` = `grado_escuela`.`id_escuela`))) join `secciones` on((`grado_escuela`.`id_seccion` = `secciones`.`id_seccion`)));

-- --------------------------------------------------------

--
-- Structure for view `vescuela_seccion`
--
DROP TABLE IF EXISTS `vescuela_seccion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vescuela_seccion` AS select `secciones`.`id_seccion` AS `id_seccion`,`secciones`.`id_grado` AS `id_grado`,`secciones`.`nombre_seccion` AS `nombre_seccion`,`secciones`.`abreviacion_seccion` AS `abreviacion_seccion`,`secciones`.`fecha_creacion` AS `fecha_creacion`,`secciones`.`fecha_actualizacion` AS `fecha_actualizacion`,`secciones`.`registro_activo` AS `registro_activo`,`secciones`.`teacher_id` AS `teacher_id`,`secciones`.`letra_seccion` AS `letra_seccion`,`escuela_seccion`.`id_escuela` AS `id_escuela`,`escuela_seccion`.`idescuela_seccion` AS `idescuela_seccion` from (`escuela_seccion` left join `secciones` on((`escuela_seccion`.`id_seccion` = `secciones`.`id_seccion`))) order by `escuela_seccion`.`id_escuela`,`secciones`.`id_grado`,`secciones`.`id_seccion`;

-- --------------------------------------------------------

--
-- Structure for view `vestudiantesasistencia`
--
DROP TABLE IF EXISTS `vestudiantesasistencia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vestudiantesasistencia` AS select `estudiantes`.`id_estudiante` AS `id_estudiante`,`estudiantes`.`id_grado` AS `id_grado`,`estudiantes`.`id_seccion` AS `id_seccion`,`personas`.`primer_nombre` AS `primer_nombre`,`personas`.`segundo_nombre` AS `segundo_nombre`,`personas`.`primer_apellido` AS `primer_apellido`,`personas`.`segundo_apellido` AS `segundo_apellido` from (`estudiantes` join `personas` on((`estudiantes`.`id_persona` = `personas`.`id_persona`)));

-- --------------------------------------------------------

--
-- Structure for view `vgradoescuela`
--
DROP TABLE IF EXISTS `vgradoescuela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vgradoescuela` AS select `escuelas`.`id_escuela` AS `id_escuela`,`grados`.`id_grado` AS `id_grado`,`grados`.`nombre_grado` AS `nombre_grado` from ((`escuelas` join `grado_escuela` on((`escuelas`.`id_escuela` = `grado_escuela`.`id_escuela`))) join `grados` on((`grado_escuela`.`id_grado` = `grados`.`id_grado`))) order by `grados`.`id_grado`;

-- --------------------------------------------------------

--
-- Structure for view `vniveleducativoescuela`
--
DROP TABLE IF EXISTS `vniveleducativoescuela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vniveleducativoescuela` AS select `escuela_nivel_educativo`.`id_escuela_nivel_educativo` AS `id_escuela_nivel_educativo`,`escuela_nivel_educativo`.`id_escuela` AS `id_escuela`,`niveles_educativos`.`id_niveles_eductivos` AS `id_nivel_educativo`,`niveles_educativos`.`valor` AS `valor`,`escuela_nivel_educativo`.`registro_activo` AS `registro_Activo` from (`escuela_nivel_educativo` join `niveles_educativos` on((`escuela_nivel_educativo`.`id_nivel_educativo` = `niveles_educativos`.`id_niveles_eductivos`))) where (`escuela_nivel_educativo`.`registro_activo` = 1);

-- --------------------------------------------------------

--
-- Structure for view `vniveleducativogrado`
--
DROP TABLE IF EXISTS `vniveleducativogrado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vniveleducativogrado` AS select `niveles_educativos`.`id_niveles_eductivos` AS `id_nivel_educativo`,`niveles_educativos`.`valor` AS `nivel_educativo`,`escuela_nivel_educativo_grado`.`id_grado` AS `id_grado`,`grados`.`nombre_grado` AS `nombre_grado`,`grados`.`abreviacion_grado` AS `abreviacion_grado`,`escuela_nivel_educativo`.`id_escuela` AS `id_escuela`,`escuela_nivel_educativo`.`registro_activo` AS `registro_activo` from (((`niveles_educativos` join `escuela_nivel_educativo` on((`niveles_educativos`.`id_niveles_eductivos` = `escuela_nivel_educativo`.`id_nivel_educativo`))) join `escuela_nivel_educativo_grado` on((`escuela_nivel_educativo`.`id_escuela_nivel_educativo` = `escuela_nivel_educativo_grado`.`id_escuela_nivel_educativo`))) join `grados` on((`escuela_nivel_educativo_grado`.`id_grado` = `grados`.`id_grado`)));

-- --------------------------------------------------------

--
-- Structure for view `vniveleducativogradoseccion`
--
DROP TABLE IF EXISTS `vniveleducativogradoseccion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vniveleducativogradoseccion` AS select `niveles_educativos`.`id_niveles_eductivos` AS `id_nivel_educativo`,`niveles_educativos`.`valor` AS `nivel_educativo`,`escuela_nivel_educativo_grado`.`id_grado` AS `id_grado`,`grados`.`nombre_grado` AS `nombre_grado`,`grados`.`abreviacion_grado` AS `abreviacion_grado`,`escuela_nivel_educativo`.`id_escuela` AS `id_escuela`,`grados`.`registro_activo` AS `registro_activo`,`secciones`.`id_seccion` AS `id_seccion`,`secciones`.`nombre_seccion` AS `nombre_seccion`,`secciones`.`abreviacion_seccion` AS `abreviacion_seccion` from ((((`niveles_educativos` join `escuela_nivel_educativo` on((`niveles_educativos`.`id_niveles_eductivos` = `escuela_nivel_educativo`.`id_nivel_educativo`))) join `escuela_nivel_educativo_grado` on((`escuela_nivel_educativo`.`id_escuela_nivel_educativo` = `escuela_nivel_educativo_grado`.`id_escuela_nivel_educativo`))) join `grados` on((`escuela_nivel_educativo_grado`.`id_grado` = `grados`.`id_grado`))) join `secciones` on((`grados`.`id_grado` = `secciones`.`id_grado`)));

-- --------------------------------------------------------

--
-- Structure for view `vpuntajecenso`
--
DROP TABLE IF EXISTS `vpuntajecenso`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vpuntajecenso` AS select `puntaje_censo`.`id_censo` AS `id_censo`,`puntaje_censo`.`id_puntaje_censo` AS `id_puntaje_censo`,`censo`.`IDEscuelaAsignada` AS `id_escuela`,`censo`.`PrimerNombreDelAlumno` AS `primer_nombre`,`censo`.`SegundoNombreDelAlumno` AS `segundo_nombre`,`censo`.`PrimerApellidoDelAlumno` AS `primer_apellido`,`censo`.`SegundoApellidoDelAlumno` AS `segundo_apellido`,`censo`.`CedulaDeIdentidadDelAlumnoOCedulaEscolar` AS `cedula_identidad`,`censo`.`FechaDeNacimientoDelAlumno` AS `fecha_nacimiento_alumno`,`censo`.`CedulaDeIdentidadDelRepresentante` AS `cedula_identidad_representante`,`censo`.`PrimerNombreDelRepresentante` AS `primer_nombre_representante`,`censo`.`SegundoNombreDelRepresentante` AS `segundo_nombre_representante`,`censo`.`PrimerApellidoDelRepresentante` AS `primer_apellido_representante`,`censo`.`SegundoApellidoDelRepresentante` AS `segundo_apellido_representante`,`censo`.`GradoACursar` AS `grado_cursar`,`censo`.`Puntaje` AS `Puntaje`,`puntaje_censo`.`escolaridad` AS `escolaridad`,`puntaje_censo`.`residencia` AS `residencia`,`puntaje_censo`.`orfandad` AS `orfandad`,`puntaje_censo`.`representante_trabaja` AS `representante_trabaja`,`puntaje_censo`.`representante_jornada_laboral` AS `representante_jornada_laboral`,`puntaje_censo`.`representante_nivel_ingreso` AS `representante_nivel_ingreso`,`puntaje_censo`.`miembros_familia` AS `miembros_familia`,`puntaje_censo`.`vivienda` AS `vivienda`,`puntaje_censo`.`hijos_escuela_chacao` AS `hijos_escuela_municipio`,`puntaje_censo`.`trabaja_municipio_alcaldia` AS `trabaja_mun_alcaldia`,((((((((((`puntaje_censo`.`escolaridad` + `puntaje_censo`.`residencia`) + `puntaje_censo`.`orfandad`) + `puntaje_censo`.`representante_trabaja`) + `puntaje_censo`.`representante_jornada_laboral`) + `puntaje_censo`.`representante_nivel_ingreso`) + `puntaje_censo`.`miembros_familia`) + `puntaje_censo`.`vivienda`) + `puntaje_censo`.`no_residente`) + `puntaje_censo`.`trabaja_municipio_alcaldia`) + `puntaje_censo`.`hijos_escuela_chacao`) AS `puntaje_total`,`censo`.`Residente` AS `Residente`,`censo`.`CuposASolicitar` AS `CuposASolicitar`,`censo`.`ElAlumnoEstudiaActualmente` AS `ElAlumnoEstudiaActualmente`,`censo`.`ElAlumnoCursoElAnterior` AS `ElAlumnoCursoElAnterior`,`censo`.`ElAlumnoRepiteGrado` AS `ElAlumnoRepiteGrado`,`censo`.`UnidadEducativaDeProcedencia` AS `UnidadEducativaDeProcedencia`,`censo`.`NombreDeLaInstitucion` AS `NombreDeLaInstitucion`,`censo`.`EstadoInstitucion` AS `EstadoInstitucion`,`censo`.`MunicipioInstitucion` AS `MunicipioInstitucion`,`censo`.`MateriaPendiente` AS `MateriaPendiente`,`censo`.`RazonSocioeco` AS `RazonSocioeco`,`censo`.`RazonCambioResi` AS `RazonCambioResi`,`censo`.`RazonNoAdapta` AS `RazonNoAdapta`,`censo`.`RazonOtra` AS `RazonOtra`,`censo`.`SexoDelAlumno` AS `SexoDelAlumno`,`censo`.`NacionalidadDelAlumno` AS `NacionalidadDelAlumno`,`censo`.`EstadoDondeResideElAlumno` AS `EstadoDondeResideElAlumno`,`censo`.`MunicipioDondeResideElAlumno` AS `MunicipioDondeResideElAlumno`,`censo`.`UrbanizacionOSectorDondeResideElAlumno` AS `UrbanizacionOSectorDondeResideElAlumno`,`censo`.`CalleOAvenidaDondeResideElAlumno` AS `CalleOAvenidaDondeResideElAlumno`,`censo`.`CasaOEdificioDondeResideElAlumno` AS `CasaOEdificioDondeResideElAlumno`,`censo`.`PisoOPlantaDondeResideElAlumno` AS `PisoOPlantaDondeResideElAlumno`,`censo`.`NumeroDeCasaOApartamentoDondeResideElAlumno` AS `NumeroDeCasaOApartamentoDondeResideElAlumno`,`censo`.`ParentescoConElAlumno` AS `ParentescoConElAlumno`,`censo`.`OtroParentescoConElAlumno` AS `OtroParentescoConElAlumno`,`censo`.`FechaDeNacimientoDelRepresentante` AS `FechaDeNacimientoDelRepresentante`,`censo`.`NacionalidadDelRepresentante` AS `NacionalidadDelRepresentante`,`censo`.`EstadoCivilDelRepresentante` AS `EstadoCivilDelRepresentante`,`censo`.`RepresentanteMismaDireAlu` AS `RepresentanteMismaDireAlu`,`censo`.`TelefonoDeHabitacionDelRepresentante` AS `TelefonoDeHabitacionDelRepresentante`,`censo`.`TelefonoCelularDelRepresentante` AS `TelefonoCelularDelRepresentante`,`censo`.`CorreoElectronicoDelRepresentante` AS `CorreoElectronicoDelRepresentante`,`censo`.`TrabajaActualmente` AS `TrabajaActualmente`,`censo`.`TrabajaDentroChacao` AS `TrabajaDentroChacao`,`censo`.`LaMadreVive` AS `LaMadreVive`,`censo`.`ElPadreVive` AS `ElPadreVive`,`censo`.`ElAlumnoEstaBecado` AS `ElAlumnoEstaBecado`,`censo`.`MedioDeTrasladoAlPlantel` AS `MedioDeTrasladoAlPlantel`,`censo`.`ElAlumnoSeRetiraSoloDelPlantel` AS `ElAlumnoSeRetiraSoloDelPlantel`,`censo`.`HermanosEstudianEnUnidadesEducativasMunicipales` AS `HermanosEstudianEnUnidadesEducativasMunicipales`,`censo`.`DatosDeLaVivienda` AS `DatosDeLaVivienda`,`censo`.`FactorRh` AS `FactorRh`,`censo`.`GrupoSanguineo` AS `GrupoSanguineo`,`censo`.`PartoMultiple` AS `PartoMultiple`,`censo`.`Estatura` AS `Estatura`,`censo`.`Peso` AS `Peso`,`censo`.`TallaCamisa` AS `TallaCamisa`,`censo`.`TallaPantalon` AS `TallaPantalon`,`censo`.`TallaCalzado` AS `TallaCalzado`,`censo`.`TipoDeParto` AS `TipoDeParto`,`censo`.`PadeceAlgunaEnfermedad` AS `PadeceAlgunaEnfermedad`,`censo`.`ElAlumnoTieneAlgunaDiversidadFuncional` AS `ElAlumnoTieneAlgunaDiversidadFuncional`,`censo`.`ElAlumnoHaSidoOperado` AS `ElAlumnoHaSidoOperado`,`censo`.`ElAlumnoEsAlergico` AS `ElAlumnoEsAlergico`,`censo`.`RegimenEspecialDeAlimentacionOTratamiento` AS `RegimenEspecialDeAlimentacionOTratamiento`,`censo`.`NombreYApellidoDelContactoDeEmergencia1` AS `NombreYApellidoDelContactoDeEmergencia1`,`censo`.`TelefonoDelContactoDeEmergencia1` AS `TelefonoDelContactoDeEmergencia1`,`censo`.`ParentescoDelContactoDeEmergencia1ConElAlumno` AS `ParentescoDelContactoDeEmergencia1ConElAlumno`,`censo`.`NombreYApellidoDelContactoDeEmergencia2` AS `NombreYApellidoDelContactoDeEmergencia2`,`censo`.`TelefonoDelContactoDeEmergencia2` AS `TelefonoDelContactoDeEmergencia2`,`censo`.`ParentescoDelContactoDeEmergencia2ConElAlumno` AS `ParentescoDelContactoDeEmergencia2ConElAlumno`,`censo`.`StatusCenso` AS `StatusCenso`,`censo`.`UniDePrefJuanDio` AS `UniDePrefJuanDio`,`censo`.`UniDePrefAndres` AS `UniDePrefAndres`,`censo`.`UniDePrefCarlos` AS `UniDePrefCarlos`,`censo`.`FechaSolicitud` AS `fecha_solicitud`,`puntaje_censo`.`hijos_escuela_chacao` AS `hijos_escuela_chacao`,`puntaje_censo`.`trabaja_municipio_alcaldia` AS `trabaja_municipio_alcaldia`,`censo`.`id_especialista` AS `id_especialista`,`censo`.`PuntoDeReferenciaCercanoAlDomicilioDelAlumno` AS `PuntoDeReferenciaCercanoAlDomicilioDelAlumno`,`entrevista_censo`.`fecha_asistencia` AS `fecha_asistencia`,`entrevista_censo`.`hora_asistencia` AS `hora_asistencia`,`entrevista_censo`.`disponible` AS `disponible` from ((`puntaje_censo` join `censo` on((`censo`.`id_censo` = `puntaje_censo`.`id_censo`))) join `entrevista_censo` on((`puntaje_censo`.`id_censo` = `entrevista_censo`.`id_censo_asignado`))) order by `censo`.`FechaSolicitud`,((((((((((`puntaje_censo`.`escolaridad` + `puntaje_censo`.`residencia`) + `puntaje_censo`.`orfandad`) + `puntaje_censo`.`representante_trabaja`) + `puntaje_censo`.`representante_jornada_laboral`) + `puntaje_censo`.`representante_nivel_ingreso`) + `puntaje_censo`.`miembros_familia`) + `puntaje_censo`.`vivienda`) + `puntaje_censo`.`no_residente`) + `puntaje_censo`.`hijos_escuela_chacao`) + `puntaje_censo`.`trabaja_municipio_alcaldia`);

-- --------------------------------------------------------

--
-- Structure for view `vrecaudosgrado`
--
DROP TABLE IF EXISTS `vrecaudosgrado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vrecaudosgrado` AS select `grados`.`id_grado` AS `id_grado`,`recaudo_grado`.`id_recaudo_grado` AS `id_recaudo_grado`,`recaudos`.`id_recaudo` AS `id_recaudo`,`recaudos`.`valor` AS `valor` from ((`grados` join `recaudo_grado` on((`grados`.`id_grado` = `recaudo_grado`.`id_grado`))) join `recaudos` on((`recaudos`.`id_recaudo` = `recaudo_grado`.`id_recaudo`))) where (`recaudos`.`registro_activo` = 1);

-- --------------------------------------------------------

--
-- Structure for view `vresumencensogrado`
--
DROP TABLE IF EXISTS `vresumencensogrado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vresumencensogrado` AS select sum(`censo`.`UniDePrefAndres`) AS `UniDePrefAndres`,sum(`censo`.`UniDePrefCarlos`) AS `UniDePrefCarlos`,sum(`censo`.`UniDePrefJuanDio`) AS `UniDePrefJuanDio`,count((case `censo`.`Residente` when 1 then 'RESIDENTE' end)) AS `Residente`,count((case `censo`.`Residente` when 0 then 'NO RESIDENTE' end)) AS `NoResidente`,`censo`.`GradoACursar` AS `GradoACursar` from `censo` group by `censo`.`GradoACursar`;

-- --------------------------------------------------------

--
-- Structure for view `vresumendatosescuela`
--
DROP TABLE IF EXISTS `vresumendatosescuela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vresumendatosescuela` AS select `escuelas`.`id_escuela` AS `id_escuela`,`escuelas`.`nombre_escuela` AS `nombre_escuela`,`escuelas`.`director_encargado` AS `director_encargado`,`personas`.`primer_nombre` AS `primer_nombre`,`personas`.`segundo_nombre` AS `segundo_nombre`,`personas`.`primer_apellido` AS `primer_apellido`,`personas`.`segundo_apellido` AS `segundo_apellido`,`personas`.`cedula_identidad` AS `cedula_identidad`,`personas`.`nacionalidad` AS `nacionalidad`,`personas`.`correo_electronico` AS `correo_electronico`,`parroquias`.`nombre` AS `parroquia`,`municipios`.`nombre` AS `municipio`,`estados`.`nombre` AS `estado`,`telefonos`.`telefono` AS `telefono`,`direcciones`.`calle_avenida` AS `calle_avenida`,`direcciones`.`edificio_casa` AS `edificio_casa`,`direcciones`.`oficina_apartamento` AS `oficina_apartamento`,`direcciones`.`punto_referencia` AS `punto_referencia` from ((((((`direcciones` join `estados` on((`direcciones`.`id_estado` = `estados`.`id_estado`))) join `municipios` on((`direcciones`.`id_municipio` = `municipios`.`id_municipio`))) join `parroquias` on((`direcciones`.`id_parroquia` = `parroquias`.`id_parroquia`))) join `escuelas` on((`escuelas`.`id_direccion_escuela` = `direcciones`.`id_direccion`))) join `telefonos` on((`escuelas`.`id_telefono_escuela` = `telefonos`.`id_telefono`))) join `personas` on((`escuelas`.`id_persona_director` = `personas`.`id_persona`))) where (`escuelas`.`registro_activo` = 1);

-- --------------------------------------------------------

--
-- Structure for view `vresumendatosestudiantes`
--
DROP TABLE IF EXISTS `vresumendatosestudiantes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vresumendatosestudiantes` AS select `estudiantes`.`id_estudiante` AS `id_estudiante`,`personas`.`id_persona` AS `id_persona`,`secciones`.`id_seccion` AS `id_seccion`,`grados`.`id_grado` AS `id_grado`,`personas`.`primer_nombre` AS `primer_nombre`,`personas`.`segundo_nombre` AS `segundo_nombre`,`personas`.`primer_apellido` AS `primer_apellido`,`personas`.`segundo_apellido` AS `segundo_apellido`,`estudiantes`.`cedula_escolar` AS `cedula_escolar`,`estudiantes`.`cedula_identidad` AS `cedula_identidad`,`personas`.`fecha_nacimiento` AS `fecha_nacimiento`,`sexos`.`sexo` AS `sexo`,`grados`.`nombre_grado` AS `nombre_grado`,`grados`.`abreviacion_grado` AS `abreviacion_grado`,`secciones`.`nombre_seccion` AS `nombre_seccion`,`secciones`.`abreviacion_seccion` AS `abreviacion_seccion`,`estudiantes`.`registro_activo` AS `estudiante_activo`,`personas`.`registro_activo` AS `persona_activa` from ((`secciones` left join (`grados` left join (`estudiantes` join `personas` on((`estudiantes`.`id_persona` = `personas`.`id_persona`))) on((`estudiantes`.`id_grado` = `grados`.`id_grado`))) on((`grados`.`id_grado` = `secciones`.`id_grado`))) join `sexos` on((`personas`.`id_sexo` = `sexos`.`id_sexo`))) where ((`personas`.`registro_activo` = 1) and (`estudiantes`.`registro_activo` = 1));

-- --------------------------------------------------------

--
-- Structure for view `vresumenescuela`
--
DROP TABLE IF EXISTS `vresumenescuela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vresumenescuela` AS select count((case `censo`.`Residente` when 1 then 'RESIDENTE' end)) AS `residente`,count((case `censo`.`Residente` when 0 then 'NO RESIDENTE' end)) AS `no_residente`,count((case `censo`.`StatusCenso` when 0 then 'PENDIENTE' end)) AS `pendiente`,count((case `censo`.`StatusCenso` when 1 then 'VALIDADO' end)) AS `validado`,count((case `censo`.`StatusCenso` when 2 then 'ASIGNADO' end)) AS `asignado`,count((case `censo`.`StatusCenso` when 3 then 'APROBADO' end)) AS `aprobado`,count((case `censo`.`StatusCenso` when 4 then 'ANULADO' end)) AS `anulado`,if((`censo`.`UniDePrefAndres` = 1),'UEM ANDRES BELLO',if((`censo`.`UniDePrefCarlos` = 1),'UEMI CARLOS SOUBLETTE',if((`censo`.`UniDePrefJuanDio` = 1),'UEM JUAN DE DIOS GUANCHE',''))) AS `escuela` from `censo` group by if((`censo`.`UniDePrefAndres` = 1),'UEM ANDRES BELLO',if((`censo`.`UniDePrefCarlos` = 1),'UEMI CARLOS SOUBLETTE',if((`censo`.`UniDePrefJuanDio` = 1),'UEM JUAN DE DIOS GUANCHE','')));

-- --------------------------------------------------------

--
-- Structure for view `vrpresumencenso`
--
DROP TABLE IF EXISTS `vrpresumencenso`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vrpresumencenso` AS select `vpuntajecenso`.`id_censo` AS `vpuntajecenso_id_censo`,`vpuntajecenso`.`fecha_solicitud` AS `fecha_solicitud`,ucase(concat(`vpuntajecenso`.`primer_nombre_representante`,'  ',`vpuntajecenso`.`segundo_nombre_representante`,'  ',`vpuntajecenso`.`primer_apellido_representante`,'  ',`vpuntajecenso`.`segundo_apellido_representante`)) AS `nombre_representante`,`vpuntajecenso`.`cedula_identidad_representante` AS `identificacion_representante`,ucase(`vpuntajecenso`.`ParentescoConElAlumno`) AS `parentesco`,ucase(`vpuntajecenso`.`OtroParentescoConElAlumno`) AS `otro_parentesco`,ucase(concat(`vpuntajecenso`.`primer_nombre`,'  ',`vpuntajecenso`.`segundo_nombre`,'  ',`vpuntajecenso`.`primer_apellido`,'  ',`vpuntajecenso`.`segundo_apellido`)) AS `nombre_alumno`,if((`vpuntajecenso`.`fecha_nacimiento_alumno` = '0000-00-00'),0,timestampdiff(YEAR,`vpuntajecenso`.`fecha_nacimiento_alumno`,curdate())) AS `edad`,`vpuntajecenso`.`SexoDelAlumno` AS `sexo`,`vpuntajecenso`.`grado_cursar` AS `id_grado`,ucase(`censo_grados`.`grado`) AS `grado`,ucase(`vpuntajecenso`.`UnidadEducativaDeProcedencia`) AS `escuela_procedencia`,ucase(`vpuntajecenso`.`NombreDeLaInstitucion`) AS `nombre_escuela`,`vpuntajecenso`.`EstadoInstitucion` AS `estado_escuela`,`vpuntajecenso`.`MunicipioInstitucion` AS `municipio_escuela`,`vpuntajecenso`.`puntaje_total` AS `ponderacion`,if((`vpuntajecenso`.`UniDePrefAndres` = 1),'1',if((`vpuntajecenso`.`UniDePrefCarlos` = 1),'3',if((`vpuntajecenso`.`UniDePrefJuanDio` = 1),'2',''))) AS `id_escuela`,`vpuntajecenso`.`fecha_nacimiento_alumno` AS `fecha_nacimiento_alumno`,`vpuntajecenso`.`Residente` AS `Residente`,`vpuntajecenso`.`trabaja_mun_alcaldia` AS `trabaja_mun_alcaldia`,`vpuntajecenso`.`id_especialista` AS `id_especialista`,`vpuntajecenso`.`EstadoDondeResideElAlumno` AS `EstadoDondeResideElAlumno`,`vpuntajecenso`.`MunicipioDondeResideElAlumno` AS `MunicipioDondeResideElAlumno`,ucase(`vpuntajecenso`.`UrbanizacionOSectorDondeResideElAlumno`) AS `UrbanizacionOSectorDondeResideElAlumno`,ucase(`vpuntajecenso`.`CalleOAvenidaDondeResideElAlumno`) AS `CalleOAvenidaDondeResideElAlumno`,`vpuntajecenso`.`CasaOEdificioDondeResideElAlumno` AS `CasaOEdificioDondeResideElAlumno`,`vpuntajecenso`.`PisoOPlantaDondeResideElAlumno` AS `PisoOPlantaDondeResideElAlumno`,`vpuntajecenso`.`NumeroDeCasaOApartamentoDondeResideElAlumno` AS `NumeroDeCasaOApartamentoDondeResideElAlumno`,`vpuntajecenso`.`TelefonoDeHabitacionDelRepresentante` AS `TelefonoDeHabitacionDelRepresentante`,`vpuntajecenso`.`TelefonoCelularDelRepresentante` AS `TelefonoCelularDelRepresentante`,`vpuntajecenso`.`StatusCenso` AS `StatusCenso`,`vpuntajecenso`.`PuntoDeReferenciaCercanoAlDomicilioDelAlumno` AS `PuntoDeReferenciaCercanoAlDomicilioDelAlumno`,`vpuntajecenso`.`fecha_asistencia` AS `fecha_asistencia`,`vpuntajecenso`.`hora_asistencia` AS `hora_asistencia`,`estados`.`nombre` AS `estado`,`municipios`.`nombre` AS `municipio` from (((`vpuntajecenso` left join `censo_grados` on((`censo_grados`.`id_censo_grado` = `vpuntajecenso`.`grado_cursar`))) join `municipios` on((`vpuntajecenso`.`MunicipioDondeResideElAlumno` = `municipios`.`id_municipio`))) join `estados` on((`vpuntajecenso`.`EstadoDondeResideElAlumno` = `estados`.`id_estado`))) where ((`vpuntajecenso`.`StatusCenso` < 4) and (`vpuntajecenso`.`disponible` = 0));

-- --------------------------------------------------------

--
-- Structure for view `vrptresumen_censo`
--
DROP TABLE IF EXISTS `vrptresumen_censo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vrptresumen_censo` AS select `vpuntajecenso`.`id_censo` AS `vpuntajecenso_id_censo`,`vpuntajecenso`.`fecha_solicitud` AS `fecha_solicitud`,concat(`vpuntajecenso`.`primer_nombre_representante`,'  ',`vpuntajecenso`.`segundo_nombre_representante`,'  ',`vpuntajecenso`.`primer_apellido_representante`,'  ',`vpuntajecenso`.`segundo_apellido_representante`) AS `nombre_representante`,`vpuntajecenso`.`cedula_identidad_representante` AS `identificacion_representante`,`vpuntajecenso`.`ParentescoConElAlumno` AS `parentesco`,`vpuntajecenso`.`OtroParentescoConElAlumno` AS `otro_parentesco`,concat(`vpuntajecenso`.`primer_nombre`,'  ',`vpuntajecenso`.`segundo_nombre`,'  ',`vpuntajecenso`.`primer_apellido`,'  ',`vpuntajecenso`.`segundo_apellido`) AS `nombre_alumno`,if((`vpuntajecenso`.`fecha_nacimiento_alumno` = '0000-00-00'),0,timestampdiff(YEAR,`vpuntajecenso`.`fecha_nacimiento_alumno`,curdate())) AS `edad`,`vpuntajecenso`.`SexoDelAlumno` AS `sexo`,`vpuntajecenso`.`grado_cursar` AS `id_grado`,`censo_grados`.`grado` AS `grado`,`vpuntajecenso`.`UnidadEducativaDeProcedencia` AS `escuela_procedencia`,`vpuntajecenso`.`NombreDeLaInstitucion` AS `nombre_escuela`,`vpuntajecenso`.`EstadoInstitucion` AS `estado_escuela`,`vpuntajecenso`.`MunicipioInstitucion` AS `municipio_escuela`,`vpuntajecenso`.`puntaje_total` AS `ponderacion`,if((`vpuntajecenso`.`UniDePrefAndres` = 1),'1',if((`vpuntajecenso`.`UniDePrefCarlos` = 1),'3',if((`vpuntajecenso`.`UniDePrefJuanDio` = 1),'2',''))) AS `id_escuela` from (`vpuntajecenso` left join `censo_grados` on((`censo_grados`.`id_censo_grado` = `vpuntajecenso`.`grado_cursar`)));

-- --------------------------------------------------------

--
-- Structure for view `vteachers`
--
DROP TABLE IF EXISTS `vteachers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tekkoa`@`localhost` SQL SECURITY DEFINER VIEW `vteachers` AS select `cargo`.`cargo_id` AS `cargo_id`,`teacher`.`teacher_id` AS `teacher_id`,`teacher`.`name` AS `name`,`teacher`.`birthday` AS `birthday`,`teacher`.`sex` AS `sex`,`teacher`.`address` AS `address`,`teacher`.`phone` AS `phone`,`teacher`.`email` AS `email`,`teacher`.`password` AS `password`,`teacher`.`mobile_phone` AS `mobile_phone`,`cargo`.`name` AS `cargo` from (`cargo` join `teacher` on((`cargo`.`cargo_id` = `teacher`.`id_cargo`))) where (`teacher`.`registro_activo` = 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `censo`
--
ALTER TABLE `censo`
  ADD CONSTRAINT `fk_grado_a_cursar` FOREIGN KEY (`GradoACursar`) REFERENCES `censo_grados` (`id_censo_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cupos`
--
ALTER TABLE `cupos`
  ADD CONSTRAINT `escuelafk` FOREIGN KEY (`id_escuela`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `gradosfk` FOREIGN KEY (`id_grado`) REFERENCES `grado_escuela` (`id_grado_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `seccionfk` FOREIGN KEY (`id_seccion`) REFERENCES `secciones` (`id_seccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `fk_direcciones_estados1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_direcciones_municipios1` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_direcciones_paises1` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_direcciones_parroquias1` FOREIGN KEY (`id_parroquia`) REFERENCES `parroquias` (`id_parroquia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_direcciones_tipo_direcciones1` FOREIGN KEY (`id_tipo_direccion`) REFERENCES `tipo_direcciones` (`id_tipo_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `empleos`
--
ALTER TABLE `empleos`
  ADD CONSTRAINT `fk_empleos_direcciones1` FOREIGN KEY (`id_direccion_empresa`) REFERENCES `direcciones` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleos_jornadas1` FOREIGN KEY (`id_jornada_laboral`) REFERENCES `jornadas` (`id_jornadas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `escuelas`
--
ALTER TABLE `escuelas`
  ADD CONSTRAINT `fk_escuelas_direcciones1` FOREIGN KEY (`id_direccion_escuela`) REFERENCES `direcciones` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_escuelas_telefonos1` FOREIGN KEY (`id_telefono_escuela`) REFERENCES `telefonos` (`id_telefono`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `escuela_nivel_educativo`
--
ALTER TABLE `escuela_nivel_educativo`
  ADD CONSTRAINT `fk_escuela` FOREIGN KEY (`id_escuela`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nivel_educativo` FOREIGN KEY (`id_nivel_educativo`) REFERENCES `niveles_educativos` (`id_niveles_eductivos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `escuela_nivel_educativo_grado`
--
ALTER TABLE `escuela_nivel_educativo_grado`
  ADD CONSTRAINT `fk_escuela_nivel_educativo` FOREIGN KEY (`id_escuela_nivel_educativo`) REFERENCES `escuela_nivel_educativo` (`id_escuela_nivel_educativo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grado` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `estados`
--
ALTER TABLE `estados`
  ADD CONSTRAINT `fk_estados_paises1` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `estudiantes`
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
-- Constraints for table `grado_escuela`
--
ALTER TABLE `grado_escuela`
  ADD CONSTRAINT `fk_grado_escuela_escuelas1` FOREIGN KEY (`id_escuela`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grado_escuela_grados1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `maestros`
--
ALTER TABLE `maestros`
  ADD CONSTRAINT `fk_maestros_escuelas1` FOREIGN KEY (`id_escuela`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_maestros_personas1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `maestro_grado`
--
ALTER TABLE `maestro_grado`
  ADD CONSTRAINT `fk_maestro_grado_grados1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_maestro_grado_maestros1` FOREIGN KEY (`id_maestro`) REFERENCES `maestros` (`id_maestro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `fk_municipios_estados1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `fk_padres_empleos1` FOREIGN KEY (`id_empleo`) REFERENCES `empleos` (`id_empleo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_padres_personas1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parroquias`
--
ALTER TABLE `parroquias`
  ADD CONSTRAINT `fk_parroquia_municipio1` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `fk_personas_direcciones1` FOREIGN KEY (`id_direccion_persona`) REFERENCES `direcciones` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personas_paises1` FOREIGN KEY (`id_pais_nacimiento`) REFERENCES `paises` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personas_sexos1` FOREIGN KEY (`id_sexo`) REFERENCES `sexos` (`id_sexo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personas_tipo_telefonos1` FOREIGN KEY (`id_telefono_persona`) REFERENCES `tipo_telefonos` (`id_tipo_telefono`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `puntaje_censo`
--
ALTER TABLE `puntaje_censo`
  ADD CONSTRAINT `fk_putaje_censo` FOREIGN KEY (`id_censo`) REFERENCES `censo` (`id_censo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recaudo_estudiante`
--
ALTER TABLE `recaudo_estudiante`
  ADD CONSTRAINT `recaudo_estudiante_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `recaudo_estudiante_recaudo` FOREIGN KEY (`id_recaudo`) REFERENCES `recaudos` (`id_recaudo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recaudo_grado`
--
ALTER TABLE `recaudo_grado`
  ADD CONSTRAINT `fk_recaudos_grado_grados1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_recaudos_grado_recaudos1` FOREIGN KEY (`id_recaudo`) REFERENCES `recaudos` (`id_recaudo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `redes_sociales_usadas`
--
ALTER TABLE `redes_sociales_usadas`
  ADD CONSTRAINT `fk_redes_sociales_usadas_padres1` FOREIGN KEY (`id_padre_representante`) REFERENCES `padres` (`id_padre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_redes_sociales_usadas_redes_sociales1` FOREIGN KEY (`id_red_social`) REFERENCES `redes_sociales` (`id_redes_social`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_redes_sociales_usadas_representantes1` FOREIGN KEY (`id_padre_representante`) REFERENCES `representantes` (`id_representante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `representantes`
--
ALTER TABLE `representantes`
  ADD CONSTRAINT `fk_representantes_empleos1` FOREIGN KEY (`id_empleo`) REFERENCES `empleos` (`id_empleo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_representantes_escala_ingresos1` FOREIGN KEY (`id_escala_ingreso`) REFERENCES `escala_ingresos` (`id_escala_ingreso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_representantes_parentescos1` FOREIGN KEY (`id_parentesco`) REFERENCES `parentescos` (`id_parentesco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_representantes_personas1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sacramentos_recibidos`
--
ALTER TABLE `sacramentos_recibidos`
  ADD CONSTRAINT `fk_sacramentos_recibidos_estudiantes1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sacramentos_recibidos_sacramentos1` FOREIGN KEY (`id_sacramento`) REFERENCES `sacramentos` (`id_sacramento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `secciones`
--
ALTER TABLE `secciones`
  ADD CONSTRAINT `fk_secciones_grados1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `telefonos`
--
ALTER TABLE `telefonos`
  ADD CONSTRAINT `fk_telefonos_tipo_telefonos1` FOREIGN KEY (`id_tipo_telefono`) REFERENCES `tipo_telefonos` (`id_tipo_telefono`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_personas1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
