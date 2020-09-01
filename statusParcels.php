<?php

	session_start();

	if( !isset($_COOKIE['secret']) ) {
		header('Location: sign.php');
	}

	require_once 'app/db/cs.php';
	$sql = 'SELECT * FROM dispatch WHERE login = "'.$_COOKIE['secret'].'"';
	$res = $pdo->query($sql);
	$res = $res->fetchAll(PDO::FETCH_ASSOC);
	
	if(!$res) {
		$_SESSION['msg'] = 'У Вас нет посылок';
	}

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

<title>Авторизация ЛК DWE</title>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">

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
	.icons {
	  font-size: 1.5em;
	  color: rgb(155, 155, 155);
	  float: left;
	  padding-top: 0.15em;
	  outline: none;
    }
	
	.navBtn {
		border-radius: 3px;
		width: 80%;
		margin-left: 5%;
		border: 1px solid rgb(155, 155, 155);
		background-color: rgb(255, 255, 255);
	}
	
	.payment0 {
		background: red;
		color: white;
	}
	.payment1 {
		background: green;
		color: white;
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

	
	<div style="position: relative; top: 50px;" class="fff">

		<p style="font-size: 1.4em; color: white;">Статусы посылок</p>
				<p style="font-size: 1.4em; color: white;">
					<?php
						if( !empty($_SESSION['msg']) ) {
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
					?>
				</p>
		
		<?php
		foreach($res as $v) {
			echo '<p>';
			
				if($v['status'] == 'Новая') {
					echo '<button class="navBtn">';
				} else {
					echo '<button class="navBtn payment'.$v['payment'].'">';
				}
			
				echo $v['qr_name'];
				echo '</button>';
			echo '</p>';
			
			if($v['payment'] == 0 && $v['status'] != 'Новая') {
				echo '<p>';
					echo '<button class="navBtn" onclick="location.href = \'libwebtopay/payment.php?orderid='.$v['id'].'&mass='.$v['mass'].'&pack='.$v['pack'].'&photo='.$v['photo'].'&code='.$v['qr_name'].'&country='.$v['toCountrie'].'\'">';
					echo 'Оплатить';
					echo '</button>';
				echo '</p>';
			}
			
			echo '<p>';
			echo '<button class="navBtn" style="font-weight: 600; width: 40%;" onclick="location.href = \'changeParcels.php?track='.$v['qr_name'].'\'">';
			echo 'Редактировать</button>';

			echo '<button class="navBtn" style="font-weight: 600; width: 40%;" onclick="location.href = \'maps/start.php?track='.$v['qr_name'].'\'">';
			echo 'Отследить</button>';
			echo '</p><hr>';

			
		}
		
		?>
		
	</div>
	

	<script>

	</script>
</body>
</html>