<?php
include('header.php');

require_once('var.php');
?>
<content class="row">
    <div class="col-lg-4 col-sd-4 col-lg-push-4 well formulario">
<form class="form-group" action="action.php" method="post">
    <h4><i class="fa fa-user"></i>Usuario:</h4> <input type="text" class="form-control" name="user" value=""/>
    <br />
    <h4><i class="fa fa-key"></i>Senha:</h4> <input type="password" class="form-control" name="password" value=""/>
    <br />
    <input type="submit" class="btn btn-primary" name="submit" value="Enviar"/>
</form>
    </div>
</content>
<?php
include('footer.php');
?>
