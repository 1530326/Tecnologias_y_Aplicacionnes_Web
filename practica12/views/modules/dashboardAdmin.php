<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }

  $objeto = new MvcController();
  $usuarios = $objeto->contarAdminController("usuarios");
  $categorias = $objeto->contarAdminController("categorias");
  $productos = $objeto->contarAdminController("productos");
  $tiendas = $objeto->contarAdminController("tienda");
?>
<section class="content">
      <!-- Info boxes -->
      <div class="row">
          <div>

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo $_SESSION['ruta']; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $_SESSION["usuario"]; ?></h3>

              <p class="text-muted text-center">Fecha de agregado: <?php echo $_SESSION["fecha"]; ?></p>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion-ios-star-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tiendas</span>
              <span class="info-box-number"><?php echo $tiendas[0] ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion-android-contact"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Usuarios</span>
              <span class="info-box-number"><?php echo $usuarios[0] ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion-filing"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Categorías</span>
              <span class="info-box-number"><?php echo $categorias[0] ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion-cube"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Productos</span>
              <span class="info-box-number"><?php echo $productos[0] ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- /.row -->
      <!-- /.row -->
    </section>
    <!-- /.content -->