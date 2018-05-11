<?php
  include_once('funciones.php'); //incluir el archivo donde se encuentra la funcion de agregar

  $id = isset( $_GET['id'] ) ? $_GET['id'] : ''; //obtener el id que se encuentra en la URL

  $user = detallesModificar($id); //ejecutar la función que trae como resultado los datos del usuario

  foreach ($user as $users) {
    $email = $users[1]; //asignar a la variable email el valor correspondiente
    $contra = $users[2]; //asignar a la variable contra el valor correspondiente
  }

  if(isset($_POST['submit'])){
    $email = $_POST['email']; //obtener el valor del campo email
    $contra = $_POST['pass']; //obtener el valor del campo contra

    $res = modificar($id, $email, $contra); //mandar los valores a la funcion de modificar que se encuentra en el archivo funciones.php

    if($res){ 
      header('Location: index.php'); //si se modificó con éxito redireccionar al index
    } else{
      echo "<script>alert('Ha ocurrido un error');</script>"; //informar si hubo un error con el registro
    }
  }
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    <br>
    <?php require_once('header.php'); ?>

     
    <div class="row">
      <h3>Agregar usuario</h3>
      <form action="" method="POST">
        <p><label>Email: </label><input type="text" name="email" value="<?php echo $email ?>"></p>
        <p><label>Password: </label><input type="text" name="pass" value="<?php echo $contra ?>"></p>
        <input type="submit" name="submit" class="button" value="Guardar">
      </form>
    </div>

    <?php require_once('footer.php'); ?>
  </body>
</html>