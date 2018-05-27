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
        <h3>Reportes</h3>
        <div class="section-container tabs" data-section>
          <section>
            Maestros
            <div class="content" data-slug="panel1">
              <table>
                <thead>
                  <tr>
                    <th width="100">Num. Empleado</th>
                    <th width="250">Carrera</th>
                    <th width="300">Nombre</th>
                    <th width="250">Email</th>
                  </tr>
                </thead>
                <tbody>
                        <?php
                          $vistaMaestros = new MvcController();
                          $vistaMaestros -> vistaMaestros2Controller();
                        ?>
                </tbody>
              </table>
            </div>
          </section>

          <section>
            Alumnos
            <div class="content" data-slug="panel1">
              <table>
                <thead>
                   <tr>
                    <th width="100">Matricula</th>
                    <th width="250">Nombre</th>
                    <th width="300">Carrera</th>
                    <th width="250">Tutor</th>
                  </tr>
                </thead>
                <tbody>
                        <?php
                          $vistaAlumnos = new MvcController();
                          $vistaAlumnos -> vistaAlumnos2Controller();
                        ?>
                </tbody>
              </table>
            </div>
          </section>

          <section>
            Tutorías
            <div class="content" data-slug="panel1">
              <table>
                <thead>
                  <tr>
                    <th width="100">ID</th>
                    <th width="250">Fecha</th>
                    <th width="300">Hora</th>
                    <th width="250">Temas</th>
                  </tr>
                </thead>
                <tbody>
                        <?php
                          $vistaTutorias = new MvcController();
                          $vistaTutorias -> vistaTutorias2Controller();
                        ?>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      
    </div>
  </body>
</html>