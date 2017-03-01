<div class="row">
            <div class="col-md-8">
                        <div class="row">
                                    <!-- CALENDAR-->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-primary " data-collapsed="0">
                                            <div class="panel-body" style="padding:0px;">
                                                <div class="calendar-env">
                                                    <div class="calendar-body">
                                                        <div id="notice_calendar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
            </div>
	<div class="col-md-4">
		<div class="row">
            <div class="col-md-12">
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/initial_enrolled_resume.tkml">
                        <?php $query = $this->db->where('id_escuela', $this->config->item('id_school'))
                                                ->where('StatusCenso', 0 )
                                                ->get('inscripcion') ?>
                        <div class="num" data-start="0" data-end="<?php echo $query->num_rows();?>"
                        		data-postfix="" data-duration="1500" data-delay="0">0</div>
                        <h3><?php echo "Estudiantes" ?></h3>
                       <p>Total Estudiantes</p>
                   </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/teacher.tkml">
                        <?php $query_teachers = $this->db->where('id_escuela', $this->config->item('id_school'))->get('teacher') ?>
                        <div class="num" data-start="0" data-end="<?php echo $query_teachers->num_rows();?>"
                        		data-postfix="" data-duration="800" data-delay="0">0</div>
                        <h3><?php echo "Docentes" ?></h3>
                       <p>Total Docentes</p>
                   </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tile-stats tile-aqua">
                    <div class="icon"><i class="entypo-user"></i></div>
                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/parent_enrolled.tkml">
                        <?php
                            $q = $this->db->select(' COUNT(DISTINCT(CedulaDeIdentidadDelRepresentante)) AS count ')
                                            ->where('id_escuela', $this->config->item('id_school') )
                                            ->where('StatusCenso', 0 )
                                            ->from('inscripcion')
                                            ->get()->result();
                        ?>
                        <div class="num" data-start="0" data-end="<?php echo $q[0]->count; ?>" data-postfix="" data-duration="500" data-delay="0">0</div>
                        <h3><?php echo "Representantes"?></h3>
                       <p>Total Representantes</p>
                   </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tile-stats tile-blue">
                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/attendance_resume.tkml">
                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                        <?php
                            $check = array('date' => date('Y-m-d') , 'status' => '1' );
                            $query = $this->db->get_where('attendance' , $check);
                            $present_today = $query->num_rows();
                        ?>
                    <div class="num" data-start="0" data-end="<?php echo $present_today;?>" data-postfix="" data-duration="500" data-delay="0">0</div>
                    <h3><?php echo "Asistencia"?></h3>
                   <p>Total estudiantes presentes hoy</p>
                   </a>
                </div>
            </div>
    	</div>
    </div>
</div>
<script>
            $(document).ready(function() {

            var calendar = $('#notice_calendar');

                        $('#notice_calendar').fullCalendar({
                                    header: {
                                                left: 'title',
                                                right: 'today prev,next'
                                    },
                                    editable: false,
                                    firstDay: 1,
                                    height: 530,
                                    droppable: false,

                                    events: [
                                                <?php
                                                $notices    =   $this->db->get('noticeboard')->result_array();
                                                foreach($notices as $row):
                                                ?>
                                                {
                                                    title: "<?php echo $row['notice_title'];?>",
                                                    start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
                                                    end:    new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>)
                                                },
                                                <?php
                                                endforeach
                                                ?>

                                    ]
                        });
            });
</script>