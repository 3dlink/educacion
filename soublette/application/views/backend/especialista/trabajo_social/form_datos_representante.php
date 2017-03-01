<?php

$edit_data = $this->db->get_where('censo', array('id_censo' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){

$parentesco = $row['ParentescoConElAlumno'];
$nacionalidad_representante = $row['NacionalidadDelRepresentante'];
$otro_parentesco = $row['OtroParentescoConElAlumno'];
$estado_civil_representante = $row['EstadoCivilDelRepresentante'];
$representante_red_facebook = $row['RedSocialRepreFacebook'];
$representante_red_twitter = $row['RedSocialRepreTwitter'];
$representante_red_whatsapp = $row['RedSocialRepreWhatsapp'];
$representante_red_otra = $row['RedSocialRepreOtra'];
$representante_trabaja = $row['TrabajaActualmente'];
$representante_trabaja_municipio = $row['TrabajaDentroChacao'];
$representante_trabaja_alcaldia = $row['TrabajaEnAlcaldia'];
$representante_relacion_laboral = $row['TipoRelacionLaboralRepresentante'];
$jornada_laboral_representante = $row['TipoDeJornadaLaboralDelRepresentante'];
$diversidad_funcional_representante = $row['ElRepresentanteTieneAlgunaDiversidadFuncional'];
$representante_diversidad_motora = $row['RepreDiversidadMotora'];
$representante_diversidad_visual = $row['RepreDiversidadVisual'];
$representante_diversidad_auditiva = $row['RepreDiversidadAuditiva'];
$representante_diversidad_neurologica = $row['RepreDiversidadNeurologica'];
$representante_diversidad_lenguaje = $row['RepreDiversidadLenguaje'];
$representante_diversidad_otra = $row['RepreDiversidadOtra'];
$hijos_estudian_chacao = $row['ElRepresentanteTieneOtrosHijosEstudiandoChacao'];
$hijos_estudian_abello = $row['HijosEstudianAndresBello'];
$hijos_estudian_guanche = $row['HijosEstudianGuanche'];
$hijos_estudian_soublette = $row['HijosEstudianCarlosSoublette'];
$estado_nacimiento_representante = $row['EstadoDondeNacioElRepresentante'];
$municipio_nacimiento_representante = $row['MunicipioDondeNacioElRepresentante'];
$estado_residencia_representante = $row['EstadoDondeResideElRepresentante'];
$municipio_residencia_representante = $row['MunicipioDondeResideElRepresentante'];
$sector_residencia_representante = $row['SectorDondeResideElRepresentante'];
$ingreso_mensual_representante = $row['IngresoMensualDelRepresentante'];
$otros_ingresos_familia = $row['OtrosIngresosDentroDeSuGrupoFamiliar'];

$estado_trabaja_representante = $row['EstadoDondeSeUbicaElTrabajoDelRepresentante'];
$municipio_trabaja_representante = $row['MunicipioDondeTrabajaElRepresentante'];

$dia_nacimiento_rep = substr($row['FechaDeNacimientoDelRepresentante'], 8, 2);
$mes_nacimiento_rep = substr($row['FechaDeNacimientoDelRepresentante'], 5, 2);
$ano_nacimiento_rep = substr($row['FechaDeNacimientoDelRepresentante'], 0, 4);

$nacimiento_rep = $dia_nacimiento_rep.'/'.$mes_nacimiento_rep.'/'.$ano_nacimiento_rep;

?>
<div class="tab-pane box " id="datosRepre">
    <div class="box-content">
        <form id="form-datos-representante" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Parentesco con el alumno<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control tipo-parentesco" name="ParentescoConElAlumno" value="MADRE" <?php echo ($parentesco=='MADRE')?'checked':'' ?> >Madre</label>
                    <label><input type="radio" class="form-control tipo-parentesco" name="ParentescoConElAlumno" value="PADRE" <?php echo ($parentesco=='PADRE')?'checked':'' ?> >Padre</label>
                    <label><input type="radio" class="form-control tipo-parentesco" name="ParentescoConElAlumno" value="OTRO" <?php echo ($parentesco=='OTRO')?'checked':'' ?> >Otro</label>
                </div>
            </div>
            <div class="form-group" id="div-select-tipo-parentesco" style="<?php echo ($parentesco=='OTRO')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Indique el parentesco</label>
                <div class="col-sm-6">
                  <select class="form-control" id="repreParentescoOtro" name="OtroParentescoConElAlumno">
                    <option value="0" disabled="disabled">Seleccione...</option>
                    <option value="ABUELO" <?php echo ($otro_parentesco=='ABUELO')?'selected="selected"':'' ?> >Abuelo</option>
                    <option value="ABUELA" <?php echo ($otro_parentesco=='ABUELA')?'selected="selected"':'' ?> >Abuela</option>
                    <option value="TIA" <?php echo ($otro_parentesco=='TIA')?'selected="selected"':'' ?> >Tía</option>
                    <option value="TIO" <?php echo ($otro_parentesco=='TIO')?'selected="selected"':'' ?> >Tío</option>
                    <option value="MADRINA" <?php echo ($otro_parentesco=='MADRINA')?'selected="selected"':'' ?> >Madrina</option>
                    <option value="PADRINO" <?php echo ($otro_parentesco=='PADRINO')?'selected="selected"':'' ?> >Padrino</option>
                    <option value="HERMANA" <?php echo ($otro_parentesco=='HERMANA')?'selected="selected"':'' ?> >Hermana</option>
                    <option value="HERMANO" <?php echo ($otro_parentesco=='HERMANO')?'selected="selected"':'' ?> >Hermano</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Cédula de identidad<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="6" class="form-control" id="repreCedula" name="CedulaDeIdentidadDelRepresentante" placeholder="Cédula de identidad del representante" value="<?php echo $row['CedulaDeIdentidadDelRepresentante']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Primer nombre<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="reprePrimerNombre" name="PrimerNombreDelRepresentante" placeholder="Primer nombre del representante" value="<?php echo $row['PrimerNombreDelRepresentante']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Segundo nombre</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="repreSegundoNombre" name="SegundoNombreDelRepresentante" placeholder="Segundo nombre del representante" value="<?php echo $row['SegundoNombreDelRepresentante']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Primer apellido<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="reprePrimerApelli" name="PrimerApellidoDelRepresentante" placeholder="Primer apellido del representante" value="<?php echo $row['PrimerApellidoDelRepresentante']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Segundo apellido</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="repreSegundoApelli" name="SegundoApellidoDelRepresentante" placeholder="Segundo apellido del representante" value="<?php echo $row['SegundoApellidoDelRepresentante']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                <div class="col-sm-4">
                        <input type="text" required minlength="2" class="form-control dateToMysql" id="repreFechaNac" name="FechaDeNacimientoDelRepresentante" placeholder="" value="<?php echo $nacimiento_rep?>" >
                        <input type="hidden" required class="form-control" id="idFechaDeNacimientoDelRepresentante" name="FechaDeNacimientoDelRepresentante" placeholder="" value="<?php echo $row['FechaDeNacimientoDelRepresentante'] ?>">
                </div>
                <div class="col-sm-3">
                    <?php
                        $fecha_actual = new DateTime("now");
                        $fecha_nacimiento_rep = new DateTime($row['FechaDeNacimientoDelRepresentante']);

                        $dteDiffRep  = $fecha_actual->diff($fecha_nacimiento_rep);
                    ?>

                    <label for="field-1" class="control-label">Edad: <?php echo $dteDiffRep->format("%Y años"); ?></label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                  <label><input type="radio" required class="form-control repreTipoNacio" name="NacionalidadDelRepresentante" value="VENEZOLANA" <?php echo ($nacionalidad_representante=='VENEZOLANA')?'checked':'' ?> >Venezolana</label>
                    <label><input type="radio" class="form-control repreTipoNacio" name="NacionalidadDelRepresentante" value="EXTRANJERA" <?php echo ($nacionalidad_representante=='EXTRANJERA')?'checked':'' ?> >Extranjera</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Estado civil<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="EstadoCivilDelRepresentante" value="SOLTERO" <?php echo ($estado_civil_representante=='SOLTERO')?'checked':'' ?> >Soltero(a)</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="CASADO" <?php echo ($estado_civil_representante=='CASADO')?'checked':'' ?> >Casado(a)</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="DIVORCIADO" <?php echo ($estado_civil_representante=='DIVORCIADO')?'checked':'' ?> >Divorciado(a)</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="CONCUBINATO" <?php echo ($estado_civil_representante=='CONCUBINATO')?'checked':'' ?> >Concubinato</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="VIUDO" <?php echo ($estado_civil_representante=='VIUDO')?'checked':'' ?> >Viudo(a)</label>
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control select-estado"  id="repreEstadoResidencia" name="EstadoDondeResideElRepresentante" >
	                    <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                    <?php foreach ($estados as $estado_reside_rep){ ?>
                        <option value="<?php echo $estado_reside_rep['id_estado']?>" <?php echo ($estado_residencia_representante==$estado_reside_rep['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado_reside_rep['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select required class="form-control"  id="select-municipio-repreEstadoResidencia" name="MunicipioDondeResideElRepresentante" >
	                  <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                    <?php foreach ($municipios as $municipio){ ?>
                        <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($municipio_residencia_representante==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div id="sectorMunicipioChacaoRepre" class="form-group" style="<?php echo ($row['MunicipioDondeResideElRepresentante']=='183')?'':'display:none' ?>">
                <label for="address" class="col-sm-4 control-label">Sector</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-sector-municipio" name="SectorDondeResideElRepresentante" >
	                    <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                        <?php foreach ($sectores as $sector){ ?>
                            <option value="<?php echo $sector['id_sector']?>" class="oculto" <?php echo ($sector_residencia_representante==$sector['id_sector'])?'selected="selected"':'' ?> > <?php echo $sector['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div id="sectorMunicipioRepre" class="form-group" style="<?php echo ($row['MunicipioDondeResideElRepresentante']=='183')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" class="form-control" id="repreUrbanizacion" name="UrbanizacionOSectorDondeResideElRepresentante" placeholder="Urbanización o sector donde reside el representante" value="<?php echo $row['UrbanizacionOSectorDondeResideElRepresentante']?>" >
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Calle o avenida donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="repreCalle" name="CalleOAvenidaDondeResideElRepresentante" placeholder="Calle o avenida donde reside el representante" value="<?php echo $row['CalleOAvenidaDondeResideElRepresentante']?>" >
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="1" class="form-control" id="repreCasa" name="CasaOEdificioDondeResideElRepresentante" placeholder="Casa o edificio donde reside el representante" value="<?php echo $row['CasaOEdificioDondeResideElRepresentante']?>" >
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Piso donde reside</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" minlength="1" id="reprePiso" name="PisoDondeResideElRepresentante" placeholder="Piso donde reside el representante" value="<?php echo $row['PisoDondeResideElRepresentante']?>" >
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Número o apartamento donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" minlength="1" id="repreApartamento" name="NumeroOApartamentoDondeResideElRepresentante" placeholder="Número o apartamento donde residem el representante" value="<?php echo $row['NumeroOApartamentoDondeResideElRepresentante']?>" >
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                <div class="col-sm-6">
                    <textarea readonly rows="4" cols="50" name="PuntoDeReferenciaCercanoAlDomicilioDelRepresentante" value="<?php echo $row['PuntoDeReferenciaCercanoAlDomicilioDelRepresentante']?>"><?php echo htmlspecialchars($row['PuntoDeReferenciaCercanoAlDomicilioDelRepresentante']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Telefono de habitación<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="10" class="form-control" id="repreTelefHabi" name="TelefonoDeHabitacionDelRepresentante" placeholder="" value="<?php echo $row['TelefonoDeHabitacionDelRepresentante']?>">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Teléfono celular<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="10" class="form-control" id="repreTelefCelu" name="TelefonoCelularDelRepresentante" placeholder="" value="<?php echo $row['TelefonoCelularDelRepresentante']?>" >

                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Trabaja actualmente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control trabaja-repre" name="TrabajaActualmente" value="1"  <?php echo ($representante_trabaja=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control trabaja-repre" name="TrabajaActualmente" value="0" <?php echo ($representante_trabaja=='0')?'checked':'' ?>>No</label>
                </div>
            </div>
            <div class="form-group repre-trabajador" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Profesión u ocupación</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="repreRelacionLaboral" name="ProfesionUOcupacionDelRepresentante" placeholder="Profesión u ocupación del representante" value="<?php echo $row['ProfesionUOcupacionDelRepresentante']?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-representante" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-representante" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>