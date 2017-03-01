<?php $toggle = false; ?>
<div class="row">
  <div class="col-md-12">
    <!--CONTROL TABS START-->
    <ul class="nav nav-tabs bordered">
      <li <?php echo ($perfil_seleccionado > 0) ? '' : 'class="active"' ;?> >
        <a href="#resumen" data-toggle="tab"><i class="entypo-menu"></i>
          <?php echo "Resumen"?>
        </a>
      </li>
      <li <?php echo ($perfil_seleccionado > 0) ? 'class="active"' : '' ;?> >
        <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
          <?php echo "Asignar opciones a perfil"?>
        </a>
      </li>
    </ul>
    <!--CONTROL TABS END-->
    <div class="tab-content">
      <!--RESUME STARTS-->
      <div <?php echo ($perfil_seleccionado > 0) ? 'class="tab-pane box"' : 'class="tab-pane box active"' ;?> id="resumen" style="padding: 5px">
        <div class="box-content">
          <!-- CENSO -->
          <div class="panel-group joined" id="accordion-censo">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-censo" href="#collapse-censo">
                    <i class="entypo-chart-pie">Módulo Censo</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-censo" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_censo">
                        <thead>
                          <tr>
                            <th><div><?php echo "id"?></div></th>
                            <th><div style="text-align: center;"><?php echo "perfil"?></div></th>
                            <th><div style="text-align: center;"><?php echo "acceder"?></div></th>
                            <th><div style="text-align: center;"><?php echo "registrar alumnos"?></div></th>
                            <th><div style="text-align: center;"><?php echo "validar cupos"?></div></th>
                            <th><div style="text-align: center;"><?php echo "aprobar cupos"?></div></th>
                            <th><div style="text-align: center;"><?php echo "editar registros"?></div></th>
                            <th><div style="text-align: center;"><?php echo "anular registros"?></div></th>
                            <th><div style="text-align: center;"><?php echo "ver reportes"?></div></th>
                            <th><div style="text-align: center;"><?php echo "descargar reportes"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_censo as $permiso_censo): ?>
                            <tr>
                              <td style="text-align: center;"><?php echo $permiso_censo['id_perfil'] ;?></td>
                              <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_censo['id_perfil']);?></td>
                              <td style="text-align: center;"><?php echo ($permiso_censo['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_censo['registrar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_censo['validar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_censo['aprobar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_censo['editar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_censo['anular'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_censo['ver'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_censo['descargar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN CENSO -->
          <!-- INSCRIPCION -->
          <div class="panel-group joined" id="accordion-inscripcion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-inscripcion" href="#collapse-inscripcion">
                    <i class="entypo-user">Módulo Inscripción</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-inscripcion" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_inscripcion">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "registra alumnos"?></div></th>
                            <th><div><?php echo "validar cupos"?></div></th>
                            <th><div><?php echo "aprobar cupos"?></div></th>
                            <th><div><?php echo "editar registros"?></div></th>
                            <th><div><?php echo "anular registros"?></div></th>
                            <th><div><?php echo "ver reportes"?></div></th>
                            <th><div><?php echo "descargar reportes"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_inscripcion as $permiso_inscripcion): ?>
                            <tr>
                              <td style="text-align: center;"><?php echo $permiso_inscripcion['id_perfil'] ;?></td>
                              <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_inscripcion['id_perfil']);?></td>
                              <td style="text-align: center;"><?php echo ($permiso_inscripcion['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_inscripcion['registrar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_inscripcion['validar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_inscripcion['aprobar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_inscripcion['editar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_inscripcion['anular'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_inscripcion['ver'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_inscripcion['descargar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN INSCRIPCION -->
          <!-- C y E EDUCACION INICIAL -->
          <div class="panel-group joined" id="accordion-ce-inicial">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-ce-inicial" href="#collapse-ce-inicial">
                    <i class="entypo-flow-tree"> Módulo Control de Estudios y Evaluación Educación Inicial</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-ce-inicial" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_incial">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "elaborar proyecto"?></div></th>
                            <th><div><?php echo "editar proyecto"?></div></th>
                            <th><div><?php echo "anular proyecto"?></div></th>
                            <th><div><?php echo "asistencia"?></div></th>
                            <th><div><?php echo "grado"?></div></th>
                            <th><div><?php echo "secciones"?></div></th>
                            <th><div><?php echo "docentes por grado"?></div></th>
                            <th><div><?php echo "evaluaciones"?></div></th>
                            <th><div><?php echo "calificar"?></div></th>
                            <th><div><?php echo "calificaciones"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_c_e_inicial as $permiso_c_e_inicial): ?>
                            <tr>
                              <td style="text-align: center;"><?php echo $permiso_c_e_inicial['id_perfil'] ;?></td>
                              <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_c_e_inicial['id_perfil']);?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['elaborar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['editar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['anular'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['asistencia'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['grado'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['secciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['docentes'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['evaluaciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['calificar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                              <td style="text-align: center;"><?php echo ($permiso_c_e_inicial['calificaciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN C y E EDUCACION INICIAL -->
          <!-- C y E EDUCACION PRIMARIA -->
          <div class="panel-group joined" id="accordion-ce-primaria">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-ce-primaria" href="#collapse-ce-primaria">
                    <i class="entypo-flow-tree"> Módulo Control de Estudios y Evaluación Educación Primaria</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-ce-primaria" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_primaria">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "elaborar proyecto"?></div></th>
                            <th><div><?php echo "editar proyecto"?></div></th>
                            <th><div><?php echo "anular proyecto"?></div></th>
                            <th><div><?php echo "consultar proyecto"?></div></th>
                            <th><div><?php echo "horario"?></div></th>
                            <th><div><?php echo "asistencia"?></div></th>
                            <th><div><?php echo "grado"?></div></th>
                            <th><div><?php echo "secciones"?></div></th>
                            <th><div><?php echo "docentes por grado"?></div></th>
                            <th><div><?php echo "evaluación"?></div></th>
                            <th><div><?php echo "evaluaciones"?></div></th>
                            <th><div><?php echo "calificar"?></div></th>
                            <th><div><?php echo "calificaciones"?></div></th>
                            <th><div><?php echo "editar evaluaciones"?></div></th>
                            <th><div><?php echo "anular evaluaciones"?></div></th>
                            <th><div><?php echo "consultar evaluaciones"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_c_e_primaria as $permiso_c_e_primaria): ?>
                            <tr>
                            <td style="text-align: center;"><?php echo $permiso_c_e_primaria['id_perfil'] ;?></td>
                            <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_c_e_primaria['id_perfil']);?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['elaborar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['editar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['anular'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['horario'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['asistencia'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['grado'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['secciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['docentes'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['plan'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['evaluaciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['calificar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['calificaciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['editar_calificaciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['editar_evaluacion'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['anular_evaluacion'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_primaria['consultar_evaluacion'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN C y E EDUCACION PRIMARIA -->
          <!-- C y E EDUCACION MEDIA -->
          <div class="panel-group joined" id="accordion-ce-media">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-ce-media" href="#collapse-ce-media">
                    <i class="entypo-flow-tree"> Módulo Control de Estudios y Evaluación Educación Media General</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-ce-media" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_media">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "elaborar plan"?></div></th>
                            <th><div><?php echo "editar plan"?></div></th>
                            <th><div><?php echo "anular plan"?></div></th>
                            <th><div><?php echo "consultar plan"?></div></th>
                            <th><div><?php echo "horario"?></div></th>
                            <th><div><?php echo "asistencia"?></div></th>
                            <th><div><?php echo "grado"?></div></th>
                            <th><div><?php echo "secciones"?></div></th>
                            <th><div><?php echo "docentes por grado"?></div></th>
                            <th><div><?php echo "plan de evaluación"?></div></th>
                            <th><div><?php echo "evaluaciones"?></div></th>
                            <th><div><?php echo "calificar"?></div></th>
                            <th><div><?php echo "calificaciones"?></div></th>
                            <th><div><?php echo "editar evaluaciones"?></div></th>
                            <th><div><?php echo "anular evaluaciones"?></div></th>
                            <th><div><?php echo "consultar evaluaciones"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_c_e_media as $permiso_c_e_media): ?>
                            <tr>
                            <td style="text-align: center;"><?php echo $permiso_c_e_media['id_perfil'] ;?></td>
                            <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_c_e_media['id_perfil']);?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['elaborar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['editar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['anular'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['horario'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['asistencia'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['grado'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['secciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['docentes'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['plan'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['evaluaciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['calificar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['calificaciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['editar_calificaciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['editar_evaluacion'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['anular_evaluacion'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_c_e_media['consultar_evaluacion'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN C y E EDUCACION MEDIA -->
          <!-- NUTRICION -->
          <div class="panel-group joined" id="accordion-nutricion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-nutricion" href="#collapse-nutricion">
                    <i class="entypo-user-add"> Módulo Nutrición</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-nutricion" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_nutricion">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "elaborar menú"?></div></th>
                            <th><div><?php echo "editar menú"?></div></th>
                            <th><div><?php echo "anular menú"?></div></th>
                            <th><div><?php echo "consultar menú"?></div></th>
                            <th><div><?php echo "revisar menú"?></div></th>
                            <th><div><?php echo "aprobar menú"?></div></th>
                            <th><div><?php echo "elaborar diagnóstico"?></div></th>
                            <th><div><?php echo "editar diagnóstico"?></div></th>
                            <th><div><?php echo "anular diagnóstico"?></div></th>
                            <th><div><?php echo "consultar diagnóstico"?></div></th>
                            <th><div><?php echo "revisar diagnóstico"?></div></th>
                            <th><div><?php echo "aprobar diagnóstico"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_nutricion as $permiso_nutricion): ?>
                            <tr>
                            <td style="text-align: center;"><?php echo $permiso_nutricion['id_perfil'] ;?></td>
                            <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_nutricion['id_perfil']);?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['elaborar_menu'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['editar_menu'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['anular_menu'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['consultar_menu'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['revisar_menu'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['aprobar_menu'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['elaborar_diagnostico'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['editar_diagnostico'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['anular_diagnostico'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['consultar_diagnostico'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['revisar_diagnostico'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_nutricion['aprobar_diagnostico'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN NUTRICION -->
          <!-- UPE -->
          <div class="panel-group joined" id="accordion-upe">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-upe" href="#collapse-upe">
                    <i class="entypo-user-add"> Módulo UPE</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-upe" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_upe">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "elaborar"?></div></th>
                            <th><div><?php echo "editar"?></div></th>
                            <th><div><?php echo "anular"?></div></th>
                            <th><div><?php echo "consultar"?></div></th>
                            <th><div><?php echo "revisar"?></div></th>
                            <th><div><?php echo "aprobar"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_upe as $permiso_upe): ?>
                            <tr>
                            <td style="text-align: center;"><?php echo $permiso_upe['id_perfil'] ;?></td>
                            <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_upe['id_perfil']);?></td>
                            <td style="text-align: center;"><?php echo ($permiso_upe['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_upe['elaborar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_upe['editar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_upe['anular'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_upe['consultar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_upe['revisar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_upe['aprobar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN UPE -->
          <!-- CARNETIZACION -->
          <div class="panel-group joined" id="accordion-carnet">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-carnet" href="#collapse-carnet">
                    <i class="entypo-vcard"> Módulo Carnetización</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-carnet" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_carnet">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "elaborar"?></div></th>
                            <th><div><?php echo "editar"?></div></th>
                            <th><div><?php echo "anular"?></div></th>
                            <th><div><?php echo "consultar"?></div></th>
                            <th><div><?php echo "imprimir"?></div></th>
                            <th><div><?php echo "enviar"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_carnet as $permiso_carnet): ?>
                            <tr>
                            <td style="text-align: center;"><?php echo $permiso_carnet['id_perfil'] ;?></td>
                            <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_carnet['id_perfil']);?></td>
                            <td style="text-align: center;"><?php echo ($permiso_carnet['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_carnet['elaborar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_carnet['editar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_carnet['anular'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_carnet['consultar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_carnet['revisar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_carnet['aprobar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN CARNETIZACION -->
          <!-- CONSTANCIAS -->
          <div class="panel-group joined" id="accordion-constancias">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-constancias" href="#collapse-constancias">
                    <i class="entypo-docs"> Módulo Constancias</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-constancias" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_constancias">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "elaborar"?></div></th>
                            <th><div><?php echo "editar"?></div></th>
                            <th><div><?php echo "anular"?></div></th>
                            <th><div><?php echo "consultar"?></div></th>
                            <th><div><?php echo "imprimir"?></div></th>
                            <th><div><?php echo "enviar"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_constancias as $permiso_constancias): ?>
                            <tr>
                            <td style="text-align: center;"><?php echo $permiso_constancias['id_perfil'] ;?></td>
                            <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_constancias['id_perfil']);?></td>
                            <td style="text-align: center;"><?php echo ($permiso_constancias['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_constancias['elaborar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_constancias['editar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_constancias['anular'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_constancias['consultar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_constancias['revisar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_constancias['aprobar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN CONSTANCIAS -->
          <!-- NOTIFICACIONES -->
          <div class="panel-group joined" id="accordion-notificaciones">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-notificaciones" href="#collapse-notificaciones">
                    <i class="entypo-mobile"> Módulo Notifiaciones</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-notificaciones" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_notificaciones">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "enviar"?></div></th>
                            <th><div><?php echo "consultar"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_notificaciones as $permiso_notificaciones): ?>
                            <tr>
                            <td style="text-align: center;"><?php echo $permiso_notificaciones['id_perfil'] ;?></td>
                            <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_notificaciones['id_perfil']);?></td>
                            <td style="text-align: center;"><?php echo ($permiso_notificaciones['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_notificaciones['enviar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_notificaciones['consultar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN NOTIFICACIONES -->
          <!-- REPORTES -->
          <div class="panel-group joined" id="accordion-reportes">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-reportes" href="#collapse-reportes">
                    <i class="entypo-doc-text"> Módulo Reportes</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-reportes" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_reportes">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "descargar"?></div></th>
                            <th><div><?php echo "consultar"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_reportes as $permiso_reportes): ?>
                            <tr>
                            <td style="text-align: center;"><?php echo $permiso_reportes['id_perfil'] ;?></td>
                            <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_reportes['id_perfil']);?></td>
                            <td style="text-align: center;"><?php echo ($permiso_reportes['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_reportes['consultar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_reportes['descargar'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN REPORTES -->
          <!-- AJUSTES -->
          <div class="panel-group joined" id="accordion-ajustes">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion-ajustes" href="#collapse-ajustes">
                    <i class="entypo-lifebuoy"> Módulo Ajustes</i>
                  </a>
                </h4>
              </div>
              <div id="collapse-ajustes" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="row" >
                      <table  class="table table-bordered datatable" id="table_export_ajustes">
                        <thead>
                          <tr>
                            <th><div><?php echo "id "?></div></th>
                            <th><div><?php echo "perfil"?></div></th>
                            <th><div><?php echo "acceder"?></div></th>
                            <th><div><?php echo "usuarios"?></div></th>
                            <th><div><?php echo "perfiles"?></div></th>
                            <th><div><?php echo "opciones perfil"?></div></th>
                            <th><div><?php echo "docentes"?></div></th>
                            <th><div><?php echo "configuraciones"?></div></th>
                            <th><div><?php echo "ajustes"?></div></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($permisos_ajustes as $permiso_ajustes): ?>
                            <tr>
                            <td style="text-align: center;"><?php echo $permiso_ajustes['id_perfil'] ;?></td>
                            <td style="text-align: center;"><?php echo $this->crud_model->get_profile_description_by_id($permiso_ajustes['id_perfil']);?></td>
                            <td style="text-align: center;"><?php echo ($permiso_ajustes['acceder'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_ajustes['editar_usuarios'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_ajustes['editar_perfiles'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_ajustes['editar_opciones_perfil'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_ajustes['editar_docentes'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_ajustes['configuraciones'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            <td style="text-align: center;"><?php echo ($permiso_ajustes['ajustes'] != 0) ?  '<i class="fa fa-check" style = "color: green; "></i>' : '<i class="fa fa-times" style = "color: red; "></i>' ;?></td>
                            </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN AJUSTES -->
        </div>
      </div>
      <!--RESUME ENDS-->
      <!--CREATION FORM STARTS-->
      <div <?php echo ($perfil_seleccionado > 0) ? 'class="tab-pane box active"' : 'class="tab-pane box "' ;?> id="add" style="padding: 5px">
        <div class="box-content">
          <?php echo form_open(base_url().$this->session->userdata('login_type').'/profile_options/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label"><?php echo "Perfil"?></label>
              <div class="col-sm-7">
                <select name="id_perfil" class="form-control" onchange="mostrarOpciones(this.value);">
                  <option value="0" disabled selected><?php echo "Seleccione..."?></option>
                                  <?php
                                  $perfiles = $this->db->get('perfil')->result_array();
                                  foreach($perfiles as $row_perfiles):
                                  ?>
                                      <option value="<?php echo $row_perfiles['id_perfil']; ?>" <?php echo ($perfil_seleccionado == $row_perfiles['id_perfil']) ? 'selected' : '' ;?> >
                                          <?php echo $row_perfiles['nombre'];?>
                                      </option>
                                  <?php
                                  endforeach;
                                  ?>
                            </select>
              </div>
            </div>
            <!-- CENSO -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-censo-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-censo-asignar" href="#collapse-censo-asignar">
                      <i class="entypo-chart-pie">Módulo Censo</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-censo-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-censo" name="acceder-censo" value="0" >
                                      <label><input type="checkbox" id="acceder-censo" name="acceder-censo" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_censo_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="registrar-censo" name="registrar-censo" value="0" >
                                      <label><input type="checkbox" id="registrar-censo" name="registrar-censo" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_censo_seleccionado[0]['registrar'] == 1) ? 'checked' : ''; ?> >Registrar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="validar" name="validar-censo" value="0" >
                                      <label><input type="checkbox" id="validar-censo" name="validar-censo" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_censo_seleccionado[0]['validar'] == 1) ? 'checked' : ''; ?> >Validar Cupo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="aprobar-censo" name="aprobar-censo" value="0" >
                                      <label><input type="checkbox" id="aprobar-censo" name="aprobar-censo" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_censo_seleccionado[0]['aprobar'] == 1) ? 'checked' : ''; ?> >Aprobar Cupo</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="editar-censo" name="editar-censo" value="0" >
                                      <label><input type="checkbox" id="editar-censo" name="editar-censo" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_censo_seleccionado[0]['editar'] == 1) ? 'checked' : ''; ?> >Editar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="anular-censo" name="anular-censo" value="0" >
                                      <label><input type="checkbox" id="anular-censo" name="anular-censo" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_censo_seleccionado[0]['anular'] == 1) ? 'checked' : ''; ?> >Anular</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="ver-censo" name="ver-censo" value="0" >
                                      <label><input type="checkbox" id="ver-censo" name="ver-censo" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_censo_seleccionado[0]['ver'] == 1) ? 'checked' : ''; ?> >Ver Reportes</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="descargar-censo" name="descargar-censo" value="0" >
                                      <label><input type="checkbox" id="descargar-censo" name="descargar-censo" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_censo_seleccionado[0]['descargar'] == 1) ? 'checked' : ''; ?> >Descargar Reportes</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN CENSO -->
            <!-- INSCRIPCION -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-inscripcion-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-inscripcion-asignar" href="#collapse-inscripcion-asignar">
                      <i class="entypo-user">Módulo Inscripción</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-inscripcion-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-inscripcion" name="acceder-inscripcion" value="0" >
                                      <label><input type="checkbox" id="acceder-inscripcion" name="acceder-inscripcion" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_inscripcion_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="registrar-inscripcion" name="registrar-inscripcion" value="0" >
                                      <label><input type="checkbox" id="registrar-inscripcion" name="registrar-inscripcion" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_inscripcion_seleccionado[0]['registrar'] == 1) ? 'checked' : ''; ?> >Registrar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="validar-inscripcion" name="validar-inscripcion" value="0" >
                                      <label><input type="checkbox" id="validar-inscripcion" name="validar-inscripcion" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_inscripcion_seleccionado[0]['validar'] == 1) ? 'checked' : ''; ?> >Validar Cupo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="aprobar-inscripcion" name="aprobar-inscripcion" value="0" >
                                      <label><input type="checkbox" id="aprobar-inscripcion" name="aprobar-inscripcion" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_inscripcion_seleccionado[0]['aprobar'] == 1) ? 'checked' : ''; ?> >Aprobar Cupo</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="editar-inscripcion" name="editar-inscripcion" value="0" >
                                      <label><input type="checkbox" id="editar-inscripcion" name="editar-inscripcion" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_inscripcion_seleccionado[0]['editar'] == 1) ? 'checked' : ''; ?> >Editar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="anular-inscripcion" name="anular-inscripcion" value="0" >
                                      <label><input type="checkbox" id="anular-inscripcion" name="anular-inscripcion" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_inscripcion_seleccionado[0]['anular'] == 1) ? 'checked' : ''; ?> >Anular</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="ver-inscripcion" name="ver-inscripcion" value="0" >
                                      <label><input type="checkbox" id="ver-inscripcion" name="ver-inscripcion" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_inscripcion_seleccionado[0]['ver'] == 1) ? 'checked' : ''; ?> >Ver Reportes</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="descargar-inscripcion" name="descargar-inscripcion" value="0" >
                                      <label><input type="checkbox" id="descargar-inscripcion" name="descargar-inscripcion" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_inscripcion_seleccionado[0]['descargar'] == 1) ? 'checked' : ''; ?> >Descargar Reportes</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN INSCRIPCION -->
            <!-- C y E EDUCACION INICIAL -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-ce-inicial-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-ce-inicial-asignar" href="#collapse-ce-inicial-asignar">
                      <i class="entypo-flow-tree"> Módulo Control de Estudios y Evaluación Educación Inicial</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-ce-inicial-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-inicial" name="acceder-inicial" value="0" >
                                      <label><input type="checkbox" id="acceder-inicial" name="acceder-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="elaborar-inicial" name="elaborar-inicial" value="0" >
                                      <label><input type="checkbox" id="elaborar-inicial" name="elaborar-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['elaborar'] == 1) ? 'checked' : ''; ?> >Elaborar Proyecto</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="editar-inicial" name="editar-inicial" value="0" >
                                      <label><input type="checkbox" id="editar-inicial" name="editar-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['editar'] == 1) ? 'checked' : ''; ?> >Editar Proyecto</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="anular-inicial" name="anular-inicial" value="0" >
                                      <label><input type="checkbox" id="anular-inicial" name="anular-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['anular'] == 1) ? 'checked' : ''; ?> >Anular Proyecto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="asistencia-inicial" name="asistencia-inicial" value="0" >
                                      <label><input type="checkbox" id="asistencia-inicial" name="asistencia-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['asistencia'] == 1) ? 'checked' : ''; ?> >Asistencia</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="grado-inicial" name="grado-inicial" value="0" >
                                      <label><input type="checkbox" id="grado-inicial" name="grado-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['grado'] == 1) ? 'checked' : ''; ?> >Grado</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="seccion-inicial" name="seccion-inicial" value="0" >
                                      <label><input type="checkbox" id="seccion-inicial" name="seccion-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['secciones'] == 1) ? 'checked' : ''; ?> >Secciones</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="docentes-inicial" name="docentes-inicial" value="0" >
                                      <label><input type="checkbox" id="docentes-inicial" name="docentes-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['docentes'] == 1) ? 'checked' : ''; ?> >Docentes por Grado</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="evaluacion-inicial" name="evaluacion-inicial" value="0" >
                                      <label><input type="checkbox" id="evaluacion-inicial" name="evaluacion-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['evaluaciones'] == 1) ? 'checked' : ''; ?> >Evaluaciones</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="calificar-inicial" name="calificar-inicial" value="0" >
                                      <label><input type="checkbox" id="calificar-inicial" name="calificar-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['calificar'] == 1) ? 'checked' : ''; ?> >Calificar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="calificaciones-inicial" name="calificaciones-inicial" value="0" >
                                      <label><input type="checkbox" id="calificaciones-inicial" name="calificaciones-inicial" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_inicial_seleccionado[0]['calificaciones'] == 1) ? 'checked' : ''; ?> >Calificaciones</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN C y E EDUCACION INICIAL -->
            <!-- C y E EDUCACION PRIMARIA -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-ce-primaria-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-ce-primaria-asignar" href="#collapse-ce-primaria-asignar">
                      <i class="entypo-flow-tree"> Módulo Control de Estudios y Evaluación Educación Primaria</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-ce-primaria-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-primaria" name="acceder-primaria" value="0" >
                                      <label><input type="checkbox" id="acceder-primaria" name="acceder-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="proyecto-primaria" name="proyecto-primaria" value="0" >
                                      <label><input type="checkbox" id="proyecto-primaria" name="proyecto-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['elaborar'] == 1) ? 'checked' : ''; ?> >Elaborar Proyecto</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="editar-proyecto-primaria" name="editar-proyecto-primaria" value="0" >
                                      <label><input type="checkbox" id="editar-proyecto-primaria" name="editar-proyecto-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['editar'] == 1) ? 'checked' : ''; ?> >Editar Proyecto</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="consultar-proyecto-primaria" name="consultar-proyecto-primaria" value="0" >
                                      <label><input type="checkbox" id="consultar-proyecto-primaria" name="consultar-proyecto-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['editar'] == 1) ? 'checked' : ''; ?> >Consultar Proyecto</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="anular-proyecto-primaria" name="anular-proyecto-primaria" value="0" >
                                      <label><input type="checkbox" id="anular-proyecto-primaria" name="anular-proyecto-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['anular'] == 1) ? 'checked' : ''; ?> >Anular Proyecto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="horario-primaria" name="horario-primaria" value="0" >
                                      <label><input type="checkbox" id="horario-primaria" name="horario-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['horario'] == 1) ? 'checked' : ''; ?> >Horario</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="asistencia-primaria" name="asistencia-primaria" value="0" >
                                      <label><input type="checkbox" id="asistencia-primaria" name="asistencia-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['asistencia'] == 1) ? 'checked' : ''; ?> >Asistencia</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="grado-primaria" name="grado-primaria" value="0" >
                                      <label><input type="checkbox" id="grado-primaria" name="grado-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['grado'] == 1) ? 'checked' : ''; ?> >Grado</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="secciones-primaria" name="secciones-primaria" value="0" >
                                      <label><input type="checkbox" id="secciones-primaria" name="secciones-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['secciones'] == 1) ? 'checked' : ''; ?> >Secciones</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="docentes-primaria" name="docentes-primaria" value="0" >
                                      <label><input type="checkbox" id="docentes-primaria" name="docentes-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['docentes'] == 1) ? 'checked' : ''; ?> >Docentes por Grado</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="evaluaciones-primaria" name="evaluaciones-primaria" value="0" >
                                      <label><input type="checkbox" id="evaluaciones-primaria" name="evaluaciones-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['evaluaciones'] == 1) ? 'checked' : ''; ?> >Evaluaciones</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="calificar-primaria" name="calificar-primaria" value="0" >
                                      <label><input type="checkbox" id="calificar-primaria" name="calificar-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['calificar'] == 1) ? 'checked' : ''; ?> >Calificar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="calificaciones-primaria" name="calificaciones-primaria" value="0" >
                                      <label><input type="checkbox" id="calificaciones-primaria" name="calificaciones-primaria" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_primaria_seleccionado[0]['calificaciones'] == 1) ? 'checked' : ''; ?> >Calificaciones</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN C y E EDUCACION PRIMARIA -->
            <!-- C y E EDUCACION MEDIA -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-ce-media-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-ce-media-asignar" href="#collapse-ce-media-asignar">
                      <i class="entypo-flow-tree"> Módulo Control de Estudios y Evaluación Educación Media General</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-ce-media-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-media" name="acceder-media" value="0" >
                                      <label><input type="checkbox" id="acceder-media" name="acceder-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="proyecto-media" name="proyecto-media" value="0" >
                                      <label><input type="checkbox" id="proyecto-media" name="proyecto-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['elaborar'] == 1) ? 'checked' : ''; ?> >Elaborar Proyecto</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="editar-proyecto-media" name="editar-proyecto-media" value="0" >
                                      <label><input type="checkbox" id="editar-proyecto-media" name="editar-proyecto-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['editar'] == 1) ? 'checked' : ''; ?> >Editar Proyecto</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="consultar-proyecto-media" name="consultar-proyecto-media" value="0" >
                                      <label><input type="checkbox" id="consultar-proyecto-media" name="consultar-proyecto-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['editar'] == 1) ? 'checked' : ''; ?> >Consultar Proyecto</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="anular-proyecto-media" name="anular-proyecto-media" value="0" >
                                      <label><input type="checkbox" id="anular-proyecto-media" name="anular-proyecto-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['anular'] == 1) ? 'checked' : ''; ?> >Anular Proyecto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="horario-media" name="horario-media" value="0" >
                                      <label><input type="checkbox" id="horario-media" name="horario-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['horario'] == 1) ? 'checked' : ''; ?> >Horario</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="asistencia-media" name="asistencia-media" value="0" >
                                      <label><input type="checkbox" id="asistencia-media" name="asistencia-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['asistencia'] == 1) ? 'checked' : ''; ?> >Asistencia</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="grado-media" name="grado-media" value="0" >
                                      <label><input type="checkbox" id="grado-media" name="grado-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['grado'] == 1) ? 'checked' : ''; ?> >Grado</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="secciones-media" name="secciones-media" value="0" >
                                      <label><input type="checkbox" id="secciones-media" name="secciones-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['secciones'] == 1) ? 'checked' : ''; ?> >Secciones</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="docentes-media" name="docentes-media" value="0" >
                                      <label><input type="checkbox" id="docentes-media" name="docentes-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['docentes'] == 1) ? 'checked' : ''; ?> >Docentes por Grado</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="evaluaciones-media" name="evaluaciones-media" value="0" >
                                      <label><input type="checkbox" id="evaluaciones-media" name="evaluaciones-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['evaluaciones'] == 1) ? 'checked' : ''; ?> >Evaluaciones</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="calificar-media" name="calificar-media" value="0" >
                                      <label><input type="checkbox" id="calificar-media" name="calificar-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['calificar'] == 1) ? 'checked' : ''; ?> >Calificar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="calificaciones-media" name="calificaciones-media" value="0" >
                                      <label><input type="checkbox" id="calificaciones-media" name="calificaciones-media" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_c_e_media_seleccionado[0]['calificaciones'] == 1) ? 'checked' : ''; ?> >Calificaciones</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN C y E EDUCACION MEDIA -->
            <!-- NUTRICION -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-nutricion-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-nutricion-asignar" href="#collapse-nutricion-asignar">
                      <i class="entypo-user-add"> Módulo Nutrición</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-nutricion-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-nutricion" name="acceder-nutricion" value="0" >
                                      <label><input type="checkbox" id="acceder-nutricion" name="acceder-nutricion" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="elaborar-menu" name="elaborar-menu" value="0" >
                                      <label><input type="checkbox" id="elaborar-menu" name="elaborar-menu" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['elaborar_menu'] == 1) ? 'checked' : ''; ?> >Elaborar Menú</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="editar-menu" name="editar-menu" value="0" >
                                      <label><input type="checkbox" id="editar-menu" name="editar-menu" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['editar_menu'] == 1) ? 'checked' : ''; ?> >Editar Menú</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="anular-menu" name="anular-menu" value="0" >
                                      <label><input type="checkbox" id="anular-menu" name="anular-menu" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['anular_menu'] == 1) ? 'checked' : ''; ?> >Anular Menú</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="consultar-menu" name="consultar-menu" value="0" >
                                      <label><input type="checkbox" id="consultar-menu" name="consultar-menu" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['consultar_menu'] == 1) ? 'checked' : ''; ?> >Consultar Menú</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="revisar-menu" name="revisar-menu" value="0" >
                                      <label><input type="checkbox" id="revisar-menu" name="revisar-menu" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['revisar_menu'] == 1) ? 'checked' : ''; ?> >Revisar Menú</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="aprobar-menu" name="aprobar-menu" value="0" >
                                      <label><input type="checkbox" id="aprobar-menu" name="aprobar-menu" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['aprobar_menu'] == 1) ? 'checked' : ''; ?> >Aprobar Menú</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="elaborar-diagnostico" name="elaborar-diagnostico" value="0" >
                                      <label><input type="checkbox" id="elaborar-diagnostico" name="elaborar-diagnostico" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['elaborar_diagnostico'] == 1) ? 'checked' : ''; ?> >Elaborar Diagnóstico</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="editar-diagnostico" name="editar-diagnostico" value="0" >
                                      <label><input type="checkbox" id="editar-diagnostico" name="editar-diagnostico" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['editar_diagnostico'] == 1) ? 'checked' : ''; ?> >Editar Diagnóstico</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="anular-diagnostico" name="anular-diagnostico" value="0" >
                                      <label><input type="checkbox" id="anular-diagnostico" name="anular-diagnostico" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['anular_diagnostico'] == 1) ? 'checked' : ''; ?> >Anular Diagnóstico</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="consultar-diagnostico" name="consultar-diagnostico" value="0" >
                                      <label><input type="checkbox" id="consultar-diagnostico" name="consultar-diagnostico" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['consultar_diagnostico'] == 1) ? 'checked' : ''; ?> >Consultar Diagnóstico</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="revisar-diagnostico" name="revisar-diagnostico" value="0" >
                                      <label><input type="checkbox" id="revisar-diagnostico" name="revisar-diagnostico" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['revisar_diagnostico'] == 1) ? 'checked' : ''; ?> >Revisar Diagnóstico</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="aprobar-diagnostico" name="aprobar-diagnostico" value="0" >
                                      <label><input type="checkbox" id="aprobar-diagnostico" name="aprobar-diagnostico" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_nutricion_seleccionado[0]['aprobar_diagnostico'] == 1) ? 'checked' : ''; ?> >Aprobar Diagnóstico</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN NUTRICION -->
            <!-- UPE -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-upe-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-upe-asignar" href="#collapse-upe-asignar">
                      <i class="entypo-user-add"> Módulo UPE</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-upe-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-upe" name="acceder-upe" value="0" >
                                      <label><input type="checkbox" id="acceder-upe" name="acceder-upe" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_upe_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="elaborar-upe" name="elaborar-upe" value="0" >
                                      <label><input type="checkbox" id="elaborar-upe" name="elaborar-upe" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_upe_seleccionado[0]['elaborar'] == 1) ? 'checked' : ''; ?> >Elaborar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="editar-upe" name="editar-upe" value="0" >
                                      <label><input type="checkbox" id="editar-upe" name="editar-upe" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_upe_seleccionado[0]['editar'] == 1) ? 'checked' : ''; ?> >Editar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="anular-upe" name="anular-upe" value="0" >
                                      <label><input type="checkbox" id="anular-upe" name="anular-upe" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_upe_seleccionado[0]['anular'] == 1) ? 'checked' : ''; ?> >Anular</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="consultar-upe" name="consultar-upe" value="0" >
                                      <label><input type="checkbox" id="consultar-upe" name="consultar-upe" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_upe_seleccionado[0]['consultar'] == 1) ? 'checked' : ''; ?> >Consultar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="revisar-upe" name="revisar-upe" value="0" >
                                      <label><input type="checkbox" id="revisar-upe" name="revisar-upe" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_upe_seleccionado[0]['revisar'] == 1) ? 'checked' : ''; ?> >Revisar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="aprobar-upe" name="aprobar-upe" value="0" >
                                      <label><input type="checkbox" id="aprobar-upe" name="aprobar-upe" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_upe_seleccionado[0]['aprobar'] == 1) ? 'checked' : ''; ?> >Aprobar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN UPE -->
            <!-- CARNETIZACION -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-carnet-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-carnet-asignar" href="#collapse-carnet-asignar">
                      <i class="entypo-vcard"> Módulo Carnetización</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-carnet-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-carnet" name="acceder-carnet" value="0" >
                                      <label><input type="checkbox" id="acceder-carnet" name="acceder-carnet" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_carnet_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="elaborar-carnet" name="elaborar-carnet" value="0" >
                                      <label><input type="checkbox" id="elaborar-carnet" name="elaborar-carnet" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_carnet_seleccionado[0]['elaborar'] == 1) ? 'checked' : ''; ?> >Elaborar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="editar-carnet" name="editar-carnet" value="0" >
                                      <label><input type="checkbox" id="editar-carnet" name="editar-carnet" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_carnet_seleccionado[0]['editar'] == 1) ? 'checked' : ''; ?> >Editar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="anular-carnet" name="anular-carnet" value="0" >
                                      <label><input type="checkbox" id="anular-carnet" name="anular-carnet" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_carnet_seleccionado[0]['anular'] == 1) ? 'checked' : ''; ?> >Anular</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="consultar-carnet" name="consultar-carnet" value="0" >
                                      <label><input type="checkbox" id="consultar-carnet" name="consultar-carnet" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_carnet_seleccionado[0]['consultar'] == 1) ? 'checked' : ''; ?> >Consultar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="imprimir-carnet" name="imprimir-carnet" value="0" >
                                      <label><input type="checkbox" id="imprimir-carnet" name="imprimir-carnet" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_carnet_seleccionado[0]['consultar'] == 1) ? 'checked' : ''; ?> >Imprimir</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="enviar-carnet" name="enviar-carnet" value="0" >
                                      <label><input type="checkbox" id="enviar-carnet" name="enviar-carnet" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_carnet_seleccionado[0]['consultar'] == 1) ? 'checked' : ''; ?> >Enviar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN CARNETIZACION -->
            <!-- CONSTANCIAS -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-constancias-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-constancias-asignar" href="#collapse-constancias-asignar">
                      <i class="entypo-docs"> Módulo Constancias</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-constancias-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-constancias" name="acceder-constancias" value="0" >
                                      <label><input type="checkbox" id="acceder-constancias" name="acceder-constancias" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_constancias_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="elaborar-constancias" name="elaborar-constancias" value="0" >
                                      <label><input type="checkbox" id="elaborar-constancias" name="elaborar-constancias" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_constancias_seleccionado[0]['elaborar'] == 1) ? 'checked' : ''; ?> >Elaborar</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="editar-constancias" name="editar-constancias" value="0" >
                                      <label><input type="checkbox" id="editar-constancias" name="editar-constancias" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_constancias_seleccionado[0]['editar'] == 1) ? 'checked' : ''; ?> >Editar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="anular-constancias" name="anular-constancias" value="0" >
                                      <label><input type="checkbox" id="anular-constancias" name="anular-constancias" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_constancias_seleccionado[0]['anular'] == 1) ? 'checked' : ''; ?> >Anular</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="consultar-constancias" name="consultar-constancias" value="0" >
                                      <label><input type="checkbox" id="consultar-constancias" name="consultar-constancias" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_constancias_seleccionado[0]['consultar'] == 1) ? 'checked' : ''; ?> >Consultar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="imprimir-constancias" name="imprimir-constancias" value="0" >
                                      <label><input type="checkbox" id="imprimir-constancias" name="imprimir-constancias" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_constancias_seleccionado[0]['consultar'] == 1) ? 'checked' : ''; ?> >Imprimir</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="enviar-constancias" name="enviar-constancias" value="0" >
                                      <label><input type="checkbox" id="enviar-constancias" name="enviar-carnet" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_constancias_seleccionado[0]['consultar'] == 1) ? 'checked' : ''; ?> >Enviar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN CONSTANCIAS -->
            <!-- NOTIFICACIONES -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-notificaciones-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-notificaciones-asignar" href="#collapse-notificaciones-asignar">
                      <i class="entypo-mobile"> Módulo Notifiaciones</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-notificaciones-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-notificaciones" name="acceder-notificaciones" value="0" >
                                      <label><input type="checkbox" id="acceder-notificaciones" name="acceder-notificaciones" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_notificaciones_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="enviar-notificaciones" name="enviar-notificaciones" value="0" >
                                      <label><input type="checkbox" id="enviar-notificaciones" name="enviar-notificaciones" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_notificaciones_seleccionado[0]['enviar'] == 1) ? 'checked' : ''; ?> >Enviar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="consultar-notificaciones" name="consultar-notificaciones" value="0" >
                                      <label><input type="checkbox" id="consultar-notificaciones" name="consultar-notificaciones" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_notificaciones_seleccionado[0]['consultar'] == 1) ? 'checked' : ''; ?> >Consultar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN NOTIFICACIONES -->
            <!-- REPORTES -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-reportes-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-reportes-asignar" href="#collapse-reportes-asignar">
                      <i class="entypo-doc-text"> Módulo Reportes</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-reportes-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-reporte" name="acceder-reporte" value="0" >
                                      <label><input type="checkbox" id="acceder-reporte" name="acceder-reporte" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_reportes_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="descargar-reporte" name="descargar-reporte" value="0" >
                                      <label><input type="checkbox" id="descargar-reporte" name="descargar-reporte" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_reportes_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Descargar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="consultar-reporte" name="consultar-reporte" value="0" >
                                      <label><input type="checkbox" id="consultar-reporte" name="consultar-reporte" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_reportes_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Consultar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN REPORTES -->
            <!-- AJUSTES -->
            <div class="panel-group joined dependePerfilSeleccionado" <?php echo ($perfil_seleccionado > 0) ? '' : 'style="display: none;"' ;?> id="accordion-ajustes-asignar">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-ajustes-asignar" href="#collapse-ajustes-asignar">
                      <i class="entypo-lifebuoy"> Módulo Ajustes</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse-ajustes-asignar" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                  <div class="panel-body">
                    <div class="col-md-12">
                      <div class="row" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="acceder-ajustes" name="acceder-ajustes" value="0" >
                                      <label><input type="checkbox" id="acceder-ajustes" name="acceder-ajustes" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_ajustes_seleccionado[0]['acceder'] == 1) ? 'checked' : ''; ?> >Acceder</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="ajustes-usuarios" name="ajustes-usuarios" value="0" >
                                      <label><input type="checkbox" id="ajustes-usuarios" name="ajustes-usuarios" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_ajustes_seleccionado[0]['editar_usuarios'] == 1) ? 'checked' : ''; ?> >Usuarios</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="ajustes-ajustes" name="ajustes-ajustes" value="0" >
                                      <label><input type="checkbox" id="ajustes-ajustes" name="ajustes-ajustes" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_ajustes_seleccionado[0]['ajustes'] == 1) ? 'checked' : ''; ?> >Ajustes</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="ajustes-editar-perfiles" name="ajustes-editar-perfiles" value="0" >
                                      <label><input type="checkbox" id="ajustes-editar-perfiles" name="ajustes-editar-perfiles" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_ajustes_seleccionado[0]['editar_perfiles'] == 1) ? 'checked' : ''; ?> >Perfiles</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="ajustes-editar-opciones-perfil" name="ajustes-editar-opciones-perfil" value="0" >
                                      <label><input type="checkbox" id="ajustes-editar-opciones-perfil" name="ajustes-editar-opciones-perfil" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_ajustes_seleccionado[0]['editar_opciones_perfil'] == 1) ? 'checked' : ''; ?> >Opciones perfil</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div style="padding-top: 7px;">
                                    <div class="checkbox " >
                                      <input type="hidden" id="ajustes-editar-docentes" name="ajustes-editar-docentes" value="0" >
                                      <label><input type="checkbox" id="ajustes-editar-docentes" name="ajustes-editar-docentes" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_ajustes_seleccionado[0]['editar_docentes'] == 1) ? 'checked' : ''; ?> >Docentes</label>
                                    </div>
                                    <div class="checkbox " >
                                      <input type="hidden" id="ajustes-configuraciones" name="ajustes-configuraciones" value="0" >
                                      <label><input type="checkbox" id="ajustes-configuraciones" name="ajustes-configuraciones" value="1"  class="form-control check_box_parameters" <?php echo ($permisos_ajustes_seleccionado[0]['configuraciones'] == 1) ? 'checked' : ''; ?> >Configuraciones</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN AJUSTES -->
            <div class="form-group">
              <div class="col-sm-offset-5 col-sm-4">
                <button type="submit" class="btn btn-info"><?php echo "Asignar opciones"?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--CREATION FORM ENDS-->
  </div>
