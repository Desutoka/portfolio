<?php 
$log =($_POST['login']);
$soap = $_POST['email'];
$pass = ($_POST['pass']);
$link = mysqli_connect("localhost","root","fizztYLGZLlSPi9e","test_db");
$someth = "SELECT * FROM `users` WHERE email = '".$soap."' AND login = '".$log."'";
$res =mysqli_query($link,$someth);
$responce=mysqli_num_rows($res);
		if ($responce>0){
			header('location:http://localhost/test/sign-in/index.php');
		}
		else {			
		}
		$new = ("INSERT INTO `users` (`login`, `password`, `email`) VALUES ('".$log."', '".$pass."', '".$soap."')" );
		mysqli_query($link,$new);
mysqli_close($link);
header("location:http://localhost/test/blog/index.php")
 
 ?>