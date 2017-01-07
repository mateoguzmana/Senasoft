<?php
if(!empty($_GET["E"])){

  $E = $_GET["E"];
  $Clase = "danger";
  $Clase2= "has-error";

}else{
  $Clase = "primary";
  $Clase2= "";
}

?>

<section id="login">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-<?=$Clase?>">
      <div class="panel-heading text-center">
        <h2>Iniciar sesión</h2>
      </div>

      <div class="panel-body">
        <form class="form <?=$Clase2?>" action="core/controllers/log.php" method="post">
        <div class="form-group">
          <label for="Usuario" class="control-label">Usuario </label>
          <input type="text" id="Usuario" name="Usuario" class="form-control" required autofocus>
        </div>
        <div class="form-group">
          <label for="login-password" class="control-label">Contraseña </label>
          <input type="password" id="login-password" name="Password" class="form-control" required>
          <?php
          if(!empty($E)){
          ?>
          <span class="help-block">Usuario o contraseña incorrecta</span>
          <?php
          }
          ?>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
</section>
