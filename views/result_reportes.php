<?php
require_once "core/models/checkin.model.php";

$I           = $_REQUEST["I"];
$FechaInicio = $_REQUEST["F1"];
$FechaFin = $_REQUEST["F2"];

$query = new Checkin();
$Checkins = $query->Reportes($FechaInicio,$FechaFin);

$x = 0;

?>
<section class="espacio-tablas">
  <div class="col-md-8 col-md-offset-2">
    <table class="table table-stripped">
      <thead>
        <th>Huesped</th>
        <th>Check-in</th>
        <th>Check-out</th>
        <th></th>
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
          <td class="text-right">
            <a href="#" class="btn btn-primary">Ver detalles</a>
          </td>
        </tr>
        <?php
      }if($x==1){
        $p = 1;
      }else{?>
        <tr>
          <td colspan="4" class="text-center alert alert-danger">No se han encontrado resultados.</td>
        </tr>
      <?php
      }
        ?>
      </tbody>
    </table>
    <?php
    if($x==1){
    ?>
    <div class="pull-right">
      <a href="#" class="btn btn-default" title="Descargar"><span class="glyphicon glyphicon-arrow-down"></span></a>
      <a href="#" class="btn btn-success" title="Imprimir"><span class="glyphicon glyphicon-print"></span></a>
    </div>
    <?php
    }
    ?>
  </div>
</section>
