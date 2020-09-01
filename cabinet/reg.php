<?php

	setcookie('secret', $_GET['login'], time() + 365 * 30 * 24 * 60 * 60, "/");

	if( isset($_COOKIE['secret']) ) {
		$_COOKIE = $_GET['login'];
		header('Location: ../cabinet.php');
	} else {
		header('Location: ../sign.php');
	}
	