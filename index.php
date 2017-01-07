<?php
session_start();

if(!empty($_GET["view"])){
  $Pagina = $_GET["view"];
}

  include("views/header.php");
  if(!empty($_SESSION["Usuario"])){
    include("views/navbar.php");
    ?>
    <div class="row">
      <?php
      include "views/paute_izquierdo.php";
      ?>
      <div class="col-md-8">
        <div hidden id="madre">
        <?php
        if(empty($Pagina)){
          include("views/home.php");
        }else{
          include("views/".$Pagina.".php");
        }
        ?>
        </div>
      </div>
      <?php
      include "views/paute_derecho.php";
      ?>
    </div>

    <?php
    include("views/footer.php");
  }else{
    include("views/login.php");
  }

 ?>
