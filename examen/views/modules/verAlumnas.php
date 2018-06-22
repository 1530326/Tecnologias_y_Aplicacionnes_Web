<?php
  if(!isset($_SESSION["nombre"])){
    echo "<script>location.href='index.php?action=inicio';</script>";
    exit();
  }
?>
<div class="row">
  <div class="section-container tabs" data-section>
    <h4 align="center">Alumnas</h4>
    <section class="section">
      <a style="float:right" href="index.php?action=alumnas"><button class="botonS">Agregar alumna</button></a>
      <div class="content" data-slug="panel1">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Fecha Nacimiento</th>
              <th>Grupo</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $vistaAlumnas = new MvcController();
              $vistaAlumnas -> vistaAlumnasController();
              $vistaAlumnas -> borrarAlumnasController();
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>