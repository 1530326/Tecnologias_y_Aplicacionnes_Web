<?php
    include_once('funciones.php'); //incluir el archivo de funciones
    if(isset($_POST['enviar'])){
        $nombre = $_POST['usuario']; //obtener el valor de nombre 
        $contra = $_POST['clave']; //obtener el valor de clave
        $pass = md5($contra); //encriptar la contraseña
        $res = verificarUsuario($nombre,$pass); //ejecutar la funcion
        if($res[0]!=0){ //si el usario se encuentra registrado iniciar sesión
            session_start();
            $_SESSION['nombre'] = $nombre;
            header('Location: menu.php'); //redireccionar al menu
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="alertify/css/alertify.css" >
	<link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css" >
	
	<script src="alertify/alertify.min.js"></script>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<form action="" method="post" name="formularioInicio">
        <h2>Iniciar sesión</h2>
        <input type="text" placeholder="Usuario" name="usuario">
        <input type="password" placeholder="Contraseña" name="clave">
        <input type="submit" value="Iniciar sesión" name="enviar"><br>
        <label align="right">¿No tienes una cuenta?</label>
        <a href="formularioUsuario.php" align="right">Registrate aquí</a>
    </form>

    <script type="text/javascript">
    	(function(){
            //obtener los nombres de los elementos del formulario
    		var formularioInicio = document.getElementsByName("formularioInicio")[0];
    		var cancelar = false;
            //validar el campo de nombre
    		function validarNombreUsuario(e){
    			if(formularioInicio.usuario.value==0){ //verificar que no este vacio, en caso de que lo este notificar al usuario
    				alertify.error("Falta completar el campo nombre de usuario");
    				cancelar=true;
    				e.preventDefault();
    				return
    			}
    			cancelar=false;
    		}
            //validar el campo de contraseña
    		function validarContraseña(e){
    			if(formularioInicio.clave.value==0){ //si el campo se encuentra vacio notificar al usuario
    				alertify.error("Falta completar el campo contraseña");
    				cancelar=true;
    				e.preventDefault();
    				return
    			}
    			cancelar=false;
    		}
            //ejecutar funciones de validación
    		function validar(e){
    			validarNombreUsuario(e);
    			if(!cancelar){
    				validarContraseña(e);
    			}
    		}
            //el botón submit ejecutará dicha función
    		formularioInicio.addEventListener("submit",validar);


    	})();
    </script>
</body>
</html>