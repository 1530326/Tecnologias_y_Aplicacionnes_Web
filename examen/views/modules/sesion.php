<?php

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danzlife</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
    <br>
    <div class="row">
      <h3>Iniciar sesión</h3>
      <form method="POST">
        <p><label>Usuario: </label><input type="text" name="usuario" placeholder="Email"></p>
        <p><label>Password: </label><input type="password" name="contra" placeholder="Password"></p>
        <input type="submit" name="submit" class="button" value="Iniciar sesión">
      </form>
    </div>
  </body>
</html>

<?php
  $iniciar = new MvcController();
  $iniciar->ingresarController();
?>