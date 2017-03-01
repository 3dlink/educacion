CREATE TABLE `proyecto_est_eva_ins` (
  `proyecto_est_eva_ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id` int(11) NOT NULL,
  `est_eva_ins_id` int(11) NOT NULL,
  PRIMARY KEY (`proyecto_est_eva_ins_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

CREATE TABLE `proyecto_est_eva_tec` (
  `proyecto_est_eva_tec_id` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id` int(11) NOT NULL,
  `est_eva_tec_id` int(11) NOT NULL,
  PRIMARY KEY (`proyecto_est_eva_tec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `proyecto_primaria` (
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

CREATE TABLE `actividades_planificacion_media` (
  `actividades_planificacion_media_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `evaluacion_planificacion_media` (
  `evaluacion_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`evaluacion_planificacion_media_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

CREATE TABLE `instrumento_planificacion_media` (
  `instrumento_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`instrumento_planificacion_media_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

CREATE TABLE `recursos_planificacion_media` (
  `recursos_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`recursos_planificacion_media_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

CREATE TABLE `tecnicas_planificacion_media` (
  `tecnicas_planificacion_media_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`tecnicas_planificacion_media_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

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
(21, 'Test');

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

ALTER TABLE `xcolar_system_chacao`.`exam` 
ADD COLUMN `subject_id` INT(11) NULL DEFAULT 1 AFTER `id_seccion`;

ALTER TABLE `xcolar_system_chacao`.`mark` 
CHANGE COLUMN `mark_obtained` `mark_obtained` INT(11) NOT NULL DEFAULT '1' ,
CHANGE COLUMN `mark_total` `mark_total` INT(11) NOT NULL DEFAULT '20' ;


ALTER TABLE `xcolar_system_chacao`.`mark` 
ADD COLUMN `section_id` INT(11) NOT NULL AFTER `comment`;
