<?php
require_once "core/models/ciudades.model.php";;
$query = new Ciudades();
$Ciudades = $query->Listar();
?>
<section class="espacio-tablas">
  <div class="col-md-8 col-md-offset-2">
    <table class="table table-stripped">
      <thead>
        <th>Nombre</th>
        <th>Departamento</th>
        <th></th>
      </thead>
      <tbody>
        <?php
        foreach ($Ciudades as $Ciudad) {
          $Dep = $query->ObtenerDep($Ciudad["Departamento"]);
        ?>
        <tr id="fila<?=$Ciudad['Id']?>">
          <td><?=$Ciudad["Nombre"]?></td>
          <td><?=$Dep?></td>
          <td class="text-right">
            <a  href="#modal-actualizar<?=$Ciudad['Id']?>" data-toggle="modal" class="btn btn-primary">Actualizar</a>
            <a href="#modal-eliminar<?=$Ciudad['Id']?>" data-toggle="modal" class="btn btn-danger">Eliminar</a>
            <!-- MODAL ELIMINAR -->
            <div class="modal fade" id="modal-eliminar<?=$Ciudad['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-left">
                    <h4>¿Seguro que desea eliminar esta ciudad?</h4>
                  </div>
                  <div class="modal-body">
                    <a data-dismiss="modal" onclick="Eliminar('ciudades', '<?=$Ciudad["Id"]?>');" class="btn btn-success">Aceptar</a>
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL ACTUALIZAR -->
            <div class="modal fade" id="modal-actualizar<?=$Ciudad['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                <!-- FORMULARIO -->
                  <form class="form" action="core/controllers/ciudades.controller.php" method="post">
                  <div class="modal-header text-left">
                    <h4>Actualizar departamento</h4>
                      <input type="hidden" name="M" value="2">
                      <input type="hidden" name="Id" value="<?=$Ciudad['Id']?>">
                      <div class="form-group">
                        <label for="nombre">Nuevo nombre</label>
                        <input type="text" name="Nombre" value="<?=$Ciudad['Nombre']?>" placeholder="Nuevo nombre" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="depaertamento" class="control-label">Departamento </label>
                        <select class="form-control" id="departamento" name="Departamento">
                          <option value="<?=$Ciudad["Departamento"]?>"><?=$Dep?></option>
                          <?php

                          $Departamentos = $query->ListarDepto($Ciudad["Departamento"]);

                          foreach ($Departamentos as $Departament) {
                          ?>
                          <option value="<?=$Departament['Id']?>"><?=$Departament['Nombre']?></option>
                          <?php
                          }
                          ?>
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
