  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KBUM | Explotas tus ideas</title>
    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/administracion/index" class="site_title"><i class="fa fa-home"></i> <span>KBUM</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2 style="border-bottom: 2px solid rgba(115,135,156,0.36);">
                  <?php 
                    $user = Usuario::model()->find('id=:id', array(':id'=>Yii::app()->user->id)); 
                    echo $user->nombre;
                    ?>
                </h2>
                <h2 style="border-top: 2px solid rgba(115,135,156,0.36);">
                  <?php 
                    $user = Usuario::model()->find('id=:id', array(':id'=>Yii::app()->user->id)); 
                    if ($user->roles=="admin") {
                      echo "ADMINISTRADOR";
                    } 
                    else if($user->roles=="direct"){
                      echo "DIRECTOR";
                    }
                    else{
                      echo "EMPLEADO";
                    }
                    
                    ?>
                </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php echo CHtml::link('Editar Perfil',array('administracion/perfil','id'=>Yii::app()->user->id),array('style'=>'color:#fff;')); ?></h3>
                <?php 
                  $this->widget('zii.widgets.CMenu', array(
                      'htmlOptions'=>array('class'=>'nav side-menu'),
                      'submenuHtmlOptions'=>array('class'=>'nav child_menu'),
                      'encodeLabel'=>false,
                      'items'=>array(
                          array('label'=>'<i class="fa fa-home"></i> Inicio', 'url'=>array('/administracion/index')),
                          //---------------------------------ADMINISTRADOR------------------------------------------------
                          array('label'=>'<i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span>', 'url'=>'#', 'items'=>array(
                              array('label'=>'Ver Usuarios', 'url'=>array('/usuario/index')),
                              array('label'=>'Administrar Usuarios', 'url'=>array('/usuario/admin')),
                          ),'visible'=>Yii::app()->user->checkAccess('admin')),

                          array('label'=>'<i class="fa fa-question"></i> Preguntas <span class="fa fa-chevron-down"></span>', 'url'=>'#', 'items'=>array(
                              array('label'=>'Ver Preguntas', 'url'=>array('/preguntas/index')),
                              array('label'=>'Administrar Preguntas', 'url'=>array('/preguntas/admin')),
                          ),'visible'=>Yii::app()->user->checkAccess('admin')),

                          array('label'=>'<i class="fa fa-file-text-o"></i> Test <span class="fa fa-chevron-down"></span>', 'url'=>'#', 'items'=>array(
                              array('label'=>'Ver Test', 'url'=>array('/test/index')),
                              array('label'=>'Administrar Test', 'url'=>array('/test/admin')),
                          ),'visible'=>Yii::app()->user->checkAccess('admin')),

                          array('label'=>'<i class="fa fa-building-o"></i> Empresas <span class="fa fa-chevron-down"></span>', 'url'=>'#', 'items'=>array(
                              array('label'=>'Ver Empresas', 'url'=>array('/empresa/index')),
                              array('label'=>'Administrar Empresas', 'url'=>array('/empresa/admin')),
                          ),'visible'=>Yii::app()->user->checkAccess('admin')),

                          array('label'=>'<i class="fa fa-file"></i> Infórmes <span class="fa fa-chevron-down"></span>', 'url'=>'#', 'items'=>array(
                              array('label'=>'Ver Infórmes', 'url'=>array('/informe/index')),
                              array('label'=>'Administrar Infórmes', 'url'=>array('/informe/admin')),
                          ),'visible'=>Yii::app()->user->checkAccess('admin')),

                          array('label'=>'<i class="fa fa-sitemap"></i> Puestos <span class="fa fa-chevron-down"></span>', 'url'=>'#', 'items'=>array(
                              array('label'=>'Ver Puestos', 'url'=>array('/puesto/index')),
                              array('label'=>'Administrar Puestos', 'url'=>array('/puesto/admin')),
                          ),'visible'=>Yii::app()->user->checkAccess('admin')),
                          //---------------------------------DIRECTOR------------------------------------------------
                          array('label'=>'<i class="fa fa-file-text"></i> Analizar Empresa', 'url'=>array('/test/analisis')),
                          
                          array('label'=>'<i class="fa fa-file-text-o"></i> Test <span class="fa fa-chevron-down"></span>', 'url'=>'#', 'items'=>array(
                              array('label'=>'Ver Test', 'url'=>array('/test/index')),
                              array('label'=>'Administrar Test', 'url'=>array('/test/admin')),
                          ),'visible'=>Yii::app()->user->checkAccess('direct')),

                          array('label'=>'<i class="fa fa-building-o"></i> Empresas <span class="fa fa-chevron-down"></span>', 'url'=>'#', 'items'=>array(
                              array('label'=>'Ver Empresas', 'url'=>array('/empresa/index')),
                              array('label'=>'Administrar Empresas', 'url'=>array('/empresa/admin')),
                          ),'visible'=>Yii::app()->user->checkAccess('direct')),

                          array('label'=>'<i class="fa fa-file"></i> Infórmes <span class="fa fa-chevron-down"></span>', 'url'=>'#', 'items'=>array(
                              array('label'=>'Ver Infórmes', 'url'=>array('/informe/index')),
                              array('label'=>'Administrar Infórmes', 'url'=>array('/informe/admin')),
                          ),'visible'=>Yii::app()->user->checkAccess('direct')),

                          array('label'=>'<i class="fa fa-edit"></i> Mi Plan', 'url'=>array('/plan/index')),

                          
                          //---------------------------------EMPLEADO------------------------------------------------
                          array('label'=>'<i class="fa fa-file-text-o"></i> Test <span class="fa fa-chevron-down"></span>', 'url'=>'#', 'items'=>array(
                              array('label'=>'Ver Test', 'url'=>array('/test/index')),
                              array('label'=>'Administrar Test', 'url'=>array('/test/admin')),
                          ),'visible'=>Yii::app()->user->checkAccess('emple')),
                      
                      ),
                  ));
                ?>                
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <div style="width:98%;">
             <?php
                  $user = Usuario::model()->find('id=:id', array(':id'=>Yii::app()->user->id)); 
                  $this->widget('zii.widgets.CMenu', array(
                      'htmlOptions'=>array('class'=>'nav navbar-nav navbar-right'),
                      'submenuHtmlOptions'=>array('class'=>'dropdown-menu dropdown-usermenu pull-right'),
                      'encodeLabel'=>false,
                      'items'=>array(
                          array(
                            'label'=>'<img src="'.Yii::app()->request->baseUrl.'/admin/production/images/img.jpg" alt="">Salir('.$user->nombre.')', 
                            'url'=>'/site/logout',
                            'linkOptions'=>array('class'=>'user-profile dropdown-toggle'),),
                      ),
                  ));
                ?> 
              </div>

            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->


          <!-- /top tiles -->
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="col-xs-12">
                  <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                  <div style="width: 100%;">
                    <?php echo $content; ?>
                  </div>
                </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            © 2017 KBUM | All Rights Reserved
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!--JS-->
      <!-- Bootstrap -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/nprogress/nprogress.js"></script>
      <!-- Chart.js -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/Chart.js/dist/Chart.min.js"></script>
      <!-- gauge.js -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/gauge.js/dist/gauge.min.js"></script>
      <!-- bootstrap-progressbar -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
      <!-- iCheck -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/iCheck/icheck.min.js"></script>
      <!-- Skycons -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/skycons/skycons.js"></script>
      <!-- Flot -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/Flot/jquery.flot.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/Flot/jquery.flot.pie.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/Flot/jquery.flot.time.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/Flot/jquery.flot.stack.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/Flot/jquery.flot.resize.js"></script>
      <!-- Flot plugins -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/flot.curvedlines/curvedLines.js"></script>
      <!-- DateJS -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/DateJS/build/date.js"></script>
      <!-- JQVMap -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/production/js/moment/moment.min.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/production/js/datepicker/daterangepicker.js"></script>

      <!-- Custom Theme Scripts -->
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/admin/build/js/custom.min.js"></script>
    <!--JS-->

  </body>
</html>
