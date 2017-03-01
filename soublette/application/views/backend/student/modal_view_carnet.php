<?php
//date_default_timezone_set('TZ=America/Caracas');

$this->load->model('Inscripcion');
$this->load->model('Persona');
$this->load->model('Vivecon');
$this->load->model('Telefono');
$this->load->model('Grado');
$this->load->model('Seccion');
$this->load->model('Escuela');
$this->load->model('Representante');

$cedula_suministrada = $param2;
$estudiante = Inscripcion::where('CedulaDeIdentidadDelAlumnoOCedulaEscolar', '=', $cedula_suministrada)
                        ->get();

//Ids de la tabla estudiante
$id_persona = $estudiante[0]->id_persona;
$cedula_identidad = $estudiante[0]->CedulaDeIdentidadDelAlumnoOCedulaEscolar;
$cedula_escolar = $estudiante[0]->CedulaDeIdentidadDelAlumnoOCedulaEscolar;
$id_vive_con = $estudiante[0]->vive_con;
//$id_telefono = $estudiante[0]->id_telefono;
$id_grado = $estudiante[0]->GradoACursar;
$id_seccion = $estudiante[0]->SeccionACursar;
$id_escuela = $estudiante[0]->id_escuela;
//$id_representante = $estudiante[0]->id_representante;
$cedula_estudiante = $cedula_identidad;

//Validar si el estudiante posee cedula de identidad
if($cedula_suministrada === $cedula_escolar) {
    if(empty($cedula_identidad)) {
        $cedula_estudiante = $cedula_escolar;
    }
}

//$persona = Persona::find($id_persona);

$primer_nombre = $estudiante[0]->PrimerNombreDelAlumno;
$segundo_nombre = $estudiante[0]->SegundoNombreDelAlumno;
$primer_apellido = $estudiante[0]->PrimerApellidoDelAlumno;
$segundo_apellido = $estudiante[0]->SegundoApellidoDelAlumno;

$phpdate = strtotime( $estudiante[0]->FechaDeNacimientoDelAlumno);
$fecha_nacimiento = date( 'd-m-Y', $phpdate );

//$telefono = Telefono::find($id_telefono);
$numero_telefono = $estudiante[0]->TelefonoDeHabitacionDelRepresentante;

$grado = Grado::find($id_grado);
$grado_estudiante = $grado['abreviacion_grado'];
$grado_descripcion = $grado['descripcion'];

$seccion = Seccion::find($id_seccion);
$seccion_estudiante = $seccion['abreviacion_seccion'];

$escuela = Escuela::find($id_escuela);
$id_director = $escuela['id_persona_director'];
$director_encargado = $escuela['director_encargado'];

$director = Persona::where( 'id_persona' , '=' , $id_director)->get()->first();
$primer_nombre_director = $director['primer_nombre'];
$segundo_nombre_director = $director['segundo_nombre'];
$primer_apellido_director = $director['primer_apellido'];
$segundo_apellido_director = $director['segundo_apellido'];


//$representante = Representante::find($id_representante);
//$id_persona_representante = $representante['id_persona'];

//$persona_representante = Persona::find($id_persona_representante);
$nombre_persona_representante = $estudiante[0]->PrimerNombreDelRepresentante;
$apellido_persona_representante = $estudiante[0]->PrimerApellidoDelRepresentante;


//Formateo de fecha
$ano_actual = date('Y');
$ano_proximo = strtotime ( '+1 year' , strtotime ($ano_actual)) ;
$ano_proximo = date ( 'Y' , $ano_proximo );
$ano_escolar = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;

?>
<center>
    <a onClick="PrintElem('<?php echo $estudiante[0]->id_estudiante ?>')" class="btn btn-default btn-icon icon-left hidden-print pull-right">
        Imprimir
        <i class="entypo-print"></i>
    </a>
