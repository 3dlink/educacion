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
    <a onClick="PrintElem('#invoice_print')" class="btn btn-default btn-icon icon-left hidden-print pull-right">
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
                    <strong>Historia</strong>
                    <strong>Fecha: <?php echo $estudiante[0]->persona->primer_nombre ?></strong>
                </div>
            </div>
            <div class="col-sm-12" id="study-record" style="text-align: center; ">
                <div class="title-record" style="margin:50px auto 40px;">
                    <strong><h4>HOJA DE REFERENCIA EXTERNA</h4></strong>
                </div>
                <div style="text-align: justify;">
                    <p style="font-size: 11px !important; line-height: 200%;">
                        NOMBRE DEL NI&Nacute;O: <?php echo $estudiante[0]->persona->primer_nombre.' '.$estudiante[0]->persona->segundo_nombre.', '.$estudiante[0]->persona->primer_apellido.' '.$estudiante[0]->persona->segundo_apellido; ?>
                    </p>
                    <p style="font-size: 11px !important; line-height: 200%; margin-top: 40px;">
                        FECHA DE NACIMIENTO: <?php echo $estudiante[0]->persona->primer_nombre ?>   EDAD: <?php echo $estudiante[0]->persona->primer_nombre ?>    SEXO: <?php echo $estudiante[0]->persona->primer_nombre ?>
                    </p>
                    <p style="font-size: 11px !important; line-height: 200%; margin-top: 40px;">
                        REFERIDO A: <?php echo $estudiante[0]->persona->primer_nombre ?>
                    </p>
                </div>
                <div style="text-align: justify;">
                    <p style="font-size: 11px !important; line-height: 200%;">
                        MOTIVO DE REFERENCIA:
                    </p>
                    <p style="font-size: 11px !important; line-height: 200%; margin-top: 40px;">
                        <?php echo $estudiante[0]->persona->primer_nombre ?>
                    </p>
                    <p style="font-size: 11px !important; line-height: 200%; margin-top: 40px;">
                        Mucho agradecemos nos informen a la brevedad los resultados de su estudio y las recomendaciones que tengan a bien ofrecernos.
                    </p>
                    <p style="font-size: 11px !important; line-height: 200%; margin-top: 40px;">
                        Para mayor información comunicarse con:  <?php echo $estudiante[0]->persona->primer_nombre ?>
                    </p>
                </div>
            </div>
            <div style="text-align: left; ">
                <div style="margin-top: 100px;">
                    <p style="font-size: 11px !important; line-height: 200%;">
                        Director (a) <?php echo ($escuela->director_encargado == '1') ?  ' (E)' : '' ?>
                    </p>
                </div>
            </div>
            <div style="text-align: right; ">
                <div style="margin-top: 100px;">
                    <p style="font-size: 11px !important; line-height: 200%;">
                        Director (a)  (E )
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
    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data)
    {
        var mywindow = window.open('', 'invoice', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Constancia</title>');
        mywindow.document.write('<link rel="stylesheet" href="http://example.com/educacion/assets/css/bootstrap.css" type="text/css" />');
        mywindow.document.write('<link rel="stylesheet" href="http://example.com/educacion/assets/css/constancia_estudio/record.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();


        return true;
    }

</script>