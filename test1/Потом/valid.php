<?php $log=$_POST['name'];$pas=$_POST['pas'];
	$link=mysqli_connect("localhost", "u1157881_st", "pasDatBas", "u1157881_bd");
	$sqlSel="SELECT * FROM `st_user` WHERE log = '".$log."' AND pas = '".$pas."'";
	$result = mysqli_query($link, $sqlSel);
$res=mysqli_num_rows($result);
if ($res>0){session_start(); $_SESSION['login']=$log; header('Location:https://schelcol-refork.ru/f.goryainov');
setcookie("log", $log);}else{header('Location:https://schelcol-refork.ru/f.goryainov/log/auth.php');}
?>