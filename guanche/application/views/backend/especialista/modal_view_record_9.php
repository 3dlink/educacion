<?php
$edit_data = $this->db->get_where('invoice', array('invoice_id' => $param2))->result_array();
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
                <div class="title-record" style="margin-bottom: 60px;">
                    <strong><h3>CONSTANCIA DE ESTUDIOS</h3></strong>
                </div>
                <div  style="text-align: justify;">
                    <p style="font-size: 14px !important; line-height: 200%;">
                        Quien suscribe, XXXXXXXXXXXXXXX,  C.I:  XXXXXXXXXX Director (a), hace constar que el alumno (a) XXXXXXXXXXXXXXX  XXXX, titular de la Cédula de Identidad y/o Cédula Escolar N°:  XXXXXXXXXXXX,  cursa estudios en esta Unidad Educativa, en el _______ Grado / Año, Sección __,  correspondiente al Año Escolar   XXXX  -  XXXX.
                    </p>
                    <p style="font-size: 14px !important; line-height: 200%; margin-top: 50px;">
                        Constancia que se expide a petición de la parte interesada en CHACAO, MIRANDA, a los <?php echo date('d'); ?> días del mes de <?php echo $meses[date('n')-1] ?> del año <?php echo date('Y'); ?>.
                    </p>
                </div>

                </div>
                <div  style="text-align: center; ">
                    <div  style="margin-top: 100px;">
                        <p style="font-size: 14px !important; line-height: 200%;">
                            Atentamente,
                        </p>
                        <p style="font-size: 14px !important; line-height: 200%;">
                            XXXXXXXXXXXXXXXXXX
                        </p>
                        <p style="font-size: 14px !important; line-height: 200%;">
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
        mywindow.document.write('<link rel="stylesheet" href="http://demoeducacion.tekkoa.com/educacion/assets/css/bootstrap.css" type="text/css" />');
        mywindow.document.write('<link rel="stylesheet" href="http://demoeducacion.tekkoa.com/educacion/assets/css/constancia_estudio/record.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>