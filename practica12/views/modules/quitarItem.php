<?php
if(!isset($_GET["id"])) return;
$indice = $_GET["id"];

array_splice($_SESSION["carrito"], $indice, 1);
echo "<script>location.href='index.php?action=agregarVenta';</script>";
?>