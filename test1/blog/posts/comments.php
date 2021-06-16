<?php
session_start();

$mess=$_POST['mess'];
$login = $_COOKIE['log23'];
$time = date("Y-m-d H:i:s");
$_SESSION['current_time'] = $time;
$link = mysqli_connect("localhost","root","fizztYLGZLlSPi9e","test_db");
mysqli_set_charset($link,'utf-8');

mysqli_query($link, "INSERT INTO `messages` (`name`, `message`) VALUES ('".$login."', '".$mess."')");

header("Location:http://localhost/test/blog/posts/post.php");
exit();
?>
