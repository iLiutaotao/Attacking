<?php
	include "../common/conn.php";
	$id = htmlspecialchars(stripslashes($_POST['id']));
	$stmt = $dbh->query("SELECT id,date,user,time FROM fuck WHERE id='$id'");
	
	$arr = $stmt->fetch(PDO::FETCH_NUM);
	echo json_encode($arr,JSON_FORCE_OBJECT); 
?>