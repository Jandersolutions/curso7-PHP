<?php
include('header.php');

$x = 10;
$y = 10;

//comparar
if($x == $y){
  echo "X e igual a Y";
}
//identico
$y = '10';
if($x === $y){
  echo "X e identico a y";
}
echo "</br>";
//operador maior
if($x > $y){
  echo " X e maior que Y";
}
echo "</br>";
//menor
if($x < $y){
  echo "X e menor que Y";
}
$x = 150;
$y = 100;
echo "</br>";
if($x <= $y){
  echo "X e menor igual a Y";
}
$y = 50;
$x = 100;
echo "</br>";
if($x >= $y){
  echo "X e maior igual a Y";
}
echo "</br>";
if($x <> $y){
  echo "X e diferente de Y";
}
include('footer.php');
 ?>
