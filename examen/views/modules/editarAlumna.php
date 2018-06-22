<?php
  if(!isset($_SESSION["nombre"])){

    echo "<script>location.href='index.php?action=inicio';</script>";

    exit();

  }
?>     
<div class="row">
  <h3 align="center">Modificar alumna</h3>
  <form action="" method="POST">
    <?php
      $editarAlumna = new MvcController();
      $editarAlumna -> editarAlumnaController();
      $editarAlumna -> actualizarAlumnaController();
    ?>
  </form>
</div>