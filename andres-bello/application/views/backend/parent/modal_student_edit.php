<?php
$this->load->model('Grado');
$this->load->model('Recaudo');
$this->load->model('Recaudo_Grado');
$this->load->model('Recaudo_Estudiante');

$id_grado = $param2;
$id_estudiante = $param3;

$mis_recaudos = Recaudo_Grado::where('id_grado', '=', $id_grado)->get();

$recaudos_estudiante = Recaudo_Estudiante::where('id_estudiante', 'LIKE', $id_estudiante)->get();

?>
<div class="alert alert-success oculto" id="success" style="display:none;">
    <h4 class="headerFound">
        <i class="glyphicon glyphicon-ok-circle"></i>
        Recaudos guardados exitosamente!
    </h4>
</div>
<div class="alert alert-success oculto" id="successRecaudos" style="display:none;">
    <h4 class="headerFound">
        <i class="glyphicon glyphicon-ok-circle"></i>
        El alumno ha completado todos los recaudos!
    </h4>
</div>
<div class="alert alert-danger oculto" id="recaudoVacio" style="display:none;">
    <h4 class="headerFound">
        <i class="glyphicon glyphicon-info-sign"></i>
        No ha seleccionado ningún recaudo!.
    </h4>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="wrapperRecaudos">
            <?php echo form_open(base_url().$this->session->userdata('login_type').'/recaudos_validate' , array('class' => 'form-horizontal', 'id' => 'validarRecaudos' ,'enctype' => 'multipart/form-data', 'role' => 'form', 'target' => 'divTarget'));?>
            <h3 class="headerRecaudos">Lista de recaudos</h3>

            <?php

            foreach ($mis_recaudos as $recaudo) {

                $recaudos = Recaudo::where('id_recaudo', '=', $recaudo['id_recaudo'])->get();
            ?>

                <div class="form-group">
                    <div class="col-sm-10">
                        <div class="checkbox">
                            <label for="<?php echo 'recaudo'.$recaudo['id_recaudo']; ?>">

                                <?php echo $recaudos[0]->valor.'.'; ?>

                            </label>

                            <input type="checkbox" value="<?php echo $recaudo['id_recaudo'].'-'.$id_estudiante; ?>" name="<?php echo 'recaudo'.$recaudo['id_recaudo']; ?>" id="<?php echo 'recaudo'.$recaudo['id_recaudo']; ?>"

                            <?php

                                for ($i=0; $i < sizeof($recaudos_estudiante); $i++) {

                                if($recaudos_estudiante[$i]['id_recaudo'] == $recaudo['id_recaudo']) {

                                    echo "checked ='checked' disabled='disabled'";
                                }

                            ?>

                            <?php

                             }

                               echo '/>';

                             ?>


                        </div>
                    </div>
                </div>

                            <?php

                            }

                            ?>

            <div class="form-group">
                <p class="text-center">
                    <button type="submit" class="btn btn-success submit">
                        <i class="glyphicon glyphicon-check"></i>
                        Validar
                    </button>
                </p>
            </div>

            <?php echo form_close();?>
            <iframe name="divTarget" style="display:none;"></iframe>
        </div>

    </div>
</div>