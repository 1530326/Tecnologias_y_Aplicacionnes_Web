<?php
session_start();
$_SESSION["activo"] = NULL;
session_unset();
session_destroy();

echo "<script>location.href='index.php';</script>";

?>