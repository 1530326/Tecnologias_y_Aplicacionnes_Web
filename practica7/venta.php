<?php
	session_start(); //verificar que la sesión ha sido iniciada
    if(!$_SESSION){
        header("Location: index.php");
    }

    include_once('funciones.php'); //incluir el archivo funciones

    $productos = nombreProducto(); //mandar llamar la funcion para listar los productos registrados en la base de dtos

    if (isset($_POST['agregar'])) {
    	$id_producto = $_POST['producto']; //obtener el valor de producto
    	$cantidad = $_POST['unidades']; //obtener el valor de cantidad

    	$res = registrarVenta($id_producto, $cantidad); //mandar llamar la funcion para registrar la venta

    	if($res){
    		echo "<script>alert('Venta registrada');</script>"; //notificar al usuario que la venta se ha registrado exitosamente
    	}
    }
  	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Práctica 7</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/formulario.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="alertify/css/alertify.css" >
	<link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css" >

	<script src="alertify/alertify.min.js"></script>
</head>
<body>
	<h1 class="titulo" align="center"><br>VENTAS</h1><br><br>
	<div><a href="menu.php"><button class="boton">Regresar</button></a><br><br></div>
	<div class="col-md-12  inputGroupContainer">
		<form method="POST" action="" name="formulario">
			<label>Producto: </label>
			<select id='producto' name="producto" class="form-control">
				<?php foreach($productos as $pro):?>
					<option value="<?php echo $pro[0]; ?>"><?php echo $pro[1]?></option>
				<?php endforeach; ?>
			</select>

			<label>Unidades: </label>
			<input type="number" name="unidades" class="form-control" id="unidades" placeholder="Unidades" value="0"><br>
			<input type="submit" name="agregar" value="Agregar" id="agregar" class="boton2">
		</form>
		</div>
</body>
</html>
