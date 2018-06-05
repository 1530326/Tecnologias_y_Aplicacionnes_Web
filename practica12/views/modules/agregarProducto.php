<?php
  /*session_start();
  if($_SESSION["id"]){
    header("location:index.php?action=inicio");
    exit();
  }*/
  
  $registro = new MvcController();
  $registro->addProductoController();

  $cat = new MvcController();
  $categorias = $cat->listCategorias();
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-sm-8" style="margin-left: 180px">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Agregar Producto</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST">
                <!-- text input -->
                <div class="form-group">
                  <label>Código del producto: </label>
                  <input type="text" class="form-control" placeholder="Código del producto" name="codProducto" required>
                </div>
                <div class="form-group">
                  <label>Nombre: </label>
                  <input type="text" class="form-control" placeholder="Nombre del producto" name="nombre" required>
                </div>
                <div class="form-group">
                  <label>Precio: </label>
                  <input type="text" class="form-control" placeholder="Precio" name="precio" required>
                </div>
                <div class="form-group">
                  <label>Stock: </label>
                  <input type="number" class="form-control" placeholder="Stock" name="stock" required>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label>Categoría: </label>
                  <select class="form-control" name="categoria">
                    <?php foreach($categorias as $cats): ?>
                      <option value="<?php echo $cats["id_categoria"] ?>"><?php echo $cats["nombre"]; ?></option>
                    <?php endforeach; ?>
                  </select>
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
    