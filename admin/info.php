<?php
	include "../common/conn.php";
	$stmt = $dbh->query("SELECT id,date,user,time FROM fuck");
	$arr = $stmt->fetchALL(PDO::FETCH_NUM);
	echo json_encode($arr,JSON_FORCE_OBJECT);
?>