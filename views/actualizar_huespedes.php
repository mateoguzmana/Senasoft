<?php
require_once "core/models/huespedes.model.php";
$query = new Huespedes();
$Huespedes = $query->Listar();

?>
<section class="espacio-tablas">
  <div class="col-md-8 col-md-offset-2">
    <table class="table table-stripped">
      <thead>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th></th>
      </thead>
      <tbody>
        <?php
        foreach ($Huespedes as $Huesped) {
        ?>
        <tr>
          <td><?=$Huesped["Nombre"]?></td>
          <td><?=$Huesped["Apellidos"]?></td>
          <td class="text-right">
            <a href="#modal-actualizar<?=$Huesped['Id']?>" data-toggle="modal" class="btn btn-primary">Actualizar</a>
            <a href="#modal-eliminar<?=$Huesped['Id']?>" data-toggle="modal" class="btn btn-danger">Eliminar</a>
            <!-- MODAL ELIMINAR -->
            <div class="modal fade" id="modal-eliminar<?=$Huesped['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-left">
                    <h4>¿Seguro que desea eliminar este huesped?</h4>
                  </div>
                  <div class="modal-body">
                    <a data-dismiss="modal" onclick="Eliminar('huespedes', '<?=$Huesped["Id"]?>');" class="btn btn-success">Aceptar</a>
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL ACTUALIZAR -->
            <div class="modal fade" id="modal-actualizar<?=$Huesped['Id']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                <!-- FORMULARIO -->
                  <form class="form" action="core/controllers/huespedes.controller.php" method="post">
                    <input type="hidden" name="M" value="2">
                  <div class="modal-header text-left">
                    <h4>Actualizar departamento</h4>
                      <input type="hidden" name="M" value="2">
                      <input type="hidden" name="Id" value="<?=$Huesped['Id']?>">
                      <div class="form-group">
                        <label for="nombre">Nuevo nombre</label>
                        <input type="text" name="Nombre" value="<?=$Huesped['Nombre']?>" placeholder="Nuevo nombre" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nombre">Apellidos</label>
                        <input type="text" name="Apellidos" value="<?=$Huesped['Apellidos']?>" placeholder="Nuevo nombre" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nombre">Email</label>
                        <input type="text" name="Email" value="<?=$Huesped['Email']?>" placeholder="Nuevo nombre" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nombre">Telefono</label>
                        <input type="text" name="Tel" value="<?=$Huesped['Tel']?>" placeholder="Nuevo nombre" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nombre">Documento</label>
                        <input type="text" name="Documento" value="<?=$Huesped['Documento']?>" placeholder="Nuevo nombre" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nombre">Tipo Convenio</label>
                        <input type="text" name="TipoConvenio" value="<?=$Huesped['TipoConvenio']?>" placeholder="Nuevo nombre" class="form-control">
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
