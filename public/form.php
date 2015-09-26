<?php
if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = $_POST['password'];

    //isset() - Informa se a variavel foi iniciada
    //empty() - Informa se a variavel e vazia
    //srtlen() - Retorna o tamanho da string

    if(!isset($username) || empty($username)){
        $message = "Usuario nao definido";
    }else{
        $message = "Logado como: ". $username;
    }

}else{
    $username = "";
    $message = "Por favor efetue login";
}
?>
<?php
include('header.php');

require_once('var.php');
require_once('validation.php');
?>
<?php echo "<h2>". $message."</h2>"; ?>
<content class="row">
    <div class="col-lg-4 col-sd-4 col-lg-push-4 well formulario">
<form class="form-group" action="form.php" method="post">
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
