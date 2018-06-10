<?php 
session_start(); 
  //error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="views/tools/img/favicon.png" />
  <title>Inventario | Práctica12</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/tools/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/tools/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/tools/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/tools/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="views/tools/dist/css/skins/skin-blue.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="views/tools/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="views/tools/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="views/tools/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="views/tools/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="views/tools/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<?php if(isset($_SESSION["id"])){ ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="views/tools/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>12</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>INVENTA</b>RIO</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <?php
            $obj = new MvcController();
            $res = $obj->notificaciones($_SESSION["tienda"]);

            if($_SESSION["tienda"]!=NULL){
          ?>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php echo count($res); ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tu tienes <?php echo count($res); ?> notificaciones</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <?php foreach($res as $datos): ?>
                  <li>
                    <a href="index.php?action=verProducto&id=<?php echo $datos['id_producto']; ?>">
                      <i class="fa fa-warning text-yellow"></i> <?php echo $datos["nombre"]." con ".$datos["stock"]." en stock";  ?>
                    </a>
                  </li>
                <?php endforeach; ?>
                </ul>
              </li>
            </ul>
          </li>
        <?php } ?>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $_SESSION['ruta']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["usuario"]; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $_SESSION['ruta']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION["usuario"]; ?>
                  <small>Fecha de agregado: <?php echo $_SESSION["fecha"]; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="index.php?action=salir" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_SESSION['ruta']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["usuario"]; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Disponible</a>
        </div>
      </div>
      <!-- /.search form -->
      <?php include "modules/navegacion.php"; ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <?php 
          $mvc = new MvcController();
          $mvc -> enlacesPaginasController();
      ?>
    </section>
  </div>
          <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">TAW</a>.</strong> Todos los derechos reservados.
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="views/tools/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="views/tools/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="views/tools/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="views/tools/bower_components/raphael/raphael.min.js"></script>
<script src="views/tools/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="views/tools/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="views/tools/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="views/tools/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="views/tools/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="views/tools/bower_components/moment/min/moment.min.js"></script>
<script src="views/tools/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="views/tools/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="views/tools/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="views/tools/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="views/tools/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="views/tools/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="views/tools/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/tools/dist/js/demo.js"></script>
</body>
<?php 
}else{
  $mvc = new MvcController();
  $mvc -> enlacesPaginasController();
}
?>
</html>
