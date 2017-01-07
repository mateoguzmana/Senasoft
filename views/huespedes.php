<section id="huespedes">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Ingresar huesped</h2>
      </div>
      <div class="panel-body">
        <form class="" action="core/controllers/huespedes.controller.php" method="post">
          <input type="hidden" name="M" value="1">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nombre" class="control-label">Nombre </label>
              <input type="text" name="Nombre" value="" class="form-control" id="nombre">
            </div>

            <div class="form-group">
              <label for="Email" class="control-label">Email </label>
              <input type="email" name="Email" value="" class="form-control" id="Email">
            </div>
            <div class="form-group">
              <label for="tipo_doc" class="control-label">Tipo de documento </label>
              <select class="form-control" id="Tipo_doc" name="Tipo_doc">
                <option value="">Seleccione una opción</option>
                <option value="TI">Tarjeta de identidad</option>
                <option value="CC">Cedula de ciudadania</option>
                <option value="Pasaporte">Pasaporte</option>
              </select>
            </div>

            <div class="form-group">
              <label for="convenio" class="control-label">Tipo de convenio </label>
              <select class="form-control" id="Convenio" name="Convenio">
                <option value="">Seleccione una opción</option>
                <option value="C1">Convenio 1</option>
              </select>
            </div>

          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="apellido" class="control-label">Apellido </label>
              <input type="text" name="Apellidos" value="" class="form-control" id="apellido">
            </div>

            <div class="form-group">
              <label for="telefono" class="control-label">Número de telefono</label>
              <input type="number" name="Telefono" value="" class="form-control" id="telefono">
            </div>
            <div class="form-group">
              <label for="documento" class="control-label">Número de documento</label>
              <input type="number" name="Documento" value="" class="form-control" id="documento">
            </div>
          </div>

          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </div>


        </form>
      </div>
      <div class="panel-footer" align="center">
        <a href="?view=actualizar_huespedes">Ver todos</a>
      </div>
    </div>
  </div>
</section>
