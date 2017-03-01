<hr />

    <div class="row">
    <?php echo form_open(base_url() . 'index.php?admin/system_settings/do_update' ,
      array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
        <div class="col-md-6">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    <div class="panel-title">
                        <?php echo "Ajustes del Sistema"?>
                    </div>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                      <label  class="col-sm-4 control-label"><?php echo "Nombre del Sistema"?></label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" name="system_name"
                              value="<?php echo $this->db->get_where('configuraciones' , array('nombre' =>'nombre_sistema'))->row()->valor;?>">
                      </div>
                  </div>
                  <div class="form-group">
                      <label  class="col-sm-4 control-label"><?php echo "Titulo del Sistema"?></label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" name="system_title"
                              value="<?php echo $this->db->get_where('configuraciones' , array('nombre' =>'titulo_sistema'))->row()->valor;?>">
                      </div>
                  </div>
                  <div class="form-group">
                      <label  class="col-sm-4 control-label"><?php echo "Dirección"?></label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" name="address"
                              value="<?php echo $this->db->get_where('configuraciones' , array('nombre' =>'direccion'))->row()->valor;?>">
                      </div>
                  </div>
                  <div class="form-group">
                      <label  class="col-sm-4 control-label"><?php echo "Teléfono"?></label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" name="phone"
                              value="<?php echo $this->db->get_where('configuraciones' , array('nombre' =>'telefono'))->row()->valor;?>">
                      </div>
                  </div>
                  <div class="form-group">
                      <label  class="col-sm-4 control-label"><?php echo "Email"?></label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" name="system_email"
                              value="<?php echo $this->db->get_where('configuraciones' , array('nombre' =>'correo_sistema'))->row()->valor;?>">
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
        <div class="col-md-6">

            <?php echo form_open(base_url() . 'index.php?admin/system_settings/upload_logo' , array(
            'class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>

            <div class="panel panel-primary" >

                <div class="panel-heading">
                    <div class="panel-title">
                        <?php echo "Ajuste de Logo"?>
                    </div>
                </div>

                <div class="panel-body">


                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo "Logo"?></label>

                        <div class="col-sm-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                    <img src="<?php echo base_url();?>uploads/logo.png" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Seleccionar Imagen</span>
                                        <span class="fileinput-exists">Cambiar</span>
                                        <input type="file" name="userfile" accept="image/*">
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>


                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info"><?php echo "Subir"?></button>
                    </div>
                  </div>

                </div>

            </div>

            <?php echo form_close();?>


        </div>

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