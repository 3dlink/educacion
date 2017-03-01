<div style="margin-top: 30px; margin-bottom: 5px;" class="col-md-12 ">
    <button type="button" class="btn btn-primary" style="margin-right: 15px;" id="btnSaveMain">
        <i class="entypo-inbox"></i><?php echo " Guardar Datos";?>
    </button>
    <a href="javascript:;" onclick="validate_modal('<?php echo base_url().$this->session->userdata('login_type');?>/census_list/validate/<?php echo $id_censo_selected; ?>');"
        class="btn btn-success" style="margin-right: 15px;" id="btnValidateMain">
        <i class="entypo-check"></i><?php echo " Otorgar Cita";?>
    </a>
    <a href="javascript:;" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/census_list/delete/<?php echo $id_censo_selected; ?>');"
        class="btn btn-danger" id="btnDeleteMain">
        <i class="entypo-trash"></i><?php echo " Anular Datos";?>
    </a>
</div>

<?php
date_default_timezone_set('America/Caracas');

$edit_data = $this->db->get_where('censo', array('id_censo' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){

?>

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs js-example" role="tablist">
            <li class="active" id="tab-datos-representante" >
                <a href="#datosRepre" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos Representante
                </a>
            </li>
            <li id="tab-datos-generales" >
                <a href="#infoGeneral" role="tab" data-toggle="tab"><i class="entypo-users"></i>
                    Datos Generales
                </a>
            </li>
            <li id="tab-datos-madre" >
                <a href="#datosMadre" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos de la Madre
                </a>
            </li>
            <li id="tab-datos-padre" >
                <a href="#datosPadre" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos del Padre
                </a>
            </li>
            <li id="tab-datos-alumno" >
                <a href="#datosAlu" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos del Alumno
                </a>
            </li>
            <li id="tab-datos-socioeconomicos" >
                <a href="#datosSocieconomicos" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos Socioeconómicos
                </a>
            </li>
            <li id="tab-datos-salud" >
                <a href="#datosSaludAlu" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos de Salud
                </a>
            </li>
            <li id="tab-datos-otros" >
                <a href="#datosOtros" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Otros Datos de Interés
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <?php include 'form_datos_representante.php';?>
            <?php include 'form_datos_generales.php';?>
            <?php include 'form_datos_madre.php';?>
            <?php include 'form_datos_padre.php';?>
            <?php include 'form_datos_alumno.php';?>
            <?php include 'form_datos_socioeconomicos.php';?>
            <?php include 'form_datos_salud.php';?>
            <?php include 'form_datos_interes.php';?>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/censo/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_representante.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_generales.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_madre.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_padre.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_alumno.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_socioeconomicos.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_salud.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_interes.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive-tabs/dist/bootstrap-responsive-tabs.js"></script>
<script>
  $(document).ready(function () {
      $(".js-example").find("li").first().addClass("active");
      $(".js-example").bootstrapResponsiveTabs({
        minTabWidth: 180,
        maxTabWidth: 220
      });
      $("#tab-datos-representante").click();
  });
</script>
<?php
}
?>