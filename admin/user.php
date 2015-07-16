<?php
	include "../common/conn.php";
	
	$user = htmlspecialchars(stripslashes($_POST['user']));
	$pass = $_POST['pass'];
	$pass = md5($pass);
	$username = htmlspecialchars(stripslashes($_POST["username"]));
	$password = htmlspecialchars(stripslashes($_POST["password"]));
	$password = md5($password);
	
	if($user != "" && $pass != ""){
		$stmt = $dbh->query("SELECT id,username,password,flag FROM user WHERE username='$user'");
		$arr = $stmt->fetch(PDO::FETCH_NUM);
		if($arr['2'] != $pass || $arr['3'] != "0"){
			echo "can't"; 
		}else{
			
			$query = "INSERT INTO user (username,password) VALUES (?,?)";	
			$stmt = $dbh->prepare($query);
			
			$stmt->bindParam(1,$username,PDO::PARAM_STR);
			$stmt->bindParam(2,$password,PDO::PARAM_STR);
	
			$stmts = $dbh->query("SELECT id,username FROM user WHERE username='$username'");
			$arrs = $stmts->fetch(PDO::FETCH_NUM);
			
			if($arrs['0'] == ""){			
				if($username != "" && $password != ""){
					$stmt->execute();
					echo "true";
				}else{
					echo "false";
				}
			}
		}
	}else{
		echo 'error';
	}
?>