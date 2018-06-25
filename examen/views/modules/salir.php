<?php
//se destruye la sesión cuando se le da la opción de Cerrar Sesión
session_start();
$_SESSION["activo"] = NULL;
session_unset();
session_destroy();

//se redirecciona a la página de inicio
echo "<script>location.href='index.php';</script>";

?>