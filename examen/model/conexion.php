<?php
	
	//clase conexión para la base de datos
	class Conexion{
		public static function conectar(){
			//se realiza una conexión, enviando el nombre de la base de datos, el usuario y contraseña
			$link = new PDO("mysql:host=localhost;dbname=examenu2","root","");
			//se retorna el valor
			return $link;
		}
	}

?>