<?php
//Cargar Modelos Requeridos

$this->load->model('Estudiante');
$this->load->model('Persona');
$this->load->model('Escuela');
$this->load->model('Grado');
$this->load->model('Seccion');
$this->load->model('Direccion');
$this->load->model('Estado');
$this->load->model('Municipio');
$this->load->model('Parroquia');

//Relizar consulta por cedula de identidad o escolar
$cedula_suministrada = $param2;
$tramiterealizado = urldecode($param3);

$estudiante = Estudiante::where('cedula_identidad', '=', $cedula_suministrada)
                        ->orWhere('cedula_escolar', '=', $cedula_suministrada)
                        ->get();

//Almacenar las cedulas
$cedula_identidad = $estudiante[0]->cedula_identidad;
$cedula_escolar = $estudiante[0]->cedula_escolar;


//Si el alumno no posee cedula de identidad para mostrar en carnet
if(empty($cedula_identidad)) {
    //entonces mostrar cedula escolar
    $cedula_estudiante = $cedula_escolar;
}
else
{
    //Asignar cedula de identidad para mostrar en carnet
    $cedula_estudiante = $cedula_identidad;
}

//Obtener los datos del director de la escuela
$id_escuela = $estudiante[0]->id_escuela;
$escuela = Escuela::find($id_escuela);

//Obtener direccion escuela
$id_direccion_escuela = $escuela['id_direccion_escuela'];
$direccion = Direccion::find($id_direccion_escuela);

//Formateo de fecha
$ano_actual = date('Y');
$ano_proximo = strtotime ('+1 year' , strtotime ($ano_actual)) ;
$ano_proximo = date ('Y' , $ano_proximo);
$ano_escolar = $escuela->periodo_escolar_actual;

$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

?>
<center>
    <a onClick="PrintElem('<?php echo $estudiante[0]->id_estudiante ?>','<?php echo $tramiterealizado ?>')" class="btn btn-default btn-icon icon-left hidden-print pull-right">
        Imprimir
        <i class="entypo-print"></i>
    </a>
</center>
<br><br>
<div id="invoice_print">
     <!-- INNER HEADER -->
        <div class="row" id="constancia">
            <div class="col-sm-2 inline1" style="padding-right: 0px; padding-left: 25px; width: 105px;">
                <div class="logo" style="text-align: left; margin:60px 0 0; padding:0;">
                    <img src="/andres-bello/uploads/logo.png" style="width:70px;">
                </div>
            </div>
            <div class="col-sm-2 inline1" style="padding-left: 0px; padding-right: 0px;">
                <div class="logo" style="text-align: left; margin:60px 0 0; padding:0;">
                    <img src="/andres-bello/uploads/scude.png" style="width:50px;">
                </div>
            </div>
            <div class="col-sm-6 inline2" style="text-align: left; font-size:13px; margin:60px 0 0 -30px; color:#000; padding:0;">
                República Bolivariana de Venezuela
                <br/>
                Alcaldia de Municipio Chacao
                <br/>
                Unidad Educativa Municipal
                <br/>
                 U.E.M "Andres Bello"
            </div>
        </div>
        <!-- INNER CONTAINER -->
        <div class="form-group">
            <div class="col-sm-12" id="study-record" style="text-align: center; ">
                <div class="title-record" style="margin:50px auto 40px;">
                    <strong><h4>CONSTANCIA</h4></strong>
                    <strong><h4>“TRAMITACIÓN DE DOCUMENTOS”</h4></strong>
                </div>
                <div style="text-align: justify;">
                    <p style="font-size: 11px !important; line-height: 200%;">
                         Quien suscribe, <?php echo $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.', '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido; ?>,  C.I:<?php echo $escuela->director->cedula_identidad; ?> Director (a), hace constar que el alumno (a) <?php echo $estudiante[0]->persona->primer_nombre.' '.$estudiante[0]->persona->segundo_nombre.', '.$estudiante[0]->persona->primer_apellido.' '.$estudiante[0]->persona->segundo_apellido; ?>  titular de la Cédula de Identidad y/o Cédula Escolar N°: <?php echo $cedula_estudiante; ?>, está tramitando ante esta Institución los documentos correspondiente a: <?php echo $tramiterealizado; ?>.
                    </p>
                    <p style="font-size: 11px !important; line-height: 200%; margin-top: 40px;">
                        Constancia que se expide a petición de la parte interesada en CHACAO, MIRANDA, a los <?php echo date('d'); ?> días del mes de <?php echo $meses[date('n')-1] ?> del año <?php echo date('Y'); ?>. 
                    </p>
                </div>
            </div>
            <div style="text-align: center; ">
                <div style="margin-top: 100px;">
                    <p style="font-size: 11px !important; line-height: 200%;">
                        Atentamente,
                    </p>
                    <p style="font-size: 11px !important; line-height: 200%;">
                        <?php echo $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.', '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido; ?>
                    </p>
                    <p style="font-size: 11px !important; line-height: 200%;">
                        Director (a) <?php echo ($escuela->director_encargado == '1') ?  ' (E)' : '' ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- INNER FOOTER -->
        <div class="row">
            <div class="col-sm-5">
                <div style="margin-left:18px; font-size: 8px">
                    <p style="font-size: 8px !important; line-height: 100%;">
                        AV. MOHEDANO CRUCE CON CALLE PÁEZ
                    </p>
                    <p style="font-size: 8px !important; line-height: 100%; font-weight: bold;">
                        + 58 212 - 266 - 4822
                    </p>
                    <p style="font-size: 8px !important; line-height: 100%; font-weight: bold;">
                        uemabello@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-sm-7">
                <div style="text-align: right; margin-left:18px; font-size: 8px">
                    <p style="font-size: 8px !important; line-height: 100%;">
                        AV. VENEZUELA CON AV. TAMANACO DEL EL ROSAL
                    </p>
                    <p style="font-size: 8px !important; line-height: 100%; font-weight: bold;">
                        0800 - 242 - 2261
                    </p>
                    <p style="font-size: 8px !important; line-height: 100%; font-weight: bold;">
                       ALCALDÍA DE CHACAO  - www.chacao.gob.ve
                    </p>
                </div>
            </div>
        </div>
</div>

<script type="text/javascript">

    // print invoice function
    function PrintElem(id_student, data_student)
    {
        var url = window.location.href +'/'+ '../../Constancia/constanciaTramitacionDocumento?std='+id_student+'&tone='+data_student;
        var win = window.open(url, '_blank');
        win.focus();
        // Ajax('../Constancia/constanciaEstudio',data_constancia,'POST',true,function(response){
        //     alert(response);
        // });
    }

</script>