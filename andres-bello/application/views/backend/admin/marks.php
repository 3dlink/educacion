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
                <?php echo form_open(base_url().$this->session->userdata('login_type').'/marks/'.$id_nivel_educativo);?>
                <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered datatable" id="table_export">
                    <thead>
                	<tr>
                        <th><?php echo "examen" ?></th>
                        <th><?php echo "grado" ?></th>
                        <th><?php echo "sección" ?></th>
                        <th><?php echo "asignatura" ?></th>
                        <th>&nbsp;</th>
                	</tr>
                    </thead>
                    <tbody>
                	<tr>
                        <td>
                    	   <select name="exam_id" class="form-control"  style="float:left;" >
                                <option value=""><?php echo "Seleccione un examen"?></option>
                                <?php
                                $exams = $this->db->get('exam')->result_array();
                                foreach($exams as $row):
                                ?>
                                    <option value="<?php echo $row['exam_id'];?>" <?php if($exam_id == $row['exam_id'])echo 'selected';?>>
                                        <?php echo ""?> <?php echo $row['contenido'];?>
                                    </option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                        <td>
                    	   <select name="class_id" class="form-control" id="class_selection_holder"  onchange="get_class_section(this.value)"  style="float:left;">
                                <option value=""><?php echo "Seleccione un grado"?></option>
                                <?php
                                foreach($classes as $row):
                                ?>
                                    <option value="<?php echo $row['id_grado'];?>" <?php if($class_id == $row['id_grado'])echo 'selected';?>>
                                            <?php echo $row['nombre_grado'];?>
                                    </option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="section_id" class="form-control" style="width:100%;" id="section_selection_holder" style="float:left;">
                                <option value=""><?php echo "Seleccione primero el grado"?></option>
                            </select>
                        </td>
                        <td>
                    	   <select name="subject_id" class="form-control" style="width:100%;" id="subject_selection_holder" style="float:left;">
                                <option value=""><?php echo "Seleccione primero el grado"?></option>
                            </select>
                        </td>
                        <td>
                    	   <input type="hidden" name="operation" value="selection" />
		   <input type="submit" value="<?php echo "Calificar" ?>" class="btn btn-info" />
                        </td>
                	</tr>
                    </tbody>
                </table>
                </form>
                </center>


                <br /><br />


                <?php if($exam_id >0 && $class_id >0 ):?>
                <?php
		////CREATE THE MARK ENTRY ONLY IF NOT EXISTS////
                        $id_school = $this->config->item('id_school');
		$students	=	$this->db->get_where('vestudiantesasistencia' , array('SeccionACursar'=>$class_id, 'id_escuela'=>$id_school))->result_array();
		foreach($students as $row):
			$verify_data	=	array(	'exam_id' => $exam_id ,
						'class_id' => $class_id ,
						'subject_id' => $subject_id ,
                                                                        'section_id' => $section_id ,
						'student_id' => $row['id_inscripcion']);
			$query = $this->db->get_where('mark' , $verify_data);

			if($query->num_rows() < 1)
				$this->db->insert('mark' , $verify_data);
		 endforeach;
	   ?>
                <?php echo form_open(base_url().$this->session->userdata('login_type').'/marks/'.$id_nivel_educativo);?>
                    <table class="table table-bordered datatable" >
                        <thead>
                            <tr>
                                <th width="30"><?php echo "Nº"?></th>
                                <th width="180"><?php echo "Cédula de Identidad o Cédula Escolar"?></th>
                                <th width="250"><?php echo "Alumno"?></th>
                                <th width="180"><?php echo ($id_nivel_educativo < 3) ? "Indicador de Aprendizaje" : "Calificacion obtenida (de 1 a 20 puntos)"?> </td>
                                <th><?php echo "Comentario"?></th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $numero = 0;
                        $this->db->order_by("CedulaDeIdentidadDelAlumnoOCedulaEscolar", "asc");
		$students = $this->db->get_where('vestudiantesasistencia' , array('SeccionACursar'=>$class_id))->result_array();

		foreach($students as $row):

		  $verify_data = array('exam_id' => $exam_id,
                                                            'class_id' => $class_id,
                                                            'subject_id' => $subject_id,
                                                            'section_id' => $section_id ,
				            'student_id' => $row['id_inscripcion']);

		  $query = $this->db->get_where('mark' , $verify_data);
		  $marks = $query->result_array();
		foreach($marks as $row2):
                            $numero = $numero + 1;
		?>

			<tr>
                                        <td>
                                            <?php echo $numero ?>
                                        </td>
                                        <td>
                                            <?php $nacionalidad = ($row['NacionalidadDelAlumno'] == 'VENEZOLANA' ? 'V' : 'E') ?>
                                            <?php echo $nacionalidad.$row['CedulaDeIdentidadDelAlumnoOCedulaEscolar'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['PrimerNombreDelAlumno'].' '.$row['SegundoNombreDelAlumno'].' '.$row['PrimerApellidoDelAlumno'].' '.$row['SegundoApellidoDelAlumno'];?>
                                        </td>
                                        <td>
                                            <?php if($id_nivel_educativo < 3){?>
                                              <select class="form-control" id="tipo_correo" name="Reporte" required>
                                                <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                                <option value="1" >Iniciado</option>
                                                <option value="2" >En Proceso</option>
                                                <option value="3" >Consolidado</option>
                                              </select>
                                            <?php }else{ ?>
                                                <input type="number" name="mark_obtained_<?php echo $row2['mark_id'];?>" value="<?php echo $row2['mark_obtained'];?>" minlength="1" maxlength="2" min="0" max="20" class="form-control"  />
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <textarea name="comment_<?php echo $row2['mark_id'];?>" class="form-control"><?php echo $row2['comment'];?></textarea>
                                            <input type="hidden" name="mark_id" value="<?php echo $row2['mark_id'];?>" />
                                            <input type="hidden" name="exam_id" value="<?php echo $exam_id;?>" />
                                            <input type="hidden" name="class_id" value="<?php echo $class_id;?>" />
                                            <input type="hidden" name="subject_id" value="<?php echo $subject_id;?>" />
                                            <input type="hidden" name="operation" value="update" />
                                        </td>
                                    </tr>

                     	<?php endforeach;
		endforeach;
		?>

                     </tbody>
                  </table>
                  <div style="text-align: center;">
                      <button type="submit" class="btn btn-primary"> Actualizar</button>
                  </div>
                  </form>
            <?php endif;?>
			</div>
            <!----TABLE LISTING ENDS-->

		</div>
	</div>
</div>

<script type="text/javascript">
    function get_class(exam_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_section/' + exam_id ,
            success: function(response)
            {
                jQuery('#class_selection_holder').html(response);
                get_class_subject(class_id);
            }
        });
    }

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