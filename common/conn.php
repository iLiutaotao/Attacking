<?php
	$dsn = 'mysql:dbname=数据库名;host=127.0.0.1';
	$user = '用户名';
	$password = '密码要打码打码';
	try{
		$dbh = new PDO($dsn,$user,$password);
	} catch (PDOException $e) {
		echo 'Error' . $e->getMessage();
	}