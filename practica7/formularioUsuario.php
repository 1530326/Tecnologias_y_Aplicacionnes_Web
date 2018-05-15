<?php
	include_once('funciones.php'); //se incluye el archivo funciones 

	if(isset($_POST['registrar'])){
		$nombre = $_POST["nombre"]; //toma el valor de nombre
		$contra = $_POST["contra1"]; //toma el valor de contraseña

		$res = registrarUsuario($nombre,$contra); //en el archivo funciones se encuentra la función para registrar a un usuario y recibe los valores de nombre y cotraseña

		if($res){
			header('Location: index.php'); //si todo sale bien se redirecciona al index
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/formulario.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css" >
	<link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css" >
	
	<script src="alertify/alertify.min.js"></script>
</head>
<body>
	<h1 class="titulo" align="center"><br>REGISTRO DE USUARIOS</h1><br>
	<div class="container">
		<form action="" method="POST" enctype="multipart/form-data" name="formulario">
			<div class="contenedor">
				<div>
					<p>
						<label>Nombre de usuario: </label>
						<input type="text" name="nombre" id="nombre" placeholder="Usuario">
					</p>
					<p>
						<label>Contraseña: </label>
						<input type="password" name="contra1" id="contra1" placeholder="Contraseña">
					</p>
					<p>
						<label>Confirmar contraseña: </label>
						<input type="password" name="contra2" id="contra2" placeholder="Confirmar contraseña">
					</p>
					<br>
					<div align="right">
						<input type="submit" value="Registrar" name="registrar"><br>
					</div>
				</div>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		(function(){
			//obtiene los nombres de los elementos que se encuentran en el formulario
			var formulario = document.getElementsByName("formulario")[0];
			var cancelar = false;

			//funcion para validar el campo nombre
			function validarNombre(e){
				var inputNombre = formulario.nombre.value; //guarda el valor que tenga el input

				if(inputNombre==0){ //si esta vacio manda un mensaje al usuario
					alertify.error("Falta completar el campo Usuario");
					cancelar=true; 
					e.preventDefault(); //se cancela lo que haya después de esto
					return 
				}
				cancelar=false;
			}

			//funcion para validar el campo contraseña
			function validarContra(e){
				var inputContra = formulario.contra1.value; //toma el valor del primer input de contraseña

				if(inputContra==0){ //si el campo está vacio manda un mensaje al usuario
					alertify.error("Falta completar el campo Contraseña");
					cancelar=true;
					e.preventDefault(); //se termina la ejecución
					return 
				}
				cancelar=false;
			}

			//función para validar el segundo input de contraseña y comparar si son iguales
			function validarContra2(e){
				var contra1 = formulario.contra1.value; //se toman ambos valores de los input de contraseñas
				var contra2 = formulario.contra2.value;
				//se valida que el segundo input de contraseña no este vacio
				if(contra2==0){
					alertify.error("Falta completar el campo Confirmar contraseña");
					cancelar=true;
					e.preventDefault();
					return 
				}
				//se valida que ambas contraseñas sean iguales
				if(contra1!=contra2){
					alertify.error("Las contraseñas no coinciden");
					cancelar=true;
					e.preventDefault();
					return
				}
				cancelar = false;
			}			
			//ejecutar funciones
			function validar(e){
				validarNombre(e);
				if(!cancelar){
					validarContra(e);
					if(!cancelar){
						validarContra2(e);
					}
				}
			}
			//esta funcion se ejecutara cuando se presione el boton de tipo submit
			formulario.addEventListener("submit",validar);
		})();
	</script>

</body>
</html>