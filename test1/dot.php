<?php 
$mysqli = new mysqli("localhost", "u1157881_st", "pasDatBas", "u1157881_bd");

$result = $mysqli->query('SELECT * FROM `st_user`');
while($row = mysqli_fetch_assoc($result))
{
    
    echo '<p>Запись id='.$row['id'].'. Текст: '.$row['log'].'. Пароль: '.$row['pas'].' . root: '.$row['data'].'</p>';
}

?>