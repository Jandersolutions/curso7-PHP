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
$id = 7;
$nome = "Imprenssa";
$ordem = "4";
$publicado = 1;


$consulta ="UPDATE categorias SET nome='{$nome}', ordem={$ordem}, publicado={$publicado}
            WHERE id={$id}";
$resultado = mysqli_query($conexao , $consulta);

if ($resultado && mysqli_affected_rows($conexao) == 1) {
    echo "<h1>"."Conexão realizada com sucesso!"."</h1>";
}else {die("<h1>"."Consulta ao banco de dados falhou: "."</h1>" ."<h4>". mysqli_error($conexao)."</h4>");
}

?>
<?php
mysqli_close($conexao);
?>



<?php include('footer.php'); ?>



