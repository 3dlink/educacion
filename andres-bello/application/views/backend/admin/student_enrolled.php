
<?php
//Formateo de fecha escolar

$this->load->model('Escuela');
$id_school = $this->config->item('id_school');
$estudiantes = Inscripcion::where('registro_activo', '=' , 1)
                                        ->where('id_escuela', '=' , $id_school)
                                        ->where('StatusCenso', '=' , 0)
                                        ->orderby('CedulaDeIdentidadDelAlumnoOCedulaEscolar')
                                        ->get();
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <br><br>
    <table class="table table-bordered datatable" id="table_export">
        <thead>
            <tr>
                <th width="50" ><?php echo "Nº"?></th>
                <th width="80"><div>Cédula de Identidad</div></th>
                <th><div>Apellidos y Nombres </div></th>
                <th><div>Grado/Año</div></th>
                <th><div>Sección</div></th>
                <th><div>Turno</div></th>
                <th><div>Año Escolar</div></th>
                <th><div>Acción</div></th>
                <th><div>Documentos</div></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $numero = 0;
         foreach ($estudiantes as $estudiante) {
            $numero = $numero + 1;
            $this->db->select('nombre_grado');
            $this->db->from('grados');
            $this->db->where('id_grado',$estudiante->GradoACursar);
            $grado = $this->db->get()->row()->nombre_grado;

            $this->db->select('nombre_seccion');
            $this->db->from('vescuela_seccion');
            $this->db->where('id_seccion',$estudiante->SeccionACursar);
            $seccion = $this->db->get()->row()->nombre_seccion;

            switch ($estudiante->TurnoACursar) {
                case 1:
                    $turno = "MAÑANA";
                    break;
                case 2:
                    $turno = "TARDE";
                    break;
                case 3:
                    $turno = "INTEGRAL";
                    break;
            }

        ?>
                    <tr>
                        <td>
                            <?php echo $numero;?>
                        </td>
                        <td>
                            <?php $nacionalidad = ($estudiante->NacionalidadDelAlumno == 'VENEZOLANA' ? 'V' : 'E') ?>
                            <?php echo $nacionalidad.$estudiante->CedulaDeIdentidadDelAlumnoOCedulaEscolar ; ?>
                        </td>
                        <td>
                            <?php echo $estudiante->PrimerApellidoDelAlumno.' '.$estudiante->SegundoApellidoDelAlumno.' '.$estudiante->PrimerNombreDelAlumno.' '.$estudiante->SegundoNombreDelAlumno; ?>
                        </td>
                        <td>
                            <?php echo strtoupper($grado); ?>
                        </td>
                        <td>
                            <?php echo $seccion; ?>
                        </td>
                        <td>
                            <?php echo $turno; ?>
                        </td>
                        <td>
                           <?php echo $running_year; ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 100%;">
                                    Acción <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    <li>
                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/student_edit/<?php echo $estudiante->id_inscripcion;?>/delete');">
                                            <i class="entypo-trash"></i>
                                                <?php echo "Anular" ?>
                                            </a>
                                        </li>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" onclick="retire_modal('<?php echo base_url().$this->session->userdata('login_type');?>/student_edit/<?php echo $estudiante->id_inscripcion;?>/retire');">
                                            <i class="entypo-logout"></i>
                                                <?php echo "Retirar" ?>
                                            </a>
                                        </li>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo base_url().$this->session->userdata('login_type');?>/student_edit/<?php echo $estudiante->id_inscripcion; ?>" >
                                            <i class="entypo-eye"></i>
                                            <?php echo "Editar"?>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo base_url().$this->session->userdata('login_type');?>/student_cv/<?php echo $estudiante->id_inscripcion; ?>" >
                                            <i class="entypo-pencil"></i>
                                            <?php echo "Ver Hoja de Vida"?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 100%;">
                                    Documentos <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    <li>
                                        <a href="<?php echo base_url().$this->session->userdata('login_type');?>/carnets/<?php echo $estudiante->CedulaDeIdentidadDelAlumnoOCedulaEscolar; ?>"  >
                                            <i class="entypo-vcard"></i>
                                            <?php echo "Carnet"?>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo base_url().$this->session->userdata('login_type');?>/records/<?php echo $estudiante->CedulaDeIdentidadDelAlumnoOCedulaEscolar; ?>"  >
                                            <i class="entypo-docs"></i>
                                            <?php echo "Constancia"?>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a target="_blank" href="<?php echo base_url().$this->session->userdata('login_type');?>/student_certificate/<?php echo $estudiante->id_inscripcion; ?>"  >
                                            <i class="entypo-doc"></i>
                                            <?php echo "Certificado de Inscripción"?>
                                        </a>
                                    </li>

                                </ul>
                            </div>
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
                "order": [[2, 'asc']],
                "orderFixed": {
                    "pre": [ 2, 'asc' ],
                    "post": [ 2, 'asc' ]
                },
                "order": [2, 'asc'],
                "columnDefs": [
                    { "orderable": false, "targets": 0 },
                    { "orderable": true, "targets": 2 },
                    { "orderSequence": [ "asc" ], "targets": [ 2 ] },
                ],
                "sPaginationType": "bootstrap",
                "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
                "oTableTools": {
                    "aButtons": [

                        {
                            "sExtends": "csv",
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