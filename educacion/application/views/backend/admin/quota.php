<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs js-example" role="tablist">
            <li class="active" id="tab-datos-bello" >
                <a href="#datosBello" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    ANDRÉS BELLO
                </a>
            </li>
            <li id="tab-datos-guanche" class="">
                <a href="#datosGuanche" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    GUANCHE
                </a>
            </li>
            <li id="tab-datos-soublette" class="">
                <a href="#datosSoublette" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    SOUBLETTE
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <?php include 'cupos_bello.php';?>
            <?php include 'cupos_guanche.php';?>
            <?php include 'cupos_soublette.php';?>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/responsive-tabs/dist/bootstrap-responsive-tabs.js"></script>
<script>
  $(document).ready(function () {
      $(".js-example").find("li").first().addClass("active");

      $("#tab-datos-bello").click();
  });
</script>