
<?php
//Formateo de fecha escolar

$this->load->model('Escuela');
$id_school = $this->config->item('id_school');
$estudiantes = Estudiante::where('status_inscripcion', '=', 1)
                                        ->where('id_escuela', '=' , $id_school)
                                        ->where('registro_activo', '=' , 1)
                                        ->get();
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <br><br>
    <table class="table table-bordered datatable" id="table_export">
        <thead>
            <tr>
                <th width="80"><div>Foto</div></th>
                <th width="180"><div>Cédula de Identidad</div></th>
                <th><div>Nombres y Apellidos</div></th>
                <th><div>Grado/Año</div></th>
                <th><div>Sección</div></th>
                <th><div>Año Escolar</div></th>
                <th><div>UEM</div></th>
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
                            <?php echo (empty($estudiante->cedula_identidad)) ? $estudiante->cedula_escolar : $estudiante->cedula_identidad ; ?>
                        </td>
                        <td>
                            <?php echo $estudiante->persona->primer_nombre.' '.$estudiante->persona->segundo_nombre.' '.$estudiante->persona->primer_apellido.' '.$estudiante->persona->segundo_apellido; ?>
                        </td>
                        <td>
                            <?php echo $estudiante->grado->abreviacion_grado; ?>
                        </td>
                        <td>
                            <?php echo $estudiante->seccion->abreviacion_seccion; ?>
                        </td>
                        <td>
                           <?php echo $estudiante->escuela->periodo_escolar_actual; ?>
                        </td>
                        <td>
                           <?php echo $estudiante->escuela->nombre_escuela; ?>
                        </td>
                    </tr>
        <?php } ?>
        </tbody>
    </table>

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
                            "mColumns": [1,2]
                        },
                        {
                            "sExtends": "pdf",
                            "mColumns": [1,2]
                        },
                        {
                            "sExtends": "print",
                            "fnSetText"    : "Press 'esc' to return",
                            "fnClick": function (nButton, oConfig) {
                                datatable.fnSetColumnVis(0, false);
                                datatable.fnSetColumnVis(3, false);

                                this.fnPrint( true, oConfig );

                                window.print();

                                $(window).keyup(function(e) {
                                      if (e.which == 27) {
                                          datatable.fnSetColumnVis(0, true);
                                          datatable.fnSetColumnVis(3, true);
                                      }
                                });
                            },

                        },
                    ]
                },

            });

            $(".dataTables_wrapper select").select2({
                minimumResultsForSearch: -1
            });
        });
    </script>