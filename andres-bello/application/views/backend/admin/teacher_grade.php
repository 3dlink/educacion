<div class="row">
    <div class="col-md-12">
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#lista_docentes" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo "Docentes"?>
                </a>
            </li>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo "Asignar Docente"?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        <div class="tab-content">
            <!----RESUME STARTS---->
            <div class="tab-pane box active" id="lista_docentes" style="padding: 5px">
                <div class="box-content">
                    <table  class="table table-bordered datatable" id="table_export">
                        <thead>
                            <tr>
                                <th width="80" ><div><?php echo "ID"?></div></th>
                                <th><div><?php echo "Grado y Sección"?></div></th>
                                <th><div><?php echo "Docente"?></div></th>
                                <th width="100" ><div><?php echo "Acción"?></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($resut_teachers as $row):?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $row['id_seccion'] ; ?></td>
                                    <td style="text-align: center;"><?php echo $this->crud_model->get_type_section_by_id('secciones', $row['id_seccion']) ; ?></td>
                                    <td style="text-align: center;"><?php echo $this->crud_model->get_teacher_name($row['teacher_id']) ; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 100%;">
                                                Acción <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                                <li>
                                                    <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/teacher_grade/anular/<?php echo $row['teacher_id']; ?>/<?php echo $id_nivel_educativo; ?>');">
                                                        <i class="entypo-trash"></i>
                                                            <?php echo "Anular" ?>
                                                        </a>
                                                    </li>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!----RESUME ENDS-->
            <div class="tab-pane box " id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url().'admin/teacher_grade/asignar/'.$id_nivel_educativo , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group" id="div_grado" >
                                <label class="col-sm-3 control-label">Grado</label>
                                <div class="col-sm-5">
                                  <select class="form-control" id="grado" name="Grado" onchange="return get_class_section(this.value)" required>
                                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                    <?php foreach ($classes as $grado){ ?>
                                        <option value="<?php echo $grado['id_grado']?>" > <?php echo $grado['nombre_grado']?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group" id="div_seccion">
                                <label class="col-sm-3 control-label">Sección</label>
                                <div class="col-sm-5">
                                  <select class="form-control" id="section_selection_holder" name="Seccion" required>
                                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                    <?php foreach ($secciones as $seccion){ ?>
                                        <option value="<?php echo $seccion['id_seccion']?>" > <?php echo $seccion['nombre_seccion']?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Docente</label>
                                <div class="col-sm-5">
                                    <select name="teacher_id" class="form-control" style="width:100%;">
                                        <option value="0" selected disabled>Seleccione</option>
                                        <?php
                                        $teachers = $this->db->get_where('teacher', array('id_seccion' => 0,'registro_activo' => 1,'id_escuela' => $this->config->item('id_school')))->result_array();
                                        foreach($teachers as $row):
                                        ?>
                                            <option value="<?php echo $row['teacher_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-3 col-sm-5">
                              <button type="submit" class="btn btn-info">Asignar</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function($)
    {
        var datatable = $("#table_export").dataTable();

        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });

        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_sections_level/3' ,
            success: function(response)
            {
                var result = JSON.parse(response)

                for(var x in result){

                    console.log(result[x]['id_seccion']);

                    $("#table_export_"+result[x]['id_seccion']).dataTable();

                    $(".dataTables_wrapper select").select2({
                        minimumResultsForSearch: -1
                    });

                }

            }
        });


    });

    function get_class_section(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selection_holder').html(response);

                get_class_subject(class_id);
            }
        });
    }
</script>