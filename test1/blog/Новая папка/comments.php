<?php
session_start();
$mess=$_POST['mess'];
$time = date("Y-m-d H:i:s");
$name = $_SESSION['login'];
$link = mysqli_connect("localhost","root","fizztYLGZLlSPi9e","test_db");
mysqli_set_charset($link,'utf-8');
`

?>