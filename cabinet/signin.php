<?php

	session_start();
	require_once '../app/pdo.php';
	
	if(!empty($_POST['send'])) {
	
		$sqlLogin = 'SELECT * FROM users WHERE phone = "'.$_POST['phone'].'"';
		$resLogin = $pdo->query($sqlLogin);
		$resLogin = $resLogin->fetch(PDO::FETCH_ASSOC);
		
		if($resLogin) {
			
			$pass = trim($_POST['pass']);
			$pass = htmlentities($pass);
			
			if($pass == $resLogin['pass']) {
				header('Location: reg.php?login='.$resLogin['id'].'');
			} else {
				$_SESSION['msg'] = 'Не верный пароль!';
				header('Location: ../signin.php');
			}

		} else {
			$_SESSION['msg'] = 'Пользователь с этим номером не зарегистрирован!';
			header('Location: ../signin.php');
		}
	}