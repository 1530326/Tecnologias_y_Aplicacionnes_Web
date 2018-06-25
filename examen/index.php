<?php
	require_once("controller/controller.php"); //se incluye el archivo controller.php que es el intermediario entre la vista y el modelo 
	require_once("model/enlaces.php"); //este archivo contiene los url de las diferentes opciones de navegación
	require_once("model/crud.php"); //el archivo crud.php es que incluye los métodos que comunican al controlador con la base de datos
	
	$mvc = new MvcController();
	$mvc->plantilla(); //se ejecuta el método plantilla, que con tiene el template a utilizar
?>