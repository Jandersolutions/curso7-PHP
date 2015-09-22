<?php
include('header.php');

require_once('var.php');
require_once('functions.php');
?>
<h2>Link:<a href="page2.php?id=1&name=<?php echo urlencode($name);?>"><?php echo $link_2;?></a></h2>
<?php
include('footer.php');
 ?>
