<?php
  session_start();

  if($_SESSION["tipo"]=="maestro"){

    header("location:index.php?action=mostrarTutorias");

    exit();

  }

  $carreras = new MvcController();
  $carreras1 = $carreras->listarCarreras();
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
      <h3>Agregar maestro</h3>
      <form action="" method="POST">
        <p><label>No. Empleado: </label><input type="text" name="maestroNumEmpleado" placeholder="No. Empleado"></p>
        <p><label>Carrera: </label>
          <select name="maestroCarrera">
            <?php foreach($carreras1 as $carr): ?>
              <option value="<?php echo $carr['id'] ?>"><?php echo $carr['nombre'] ?></option>
            <?php endforeach; ?>
          </select>
        </p>
        <p><label>Nombre: </label><input type="text" name="maestroNombre" placeholder="Nombre"></p>
        <p><label>Email: </label><input type="email" name="maestroEmail" placeholder="Email"></p>
        <p><label>Password: </label><input type="password" name="maestroPassword" placeholder="Password"></p>
        <input type="submit" name="submit" class="button" value="Guardar">
      </form>
    </div>

  </body>
</html>

<?php
	$registro = new MvcController();
	$registro->addMaestroController();

	if(isset($_GET["action"])){
		if($_GET["action"]=="ok"){
			echo "Registro Exitoso";
		}
	}
?>