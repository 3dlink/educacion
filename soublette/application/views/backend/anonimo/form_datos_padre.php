<div class="tab-pane box" id="datosPadre">
    <div class="box-content main">
        <form id="form-datos-padre" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">El padre vive<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control padre-viva" name="ElPadreVive" value="1">Sí</label>
                    <label><input type="radio" class="form-control padre-viva" name="ElPadreVive" value="0">No</label>
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Nombre<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDelPadre" placeholder="Nombres del Padre">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Apellidos<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="repreSegundoNombre" name="ApellidosDelPadre" placeholder="Apellidos del Padre">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Cédula de identidad<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="CedulaDeIdentidadDelPadre" name="CedulaDeIdentidadDelPadre" placeholder="Cédula de identidad del padre">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control dateToMysql" id="padreFechaNac" name="FechaDeNacimientoDelPadre" placeholder="">
                    <input type="hidden" class="form-control" id="FechaDeNacimientoDelPadre" name="FechaDeNacimientoDelPadre" placeholder="">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control tipoNacPadre" name="NacionalidadDelPadre" value="VENEZOLANA">Venezolana</label>
                    <label><input type="radio" class="form-control tipoNacPadre" name="NacionalidadDelPadre" value="EXTRANJERA">Extranjera</label>
                </div>
            </div>
            <div class="form-group only-hide-padre tipoNacDepenPadreVe" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="estadoNacPadre" name="EstadoDondeNacioElPadre">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-padre tipoNacDepenPadreVe" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-estadoNacPadre" name="MunicipioDondeNacioElPadre" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group only-hide-padre tipoNacDepenPadreEx" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">País de nacimiento</label>
                <div class="col-sm-6">
                  <input type="text" minlength="2" class="form-control" id="reprePrimerNombre" name="PaisDondeNacioElPadre" placeholder="País donde nacio el padre">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado civil<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="EstadoCivilDelPadre" value="SOLTERO">Soltero</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="CASADO">Casado</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="DIVORCIADO">Divorciado</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="CONCUBINATO">En concubinato</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="VIUDO">Viudo</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select required class="form-control select-estado" id="padreEstadoResi" name="EstadoDondeResideElPadre">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>"><?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="select-municipio-padreEstadoResi" name="MunicipioDondeResideElPadre" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div id="sectorMunicipioChacaoPadre" class="form-group only-hide-padre depen-padre-vive" style="display: none">
                <label for="address" class="col-sm-4 control-label">Sector</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-sector-municipio" name="UrbanizacionOSectorDondeResideElPadre" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($sectores as $sector){ ?>
                            <option value="<?php echo $sector['id_sector']?>" class="oculto"> <?php echo $sector['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div  id="sectorMunicipioPadre" class="form-group only-hide-padre depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde reside</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="repreParroNacimiento" name="UrbanizacionOSectorDondeResideElPadre" placeholder="Urbanización o sector donde reside del padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="repreFechaNac" name="CasaOEdificioDondeResideElPadre" placeholder="Casa o edificio donde reside el padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Piso donde reside</label>
                <div class="col-sm-6">
                  <input type="text" required minlength="1" class="form-control" id="repreFechaNac" name="PisoDondeResideElPadre" placeholder="Piso donde reside el padre">
                </div>
            </div>

            <div class="form-group only-hide-padre depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Número o apartamento donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" required minlength="2" class="form-control" id="padreApartamento" name="NumeroDeCasaOApartamentoDondeResideElPadre" placeholder="Número o apartamento donde reside el padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlDomicilioDelPadre"></textarea>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de habitación<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" required minlength="10" class="form-control onlyNumbers" id="padreTelefonoHabitacion" name="TelefonoDeHabitacionDelPadre" placeholder="Teléfono de habitación del padre">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Teléfono celular</label>
                <div class="col-sm-6">
                  <input type="text" minlength="" class="form-control onlyNumbers" id="padreTelefonoCelular" name="TelefonoCelularDelPadre" placeholder="Teléfono celular del padre">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Correo electrónico<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="email" required minlength="7" class="form-control" id="padreCorreoElectronico" name="CorreoElectronicoDelPadre" placeholder="Correo electrónico del padre">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Redes sociales que usa</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                      <label><input type="checkbox" name="RedSocialPadreFacebook" value="1">Facebook</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" name="RedSocialPadreTwitter" value="1">Twitter</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" name="RedSocialPadreWhatsapp" value="1">Whatsapp</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" name="RedSocialPadreOtra" value="1">Otra</label>
                    </div>
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">El padre labora actualmente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control padreTrabaja" name="ElPadreTrabajaActualmente" value="1">Sí</label>
                    <label><input type="radio" class="form-control padreTrabaja" name="ElPadreTrabajaActualmente" value="0">No</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Profesión u ocupación</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="repreEmail" name="ProfesionUOcupacionDelPadre" placeholder="Profesión u ocupación del padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Ingreso mensual</label>
                <div class="col-sm-6" >
                    <label><input type="radio" required class="form-control sueldo" name="IngresoMensualDelPadre" value="MENORMINIMO">Menor a sueldo mínimo</label>
                    <label><input type="radio" class="form-control sueldo" name="IngresoMensualDelPadre" value="MAYORMINIMO">Mayor a sueldo mínimo</label>
                    <label><input type="radio" class="form-control sueldo" name="IngresoMensualDelPadre" value="MINIMO">Sueldo mínimo</label>

                    <label><input type="radio" required class="form-control sueldo-mayor-minimo" name="EscalaDeIngresosDelPadre" value="padre">Entre Bs.6000 y Bs.9000</label>
                    <label class="sueldo-mayor-minimo"><input type="radio" class="form-control" name="EscalaDeIngresosDelPadre" value="padre">Entre Bs.9001 y Bs.12.000</label>
                    <label class="sueldo-mayor-minimo"><input type="radio" class="form-control" name="EscalaDeIngresosDelPadre" value="padre">Entre Bs.12001 y Bs.15.000</label>
                    <label class="sueldo-mayor-minimo"><input type="radio" class="form-control" name="EscalaDeIngresosDelPadre" value="padre">Entre Bs.15.001 y Bs.18.000</label>
                    <label class="sueldo-mayor-minimo"><input type="radio" class="form-control" name="EscalaDeIngresosDelPadre" value="padre">Mayor a Bs.18.000</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Tipo de jornada laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralDelPadre" value="TIEMPOCOMPLETO">Tiempo completo</label>
                    <label><input type="radio" required class="form-control" name="TipoDeJornadaLaboralDelPadre" value="MEDIOTIEMPO">Medio Tiempo</label>
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralDelPadre" value="NOCTURNA">Nocturna</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Tipo de relacion laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDelPadre" value="TRABAJADORINFORMAL">Trabajador Informal</label>
                    <label><input type="radio" required class="form-control" name="TipoDeRelacionLaboralDelPadre" value="TRABAJADORINDEPENEDIENTE">Trabajador Independiente</label>
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDelPadre" value="TRABAJADORDEPENDIENTE">Trabajador Dependiente</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Nombre de la empresa u organismo donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre" placeholder="Nombre de la empresa u organismo donde trabaja el padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado donde trabaja</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="padreEstadoTrabajo" name="EstadoDondeTrabajaElPadre">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>"><?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde trabaja</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-padreEstadoTrabajo" name="MunicipioDondeTrabajaElPadre" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="UrbanizacionOSectorDondeTrabajaElPadre" placeholder="Urbanización o sector donde trabaja el padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Edificio o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="EdificioOCasaDondeTrabajaElPadre" placeholder="Edificio o casa donde trabaja el padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Piso donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="PisoDondeTrabajaElPadre" placeholder="">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Número de oficina, apartamento o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="OficinaCasaOApartamentoDondeTrabajaElPadre" placeholder="Número de oficina, apartamento o casa donde trabaja el padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al trabajo</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlTrabajoDelPadre"></textarea>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del lugar de trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDelLugarDeTrabajotrabajoDelPadre" placeholder="Teléfono del lugar de trabajo del padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Extension telefónica para contactar</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionTelefonicaDeContactoDelPadre" placeholder="Extension telefónica para contactar al padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="PersonaContactoEnElTrabajoDelPadre" placeholder="Persona contacto en el trabajo del padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDeLaPersonaContactoEnElTrabajoDelPadre" placeholder="Teléfono de la persona contacto en el trabajo del padre">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Extensión de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionDeLaPersonaContactoEnElTrabajodelPadre" placeholder="Extensión de la persona contacto en el trabajo del padre">
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

<div class="box-content padre-elegida-repre" style="display:none">
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