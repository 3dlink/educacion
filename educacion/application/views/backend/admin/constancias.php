

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
                    <?php echo form_open(base_url() . 'index.php?admin/noticeboard/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo "Cédula de Identidad" ?></label>
                        <div class="col-sm-2">
                            <div class="box closable-chat-box">
                                <div class="box-content padded">
                                    <div class="chat-message-box">
                                        <input type="text" name="notice" id="txtIdentification" rows="5" placeholder="<?php echo "Cédula de Identidad"?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="javascript:;" onclick="search();" class="btn btn-primary">
                                <i class="entypo-search"></i>
                                <?php echo "Buscar" ?>
                            </a>
                        </div>
                        <div class="col-sm-5">
                            <!-- MOSTRAR RESULTADOS DE LA BUSQUEDA -->
                        </div>
                    </div>
                    <script type="text/javascript">
                        function showAlert(str){
                            alert(str);
                        }
                    </script>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo "Tipo de Constancia" ?></label>
                        <div class="col-sm-4">
                            <select class="form-control" name="record_types" id="record_type" >
                                <option value="0"><?php echo "Seleccione"?></option>
                                <option value="1"><?php echo "Constancia de Estudio"?></option>
                                <!-- <option value="2"><?php echo "Constancia de Inscripción sin Carnet"?></option> -->
                                <!-- <option value="3"><?php echo "Constancia de Inscripción con Carnet"?></option> -->
                                <!-- <option value="4"><?php echo "Constancia de Promoción"?></option> -->
                                <!-- <option value="5"><?php echo "Constancia de Buena Conducta"?></option> -->
                                <option value="6"><?php echo "Constancia de Asistencia"?></option>
                                <option value="7"><?php echo "Constancia de Tramitacion de Documentos"?></option>
                                <option value="8"><?php echo "Convocatoria al Representante"?></option>
                                <!-- <option value="9"><?php echo "Constancia de Referencia Externa"?></option> -->
                            </select>
                        </div>

                        <div class="col-sm-3">
                            <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_view_record_'+document.getElementById('record_type').options[document.getElementById('record_type').selectedIndex].value+'/'+document.getElementById('txtIdentification').value);" class="btn btn-primary">
                                <i class="entypo-export"></i>
                                <?php echo "Ver Constancia" ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!----CREATION FORM ENDS-->
        </div>
    </div>
</div>