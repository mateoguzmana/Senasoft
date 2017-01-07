<?php
require_once "core/models/checkin.model.php";
$query = new Checkin();
$Fincas = $query->ListarFincas();
$Huespedes = $query->ListarHuespedes();
$Alojamientos = $query->ListarAlojamientos();
?>
<section id="checkin">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Ingresar Checkin</h2>
      </div>
      <div class="panel-body">
        <form class="" action="core/controllers/checkin.controller.php" method="post">
          <input type="hidden" name="M" value="1">
          <div class="form-group">
            <label for="#finca" class="control-label">Finca </label>
            <select class="form-control" id="finca" name="Finca">
              <option value="">Seleccione una opción</option>
              <?php
              foreach ($Fincas as $Finca) {
              ?>
              <option value="<?=$Finca["Id"]?>"><?=$Finca["Razon"]?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="#huesped" class="control-label">Huesped </label>
            <select class="form-control" id="huesped" name="Huesped">
              <option value="">Seleccione una opción</option>
              <?php
              foreach ($Huespedes as $Huesped) {
              ?>
              <option value="<?=$Huesped["Id"]?>"><?=$Huesped["Nombre"]?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="#alojamiento" class="control-label">Alojamiento </label>
            <select class="form-control" id="alojamiento" name="Alojamiento">
              <option value="">Seleccione una opción</option>
              <?php
              foreach ($Alojamientos as $Alojamiento) {
              ?>
              <option value="<?=$Alojamiento["Id"]?>"><?=$Alojamiento["Tipo"]?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
      </div>
      <div class="panel-footer" align="center">
        <a href="?view=actualizar_checkin">Ver todos</a>
      </div>
    </div>

  </div>
</section>
