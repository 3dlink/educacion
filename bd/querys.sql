DROP TRIGGER IF EXISTS `generar_cedula_escolar`;
DELIMITER //
CREATE TRIGGER `generar_cedula_escolar` BEFORE INSERT ON `inscripcion`
 FOR EACH ROW BEGIN
    DECLARE posicion_parto varchar(2);
    DECLARE ano_nacimiento varchar(2);
    DECLARE ceros varchar(8);
    DECLARE cedula_representante varchar(8);
    DECLARE cedula_escolar varchar(12);
    IF NEW.CedulaDeIdentidadDelAlumnoOCedulaEscolar = '' THEN
        SET ceros = '00000000';
        IF NEW.PosicionParto = 0 THEN
            SET posicion_parto = 1;
        ELSE
            SET posicion_parto = NEW.PosicionParto;
        END IF;

        SET ano_nacimiento = SUBSTR(EXTRACT(YEAR FROM NEW.FechaDeNacimientoDelAlumno),3,4);
        SET cedula_representante = CONCAT(SUBSTR('00000000'FROM LENGTH(NEW.CedulaDeIdentidadDelRepresentante) + 1), NEW.CedulaDeIdentidadDelRepresentante);
        SET NEW.CedulaDeIdentidadDelAlumnoOCedulaEscolar = CONCAT(posicion_parto, ano_nacimiento, cedula_representante);
    END IF;
END
//
DELIMITER ;