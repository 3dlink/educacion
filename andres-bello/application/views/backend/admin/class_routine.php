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
            <div class="tab-pane active" id="list">
                <div class="panel-group joined" id="accordion-test-2">
                            <?php
                            $toggle = true;
                            $id_school = $this->config->item('id_school');
                            $this->db->where('id_nivel_educativo' , $id_nivel_educativo);
                            $this->db->where('id_escuela' , $id_school);
                            $this->db->where('registro_activo' , 1);
                            $classes = $this->db->get('vniveleducativogradoseccion')->result_array();
                            foreach($classes as $row):
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                		<h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapse<?php echo $row['id_seccion'];?>">
                                            <i class="entypo-calendar"></i>  <?php echo $row['nombre_seccion'];?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $row['id_seccion'];?>" class="panel-collapse collapse <?php if($toggle){echo 'in';$toggle=false;}?>">
                                    <div class="panel-body">
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
                                                    <th width="140"><?php echo "HORA" ?></th>
                                                    <th><?php echo "LUNES" ?></th>
                                                    <th><?php echo "MARTES" ?></th>
                                                    <th><?php echo "MIÉRCOLES" ?></th>
                                                    <th><?php echo "JUEVES" ?></th>
                                                    <th><?php echo "VIERNES" ?></th>
                                               </tr>
                                           </thead>
                                            <tbody>
                                                <?php
                                                    for($h=1; $h<=14; $h++):
                                                        if($h==1)$hour='7:00 a.m - 7:45 a.m';
                                                        else if($h==2)$hour='7:45 a.m - 8:30 a.m';
                                                        else if($h==3)$hour='8:30 a.m - 9:15 a.m';
                                                        else if($h==4)$hour='9:15 a.m - 10:00 a.m';
                                                        else if($h==5)$hour='10:00 a.m - 10:45 a.m';
                                                        else if($h==6)$hour='10:45 a.m - 11:30 a.m';
                                                        else if($h==7)$hour='11:30 a.m - 12:30 p.m';
                                                        else if($h==8)$hour='12:30 p.m - 1:15 p.m';
                                                        else if($h==9)$hour='1:15 p.m - 2:00 p.m';
                                                        else if($h==10)$hour='2:00 p.m - 2:45 p.m';
                                                        else if($h==11)$hour='2:45 p.m - 3:30 p.m';
                                                        else if($h==12)$hour='3:30 p.m - 4:15 p.m';
                                                        else if($h==13)$hour='4:15 p.m - 5:00 p.m';
                                                        else if($h==14)$hour='5:00 p.m - 5:45 p.m';
                                                        ?>
                                                        <tr class="gradeA">
                                                            <td width="100"><?php echo strtoupper($hour);?></td>
                                                                <td>
                                                                    <?php
                                                                    $this->db->order_by("hour_id", "asc");
                                                                    $this->db->where('day' , 'Lunes');
                                                                    $this->db->where('hour_id' , $h);
                                                                    $this->db->where('section_id' , $row['id_seccion']);
                                                                    $this->db->where('registro_activo' , 1);
                                                                    $routines   =   $this->db->get('class_routine')->result_array();
                                                                    foreach($routines as $row2):
                                                                    ?>
                                                                    <div class="btn-group">
                                                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                            <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                                            <span class="caret"></span>
                                                                        </button>
                                                                        <ul class="dropdown-menu">
<!--                                                                             <li>
                                                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class_routine/<?php echo $row2['class_routine_id'];?>/<?php echo $id_nivel_educativo ;?>');">
                                                                                <i class="entypo-pencil"></i>
                                                                                    <?php echo "Editar" ?>
                                                                                            </a>
                                                                     </li> -->

                                                                     <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/class_routine/delete/<?php echo $row2['class_routine_id'];?>/<?php echo $id_nivel_educativo ;?>');">
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
                                                                    $this->db->where('section_id' , $row['id_seccion']);
                                                                    $this->db->where('registro_activo' , 1);
                                                                    $routines   =   $this->db->get('class_routine')->result_array();
                                                                    foreach($routines as $row2):
                                                                    ?>
                                                                    <div class="btn-group">
                                                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                            <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                                            <span class="caret"></span>
                                                                        </button>
                                                                        <ul class="dropdown-menu">
      <!--                                                                             <li>
                                                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class_routine/<?php echo $row2['class_routine_id'];?>/<?php echo $id_nivel_educativo ;?>');">
                                                                                <i class="entypo-pencil"></i>
                                                                                    <?php echo "Editar" ?>
                                                                                            </a>
                                                                     </li> -->

                                                                     <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/class_routine/delete/<?php echo $row2['class_routine_id'];?>/<?php echo $id_nivel_educativo ;?>');">
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
                                                                    $this->db->where('section_id' , $row['id_seccion']);
                                                                    $this->db->where('registro_activo' , 1);
                                                                    $routines   =   $this->db->get('class_routine')->result_array();
                                                                    foreach($routines as $row2):
                                                                    ?>
                                                                    <div class="btn-group">
                                                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                            <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                                            <span class="caret"></span>
                                                                        </button>
                                                                        <ul class="dropdown-menu">
