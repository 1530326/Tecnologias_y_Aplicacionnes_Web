<?php
  /*session_start();
  if($_SESSION["id"]){
    header("location:index.php?action=inicio");
    exit();
  }*/
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-sm-8" style="margin-left: 180px">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Modificar Producto</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST">
                <?php
                  $editarProducto = new MvcController();
                  $editarProducto -> editarProductosController();
                  $editarProducto -> actualizarProductosController();
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