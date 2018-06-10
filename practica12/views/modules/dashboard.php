<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }

  $objeto = new MvcController();
  $usuarios = $objeto->contarController("usuarios", $_SESSION["tienda"]);
  $categorias = $objeto->contarController("categorias", $_SESSION["tienda"]);
  $productos = $objeto->contarController("productos", $_SESSION["tienda"]);
?>
<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-sm-8" style="margin-left: 180px">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo $_SESSION['ruta']; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $_SESSION["usuario"]; ?></h3>

              <p class="text-muted text-center">Fecha de agregado: <?php echo $_SESSION["fecha"]; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Tienda: </b><?php echo $_SESSION["nomTienda"]; ?>
                </li>
                <li class="list-group-item">
                  <b>Dirección: </b><?php echo $_SESSION["direTienda"]; ?>
                </li>
                <li class="list-group-item">
                  <b>Fecha de agregada: </b><?php echo $_SESSION["fechaTienda"]; ?>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
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

        <div class="col-md-4 col-sm-6 col-xs-12">
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
        <div class="col-md-4 col-sm-6 col-xs-12">
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