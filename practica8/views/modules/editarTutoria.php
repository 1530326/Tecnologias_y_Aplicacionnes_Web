<?php
  session_start();

  if($_SESSION["tipo"]=="admin"){

    header("location:index.php?action=mostrarAlumnos");

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
      <h3>Modificar tutoría</h3>
      <form action="" method="POST">
        <?php
          $editarTutoria = new MvcController();
          $editarTutoria -> editarTutoriasController();
          $editarTutoria -> actualizarTutoriasController();
        ?>
      </form>
    </div>

  </body>
</html>