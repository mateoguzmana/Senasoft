<?php
require_once "../core/models/fincas.model.php";

$query = new Fincas();
$Fincas = $query->Listar();

?>
<table>
  <tr>
    <td>
      Reporte  historico fincas
    </td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>Razon</td>
    <td>Nit</td>
    <td>Direccion</td>
    <td>
      Ciudad
    </td>
    <td>
      Departamento
    </td>
    <td>
      Regional
    </td>
    <td>
      Capacidad
    </td>
  </tr>
  <?php
  foreach ($Fincas as $Finca) {
  ?>
  <tr>
    <td>
      <?=$Finca["Razon"]?>
    </td>
    <td>
      <?=$Finca["Nit"]?>
    </td>
    <td>
      <?=$Finca["Direccion"]?>
    </td>
    <td>
      <?=$Finca["Ciudad"]?>
    </td>
    <td>
      <?=$Finca["Departamento"]?>
    </td>
    <td>
      <?=$Finca["Regional"]?>
    </td>
    <td>
      <?=$Finca["Capacidad"]?>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
<script>
  window.print();
</script>
