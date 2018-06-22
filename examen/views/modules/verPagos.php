<?php
  if(!isset($_SESSION["nombre"])){
    echo "<script>location.href='index.php?action=inicio';</script>";
    exit();
  }
?>
<div class="row">
  <h4 align="center">Orden de envios de Comprobantes<br>Festival Verano 2018</h4>
  <div class="section-container tabs" data-section>
    <section class="section">
      <div class="content" data-slug="panel1">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre Alumna</th>
              <th>Grupo</th>
              <th>Nombre mamá</th>
              <th>Fecha de pago</th>
              <th>Fecha de envío</th>
              <th>Imagen</th>
              <th>Folio</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $vistaPagos = new MvcController();
              $vistaPagos -> vistaPagosController();
              $vistaPagos -> borrarPagosController();
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>