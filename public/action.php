<?php
include('header.php');

require_once('var.php');
?>
<pre>
    <?php print_r($_POST);?>
</pre>
<?php
$username = $_POST["user"];
$password = $_POST['password'];
echo "<h3>"."O nome de usuario e: ".$username . " e a senha e: " . $password . "</h3>";
?>
<?php
include('footer.php');
?>
