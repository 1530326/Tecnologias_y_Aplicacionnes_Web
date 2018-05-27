<?php
  session_start();

  if($_SESSION["tipo"]=="maestro"){

    header("location:index.php?action=mostrarTutorias");

    exit();

  }

  $carreras = new MvcController();
  $carreras1 = $carreras->listarCarreras();
  $maestros1 = $carreras->listarMaestros();
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
      <h3>Agregar alumno</h3>
      <form action="" method="POST">
      	<p><label>Matrícula: </label><input type="text" name="alumnoMatricula" placeholder="Matrícula"></p>
      	<p><label>Nombre: </label><input type="text" name="alumnoNombre" placeholder="Nombre"></p>
        <p><label>Carrera: </label>
          <select name="alumnoCarrera">
            <?php foreach($carreras1 as $carr): ?>
              <option value="<?php echo $carr['id'] ?>"><?php echo $carr['nombre'] ?></option>
            <?php endforeach; ?>
          </select>
        </p>
        <p><label>Tutor: </label>
            <select name="alumnoTutor">
              <?php foreach($maestros1 as $mtr): ?>
              <option value="<?php echo $mtr['num_empleado'] ?>"><?php echo $mtr['nombre'] ?></option>
            <?php endforeach; ?>
            </select>
        </p>
        <input type="submit" name="submit" class="button" value="Guardar">
      </form>
    </div>

  </body>
</html>

<?php
	$registro = new MvcController();
	$registro->addAlumnoController();
?>