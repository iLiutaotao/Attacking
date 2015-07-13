<?php
	include "common/conn.php";
	$query = "INSERT INTO fuck (date,user) VALUES (?,?)";
		
	$stmt = $dbh->prepare($query);
	$stmt->bindParam(1,$date,PDO::PARAM_STR);
	$stmt->bindParam(2,$imei,PDO::PARAM_STR);
	
	$token = htmlspecialchars(stripslashes($_POST["token"]));
	$imei = htmlspecialchars(stripslashes($_POST["imei"]));
	$date = htmlspecialchars(stripslashes($_POST["date"]));
	
	if($token != "" && $imei != "" && $date != ""){
		$stmt->execute();
	}else{
		echo "false";
	}
	//$query = "SELECT token FROM token WHERE imei="$imei"";
	//$pdosattement = $dbh->query($query);
	//if ($token != $pdosattement['token'] ){
		//exit();
	//} else{
		//include "writefuck.php";
	//}
?>