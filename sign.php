<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Регистрация/Авторизация ЛК DWE</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

<!-- Main css -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

<style>
.h1 {
	text-align: center;
	color: rgb(2, 172, 253);
}
.blockW {
		margin-left: 2%;
	width: 96%;
	border-radius: 20px;
	background-color: rgb(255, 255, 255);
	padding-top: 15px;
	box-shadow: 0 0 10px rgb(99, 99, 99);
}
.pp {
	font-size: 1.1em;
	text-align: center;
	padding: 10px;
}
hr {
	border-color: rgb(2, 172, 253);
}
.country {
	text-align: left;
}
.country > img {
	height: 90px;
}
body {
		background: rgb(2, 172, 253);
    font-family: 'Work Sans', sans-serif;
    font-style: normal;
		font-weight: 300;
    overflow-x: hidden;
}
nav.navigation {
      display: flex;
      justify-content: space-around;
			position: fixed;
			z-index: 999999;
			width: 100vw;
			top: 0;
			height: 2.6em;
			box-shadow: 0 0 10px rgb(99, 99, 99);
			background: linear-gradient(89deg,#1697bf 3%,#68cef5 98%);
		}
		.navigationItem {
      display: inline-block;
    }
    .navigationIcon {
      margin-top: 0.1em;
	  font-size: 2.2em;
	  color: rgb(255, 255, 255);
    }
	
			.fff > p {
			text-align: center;
		}
		.inp {
			outline: none;
			border-radius: 6px;
			padding: 3px;
		}
	</style>
	
</head>
<body>
		<nav class="navigation">
			<div class="navigationItem">
        <i class="fa fa-arrow-circle-left navigationIcon" onclick="window.history.back()"></i>
			</div>
			<div class="navigationItem">
        <i class="fa fa-arrow-circle-right navigationIcon" onclick="window.history.forward()"></i>
			</div>
		</nav>

	
	<form action="../cabinet/sign/signup.php" method="POST" style="position: relative; top: 100px;" class="fff">
		<p style="font-size: 1.4em; color: white;"><?php if(!empty($_SESSION['msg'])) { echo $_SESSION['msg']; unset($_SESSION['msg']);}?></p>
		<p style="font-size: 1.4em; color: white;">Регистрация личного кабинета</p>
		<p style="font-size: 1em; color: white;">Это необходимо для контроля отправлений</p>
		<p><input type="text" placeholder="Логин" name="login" class="inp" required autocomplete="off"></p>
		<p><input type="password" placeholder="Пароль" name="pass" class="inp" required autocomplete="off"></p>
		<p><input type="password" placeholder="Повторите пароль" name="passTwo" class="inp" required autocomplete="off"></p>
		<p><input type="submit" name="send" value="Регистрация" class="btn"></p>
		<hr>
		<p style="font-size: 1em; color: white;">Если Вы зарегистрированы, то авторизуйтесь</p>
		<p>
			<button class="btn" onclick="location.href = 'signin.php'">Авторизация</button>
		</p>
	</form>
	


</body>
</html>