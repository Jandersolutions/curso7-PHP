<?php ob_start(); ?>
<?php
function redirect($location){
    header("location: ". $location);
    exit;
}
redirect('debug.php');
include('header.php');


include('footer.php');
?>
<?php ob_end_flush(); ?>
