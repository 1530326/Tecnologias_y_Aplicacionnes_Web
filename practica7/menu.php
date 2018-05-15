<?php
    session_start(); //verificar que la sesión ha sido iniciada
    if(!$_SESSION){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Ventas</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/formulario.css" rel="stylesheet">
</head>
<body>
	<h1 class="titulo" align="center"><br>SISTEMA DE VENTAS</h1>
  <a href="desconectar.php"><button class="boton">Log out</button></a><br>
  <div align="center">
  	<div class="contenedor">
      <br>
      <p><a href="producto.php"><button class="boton2">NUEVO PRODUCTO</button></a></p>
      <p><a href="venta.php"><button class="boton2">NUEVA VENTA</button></a></p>
      <a href="reporte.php"><button class="boton2">VER REPORTE</button>
 	</div>
</div>
</body>
</html>
