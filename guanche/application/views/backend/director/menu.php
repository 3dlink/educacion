<div class="row">
    <div class="col-md-12">
        <!-- CONTROL TABS START -->
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo "Horario" ?>
                </a>
            </li>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo "Agregar Horario"?>
                </a>
            </li>
        </ul>
        <!-- CONTROL TABS END -->
        <div class="tab-content">
            <!-- TABLE LISTING STARTS -->
            <div class="tab-pane box active" id="list">
                <div class="box-content">
                    <div class="row">
                        <div class="col-xs-12 col-right" style="padding-bottom: 15px; padding-top: 15px;">
                            <div class="export-data">
                                <div class="DTTT btn-group">
                                    <button class="btn btn-white">
                                        PDF
                                    </button>
                                    <button class="btn btn-white">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table cellpadding="0" cellspacing="0" border="0"  class="table table-bordered " id="">
                        <thead>
                            <tr>
                                <th width="140"><?php echo "TIPO" ?></th>
                                <th><?php echo "LUNES" ?></th>
                                <th><?php echo "MARTES" ?></th>
                                <th><?php echo "MIÉRCOLES" ?></th>
                                <th><?php echo "JUEVES" ?></th>
                                <th><?php echo "VIERNES" ?></th>
                           </tr>
                       </thead>
                        <tbody>
                            <?php
                                for($h=1; $h<=3; $h++):
                                    if($h==1)$hour='Desayuno';
                                    else if($h==2)$hour='Almuerzo';
                                    else if($h==3)$hour='Merienda';
                                    ?>
                                    <tr class="gradeA">
                                        <td width="100"><?php echo strtoupper($hour);?></td>
                                            <td>
                                                <?php
                                                $this->db->order_by("hour_id", "asc");
                                                $this->db->where('day' , 'Lunes');
                                                $this->db->where('hour_id' , $h);
                                                $routines   =   $this->db->get('class_routine')->result_array();
                                                foreach($routines as $row2):
                                                ?>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class_routine/<?php echo $row2['class_routine_id'];?>');">
                                                            <i class="entypo-pencil"></i>
                                                                <?php echo "Editar" ?>
                                                                        </a>
                                                 </li>

                                                 <li>
                                                    <a href="#" onclick="confirm_modal('<?php echo base_url();?>/class_routine/delete/<?php echo $row2['class_routine_id'];?>');">
                                                        <i class="entypo-trash"></i>
                                                            <?php echo "Eliminar" ?>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                </div>
                                                <?php endforeach;?>

                                            </td>
                                            <td>
                                                <?php
                                                $this->db->order_by("hour_id", "asc");
                                                $this->db->where('day' , 'Martes');
                                                $this->db->where('hour_id' , $h);
                                                $routines   =   $this->db->get('class_routine')->result_array();
                                                foreach($routines as $row2):
                                                ?>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class_routine/<?php echo $row2['class_routine_id'];?>');">
                                                            <i class="entypo-pencil"></i>
                                                                <?php echo "Editar" ?>
                                                                        </a>
                                                 </li>

                                                 <li>
                                                    <a href="#" onclick="confirm_modal('<?php echo base_url();?>/class_routine/delete/<?php echo $row2['class_routine_id'];?>');">
                                                        <i class="entypo-trash"></i>
                                                            <?php echo "Eliminar" ?>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                </div>
                                                <?php endforeach;?>

                                            </td>
                                            <td>
                                                <?php
                                                $this->db->order_by("hour_id", "asc");
                                                $this->db->where('day' , 'Miercoles');
                                                $this->db->where('hour_id' , $h);
                                                $routines   =   $this->db->get('class_routine')->result_array();
                                                foreach($routines as $row2):
                                                ?>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class_routine/<?php echo $row2['class_routine_id'];?>');">
                                                            <i class="entypo-pencil"></i>
                                                                <?php echo "Editar" ?>
                                                                        </a>
                                                 </li>

                                                 <li>
                                                    <a href="#" onclick="confirm_modal('<?php echo base_url();?>/class_routine/delete/<?php echo $row2['class_routine_id'];?>');">
                                                        <i class="entypo-trash"></i>
                                                            <?php echo "Eliminar" ?>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                </div>
                                                <?php endforeach;?>
                                            </td>
                                            <td>
                                                <?php
                                                $this->db->order_by("hour_id", "asc");
                                                $this->db->where('day' , 'Jueves');
                                                $this->db->where('hour_id' , $h);
                                                $routines   =   $this->db->get('class_routine')->result_array();
                                                foreach($routines as $row2):
                                                ?>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class_routine/<?php echo $row2['class_routine_id'];?>');">
                                                            <i class="entypo-pencil"></i>
                                                                <?php echo "Editar" ?>
                                                                        </a>
                                                 </li>
                                                 <li>
                                                    <a href="#" onclick="confirm_modal('<?php echo base_url();?>/class_routine/delete/<?php echo $row2['class_routine_id'];?>');">
                                                        <i class="entypo-trash"></i>
                                                            <?php echo "Eliminar" ?>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                </div>
                                                <?php endforeach;?>

                                            </td>
                                            <td>
                                                <?php
                                                $this->db->order_by("hour_id", "asc");
                                                $this->db->where('day' , 'Viernes');
                                                $this->db->where('hour_id' , $h);
                                                $routines   =   $this->db->get('class_routine')->result_array();
                                                foreach($routines as $row2):
                                                ?>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class_routine/<?php echo $row2['class_routine_id'];?>');">
                                                            <i class="entypo-pencil"></i>
                                                                <?php echo "Editar" ?>
                                                                        </a>
                                                 </li>
                                                 <li>
                                                    <a href="#" onclick="confirm_modal('<?php echo base_url();?>/class_routine/delete/<?php echo $row2['class_routine_id'];?>');">
                                                        <i class="entypo-trash"></i>
                                                            <?php echo "Eliminar" ?>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                </div>
                                                <?php endforeach;?>
                                            </td>
                                    </tr>
                            <?php endfor;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!----TABLE LISTING ENDS--->
	<!----CREATION FORM STARTS---->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url().$this->session->userdata('login_type').'/class_routine/'.$id_nivel_educativo.'/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Tipo"?></label>
                                <div class="col-sm-5">
                                    <select name="day" class="form-control" style="width:100%;">
                                        <option value="Desayuno">Desayuno</option>
                                        <option value="Almuerzo">Almuerzo</option>
                                        <option value="Merienda">Merienda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Día"?></label>
                                <div class="col-sm-5">
                                    <select name="day" class="form-control" style="width:100%;">
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miercoles">Miércoles</option>
                                        <option value="Jueves">Jueves</option>
                                        <option value="Viernes">Viernes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Descripción"?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="descripcion" data-validate="required" data-message-required="<?php echo "Requerido"?>"/>
                                </div>
                            </div>
                        <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo "Agregar Horario"?></button>
                              </div>
		</div>
                    </form>
                </div>
	</div>
	<!----CREATION FORM ENDS-->
        </div>
    </div>
</div>
<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

    jQuery(document).ready(function($)
    {
        var datatable = $("#table_export").dataTable({
            "sPaginationType": "bootstrap",
            "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
            "oTableTools": {
                "aButtons": [
                    {
                        "sExtends": "pdf",
                        "mColumns": [0,1,2,3,4,5]
                    },
                    {
                        "sExtends": "print",
                        "fnSetText"    : "Press 'esc' to return",
                        "fnClick": function (nButton, oConfig) {
                            datatable.fnSetColumnVis(0, false);
                            datatable.fnSetColumnVis(3, false);

                            this.fnPrint( true, oConfig );

                            window.print();

                            $(window).keyup(function(e) {
                                  if (e.which == 27) {
                                      datatable.fnSetColumnVis(0, true);
                                      datatable.fnSetColumnVis(3, true);
                                  }
                            });
                        },

                    },
                ]
            },

        });

        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });
    });

</script>
<script type="text/javascript">
    function get_class_subject(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_subject/' + class_id ,
            success: function(response)
            {
                jQuery('#subject_selection_holder').html(response);

                get_class_section(class_id);
            }
        });
    }
    function get_class_section(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selection_holder').html(response);
            }
        });
    }
</script>

