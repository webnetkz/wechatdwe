<?php

    $driver = 'mysql';
    $host = 'localhost:3306';
    $db_name = 'wechat';
    $db_user = 'admin';
    $db_pass = 'fepipe7611!!QQ';
    $charset = 'utf8';
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try{
        $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset",
        $db_user,
		$db_pass,
		$options);
    }catch(PDOException $e) {
        die("echo $e");
    }
