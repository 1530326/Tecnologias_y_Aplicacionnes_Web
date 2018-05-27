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
      <h3>Modificar Alumno</h3>
      <form method="POST">
      	<?php
          $editarAlumno = new MvcController();
          $editarAlumno -> editarAlumnosController();
          $editarAlumno -> actualizarAlumnosController();
        ?>
      </form>
    </div>

  </body>
</html>