<?php
include('header.php');

//require_once('functions.php');
$contato = 'email';
switch ($contato) {
  case 'celular' :
  case 'telefone':
  echo "Contato via telefone";
    break;
    case 'email':
    echo "Contato via email";
      break;
      case 'formulario':
      echo "Contato via formulario";
        break;
  default:
    echo "outras formas de contato";
    break;
}

include('footer.php');


 ?>
