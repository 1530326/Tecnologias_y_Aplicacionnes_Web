    <!-- Main content -->
<?php  
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }

  $registro = new MvcController();
  $registro->addTiendaController();
?>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-sm-8" style="margin-left: 180px">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Agregar Tienda</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" enctype="multipart/form-data">
                <!-- text input -->
                <div class="form-group">
                  <label>Nombre: </label>
                  <input type="text" name="nomTienda" class="form-control" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                  <label>Dirección: </label>
                  <input type="text" name="direTienda" class="form-control" placeholder="Dirección" required>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>

        </div>

          <!-- /.box -->
          <!-- general form elements disabled -->
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </section>
      <!-- /.row -->