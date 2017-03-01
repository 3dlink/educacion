<?php 

$edit_data = $this->db->get_where('censo', array('id_censo' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){

$dia_nacimiento = substr($row['FechaDeNacimientoDelAlumno'], 8, 2);

$mes_nacimiento = substr($row['FechaDeNacimientoDelAlumno'], 5, 2);
$ano_nacimiento = substr($row['FechaDeNacimientoDelAlumno'], 0, 4);

$nacimiento_alumno = $dia_nacimiento.'/'.$mes_nacimiento.'/'.$ano_nacimiento;

?>
<div class="tab-pane box" id="datosAlu">
    <div class="box-content">
        <form id="form-datos-alumno" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="aluPrimerNombre" class="col-sm-4 control-label">Primer nombre<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <input type="text" required minlength="2" class="form-control" id="aluPrimerNombre" name="PrimerNombreDelAlumno" placeholder="Primer nombre del alumno" value="<?php echo $row['PrimerNombreDelAlumno']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Segundo nombre</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="aluSegundoNombre" name="SegundoNombreDelAlumno" placeholder="Segundo nombre del alumno" value="<?php echo $row['SegundoNombreDelAlumno']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Primer apellido<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="aluPrimerApellido" name="PrimerApellidoDelAlumno" placeholder="Primer apellido del alumno" value="<?php echo $row['PrimerApellidoDelAlumno']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Segundo apellido</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="aluSegundoApellido" name="SegundoApellidoDelAlumno" placeholder="Segundo apellido del alumno" value="<?php echo $row['SegundoApellidoDelAlumno']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Cédula de identidad</label>
                <div class="col-sm-6">
                    <input type="text" minlength="8" class="form-control" id="aluCedula" name="CedulaDeIdentidadDelAlumnoOCedulaEscolar" placeholder="Cédula de identidad del alumno" value="<?php echo $row['CedulaDeIdentidadDelAlumnoOCedulaEscolar']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                <div class="col-sm-4">
                    <input type="text" required class="form-control dateToMysql" id="aluFechaNac" name="FechaDeNacimientoDelAlumno" placeholder="" value="<?php echo $nacimiento_alumno ?>" >
                    <input type="hidden" required class="form-control" id="idFechaDeNacimientoDelAlumno" name="FechaDeNacimientoDelAlumno" value="<?php echo $row['FechaDeNacimientoDelAlumno']?>">
                </div>
                <div class="col-sm-3">
                    <?php 
                        $fecha_actual = new DateTime("now");
                        $fecha_nacimiento = new DateTime($row['FechaDeNacimientoDelAlumno']);

                        $dteDiff  = $fecha_actual->diff($fecha_nacimiento); 
                    ?>

                    <label for="field-1" class="control-label">Edad: <?php echo $dteDiff->format("%Y años %M meses %D días"); ?></label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Genero<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="SexoDelAlumno" value="MASCULINO" <?php echo ($row['SexoDelAlumno']=='MASCULINO')?'checked':'' ?> >Masculino</label>
                    <label><input type="radio" class="form-control" name="SexoDelAlumno" value="FEMENINO" <?php echo ($row['SexoDelAlumno']=='FEMENINO')?'checked':'' ?> >Femenino</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                        <label><input type="radio" id="aluNacVe" required class="form-control" name="NacionalidadDelAlumno" value="VENEZOLANA" <?php echo ($row['NacionalidadDelAlumno']=='VENEZOLANA')?'checked':'' ?> >Venezolana</label>
                        <label><input type="radio" id="aluNacEx" class="form-control" name="NacionalidadDelAlumno" value="EXTRANJERA" <?php echo ($row['NacionalidadDelAlumno']=='EXTRANJERA')?'checked':'' ?> >Extranjera</label>

                </div>
            </div>
            <div class="form-group alu-nacio-ve" style="<?php echo ($row['NacionalidadDelAlumno']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="aluEstadoNac" name="EstadoDondeNacioElAlumno" onChange="changeEstado()">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeNacioElAlumno']==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group alu-nacio-ve" style="<?php echo ($row['NacionalidadDelAlumno']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control" id="select-municipio-aluEstadoNac" name="MunicipioDondeNacioElAlumno" onChange="changeMunicipio()">
                    <?php foreach ($municipios as $municipio){ ?>
                        <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeNacioElAlumno']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group alu-nacio-ve" style="<?php echo ($row['NacionalidadDelAlumno']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Parroquia o sector donde nació</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="aluParroNac" name="ParroquiaOSectorDondeNacioElAlumno" placeholder="Parroquia o sector donde nació el alumno" value="<?php echo $row['ParroquiaOSectorDondeNacioElAlumno']?>">
                </div>
            </div>
            <div class="form-group alu-nacio-ex" style="<?php echo ($row['NacionalidadDelAlumno']=='EXTRANJERA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">País de nacimiento</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="" name="PaisDeNacimientoDelAlumno" placeholder="País de nacimiento del alumno" value="<?php echo $row['PaisDeNacimientoDelAlumno']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" required id="EstadoResidencia" name="EstadoDondeResideElAlumno">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" 
                        <?php
	                        if($row['Residente'] == 1){
		                        echo ($estado['id_estado']==13)?'selected="selected"':'';
	                        }else{
		                        echo ($row['EstadoDondeResideElAlumno']==$estado['id_estado'])?'selected="selected"':'';
	                        }
	                    ?> 
	                    > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" required id="select-municipio-EstadoResidencia" name="MunicipioDondeResideElAlumno" >
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($municipios as $municipio){ ?>
                        <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" 
                        <?php
	                        if($row['Residente'] == 1){
		                        echo ($municipio['id_municipio']==183)?'selected="selected"':'';
	                        }else{
		                        echo ($row['MunicipioDondeResideElAlumno']==$municipio['id_municipio'])?'selected="selected"':'';
	                        }
	                    ?> > <?php echo $municipio['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div id="sectorMunicipioChacaoAlumno" class="form-group" style="<?php echo ($row['Residente']==1)?'':'display:none' ?>">
                <label for="address" class="col-sm-4 control-label">Sector</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-sector-municipio-alumno" name="SectorDondeResideElAlumno" >
                        <?php foreach ($sectores as $sector){ ?>
                            <option value="<?php echo $sector['id_sector']?>" class="oculto" <?php echo ($row['SectorDondeResideElAlumno']==$sector['id_sector'])?'selected="selected"':'' ?> > <?php echo $sector['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div id="sectorMunicipioAlumno" class="form-group" style="<?php echo ($row['Residente']==1)?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label" >Urbanización o sector donde reside</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="aluUrbSector" name="UrbanizacionOSectorDondeResideElAlumno" placeholder="Urbanizacion o sector donde reside el alumno" value="<?php echo $row['UrbanizacionOSectorDondeResideElAlumno']?>">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Calle o avenida donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" id="aluCalleAve" name="CalleOAvenidaDondeResideElAlumno" placeholder="Calle o avenida donde reside el alumno" value="<?php echo $row['CalleOAvenidaDondeResideElAlumno']?>">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" id="aluEdifCasa" name="CasaOEdificioDondeResideElAlumno" placeholder="Casa o edificio donde reside el alumno" value="<?php echo $row['CasaOEdificioDondeResideElAlumno']?>">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Piso o planta donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" minlength="1" class="form-control" id="aluPisoPlanta" name="PisoOPlantaDondeResideElAlumno" placeholder="Piso o planta donde reside el alumno" value="<?php echo $row['PisoOPlantaDondeResideElAlumno']?>">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Número de casa o apartamento donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="1" class="form-control" id="aluNumCasaApart" name="NumeroDeCasaOApartamentoDondeResideElAlumno" placeholder="Numero de casa o apartamento donde reside el alumno" value="<?php echo $row['NumeroDeCasaOApartamentoDondeResideElAlumno']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                <div class="col-sm-6">
                    <input type="text"  class="form-control" id="aluPuntoRef" name="PuntoDeReferenciaCercanoAlDomicilioDelAlumno" placeholder="" value="<?php echo $row['PuntoDeReferenciaCercanoAlDomicilioDelAlumno']?>"  >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-alumno" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-alumno" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>