<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }
?>

<!-- Main content -->
<section class="content"> 
  <div align="right">
    <a href="index.php?action=agregarVenta"><button type="submit" class="btn bg-maroon margin">Agregar Venta</button></a>
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Ventas</h3>
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
            <?php 
              $valorC = $_SESSION["contra"];
            ?>
            <script type="text/javascript">
              function confirmar(venta){
                    swal({
                      title: "Contraseña",
                      text:  "Ingrese contraseña",
                      content: "input",
                    }).then((value) => {
                      var contra = "<?php echo $valorC; ?>";

                      if(value!=contra){
                        location.href='index.php?action=mostrarVentas';
                      }else{
                        location.href='index.php?action=mostrarVentas&idBorrar='+venta;
                      }
                    });
              }
            </script>
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Fecha</th>
              <th>Productos vendidos</th>
              <th>Total</th>
              <th>Eliminar</th>
            </tr>
            <tbody>
                <?php
                  $vistaVentas = new MvcController();
                  $vistaVentas -> vistaVentasController();
                  $vistaVentas -> borrarVentasController();
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