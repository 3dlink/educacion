<?php
$edit_data		=	$this->db->get_where('perfil' , array('id_perfil' => $param2) )->result_array();
foreach ( $edit_data as $row):
    ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo "Editar Perfil";?>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open(base_url() . 'admin/profiles/edit/'.$row['id_perfil'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>


                <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo "Nombre del Perfil";?></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo "Descripcion Perfil";?></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="descripcion" value="<?php echo $row['descripcion'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo "Modificar Perfil";?></button>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>