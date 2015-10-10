<?php
include('header.php');

require_once('functions.php');

print_r($numeros);
echo "</br>";
echo count($numeros);
echo "</br>";
echo max($numeros);
echo "</br>";
echo min($numeros);
echo "</br>";
sort($numeros);
print_r($numeros);
echo "</br>";
$string = implode( " , ",$numeros);
echo $string;
echo "</br>";
$novo_array = explode(" , ", $string);
print_r($novo_array);
echo "</br>";
echo in_array(20 , $numeros);
include('footer.php');


 ?>
