<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }

  $objeto = new MvcController();
  $_SESSION["tienda"] = $_GET["id"];

  $_SESSION["nomTienda"] = $objeto->nombreTiendaController($_SESSION["tienda"]);
 
  echo "<script>location.href='index.php?action=dashboard2';</script>";
?>