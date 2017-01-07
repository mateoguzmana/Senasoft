<?php
require_once "core/models/departamentos.model.php";
$query = new Departamentos();
$Departamentos = $query->Listar();

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
        foreach ($Departamentos as $Departamento) {
        ?>
        <tr id="fila<?=$Departamento['Id']?>">
          <td><?=$Departamento["Nombre"]?></td>
          <td class="text-right">
            <a href="#modal-actualizar<?=$Departamento['Id']?>" data-toggle="modal" class="btn btn-primary">Actualizar</a>
            <a href="#modal-eliminar<?=$Departamento['Id']?>" data-toggle="modal" class="btn btn-danger">Eliminar</a>
            <!-- MODAL ELIMINAR -->
            <div class="modal fade" id="modal-eliminar<?=$Departamento['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-left">
                    <h4>¿Seguro que desea eliminar este departamento?</h4>
                  </div>
                  <div class="modal-body">
                    <a data-dismiss="modal" onclick="Eliminar('departamentos', '<?=$Departamento["Id"]?>');" class="btn btn-success">Aceptar</a>
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL ACTUALIZAR -->
            <div class="modal fade" id="modal-actualizar<?=$Departamento['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                <!-- FORMULARIO -->
                  <form class="form" action="core/controllers/departamentos.controller.php" method="post">
                  <div class="modal-header text-left">
                    <h4>Actualizar departamento</h4>
                      <input type="hidden" name="M" value="2">
                      <input type="hidden" name="Id" value="<?=$Departamento['Id']?>">
                      <div class="form-group">
                        <label for="nombre">Nuevo nombre</label>
                        <input type="text" name="Nombre" value="<?=$Departamento['Nombre']?>" placeholder="Nuevo nombre" class="form-control">
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
