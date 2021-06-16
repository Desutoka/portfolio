<<?php 
setcookie("log23", $log, time() - 3600 * 24 * 360, "/" );
header('location:http://localhost/test/blog/index.php');
 ?>