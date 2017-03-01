    <?php
    $this->load->model('Censo/Censo');
    $this->load->model('Censo/Censo_grado');
    $this->load->model('Censo/Puntaje_censo');
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
    $estudiantes = Puntaje_censo::where('id_escuela', '=', 1)
                            ->where('StatusCenso', '=', 2)
                            ->where($uni_pref, '=', 1)
                            ->get();



    ?>
    <br><br>
    <table class="table table-bordered datatable" id="table_export">
        <thead>
            <tr>
                <th width="80"><div>Foto</div></th>
                <th width="80"><div>CI Repre</div></th>
                <th width="200"><div>Representante</div></th>
                <th width="80"><div>CI Alum</div></th>
                <th width="200"><div>Alumno</div></th>
                <th width="130"><div>Fecha Nacimiento</div></th>
                <th width="120"><div>Grado a Cursar</div></th>
                <th width="50"><div>Puntaje</div></th>
                <th width="100"><div>Acción</div></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($estudiantes as $row):?>
                    <?php
                            $grado_cursar = Censo_grado::where('id_censo_grado', '=', $row['grado_cursar'])
                                                        ->get(array(grado));
                            $id_censo = $row['id_censo'];
                    ?>
                    <tr>
                        <td><img src="<?php echo $this->crud_model->get_image_url('student',$estudiante->id_estudiante);?>" class="img-circle" width="40" height="40"/></td>
                        <td><?php echo $row['cedula_identidad_representante'] ;?></td>
                        <td><?php echo $row['primer_nombre_representante']." ". $row['segundo_nombre_representante']. ", ". $row['primer_apellido_representante']." ". $row['segundo_apellido_representante'];?></td>
                        <td><?php echo $row['cedula_identidad'] ;?></td>
                        <td><?php echo $row['primer_nombre']." ". $row['segundo_nombre']. ", ". $row['primer_apellido']." ". $row['segundo_apellido'];?></td>
                        <td><?php echo $row['fecha_nacimiento_alumno'] ;?></td>
                        <td><?php echo $grado_cursar[0]['grado'];?></td>
                        <td><?php echo $row['puntaje_total'] ?></td>
                        <td>
                            <?php $base_url = base_url().'modal/popup/modal_census_student_validate/'; ?>
                            <?php $cedula_identidad = $row['cedula_identidad']; ?>
                            <a href="javascript:;" onclick="showAjaxModal('<?php echo $base_url.$id_censo;?>');" class="btn btn-primary">
                                <i class="entypo-pencil"></i>
                                <?php echo "Asignar Cupo"?>
                            </a>
                        </td>
                    </tr>
            <?php endforeach;?>
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
