<?php
  if(!isset($_SESSION["nombre"])){

    echo "<script>location.href='index.php?action=inicio';</script>";

    exit();

  }
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danzlife</title>
    <link rel="stylesheet" href="../foundation.css" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
    <br>
     
    <div class="row">
      <h3>Agregar grupo</h3>
      <form action="" method="POST">
      	<p><label>Nombre: </label><input type="text" name="grupoNombre" placeholder="Nombre"></p>
        <input type="submit" name="submit" class="button" value="Guardar">
      </form>
    </div>

  </body>
</html>

<?php
	$registro = new MvcController();
	$registro->addGrupoController();
?>