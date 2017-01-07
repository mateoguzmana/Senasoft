<?php
require_once "core/models/alojamientos.model.php";;
$query = new Alojamientos();
$Alojamientos = $query->Listar();
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
        foreach ($Alojamientos as $Alojamiento) {
        ?>
        <tr>
          <td><?=$Alojamiento["Tipo"]?></td>
          <td class="text-right">
            <a href="#modal-actualizar<?=$Alojamiento['Id']?>" data-toggle="modal" class="btn btn-primary">Actualizar</a>
            <a href="#modal-eliminar<?=$Alojamiento['Id']?>" data-toggle="modal" class="btn btn-danger">Eliminar</a>
            <!-- MODAL ELIMINAR -->
            <div class="modal fade" id="modal-eliminar<?=$Alojamiento['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-left">
                    <h4>¿Seguro que desea eliminar este alojamiento?</h4>
                  </div>
                  <div class="modal-body">
                    <a data-dismiss="modal" onclick="Eliminar('alojamientos', '<?=$Alojamiento["Id"]?>');" class="btn btn-success">Aceptar</a>
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL ACTUALIZAR -->
            <div class="modal fade" id="modal-actualizar<?=$Alojamiento['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                <!-- FORMULARIO -->
                  <form class="form" action="core/controllers/alojamientos.controller.php" method="post">
                    <input type="hidden" name="M" value="2">
                  <div class="modal-header text-left">
                    <h4>Actualizar departamento</h4>
                      <input type="hidden" name="M" value="2">
                      <input type="hidden" name="Id" value="<?=$Alojamiento['Id']?>">
                      <div class="form-group">
                        <label for="nombre">Nuevo tipo</label>
                        <input type="text" name="Tipo" value="<?=$Alojamiento['Tipo']?>" placeholder="Nuevo nombre" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nombre">Camas</label>
                        <input type="number" name="Camas" value="<?=$Alojamiento['Camas']?>" placeholder="Nuevo nombre" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nombre">Costo</label>
                        <input type="text" name="Costo" value="<?=$Alojamiento['Costo']?>" placeholder="Nuevo nombre" class="form-control">
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
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>
