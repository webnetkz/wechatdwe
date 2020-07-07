<?php

	session_start();
	require_once '../app/pdo.php';
	
	if(!empty($_POST['send'])) {
	
		$sqlLogin = 'SELECT login FROM users WHERE login = "'.$_POST['login'].'"';
		$resLogin = $pdo->query($sqlLogin);
		$resLogin = $res->fetch(PDO::FETCH_ASSOC);
		
		if($resLogin) {
			$_SESSION['msg'] = 'Пользователь с этим логином зарегистрирован';
		} else {
			if($_POST['pass'] == $_POST['passTwo']) {
				$sql = 'INSERT INTO users(login, pass) VALUES ("'.$_POST['login'].'", "'.$_POST['pass'].'")';
				$pdo->query($sql);
				$_SESSION['msg'] = 'Вы зарегистрированы, запомните логин и пароль!';
			} else {
				$_SESSION['msg'] = 'Пароли не совпадают!';
			}
		}
	}