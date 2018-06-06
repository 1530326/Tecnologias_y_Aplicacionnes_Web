<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-sm-8" style="margin-left: 180px">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Modificar Usuario</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" enctype="multipart/form-data">
                <?php
                  $editarUsuario = new MvcController();
                  $editarUsuario -> editarUsuariosController();
                  $editarUsuario -> actualizarUsuariosController();
                ?>
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