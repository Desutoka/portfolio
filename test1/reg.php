<?php $log=$_POST['log'];$pas=$_POST['pas'];
if($_POST['pas']==$_POST['pasR'])
{
	$link=mysqli_connect("localhost", "u1157881_bd");
	$sqlSel="SELECT * FROM '' WHERE 'log' = '".$log."'";
	$resIf=mysqli_query($link, $sqlSel);
	// var_dump(mysqli_fetch_array($resIf));
    if(mysqli_fetch_array($reslf)>0){
    header('Location:https://schelcol-refork.ru/reg.php');
}
else{
$sql="INSERT INTO '' ('log', 'pas') VALUES ('".$log.", '".&pas."')";
$res=mysqli_query($link, $sql);
setcookie("log", $log);
header('Location:https://schelcol-refork.ru/chat.php');
}
}
else{
header('Location:https://schelcol-refork.ru/reg.php');
}
?>