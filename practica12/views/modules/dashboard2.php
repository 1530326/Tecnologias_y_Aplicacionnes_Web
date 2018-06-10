<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }

  $objeto = new MvcController();
  $usuarios = $objeto->contarController("usuarios", $_SESSION["tienda"]);
  $categorias = $objeto->contarController("categorias", $_SESSION["tienda"]);
  $productos = $objeto->contarController("productos", $_SESSION["tienda"]);
  $ventas = $objeto->contarController("ventas", $_SESSION["tienda"]);
?>
<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion-android-contact"></i></span>

            <div class="info-box-content">
              <a href="index.php?action=mostrarUsuarios"><span class="info-box-text">Usuarios</span></a>
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
              <a href="index.php?action=mostrarCategorias"><span class="info-box-text">Categorías</span></a>
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
              <a href="index.php?action=mostrarProductos"><span class="info-box-text">Productos</span></a>
              <span class="info-box-number"><?php echo $productos[0] ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <a href="index.php?action=mostrarVentas"><span class="info-box-text">Ventas</span></a>
              <span class="info-box-number"><?php echo $ventas[0] ?></span>
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
