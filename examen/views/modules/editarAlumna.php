<?php
  //si no hay sesión iniciada, se redirecciona a la página de inicio
  if(!isset($_SESSION["nombre"])){
    echo "<script>location.href='index.php?action=inicio';</script>";
    exit();

  }
?>     
<div class="row">
  <h3 align="center">Modificar alumna</h3>
  <form action="" method="POST">
    <?php
      //se imprime el formulario con los datos de la alumna y cuando se presione el botón de actuzalizar se ejecuta el método de actualizarAlumnaController
      $editarAlumna = new MvcController();
      $editarAlumna -> editarAlumnaController();
      $editarAlumna -> actualizarAlumnaController();
    ?>
  </form>
</div>