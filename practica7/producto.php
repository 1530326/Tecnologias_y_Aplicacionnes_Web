<?php
    session_start(); //verificar que la sesión ha sido iniciada
    if(!$_SESSION){
        header("Location: index.php");
    }
  	
  	include_once('funciones.php');

  	if(isset($_POST['guardar'])){
  		$nombre = $_POST['nombre']; //obtener el valor de nombre
  		$precio = $_POST['precio']; //obtener el valor de precio

  		$res = registrarProducto($nombre,$precio); //mandar llamar la funcion de registrar de producto

  		if($res){
  			echo "<script>alert('Producto registrado');</script>"; //notificar al usuario que el producto se ha registrado exitosamente
  		}
  	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Práctica 7</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<link href="css/formulario.css" rel="stylesheet">

  	<link rel="stylesheet" type="text/css" href="alertify/css/alertify.css" >
	<link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css" >

	<script src="alertify/alertify.min.js"></script>
</head>
<body>
	<h1 class="titulo" align="center"><br>REGISTRAR PRODUCTO</h1>
    <a href="menu.php"><button class="boton">Regresar</button></a><br><br>
    <div align="center">
  		<div class="col-md-12  inputGroupContainer">
    		<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data" name="formulario">
        		<br>
        		<p><label>Nombre: </label><input class="form-control" type="text" name="nombre" placeholder="Nombre"></p>
        		<p><label>Precio: </label><input class="form-control" type="text" name="precio" placeholder="Precio"></p>
        		<input type="submit" name="guardar" class="boton2">
    		</form>
 		</div>
 	</div>
</body>
</html>
