<?php

$this->load->model('Grado');
$this->load->model('Recaudo');
$this->load->model('Recaudo_Grado');
$this->load->model('Recaudo_Estudiante');

$id_grado = $param2;

$id_estudiante = $param3;

$recaudos = Grado::find($id_grado)->recaudos;

$recaudos_estudiante = Recaudo_Estudiante::where('id_estudiante', 'LIKE', $id_estudiante)
                                           ->get();

?>
<div class="alert alert-success oculto" id="success">
    <h4 class="headerFound">
        <i class="glyphicon glyphicon-ok-circle"></i>
        Recaudos guardados exitosamente!
    </h4>
</div>
<div class="alert alert-success oculto" id="successRecaudos">
    <h4 class="headerFound">
        <i class="glyphicon glyphicon-ok-circle"></i>
        El alumno ha completado todos los recaudos!
    </h4>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="wrapperRecaudos">
            <form id="formRecaudosValidate" class="form-horizontal form-groups-bordered" accept-charset="utf-8">
            <h3 class="headerRecaudos">Lista de recaudos</h3>

            <?php

            foreach ($recaudos as $recaudo) {

            ?>

                <div class="form-group">
                    <div class="col-sm-10">
                        <div class="checkbox">
                            <label for="<?php echo $recaudo['id_recaudo']; ?>">

                            <?php echo $recaudo->valor.'.'; ?>

                            <input type="checkbox" value="<?php echo $recaudo['id_recaudo'].'-'.$id_estudiante; ?>" name="<?php echo $recaudo['id_recaudo'].'-'.$recaudo['id_estudiante']; ?>" id="<?php echo $recaudo['id_recaudo']; ?>" required/>

                            <?php //for ($i=0; $i < sizeof($recaudos_estudiante); $i++) {

                                //if($recaudos_estudiante[$i]['id_recaudo'] == $recaudo['id_recaudo']) {

                                    //echo 'checked=checked />';
                                //}
                                //else
                                //{
                                    //echo '/>';
                                //}
                            ?>


                            <?php //} ?>

                            </label>
                        </div>
                    </div>
                </div>

                             <?php } ?>

            <div class="form-group">
                <p class="text-center">
                    <button id="btnValidarRecaudos" type="submit" class="btn btn-success submit">
                        Validar
                    </button>
                </p>
            </div>

            <?php echo form_close();?>
        </div>

    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/censo/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/modal_recaudos.js"></script>