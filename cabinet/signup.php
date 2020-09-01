<?php
	
	session_start();
	require_once '../app/pdo.php';
	
	if( !empty($_POST['send']) ) {
	
		$sqlLogin = 'SELECT phone FROM users WHERE phone = "'.$_POST['phone'].'"';
		$resLogin = $pdo->query($sqlLogin);
		$resLogin = $resLogin->fetch(PDO::FETCH_ASSOC);
		
		if($resLogin) {
			$_SESSION['msg'] = 'Пользователь с этим номером зарегистрирован';
			header('Location: ../sign.php');
		} else {
			if($_POST['pass'] == $_POST['passTwo']) {
				$sql = 'INSERT INTO users(phone, pass, firstName, lastName) VALUES ("'.$_POST['phone'].'", "'.$_POST['pass'].'", "'.$_POST['firstName'].'", "'.$_POST['lastName'].'")';
				$pdo->query($sql);
				
				$lastId = 'SELECT * FROM users ORDER BY id DESC LIMIT 1';
				$resLastId = $pdo->query($lastId);
				$resLastId = $resLastId->fetch(PDO::FETCH_ASSOC);
				
				header('Location: reg.php?login='.$resLastId['id'].'');
			} else {
				$_SESSION['msg'] = 'Пароли не совпадают!';
				header('Location: ../sign.php');
			}
		}
	}