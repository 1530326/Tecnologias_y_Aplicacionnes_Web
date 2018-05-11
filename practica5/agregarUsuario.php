<?php
  include_once('funciones.php'); //incluir el archivo donde se encuentra la funcion de agregar
  if(isset($_POST['submit'])){
    $email = $_POST['email']; //obtener el valor del campo email
    $contra = $_POST['pass']; //obtener el valor del campo contra

    $res = agregar($email, $contra); //mandar los valores a la funcion de agregar que se encuentra en el archivo funciones.php

    if($res){ 
      header('Location: index.php'); //si se agregó con éxito redireccionar al index
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
        <p><label>Email: </label><input type="text" name="email" placeholder="Email"></p>
        <p><label>Password: </label><input type="text" name="pass" placeholder="Password"></p>
        <input type="submit" name="submit" class="button" value="Guardar">
      </form>
    </div>

    <?php require_once('footer.php'); ?>
  </body>
</html>