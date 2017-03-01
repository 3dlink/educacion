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

?>
<hr />

    <div class="row">
    <?php echo form_open(base_url() . 'index.php?admin/system_config/do_update' ,
      array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
        <div class="col-md-6">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    <div class="panel-title">
                        <?php echo "Ajustes de Escuela"?>
                    </div>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                      <label  class="col-sm-4 control-label"><?php echo "Director"?></label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" name="system_name"
                              value="<?php echo $this->db->get_where('configuraciones' , array('nombre' =>'nombre_sistema'))->row()->valor;?>">
                      </div>
                  </div>
                  <div class="form-group">
                      <label  class="col-sm-4 control-label"><?php echo "Director Encargado"?></label>
                      <div class="col-sm-8">
                          <input type="checkbox" class="form-control" name="system_title"
                              value="">
                      </div>
                  </div>

                  <div class="form-group">
                      <label  class="col-sm-4 control-label"><?php echo "Limite de Cupos"?></label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" name="address"
                              value="<?php echo $this->db->get_where('configuraciones' , array('nombre' =>'direccion'))->row()->valor;?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info"><?php echo "Guardar"?></button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    <?php echo form_close();?>


    </div>

<script type="text/javascript">
    $(".gallery-env").on('click', 'a', function () {
        skin = this.id;
        $.ajax({
            url: '<?php echo base_url();?>index.php?admin/system_settings/change_skin/'+ skin,
            success: window.location = '<?php echo base_url();?>index.php?admin/system_settings/'
        });
});
</script>