<?php include ('header.php'); ?>

<?php
$bd_host = "localhost";
$bd_usuario = "homestead";
$bd_senha = "secret";
$bd_nome = "carmelia_vinhos";
$conexao = mysqli_connect($bd_host , $bd_usuario , $bd_senha , $bd_nome);

if(mysqli_connect_errno()){
    die("Conexão ao banco de dados falhou " .
        mysqli_connect_error() .
        "( " . mysqli_connect_errno() . ")"
    );

}

$consulta = "SELECT * ";
$consulta .= "FROM categorias ";
$consulta .= "WHERE publicado=1 ";
$consulta .= "ORDER BY ordem ASC";
$resultado = mysqli_query($conexao, $consulta);

if(!$resultado){
    die("Consulta ao banco de dados falhou");
}

?>

<ul>
    <?php
while($categoria = mysqli_fetch_assoc($resultado)){
    ?>
    <li><a href="<?php echo $categoria["nome"].".html"; ?>"><?php echo $categoria["nome"]; ?></li>
    <?php
}
    ?>
</ul>
<?php
mysqli_free_result($resultado);

mysqli_close($conexao);
?>



<?php include('footer.php'); ?>



