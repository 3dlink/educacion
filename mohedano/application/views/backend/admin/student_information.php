<?php
//Formateo de fecha escolar
$this->load->model('Escuela');
$this->load->model('Estudiante');
$this->load->model('VistaEscuelaSeccion');

$id_school = $this->config->item('id_school');
$matchThese = ['status_inscripcion' => 1, 'id_escuela' => $id_school, 'id_grado' => $class_id];
$matchSections = ['id_grado' => $class_id, 'id_escuela' => $id_school];

$estudiantes = Estudiante::where($matchThese)->get();

if (count($estudiantes)>0){
    $vsecciones = VistaEscuelaSeccion::where($matchSections)->get();    
}

?>

<hr />
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#home" data-toggle="tab">
                    <span class="visible-xs"><i class="entypo-users"></i></span>
                    <span class="hidden-xs"><?php echo "Estudiantes"?></span>
                </a>
            </li>
            <?php 
                foreach ($vsecciones as $seccion){
            ?>
                <li>
                    <a href="#<?php echo $seccion['id_seccion'];?>" data-toggle="tab">
                        <span class="visible-xs"><i class="entypo-user"></i></span>
                        <span class="hidden-xs"> <?php echo $seccion['nombre_seccion'];?></span>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <div class="tab-content">
            <!-- TODOS LOS ESTUDIANTES DEL GRADO -->
            <div class="tab-pane active" id="home">
                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div>Foto</div></th>
                            <th width="180"><div>Cédula de Identidad</div></th>
                            <th><div>Nombres y Apellidos</div></th>
                            <th><div>Año Escolar</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($estudiantes as $estudiante) {
                            $id_estudiante = $estudiante->id_estudiante;
                            $id_grado = $estudiante->grado->id_grado;
                        ?>
                            <tr>
                                <td>
                                    <img src="<?php echo $this->crud_model->get_image_url('student',$estudiante->id_persona);?>" class="img-circle" width="40" height="40"/>
                                </td>
                                <td>
                                    <?php echo $estudiante->cedula_identidad; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante->persona->primer_nombre.' '.$estudiante->persona->segundo_nombre.' '.$estudiante->persona->primer_apellido.' '.$estudiante->persona->segundo_apellido; ?>
                                </td>
                                <td>
                                   <?php echo $estudiante->escuela->periodo_escolar_actual; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- ESTUDIANTES POR SECCION -->
            <?php 
                foreach ($vsecciones as $seccion){

            ?>
                <?php foreach ($estudiantes as $estudiante) {
                    if($estudiante->id_seccion == $seccion->id_seccion){
                ?>
                <div class="tab-pane" id="<?php echo $seccion->id_seccion;?>">
                    <table class="table table-bordered datatable table_child">
                        <thead>
                            <tr>
                                <th width="50"><div>Foto</div></th>
                                <th width="70"><div>Cédula de Identidad</div></th>
                                <th><div>Nombres y Apellidos</div></th>
                                <th><div>Año Escolar</div></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="<?php echo $this->crud_model->get_image_url('student',$estudiante->id_persona);?>" class="img-circle" width="40" height="40"/>
                                </td>
                                <td>
                                    <?php echo $estudiante->cedula_identidad; ?>
                                </td>
                                <td>
                                    <?php echo $estudiante->persona->primer_nombre.' '.$estudiante->persona->segundo_nombre.' '.$estudiante->persona->primer_apellido.' '.$estudiante->persona->segundo_apellido; ?>
                                </td>
                                <td>
                                   <?php echo $estudiante->escuela->periodo_escolar_actual; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <?php }?>
                <?php }?>                    
            <?php }?>
        </div>        
    </div>
</div>
<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [0, 2, 3, 4]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0, 2, 3, 4]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(1, false);
							datatable.fnSetColumnVis(5, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(1, true);
									  datatable.fnSetColumnVis(5, true);
								  }
							});
						},
						
					},
				]
			},
		});
		
        var datatable = $(".table_child").dataTable({
            "sPaginationType": "bootstrap",

        });

		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>