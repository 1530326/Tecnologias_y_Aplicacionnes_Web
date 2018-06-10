<?php
  if(!isset($_SESSION["id"])){
    echo "<script>location.href='index.php';</script>";
  }

  $_SESSION["tienda"] = $_GET["id"];
  echo "<script>location.href='index.php?action=dashboard2';</script>";
?>