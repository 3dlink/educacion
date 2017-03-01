	
    
    
    

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2.css">
	

   	<!-- Bottom Scripts -->
	<script src="<?php echo base_url(); ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-api.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/toastr.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.1.14.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/messages_es.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/fullcalendar/fullcalendar.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/fileinput.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/TableTools.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/lodash.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/responsive/js/datatables.responsive.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-mask/dist/jquery.mask.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-calendar.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-chat.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-custom-ajax.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-demo.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/form-validate.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/moment-with-locales.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-dialog.min.js"></script>


<!-- SHOW TOASTR NOTIFIVATION -->
<?php if ($this->session->flashdata('flash_message') != ""):?>

<script type="text/javascript">
	toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
</script>

<?php endif;?>

                
