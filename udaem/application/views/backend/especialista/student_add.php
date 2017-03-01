<div class="row">
    <div class="col-md-12">
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#studentinfo" data-toggle="tab"><i class="entypo-users"></i>
                    <?php echo "Información de Estudiante"?>
                </a>
            </li>
            <li>
                <a href="#parentinfo" data-toggle="tab"><i class="entypo-user"></i>
                    <?php echo "Información del Representante"?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        <!----TAB STARTS-->
        <div class="tab-content">
            <!----TAB STUDENT STARTS-->
            <div class="tab-pane box active" id="studentinfo">
                <div class="box-content">
                    <?php echo form_open(base_url() . 'index.php?admin/student/do_update/', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"></label>
                            <div class="col-sm-6">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                        <img src="" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Seleccionar Imagen</span>
                                            <span class="fileinput-exists">Cambiar</span>
                                            <input type="file" name="userfile" accept="image/*">
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Cédula de Identidad"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="identification" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Primer Nombre"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="firtsname" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Segundo Nombre"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="secondname" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Primer Apellido"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="surname" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Segundo Apellido"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="secondsurname" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Grado"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="grade" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Sección"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="section" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-2" class="col-sm-4 control-label"><?php echo "Año Escolar"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="address" value="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo "Guardar"?></button>
                            </div>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
            <!----TAB STUDENT END-->
            <!----TAB STUDENT STARTS-->
            <div class="tab-pane box" id="parentinfo">
                <div class="box-content">
                    <?php echo form_open(base_url() . 'index.php?admin/student/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Foto"?></label>
                            <div class="col-sm-6">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                        <img src="" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Seleccionar Imagen</span>
                                            <span class="fileinput-exists">Cambiar</span>
                                            <input type="file" name="userfile" accept="image/*">
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Cédula de Identidad"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="identification" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Parentesco"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="student_relationship" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Primer Nombre"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="parent_firtsname" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Segundo Nombre"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="parent_secondname" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Primer Apellido"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="parent_surname" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo "Segundo Apellido"?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="parent_secondsurname" data-validate="required" data-message-required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo "Guardar"?></button>
                            </div>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
            <!----TAB STUDENT END-->
        </div>
    </div>
</div>

<script type="text/javascript">

    function get_class_sections(class_id) {

        $.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>