<section id="paute">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Paute con nosotros</h2>
      </div>
      <div class="panel-body">
        <form class="" action="core/controllers/pautes.controller.php" method="post">
          <input type="hidden" name="M" value="1">
          <div class="form-group">
            <label for="nombre" class="control-label">Nombre </label>
            <input type="text" name="Nombre" value="" class="form-control" id="nombre" required>
          </div>
          <div class="form-group">
            <label for="Descripcion" class="control-label">Descripcion </label>
            <textarea name="Descripcion" class="form-control" id="nombre" required> </textarea>
          </div>
          <div class="form-group">
            <label for="Url" class="control-label">Url </label>
            <input type="url" name="Url" value="" class="form-control" id="nombre" required>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Enviar"></a>
        </form>
      </div>
      <div class="panel-footer" align="center">
        <a href="?view=actualizar_pautas">Ver todos</a>
      </div>
    </div>
  </div>
</section>
