<?php
	include_once('conexion.php'); //este archivo requiere del archivo conexión

	/*FUNCION PARA REGISTRAR A LOS USUARIOS*/
	function registrarUsuario($nombre,$contra){
		global $pdo;
		$pass = md5($contra); //se utiliza md5 para encriptar la contraseña
		$sql = "INSERT INTO usuarios(id,nombre,contra) VALUES(NULL,'$nombre','$pass')"; //crear consulta
  		$statement = $pdo->prepare($sql); //preparar la consulta
  		return $statement->execute(); //ejecutar la consulta y la retorna
	}

	/*FUNCION PARA REGISTRAR A LOS PRODUCTOS*/
	function registrarProducto($nombre,$precio){
		global $pdo;
		$sql = "INSERT INTO productos(id,nombre,precio) VALUES(NULL,'$nombre',$precio)"; //crear consulta
  		$statement = $pdo->prepare($sql); //preparar la consulta
  		return $statement->execute(); //ejecutar la consulta y la retorna
	}


	/*VERIFICAR QUE EL USUARIO EXISTA EN LA BASE DE DATOS*/
	function verificarUsuario($nombre,$contra){
		global $pdo;
		$sql = "SELECT count(*) FROM usuarios WHERE nombre='$nombre' AND contra='$contra'"; //crear consulta
  		$statement = $pdo->prepare($sql); //preparar la consulta
  		$statement->execute(); //ejecutar la consulta 
  		return $statement->fetch(PDO::FETCH_BOTH); // retornar el valor
	}

	/*MOSTRAR EL NOMBRE DE TODOS LOS PRODUCTOS*/
	function nombreProducto(){
		global $pdo;
		$sql = "SELECT * FROM productos"; //crear la consulta
      	$statement = $pdo->prepare($sql); //preparar la consulta
      	$statement->execute(); //ejecutar la consulta
      	return $statement->fetchAll(); //retornar el valor de la variable 
	}

	/*MOSTRAR EL NOMBRE DEL PRODUCTO DE ACUERDO A SU ID*/
	function nombreProductoVentas($id){
		global $pdo;
		$sql = "SELECT nombre FROM productos WHERE id='$id'"; //crear la consulta
      	$statement = $pdo->prepare($sql); //preparar la consulta
      	$statement->execute(); //ejecutar la consulta
      	return $statement->fetch(PDO::FETCH_BOTH); //retornar el valor de la variable 
	}

	
	/*FUNCION PARA REGISTRAR LA VENTA EN LA TABLA VENTAS*/
	function registrarVenta($id_producto,$cantidad){
		global $pdo;

		$sql = "SELECT precio FROM productos WHERE id='$id_producto'"; //crear consulta
  		$statement = $pdo->prepare($sql); //preparar la consulta
  		$statement->execute(); //ejecutar la consulta 
  		$precio = $statement->fetch(PDO::FETCH_BOTH); // retornar el valor

  		$total = $precio[0] * $cantidad;

		$sql = "INSERT INTO ventas(id,id_producto,cantidad,total) VALUES(NULL,'$id_producto',$cantidad,$total)"; //crear consulta
  		$statement = $pdo->prepare($sql); //preparar la consulta
  		return $statement->execute(); //ejecutar la consulta y la retorna
	}

	/*MOSTRAR TODAS LA VENTAS REGISTRADAS EN LA BASE DE DATOS*/
	function mostrarVentas(){
		global $pdo;
		$sql = "SELECT * FROM ventas"; //crear la consulta
      	$statement = $pdo->prepare($sql); //preparar la consulta
      	$statement->execute(); //ejecutar la consulta
      	return $statement->fetchAll(); //retornar el valor de la variable 
	}

?>