<?php 
$log =$_POST['login'];
$name = $_POST['name'];
$soap = $_POST['email'];
$pass = $_POST['pass'];
$link = mysqli_connect("localhost","root","fizztYLGZLlSPi9e","test_db");
$someth = "SELECT * FROM `users` WHERE email = '".$soap."' AND login = '".$log."'";
$res =mysqli_query($link,$someth);
$responce=mysqli_num_rows($res);
		if ($responce!==0){
			echo "Пиздец, кто-то занял оборону";
			header('location:http://localhost/test/sign-in/index.php');
			die();
		}
		else {			
		
		var_dump($responce);
		$new = ("INSERT INTO `users` (`login`,`name` ,`password`, `email`) VALUES ('".$log."','".$name."', '".$pass."', '".$soap."')" );
		mysqli_query($link,$new);
		session_start(); $_SESSION['login']=$log;
		setcookie("log23", $log, time() + 3600 * 24 * 360, "/" );
	}
mysqli_close($link);

header("location:http://localhost/test/blog/index.php")
 
 ?>