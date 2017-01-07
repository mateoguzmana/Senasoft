<?php
require_once "core/models/ciudades.model.php";
$query = new Ciudades();
$Departamentos = $query->ListarDep();
?>
<section id="ciudades">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Ingresar Ciudad</h2>
      </div>
      <div class="panel-body">
        <form class="" action="core/controllers/ciudades.controller.php" method="post">
          <input type="hidden" name="M" value="1">
          <div class="form-group">
            <label for="nombre" class="control-label">Nombre </label>
            <input type="text" name="Nombre" value="" class="form-control" id="nombre">
          </div>
          <div class="form-group">
            <label for="depaertamento" class="control-label">Departamento </label>
            <select class="form-control" id="departamento" name="Departamento">
              <option value="">Seleccione una opción</option>
              <?php
              foreach ($Departamentos as $Departamento) {
              ?>
              <option value="<?=$Departamento['Id']?>"><?=$Departamento['Nombre']?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Enviar</button>

        </form>
      </div>
      <div class="panel-footer" align="center">
        <a href="?view=actualizar_ciudades">Ver todos</a>
      </div>
    </div>
  </div>
</section>
