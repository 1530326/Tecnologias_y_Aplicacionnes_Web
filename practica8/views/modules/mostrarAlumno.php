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
    <div class="row">
        <h3>Alumnos</h3>
        <div class="section-container tabs" data-section>
          <section>
            <p><a href="index.php?action=alumnos" class="botonAgregar">Agregar nuevo</a></p>
            <div class="content" data-slug="panel1">
              <table>
                <thead>
                  <tr>
                    <th width="100">Matricula</th>
                    <th width="250">Nombre</th>
                    <th width="300">Carrera</th>
                    <th width="250">Tutor</th>
                    <th width="300">Acción</th>
                  </tr>
                </thead>
                <tbody>
                        <?php
                          $vistaAlumnos = new MvcController();
                          $vistaAlumnos -> vistaAlumnosController();
                          $vistaAlumnos -> borrarAlumnosController();
                        ?>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      
    </div>
  </body>
</html>