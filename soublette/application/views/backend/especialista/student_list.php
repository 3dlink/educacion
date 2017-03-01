
<?php
//Formateo de fecha escolar
$this->load->model('Escuela');
$this->load->model('Recaudo_Grado');
$this->load->model('Recaudo_Estudiante');
$this->load->model('Censo/Puntaje_censo');
$this->load->model('VistaGradoEscuela');

$id_school = $this->config->item('id_school');

$uni_pref = "";
switch ($this->config->item('id_school')) {
    case 1:
        $uni_pref = "UniDePrefAndres";
        break;
    case 2:
        $uni_pref = "UniDePrefJuanDio";
        break;
    case 3:
        $uni_pref = "UniDePrefCarlos";
        break;
}

$estudiantes = Puntaje_censo::whereBetween('StatusCenso', [2, 3])
                                                ->where($uni_pref, '=',  1)
                                                ->get();

$running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <br><br>
    <table class="table table-bordered datatable" id="table_export">
        <thead>
            <tr>
                <th><div>CI Representante</div></th>
                <th><div>Representante</div></th>
                <th><div>Alumno</div></th>
                <th><div>Grado/Año</div></th>
                <th><div>Año Escolar</div></th>
                <th><div>Acción</div></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $estudiante) {
                $id_censo = $estudiante->id_censo;
                $id_grado = $estudiante->grado_cursar;
                $grado_cursar = VistaGradoEscuela::where('id_escuela', '=', $this->config->item('id_school'))
                                                ->where('id_grado','=', $estudiante->grado_cursar)
                                                ->get();
            ?>
            <tr>
                <td>
                    <?php echo $estudiante->cedula_identidad_representante; ?>
                </td>
                <td>
                    <?php echo $estudiante->primer_nombre_representante.' '.$estudiante->segundo_nombre_representante.' '.$estudiante->primer_apellido_representante.' '.$estudiante->segundo_apellido_representante; ?>
                </td>
                <td>
                    <?php echo $estudiante->primer_nombre.' '.$estudiante->segundo_nombre.' '.$estudiante->primer_apellido.' '.$estudiante->segundo_apellido; ?>
                </td>
                <td>
                    <?php echo $grado_cursar[0]->nombre_grado; ?>
                </td>
                <td>
                   <?php echo $running_year; ?>
                </td>
                <td class="text-center">
                        <?php
                            if($estudiante->StatusCenso == 3){ ?>
                                <a href="<?php echo base_url().$this->session->userdata('login_type');?>/student_add/<?php echo $estudiante->id_censo; ?>" class="btn btn-primary">
                                    <i class="entypo-user"></i>
                                    Inscribir
                                </a>
                            <?php }else{
                                $recaudos_grado = Recaudo_Grado::where('id_grado', 'LIKE', $id_grado)->get();
                                $total_recaudos_grado = count($recaudos_grado);
                                $recaudos_estudiante = Recaudo_Estudiante::where('id_estudiante', 'LIKE', $id_censo)->get();
                                $total_recaudos_estudiante = count($recaudos_estudiante);
                                if($total_recaudos_estudiante > 0){
                                    $base_url = base_url().'modal/popup/modal_student_validate/';
                                    $cedula_identidad = $estudiante->cedula_escolar;
                                ?>
                                    <a href="javascript:;" onclick="showAjaxModal('<?php echo $base_url.$id_censo;?>');" class="btn btn-primary">
                                        <i class="glyphicon glyphicon-ok"></i>
                                        Admitir
                                    </a>
                                <?php }else{
                                    $base_url = base_url().'modal/popup/modal_student_edit/'; ?>
                                    <a href="javascript:;" onclick="showAjaxModal('<?php echo $base_url.$id_grado."/".$id_censo;?>');" class="btn btn-primary">
                                        <i class="entypo-pencil"></i>
                                        Validar
                                    </a>
                            <?php } ?>
                        <?php } ?>
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