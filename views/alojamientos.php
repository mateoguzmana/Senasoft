<section id="alojamientos">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Ingresar Alojamiento</h2>
      </div>
      <div class="panel-body">
        <form class="" action="core/controllers/alojamientos.controller.php" method="post">
          <input type="hidden" name="M" value="1">
          <div class="form-group">
            <label for="tipo" class="control-label">Tipo </label>
            <input type="text" name="Tipo" value="" class="form-control" id="tipo">
          </div>
          <div class="form-group">
            <label for="camas" class="control-label">Camas </label>
            <input type="number" name="Camas" value="" class="form-control" id="camas">
          </div>
          <div class="form-group">
            <label for="costo" class="control-label">Costo </label>
            <input type="number" name="Costo" value="" class="form-control" id="costo">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Enviar</button>

        </form>
      </div>
      <div class="panel-footer" align="center">
        <a href="?view=actualizar_alojamientos">Ver todos</a>
      </div>
    </div>
  </div>
</section>