</center>
    <br><br>
    <div id="carnetEscolar">
        <div class="col-sm-6 carnetFormat">
            <div class="row">
                <p class="headerCarnet text-center">
                    República Bolivariana de Venezuela
                </p>
                <p class="headerCarnet text-center">
                    Alcaldia de Municipio Chacao
                </p>
                <p class="headerCarnet text-center">
                    U.E.M "Andres Bello"
                </p>
                <p class="headerCarnet text-center" style="font-size: 8px;" >
                    C.O.D S3648D1507
                </p>
            </div>
            <div class="row centerRow">
                <div class="inlineScude">
                    <div class="scude">
                        <img class="scudeChacao" src="<?php echo base_url(); ?>uploads/scude.png">
                    </div>
                </div>
                <div class="inlinePhoto">
                    <div class="photo">
                        <img id="photoStudent" class="photoStudent" src="<?php echo $this->crud_model->get_image_url('student',$id_persona);?>"/>
                    </div>
                    <div class="infoCampo"><?php echo $grado_descripcion ?> y Sección</div>
                    <div class="valueCampo" style="width: 100% ! important;"><?php echo $grado_estudiante.' '.$grado_descripcion.' '.$seccion_estudiante; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="infoCampo2">Nombres</div>
                <div class="valueCampo" id="nombreApellido"><?php echo $primer_nombre.' '.$segundo_nombre; ?></div>
                <div class="infoCampo2">Apellidos</div>
                <div class="valueCampo" id="nombreApellido"><?php echo $primer_apellido.' '.$segundo_apellido; ?></div>
                <div class="infoCampo2">Fecha de Nacimiento</div>
                <div class="valueCampo" id="cedula"><?php echo $fecha_nacimiento; ?></div>
                <div class="infoCampo2">Cédula de Identidad</div>
                <div class="valueCampo" id="cedula"><?php echo $cedula_estudiante; ?></div>
                <div class="infoCampo2">Nombre Representante</div>
                <div class="valueCampo" id="nombreRepresentante"><?php echo $nombre_persona_representante.' '.$apellido_persona_representante;  ?></div>
            </div>
            <div class="expireCarnet">
                    <?php echo 'Válido para el año escolar '.$ano_escolar; ?>
            </div>
        </div>
        <div class="col-sm-6 carnetFormat">
            <div class="row">
                <img class="logoChacao" src="<?php echo base_url(); ?>uploads/logo.png" class="img-responsive">
            </div>
            <div class="row">
                <div class="col-sm-12 text-center contactoCarnet">
                    <p>contactoeducaciónchacao@gmail.com</p>
                    <p>Telf: 0212-905.71.23</p>
                </div>
            </div>
            <div class="row">
                <span class="reverseCarnet">
                    Este carnet es personal e intrasferible y acredita al portador como estudiante y miembro de esta institución.
                </span>
                <span class="reverseCarnet">
                    En caso de emergencia puede contactar a través del N° de Telf:0212-266.48.22 uemabello@gmail.com
                </span>
            </div>
            <div class="footerCarnet" style="margin-top: -10px;">
                <img class="logoChacao"  src="<?php echo base_url(); ?>uploads/firma_director.png" class="img-responsive">
                <span class="infoDirector" id="infoDirector">
                    <?php echo $primer_nombre_director.' '.$segundo_nombre_director.' '.$primer_apellido_director.' '.$segundo_apellido_director; ?>
                </span>
                <span class="infoDirector">
                    Director (a) <?php echo ($director_encargado == '1') ?  ' (E)' : '' ?>
                </span>
                <img alt="codigo_barra" src="<?php echo base_url(); ?>uploads/barcode.php?text=<?php echo $cedula_estudiante; ?>" />
            </div>

        </div>
    </div>

<script type="text/javascript">

    // print invoice function
    function PrintElem(data_constancia)
    {
        var url = window.location.href +'/'+ '../../Carnet?std='+data_constancia;
        var win = window.open(url, '_blank');
        win.focus();
        // Ajax('../Constancia/constanciaEstudio',data_constancia,'POST',true,function(response){
        //     alert(response);
        // });
    }

</script>