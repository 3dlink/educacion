<?php

$edit_data		=	$this->db->get_where('grados' , array('id_grado' => $param3) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo "Editar Grado";?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open(base_url().$this->session->userdata('login_type').'/classes/'.$param2.'/do_update/'.$row['id_grado'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo "Nombre" ;?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" value="<?php echo $row['nombre_grado'];?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo "Abreviación" ;?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name_numeric" value="<?php echo $row['abreviacion_grado'];?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ($param2 == 3) ? "Profesor Guía" : "Docente" ;?></label>
                        <div class="col-sm-5">
                            <select name="teacher_id" class="form-control">
                                <option value=""></option>
                                <?php
                                $teachers = $this->db->get('teacher')->result_array();
                                foreach($teachers as $row2):
                                ?>
                                    <option value="<?php echo $row2['teacher_id'];?>"
                                        <?php if($row['teacher_id'] == $row2['teacher_id'])echo 'selected';?>>
                                            <?php echo $row2['name'];?>
                                                </option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
            		<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo "Editar Grado";?></button>
						</div>
					</div>
        		</form>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>


