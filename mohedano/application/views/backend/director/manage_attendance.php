<hr />
	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
    	<thead>
        	<tr>
            	<th><?php echo "Selecciona día" ?></th>
            	<th><?php echo "Selecciona mes" ?></th>
            	<th><?php echo "Selecciona año" ?></th>
            	<th><?php echo "Selecciona grado" ?></th>
                <th><?php echo "Selecciona sección" ?></th>
                <th><?php echo "Selecciona asignatura" ?></th>
            	<th><?php echo "Accion" ?></th>
           </tr>
       </thead>
		<tbody>
        	<form method="post" action="<?php echo base_url().$this->session->userdata('login_type');?>/attendance_selector/<?php echo $id_nivel_educativo ?>" class="form">
            	<tr class="gradeA">
                    <td>
                    	<select name="date" class="form-control">
                        	<?php for($i=1;$i<=31;$i++):?>
                            	<option value="<?php echo $i;?>"
                                	<?php if(isset($date) && $date==$i)echo 'selected="selected"';?>>
										<?php echo $i;?>
                                        	</option>
                            <?php endfor;?>
                        </select>
                    </td>
                    <td>
                    	<select name="month" class="form-control">
                        	<?php
							for($i=1;$i<=12;$i++):
								if($i==1)$m='Enero';
								else if($i==2)$m='Febrero';
								else if($i==3)$m='Marzo';
								else if($i==4)$m='Abril';
								else if($i==5)$m='Mayo';
								else if($i==6)$m='Junio';
								else if($i==7)$m='Julio';
								else if($i==8)$m='Agosto';
								else if($i==9)$m='Septiembre';
								else if($i==10)$m='Octubre';
								else if($i==11)$m='Noviembre';
								else if($i==12)$m='Diciembre';
							?>
                            	<option value="<?php echo $i;?>"
                                	<?php if($month==$i)echo 'selected="selected"';?>>
										<?php echo $m;?>
                                        	</option>
                            <?php
							endfor;
							?>
                        </select>
                    </td>
                    <td>
                    	<select name="year" class="form-control">
                        	<?php for($i=2020;$i>=2010;$i--):?>
                            	<option value="<?php echo $i;?>"
                                	<?php if(isset($year) && $year==$i)echo 'selected="selected"';?>>
										<?php echo $i;?>
                                        	</option>
                            <?php endfor;?>
                        </select>
                    </td>
                    <td>
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

                    </td>
                    <td>
                    <select name="section_id" class="form-control" style="width:100%;" id="section_selection_holder">
                        <option value=""><?php echo "Seleccione primero el grado"?></option>
                    </select>

                    </td>
                    <td>
                        <select name="subject_id" class="form-control" style="width:100%;" id="subject_selection_holder">
                            <option value=""><?php echo "Seleccione primero el grado"?></option>
                        </select>
                    </td>
                    <td align="center"><input type="submit" value="<?php echo "Pasar Lista" ?>" class="btn btn-info"/></td>
                </tr>
            </form>
		</tbody>
	</table>
<hr />



<?php if($date!='' && $month!='' && $year!='' && $class_id!=''):?>

<center>
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">

            <div class="tile-stats tile-white-gray">
                <div class="icon"><i class="entypo-suitcase"></i></div>
                <?php
                    date_default_timezone_set('America/Caracas');
                    $full_date	=	$year.'-'.$month.'-'.$date;
                    $timestamp  = strtotime($full_date);
                    switch (date('w', $timestamp)){
                            case 0: $day = "Domingo"; break;
                            case 1: $day = "Lunes"; break;
                            case 2: $day = "Martes"; break;
                            case 3: $day = "Miercoles"; break;
                            case 4: $day = "Jueves"; break;
                            case 5: $day = "Viernes"; break;
                            case 6: $day = "Sabado"; break;
                    }
                    $nombre_seccion = $this->db->get_where('vniveleducativogradoseccion' , array('id_seccion' => $id_seccion, 'registro_activo' => 1))
                                             ->row()->nombre_seccion;
                 ?>
                <h2><?php echo ucwords($day);?></h2>

                <h3>Asistencia de <?php echo ($nombre_seccion);?></h3>
                <p><?php echo $date.'-'.$month.'-'.$year;?></p>
            </div>
            <a href="#" id="update_attendance_button" onclick="return update_attendance()"
                class="btn btn-info">
                    Actualizar asistencia
            </a>
        </div>

    </div>
</center>
<hr />

