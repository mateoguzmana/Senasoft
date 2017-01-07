<?php
require_once "core/models/pautes.model.php";
$query = new Pautes();
$Pautes = $query->ListarIzquierdo();

?>
<div class="col-md-2" id="pauta-izquierda">
    <?php
    foreach ($Pautes as $Paute) {?>
    <div class="panel panel-info">
      <div class="panel-heading anuncio">
        <h5><a href="<?=$Paute['Url']?>" target="_blank"><?=$Paute["Nombre"]?></a></h5>
      </div>
      <div class="panel-body anuncio">
        <h6><?=$Paute["Descripcion"]?></h6>
      </div>
    </div>
    <?php
    }
    ?>
</div>
