<?php

$edit_data = $this->db->get_where('secciones' , array('id_seccion' => $param2))->result_array();
foreach ($edit_data as $row):
?>

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

<?php echo form_open(base_url() . 'admin/sections/'.$param3.'/edit/' . $row['id_seccion'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

<div class="form-group">
<label for="field-1" class="col-sm-3 control-label"><?php echo "Nombre"?></label>

<div class="col-sm-5">
<input type="text" class="form-control" name="nombre_seccion" data-validate="required" data-message-required="<?php echo "Campo Requerido";?>"
value="<?php echo $row['nombre_seccion'];?>">
</div>
</div>

<div class="form-group">
<label for="field-2" class="col-sm-3 control-label"><?php echo "Abreviación" ?></label>

<div class="col-sm-5">
<input type="text" class="form-control" name="abreviacion_seccion"
value="<?php echo $row['abreviacion_seccion'];?>" >
</div>
</div>

<div class="form-group">
<label for="field-2" class="col-sm-3 control-label"><?php echo "Grado" ?></label>

<div class="col-sm-5">
<select name="id_grado" class="form-control" data-validate="required" data-message-required="<?php echo "Campo Requerido"?> ">
<option value=""><?php echo "Seleccionar"?></option>
<?php
$classes = $this->db->get('grados')->result_array();
foreach($classes as $row2):
?>
<option value="<?php echo $row2['id_grado'];?>"
<?php if ($row['id_grado'] == $row2['id_grado'])
echo 'selected';?>>
<?php echo $row2['nombre_grado'];?>
</option>
<?php
endforeach;
?>
</select>
</div>
</div>

<div class="form-group">
<label for="field-2" class="col-sm-3 control-label"><?php echo ($param3 == 3) ? "Profesor Guía" : "Docente";?></label>

<div class="col-sm-5">
<select name="teacher_id" class="form-control">
<option value=""><?php echo "Seleccionar";?></option>
<?php
$teachers = $this->db->get('teacher')->result_array();
foreach($teachers as $row3):
?>
<option value="<?php echo $row3['teacher_id'];?>"
<?php if ($row['teacher_id'] == $row3['teacher_id'])
echo 'selected';?>>
<?php echo $row3['name'];?>
</option>
<?php
endforeach;
?>
</select>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-3 col-sm-5">
<button type="submit" class="btn btn-info"><?php echo "Actualizar";?></button>
</div>
</div>
<?php echo form_close();?>
</div>
</div>
</div>
</div>
<?php endforeach;?>