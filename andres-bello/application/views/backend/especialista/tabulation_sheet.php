<hr />
<div class="row">
	<div class="col-md-12">
            	<?php echo form_open(base_url().$this->session->userdata('login_type').'/tabulation_sheet/'.$id_nivel_educativo);?>
            		<div class="col-md-4">
                                        <div class="form-group">
                                            <select name="class_id" class="form-control" onchange="return get_class_section(this.value)">
                                                <option value="">Selecciona un grado</option>
                                                <?php
                                               foreach($classes as $row):?>
                                                <option value="<?php echo $row['id_grado'];?>"
                                                    <?php if(isset($class_id) && $class_id==$row['id_grado'])echo 'selected="selected"';?>>
                                                        <?php echo $row['nombre_grado'];?>
                                                            </option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                                <select name="section_id" class="form-control" style="width:100%;" id="section_selection_holder">
                                                    <option value=""><?php echo "Seleccione primero el grado"?></option>
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

<?php if ($class_id != '' && $section_id != ''):?>
<br>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="text-align: center;">
		<div class="tile-stats tile-white tile-white-primary">
			<h3>
			     <?php
                                            $class_name = $this->db->get_where('grados' , array('id_grado' => $class_id))->row()->nombre_grado;
                                            $section_name = $this->db->get_where('secciones' , array('id_seccion' => $section_id))->row()->letra_seccion;
                                            echo "Hoja de Calificaciones";
			     ?>
			</h3>
			<h4><?php echo "Grado ". ' ' . $class_name;?></h4>
			<h4><?php echo "Sección ". ' ' .  $section_name;?></h4>
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
                                                <th width="30"><?php echo 'Nº' ?></th>
                                                <th width="180"><?php echo "Cédula de Identidad o Cédula Escolar"?></th>
				<th width="300" style="text-align: center;">
					<?php echo "Estudiantes"?> <i class="entypo-down-thin"></i> | <?php echo "Asignaturas"?> <i class="entypo-right-thin"></i>
				</th>
				<?php
        				$subjects = $this->db->get_where('asignatura' , array('id_grado' => $class_id))->result_array();
        				foreach($subjects as $row):
				?>
					<th width="30" style="text-align: center;"><?php echo $row['abreviacion'];?></td>
			             <?php endforeach;?>
				<th style="text-align: center;"><?php echo "Promedio del Alumno"?></th>
				</tr>
			</thead>
			<tbody>
			<?php
                                                $numero = 0;
                                                $this->db->order_by("CedulaDeIdentidadDelAlumnoOCedulaEscolar", "asc");
                                                $id_school = $this->config->item('id_school');
				$students = $this->db->get_where('inscripcion' , array('GradoACursar' => $class_id, 'SeccionACursar' => $section_id, 'id_escuela'=>$id_school ))->result_array();
				foreach($students as $row):
                                                    $numero = $numero + 1;
			?>
				<tr>
                                                            <td style="text-align: center;"><?php echo $numero ?></td>
                                                            <td>
                                                                <?php $nacionalidad = ($row['NacionalidadDelAlumno'] == 'VENEZOLANA' ? 'V' : 'E') ?>
                                                                <?php echo $nacionalidad.$row['CedulaDeIdentidadDelAlumnoOCedulaEscolar'] ?>
                                                            </td>
					<td >
					<?php echo $row['PrimerApellidoDelAlumno'].' '.$row['SegundoApellidoDelAlumno'].' '.$row['PrimerNombreDelAlumno'].' '.$row['SegundoNombreDelAlumno'] ;?>
					</td>
				<?php
					$total_marks = 0;
					$total_grade_point = 0;
					foreach($subjects as $row2):
				?>
					<td style="text-align: center;">
						<?php
							$obtained_mark_query = $this->db->get_where('vnotas_acumuladas' , array(
                                                                                        'class_id' => $class_id ,
                                                                                        'subject_id' => $row2['asignatura_id'] ,
                                                                                        'student_id' => $row['id_inscripcion'],
                                                                                        'section_id' => $row['SeccionACursar'] ));
							if ( $obtained_mark_query->num_rows() > 0) {
								$obtained_marks = $obtained_mark_query->row()->mark_obtained;
								echo $obtained_marks;
								$total_marks += $obtained_marks;
							}


						?>
					</td>
				<?php endforeach;?>
				<td style="text-align: center;">
					<?php
						$this->db->where('id_grado' , $class_id);
						$this->db->from('asignatura');
						$number_of_subjects = $this->db->count_all_results();
                                                                        $result = ($total_marks / $number_of_subjects);
                                                                        echo number_format((float)$result, 2, '.', '')
					?>
				</td>
				</tr>

			<?php endforeach;?>

			</tbody>
		</table>
		<center>
			<a href="<?php echo base_url().$this->session->userdata('login_type');?>/tabulation_sheet_print_view/<?php echo $id_nivel_educativo;?>/<?php echo $class_id;?>/<?php echo $section_id;?>"
				class="btn btn-primary" target="_blank">
				<?php echo "Ver Resumen de Calificaciones"?>
			</a>
		</center>
	</div>
</div>
<?php endif;?>
<script type="text/javascript">

    jQuery(document).ready(function($)
    {
        var datatable = $("#table_export").dataTable();

        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });

        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_sections_level/3' ,
            success: function(response)
            {
                var result = JSON.parse(response)

                for(var x in result){

                    console.log(result[x]['id_seccion']);

                    $("#table_export_"+result[x]['id_seccion']).dataTable();

                    $(".dataTables_wrapper select").select2({
                        minimumResultsForSearch: -1
                    });

                }

            }
        });


    });

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

</script>