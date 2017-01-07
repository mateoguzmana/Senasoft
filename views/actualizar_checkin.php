<?php
require_once "core/models/checkin.model.php";
$query = new Checkin();
$Checkins = $query->Listar();

?>
<section class="espacio-tablas">
  <div class="col-md-10 col-md-offset-1">
    <table class="table table-stripped">
      <thead>
        <th>Fecha check-in</th>
        <th>Fecha check-out</th>
        <th>Huesped</th>
        <th></th>
      </thead>
      <tbody>
        <?php
        foreach ($Checkins as $Checkin) {
        ?>
        <tr id="fila<?=$Checkin['Id']?>">
          <td><?=$Checkin["Checkin"]?></td>
          <td><?=$Checkin["Checkout"]?></td>
          <td><?=$Checkin["Huesped"]?></td>
          <td class="text-right">
            <a href="#modal-actualizar<?=$Checkin['Id']?>" data-toggle="modal" class="btn btn-primary">Actualizar</a>
            <?php
            if($Checkin["Estado"]==0){?>
            <a href="#modal-finalizar<?=$Checkin['Id']?>" data-toggle="modal" class="btn btn-warning">Finalizar</a>
            <?php
            }
            ?>
            <a href="#modal-eliminar<?=$Checkin['Id']?>" data-toggle="modal" class="btn btn-danger">Eliminar</a>
            <!-- MODAL FINALIZAR -->
            <div class="modal fade" id="modal-finalizar<?=$Checkin['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-left">
                    <h4>¿Seguro que desea finalizar este checkin?</h4>
                  </div>
                  <div class="modal-body">
                    <a data-dismiss="modal" onclick="Finalizar('checkin', '<?=$Checkin["Id"]?>');" class="btn btn-success">Aceptar</a>
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL ELIMINAR -->
            <div class="modal fade" id="modal-eliminar<?=$Checkin['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-left">
                    <h4>¿Seguro que desea eliminar este checkin?</h4>
                  </div>
                  <div class="modal-body">
                    <a data-dismiss="modal" onclick="Eliminar('checkin', '<?=$Checkin["Id"]?>');" class="btn btn-success">Aceptar</a>
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL ACTUALIZAR -->
            <div class="modal fade" id="modal-actualizar<?=$Checkin['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                <!-- FORMULARIO -->
                  <form class="form" action="core/controllers/checkin.controller.php" method="post">
                  <div class="modal-header text-left">
                    <h4>Actualizar checkin</h4>
                      <input type="hidden" name="M" value="2">
                      <input type="hidden" name="Id" value="<?=$Checkin['Id']?>">
                      <div class="form-group">
                        <label for="#finca" class="control-label">Finca </label>
                        <select class="form-control" id="finca" name="Finca">
                          <option value="<?=$Checkin["Finca"]?>"><?=$Checkin["Finca"]?></option>
                          <option value="Finca1">Finca 1</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="#huesped" class="control-label">Huesped </label>
                        <select class="form-control" id="huesped" name="Huesped">
                          <option value="<?=$Checkin["Huesped"]?>"><?=$Checkin["Huesped"]?></option>
                          <option value="Huesped1">huesped 1</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="#alojamiento" class="control-label">Alojamiento </label>
                        <select class="form-control" id="alojamiento" name="Alojamiento">
                          <option value="<?=$Checkin["Alojamiento"]?>"><?=$Checkin["Alojamiento"]?></option>
                          <option value="Alojamiento">Alojamiento 1</option>
                        </select>
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
