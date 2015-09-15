<?php
  include('header.php');

  require_once ('functions.php');
  $ano_nascimento = '1980';
  $ano_atual = '2015';
  $idade = $ano_atual - $ano_nascimento;
  echo '<h1>'.$idade.' anos!'.'</h1>';
  echo "</br>";
  echo round($flutuantes,2);
  include('footer.php');
?>
