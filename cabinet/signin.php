<?php

	session_start();
	require_once '../app/pdo.php';
	
	if(!empty($_POST['send'])) {
	
		$sqlLogin = 'SELECT * FROM users WHERE login = "'.$_POST['login'].'"';
		$resLogin = $pdo->query($sqlLogin);
		$resLogin = $resLogin->fetch(PDO::FETCH_ASSOC);
		
		if($resLogin) {
			
			$pass = trim($_POST['pass']);
			$pass = htmlentities($pass);
			
			if($pass == $resLogin['pass']) {
				$_SESSION['login'] = $resLogin['login'];
				header('Location: ../cabinet.php');
			} else {
				$_SESSION['msg'] = 'Не верный пароль!';
				header('Location: ../signin.php');
			}

		} else {
			$_SESSION['msg'] = 'Пользователь с этим логином не зарегистрирован!';
			header('Location: ../signin.php');
		}
	}