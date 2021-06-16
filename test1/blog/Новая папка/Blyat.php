<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="comments" style="width: 50%; height: 200px; background-color: pink;">
	<table id='chatcontent' class="ipsDataList ipsDataList_reducedSpacing ipsLoading">
        <tr><th style="width: 140px;">Дата</th><th style="width: 140px; text-align: center;">Автор</th><th style="width: 200px;">Сообщение</th></tr>
<?php
//    while ($row = mysqli_fetch_array($res)) {
//      echo('<tr><td style="text-align: center;">'.$row['time'].'</td><td style="text-align: center;">'.$row['name'].'</td><td>'.$row['mess'].'</td></tr>');
    }
        ?>
</table>
	<form action="../php/comments.php" method="post">
		<input type="text" name="mess">
		<button type="submit" style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;">Send</button>
	</form>
</div>

</form>


</body>
</html>