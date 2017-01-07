<?php
require_once "core/models/fincas.model.php";
$query = new Fincas();
$Departamentos = $query->ListarDepartamentos();
?>
<section id="fincas">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Ingresar Finca</h2>
      </div>
      <div class="panel-body">
        <form class="" action="core/controllers/fincas.controller.php" method="post">
          <input type="hidden" name="M" value="1">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nombre" class="control-label">Razón social </label>
              <input type="text" name="Razon" value="" class="form-control" id="razon_social">
            </div>

            <div class="form-group">
              <label for="departamento" class="control-label">Departamento </label>
              <select class="form-control" id="Departamento" name="Departamento" onchange="LoadCiudad();">
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

            <div class="form-group">
              <label for="direccion" class="control-label">Dirección </label>
              <input type="text" name="Direccion" value="" class="form-control" id="direccion">
            </div>


            <div class="form-group">
              <label for="regional" class="control-label">Regional Nacional de Turismo </label>
              <input type="text" name="Regional" value="" class="form-control" id="regional">
            </div>
          </div>


          <div class="col-md-6">
            <div class="form-group">
              <label for="nit" class="control-label">Nit </label>
              <input type="text" name="Nit" value="" class="form-control" id="nit">
            </div>



            <div class="form-group">
              <label for="ciudad" class="control-label">Ciudad </label>
              <select class="form-control" id="Ciudad" name="Ciudad">
                <option value="">Seleccione una opción</option>
              </select>
            </div>

            <div class="form-group">
              <label for="capacidad" class="control-label">Capacidad </label>
              <input type="number" name="Capacidad" value="" class="form-control" id="capacidad">
            </div>
          </div>


          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </div>



        </form>
      </div>
      <div class="panel-footer" align="center">
        <a href="?view=actualizar_fincas">Ver todos</a>
      </div>
    </div>
  </div>
</section>
