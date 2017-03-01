<?php

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
        <div class="row"> 
            <div class="col-sm-4">
                <div class="logo" style="text-align: center; margin:50px 0 0;">
                    <img src="images/logo.png" style="max-height:100px;">
                </div>
            </div>
            <div class="col-sm-4" style="text-align: center; font-size: 18px; margin:50px 0 0; color:#000;">
                República Bolivariana de Venezuela
                <br/>
                Alcaldia de Municipio Chacao
                <br/>
                Unidad Educativa Municipal
                <br/>
                 U.E.M "Andres Bello"
            </div>
            <div class="col-sm-4">
                <div class="logo" style="text-align: center; margin:50px 0 0;">
                    <img src="images/scude.png" style="max-height:110px; width:40%;">
                </div>
            </div>
        </div>
        <!-- INNER CONTAINER -->
        <div class="form-group">
            <div class="col-sm-12" id="study-record" style="text-align: center; ">
                <div class="title-record" style="margin:50px auto 40px;">
                    <strong><h3>CONSTANCIA DE ESTUDIO</h3></strong>
                </div>
                <div style="text-align: justify;">
                    <p style="font-size: 14px !important; line-height: 200%;">
                         Quien suscribe,  Prof.  XXXXXXXXXXXXXXX,  C.I:  XXXXXXXXXX Director (a), hace constar que el alumno (a) LENIN GABRIEL , BERRIO  titular de la Cédula de Identidad y/o Cédula Escolar N°:  30715568,  cursa estudios en esta Unidad Educativa, en el 6to Grado / Año, Sección A,  correspondiente al Año Escolar   2015 - 2016. 
                    </p>
                    <p style="font-size: 14px !important; line-height: 200%; margin-top: 40px;">
                        Constancia que se expide a petición de la parte interesada en XXXXXXXXXXX, a los 28 días del mes de October del año  2015.                    
                    </p>
                </div>
            </div>
            <div style="text-align: center; ">
                <div style="margin-top: 100px;">
                    <p style="font-size: 14px !important; line-height: 200%;">
                        Atentamente,
                    </p>
                    <p style="font-size: 14px !important; line-height: 200%;">
                        Prof. XXXXXXXXXXXXXXXXXX
                    </p>
                    <p style="font-size: 14px !important; line-height: 200%;">
                        Director (a)  (E )
                    </p>
                </div>
            </div>
        </div>
        <!-- INNER FOOTER -->
        <div class="row"> 
            <div class="col-sm-4"> 
                <div style="margin-left:20px;">

                    <p style="font-size: 14px !important; line-height: 100%;">
                        AV. MOHEDANO CRUCE CON CALLE PÁEZ
                    </p>
                    <p style="font-size: 14px !important; line-height: 100%; font-weight: bold;">
                        + 58 212 - 266 - 4822
                    </p>
                    <p style="font-size: 14px !important; line-height: 100%; font-weight: bold;">
                        uemabello@gmail.com
                    </p>
                    <p style="font-size: 14px !important; line-height: 100%; font-weight: bold;">
                        www.chacao-gob.ve
                    </p>
                </div>
            </div>
            <div class="col-sm-8">
               <div class="logo">
                    <img src="images/trama_chacao.png" style="max-height:120px; width:100%;">
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
        var mywindow = window.open('', 'carnet', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Constancia</title>');
        mywindow.document.write('<link rel="stylesheet" href="assets/css/neon-theme.css" type="text/css" />');
        mywindow.document.write('<link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();


        return true;
    }

</script>