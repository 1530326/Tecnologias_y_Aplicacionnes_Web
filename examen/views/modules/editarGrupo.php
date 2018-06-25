<?php
  //si no hay sesión iniciada, se redirecciona a la página de inicio
  if(!isset($_SESSION["nombre"])){
    echo "<script>location.href='index.php?action=inicio';</script>";
    exit();

  }
?>     
<div class="row">
  <h3 align="center">Modificar grupo</h3>
  <form action="" method="POST">
    <?php
      $editarAlumno = new MvcController();
      //se imprime el forumlario de editar grupo y cuando se presione el botón de actualizar se ejecuta el método de actualizarGrupoController
      $editarAlumno -> editarGrupoController();
      $editarAlumno -> actualizarGrupoController();
    ?>
  </form>
</div>