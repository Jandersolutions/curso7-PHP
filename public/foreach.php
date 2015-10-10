<?php
include('header.php');

//require_once('functions.php');
$numeros = array(1,2,3,4,5,6,7,8,9);
foreach ($numeros as $numero) {
  echo "numero atual: " . $numero;
  echo "<br/>";
}
echo "<hr/>";
$meses = array(
  '1' => 'Janeiro',
  '2' => 'Fevereiro',
  '3' => 'Março',
  '4' => 'Abril',
  '5' => 'Maio',
  '6' => 'Junho',
  '7' => 'Julho',
  '8' => 'Agosto',
  '9' => 'Setembro',
  '10' => 'outubro',
  '11' => 'Novembro',
  '12' => 'Dezembro'
);
foreach ($meses as $mes => $nome_mes) {
echo $mes." e o mes de: ".$nome_mes;
echo "<br/>";
}
include('footer.php');
 ?>