</div>
<!--DATA TABLE EXPORT CONFIGURATIONS-->
<script type="text/javascript">
  jQuery(document).ready(function($)
  {
    var datatable = $("#table_export_censo").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"	   : "Press 'esc' to return",
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

    var datatable_inscripcion = $("#table_export_inscripcion").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_inscripcion.fnSetColumnVis(0, false);
            datatable_inscripcion.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_inscripcion.fnSetColumnVis(0, true);
                datatable_inscripcion.fnSetColumnVis(3, true);
              }
            });
          },

        },
        ]
      },
    });

    var datatable_inicial = $("#table_export_incial").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_inicial.fnSetColumnVis(0, false);
            datatable_inicial.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_inicial.fnSetColumnVis(0, true);
                datatable_inicial.fnSetColumnVis(3, true);
              }
            });
          },

        },
        ]
      },
    });

    var datatable_primaria = $("#table_export_primaria").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_primaria.fnSetColumnVis(0, false);
            datatable_primaria.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_primaria.fnSetColumnVis(0, true);
                datatable_primaria.fnSetColumnVis(3, true);
              }
            });
          },

        },
        ]
      },
    });

    var datatable_media = $("#table_export_media").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_media.fnSetColumnVis(0, false);
            datatable_media.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_media.fnSetColumnVis(0, true);
                datatable_media.fnSetColumnVis(3, true);
              }
            });
          },

        },
        ]
      },
    });

    var datatable_nutricion = $("#table_export_nutricion").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_nutricion.fnSetColumnVis(0, false);
            datatable_nutricion.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_nutricion.fnSetColumnVis(0, true);
                datatable_nutricion.fnSetColumnVis(3, true);
              }
            });
          },

        },
        ]
      },
    });

    var datatable_upe = $("#table_export_upe").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_upe.fnSetColumnVis(0, false);
            datatable_upe.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_upe.fnSetColumnVis(0, true);
                datatable_upe.fnSetColumnVis(3, true);
              }
            });
          },

        },
        ]
      },
    });

    var datatable_carnet = $("#table_export_carnet").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_carnet.fnSetColumnVis(0, false);
            datatable_carnet.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_carnet.fnSetColumnVis(0, true);
                datatable_carnet.fnSetColumnVis(3, true);
              }
            });
          },

        },
        ]
      },
    });

    var datatable_constancias = $("#table_export_constancias").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_constancias.fnSetColumnVis(0, false);
            datatable_constancias.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_constancias.fnSetColumnVis(0, true);
                datatable_constancias.fnSetColumnVis(3, true);
              }
            });
          },

        },
        ]
      },
    });

    var datatable_notificaciones = $("#table_export_notificaciones").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_notificaciones.fnSetColumnVis(0, false);
            datatable_notificaciones.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_notificaciones.fnSetColumnVis(0, true);
                datatable_notificaciones.fnSetColumnVis(3, true);
              }
            });
          },

        },
        ]
      },
    });

    var datatable_reportes = $("#table_export_reportes").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_reportes.fnSetColumnVis(0, false);
            datatable_reportes.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_reportes.fnSetColumnVis(0, true);
                datatable_reportes.fnSetColumnVis(3, true);
              }
            });
          },

        },
        ]
      },
    });

    var datatable_ajustes = $("#table_export_ajustes").dataTable({
      "sPaginationType": "bootstrap",
      "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
      "oTableTools": {
        "aButtons": [
        {
          "sExtends": "xls",
          "mColumns": [1,2]
        },
        {
          "sExtends": "pdf",
          "mColumns": [1,2]
        },
        {
          "sExtends": "print",
          "fnSetText"    : "Press 'esc' to return",
          "fnClick": function (nButton, oConfig) {
            datatable_ajustes.fnSetColumnVis(0, false);
            datatable_ajustes.fnSetColumnVis(3, false);

            this.fnPrint( true, oConfig );

            window.print();

            $(window).keyup(function(e) {
              if (e.which == 27) {
                datatable_reportes.fnSetColumnVis(0, true);
                datatable_reportes.fnSetColumnVis(3, true);
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
    function mostrarOpciones(sel) {
      var url = '<?php echo base_url().$this->session->userdata('login_type');?>/profile_options/' + sel;
      window.location.assign(url);
    }
</script>