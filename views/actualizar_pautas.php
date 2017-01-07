<?php
require_once "core/models/pautes.model.php";
$query = new Pautes();
$Pautes = $query->Listar();

?>
<section class="espacio-tablas">
  <div class="col-md-10 col-md-offset-1">
    <table class="table table-stripped">
      <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Url</th>
        <th></th>
      </thead>
      <tbody>
        <?php
        foreach ($Pautes as $Paute) {
        ?>
        <tr id="fila<?=$Paute['Id']?>">
          <td><?=$Paute["Nombre"]?></td>
          <td><?=$Paute["Descripcion"]?></td>
          <td><?=$Paute["Url"]?></td>
          <td class="text-right">
            <a href="#modal-actualizar<?=$Paute['Id']?>" data-toggle="modal" class="btn btn-primary btn-xs">Actualizar</a>
            <a href="#modal-eliminar<?=$Paute['Id']?>" data-toggle="modal" class="btn btn-danger btn-xs">Eliminar</a>
            <!-- MODAL ELIMINAR -->
            <div class="modal fade" id="modal-eliminar<?=$Paute['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-left">
                    <h4>¿Seguro que desea eliminar esta pauta?</h4>
                  </div>
                  <div class="modal-body">
                    <a data-dismiss="modal" onclick="Eliminar('pautes', '<?=$Paute["Id"]?>');" class="btn btn-success">Aceptar</a>
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL ACTUALIZAR -->
            <div class="modal fade" id="modal-actualizar<?=$Paute['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                <!-- FORMULARIO -->
                  <form class="form" action="core/controllers/pautes.controller.php" method="post">
                  <div class="modal-header text-left">
                    <h4>Actualizar pauta</h4>
                      <input type="hidden" name="M" value="2">
                      <input type="hidden" name="Id" value="<?=$Paute['Id']?>">
                      <div class="form-group">
                        <label for="nombre">Nuevo nombre</label>
                        <input type="text" name="Nombre" value="<?=$Paute['Nombre']?>" placeholder="Nuevo nombre" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="descripcion">Nueva descripción</label>
                        <input type="text" name="Descripcion" value="<?=$Paute['Descripcion']?>" placeholder="Nuevo descripcion" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nombre">Nueva url</label>
                        <input type="url" name="Url" value="<?=$Paute['Url']?>" placeholder="Nuevo nombre" class="form-control">
                      </div>
                  </div>
                  <div class="modal-body">
                    <input type="submit" class="btn btn-success" value="Aceptar">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
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