<div class="row" id="attendance_list">
    <div class="col-sm-offset-3 col-md-6">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td><?php echo "Numero de Lista" ?></td>
                    <td><?php echo "Nombre" ?></td>
                    <td><?php echo "Estatus" ?></td>
                    <td><?php echo "Retardo" ?></td>
                </tr>
            </thead>
            <tbody>

                <?php
                    $students   =   $this->db->get_where('vestudiantesasistencia' , array('id_seccion'=>$id_seccion))->result_array();
                        foreach($students as $row):?>
                        <tr class="gradeA">
                            <td><?php echo $row['id_estudiante'];?></td>
                            <td><?php echo $row['primer_nombre'].' '.$row['segundo_nombre'].' '.$row['primer_apellido'].' '.$row['segundo_apellido'];?></td>
                            <?php
                                //inserting blank data for students attendance if unavailable
                                $verify_data    =   array( 'student_id' => $row['id_estudiante'], 'date' => $full_date);
                                $query = $this->db->get_where('attendance' , $verify_data);
                                if($query->num_rows() < 1)
                                $this->db->insert('attendance' , $verify_data);

                                //showing the attendance status editing option
                                $attendance = $this->db->get_where('attendance' , $verify_data)->row();
                                $status     = $attendance->status;
                            ?>
                        <?php if ($status == 1):?>
                            <td align="center">
                              <span style="line-height: 1.5;" class="badge badge-success"><?php echo "Presente" ?></span>
                            </td>
                        <?php endif;?>
                        <?php if ($status == 2):?>
                            <td align="center">
                              <span style="line-height: 1.5;" class="badge badge-danger"><?php echo "Ausente" ?></span>
                            </td>
                        <?php endif;?>
                        <?php if ($status == 0):?>
                            <td align="center">
                              <span style="line-height: 1.5;" class="badge badge-info"><?php echo "Actualizar" ?></span>
                            </td>
                        <?php endif;?>
                        <?php if ($status == 0):?>
                            <td align="center">
                              <span style="line-height: 1.5;" class="badge badge-danger"><?php echo "Retardo" ?></span>
                            </td>
                        <?php endif;?>
                        </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>




<div class="row" id="update_attendance">

<!-- STUDENT's attendance submission form here -->
<form method="post"
    action="<?php echo base_url().$this->session->userdata('login_type');?>/manage_attendance/<?php echo $date.'/'.$month.'/'.$year.'/'.$id_nivel_educativo.'/'.$class_id;?>">
        <div class="col-sm-offset-3 col-md-6">
            <table  class="table table-bordered">
        		<thead>
        			<tr class="gradeA">
                        <td><?php echo "Numero de Lista" ?></td>
                        <td><?php echo "Nombre" ?></td>
                        <td><?php echo "Presente" ?></td>
                        <td><?php echo "Retardo" ?></td>
        			</tr>
                </thead>
                <tbody>

                	<?php
        			//STUDENTS ATTENDANCE
        			$students	=	$this->db->get_where('vestudiantesasistencia' , array('id_seccion'=>$id_seccion))->result_array();

        			foreach($students as $row)
        			{
        				?>
        				<tr class="gradeA">
        					<td><?php echo $row['id_estudiante'];?></td>
        					<td><?php echo $row['primer_nombre'].' '.$row['segundo_nombre'].' '.$row['primer_apellido'].' '.$row['segundo_apellido'];?></td>
        					<td align="center">
        						<?php
        						//inserting blank data for students attendance if unavailable
        						$verify_data	=	array(	'student_id' => $row['id_estudiante'],
        													'date' => $full_date);
        						$query = $this->db->get_where('attendance' , $verify_data);
        						if($query->num_rows() < 1)
        						$this->db->insert('attendance' , $verify_data);

        						//showing the attendance status editing option
        						$attendance = $this->db->get_where('attendance' , $verify_data)->row();
        						$status		= $attendance->status;
                            	?>
                                <input type="hidden" name="alumnoPresente_<?php echo $row['id_estudiante'];?>" value="2" >
                                <label><input type="checkbox" name="alumnoPresente_<?php echo $row['id_estudiante'];?>"
                                              value="1" <?php echo ($status==1)?'checked':'' ?> >  SI</label>
                                              </td>
                                            <td align="center">
                                <label><input type="checkbox" name="alumnoTarde_<?php echo $row['id_estudiante'];?>"
                                              value="1" <?php echo ($status==1)?'checked':'' ?> >  SI</label>
                            </td>
        				</tr>
        				<?php
        			}
        			?>
                </tbody>
            </table>
            <input type="hidden" name="date" value="<?php echo $full_date;?>" />
            <center>
                <input type="submit" class="btn btn-info" value="GUARDAR CAMBIOS">
            </center>
        </div>


</form>
</div>
<?php endif;?>

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

    $("#update_attendance").hide();

    function update_attendance() {

        $("#attendance_list").hide();
        $("#update_attendance_button").hide();
        $("#update_attendance").show();

    }
</script>
