<hr />
<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url().'modal/popup/section_add/'.$id_nivel_educativo ?>');"
	class="btn btn-primary pull-right">
    	<i class="entypo-plus-circled"></i>
			<?php echo "Agregar Sección" ?>
</a>
<br><br><br>

<div class="row">
	<div class="col-md-12">

		<div class="tabs-vertical-env">

			<ul class="nav tabs-vertical">
			<?php
				foreach ($classes as $row):
			?>
				<li class="<?php if ($row['id_grado'] == $class_id) echo 'active';?>">
					<a href="<?php echo base_url().$this->session->userdata('login_type');?>/section/<?php echo $row['id_nivel_educativo'];?>/<?php echo $row['id_grado'];?>">
						<i class="entypo-dot"></i>
						<?php echo $row['nombre_grado'];?>
					</a>
				</li>
			<?php endforeach;?>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active">
					<table class="table table-bordered responsive">
						<thead>
							<tr>
								<th>#</th>
								<th><?php echo "Nombre" ?></th>
								<th><?php echo "Abreviación" ?></th>
								<th><?php echo ($row['id_nivel_educativo'] == 3) ? "Profesor Guía" : "Docente" ?></th>
								<th><?php echo "Opciones" ?></th>
							</tr>
						</thead>
						<tbody>
						<?php
							$count    = 1;
							if ($class_id !== ''){
								$sections = $this->db->get_where('secciones' , array('id_grado' => $class_id, 'registro_activo' => 1))->result_array();
							}else{
								$sections = $this->db->get_where('secciones' , array('id_grado' => 0))->result_array();
							}

							foreach ($sections as $row):
						?>
							<tr>
								<td><?php echo $count++; ?></td>
								<td><?php echo $row['nombre_seccion']; ?></td>
								<td><?php echo $row['abreviacion_seccion']; ?></td>
								<td>
									<?php
										echo $this->db->get_where('teacher' , array('teacher_id' => $row['teacher_id']))->row()->name;
									?>
								</td>
								<td>
									<div class="btn-group">
		                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
		                                    Acción <span class="caret"></span>
		                                </button>
		                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">

		                                    <!-- EDITING LINK -->
		                                    <li>
		                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/section_edit/<?php echo $row['id_seccion'].'/'.$id_nivel_educativo ;?>');">
		                                            <i class="entypo-pencil"></i>
		                                                <?php echo "Editar" ?>
		                                            </a>
		                                                    </li>
		                                    <li class="divider"></li>

		                                    <!-- DELETION LINK -->
		                                    <li>
		                                        <a href="#" onclick="delete_modal('<?php echo base_url().'admin/sections/'.$id_nivel_educativo.'/delete/'.$row['id_seccion'].'/' ;?>');">
		                                            <i class="entypo-trash"></i>
		                                                <?php echo "Anular" ?>
		                                            </a>
		                                    </li>
		                                </ul>
		                            </div>
								</td>
							</tr>
						<?php endforeach;?>
						</tbody>
					</table>
				</div>

			</div>

		</div>

	</div>
</div>