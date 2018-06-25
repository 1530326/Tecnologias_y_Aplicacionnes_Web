<?php
  //de acuerdo con lo que contenga el action es el menú de navegación que se va a mostrar
	if(empty($_GET["action"])){
		$_GET["action"] = "inicio";
	}
?>

<ul>
  <?php if($_GET["action"]!="selectAlumnas"){ ?>
    <li class="active">Danzlife</li>
  <?php } ?>
  <?php if($_GET["action"]=="sesion" || $_GET["action"]=="lugares" || $_GET["action"]=="inicio" || $_GET["action"]=="salir"){ ?>
  <li style="float:right"><a class="derecha" href="index.php?action=sesion">Iniciar Sesión</a></li>
  <li style="float:right"><a class="derecha" href="index.php?action=lugares">Lugares</a></li>
  <li style="float:right"><a class="derecha" href="index.php">Inicio</a></li>
  <?php 
  	}else if(isset($_SESSION["nombre"])&&$_GET["action"]!="selectAlumnas"){
  ?>
    <li style="float:right"><a class="derecha" href="index.php?action=salir">Cerrar Sesión</a></li>
  	<li style="float:right"><a class="derecha" href="index.php?action=verGrupos">Grupos</a></li>
  	<li style="float:right"><a class="derecha" href="index.php?action=verAlumnas">Alumnas</a></li>
	  <li style="float:right"><a class="derecha" href="index.php?action=verPagos">Pagos</a></li>
  <?php } ?>
</ul>