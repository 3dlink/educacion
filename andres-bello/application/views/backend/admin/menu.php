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
                    <?php echo "Agregar Menú"?>
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
                                <th width="250"><?php echo "LUNES" ?></th>
                                <th width="250"><?php echo "MARTES" ?></th>
                                <th width="250"><?php echo "MIÉRCOLES" ?></th>
                                <th width="250"><?php echo "JUEVES" ?></th>
                                <th width="250"><?php echo "VIERNES" ?></th>
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
                                                $this->db->order_by("dia", "asc");
                                                $this->db->where('dia' , '1');
                                                $this->db->where('tipo' , $h);
                                                $this->db->where('activo' , 1);
                                                $routines   =   $this->db->get('menu_semanal')->result_array();
                                                foreach($routines as $row2):
                                                    switch ($h) {
                                                        case 1: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('desayuno', $row2['desayuno']). ' con '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                        case 2: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('almuerzo', $row2['almuerzo']). ' con '. $this->crud_model->get_type_name_by_id('contorno', $row2['contorno']). ' y '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                        case 3: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('merienda', $row2['merienda']). ' con '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                    }
                                                ?>
                                                <?php endforeach;?>
                                        </td>
                                        <td>
                                                <?php
                                                $this->db->order_by("dia", "asc");
                                                $this->db->where('dia' , '2');
                                                $this->db->where('tipo' , $h);
                                                $this->db->where('activo' , 1);
                                                $routines   =   $this->db->get('menu_semanal')->result_array();
                                                foreach($routines as $row2):
                                                    switch ($h) {
                                                        case 1: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('desayuno', $row2['desayuno']). ' con '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                        case 2: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('almuerzo', $row2['almuerzo']). ' con '. $this->crud_model->get_type_name_by_id('contorno', $row2['contorno']). ' y '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                        case 3: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('merienda', $row2['merienda']). ' con '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                    }
                                                ?>
                                                <?php endforeach;?>
                                        </td>
                                        <td>
                                                <?php
                                                $this->db->order_by("dia", "asc");
                                                $this->db->where('dia' , '3');
                                                $this->db->where('tipo' , $h);
                                                $this->db->where('activo' , 1);
                                                $routines   =   $this->db->get('menu_semanal')->result_array();
                                                foreach($routines as $row2):
                                                    switch ($h) {
                                                        case 1: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('desayuno', $row2['desayuno']). ' con '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                        case 2: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('almuerzo', $row2['almuerzo']). ' con '. $this->crud_model->get_type_name_by_id('contorno', $row2['contorno']). ' y '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                        case 3: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('merienda', $row2['merienda']). ' con '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                    }
                                                ?>
                                                <?php endforeach;?>
                                        </td>
                                        <td>
                                                <?php
                                                $this->db->order_by("dia", "asc");
                                                $this->db->where('dia' , '4');
                                                $this->db->where('tipo' , $h);
                                                $this->db->where('activo' , 1);
                                                $routines   =   $this->db->get('menu_semanal')->result_array();
                                                foreach($routines as $row2):
                                                    switch ($h) {
                                                        case 1: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('desayuno', $row2['desayuno']). ' con '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                        case 2: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('almuerzo', $row2['almuerzo']). ' con '. $this->crud_model->get_type_name_by_id('contorno', $row2['contorno']). ' y '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                        case 3: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('merienda', $row2['merienda']). ' con '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                    }
                                                ?>
                                                <?php endforeach;?>
                                        </td>
                                        <td>
                                                <?php
                                                $this->db->order_by("dia", "asc");
                                                $this->db->where('dia' , '5');
                                                $this->db->where('tipo' , $h);
                                                $this->db->where('activo' , 1);
                                                $routines   =   $this->db->get('menu_semanal')->result_array();
                                                foreach($routines as $row2):
                                                    switch ($h) {
                                                        case 1: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('desayuno', $row2['desayuno']). ' con '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                        case 2: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('almuerzo', $row2['almuerzo']). ' con '. $this->crud_model->get_type_name_by_id('contorno', $row2['contorno']). ' y '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                        case 3: ?>
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo $this->crud_model->get_type_name_by_id('merienda', $row2['merienda']). ' con '. $this->crud_model->get_type_name_by_id('bebida', $row2['bebida']);?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/menu/delete/<?php echo $row2['id_menu_semanal'];?>');">
                                                                            <i class="entypo-trash"></i>
                                                                            <?php echo "Anular" ?>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        <?php
                                                            break;
                                                    }
                                                ?>
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
                    <?php echo form_open(base_url().$this->session->userdata('login_type').'/menu/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Desde"?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="desde" data-validate="required" data-message-required="<?php echo "Requerido"?>"/>
                                    <input type="hidden" class=" form-control" name="id_escuela" value="<?php echo $this->config->item('id_school'); ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Hasta"?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="hasta" data-validate="required" data-message-required="<?php echo "Requerido"?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Día"?></label>
                                <div class="col-sm-5">
                                    <select name="dia" class="form-control" style="width:100%;" required>
                                        <option value="0" disabled selected>Seleccione...</option>
                                        <option value="1">LUNES</option>
                                        <option value="2">MARTES</option>
                                        <option value="3">MIÉRCOLES</option>
                                        <option value="4">JUEVES</option>
                                        <option value="5">VIERNES</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Tipo"?></label>
                                <div class="col-sm-5">
                                    <select name="tipo" class="form-control" style="width:100%;" onchange="return food_type_change(this.value)">
                                        <option value="0" disabled selected>Seleccione...</option>
                                        <option value="1">DESAYUNO</option>
                                        <option value="2">ALMUERZO</option>
                                        <option value="3">MERIENDA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group Desayuno" style="display: none;">
                                <label class="col-sm-3 control-label"><?php echo "Desayuno"?></label>
                                <div class="col-sm-5">
                                    <select name="desayuno" class="form-control" style="width:100%;">
                                        <option value="0" disabled selected>Seleccione...</option>
                                        <?php foreach($desayunos as $row):?>
                                                <option value="<?php echo $row['desayuno_id'];?>" >
                                                    <?php echo $row['name'];?>
                                                </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group Almuerzo" style="display: none;">
                                <label class="col-sm-3 control-label"><?php echo "Almuerzo"?></label>
                                <div class="col-sm-5">
                                    <select name="almuerzo" class="form-control" style="width:100%;">
                                        <option value="0" disabled selected>Seleccione...</option>
                                        <?php foreach($almuerzos as $row):?>
                                                <option value="<?php echo $row['almuerzo_id'];?>" >
                                                    <?php echo $row['name'];?>
                                                </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group Almuerzo" style="display: none;">
                                <label class="col-sm-3 control-label"><?php echo "Contorno"?></label>
                                <div class="col-sm-5">
                                    <select name="contorno" class="form-control" style="width:100%;">
                                        <option value="0" disabled selected>Seleccione...</option>
                                        <?php foreach($contornos as $row):?>
                                                <option value="<?php echo $row['contorno_id'];?>" >
                                                    <?php echo $row['name'];?>
                                                </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group Merienda" style="display: none;">
                                <label class="col-sm-3 control-label" ><?php echo "Merienda"?></label>
                                <div class="col-sm-5">
                                    <select name="merienda" class="form-control" style="width:100%;">
                                        <option value="0" disabled selected>Seleccione...</option>
                                        <?php foreach($meriendas as $row):?>
                                                <option value="<?php echo $row['merienda_id'];?>" >
                                                    <?php echo $row['name'];?>
                                                </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group Bebida" style="display: none;">
                                <label class="col-sm-3 control-label"><?php echo "Bebida"?></label>
                                <div class="col-sm-5">
                                    <select name="bebida" class="form-control" style="width:100%;">
                                        <option value="0" disabled selected>Seleccione...</option>
                                        <?php foreach($bebidas as $row):?>
                                                <option value="<?php echo $row['bebida_id'];?>" >
                                                    <?php echo $row['name'];?>
                                                </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo "Agregar Menú"?></button>
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

    function food_type_change(type_id) {

        switch (type_id) {
            case "1":
                jQuery('.Desayuno').show();
                jQuery('.Almuerzo').hide();
                jQuery('.Merienda').hide();
                jQuery('.Bebida').show();
                break;
            case "2":
                jQuery('.Desayuno').hide();
                jQuery('.Almuerzo').show();
                jQuery('.Merienda').hide();
                jQuery('.Bebida').show();
                break;
            case "3":
                jQuery('.Desayuno').hide();
                jQuery('.Almuerzo').hide();
                jQuery('.Merienda').show();
                jQuery('.Bebida').show();
                break;
        }

    }


</script>