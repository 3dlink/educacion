       <?php
    date_default_timezone_set('America/Caracas');

    $this->load->model('Censo/Censo');
    $this->load->model('Censo/Censo_grado');
    $this->load->model('Censo/Puntaje_censo');
    $this->load->model('Censo/Entrevista_censo');

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

    $estudiantes = Puntaje_censo::where('StatusCenso', '=', 1)
                            ->where($uni_pref, '=', 1)
                            ->get();

    ?>
    <br><br>
    <table class="table table-bordered datatable" id="table_export">
        <thead>
            <tr>
                <th width="80"><div>ID</div></th>
                <th width="80"><div>CI Repre</div></th>
                <th width="200"><div>Representante</div></th>
                <th width="200"><div>Alumno</div></th>
                <th width="130"><div>Edad</div></th>
                <th width="120"><div>Escuela</div></th>
                <th width="120"><div>Grado a Cursar</div></th>
                <th width="100"><div>Fecha Solicitud</div></th>
                <th width="100"><div>Fecha Cita</div></th>
                <th width="50"><div>Puntaje</div></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($estudiantes as $row):?>
                    <?php
                        $fecha_actual = new DateTime("now");
                        $fecha_nacimiento = new DateTime($row['fecha_nacimiento_alumno']);

                        $cita = Entrevista_censo::where('id_censo_asignado', '=', $row['id_censo'])
                                                ->get();

                        if(count($cita) > 0){
                            $fecha_cita = date_format(date_create($cita[0]->fecha_asistencia), 'd/m/Y');
                            $hora_cita = date_format(date_create($cita[0]->hora_asistencia), 'g:i A');
                        }else{
                            $fecha_cita = "CITA NO ";
                            $hora_cita = "OTORGADA";
                        }


                        $dteDiff  = $fecha_actual->diff($fecha_nacimiento);

                        $dia_nacimiento = substr($row['fecha_nacimiento_alumno'], 8, 2);
                        $mes_nacimiento = substr($row['fecha_nacimiento_alumno'], 5, 2);
                        $ano_nacimiento = substr($row['fecha_nacimiento_alumno'], 0, 4);

                        $nacimiento = $dia_nacimiento.'/'.$mes_nacimiento.'/'.$ano_nacimiento;

                            $grado_cursar = Censo_grado::where('id_censo_grado', '=', $row['grado_cursar'])
                                                        ->get();
                            $id_censo = $row['id_censo'];

                            $escuela = '';
                            if($row['UniDePrefAndres'] == 1){
                                $escuela = 'UEM ANDRÉS BELLO';
                            }elseif ($row['UniDePrefJuanDio'] == 1){
                                $escuela = 'UEM JUAN DE DIOS GUANCHE';
                            }elseif ($row['UniDePrefCarlos'] == 1){
                                $escuela = 'UEM CARLOS SOUBLETTE';
                            }

                            switch ($row['StatusCenso']) {
                                case 0:
                                    $satus_registro = "PENDIENTE";
                                    break;
                                case 1:
                                    $satus_registro = "CITA OTORGADA";
                                    break;
                                case 2:
                                    $satus_registro = "CUPO VALIDADO";
                                    break;
                                case 3:
                                    $satus_registro = "CUPO AUTORIZADO";
                                    break;
                                case 4:
                                    $satus_registro = "ANULADO";
                                    break;
                            }
                    ?>
                    <tr>
                        <td><?php echo $row['id_censo'] ;?></td>
                        <td><?php echo $row['cedula_identidad_representante'] ;?></td>
                        <td><?php echo strtoupper($row['primer_nombre_representante']." ". $row['segundo_nombre_representante']. ", ". $row['primer_apellido_representante']." ". $row['segundo_apellido_representante']) ;?></td>
                        <td><?php echo strtoupper($row['primer_nombre']." ". $row['segundo_nombre']. ", ". $row['primer_apellido']." ". $row['segundo_apellido']);?></td>
                        <td><?php echo $dteDiff->format("%Y años %M meses %D días"); ?></td>
                        <td><?php echo $escuela;?></td>
                        <td><?php echo $grado_cursar[0]['grado'];?></td>
                        <td><?php echo $row['fecha_solicitud'] ?></td>
                        <td><?php echo $fecha_cita.'   '.$hora_cita ?></td>
                        <td><?php echo $row['puntaje_total'] ?></td>
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
                        "sExtends": "xls",
                        "mColumns": [0,1,2,3,4,5,6,7,8,9]
                    },
                    {
                        "sExtends": "pdf",
                        "mColumns": [0,1,2,3,4,5,6,7,8,9]
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