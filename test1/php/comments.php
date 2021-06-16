<?php
$link = mysqli_connect("localhost","root","fizztYLGZLlSPi9e","test_db");
$sql = "SELECT * FROM `messages` ORDER BY `date`";
$res = mysqli_query($link,$sql);
if (!isset($_GET['add_message'])) {
if (mysqli_num_rows($res)>=1) {
	while ($out = mysqli_fetch_array($result)) {
		echo out['name']." | ".out['date']."<br>".$out['message']."<hr>";
	}
}
}
if (isset($_GET['add_message'])) {
	echo 	'<form action="comments.php method="post"><input type="text" name="name">
			<br><br>
			<input type="text" name "message"
			<br><br>
			<button name="submit">Отправить</button>
			</form>';
}
if (isset($_POST['submit'])) {
	// code...
	if (!empty($_POST['submit']) && !empty($_POST['message'])) {
		$sql = "INSERT INTO `messages` (`name`,`message`,) VALUES ('".$_POST['name']."','".$_POST['message']."')";
		$res = mysqli_query($link,$sql);			
		}
	}
?>