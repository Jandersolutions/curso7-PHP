<?php
$name  = "ID";
$value = 55;
$expire = time() + (60*60*24*7);
setcookie($name , $value , $expire);
include('header.php');

include('footer.php');