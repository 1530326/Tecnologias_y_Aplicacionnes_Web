<?php
	require_once("controller/controller.php"); //aqui se encuentran todos los metodos que comunican a la interfaz con la base de datos
	require_once("model/model.php"); //en este archivo se encuentra hacia donde se debe diregir el sistema de acuerdo a su action
	require_once("model/crud.php"); //aqui se encuentran todos los metodos que se encargan de realizar transferencias con la base de datos

	$mvc = new MvcController(); //se crea un objeto de la clase que se encuentra en el archivo controller.php
	$mvc->plantilla(); //se ejecuta el método de la plantilla

?>