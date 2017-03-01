<?php 

$edit_data = $this->db->get_where('censo', array('id_censo' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){

$dia_nacimiento_padre = substr($row['FechaDeNacimientoDelPadre'], 8, 2);
$mes_nacimiento_padre = substr($row['FechaDeNacimientoDelPadre'], 5, 2);
$ano_nacimiento_padre = substr($row['FechaDeNacimientoDelPadre'], 0, 4);

$nacimiento_padre = $dia_nacimiento_padre.'/'.$mes_nacimiento_padre.'/'.$ano_nacimiento_padre;

?>
<div class="tab-pane box" id="datosPadre">
    <div class="box-content main" style="<?php echo ($row['ParentescoConElAlumno']=='PADRE')?'display:none':'' ?>">
        <form id="form-datos-padre" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">El padre vive<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control padre-viva" name="ElPadreVive" value="1" <?php echo ($row['ElPadreVive']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control padre-viva" name="ElPadreVive" value="0" <?php echo ($row['ElPadreVive']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nombre<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDelPadre" placeholder="Nombres del Padre" value="<?php echo $row['NombreDelPadre'] ?>" >
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Apellidos<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="repreSegundoNombre" name="ApellidosDelPadre" placeholder="Apellidos del Padre" value="<?php echo $row['ApellidosDelPadre'] ?>" >
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Cédula de identidad<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="CedulaDeIdentidadDelPadre" name="CedulaDeIdentidadDelPadre" placeholder="Cédula de identidad del padre" value="<?php echo $row['CedulaDeIdentidadDelPadre'] ?>">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control dateToMysql" id="padreFechaNac" name="FechaDeNacimientoDelPadre" placeholder="" value="<?php echo $nacimiento_padre ?>" >
                    <input type="hidden" class="form-control" id="FechaDeNacimientoDelPadre" name="FechaDeNacimientoDelPadre" placeholder="" value="<?php echo $row['FechaDeNacimientoDelPadre'] ?>" >
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control tipoNacPadre" name="NacionalidadDelPadre" value="VENEZOLANA" <?php echo ($row['NacionalidadDelPadre']=='VENEZOLANA')?'checked':'' ?> >Venezolana</label>
                    <label><input type="radio" class="form-control tipoNacPadre" name="NacionalidadDelPadre" value="EXTRANJERA" <?php echo ($row['NacionalidadDelPadre']=='EXTRANJERA')?'checked':'' ?> >Extranjera</label>
                </div>
            </div>
            <div class="form-group only-hide-padre tipoNacDepenPadreVe" style="<?php echo ($row['NacionalidadDelPadre']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="estadoNacPadre" name="EstadoDondeNacioElPadre">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeNacioElPadre']==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-padre tipoNacDepenPadreVe" style="<?php echo ($row['NacionalidadDelPadre']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-estadoNacPadre" name="MunicipioDondeNacioElPadre" >
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeNacioElPadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group only-hide-padre tipoNacDepenPadreEx" style="<?php echo ($row['NacionalidadDelPadre']=='EXTRANJERA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">País de nacimiento</label>
                <div class="col-sm-6">
                  <input type="text" minlength="2" class="form-control" id="reprePrimerNombre" name="PaisDondeNacioElPadre" placeholder="País donde nacio el padre" value="<?php echo $row['PaisDondeNacioElPadre']?>">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado civil<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="EstadoCivilDelPadre" value="SOLTERO" <?php echo ($row['EstadoCivilDelPadre']=='SOLTERO')?'checked':'' ?> >Soltero</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="CASADO" <?php echo ($row['EstadoCivilDelPadre']=='CASADO')?'checked':'' ?> >Casado</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="DIVORCIADO" <?php echo ($row['EstadoCivilDelPadre']=='DIVORCIADO')?'checked':'' ?> >Divorciado</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="CONCUBINATO" <?php echo ($row['EstadoCivilDelPadre']=='CONCUBINATO')?'checked':'' ?> >En concubinato</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="VIUDO" <?php echo ($row['EstadoCivilDelPadre']=='VIUDO')?'checked':'' ?> >Viudo</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select required class="form-control select-estado" id="padreEstadoResi" name="EstadoDondeResideElPadre">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeResideElPadre']==$estado['id_estado'])?'selected="selected"':'' ?> ><?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="select-municipio-padreEstadoResi" name="MunicipioDondeResideElPadre" >
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeResideElPadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div id="sectorMunicipioChacaoPadre" class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':($row['MunicipioDondeResideElPadre']=='183')?'display:none':'' ?>">
                <label for="address" class="col-sm-4 control-label">Sector</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-sector-municipio" name="UrbanizacionOSectorDondeResideElPadre" >
                        <?php foreach ($sectores as $sector){ ?>
                            <option value="<?php echo $sector['id_sector']?>" class="oculto" <?php echo ($row['UrbanizacionOSectorDondeResideElPadre']==$sector['id_sector'])?'selected="selected"':'' ?> > <?php echo $sector['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div  id="sectorMunicipioPadre" class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':($row['MunicipioDondeResideElPadre']=='183')?'display:none':'' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde reside</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="repreParroNacimiento" name="UrbanizacionOSectorDondeResideElPadre" placeholder="Urbanización o sector donde reside del padre" value="<?php echo $row['UrbanizacionOSectorDondeResideElPadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="repreFechaNac" name="CasaOEdificioDondeResideElPadre" placeholder="Casa o edificio donde reside el padre" value="<?php echo $row['CasaOEdificioDondeResideElPadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Piso donde reside</label>
                <div class="col-sm-6">
                  <input type="text" required minlength="1" class="form-control" id="repreFechaNac" name="PisoDondeResideElPadre" placeholder="Piso donde reside el padre" value="<?php echo $row['PisoDondeResideElPadre']?>">
                </div>
            </div>

            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Número o apartamento donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" required minlength="1" class="form-control" id="padreApartamento" name="NumeroDeCasaOApartamentoDondeResideElPadre" placeholder="Número o apartamento donde reside el padre" value="<?php echo $row['NumeroDeCasaOApartamentoDondeResideElPadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlDomicilioDelPadre" value="<?php echo $row['PuntoDeReferenciaCercanoAlDomicilioDelPadre']?>"><?php echo htmlspecialchars($row['PuntoDeReferenciaCercanoAlDomicilioDelPadre']); ?></textarea>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de habitación<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" required minlength="10" class="form-control onlyNumbers" id="padreTelefonoHabitacion" name="TelefonoDeHabitacionDelPadre" placeholder="Teléfono de habitación del padre" value="<?php echo $row['TelefonoDeHabitacionDelPadre']?>"  >
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono celular</label>
                <div class="col-sm-6">
                  <input type="text" minlength="" class="form-control onlyNumbers" id="padreTelefonoCelular" name="TelefonoCelularDelPadre" placeholder="Teléfono celular del padre" value="<?php echo $row['TelefonoCelularDelPadre']?>">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Correo electrónico<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="email" required minlength="7" class="form-control" id="padreCorreoElectronico" name="CorreoElectronicoDelPadre" placeholder="Correo electrónico del padre" value="<?php echo $row['CorreoElectronicoDelPadre']?>">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Redes sociales que usa</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                    <input type="hidden" name="RedSocialPadreFacebook" value="0" >
                      <label><input type="checkbox" name="RedSocialPadreFacebook" value="1" <?php echo ($row['RedSocialPadreFacebook']=='1')?'checked':'' ?> >Facebook</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialPadreTwitter" value="0" >
                      <label><input type="checkbox" name="RedSocialPadreTwitter" value="1" <?php echo ($row['RedSocialPadreTwitter']=='1')?'checked':'' ?> >Twitter</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialPadreWhatsapp" value="0" >
                      <label><input type="checkbox" name="RedSocialPadreWhatsapp" value="1" <?php echo ($row['RedSocialPadreWhatsapp']=='1')?'checked':'' ?> >Whatsapp</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialPadreOtra" value="0" >
                      <label><input type="checkbox" name="RedSocialPadreOtra" value="1" <?php echo ($row['RedSocialPadreOtra']=='1')?'checked':'' ?> >Otra</label>
                    </div>
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">El padre labora actualmente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control padreTrabaja" name="ElPadreTrabajaActualmente" value="1" <?php echo ($row['ElPadreTrabajaActualmente']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control padreTrabaja" name="ElPadreTrabajaActualmente" value="0" <?php echo ($row['ElPadreTrabajaActualmente']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Profesión u ocupación</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="repreEmail" name="ProfesionUOcupacionDelPadre" placeholder="Profesión u ocupación del padre" value="<?php echo $row['ProfesionUOcupacionDelPadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Ingreso mensual</label>
                <div class="col-sm-6" >
                    <select class="form-control"  id="select-otros-ingresosFamilia" name="IngresoMensualDelPadre" >
                    <?php foreach ($nivel_ingreso as $nivel){ ?>
                        <option value="<?php $nivel['id_nivel_ingreso_censo']?>" class="oculto" <?php echo ($row['IngresoMensualDelPadre']==$nivel['id_nivel_ingreso_censo'])?'selected="selected"':'' ?>> <?php echo $nivel['valor']?></option>
                    <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Tipo de jornada laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralDelPadre" value="TIEMPOCOMPLETO" <?php echo ($row['TipoDeJornadaLaboralDelPadre']=='TIEMPOCOMPLETO')?'checked':'' ?>>Tiempo completo</label>
                    <label><input type="radio" required class="form-control" name="TipoDeJornadaLaboralDelPadre" value="MEDIOTIEMPO" <?php echo ($row['TipoDeJornadaLaboralDelPadre']=='MEDIOTIEMPO')?'checked':'' ?>>Medio Tiempo</label>
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralDelPadre" value="NOCTURNA" <?php echo ($row['TipoDeJornadaLaboralDelPadre']=='NOCTURNA')?'checked':'' ?> >Nocturna</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Tipo de relacion laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDelPadre" value="TRABAJADORINFORMAL" <?php echo ($row['TipoDeRelacionLaboralDelPadre']=='TRABAJADORINFORMAL')?'checked':'' ?> >Trabajador Informal</label>
                    <label><input type="radio" required class="form-control" name="TipoDeRelacionLaboralDelPadre" value="TRABAJADORINDEPENEDIENTE" <?php echo ($row['TipoDeRelacionLaboralDelPadre']=='TRABAJADORINDEPENEDIENTE')?'checked':'' ?> >Trabajador Independiente</label>
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDelPadre" value="TRABAJADORDEPENDIENTE" <?php echo ($row['TipoDeRelacionLaboralDelPadre']=='TRABAJADORDEPENDIENTE')?'checked':'' ?> >Trabajador Dependiente</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nombre de la empresa u organismo donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre" placeholder="Nombre de la empresa u organismo donde trabaja el padre" value="<?php echo $row['NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde trabaja</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="padreEstadoTrabajo" name="EstadoDondeTrabajaElPadre">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>"  <?php echo ($row['EstadoDondeTrabajaElPadre']==$estado['id_estado'])?'selected="selected"':'' ?> ><?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde trabaja</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-padreEstadoTrabajo" name="MunicipioDondeTrabajaElPadre" >
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeTrabajaElPadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="UrbanizacionOSectorDondeTrabajaElPadre" placeholder="Urbanización o sector donde trabaja el padre" value="<?php echo $row['UrbanizacionOSectorDondeTrabajaElPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Edificio o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="EdificioOCasaDondeTrabajaElPadre" placeholder="Edificio o casa donde trabaja el padre" value="<?php echo $row['EdificioOCasaDondeTrabajaElPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Piso donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="PisoDondeTrabajaElPadre" placeholder="" value="<?php echo $row['PisoDondeTrabajaElPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label" >Número de oficina, apartamento o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control onlyNumbers" id="reprePrimerNombre" name="OficinaCasaOApartamentoDondeTrabajaElPadre" placeholder="Número de oficina, apartamento o casa donde trabaja el padre" value="<?php echo $row['OficinaCasaOApartamentoDondeTrabajaElPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al trabajo</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlTrabajoDelPadre" value="<?php echo $row['PuntoDeReferenciaCercanoAlTrabajoDelPadre']?>" ><?php echo htmlspecialchars($row['PuntoDeReferenciaCercanoAlTrabajoDelPadre']); ?></textarea>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del lugar de trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDelLugarDeTrabajotrabajoDelPadre" placeholder="Teléfono del lugar de trabajo del padre" value="<?php echo $row['TelefonoDelLugarDeTrabajotrabajoDelPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Extension telefónica para contactar</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionTelefonicaDeContactoDelPadre" placeholder="Extension telefónica para contactar al padre" value="<?php echo $row['ExtensionTelefonicaDeContactoDelPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="PersonaContactoEnElTrabajoDelPadre" placeholder="Persona contacto en el trabajo del padre" value="<?php echo $row['PersonaContactoEnElTrabajoDelPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDeLaPersonaContactoEnElTrabajoDelPadre" placeholder="Teléfono de la persona contacto en el trabajo del padre" value="<?php echo $row['TelefonoDeLaPersonaContactoEnElTrabajoDelPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Extensión de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionDeLaPersonaContactoEnElTrabajodelPadre" placeholder="Extensión de la persona contacto en el trabajo del padre" value="<?php echo $row['ExtensionDeLaPersonaContactoEnElTrabajodelPadre']?>" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-padre" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-padre" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>

    <div class="box-content padre-elegida-repre" style="<?php echo ($row['ParentescoConElAlumno']=='PADRE')?'':'display:none' ?>">
        <p>Los campos sobre datos se han deshabilitado porque usted ha indicado previamente que el padre es el representante, por lo que no es necesario repetir la información. Por favor prosiga con la sección "Datos socioeconómicos"
        </p>
        <div class="form-horizontal form-groups-bordered form-censo">
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                        <button type="button" id="anterior-datos-padre-dos" class="btn btn-info">Anterior</button>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                        <button type="button" id="siguiente-datos-padre-dos" class="btn btn-info">Siguiente</button>
                    </div>
                </div>
        </div>
    </div>

</div>
<?php
}
?>