<?php
    $edit_data = $this->db->get_where('teacher' , array('teacher_id' => $param2, 'id_escuela' => $param3))->result_array();
    foreach ($edit_data as $row):
        $letra_cedula = substr($row['cedula_identidad'],0,1);
        $fecha_nacimiento = date('d/m/Y', strtotime($this->input->post('birthday')));
        $cargo_id = $row['id_cargo'];
        $cedula_identidad = substr($row['cedula_identidad'],1);
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo "Editar Docente"?>
                </div>
            </div>
            <div class="panel-body">

                <?php echo form_open(base_url().'admin/teacher/edit/'.$param2 , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label"><?php echo "Nombre"?></label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="<?php echo $row['name']; ?>" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label"><?php echo "Cédula de Identidad"?></label>
                        <div class="col-sm-2">
                            <select name="letra_cedula" class="form-control" required>
                                <option value="V" <?php echo ($letra_cedula == 'V') ? 'selected' : '' ?> ><?php echo "V"?></option>
                                <option value="E" <?php echo ($letra_cedula == 'E') ? 'selected' : '' ?>><?php echo "E"?></option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" required minlength="" maxlength="8" class="form-control" name="cedula_identidad" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="<?php echo $cedula_identidad; ?>" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label"><?php echo "Fecha de Nacimiento"?></label>
                        <div class="col-sm-6">
                            <input type="text" id="fecha_nacimiento" class="form-control" name="birthday" value="<?php echo $fecha_nacimiento; ?>" data-start-view="2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label"><?php echo "Genero"?></label>

                        <div class="col-sm-6">
                            <select name="sex" class="form-control">
                              <option value=""><?php echo "Seleccionar"?></option>
                              <option value="male" <?php if($row['sex']=='male') echo 'selected="selected"';?>><?php echo "Masculino"?></option>
                              <option value="female" <?php if($row['sex']=='female') echo 'selected="selected"';?>><?php echo "Femenino"?></option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label"><?php echo "Dirección"?></label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label"><?php echo "Telefono Habitación"?></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label"><?php echo "Telefono Celular"?></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="mobile_phone" value="<?php echo $row['mobile_phone']; ?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-2" class="col-sm-4 control-label"><?php echo "Cargo"?></label>
                        <div class="col-sm-6">
                            <select name="id_cargo" required class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>">
                                <option value="" disabled selected>Selecciona un cargo</option>
                                <?php $cargos = $this->db->get('cargo')->result_array();
                                foreach($cargos as $row_cargos):?>
                                    <option value="<?php echo $row_cargos['cargo_id'];?>" <?php if($cargo_id==$row_cargos['cargo_id']) echo 'selected="selected"';?> >
                                    <?php echo $row_cargos['name'];?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label"><?php echo "Correo electrónico"?></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label"><?php echo "Foto"?></label>

                        <div class="col-sm-6">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                    <img src="http://placehold.it/200x200" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Seleccionar imagen</span>
                                        <span class="fileinput-exists">Cambiar</span>
                                        <input type="file" name="userfile" accept="image/*">
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-info"><?php echo "Editar Docente"?></button>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
<script>
  jQuery(document).ready(function () {
        jQuery('#fecha_nacimiento').mask("00/00/0000", {placeholder: "__/__/____"});
  });
</script>