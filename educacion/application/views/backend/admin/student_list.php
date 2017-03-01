
<?php
//Formateo de fecha escolar
$this->load->model('Escuela');
$this->load->model('Recaudo_Grado');
$this->load->model('Recaudo_Estudiante');
$id_school = $this->config->item('id_school');
$matchThese = ['status_inscripcion' => 0, 'id_escuela' => $id_school];
$estudiantes = Estudiante::where($matchThese)
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
                <th><div>Año Escolar</div></th>
                <th><div>Editar</div></th>
                <th><div>Validar</div></th>
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
                            <?php echo $estudiante->grado->abreviacion_grado; ?>
                        </td>
                        <td>
                           <?php echo $estudiante->escuela->periodo_escolar_actual; ?>
                        </td>
                        <td class="text-center">

                            <?php

                            $recaudos_grado = Recaudo_Grado::where('id_grado', 'LIKE', $id_grado)->get();
                            $total_recaudos_grado = count($recaudos_grado);
                            $recaudos_estudiante = Recaudo_Estudiante::where('id_estudiante', 'LIKE', $id_estudiante)->get();
                            $total_recaudos_estudiante = count($recaudos_estudiante);

                            if($total_recaudos_grado == $total_recaudos_estudiante && $total_recaudos_estudiante > 0) {
                            //Funcion admitir activada
                            ?>

                                <?php $base_url = base_url().'modal/popup/modal_student_validate/'; ?>
                                <?php $cedula_identidad = $estudiante->cedula_escolar; ?>
                                <a href="javascript:;" onclick="showAjaxModal('<?php echo $base_url.$cedula_identidad;?>');" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    Admitir
                                </a>

                            <?php

                            }
                            else
                            //Funcion admitir desactivada
                            {

                            ?>

                                <a href="<?php echo base_url().$this->session->userdata('login_type');?>/student_to_admit/<?php echo $id_estudiante; ?>" class="btn btn-primary" id="<?php echo 'buttonAdminitir'.$id_estudiante; ?>" disabled="disabled">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    Admitir
                                </a>

                            <?php

                            }

                            ?>
                        </td>
                        <td class="text-center">
                        <?php

                            $recaudos_grado = Recaudo_Grado::where('id_grado', 'LIKE', $id_grado)->get();
                            $total_recaudos_grado = count($recaudos_grado);
                            $recaudos_estudiante = Recaudo_Estudiante::where('id_estudiante', 'LIKE', $id_estudiante)->get();
                            $total_recaudos_estudiante = count($recaudos_estudiante);

                            if(($total_recaudos_grado == $total_recaudos_estudiante) && $total_recaudos_estudiante > 0)  {
                            //Funcion validar desactivada
                            ?>

                                <button class="btn btn-primary" disabled="disabled">
                                    <i class="entypo-pencil"></i>
                                    Validar
                                </button>

                            <?php

                            }else{
                                //Funcion validar activada
                                ?>

                                    <button data-url="<?php echo base_url();?>modal/popup/modal_student_edit/<?php echo $id_grado; ?>/<?php echo $id_estudiante; ?>" id="<?php echo 'buttonRecaudo'.$id_estudiante; ?>" class="btn btn-primary recaudo">
                                        <i class="entypo-pencil"></i>
                                        Validar
                                    </button>

                                <?php
                            }
                            ?>
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
