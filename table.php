<?php
include "dataBase.php";
// Выводим результат из БД
$sql = mysqli_query($conn, 'SELECT * FROM `Words`');
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['A word'].'</td>'.'<td>'. $result['Definition'].'</td>'.'</tr>';
  }
?>