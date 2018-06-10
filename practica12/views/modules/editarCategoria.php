<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <?php $valorC = $_SESSION["contra"]; ?>
        <script type="text/javascript">
          function confirmarE(){
            swal({
              title: "Contraseña",
              text:  "Ingrese contraseña",
              content: "input",
            }).then((value) => {
              var contra = "<?php echo $valorC; ?>";

              if(value==contra){
                $("#formulario").submit();
              }
            });
          }
        </script>
        <!-- left column -->
        <div class="col-sm-8" style="margin-left: 180px">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Modificar Categoría</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" id="formulario">
                <?php
                  $editarCategoria = new MvcController();
                  $editarCategoria -> editarCategoriasController();
                  $editarCategoria -> actualizarCategoriasController();
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