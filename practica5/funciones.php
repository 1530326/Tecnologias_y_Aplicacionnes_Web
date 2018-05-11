<?php
	include_once('conexion.php'); //incluir el archivo conexion que trae los valores de las constantes para realizar la conexión a la BD

	$conexion = mysqli_connect(SERVIDOR,USUARIO,PASS,BD); //realizar la conexión a la BD
	if(!$conexion) echo "<script>alert('Error en la conexion');</script>"; //imprimir un mensaje si la conexión falló

	//función que devuelve los registros de la tabla usuarios y se manda llamar en el archivo index.php
	function mostrar(){
		global $conexion;
		$query = "SELECT * FROM usuarios"; //se crea la consulta
		$resultado = mysqli_query($conexion, $query); //se ejecuta la consulta
		return $resultado->fetch_all(); //se retornan los registros devueltos por la consutla
	}

	//función agregar que se manda llamar en el archivo agregarUsuario.php, recibe el email y la contraseña
	function agregar($email, $contra){
		global $conexion;
		$query = "INSERT INTO usuarios(id,correo,contra) VALUES(null,'$email','$contra')"; //inserta los valores en la tabla usuarios
		$resultado = mysqli_query($conexion,$query); //ejecuta la consulta
		return $resultado; //retorna el valor
	}

	//función eliminar que se manda llamar en el archivo eliminar.php, recibe el id como parámetro
	function eliminar($id){
		global $conexion;
		$query = "DELETE FROM usuarios WHERE id='$id'"; //creación de la consulta
		$resultado = mysqli_query($conexion,$query); //se ejecuta la consutla
		return $resultado; //se retorna el resultado
	}

	//función detallesModificar que muestra en los imputs del archivo modificar.php los valores registrados en la base de datos
	function detallesModificar($id){
		global $conexion;
		$query = "SELECT * FROM usuarios WHERE id='$id'"; //creación de la consulta
		$resultado = mysqli_query($conexion,$query); //se ejecuta la consutla
		return $resultado->fetch_all(); //se retorna el resultado
	}

	//función que se llama en el archivo modificar.php que actualiza los datos del usuario
	function modificar($id, $email, $contra){
		global $conexion;
		$query = "UPDATE usuarios SET correo='$email', contra='$contra' WHERE id='$id'"; //creación de la consulta
		$resultado = mysqli_query($conexion,$query); //se ejecuta la consutla
		return $resultado; //se retorna el resultado
	}
?>