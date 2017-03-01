<?php
$edit_data		=	$this->db->get_where('subject' , array('subject_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo "Editar Asignatura";?>
            	</div>
            </div>
			<div class="panel-body">
                <?php echo form_open(base_url().$this->session->userdata('login_type').'/subject/do_update/'.$row['subject_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo "Nombre";?></label>
                    <div class="col-sm-5 controls">
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo "Grado";?></label>
                    <div class="col-sm-5 controls">
                        <select name="class_id" class="form-control">
                            <?php
                            $classes = $this->db->get('class')->result_array();
                            foreach($classes as $row2):
                            ?>
                                <option value="<?php echo $row2['class_id'];?>"
                                    <?php if($row['class_id'] == $row2['class_id'])echo 'selected';?>>
                                        <?php echo $row2['name'];?>
                                            </option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo "Docente";?></label>
                    <div class="col-sm-5 controls">
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
                    <label class="col-sm-3 control-label"><?php echo "Color"?></label>
                    <div class="col-sm-5">
                        <select style="display: none;" id="colorselector_edit" name="color">
                            <option value="#A0522D" data-color="#A0522D">sienna</option>
                            <option value="#CD5C5C" data-color="#CD5C5C">indianred</option>
                            <option value="#FF4500" data-color="#FF4500">orangered</option>
                            <option value="#008B8B" data-color="#008B8B">darkcyan</option>
                            <option value="#B8860B" data-color="#B8860B">darkgoldenrod</option>
                            <option value="#32CD32" data-color="#32CD32">limegreen</option>
                            <option value="#FFD700" data-color="#FFD700">gold</option>
                            <option value="#48D1CC" data-color="#48D1CC">mediumturquoise</option>
                            <option value="#87CEEB" data-color="#87CEEB">skyblue</option>
                            <option value="#FF69B4" data-color="#FF69B4">hotpink</option>
                            <option value="#CD5C5C" data-color="#CD5C5C">indianred</option>
                            <option value="#87CEFA" data-color="#87CEFA">lightskyblue</option>
                            <option value="#6495ED" data-color="#6495ED">cornflowerblue</option>
                            <option value="#DC143C" data-color="#DC143C">crimson</option>
                            <option value="#FF8C00" data-color="#FF8C00">darkorange</option>
                            <option value="#C71585" data-color="#C71585">mediumvioletred</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo "Editar Asignatura";?></button>
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

<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

        jQuery('#colorselector_edit').colorselector();

</script>