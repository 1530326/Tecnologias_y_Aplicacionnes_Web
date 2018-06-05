<?php
  /*session_start();
  if($_SESSION["id"]){
    header("location:index.php?action=inicio");
    exit();
  }*/

  $product = new MvcController();
  $resultado = $product -> mostrarProductoController();
?>
<!-- Main content -->
<section class="content"> 
  <!-- /.row -->

  <div class="row">
      <div class="col-sm-4 col-sm-offset-1 text-center">
        <img src="views/tools/img/product.png" width="50%">
      </div>
      <div class="col-sm-6 text-left" align="center">
        <font size="8"><?php echo $resultado["nombre"] ?></font><br>
        <font size="6"><?php echo $resultado["codigo_producto"] ?></font><br>
        <font size="5">Stock disponible: <?php echo $resultado["stock"] ?></font><br>
        <font size="5">Precio de venta: <?php echo $resultado["precio"] ?></font><br>
        <div class="col-sm-4 text-left">
          <a href="index.php?action=agregarHistorial&id=<?php echo $resultado["id_producto"] ?>"><button type="submit" class="btn bg-maroon margin">Agregar stock</button></a>
        </div>
        <div class="col-sm-4 text-left">
          <a href="index.php?action=eliminarHistorial&id=<?php echo $resultado["id_producto"] ?>"><button type="submit" class="btn bg-purple margin">Eliminar stock</button></a>
        </div>
      </div>


      <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Historial</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
            <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Usuario</th>
              <th>Fecha</th>
              <th>Nota</th>
              <th>Referencia</th>
              <th>Cantidad</th>
            </tr>
            <tbody>
                <?php
                  $vistaHistorial = new MvcController();
                  $vistaHistorial -> vistaHistorialController();
                ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>