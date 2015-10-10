<?php
include('header.php');

//require_once('functions.php');
for ($i=0; $i < 100; $i++) {
  if($i == 37) {
    break;
    //continue;
  }
  echo $i . " ";
}


include('footer.php');
 ?>
