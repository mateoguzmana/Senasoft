<?php
require_once "core/models/tipo_convenio.model.php";
$query = new TipoConvenio();
$TipoConvenios = $query->Listar();

?>
<section class="espacio-tablas">
  <div class="col-md-8 col-md-offset-2">
    <table class="table table-stripped">
      <thead>
        <th>Nombre</th>
        <th></th>
      </thead>
      <tbody>
        <?php
        foreach ($TipoConvenios as $TipoConvenio) {
        ?>
        <tr>
          <td><?=$TipoConvenio["Nombre"]?></td>
          <td class="text-right">
            <a href="#" class="btn btn-primary">Actualizar</a>
            <a href="#modal-eliminar" data-toggle="modal" class="btn btn-danger">Eliminar</a>
            <div class="modal fade" id="modal-eliminar">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-left">
                    <h4>¿Seguro que desea eliminar este tipo de convenio?</h4>
                  </div>
                  <div class="modal-body">
                    <a href="#" class="btn btn-success">Aceptar</a>
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</section>