<!--                                                                             <li>
                                                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class_routine/<?php echo $row2['class_routine_id'];?>/<?php echo $id_nivel_educativo ;?>');">
                                                                                <i class="entypo-pencil"></i>
                                                                                    <?php echo "Editar" ?>
                                                                                            </a>
                                                                     </li> -->

                                                                     <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/class_routine/delete/<?php echo $row2['class_routine_id'];?>/<?php echo $id_nivel_educativo ;?>');">
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
                                                                    $this->db->where('section_id' , $row['id_seccion']);
                                                                    $this->db->where('registro_activo' , 1);
                                                                    $routines   =   $this->db->get('class_routine')->result_array();
                                                                    foreach($routines as $row2):
                                                                    ?>
                                                                    <div class="btn-group">
                                                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                            <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                                            <span class="caret"></span>
                                                                        </button>
                                                                        <ul class="dropdown-menu">
<!--                                                                             <li>
                                                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class_routine/<?php echo $row2['class_routine_id'];?>/<?php echo $id_nivel_educativo ;?>');">
                                                                                <i class="entypo-pencil"></i>
                                                                                    <?php echo "Editar" ?>
                                                                                            </a>
                                                                     </li> -->

                                                                     <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/class_routine/delete/<?php echo $row2['class_routine_id'];?>/<?php echo $id_nivel_educativo ;?>');">
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
                                                                    $this->db->where('section_id' , $row['id_seccion']);
                                                                    $this->db->where('registro_activo' , 1);
                                                                    $routines   =   $this->db->get('class_routine')->result_array();
                                                                    foreach($routines as $row2):
                                                                    ?>
                                                                    <div class="btn-group">
                                                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                            <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?>
                                                                            <span class="caret"></span>
                                                                        </button>
                                                                        <ul class="dropdown-menu">
<!--                                                                             <li>
                                                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class_routine/<?php echo $row2['class_routine_id'];?>/<?php echo $id_nivel_educativo ;?>');">
                                                                                <i class="entypo-pencil"></i>
                                                                                    <?php echo "Editar" ?>
                                                                                            </a>
                                                                     </li> -->

                                                                     <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/class_routine/delete/<?php echo $row2['class_routine_id'];?>/<?php echo $id_nivel_educativo ;?>');">
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
                            </div>
            	<?php endforeach; ?>
                </div>
            </div>
            <!----TABLE LISTING ENDS--->
	<!----CREATION FORM STARTS---->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url().$this->session->userdata('login_type').'/class_routine/'.$id_nivel_educativo.'/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Grado" ?></label>
                                <div class="col-sm-5">
                                    <select name="class_id" class="form-control" style="width:100%;" onchange="return get_class_subject(this.value)">
                                        <option value=""><?php echo "Seleccione grado"?></option>
                                    	<?php
                                                    $this->db->where('id_nivel_educativo' , $id_nivel_educativo);
                                                    $this->db->where('registro_activo' , 1);
        				    $classes = $this->db->get('vniveleducativogrado')->result_array();
        				    foreach($classes as $row):
				?>
                                		      <option value="<?php echo $row['id_grado'];?>"><?php echo $row['nombre_grado'];?></option>
                                                <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Seccion" ?></label>
                                <div class="col-sm-5">
                                    <select name="section_id" class="form-control" style="width:100%;"
                                            id="section_selection_holder">
                                        <option value=""><?php echo "Seleccione primero el grado"?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Asignatura"?></label>
                                <div class="col-sm-5">
                                    <select name="subject_id" class="form-control" style="width:100%;" id="subject_selection_holder">
                                        <option value=""><?php echo "Seleccione primero el grado"?></option>
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
                                <label class="col-sm-3 control-label"><?php echo "Rango de Hora"?></label>
                                <div class="col-sm-9">
                                    <div class="col-sm-3" style="padding-left: 0px ! important;">
                                        <select name="hour_id" class="form-control" style="width:100%;">
                                            <option value="1">7:00 a.m - 7:45 a.m</option>
                                            <option value="2">7.45 a.m - 8:30 a.m</option>
                                            <option value="3">8:30 a.m - 9:15 a.m</option>
                                            <option value="4">9:15 a.m - 10:00 a.m</option>
                                            <option value="5">10:00 a.m - 10:45 a.m</option>
                                            <option value="6">10:45 a.m - 11:30 a.m</option>
                                            <option value="7">11:30 a.m - 12:30 p.m</option>
                                            <option value="8">12:30 p.m - 1:15 p.m</option>
                                            <option value="9">1:15 p.m - 2:00 p.m</option>
                                            <option value="10">2:00 p.m - 2:45 p.m</option>
                                            <option value="11">2:45 p.m - 3:30 p.m</option>
                                            <option value="12">3:30 p.m - 4:15 p.m</option>
                                            <option value="13">4:15 p.m - 5:00 p.m</option>
                                        </select>
                                    </div>
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

