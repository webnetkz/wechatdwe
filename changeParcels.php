<?php

	if(!isset($_COOKIE['secret'])) {
		header('Location: sign.php');
	}
	if(isset($_GET['track'])) {
		$track = trim($_GET['track']);
	} else {
		header('Location: sign.php');
	}

	require_once 'app/db/cs.php';
	$sql = 'SELECT * FROM dispatch WHERE qr_name = "'.$track.'"';
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
		text-align: left;
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

		<p style="font-size: 1.4em; color: white;">Данные посылки</p>
		<p style="font-size: 1.4em; color: white;"><?=$_SESSION['phone'];?></p>
		
				<p style="font-size: 1.4em; color: white;"><?php if(!empty($_SESSION['msg'])) { echo $_SESSION['msg']; unset($_SESSION['msg']);}?></p>
		
		<?php
		foreach($res as $v) {
			echo '<p>';
			echo '<button class="navBtn">';
			echo 'Трек номер: <span style="font-weight: 600;">'.$v['qr_name'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p>';
			echo '<button class="navBtn">';
			echo 'Статус посылки: <span style="font-weight: 600;">'.$v['status'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p>';
			echo '<button class="navBtn">';
			echo 'Дата отправки: <span style="font-weight: 600;">'.$v['fromDate'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p>';
			echo '<button class="navBtn">';
			echo 'Страна доставки: <span style="font-weight: 600;">'.$v['toCountrie'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p onclick="changeInput(this, `toCity`)">';
			echo '<button class="navBtn">';
			echo 'Город доставки: <span style="font-weight: 600;">'.$v['toCity'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p onclick="changeInput(this, `toAdres`)">';
			echo '<button class="navBtn">';
			echo 'Адрес доставки: <span style="font-weight: 600;">'.$v['toAdres'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p onclick="changeInput(this, `toContacts`)">';
			echo '<button class="navBtn">';
			echo 'Контакты получателя: <span style="font-weight: 600;">'.$v['toContacts'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p onclick="changeInput(this, `toPhone`)">';
			echo '<button class="navBtn">';
			echo 'Номер получателя: <span style="font-weight: 600;">'.$v['toPhone'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p>';
			echo '<button class="navBtn">';
			echo 'Вес посылки: <span style="font-weight: 600;">'.$v['mass'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p onclick="changeInput(this, `description`)">';
			echo '<button class="navBtn">';
			echo 'Описание посылки: <span style="font-weight: 600;">'.$v['description'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p onclick="changeInput(this, `price`)">';
			echo '<button class="navBtn">';
			echo 'Объявленная стоимость(￥): <span style="font-weight: 600;">'.$v['price'].'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p>';
			echo '<button class="navBtn">';
			echo 'Упаковка посылки: <span style="font-weight: 600;">'.$v['pack'].'</span>';
			echo '</button>';
			echo '</p>';
			
			if($v['photo'] == 'Фото') {
				$photo = 'Фото отчет';
			} else {
				$photo = 'нет';
			}
			
			echo '<p>';
			echo '<button class="navBtn">';
			echo 'Фото посылки: <span style="font-weight: 600;">'.$photo.'</span>';
			echo '</button>';
			echo '</p>';
			
			echo '<p onclick="changeInput(this, `kuaidi`)">';
			echo '<button class="navBtn">';
			echo 'KUAIDI: <span style="font-weight: 600;">'.$v['kuaidi'].'</span>';
			echo '</button>';
			echo '</p>';
		}
		
		?>
		
	</div>
	

	<script>
		function changeInput(elem, action) {
			
			let contentInput = elem.querySelector('button span').innerText;
			let fAll = document.createElement('form');
				fAll.style.marginTop = '10px';
				fAll.action = 'app/queries/changeParcel.php?track=<?=$track?>';
				fAll.method = 'POST';
			let fInp = document.createElement('input');
				fInp.value = contentInput;
				fInp.name = action;
			let fBtn = document.createElement('button');
				fBtn.innerText = 'Изменить';
			
			fAll.appendChild(fInp);
			fAll.appendChild(fBtn);
			
			if(elem.getAttribute('class') != 'openChange') {
			   elem.appendChild(fAll);
			}
			elem.classList.add('openChange');
			
			console.log(contentInput);
			console.log(elem.getAttribute('class'));
		}
	</script>
</body>
</html>