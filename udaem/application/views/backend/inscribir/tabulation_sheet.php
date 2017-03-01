<hr />
<div class="row">
	<div class="col-md-12">
		<?php echo form_open(base_url() . 'admin/tabulation_sheet');?>
			<div class="col-md-4">
				<div class="form-group">
					<select name="class_id" class="form-control selectboxit">
                        <option value=""><?php echo "Selecciona grado"?></option>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach($classes as $row):
                        ?>
                            <option value="<?php echo $row['class_id'];?>"
                            	<?php if ($class_id == $row['class_id']) echo 'selected';?>>
                            		<?php echo $row['name'];?>
                            </option>
                        <?php
                        endforeach;
                        ?>
                    </select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<select name="exam_id" class="form-control selectboxit">
                        <option value=""><?php echo "Selecciona examen"?></option>
                        <?php
                        $exams = $this->db->get('exam')->result_array();
                        foreach($exams as $row):
                        ?>
                            <option value="<?php echo $row['exam_id'];?>"
                            	<?php if ($exam_id == $row['exam_id']) echo 'selected';?>>
                            		<?php echo $row['name'];?>
                            </option>
                        <?php
                        endforeach;
                        ?>
                    </select>
				</div>
			</div>
			<input type="hidden" name="operation" value="selection">
			<div class="col-md-4">
				<button type="submit" class="btn btn-info"><?php echo "Ver Calificaciones"?></button>
			</div>
		<?php echo form_close();?>
	</div>
</div>

<?php if ($class_id != '' && $exam_id != ''):?>
<br>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="text-align: center;">
		<div class="tile-stats tile-white tile-white-primary">
			<h3>
				<?php
					$exam_name  = $this->db->get_where('exam' , array('exam_id' => $exam_id))->row()->name;
					$class_name = $this->db->get_where('class' , array('class_id' => $class_id))->row()->name;
					echo "Hoja de Calificaciones";
				?>
			</h3>
			<h4><?php echo "Grado ". ' ' . $class_name;?></h4>
			<h4><?php echo $exam_name;?></h4>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>


<hr />

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
				<td style="text-align: center;">
					<?php echo "Estudiantes"?> <i class="entypo-down-thin"></i> | <?php echo "Materias"?> <i class="entypo-right-thin"></i>
				</td>
				<?php
					$subjects = $this->db->get_where('subject' , array('class_id' => $class_id))->result_array();
					foreach($subjects as $row):
				?>
					<td style="text-align: center;"><?php echo $row['name'];?></td>
				<?php endforeach;?>
				<td style="text-align: center;"><?php echo "Total"?></td>
				<td style="text-align: center;"><?php echo "Promedio del grado"?></td>
				</tr>
			</thead>
			<tbody>
			<?php

				$students = $this->db->get_where('student' , array('class_id' => $class_id))->result_array();
				foreach($students as $row):
			?>
				<tr>
					<td style="text-align: center;"><?php echo $row['name'];?></td>
				<?php
					$total_marks = 0;
					$total_grade_point = 0;
					foreach($subjects as $row2):
				?>
					<td style="text-align: center;">
						<?php
							$obtained_mark_query = 	$this->db->get_where('mark' , array(
													'class_id' => $class_id ,
														'exam_id' => $exam_id ,
															'subject_id' => $row2['subject_id'] ,
																'student_id' => $row['student_id']
												));
							if ( $obtained_mark_query->num_rows() > 0) {
								$obtained_marks = $obtained_mark_query->row()->mark_obtained;
								echo $obtained_marks;
								if ($obtained_marks >= 0 && $obtained_marks != '') {
									$grade = $this->crud_model->get_grade($obtained_marks);
									$total_grade_point += $grade['grade_point'];
								}
								$total_marks += $obtained_marks;
							}


						?>
					</td>
				<?php endforeach;?>
				<td style="text-align: center;"><?php echo $total_marks;?></td>
				<td style="text-align: center;">
					<?php
						$this->db->where('class_id' , $class_id);
						$this->db->from('subject');
						$number_of_subjects = $this->db->count_all_results();
						echo ($total_grade_point / $number_of_subjects);
					?>
				</td>
				</tr>

			<?php endforeach;?>

			</tbody>
		</table>
		<center>
			<a href="<?php echo base_url().$this->session->userdata('login_type');?>/tabulation_sheet_print_view/<?php echo $class_id;?>/<?php echo $exam_id;?>"
				class="btn btn-primary" target="_blank">
				<?php echo "Ver Hoja de Calificaciones"?>
			</a>
		</center>
	</div>
</div>
<?php endif;?>