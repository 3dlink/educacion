<div class="row">
	<div class="col-md-12">

    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
					<?php echo "Calificar" ?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>


            <!----TABLE LISTING STARTS-->
            <div class="tab-pane  <?php if(!isset($edit_data) && !isset($personal_profile) && !isset($academic_result) )echo 'active';?>" id="list">
				<center>
                <?php echo form_open(base_url() . 'admin/marks/'.$id_nivel_educativo);?>
                <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
                	<tr>
                        <td><?php echo "Selecciona examen" ?></td>
                        <td><?php echo "Selecciona grado" ?></td>
                        <td><?php echo "Selecciona materia" ?></td>
                        <td>&nbsp;</td>
                	</tr>
                	<tr>
                        <td>
                        	<select name="exam_id" class="form-control"  style="float:left;">
                                <option value=""><?php echo "Seleccione un examen"?></option>
                                <?php
                                $exams = $this->db->get('exam')->result_array();
                                foreach($exams as $row):
                                ?>
                                    <option value="<?php echo $row['exam_id'];?>"
                                        <?php if($exam_id == $row['exam_id'])echo 'selected';?>>
                                            <?php echo "Examen de "?> <?php echo $row['contenido'];?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                        <td>
                        	<select name="class_id" class="form-control"  onchange="get_class_section(this.value)"  style="float:left;">
                                <option value=""><?php echo "Seleccione un grado"?></option>
                                <?php
                                foreach($classes as $row):
                                ?>
                                    <option value="<?php echo $row['id_grado'];?>"
                                        <?php if($class_id == $row['id_grado'])echo 'selected';?>>
                                            <?php echo $row['nombre_grado'];?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="section_id" class="form-control" style="width:100%;"
                                    id="section_selection_holder">
                                <option value=""><?php echo "Seleccione primero el grado"?></option>
                            </select>
                        </td>
                        <td>
                        	<select name="subject_id" class="form-control" style="width:100%;"
                                    id="subject_selection_holder">
                                <option value=""><?php echo "Seleccione primero el grado"?></option>
                            </select>
                        </td>
                        <td>
                        	<input type="hidden" name="operation" value="selection" />
                    		<input type="submit" value="<?php echo "Calificar" ?>" class="btn btn-info" />
                        </td>
                	</tr>
                </table>
                </form>
                </center>


                <br /><br />


                <?php if($exam_id >0 && $class_id >0 && $subject_id >0 ):?>
                <?php
						////CREATE THE MARK ENTRY ONLY IF NOT EXISTS////
						$students	=	$this->db->get_where('vestudiantesasistencia' , array('id_seccion'=>$class_id))->result_array();
						foreach($students as $row):
							$verify_data	=	array(	'exam_id' => $exam_id ,
														'class_id' => $class_id ,
                                                        'section_id' => $section_id ,
														'subject_id' => $subject_id ,
														'student_id' => $row['id_estudiante']);
							$query = $this->db->get_where('mark' , $verify_data);

							if($query->num_rows() < 1)
								$this->db->insert('mark' , $verify_data);
						 endforeach;
				?>
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <td><?php echo "Alumno"?></td>
                            <td><?php echo "Calificacion obtenida"?> (de 100 disponible)</td>
                            <td><?php echo "Comentario"?></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
						$students	=	$this->db->get_where('vestudiantesasistencia' , array('id_seccion'=>$class_id))->result_array();
						foreach($students as $row):

							$verify_data	=	array(	'exam_id' => $exam_id ,
														'class_id' => $class_id ,
                                                        'section_id' => $section_id ,
														'subject_id' => $subject_id ,
														'student_id' => $row['id_estudiante']);

							$query = $this->db->get_where('mark' , $verify_data);
							$marks	=	$query->result_array();
							foreach($marks as $row2):
							?>
                            <?php echo form_open(base_url() . 'admin/marks/'.$id_nivel_educativo);?>
							<tr>
								<td>
                                    <?php echo $row['primer_nombre'].' '.$row['segundo_nombre'].' '.$row['primer_apellido'].' '.$row['segundo_apellido'];?>
                                </td>
								<td>
									 <input type="number" value="<?php echo $row2['mark_obtained'];?>" name="mark_obtained" class="form-control"  />

								</td>
								<td>
									<textarea name="comment" class="form-control"><?php echo $row2['comment'];?></textarea>
								</td>
                                <td>
                                	<input type="hidden" name="mark_id" value="<?php echo $row2['mark_id'];?>" />

                                	<input type="hidden" name="exam_id" value="<?php echo $exam_id;?>" />
                                	<input type="hidden" name="class_id" value="<?php echo $class_id;?>" />
                                	<input type="hidden" name="subject_id" value="<?php echo $subject_id;?>" />

                                	<input type="hidden" name="operation" value="update" />
                                	<button type="submit" class="btn btn-primary"> Actualizar</button>
                                </td>
							 </tr>
                             </form>
                         	<?php
							endforeach;
						 endforeach;
						 ?>
                     </tbody>
                  </table>

            <?php endif;?>
			</div>
            <!----TABLE LISTING ENDS-->

		</div>
	</div>
</div>

<script type="text/javascript">
    function get_class_section(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selection_holder').html(response);
                get_class_subject(class_id);
            }
        });
    }
    function get_class_subject(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_subject/' + class_id ,
            success: function(response)
            {
                jQuery('#subject_selection_holder').html(response);
            }
        });
    }
</script>