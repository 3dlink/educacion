
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

<div class="row">
    <div class="col-md-12">
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo "Crear Constancia"?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        <div class="tab-content">
            <!----CREATION FORM STARTS---->
            <div class="tab-pane box active" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url() . 'admin/search_carnet' , array('class' => 'form-horizontal form-groups-bordered carnet','role' => 'form' ,'target'=>'_top', 'id'=>'form-constancias'));?>
                        <div class="form-group">
                            <label for="txtIdentification" class="col-sm-2 control-label" title="Ingrese cédula de identidad ó cédula escolar">
                                Cédula de Identidad
                            </label>
                            <div class="col-sm-3">
                                <div class="box closable-chat-box">
                                    <div class="box-content padded">
                                        <div class="chat-message-box">
                                           <input type="text" name="txtIdentification" id="txtIdentification" rows="5" placeholder="Ej. 25333555" class="form-control" required autofocus>
                                           <input type="hidden" minlength="2" class="form-control" id="carnetID_Inscripcion" name="carnetID_Inscripcion">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" id="enviar" class="btn btn-primary">
                                    <i class="entypo-search"></i>
                                    Buscar
                                </button>
                            </div>
                            <div class="col-sm-5">
                                <!-- MOSTRAR RESULTADOS DE LA BUSQUEDA -->
                                <div class="alert alert-danger noFound" id="noFound" style="display:none;">
                                    <i class="glyphicon glyphicon-info-sign"></i>
                                    La búsqueda no coincide con ningún registro de la base de datos.
                                </div>
                                <div class="alert alert-success" id="Found" style="display:none;">
                                    <h3 class="headerFound">
                                    <i class="glyphicon glyphicon-ok-circle"></i>
                                    Alumno:
                                    </h3>
                                    <p class="text-success foundStudent" id="foundStudent"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group oculto" id="selectConstancias">
                            <label for="record_types" class="col-sm-2 control-label" title="Seleccione una constancia!">Tipo de Constancia</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="record_types" id="record_types" required >
                                    <option value="0" selected="selected">---- Seleccione ----</option>
                                    <option value="1">Constancia de Estudio</option>
                                    <option value="2">Constancia de Inscripción</option>
                                    <option value="3">Constancia de Asistencia</option>
                                    <option value="4">Constancia de Tramitación de Documentos</option>
                                    <option value="5">Convocatoria al Representante</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <a href="javascript:;" onclick="window.open('<?php echo base_url().$this->session->userdata('login_type');?>/student_constancy/'+document.getElementById('record_types').options[document.getElementById('record_types').selectedIndex].value+'/'+document.getElementById('carnetID_Inscripcion').value);" class="btn btn-primary oculto" id='linkConstancia'>
                                    <i class="entypo-export"></i>
                                    Ver Constancia
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:;" class="btn btn-primary oculto" id='linkEnviarConstancia'>
                                    <i class="entypo-mail"></i>
                                    Enviar Constancia
                                </a>
                            </div>
                        </div>
                        <div class="form-group oculto" id="linkConstanciaAsistencia">
                            <label for="txtFecha" class="col-sm-2 control-label" title="Seleccione una constancia!">Ingrese la informacion:</label>
                            <div class="col-sm-4">
                                <input type="date" name="txtFecha" id="txtFecha" rows="5" placeholder="Fecha" class="form-control" required disabled value="<?php echo date("Y-m-d");?>">
                                <input type="text" name="txtDesde" id="txtDesde" rows="5" placeholder="Desde" class="form-control" required autofocus>
                                <input type="text" name="txtHasta" id="txtHasta" rows="5" placeholder="Hasta" class="form-control" required autofocus>
                            </div>
                            <div class="col-sm-3">
                                <a href="javascript:;" onclick="window.open('<?php echo base_url().$this->session->userdata('login_type');?>/student_constancy/'+document.getElementById('record_types').options[document.getElementById('record_types').selectedIndex].value+'/'+document.getElementById('carnetID_Inscripcion').value+'/'+document.getElementById('txtFecha').value+'_'+document.getElementById('txtDesde').value+'_'+document.getElementById('txtHasta').value);" class="btn btn-primary oculto" id='linkConstanciaAsistenciaButton'>
                                    <i class="entypo-export"></i>
                                    Ver Constancia
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:;" class="btn btn-primary oculto" id='linkEnviarConstanciaAsistencia'>
                                    <i class="entypo-mail"></i>
                                    Enviar Constancia
                                </a>
                            </div>
                        </div>
                        <div class="form-group oculto" id="linkConstanciaTramites">
                            <label for="record_types" class="col-sm-2 control-label" title="Seleccione una constancia!">Tramitando:</label>
                            <div class="col-sm-4">
                                <input type="text" name="txtTramite" id="txtTramite" rows="5" placeholder="" class="form-control" required autofocus>
                            </div>
                            <div class="col-sm-3">
                                <a href="javascript:;" onclick="window.open('<?php echo base_url().$this->session->userdata('login_type');?>/student_constancy/'+document.getElementById('record_types').options[document.getElementById('record_types').selectedIndex].value+'/'+document.getElementById('carnetID_Inscripcion').value+'/'+document.getElementById('txtTramite').value);" class="btn btn-primary oculto" id='linkConstanciaTramitesButton'>
                                    <i class="entypo-export"></i>
                                    Ver Constancia
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:;" class="btn btn-primary oculto" id='linkEnviarConstanciaTramites'>
                                    <i class="entypo-mail"></i>
                                    Enviar Constancia
                                </a>
                            </div>
                        </div>
                        <div class="form-group oculto" id="linkConstanciaConvovatoria">
                            <label for="txtFecha" class="col-sm-2 control-label" title="Seleccione una constancia!">Ingrese la informacion:</label>
                            <div class="col-sm-4">
                                <input type="text" name="txtFechaConvocatoria" id="txtFechaConvocatoria" rows="5" placeholder="Fecha" class="form-control" required autofocus>
                                <input type="text" name="txtHora" id="txtHora" rows="5" placeholder="Hora" class="form-control" required autofocus>
                                <input type="text" name="txtAtendido" id="txtAtendido" rows="5" placeholder="Atendido por" class="form-control" required autofocus>
                            </div>
                            <div class="col-sm-3">
                                <a href="javascript:;" onclick="window.open('<?php echo base_url().$this->session->userdata('login_type');?>/student_constancy/'+document.getElementById('record_types').options[document.getElementById('record_types').selectedIndex].value+'/'+document.getElementById('carnetID_Inscripcion').value+'/'+document.getElementById('txtFechaConvocatoria').value+'_'+document.getElementById('txtHora').value+'_'+document.getElementById('txtAtendido').value);" class="btn btn-primary oculto" id='linkConstanciaConvovatoriaButton'>
                                    <i class="entypo-export"></i>
                                    Ver Constancia
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:;" class="btn btn-primary oculto" id='linkEnviarConstanciaConvovatoria'>
                                    <i class="entypo-mail"></i>
                                    Enviar Constancia
                                </a>
                            </div>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
            <!----CREATION FORM ENDS-->
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/censo/main.js"></script>