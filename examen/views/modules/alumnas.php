<?php
  //si no hay sesión inciada se manda a la página de incio, ya que este modulo solo puede ser utilizado por el administrador
  if(!isset($_SESSION["nombre"])){
    echo "<script>location.href='index.php?action=inicio';</script>";
    exit();
  }
  //se crea un objeto de la clase MvcController
  $mvc = new MvcController();
  $grupos = $mvc->listarGruposController(); //se manda llamar el método que lista los grupos disponibles
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
      <h3>Agregar alumna</h3>
      <form action="" method="POST">
      	<p><label>Nombre: </label><input type="text" name="alumnaNombre" placeholder="Nombre"></p>
        <p><label>Apellido: </label><input type="text" name="alumnaApellido" placeholder="Apellido"></p>
        <p>
          <label>Fecha de nacimiento: </label>
          <input type="date" name="fechaNacimiento">
        </p>
        <p><label>Grupo: </label>
            <select name="alumnaGrupo">
              <?php foreach($grupos as $group): ?>
              <option value="<?php echo $group["id_grupo"]; ?>"><?php echo $group["nombre"]; ?></option>
              <?php endforeach; ?>
            </select>
        </p>
        <input type="submit" name="submit" class="button" value="Guardar">
      </form>
    </div>

  </body>
</html>

<?php
  //se manda llamar el método del controlador que obtiene los datos para hacer la insercción en la base de datos
	$registro = new MvcController();
	$registro->addAlumnaController();
?>