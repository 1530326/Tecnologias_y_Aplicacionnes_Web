<?php
	//destruir la sesión y redireccionar a index.php
	session_start();
	session_unset();
	session_destroy();
	header("Location: index.php");
?>