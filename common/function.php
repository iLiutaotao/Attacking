<?php
	function checklogin($username,$password){
		$user = $username;
		$pass = $password;
		$pass = md5($pass);
		$stmt = $dbh->query("SELECT id,username,password,flag FROM user WHERE username='$user'");
	
		$arr = $stmt->fetch(PDO::FETCH_NUM);
		if($arr['2'] != $pass){
			return false; 
		}else{
			return true;
		}
	}
?>