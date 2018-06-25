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
            </tr>
          </thead>
          <tbody>
            <?php
              //se imprime las filas con los registros de la tabla lugares
              $vistaLugares = new MvcController();
              $vistaLugares -> vistaLugaresController();
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>