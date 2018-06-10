<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }
?>
<!-- Main content -->
<section class="content"> 
  <div align="right">
    <a href="index.php?action=agregarCategoria"><button type="submit" class="btn bg-maroon margin">Agregar Categoría</button></a>
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Categorías</h3>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
            <?php 
              $valorC = $_SESSION["contra"];
            ?>
            <script type="text/javascript">
              function confirmar(cat){
                    swal({
                      title: "Contraseña",
                      text:  "Ingrese contraseña",
                      content: "input",
                    }).then((value) => {
                      var contra = "<?php echo $valorC; ?>";

                      if(value!=contra){
                        location.href='index.php?action=mostrarCategorias';
                      }else{
                        location.href='index.php?action=mostrarCategorias&idBorrar='+cat;
                      }
                    });
              }
            </script>
            <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Fecha</th>
              <th>Acciones</th>
            </tr>
            <tbody>
                <?php
                  $vistaCategorias = new MvcController();
                  $vistaCategorias -> vistaCategoriasController();
                  $vistaCategorias -> borrarCategoriasController();
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