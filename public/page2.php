<?php
include('header.php');

require_once('var.php');
require_once('functions.php');
echo "<h2>";
echo "Link para: "."<a href=page1.php?id=2>".$link_1."</a>";
echo "</h2>";
echo "<hr/>";
print_r($_GET);
echo "<br/>";
echo "<h2>".$name."</h2>";
include('footer.php');
?>
