<?php
	include "../common/conn.php";
	$username = htmlspecialchars(stripslashes($_POST['username']));
	$pass = $_POST['password'];
	$pass = md5($pass);
	$stmt = $dbh->query("SELECT id,username,password,flag FROM user WHERE username='$username'");
	
	$arr = $stmt->fetch(PDO::FETCH_NUM);
	if($arr['2'] != $pass){
		echo "false"; 
	}else{
		echo json_encode($arr,JSON_FORCE_OBJECT); 
	}
?>