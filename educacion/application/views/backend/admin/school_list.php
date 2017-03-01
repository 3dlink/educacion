
<?php

$this->load->model('Estudiante');
$this->load->model('Persona');
$this->load->model('Escuela');
$this->load->model('Grado');
$this->load->model('Seccion');
$this->load->model('Direccion');
$this->load->model('Estado');
$this->load->model('Municipio');
$this->load->model('Parroquia');

$this->load->model('Escuela');
$escuelas = Escuela::all();

?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_school_config_new/');" class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i>
        <?php echo "Agregar Escuela";?>
    </a>
    <br><br>
    <table class="table table-bordered datatable" id="table_export">
        <thead>
            <tr>
                <th width="180"><div>Nombre</div></th>
                <th width="180"><div>Código DEA</div></th>
                <th width="180"><div>Dirección</div></th>
                <th width="180"><div>Telefono</div></th>
                <th width="180"><div>Correo</div></th>
                <th width="180"><div>Director</div></th>
                <th width="180"><div>Director Encargado</div></th>
                <th width="60"><div>Configuración</div></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($escuelas as $escuela) {
            //Obtener direccion escuela
            $id_director = $escuela['id_persona_director'];
            $director = Persona::find($id_director);

        ?>

                    <tr>
                        <td>
                            <?php echo $escuela->nombre_escuela; ?>
                        </td>
                        <td>
                            <?php echo $escuela->dea; ?>
                        </td>
                        <td>
                            <?php echo $escuela->direccion; ?>
                        </td>
                        <td>
                            <?php echo $escuela->telefono; ?>
                        </td>
                        <td>
                            <?php echo $escuela->correo_electronico; ?>
                        </td>
                        <td>
                            <?php echo $this->crud_model->get_teacher_name($id_director); ?>
                        </td>
                        <td>
                            <?php if($escuela->director_encargado == 1){
                                    echo 'SI';
                                }else{
                                    echo 'NO';
                                }
                            ?>
                        </td>
                        <td>
                            <?php $base_url = base_url().'modal/popup/modal_school_config_edit/'; ?>
                            <?php $id_escuela =  $escuela->id_escuela; ?>
                            <a href="javascript:;" onclick="showAjaxModal('<?php echo $base_url.$id_escuela;?>');" class="btn btn-primary">
                                <i class="entypo-pencil"></i>
                                <?php echo "Configurar"?>
                            </a>
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
