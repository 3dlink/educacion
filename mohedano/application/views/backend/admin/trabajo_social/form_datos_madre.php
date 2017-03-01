<?php 

$edit_data = $this->db->get_where('censo', array('id_censo' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){

$dia_nacimiento_madre = substr($row['FechaDeNacimientoDeLaMadre'], 8, 2);
$mes_nacimiento_madre = substr($row['FechaDeNacimientoDeLaMadre'], 5, 2);
$ano_nacimiento_madre = substr($row['FechaDeNacimientoDeLaMadre'], 0, 4);

$nacimiento_madre = $dia_nacimiento_madre.'/'.$mes_nacimiento_madre.'/'.$ano_nacimiento_madre;

?>
<div class="tab-pane box" id="datosMadre">
    <div class="box-content main" style="<?php echo ($row['ParentescoConElAlumno']=='MADRE')?'display:none':'' ?>" >
        <form id="form-datos-madre" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">La madre vive<span style="color:red"> *</span></span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control madre-viva" name="LaMadreVive" value="1" <?php echo ($row['LaMadreVive']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control madre-viva" name="LaMadreVive" value="0" <?php echo ($row['LaMadreVive']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nombres<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaMadre" placeholder="Nombres de la Madre" value="<?php echo $row['NombreDeLaMadre'] ?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Apellidos<span style="color:red"> *</span></label>
                <div class="col-sm-6">
    				<input type="text" required minlength="2" class="form-control" id="repreSegundoNombre" name="ApellidosDeLaMadre" placeholder="Apellidos de la Madre" value="<?php echo $row['ApellidosDeLaMadre'] ?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Cédula de identidad<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="CedulaDeIdentidadDeLaMadre" name="CedulaDeIdentidadDeLaMadre" placeholder="Cédula de identidad de la madre" value="<?php echo $row['CedulaDeIdentidadDeLaMadre'] ?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control dateToMysql" id="madreFechaNac" name="FechaDeNacimientoDeLaMadre" placeholder="" value="<?php echo $nacimiento_madre ?>">
                    <input type="hidden" class="form-control" id="FechaDeNacimientoDeLaMadre" name="FechaDeNacimientoDeLaMadre" placeholder="" value="<?php echo $row['FechaDeNacimientoDeLaMadre'] ?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control tipoNacMadre" name="NacionalidadMadre" value="VENEZOLANA" <?php echo ($row['NacionalidadMadre']=='VENEZOLANA')?'checked':'' ?> >Venezolana</label>
                    <label><input type="radio" class="form-control tipoNacMadre" name="NacionalidadMadre" value="EXTRANJERA" <?php echo ($row['NacionalidadMadre']=='EXTRANJERA')?'checked':'' ?> >Extranjera</label>
                </div>
            </div>
            <div class="form-group only-hide-madre tipoNacDepenMadreVe" style="<?php echo ($row['NacionalidadMadre']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="estadoNacMadre" name="EstadoDondeNacioLaMadre">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeNacioLaMadre']==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-madre tipoNacDepenMadreVe" style="<?php echo ($row['NacionalidadMadre']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-estadoNacMadre" name="MunicipioDondeNacioLaMadre" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeNacioLaMadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group only-hide-madre tipoNacDepenMadreEx" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':($row['NacionalidadMadre']=='VENEZOLANA')?'display:none':'' ?>" >
                <label for="field-1" class="col-sm-4 control-label">País de nacimiento </label>
                <div class="col-sm-6">
                  <input type="text" minlength="2" class="form-control" id="reprePrimerNombre" name="PaisDeNacimientoDeLaMadre" placeholder="País de nacimiento de la madre" value="<?php echo $row['PaisDeNacimientoDeLaMadre']?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado civil <span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input required type="radio" class="form-control" name="EstadoCivilMadre" value="SOLTERO" <?php echo ($row['EstadoCivilMadre']=='SOLTERO')?'checked':'' ?> >Soltera</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="CASADO" <?php echo ($row['EstadoCivilMadre']=='CASADO')?'checked':'' ?> >Casada</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="DIVORCIADO" <?php echo ($row['EstadoCivilMadre']=='DIVORCIADO')?'checked':'' ?> >Divorciada</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="CONCUBINATO" <?php echo ($row['EstadoCivilMadre']=='CONCUBINATO')?'checked':'' ?> >En concubinato</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="VIUDO" <?php echo ($row['EstadoCivilMadre']=='VIUDO')?'checked':'' ?> >Viuda</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select required class="form-control select-estado" id="madreEstadoResi" name="EstadoDondeResideLaMadre">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeResideLaMadre']==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="select-municipio-madreEstadoResi" name="MunicipioDondeResideLaMadre" >
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeResideLaMadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div id="sectorMunicipioChacaoMadre" class="form-group only-hide-madre" style="<?php echo ($row['MunicipioDondeResideLaMadre']=='183')?'':'display:none' ?>">
                <label for="address" class="col-sm-4 control-label">Sector</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-sector-municipio" name="UrbanizacionOSectorDondeResideLaMadre" >
                        <?php foreach ($sectores as $sector){ ?>
                            <option value="<?php echo $sector['id_sector']?>" class="oculto" <?php echo ($row['UrbanizacionOSectorDondeResideLaMadre']==$sector['id_sector'])?'selected="selected"':'' ?> > <?php echo $sector['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div id="sectorMunicipioMadre" class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':($row['MunicipioDondeResideLaMadre']=='183')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde reside</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="repreParroNacimiento" name="UrbanizacionOSectorDondeResideLaMadre" placeholder="Urbanización o sector donde reside la madre" value="<?php echo $row['UrbanizacionOSectorDondeResideLaMadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <input type="text" minlength="1" class="form-control" id="casaMadre" name="CasaOEdificioDondeResideLaMadre" placeholder="Casa o edificio donde reside la madre" value="<?php echo $row['CasaOEdificioDondeResideLaMadre'] ?>">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Piso donde reside</label>
                <div class="col-sm-6">
                  <input type="text" minlength="1" class="form-control" id="" name="PisoDondeResideLaMadre" placeholder="Piso donde reside la madre" value="<?php echo $row['PisoDondeResideLaMadre']?>">
                </div>
            </div>

            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Número o apartamento donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" minlength="1" class="form-control" id="apartamentoMadre" name="NumeroOApartamentoDondeResideLaMadre" placeholder="Número o apartamento donde reside la madre" value="<?php echo $row['NumeroOApartamentoDondeResideLaMadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlDomiclioDeLaMadre" value="<?php echo $row['PuntoDeReferenciaCercanoAlDomiclioDeLaMadre']?>"><?php echo htmlspecialchars($row['PuntoDeReferenciaCercanoAlDomiclioDeLaMadre']); ?></textarea>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de habitación<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" required minlength="10" class="form-control onlyNumbers" id="telefonoHabitacion" name="TelefonoDeHabitacionDeLaMadre" placeholder="Teléfono de habitación de la madre" value="<?php echo $row['TelefonoDeHabitacionDeLaMadre']?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono celular</label>
                <div class="col-sm-6">
                  <input type="text" minlength="10" class="form-control onlyNumbers" id="telefonoCelular" name="TelefonoCelularDeLaMadre" placeholder="Telefono celular de la madre" value="<?php echo $row['TelefonoCelularDeLaMadre']?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Correo electrónico<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="email" required minlength="7" class="form-control" id="correoMadre" name="CorreoElectronicoDeLaMadre" placeholder="Correo electrónico de la madre" value="<?php echo $row['CorreoElectronicoDeLaMadre']?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Redes sociales que usa</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreFacebook" value="0" >
                      <label><input type="checkbox" name="RedSocialMadreFacebook" value="1" <?php echo ($row['RedSocialMadreFacebook']=='1')?'checked':'' ?> >Facebook</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreTwitter" value="0" >
                      <label><input type="checkbox" name="RedSocialMadreTwitter" value="1" <?php echo ($row['RedSocialMadreTwitter']=='1')?'checked':'' ?>>Twitter</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreWhatsapp" value="0" >
                      <label><input type="checkbox" name="RedSocialMadreWhatsapp" value="1" <?php echo ($row['RedSocialMadreWhatsapp']=='1')?'checked':'' ?>>Whatsapp</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreOtra" value="0" >
                      <label><input type="checkbox" name="RedSocialMadreOtra" value="1" <?php echo ($row['RedSocialMadreOtra']=='1')?'checked':'' ?>>Otra</label>
                    </div>
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">La madre labora actualmente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input required type="radio" class="form-control madreTrabaja" name="MadreTrabaja" value="1" <?php echo ($row['MadreTrabaja']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control madreTrabaja" name="MadreTrabaja" value="0" <?php echo ($row['MadreTrabaja']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Profesión u ocupación</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="" name="ProfesionUOcupacionDeLaMadre" placeholder="Profesión u ocupación de la madre" value="<?php echo $row['ProfesionUOcupacionDeLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Ingreso mensual</label>
                <div class="col-sm-6" >
                    <select class="form-control"  id="select-otros-ingresosFamilia" name="IngresoMensualMadre" >
                    <?php foreach ($nivel_ingreso as $nivel){ ?>
                        <option value="<?php $nivel['id_nivel_ingreso_censo']?>" class="oculto" <?php echo ($row['IngresoMensualMadre']==$nivel['id_nivel_ingreso_censo'])?'selected="selected"':'' ?>> <?php echo $nivel['valor']?></option>
                    <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja " style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Tipo de jornada laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralMadre" value="TIEMPOCOMPLETO" <?php echo ($row['TipoDeJornadaLaboralMadre']=='TIEMPOCOMPLETO')?'checked':'' ?> >Tiempo completo</label>
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralMadre" value="MEDIOTIEMPO" <?php echo ($row['TipoDeJornadaLaboralMadre']=='MEDIOTIEMPO')?'checked':'' ?> >Medio Tiempo</label>
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralMadre" value="NOCTURNA" <?php echo ($row['TipoDeJornadaLaboralMadre']=='NOCTURNA')?'checked':'' ?> >Nocturna</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Tipo de relacion laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDeLaMadre" value="TRABAJADORINFORMAL" <?php echo ($row['TipoDeRelacionLaboralDeLaMadre']=='TRABAJADORINFORMAL')?'checked':'' ?> >Trabajador Informal</label>
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDeLaMadre" value="TRABAJADORINDEPENEDIENTE" <?php echo ($row['TipoDeRelacionLaboralDeLaMadre']=='TRABAJADORINDEPENEDIENTE')?'checked':'' ?> >Trabajador Independiente</label>
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDeLaMadre" value="TRABAJADORDEPENDIENTE" <?php echo ($row['TipoDeRelacionLaboralDeLaMadre']=='TRABAJADORDEPENDIENTE')?'checked':'' ?> >Trabajador Dependiente</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nombre de la empresa u organismo donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre" placeholder="Nombre de la empresa u organismo donde trabaja la madre" value="<?php echo $row['NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde trabaja</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="madreEstadoTrabajo" name="EstadoDondeTrabajaLaMadre">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeTrabajaLaMadre']==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde trabaja</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-madreEstadoTrabajo" name="MunicipioDondeTrabajaLaMadre" >
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeTrabajaLaMadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="UrbanizacionOSectorDondeTrabajaLaMadre" placeholder="Urbanización o sector donde trabaja la madre" value="<?php echo $row['UrbanizacionOSectorDondeTrabajaLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Edificio o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="EdificioOCasaDondeTrabajaLaMadre" placeholder="" value="<?php echo $row['EdificioOCasaDondeTrabajaLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Piso donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="PisoDondeTrabajaLaMadre" placeholder="" value="<?php echo $row['PisoDondeTrabajaLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Número de oficina, apartamento o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control " id="reprePrimerNombre" name="NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre" placeholder="Número de oficina, apartamento o casa donde trabaja la madre" value="<?php echo $row['NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al trabajo</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlTrabajoDeLaMadre" value="<?php echo $row['PuntoDeReferenciaCercanoAlTrabajoDeLaMadre']?>" ></textarea>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del lugar de trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="10" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDelLugarDelTrabajodeLaMadre" placeholder="Teléfono del lugar de trabajo de la madre" value="<?php echo $row['TelefonoDelLugarDelTrabajodeLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Extensión telefónica para contactar</label>
                <div class="col-sm-6">
                    <input type="text"  class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionTelefonicaParaContactarALaMadre" placeholder="Extensión telefónica para contactar a la madre" value="<?php echo $row['ExtensionTelefonicaParaContactarALaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="PersonaContactoEnElTrabajoDeLaMadre" placeholder="Persona contacto en el trabajo de la madre" value="<?php echo $row['PersonaContactoEnElTrabajoDeLaMadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre" placeholder="Teléfono de la persona contacto en el trabajo de la madre" value="<?php echo $row['TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Extensión de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre" placeholder="Extensión de la persona contacto en el trabajo de la madre" value="<?php echo $row['ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre']?>" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-madre" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-madre" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
    <div id="madre-elegida" class="box-content madre-elegida-repre" style="<?php echo ($row['ParentescoConElAlumno']=='MADRE')?'':'display:none' ?>">
        <p>Los campos sobre datos se han deshabilitado porque usted ha indicado previamente que la madre es la representante, por lo que no es necesario repetir la información. Por favor prosiga con la sección "Datos del Padre"
        </p>
        <div class="form-horizontal form-groups-bordered form-censo">
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-madre-dos" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-madre-dos" class="btn btn-info">Siguiente</button>
                </div>
            </div>
    </div>
</div>
</div>
<?php
}
?>