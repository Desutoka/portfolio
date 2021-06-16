<?php
$log = $_POST['login'];
$pass = $_POST['pass'];
$link = mysqli_connect("localhost","root","fizztYLGZLlSPi9e","test_db");
$req = "SELECT * FROM `users` WHERE login = '".$log."' AND  password = '".$pass."'";
$res =mysqli_query($link, $req);
	$responce=mysqli_fetch_assoc($res);
	if (($responce['login']== $log) and($responce['password']==$pass) )
	{
		session_start(); $_SESSION['log23']=$log;
		setcookie("log23", $log, time() + 3600 * 24 * 360, "/" );
		var_dump($_COOKIE);
		header('location:http://localhost/test/blog/index.php');
}
else {
		mysqli_close($link);
		die();
}
mysqli_close($link);


?>
