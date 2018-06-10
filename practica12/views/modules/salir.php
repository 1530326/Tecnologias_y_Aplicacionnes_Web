<?php
unset($_SESSION["carrito"]);
$_SESSION["carrito"] = [];
$_SESSION["id"] = NULL;
session_destroy();

echo "<script>location.href='index.php';</script>";

?>