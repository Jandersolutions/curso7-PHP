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


function calcula_idade($idade_recente){
  if($idade_recente < 18){
    echo "<h1>"."Voce e de menor! tem menos de 18 anos"."</h1>";
  }elseif($idade_recente >= 18){
    echo "<h1>"."Voce e de maior! bem vindo ao site!"."</h1>";
  }else{
    echo "<h1>"."Voce e de maior bem vindo ao site!"."</h1>";
  }
}


  //echo "Meu nome e $nome";
  //echo "</br>";
  //echo 'Meu nome e '. $nome ;
?>
