<?php
  session_start();

  if($_SESSION["tipo"]=="admin"){

    header("location:index.php?action=mostrarAlumno");

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
        <h3>Tutorías</h3>
        <div class="section-container tabs" data-section>
          <section>
            <p><a href="index.php?action=tutorias" class="botonAgregar">Agregar nuevo</a></p>
            <div class="content" data-slug="panel1">
              <table>
                <thead>
                  <tr>
                    <th width="100">ID</th>
                    <th width="250">Fecha</th>
                    <th width="300">Hora</th>
                    <th width="250">Temas</th>
                    <th width="300">Acción</th>
                  </tr>
                </thead>
                <tbody>
                        <?php
                          $vistaTutorias = new MvcController();
                          $vistaTutorias -> vistaTutoriasController();
                          $vistaTutorias -> borrarTutoriasController();
                        ?>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      
    </div>
  </body>
</html>