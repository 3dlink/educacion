
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

<div class="row">
    <div class="col-md-12">
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#add" data-toggle="tab">
                    <i class="entypo-plus-circled"></i>
                    Imprimir Carnet
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        <div class="tab-content">
            <!----CREATION FORM STARTS---->
            <div class="tab-pane box active" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url().$this->session->userdata('login_type').'/search_carnet' , array('class' => 'form-horizontal form-groups-bordered carnet','role' => 'form' ,'target'=>'_top', 'id'=>'form-carnet'));?>
                    <div class="form-group">
                        <label for="txtIdentification" class="col-sm-2 control-label" title="Ingrese cédula de identidad ó cédula escolar">
                            Cédula de Identidad
                        </label>
                        <div class="col-sm-3">
                            <div class="box closable-chat-box">
                                <div class="box-content padded">
                                    <div class="chat-message-box">
                                        <input type="text" name="txtIdentification" id="txtIdentification" rows="5" placeholder="Ej. 25333555" class="form-control" required autofocus>
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
                            <!-- RESULTADO DE LA BUSQUEDA -->
                            <div class="alert alert-danger noFound" id="noFound" style="display:none;">
                                <i class="glyphicon glyphicon-info-sign"></i>
                                La búsqueda no coincide con ningún registro de la base de datos.
                            </div>
                            <div class="alert alert-success" id="Found" style="height: 110px; display:none;">
                                <h3 class="headerFound">
                                <i class="glyphicon glyphicon-ok-circle"></i>
                                Alumno:
                                </h3>
                                <p class="text-success foundStudent" id="foundStudent"></p>
                                <input type="hidden" minlength="2" class="form-control" id="carnetID_Inscripcion">
                                <div class="col-sm-4">
                                    <a href="javascript:;" onclick="window.open('<?php echo base_url().$this->session->userdata('login_type');?>/student_carnet/'+document.getElementById('carnetID_Inscripcion').value, '_blank');" class="btn btn-success">
                                        <i class="entypo-export"></i>
                                        Ver Carnet
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="javascript:;" class="btn btn-success " id='linkEnviarCarnet'>
                                        <i class="entypo-mail"></i>
                                        Enviar Carnet
                                    </a>
                                </div>
                            </div>
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