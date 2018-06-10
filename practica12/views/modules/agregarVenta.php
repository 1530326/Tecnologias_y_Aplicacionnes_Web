<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }
if(!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
  $registro = new MvcController();
  $r = $registro->listProductos();
  $granTotal = 0;
?>
<!-- Main content -->
<section class="content"> 
  <!-- /.row -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Vender</h3>
          <?php
            if(isset($_GET["status"])){
              if($_GET["status"] === "1"){
          ?>
            <div class="alert alert-danger">
              <strong>Error</strong> El producto está agotado
            </div>
          <?php }else if($_GET["status"]==="2"){ ?>
            <div class="alert alert-danger">
              <strong>Error</strong> No hay suficiente en el stock
            </div>
        <?php } ?>
        <?php } ?>
          <div class="box-tools">
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
        <div style="margin-left: 180px; margin-right: 180px">
          <form method="POST" enctype="multipart/form-data" action="index.php?action=agregarVentaProd">
            <div class="form-group">
              <label>ID producto: </label>
              <select class="form-control" name="idProducto">
                <?php foreach($r as $pro): ?>
                  <option value="<?php echo $pro['id_producto'] ?>"><?php echo $pro["codigo_producto"] ?></option>
                <?php endforeach; ?>
              </select>
              <div align="center"><button type="submit" class="btn bg-maroon margin">Agregar</button></div>
            </div>
          </form>
        </div>
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Código</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Total</th>
              <th>Quitar</th>
            </tr>
            <tbody>
            <?php foreach($_SESSION["carrito"] as $indice => $resultado){ 
              $granTotal += $resultado->total;
            ?>
              <tr>
                <td><?php echo $resultado->id_producto ?></td>
                <td><?php echo $resultado->codigo_producto ?></td>
                <td><?php echo $resultado->nombre ?></td>
                <td><?php echo $resultado->precio ?></td>
                <td><?php echo $resultado->cantidad ?></td>
                <td><?php echo $resultado->total ?></td>
                <td><a class="btn btn-danger" href="index.php?action=quitarItem&id=<?php echo $indice ?>"><i class="fa fa-trash"></i></a></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <h3 align="right" style="margin-right: 200px">Total: <?php echo $granTotal; ?></h3>
        <form action="index.php?action=terminarVenta" method="POST">
          <input name="total" type="hidden" value="<?php echo $granTotal;?>">
          <div align="center"><button type="submit" class="btn btn-info">Realizar venta</button></div><br><br>
        </form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>