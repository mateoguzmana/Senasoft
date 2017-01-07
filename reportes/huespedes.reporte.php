<?php
require_once "../core/models/huespedes.model.php";

$query = new Huespedes();
$Huespedes = $query->Listar();

?>
<table>
  <tr>
    <td>
      Reporte  historico huespedes
    </td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>Nombre</td>
    <td>Apellidos</td>
    <td>Cedula</td>
    <td>
      Email
    </td>
    <td>
      Telefono
    </td>
  </tr>
  <?php
  foreach ($Huespedes as $Huesped) {
  ?>
  <tr>
    <td>
      <?=$Huesped["Nombre"]?>
    </td>
    <td>
      <?=$Huesped["Apellidos"]?>
    </td>
    <td>
      <?=$Huesped["Documento"]?>
    </td>
    <td>
      <?=$Huesped["Email"]?>
    </td>
    <td>
      <?=$Huesped["Tel"]?>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
<script>
  window.print();
</script>
