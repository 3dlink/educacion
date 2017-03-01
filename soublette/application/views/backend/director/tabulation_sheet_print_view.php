<?php
	$class_name		 	= 	$this->db->get_where('grados' , array('id_grado' => $class_id))->row()->nombre_grado;
	$exam_name  		= 	$this->db->get_where('exam' , array('exam_id' => $exam_id))->row()->objetivo;
?>
<div id="print">
	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<style type="text/css">
		td {
			padding: 5px;
		}
	</style>

	<center>
		<h3 style="font-weight: 100;"><?php echo "Sistema Educativo Chacao";?></h3>
		<?php echo "Hoja de Calificaciones"?><br>
		<?php echo 'Grado ' . $class_name;?><br>
		<?php echo 'Examen ' . $exam_name;?>


	</center>


	<table style="width:100%; border-collapse:collapse;border: 1px solid #ccc; margin-top: 10px;" border="1">
		<thead>
			<tr>
			<td style="text-align: center;">
				<?php echo "Estudiantes";?> <i class="entypo-down-thin"></i> | <?php echo "Asignaturas";?> <i class="entypo-right-thin"></i>
			</td>
			<?php
				$subjects = $this->db->get_where('asignatura' , array('id_grado' => $class_id))->result_array();
				foreach($subjects as $row):
			?>
				<td style="text-align: center;"><?php echo $row['name'];?></td>
			<?php endforeach;?>
			<td style="text-align: center;"><?php echo "Total";?></td>
			<td style="text-align: center;"><?php echo "Promedio";?></td>
			</tr>
		</thead>
		<tbody>
		<?php

			$students = $this->db->get_where('inscripcion' , array('GradoACursar' => $class_id))->result_array();
			foreach($students as $row):
		?>
			<tr>
				<td style="text-align: center;"><?php echo $row['PrimerNombreDelAlumno'].' '.$row['SegundoNombreDelAlumno'].' '.$row['PrimerApellidoDelAlumno'].' '.$row['SegundoApellidoDelAlumno'] ;?></td>
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
														'subject_id' => $row2['asignatura_id'] ,
															'student_id' => $row['id_inscripcion']
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
					$this->db->where('id_grado' , $class_id);
					$this->db->from('asignatura');
					$number_of_subjects = $this->db->count_all_results();
					echo ($total_grade_point / $number_of_subjects);
				?>
			</td>
			</tr>

		<?php endforeach;?>

		</tbody>
	</table>
</div>



<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		var elem = $('#print');
		PrintElem(elem);
		Popup(data);

	});

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data)
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title></title>');
        //mywindow.document.write('<link rel="stylesheet" href="assets/css/print.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        //mywindow.document.write('<style>.print{border : 1px;}</style>');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }
</script>