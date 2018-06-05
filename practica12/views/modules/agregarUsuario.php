    <!-- Main content -->
<?php
  /*session_start();
  if($_SESSION["id"]){
    header("location:index.php?action=inicio");
    exit();
  }*/
  
  $registro = new MvcController();
  $registro->addUserController();
?>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-sm-8" style="margin-left: 180px">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Agregar Usuario</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST">
                <!-- text input -->
                <div class="form-group">
                  <label>Nombre: </label>
                  <input type="text" name="nomUsuario" class="form-control" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                  <label>Apellido: </label>
                  <input type="text" name="apeUsuario" class="form-control" placeholder="Apellido" required>
                </div>
                <div class="form-group">
                  <label>Nombre de usuario: </label>
                  <input type="text" name="nickUsuario" class="form-control" placeholder="Nombre de usuario" required>
                </div>
                <div class="form-group">
                  <label>Correo Electrónico: </label>
                  <input type="email" name="correoUsuario" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <label>Contraseña: </label>
                  <input type="password" name="contraUsuario" class="form-control" placeholder="Contraseña" required>
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