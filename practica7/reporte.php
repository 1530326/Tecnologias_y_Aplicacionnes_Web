<?php
  session_start(); //verificar que la sesión ha sido iniciada
  if(!$_SESSION){
      header("Location: index.php");
  }

  include_once('funciones.php'); //incluir el archivo funciones

  $ventas = mostrarVentas(); //ejecutar la funcion para mostrar todas la ventas
  $total = 0;
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Práctica 7</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/formulario.css" rel="stylesheet">
</head>
<body>
	<h1 class="titulo" align="center"><br>REPORTE DE VENTAS</h1><br>
  <div><a href="menu.php"><button class="boton">Regresar</button></a><br><br></div>
  <div align="center">
  	<table class="table">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Total</th>
          <th>Promedio</th>
        </tr>
      </thead>
        <?php foreach($ventas as $v):
          $pro = nombreProductoVentas($v[1]); //traer el nombre del producto
          $prom = $v[3]/$v[2]; //calcular el promedio
          $total = $total + $v[3]; //calcular el total generado en el día
        ?>
        <tr>
          <td><?php echo $v[0] ?></td>
          <td><?php echo $pro[0] ?></td>
          <td><?php echo $v[2] ?></td>
          <td><?php echo $v[3] ?></td>
          <td><?php echo $prom ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <label><b>TOTAL DEL DÍA:</b><?php echo $total ?></label>
 	</div>
</body>
</html>
