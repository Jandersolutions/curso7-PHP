<?php
  $nome = 'Janderson';
  $nome .= ' Batista ';
  $nome .= ' Abreu';
  $flutuantes = '3.568932';
  $contas = array(
    'Janeiro' => 'Conta de agua',
    'Fevereiro' => 'Conta de luz',
    'Março' => 'Conta de telefone',
    'Agosto' => "$nome"
);
$contas_array = array(
  'Conta de agua',
  'Conta de luz',
  'Conta de telefone',
  'Janderson',
  array(
    'Conta de gaz',
    'Conta de luz'
  )
);
$contas_novas = [
  'Conta de agua',
  'Conta de luz',
  'Conta de telefone',
  'Janderson'
];
$numeros = array(10 ,60 ,30 ,20);

$variavel = 50;
define("CONSTANTE" , 50);

define("CUMPRIMENTO" , "Alô Mundo");

$var1 = NULL;
echo is_null($var1);
echo isset($var1);


  //echo "Meu nome e $nome";
  //echo "</br>";
  //echo 'Meu nome e '. $nome ;
?>
