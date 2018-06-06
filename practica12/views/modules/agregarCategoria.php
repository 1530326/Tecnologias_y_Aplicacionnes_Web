<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }

  $registro = new MvcController();
  $registro->addCategoriaController();
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-sm-8" style="margin-left: 180px">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Agregar Categoría</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST">
                <!-- text input -->
                <div class="form-group">
                  <label>Nombre: </label>
                  <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                </div>
                <div class="form-group">
                  <label>Descripcion: </label>
                  <textarea rows="6" class="form-control" name="descripcion" required></textarea>
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
    