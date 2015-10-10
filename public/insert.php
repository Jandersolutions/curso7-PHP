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

$nome = "Contato";
$ordem = "6";
$publicado = 1;
$nome = mysqli_real_escape_string($conexao , $nome);

$consulta ="INSERT INTO categorias (nome , ordem , publicado)
            VALUES ('$nome' , {$ordem} , {$publicado} )";
$resultado = mysqli_query($conexao , $consulta);

if($resultado) {
    echo "<h1>"."Conexão realizada com sucesso!"."</h1>";
}else {die("<h1>"."Consulta ao banco de dados falhou: "."</h1>" ."<h4>". mysqli_error($conexao)."</h4>");
}

?>
<?php
mysqli_close($conexao);
?>



<?php include('footer.php'); ?>



