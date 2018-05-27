<?php
  session_start();

  if($_SESSION["tipo"]=="admin"){

    header("location:index.php?action=mostrarAlumnos");

    exit();

  }

  $tutor = new MvcController();
  $alumnos = $tutor->listarAlumnos();
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
      <h3>Agregar tutoría</h3>
      <form action="" method="POST">
      	<p><label>Fecha: </label><input type="date" name="tutoriaFecha" placeholder="Fecha"></p>
      	<p><label>Hora: </label><input type="time" name="tutoriaHora" placeholder="Hora"></p>
        <p><label>Temas: </label><input type="text" name="tutoriaTema" placeholder="Temas"></p>
        <p><label>Tipo: </label>
          <select name="tutoriaTipo">
            <option>Grupal</option>
            <option>Individual</option>
          </select>
        </p>
        <p><label>*Si es individual* Alumno: </label>
          <select name="tutoriaAlumno">
              <?php foreach($alumnos as $al): ?>
              <option value="<?php echo $al['matricula'] ?>"><?php echo $al['nombre'] ?></option>
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
	$registro->addTutoriaController();
?>