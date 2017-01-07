<?php
require_once "../core/models/checkin.model.php";

$I = $_REQUEST["I"];
$FechaInicio = $_REQUEST["F1"];
$FechaFin = $_REQUEST["F2"];



$query = new Checkin();
$Checkins = $query->ConsultaMultiple($I,$FechaInicio,$FechaFin);

if($I==1){
  $Tit = $query->TotalCostos($I,$FechaInicio,$FechaFin);
}

?>
<table>
  <tr>
    <td>
      <?php if($I==1) { ?> Reporte detallado ingresos <?php } else{?>
      Reporte detallado huespedes <?php }?>
    </td>
  </tr>
</table>
<?php
if($I==1){
?>
<table width="100%" border="1">
  <tr>
    <td>
      Huesped
    </td>
    <td>
      Check-in
    </td>
    <td>
      Check-out
    </td>
    <td>Gastos</td>
  </tr>
  <?php foreach ($Checkins as $Checkin) {
    if($Checkin["Checkout"]=="0000-00-00"){
    $Checkout = "Activo.";
    }else{
      $Checkout = $Checkin["Checkout"];
    }
  ?>
  <tr>
    <td>
      <?=$Checkin["Huesped"]?>
    </td>
    <td>
      <?=$Checkin["Checkin"]?>
    </td>
    <td>
      <?=$Checkout?>
    </td>
    <td>
      <?=$Checkin["Costo"]?>
    </td>
  </tr>
  <?php
  }?>
  <tr>
    <td>
      Total:
    </td>
    <td>
      <?=$Tit?>
    </td>
  </tr>
</table>
<?php } else{ ?>
  <table width="100%" border="1">
    <thead>
      <th>Huesped</th>
      <th>Check-in</th>
      <th>Check-out</th>
    </thead>
    <tbody>
      <?php
      foreach ($Checkins as $Checkin) {
      if(!empty($Checkin["Id"])){
        $x=1;
      }

      if($Checkin["Checkout"]=="0000-00-00"){
      $Checkout = "Activo.";
    }else{
      $Checkout = $Checkin["Checkout"];
    }
      ?>
      <tr>
        <td><?=$Checkin["Huesped"]?></td>
        <td><?=$Checkin["Checkin"]?></td>
        <td><?=$Checkout?></td>
      </tr>
      <?php } ?>
    </table>
<?php } ?>
<script>
  window.print();
</script>
