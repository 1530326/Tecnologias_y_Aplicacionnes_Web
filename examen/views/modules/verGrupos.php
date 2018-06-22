<?php
  if(!isset($_SESSION["nombre"])){
    echo "<script>location.href='index.php?action=inicio';</script>";
    exit();
  }
?>
<div class="row">
  <div class="section-container tabs" data-section>
    <h4 align="center">Grupos</h4>
    <section class="section">
      <a style="float:right" href="index.php?action=grupos"><button class="botonS">Agregar grupo</button></a>
      <div class="content" data-slug="panel1">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $vistaGrupos = new MvcController();
              $vistaGrupos -> vistaGruposController();
              $vistaGrupos -> borrarGruposController();
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>