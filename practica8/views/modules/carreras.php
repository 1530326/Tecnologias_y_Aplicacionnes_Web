<?php
  session_start();

  if($_SESSION["tipo"]=="maestro"){

    header("location:index.php?action=mostrarTutorias");

    exit();

  }
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tutorías</title>
    <link rel="stylesheet" href="../foundation.css" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
    <br>
     
    <div class="row">
      <h3>Agregar Carrera</h3>
      <form method="POST">
      	<p><label>Nombre: </label><input type="text" name="carreraNombre" placeholder="Nombre"></p>
        <input type="submit" name="submit" class="button" value="Guardar">
      </form>
    </div>

  </body>
</html>

<?php
  $registro = new MvcController();
  $registro -> addCarreraController();

  if(isset($_GET["action"])){
    if($_GET["action"] == "ok"){
      echo "Registro Exitoso";
    }
  }
?>