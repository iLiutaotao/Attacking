<?php
	include "../common/conn.php";
	
	$user = htmlspecialchars(stripslashes($_POST['user']));
	$pass = $_POST['pass'];
	$pass = md5($pass);
	$stmt = $dbh->query("SELECT id,username,password,flag FROM user WHERE username='$user'");
	
	$arr = $stmt->fetch(PDO::FETCH_NUM);
	if($user != "" && $pass != ""){
		if($arr['2'] != $pass || $arr['3'] != "1"){
			echo "can't"; 
		}else{
			$query = "INSERT INTO user (username,password,flag) VALUES (?,?,?)";	
			$stmt = $dbh->prepare($query);
			$stmt->bindParam(1,$username,PDO::PARAM_STR);
			$stmt->bindParam(2,$password,PDO::PARAM_STR);
	
			$username = htmlspecialchars(stripslashes($_POST["username"]));
			$password = htmlspecialchars(stripslashes($_POST["password"]));
			$password = md5($password);
		
			if($username != "" && $password != ""){
				$stmt->execute();
				echo "true";
			}else{
				echo "false";
			}
		}
	}else{
		echo 'error';
	}
?>