<?php
	include "../common/conn.php";
	$query = "INSERT INTO atk (date,user) VALUES (?,?)";
		
	$stmt = $dbh->prepare($query);
	$stmt->bindParam(1,$date,PDO::PARAM_STR);
	$stmt->bindParam(2,$username,PDO::PARAM_STR);
	
	$date = htmlspecialchars(stripslashes($_POST["date"]));
	$username = htmlspecialchars(stripslashes($_POST["username"]));
	
	if($date != "" && $username!= ""){
		$stmt->execute();
		echo "true";
	}else{
		echo "false";
	}
		
?>