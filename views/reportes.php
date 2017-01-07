<section id="reportes">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Reportes</h2>
      </div>

      <div class="panel-body">
        <div class="form-group">
          <label for="#fecha-checkin">Reporte historico huespedes</label>
          <div class="input-group">
            <input type="text" class="form-control" value="Reporte historico" disabled readonly>
            <a onclick="ReporteHuespedes()" class="input-group-addon btn-primary"><span class="glyphicon glyphicon-print"></span></a>
          </div>
        </div>

        <div class="form-group">
          <label for="#fecha-checkin">Reporte historico fincas</label>
          <div class="input-group">
            <input type="text" class="form-control" value="Reporte historico fincas" disabled readonly>
            <a onclick="ReporteFincas()" class="input-group-addon btn-primary"><span class="glyphicon glyphicon-print"></span></a>
          </div>
        </div>
        <form class="" action="core/controllers/checkin.controller.php" method="post">
          <div class="form-group">
            <hr>
            <label for="#fecha-checkin">Reporte detallado</label>
            <div class="input-group">
              <select id="I" class="form-control" required>
                <option value="">Seleccione una opcion</option>
                <option value="1">Ingresos</option>
                <option value="2">Huespedes</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="#fecha-checkin">Desde</label>
                <input type="date" name="FechaInicio" class="form-control" id="FechaInicio">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="#fecha-checkout">Hasta</label>
                <input type="date" name="FechaFin" class="form-control" id="FechaFin">
              </div>
            </div>
          </div> <!-- Row -->
          <a onclick="BuscarReportes()" class="btn btn-primary btn-block">Buscar</a>
        </form>
        <hr>
      </div>
    </div>
  </div>
</section>
