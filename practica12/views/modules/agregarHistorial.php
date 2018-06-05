<?php
  /*session_start();
  if($_SESSION["id"]){
    header("location:index.php?action=inicio");
    exit();
  }*/
  
  $registro = new MvcController();
  $registro->addHistorialController();
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-sm-8" style="margin-left: 180px">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Agregar Entrada</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST">
                <!-- text input -->
                <div class="form-group">
                  <label>Nota: </label>
                  <input type="text" class="form-control" placeholder="Nota" name="nota" required>
                </div>
                <div class="form-group">
                  <label>Referencia: </label>
                  <input type="text" class="form-control" placeholder="Referencia" name="referencia" required>
                </div>
                <div class="form-group">
                  <label>Cantidad: </label>
                  <input type="number" class="form-control" placeholder="Cantidad" name="cantidad" required>
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
    