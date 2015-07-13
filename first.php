<?php
	/* Android第一次打开文件生成token获取imei手机号传回数据库 
	   ?phonenumber=xx&imei=xxx&token=xx
	*/
	include "common/conn.php";
	
	$query = "INSERT INTO token (phonenumber,imei,token) VALUES (?,?,?)";
	$stmt = $dbh->prepare($query);
		
	$stmt->bindParam(1,$phonenumbere,PDO::PARAM_STR);
	$stmt->bindParam(2,$imei,PDO::PARAM_STR);
	$stmt->bindParam(3,$token,PDO::PARAM_STR);
		
	$phonenumber = htmlspecialchars(stripslashes($_POST["phonenumber"]));
	$imei = htmlspecialchars(stripslashes($_POST["imei"]));
	$token = htmlspecialchars(stripslashes($_POST["token"]));
	
	if($phonenumber != "" || $imei != "" || $token != ""){
		$stmt->execute();
	}else{
		echo "false";
	}
	
?>