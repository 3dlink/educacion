<div class="tab-pane box" id="datosRepre">
    <div class="box-content">
        <form id="form-image-representante" class="form-horizontal form-groups-bordered form-censo" method="post" enctype="multipart/form-data" action='<?php echo base_url(); ?>upload_parent_image.php'>
            <div class="form-group">
                <label for="field-1" class="col-sm-12 control-label" style="text-align: center;">La imagen no debe superar 1MB, el formato debe ser jpg o JPG y el nombre no puede contener espacios en blanco. </br> Se recomienda un tamaño de 180 pixeles de alto y 150 pixeles de ancho.</label>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Fotografía</label>
                <div class="col-sm-6">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                            <img src="" alt="...">
                        </div>
                        <div id='preview-image-representante' class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                        <div>
                            <span class="btn btn-white btn-file">
                                <span class="fileinput-new">Seleccionar Imagen</span>
                                <span class="fileinput-exists">Cambiar</span>
                                <input type="file" name="photo-image-representante" id="photo-image-representante" accept="image/jpeg">
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form id="form-datos-representante" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="form-group">
                <label for="identification" class="col-sm-4 control-label">Residente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control clasResidente" name="Residente" value="1">Sí</label>
                    <label><input type="radio" class="form-control clasResidente" name="Residente" value="0">No</label>
                </div>
            </div>
            <div class="form-group">
                <label for="identification" class="col-sm-4 control-label">El alumno vive con<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control clasViveCon" name="ElAlumnoViveCon" value="PADRE">Padre</label>
                    <label><input type="radio" class="form-control clasViveCon" name="ElAlumnoViveCon" value="MADRE">Madre</label>
                    <label><input type="radio" required class="form-control clasViveCon" name="ElAlumnoViveCon" value="AMBOS">Ambos</label>
                    <label><input type="radio" required class="form-control clasViveCon" name="ElAlumnoViveCon" value="REPRESENTANTE">Representante</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Parentesco con el alumno<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control tipo-parentesco" name="ParentescoConElAlumno" value="MADRE">Madre</label>
                    <label><input type="radio" class="form-control tipo-parentesco" name="ParentescoConElAlumno" value="PADRE">Padre</label>
                    <label><input type="radio" class="form-control tipo-parentesco" name="ParentescoConElAlumno" value="OTRO">Otro</label>
                </div>
            </div>
            <div class="form-group" id="div-select-tipo-parentesco" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Parentesco</label>
                <div class="col-sm-6">
                  <select class="form-control" id="repreParentescoOtro" name="OtroParentescoConElAlumno">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="ABUELO">Abuelo</option>
                    <option value="ABUELA">Abuela</option>
                    <option value="TIA">Tía</option>
                    <option value="TIO">Tío</option>
                    <option value="MADRINA">Madrina</option>
                    <option value="PADRINO">Padrino</option>
                    <option value="HERMANA">Hermana</option>
                    <option value="HERMANO">Hermano</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Cédula de identidad<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="onlyNumbers" required minlength="6" class="form-control" id="repreCedula" name="CedulaDeIdentidadDelRepresentante" placeholder="Cédula de identidad del representante">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Primer nombre<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="reprePrimerNombre" name="PrimerNombreDelRepresentante" placeholder="Primer nombre del representante">
                    <input type="hidden" required minlength="2" class="form-control" id="repreNombreFoto" name="repreNombreFoto" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Segundo nombre</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="repreSegundoNombre" name="SegundoNombreDelRepresentante" placeholder="Segundo nombre del representante">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Primer apellido<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="reprePrimerApelli" name="PrimerApellidoDelRepresentante" placeholder="Primer apellido del representante">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Segundo apellido</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="repreSegundoApelli" name="SegundoApellidoDelRepresentante" placeholder="Segundo apellido del representante">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <input type="text" required minlength="2" class="form-control dateToMysql" id="repreFechaNac" name="FechaDeNacimientoDelRepresentante" placeholder="">
                        <input type="hidden" class="form-control" id="FechaDeNacimientoDelRepresentante" name="FechaDeNacimientoDelRepresentante" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                  <label><input type="radio" required class="form-control repreTipoNacio" name="NacionalidadDelRepresentante" value="VENEZOLANA">Venezolana</label>
                    <label><input type="radio" class="form-control repreTipoNacio" name="NacionalidadDelRepresentante" value="EXTRANJERA">Extranjera</label>
                </div>
            </div>
            <div class="form-group tipoNacDepenVe" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="repreEstadoNacimiento" name="EstadoDondeNacioElRepresentante">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group tipoNacDepenVe" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-repreEstadoNacimiento" name="MunicipioDondeNacioElRepresentante" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group tipoNacDepenVe" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Parroquia o sector donde nació</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="repreParroNacimiento" name="ParroquiaDondeNacioElRepresentante" placeholder="Parroquia ddonde nació el representante">
                </div>
            </div>
            <div class="form-group tipoNacDepenEx" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">País de nacimiento</label>
                <div class="col-sm-6">
                  <input type="text" minlength="2" class="form-control" id="reprePrimerNombre" name="PaisDeNacimientoDelRepresentante" placeholder="País donde nació el representante">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Estado civil<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="EstadoCivilDelRepresentante" value="SOLTERO">Soltero(a)</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="CASADO">Casado(a)</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="DIVORCIADO">Divorciado(a)</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="CONCUBINATO">Concubinato</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="VIUDO">Viudo(a)</label>
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control select-estado"  id="repreEstadoResidencia" name="EstadoDondeResideElRepresentante">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select required class="form-control"  id="select-municipio-repreEstadoResidencia" name="MunicipioDondeResideElRepresentante" >
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($municipios as $municipio){ ?>
                        <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div id="sectorMunicipioChacaoRepre" class="form-group" style="display: none">
                <label for="address" class="col-sm-4 control-label">Sector</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-sector-municipio" name="SectorDondeResideElRepresentante" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($sectores as $sector){ ?>
                            <option value="<?php echo $sector['id_sector']?>" class="oculto"> <?php echo $sector['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div id="sectorMunicipioRepre" class="form-group" style="display: none">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" class="form-control" id="repreUrbanizacion" name="UrbanizacionOSectorDondeResideElRepresentante" placeholder="Urbanización o sector donde reside el representante">
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Calle o avenida donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="repreCalle" name="CalleOAvenidaDondeResideElRepresentante" placeholder="Calle o avenida donde reside el representante">
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="1" class="form-control" id="repreCasa" name="CasaOEdificioDondeResideElRepresentante" placeholder="Casa o edificio donde reside el representante">
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Piso donde reside</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" minlength="1" id="reprePiso" name="PisoDondeResideElRepresentante" placeholder="Piso donde reside el representante">
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Número o apartamento donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" minlength="1" id="repreApartamento" name="NumeroOApartamentoDondeResideElRepresentante" placeholder="Número o apartamento donde residem el representante">
                </div>
            </div>
            <div class="form-group depenRepreMismaResi">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlDomicilioDelRepresentante"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de habitación<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="10" class="form-control" id="repreTelefHabi" name="TelefonoDeHabitacionDelRepresentante" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Teléfono celular<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="10" class="form-control" id="repreTelefCelu" name="TelefonoCelularDelRepresentante" placeholder="">

                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Correo electrónico<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="email" required minlength="7" class="form-control" id="repreEmail" name="CorreoElectronicoDelRepresentante" placeholder="Correo electrónico del representante">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Uso de redes sociales</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                      <label><input type="checkbox" name="RedSocialRepreFacebook" value="1">Facebook</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" name="RedSocialRepreTwitter" value="1">Twitter</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" name="RedSocialRepreWhatsapp" value="1">Whatsapp</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" name="RedSocialRepreOtra" value="1">Otra</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Especifique qué otras redes sociales usa</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="EspecifiqueQueOtrasRedesSocialesUsaElRepresentante"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Trabaja actualmente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control trabaja-repre" name="TrabajaActualmente" value="1">Sí</label>
                    <label><input type="radio" class="form-control trabaja-repre" name="TrabajaActualmente" value="0">No</label>
                </div>
            </div>
            <div class="form-group repre-trabajador" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Trabaja dentro del Municipio Chacao</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control trabaja-repre-municipio" name="TrabajaDentroChacao" value="1">Sí</label>
                    <label><input type="radio" class="form-control trabaja-repre-municipio" name="TrabajaDentroChacao" value="0">No</label>
                </div>
            </div>
            <div class="form-group repre-trabaja-municipio" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Trabaja en la Alcaldía de Chacao</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control trabaja-repre-alcaldia" name="TrabajaEnAlcaldia" value="1">Sí</label>
                    <label><input type="radio" class="form-control trabaja-repre-alcaldia" name="TrabajaEnAlcaldia" value="0">No</label>
                </div>
            </div>
            <div class="form-group repre-trabajador" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Profesión u ocupación</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="repreRelacionLaboral" name="ProfesionUOcupacionDelRepresentante" placeholder="Profesión u ocupación del representante">
                </div>
            </div>
            <div class="form-group direccion-trabaja-alcaldia" style="display:none;">
                <label for="field-1" class="col-sm-4 control-label">Dirección o Instituto</label>
                <div class="col-sm-6">
                    <select class="form-control select-estado" id="DependenciaAlcaldia" name="DependenciaAlcaldia">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" >Oficina del Alcalde</option>
                    <option value="2" >Dirección General</option>
                    <option value="3" >Secretaria de Gobierno</option>
                    <option value="4" >Dirección Ejecutiva de Gestión Urbana</option>
                    <option value="5" >Dirección Ejecutiva de Gestión Social</option>
                    <option value="6" >Director Ejecutivo de Gestión de Seguridad Integral</option>
                    <option value="7" >Dirección Ejecutiva de Gestión Interna</option>
                    <option value="8" >Dirección de Planificación Estratégica y Presupuesto </option>
                    <option value="9" >Oficina de Apoyo Estratégico</option>
                    <option value="10" >Dirección de Comunicaciones</option>
                    <option value="11" >Dirección Directora Atención al Ciudadano</option>
                    <option value="12" >Consultaría  Jurídica</option>
                    <option value="13" >Dirección de Recursos Humanos</option>
                    <option value="14" >Dirección de Administración y Servicios</option>
                    <option value="15" >Dirección  de Tecnología de la Información</option>
                    <option value="16" >Dirección de Educación</option>
                    <option value="17" >Dirección  de Deporte</option>
                    <option value="18" >Dirección de la Oficina de Apoyo al Capital Social</option>
                    <option value="19" >Dirección de Eventos y Protocolo</option>
                    <option value="20" >Dirección de Bienestar Social</option>
                    <option value="21" >Director Justicia Municipal</option>
                    <option value="22" >Director de Seguridad Interna</option>
                    <option value="23" >Director Centro Integral de Seguridad y Emergencias (CISE) </option>
                    <option value="24" >Directora Oficina Local de Planeamiento Urbano (OLPU) </option>
                    <option value="25" >Director de Ingeniería Municipal</option>
                    <option value="26" >Directora Catastro Municipal</option>
                    <option value="27" >Director de Obras Públicas y Servicios</option>
                    <option value="28" >Auditoria Interna</option>
                    <option value="29" >Sindicatura Municipal</option>
                    <option value="30" >Policía Municipal de Chacao</option>
                    <option value="31" >IMCAS – SALUD CHACAO</option>
                    <option value="32" >Instituto de Movilidad Urbana</option>
                    <option value="33" >Cultura Chacao</option>
                    <option value="34" >Centro Cultural Chacao</option>
                    <option value="35" >Instituto Autónomo de Mercado de Chacao</option>
                    <option value="36" >Instituto Municipal de Ambiente Chacao (IMAC) </option>
                    <option value="37" >Consejo Municipal de Derechos de Niños, Niñas y Adolescentes</option>
                    <option value="38" >Fundación Orquesta Sinfónica Juvenil de Chacao</option>
                    <option value="39" >Fundación Centro Eugenio Mendoza</option>
                    <option value="40" >Protección Civil Chacao</option>
                    <option value="41" >Instituto de Ambiente Chacao</option>
                    <option value="42" >Concejo Municipal de Chacao</option>
                    <option value="43" >Otros</option>
                  </select>
                </div>
            </div>
            <div class="form-group repre-trabajador" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Ingreso mensual</label>
                <div class="col-sm-6">
                  <select class="form-control"  id="select-ingreso-mensualRepresentante" name="IngresoMensualDelRepresentante" >
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($nivel_ingreso as $nivel){ ?>
                        <option value="<?php echo $nivel['id_nivel_ingreso_censo']?>" class="oculto"> <?php echo $nivel['valor']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group repre-trabajador" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Otros ingresos dentro de su grupo familiar</label>
                <div class="col-sm-6">
                  <select class="form-control"  id="select-otros-ingresosFamilia" name="OtrosIngresosDentroDeSuGrupoFamiliar" >
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($nivel_ingreso as $nivel){ ?>
                        <option value="<?php echo $nivel['id_nivel_ingreso_censo']?>" class="oculto"> <?php echo $nivel['valor']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group repre-trabajador" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Tipo de jornada laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralDelRepresentante" value="TIEMPO-COMPLETO">Tiempo completo</label>
                    <label><input type="radio" required class="form-control" name="TipoDeJornadaLaboralDelRepresentante" value="MEDIO-TIEMPO">Medio Tiempo</label>
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralDelRepresentante" value="NOCTURNA">Nocturna</label>
                </div>
            </div>
            <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Nombre de la empresa u organismo donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaEmpresaUOrganismoDondeTrabajaElRepresentante" placeholder="Nombre de la empresa u organismo donde trabaja el representante">
                </div>
            </div>
            <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado donde se ubica la empresa u organismo donde trabaja</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="repreEstadoTrabajo" name="EstadoDondeSeUbicaElTrabajoDelRepresentante">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde trabaja</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-repreEstadoTrabajo" name="MunicipioDondeTrabajaElRepresentante" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde se ubica el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="UrbanizaOSectorDondeSeUbicaElTrabajoDelRepresentante" placeholder="Urbanización o sector donde se ubica el trabajo del representante">
                </div>
            </div>
            <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Calle o avenida donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="CalleOAvenidaDondeSeUbicaElTrabajoDelRepresentante" placeholder="Calle o avenida donde trabaja el representante">
                </div>
            </div>
            <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Edificio o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="EdificioOCasaDondeTrabajaElRepresentante" placeholder="Edificio o casa donde trabaja el representante">
                </div>
            </div>
            <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Piso donde se ubica el trabajo</label>
                <div class="col-sm-6">
                    <input type="text" minlength="1" class="form-control" id="reprePrimerNombre" name="PisoDondeSeUbicaElTrabajoDelRepresentante" placeholder="Piso donde se ubica el trabajo el representante">
                </div>
            </div>
            <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Oficina, número o apartamento donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="OficinaNumeroOApartamentoDondeTrabajaElRepresentante" placeholder="Oficina, número o apartamento donde trabaja el representante">
                </div>
            </div>
            <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del trabajo actual</label>
                <div class="col-sm-6">
                    <input type="text" minlength="11" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDelTrabajoActualDelRepresentante" placeholder="Teléfono del trabajo actual del representante">
                </div>
            </div>
            <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Extensión telefónica para contactar</label>
                <div class="col-sm-6">
                    <input type="text"  class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionTelefonicaParaContactarAlRepresentante" placeholder="Extensión telefónica para contactar al representante">
                </div>
            </div>
            <div class="form-group repre-trabajador" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="PersonaContactoEnElTrabajoDelRepresentante" placeholder="Persona contacto en el trabajo del representante">
                </div>
            </div>
            <div class="form-group repre-trabajador" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de la persona contacto del trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="11" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDeLaPersonaContactoDelTrabajoDelRepresentante" placeholder="Teléfono de la persona contacto del trabajo del representante">
                </div>
            </div>
            <div class="form-group repre-trabajador" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Extensión de la persona contacto del trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionDeLaPersonaContactoDelTrabajoDelRepresentante" placeholder="Extensión de la persona contacto del trabajo del representante">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Tiene alguna diversidad funcional<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control repre-diversidad-funcio" name="ElRepresentanteTieneAlgunaDiversidadFuncional" value="1">Sí</label>
                    <label><input type="radio" class="form-control repre-diversidad-funcio" name="ElRepresentanteTieneAlgunaDiversidadFuncional" value="0">No</label>
                </div>
            </div>
            <div class="form-group depen-repre-diversidad" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Indique el tipo de diversidad funcional</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                      <label><input type="checkbox" name="RepreDiversidadMotora" value="1">Motora</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" name="RepreDiversidadVisual" value="1">Visual</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" name="RepreDiversidadAuditiva" value="1">Auditiva</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" name="RepreDiversidadNeurologica" value="1">Neurológica</label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" name="RepreDiversidadLenguaje" value="1">De lenguaje</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" name="RepreDiversidadOtra" value="1">Otra</label>
                    </div>
                </div>
            </div>
            <div class="form-group depen-repre-diversidad" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique cuál otra diversidad funcional posee</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="EspecificaRepreDiversidadOtra"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">El alumno (a) tiene otros hermanos estudiando en las Escuelas Municipales de Chacao<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control repre-hijos-estudian-chacao" name="ElRepresentanteTieneOtrosHijosEstudiandoChacao" value="1">Sí</label>
                    <label><input type="radio" class="form-control repre-hijos-estudian-chacao" name="ElRepresentanteTieneOtrosHijosEstudiandoChacao" value="0">No</label>
                </div>
            </div>

            <div class="form-group hijos-estudian-chacao" style="display:none">
                <label for="field-1" class="col-sm-4 control-label" >UEM "Juan de Dios Guanche"</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control repre-hijos-estudian-guanche" name="HijosEstudianGuanche" value="1">Sí</label>
                    <label><input type="radio" class="form-control repre-hijos-estudian-guanche" name="HijosEstudianGuanche" value="0">No</label>
                </div>
            </div>
            <div class="form-group hijos-estudian-guanche" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Cuántos</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="cantidadHijosEstudianGuanche" name="CantidadHijosEstudianGuanche" placeholder="¿Cuantos hijos estudian en la UEM Juan de Dios Guanche?">
                </div>
            </div>
            <div class="form-group hijos-estudian-guanche" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">En cuáles grados</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="GradosHijosEstudianGuanche"></textarea>
                </div>
            </div>

            <div class="form-group hijos-estudian-chacao" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">UEM "Andrés Bello"</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control repre-hijos-estudian-andres-bello" name="HijosEstudianAndresBello" value="1">Sí</label>
                    <label><input type="radio" class="form-control repre-hijos-estudian-andres-bello" name="HijosEstudianAndresBello" value="0">No</label>
                </div>
            </div>
            <div class="form-group hijos-estudian-andres-bello" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Cuántos</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="cantidadHijosEstudianAndresBello" name="CantidadHijosEstudianAndresBello" placeholder="¿Cuantos hijos estudian en la UEM Andrés Bello?">
                </div>
            </div>
            <div class="form-group hijos-estudian-andres-bello" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">En cuáles grados</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="GradosHijosEstudianAndresBello"></textarea>
                </div>
            </div>
            <div class="form-group hijos-estudian-chacao" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">UEMI "Carlos Soublette"</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control repre-hijos-estudian-carlos-soublette" name="HijosEstudianCarlosSoublette" value="1">Sí</label>
                    <label><input type="radio" class="form-control repre-hijos-estudian-carlos-soublette" name="HijosEstudianCarlosSoublette" value="0">No</label>
                </div>
            </div>
            <div class="form-group hijos-estudian-carlos-soublette" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Cuántos</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="cantidadHijosEstudianCarlosSoublette" name="CantidadHijosEstudianCarlosSoublette" placeholder="¿Cuantos hijos estudian en la UEM Carlos Soublette?">
                </div>
            </div>
            <div class="form-group hijos-estudian-carlos-soublette" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">En cuáles grados</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="GradosHijosEstudianCarlosSoublette"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button type="button" id="siguiente-representante" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>