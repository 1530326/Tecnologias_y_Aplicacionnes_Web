<?php
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
      $editarAlumno -> editarGrupoController();
      $editarAlumno -> actualizarGrupoController();
    ?>
  </form>
</div>