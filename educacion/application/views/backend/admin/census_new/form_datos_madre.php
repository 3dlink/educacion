<div class="tab-pane box" id="datosMadre">
    <div class="box-content main">
        <form id="form-datos-madre" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">La madre vive<span style="color:red"> *</span></span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio"  class="form-control madre-viva" name="LaMadreVive" value="1">Sí</label>
                    <label><input type="radio" class="form-control madre-viva" name="LaMadreVive" value="0">No</label>
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Nombres<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaMadre" placeholder="Nombres de la Madre">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Apellidos<span style="color:red"> *</span></label>
                <div class="col-sm-6">
    				<input type="text" required minlength="2" class="form-control" id="repreSegundoNombre" name="ApellidosDeLaMadre" placeholder="Apellidos de la Madre">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Cédula de identidad<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="CedulaDeIdentidadDeLaMadre" name="CedulaDeIdentidadDeLaMadre" placeholder="Cédula de identidad de la madre">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control dateToMysql" id="madreFechaNac" name="FechaDeNacimientoDeLaMadre" placeholder="">
                    <input type="hidden" class="form-control" id="FechaDeNacimientoDeLaMadre" name="FechaDeNacimientoDeLaMadre" placeholder="">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control tipoNacMadre" name="NacionalidadMadre" value="VENEZOLANA">Venezolana</label>
                    <label><input type="radio" class="form-control tipoNacMadre" name="NacionalidadMadre" value="EXTRANJERA">Extranjera</label>
                </div>
            </div>
            <div class="form-group only-hide-madre tipoNacDepenMadreVe" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="estadoNacMadre" name="EstadoDondeNacioLaMadre">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-madre tipoNacDepenMadreVe" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-estadoNacMadre" name="MunicipioDondeNacioLaMadre" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group only-hide-madre tipoNacDepenMadreEx" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">País de nacimiento </label>
                <div class="col-sm-6">
                  <input type="text" minlength="2" class="form-control" id="reprePrimerNombre" name="PaisDeNacimientoDeLaMadre" placeholder="País de nacimiento de la madre">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado civil <span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input required type="radio" class="form-control" name="EstadoCivilMadre" value="SOLTERO">Soltera</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="CASADO">Casada</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="DIVORCIADO">Divorciada</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="CONCUBINATO">En concubinato</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="VIUDO">Viuda</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select required class="form-control select-estado" id="madreEstadoResi" name="EstadoDondeResideLaMadre">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="select-municipio-madreEstadoResi" name="MunicipioDondeResideLaMadre" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div id="sectorMunicipioChacaoMadre" class="form-group only-hide-madre" style="display: none">
                <label for="address" class="col-sm-4 control-label">Sector</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-sector-municipio" name="UrbanizacionOSectorDondeResideLaMadre" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($sectores as $sector){ ?>
                            <option value="<?php echo $sector['id_sector']?>" class="oculto"> <?php echo $sector['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div id="sectorMunicipioMadre" class="form-group only-hide-madre depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde reside</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="repreParroNacimiento" name="UrbanizacionOSectorDondeResideLaMadre" placeholder="Urbanización o sector donde reside la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <input type="text" minlength="1" class="form-control" id="casaMadre" name="CasaOEdificioDondeResideLaMadre" placeholder="Casa o edificio donde reside la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Piso donde reside</label>
                <div class="col-sm-6">
                  <input type="text" minlength="1" class="form-control" id="" name="PisoDondeResideLaMadre" placeholder="Piso donde reside la madre">
                </div>
            </div>

            <div class="form-group only-hide-madre depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Número o apartamento donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" minlength="1" class="form-control" id="apartamentoMadre" name="NumeroOApartamentoDondeResideLaMadre" placeholder="Número o apartamento donde reside la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlDomiclioDeLaMadre"></textarea>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de habitación<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" required minlength="10" class="form-control onlyNumbers" id="telefonoHabitacion" name="TelefonoDeHabitacionDeLaMadre" placeholder="Teléfono de habitación de la madre">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Teléfono celular</label>
                <div class="col-sm-6">
                  <input type="text" minlength="10" class="form-control onlyNumbers" id="telefonoCelular" name="TelefonoCelularDeLaMadre" placeholder="Telefono celular de la madre">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Correo electrónico<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="email" required minlength="7" class="form-control" id="correoMadre" name="CorreoElectronicoDeLaMadre" placeholder="Correo electrónico de la madre">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Redes sociales que usa</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreFacebook" value="0">
                      <label><input type="checkbox" name="RedSocialMadreFacebook" value="1">Facebook</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreTwitter" value="0">
                      <label><input type="checkbox" name="RedSocialMadreTwitter" value="1">Twitter</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreWhatsapp" value="0">
                      <label><input type="checkbox" name="RedSocialMadreWhatsapp" value="1">Whatsapp</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreOtra" value="0">
                      <label><input type="checkbox" name="RedSocialMadreOtra" value="1">Otra</label>
                    </div>
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">La madre labora actualmente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input required type="radio" class="form-control madreTrabaja" name="MadreTrabaja" value="1">Sí</label>
                    <label><input type="radio" class="form-control madreTrabaja" name="MadreTrabaja" value="0">No</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Profesión u ocupación</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="" name="ProfesionUOcupacionDeLaMadre" placeholder="Profesión u ocupación de la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Ingreso mensual</label>
                <div class="col-sm-6" >
                    <label><input type="radio" class="form-control sueldo" name="IngresoMensualMadre" value="MENORMINIMO">Menor a sueldo mínimo</label>
                    <label><input type="radio" class="form-control sueldo" name="IngresoMensualMadre" value="MAYORMINIMO">Mayor a sueldo mínimo</label>
                    <label><input type="radio" class="form-control sueldo" name="IngresoMensualMadre" value="MINIMO">Sueldo mínimo</label>
                    <label><input type="radio" required class="form-control sueldo-mayor-minimo" name="EscalaDeIngresoMadre" value="6000-9000">Entre Bs.6000 y Bs.9000</label>
                    <label class="sueldo-mayor-minimo"><input type="radio" class="form-control" name="EscalaDeIngresoMadre" value="9001-12000">Entre Bs.9001 y Bs.12.000</label>
                    <label class="sueldo-mayor-minimo"><input type="radio" class="form-control" name="EscalaDeIngresoMadre" value="12001-15000">Entre Bs.12001 y Bs.15.000</label>
                    <label class="sueldo-mayor-minimo"><input type="radio" class="form-control" name="EscalaDeIngresoMadre" value="15001-18000">Entre Bs.15.001 y Bs.18.000</label>
                    <label class="sueldo-mayor-minimo"><input type="radio" class="form-control" name="EscalaDeIngresoMadre" value="18000">Mayor a Bs.18.000</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja " style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Tipo de jornada laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralMadre" value="TIEMPOCOMPLETO">Tiempo completo</label>
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralMadre" value="MEDIOTIEMPO">Medio Tiempo</label>
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralMadre" value="NOCTURNA">Nocturna</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Tipo de relacion laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDeLaMadre" value="TRABAJADORINFORMAL">Trabajador Informal</label>
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDeLaMadre" value="TRABAJADORINDEPENEDIENTE">Trabajador Independiente</label>
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDeLaMadre" value="TRABAJADORDEPENDIENTE">Trabajador Dependiente</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Nombre de la empresa u organismo donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre" placeholder="Nombre de la empresa u organismo donde trabaja la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado donde trabaja</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="madreEstadoTrabajo" name="EstadoDondeTrabajaLaMadre">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde trabaja</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-madreEstadoTrabajo" name="MunicipioDondeTrabajaLaMadre" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="UrbanizacionOSectorDondeTrabajaLaMadre" placeholder="Urbanización o sector donde trabaja la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Edificio o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="EdificioOCasaDondeTrabajaLaMadre" placeholder="">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Piso donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="PisoDondeTrabajaLaMadre" placeholder="">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Número de oficina, apartamento o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control onlyNumbers" id="reprePrimerNombre" name="NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre" placeholder="Número de oficina, apartamento o casa donde trabaja la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al trabajo</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlTrabajoDeLaMadre"></textarea>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del lugar de trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="10" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDelLugarDelTrabajodeLaMadre" placeholder="Teléfono del lugar de trabajo de la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Extensión telefónica para contactar</label>
                <div class="col-sm-6">
                    <input type="text"  class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionTelefonicaParaContactarALaMadre" placeholder="Extensión telefónica para contactar a la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="PersonaContactoEnElTrabajoDeLaMadre" placeholder="Persona contacto en el trabajo de la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre" placeholder="Teléfono de la persona contacto en el trabajo de la madre">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Extensión de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre" placeholder="Extensión de la persona contacto en el trabajo de la madre">
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

<div id="madre-elegida" class="box-content madre-elegida-repre" style="display:none">
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