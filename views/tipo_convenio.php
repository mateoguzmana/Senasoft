<section id="departamentos">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Ingresar tipo de convenio</h2>
      </div>
      <div class="panel-body">
        <form class="" action="core/controllers/tipo_convenio.controller.php" method="post">
          <input type="hidden" name="M" value="1">
          <div class="form-group">
            <label for="nombre" class="control-label">Nombre </label>
            <input type="text" name="Nombre" value="" class="form-control" id="nombre">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Enviar</button>

        </form>
      </div>
      <div class="panel-footer" align="center">
        <a href="?view=actualizar_tipo_convenio">Ver todos</a>
      </div>
    </div>
  </div>
</section>
