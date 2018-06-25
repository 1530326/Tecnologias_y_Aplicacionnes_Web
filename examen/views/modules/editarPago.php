<?php
  //si no hay sesión iniciada se redirecciona a la página de inicio
  if(!isset($_SESSION["nombre"])){
    echo "<script>location.href='index.php?action=inicio';</script>";
    exit();
  }
?>     
<div class="row">
  <h3 align="center">Modificar pago</h3>
  <form action="" method="POST">
    <?php
      $editarPago = new MvcController();
      //se imprime el formulario de editar pago con sus respectivos datos y cuando se presione al botón de actualizar se ejecuta el método de actualizarPagoController
      $editarPago -> editarPagoController();
      $editarPago -> actualizarPagoController();
    ?>
  </form>
</div>