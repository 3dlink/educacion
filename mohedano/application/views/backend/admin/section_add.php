
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo "Agregar Sección"?>
                </div>
            </div>
            <div class="panel-body">
            <?php echo form_open(base_url() . 'admin/sections/'.$param2.'/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label"><?php echo "Nombre"?></label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="nombre_seccion" data-validate="required" data-message-required="<?php echo "Requerido";?>" value="" autofocus>
            </div>
            </div>

            <div class="form-group">
            <label for="field-2" class="col-sm-3 control-label"><?php echo "Abreviación"?></label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="abreviacion_seccion" value="" >
            </div>
            </div>

            <div class="form-group">
            <label for="field-2" class="col-sm-3 control-label"><?php echo "Grado"?></label>
            <div class="col-sm-5">
            <select name="id_grado" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido";?>">
            <option value=""><?php echo "Seleccionar"?></option>
            <?php
            $classes = $this->db->get('grados')->result_array();
            foreach($classes as $row2):
            ?>
            <option value="<?php echo $row2['id_grado'];?>">
            <?php echo $row2['nombre_grado'];?>
            </option>
            <?php
            endforeach;
            ?>
            </select>
            </div>
            </div>
            <div class="form-group">
            <label for="field-2" class="col-sm-3 control-label"><?php echo ($param2 == 3) ? "Profesor Guía" : "Docente" ?></label>
            <div class="col-sm-5">
            <select name="teacher_id" class="form-control">
            <option value=""><?php echo "Seleccionar"?></option>
            <?php
            $teachers = $this->db->get('teacher')->result_array();
            foreach($teachers as $row):
            	?>º
            	<option value="<?php echo $row['teacher_id'];?>">
            			<?php echo $row['name'];?>
                        </option>
            <?php
            endforeach;
            ?>
            </select>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
            <button type="submit" class="btn btn-info"><?php echo "Agregar Sección"?></button>
            </div>
            </div>
            <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>